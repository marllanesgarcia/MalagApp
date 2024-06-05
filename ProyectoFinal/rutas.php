<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MalagApp</title>
    <link rel="stylesheet" href="./css/rutas.css" type="text/css">
    <link rel="stylesheet" href="./css/mediaQueryRutas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&family=Viga&display=swap" rel="stylesheet">
    <link href="http://www.rw-designer.com/cursor-set/evangelion" title="Get free cursors for your web.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
</head>

<style>
    /*    Estilos para el footer  */
    footer {
        width: 100%;
        background-color: rgba(233, 73, 73, 0.5);
        border-top: 1px solid #ccc;
        box-shadow: 0px -2px 5px 0px rgba(0, 0, 0, 0.007);
        height: 100%;
        text-align: center;
        padding-top: 20px;
        margin-bottom: -16px;
    }

    footer>p {
        text-align: center;
        color: black;
        margin-top: 10px;
    }

    a{
        text-decoration: none;
        color: black;
        font-family: "viga";
    }

</style>

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
        <h1>Rutas</h1>
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
            Bienvenid@ a la sección rutas donde podrás descubrir numerosos planes
            y sitios a los que ir a disfrutar de la gastronomía de la ciudad, de sus paisajes y de sus monumentos.</br>
            ¿Estás preparad@ para la aventura que te espera?</br>
            No olvides poner tu opinión sobre nuestra página o sugerencias de rutas en nuestra página principal.
        </h4>
    </div>

    <div class="encabezado">
        <h1>Rutas Turísticas</h1>
    </div>
    <div class="containerRutas">

        <div class="ruta1">
            <h3>Ruta del Vino: <em>de Calle Larios a Alameda Principal.</em></h3>
            <img src="./css/img/mapaPrueba.png" id="mapa">
        </div>
        <div class="ruta2">
            <p>
                Esta ruta tiene como punto de partida la famosa 𝘾𝙖𝙡𝙡𝙚 𝙇𝙖𝙧𝙞𝙤𝙨.  Subiendo la Calle Larios, nos encontramos con la 𝙋𝙡𝙖𝙯𝙖 𝙙𝙚 𝙡𝙖 𝘾𝙤𝙣𝙨𝙩𝙞𝙩𝙪𝙘𝙞𝙤́𝙣 que es un lugar muy concurrente e importante de Málaga
                donde se realizan numerosos festejos. Siguiendo por la calle a mano derecha llamada Calle Granada. Continuando por Calle Granada, podrás disfrutar del ambiente del centro lleno de bares
                llenos de gente hasta llegar al primer sitio de esta ruta, la famosa bodega bar 𝙀𝙡 𝙋𝙞𝙢𝙥𝙞. Es recomendable visitar todo su interior ya que está decorado con fotografías de famosos que han pasado
                por allí como Antonio Banderas, Penélope Cruz, etc. Es una mansión del siglo XVIII, el lugar es un laberinto de patios y habitaciones pintorescas, lleno de flores, recuerdos de corridas de toros y 
                flamenco y barriles gigantes firmados por muchas celebridades. </br>
                Después de haber tomado algo en El Pimpi, disfrutando de su bonito interior y con vistas a la Alcazaba y al Teatro Romano, nos dirigimos a la difurcación que se encuentra antes de El Pimpi y 
                nos dirigimos hacia arriba para así llegar muy cerquita a nuetro segundo sitio de esta ruta 𝙇𝙤𝙨 𝙋𝙖𝙩𝙞𝙤𝙨 𝙙𝙚 𝘽𝙚𝙖𝙩𝙖𝙨. Para alguien que le gusta beber vino, este lugar le ofrece más de 600 etiquetas
                pudiendo degustarlas sin tener que comprar la botella; al menos 50 botellas disponibles por copa aproximadamente. Además, el interior es como las casas de los siglos XVIII y XIX incluyen varios 
                patios, restos arqueológicos, columnas típicas y una impresionante vidriera.. ¡Lo recomendable es reservar para no quedarte sin sitio!</br>
                <span id="extraContent">
                Después de degustar unos buenos vinos, volvemos donde estaba El Pimpi y seguimos carre arriba para así dar con Calle sta. Ana. donde podrán ver la 𝙋𝙡𝙖𝙯𝙖 𝙙𝙚 𝙡𝙖 𝙈𝙚𝙧𝙘𝙚𝙙, otro de los lugares importantes del
                centro donde está el monumento a Torrijos y una estatua de Pablo Picasso. Bajando dicha Calle, vamos a topar con la rotonda de Las Tres Gracias, el Paseo del Parque, los Jardines de Pedro Luis Alfonso y el ayuntamiento al lado de 
                dichos jardines cuya fachada es digna de admirar. Pues bien, nuestro tercer sitio de esta ruta estará enfrente de dicha rotonda, la casa de Vinos 𝙇𝙖 𝙊𝙙𝙞𝙨𝙚𝙖. Está en una casa del siglo XVIII y aquí puedes disfrutar de 
                vinos locales e incluso comprarlos para llevarlos a casa. Para los menos bebedores, si no te gusta el vino, también ofrecen un vermut casero y ginebras de Málaga que vas a querer llevartelas a casa. Lo curioso de este sitio es que en su parte trasera,
                incluye una pequeña cueva.</br>
                Una vez ya habiendo terminado de beber ese rico vermut casero, retomamos la ruta yendo por la rotonda de Las Tres Gracias, que se puede ver desde La Odisea, dirección puerto. Cruzando los semáforos,
                vamos a dar al famoso 𝙈𝙪𝙚𝙡𝙡𝙚 𝙐𝙣𝙤. En su entrada podremos ver un cubo de colores, junto al 𝙢𝙪𝙨𝙚𝙤 𝙋𝙤𝙢𝙥𝙞𝙙𝙤𝙪 y numerosos locales. Recorriendo el muelle uno recto hacia abajo, disfrutando de las bonitas vistas que nos 
                ofrece, encontraremos el cuarto sitio de esta ruta se encuentra en paralelo con el muelle uno 𝘼𝙣𝙮𝙬𝙖𝙮 𝙒𝙞𝙣𝙚 𝘽𝙖𝙧. Con muy buen servicio, carta de vinos y quesos, es un sitio que se encuentra al lado del muelle uno que todo
                amante de vinos va a adorar si le apetece de repente una copa. El precio es algo algo pero la calidad - precio es excelente. Es un sitio medio nuevo y según muchas opiniones no defrauda.</br>
                Una vez acabada nuestra copa de vino y tabla de quesos y jamón, nos dirigimos de nuevo a la rotonda de Las Tres Gracias y recorremos el 𝙋𝙖𝙨𝙚𝙤 𝙙𝙚𝙡 𝙋𝙖𝙧𝙦𝙪𝙚, disfrutando unas vistas hermosas y sombra agradable,
                sobre todo en verano. Cruzamos la 𝙋𝙡𝙖𝙯𝙖 𝙙𝙚 𝙡𝙖 𝙈𝙖𝙧𝙞𝙣𝙖, justo en frente de Calle Larios donde iniciamos esta ruta anteriormente, y caminamos por la 𝘼𝙡𝙖𝙢𝙚𝙙𝙖 𝙋𝙧𝙞𝙣𝙘𝙞𝙥𝙖𝙡 bajo esos árboles centenarios hasta nuestro
                último destino en esta ruta: 𝘼𝙣𝙩𝙞𝙜𝙪𝙖 𝘾𝙖𝙨𝙖 𝙙𝙚 𝙂𝙪𝙖𝙧𝙙𝙞𝙖. Fundada en 1840, está situado en uno de los lugares más antiguos de la ciudad y ofrece un rico vermut y tipicos vinos dulces de la ciudad. Lo curioso
                es que el vino se sirve mediante grifos directos de barriles que se pueden ver a simple vista y las etiquetas de dichos vinos están escritos con tiza sobre el mostrador del lugar. Es un sitio perfecto donde
                poder tapear degustando un buen vino de Málaga con tapas frías como queso, gambas, etc, que tienen una excelente combinación con el vino que ofrecen.</br>
                Y hasta aqui, con la barriga llega y el alcohol subido, termina <em>La ruta del Vino.</em>
                </span>
                </br>
                <button class="show-more" onclick="toggleContent()">Ver más</button>
            </p>    
            <img src="https://www.anywaywinebar.com/wp-content/uploads/2023/04/BAR-DE-VINOS-MALAGA-2.jpg" id="imagenProducto1">
        </div>

        <div class="ruta1">
            <h3>Ruta Histórica: <em>de Calle Larios a Catillo de Gibralfaro.</em></h3>
            <img src="./css/img/mapaPrueba2.png" id="mapa">
        </div>
        <div class="ruta2">
            <p>
                Esta ruta tiene como punto de partida la famosa 𝘾𝙖𝙡𝙡𝙚 𝙇𝙖𝙧𝙞𝙤𝙨. Subimos Calle Larios y, cuando veamos una tienda Oysho, giramos a la derecha siguiendo esa calle hasta al final donde podremos el primer sitio de esta ruta: 
                𝙇𝙖 𝘾𝙖𝙩𝙚𝙙𝙧𝙖𝙡 𝙙𝙚 𝙡𝙖 𝙚𝙣𝙘𝙖𝙧𝙣𝙖𝙘𝙞𝙤́𝙣 𝙙𝙚 𝙈𝙖́𝙡𝙖𝙜𝙖. Conocida también como la “La Manquita”, es uno de los tesoros arquitectónicos del siglo XVI más impresionantes de la ciudad. Su fachada es estilo renacentista y
                se le dice "Manquita" ya que le falta una torre por construir y, pasados los años, se convirtió en una característica de dicho monumento. La Catedral de Málaga es un verdadero tesoro cultural que cautiva a aquellos que 
                la visitan, y representa un símbolo inigualable del patrimonio histórico y artístico de la ciudad. El precio general de la entrada son 10€ y tiene un horario de <em>10:00 a 19:30 de Lunes a Viernes, 10:00 a 18:00 los Sabados y 
                14:00 a 18:00 los Domingos.</em> </br>
                Después de visitar la Catedral, seguimos el recorrido por calle Molina Lario, girando a la derecha en la primera calle. Seguimos por Calle Císter, pudiendo ver 𝙇𝙤𝙨 𝙅𝙖𝙧𝙙𝙞𝙣𝙚𝙨 𝙙𝙚 𝙡𝙖 𝘾𝙖𝙩𝙚𝙙𝙧𝙖𝙡 a mano derecha muy bonitos, hasta el final de la calle donde se 
                va a poder apreciar como dos de los lugares de esta ruta están casi pared con pared. El primero de ellos y al que nos vamos a dirigir va a ser al 𝙏𝙚𝙖𝙩𝙧𝙤 𝙍𝙤𝙢𝙖𝙣𝙤 𝙙𝙚 𝙈𝙖́𝙡𝙖𝙜𝙖. Este monumento es muy importante, un tesoro histórico que trata de la época de la
                <em>Malaca romana</em>. Fue construido en el siglo I a.C y ha sido, a lo largo de los años, mantenido cuidadosamente para que no se perdiese ese valor histórico. </br>
                <span id="extraContent1">
                Este tesoro arqueológico es un tesoro vivo del legado romano en la ciudad donde se hacían todo tipo de espectáculos. <em>Tiene entrada gratuita y horario: Martes a Sábado 10:00 a 18:00, Domingos y festivos 10:00 a 16:00 y Lunes cerrado.</em></br>
                Después de ver el Teatro Romano, no nos tenemos que ir muy lejos para ir a la Alcazaba, bajando un poco podemos ver unas escaleras de piedra que nos llevan a la entrada de la misma donde comprar la entrada de acceso. En este caso pasamos de
                monumentos históricos romanos a musulmanes. La alcazaba de Málaga es un monumento importante musulman, una fortaleza que ofrece desde lo más alto vistas panorámicas a toda Málaga, tanto del puerto como  del casco antiguo. Sus orígenes son del 
                siglo XI y su costrucción tiene tanto elementos árabes como romanos. Los elementos de construcción nos ofrecen indormación como la tan buena construcción con materiales locales tales como piedras y ladrillos. Además, por dentro tiene unos preciosos 
                jardines  y patios interiores decorados con fuentes y azulejos junto a un museo arqueológico. Sin duda entrar es una experiencia cultural única. <em>La tarifa de entrada son 3.50€ y los horarios: En Verano 9:00 a 20:00 y en Invierno 9:00 a 18:00. Los Domingos
                la entrada es gratis a partir de las 14:00.</em></br>
                Saliendo de la Alcazaba, subimos por 𝘾𝙖𝙡𝙡𝙚 𝘼𝙡𝙘𝙖𝙯𝙖𝙗𝙞𝙡𝙡𝙖, justo donde está el Teatro Romano, hasta arriba del todo, viendo a la mano derecha el Cine Albéniz de Málaga. Una vez subimos podemos ver el cuarto sitio de este recorrido: la 𝙋𝙡𝙖𝙯𝙖 𝙙𝙚 𝙡𝙖 𝙈𝙚𝙧𝙘𝙚𝙙.
                Es un lugar donde se encuentran la historia, la cultura y la vida cotidiana de la ciudad. Dicho lugar ha sido testigo de numerosos encuentros históricos además de haber sido la plaza donde nació el artista famoso 𝙋𝙖𝙗𝙡𝙤 𝙋𝙞𝙘𝙖𝙨𝙨𝙤.
                Justo en dicho lugar se encuentra el quinto lugar de la ruta que tiene que ver con esta Plaza: 𝙡𝙖 𝘾𝙖𝙨𝙖 𝙉𝙖𝙩𝙖𝙡 𝙙𝙚 𝙋𝙞𝙘𝙖𝙨𝙨𝙤. Es un museo que rinde homenaje a su figura y vida. Una estatua de bronce adorna la Plaza con la figura del artista que anima a muchos a 
                sentarse a su lado y sacarse algunas fotos. Además, en esta plaza se puede disfrutar de alguna bebida a modo de descanso disfrutando de las vistas de dicho monumento. </br>
                Después de haber repuesto las energías, ahora nos dirigimos hacia el último punto del recorrido: 𝙚𝙡 𝘾𝙖𝙨𝙩𝙞𝙡𝙡𝙤 𝙙𝙚 𝙂𝙞𝙗𝙧𝙖𝙡𝙛𝙖𝙧𝙤. Bajando por Calle sta. Ana, hay que hacer un cambio de sentido para poder acceder a las escaleras que suben hacia el Castillo. Se encuentra en
                la cima de la colina y su construcción es del siglo XIV. Una vez se haya subido la cuesta, en su interior se puede explorar diferentes salas y torres, además de las preciosas vistas panorámicas que hay desde la cima del castillo ya que ofrece vistas panorámicas 
                de la ciudad y del Mar Mediterraneo. <em>El precio de entrada es 3.50€ y el horario: Noviembre a Marzo todos los dias 9:00 a 18:00 y Abril a Octubre 9:00 a 20:00. Los Domingos son gratis a partir de las 14:00.</em></br>
                Y hasta aqui, habiendo hecho un buen cardio y llenos de conocimientos, termina <em>La ruta Histórica.</em>
                </span>
                </br>
                <button class="show-more1" onclick="toggleContent1()">Ver más</button>
            </p>
            <img src="https://www.hola.com/imagenes/viajes/20230116224596/malaga-ciudad-museos/1-189-881/3-ayy-rk5a9y-a.jpg" id="imagenProducto2">
        </div>

        <div class="ruta1">
            <h3>Ruta de Museos: <em>de Málaga Centro Alameda a Muelle Uno</em> </h3>
            <img src="./css/img/mapaPrueba3.png" id="mapa">
        </div>
        <div class="ruta2">
            <p>
                Empezamos esta ruta en la parada de tren 𝙈𝙖́𝙡𝙖𝙜𝙖 𝘾𝙚𝙣𝙩𝙧𝙤 𝘼𝙡𝙖𝙢𝙚𝙙𝙖 y seguimos la acera al lado del rio hacia abajo. Automáticamente nos vamos a encontrar con la primera parada de la ruta: 𝘾𝙚𝙣𝙩𝙧𝙤 𝙙𝙚 𝘼𝙧𝙩𝙚 𝘾𝙤𝙣𝙩𝙚𝙢𝙥𝙤𝙧𝙖́𝙣𝙚𝙤 𝙙𝙚 𝙈𝙖́𝙡𝙖𝙜𝙖.
                Es uno de los mejores museos donde conocer el arte de todos los tiempos y de todas las formas imaginables. Aquí veras tanto pinturas como esculturas en las numerosas obras fijas y temporales que cruzan este museo. Lo curioso de este
                museo, entre otras, son los talleres que ofrece de dibujo y pintura. Contantemente se suelen ver exposiciones temporales muy interesantes, ¿cual te tocará ver a ti? ¡Comentalo abajo en comentarios! <em> La entrada de este
                museo es gratuita y el horario: Invierno 9:00 a 23:30 y Verano 9:00 a 14:00 - 17:00 a 21:30, Los Lunes cerrado.</em></br>
                Después de ver el museo, vamos caminando rio arriba hasta la 𝘼𝙡𝙖𝙢𝙚𝙙𝙖 𝙋𝙧𝙞𝙣𝙘𝙞𝙥𝙖𝙡, pudiendo disfrutar de sus árboles centenarios, pasando por . Seguimos el recorrido hacia arriba 𝙋𝙡𝙖𝙯𝙖 𝙙𝙚 𝙡𝙖 𝙈𝙖𝙧𝙞𝙣𝙖, justo en frente de Calle Larios,
                hasta la Calle Molina Lario donde podremos ver la bonita fachada del hotel Málaga Palacio. Subiendo dicha calle, nos encontraremos a mano derecha 𝙇𝙖 𝘾𝙖𝙩𝙚𝙙𝙧𝙖𝙡 𝙙𝙚 𝙡𝙖 𝙚𝙣𝙘𝙖𝙧𝙣𝙖𝙘𝙞𝙤́𝙣 𝙙𝙚 𝙈𝙖́𝙡𝙖𝙜𝙖, y en la primera calle a la derecha continuaremos
                hasta la difurcación subiendo por la Calle San Agustín. Subiendo dicha calle, nos encontraremos con nuestro segundo destino: 𝙈𝙪𝙨𝙚𝙤 𝙙𝙚 𝙋𝙖𝙗𝙡𝙤 𝙋𝙞𝙘𝙖𝙨𝙨𝙤. Este museo es una verdadera experiencia para los amantes del Arte y para aquellos que 
                les guste las obras y vida del pintor. Hay aproximadamente 40 pinturas, casi 50 dibujos, al rededor de 40 obras gráficas y aproximadamente 17 esculturas originales del autor. Además, el museo cuenta con más de 200 obras pertenecientes a
                la Fundación Almine, haciendo un total de 400 obras aproximadamente, todas de Picasso. <em> El precio de la entrada ronda los 7€ - 9€ y el horario: De Lunes a Domingo 10:00 a 19:00. </em></br>
                <span id="extraContent2">
                Una vez finalizado el recorrido del museo, volvermos calle abajo hasta la calle Molina Lario donde ahora nos vamos a dirigir hacia la calle de la izquierda, recorriendola hasta la 𝙋𝙡𝙖𝙯𝙖 𝙙𝙚 𝙡𝙖 𝘾𝙤𝙣𝙨𝙩𝙞𝙩𝙪𝙘𝙞𝙤́𝙣 donde, un poco más
                delante, se encuentra nuestro tercer sitio de la ruta: 𝙈𝙪𝙨𝙚𝙤 𝙏𝙝𝙮𝙨𝙨𝙚𝙣 𝙙𝙚 𝙈𝙖́𝙡𝙖𝙜𝙖. En este museo predominan obras de arte de todos los tiempos, es una de las mejores opciones para conocer todo lo relacionado con el arte antiguo.
                Además, al igual que el anterior museo, cuenta con unas obras fijas y exposiciones temporales de las que te vas a ir encontrando. Ante la duda, es recomendable echar un ojo a las exposiciones que puede haber cuando vayas a visitar el museo.
                Su <a href="https://www.carmenthyssenmalaga.org/" target="_blank">Página Web</a> es la mejor opción. <em> La entradas rondan entre los 6€ - 10€ dependiendo de la entrada y los horarios: Martes a Domingos 10:00 a 20:00 y Lunes cerrado.</em></br>
                Una vez acabado, volvemos a la Plaza de la Contitución y nos dirigimos hacia la Calle Granada para así continuar nuestra ruta. Caminamos por Calle Granada hasta encontrarnos con la Calle Caldedería, siguiendo por Calle Casapalma justo delante, bajando después por Calle Beatas y
                llegando al siguiente museo de la ruta: 𝙈𝙪𝙨𝙚𝙤 𝙄𝙣𝙩𝙚𝙧𝙖𝙘𝙩𝙞𝙫𝙤 𝙙𝙚 𝙡𝙖 𝙈𝙪́𝙨𝙞𝙘𝙖. Es uno de los museos interactivos más interesantes con mucha variedad de instrumentos que podrás ver en las diferentes vitrinas además de exposiciones temporales.
                Debido a que es un museo interactivo, podrás tener la oportunidad de que te enseñen a tocar diversos instrumentos. Este museo tiene un gran poder sanador ya que la música relaja mucho. <em> El precio son 5€, los niños son gratis y los mayores de 
                65 años son 3€. Los horarios: Martes a Domingo 10:30 a 19:30, los Lunes cierra.</em></br>
                Por último nos vamos a dirigir calle abajo, encontrandonos con la famosa bodega bar 𝙀𝙡 𝙋𝙞𝙢𝙥𝙞, siguiendo por Plaza de la Juderia y Calle Zegri que están juntas hasta Calle Alcazabilla que ya es toda hacia abajo llegando al 𝙈𝙪𝙨𝙚𝙤 𝙙𝙚 𝙈𝙖́𝙡𝙖𝙜𝙖. 
                Seguimos cruzando el paseo del parque hasta 𝙀𝙡 𝙈𝙪𝙚𝙡𝙡𝙚 𝙐𝙣𝙤, recorriendo el bonito paisaje que nos deja el Mar Mediterraneo hasta la última parada de la ruta: museo 𝘾𝙚𝙣𝙩𝙧𝙚 𝙋𝙤𝙢𝙥𝙞𝙙𝙤𝙪 𝙈𝙖́𝙡𝙖𝙜𝙖. Se caracteríza por el cubo de colores que adorna su fachada y que
                es muy vistoso. Este muso es uno de los lugares más vanguardistas que hay en Málaga, además que el diseño arquitectónico del museo es curioso. Es el único museo Pompidou fuera de Francia. Muestra un estilo Vanguardista y moderno de arte contemporáneo
                que sólo podrás verlo si visitas este o su sede principal en Francia. <em>¿A que es increíble?</em> En cuanto a exposiciones, siempre está cambiando de exposiciones y deja siempre una oportunidad de que, cada vez que se visite el museo, sea una nueva
                experiencia tras otra. <em> El precio ronda entre los 4€ - 9€ y el horario: Miércoles a Lunes 9:30 a 20:00, Los Martes Cierra.</em></br>
                Y hasta aqui, habiendo hecho un buen cardio y nutridos de conocimientos, termina <em>La ruta de Museos.</em>
                </span>
                </br>
                <button class="show-more2" onclick="toggleContent2()">Ver más</button>
                </p>
            <img src="https://media.traveler.es/photos/61377d89c6202df759161330/master/w_1600%2Cc_limit/85175.jpg" id="imagenProducto3">
        </div>

        <div class="h5">
            <h5> Si te ha gustado, escribe tu opinión yendo a <a href="index.php">&nbsp; la Página Principal </a>. ¡Nos ayudarías mucho!</h5>
        </div>

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


<script>
    function toggleContent() {
    var content = document.getElementById("extraContent");
    var link = document.querySelector(".show-more");
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
        link.textContent = "Ver menos";
    } else {
        content.style.display = "none";
        link.textContent = "Ver más";
    }
}


function toggleContent1() {
    var content = document.getElementById("extraContent1");
    var link = document.querySelector(".show-more1");
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
        link.textContent = "Ver menos";
    } else {
        content.style.display = "none";
        link.textContent = "Ver más";
    }
}

function toggleContent2() {
    var content = document.getElementById("extraContent2");
    var link = document.querySelector(".show-more2");
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
        link.textContent = "Ver menos";
    } else {
        content.style.display = "none";
        link.textContent = "Ver más";
    }
}

    </script>
</body>

<script src="./js/paginas.js"></script>
<script src="./js/saberMas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</html>