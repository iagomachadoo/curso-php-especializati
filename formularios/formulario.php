<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form{
            margin-top: 100px;
        }

        div{
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    
    <form action="validacao-form.php" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Senha">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <label for="concordo">Concordo</label>
            <input type="checkbox" name="concordo" value="SIM" id="concordo">
        </div>
        <div>
            <label for="sexo">Masculino</label>
            <input type="radio" name="sexo" id="sexo" value="M">

            <label for="sexo">Feminino</label>
            <input type="radio" name="sexo" id="sexo" value="F">
        </div>
        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="">Escolha se Estado</option>
                <option value="GO">Goiás</option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
            </select>
        </div>
        <div>
            <textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>