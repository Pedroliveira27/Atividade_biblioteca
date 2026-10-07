<?php

// Verificar_sessao.php
// Arquivo incluído nas páginas restritas do sistema.
// Garante que apenas usuários logados possam acessar o conteúdo.

// Inicia a sessão do usuario (ou retoma uma sessão já existente)
session_start();

// Cabeçalhos HTTP que impedem o navegador de guardar a página
// em cache.
// Isso evita que usuário volta ao painel após fazr o logout.

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Verificar se a variavel de sessão 'nome' existe.
// Se não existir, o usuário não está logado.

if (!insset($_SESSION['nome'])) {
    // header() redireciona o navegador para outra página.
    header("Location: login.php");
    // exit() encerra o script para garantir que nada mais
    // seja executado.
    exit();
}