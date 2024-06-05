<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MalagApp</title>
    <link rel="stylesheet" href="./css/juego.css">
    <link rel="stylesheet" href="./css/mediaQueryJuego.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
</head>
<style>
    /*    Estilos para el footer  */
    footer {
        width: 100%;
        background-color: rgba(25, 129, 51, 0.377);
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

    .correct { background-color: green; }

    .incorrect { background-color: red; }

    .disabled { 
        pointer-events: none; 
        opacity: 0.5; 
    }

    a{
        color: black;
    }
</style>
<body class="juego">
    <div class="usuario">
        <?php
        session_start();
        $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Boquerón';
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
        <h1>El Juego del Boquerón</h1>
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
            Bienvenid@ a nuestro <em>Juego del Boquerón</em> donde pondrás a juego tus conocimientos sobre Málaga.</br>
            ¿Serás un auténtico Malagueño? o como se dice a los malagueños: un boquerón... ¡eso hay que verlo!</br>
            Además, si te gusta, no olvides ponernos una valoración en la <a href="index.php">Página Principal</a> donde podras enviarnos tu opinión y sugerencias.</br>
            ¡No te lo pierdas y mucha suerte en nuestro test, boquerón!
        </h4>
    </div>

    <div id="contadorPreguntas">Pregunta 1/10</div>
    <form id="cuestionario" method="post">
        <h3 id="pregunta"></h3>
        <button class="respuesta" name="respuesta" value="1"></button>
        <button class="respuesta" name="respuesta" value="2"></button>
        <button class="respuesta" name="respuesta" value="3"></button>
        <p id="resultado"></p>
    </form>

    <div id="botones">
        <button id="botonSiguiente">Siguiente</button>
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
<script>
     var phpNombreUsuario = <?php echo json_encode(isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Boquerón'); ?>;
</script>

<script src="./js/paginas.js"></script>
<script src="./js/saberMas.js"></script>
<script src="./js/juego.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</html>