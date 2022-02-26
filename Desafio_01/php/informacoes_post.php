<?php

    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $data = date_create($_POST["data"]);
    $vestibular = $_POST["vestibular"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

?>

<html>
    <head>
        <title>Reposta - POST</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilo_dados.css">
    </head>

    <body>
        <p>Nome: <?php echo $nome ?></p>
        <p>Apelido: <?php echo $apelido ?></p>
        <p>Data: <?php echo date_format($data,"d/m/Y") ?></p>
        <p>Vestibular: <?php echo $vestibular ?></p>
        <p>Gênero: <?php echo $genero ?></p>
        <p>Email: <?php echo $email ?></p>
        <p>Senha: <?php echo $senha ?></p>
    </body>
</html>