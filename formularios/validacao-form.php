<?php

/* Verificando se o campo nome é igual a vazio ou se tem o tamanho menor ou igual a 3 */
if ($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) <= 3) 
{
    echo 'Insira um nome válido!';

    return;
}

if ($_REQUEST['senha'] == '' || strlen($_REQUEST['senha']) < 8) 
{
    echo 'Insira uma senha válida!';
    
    return;
}

if ($_REQUEST['email'] == '' || filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) 
{
    echo 'Insira um email válido!';
    
    return;
}

echo("Nome: {$_REQUEST['nome']}");
echo '<hr>';

echo("Senha: {$_REQUEST['senha']}");
echo '<hr>';

echo("Email: {$_REQUEST['email']}");
echo '<hr>';

echo("Concordo: {$_REQUEST['concordo']}");
echo '<hr>';

echo("Sexo: {$_REQUEST['sexo']}");
echo '<hr>';

echo("Estado: {$_REQUEST['estado']}");
echo '<hr>';

echo("Descrição: {$_REQUEST['descricao']}");
echo '<hr>';



?>