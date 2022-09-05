<?php

/* o loop forEach é mais indicado pra ser usado iterando arrays */

$names = ['a', 'b', 'c', 'd', 'e', 'f'];

/* foreach ($variable as $key => $value) {
    # code...
}
$variable é o array
$key é a chave(índice)
$value é cada valor dentro do array
*/

foreach ($names as $name) {
    //echo "{$name} <br>";
}

foreach ($names as $key => $name) {
    echo "{$key} => {$name} <br>";
}

?>