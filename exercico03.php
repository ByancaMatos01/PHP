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
    /*
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2) / 2;
    echo "a media da nota1 é  $nota1 <br> a media da nota2 é $nota2 é <br> Sua media é "
     . $m ;
    $sit=($m<6)?"Reprovado":"Aprovado";
    echo "<br>A situação do aluno é " . $sit;
*/
$nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2) / 2;
    echo "a nota  da p1 é  $nota1 <br> a nota da p2 é $nota2 é <br> Sua media é "
     . $m ;
    echo "<br>A situação do aluno é " . (($sit=($m<6)?"Reprovado":"Aprovado"));
    ?>

</body>
</html>