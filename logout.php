<?php

session_start();
session_destroy();

// Desloga total o usuario
unset($_COOKIE['usuario']);
setcookie('usuario', '');

header('location: index.php');