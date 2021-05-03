<?php

if(count($_POST)) {

$dados = $_POST;

$erros = [];

if(trim($dados['nome']) === "") {

    $erros['nome'] = 'Nome é obrigatório';
}


if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
    $erros['email'] = 'Email inválido';
}

if($_POST['nascimento'] === '') {

    $erros['nascimento'] = 'Preencha uma data';
}else {
    $inteiro = intval($_POST['nascimento']);

    if($inteiro > 2004) {
        $erros['nascimento'] =  'Você é menor de idade! Não pode alugar um quarto';
    }

}


if($_POST['data'] === '') {

    $erros['data'] = 'Preencha uma data Inicial';
};

if($_POST['data2'] === '') {

    $erros['data2'] = 'Preencha uma data Final';
};

if (!count($erros)) {
    echo "<script language='javascript' type='text/javascript'>
         alert('Reserva feita com sucesso');window.location.href='palace.php';</script>";
}


}else {
// echo "<h1>Preencha todo o formulário</h1>";
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/512b1b950e.js"></script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Suíte Palace</title>
</head>

<body>

    <div class="containerSuite">

        <div class="logoHotel">

            <div class="form-row">

                <img class="imgLogo" src="./img/logo.png" alt="logo do hotel Mahal">

            </div>

        </div>

        <div class="formHotel">

            <form action="#" method="POST" id="myForm">

                <div class="form-row">

                    <div class="col-md-6">

                        <label for="nome">Nome</label>
                        <input class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" type="text" name="nome"
                            id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

                        <div class="invalid-feedback"><?= $erros['nome'] ?></div>

                    </div>

                    <div class="col-md-4">

                        <label for="cpf">CPF</label>
                        <input class="form-control <?= $erros['cpf'] ? 'is-invalid' : '' ?>" type="text" name="cpf"
                            id="cpf" placeholder="CPF - Somente os números" value="<?= $_POST['cpf'] ?>">

                        <div class="invalid-feedback"><?= $erros['cpf'] ?></div>

                    </div>

                    <div class="col-md-2">

                        <label for="nascimento">Nascimento</label>
                        <input class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" type="date"
                            name="nascimento" id="nascimento" placeholder="Nascimento"
                            value="<?= $_POST['nascimento'] ?>">

                        <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>

                    </div>

                </div>

                <div class="form-row">

                    <div class="col-md-4">

                        <label for="email">E-mail</label>
                        <input class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" type="text" name="email"
                            id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

                        <div class="invalid-feedback"><?= $erros['email'] ?></div>

                    </div>

                    <div class="col-md-2">

                        <label for="filhos">Filhos</label>
                        <input class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" type="number"
                            name="filhos" id="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">

                        <div class="invalid-feedback"><?= $erros['filhos'] ?></div>

                    </div>

                    <div class="col-md-2">

                        <label for="pessoas">Pessoas</label>
                        <input class="form-control <?= $erros['pessoas'] ? 'is-invalid' : '' ?>" type="number"
                            name="pessoas" id="pessoas" placeholder="Pessoas" value="<?= $_POST['pessoas'] ?>">

                        <div class="invalid-feedback"><?= $erros['pessoas'] ?></div>

                    </div>

                    <div class="col-md-2">

                        <label for="data">Data Inicial</label>
                        <input class="form-control <?= $erros['data'] ? 'is-invalid' : '' ?>" type="date" name="data"
                            id="data" placeholder="Data" value="<?= $_POST['data'] ?>">

                    </div>

                    <div class="col-md-2">

                        <label for="data2">Data Final</label>
                        <input class="form-control <?= $erros['data2'] ? 'is-invalid' : '' ?>" type="date" name="data2"
                            id="data2" placeholder="Data Final" value="<?= $_POST['data2'] ?>">

                        <div class="invalid-feedback"><?= $erros['data2'] ?></div>

                    </div>

                </div>

                <div class="form-row">

                    <div class="col-md-3">

                        <label for="celular">Celular</label>

                        <input class="form-control <?= $erros['celular'] ? 'is-invalid' : '' ?>" type="text"
                            name="celular" id="celular" placeholder="Celular - Somente os números"
                            value="<?= $_POST['celular'] ?>">

                        <div class="invalid-feedback"><?= $erros['celular'] ?></div>

                    </div>


                    <div class="col-md-3">

                        <label for="quartos">Quartos</label>
                        <input class="form-control <?= $erros['quartos'] ? 'is-invalid' : '' ?>" type="number"
                            name="quartos" id="quartos" placeholder="Quantidade de quartos"
                            value="<?= $_POST['quartos'] ?>">

                        <div class="invalid-feedback"><?= $erros['quartos'] ?></div>

                    </div>

                    <div class="col-md-2 suite">
                        <input class="form-control" type="text" disabled placeholder="Suíte Dream">
                    </div>


                </div>

                <div class="form-row">

                    <input class="btnSuiteReservar" type="submit" value="Reservar" />

                </div>

            </form>

            <a class="btnVoltar btn btn-danger" href="index.php">Voltar</a>


        </div>

    </div>



</body>

</html>