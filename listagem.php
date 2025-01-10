<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Cadastrados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Usuários Cadastrados</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['nome']); ?></td>
                <td><?= htmlspecialchars($row['email']); ?></td>
                <td>
                    <a href="editar.php?id=<?= $row['id']; ?>">Editar</a>
                    <a href="excluir.php?id=<?= $row['id']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php $conn->close(); ?>
