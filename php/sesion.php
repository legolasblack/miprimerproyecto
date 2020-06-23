<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:http://192.168.100.12");
}

?>