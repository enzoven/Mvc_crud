<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>

<form method="post" action="/usuario/form/save">

<input type="hidden" value="<?= $model->id ?>" name="id" />

        <fieldset>
            <legend>Cadastro de Usuario</legend>
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>"/>
            <label for="descricao">Email:</label>
            <input name="email" id="email" type="text" value="<?= $model->email ?>" />
            <label for="marca">Senha:</label>
            <input name="senha" id="senha" type="password" value="<?= $model->senha ?>"/>
          
            <button type="submit">Enviar</button>
        </fieldset>
    </form>    
</body>
</html>