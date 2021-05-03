<?php

    $banco = 'LoginHotel';
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = 'root';

    $conexaoLogin = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexaoLogin->connect_error) {
        die('Erro: ' . $conexaoLogin->connect_error);
    }
