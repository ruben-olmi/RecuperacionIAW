<!doctype html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Lista de tareas</h1>
<main>
    <form action="nueva.php" method="POST">
        <input type="text" id="tarea" name="tarea" placeholder="Nueva tarea">
        <button id="mas" class="anadir">+</button>
    </form>
    <section>
        <ul id="lista">
        </ul>
    </section>
</main>
</body>
</html>