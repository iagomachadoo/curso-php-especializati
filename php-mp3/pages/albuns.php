<div class="row justify-content-between align-items-center mb-5 py-4">
    <h1 class="col-2">Álbum</h1>

    <a class="btn btn-success col-3" href="?page=new_album" role="button">Adicionar novo Álbum</a>
</div>

<div class="row g-2">
    <!-- O laço forEach está iterando os álbuns que estão vindo do array $albuns-->
    <?php
        $albuns = getAlbuns();//a função getAlbuns está retornando um array
        
        foreach ($albuns as $album) :
        
        $infoAlbuns = explode('/', $album);
        
        $nomeAlbum = $infoAlbuns[1];
        
        $diretoriosAlbuns = glob("{$album}/*");

        $arquivosAlbum = glob("{$diretoriosAlbuns[0]}/*");
        
        $nomeImagem = explode('/', $arquivosAlbum[0]);
        
        $extensaoImg = explode('.', $nomeImagem[3]);
        
        $imgAlbum = "{$album}/{$nomeAlbum}.{$extensaoImg[1]}";
    ?>

    <div class="col-3 d-flex justify-content-center align-items-center">
        <!-- A interrogação na url serve para especificar um parâmetro -->
        <!-- O operador & serve para passar mais de um parâmetro -->
        <a href="?page=musicas&album=<?=$nomeAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nomeAlbum?>" class="img-album img-thumbnail">
            <h5><?=$nomeAlbum?></h5>
        </a>
    </div>

    <?php
        endforeach;
    ?>
    
</div>