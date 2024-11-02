<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sorveteria Maranata - Logon de usuário</title>
	
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

    if (empty($_SESSION['adm']) || $_SESSION['adm']!=1){

      header('location:index.php'); 
    }
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Área administrativa</h2>
				
				
				<a href="formProduto.php">			
				<button class="btn btn-block btn-lg btn-primary">
					
					Incluir Produto
					
				</button>
					
				</a>
				
				<a href="lista.php">
				<button class="btn btn-block btn-lg btn-warning">
					
					Alterar / Excluir Produto
					
				</button>
				
				
				<button type="submit" class="btn btn-block btn-lg btn-success">
					
					Vendas
					
				</button>
				
				
				<a href="sair.php">
				<button type="submit" class="btn btn-block btn-lg btn-danger">
					
					Sair da àrea administrativa
					
				</button>
				
				
                </a>
				
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>