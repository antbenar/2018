-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 03-07-2018 a las 18:00:58
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yourmovie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`codigo`, `nombre`) VALUES
('ACT-001', 'John Travolta'),
('ACT-002', 'Samuel L. Jackson'),
('ACT-003', 'Uma Thurman'),
('ACT-004', 'Russell Crowe'),
('ACT-005', 'Paul Bettany'),
('ACT-006', 'Ed Harris'),
('ACT-007', 'Meryl Streep'),
('ACT-008', 'Amanda Seyfried'),
('ACT-009', 'Pierce Brosnan'),
('ACT-010', 'Lindsay Lohan'),
('ACT-011', 'Rachel McAdams'),
('ACT-012', 'Luci Lui'),
('ACT-013', 'Vivica A.Fox'),
('ACT-014', 'Robert Downey Jr.'),
('ACT-015', 'Chris Hemsworth'),
('ACT-016', 'Mark Ruffalo'),
('ACT-017', 'Tom Hiddleston'),
('ACT-018', 'Mark Hamill'),
('ACT-019', 'Harrison Ford'),
('ACT-020', 'Carrie Fisher'),
('ACT-021', 'Michael J. Fox'),
('ACT-022', 'Chritopher Lloyd'),
('ACT-023', 'Elijad Wood'),
('ACT-024', 'Ian McKellen'),
('ACT-025', 'Liv Tyler'),
('ACT-026', 'Warwick Davis'),
('ACT-027', 'Val Kilmer'),
('ACT-028', 'Mia Wasikowska'),
('ACT-029', 'Leonardo DiCrapio'),
('ACT-030', 'Kate Winslet'),
('ACT-031', 'Julia Roberts'),
('ACT-032', 'Richard Gere'),
('ACT-033', 'Hugh Jackman'),
('ACT-034', 'Anne Hathaway'),
('ACT-035', 'Olivia Newton'),
('ACT-036', 'Guy Pearce'),
('ACT-037', 'Carrie-Anne Moss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor_x_pelicula`
--

CREATE TABLE `actor_x_pelicula` (
  `codActor` varchar(10) NOT NULL,
  `codPelicula` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor_x_pelicula`
--

INSERT INTO `actor_x_pelicula` (`codActor`, `codPelicula`) VALUES
('ACT-001', 'PEL-001'),
('ACT-001', 'PEL-015'),
('ACT-002', 'PEL-001'),
('ACT-003', 'PEL-001'),
('ACT-003', 'PEL-005'),
('ACT-004', 'PEL-002'),
('ACT-004', 'PEL-014'),
('ACT-005', 'PEL-002'),
('ACT-006', 'PEL-002'),
('ACT-007', 'PEL-003'),
('ACT-008', 'PEL-003'),
('ACT-008', 'PEL-004'),
('ACT-008', 'PEL-014'),
('ACT-009', 'PEL-003'),
('ACT-010', 'PEL-004'),
('ACT-011', 'PEL-004'),
('ACT-012', 'PEL-005'),
('ACT-013', 'PEL-005'),
('ACT-014', 'PEL-006'),
('ACT-015', 'PEL-006'),
('ACT-016', 'PEL-006'),
('ACT-016', 'PEL-016'),
('ACT-017', 'PEL-006'),
('ACT-017', 'PEL-011'),
('ACT-018', 'PEL-007'),
('ACT-019', 'PEL-007'),
('ACT-020', 'PEL-007'),
('ACT-021', 'PEL-008'),
('ACT-022', 'PEL-008'),
('ACT-023', 'PEL-009'),
('ACT-024', 'PEL-009'),
('ACT-025', 'PEL-009'),
('ACT-026', 'PEL-010'),
('ACT-027', 'PEL-010'),
('ACT-028', 'PEL-011'),
('ACT-029', 'PEL-012'),
('ACT-029', 'PEL-016'),
('ACT-030', 'PEL-012'),
('ACT-031', 'PEL-013'),
('ACT-032', 'PEL-013'),
('ACT-033', 'PEL-014'),
('ACT-034', 'PEL-014'),
('ACT-035', 'PEL-015'),
('ACT-036', 'PEL-017'),
('ACT-037', 'PEL-017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cine`
--

CREATE TABLE `cine` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `codigo` int(11) NOT NULL,
  `tema` varchar(20) NOT NULL,
  `Comentario` text NOT NULL,
  `codUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`codigo`, `tema`, `Comentario`, `codUser`) VALUES
(4, 'Me gustan las pelis', 'Paso mas de 8 horas viendo peliculas diariamente!!', 1),
(5, 'Anthony!...', 'Tambien me fascinas ver pelÃ­culas.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`codigo`, `nombre`) VALUES
('DIR-001', 'Quentin tarantino'),
('DIR-002', 'Ron Howard'),
('DIR-003', 'Phyllida Lloyd'),
('DIR-004', 'Mark Waters'),
('DIR-005', 'Joss Whedon'),
('DIR-006', 'George Lucas'),
('DIR-007', 'Robert Zemeckis'),
('DIR-008', 'Peter Jackson'),
('DIR-009', 'Gillermo del Toro'),
('DIR-010', 'James Cameron'),
('DIR-011', 'Gary Marshall'),
('DIR-012', 'Tom Hopper'),
('DIR-013', 'Randal Kleiser'),
('DIR-014', 'Martin Scorsese'),
('DIR-015', 'Chritopher Nolan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`codigo`, `nombre`) VALUES
('GEN-001', 'DRAMA'),
('GEN-002', 'COMEDIA'),
('GEN-003', 'ACCION'),
('GEN-004', 'CIENCIA Y FICCION'),
('GEN-005', 'FANTASIA'),
('GEN-006', 'TERROR'),
('GEN-007', 'ROMANCE'),
('GEN-008', 'MUSICAL'),
('GEN-009', 'SUSPENSO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `coddirector` varchar(10) DEFAULT NULL,
  `codgenero` varchar(10) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`codigo`, `nombre`, `coddirector`, `codgenero`, `descripcion`) VALUES
('PEL-001', 'Tiempos Violentos', 'DIR-001', 'GEN-001', 'Esta comedia negra entreteje las historias de un asesino fanatico de las hamburguesas,su filosofico companiero y un boxeador arruinado.'),
('PEL-002', 'Una Mente Brillante', 'DIR-002', 'GEN-001', 'Narra la vida y obra del famoso economista John Nash Jr., un hombre brillante acosado por una angustiosa enfermedad mental.'),
('PEL-003', 'Mamma Mia', 'DIR-003', 'GEN-002', ' En la isla griega de Kalokari, una madre soltera enloquece cuando su hija, futura novia, invita a tres antiguos examantes de su madre a la boda.'),
('PEL-004', 'Chicas Pesadas', 'DIR-004', 'GEN-002', 'Cady se une a la pandilla mas poderosa de la escuela, pero debe enfrentar el infierno cuando el exnovio de la lider de la pandilla quiere ser su novio.'),
('PEL-005', 'KILL BILL', 'DIR-001', 'GEN-003', 'El despiadado Bill balea en el altar a una asesina, empleada suya,  junto con otros miembros de su circulo de asesinos, pero ella sobrevive y planea su venganza.'),
('PEL-006', 'Avengers', 'DIR-005', 'GEN-003', 'Un reparto de superheroes- incluidos Iron Man, el Increible Hulk y Capitan America se unen para salvar al mundo de una catastrofe.'),
('PEL-007', 'Star Wars', 'DIR-006', 'GEN-004', 'En medio de una riesgosa caceria por la galaxia, nace un nuevo Jedi, un paso mas en una osada aventura.'),
('PEL-008', 'Volver al Futuro', 'DIR-007', 'GEN-004', 'Es 1985 y la vida de Marty McFly no puede tener mas problemas. De prontp recibe un mensaje del Doc que lo cita en un centro comercial en la noche para que filme un nuevo y revolucionario experimento.'),
('PEL-009', 'El SeÃ±or de los Anillos', 'DIR-008', 'GEN-005', 'Narra el viaje del protagonista principal, Frodo Bolson, hobbit de la Comarca, para destruir el Anillo Unico y la consiguiente guerra que provocara el enemigo para recuperarlo, ya que es la principal fuente de poder de su creador, el SeÃ±or oscuro Sauron.'),
('PEL-010', 'Willow', 'DIR-002', 'GEN-005', 'Erase una vez un enano que, al mÂ·s puro estilo de Bilbo Baggins en Ã¬El hobbitÃ®, veÃŒa cÃ›mo su apacible rutina en un pueblo de gente como Ãˆl se venÃŒa abajo con la llamada de la aventura. Proteger a un bebÃˆ destinado a grandes cosas requerÃŒa la ayuda de un musculitos con un interior mas tierno que una babosa.'),
('PEL-011', 'La Cumbre Escarlata', 'DIR-009', 'GEN-006', 'Una heredera estadounidense se casa con un aristocrata britanico en la ruina y se muda a su siniestra mansion, que no tardara en revelar sus secretos mas sangrientos.'),
('PEL-012', 'Titanic', 'DIR-010', 'GEN-007', 'Dos jovenes que se conocen y se enamoran a bordo del transatlÂ·ntico Titanic. Pertenecientes a diferentes clases sociales, intentan salir adelante pese a las adversidades que los separarÃŒan de forma definitiva y el hundimiento del lujoso barco tras chocar con un iceberg.'),
('PEL-013', 'Mujer Bonita', 'DIR-011', 'GEN-007', 'En esta deliciosa comedia, un inescrupuloso millonario hace un acuerdo comercial de Hollywood, pero termina enamorandose perdidamente.'),
('PEL-014', 'Les Miserables', 'DIR-012', 'GEN-008', 'Ambientada en la Francia del siglo XIX, Los miserables narra una fascinante historia de sueÃ±os rotos y amor no correspondido, pasion, sacrificio y redencion.'),
('PEL-015', 'Grease', 'DIR-013', 'GEN-008', 'Grease es lo que quieres! Vuelve a la escuela secundaria con Sandy, una pink lady, Danny, lider de los chicos  malos T-Birds, y un rocanrolero elenco estelar.'),
('PEL-016', 'La Isla Siniestra', 'DIR-014', 'GEN-009', 'Cuando un alguacil federal llega a un confinamiento para criminales dementes, lo que comienza como una investigacion de rutina rapidamente se torna en algo siniestro.'),
('PEL-017', 'Amnesia', 'DIR-015', 'GEN-009', 'Afectado con la perdida de memoria a corto plazo a raiz de una lesion en la cabeza, Leonard Shelby se embarca en una sombria cruzada en busca del asesino de su mujer.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `nombre_apellido` varchar(50) DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `nombre_apellido`, `user`, `password`, `sexo`) VALUES
(1, 'anthony', 'antbenar', 'a', 'masculino'),
(2, 'Adriana Perez', 'aperez', 'a', 'femenino'),
(3, 'casssa', 'casssa', 'casssa', 'casssssa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_x_actor`
--

CREATE TABLE `usuario_x_actor` (
  `codUser` int(11) NOT NULL,
  `codActor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_x_actor`
--

INSERT INTO `usuario_x_actor` (`codUser`, `codActor`) VALUES
(1, 'ACT-004'),
(2, 'ACT-001'),
(3, 'ACT-005');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_x_cine`
--

CREATE TABLE `usuario_x_cine` (
  `codUser` int(11) NOT NULL,
  `codCine` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_x_genero`
--

CREATE TABLE `usuario_x_genero` (
  `codUser` int(11) NOT NULL,
  `codgenero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_x_genero`
--

INSERT INTO `usuario_x_genero` (`codUser`, `codgenero`) VALUES
(1, 'GEN-002'),
(2, 'GEN-004'),
(3, 'GEN-002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_x_pelicula`
--

CREATE TABLE `usuario_x_pelicula` (
  `codUser` int(11) NOT NULL,
  `codPelicula` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_x_pelicula`
--

INSERT INTO `usuario_x_pelicula` (`codUser`, `codPelicula`) VALUES
(1, 'PEL-002'),
(2, 'PEL-002'),
(3, 'PEL-003');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `actor_x_pelicula`
--
ALTER TABLE `actor_x_pelicula`
  ADD PRIMARY KEY (`codActor`,`codPelicula`),
  ADD KEY `FK_PELICULA_ACTOR` (`codPelicula`);

--
-- Indices de la tabla `cine`
--
ALTER TABLE `cine`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_USUARIO_X_COMENTARIO` (`codUser`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_DIRECTOR` (`coddirector`),
  ADD KEY `FK_GENERO` (`codgenero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario_x_actor`
--
ALTER TABLE `usuario_x_actor`
  ADD PRIMARY KEY (`codUser`,`codActor`),
  ADD KEY `FK_ACTOR_USUARIO` (`codActor`);

--
-- Indices de la tabla `usuario_x_cine`
--
ALTER TABLE `usuario_x_cine`
  ADD PRIMARY KEY (`codUser`,`codCine`),
  ADD KEY `FK_CINE_USUARIO` (`codCine`);

--
-- Indices de la tabla `usuario_x_genero`
--
ALTER TABLE `usuario_x_genero`
  ADD PRIMARY KEY (`codUser`,`codgenero`),
  ADD KEY `FK_GENERO_USUARIO` (`codgenero`);

--
-- Indices de la tabla `usuario_x_pelicula`
--
ALTER TABLE `usuario_x_pelicula`
  ADD PRIMARY KEY (`codUser`,`codPelicula`),
  ADD KEY `FK_PELICULA_USUARIO` (`codPelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actor_x_pelicula`
--
ALTER TABLE `actor_x_pelicula`
  ADD CONSTRAINT `FK_ACTOR_PELICULA` FOREIGN KEY (`codActor`) REFERENCES `actor` (`codigo`),
  ADD CONSTRAINT `FK_PELICULA_ACTOR` FOREIGN KEY (`codPelicula`) REFERENCES `pelicula` (`codigo`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_USUARIO_X_COMENTARIO` FOREIGN KEY (`codUser`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `FK_DIRECTOR` FOREIGN KEY (`coddirector`) REFERENCES `director` (`codigo`),
  ADD CONSTRAINT `FK_GENERO` FOREIGN KEY (`codgenero`) REFERENCES `genero` (`codigo`);

--
-- Filtros para la tabla `usuario_x_actor`
--
ALTER TABLE `usuario_x_actor`
  ADD CONSTRAINT `FK_ACTOR_USUARIO` FOREIGN KEY (`codActor`) REFERENCES `actor` (`codigo`),
  ADD CONSTRAINT `FK_USUARIO_ACTOR` FOREIGN KEY (`codUser`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `usuario_x_cine`
--
ALTER TABLE `usuario_x_cine`
  ADD CONSTRAINT `FK_CINE_USUARIO` FOREIGN KEY (`codCine`) REFERENCES `cine` (`codigo`),
  ADD CONSTRAINT `FK_USUARIO_CINE` FOREIGN KEY (`codUser`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `usuario_x_genero`
--
ALTER TABLE `usuario_x_genero`
  ADD CONSTRAINT `FK_GENERO_USUARIO` FOREIGN KEY (`codgenero`) REFERENCES `genero` (`codigo`),
  ADD CONSTRAINT `FK_USUARIO_GENERO` FOREIGN KEY (`codUser`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `usuario_x_pelicula`
--
ALTER TABLE `usuario_x_pelicula`
  ADD CONSTRAINT `FK_PELICULA_USUARIO` FOREIGN KEY (`codPelicula`) REFERENCES `pelicula` (`codigo`),
  ADD CONSTRAINT `FK_USUARIO_PELICULA` FOREIGN KEY (`codUser`) REFERENCES `usuario` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
