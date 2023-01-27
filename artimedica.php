<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parte 2</title>
</head>
<body>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2> Valores recebidos: $v1 e $v2 </h2>";
    echo "<br> o valor absoluto é de $v2 é " . abs($v2);
    echo "<br> O valor de $v1 <sup> $v2</sup> é ".pow($v1, $v2);
    echo "<br> A raiz de $v1 e ".sqrt($v1);
    echo"<br> o valor arredondado é de $v2 é " .round($v2);
    echo "<br> A parte inteira de $v2 é " . intval($v2);
    echo "<br> O valor de $v1 em moeda é R$" . number_format($v1, 2,".",",");

    ?>
</body>
</html>