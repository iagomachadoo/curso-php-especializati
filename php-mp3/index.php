<!doctype html>
<html lang="pt-br">

<head>
  <title>MP3 em PHP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  
  <div class="container">
    <!-- Essa é a estrutura básica do projeto, o template -->
    <?php
        include_once './helpers.php';

        //isset($_GET['page'] está verificando se existe o parâmetro pages na url 
        if (isset($_GET['page'])) {

            //file_exists("pages/{$_GET['page']}.php") está verificando se a página passada na url existe, caso exista, incluirá no template, senão, mostrará um erro include_once 'pages/error-404.php'
            if (file_exists("pages/{$_GET['page']}.php")) {

              //include_once "pages/{$_GET['page']}.php está incluindo a página passada na url dentro do template
              include_once "pages/{$_GET['page']}.php";

            }else{
              include_once 'pages/error-404.php';

            }

        //Caso o parâmetro page não exista na url, por default a página álbuns será incluída dentro do template
        }else{
            include_once 'pages/albuns.php';

        }
    ?>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>