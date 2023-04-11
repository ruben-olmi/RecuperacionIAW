<?php
$modo="claro";
if(isset($_GET["modo"])){
    $modo=$_GET["modo"];
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claro/Oscuro</title>
    <?php
    if($modo=="claro"){
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">';
    }
    else{
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">';
    }
    ?>
</head>
<body>
<h1>Soy la siguiente pagina</h1>
<form action="index.php" method="GET">
    <input type="radio" name="modo" value="claro" id="claro" checked>
    <label for="claro">Claro</label>
    <input type="radio" name="modo" value="oscuro" id="oscuro">
    <label for="oscuro">Oscuro</label>
    <button>Enviar</button>
</form>
<p><a href="index.php?modo=<?=$modo?>">Ir a la siguiente página</a></p>
</body>
</html>