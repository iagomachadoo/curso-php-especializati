<?php

$number = 12;
$number2 = 14;
$number3 = 12;

if($number == 12){
    //echo 'É igual';
}

if($number == $number2){
    echo 'É igual';
}

if($number == $number3):
    echo 'É igual';

    echo "O número {$number} = {$number3}";

endif;/* o endif fecha o o if, mas ele não é muito utilizado, o normal é o fechamento com chaves if(){}; */

?>