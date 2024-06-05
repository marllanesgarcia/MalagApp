<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MalagApp</title>
    <link rel="stylesheet" href="./css/paginas.css">
    <link rel="stylesheet" href="./css/mediaQueryFestividades.css">
    <link rel="stylesheet" href="./css/calendar.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&family=Viga&display=swap" rel="stylesheet">
    <link href="http://www.rw-designer.com/cursor-set/evangelion" title="Get free cursors for your web.">
</head>

<style>
    /*    Estilos para el footer  */
    footer {
        width: 100%;
        background-color: rgba(0, 37, 92, 0.3);
        border-top: 1px solid #ccc;
        box-shadow: 0px -2px 5px 0px rgba(0, 0, 0, 0.007);
        height: 100%;
        text-align: center;
        padding-top: 20px;
        margin-bottom: -16px;
    }

    .spam {
        color: white;
        margin-top: 30px;
        justify-content: center;
        display: flex;
        font-family: "viga";
    }

    footer>p {
        text-align: center;
        color: white;
        margin-top: 10px;
    }

    a {
        color: black;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: './datoseventos.php',
            eventClick: function(info) {
                $('#eventInfo').html('<h2>' + info.event.title + '</h2><p>' + info.event.extendedProps.descripcion + '</p>');
                $('#eventInfo').show();
            }
        });

        calendar.render();
    });
</script>

<body>
    <div class="usuario">
        <?php
        session_start();
        if (isset($_SESSION['usuario'])) {
            echo "<h5 style='color:black;text-align:center;margin-top: 10px; font-size:large'><strong><i>¡Bienvenidx " . $_SESSION['usuario'] . " a . . .!</i></strong> </h5>";
        } else {
            echo "<h5 style='color:black;text-align:center; margin-top: 10px; font-size:large'> <strong><i>Boquerón bienvenido a . . . </i></strong></h5>";
        }
        ?>
    </div>

    <div class="titulo">
        <div class="logo" id="logo">
            <h5>MalagApp </h5>
            <img src="./logoBoqueroncio.png" alt="logotipo MalaApp">
            <img id="imagen" src="./css/img/bocadillo.png" alt="mensajito de Boqueroncio">
        </div>
        <h1>Festividades</h1>
        <button id="boton">☰</button>
        <div id="menu" class="hidden">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="usuario.php">Perfil</a></li>
                <li><a href="festividades.php">Festividades</a></li>
                <li><a href="historia.php">Historia</a></li>
                <li><a href="rutas.php">Rutas</a></li>
                <li><a href="sabermas.php">Saber Más</a></li>
                <li><a href="juego.php">Juego del Boquerón</a></li>
            </ul>
        </div>
    </div>

    <div class="contenido">
        <h4>
            Bienvenid@ a la sección Festividades donde podrás descubrir numerosos planes
            y sitios a los que ir a disfrutar de la ciudad, de sus fiestas tradicionales y eventos interesantes.
            ¿Estás preparad@ para la aventura que te espera?</br>
            Baja y apúntate a la que más te guste. En nuestro calendario interactivo podrás enterarte de todas las fiestas y eventos de Málaga.</br>
            Si te gusta, no olvides ponernos una valoración en la <a id="a1" href="index.php">Página Principal</a> donde podras enviarnos tu opinión y sugerencias.</br>
            ¡No te lo pierdas!
        </h4>
    </div>

    <div class="content-home">
        <div class="calendar-container-small" id="calendar-container">
            <div id="calendar" class="calendar"></div></br>
            <div id="eventInfo" style="display: none;"></div>
        </div>
    </div>

    <div id="container">
        <div id="anuncio1"><img src="./css/img/large.jpg" alt="Anuncio de Málaga"></div>
        <div id="contenidoGrande">
            <p>
                Málaga, la joya de la Costa del Sol, es un destino que rebosa de cultura, tradición y vida.
                Uno de los aspectos más destacados de esta vibrante ciudad son sus festividades, celebraciones que
                se arraigan profundamente en el corazón de sus habitantes y que atraen a turistas de todo el mundo.</br> </br>
                Desde la emblemática Semana Santa hasta la colorida Feria de Agosto, las festividades en Málaga son
                una manifestación palpable de la riqueza cultural y la identidad local.Cada evento está impregnado
                de historia, música, danza y gastronomía, creando una experiencia única que deja una impresión duradera en todos los que participan.
                Uno de los mayores beneficios de estas festividades es su impacto en el turismo. </br> </br>
                Málaga se convierte en un imán para los visitantes que buscan sumergirse en la autenticidad de su cultura y tradiciones.
                Los hoteles, restaurantes, tiendas y atracciones turísticas florecen durante estas celebraciones,
                generando ingresos significativos que impulsan la economía local y crean oportunidades de empleo para los residentes.
                Pero más allá de los aspectos económicos, las festividades en Málaga fomentan un sentido de comunidad
                y orgullo entre sus habitantes. Son momentos para reunirse con familiares y amigos, para compartir risas
                y alegría, y para celebrar la vida en toda su plenitud. </br> </br>
                Estos eventos fortalecen los lazos sociales, promueven la inclusión y crean recuerdos que perdurarán para siempre.
                Además, las festividades desempeñan un papel crucial en la preservación y promoción de la cultura local.
                A través de desfiles, conciertos, exposiciones y otras actividades, se transmiten de generación en generación
                las tradiciones y costumbres que definen la identidad malagueña. Esto no solo enriquece la experiencia de quienes
                viven en la ciudad, sino que también atrae a aquellos que desean conocer y apreciar la autenticidad de su patrimonio cultural.
                En resumen, las festividades en Málaga son mucho más que simples celebraciones; son expresiones vivas de la esencia
                misma de la ciudad y motores de progreso, tanto en el ámbito económico como social. Al unir a la comunidad, atraer a
                los turistas y preservar la cultura local, estas festividades continúan enriqueciendo la vida de Málaga y dejando una
                huella indeleble en todos los que tienen el privilegio de ser parte de ellas.
            </p>
        </div>
    </div>

    <h5 class="spam"> Si te ha gustado, escribe tu opinión yendo a &nbsp;<a id="a2" href="index.php">la Página Principal</a>. ¡Nos ayudarías mucho!</h5>

    <div id="anuncio2">
        <img src="./css/img/anuncio.jpg">
    </div>

    <!-- Footer -->
    <footer>
        <div class="info">
            <button onclick="mostrarModal1()"><img class="img1" src="./css/img/sobre.png" alt="email"></button>
            <button onclick="mostrarModal2()"><img class="img1" src="./css/img/telf.png" alt="telefono"></button>
            <button onclick="mostrarModal3()"><img class="img2" src="./css/img/reloj.png" alt="horario atencion al cliente"></button>
        </div>
        <p>&copy; 2024 MalagApp. Todos los derechos reservados.</p>
        <p><a href="#">Términos y Condiciones</a> | <a href="#">Política de Privacidad</a></p>
    </footer>

</body>

<script src="./js/paginas.js"></script>
<script src="./js/saberMas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>

<script href="./fullcalendar-6.1.11/packages/google-calendar/index.global.min.js"></script>
<script src="./fullcalendar-6.1.11/packages/core/index.global.min.js"></script>
<script src="./fullcalendar-6.1.11/packages/interaction/index.global.min.js"></script>
<script src="./fullcalendar-6.1.11/packages/daygrid/index.global.min.js"></script>
<script src="./fullcalendar-6.1.11/packages/timegrid/index.global.min.js"></script>
<script src="./fullcalendar-6.1.11/packages/list/index.global.min.js"></script>

</html>