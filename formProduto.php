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
	
<script src="jquery.mask.js"></script>

<script>
	
	
	
$(document).ready(function(){
	
$('#preco').mask('000.000.000.000.000,00', {reverse: true});	
	
});
	
</script>
	
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
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de produto</h2>
				
				<form method="post" action="incluiProduto.php" name="incluiProduto" enctype="multipart/form-data">
				
					<div class="form-group">
				
						<label for="produto">Produto</label>
						<input type="text" name="produto" class="form-control" required id="produto">
					</div>
				
				<div class="form-group">
					
					
					<label for="marca">Variedades</label>
					
					<select class="form-control" name="marca">
					  <option value="sorvete de Massa">Sorvete de Massa</option>
					  <option value="acai">Açaí</option>
					  <option value="sorvete de pote">Sorvete de Pote</option>
					  <option value="sorvete de palito">Sorvete de Palito</option>
					  <option value="refrigerante">Refrigerante</option>
					   <option value="OUTROS">OUTROS</option>
					</select>

			
					</div>
					
					
					
					<div class="form-group">
				
					<label for="departamento">Departamento</label>
					
					<select class="form-control" name="departamento">
					  <option value="MASSA">massa</option>
					  <option value="PALITO">palito</option>
					  <option value="POTE">pote</option>
					  <option value="OUTROS">outros</option>
					</select>

					</div>
					
					
					<div class="form-group">
				
					<label for="secao">Seção</label>
					
					<select class="form-control" name="secao">
					  <option value="MORANGO">morango</option>
					  <option value="ABACAXI AO VINHO">abacaxi ao vinho</option>
					  <option value="CHOCOLATE">CHOCOLATE</option>
					  <option value="NINHO_TRUFADO">Ninho Trufado</option>
					  <option value="REFRIGERANTE">refrigente</option>
					  <option value="OUTROS">OUTROS</option>
					</select>
						

					</div>
					
					
					<div class="form-group">
				
					<label for="descricao">Descrição</label>
					
						<textarea rows="5" class="form-control" name="descricao"></textarea>
						

					</div>
					
					
					
					<div class="form-group">
				
					<label for="quantidade">Quantidade</label>
					
					<input type="number" class="form-control" required name="quantidade" id="quantidade">

					</div>
					
					
					
					<div class="form-group">
				
					<label for="preco">Preço</label>
					
					<input type="text" class="form-control" required name="preco" id="preco">

					</div>
					
					
					<div class="form-group">
				
					<label for="foto1">Foto Principal</label>
					
					<input type="file" accept="image/*" class="form-control" required name="foto1" id="foto1">

					</div>
					
					<div class="form-group">
				
					<label for="foto2">Foto 2</label>
					
					<input type="file" accept="image/*" class="form-control" required name="foto2" id="foto2">

					</div>
					
					<div class="form-group">
				
					<label for="foto2">Foto 3</label>
					
					<input type="file" accept="image/*" class="form-control" required name="foto3" id="foto3">

					</div>
					
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar </span>
					
				</button>
				
				</form>
				
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>