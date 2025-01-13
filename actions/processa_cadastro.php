<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

// conectando ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha para segurança

    try {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $conn->query($sql);

        echo "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href = '../listagem';
              </script>";
        exit;
    } catch (mysqli_sql_exception $e) {
        // cerifica se o erro é de entrada duplicada
        if ($e->getCode() === 1062) {
            echo "<script>
                    alert('E-mail já está sendo usado. Por favor, escolha outro.');
                    window.history.back(); // voltando para pagina ant
                  </script>";
        } else {
            echo "<script>
                    alert('Ocorreu um erro ao cadastrar. Tente novamente mais tarde.');
                    window.history.back();
                  </script>";
        }
        exit;
    }
}

$conn->close();
