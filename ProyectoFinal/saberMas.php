<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MalagApp</title>
    <link rel="stylesheet" href="./css/saberMas.css">
    <link rel="stylesheet" href="./css/mediaQuerySaberMas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
</head>

<style>
    /*    Estilos para el footer  */
    footer {
        width: 100%;
        background-color: rgba(107, 18, 61, 0.5);
        border-top: 1px solid #ccc;
        box-shadow: 0px -2px 5px 0px rgba(0, 0, 0, 0.007);
        height: 100%;
        text-align: center;
        padding-top: 20px;
        margin-bottom: -16px;
    }

    footer>p {
        text-align: center;
        color: white;
        margin-top: 10px;
    }

    a{
        color: black;
    }
</style>

<body class="sabermas">
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
        <h1>Saber Más</h1>
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
            Bienvenidx a la página Saber Más donde podrás saber un poco más sobre quiénes somos y qué hacemos. Aquí
            sabrás tanto nuestra historia como las personas que lo formamos.</br>
            ¡Muchas gracias por confiar en nosotros!
        </h4>
    </div>

    <div id="contenidoGrande">
        <div id="fotoCompañia"><img src="./css/img/malagApp1.jpg" alt="Personal MalagApp"></div>
        <div id="contenidoTexto">
            <p>
                Nosotros somos MalagApp, una empresa destinada a ofrecer una muy buena información
                sobre Málaga, tanto su cultura como su historia y festividades. Destinada para todos los públicos,
                esta web ofrece gran número de facilidades para poder navegar y empaparse de lo que nos
                puede brindar tal ciudad como ésta. Es muy importante informarse sobre lo que nos aporta ya que
                es uno de los principales puntos turísticos de España y, además, qué mejor que MalagApp para que
                los propios malagueños aprendan más sobre su ciudad. Además, contamos con una mascota
                muy divertida llamada Boqueroncio, quien ayudará a los más pequeños a aprender sobre la
                cultura que les rodea y que tienen por descubrir. ¿Cree que solo acaba ahí? Por supuesto que no.
                Contamos con un juego interactivo para ver si nuestro público se empampó bien de la bonita cultura
                y historia que tiene nuestra ciudad, ¿estarás a la altura? <a href="juego.php">¡Juega con nosotros!</a>
            </p>
        </div>
    </div>
    <div id="contenidoGrande">
        <div id="contenidoTexto2">
            <p>
                Desde nuestra sede en Benalmádena, un pueblo de Málaga, queremos transmitir cercanía con la
                ciudadanía para resolver dudas, obtener valoraciones para poder mejorar como empresa y
                marca ya que, ante todo, queremos ser un referente para que cada una de las personas obtenga una
                muy buena experiencia de la ciudad para que repita y siga nutriendose con los conocimientos que posee
                esta bonita ciudad.
                Por ello, ponemos a disposición de los usuarios nuestro horario de atención al cliente para cualquier
                fallo o duda, además del correo y teléfono móvil.
                </br></br>
                Somos una empresa que siempre está en proceso de mejora con nuevas implementaciones para la app,
                </br><em>¿Te las vas a perder?</em>
            </p>
        </div>
        <div id="fotoCompañia2"><img src="./css/img/malagApp2.jpg" alt="Personal MalagApp"></div>
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


</html>