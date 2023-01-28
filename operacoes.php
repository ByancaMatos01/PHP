<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operacoes</title>
</head>
<body>
    <h1>Exercicios 01</h1>
    <?php
    $preco = $_GET["p"];
    echo "O preco do produto é R$ ".number_format($preco,2);
    $preco += ($preco * 10 / 100);
    echo "<br> O novo preço com 10%  é  ".number_format($preco,2);
    echo"<br> O novo preço com 10% de desconto é " .number_format($preco,2);
    $preco -= ($preco * 10 / 100);

    ?>

</body>
</html>