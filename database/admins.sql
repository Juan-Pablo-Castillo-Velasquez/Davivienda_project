

CREATE TABLE `peticiones` (
  `id_registro_usuarios` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tipodocumento` varchar(250) NOT NULL,
  `documento` int(11) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `loanAmount` varchar(250) NOT NULL,
  `certificado` varchar(250) NOT NULL,
  `loanPurpose` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id_registro_usuarios`, `fullName`, `email`, `tipodocumento`, `documento`, `telefono`, `direccion`, `ciudad`, `loanAmount`, `certificado`, `loanPurpose`) VALUES
(1, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 2133213, '3228121704', 'calle 16I BIs ·106-23', 'Bogota', '12.00000', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO F-023C.. (1) (1).pdf', 'hello'),
(2, 'juanito', 'juan12313@gmail.com', 'cedula', 12313, '3228121704', '123123', 'Bogota', '112222222', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO F-023C.. (1) (1).pdf', '1231321'),
(3, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 12313123, '12313213', '231313', '23131', '1222222', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO F-023C.. (1) (1).pdf', '12313123'),
(4, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 12313, '3228121704', 'calle 16I BIs ·106-23', 'Bogota', '1200000', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO F-023C.. (1) (1).pdf', 'hello'),
(5, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 12313, '3228121704', 'calle 16I BIs ·106-23', 'Bogota', '1200000', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO F-023C.. (1) (1).pdf', 'hello'),
(6, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 2133213, '3228121704', 'calle 16I BIs ·106-23', 'Bogota', '2000000000000', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO. ACTA 01 CONCERTACION LOGO NARANJA (1).pdf', 'dsadadsad'),
(7, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 2133213, '3228121704', 'calle 16I BIs ·106-23', 'Bogota', '2000000000000', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO. ACTA 01 CONCERTACION LOGO NARANJA (1).pdf', 'dsadadsad'),
(8, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 2133213, '3228121704', 'calle 16I BIs ·106-23', 'Bogota', '2000000000000', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO. ACTA 01 CONCERTACION LOGO NARANJA (1).pdf', 'dsadadsad'),
(9, 'juan Pablo castillo', 'juanpablo2007k@gmail.com', 'cedula', 2133213, '3228121704', 'calle 16I BIs ·106-23', 'Bogota', '2000000000000', '2023 07 25 1400 2620594 JUAN PABLO CASTILLO. ACTA 01 CONCERTACION LOGO NARANJA (1).pdf', 'dsadadsad');



CREATE TABLE `usuarioscreados` (
  `id_usuario` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellidos` varchar(250) NOT NULL,
  `Cedula` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `registro` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarioscreados`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosregistro`
--

CREATE TABLE `usuariosregistro` (
  `id` int(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `passworld` varchar(250) NOT NULL,
  `confirm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosreportados`
--

CREATE TABLE `usuariosreportados` (
  `id_usuario_reportado` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellidos` varchar(250) NOT NULL,
  `Cedula` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `reportado` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariosreportados`
--

INSERT INTO `usuariosreportados` (`id_usuario_reportado`, `Nombre`, `Apellidos`, `Cedula`, `fecha`, `telefono`, `email`, `direccion`, `reportado`) VALUES
(3, 'juan Pablo', 'castillo', '12313', '2023-07-31', '3228121704', 'juanpablo2007k@gmail.com', 'calle 16I BIs ·106-23', 'reportado');

--

--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id_registro_usuarios`);


ALTER TABLE `usuarioscreados`
  ADD PRIMARY KEY (`id_usuario`);


ALTER TABLE `usuariosregistro`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuariosreportados`
  ADD PRIMARY KEY (`id_usuario_reportado`);



ALTER TABLE `peticiones`
  MODIFY `id_registro_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;





ALTER TABLE `usuarioscreados`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


ALTER TABLE `usuariosregistro`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuariosreportados`
  MODIFY `id_usuario_reportado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


