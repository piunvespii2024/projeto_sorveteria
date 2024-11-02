<!doctype html>
<html lang="pt-BR">
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
    <style>.navbar{margin-block-end: 0;}</style>
    <script>
        $(document).ready(function(){
            $("#cep").mask("00 000-000");
            //$("#telefone").mask("(00) 0000-0000");

            $("#buscarCep").on("click", function() {
                var cep = $("#cep").val().replace(/\D/g, '');
                if (cep != "") {
                    var validacep = /^[0-9]{8}$/;
                    if(validacep.test(cep)) {
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                            } else {
                                alert("CEP não encontrado.");
                            }
                        });
                    } else {
                        alert("Formato de CEP inválido.");
                    }
                }
            });

            $("#limparCampos").on("click", function() {
                $("form")[0].reset();
                $("#cep").val('');
                $("#endereco").val('');
                $("#bairro").val('');
                $("#cidade").val('');
                $("#estado").val('');
                $("#numero").val('');
            });
        });
    </script>
</head>
<body>
    <?php include 'conexao.php'; include 'nav.php'; include 'cabecalho.html'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h2>Cadastro de novo Cliente</h2>
                <form method="post" action="inserirUsuario.php" name="logon">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" required id="nome">
                    </div>
                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input name="sobrenome" type="text" class="form-control" required id="sobrenome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control" required id="email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input name="senha" type="password" class="form-control" required id="senha">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <textarea name="endereco" rows="5" class="form-control" required id="endereco"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="numero">Número</label>
                        <input name="numero" type="text" class="form-control" required id="numero">
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input name="bairro" type="text" class="form-control" required id="bairro">
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input name="cidade" type="text" class="form-control" required id="cidade">
                    </div>
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input name="cep" type="text" class="form-control" required id="cep">
                        <button type="button" id="buscarCep" class="btn btn-default">Buscar</button>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input name="estado" type="text" class="form-control" required id="estado">
                    </div>
                    <button type="submit" class="btn btn-lg btn-default">
                        <span class="glyphicon glyphicon-pencil"> Cadastrar</span>
                    </button>
                    <button type="button" id="limparCampos" class="btn btn-lg btn-default">
                        <span class="glyphicon glyphicon-erase"> Limpar</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'rodape.html' ?>
</body>
</html>
