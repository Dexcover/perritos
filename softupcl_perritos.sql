-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2018 a las 13:22:20
-- Versión del servidor: 5.5.51-38.2
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `softupcl_perritos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

CREATE TABLE IF NOT EXISTS `perros` (
  `id_perro` int(11) NOT NULL,
  `NOMBRE_PERRO` varchar(100) NOT NULL,
  `EDAD_PERRO` varchar(20) NOT NULL,
  `SEXO` varchar(20) NOT NULL,
  `DESC_PERRO` varchar(500) NOT NULL,
  `RAZA` varchar(100) NOT NULL,
  `FOTO` varchar(100) DEFAULT NULL,
  `ESTADO` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`id_perro`, `NOMBRE_PERRO`, `EDAD_PERRO`, `SEXO`, `DESC_PERRO`, `RAZA`, `FOTO`, `ESTADO`) VALUES
(1, 'Clara', '2 años y 1 mes', 'Hembra', 'Clara fue encontrada por un lugareño que cuidó de ella hasta que fuimos a recogerla, \r\nno la quería porque no le servía para cazar. Es muy miedosa pero cariñosa cuando conoce, \r\nhay que acercarse a ella despacio y con tranquilidad', 'Mestizo', '1.jpg', 1),
(2, 'Coqueta', '4 meses y 3 dias', 'Hembra', 'Fue rescatada hace unas semanas junto a sus 12 hermanos. ha tenido suerte \r\ny ha encontrado una estupenda casa de acogida donde esta descubriendo el calor de un hogar.\r\nes un cachorrita buena, juguetona y sociable. \r\nLe gustan los mimos y esta empezando a descubrir lo que son los juguetes, esta encantada.', 'Labrador/Mastín', '2.jpg', 1),
(3, 'Toby', '4 años y 3 meses', 'Macho', 'A este pequeño, Aster, su dueña ya no lo quiere, simplemente se ha cansado de él.', 'Cruce de Prinscher', '3.jpg', 0),
(4, 'Maya', '4 meses y 3 días', 'Hembra', 'Maya fue rescatada hace unas semanas junto a sus 12 hermanos. \r\nHa tenido suerte y ha encontrado una estupenda casa de acogida donde esta descubriendo el calor de un hogar.\r\nEs un cachorrita buena, juguetona y sociable. Le gustan los mimos y esta empezando a descubrir lo que son los juguetes, esta encantada.', 'Cruce de Border Collie', '4.jpg', 0),
(5, 'Kiwi', '1 año y 6 meses', 'Hembra', 'Kiwi fue encontrada en el campo junto con Foxi.\r\nLas dos perritas se han dejado coger fácilmente, porque son muy sociales y cariñosas.\r\nKiwi es muy juguetona y le encanta ser el centro del atención. Nos hace reír cuando se pone en sus patitas de atrás,\r\ncon sus patitas de alante a los lados como si dos brazos humanos fuesen, mostrando sus dientes, como si se estuviese esforzando en mirar', 'Mestizo', '5.jpg', 0),
(6, 'Rabbit', '1 año y mes', 'Macho', 'Rabbit (que así lo hemos llamado, trataba de llamar la atención de los humanos para que ayudaran a su madre, \r\nque no se movía…, seguramente debido al hambre que pasaban y que les hizo comer cualquier cosa…\r\nAfortunadamente la perrita se recuperó muy rápidamente, y los dos fueron acogidos de forma provisional \r\npor la vecina, que nos refiere que los dos perritos son un amor, cariñosos, alegres y muy agradecidos de vivir \r\nen una casita Buscamos a esa familia que le quiera para toda una vida feli', 'Mestizo', '6.jpg', 0),
(7, 'Eros', '2 años y 1 mes', 'Macho', 'Eros tenia una familia, pero por problemas de salud no pueden tenerlo mas.', 'Beagle/Teckle', '7.jpg', 0),
(8, 'Pinta', '3 meses y 4 días', 'Hembra', 'Pinta proviene de una camada no deseada. Fue encontrada abandonada junto a sus hermanos en una finca en la que no vive nadie. \r\nNecesita urgentemente un hogar o casa de acogida, donde pueda recibir cariño y jugar, que es lo que más le gusta.', 'Cruce de Mastín', '8.jpg', 0),
(9, 'Baddy', '3 meses y 4 días', 'Hembra', 'Baddy proviene de una camada no deseada. Fue encontrada abandonada junto a sus hermanos en una finca en la que no vive nadie. \r\nNecesita urgentemente un hogar o casa de acogida, donde pueda recibir cariño y jugar, que es lo que más le gusta.', 'Cruce de Mastín', '9.jpg', 0),
(10, 'Marcus', '3 meses y 3 días', 'Macho', 'Marcus proviene de una camada no deseada. Fue encontrado abandonado junto a sus hermanos en una finca en la que no vive nadie.\r\nNecesita urgentemente un hogar o casa de acogida, donde pueda recibir cariño y jugar, que es lo que más le gusta.', 'Cruce de Mastín', '10.jpg', 0),
(11, 'Oso', '3 meses y 4 días', 'Macho', 'Oso proviene de una camada no deseada. Fue encontrado abandonado junto a sus hermanos en una finca en la que no vive nadie. \r\nNecesita urgentemente un hogar o casa de acogida, donde pueda recibir cariño y jugar, que es lo que más le gusta.', 'Cruce de Mastín', '11.jpg', 0),
(12, 'Cala', '11 meses y 11 días', 'Hembra', 'Cala es una perrita muy querida, pero su joven dueño tiene que irse a trabajar muy muy lejos de España, \r\na un país donde los perros no son bienvenidos, asi que nos pide que le busquemos a la mejor familia del mundo. \r\nEs una cachorra activa, juguetona y muy cariñosa…. Ya está esterilizada, y lista para empezar una nueva vida.', 'Cruce de Beagle', '12.jpg', 0),
(13, 'Coke', '1 año y 6 meses', 'Macho', 'Coke era el perro de un vagabundo. Este individuo tenia al perro todo el dia atado, expuesto al sol 24h \r\ny sin agua ni comida. Sin que pudiera moverse, haciendose sus necesidades encima. \r\nBuscamos un hogar digno para este encanto de perrito.', 'Mestizo', '13.jpg', 0),
(14, 'Mulán', '3 meses y 13 días', 'Hembra', 'Nos encontramos a Mulan y Choco en el entorno de Jaen, estaban junto a su mami en el campo. Solo las dos \r\nbebes han venido al albergue de Nueva Vida.\r\nSon dos pequeñas con mucho miedo. \r\nNecesitan rapido un hogar definitivo donde aprenderán a confiar en los humanos y disfrutar la vida.', 'Mestizo', '14.jpg', 0),
(15, 'Choco', '3 meses y 13 días', 'Hembra', 'Nos encontramos a Mulan y Choco en el entorno de Jaen, estaban junto a su mami en el campo. Solo las dos \r\nbebes han venido al albergue de Nueva Vida.Son dos pequeñas con mucho miedo. \r\nNecesitan rapido un hogar definitivo donde aprenderán a confiar en los humanos y disfrutar la vida.', 'Mestizo', '15.jpg', 0),
(16, 'Roky', '8 años y 6 meses', 'Macho', 'Roky fue a vivir con su familia hace tiempo, pero la situación en su casa ahora es un poco difícil,ya que hay tres miembros humanos nuevos.', 'Mestizo', '16.jpg', 0),
(34, 'Duke', '12', 'Macho', 'Perro muy cariñoso ', 'french', 'IMG-20130401-WA0000.jpg', 0),
(35, 'Kasiuki', '12 meses y 7 dias', 'Macho', 'Muy cariñoso  ', 'pastor aleman', '2688916488_1a125cd0e7_b.jpg', 1),
(36, 'toby', '12 meses y 7 dias', 'Macho', 'Muy cariñoso pero enfermito ', 'Desconocido', 'perro-vagabundo-300x214.jpg', 0),
(37, 'Juanito', '12 meses y 8 diaa', 'Macho', 'Blanco con negro muy bonito y no tiene enfermedades', 'Desconida', '1501632371087454366272.jpg', 0),
(38, 'Juanito2', '12 meses y 8 diaa', 'Macho', 'Blanco con negro muy bonito y no tiene enfermedades', 'Desconida', '1501632554720128497626.jpg', 0),
(39, 'Juanito3', '12 meses y 8 diaa', 'Macho', 'Blanco con negro muy bonito y no tiene enfermedades', 'Desconida', '26d0443d02cce2f1daeff522c7f67c7c.jpg', 1),
(40, 'Dylan', '12 ', 'Macho', ' Feliz', 'Desc', 'image.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `ID_SOLICITUD` int(11) NOT NULL,
  `ID_PERRO` int(11) DEFAULT NULL,
  `NOMBRE_ADOPTANTE` varchar(100) NOT NULL,
  `APELLIDO_ADOPTANTE` varchar(100) NOT NULL,
  `CEDULA` int(11) NOT NULL,
  `EDAD` int(11) NOT NULL,
  `SEXO_ADOPTANTE` varchar(50) NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`ID_SOLICITUD`, `ID_PERRO`, `NOMBRE_ADOPTANTE`, `APELLIDO_ADOPTANTE`, `CEDULA`, `EDAD`, `SEXO_ADOPTANTE`, `DIRECCION`, `TELEFONO`) VALUES
(6, 34, 'Diego Vinicio', 'Chicaiza Herrera', 1719668863, 23, 'Hombre', 'san luis de chillogallo', '0979020055'),
(7, 35, 'Juan Felix', 'Alcozer Bustamante', 1719219081, 15, 'Hombre', 'Las casas NO32-212', '02254567'),
(8, 2, 'JORDAN', 'BUSTAMANTE', 1719668896, 15, 'Hombre', 'SN', '099896698'),
(9, 39, 'Lilian ', 'Chicaiza herrera ', 1713297016, 31, 'Mujer', 'Los pinos ', '0997618764'),
(10, 1, 'Esteban', 'Chicaiza Ushiña ', 1719668876, 16, 'Hombre', 'San Luis ', '3035245');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `user` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `password`) VALUES
('joeladmin', 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`id_perro`), ADD UNIQUE KEY `PERROS_PK` (`id_perro`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`ID_SOLICITUD`), ADD UNIQUE KEY `SOLICITUD_PK` (`ID_SOLICITUD`), ADD KEY `RELATIONSHIP_1_FK` (`ID_PERRO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `id_perro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `ID_SOLICITUD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
ADD CONSTRAINT `FK_SOLICITU_RELATIONS_PERROS` FOREIGN KEY (`ID_PERRO`) REFERENCES `perros` (`id_perro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
