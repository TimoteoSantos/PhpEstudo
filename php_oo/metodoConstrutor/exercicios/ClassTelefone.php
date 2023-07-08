<?php

class Telefone {
    private $telefone;
    private $id;

    public function __construct($telefone = 10, $id = null) {
        $this->telefone = intval($telefone);
        $this->id = $id;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = intval($telefone);
    }

    public function getId() {
        return $this->id;
    }

    public function salvar() {
        $conexao = new PDO('mysql:host=seu_host;dbname=seu_banco', 'seu_usuario', 'sua_senha');

        if ($this->id === null) {
            // Inserir novo registro
            $stmt = $conexao->prepare('INSERT INTO telefones (telefone) VALUES (:telefone)');
            $stmt->bindValue(':telefone', $this->telefone);
            $stmt->execute();

            $this->id = $conexao->lastInsertId();
        } else {
            // Atualizar registro existente
            $stmt = $conexao->prepare('UPDATE telefones SET telefone = :telefone WHERE id = :id');
            $stmt->bindValue(':telefone', $this->telefone);
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
        }
    }

    public static function buscarPorId($id) {
        $conexao = new PDO('mysql:host=seu_host;dbname=seu_banco', 'seu_usuario', 'sua_senha');

        $stmt = $conexao->prepare('SELECT * FROM telefones WHERE id = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($registro) {
            return new Telefone($registro['telefone'], $registro['id']);
        } else {
            return null;
        }
    }

    public function excluir() {
        $conexao = new PDO('mysql:host=seu_host;dbname=seu_banco', 'seu_usuario', 'sua_senha');

        $stmt = $conexao->prepare('DELETE FROM telefones WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
    }
}
