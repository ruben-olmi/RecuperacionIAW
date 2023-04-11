<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>
<?php
/*100 numeros aleatorios que van del 1 al 1.000*/
$numero=mt_rand(1,1000);

for($cont=1;$cont<=100;$cont++){
    echo mt_rand(1,1000)."<br>";
}
?>
</body>
</html>