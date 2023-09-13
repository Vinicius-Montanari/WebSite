<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastre-se</h1>
    <form action="processa_cadastro.php" method="POST">
        <p>        
            <label>Nome</label>
            <input type="text" name="nome">
        </p>
        <p>        
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha"> 
        </p>
        <p>
            <button type="submit">Cadastrar</button>               
        </p>
    </form>
</body>
</html>
