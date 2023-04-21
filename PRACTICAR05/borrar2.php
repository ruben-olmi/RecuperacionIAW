<?php
include_once "bd.php";
if(isset($_GET["id"])){
    try{
        $con=getConexion();
        $sql="delete from tareas where id_tarea>0";
        $st=$con->prepare($sql);
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