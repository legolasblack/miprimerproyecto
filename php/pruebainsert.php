<?php
try {
    $base=new pdo('mysql:host=localhost; dbname=practica_login','root','');
    $sql="INSERT INTO USUARIOS(usuarios, pass) VALUES('Diego', 1234)";
    $resultado=$base->prepare($sql);
    $resultado->execute();

    //* /con este archivo hacemos una insersion limpia en la base de datos para probar la conexion a la 
    //base de datos. */

} catch (\Throwable $th) {
    //throw $th;
}

?>