<?php
include 'header.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// buscar usuários no banco
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Cadastrados</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <main id="listagem">
        <h1>Usuários Cadastrados</h1>
        <table id="usuarios_listados">
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
                            <button class="editar-btn" data-id="<?= $row['id']; ?>" data-nome="<?= htmlspecialchars($row['nome']); ?>" data-email="<?= htmlspecialchars($row['email']); ?>">
                                Editar
                            </button>
                            <button class="excluir-btn" data-id="<?= $row['id']; ?>" title="Excluir">
                                🗑️
                            </button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <!-- modal para edição -->
    <div id="editarModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Editar Usuário</h2>
            <form id="editarForm">
                <input type="hidden" id="editarId" name="id">
                <label for="editarNome">Nome:</label>
                <input type="text" id="editarNome" name="nome" required>
                <label for="editarEmail">E-mail:</label>
                <input type="email" id="editarEmail" name="email" required>
                <button class="save-btn" type="submit">Salvar</button>
            </form>
        </div>
    </div>

    <script src="/sistema-cadastro/js/header.js"></script>
    <script src="/sistema-cadastro/js/modal.js"></script>
</body>

</html>

<?php $conn->close(); ?>