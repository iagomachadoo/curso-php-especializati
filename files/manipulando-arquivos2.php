<?php

/* A função fopen() abre um arquivo ou URL */

/* Quando fopen() for usado, juntamente a ela deve-se ser usada a função fclose(), senão o arquivo a ser aberto será aberto várias vezes, consumindo recursos da máquina */

$arquivo = fopen('projetoX.log', 'a+');

/* A função fwrite() escreve o conteúdo da string para o stream de arquivo apontado por handle. Handle é um ponteiro de arquivo tipo resource tipicamente criado por fopen(). A posição desse ponteio dentro do arquivo dependerá do segundo parâmetro passado na função fopen()*/

//o \r\n serve para quebrar linha e só funciona dentro de aspas duplas
fwrite($arquivo, "Olá, mundo novo! \r\n");



/* A função fclose() fecha um arquivo */
fclose($arquivo);
?>