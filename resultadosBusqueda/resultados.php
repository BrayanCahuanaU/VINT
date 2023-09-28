<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="resultados.css">
    <link rel='stylesheet' href='.//footer/footer.css'>
    <link rel='stylesheet' href='../cabecera/navBar.css'>
    <link rel='stylesheet' href='../buscador/buscador.css'>
    <title>VINT - Resultados</title>
</head>
<body>
    <?php
        // Importa el componente de barra de cabecera(navBar)
        include '../cabecera/navBar.php';
    ?>
    <div class="resultadosContenedor">
        <h2>Resultados de tu busqueda  {busquedaIngresada}</h2>
        <p>Se muestran resultados de los anuncios mas recientes.</p>
        <?php
            // Importa el componente de buscador
            include '../buscador/buscador.php';
        ?>
    </div>

</body>
</html>