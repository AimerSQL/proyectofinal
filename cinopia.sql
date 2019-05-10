-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 11:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `tituloOriginal` varchar(50) NOT NULL,
  `tituloEsp` varchar(50) DEFAULT NULL,
  `anioEstreno` year(4) NOT NULL,
  `trailer` varchar(50) NOT NULL,
  `sinopsis` longtext,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`id`, `genero`, `tituloOriginal`, `tituloEsp`, `anioEstreno`, `trailer`, `sinopsis`, `image`) VALUES
(1, 'Fantasía/Ciencia ficción', 'Black Panther ', 'pantera negra', 2018, 'https://www.youtube.com/watch?v=repsxoJnobc', 'Después de morir su padre, T\'Challa regresa a su nación, Wakanda. Una vez allí, descubre que tiene un nuevo y terrible enemigo, y T\'Challa asume la personalidad de Pantera Negra para salvar no solo al reino de Wakanda, sino a toda la humanidad.', 0x626c61636b2070616e746865722e6a7067),
(2, 'Accion/Fantasía', 'Jumanji ', 'Jumanji: Bienvenidos a la jungla', 2017, 'https://www.youtube.com/watch?v=sLsT0KOZ0lM', 'Cuatro adolescentes encuentran un viejo videojuego que los absorbe y los transporta a una selva peligrosa, donde se convierten en personajes adultos y tienen que ir superando pruebas terribles para terminar el juego y regresar al mundo real.', 0x696d672f6a756d616e6a692e6a7067),
(3, ' Accion/Ciencia ficción', 'Rampage', 'Proyecto Rampage', 2018, 'https://www.youtube.com/watch?v=rLBQmoPmWps', 'Un gorila, un lobo y una serpiente sufren una mutación genética y se convierten en seres gigantescos y violentos. El primatólogo que cuidaba del gorila y una experta en genética tratan de detenerlos y, al mismo tiempo, evitar que sufran daños.', 0x696d672f72616d706167652e6a7067),
(4, 'Ficción', 'Star Wars', 'La Guerra de las galaxias', 2019, 'https://www.youtube.com/watch?v=dJUQWAeE-Q0', 'Obi-Wan Kenobi es un joven aprendiz caballero Jedi bajo la tutela de Qui-Gon Jinn; Anakin Skywalker, quien después será padre de Luke Skywalker y se convertirá en Darth Vader, solamente es un niño de 9 años. Cuando la Federación de Comercio corta todas las rutas al planeta Naboo, Qui-Gon y Obi-Wan son asignados para solucionar el problema.', 0x696d672f737461725f776172732e6a7067),
(5, 'Ficción', 'Avengers: infinity war', 'Vengadores, infinity war', 2018, 'https://www.youtube.com/watch?v=mMTprUsjBVs', 'Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito: poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.', 0x696d672f6176656e676572735f696e66696e6974795f7761722e6a7067),
(6, 'Ciencia Ficción', 'Shazam', 'Shazam', 2019, 'https://www.youtube.com/watch?v=B_DpkUSH2Mk', 'Billy Batson, un astuto joven de 14 años, se transforma en el superhéroe Shazam, pero sus poderes son puestos a prueba cuando se enfrenta al mal.', 0x696d672f7368617a616d2e6a7067),
(7, 'Ciencia Ficción', 'Alita, Battle angel', 'Alita, angel de batalla', 2019, 'https://www.youtube.com/watch?v=LwB8VKUVVQg', 'Alita es un cyborg que se despierta en la clínica de un médico sin recordar quién es. La cyborg deberá usar sus extraordinarias habilidades para combatir contra enemigos terribles, mientras trata de descubrir la verdad sobre su pasado.', 0x696d672f616c6974612e6a706567),
(8, 'Romance', ' the notebook', 'El diario de Noa', 2004, 'https://www.youtube.com/watch?v=4HQXXpdmxyo', 'Un hombre le cuenta a una mujer la historia de dos jóvenes que se volvieron amantes en la Carolina del Norte de 1940.', 0x696d672f7468655f6e6f7465626f6f6b2e6a7067),
(9, 'Romance', ' Pretty woman', 'Bella mujer', 1990, 'https://www.youtube.com/watch?v=_FKRK8ApMWM', 'Un elegante empresario hace el esmerado intento de adaptar a una mujer a las reglas de una sofisticada empresa de negocios.', 0x696d672f7072657474795f776f6d616e2e6a7067),
(10, 'Romance', 'Tres metros sobre el cielo', 'Tres metros sobre el cielo', 2010, 'https://www.youtube.com/watch?v=M6bO4CLgink', 'Es la historia de dos jóvenes: uno problemático con tendencias violentas que inicia un romance con una niña rica.', 0x696d672f336d73632e6a70672e6a7067),
(11, 'Romance', 'Twiglight', 'Crepusculo ', 2008, 'https://www.youtube.com/watch?v=UeMmnSGl_w8', 'Bella Swan se va a vivir con su padre al pequeño pueblo de Forks, donde conoce a Edward, un atractivo y misterioso chico del que se enamora y quien esconde un gran secreto: es un vampiro. Pero la familia del chico guarda una peculiaridad, y es que no se alimenta de sangre humana.', 0x696d672f63726570757363756c6f2e6a7067),
(12, 'Romance', 'After', 'Aquí empieza todo', 2019, 'https://www.youtube.com/watch?v=WQhPNOVyfeU', 'La joven Tessa Young (Josephine Langford) cursa su primer año en la universidad. Acostumbrada a una vida estable y ordenada, su mundo cambia cuando conoce a Hardin Scott (Hero Fiennes Tiffin), un misterioso joven de oscuro pasado. Desde el primer momento se odian, porque pertenecen a dos mundos distintos y son completamente opuestos. Sin embargo, estos dos polos opuestos pronto se unirán y nada volverá a ser igual. Tessa y Hardin deberán enfrentarse a difíciles pruebas para estar juntos. La inocencia, el despertar a la vida, el descubrimiento sexual y las huellas de un amor tan poderoso como la fuerza del destino. ', 0x696d672f41667465725f2e6a7067),
(13, 'Romance', 'Perdona si te llamo amor', 'Perdona si te llamo amor', 2014, 'https://www.youtube.com/watch?v=KyxQFrIdRAQ', 'Álex, de 37 años, es un ejecutivo publicitario de éxito que ansía conseguir por fin la estabilidad emocional por lo que decide proponer matrimonio a su novia. Cuando esta rechaza la propuesta y parece que su vida está a punto de desmoronarse, irrumpe en su camino Niki, una estudiante de 17 años. La joven no sólo conseguirá enamorarlo, sino que hará que la vida de Álex de un giro radical.', 0x696d672f706572646f6e61207369207465206c6c616d6f20616d6f722e6a7067),
(14, 'Comedia', 'Night School', 'Escuela para fracasados', 2018, 'https://www.youtube.com/watch?v=S2qWSNU1GWQ', 'Un grupo de alborotadores y abusones son obligados a quedarse en el colegio por las noches para así conseguir aprobar los exámenes que les permitan finalizar sus estudios de bachillerato.', 0x696d672f6e696768745f7363686f6f6c2e6a7067),
(15, 'Comedia', 'Dumb and Dumber To', 'Dos tontos todavía mas tontos', 2014, 'https://www.youtube.com/watch?v=uh5FA9PqVOg', 'Han pasado ya veinte años desde que Harry y Lloyd se conocieran y formaran el divertido dúo que nos hizo reír con sus disparatadas ocurrencias, pero ninguno de los dos parece haber madurado. Harry tiene una hija a la que apenas conoce, y necesitando un trasplante de riñón, intenta localizarla para pedirle que le done uno de los suyos. ', 0x696d672f646f7320746f6e746f732e6a7067),
(16, 'Comedia', 'Lo dejo cuando quiera', 'Lo dejo cuando quiera', 2019, 'https://www.youtube.com/watch?v=9LsrPnll5EM', 'Amigos desde la facultad y sobradamente preparados, Pedro, Arturo y Eligio son tres profesores universitarios a los que la crisis ha dejado sin trabajo. Cansados y sin blanca, encuentran accidentalmente la solución a sus problemas en el proyecto de investigación en el que Pedro lleva años trabajando: un complejo vitamínico que ofrece, para su sorpresa, desfase a tope sin efectos secundarios. Los tres profesores, con el apoyo de Anabel, una abogada reconvertida en empleada de gasolinera, y de Jota, una alumna más interesada en la juerga que en los estudios, se lanzarán al mundo de la noche y de los negocios turbios para comercializar la mercancía. Algo para lo que no parecen estar aún tan sobradamente preparados. ', 0x696d672f6c6f2064656a6f206375616e646f207175696572612e6a7067),
(17, 'Comedia', 'Perdiendo el este', 'Perdiendo el este', 2019, 'https://www.youtube.com/watch?v=mk6emYVqMCE', 'Con mil trescientos millones de habitantes, y a punto de convertirse en la primera potencia económica mundial, China ha traspasado el tópico de país exótico de cultura milenaria, donde se come arroz con palillos y las erres se pronuncian eles, para convertirse en un país moderno y pujante, una nueva tierra de oportunidades en la que todo es posible. Por eso miles de jóvenes, hijos de una vieja Europa cada vez más vieja, cargan sus ambiciones en sus maletas y cruzan nueve mil kilómetros de distancia dispuestos, como los pioneros, a conquistar el Lejano Este. Pero no es nada fácil triunfar en una tierra que tiene un idioma, una cultura y unas costumbres que están a un mundo de distancia. Y no sólo geográficamente. Tras \'Perdiendo el norte\' llegan las nuevas aventuras de la generación perdida, que en su búsqueda de fortuna por el Lejano Oriente se va a encontrar más perdida que nunca.', 0x696d672f7065726469656e646f20656c20657374652e6a7067),
(18, 'Comedia', 'The watch', 'Los amos del barrio', 2014, 'https://www.youtube.com/watch?v=MVtk505z0_o', 'En la tranquila población de Glenview, Ohio, tras el asesinato de uno de los vecinos, un grupo de amigos decide crear una patrulla de vigilancia vecinal. La forman Evan, Bob, Franklin y Jamarcus, no precisamente los más listos ni duros de la ciudad. Una noche, mientras patrullan chocan contra algo y encuentran un extraño dispositivo en forma de una bola, que resulta ser un arma alienígena.', 0x696d672f6c6f7320616d6f732064656c2062617272696f2e6a7067),
(19, 'Comedia', 'Ted', 'Ted', 2012, 'https://www.youtube.com/watch?v=xECjE4gR5Ow', 'Cuando John Bennett (Mark Wahlberg) era pequeño, deseaba que su osito de peluche Ted fuera un oso de verdad y, por desgracia, su sueño se hizo realidad. Más de veinte años después, Ted sigue con John y saca de quicio a su novia Lori, que empieza a perder la paciencia. Para colmo, a John no parece preocuparle su futuro profesional y se pasa la vida fumando porros con Ted. A pesar de ello, John intenta alcanzar la madurez, pero parece que para conseguirlo le resulta indispensable la ayuda de Ted.', 0x696d672f7465642e6a7067),
(20, 'Comedia', 'The hangover', 'Resacon en las vegas', 2009, 'https://www.youtube.com/watch?v=MckEHmSMg-0', 'Historia de una desmadrada despedida de soltero en la que el novio y tres amigos se montan una gran juerga en Las Vegas. Como era de esperar, a la mañana siguiente tienen una resaca tan monumental que no pueden recordar nada de lo ocurrido la noche anterior. Lo más extraordinario es que el novio ha desaparecido y en la suite del hotel se encuentran un tigre y un bebé.', 0x696d672f7468655f68616e676f7665722e6a7067),
(21, 'Accion', 'The expendables', 'Los mercenarios', 2010, 'https://www.youtube.com/watch?v=7k4SR6ZwjUQ', 'Un grupo de mercenarios es contratado para infiltrarse en un país sudamericano y derrocar a su despiadado y corrupto dictador. Una vez allí, se verán atrapados en una telaraña de engaño y traición. Una vez fracasada la misión, tendrán que enfrentarse a un reto aún más difícil; salvar la unidad del grupo y la amistad que los ha unido durante largos años.', 0x696d672f6c6f73206d657263656e6172696f732e6a7067),
(22, 'Accion', 'Mision impossible', 'Mision Imposible', 1997, 'https://www.youtube.com/watch?v=DZ2JjyNCwZw', 'Ethan Hunt es un superespía capaz de llevar a cabo la misión más peligrosa con la máxima eficacia y elegancia. Forma parte de un competente equipo dirigido por el agente Jim Phelps, que ha vuelto a reunir a sus hombres para participar en una dificilísima misión: evitar la venta de un disco robado que contiene información secreta de vital importancia.', 0x696d672f6d6973696f6e20696d706f7369626c652e6a7067),
(23, 'Accion', 'Allegiant', 'La serie divergente; Leal', 2016, 'https://www.youtube.com/watch?v=ZADtFSGajs0', 'Tras las revelaciones trascendentales de \'Insurgente\', Tris debe escapar con Cuatro e ir más allá del muro que rodea Chicago. Por primera vez dejarán la única ciudad y familia que conocen. Una vez fuera, todo aquello que presuponían como cierto, pierde cualquier sentido tras la revelación de nuevas verdades. Tris y Cuatro deben decidir rápidamente en quién confiar mientras se inicia una guerra despiadada que amenaza a toda la humanidad. Para sobrevivir, Tris se verá forzada a tomar decisiones imposibles sobre el coraje, la lealtad, el sacrificio y el amor. Secuela de \"Insurgente\" (2015) y punto final a la saga iniciada por \"Divergente\" (2014). Dividida en dos partes, una estrenada en 2016 y otra en 2017', 0x696d672f6c65616c2e6a7067),
(24, 'Documental', 'McLaren', 'McLaren', 2017, 'https://www.youtube.com/watch?v=NkcqA7AoqZo', 'McLaren es sinónimo de excelencia en el mundo del motor, y todo un símbolo de la superioridad automovilística. Pero pocos saben que la marca se creó gracias a un joven de Nueva Zelanda, un pionero que decidió seguir su sueño y que, con todo en contra, se convirtió en un campeón y llevó a su equipo a la grandeza. A pesar del trágico accidente que le costó la vida siendo muy joven, el legado de Bruce McLaren continúa vigente, y su pasión y visión por la innovación son los valores que rigen hoy en día en la ingeniería automovilística. McLaren es la historia inspiradora de un niño de origen humilde que se atrevió a conquistar el mundo de las carreras, y lo consiguió.', 0x696d672f4d634c6172656e2e6a7067),
(25, 'Documental', 'Avicii; True history', 'Avicii; Verdaderas historias', 2017, 'https://www.youtube.com/watch?v=1ZFK3VKzQIs', 'Documental que sigue los pasos del famoso DJ desde sus comienzos hasta sus éxitos mundiales, y su posterior lucha contra la enfermedad. True Stories, que incluye comentarios de compañeros artistas como Tiesto, David Guetta y Nile Rodgers, es un testimonio de investigación acerca del coste y la intensa presión que supone la fama para los artistas', 0x696d672f6176696369692e6a7067),
(26, 'Infantil', 'How to train your dragon', 'Como entrenar a tu dragon', 2010, 'https://www.youtube.com/watch?v=-k5ve8onP1M', 'Ambientada en el mítico mundo de los rudos vikingos y los dragones salvajes, y basada en el libro infantil de Cressida Cowell, esta comedia de acción narra la historia de Hipo, un vikingo adolescente que no encaja exactamente en la antiquísima reputación de su tribu como cazadores de dragones. El mundo de Hipo se trastoca al encontrar a un dragón que le desafía a él y a sus compañeros vikingos, a ver el mundo desde un punto de vista totalmente diferente. ', 0x696d672f636f6d6f5f656e7472656e61725f615f74755f647261676f6e2e6a7067),
(27, 'Infantil', 'The good dinosaur', 'El viaje de arlo', 2015, 'https://www.youtube.com/watch?v=xrzxx0h9w7U', '¿Qué hubiera pasado si el asteroide que cambió para siempre la vida en la Tierra hubiera esquivado el planeta y los dinosaurios no se hubieran extinguido nunca? Un viaje al mundo de los dinosaurios donde un Apatosaurus llamado Arlo se hace amigo de un humano, aunque resulte asombroso. Mientras viaja por un paisaje desolado y misterioso, Arlo aprende a enfrentarse a sus temores y descubre de lo que es capaz.', 0x696d672f656c207669616a652064652061726c6f2e6a7067),
(28, 'Terror', 'The cabin in the woods', 'La cabaña del bosque', 2012, 'https://www.youtube.com/watch?v=wZjung6T2Ps', 'Cinco estudiantes universitarios se preparan para pasar el fin de semana en una cabaña situada en un remoto bosque y sin medios de comunicación con el exterior. En el sótano encuentran una extraña colección de recuerdos; entre ellos, un diario que habla de la antigua familia que ocupó la casa. Mientras tanto, un par de técnicos en una planta industrial se están preparando para una operación desconocida. Están filmando a los jóvenes con cámaras ocultas y a través del diseño de la cabaña, el uso de sofisticados controles ambientales y la liberación de drogas en el aire, los técnicos manipulan el medio ambiente asemejándolo a un arquetipo de terror. ', 0x696d672f7468655f636162696e5f696e5f7468655f776f6f64732e6a7067),
(29, 'Terror', 'Jessabelle', 'Jessabelle', 2014, 'https://www.youtube.com/watch?v=CoBCEdt_BC8', 'Una joven es forzada a volver a casa de su padre, en Luisiana, cuando un accidente de tráfico la deja inválida sin poder usar las piernas. Descubrirá entonces que hay un misterio alrededor de su nacimiento y un fantasma, llamado Jessabelle, que parece dispuesto a acabar con ella', 0x696d672f6a6573736162656c6c652e6a7067),
(30, 'Terror', 'Annabelle', 'Annabelle', 2014, 'https://www.youtube.com/watch?v=8kmLHwKH31M', 'John Form encuentra el regalo perfecto para su mujer embarazada, Mia: una preciosa e inusual muñeca vintage que lleva un vestido de novia blanco inmaculado. Sin embargo, la alegría de Mia al recibir a Annabelle no dura mucho. Durante una espantosa noche la pareja ve como miembros de una secta satánica invaden su hogar y los atacan brutalmente. No sólo dejan sangre derramada y terror tras su visita…los miembros de la secta conjuran a un ente de tal maldad que nada de lo que han hecho se compara al siniestro camino a la maldición que ahora es… Annabelle. ', 0x696d672f416e6e6162656c6c655f2e6a7067),
(31, 'Accion', 'Robin Hood', 'Robin Hood', 2018, ' https://www.youtube.com/watch?v=f-NzyE_ls9I', 'Robin of Loxley (Taron Egerton), un cruzado curtido en mil batallas, y su comandante morisco (Jamie Foxx) se rebelan contra la corona de Inglaterra que está llena de corrupción.', 0x696d672f726f62696e5f686f6f642e6a7067),
(32, 'Documental', 'Steve Jobs', 'Steve Jobs', 2015, 'https://www.youtube.com/watch?v=SrlPyKxdMX4', 'Biopic del mítico empresario y programador informático Steve Jobs (1955-2011), centrado en la época en la que lanzó los tres productos icónicos de Apple. ', 0x696d672f73746576655f6a6f62732e6a7067),
(33, 'Documental', 'Amy', 'Amy', 2015, 'https://www.youtube.com/watch?v=EEogSsuQKzM', 'Documental sobre la famosa cantante británica Amy Winehouse, que cuenta con imágenes inéditas de archivo y entrevistas con la malograda estrella, que murió en julio del 2011 a los 27 años de edad por parada cardíaca consecuencia de sus excesos con las drogas y el alcohol, adicciones agravadas por su bulimia. Amy Winehouse, ganadora de 6 Premios Grammys, se vio desde muy joven afectada por el divorcio de sus padres. Tenía un talento natural para el jazz y el soul y una voz prodigiosa que pronto la hizo una estrella mundial a pesar de lanzar sólo dos discos, pero la fama, la prensa sensacionalista, los intereses de la industria -y de su entorno- y su turbulento amor con el que fue su pareja Blake Fielder-Civil la condujeron finalmente a su trágico destino en su piso de Camden, Londres. ', 0x696d672f616d792e6a7067),
(34, 'Documental', 'Robin Williams; come inside my mind', 'En la mente de Robin Williams', 2018, 'https://www.youtube.com/watch?v=iUDwu8LjFls', 'Íntimo retrato de la vida y carrera del actor Robin Williams.', 0x696d672f526f62696e5f57696c6c69616d732e6a7067),
(35, 'Documental', 'The Beatles; eight days a week', 'Los Beatles; ocho días a la semana', 2016, 'https://www.youtube.com/watch?v=3z2iWuaBX2c', 'Documental que explora el mundo interior de The Beatles: cómo se tomaron las decisiones, cómo se relacionaron entre sí, junto con su capacidad musical y personalidades complementarias. El film se centra en la primera parte de la carrera de The Beatles (1962-1966), la época durante la cual hicieron su gira y cautivaron al mundo entero. Muestra cómo surgió el legendario grupo, y abarca el periodo desde los días en los que tocaban en The Cavern Club en Liverpool hasta su último espectáculo en San Francisco en 1966.', 0x696d672f7468655f626561746c65732e6a7067),
(36, 'Infantil', 'The Lion King', 'El Rey Leon', 1994, ' https://www.youtube.com/watch?v=wTU3FngWzXs', 'Tras el asesinato de su padre, un joven león abandona su reino para descubrir el auténtico significado de la responsabilidad y de la valentía. Remake de \"El Rey León\", dirigido y producido por Jon Favreau, responsable de la puesta al día, con el mismo formato, de \"El libro de la selva\"', 0x696d672f656c20726579206c656f6e2e6a7067),
(37, 'Infantil', 'Moana', 'Vaiana', 2016, 'https://www.youtube.com/watch?v=tmpTGztGJ8E', 'La historia se desarrolla hace dos milenios en unas islas del sur del Pacífico. La protagonista es Vaiana Waialiki, una joven que desea explorar el mundo navegando por el océano. Ella es la única hija de un importante capitán que pertenece a una familia con varias generaciones de marinos.', 0x696d672f766169616e612e6a7067),
(38, 'Infantil', 'Finding Dory', 'Buscando a Dory', 2016, 'https://www.youtube.com/watch?v=yIV4KIDqMdo', 'Un año después de los acontecimientos narrados en \"Buscando a Nemo\", Dory vive apaciblemente con Marlin y su hijo Nemo. Pero durante un viaje para ver cómo las mantarrayas migran de vuelta a casa, los problemas de memoria de Dory parecen desaparecer durante un segundo: recuerda que tiene una familia e inmediatamente decide emprender viaje para reencontrarse con sus padres, a los que perdió hace años.', 0x696d672f66696e64696e675f646f72792e6a7067),
(39, 'Infantil', 'COCO', 'COCO', 2017, 'https://www.youtube.com/watch?v=DOtdQd_wgjI', 'Miguel es un joven con el sueño de convertirse en leyenda de la música a pesar de la prohibición de su familia. Su pasión le llevará a adentrarse en la \"Tierra de los Muertos\" para conocer su verdadero legado familiar.', 0x696d672f636f636f2e6a7067),
(40, 'Terror', 'Pet Samatary', 'Cementerio de animales', 2019, 'https://www.youtube.com/watch?v=ghXOVshAyvM', 'El doctor Louis Creed (Clarke) se muda con su mujer Racher (Seimetz) y sus dos hijos pequeños de Boston a un pueblecito de Maine, cerca del nuevo hogar de la familia descubrirá un terreno misterioso escondido entre los árboles. Cuando la tragedia llega, Louis hablará con su nuevo vecino, Jud Crandall (Lithgow), desencadenando una peligrosa reacción en cadena que desatará un mal de horribles consecuencias. ', 0x696d672f7065745f73656d61746172792e6a7067),
(41, 'Terror', 'The purge', 'La purga; la noche de las bestias', 2013, ' https://www.youtube.com/watch?v=nzcgjeXc7Rc', 'Para mantener durante el resto del año la tasa de criminalidad por debajo del 1%, los Nuevos Padres Fundadores de América ponen a prueba una teoría sociológica que da rienda suelta a todo tipo de agresiones durante una noche en una comunidad aislada. Pero cuando la violencia de los opresores se encuentra con la ira de los marginados, el vandalismo explota más allá de esas fronteras “experimentales” para extenderse por todo el país. Detrás de cada tradición hay una revolución. Descubre cómo toda una nación entera abrazó una brutal celebración anual: 12 horas de impunidad criminal. Bienvenidos a un movimiento que comenzó como un simple experimento.', 0x696d672f6c612070757267612e6a7067),
(42, 'Terror', 'Happy death day', 'Feliz dia de tu muerte', 2017, 'https://www.youtube.com/watch?v=OPrzja0SAHk', 'Una joven estudiante universitaria (Jessica Rothe) reconstruye el día de su asesinato reviviendo tanto los detalles cotidianos como su aterrador final, hasta intentar descubrir la identidad de su asesino.', 0x696d672f66656c697a20646961206465207475206d75657274652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nivel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `nivel`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
