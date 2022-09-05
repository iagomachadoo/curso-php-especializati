<?php

$number = 14;

/* if($number == 12){
    echo 'Doze';

}elseif($number == 13){
    echo 'Treze';

}elseif($number == 14){
    echo 'Quartoze';

}elseif($number == 15){
    echo 'Quinze';

}else{
    echo 'Não identificado...';
} */

/* Quando for necessário fazer uma verificação em bloco que tenha sua estrutura maior, tendo a mesmo lógica de verificação, o switch se sai melhor nesses casos que o elseif(){} */

/* 
A variável pode ser ignorada, assim a estrutura ficaria 
    switch($var){
        case 12:
            echo 'Doze';
        break;
    } 

    */

switch ($number) {
    case $number == 12:
        echo 'Doze';
    break;

    case $number == 13:
        echo 'Treze';
    break;
    
    case $number == 14:
        echo 'Quartoze';
    break;

    case $number == 15:
        echo 'Quinze';
    break;

    default:
        echo 'Não encontrado...';
    break;
}


?>