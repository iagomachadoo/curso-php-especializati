<?php

/* echo '<pre>';

var_dump($_FILES['imagem']['name']);
echo '<hr>';

var_dump($_FILES['imagem']['type']);
echo '<hr>';

var_dump($_FILES['imagem']['tmp_name']);
echo '<hr>';

var_dump($_FILES['imagem']['size']);
echo '<hr>'; */

$foto = $_FILES['imagem'];
$caminho = 'uploads/imgs/';

if (move_uploaded_file($foto['tmp_name'], $caminho . $foto['name'])) {
    echo 'Sucesso!';

}else {
    echo 'Falha';
}
?>