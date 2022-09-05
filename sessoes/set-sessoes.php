<?php
/* As sessões servem para armazenar dados de um determinado arquivo para serem usados em outros. É muito usado em sistemas de login, carrinho de compras*/


/* Preparando um arquivo para trabalhar com sessões */
session_start();

/* Criando uma variável de sessão */
//$_SESSION['name'] = 'Iago da Silva';

/* Debugando o array $_SESSION */
//var_dump($_SESSION);

$_SESSION['auth'] = true;
?>