<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Verificar se os campos foram preenchidos corretamente
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($comment)) {
        // Armazenar os dados na sessão
        $_SESSION["formData"] = array(
            "name" => $name,
            "email" => $email,
            "comment" => $comment
        );

        // Redirecionar para a página de confirmação
        header("Location: confirmation.php");
        exit();
    } else {
        // Redirecionar de volta para o formulário se os campos não foram preenchidos corretamente
        header("Location: index.html");
        exit();
    }
}
?>
