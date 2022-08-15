<?php
/* FORMAS DE CRIAR UM ARRAY */


//$nome = ['Calor', 'EspecializaTi', 'Company'];
//$nome2 = array('Calor', 'EspecializaTi', 'Company');

$name = 'Carlos';
$company = 'EspecializaTi';
$ano = 2022;


$infoCompany = [$name, $company, $ano];
//print_r($infoCompany); 

/* CRIANDO UM ARRAY COMO A FUNÇÃO COMPACT */


/* 
$infoCompany2 = compact('name', 'company', 'ano');//criando uma array a partir da função compact()
var_dump($infoCompany2); 
*/

//var_dump(is_array($name));//a função is_array verifica se uma variável e um array retornando true ou false
//var_dump(is_array($infoCompany));

//var_dump(in_array('Carlos', $infoCompany));//a função in_array verifica se um valor específico existe dentro de um array específico 