<?php
/* Modificando a string entre maiúsculo e minúsculo */
$name = 'EspecializaTi';
$name2 = 'especializaTi - curso online de ti';
$name3 = 'ESPECIALIZATI';

//echo strtoupper($name);//converte os caracteres para maiúsculo

//echo '<hr>';

//echo strtolower($name);//converte os caracteres para minúsculo

//echo '<hr>';

//echo ucfirst($name2);//converte apenas a primeira letra para maiúsculo

//echo '<hr>';

//echo ucfirst(strtolower($name3));//converte os caracteres para minúsculo e depois deixando apenas a primeira letra em maiúsculo

//echo '<hr>';

//echo ucwords(strtolower($name2));//ucwords() - convertendo os caracteres para minúsculo e depois deixando as primeiras letras das palavras em maiúsculo





/* explode e implode */

//EXPLODE - divide uma string a partir de um separador e retorna uma array com as partes separadas
$estado = 'São Paulo/SP';
$arrayEstado = explode('/', $estado);

//var_dump($arrayEstado);

//echo '<hr>';

//echo $arrayEstado[0];

//echo '<hr>';

//echo $arrayEstado[1];

//echo '<hr>';

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);

//var_dump($arrayInfo);

//echo '<hr>';

//IMPLODE - transforma uma array em uma string adicionando um separador dentro da string
//echo implode(' # ', $arrayInfo);

//echo '<hr>';

$arrayTeste = [1, 2, 3, 4, 5];
//var_dump($arrayTeste);

//echo '<hr>';

//echo implode(' - ', $arrayTeste);





/* Limpando strings */
$name = ' EspecializaTi  ';

//var_dump($name);
//echo '<hr>';

//var_dump(ltrim($name));//Remove os espaços em branco do começo da string
//echo '<hr>';

//var_dump(rtrim($name));//Remove os espaços em branco do final da string
//echo '<hr>';

//var_dump(trim($name));//Remove os espaços em branco tanto do começo como do final da string





/* STR_REPLACE, SUBSTR, STRLEN */
$dominio = 'www.especializati.com.br';

//echo str_replace('www.', 'https://www.', $dominio);//str_replace() substitui partes de uma string. Contudo, esse método substitui todas as ocorrências do valor a ser substituído dentro da string

//echo '<hr>';

//echo substr($dominio, 0, 4);//substr() retorna uma parte da string a partir da posição passada

//echo '<hr>';

//echo substr($dominio, -7);//passando um valor negativo, a contagem começa da direita pra esquerda (do final pro começo)

//echo '<hr>';

//echo substr($dominio, 4, -7);//pegando apenas o domínio

//echo '<hr>';



$dominio2 = 'http://www.especializati.com.br';

$protocolo = substr($dominio2, 0, 7);
if($protocolo == 'http://'){
    //echo str_replace('http://', 'https://', $dominio2);
    //echo '<hr>';

}else{
    //echo 'É seguro!';
    //echo '<hr>';
}

//echo strlen($dominio2);//strlen() retorna a quantidade de caracteres de uma string






/* ISSET, UNSET */
//A função isset() verifica se uma variável existe
$nome = 'Iago';

if(isset($nome)){
    //echo $nome;
    //echo '<hr>';
}else{
    //echo 'Não existe';
    //echo '<hr>';
}

//A função unset() deleta uma variável, ou seja, apaga ela da memória
unset($nome);

if(isset($nome)){
    //echo $nome;
    //echo '<hr>';
}else{
    //echo 'Não existe';
    //echo '<hr>';
}




/* FUNÇÃO DATE() */
//echo date('Y');//retorno a ano(full) atual
//echo '<hr>';
//echo date('M');//retorna o mês por extenso
//echo '<hr>';
//echo date('D');//retorna o dia da semana

//echo '<hr>';
//echo date('D/M/Y');

//echo '<hr>';

//echo date('y');//retorno apenas os dois últimos dígitos do ano atual
//echo '<hr>';
//echo date('m');//retorna o mês em dígito
//echo '<hr>';
//echo date('d');//retorna o dia

//echo '<hr>';
//echo date('d/m/Y');
//echo '<hr>';

//echo date_default_timezone_get();//retorna o timezone 
date_default_timezone_set('America/Sao_Paulo');

//echo '<hr>';
//echo date_default_timezone_get();//retorna o timezone 
//echo '<hr>';

//echo 'Hora atual: '. date('H');//hora em formato 24h
//echo '<hr>';

//echo 'Hora atual: '.date('h');//hora em formato 12h
//echo '<hr>';

//echo 'Minuto atual: '.date('i');//pega os minutos
//echo '<hr>';

//echo 'Segundo atual: '.date('s');//pega os segundos
//echo '<hr>';

//echo 'Hora atual: '.date('H:i:s');//pega os segundos
//echo '<hr>';



/* FUNÇÃO PARA ANALISAR OS RECURSOS DO AMBIENTE DE DESENVOLVIMENTO */
//phpinfo();



/* CRIPTOGRAFIA */
//MD5() gera um hash de 32 caracteres utilizando um algoritmo de hash de 128 bits
//O ideal é concatenas uma string com a credencial para tornar a criptografia mai confiável. Pois o md5 gera sempre a mesma hash pra um valor

$salt = '12wR*#oppII';
$senha = '12345' . $salt;

//echo md5($senha);

//SH1() gera uma hash de 40 caracteres e tem um algoritmo de hash de 160 bits

//echo sha1($senha);

//CRYPT() obriga a passar um valor a mais, que nesse caso é o salt para aumentar a criptografia, da mesma forma que foi feito nos exemplos acima, mas nessa função, esse parâmetro é obrigatório

//echo crypt($senha, $salt);

//BASE64_ENCODE() e BASE64_DECODE(). A primeira função serve para criptografar e a segunda para descriptografar

$senhaCr = base64_encode($senha);
//echo $senhaCr;
//echo '<hr>';
//echo base64_decode($senhaCr);


//HASH() gera um valor de 128 caracteres
//O primeiro valor é o tipo de criptografia e o segundo é o valor a ser criptografado
//echo hash('sha512', $senha);
//echo '<hr>';
//echo strlen(hash('sha512', $senha));


function cryptC(String $pass): String
{
    $hash = crypt($pass, 'jfo*#hh4100.,<>');
    $hash = md5($pass);
    $hash = sha1($hash);
    $hash = hash('sha512', $hash);

    return $hash;
}

echo cryptC('1234');
?>