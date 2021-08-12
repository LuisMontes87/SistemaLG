<?php
    session_start();
    error_reporting(0);
    if($_SESSION['user']==null) {
        //echo $_SESSION['user'];
        header("location:login.php");
    }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Bienvenido(a) <?php echo $_SESSION['user'];?> a tu programa ganadero
    </h1>
    <a href="./php/CloseSesion.php">
        <button>
            Cerrar sesión
        </button>
    </a>
</body>
</html>