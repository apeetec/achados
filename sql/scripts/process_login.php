<?php
// Inicia a sessão
session_start();

// Conexão com o banco
require_once __DIR__ . '/../class/db.class.php';
// Classe de login
require_once __DIR__ . '/../class/login.class.php';

// Instancia a classe Login
$login = new Login();

$username = $_POST['rm'] ?? '';
$password = $_POST['senha'] ?? '';

// Inicia variáveis de sessão se não existirem
if (!isset($_SESSION['tentativas'])) $_SESSION['tentativas'] = 0;

if ($_SESSION['tentativas'] >= 3) {
    header("Location: /achados/index.php?erro=excedido");
    exit;
}

if ($login->authenticate($username, $password)) {
    // Login bem-sucedido - salva dados na sessão
    $_SESSION['rm'] = $username;
    // Zera tentativas ao logar com sucesso
    $_SESSION['tentativas'] = 0;
    header("Location: /achados/pages/dashboard.php");
    exit;
} else {
    $_SESSION['tentativas']++;
    header("Location: /achados/index.php?erro=1");
    exit;
}
?>
