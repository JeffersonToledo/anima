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

// echo $arraySenha[0] . '<br>';
// echo $array[0] . '<br>';


if (
    $login === '' || $login === null || $login != $array[0] ||
    $senha === '' || $senha === null || $senha != $arraySenha[0]
) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
} else {

    if ($login == $array[0] && $senha == $arraySenha[0]) {

        session_start();

        $usuarios = [
            [
                "nome" => $login
            ]
        ];

        foreach ($usuarios as $usuario) {
            $nomeValido = $login == $usuario['nome'];

            if ($nomeValido) {
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                $exp = time() + 60 * 60 * 24 * 30;
                setcookie('usuario', $usuario['nome'], $exp);
                echo "<script language='javascript' type='text/javascript'>
                        window.location.href='clientesHotel.php';</script>";
            }
        }
    }
}
