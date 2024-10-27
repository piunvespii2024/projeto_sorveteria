<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Documento sem título</title>
</head>
<body>
    <?php
    
      include 'conexao.php';
      $consulta = $conexao->query('SELECT * FROM produtos');
      while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
      
      
      echo $exibe['nome'].'<br>';
      echo $exibe['descricao'].'<br>';
      echo $exibe['departamento'].'<br>';
      echo $exibe['foto1'].'<br>';
      echo '------------------------------------'.'<br>';


      }
    
    ?>






</body>
</html>