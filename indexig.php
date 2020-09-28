<?php
    $db = new PDO('mysql:host=localhost;dbname=testeigreja', 'root', null);

    $idIgrejaGet = $_GET['id'];
    $idTipoGet = $_GET['tipo'];


    // Pega o tipo da igreja (passada por get)
    switch ($idTipoGet) {
        case 1:
            $tipo = 'sede';
            break;
        case 2:
            $tipo = 'congregacao';
            break;
        case 3:
            $tipo = 'subcongregacao';
            break;
        default:
            die('Erro');
            break;
    }

    // pega a igreja
    $query_igreja = $db->query("SELECT * FROM {$tipo} WHERE id = {$idIgrejaGet}");
    $igreja = $query_igreja->fetch(PDO::FETCH_OBJ);

    //pega todas as igrejas 
    $query_igrejas = $db->query("SELECT {$tipo}.id as idIg, {$tipo}.nome, tipos.tipo as tipoNome 
                                FROM {$tipo} JOIN tipos ON tipos.id = {$tipo}.tipo");


    // Pega todos os tipos
    $query_tipos = $db->query("SELECT * FROM tipos");


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
            </tr>
            <?php while ($igrejaList = $query_igrejas->fetch(PDO::FETCH_OBJ)) :?>
            <tr>
                <td><?=$igrejaList->idIg?></td>
                <td><?=$igrejaList->nome?></td>
                <td><?=utf8_encode($igrejaList->tipoNome)?></td>
            </tr>
            <?php endwhile ?>
        </table>

        <form action="update.php" method='post'>
            <input type="text" name="nome" value='<?=$igreja->nome?>'>
            <select name="tipo" id="">
                <?php while ($tipo = $query_tipos->fetch(PDO::FETCH_OBJ)) : ?>
                    <?php if ($tipo->id == $igreja->tipo) :?>
                        <option value='<?=$tipo->id?>' selected> <?=utf8_encode($tipo->tipo)?> </option>
                    <?php else: ?>
                        <option value='<?=$tipo->id?>' > <?=utf8_encode($tipo->tipo)?> </option>
                    <?php endif?>
                <?php endwhile ?>
            </select>
            <input type="submit" value='Atualizar'>
        </form>
    </body>
</html>