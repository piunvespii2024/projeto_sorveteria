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
    $mail->Host = 'smtp.gmail.com'; // Servidor de email do Gmail
    $mail->Port = 587; // Porta do servidor
    $mail->SMTPSecure = 'tls'; // Tipo de segurança
    $mail->SMTPAuth = true; // Autenticação SMTP
    $mail->Username = "email@gmail.com
"; // Seu email do Gmail
    $mail->Password = "senha"; // Sua senha do Gmail

    // Configurações do email
    $mail->setFrom('emails@gmail.com
', 'Sorveteria Maranata');
    $mail->addReplyTo('email@gmail.com
', 'Sorveteria Maranata');
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
        echo "<html><script>location.href='ok2.php'</script></html>";
    }
}
?>
