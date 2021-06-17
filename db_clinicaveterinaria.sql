-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2019 a las 16:09:46
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_clinicaveterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbousuario`
--

CREATE TABLE `dbousuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `apellido` varchar(45) NOT NULL DEFAULT '',
  `usser` varchar(45) NOT NULL DEFAULT '',
  `pass` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tipo` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbousuario`
--

INSERT INTO `dbousuario` (`id`, `nombre`, `apellido`, `usser`, `pass`, `tipo`) VALUES
(1, 'Jonathan', 'VM', 'jonjova', 12345, 1),
(2, 'Gucci', 'Lemon', 'Gucci', 54321, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_cirugiasmedicos`
--

CREATE TABLE `dbo_cirugiasmedicos` (
  `id` int(11) NOT NULL,
  `cirugias` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_cita`
--

CREATE TABLE `dbo_cita` (
  `id` int(11) NOT NULL,
  `Fecha_realizacion` date NOT NULL,
  `Fecha_consulta` date NOT NULL,
  `medico` int(11) NOT NULL,
  `nombre_consultorio` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_cita`
--

INSERT INTO `dbo_cita` (`id`, `Fecha_realizacion`, `Fecha_consulta`, `medico`, `nombre_consultorio`, `tipo`) VALUES
(1, '2019-01-01', '2019-02-14', 1, 1, 1),
(2, '2019-02-12', '2019-03-01', 2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_citaestado`
--

CREATE TABLE `dbo_citaestado` (
  `id` int(11) NOT NULL,
  `Estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_citaestado`
--

INSERT INTO `dbo_citaestado` (`id`, `Estado`) VALUES
(1, 'Activas'),
(2, 'Cancelar'),
(3, 'Reprogramar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_consultasmedico`
--

CREATE TABLE `dbo_consultasmedico` (
  `id` int(11) NOT NULL,
  `max` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_consultasmedico`
--

INSERT INTO `dbo_consultasmedico` (`id`, `max`) VALUES
(1, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_consultorio`
--

CREATE TABLE `dbo_consultorio` (
  `id` int(11) NOT NULL,
  `nombre_consultorio` varchar(45) NOT NULL,
  `extencion_telefonica` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_consultorio`
--

INSERT INTO `dbo_consultorio` (`id`, `nombre_consultorio`, `extencion_telefonica`) VALUES
(1, 'Primera vez', '7788-5554'),
(2, 'Cirugia', '7898-7889');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_control`
--

CREATE TABLE `dbo_control` (
  `id` int(11) NOT NULL,
  `mascota` int(11) NOT NULL,
  `citas` int(11) NOT NULL,
  `consultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_direccioncliente`
--

CREATE TABLE `dbo_direccioncliente` (
  `id` int(11) NOT NULL,
  `#casa` int(11) NOT NULL,
  `calle` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_excliente`
--

CREATE TABLE `dbo_excliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` int(11) NOT NULL,
  `direccion` int(11) NOT NULL,
  `DUI` int(11) NOT NULL,
  `contacto` int(11) NOT NULL,
  `mascota_tiempotenencia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_exmascota`
--

CREATE TABLE `dbo_exmascota` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo_mascota` int(11) NOT NULL,
  `tipo_mascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_exmascota`
--

INSERT INTO `dbo_exmascota` (`id`, `nombre`, `edad`, `sexo_mascota`, `tipo_mascota`) VALUES
(1, 'Lucky', 8, 1, 1),
(2, 'Andres', 1, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_expediente`
--

CREATE TABLE `dbo_expediente` (
  `id` int(11) NOT NULL,
  `datos_mascotas` int(11) NOT NULL,
  `datos_clientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_horacita`
--

CREATE TABLE `dbo_horacita` (
  `id` int(11) NOT NULL,
  `hora` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_horariomedico`
--

CREATE TABLE `dbo_horariomedico` (
  `id` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `consulta` int(11) NOT NULL,
  `cirugias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_medico`
--

CREATE TABLE `dbo_medico` (
  `id` int(11) NOT NULL,
  `medico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_medico`
--

INSERT INTO `dbo_medico` (`id`, `medico`) VALUES
(1, 'Dr. Araujo'),
(2, 'Dr. Mancilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_registromedico`
--

CREATE TABLE `dbo_registromedico` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `numero_junta` int(11) NOT NULL,
  `NIT` int(11) NOT NULL,
  `DUI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_registromedico`
--

INSERT INTO `dbo_registromedico` (`id`, `nombre`, `fecha_nacimiento`, `especialidad`, `numero_junta`, `NIT`, `DUI`) VALUES
(1, 'sdf', '2019-02-11', 'dsf', 45, 457, 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_sexomascota`
--

CREATE TABLE `dbo_sexomascota` (
  `id` int(11) NOT NULL,
  `sexo_mascota` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_sexomascota`
--

INSERT INTO `dbo_sexomascota` (`id`, `sexo_mascota`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_tipocita`
--

CREATE TABLE `dbo_tipocita` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_tipocita`
--

INSERT INTO `dbo_tipocita` (`id`, `tipo`) VALUES
(1, 'Primera vez'),
(2, 'Subsecuente'),
(3, 'Emergencia'),
(4, 'Pruebas para Cirugía'),
(5, 'Cirugía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbo_tipomascota`
--

CREATE TABLE `dbo_tipomascota` (
  `id` int(11) NOT NULL,
  `tipo_mascota` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dbo_tipomascota`
--

INSERT INTO `dbo_tipomascota` (`id`, `tipo_mascota`) VALUES
(1, 'Perro'),
(2, 'Gato'),
(3, 'Peces'),
(4, 'Pajaros');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dbousuario`
--
ALTER TABLE `dbousuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `dbo_cirugiasmedicos`
--
ALTER TABLE `dbo_cirugiasmedicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_cita`
--
ALTER TABLE `dbo_cita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medico` (`medico`),
  ADD KEY `consultorio` (`nombre_consultorio`),
  ADD KEY `tipo_cita` (`tipo`);

--
-- Indices de la tabla `dbo_citaestado`
--
ALTER TABLE `dbo_citaestado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_consultasmedico`
--
ALTER TABLE `dbo_consultasmedico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_consultorio`
--
ALTER TABLE `dbo_consultorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_control`
--
ALTER TABLE `dbo_control`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_direccioncliente`
--
ALTER TABLE `dbo_direccioncliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_excliente`
--
ALTER TABLE `dbo_excliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_exmascota`
--
ALTER TABLE `dbo_exmascota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sexo_mascota` (`sexo_mascota`),
  ADD KEY `tipo_mascota` (`tipo_mascota`);

--
-- Indices de la tabla `dbo_expediente`
--
ALTER TABLE `dbo_expediente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_horacita`
--
ALTER TABLE `dbo_horacita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_horariomedico`
--
ALTER TABLE `dbo_horariomedico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_medico`
--
ALTER TABLE `dbo_medico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_registromedico`
--
ALTER TABLE `dbo_registromedico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_sexomascota`
--
ALTER TABLE `dbo_sexomascota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_tipocita`
--
ALTER TABLE `dbo_tipocita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dbo_tipomascota`
--
ALTER TABLE `dbo_tipomascota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dbousuario`
--
ALTER TABLE `dbousuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dbo_cirugiasmedicos`
--
ALTER TABLE `dbo_cirugiasmedicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dbo_cita`
--
ALTER TABLE `dbo_cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `dbo_citaestado`
--
ALTER TABLE `dbo_citaestado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dbo_consultasmedico`
--
ALTER TABLE `dbo_consultasmedico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dbo_consultorio`
--
ALTER TABLE `dbo_consultorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dbo_control`
--
ALTER TABLE `dbo_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dbo_direccioncliente`
--
ALTER TABLE `dbo_direccioncliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dbo_excliente`
--
ALTER TABLE `dbo_excliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dbo_exmascota`
--
ALTER TABLE `dbo_exmascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dbo_expediente`
--
ALTER TABLE `dbo_expediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dbo_horacita`
--
ALTER TABLE `dbo_horacita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dbo_horariomedico`
--
ALTER TABLE `dbo_horariomedico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dbo_medico`
--
ALTER TABLE `dbo_medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dbo_registromedico`
--
ALTER TABLE `dbo_registromedico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dbo_sexomascota`
--
ALTER TABLE `dbo_sexomascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dbo_tipocita`
--
ALTER TABLE `dbo_tipocita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `dbo_tipomascota`
--
ALTER TABLE `dbo_tipomascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dbousuario`
--
ALTER TABLE `dbousuario`
  ADD CONSTRAINT `dbousuario_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `dbotipo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `dbo_cita`
--
ALTER TABLE `dbo_cita`
  ADD CONSTRAINT `dbo_cita_ibfk_1` FOREIGN KEY (`medico`) REFERENCES `dbo_medico` (`id`),
  ADD CONSTRAINT `dbo_cita_ibfk_2` FOREIGN KEY (`nombre_consultorio`) REFERENCES `dbo_consultorio` (`id`),
  ADD CONSTRAINT `dbo_cita_ibfk_3` FOREIGN KEY (`tipo`) REFERENCES `dbo_tipocita` (`id`);

--
-- Filtros para la tabla `dbo_exmascota`
--
ALTER TABLE `dbo_exmascota`
  ADD CONSTRAINT `dbo_exmascota_ibfk_1` FOREIGN KEY (`sexo_mascota`) REFERENCES `dbo_sexomascota` (`id`),
  ADD CONSTRAINT `dbo_exmascota_ibfk_2` FOREIGN KEY (`tipo_mascota`) REFERENCES `dbo_tipomascota` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
