<?php
class Login
{
    private PDO $connection;

    public function __construct()
    {
        // Obtém a conexão PDO da classe Database
        $this->connection = Database::getInstance()->getConnection();
    }

    /**
     * Tenta autenticar o usuário pelo username e senha
     * @param string $username
     * @param string $password (senha em texto plano para verificação)
     * @return bool true se login ok, false se falhou
     */
    public function authenticate(string $rm, string $senha): bool
    {
    $stmt = $this->connection->prepare('SELECT id, senha FROM alunos WHERE rm = :rm LIMIT 1');
    $stmt->execute(['rm' => $rm]);
    $user = $stmt->fetch();

    // if ($user && password_verify($senha, $user['senha'])) {
    if ($user && $senha === $user['senha']) {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $_SESSION['rm'] = $rm;

        return true;
    }

    return false;
}


    /**
     * Você pode implementar outros métodos como logout, verificar sessão, etc.
     */
}
