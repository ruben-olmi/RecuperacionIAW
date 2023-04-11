<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .par{
            color: red;
            font-size: 30px;
        }
        .impar{
            color: green;
            font-size: 30px;
        }
    </style>
</head>
<body>
<?php

/*los pares salen en rojo y los impares en verde*/
for($cont=1;$cont<=100;$cont++){
    $n=mt_rand(1,1000);
    if($n%2==0){
        echo "<p class='par'>".$n."</p>";
    }
    else{
        echo "<p class='impar'>".$n."</p>";
    }
}
?>
</body>
</html>