<?php
try {
    $conexion=new PDO("mysql:host=localhost; dbname=practica_login","root","");//creamos la conexion con la basse de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//linea en duda vamos a buscarla
    $sql="SELECT * FROM USUARIOS WHERE USUARIOS= :login AND PASS= :password";
    $resultado=$conexion->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login",$login);//asigana la variable 
    $resultado->bindValue(":password",$password);
    $resultado->execute();
    $numero_registro =$resultado->rowCount();
    if ($numero_registro!=0){
        session_start();//utilizamos para abrir o arrancar una sesion de usuario
        $_SESSION["usuario"]=$_POST["login"];//aqui gardamos el nombre de usuario solo si aparecio dentro de la base de datos
        header("location:http://192.168.100.12/pruebanaye.php");
    }else{
        header("location:http://192.168.100.12");

    }


} catch (\Throwable $th) {
    //throw $th;
}
?>