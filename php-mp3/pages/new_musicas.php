<div class="row justify-content-between align-items-center mb-5 py-4">
    <h1 class="col-5">Cadastrar nova Música para o Álbum <?=$_GET['album']?></h1>

    <a class="btn btn-success col-3" href="?page=musicas&album=<?=$_GET['album']?>" role="button">Voltar para o Álbum <?=$_GET['album']?></a>
</div>

<form action="#" method="post" enctype="multipart/form-data"><!-- O upload de arquivos não funciona sem o atributo enctype="multipart/form-data" -->
    <div class="mb-3">
      <label for="capaMusica" class="form-label">Capa da Música</label>
      <input type="file" class="form-control" name="imagem" id="capaMusica"  aria-describedby="fileHelpId">
    </div>

    <div class="mb-3">
      <label for="musicaAudio" class="form-label">Música</label>
      <input type="file" class="form-control" name="audio" id="musicaAudio"  aria-describedby="fileHelpId">
    </div>

    <button type="submit" class="btn btn-success mt-3 novo-btn">Cadastrar</button>
</form>

<?php
//Por default, a requisição de uma página é do tipo GET
//Mas quando um form, por exemplo, é submetido e seu 'method' é POST, a requisição da página passa para o tipo POST

//O método '$_SERVER' é um array com várias infos do servidor, sendo o valor da chave 'REQUEST_METHOD' o tipo da requisição
//Então, essa condição está verificando se o form foi submetido, porque como ele tem uma requisição tipo 'POST', ao ser submetido, o tipo de requisição da página vai mudar de GET para POST

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nomeAlbum = $_GET['album'];
  $caminho = "albuns/{$nomeAlbum}";

  $arquivoAudio = $_FILES['audio'];
  $nomeAudio = $_FILES['audio']['name'];

  $arquivoCapaImagem = $_FILES['imagem'];
  $nomeCapaAlbum = $arquivoCapaImagem['name'];

  $moveAudio = move_uploaded_file($arquivoAudio['tmp_name'], $caminho . '/musicas' . '/' . $nomeAudio);
  var_dump($moveAudio);

  $moverCapaImagem = move_uploaded_file($arquivoCapaImagem['tmp_name'], $caminho . '/capa-musicas' . '/' . $nomeCapaAlbum);
  var_dump($moverCapaImagem);
  

  //O método move_uploaded_file serve para mover um arquivo de um diretório para outro e retorna true ou false para essa ação.
  if ($moveAudio && $moverCapaImagem) {
    header("Location:?page=musicas&album={$nomeAlbum}");

  }else{
    echo 'Falha no upload...';
  }
}
?>