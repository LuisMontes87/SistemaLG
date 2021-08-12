<?php
    require 'conexion.php';

    class usuarios extends conexion{

        public function __construct(){
        }
        
        public function get_user($dato){
            $conexion_db=new conexion();
            $sql="SELECT user FROM usuarios WHERE user='".$dato."'";
            //$sql="SELECT user FROM usuarios";
            $sentence=$conexion_db->StartConexion()->prepare($sql);
            $sentence->execute(array());
            $result=$sentence->fetchAll(PDO::FETCH_ASSOC);
            $sentence->closeCursor();
            return $result;
            $this->conexion_db=null;
        }
        public function validar_user($name,$pass){
            if(isset($_POST['enviar'])){
                if(empty($name) && empty($pass)){
                    echo"<p class='error'>datos vacios</p>";
                }else{
                    $conexion_db=new conexion();
                    $sql="SELECT user FROM usuarios WHERE user='".$name."' AND pass='".$pass."'";
                    $sentence=$conexion_db->StartConexion()->prepare($sql);
                    $sentence->execute();
                    
                    if($sentence->rowCount()>0){
                        session_start();
                        $_SESSION["user"]=$name;
                        header("location:menu.php");
                    }else{
                        echo"<p class='error'>¡Error! Usuario o contraseña incorrectos </p>";
                    }
                    $this->conexion_db=null;
                }
            }
        }
        public function CloseSession(){
            session_start();
            session_destroy();
            header("location:../login.php");
        }
    }
    
?>
