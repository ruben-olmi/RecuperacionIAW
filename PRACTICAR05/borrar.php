<?php
include_once "bd.php";
if(isset($_GET["id"])){
    try{
        $con=getConexion();
        $sql="DELETE FROM tareas WHERE id_tarea=?";
        $st=$con->prepare($sql);
        $st->bind_param("i",$_GET["id"]);
        $st->execute();
        $st->close();
        $con->close();
    }
    catch (mysqli_sql_exception $e){
        $error=$e->getCode();
    }
}

header("Location: tareas.php");

?>