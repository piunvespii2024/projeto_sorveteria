<?php


include 'buscaCep.html';

                            
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cep = preg_replace("/[^0-9]/", "", $_POST['cep']); // Remove caracteres não numéricos
    $url = "https://viacep.com.br/ws/$cep/json/";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if (isset($data['erro'])) {
        echo "CEP não encontrado.";
    } else {
        echo "CEP: " . $data['cep'] . "<br>";
        echo "endereco: " . $data['endereco'] . "<br>";
        echo "Bairro: " . $data['bairro'] . "<br>";
        echo "Cidade: " . $data['localidade'] . "<br>";
        echo "Estado: " . $data['uf'] . "<br>";
    }
}
?>