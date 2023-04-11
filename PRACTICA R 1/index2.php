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
$numero=mt_rand(1,100);
if($numero==1)
{
    echo 'PAR';
}
else{
    echo 'IMPAR';
}
?>
</body>
</html>