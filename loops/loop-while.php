<?php
/* É muito utilizado quando desejamos fazer uma operação de forma automática */

$i = 1;

while ($i <= 10) {
    //echo "{$i} <br>";
    $i++;
}

$names = ['a', 'b', 'c', 'd', 'e', 'f'];
$i = 0;

while ($i < count($names)) {
    //echo "{$names[$i]} <br>";
    $i++;
}

/* o do...while é semelhante ao while, mas ele faz uma verificação primeiro antes de iniciar o loop, então o loop vai rodar sempre uma vez de início */

$a = 0;
do {
    echo "{$names[$a]} <br>";
    $a++;

} while ($a < count($names));

?>