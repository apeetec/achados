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
// Função para checar se está logado, futuramente vou adicionar verificação de função
function checkLoged(){
   if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } 
}
// Pegar a base URL para mapear os arquivos
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $projectFolder = '/achados';
    return $protocol . $host . $projectFolder . '/';
}
$path = '/achados/';
// Função do Head com metatags e estilizações
function head(){
    global $path;
    require __DIR__ . '/../template-parts/header.php';
}
echo head();
// Função de rodapé
function footer(){
    global $path;
    require __DIR__ . '/../template-parts/footer.php';
}
// Função de navbar
function navbar(){
    require $_SERVER['DOCUMENT_ROOT'] . '/achados/template-parts/nav.php';
}
?>
