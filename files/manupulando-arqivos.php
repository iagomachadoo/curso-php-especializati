<?php

/* A função file_put_contents() serve para escrever dados em um arquivo. Contudo, se já existir outros conteúdos no arquivo, esses serão apagados dando lugar pro novo conteúdo inserido através da função file_put_contents() */

/* $conteudo = 'Olá, mundo!';

if (file_exists('test.txt')) {
    file_put_contents('test.txt', $conteudo);

}else{
    touch('test.txt');
    file_put_contents('test.txt', $conteudo);
} */



/* A função file_get_contents() serve para ler o conteúdo de um arquivo e retornar uma string com o conteúdo lido */

/* $conteudo = 'Olá, mundo!';

if (file_exists('test.txt')) {
    var_dump(file_get_contents('test.txt'));

}else{
    echo 'O arquivo não existe';
} */

?>