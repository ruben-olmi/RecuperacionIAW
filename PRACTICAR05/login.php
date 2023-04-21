<?php
if(isset($_POST["nombre"]) && isset($_POST["password"])){
    $nombre=$_POST["nombre"];
    $password=$_POST["password"];
}
if(($nombre=="ana" or $nombre=="marta" or $nombre=="jose" or $nombre=="sergio") && ($password=="123456")){
    setcookie("usuario", $nombre, time() + 60 * 60 * 24 * 7);
    header("Location:tareas.php");
}
else{
    header("Location:index.php");
    setcookie("error", $nombre, time() + 60 * 60 * 24 * 7);
}
?>