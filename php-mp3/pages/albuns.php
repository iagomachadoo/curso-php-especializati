<div class="row justify-content-between align-items-center mb-5 py-4">
    <h1 class="col-2">Álbum</h1>

    <a class="btn btn-success col-3" href="?page=new_album" role="button">Adicionar novo Álbum</a>
</div>

<div class="row g-2">
    <!-- O laço forEach está iterando os álbuns que estão vindo do array $albuns-->
    <?php
        $albuns = getAlbuns();//a função getAlbuns está retornando um array

        foreach ($albuns as $album) :
        
        $nomeAlbum = explode('/', $album);

        $diretoriosAlbum = glob("{$album}/*");

        $caminhoImgCapaAlbum = glob("{$diretoriosAlbum[0]}/*");
        
        $imgCapaAlbum = explode('/', $caminhoImgCapaAlbum[0]); 
        
        $imgAlbum = $caminhoImgCapaAlbum[0];
    ?>

    <div class="col-3 d-flex justify-content-center align-items-center">
        <!-- A interrogação na url serve para especificar um parâmetro -->
        <!-- O operador & serve para passar mais de um parâmetro -->
        <a href="?page=musicas&album=<?=$nomeAlbum[1]?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nomeAlbum[1]?>" class="img-album img-thumbnail">
            <h5><?=$nomeAlbum[1]?></h5>
        </a>
    </div>

    <?php
        endforeach;
    ?>
    
</div>