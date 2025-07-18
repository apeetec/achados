<?php
class Usuarios
{
    private PDO $pdo;

    public function __construct()
    {
        // Usa a conexão existente da classe Database
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function buscarTodosUsuarios(): array
    {
        $sql = "SELECT id, rm, nome, email FROM alunos";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(); // Já retorna como array associativo por causa das opções da PDO
    }
}
