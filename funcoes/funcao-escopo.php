<?php
/* Para usar uma variável que esteja no escopo global dentro de uma função, deve-se utilizar a palavra reservada global -var- */

/* Para retornar mais de um valor em uma função, deve-se retornar um array com os valores desejados */

/* a execução de uma função para no return, então o que estiver abaixo dele não será executado */

$taxa = 2;

function sum(int $num1, int $num2):array
{
    global $taxa;

    $teste = 123;

    $soma = ($num1 + $num2) * $taxa;

    return [
        'teste' => $teste,
        'soma' => $soma,
    ];
}

//echo $teste;
//echo sum(2, 3);

$resultado = sum(2, 3);//o ideal para recuperar os valores de uma função retornando um array, é armazenar esse retorno em uma variável e depois acessar a posição desejada

var_dump($resultado);//array completa
echo '<hr>';

var_dump($resultado['teste']);//posição desejada
echo '<hr>';

var_dump($resultado['soma']);//posição desejada
?>