<?php
include("verificar_sessao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastrar Livro</h1>
        <p class="subtitulo">Preencha os dados do novo livro.</p>

        <form action="salvar_livro.php" method="POST">
            <div class="form-group">
                <label for="autor">Título</label>
                <input type="text" id="autor" name="autor" placeholder="Digite o título do livro" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" placeholder="Digite o nome do autor do livro" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="Disponivel">Disponível</option>
                    <option value="Emprestado">Emprestado</option>
                </select>
            </div>

            <button type="submit" class="btn btn-block btn-sucesso">
                Salvar Livro
            </button>

        </form>
        <a href="painel.php" class="btn btn-voltar">Voltar para o Painel.</a>
    </div>


</body>

</html>