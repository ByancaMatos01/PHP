<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artiméticos</title>
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $s = $n1 + $n2;
    $media=($n1 + $n2)/2;
    echo "a soma vale ". ($n1+$n2);
    echo "<br>a divisão vale ". ($n1/$n2);
    echo "<br>a subtração vale ". ($n1-$n2);
    echo "<br>a multiplicação vale ". ($n1*$n2);
    echo "<br> o modulo vale ". ($n1%$n2);
    echo '<br> a media vale ' . $media;
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";

    ?>

</body>
</html>