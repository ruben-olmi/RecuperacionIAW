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
<h1>Acceso de Usuarios</h1>
<section>
<form action="login.php" method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre de usuario">
    <label for="nombre" id="nombre"></label><br>
    <input type="password" name="password" id="password" placeholder="Escriba su contraseña">
    <label for="password" id="password"></label><br>
    <button type="submit">Entrar</button>
    <br>
</form>
</section>
<?php
if(isset($_COOKIE["error"])){
    echo "<p>Error Usuario o Contraseña Incorrectos</p>";
    setcookie("error",false,time()-1);
}
?>
</body>
</html>