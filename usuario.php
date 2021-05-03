<?php

require_once "./conexaoLogin.php";

$login = $_POST['nomeLogin'];
$senha = $_POST['senha'];

$query_select = "SELECT login FROM login";
$query_senha = "SELECT senha FROM login";
$select = $conexaoLogin->query($query_select);
$select_senha = $conexaoLogin->query($query_senha);
$array = $select->fetch_array(MYSQLI_NUM);
$arraySenha = $select_senha->fetch_array(MYSQLI_NUM);


foreach($usuarios as $usuario) {
    $emailValido = $login === $array[0];
    $senhaValida = $senha === $arraySenha[0];

    if($emailValido && $senhaValida) {
        $_SESSION['erros'] = null;
        $_SESSION['usuario'] = $array[0];
        $exp = time() + 60 * 60 * 24 * 30;
        setcookie('usuario', $array[0], $exp);
        header('Location: login.php');
    }
}

if(!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['Usuário/Senha inválido!'];
}