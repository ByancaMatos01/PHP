<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operacoes</title>
</head>
<body>
    <h1>Exercicios 02</h1>
    
    <?php

    /* Esse exercicio e para pegar o ano anterior e o atual.
    */
    $atual = $_GET['aa'];// essa linha vai pegar o ano na URL 
    echo "O ano atual e $atual e o ano anteiro e  ".--$atual; # o que vai aparecer na tela 
    /* Exercicio de referenciar as variaveis
    tanto a e b. 
    */
    $a = 3;
    $b = & $a;
    $b += 5;
    echo"<br>o valor  de a é ". $a;
    echo"<br>o valor  de b é ". $b;
    ?>

</body>
</html>