<?php

	include 'conexao.php';

	//if (isset($_POST['Atualizar']))
 	//{
 		$id = $_POST['id'];
		$nomeproduto = $_POST['nomeproduto'];
		$categoria = $_POST['categoria'];
		$quantidade = $_POST['quantidade'];
		$fornecedor = $_POST['fornecedor'];

		try {
			//$pdo= new PDO('mysql:host=localhost;dbname=curso_estoque', $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $pdo->prepare('UPDATE estoque SET nomeproduto= :nomeproduto, categoria= :categoria, quantidade= :quantidade, fornecedor= :fornecedor WHERE id =:id ');
			$stmt->execute(array(
				
				':nomeproduto' =>$nomeproduto,
				':categoria' =>$categoria,
				':quantidade' =>$quantidade,
				':fornecedor' =>$fornecedor,
			));

			echo $stmt->rowCount();

			}	catch (PDOException $e) {
				echo "error" . $e->getMessage();
			}

			?>

		<!-- $sql = ("UPDATE estoque SET nomeproduto=[$nomeproduto], categoria='$categoria', quantidade='$quantidade' fornecedor='$fornecedor' WHERE id='$id' ");

		$stmt = $pdo->prepare("UPDATE estoque SET nomeproduto = :nomeproduto, categoria = :categoria, quantidade = :quantidade, fornecedor = :fornecedor WHERE id= :id");

		$stmt->bindValue(":nomeproduto" , $nomeproduto); 
		$stmt->bindValue(":categoria", $categoria); 
		$stmt->bindValue(":quantidade", $quantidade);
		$stmt->bindValue(":fornecedor", $fornecedor);
		$stmt->execute()
 -->





		<!-- $data = [

			'nomeproduto' => $nomeproduto,
			'categoria' => $categoria,
			'quantidade' => $quantidade,
			'fornecedor' => $fornecedor,
			'id' => $id, -->
		<!-- ];

		$sql = "UPDATE estoque SET nomeproduto=:nomeproduto, categoria=:categoria, quantidade=:quantidade WHERE id=:id";
		$stmt= $pdo->prepare($sql);
		$stmt->execute($data);*/ -->

		<!-- //$sql = "UPDATE estoque SET nomeproduto=?, categoria=?, quantidade=?, fornecedor=? WHERE id=$id";
		//$stmt = $pdo->prepare($sql);
		//$stmt->execute([$nomeproduto, $categoria, $quantidade, $fornecedor, $id]);

		//$res=$pdo->query('UPDATE estoque SET nomeproduto =[nomeproduto], categoria = :categoria, quantidade =:quantidade, fornecedor = :fornecedor WHERE id_estoque = :id' );
		/*$res->bindValue(":nomeproduto",$nomeproduto);
		$res->bindValue(":categoria",$categoria);
		$res->bindValue(":quantidade",$quantidade);
		$res->bindValue(":fornecedor",$fornecedor);
		$res->execute();		*/



		//$pdoQuery_run = $pdo->prepare('$pdo');
		//$pdoQuery_exec = $pdoQuery_run->execute(array(':nomeproduto'=>$nomeproduto, ":categoria"=>$categoria, ":quantidade"=>$quantidade, ":fornecedor"=>$fornecedor, ":id"=>$id));


		/*if ($pdoQuery_exec)  -->
		{
			echo '<script>alert("Atualizado")</script>';
		}
		else
		{
			echo '<script>alert("Não atualizado")</script>';

		}*/

	//}  



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<div class="container" style="width:400px"> 
<center>
    <h3>Produto Atualizado com Sucesso!!!</h3>
    <div style="margin-top: 10px">
    <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
    </div>
</center>

<!-- <script type="text/javascript">
	$(function(){
		Swal.showLoading()
		
		setTimeout(function(){
			Swal.fire({
			icon: 'success',
			title: 'Sucesso',
			text: 'Produto atualizado com sucesso',
			allowOutsideClick: false,
			timer: 1500,
			timerProgressBar: true,
			showConfirmButton: false
		}).then((result) => {
  			window.location = 'listar_produtos.php';
		}) 
		}, 1000);
	})
</script>
 -->


