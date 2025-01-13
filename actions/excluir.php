<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $sql = "DELETE FROM usuarios WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "Usuário excluído com sucesso!";
  } else {
    echo "Erro ao excluir o usuário: " . $conn->error;
  }
} else {
  echo "ID inválido!";
}

$conn->close();
