<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if (strlen($senha) < 6) {
        die("A senha deve ter pelo menos 6 caracteres.");
    }

    $senha_hash = password_hash($senha, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        if ($conn->errno == 1062) {
            echo "Erro: O e-mail já está cadastrado.";
        } else {
            echo "Erro: " . $conn->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>
