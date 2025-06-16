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
    public function authenticate(string $username, string $password): bool
    {
        // Consulta preparada para evitar SQL Injection
        $stmt = $this->connection->prepare('SELECT password FROM alunos WHERE username = :username LIMIT 1');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
        // Inicia a sessão, se ainda não estiver iniciada
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }

            // Armazena dados na sessão
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['username']   = $username;

            return true;
        }

        // Login falhou
        return false;
    }

    /**
     * Você pode implementar outros métodos como logout, verificar sessão, etc.
     */
}
