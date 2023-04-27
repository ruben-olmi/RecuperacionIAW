<?php
session_start();
include_once "bd.php";
if(isset($_POST["nombre"]) && isset($_POST["password"])){
    $nombre=$_POST["nombre"];
    $password=$_POST["password"];
    try{
        $con=getConexion();
        $sql="SELECT id_usuario FROM usuarios ".
            "WHERE nombre=? AND password=?";
        $st=$con->prepare($sql);
        $st->bind_param("ss",$nombre,$password);
        $st->execute();
        $st->bind_result($id_usuario);
        $st->fetch();
        if($id_usuario){
            $_SESSION["id_usuario"]=$id_usuario;
            $_SESSION["nombre"]=$nombre;
            header("Location:tareas.php");
        }
        else{
        }
        $st->close();
        $con->close();
    }
    catch (mysqli_sql_exception $e){
    }
}
else{
}
?>