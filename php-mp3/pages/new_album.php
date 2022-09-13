<div class="row justify-content-between align-items-center mb-5 py-4">
    <h1 class="col-5">Cadastrar novo Álbum</h1>

    <a class="btn btn-success col-3" href="?page=albuns" role="button">Voltar para os Álbum</a>
</div>

<form action="#" method="post" enctype="multipart/form-data"><!-- O upload de arquivos não funciona sem o atributo enctype="multipart/form-data" -->
    <div class="mb-3">
      <label for="nomeAlbum" class="form-label">Nome do Álbum</label>
      <input type="text" class="form-control" name="nome" id="nomeAlbum" aria-describedby="helpId" placeholder="Nome">
    </div>

    <div class="mb-3">
      <label for="capaAlbum" class="form-label">Capa do Álbum</label>
      <input type="file" class="form-control" name="imagem" id="capaAlbum"  aria-describedby="fileHelpId">
    </div>

    <button type="submit" class="btn btn-success mt-3 novo-btn">Cadastrar</button>
</form>

<?php
//Por default, a requisição de uma página é do tipo GET
//Mas quando um form, por exemplo, é submetido e seu 'method' é POST, a requisição da página passa para o tipo POST

//O método '$_SERVER' é um array com várias infos do servidor, sendo o valor da chave 'REQUEST_METHOD' o tipo da requisição
//Então, essa condição está verificando se o form foi submetido, porque como ele tem uma requisição tipo 'POST', ao ser submetido, o tipo de requisição da página vai mudar de GET para POST

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nomeAlbum = $_POST['nome'];
  $caminho = "albuns/{$nomeAlbum}";

  //Verificando se o diretório existe, caso não exista, ele será criado
  if (!is_dir($caminho)) {
    mkdir($caminho);
    mkdir("{$caminho}/capa-album");
    mkdir("{$caminho}/capa-musicas");
    mkdir("{$caminho}/musicas");
  }

  $arquivoImagem = $_FILES['imagem'];
  $infoImagem = explode('/', $arquivoImagem['type']);
  $extensaoImagem = $infoImagem[1];
  $nomeImagem = $nomeAlbum  . '.' . $extensaoImagem;

  //O método move_uploaded_file serve para mover um arquivo de um diretório para outro e retorna true ou false para essa ação.
  if (move_uploaded_file($arquivoImagem['tmp_name'], $caminho . '/capa-album' . '/' . $nomeImagem)) {
    header('Location:?page=albuns');

  }else{
    echo 'Falha no upload...';
  }

}
?>