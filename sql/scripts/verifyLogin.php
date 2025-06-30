<?php
// Função para verificar login e evitar loop de redirect
function verifyLogin(){
    session_start();

    // Se o usuário está logado
    if (isset($_SESSION['rm'])) {
        // Evita redirect infinito, só redireciona se NÃO estiver já na dashboard
        $currentScript = basename($_SERVER['PHP_SELF']); // nome do arquivo atual

        if ($currentScript !== 'dashboard.php') {
            header("Location: /achados/pages/dashboard.php");
            exit;
        }
    } else {
        echo "Você não está logado.";
        // Aqui, opcionalmente, você pode redirecionar para página de login, ex:
        // header("Location: /achados/pages/login.php");
        // exit;
    }
}
verifyLogin();
?>