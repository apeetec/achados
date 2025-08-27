<?php
// Conexão com o banco
require_once __DIR__ . '/../class/db.class.php';
// Classe de Cadastro do aluno
require_once __DIR__ . '/../class/register.class.php';

date_default_timezone_set('America/Sao_Paulo');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $login = $_POST['rm'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $data_hora =  date('d/m/Y H:i:s');
    $userInsert = new UserInsert();
    $success = $userInsert->insertUser($nome, $login, $email, 'pendente', $data_hora, $senha);
    if ($success) {
        require_once __DIR__ . '/../class/login.class.php';
        // Instancia a classe Login
        $sessao = new Login();
        if ($sessao->authenticate($login, $senha)) {
            // Login bem-sucedido - já tem dados na sessão
            header("Location: /achados/pages/dashboard.php");
            exit;
        }
    } 
    // else {
    //     echo "Erro ao cadastrar o usuário.";
    // }
}


?>