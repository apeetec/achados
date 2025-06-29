<?php
// Pegar a base URL para mapear os arquivos
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'|| $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    // Caminho da pasta onde está seu projeto (ex: /achados)
    $projectFolder = '/achados';
    return $protocol . $host . $projectFolder . '/';
}
$path = getBaseUrl();
// Função de navbar
function navbar(){
require $_SERVER['DOCUMENT_ROOT'] . '/achados/template-parts/nav.php';
}

?>