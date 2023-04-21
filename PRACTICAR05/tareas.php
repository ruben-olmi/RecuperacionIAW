<?php
include_once "bd.php";
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css?v=4">
</head>
<body>
<h1>Lista de Tareas</h1>
<section>
    <form action="nueva.php" method="post">
        <input type="text" name="tarea" id="tarea" placeholder="Escriba una nueva tarea">
        <label for="tarea" id="tarea"></label><br>
        <button type="submit">Añadir</button>
    </form>
</section>
<section>
    <ul id="lista">
        <h2>Lista</h2>
        <?php
        try{
            $con=getConexion();
            $sql="SELECT id_tarea,titulo FROM tareas";
            $st=$con->prepare($sql);
            $st->execute();
            $st->bind_result($id,$titulo);
            while($st->fetch()){
                    echo "<li>$titulo "."<a class='titulo' href='borrar.php?id=$id'>Borrar</a></li><br>";
            }
            $con->close();
        }
        catch(mysqli_sql_exception $e){
            $error=$e->getCode();
            //echo "<li>{$e->getCode()}</li>";
        }
        ?>
        <a type='submit' class='borrar' href='borrar2.php?id=$id'>Borrar Lista</a><br><br><br>
        <a type='submit' class='cerrar' href='cerrar.php'>Cerrar Sesion</a>
    </ul>
</section>
</body>
</html>