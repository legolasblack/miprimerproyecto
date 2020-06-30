<?php
$usuario= $_POST["usu"];
$contraseña= $_POST["contra"];

echo $usuario;
echo $contraseña;

try {
    $base= new PDO('mysql:host=localhost;dbname=practica_login','root','');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
    $sql="INSERT INTO USUARIOS(usuarios, pass) VALUES(:usu, :contra)";
    //inserto de funcion en sql con 

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":usu"=>$usuario,":contra"=>$contraseña));

   /*  echo "registro insertado"; */
   header("location:http://localhost");

    $resultado->closeCursor();//cerramos la conexion a la base de datos
} catch (\Throwable $th) {
    echo "linea del error: ". $e->getLine();

}finally{
    $base=null;
}

?>