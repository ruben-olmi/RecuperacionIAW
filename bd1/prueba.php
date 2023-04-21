<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
error_reporting(E_ERROR);//esto es mejor ponerlo al final de crear la pagina para ir viendo los errores
$driver=new mysqli_driver();
$driver->report_mode=MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
try {
    $con=new mysqli("localhost","palabras",
        "uierfh3478ghu3f39jinerf","palabras");
    echo "<p>conexion correcta</p>";
    $con->close();
}
catch(mysqli_sql_exception $e){
    echo "<p>Error al conectar con la base de datos</p>";
    echo "<p>".$e->getCode()."</p>";
    //2002 no se encuentra el servidor
    //1045 usuario incorrecto
    //1044 Base de Datos incorrecta
}
?>
</body>
</html>