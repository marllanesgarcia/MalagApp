/*

    En este fichero se encuentran las funciones del logotipo
    (para que se muestre el mensaje oculto) y la funcionalidad del
    juego presente en la página juego.php

*/
"use strict";

/* funcionalidades del logo*/
document.addEventListener('DOMContentLoaded', function () {
    var logo = document.getElementById('logo');
    var imagen = document.getElementById('imagen');

    logo.addEventListener('click', function () {
        if (imagen.style.display === 'none') {
            imagen.style.display = 'block';
        } else {
            imagen.style.display = 'none';
        }
    });
});

/* funcionalidades del juego */
document.addEventListener('DOMContentLoaded', (event) => {
    let preguntasMostradas = [];
    let preguntaActual = null;
    let numPreguntasRespondidas = 0;
    let numRespuestasCorrectas = 0;
    const totalPreguntas = 10;
    const nombreUsuario = (typeof phpNombreUsuario !== 'undefined' && phpNombreUsuario) ? phpNombreUsuario : 'Boquerón';

    function actualizarContador() {
        document.getElementById('contadorPreguntas').innerText = `Pregunta ${numPreguntasRespondidas + 1}/${totalPreguntas}`;
    }

    function cargarPregunta() {
        fetch('funcionesJuego.php')
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    document.getElementById('pregunta').innerText = data.error;
                } else {
                    preguntaActual = data;
                    document.getElementById('pregunta').innerText = data.pregunta;
                    document.querySelector('button.respuesta[value="1"]').innerText = data.opcion1;
                    document.querySelector('button.respuesta[value="2"]').innerText = data.opcion2;
                    document.querySelector('button.respuesta[value="3"]').innerText = data.opcion3;

                    document.getElementById('resultado').innerText = '';
                    document.querySelectorAll('.respuesta').forEach(button => {
                        button.classList.remove('correct', 'incorrect', 'disabled');
                    });

                    actualizarContador();
                }
            });
    }

    function enviarRespuesta(valor) {
        const correcta = preguntaActual.respuesta;
        const resultado = document.getElementById('resultado');

        document.querySelectorAll('.respuesta').forEach(button => {
            button.classList.add('disabled');
        });

        if (valor == correcta) {
            resultado.innerText = "¡Correcto!";
            document.querySelector(`button.respuesta[value="${valor}"]`).classList.add('correct');
            numRespuestasCorrectas++;
        } else {
            resultado.innerText = `Incorrecto. La respuesta correcta es: ${preguntaActual['opcion' + correcta]}`;
            document.querySelector(`button.respuesta[value="${valor}"]`).classList.add('incorrect');
            document.querySelector(`button.respuesta[value="${correcta}"]`).classList.add('correct');
        }

        numPreguntasRespondidas++;

        if (numPreguntasRespondidas >= totalPreguntas) {
            const numRespuestasIncorrectas = totalPreguntas - numRespuestasCorrectas;

            fetch('funcionesGuardarPartida.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    aciertos: numRespuestasCorrectas,
                    fallos: numRespuestasIncorrectas
                })
            });

            if (numRespuestasCorrectas > totalPreguntas / 2) {
                swal(`Enhorabuena, ${nombreUsuario}`, `Acertaste ${numRespuestasCorrectas} preguntas y fallaste ${numRespuestasIncorrectas}.\n ¡Eres todo un malagueño, Boquerón!`, "success");
            } else {
                swal(`Perdiste, ${nombreUsuario}`, `Acertaste ${numRespuestasCorrectas} preguntas y fallaste ${numRespuestasIncorrectas}.\n ¡La próxima vez será, Boquerón!`, "error");
            }

            numPreguntasRespondidas = 0;
            numRespuestasCorrectas = 0;

            preguntasMostradas = [];
        } else {
            preguntasMostradas.push(preguntaActual.id);
        }
    }

    document.getElementById('botonSiguiente').addEventListener('click', cargarPregunta);

    document.querySelectorAll('.respuesta').forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            if (!button.classList.contains('disabled')) {
                enviarRespuesta(button.value);
            }
        });
    });

    cargarPregunta();
});
