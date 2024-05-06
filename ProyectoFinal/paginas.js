"use strict";

document.addEventListener('DOMContentLoaded', function () {
    const boton = document.getElementById('boton');
    const menu = document.getElementById('menu');


    boton.addEventListener('click', function () {
        event.stopPropagation();
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', function (event) {
        if (event.target !== menu && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });

    var map = L.map('map').setView([36.71786, -4.420279], 15); // Coordenadas aproximadas de Málaga
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var vialia = L.marker([36.7014, -4.4355]).addTo(map).bindPopup('Centro Comercial Vialia Málaga');
    var alcazaba = L.marker([36.721365, -4.415814]).addTo(map).bindPopup('La Alcazaba de Málaga');
    var calleLarios = L.marker([36.71876, -4.421510]).addTo(map).bindPopup('Calle Larios');
    var catedral = L.marker([36.7203, -4.4193]).addTo(map).bindPopup('Catedral de Málaga');
    var muelleUno = L.marker([36.71786, -4.41299]).addTo(map).bindPopup('Muelle Uno');
    var teatroRomano = L.marker([36.7213, -4.4168]).addTo(map).bindPopup('Teatro Romano de Málaga');
    var museoPicasso = L.marker([36.72189, -4.41848]).addTo(map).bindPopup('Museo Picasso de Málaga');
    var catilloGibralfaro = L.marker([36.7239, -4.41083]).addTo(map).bindPopup('Castillo de Gibralfaro');
    var plazaMarced = L.marker([36.7238, -4.417196]).addTo(map).bindPopup('Plaza de la Merced');
    var palacioAduana = L.marker([36.7204, -4.4173764]).addTo(map).bindPopup('Palacio de la Aduana');
    var puenteAlemanes = L.marker([36.7194, -4.4254]).addTo(map).bindPopup('Puente de los Alemanes');
    var iglesiaSagradoCorazon = L.marker([36.72191, -4.42332]).addTo(map).bindPopup('Iglesia del Sagrado Corazón');
    var mercadoAtarazanas = L.marker([36.71868, -4.424092]).addTo(map).bindPopup('Mercado de Atarazanas');
    var museoThyssen = L.marker([36.7215814, -4.423020]).addTo(map).bindPopup('Museo Carmen Thyssen de Málaga');
    var parqueMalaga = L.marker([36.71931, -4.4156305]).addTo(map).bindPopup('Parque de Málaga (Parque de la Alameda)');
    var cementerioInglés = L.marker([36.72138, -4.40720601]).addTo(map).bindPopup('Cementerio Municipal inglés de Málaga');
    var plazaToros = L.marker([36.7205, -4.410692]).addTo(map).bindPopup('Plaza de Toros de la Malagueta');
    var explanadaEstacion = L.marker([36.71212, -4.43191]).addTo(map).bindPopup('Explanada de la Estación María Zambrano Málaga');


});
