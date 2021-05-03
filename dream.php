<?php



require_once "./conexao.php";
require_once "./index.php";

$sql = "INSERT INTO cadastro 
            (nome, cpf, nascimento, email, filhos, pessoas, dataInicial, dataFinal, celular, quartos, suite)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Suíte Dream')";

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

$stmt->bind_param("ssssiisssi", ...$params); // s - string (nome, data, email, site), i - inteiro (filhos).

if ($stmt->execute()) {

    unset($dados);

    echo "<script language='javascript' type='text/javascript'>
                    alert('Reserva feita com sucesso');window.location.href='index.php';</script>";
}
