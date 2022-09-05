<?php

function pt($value)
{
    return "{$value} <br>";
}

$teste = 123;
//echo pt($teste);
//echo pt(12.5);
//echo pt('Algo');



/* usando mais de um parâmetro na função */
function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}

//echo sum(1, 2);


/* usando parâmetro opcional na função */
function sumTwo(int $n1, int $n2, int $taxa = 2): int
{
    return ($n1 + $n2) * $taxa;
}

echo sumTwo(1, 2, 4);
?>