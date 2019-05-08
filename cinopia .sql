- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2019 a las 10:54:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinopia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `tituloOriginal` varchar(50) NOT NULL,
  `tituloEsp` varchar(50) DEFAULT NULL,
  `anioEstreno` year(4) NOT NULL,
  `trailer` varchar(50) NOT NULL,
  `sinopsis` varchar(100) DEFAULT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `genero`, `tituloOriginal`, `tituloEsp`, `anioEstreno`, `trailer`, `sinopsis`, `image`) VALUES
(1, 'Fantasía/Ciencia ficción', 'Black Panther ', 'pantera negra', 2018, 'https://www.youtube.com/watch?v=repsxoJnobc', 'Después de morir su padre, T\'Challa regresa a su nación, Wakanda. Una vez allí, descubre que tiene u', 'img/black panther.jpg'),
(2, 'Accion/Fantasía', 'Jumanji ', 'Jumanji: Bienvenidos a la jungla', 2017, 'https://www.youtube.com/watch?v=sLsT0KOZ0lM', ' Cuatro adolescentes encuentran un viejo videojuego que los absorbe y los transporta a una selva pel', 'img/jumanji.jpg'),
(3, ' Accion/Ciencia ficción', 'Rampage', 'Proyecto Rampage', 2018, 'https://www.youtube.com/watch?v=rLBQmoPmWps', 'Un gorila, un lobo y una serpiente sufren una mutación genética y se convierten en seres gigantescos', 'img/rampage.jpg'),
(4, 'Ficción', 'Star Wars', 'La Guerra de las galaxias', 2019, 'https://www.youtube.com/watch?v=dJUQWAeE-Q0', 'Obi-Wan Kenobi es un joven aprendiz caballero Jedi bajo la tutela de Qui-Gon Jinn; Anakin Skywalker,', 'img/star_wars.jpg'),
(5, 'Ficción', 'Avengers: infinity war', 'Vengadores, infinity war', 2018, 'https://www.youtube.com/watch?v=mMTprUsjBVs', 'Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. S', 'img/avengers_infinity_war.jpg'),
(6, 'Ciencia Ficción', 'Shazam', 'Shazam', 2019, 'https://www.youtube.com/watch?v=B_DpkUSH2Mk', ' Billy Batson, un astuto joven de 14 años, se transforma en el superhéroe Shazam, pero sus poderes s', 'img/shazam.jpg'),
(7, 'Ciencia Ficción', 'Alita, Battle angel', 'Alita, angel de batalla', 2019, 'https://www.youtube.com/watch?v=LwB8VKUVVQg', ' Alita es un cyborg que se despierta en la clínica de un médico sin recordar quién es. La cyborg deb', 'img/alita.jpeg'),
(8, 'Romance', ' the notebook', 'El diario de Noa', 2004, 'https://www.youtube.com/watch?v=4HQXXpdmxyo', ' Un hombre le cuenta a una mujer la historia de dos jóvenes que se volvieron amantes en la Carolina ', 'img/the_notebook.jpg'),
(9, 'Romance', ' Pretty woman', 'Bella mujer', 1990, 'https://www.youtube.com/watch?v=_FKRK8ApMWM', 'Un elegante empresario hace el esmerado intento de adaptar a una mujer a las reglas de una sofistica', 'img/pretty_woman.jpg'),
(10, 'Romance', 'Tres metros sobre el cielo', 'Tres metros sobre el cielo', 2010, 'https://www.youtube.com/watch?v=M6bO4CLgink', ' Es la historia de dos jóvenes: uno problemático con tendencias violentas que inicia un romance con ', 'img/3msc.jpg.jpg'),
(11, 'Romance', 'Twiglight', 'Crepusculo ', 2008, 'https://www.youtube.com/watch?v=UeMmnSGl_w8', 'Bella Swan se va a vivir con su padre al pequeño pueblo de Forks, donde conoce a Edward, un atractiv', 'img/crepusculo.jpg'),
(12, 'Romance', 'After', 'Aquí empieza todo', 2019, 'https://www.youtube.com/watch?v=WQhPNOVyfeU', 'Tessa Young (Josephine Langford) es una dedicada estudiante, una hija responsable y una novia fiel. ', 'img/After_.jpg'),
(13, 'Romance', 'Perdona si te llamo amor', 'Perdona si te llamo amor', 2014, 'https://www.youtube.com/watch?v=KyxQFrIdRAQ', 'Álex, de 37 años, es un ejecutivo publicitario de éxito, atractivo, inteligente y brillante. Ansía c', 'img/perdona si te llamo amor.jpg'),
(14, 'Comedia', 'Night School', 'Escuela para fracasados', 2018, 'https://www.youtube.com/watch?v=S2qWSNU1GWQ', 'Un grupo de alborotadores y abusones son obligados a quedarse en el colegio por las noches para así ', 'img/night_school.jpg'),
(15, 'Comedia', 'Dumb and Dumber To', 'Dos tontos todavía mas tontos', 2014, 'https://www.youtube.com/watch?v=uh5FA9PqVOg', 'Tras descubrir que necesita un trasplante de riñón y que tiene una hija, Harry Dunne emprende un via', 'img/dos tontos.jpg'),
(16, 'Comedia', 'Lo dejo cuando quiera', 'Lo dejo cuando quiera', 2019, 'https://www.youtube.com/watch?v=9LsrPnll5EM', 'Amigos desde la facultad y sobradamente preparados, Pedro, Arturo y Eligio son tres profesores unive', 'img/lo dejo cuando quiera.jpg'),
(17, 'Comedia', 'Perdiendo el este', 'Perdiendo el este', 2019, 'https://www.youtube.com/watch?v=mk6emYVqMCE', 'Con mil trescientos millones de habitantes, y a punto de convertirse en la primera potencia económic', 'img/perdiendo el este.jpg'),
(18, 'Comedia', 'The watch', 'Los amos del barrio', 2014, 'https://www.youtube.com/watch?v=MVtk505z0_o', 'En la tranquila población de Glenview, Ohio, tras el asesinato de uno de los vecinos, un grupo de am', 'img/los amos del barrio.jpg'),
(19, 'Comedia', 'Ted', 'Ted', 2012, 'https://www.youtube.com/watch?v=xECjE4gR5Ow', 'Cuando John Bennett (Mark Wahlberg) era un niño pequeño, pidió el deseo de que Ted (Seth MacFarlane)', 'img/ted.jpg'),
(20, 'Comedia', 'The hangover', 'Resacon en las vegas', 2009, 'https://www.youtube.com/watch?v=MckEHmSMg-0', 'Dos días antes de su boda, Doug y tres amigos viajan a Las Vegas para una fiesta inolvidable y salva', 'img/the_hangover.jpg'),
(21, 'Accion', 'The expendables', 'Los mercenarios', 2010, 'https://www.youtube.com/watch?v=7k4SR6ZwjUQ', 'Un grupo de mercenarios es contratado para infiltrarse en un país sudamericano y derrocar a su despi', 'img/los mercenarios.jpg'),
(22, 'Accion', 'Mision impossible', 'Mision Imposible', 1997, 'https://www.youtube.com/watch?v=DZ2JjyNCwZw', 'Ethan Hunt es un superespía capaz de resolver cualquier arriesgada situación con la máxima elegancia', 'img/mision imposible.jpg'),
(23, 'Accion', 'Allegiant', 'La serie divergente; Leal', 2016, 'https://www.youtube.com/watch?v=ZADtFSGajs0', 'Tras las revelaciones trascendentales de \'Insurgente\', Tris debe escapar con Cuatro e ir más allá de', 'img/leal.jpg'),
(24, 'Documental', 'McLaren', 'McLaren', 2017, 'https://www.youtube.com/watch?v=NkcqA7AoqZo', 'La historia de Bruce McLaren, el neozelandes fundador del equipo McLaren Motor Racing team. Un hombr', 'img/McLaren.jpg'),
(25, 'Documental', 'Avicii; True history', 'Avicii; Verdaderas historias', 2017, 'https://www.youtube.com/watch?v=1ZFK3VKzQIs', 'Documentary about the arena-packing Swedish DJ, chronicling his explosive rise to fame and surprisin', 'img/Avicii_.jpg'),
(26, 'Infantil', 'How to train your dragon', 'Como entrenar a tu dragon', 2010, 'https://www.youtube.com/watch?v=-k5ve8onP1M', 'Ambientada en el mítico mundo de los rudos vikingos y los dragones salvajes, y basada en el libro in', 'img/como_entrenar_a_tu_dragon.jpg'),
(27, 'Infantil', 'The good dinosaur', 'El viaje de arlo', 2015, 'https://www.youtube.com/watch?v=xrzxx0h9w7U', '¿Qué hubiera pasado si el asteroide que cambió para siempre la vida en la Tierra no hubiese impactad', 'img/el viaje de arlo.jpg'),
(28, 'Terror', 'The cabin in the woods', 'La cabaña del bosque', 2012, 'https://www.youtube.com/watch?v=wZjung6T2Ps', 'Cinco adolescentes se preparan para pasar el fin de semana en una aislada cabaña en el bosque, sin m', 'img/the_cabin_in_the_woods.jpg'),
(29, 'Terror', 'Jessabelle', 'Jessabelle', 2014, 'https://www.youtube.com/watch?v=CoBCEdt_BC8', 'Una joven es forzada a volver a casa de su padre, en Luisiana, cuando un accidente de tráfico la dej', 'img/jessabelle.jpg'),
(30, 'Terror', 'Annabelle', 'Annabelle', 2014, 'https://www.youtube.com/watch?v=8kmLHwKH31M', 'ohn Form encuentra el regalo perfecto para su mujer embarazada, Mia: una preciosa e inusual muñeca v', 'img/Annabelle_.jpg'),
(31, 'Accion', 'Robin Hood', 'Robin Hood', 2018, ' https://www.youtube.com/watch?v=f-NzyE_ls9I', 'Cuando el joven Robin Hood (Taron Egerton) regresa a su hogar, endurecido, tras luchar como guerrero', 'img/robin_hood.jpg'),
(32, 'Documental', 'Steve Jobs', 'Steve Jobs', 2015, 'https://www.youtube.com/watch?v=SrlPyKxdMX4', 'Repasa la carrera y el legado del mítico empresario californiano Steve Jobs. Presenta a un hombre mu', 'img/steve_jobs.jpg'),
(33, 'Documental', 'Amy', 'Amy', 2015, 'https://www.youtube.com/watch?v=EEogSsuQKzM', 'Documental sobre la famosa cantante británica Amy Winehouse, que cuenta con imágenes inéditas de arc', 'img/amy.jpg'),
(34, 'Documental', 'Robin Williams; come inside my mind', 'En la mente de Robin Williams', 2018, 'https://www.youtube.com/watch?v=iUDwu8LjFls', 'Un retrato divertido, íntimo y desgarrador de uno de los comediantes más queridos e inventivos del m', 'img/Robin_Williams.jpg'),
(35, 'Documental', 'The Beatles; eight days a week', 'Los Beatles; ocho días a la semana', 2016, 'https://www.youtube.com/watch?v=3z2iWuaBX2c', 'Una recopilación de imágenes con música, entrevistas, y las historias de 250 conciertos de los Beatl', 'img/the_beatles.jpg'),
(36, 'Infantil', 'The Lion King', 'El Rey Leon', 1994, ' https://www.youtube.com/watch?v=wTU3FngWzXs', 'La sabana africana es el escenario en el que tienen lugar las aventuras de Simba, un pequeño león qu', 'img/el rey leon.jpg'),
(37, 'Infantil', 'Moana', 'Vaiana', 2016, 'https://www.youtube.com/watch?v=tmpTGztGJ8E', 'Una gran aventura acerca de una enérgica adolescente que se embarca en una misión audaz para salvar ', 'img/vaiana.jpg'),
(38, 'Infantil', 'Finding Dory', 'Buscando a Dory', 2016, 'https://www.youtube.com/watch?v=yIV4KIDqMdo', 'Un año después de los acontecimientos narrados en \"Buscando a Nemo\", Dory vive apaciblemente con Mar', 'img/finding_dory.jpg'),
(39, 'Infantil', 'COCO', 'COCO', 2017, 'https://www.youtube.com/watch?v=DOtdQd_wgjI', 'Miguel es un joven con el sueño de convertirse en leyenda de la música a pesar de la prohibición de ', 'img/coco.jpg'),
(40, 'Terror', 'Pet Samatary', 'Cementerio de animales', 2019, 'https://www.youtube.com/watch?v=ghXOVshAyvM', ': El doctor Louis Creed (Clarke) se muda con su mujer Racher (Seimetz) y sus dos hijos pequeños de B', 'img/pet_sematary.jpg'),
(41, 'Terror', 'The purge', 'La purga; la noche de las bestias', 2013, ' https://www.youtube.com/watch?v=nzcgjeXc7Rc', 'Año 2022. En una futura sociedad distópica, el régimen político vigente, llamado Nueva Fundación de ', 'img/la purga.jpg'),
(42, 'Terror', 'Happy death day', 'Feliz dia de tu muerte', 2017, 'https://www.youtube.com/watch?v=OPrzja0SAHk', 'Tree Gelbman (Jessica Rothe) es una estudiante universitaria que debe revivir el día de su asesinato', 'img/feliz dia de tu muerte.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nivel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `nivel`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
