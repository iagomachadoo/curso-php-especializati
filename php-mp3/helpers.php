<?php

function getAlbuns()
{
    $albuns = glob('albuns/*');//listando todos os diretórios dentro de álbuns

    return $albuns;
}

function getMusica($album)
{
    $musicas = glob("albuns/{$album}/musicas/*.mp3");

    return $musicas;
}

function getCapaMusica($album)
{
    $capas = glob("albuns/{$album}/capa-musicas/*.jpg");
    
    return $capas;
}
?>