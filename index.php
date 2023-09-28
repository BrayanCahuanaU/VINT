<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Archivos con los estilos de las paginas -->
    <link rel="stylesheet" href="index.css">
    <link rel='stylesheet' href='footer/footer.css'>
    <link rel='stylesheet' href='cabecera/navBar.css'>
    <link rel='stylesheet' href='buscador/buscador.css'>
    <title>VINT</title>
</head>
<body>
    
    <?php
        // Importa el componente de barra de cabecera(navBar)
        include 'cabecera/navBar.php';
    ?>

    <div class="buscadorContenedor">
        <h1>¿Que haremos hoy?</h1>
        <p>Elige entre la amplia gama de cursos y/o docentes dispuestos para ayudarte.</p>
        <?php
            // Importa el componente de buscador
            include 'buscador/buscador.php';
        ?>
    </div>

    <div class="cursosContenedor">
        <h2>Cursos mas solicitados</h2>
        <p>¡No decides por cual comenzar? Prueba algunos de los cursos mas solicitados por nuestros usuarios</p>
        <div class="cursosMasBuscados">
            <div class="curso"><img src="https://cdn-icons-png.flaticon.com/512/1467/1467187.png" alt=""><p>Fisica</p></div>
            <div class="curso"><img src="https://cdn-icons-png.flaticon.com/512/1467/1467187.png" alt=""><p>Matematica</p></div>
            <div class="curso"><img src="https://cdn-icons-png.flaticon.com/512/1467/1467187.png" alt=""><p>Ingles</p></div>
        </div>
    </div>

    <div class="docentesContenedor">
        <h2>Mejores porfesores por asignatura</h2>
        <p>Te mostramos el ranking con los los profesores mas destacados en su reputacion.</p>
        <div class="rankingDocentes">
            <div class="docente">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJqJ2tJEHn_txK89oANPQ29QMydwdyBaAeK4ctVx6psc9WBbiIlvwHWqrrMQ9TJgnh3uY&usqp=CAU" alt="">
                <h3>Ing. Karin Rosas</h3>
                <p>Fisica</p>
                <div class="reputacion">
                    <div class="calificacion"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="">3.3</div>
                    <div class="precio"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiotu-OwvHH6A-MIZ7H6Ts3S54rm-a8WCvRpoYeeXEAwTHSXE_lW2Y1ETinpYPREuRT4w&usqp=CAU" alt="">80</div>
                </div>
            </div>
            <div class="docente">
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>Ing. Angel Montesinos</h3>
                <p>Fisica</p>
                <div class="reputacion">
                    <div class="calificacion"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="">3.3</div>
                    <div class="precio"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiotu-OwvHH6A-MIZ7H6Ts3S54rm-a8WCvRpoYeeXEAwTHSXE_lW2Y1ETinpYPREuRT4w&usqp=CAU" alt="">80</div>
                </div>
            </div>
            <div class="docente">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJqJ2tJEHn_txK89oANPQ29QMydwdyBaAeK4ctVx6psc9WBbiIlvwHWqrrMQ9TJgnh3uY&usqp=CAU" alt="">
                <h3>Ing. Paredes Esquicha</h3>
                <p>Fisica</p>
                <div class="reputacion">
                    <div class="calificacion"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="">3.3</div>
                    <div class="precio"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiotu-OwvHH6A-MIZ7H6Ts3S54rm-a8WCvRpoYeeXEAwTHSXE_lW2Y1ETinpYPREuRT4w&usqp=CAU" alt="">80</div>
                </div>
            </div>
        </div>
    </div>

    <?php
        // Importa el componente de pie de pagina (footer)
        include 'footer/footer.php';
    ?>

</body>
</html>