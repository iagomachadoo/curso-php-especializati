<?php

$cart = ['arroz', 'sabão', 'feijão', 'maçã'];
var_dump($cart);

echo '<hr>';

array_unshift($cart, 'carne de boi');//add um elemento no inicio do array
var_dump($cart);

echo '<hr>';

array_push($cart, 'sabão');
var_dump($cart);

echo '<hr>';

$cart = array_unique($cart);//verificando se existe itens repetidos no array e os removendo
var_dump($cart);