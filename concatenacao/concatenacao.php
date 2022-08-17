<?php

$var1 = 'Algo';
$var2 = 'Outro';
$var3 = $var1 . ' ' . $var2;

echo $var1 . ' ' . $var2;

echo '<hr>';

echo $var3;

echo '<hr>';

$name = 'Carlos Ferreira';
$company = 'EspecializaTi';

echo "O {$name} é fundador da empresa: {$company}";//o aconselhável a ser fazer na concatenação é o uso das aspas duplas e a variáveis dentro das chaves

//Dica: quando for imprimir e tiver que concatenar algo que tenha variáveis, usar as aspas duplas, mas quando for imprimir um valor que não tenha variáveis, utilizar aspas simples
?>