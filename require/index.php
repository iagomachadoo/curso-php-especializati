<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Include</title>
</head>
<body>
    <!-- A diferença do include para o require é que, o require verifica se há algum erro no arquivo importado ou no caminho do arquivo, existindo um erro, a execução do código para nesse ponto, já o include não faz essa verificação -->

    <!-- Há também o require_once que inclui o arquivo uma única vez, então esse é o mais aconselhável a ser usado, podendo deixar a aplicação mais leve -->
    
    <!-- O uso desses dois tipos de importação depende do caso. Se for fazer uma conexão com o banco de dados, o ideal é usa o require. Mas no caso que for a inclusão de uma parte do projeto, como um header ou um footer, o include já basta -->

    <?php
        require('require-header/header.php');
    ?>
    <div>
        <?php
            echo 'Sou o conteúdo do site';
        ?>
    </div>
    <?php
        require('require-footer/footer.php');
    ?>
    
</body>
</html>