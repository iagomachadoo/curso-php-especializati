<?php

/* Criando Cookie */
//1° parâmetro: nome do cookie
//2° parâmetro: valor do cookie
//3° parâmetro: tempo de expiração em segundos do cookie (opcional)
//4° parâmetro: caminho do cookie, ou seja, onde o cookie será armazenado (opcional)
//5° parâmetro: domínio em que o cookie foi gerado (opcional)
setcookie('cookie_teste', 'Teste Cookie');
setcookie('auth', 'OK', (time() + (7 * 24 * 60 * 60)));//Esse cookie vai expirar em 7 dias

echo $_COOKIE['cookie_teste'] . '<br>';
echo $_COOKIE['auth'];

?>