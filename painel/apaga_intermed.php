<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');

    $id_cliente = $_GET['id']; //Pega da URL
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>
<body>
    <h3>Você deseja apagar este cliente mesmo?</h3>
    <a a href="apaga_cliente.php?id=<?php echo $id_cliente; ?>" class="btn btn-primary" >SIM</a>
    <a a href="index.php" class="btn btn-primary" >NÃO</a> 
</body>
</html>