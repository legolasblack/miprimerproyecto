<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   session_start();
   if (!isset($_SESSION["usuario"])) {
       header("location:http://192.168.100.12");
       }
    ?>
    <h1>Bienvenidos hola anallely me das un beso</h1>
    <h2>Aqui solo entran usuarios loguiados</h2>
</body>
</html>