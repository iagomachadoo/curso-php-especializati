<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Include</title>
</head>
<body>
    <!-- O include serve para incluir arquivos de outras locais dentro do código -->
    
    <!-- O include_once tem um comportamento similar a declaração include, com a única diferença que, se o código do arquivo já foi incluído, não o fará novamente, e o include_once retornará true. Como o nome sugere, o arquivo será incluído somente uma vez. -->

    <?php
        include('include-header/header.php');
    ?>
    <div>
        <?php
            echo 'Sou o conteúdo do site';
        ?>
    </div>
    <?php
        include_once('include-footer/footer.php');
    ?>
    
</body>
</html>