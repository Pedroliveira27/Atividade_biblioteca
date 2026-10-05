<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usário - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <p class="subtitulo">Crie sua conta para acessar o sistema da biblioteca.</p>
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
            echo '<div class= "mensagem-erro">Este email já está cadastrado.</div>';
        }
        ?>

        <form action="salvar_usuario.php" method="$_POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="nome" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-block">Cadastrar</button>
        </form>
        <div class="nav-links">
            <p>Já tem conta?<a href="login.php">Fazer login</a></p>
        </div>
        <a href="login.php" class="btn btn-voltar">Voltar para login</a>
        <div class="dica-navegacao">
            <strong>Fluxo:</strong> Cadastro → Login → Painel → Gerenciar Livros
        </div>
    </div>

</body>

</html>