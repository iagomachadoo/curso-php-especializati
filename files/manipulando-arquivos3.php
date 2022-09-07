<?php

//Aqui estamos abrindo o arquivo com a função fopen(), percorrendo cada linha desse arquivo com a função feof(), escrevendo o conteúdo de cada linha com a função fgets() e fechado o arquivo com a função fclose()

$file = fopen('projetoX.log', 'a+');

/* A função fgets() lê apenas uma linha de um ponteiro de arquivo */
//echo fgets($file, 4096);

/* A função feof() percorre linha por linha de um arquivo mas não lê o que esta escrito nesse arquivo. Retorna true se o ponteiro estiver no final do arquivo e false caso contrário*/


while (!feof($file)) {
    echo fgets($file, 4096) . '<br>';
}


fclose($file);

?>