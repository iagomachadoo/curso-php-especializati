<?php

/* Uma função recursiva chama ela mesmo ou outra função. Esse tipo de função não é muito usual, mas há casos onde ela pode ser usada */

/* Nesse caso, toda vez que o método da função é chamado, a execução dele é reiniciada, semelhante a um loop. Então a var $numero será multiplicado por ele mesmo menos um até que o valor de $numero dentro do método seja igual a 1, finalizando a execução da função e retornado seu valor */

function fatorial(int $numero): int
{
    if($numero <= 1){
        $numero = $numero;

    }else{
        $numero *= fatorial($numero - 1);

    }

    return $numero;
}

echo fatorial(4);

?>