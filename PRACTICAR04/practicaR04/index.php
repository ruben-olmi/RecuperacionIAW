<?php
include_once "conexion.php";
$error=0;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta na
          me="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="css/estilos.css?v=4">
</head>
<body>
<h1>Lista de tareas</h1>
<main>
<form action="nueva.php" method="POST">
    <input type="text" id="tarea" name="tarea" placeholder="Nueva tarea">
    <button id="mas" class="anadir">+</button>
</form>
<section>
    <ul id="lista">
        <?php
        try{
            $con=getConexion();
            $sql="SELECT id_tarea,titulo,marcada FROM tareas";
            $st=$con->prepare($sql);
            $st->execute();
            $st->bind_result($id,$titulo,$marcada);
            while($st->fetch()){
                if($marcada==0){
                    echo "<li>$titulo ";
                    echo "<a href='marcar.php?id=$id' class='marcar'>Marcar</a> ";
                }
                else{
                    echo "<li><span class='marcada'>$titulo</span> ";
                    echo "<a href='desmarcar.php?id=$id' class='desmarcar'>Desmarcar</a> ";
                }

                echo "<a href='quitar.php?id=$id'>Borrar</a></li>";
            }
            $con->close();
        }
        catch(mysqli_sql_exception $e){
            $error=$e->getCode();
            //echo "<li>{$e->getCode()}</li>";
        }
        ?>
    </ul>
</section>
<section id="errores">
    <?php
    if ($error!=0){
        echo "<p>".getMensajeError($error)."</p>";
    }
    ?>
</section>
</main>
</body>
</html>