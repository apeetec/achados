<?php
// Inicia a sessão (se ainda não foi iniciada pela classe, não tem problema)
session_start();

// Conexão com o banco
require_once __DIR__ . '/../class/db.class.php';
// Classe de login
require_once __DIR__ . '/../class/login.class.php';

// Instancia a classe Login
$login = new Login();

$username = $_POST['rm'] ?? '';
$password = $_POST['senha'] ?? '';

// Tenta autenticar
if ($login->authenticate($username, $password)) {
    // Login bem-sucedido - já tem dados na sessão
    header("Location: /achados/pages/dashboard.php");
    exit;
} else {
    // Se quiser controlar tentativas, pode manter esse bloco
    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 0;
    }
    $_SESSION['tentativas']++;
    
    header("Location: /achados/index.php?erro=1");
    exit;
}
