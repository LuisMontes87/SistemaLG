
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<style>
    body{
        background-image: url("IMG/app-Campo-Abierto.jpg");
    }
    .img-logo{
        width: 22%;
        border-radius: 20%;
        border: solid 2px red;
    }
    .box-div-1{
        border-radius: 30px;
        width: 30%;
        height: 360px;
        border: solid 3px green;
        margin-left: auto;
        margin-right: auto;
        padding: 5%;
        text-align: center;
        background-color: rgb(209, 209, 209);
    }
    .txt-h1{
        color: rgb(220, 20, 20);
        margin-top: 10%;
        font-size: 34px;
        text-shadow:2px 2px 4px rgb(116, 13, 13);
    }
    .centrar-p{
        display: relative;
               
    }
    .centrar-h{
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
    .inpt{
        color: black;
        font-size: 18px;
        margin-top: 10px;
        height: 20%;
        border-radius:5px;
    }
    .btn{
        border-radius: 5px;
        width: 30%;
        height: 30px;
        background-color: rgb(200, 252, 121);
    }
    .error{
        color:red;
    }
</style>
<body>
    <div class="centrar-p">
        <div class="box-div-1 centrar-h">
            <img class="img-logo" src="./IMG/Logo_P.png" alt="">
            <h1 class="txt-h1">
                INICIAR SESIÓN
            </h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <input class="inpt" name="user" type="text" placeholder="Nombre usuario">
                <input class="inpt" name="pass" type="password" placeholder="************">
                <br><br><br>
                <input type="submit" name="enviar" class="btn" value="ENTRAR">
                
            </form>
            <?php
                require './php/obtener_user.php';
                $usuarios=new usuarios();
                if(isset($_REQUEST['enviar'])){
                    $user=htmlentities(addslashes($_POST['user']));
                    $pass=htmlentities(addslashes($_POST['pass']));
                    $usuarios->validar_user($user, $pass);
                }
            ?>
        </div>
    </div>
</body>
</html>