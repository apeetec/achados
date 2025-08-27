<?php
class UserInsert
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }

    /**
     * Insere um novo usuário na tabela tab_usuario
     * @param string $rm Login do usuário
     * @param string $senha Senha do usuário (em texto plano)
     * @return bool true em caso de sucesso, false em caso de erro
     */
    public function insertUser(string $nome, string $rm, string $email, string $status_aluno, string $data_cadastro, string $senha): bool
    {
        try {
            $stmt = $this->connection->prepare(
                'INSERT INTO alunos (nome, rm, email, status_aluno, data_de_cadastro, senha) VALUES (:nome, :rm, :email, :status_aluno, :data_cadastro, :senha)'
            );
            // Gera a data atual no formato padrão SQL
            $data_cadastro = date("Y-m-d H:i:s");
            // Você pode usar password_hash se quiser mais segurança:
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':rm', $rm);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':status_aluno', $status_aluno);
            $stmt->bindParam(':data_cadastro', $data_cadastro);
            $stmt->bindParam(':senha', $senhaHash); // ou $senhaHash

            return $stmt->execute();
        } catch (PDOException $e) {
            // logar erro ou exibir mensagem, se necessário
            return false;
        }
    }
}
