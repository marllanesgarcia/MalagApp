<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="./css/mediaQueryIndex.css">
    <link rel="stylesheet" href="./css/formulario.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&family=Viga&display=swap" rel="stylesheet">

    <title>MalagApp</title>
</head>

<style>
    /*    Estilos para el footer  */
    footer {
        width: 100%;
        background-color: rgba(255, 255, 255, 0.144);
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

<body class="body">

    <div class="usuario">
        <?php
        session_start();
        if (isset($_SESSION['usuario'])) {
            echo "<h5 style='color:white;text-align:center;margin-top: 10px;'>¡Bienvenidx de vuelta, <strong><i>" . $_SESSION['usuario'] . "</i></strong>!</h5>";
        } else {
            echo "<h5 style='color:white;text-align:center; margin-top: 10px; margin-right: 80px;'> Hola,  <strong><i>boquerón</i></strong>. . . </h5>";
        }
        ?>
    </div>

    <div class="titulo">
        <h1>¡Bienvenidx a MalagApp!</h1>
        <?php
        if (!isset($_SESSION['usuario'])) {
            echo "<div style='float:right; position: fixed;top: 70px; right: 30px; z-index:1000;'>
                  <input type='button' class='btn btn-outline-dark' value='Login' id='login'>
                  <input type='button' class='btn btn-dark' value='Registrarse' id='registro'>
              </div>";
        } else if (isset($_SESSION['usuario'])) {
            echo "<div class='cerrarSesion' style='float:right><form action='funcionCerrarSesion.php' method='post'><input type='submit' class='btn btn-outline-dark' value='Cerrar Sesión'></form>";
        }
        ?>
    </div>

    <div class="paginaPrincipal">
        <div class="containerGrande">
            <div class="logo" id="logo">
                <img src="./logoBoqueroncio.png" alt="logotipo MalaApp">
            </div>

            <div class="menu">
                <div class="festividades" id="festividades" type='button'>
                    <h5>Festividades</h5>
                </div>

                <div class="historia" id="historia" type='button'>
                    <h5>Historia</h5>
                </div>

                <div class="rutas" id="rutas" type='button'>
                    <h5>Rutas</h5>
                </div>

                <div class="opcion" id="opcion" type='button'>
                    <h5>Saber Más</h5>
                </div>

                <div class="juego" id="juego" type='button'>
                    <h5>Juego del <br>Boquerón</h5>
                </div>
            </div>
        </div>

        <div class="opiniones">
            <h4>Estamos interesados en vuestra opinión y sugerencias.</br> Así que, a continuación, facilitamos
                un espacio para que podáis enviarnos vuestras sugerencias y opiniones sobre nuestra página.</br>
                <em>¡Envía tus ideas aquí!</em>
            </h4><br>
        </div>
        <form action="funcionesRutas.php" method="post" id="formulario">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="puntuacion">Puntuación:</label><br>
            <select id="puntuacion" name="puntuacion" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <br><br>
            <label for="comentario">Comentario:</label><br>
            <textarea id="comentario" name="comentario" rows="4" cols="40" placeholder="¡Escribe aqui!"></textarea><br>
            <input type="submit" value="Enviar" id="enviar">
        </form>

        </br>

        <h2 id="tituloComent">Comentarios Destacados</h2>
        <div id="comentariosDestacados">
            <br>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "proyectofinal";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            $sql = "SELECT nombre, puntuacion, comentario FROM comentarios WHERE puntuacion IN (4, 5) ORDER BY id DESC LIMIT 5";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='comentario' style='display: inline-block; height: auto; margin-right: 20px; padding: 20px; -webkit-line-clamp: 5; overflow: hidden;'>";
                    echo "<h3 style='width: auto; heigth: auto;overflow-wrap: break-word;'>" . htmlspecialchars($row['nombre']) . "</h3></br>" . "<h3>" . str_repeat("⭐", $row['puntuacion']) . "</h3>";
                    echo "<p style='margin: 0; -webkit-line-clamp: 4;-webkit-box-orient: vertical; overflow-wrap: break-word;'>" . htmlspecialchars($row['comentario']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No hay comentarios destacados disponibles.";
            }

            $conn->close();
            ?>
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
    </div>
</body>

<script src="./js/jquery-3.7.1.min.js"></script>
<script src="./js/codigo.js"></script>
<script src="./js/paginas.js"></script>
<script src="./js/saberMas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>