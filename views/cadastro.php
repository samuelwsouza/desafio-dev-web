<?php
include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
  <main id="form-cadastro">
    <h1>Cadastro de Usuário</h1>

    <?php if (isset($_GET['erro'])): ?>
      <?php if ($_GET['erro'] === 'email_duplicado'): ?>
        <p style="color: red;">E-mail já está sendo usado no banco de dados!</p>
      <?php else: ?>
        <p style="color: red;">Ocorreu um erro ao cadastrar o usuário. Tente novamente.</p>
      <?php endif; ?>
    <?php endif; ?>

    <form action="actions/processa_cadastro.php" method="POST">
      <label for="nome">Nome:</label>
      <input placeholder="ex: Jonathan Santos" type="text" id="nome" name="nome" required>
      <br>
      <label for="email">E-mail:</label>
      <input placeholder="ex: jonsantos@gmail.com" type="email" id="email" name="email" required>
      <br>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required minlength="6">
      <br>
      <button type="submit">Cadastrar</button>
    </form>
  </main>
  <script src="/sistema-cadastro/js/header.js"></script>
</body>

</html>