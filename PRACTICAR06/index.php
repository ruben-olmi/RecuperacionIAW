<?php
include_once "bd.php";
$letra="A";
$orden="localidad";
$o=1;
if(isset($_GET["letra"])){
    $letra=$_GET["letra"];
}
if(isset($_GET["orden"])){
    if($_GET["orden"]=='2') {
        $orden="provincia,localidad";
        $o=2;
    }
    elseif($_GET["orden"]=='3') {
        $orden="poblacion desc";
        $o=3;
    }
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
            echo "<a href='index.php?letra=$abc&orden=$o'>";
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
        $sql = "SELECT l.nombre localidad,poblacion, ".
            "p.nombre provincia ".
            "FROM localidades l ".
            "JOIN provincias p USING(n_provincia) ".
            "WHERE INSTR(l.nombre,?)=1 ".
            "ORDER BY $orden ";
        $st = $con->prepare($sql);
        $st->bind_param("s",$letra);
        $st->execute();
        $st->bind_result($localidad, $poblacion, $provincia);
        echo "<table>";
        echo "<th><a href='index.php?orden=1&letra=$letra'>Localidad</a></th>";
        echo "<th><a href='index.php?orden=2&letra=$letra'>Provincia</a></th>";
        echo "<th><a href='index.php?orden=3&letra=$letra'>Poblacion</a></th>";
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