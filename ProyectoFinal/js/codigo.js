"use strict";

document.addEventListener('DOMContentLoaded', function () {
    var divLogo = document.getElementById('logo');
    var menu = document.querySelector('.menu');
    var loginBtn = document.getElementById('login');
    var registroBtn = document.getElementById('registro');
    var volverBtn = document.getElementById('volver');
    var festividadesBtn = document.getElementById('festividades');
    var historiaBtn = document.getElementById('historia');
    var rutasBtn = document.getElementById('rutas');
    var saberMasBtn = document.getElementById('opcion');
    var juegoBtn = document.getElementById('juego');
    var logo = document.getElementById('logo');
    var imagen = document.getElementById('imagen');

    function toggleMenu() {
        if (menu.style.display === 'none' || menu.style.display === '') {
            menu.style.display = 'block';
         }
    }

    if (divLogo) {
        divLogo.addEventListener('click', function () {
            toggleMenu();
        });
    }

    // Mostrar el menú después de 3 segundos
    setTimeout(function () {
        menu.style.display = 'block';
        setTimeout(function () {
            menu.style.transform = 'translateX(0)';
            menu.style.opacity = '10';
        }, 400);
        
    }, 2000);

    if (loginBtn) {
        loginBtn.addEventListener('click', function () {
            window.location.href = 'login.php';
        });
    }

    if (registroBtn) {
        registroBtn.addEventListener('click', function () {
            window.location.href = 'registrarse.php';
        });
    }

    if (volverBtn) {
        volverBtn.addEventListener('click', function () {
            window.location.href = 'index.php';
        });
    }

    festividadesBtn.addEventListener('click',function (){
        window.location.href = 'festividades.php';
    });

    historiaBtn.addEventListener('click',function (){
        window.location.href = 'historia.php';
    });

    rutasBtn.addEventListener('click',function (){
        window.location.href = 'rutas.php';
    });

    saberMasBtn.addEventListener('click',function (){
        window.location.href = 'saberMas.php';
    });

    juegoBtn.addEventListener('click',function (){
        window.location.href = 'juego.php';
    });

})
function mostrarMenu() {
    var divsPequeños = document.querySelector('.menu');
    if (divsPequeños) {
        var estiloDisplay = window.getComputedStyle(divsPequeños).getPropertyValue('display');

        if (estiloDisplay === 'none') {
            divsPequeños.style.display = 'block';
            setTimeout(function () {
                divsPequeños.style.opacity = '10';
                divsPequeños.style.transform = 'translateX(0)';
            }, 80);
        } else {
            divsPequeños.style.opacity = '0';
            divsPequeños.style.transform = 'translateX(-25px)';
            setTimeout(function () {
                divsPequeños.style.display = 'none';
            }, 500);
        }
    }
}


