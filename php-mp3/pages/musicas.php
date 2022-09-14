<div class="container">
    <div class="row justify-content-between align-items-center mb-5 py-4">
        <h1 class="col-6">Músicas do Álbum <?=$_GET['album']?></h1>
    
        <div class="col-6">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="?page=new_musicas&album=<?=$_GET['album']?>" role="button">Adicionar Música</a>
                
                <a class="btn btn-success ms-3" href="?page=albuns" role="button">Voltar para Álbuns</a>
            </div>
        </div>
    </div>
</div>

<?php
$album = $_GET['album'];
$musicas = getMusica($album);
$capas = getCapaMusica($album);


?>

<div class="container">
    <div class="row justify-content-center align-items-center g-2 mb-5">
        <?php
        for ($i=0; $i < count($musicas) ; $i++) : 
            $musica = $musicas[$i];
            $capa = $capas[$i];
            
            $nomeMusicaComFormato = explode('/', $musica);
            $nomeMusica = explode('.', $nomeMusicaComFormato[3]);
        ?>
        
        <div class="col-4">
            <div class="card" >
                <img src="<?=$capa?>" class="card-img-top img-musica" alt="...">
                <div class="card-body">
                    <h5 class="card-title card-title-mais"><?=$nomeMusica[0]?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <audio src="<?=$musica?>" controls class="w-100"></audio>
                </div>
            </div>
        </div>

        <?php
        endfor;
        ?>
    </div>
</div>