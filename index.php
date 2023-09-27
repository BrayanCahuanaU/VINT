<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./buscador/buscador.css">

    <title>VINT</title>
</head>
<body>

    <?php
        // Importa el componente de barra de cabecera(navBar)
        include './navBar/navBar.php';
    ?>

    <div class="buscadorContenedor">
        <h1>¿Que haremos hoy?</h1>
        <p>Elige entre la amplia gama de cursos y/o docentes dispuestos para ayudarte.</p>
        <?php
            // Importa el componente de buscador
            include './buscador/buscador.php';
        ?>
    </div>
</body>
</html>