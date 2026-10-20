<?php

// listar_livro.php
// Exibe todos os lisvros cadastrados.
// Conceitos: MySQL, SELECT (READ DO CRUD), loop while.

// Protege a página: só usúarios logados podem listar livros.
include("verificar_sessao.php");

// Incui a conexão do banco de dados.
include("conexao.php");

// Consulta SQL que busca todos os livros da tabela.
$sql = "SELECT * FROM livros";

// Executa a consulta e guarda o resultado
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Livro - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Container mais largo para acomodar a tabela -->
     <div class="container container-largo">
        <h1>Listagem de Livros</h1>
        <p class="subtítulo">
            Todos os livros cadastrados no sistema.
        </p>
        <!-- Tabela estilizada com os dados dos livros -->
         <table class="tabela-livros">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php
            // Loop While percorre cada linha retornada
            // pela consulta SQL.
            while ($livro = mysqli_fetch_asoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $livros['id']; ?></td>
                    <td><?php echo $livros['título']; ?></td>
                    <td><?php echo $livros['autor']; ?></td>
                    <td><?php echo $livros['status']; ?></td>
                    <td class="acoes">
                        <!-- Link para editar o livro -->
                         <!-- Envia o ID pela URL com ?id= -->
                          <a href="editar-livro.php?id=<?php echo $livro['id']; ?>" class="link-editar">
                            Editar
                          </a>

                          <!-- Link para excluir o livro com confirmação do JS -->
                           <a href="excluir_livro.php?id=
                           <?php echo $livro['id']; ?>" class="link-excluir"
                           onclick="return confirm('Tem certeza que deseja excluir o livro cabaço?')>
                           Excluir
                        </a>
                    </td>
                </tr>
                <?php } ?>
         </table>
         >!-- Botão de voltar para o painel principal -->
         <a href="painel.php" class="btn btn-voltar">
         Voltar para o painel
         </a>
         </div>

</body>

</html>