<?php

// Inclui a verificação de sessão (protege a página de acesso não
// autorizado)
include("verificar_sessao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Exibe o nome do uduário logado (vem da sessão $_SESSION) -->
         <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
         <p class="subtítulo">Bem-Vindo ao painel da biblioteca. Escolha uma opção:</p>
         <!-- Cards grandes para facilitar a navegação -->
          <div class="painel-cards">
            <a href="cadastrar_livro.php"  class="card-link">
                Cadastrar Livro
            </a>
            <a href="listar_livro.php" class="card-link">
                Listar Livros
            </a>
            <a href="logout.php" class="card-link">
                Sair
            </a>
          </div>
          <div class="dica-navegacao">
            <strong>Fluxo:</strong>
            Painel →  Cadastrar Livro ou Listar Livros → Editar / Excluir

          </div>
    </div>
    
</body>
</html>