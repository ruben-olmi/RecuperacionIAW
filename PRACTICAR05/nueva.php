<?php
session_start();
include_once "bd.php";
if(isset($_SESSION["id_usuario"]) &&
    isset($_POST["tarea"])){
    $id_usuario=$_SESSION["id_usuario"];
    $tarea=trim($_POST["tarea"]);
    if(strlen($tarea)==0){
        $_SESSION["error"]="La tarea tiene que trener texto";
        header("Location:tareas.php");
    }
    else {
        try {
            $con = getConexion();
            $sql = "insert into tareas(titulo, id_usuario) " .
                "VALUES(?,?)";
            $st = $con->prepare($sql);
            $st->bind_param("si", $tarea, $id_usuario);
            $st->execute();
            $st->close();
            $con->close();
            header("Location:tareas.php");

        } catch (mysqli_sql_exception $e) {
        }
    }

}
else{
    header("Location:index.php");
}