-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2024 a las 09:42:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `puntuacion` int(1) NOT NULL CHECK (`puntuacion` between 1 and 5),
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `puntuacion`, `comentario`) VALUES
(1, 'manuela', 5, 'Me encanta la página, es genial. Seguid asi!!!!'),
(2, 'pepe', 4, 'No esta mal la página, me gustó mucho. Podeis añadir una ruta sobre tapas'),
(6, 'mari carmen', 5, 'Es una aplicación super buena, me gusta mucho'),
(7, 'jose luis', 5, 'Fuimos al Muelle uno y comimos unos buenos pescaitos gracias a las rutas que nos daba MalagApp '),
(8, 'jose78', 4, 'Creo que es una web que se necesitaba sobre MalagApp, enhorabuena!!'),
(9, 'sunshine12', 5, 'Me gusta mucho la página web!😄'),
(10, 'paco', 4, 'me encanta la página, es muy bonita, un 20'),
(11, 'hola123', 4, 'me gusta la página, es divertida y ayuda a saber más sobre málaga'),
(12, 'sonsoles guerra', 5, 'la pagina está muy bien, fui con mis hijos a málaga de vacaciones y la verdad que siguiendo las rutas que ofrece esta página, pudimos ver toda la ciudad y comer comida tipica de alli. Enhorabuena!!!'),
(15, 'manoli', 5, 'que bonita es la página, aunque yo añadiría merchandising para tener cositas de la mascota, es muy mona!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `fecha`, `descripcion`) VALUES
(6, 'Feria de Málaga', '2024-08-13', 'Feria anual que se celebra en Málaga durante el mes de agosto.'),
(7, 'Semana Santa de Málaga', '2024-04-05', 'Celebración religiosa de la Semana Santa en Málaga con procesiones y eventos culturales.'),
(8, 'Romería de la Virgen de la Cabeza', '2024-05-05', 'Romería tradicional en honor a la Virgen de la Cabeza en Málaga.'),
(9, 'Feria de San Juan', '2024-06-24', 'Feria popular que se celebra en diversos municipios de Málaga.'),
(10, 'Feria de Antequera', '2024-08-27', 'Feria anual en la ciudad de Antequera con eventos culturales y gastronómicos.'),
(11, 'Feria de Estepona', '2024-07-07', 'Feria tradicional en la localidad de Estepona con eventos y atracciones para toda la familia.'),
(12, 'Feria de Fuengirola', '2024-10-06', 'Feria anual en Fuengirola con casetas, música y actividades para todas las edades.'),
(13, 'Romería de San Bernabé', '2024-06-11', 'Romería en honor a San Bernabé, patrón de Marbella, con procesiones y eventos religiosos.'),
(14, 'Carnaval de Cártama', '2024-03-01', 'Carnaval que se celebra en el municipio de Cártama con desfiles y concursos de disfraces.'),
(15, 'Carnaval de Benalmádena', '2024-02-21', 'Carnaval de Benalmádena con desfiles, música y eventos para toda la familia.'),
(16, 'Romería de San Isidro Labrador', '2024-05-15', 'Romería en honor a San Isidro Labrador en Alhaurín el Grande con carrozas y fiesta popular.'),
(17, 'Feria de Ronda', '2024-09-04', 'Feria anual de Ronda con atracciones, conciertos y eventos culturales.'),
(18, 'Feria de Alhaurín de la Torre', '2024-06-24', 'Feria de Alhaurín de la Torre con casetas, música en directo y actividades para niños.'),
(19, 'Feria de Coín', '2024-08-15', 'Feria anual de Coín con actividades culturales, gastronomía y conciertos en directo.'),
(20, 'Carnaval de Mijas', '2024-02-25', 'Carnaval de Mijas con desfiles de carrozas, música en vivo y concursos de disfraces.'),
(21, 'Feria de Vélez-Málaga', '2024-05-07', 'Feria de Vélez-Málaga con casetas, atracciones y eventos para toda la familia.'),
(22, 'Romería de Nuestra Señora de los Remedios', '2024-08-15', 'Romería en honor a Nuestra Señora de los Remedios en Nerja con procesiones y fiesta popular.'),
(23, 'Feria de Torremolinos', '2024-09-28', 'Feria anual de Torremolinos con casetas, música y atracciones para grandes y pequeños.'),
(24, 'Feria de Algarrobo', '2024-08-15', 'Feria de Algarrobo con actividades para niños, música en vivo y gastronomía tradicional.'),
(25, 'Feria de Málaga', '2023-08-13', 'Feria anual que se celebra en Málaga durante el mes de agosto.'),
(26, 'Semana Santa de Málaga', '2023-04-05', 'Celebración religiosa de la Semana Santa en Málaga con procesiones y eventos culturales.'),
(27, 'Romería de la Virgen de la Cabeza', '2023-05-05', 'Romería tradicional en honor a la Virgen de la Cabeza en Málaga.'),
(28, 'Feria de San Juan', '2023-06-24', 'Feria popular que se celebra en diversos municipios de Málaga.'),
(29, 'Feria de Antequera', '2023-08-27', 'Feria anual en la ciudad de Antequera con eventos culturales y gastronómicos.'),
(30, 'Feria de Estepona', '2023-07-07', 'Feria tradicional en la localidad de Estepona con eventos y atracciones para toda la familia.'),
(31, 'Feria de Fuengirola', '2023-10-06', 'Feria anual en Fuengirola con casetas, música y actividades para todas las edades.'),
(32, 'Romería de San Bernabé', '2023-06-11', 'Romería en honor a San Bernabé, patrón de Marbella, con procesiones y eventos religiosos.'),
(33, 'Carnaval de Cártama', '2023-03-01', 'Carnaval que se celebra en el municipio de Cártama con desfiles y concursos de disfraces.'),
(34, 'Carnaval de Benalmádena', '2023-02-21', 'Carnaval de Benalmádena con desfiles, música y eventos para toda la familia.'),
(35, 'Romería de San Isidro Labrador', '2023-05-15', 'Romería en honor a San Isidro Labrador en Alhaurín el Grande con carrozas y fiesta popular.'),
(36, 'Feria de Ronda', '2023-09-04', 'Feria anual de Ronda con atracciones, conciertos y eventos culturales.'),
(37, 'Feria de Alhaurín de la Torre', '2023-06-24', 'Feria de Alhaurín de la Torre con casetas, música en directo y actividades para niños.'),
(38, 'Feria de Coín', '2023-08-15', 'Feria anual de Coín con actividades culturales, gastronomía y conciertos en directo.'),
(39, 'Carnaval de Mijas', '2023-02-25', 'Carnaval de Mijas con desfiles de carrozas, música en vivo y concursos de disfraces.'),
(40, 'Feria de Vélez-Málaga', '2023-05-07', 'Feria de Vélez-Málaga con casetas, atracciones y eventos para toda la familia.'),
(41, 'Romería de Nuestra Señora de los Remedios', '2023-08-15', 'Romería en honor a Nuestra Señora de los Remedios en Nerja con procesiones y fiesta popular.'),
(42, 'Feria de Torremolinos', '2023-09-28', 'Feria anual de Torremolinos con casetas, música y atracciones para grandes y pequeños.'),
(43, 'Feria de Algarrobo', '2023-08-15', 'Feria de Algarrobo con actividades para niños, música en vivo y gastronomía tradicional.'),
(44, 'Feria de Málaga', '2022-08-13', 'Feria anual que se celebra en Málaga durante el mes de agosto.'),
(45, 'Semana Santa de Málaga', '2022-04-05', 'Celebración religiosa de la Semana Santa en Málaga con procesiones y eventos culturales.'),
(46, 'Romería de la Virgen de la Cabeza', '2022-05-05', 'Romería tradicional en honor a la Virgen de la Cabeza en Málaga.'),
(47, 'Feria de San Juan', '2022-06-24', 'Feria popular que se celebra en diversos municipios de Málaga.'),
(48, 'Feria de Antequera', '2022-08-27', 'Feria anual en la ciudad de Antequera con eventos culturales y gastronómicos.'),
(49, 'Feria de Estepona', '2022-07-07', 'Feria tradicional en la localidad de Estepona con eventos y atracciones para toda la familia.'),
(50, 'Feria de Fuengirola', '2022-10-06', 'Feria anual en Fuengirola con casetas, música y actividades para todas las edades.'),
(51, 'Romería de San Bernabé', '2022-06-11', 'Romería en honor a San Bernabé, patrón de Marbella, con procesiones y eventos religiosos.'),
(52, 'Carnaval de Cártama', '2022-03-01', 'Carnaval que se celebra en el municipio de Cártama con desfiles y concursos de disfraces.'),
(53, 'Carnaval de Benalmádena', '2022-02-21', 'Carnaval de Benalmádena con desfiles, música y eventos para toda la familia.'),
(54, 'Romería de San Isidro Labrador', '2022-05-15', 'Romería en honor a San Isidro Labrador en Alhaurín el Grande con carrozas y fiesta popular.'),
(55, 'Feria de Ronda', '2022-09-04', 'Feria anual de Ronda con atracciones, conciertos y eventos culturales.'),
(56, 'Feria de Alhaurín de la Torre', '2022-06-24', 'Feria de Alhaurín de la Torre con casetas, música en directo y actividades para niños.'),
(57, 'Feria de Coín', '2022-08-15', 'Feria anual de Coín con actividades culturales, gastronomía y conciertos en directo.'),
(58, 'Carnaval de Mijas', '2022-02-25', 'Carnaval de Mijas con desfiles de carrozas, música en vivo y concursos de disfraces.'),
(59, 'Feria de Vélez-Málaga', '2022-05-07', 'Feria de Vélez-Málaga con casetas, atracciones y eventos para toda la familia.'),
(60, 'Romería de Nuestra Señora de los Remedios', '2022-08-15', 'Romería en honor a Nuestra Señora de los Remedios en Nerja con procesiones y fiesta popular.'),
(61, 'Feria de Torremolinos', '2022-09-28', 'Feria anual de Torremolinos con casetas, música y atracciones para grandes y pequeños.'),
(62, 'Feria de Algarrobo', '2022-08-15', 'Feria de Algarrobo con actividades para niños, música en vivo y gastronomía tradicional.'),
(63, 'Feria de Málaga', '2021-08-13', 'Feria anual que se celebra en Málaga durante el mes de agosto.'),
(64, 'Semana Santa de Málaga', '2021-04-05', 'Celebración religiosa de la Semana Santa en Málaga con procesiones y eventos culturales.'),
(65, 'Romería de la Virgen de la Cabeza', '2021-05-05', 'Romería tradicional en honor a la Virgen de la Cabeza en Málaga.'),
(66, 'Feria de San Juan', '2021-06-24', 'Feria popular que se celebra en diversos municipios de Málaga.'),
(67, 'Feria de Antequera', '2021-08-27', 'Feria anual en la ciudad de Antequera con eventos culturales y gastronómicos.'),
(68, 'Feria de Estepona', '2021-07-07', 'Feria tradicional en la localidad de Estepona con eventos y atracciones para toda la familia.'),
(69, 'Feria de Fuengirola', '2021-10-06', 'Feria anual en Fuengirola con casetas, música y actividades para todas las edades.'),
(70, 'Romería de San Bernabé', '2021-06-11', 'Romería en honor a San Bernabé, patrón de Marbella, con procesiones y eventos religiosos.'),
(71, 'Carnaval de Cártama', '2021-03-01', 'Carnaval que se celebra en el municipio de Cártama con desfiles y concursos de disfraces.'),
(72, 'Carnaval de Benalmádena', '2021-02-21', 'Carnaval de Benalmádena con desfiles, música y eventos para toda la familia.'),
(73, 'Romería de San Isidro Labrador', '2021-05-15', 'Romería en honor a San Isidro Labrador en Alhaurín el Grande con carrozas y fiesta popular.'),
(74, 'Feria de Ronda', '2021-09-04', 'Feria anual de Ronda con atracciones, conciertos y eventos culturales.'),
(75, 'Feria de Alhaurín de la Torre', '2021-06-24', 'Feria de Alhaurín de la Torre con casetas, música en directo y actividades para niños.'),
(76, 'Feria de Coín', '2021-08-15', 'Feria anual de Coín con actividades culturales, gastronomía y conciertos en directo.'),
(77, 'Carnaval de Mijas', '2021-02-25', 'Carnaval de Mijas con desfiles de carrozas, música en vivo y concursos de disfraces.'),
(78, 'Feria de Vélez-Málaga', '2021-05-07', 'Feria de Vélez-Málaga con casetas, atracciones y eventos para toda la familia.'),
(79, 'Romería de Nuestra Señora de los Remedios', '2021-08-15', 'Romería en honor a Nuestra Señora de los Remedios en Nerja con procesiones y fiesta popular.'),
(80, 'Feria de Torremolinos', '2021-09-28', 'Feria anual de Torremolinos con casetas, música y atracciones para grandes y pequeños.'),
(81, 'Feria de Algarrobo', '2021-08-15', 'Feria de Algarrobo con actividades para niños, música en vivo y gastronomía tradicional.'),
(82, 'Día del Orgullo Gay en Torremolinos', '2022-06-25', 'Celebración del Día del Orgullo Gay en Torremolinos con desfiles, conciertos y eventos culturales.'),
(83, 'Salón del Manga de Málaga', '2022-11-26', 'Evento anual de cultura japonesa que incluye actividades, conferencias, exposiciones y concursos relacionados con el manga y anime.'),
(84, 'Día del Orgullo Gay en Torremolinos', '2023-06-25', 'Celebración del Día del Orgullo Gay en Torremolinos con desfiles, conciertos y eventos culturales.'),
(85, 'Salón del Manga de Málaga', '2023-11-25', 'Evento anual de cultura japonesa que incluye actividades, conferencias, exposiciones y concursos relacionados con el manga y anime.'),
(86, 'Día del Orgullo Gay en Torremolinos', '2024-06-25', 'Celebración del Día del Orgullo Gay en Torremolinos con desfiles, conciertos y eventos culturales.'),
(87, 'Salón del Manga de Málaga', '2024-11-23', 'Evento anual de cultura japonesa que incluye actividades, conferencias, exposiciones y concursos relacionados con el manga y anime.'),
(88, 'Feria de los Pueblos de Fuengirola', '2022-04-28', 'Feria que celebra la diversidad cultural de los pueblos del mundo con gastronomía, música y actividades culturales.'),
(89, 'Feria de los Pueblos de Fuengirola', '2023-04-27', 'Feria que celebra la diversidad cultural de los pueblos del mundo con gastronomía, música y actividades culturales.'),
(90, 'Feria de los Pueblos de Fuengirola', '2024-04-25', 'Feria que celebra la diversidad cultural de los pueblos del mundo con gastronomía, música y actividades culturales.'),
(91, 'Día de las Migas', '2022-12-11', 'Celebración del Día de las Migas en Alfarnate, un pueblo situado en la comarca de la Axarquía.'),
(92, 'Feria de Agosto de Ronda', '2022-08-28', 'Feria celebrada en Ronda, una ciudad situada en la Serranía de Ronda.'),
(93, 'Romería de la Virgen de la Candelaria', '2023-02-02', 'Romería celebrada en Mijas, un pueblo situado en la Costa del Sol.'),
(94, 'Feria de San Miguel en Torremolinos', '2023-09-29', 'Feria celebrada en Torremolinos, un municipio turístico en la Costa del Sol.'),
(95, 'Feria de la Chirimoya en Sayalonga', '2024-10-20', 'Feria celebrada en Sayalonga, un pueblo situado en la comarca de la Axarquía.'),
(96, 'Feria de la Tapa en Estepona', '2024-05-15', 'Feria celebrada en Estepona, una localidad en la Costa del Sol.'),
(97, 'Feria de San Isidro en Alhaurín el Grande', '2024-05-15', 'Feria celebrada en Alhaurín el Grande, un municipio en la comarca del Valle del Guadalhorce.'),
(98, 'Romería de San Bernabé en Marbella', '2024-06-11', 'Romería celebrada en Marbella, una ciudad turística en la Costa del Sol.'),
(99, 'Feria de San Juan en Nerja', '2023-06-24', 'Feria celebrada en Nerja, un municipio en la comarca de la Axarquía.'),
(100, 'Feria de la Pasa en El Borge', '2022-09-25', 'Feria celebrada en El Borge, un pueblo situado en la comarca de la Axarquía.'),
(101, 'Halloween', '2021-10-31', 'Celebración de Halloween en Málaga, con disfraces, decoraciones temáticas y actividades festivas.'),
(102, 'Navidad', '2021-12-25', 'Celebración de la Navidad en Málaga, con luces, decoraciones, mercados navideños y eventos festivos.'),
(103, 'Nochevieja', '2021-12-31', 'Celebración de Nochevieja en Málaga, con fiestas, cotillones y fuegos artificiales.'),
(104, 'Cabalgata de Reyes', '2022-01-05', 'Celebración de la Cabalgata de Reyes en Málaga, con desfiles, carrozas y caramelos.'),
(105, 'Semana Santa', '2022-04-10', 'Celebración de la Semana Santa en Málaga, con procesiones, cofradías y eventos religiosos.'),
(106, 'Feria de Málaga', '2022-08-13', 'Celebración de la Feria de Málaga, con casetas, música, bailes y eventos culturales.'),
(107, 'Feria de la Tapa en Málaga', '2022-05-02', 'Celebración de la Feria de la Tapa en Málaga, con degustaciones, concursos y eventos gastronómicos.'),
(108, 'Feria del Libro en Málaga', '2022-06-02', 'Celebración de la Feria del Libro en Málaga, con stands de libros, presentaciones y actividades literarias.'),
(109, 'Feria del Centro en Málaga', '2022-08-21', 'Celebración de la Feria del Centro en Málaga, con casetas, música en directo y eventos culturales.'),
(110, 'Noche en Blanco', '2022-05-21', 'Celebración de la Noche en Blanco en Málaga, con actividades culturales, conciertos y exposiciones.'),
(111, 'Carnaval', '2023-02-22', 'Celebración del Carnaval en Málaga, con desfiles, disfraces y eventos festivos.'),
(112, 'Halloween', '2023-10-31', 'Celebración de Halloween en Málaga, con disfraces, decoraciones temáticas y actividades festivas.'),
(113, 'Navidad', '2023-12-25', 'Celebración de la Navidad en Málaga, con luces, decoraciones, mercados navideños y eventos festivos.'),
(114, 'Nochevieja', '2023-12-31', 'Celebración de Nochevieja en Málaga, con fiestas, cotillones y fuegos artificiales.'),
(115, 'Cabalgata de Reyes', '2024-01-05', 'Celebración de la Cabalgata de Reyes en Málaga, con desfiles, carrozas y caramelos.'),
(116, 'Semana Santa', '2024-03-31', 'Celebración de la Semana Santa en Málaga, con procesiones, cofradías y eventos religiosos.'),
(117, 'Feria de Málaga', '2024-08-19', 'Celebración de la Feria de Málaga, con casetas, música, bailes y eventos culturales.'),
(118, 'Feria de la Tapa en Málaga', '2024-05-01', 'Celebración de la Feria de la Tapa en Málaga, con degustaciones, concursos y eventos gastronómicos.'),
(119, 'Feria del Libro en Málaga', '2024-06-01', 'Celebración de la Feria del Libro en Málaga, con stands de libros, presentaciones y actividades literarias.'),
(120, 'Feria del Centro en Málaga', '2024-08-20', 'Celebración de la Feria del Centro en Málaga, con casetas, música en directo y eventos culturales.'),
(121, 'Noche en Blanco', '2024-05-18', 'Celebración de la Noche en Blanco en Málaga, con actividades culturales, conciertos y exposiciones.'),
(122, 'Carnaval', '2024-02-13', 'Celebración del Carnaval en Málaga, con desfiles, disfraces y eventos festivos.'),
(123, 'Halloween', '2024-10-31', 'Celebración de Halloween en Málaga, con disfraces, decoraciones temáticas y actividades festivas.'),
(124, 'Navidad', '2024-12-25', 'Celebración de la Navidad en Málaga, con luces, decoraciones, mercados navideños y eventos festivos.'),
(125, 'Nochevieja', '2024-12-31', 'Celebración de Nochevieja en Málaga, con fiestas, cotillones y fuegos artificiales.'),
(126, 'Cabalgata de Reyes', '2025-01-05', 'Celebración de la Cabalgata de Reyes en Málaga, con desfiles, carrozas y caramelos.'),
(127, 'Semana Santa', '2025-04-13', 'Celebración de la Semana Santa en Málaga, con procesiones, cofradías y eventos religiosos.'),
(128, 'Feria de Málaga', '2025-08-16', 'Celebración de la Feria de Málaga, con casetas, música, bailes y eventos culturales.'),
(129, 'Feria de la Tapa en Málaga', '2025-05-02', 'Celebración de la Feria de la Tapa en Málaga, con degustaciones, concursos y eventos gastronómicos.'),
(130, 'Feria del Libro en Málaga', '2025-06-02', 'Celebración de la Feria del Libro en Málaga, con stands de libros, presentaciones y actividades literarias.'),
(131, 'Feria del Centro en Málaga', '2025-08-21', 'Celebración de la Feria del Centro en Málaga, con casetas, música en directo y eventos culturales.'),
(132, 'Noche en Blanco', '2025-05-17', 'Celebración de la Noche en Blanco en Málaga, con actividades culturales, conciertos y exposiciones.'),
(133, 'Carnaval', '2025-03-02', 'Celebración del Carnaval en Málaga, con desfiles, disfraces y eventos festivos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(255) DEFAULT NULL,
  `opcion1` varchar(255) DEFAULT NULL,
  `opcion2` varchar(255) DEFAULT NULL,
  `opcion3` varchar(255) DEFAULT NULL,
  `respuesta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id`, `pregunta`, `opcion1`, `opcion2`, `opcion3`, `respuesta`) VALUES
(1, '¿Cuál es el monumento más emblemático de Málaga?', 'La Alcazaba', 'La Catedral de Málaga', 'El Teatro Romano', 2),
(2, '¿En qué barrio de Málaga se encuentra el famoso Mercado de Atarazanas?', 'La Malagueta', 'El Palo', 'El Centro Histórico', 3),
(3, '¿Cuál es el nombre del famoso pintor nacido en Málaga y considerado uno de los más grandes del siglo XX?', 'Pablo Picasso', 'Salvador Dalí', 'Joan Miró', 1),
(4, '¿Cuál es el plato típico de Málaga que consiste en pescado fresco marinado en vinagre?', 'Gazpacho', 'Ensalada Malagueña', 'Boquerones en vinagre', 3),
(5, '¿Qué famoso festival se celebra en Málaga durante la Semana Santa?', 'La Feria de Málaga', 'La Semana Grande', 'La Semana Santa de Málaga', 3),
(6, '¿Cuál es la fecha de la Feria de Málaga?', 'Agosto', 'Julio', 'Septiembre', 1),
(7, '¿Cómo se llama la catedral de Málaga?', 'Catedral de la Encarnación', 'Catedral de la Almudena', 'Catedral de San Juan', 1),
(8, '¿Cuál es la playa más conocida de Málaga?', 'La Malagueta', 'La Concha', 'El Sardinero', 1),
(9, '¿Qué dulce típico se consume en Málaga durante la Semana Santa?', 'Mona de Pascua', 'Torrijas', 'Pestiños', 2),
(10, '¿Cuál es el nombre del puerto de Málaga?', 'Puerto de la Luz', 'Puerto de Málaga', 'Puerto Olímpico', 2),
(11, '¿Qué evento cultural importante se celebra en Málaga en abril?', 'Festival de Teatro', 'Festival de Cine', 'Festival de Música', 2),
(12, '¿Qué vino es típico de Málaga?', 'Vino de Jerez', 'Vino de Oporto', 'Vino de Málaga', 3),
(13, '¿Cuál es el equipo de fútbol de Málaga?', 'Sevilla FC', 'Málaga CF', 'Real Betis', 2),
(14, '¿Qué fortaleza árabe se encuentra en Málaga?', 'Alhambra', 'Alcazaba', 'Castillo de Gibralfaro', 2),
(15, '¿Qué es la Biznaga en Málaga?', 'Un dulce típico', 'Un ramo de flores', 'Una danza tradicional', 2),
(16, '¿Cuál es la fiesta que marca el inicio de la Semana Santa en Málaga?', 'El Domingo de Ramos', 'El Jueves Santo', 'El Viernes Santo', 1),
(17, '¿Qué famosa calle comercial se encuentra en el centro de Málaga?', 'Calle Larios', 'Calle Gran Vía', 'Calle Mayor', 1),
(18, '¿Qué monumento histórico de Málaga fue construido en el siglo XI?', 'La Giralda', 'La Mezquita', 'La Alcazaba', 3),
(19, '¿Cómo se llama el teatro romano que se encuentra en Málaga?', 'Teatro Romano de Mérida', 'Teatro Romano de Málaga', 'Teatro Romano de Cartagena', 2),
(20, '¿Cuál es el plato típico de Málaga elaborado con pescado frito?', 'Paella', 'Gazpacho', 'Pescaíto Frito', 3),
(21, '¿Qué edificio cultural alberga obras de Picasso en Málaga?', 'Museo del Prado', 'Museo Picasso Málaga', 'Museo Reina Sofía', 2),
(22, '¿Qué festividad malagueña incluye procesiones y es conocida por su devoción?', 'Carnaval de Málaga', 'Semana Santa de Málaga', 'Feria de Agosto', 2),
(23, '¿Qué famoso poeta español pasó parte de su vida en Málaga?', 'Federico García Lorca', 'Antonio Machado', 'Vicente Aleixandre', 1),
(24, '¿Cuál es el nombre del castillo que ofrece vistas panorámicas de Málaga?', 'Castillo de Santa Bárbara', 'Castillo de Gibralfaro', 'Castillo de Almodóvar', 2),
(25, '¿Qué pintor famoso fundó la \"Generación del 27\" en Málaga?', 'Pablo Picasso', 'Manuel Altolaguirre', 'Salvador Dalí', 2),
(26, '¿Cuál es el nombre del mercado central de Málaga conocido por su arquitectura y productos frescos?', 'Mercado de San Miguel', 'Mercado de la Boquería', 'Mercado de Atarazanas', 3),
(27, '¿Qué festival malagueño se celebra en honor al patrón de la ciudad, San Ciriaco y Santa Paula?', 'Feria de Málaga', 'Romería del Rocío', 'Noche de San Juan', 1),
(28, '¿Qué famoso escritor británico tiene una estatua en el parque de Málaga?', 'Charles Dickens', 'Oscar Wilde', 'Robert Boyd', 3),
(29, '¿Qué monumento se encuentra en la Plaza de la Merced, conocido por ser el lugar de nacimiento de Picasso?', 'Monumento a Torrijos', 'Monumento a Picasso', 'Monumento a Cervantes', 2),
(30, '¿Cuál es el museo más visitado de Málaga?', 'Museo Picasso Málaga', 'Museo Thyssen-Bornemisza', 'Centre Pompidou Málaga', 1),
(31, '¿Qué museo alberga una colección de arte moderno y contemporáneo?', 'Museo de Málaga', 'Centre Pompidou Málaga', 'Museo Carmen Thyssen Málaga', 2),
(32, '¿Cuál es el museo que se encuentra en un edificio del siglo XVIII y muestra la historia de la ciudad?', 'Museo Picasso Málaga', 'Museo de Málaga', 'Museo Carmen Thyssen Málaga', 2),
(33, '¿Qué museo está ubicado en el Palacio de Buenavista?', 'Museo de Málaga', 'Museo Picasso Málaga', 'Museo Carmen Thyssen Málaga', 2),
(34, '¿Qué museo tiene una colección permanente dedicada a los artistas andaluces del siglo XIX?', 'Museo de Málaga', 'Museo Carmen Thyssen Málaga', 'Museo Picasso Málaga', 2),
(35, '¿Cuál es el museo que alberga una colección de obras de los artistas del siglo XIX y XX de Málaga?', 'Museo Carmen Thyssen Málaga', 'Museo Picasso Málaga', 'Museo de Málaga', 1),
(36, '¿Qué museo ofrece una amplia variedad de obras de Pablo Picasso?', 'Museo Carmen Thyssen Málaga', 'Museo de Málaga', 'Museo Picasso Málaga', 3),
(37, '¿Qué museo es conocido por su colección de arte del siglo XIX?', 'Museo Carmen Thyssen Málaga', 'Centre Pompidou Málaga', 'Museo de Málaga', 1),
(38, '¿Cuál es el museo que presenta exposiciones temporales y obras de artistas contemporáneos?', 'Museo de Málaga', 'Centre Pompidou Málaga', 'Museo Picasso Málaga', 2),
(39, '¿Qué museo se inauguró en 2015 y forma parte de una red internacional de museos?', 'Centre Pompidou Málaga', 'Museo de Málaga', 'Museo Picasso Málaga', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacion`
--

CREATE TABLE `puntuacion` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `fecha_juego` datetime DEFAULT NULL,
  `aciertos` int(11) DEFAULT NULL,
  `fallos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntuacion`
--

INSERT INTO `puntuacion` (`id`, `usuario_id`, `usuario`, `fecha_juego`, `aciertos`, `fallos`) VALUES
(1, 5, NULL, '2024-05-22 14:49:30', 7, 3),
(2, 5, NULL, '2024-05-22 14:50:18', 2, 8),
(3, 5, NULL, '2024-05-22 14:50:45', 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `usuario`, `fecha_registro`) VALUES
(4, 'pepepaquito@gmail.com', 'holawenastardes', 'pepe', '2024-04-12 07:02:20'),
(5, 'wenosdias@gmail.com', 'wenosdias', 'wenosdias', '2024-04-12 07:02:20'),
(6, 'olita@gmail.com', 'olita1234', 'olita', '2024-04-12 07:02:20'),
(7, 'flamenca@hotmail.com', 'flamenca1234', 'flamenca', '2024-04-12 07:02:20'),
(8, 'popo@gmail.com', 'popo1234', 'popo', '2024-04-12 07:02:20'),
(9, 'marllanes@gato.es', 'marllanes3gato.es', 'marllanes3', '2024-05-21 10:30:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD CONSTRAINT `puntuacion_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
