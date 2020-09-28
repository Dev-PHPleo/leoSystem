<!DOCTYPE html>
<html>
	<head>
		<title>Imprimir</title>
	</head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <body>
    	<style type="text/css">
    		div{
    			border: 1px #000 solid;
    		}

            body {
                display:
            }
            
    	</style>



        <body onLoad="print()">

    	<div class="container">
    		<h4 text align="center">Listagem de Produtos</h4>
      		<div class="row">
        		<div class="col-sm-2">
                    <b>Nro Produto</b>
                </div>
    			<div class="col-sm-3">
                    <b>Nome Produto</b>
                </div>
    			<div class="col-sm-2">
                    <b>Categoria</b>
                </div>
    			<div class="col-sm-2">
                    <b>Quantidade</b>
                </div>
        		<div class="col-sm-3">
                    <b>Fornecedor</b>
                </div>
       		</div>
      			
      	    </div>

        <div class="container">


            <?php
            include 'conexao.php';
            $sql = "SELECT id_estoque, nroproduto, nomeproduto, quantidade, fornecedor, nome_categoria 
                  from estoque as e
                  left join categoria as c on e.id_categoria = c.id_categoria";

            $query = $pdo->query($sql);

            $produtos = $query->rowCount() > 0 ? $query->fetchAll(PDO::FETCH_OBJ) : [];

            // for = para, each = cada
            foreach ($produtos as $key => $produto) {

            ?>


    
    

            <div class="row">
                <div class="col-sm-2"> 
                    <?php echo $produto->nroproduto; ?> 
                </div>
                <div class="col-sm-3"> 
                    <?php echo $produto->nomeproduto; ?> 
                </div>
                <div class="col-sm-2"> 
                    <?php echo $produto->nome_categoria; ?> 
                </div>
                <div class="col-sm-2"> 
                    <?php echo $produto->quantidade; ?> 
                </div>
                <div class="col-sm-3"> 
                    <?php echo $produto->fornecedor; ?> 
                </div>
            </div>


            <?php }  ?> 
	
       </div>   
    


    <script type="text/javascript">   
     $(window).load(function() {
      //This execute when entire finished loaded
      window.print();
    });
    </script>                       
   



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>