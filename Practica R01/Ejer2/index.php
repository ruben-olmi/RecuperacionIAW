<?php
$texto="";
if(isset($_POST["texto"])){
    $texto="<p>".$_POST["texto"]."</p>";
}
$texto2="";
if(isset($_POST["texto2"])){
    $texto2=$_POST["texto2"];
}
$texto=$texto.$texto2;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <style>
        #texto2{
            display: none;
        }
    </style>
</head>
<body>
<h1>Texto interminable</h1>
<form action="index.php" method="post">
    <label for="texto">Texto</label><br>
    <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
    <textarea name="texto2" id="texto2" cols="30" rows="10"></textarea><br>
    <button>Enviar</button>
</form>
</body>
</html>