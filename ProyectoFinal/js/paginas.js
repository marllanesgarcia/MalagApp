/*

    En este fichero se encuentran las funcionalidades del logo (para que se
    muestre la imagen), del menú desplegable y del mapa.

*/
"use strict";

/*funcionalidades logo */
document.addEventListener('DOMContentLoaded', function () {
    const boton = document.getElementById('boton');
    const menu = document.getElementById('menu');
    var logo = document.getElementById('logo');
    var imagen = document.getElementById('imagen');

    logo.addEventListener('click', function () {
        if (imagen.style.display === 'none') {
            imagen.style.display = 'block';
        } else {
            imagen.style.display = 'none';
        }
    });
/* funcionalidades del menu desplegable */
    boton.addEventListener('click', function () {
        event.stopPropagation();
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', function (event) {
        if (event.target !== menu && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
 /* Funcionalidades del mapa */
    var map = L.map('map').setView([36.71786, -4.420279], 15); 
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var alcazaba = L.marker([36.721365, -4.415814]).addTo(map).bindPopup('<b>La Alcazaba de Málaga</b><br>Construida en el siglo XI, esta fortaleza musulmana ofrece vistas espectaculares y es uno de los monumentos históricos más importantes de Málaga. Para más información visite <a href="https://www.alcazabamalaga.com/es/">la página oficial</a>');
    var calleLarios = L.marker([36.71876, -4.421510]).addTo(map).bindPopup('<b>Calle Larios</b><br>Inaugurada en 1891, es la principal calle comercial de Málaga, famosa por su arquitectura y tiendas de lujo. Para más información visite <a href="https://exploramalaga.com/es/familia-larios-malaga/">esta página.</a>');
    var catedral = L.marker([36.7203, -4.4193]).addTo(map).bindPopup('<b>Catedral de Málaga</b><br>Conocida como "La Manquita" por su torre inacabada, esta catedral renacentista es un icono de la ciudad. Para más información visite <a href="https://malagacatedral.com/">la página oficial</a>');
    var muelleUno = L.marker([36.71786, -4.41299]).addTo(map).bindPopup('<b>Muelle Uno</b><br>Un puerto moderno que combina tiendas, restaurantes y eventos culturales, con vistas al Mediterráneo. Para más información visite <a href="https://www.muelleuno.com/">la página oficial</a>');
    var teatroRomano = L.marker([36.7213, -4.4168]).addTo(map).bindPopup('<b>Teatro Romano de Málaga</b><br>Construido en el siglo I a.C., este antiguo teatro es uno de los vestigios romanos más importantes de la ciudad. Para más información visite <a href="https://www.disfrutamalaga.com/teatro-romano">ésta página</a>');
    var museoPicasso = L.marker([36.72189, -4.41848]).addTo(map).bindPopup('<b>Museo Picasso de Málaga</b><br>Este museo alberga una vasta colección de obras del famoso artista Pablo Picasso, nacido en Málaga. Para más información visite <a href="https://www.museopicassomalaga.org/">la página oficial</a>');
    var castilloGibralfaro = L.marker([36.7239, -4.41083]).addTo(map).bindPopup('<b>Castillo de Gibralfaro</b><br>Construido en el siglo XIV para proteger la Alcazaba, ofrece unas impresionantes vistas panorámicas de Málaga. Para más información visite <a href="https://alcazabaygibralfaro.malaga.eu/es/">la página oficial</a>');
    var plazaMerced = L.marker([36.7238, -4.417196]).addTo(map).bindPopup('<b>Plaza de la Merced</b><br>Histórica plaza donde nació Pablo Picasso, es un lugar lleno de vida y rodeado de bares y restaurantes. Para más información visite <a href="https://es.wikipedia.org/wiki/Plaza_de_la_Merced_(M%C3%A1laga)">esta página</a>');
    var palacioAduana = L.marker([36.7204, -4.4173764]).addTo(map).bindPopup('<b>Palacio de la Aduana</b><br>Este impresionante edificio del siglo XVIII alberga el Museo de Málaga, con colecciones de arqueología y bellas artes. Para más información visite <a href="https://visita.malaga.eu/es/que-ver-y-hacer/visitas/monumentos-historicos/palacios/palacio-de-la-aduana-p103585">esta página.</a>');
    var puenteAlemanes = L.marker([36.7194, -4.4254]).addTo(map).bindPopup('<b>Puente de los Alemanes</b><br>Donado por la comunidad alemana en agradecimiento a la ayuda recibida tras un naufragio en 1900. Para más información visite <a href="https://www.larazon.es/andalucia/curiosa-historia-puente-alemanes-malaga_2023041264361f9c1b5f5b0001410060.html">esta página</a>');
    var iglesiaSagradoCorazon = L.marker([36.72191, -4.42332]).addTo(map).bindPopup('<b>Iglesia del Sagrado Corazón</b><br>Construida en estilo neogótico a principios del siglo XX, esta iglesia es un importante centro religioso en Málaga.Para más información visite <a href="https://www.diocesismalaga.es/includes/tabla-parroquia-ficha.php?id=4109">la página oficial</a>');
    var mercadoAtarazanas = L.marker([36.71868, -4.424092]).addTo(map).bindPopup('<b>Mercado de Atarazanas</b><br>Ubicado en un antiguo taller naval nazarí, este mercado es el corazón de la gastronomía malagueña. Para más información visite <a href="https://www.malaga.es/es/laprovincia/patrimonio/lis_cd-3822/mercado-de-atarazanas">esta página</a>');
    var museoThyssen = L.marker([36.7215814, -4.423020]).addTo(map).bindPopup('<b>Museo Carmen Thyssen de Málaga</b><br>Este museo alberga una colección de arte español, especialmente del siglo XIX, en un hermoso palacio renacentista. Para más información visite <a href="https://carmenthyssenmalaga.org/">la página oficial</a>');
    var parqueMalaga = L.marker([36.71931, -4.4156305]).addTo(map).bindPopup('<b>Parque de Málaga (Parque de la Alameda)</b><br>Este exuberante parque botánico es un oasis de tranquilidad en el corazón de la ciudad, con plantas de todo el mundo. Para más información visite <a href="https://www.diariosur.es/sur-historia/origen-parque-malaga-20221021114647-nt.html?ref=https%3A%2F%2Fwww.diariosur.es%2Fsur-historia%2Forigen-parque-malaga-20221021114647-nt.html">esta página.</a>');
    var cementerioInglés = L.marker([36.72138, -4.40720601]).addTo(map).bindPopup('<b>Cementerio Municipal Inglés de Málaga</b><br>Fundado en 1831, es el cementerio protestante más antiguo de España y alberga tumbas de muchos extranjeros notables. Para más información visite <a href="https://cementerioinglesmalaga.org/cementerio/historia/">la página oficial</a>');
    var plazaToros = L.marker([36.7205, -4.410692]).addTo(map).bindPopup('<b>Plaza de Toros de la Malagueta</b><br>Inaugurada en 1876, esta plaza de toros es un importante escenario de la tauromaquia en España. Para más información visite <a href="https://plazadetoroslamalagueta.com/la-plaza/#:~:text=La%20Plaza%20de%20Toros%20de,del%20eclecticismo%20arquitect%C3%B3nico%20en%20Espa%C3%B1a.">la página oficial</a>');
    var explanadaEstacion = L.marker([36.71212, -4.43191]).addTo(map).bindPopup('<b>Explanada de la Estación María Zambrano Málaga</b><br>Esta área moderna y vibrante es un punto de conexión clave en el transporte de la ciudad, con una estación de tren y un centro comercial. Para más información visite <a href="https://www.emasa.es/fuente/fuente-de-la-estacion/#:~:text=Explanada%20de%20la%20Estaci%C3%B3n&text=El%20arquitecto%20Joaqu%C3%ADn%20de%20Rucoba,bancos%20y%20un%20nuevo%20pavimento.">esta página</a>');

});