<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Archivos.css/indexStyle.css">
    <title>ONG CARPINCHOSA | INICIO</title>
</head>

<body>
    <header>
        <a href="index.php" class="logoHeader">
            <div style="padding-top: 10px; padding-bottom: 10px; width: 3.5em;"><img src="./Archivos.imagenes/logo.png" width="90px"></div>
            <div style="width: 9.6em;">ONG CARPINCHOSA</div>
        </a>

        <div class="enlacesHeader">
            <ul>
                <li><a href="./index.php" class="enlace">INICIO</a></li>
                <li><a href="./Archivos.html/carpinchadas.php" class="enlace">CARPINCHADAS</a></li>
                <li><a href="./Archivos.html/galeria.php" class="enlace">GALERIA</a></li>
                <li><a href="./Archivos.html/contacto.php" class="enlace">UNETE</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section>
            <article>
                <img src="./Archivos.imagenes/INICIO/img1.jpg" width="858vh">
                <h1 style="font-family: 'HORIZON'; font-size: 1.6em;">ONG CARPINCHOSA ASISTE A NUEVA CAMADA DE CARPINCHOS</h1><br>
                <span style="font-size: 1.7em;">
                    <?php
                    echo "La ONG Carpinchosa ha anunciado con entusiasmo su reciente intervención para asistir a una nueva
                    camada de carpinchos en peligro. Gracias a los esfuerzos dedicados de nuestro equipo de expertos en
                    conservación y cuidado animal, hemos logrado proporcionar atención médica y cuidados especializados
                    a esta adorable camada de crías de carpinchos.";
                    ?>
                </span>
            </article>

            <article>
                <h1 style="font-family: 'HORIZON'; font-size: 1.6em; margin-top: 0%; margin-bottom: 0%;">ALGUNAS CARPINCHADAS POPULARES</h1><br>

                <div class="carpinchadas">
                    <?php
                    $historias = [
                        ["LA GRAN FUGA ACUATICA", "Un grupo de carpinchos traviesos en un zoológico ideó un plan ingenioso para escapar de su recinto..."],
                        ["EL ASALTO A LA COCINA", "Una familia tenía un carpincho como mascota en su casa. Un día, mientras todos dormían..."],
                        ["LA FIESTA DEL JARDIN", "Un grupo de carpinchos salvajes invadió el jardín de una casa en busca de diversión y comida..."]
                    ];

                    foreach ($historias as $historia) {
                        echo "<div class='carpielemento'>";
                        echo "<h2 style='font-family: HORIZON; font-size: 1.4em;'>{$historia[0]}</h2>";
                        echo "<span style='font-size: 1.7em;'>{$historia[1]}</span>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </article>
        </section>

        <aside>
            <h1 style="font-family: 'HORIZON';">INFORMACION SOBRE LOS CARPINCHOS</h1>
            <img src="./Archivos.imagenes/INICIO/aside.jpeg" style="width: 100%; margin-bottom: 5%; margin-top: 5%;">
            <span style="font-size: 1.5em;">
                <?php
                echo "Los carpinchos, también conocidos como capibaras, son los roedores más grandes del mundo y son nativos de América del Sur...";
                ?>
            </span>
        </aside>
    </main>

    <footer>
        <center><a href="#TOP" class="verMas" style="font-size: 20px">VOLVER ARRIBA</a></center>
        <div class="cuadroFooter">
            <h1 style="font-family: 'HORIZON'; color: black; margin-bottom: 5%;">CONTACTO</h1>
            <span class="enlacesFooter">
                Correo electrónico: info@ongcarpinchosa.com <br><br>
                Teléfono: +1 (123) 456-7890 <br><br>
                Dirección: Calle Carpincho, Nº 123, Ciudad Feliz, País Carpinchón <br><br>
            </span>
        </div>

        <div class="cuadroFooter">
            <h1 style="font-family: 'HORIZON'; margin-bottom: 5%; color: black;">REDES SOCIALES</h1>
            <span class="enlacesFooter">
                <a href="#">Facebook</a> <br><br> 
                <a href="#">Twitter</a> <br><br> 
                <a href="#">Instagram</a>
            </span>
        </div>

        <div class="cuadroFooter">
            <h1 style="font-family: 'HORIZON'; margin-bottom: 5%; color: black;">ENLACES RAPIDOS</h1>
            <span class="enlacesFooter">
                <a href="./index.php">Inicio</a> <br><br> 
                <a href="./Archivos.html/carpinchadas.php">Carpinchadas</a> <br><br> 
                <a href="./Archivos.html/galeria.php">Galería</a> <br><br> 
                <a href="./Archivos.html/contacto.php">Unete</a>
            </span>
        </div>
    </footer>
</body>

</html>
