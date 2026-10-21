<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Biblioteca</h1>
        <p class="subtitulo">Faça login para acessar o sistema.</p>

        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'login') {
            echo '<div class="mensagem-erro">Login inválido.
            Verifique email e senha.</div>';
        }
        ?>
        <form action="autenticar.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-block">Entrar</button>
        </form>

        <div class="nav-links">
            <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
        <a href="cadastro.php" class="btn btn-voltar">Voltar para Cadastro</a>
        <div class="dica-navegacao">
            <strong>Fluxo:</strong> Login → Painel → Cadastrar ou Listar Livros
        </div>
    </div>
</body>

</html>