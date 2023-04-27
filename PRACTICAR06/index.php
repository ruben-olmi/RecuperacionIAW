<?php
include_once "bd.php";
$letra='A';
if(isset($_GET["letra"])){
    $letra=$_GET["letra"];
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css?v=2">
</head>
<body>
<h1>Listado de Localidades</h1>
<nav>
    <p>Listar por letra:
        <?php
        for($i = 65; $i <= 90; $i++) {
            $abc=chr($i);
            echo "<a href='index.php?letra=$abc'>";
            if($letra==$abc){
                echo "<mark>$abc</mark>";
            }
            else{
                echo "$abc";
            }
            echo "</a>";
        }
        ?>
    </p>
</nav>
<?php
    try {
        $con = getConexion();
        $sql = "select l.nombre as localidad,p.nombre as provincia,l.poblacion
                from localidades l
                join provincias p using(n_provincia)
                where upper(l.nombre) like '$letra%'
                order by localidad asc";
        $st = $con->prepare($sql);
        $st->execute();
        $st->bind_result($localidad, $provincia, $poblacion);
        echo "<table>";
        echo "<th><a href='index.php'>Localidad</a></th>";
        echo "<th><a href='index.php'>Provincia</a></th>";
        echo "<th><a href='index.php'>Poblacion</a></th>";
        while ($st->fetch()) {
            echo "<tr>";
            echo "<td>$localidad";
            echo "<td>$provincia";
            echo "<td>$poblacion";
        }
        $st->close();
        $con->close();
    } catch (mysqli_sql_exception $e) {
    }
?>
</body>
</html>