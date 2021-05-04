
<?php 
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php

session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('location: index.php');
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
    <title>db_Clientes</title>
</head>

<body>

    <?php

    require_once "./conexaoLogin.php";

    $query_select = "SELECT login FROM login";
    $select = $conexaoLogin->query($query_select);
    $array = $select->fetch_array(MYSQLI_NUM);
    // echo $array[0] . '<br>';

    require_once "./conexao.php";

    $sql = "SELECT id,nome,cpf,nascimento,email,filhos,pessoas,dataInicial,dataFinal,celular,
        quartos,suite FROM cadastro";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    $registros = [];

    if ($resultado->num_rows > 0) {

        while($row = $resultado->fetch_assoc()) {

            $registros[] = $row;
        }
    } else if ($conexao->error) {
        echo "Erro: " . $conexao->error;
    }

    if($_GET['excluir']) {

        echo $_GET['exluir'];

        $excluirSQL = "DELETE FROM cadastro WHERE id = ?"; // Isso que torna seguro para um hacker não colocar um inget p/ excluir as tabelas
        $stmt = $conexao->prepare($excluirSQL); // também proteção e o resto de baixo também.
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }
    

    // print_r($registros);

    // echo "<h1>" . $_GET['exluir'] . "</h1>";

    $conexao->close();

    ?>

    <header class="clienteheader">

        <img class="imgLogoClientes" src="./img/logo.png" alt="logo do hotel Mahal">

    </header>

    <nav class="navegacao">

        <span class="usuario">Usuário: <?= $array[0] ?></span>
        <a href="logout.php" class="vermelho btn btn-danger">Sair</a>

    </nav>

    <table class="table table-hover table-striped">

        <thead>

            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>nascimento</th>
            <th>Email</th>
            <th>Filhos</th>
            <th>Pessoas</th>
            <th>Data Inicial</th>
            <th>Data Final</th>
            <th>Celular</th>
            <th>Quartos</th>
            <th>Suíte</th>

        </thead>

        <tbody>

            <?php foreach ($registros as $registro) : ?>

                <tr>

                    <td><?= $registro['id'] ?></td>
                    <td><?= $registro['nome'] ?></td>
                    <td><?= $registro['cpf'] ?></td>
                    <td>

                        <?=

                        date('d/m/Y', strtotime($registro['nascimento']));

                        ?>

                    </td>
                    <td><?= $registro['email'] ?></td>
                    <td><?= $registro['filhos'] ?></td>
                    <td><?= $registro['pessoas'] ?></td>
                    <td>

                        <?=

                        date('d/m/Y', strtotime($registro['data']));

                        ?>

                    </td>
                    <td>

                        <?=

                        date('d/m/Y', strtotime($registro['data2']));

                        ?>

                    </td>
                    <td><?= $registro['celular'] ?></td>
                    <td><?= $registro['quartos'] ?></td>
                    <td><?= $registro['suite'] ?></td>

                    <td>
                
                    <a href="http://localhost/anima/clientesHotel.php?excluir=<?= $registro['id'] ?>"class="btn btn-danger">
                    
                        Excluir
                    
                    </a>
                
                </td>

                </tr>
                

            <?php endforeach ?>

        </tbody>

    </table>

    <style>
        th, td {
            text-align: center;
        }
    </style>


</body>

</html>