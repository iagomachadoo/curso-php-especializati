<?php

/*
echo '<pre>';

var_dump($_FILES);
echo '<hr>';

var_dump($_FILES['imagem']['type']);
echo '<hr>';

var_dump($_FILES['imagem']['tmp_name']);
echo '<hr>';

var_dump($_FILES['imagem']['size']);
echo '<hr>'; */

$fotos = $_FILES['imagens'];
$caminho = 'uploads/imgs/';

/* a função is_dir() verifica se um diretório existe ou não */
/* a função mkdir(cria um diretório) */

if (!is_dir($caminho)) {
    mkdir('uploads');
    mkdir($caminho);
}

/* echo '<pre>';
var_dump($fotos); */

for ($i=0; $i < count($fotos['name']); $i++) { 
    if (move_uploaded_file($fotos['tmp_name'][$i], $caminho . $fotos['name'][$i])) 
    {
        echo "Sucesso ao mover o arquivo {$fotos['name'][$i]}";
        echo '<hr>';

    }else
    {
        echo "Falha ao mover o arquivo {$fotos['name'][$i]}";
        echo '<hr>';
    }
}
?>