<?php 

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Bem vindo, <?php echo $_SESSION['nome']; ?>
    <p></p>

    

    <p>
        <a href="logout.php">Logout</a>
      
    </p>

</body>
</html>