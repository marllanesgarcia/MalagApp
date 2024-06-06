/*

    En este fichero se encuentran las funcionalidades del logotipo 
    (para que se muestre la imagen oculta) y de los modales del footer.

*/
"use strict";

/* funcionalidades del logotipo */
document.addEventListener('DOMContentLoaded', function () {
    var logo = document.getElementById('logo');
    var imagen = document.getElementById('imagen');

    logo.addEventListener('click', function() {
        if (imagen.style.display === 'none') {
            imagen.style.display = 'block';
        } else {
            imagen.style.display = 'none';
        }
    });

});

/* funcionalidades de los modales */
function mostrarModal1() {
    swal({
        title: 'Correo Electrónico',
        text: 'malagApp@gmail.com ',
        icon: 'info',
        button: 'Cerrar'
    });
}

function mostrarModal2() {
    swal({
        title: 'Teléfono de Contacto',
        text: 'Móvil: 644 44 44 44\nFijo: 952 22 22 22',
        icon: 'info',
        button: 'Cerrar'
    });
}

function mostrarModal3() {
    swal({
        title: 'Horario de Atención al Cliente',
        text: 'Lunes a viernes: De 8:00h a 18:00h\nViernes y Sábado: De 9:00h a 13:00h ',
        icon: 'info',
        button: 'Cerrar'
    });
}

