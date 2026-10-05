<?php
//autenticar.php verifica se o ameil e senha informados estão corretos!
// Conceito deles são: session_start, SELECT no MySQL, password_verify!
 
//Aqui inicia a sessão do usúario.
// A sessão permite guardar os dados do usuario logado entre as paginas!
 
// Inclui a conexão com banco de dados.
include("conexao.php");
 
// Recebe o email e a semha digitadas no formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];
 
// =========================================================
// CONSULTA NO BANCO (READ do CRUD)
// Busca o usúario pelo email informado
// =========================================================
 
// Montando a consulta SQL SELECT
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
 
// Executa a consulta e guarda o resultado.
$resultado = mysqli_query($conexao, $sql);
 
// mysqli_fetch_assoc() transforma a linha do resultado
// em array associativo
$usuario = mysqli_fetch_assoc($resultado);
 
 
// ========================================================
// VERIFICAÇÃO DA SENHA
// ========================================================
 
// Verifica se o usuário foi encontrado e se a senha está correta
// password_verify() compara a senha digitada com o hash salvo
// no banco
if ($usuario && password_verify($senha, $usuario['senha'])) {
    // Login bem-sucedido: guarda o nome do usuário na sessão
    $_SESSION['nome'] = $usuario['nome'];
    // Redireciona para o painel principal
    header("Location: painel.php");
    exit();
} else {
    // Login inválido: redireciona de volta para login
    // com mensagem de erro
    header("Location: login.php?erro=login");
    exit();
}
 