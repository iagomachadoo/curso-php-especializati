<?php

$cart = ['arroz', 'sabão', 'feijão', 'maçã'];
//var_dump($cart);

$cart2 = [
    0 =>'arroz', 
    1 => 'sabão', 
    2 => 'feijão', 
    3 => 'maçã',
];

//echo '<hr>';



//ordem decrescente
//quando houver chave e valor, a ordenação é feita em relação aos valores
arsort($cart);
//var_dump($cart);

//echo '<hr>';

//echo '<pre>';
arsort($cart2);
//var_dump($cart2);
//echo '</pre>';

//echo '<hr>';



//ordem crescente
//quando houver chave e valor, a ordenação é feita em relação aos valores
$cart = ['arroz', 'sabão', 'feijão', 'maçã'];
//var_dump($cart);

//echo '<hr>';

asort($cart);
//var_dump($cart);



//ordem crescente das chaves e dos valores
$cart = ['arroz', 'sabão', 'feijão', 'maçã'];
//var_dump($cart);

//echo '<hr>';

sort($cart);
//var_dump($cart);



//retornando o último item do array
$ages = [12, 14, 18, 20, 22, 24, 50, 60, 68];

//echo $ages[count($ages) - 1];//a função count() retorna o tamanho do array, mas somente ela retornará um erro porque o último item nesse caso é o 9, contudo o último item está na posição 8, então count($age) - 1 retornará o item na posição 8, ou seja, o último

//echo '<hr>';

//echo end($ages);//a função end() retorna o último item do array nativamente



//filtrando valores de um array

//array_filter()
$agesFiltered = array_filter($ages, function($age){
    return $age >= 18;
});

//var_dump($agesFiltered);



//array_map()
$names = ['Carlos', 'EspecializaTi', 'Company'];

$names = array_map(function($name){
    return strtoupper($name);
}, $names);

//var_dump($names);

//dessa forma é possível reutilizar a função
$names2 = ['Carlos', 'EspecializaTi', 'Company'];

$names2 = array_map('applyToupper', $names2);

function applyToupper($value){
    return strtoupper($value);
};

var_dump($names2);
