<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula07</title>
</head>
<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2023 - $ano;
    echo "quem nasceu em $ano tem a idade " . $idade;
    $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NAO OBRIGATORIO";
    echo "<br>E dessa forma seu voto e " . $tipo;
    ?>
    