<?php
if (isset($_POST['cep'])) {
    $cep = preg_replace("/[^0-9]/", "", $_POST['cep']); // Remove caracteres não numéricos
    $url = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data['erro'])) {
        echo "CEP não encontrado.";
    } else {
        echo "Endereço: " . $data['logradouro'] . "<br>";
        echo "Bairro: " . $data['bairro'] . "<br>";
        echo "Cidade: " . $data['localidade'] . "<br>";
        echo "Estado: " . $data['uf'] . "<br>";
    }
} else {
    echo "Por favor, insira um CEP.";
}
?>
