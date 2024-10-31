<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
	
	?>
	
<div class="container-fluid">
	
	
	<div class="row" style="margin-block-start: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"> Data </div>
		<div class="col-sm-2"> Ticket </div>
		<div class="col-sm-5"> Produto </div>
		<div class="col-sm-1"> Quantidade </div>
		<div class="col-sm-2"> Preço </div>
				
	</div>		
	
	
</div>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>