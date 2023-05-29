<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nestplayer</title>
    <link rel="stylesheet" href="./Style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <!-- <img src="./icons8-notas-musicales-48.png" alt=""> -->
        </div>

        <ul class="lista">
            <li><a href="#">Sopórte técnico</a></li>
            <li><a href="">Contáctanos</a></li>
        </ul>
    </header>

    <div class="container">
        <div class="fondo">
            <div class="introduccion">
                <h1>Nestplayer</h1>
                <p>Un reproductor ligero, rápido y funcional</p>
            </div>
        </div>

        <div class="notice">
            <h5>Aviso</h5>
            <p>Este proyecto continúa en desarrollo por lo que si se detecta algún error durante su uso sería de gran ayuda que envíes el reporte del mismo, igualmente el proyecto está planeado para portearse a android, por lo que te pedimos paciencia</p>
        </div>

        <div class="presentacion">
            <h2 class="Titu-Pres">¿Porqué deberías usar NestPlayer?</h2>
            <ol>
                <li>El software es totalmente OpenSource</li>
                <li>La aplicación ha sido desarrollada con el objetivo de ser lo menos demandante en aspectos de rendimiento para tu dispositivo</li>
                <li>Cuenta con una interfaz simple que te permite enfocarte en lo que deseas hacer</li>
                <li>Peso de la aplicación realmente mínimo</li>
            </ol>

            <div class="content-img-ui">
                <h1 class="titu-content-img">Galería de fotos :)</h1>
                <div class="img-text">
                    <h2 class="Titu-Img">Explora una interfaz simple</h2>
                    <img class="img" src="./Images/ui-principal.png" alt="">
                    <p class="text-aside"></p>
                </div>

                <div class="img-text">
                    <h2 class="Titu-Img">Disfruta de un uso de recursos mínimo</h2>
                    <img class="img" src="./Images/useofram.png" alt="">
                </div>

                <div class="img-text">
                    <h2 class="Titu-Img">Relajate cantando con el lector de letras incluido</h2>
                    <img class="img" src="./Images/lyrics.png" alt="">
                </div>
            </div>


            
            
        </div>

        <div class="botones">
            <h1 class="titu-botones">Descargar ahora</h1>
            <div class="dispo-botones">
                <button><i class="fab fa-windows"></i>Descargar para Windows</button>
                <button onclick="descargarAndroid()"> <i class="fab fa-android"></i> Descargar para android</button>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="contentFooter">
            <h2 class="titu-content">Síguenos en nuestras redes</h2>
            <ul class="redes">
                <li> <a href="" class="github"><i class="fab fa-github"></i>Github</a></li>
                <li> <a href="" class="facebook"><i class="fab fa-facebook"></i> Facebook</a></li>
                <li> <a href="" class="instagram"><i class="fab fa-instagram"></i>Instagram</a></li>
                <li> <a href="" class="youtube"><i class="fab fa-youtube"></i>Youtube</a></li>
            </ul>
        </div>

        <div class="info-extra">
            <h3 class="info-titulo-principal">Comunícate con nosotros</h3>
            <h3 class="info-titulos">Ubicacion</h3>
            <p class="info-p">San pedro atmatla, Zacatlan Puebla</p>
            <h3 class="info-titulos">Número telefónico</h3>
            <p class="info-p">5625327995</p>
            <h3 class="info-titulos">Correo Electrónico</h3>
            <p class="info-p">jjv20618@gmail.com</p>
        </div>
    </footer>
</body>
<script src="./JS/script.js"></script>
</html>