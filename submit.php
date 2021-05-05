<?php

if (count($_POST) > 0) {

    $dados = $_POST;

    $erros = [];

    if (trim($dados['nome']) === "") {

        $erros['nome'] = 'Nome é obrigatório';
    }


    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    if ($_POST['nascimento'] === '') {

        $erros['nascimento'] = 'Preencha uma data';
    } else {
        $inteiro = intval($_POST['nascimento']);

        if ($inteiro > 2004) {
            $erros['nascimento'] =  'Você é menor de idade! Não pode alugar um quarto';
        }
    }


    if ($_POST['data'] === '') {

        $erros['data'] = 'Preencha uma data Inicial';
    };

    if ($_POST['data2'] === '') {

        $erros['data2'] = 'Preencha uma data Final';
    };



    if (!count($erros)) {

        require_once "./conexao.php";
        require_once "./index.php";

        $sql = "INSERT INTO cadastro 
            (nome, cpf, nascimento, email, filhos, pessoas, dataInicial, dataFinal, celular, quartos, suite)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Suíte Palace')";

        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $dados['cpf'],
            $dados['nascimento'],
            $dados['email'],
            $dados['filhos'],
            $dados['pessoas'],
            $dados['data'],
            $dados['data2'],
            $dados['celular'],
            $dados['quartos'],
        ];

        // foreach($params as $param) {
        //     echo $param;
        // }

        $stmt->bind_param("ssssiisssi", ...$params);

        if ($stmt->execute()) {

            unset($dados);

            echo "<script language='javascript' type='text/javascript'>
                    alert('Reserva feita com sucesso');window.location.href='index.php';</script>";
        }
    }
} else {
    // echo "<h1>Preencha todo o formulário</h1>";
}

foreach ($erros as $erro) : ?>

    <div class="alert alert-danger col-md-4" role="alert">

        <?= $erro ?>

    </div>

<?php endforeach ?>