<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php7";

// Conectar-se ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para criar um registro
function criarRegistro($nome, $senha) {
    global $conn;
    $nome = mysqli_real_escape_string($conn, $nome);
    $senha = mysqli_real_escape_string($conn, $senha);

    $sql = "INSERT INTO sua_tabela (nome, senha) VALUES ('$nome', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro criado com sucesso.";
    } else {
        echo "Erro ao criar registro: " . $conn->error;
    }
}

// Função para obter todos os registros
function obterRegistros() {
    global $conn;

    $sql = "SELECT * FROM sua_tabela";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Senha: " . $row["senha"]. "<br>";
        }
    } else {
        echo "0 resultados";
    }
}

// Função para atualizar um registro
function atualizarRegistro($id, $nome, $senha) {
    global $conn;
    $nome = mysqli_real_escape_string($conn, $nome);
    $senha = mysqli_real_escape_string($conn, $senha);

    $sql = "UPDATE sua_tabela SET nome='$nome', senha='$senha' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}

// Função para deletar um registro
function deletarRegistro($id) {
    global $conn;

    $sql = "DELETE FROM sua_tabela WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro deletado com sucesso.";
    } else {
        echo "Erro ao deletar registro: " . $conn->error;
    }
}

// Exemplos de uso
// Criar um registro
criarRegistro("Exemplo1", "senha1");

// Obter todos os registros
obterRegistros();

// Atualizar um registro (assumindo que o registro com ID 1 existe)
atualizarRegistro(1, "NovoNome", "NovaSenha");

// Deletar um registro (assumindo que o registro com ID 1 existe)
deletarRegistro(1);

// Fechar a conexão
$conn->close();
?>
