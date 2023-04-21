<?php
include_once "conexion.php";
if(isset($_POST["tarea"]) &&  strlen(trim($_POST["tarea"]))>0) {
    try{
        $con=getConexion();
        $sql="INSERT INTO tareas (titulo) VALUES (?)";
        $st=$con->prepare($sql);
        $st->bind_param("s",$_POST["tarea"]);
        $st->execute();
        $st->close();
        $con->close();
    }
    catch (mysqli_sql_exception $e){
        $error=$e->getCode();
    }
}
header("Location: index.php");

?>