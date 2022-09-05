<?php
/* É válido informar o tipo de retorno da função. Por exemplo, a função a baixo retorna uma string e foi especificado o tipo do retorno com :String. Essa especificação do retorno não altera em nada a função, é apenas uma boa prática */

function testFunction(): string
{
    return 'Sou uma função';
}

echo testFunction();

?>