<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Sorveteria Maranata</title>
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

           session_start();

           include 'conexao.php';
           include 'nav.php';
           include 'cabecalho.html';

           $consulta = $conexao->query('SELECT * FROM produtos');

       ?>
       
    <div class="container-fluid">
    <div class="row">
    <?php
    while ($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){
    
    ?>
      <div class="col-sm-3">
         
         <img src="upload/<?php echo $exibir['foto1'];?>" class="img-responsive" style="inline-size:100%">
         
         <div><h1><?php echo mb_strimwidth($exibir['produto'],0,22,'...');?></h1></div>
         <div><h4>R$ <?php echo number_format($exibir['preco'],2,',','.'); ?></h4></div>
      <div class="text-center">
      <a href="detalhes.php?id=<?php echo $exibir['id'];?>">
      <button class="btn btn-lg btn-block btn-info">
      <span class="glyphicon glyphicon-info-sign">Detalhes</span>
      </button> </a>
      </div>
      
      <div class="text-center" style="margin-block-start:5px;">
      <?php if ($exibir['quantidade']>0) {?>

    
      <a href="carrinho.php?id=<?php echo $exibir['id'];?>">
      <button class="btn btn-lg btn-block btn-success">
      <span class="glyphicon glyphicon-usd">Comprar</span>
      </button>

      </a>

      <?php } else { ?>
      <button class="btn btn-lg btn-block btn-danger" disabled>
      <span class="glyphicon glyphicon-ban-circle"> Indisponivel</span>
      </button>
      <?php } ?>
    </div>

    </div>

     <?php
     
    }

     ?>

    </div>
    </div>
    <?php
    
        include 'rodape.html';

    ?>
</body>
</html>