<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria de Produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
O metódo post irá postar as informações no banco de dados
<form method="post" action="/produtocategoria/form/save">
Aqui irá esconder o id no formulário do usuário
<input type="hidden" value="<?= $model->id ?>" name="id" />

        <fieldset>
            <legend>Cadastro de Categoria de Produto</legend>
            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"/>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>    
</body>
</html>