<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MalagApp</title>
    <link rel="stylesheet" href="./css/historia.css">
    <link rel="stylesheet" href="./css/mediaQueryHistoria.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&family=Viga&display=swap" rel="stylesheet">
</head>
<style>
    /*    Estilos para el footer  */
    footer {
        width: 100%;
        background-color: rgba(107, 61, 18, 0.6);
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

    a {
        color: black;
    }
</style>
<body class="historia">
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
        <h1>Historia</h1>
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
            Bienvenid@ a la sección Historia donde podrás ver todos los monumentos de Málaga, donde están situados y una breve
            descripción de su historia ya que, si quieres saber más, échale un ojo a nuestra sección <a href="rutas.php">Rutas</a></br>
            ¿Estás preparad@ para la aventura que te espera?</br>
            No lo pienses más y empecemos la aventura por esta bonita tierra. ¡Pincha en cada uno de los globitos azules del mapa para averiguar de qué monumento
            se trata cada uno y qué información esconde!
        </h4>
    </div>

    <div id="map-container">
        <div id="map"></div>        
    </div>
     
    <div id="container">
        <div id="anuncio1"><img src="./css/img/filadelfia.png" alt="Anuncio de Málaga"></div>
        <div id="contenidoGrande">
            <p>
            Málaga, una ciudad con más de 2.800 años de historia, se erige como una joya cultural en la costa sur de España. 
            Desde sus humildes comienzos como un asentamiento fenicio en el siglo VIII a.C., hasta su florecimiento como una 
            próspera ciudad bajo el dominio musulmán y su posterior transformación durante la era cristiana, Málaga ha sido 
            testigo de una rica y diversa evolución a lo largo de los siglos. </br></br>
            La Alcazaba, imponente fortaleza musulmana construida en el siglo XI, se alza majestuosa sobre la ciudad, 
            recordando el pasado árabe de Málaga. Sus murallas, torres y jardines ofrecen un fascinante vistazo a la vida en la época medieval. 
            Junto a ella, el Castillo de Gibralfaro, construido en el siglo XIV, domina el paisaje urbano y ofrece impresionantes vistas panorámicas de la ciudad y el mar.
            En el corazón del casco antiguo de Málaga se encuentra la Catedral de Málaga, una obra maestra del Renacimiento español. 
            Conocida como "La Manquita" debido a su fachada incompleta, esta majestuosa catedral es un símbolo de la riqueza cultural 
            y arquitectónica de la ciudad. Cerca de la catedral, los restos del Teatro Romano de Málaga nos transportan a la antigua 
            época romana de la ciudad, recordándonos su rica herencia histórica.</br>
            El Museo Picasso Málaga, ubicado en un hermoso palacio del siglo XVI, alberga una impresionante colección de obras del 
            famoso pintor nacido en la ciudad. Sus pinturas, esculturas y cerámicas ofrecen una visión única del genio creativo de Picasso y su profunda conexión con Málaga.
            Caminando por las estrechas calles del centro histórico, nos encontramos con la Plaza de la Merced, donde la Casa Natal de 
            Picasso nos recuerda el vínculo eterno entre el artista y su ciudad natal. Cerca de allí, el Mercado de Atarazanas, con su 
            achada de estilo mudéjar, ofrece una colorida experiencia culinaria donde los sabores locales se mezclan en un festín para los sentidos.</br></br>
            En la zona de la explanada de la Estación María Zambrano, el bullicio del transporte moderno se combina con la serenidad de los 
            parques urbanos y la frescura del mar Mediterráneo. La estación de tren, el Centro Comercial Vialia Málaga y el Parque de Huelin 
            dan vida a esta vibrante área de la ciudad, donde la historia y la modernidad se entrelazan en un fascinante tapiz urbano.
            Desde la imponente Alcazaba hasta la moderna Plaza de Toros de La Malagueta, Málaga ofrece un viaje a través del tiempo, donde cada 
            monumento y sitio importante cuenta una historia de la rica y fascinante historia de la ciudad. En cada rincón, en cada callejuela, 
            en cada plaza, Málaga respira historia, arte y cultura, invitando a los visitantes a sumergirse en su encanto eterno.
            </p>
        </div>
    </div> 

    <h5 class="spam"> Si te ha gustado, escribe tu opinión yendo a &nbsp;<a href="index.php">la Página Principal</a>. ¡Nos ayudarías mucho!</h5> 

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
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
</html>