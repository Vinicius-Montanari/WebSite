<?php
include('conexao.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

   
    $verifica_email = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $mysqli->query($verifica_email);

    if ($resultado->num_rows > 0) {
        echo "Este e-mail já está registrado. Por favor, escolha outro.";
    } else {
        
        $inserir_usuario = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        
        if ($mysqli->query($inserir_usuario) === TRUE) {
            echo "Cadastro realizado com sucesso!";
            
        } else {
            echo "Erro ao cadastrar usuário: " . $mysqli->error;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
        <a href="index.php">Faça Login Aqui</a>
      
    </p>
</body>
</html>
