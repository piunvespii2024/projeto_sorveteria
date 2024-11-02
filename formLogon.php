<!doctype html>
<html lang="pt-BR">
<head>

</title>Sorveteria Maranata - Logon de usuário</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	
<style>

.navbar{
	margin-block-end: 0;
}
	
	
</style>
</head>

<body>
  

<?php
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Logon de Usuário</h2>

                                 <form method="post" action="validaUsuario.php" name="logon">

					<div class="form-group">
				
						<label for="email">Email</label>
						<input name="email" type="email" class="form-control" required id="email">
					</div>
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="senha" type="password" class="form-control" required id="senha">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-ok"> Entrar</span>
					
				</button>
				</form>
				   <a href="formUsuario.php">
				<button type="submit" class="btn btn-lg btn-link">
					
					Ainda não sou cadastrado
					
				</button>
				    </a>
					
					<a href="esqueciSenha.php">
				<button type="submit" class="btn btn-lg btn-link">
					
					Esqueci minha senha
					
				</button>
				    </a>

			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>

</body>
</html>