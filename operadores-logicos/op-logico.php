<?php

$a = 2;
$b = 2;

/* Operador lógico AND */
if ($a == $b && $a == 3) {
    //echo 'No IF';
}else{
    //echo 'No ELSE';
}


/* Operador lógico OR */
if ($a != $b || $a == 3) {
    //echo 'No IF';
}else{
    //echo 'No ELSE';
}


if (($a == $b && $a == 3) || $b == 2) {
    //echo 'No IF';
}else{
    //echo 'No ELSE';
}


/* Operador lógico NOT */
if (!$a == 2) {
    echo 'No IF';
} else {
    echo 'No ELSE';
}

echo '<hr>';

if (!$b != 2) {
    echo 'No IF';
} else {
    echo 'No ELSE';
}

?>