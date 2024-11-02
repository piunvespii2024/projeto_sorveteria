<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Sorveteria Maranata</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	
	.navbar{
		margin-block-end: 0;
	}
	
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();

	if (empty($_SESSION['id'])){

		header('location:formLogon.php');
	}
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	

	$id_user = $_SESSION['id'];

	$consultaVenda = $conexao->query("SELECT * FROM vendas
	WHERE id_comprador='$id_user' GROUP BY ticket");
	
	?>
	
<div class="container-fluid">
	
	<div class="row" style="margin-block-start: 15px;">

	<h1 class="text-center">Minhas compras</h1>

    </div>
	
	<div class="row" style="margin-block-start: 15px;">
		
		<div class="col-sm-1 col-sm-offset-5"><h4>Data</h4></div>
		<div class="col-sm-2"><h4>Ticket</h4></div>
				
	</div>		
	
	<?php 
	

	while ($exibeVenda=$consultaVenda->fetch(PDO::FETCH_ASSOC)){

		?>

<div class="row" style="margin-block-start: 15px;">
		
		<div class="col-sm-1 col-sm-offset-5"><?php echo date('d/m/Y',strtotime($exibeVenda['data']))
		; ?> </div>
		<div class="col-sm-2"><a href="ticket.php?ticket=<?php echo $exibeVenda['ticket'];?>">
		<?php echo $exibeVenda['ticket']; ?></a></div>

	</div>	
	<?php } ?>
</div>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>