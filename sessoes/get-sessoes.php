<?php

session_start();

/* Recuperando a variável de sessão */
//echo $_SESSION['name'];

/* Se a sessão auth não existir, o usuário será redirecionado para o arquivo set-sessoes.php */
if (!isset($_SESSION['auth'])) 
{
    header('Location:set-sessoes.php');

}

echo 'Painel de Adimin';

?>