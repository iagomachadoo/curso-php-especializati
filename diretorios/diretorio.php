<?php

/* A função is_dir() diz se o caminho é um diretório  */
//var_dump(is_dir('teste'));

//echo '<hr>';

//var_dump(is_dir('test'));

//echo '<hr>';

/* A função mkdir() cria diretórios. Mas ela não consegue criar diretórios em cadeia, para que um diretório seja criado dentro do outro, o anterior sempre deve ser criado primeiro */
//var_dump(mkdir('uploads'));

//echo '<hr>';

//var_dump(mkdir('uploads/test'));

/* A função rmdir() remove diretórios. Mas o diretório deve estar vazio ou primeiramente os subdiretórios ou arquivos, devem ser removidos  */
//var_dump(rmdir('uploads/test'));

//echo '<hr>';

//var_dump(rmdir('uploads'));

/* A função getcwd() mostra o diretório/caminho atual em que estamos */
//var_dump(getcwd());

/* A função scandir() serve para scanear um diretório, ou seja, informar os arquivos ou subdiretórios existentes */
//var_dump(scandir('./'));

/* A função glob() também serve para scanear diretórios, mas diferente da scandir(), a glob() permite que sejam passados caractéres coringa, como por exemplo '../*' para pegar todos os arquivos/diretórios, '../*.php' para pegar apenas os arquivos que terminem com .php*/
//echo '<pre>';
//var_dump(glob('../*'));
?>