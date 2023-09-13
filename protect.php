<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['user'])) {
    die("Você não pode acessar esta página, porque uma sessão não foi iniciada!.<p><a href=\"index.php\">Entrar</a></p>");
}
?>