<?php

$names = ['a', 'b', 'c', 'd', 'e', 'f'];

for ($i=0; $i <= 10; $i++) { 
    //echo "{$i} <br>";
}

echo '<hr>';

for ($i=10; $i >= 0; $i--) { 
    //echo "{$i} <br>";
}

echo '<hr>';

for ($i=0; $i < count($names); $i++) { 
    echo "{$names[$i]} <br>";
}

?>