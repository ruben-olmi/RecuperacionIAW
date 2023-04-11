<?php
$peli1="";
$peli2="";
$peli3="";
if(isset($_COOKIE["peli1"]) && isset($_COOKIE["peli2"]) && isset($_COOKIE["peli3"])) {
    $peli1 = $_COOKIE["peli1"];
    $peli2 = $_COOKIE["peli2"];
    $peli3 = $_COOKIE["peli3"];
}
$error="";
if(isset($_COOKIE["error"])){
    $error=$_COOKIE["error"];
}
?>
<!doctype html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <style>
        .roja{
            background-color: red;
            width: <?php if($peli1) echo $peli1*10?>%;
        }
        .verde{
            background-color: green;
            width: <?php if($peli2) echo $peli2*10?>%;
        }
        .azul{
            background-color: blue;
            width: <?php if($peli3) echo $peli3*10?>%;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
<main>
    <header>
        <h1>Votacion de la mejor película</h1>
    </header>
    <article>
        <form action="formulario.php" method="get">
            <label for="peli1">Todo a la vez en todas partes</label>
            <input type="text" name="peli1" id="pelis" value="<?=$peli1?>">
            <label for="peli2">Sin novedad en el frente</label>
            <input type="text" name="peli2" id="pelis" value="<?=$peli2?>">
            <label for="peli3">Almas en pena de Inisherin</label>
            <input type="text" name="peli3" id="pelis" value="<?=$peli3?>">
            <button type="submit">Enviar</button>
        </form>
        <form action="borrar.php">
            <button type="submit" class="secondary">Borrar</button>
        </form>
    </article>
    <article>
        <?php
        if(isset($_COOKIE["peli1"]) && isset($_COOKIE["peli2"]) && isset($_COOKIE["peli3"])) {
            echo "<h2>" . "Resultados" . "</h2>";
            echo "<p>" . "Todo a la vez en todas partes: $peli1 votos" . "</p>";
            echo "<p class='roja'>" . "&nbsp;" . "</p>";
            echo "<p>" . "Todo a la vez en todas partes: $peli2 votos" . "</p>";
            echo "<p class='verde'>" . "&nbsp;" . "</p>";
            echo "<p>" . "Todo a la vez en todas partes: $peli3 votos" . "</p>";
            echo "<p class='azul'>" . "&nbsp;" . "</p>";
        }
        ?>
        <?php
        if(isset($_COOKIE["error"])){
            $error=$_COOKIE["error"];
            setcookie("error",false,time()-1);
            echo "<h2>Error:</h2>";
            echo "<p class='error'>$error</p>";
        }
        ?>
    </article>
</main>
</body>
</html>