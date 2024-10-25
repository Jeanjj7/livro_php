<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h2>Cadastro de Livros</h2>
    <form action="inserir.php" method="post">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" >
        <br><br>
        
        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" >
        <br><br>
        
        <label for="ano_publicacao">Ano de Publicação:</label><br>
        <input type="number" id="ano_publicacao" name="ano_publicacao" >
        <br><br>
        
        <label>Categoria:</label><br>
    <select name="categoria">
        <option value="">Selecione</option>
        <option value="Ação">Ação</option>
        <option value="Aventura">Aventura</option>
        <option value="Comédia">Comédia</option>
        <option value="Fantasia">Fantasia</option>
        <option value="Terror">Terror</option>

    </select> <br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
