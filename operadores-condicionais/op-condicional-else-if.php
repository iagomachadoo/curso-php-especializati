<?php

/* o resultado só pode cair dentro de uma condição e nunca em mais de uma. Para que isso aconteça, deverá ter um if fora dessa estrutura */

$numberOne = 12;

if($numberOne == 14){
    echo 'Quartoze';

}elseif($numberOne == 13){
    echo 'Treze';

}elseif($numberOne == 12){
    echo 'Doze';

}else{
    echo 'Não identificado...';
}

?>