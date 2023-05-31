<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 3 PHP - intregacion con html</title>
</head>
<body>
    <h1>usando PHP dentro deun HTML</h1>
    <?php
    $alumno = "joseluis";
    $edad = 16;
    $escuela = "cetis 107";
    $especialidad = "programacion";
    ?>

    <form action="">
        <label for="">nombre del alumno:</label>
        <input type="text" value=<?php echo $alumno; ?>>

        <label for="">edad</label>
        <input type="number" value=<?php echo $edad; ?>>

        <input type="submit" value=<?php echo "'inscribirse a'".$especialidad."'";  ?>>
    </form>
    <br><br>

    <h2>calificacioes</h2><br>
    calculo diferencial: <?php echo rand(5,10); ?><br>
    fisica <?php echo rand(5,10); ?><br>
    ecologia <?php echo rand(5,10); ?><br>
    ingles <?php echo rand(5,10); ?><br>
    programacion <?php echo rand(5,10); ?><br>

    promedio <?php echo rand(5,10); ?><br>
</body>
</html>