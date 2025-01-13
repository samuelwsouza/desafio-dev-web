<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

//se os dados foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  $id = intval($_POST['id']);
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  // atualizando dados no banco
  $sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssi", $nome, $email, $id);

  if ($stmt->execute()) {
    echo "Usuário atualizado com sucesso!";
  } else {
    echo "Erro ao atualizar usuário: " . $conn->error;
  }

  $stmt->close();
}

$conn->close();
