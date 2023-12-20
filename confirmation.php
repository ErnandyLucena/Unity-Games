<?php
session_start();

if (isset($_SESSION["formData"])) {
    $formData = $_SESSION["formData"];
    // Limpar os dados da sessão após exibi-los
    unset($_SESSION["formData"]);
} else {
    // Se não houver dados na sessão, redirecionar de volta para o formulário
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
</head>

<body>
    <h2>Dados enviados:</h2>
    <p><strong>Name:</strong> <?php echo $formData["name"]; ?></p>
    <p><strong>Email:</strong> <?php echo $formData["email"]; ?></p>
    <p><strong>Comment:</strong> <?php echo $formData["comment"]; ?></p>
    <a href="index.html">Voltar para o formulário</a>
</body>

</html>
