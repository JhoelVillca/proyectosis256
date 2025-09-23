<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS256</title>
</head>
<body>
    <h1>MI PRIMERA VISTA</h1>
    <p>Hola desde la vista invocar.blade.php </p>
    <p>{{ $Saludo }}</p>
    <p>{{ $mensaje }}</p>

    <h1>----------</h1>

    <p>
        <?php
            echo $Saludo ;
        ?>
    </p>

    <p>
        <?php
            echo $mensaje ;
        ?>
    </p>

    
</body>
</html>