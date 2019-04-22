-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-04-22 20:57:34
-- 服务器版本： 10.1.36-MariaDB
-- PHP 版本： 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `cinopia`
--

-- --------------------------------------------------------

--
-- 表的结构 `peliculas`
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
-- 转存表中的数据 `peliculas`
--

INSERT INTO `peliculas` (`id`, `genero`, `tituloOriginal`, `tituloEsp`, `anioEstreno`, `trailer`, `sinopsis`, `image`) VALUES
(1, 'Fantasía/Ciencia ficción', 'Black Panther ', 'pantera negra', 2018, 'https://www.youtube.com/watch?v=repsxoJnobc', 'Después de morir su padre, T\'Challa regresa a su nación, Wakanda. Una vez allí, descubre que tiene u', 'black_panther.jpg'),
(2, 'Accion/Fantasía', 'Jumanji ', 'Jumanji: Bienvenidos a la jungla', 2017, 'https://www.youtube.com/watch?v=sLsT0KOZ0lM', ' Cuatro adolescentes encuentran un viejo videojuego que los absorbe y los transporta a una selva pel', 'jumanji.jpg'),
(3, ' Accion/Ciencia ficción', 'Rampage', 'Proyecto Rampage', 2018, 'https://www.youtube.com/watch?v=rLBQmoPmWps', 'Un gorila, un lobo y una serpiente sufren una mutación genética y se convierten en seres gigantescos', 'rampange.jpg'),
(4, 'Ficción', 'Star Wars', 'La Guerra de las galaxias', 2019, 'https://www.youtube.com/watch?v=dJUQWAeE-Q0', 'Obi-Wan Kenobi es un joven aprendiz caballero Jedi bajo la tutela de Qui-Gon Jinn; Anakin Skywalker,', 'star-wars-.jpg'),
(5, 'Ficción', 'Avengers: infinity war', 'Vengadores, infinity war', 2018, 'https://www.youtube.com/watch?v=mMTprUsjBVs', 'Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. S', 'avengers_infinity_war.jpg'),
(6, 'Ciencia Ficción', 'Shazam', 'Shazam', 2019, 'https://www.youtube.com/watch?v=B_DpkUSH2Mk', ' Billy Batson, un astuto joven de 14 años, se transforma en el superhéroe Shazam, pero sus poderes s', 'shazam.jpg'),
(7, 'Ciencia Ficción', 'Alita, Battle angel', 'Alita, angel de batalla', 2019, 'https://www.youtube.com/watch?v=LwB8VKUVVQg', ' Alita es un cyborg que se despierta en la clínica de un médico sin recordar quién es. La cyborg deb', 'Alita.jpg'),
(8, 'Romance', ' the notebook', 'El diario de Noa', 2004, 'https://www.youtube.com/watch?v=4HQXXpdmxyo', ' Un hombre le cuenta a una mujer la historia de dos jóvenes que se volvieron amantes en la Carolina ', 'the_notebook.jpg'),
(9, 'Romance', ' Pretty woman', 'Bella mujer', 1990, 'https://www.youtube.com/watch?v=_FKRK8ApMWM', 'Un elegante empresario hace el esmerado intento de adaptar a una mujer a las reglas de una sofistica', 'pretty_woman.jpg'),
(10, 'Romance', 'Tres metros sobre el cielo', 'Tres metros sobre el cielo', 2010, 'https://www.youtube.com/watch?v=M6bO4CLgink', ' Es la historia de dos jóvenes: uno problemático con tendencias violentas que inicia un romance con ', '3msc.jpg'),
(11, 'Romance', 'Twiglight', 'Crepusculo ', 2008, 'https://www.youtube.com/watch?v=UeMmnSGl_w8', 'Bella Swan se va a vivir con su padre al pequeño pueblo de Forks, donde conoce a Edward, un atractiv', 'crepusculo.jpg'),
(12, 'Romance', 'After', 'Aquí empieza todo', 2019, 'https://www.youtube.com/watch?v=WQhPNOVyfeU', 'Tessa Young (Josephine Langford) es una dedicada estudiante, una hija responsable y una novia fiel. ', 'after.jpg'),
(13, 'Romance', 'Perdona si te llamo amor', 'Perdona si te llamo amor', 2014, 'https://www.youtube.com/watch?v=KyxQFrIdRAQ', 'Álex, de 37 años, es un ejecutivo publicitario de éxito, atractivo, inteligente y brillante. Ansía c', 'perdona si te llamo amor.jpg'),
(14, 'Comedia', 'Night School', 'Escuela para fracasados', 2018, 'https://www.youtube.com/watch?v=S2qWSNU1GWQ', 'Un grupo de alborotadores y abusones son obligados a quedarse en el colegio por las noches para así ', 'night_school.jpg'),
(15, 'Comedia', 'Dumb and Dumber To', 'Dos tontos todavía mas tontos', 2014, 'https://www.youtube.com/watch?v=uh5FA9PqVOg', 'Tras descubrir que necesita un trasplante de riñón y que tiene una hija, Harry Dunne emprende un via', 'dos tontos.jpg'),
(16, 'Comedia', 'Lo dejo cuando quiera', 'Lo dejo cuando quiera', 2019, 'https://www.youtube.com/watch?v=9LsrPnll5EM', 'Amigos desde la facultad y sobradamente preparados, Pedro, Arturo y Eligio son tres profesores unive', 'lo dejo cuando quiera.jpg'),
(17, 'Comedia', 'Perdiendo el este', 'Perdiendo el este', 2019, 'https://www.youtube.com/watch?v=mk6emYVqMCE', 'Con mil trescientos millones de habitantes, y a punto de convertirse en la primera potencia económic', 'perdiendo el este.jpg'),
(18, 'Comedia', 'The watch', 'Los amos del barrio', 2014, 'https://www.youtube.com/watch?v=MVtk505z0_o', 'En la tranquila población de Glenview, Ohio, tras el asesinato de uno de los vecinos, un grupo de am', 'the_watch.jpg'),
(19, 'Comedia', 'Ted', 'Ted', 2012, 'https://www.youtube.com/watch?v=xECjE4gR5Ow', 'Cuando John Bennett (Mark Wahlberg) era un niño pequeño, pidió el deseo de que Ted (Seth MacFarlane)', 'ted1.jpg'),
(20, 'Comedia', 'The hangover', 'Resacon en las vegas', 2009, 'https://www.youtube.com/watch?v=MckEHmSMg-0', 'Dos días antes de su boda, Doug y tres amigos viajan a Las Vegas para una fiesta inolvidable y salva', 'the_hangover.jpg'),
(21, 'Accion', 'The expendables', 'Los mercenarios', 2010, 'https://www.youtube.com/watch?v=7k4SR6ZwjUQ', 'Un grupo de mercenarios es contratado para infiltrarse en un país sudamericano y derrocar a su despi', 'los mercenarios.jpg'),
(22, 'Accion', 'Mision impossible', 'Mision Imposible', 1997, 'https://www.youtube.com/watch?v=DZ2JjyNCwZw', 'Ethan Hunt es un superespía capaz de resolver cualquier arriesgada situación con la máxima elegancia', 'mision imposible.jpg'),
(23, 'Accion', 'Allegiant', 'La serie divergente; Leal', 2016, 'https://www.youtube.com/watch?v=ZADtFSGajs0', 'Tras las revelaciones trascendentales de \'Insurgente\', Tris debe escapar con Cuatro e ir más allá de', 'divergente leal.jpg'),
(24, 'Documental', 'McLaren', 'McLaren', 2017, 'https://www.youtube.com/watch?v=NkcqA7AoqZo', 'La historia de Bruce McLaren, el neozelandes fundador del equipo McLaren Motor Racing team. Un hombr', 'Mclaren.jpg'),
(25, 'Documental', 'Avicii; True history', 'Avicii; Verdaderas historias', 2017, 'https://www.youtube.com/watch?v=1ZFK3VKzQIs', 'Documentary about the arena-packing Swedish DJ, chronicling his explosive rise to fame and surprisin', 'avicii.jpg'),
(26, 'Infantil', 'How to train your dragon', 'Como entrenar a tu dragon', 2010, 'https://www.youtube.com/watch?v=-k5ve8onP1M', 'Ambientada en el mítico mundo de los rudos vikingos y los dragones salvajes, y basada en el libro in', 'como entrenar a tu dragon.jpg'),
(27, 'Infantil', 'The good dinosaur', 'El viaje de arlo', 2015, 'https://www.youtube.com/watch?v=xrzxx0h9w7U', '¿Qué hubiera pasado si el asteroide que cambió para siempre la vida en la Tierra no hubiese impactad', 'el viaje de arlo.jpg'),
(28, 'Terror', 'The cabin in the woods', 'La cabaña del bosque', 2012, 'https://www.youtube.com/watch?v=wZjung6T2Ps', 'Cinco adolescentes se preparan para pasar el fin de semana en una aislada cabaña en el bosque, sin m', 'the_cabin_in_the_woods.jpg'),
(29, 'Terror', 'Jessabelle', 'Jessabelle', 2014, 'https://www.youtube.com/watch?v=CoBCEdt_BC8', 'Una joven es forzada a volver a casa de su padre, en Luisiana, cuando un accidente de tráfico la dej', 'jessabelle.jpg'),
(30, 'Terror', 'Annabelle', 'Annabelle', 2014, 'https://www.youtube.com/watch?v=8kmLHwKH31M', 'ohn Form encuentra el regalo perfecto para su mujer embarazada, Mia: una preciosa e inusual muñeca v', 'annabelle.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
