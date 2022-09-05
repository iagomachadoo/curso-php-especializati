<?php
/* Utilizando o REQUEST - o REQUEST diferente do pos e get, não tem um tipo de requisição específica, como o POST que tem a requisição post e o GET a requisição get. O REQUEST é universal, mas é mais lento do que os demais, então deve ser com critério*/

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


/* echo("Nome: {$_POST['nome']}");
echo '<hr>';

echo("Senha: {$_POST['senha']}");
echo '<hr>';

echo("Email: {$_POST['email']}");
echo '<hr>';

echo("Concordo: {$_POST['concordo']}");
echo '<hr>';

echo("Sexo: {$_POST['sexo']}");
echo '<hr>';

echo("Estado: {$_POST['estado']}");
echo '<hr>';

echo("Descrição: {$_POST['descricao']}");
echo '<hr>'; */
?>