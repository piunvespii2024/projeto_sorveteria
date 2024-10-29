<?php
include 'conexao.php';

$recebe_email = $_POST['email'];
$consulta = $conexao->query("SELECT nome, senha, email FROM usuarios WHERE email='$recebe_email'");

if ($consulta->rowCount() == 0) {
    header('location:erro2.php');
} else {
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    $recebe_nome = $exibe['nome'];
    $recebe_senha = $exibe['senha'];

    include 'class.phpmailer.php';
    include 'class.smtp.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 2;

    // Configurações do servidor de email
    $mail->Host = 'smtp.github.com'; // Servidor de email do GitHub
    $mail->Port = 587; // Porta do servidor
    $mail->SMTPSecure = 'tls'; // Tipo de segurança
    $mail->SMTPAuth = true; // Autenticação SMTP
    $mail->Username = "seuemail@github.com"; // Seu email do GitHub
    $mail->Password = "seutoken"; // Seu token de acesso pessoal

    // Configurações do email
    $mail->setFrom('seuemail@github.com', 'Sorveteria Maranata');
    $mail->addReplyTo('seuemail@github.com', 'Sorveteria Maranata');
    $mail->addAddress($recebe_email, $recebe_nome);
    $mail->Subject = 'Recuperação de Senha || Sorveteria Maranata';
    $mail->msgHTML('Sua Senha na Sorveteria Maranata é: ' . $recebe_senha);

    // Opções de SMTP para permitir certificados não seguros
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if (!$mail->send()) {
        echo "ERRO::::: " . $mail->ErrorInfo;
    } else {
        header('location:ok2.php');
    }
}
?>
