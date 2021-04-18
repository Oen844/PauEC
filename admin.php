<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pagina de administracion</title>
</head>
<body>
<h1>Administracion</h1>

<?php
    session_start();
    
    var_dump($_SESSION['user']);


?>
    <a class="btn btn-primary" href="teacher.php" role="button">Crear profesor</a>
    <a class="btn btn-primary" href="mod.php" role="button">Modificar Datos</a>
    <a class="btn btn-primary" href="cursos.php" role="button">Crear cursos</a>
</body>
</html>