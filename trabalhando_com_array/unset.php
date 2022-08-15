<?php

$cart = ['arroz', 'sabão', 'feijão', 'maçã'];
var_dump($cart);

unset($cart[1]);/* remove um item específico do array, mas caso o array seja passado sem índice, esse array será removido totalmente */
var_dump($cart);
