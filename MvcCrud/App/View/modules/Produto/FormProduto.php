<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>

<form method="post" action="/produto/form/save">

<input type="hidden" value="<?= $model->id ?>" name="id" />

        <fieldset>
            <legend>Cadastro de Produto</legend>
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>"/>
            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" />
            <label for="marca">Marca:</label>
            <input name="marca" id="marca" type="text" value="<?= $model->marca ?>"/>
            <label for="valor">Valor:</label>
            <input name="valor" id="valor" type="decimal" value="<?= $model->valor ?>"/>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>    
</body>
</html>