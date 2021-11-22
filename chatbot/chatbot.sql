-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2021 a las 22:26:12
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatbot`
--
CREATE DATABASE IF NOT EXISTS `chatbot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chatbot`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasbien`
--

DROP TABLE IF EXISTS `preguntasbien`;
CREATE TABLE `preguntasbien` (
  `id` int(200) NOT NULL,
  `pregunta` varchar(2000) NOT NULL,
  `respuesta` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntasbien`
--

INSERT INTO `preguntasbien` (`id`, `pregunta`, `respuesta`) VALUES
(2, 'preguntas frecuentes', 'Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela'),
(3, 'cuales son las preguntas frecuentes?', 'Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela'),
(4, 'preguntas frecuentes?', 'Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela'),
(5, 'cuales son las preguntas que la gente mas hace?', 'Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela'),
(6, 'quien bailey?', 'bailey es un perro con pocas pulgas y de mucha calle'),
(7, 'quien bailey?', 'bailey es un perro con pocas pulgas y de mucha calle'),
(8, 'especialidades de la escuela', 'Las Especialidades del colegio son, Tecnico en Computacion, Tecnico automotriz, Tecnico Mecanico '),
(9, 'becas', 'Actualmente están las becas alimentarias y refrigerio'),
(10, 'beca alimentaria', 'Los alumnos que desean inscribirse a la beca alimentaria en el ciclo lectivo 2021 encontraran la información en el sector de novedades. Las familias que se inscribieron a becas alimentarias en el 2020, se retiran cada 15 días los días lunes 9:00 a 11:00 y de 14:00 a 16:00.'),
(11, 'beca refrigerio', 'Aquellos que deseen solicitar la beca de refrigerio deberán completar el siguiente formulario y entregarlo al preceptor. https://escuelatecnica32de14.edu.ar/assets/docs/beca_refrigerio.pdf'),
(12, 'hola', 'Hola!. Soy el BOT de la ET32'),
(13, 'Buenas', 'Hola!. Soy el BOT de la ET32'),
(14, 'que tal', 'Hola!. Soy el BOT de la ET32'),
(15, 'Que tal?', 'Hola!. Soy el BOT de la ET32'),
(17, 'requerimientos para taller', 'Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.'),
(18, 'requerimientos para las especialidades', 'Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase'),
(19, 'requerimientos taller', 'Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.'),
(20, 'requerimientos especialidades', 'Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.'),
(21, 'que especialidades hay?\" ', 'Nuestras especialidades son: Técnico en automotores, Técnico en computación, Técnico mecánico'),
(22, 'que especialidades hay', 'Nuestras especialidades son: Técnico en automotores, Técnico en computación, Técnico mecánico'),
(23, 'que especialidades hay?\" ', 'Nuestras especialidades son: Técnico en automotores, Técnico en computación, Técnico mecánico'),
(24, 'especialidades', 'Nuestras especialidades son: Técnico en automotores, Técnico en computación, Técnico mecánico'),
(25, 'Especialidades?', 'Nuestras especialidades son: Técnico en automotores, Técnico en computación, Técnico mecánico'),
(26, 'inscripciones', 'Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante'),
(27, 'inscripcion', 'Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante'),
(28, 'inscripciones 2021', 'Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante'),
(29, 'contacto', 'Contacto, Email: ofdealumnos32@gmail.com, Teléfonos: 4551-9121 4555-4026/4034, Dirección: Teodoro García 3899, C1427ECG CABA'),
(30, 'contacto?', 'Contacto, Email: ofdealumnos32@gmail.com, Teléfonos: 4551-9121 4555-4026/4034, Dirección: Teodoro García 3899, C1427ECG CABA'),
(31, 'donde se encuentra la escuela?', 'Teodoro García 3899, C1427ECG CABA'),
(32, 'pagina web de la escuela', 'https://escuelatecnica32de14.edu.ar/'),
(33, 'pagina web de la escuela', 'https://escuelatecnica32de14.edu.ar/'),
(34, 'cual es la pagina web del colegio?', 'https://escuelatecnica32de14.edu.ar/'),
(35, 'pagina web de la escuela?', 'https://escuelatecnica32de14.edu.ar/'),
(36, 'pagina', 'https://escuelatecnica32de14.edu.ar/'),
(37, 'pagina web', 'https://escuelatecnica32de14.edu.ar/'),
(38, 'pagina de la escuela', 'https://escuelatecnica32de14.edu.ar/'),
(39, 'instagram de la escuela', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(40, 'cual es el instagram de la escuela?', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(41, 'la escuela tiene instagram', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(42, 'la escuela tiene instagram?', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(43, 'ig', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(44, 'ig de la escuela', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(45, 'como es el instagram de la escuela', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(46, 'como es el instagram de la escuela?', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(47, 'instagram', 'https://www.instagram.com/la_gloriosa_32_escuela_tecnica'),
(48, 'facebook de la escuela', 'https://www.facebook.com/groups/tecnica32'),
(49, 'cual es el facebook de la escuela?', 'https://www.facebook.com/groups/tecnica32'),
(50, 'la escuela tiene facebook', 'https://www.facebook.com/groups/tecnica32'),
(51, 'la escuela tiene facebook?', 'https://www.facebook.com/groups/tecnica32'),
(52, 'fb', 'https://www.facebook.com/groups/tecnica32'),
(53, 'fb de la escuela', 'https://www.facebook.com/groups/tecnica32'),
(54, 'como es el facebook de la escuela', 'https://www.facebook.com/groups/tecnica32'),
(55, 'como es el facebook de la escuela?', 'https://www.facebook.com/groups/tecnica32'),
(56, 'facebook', 'https://www.facebook.com/groups/tecnica32'),
(57, 'email de la escuela', 'ofdealumnos32@gmail.com'),
(58, 'cual es el email de la escuela', 'ofdealumnos32@gmail.com'),
(59, 'cual es el mail de la escuela', 'ofdealumnos32@gmail.com'),
(60, 'mail de la escuela', 'ofdealumnos32@gmail.com'),
(61, 'email', 'ofdealumnos32@gmail.com'),
(62, 'mail', 'ofdealumnos32@gmail.com'),
(69, 'telefono de la escuela', '4551-9121 4555-4026/4034'),
(70, 'cual es el telefono de la esucela', '4551-9121 4555-4026/4034'),
(71, 'tel', '4551-9121 4555-4026/4034'),
(72, 'tel del colegio', '4551-9121 4555-4026/4034'),
(73, 'tel de la escuela', '4551-9121 4555-4026/4034'),
(74, 'como me puedo comunicar con la escuela', '4551-9121 4555-4026/4034'),
(75, 'como me puedo comunicar con la escuela?', '4551-9121 4555-4026/4034'),
(76, 'telefono', '4551-9121 4555-4026/4034'),
(77, 'direccion de la escuela', 'Teodoro García 3899, C1427ECG CABA'),
(78, 'cual es la direccion de la escuela?', 'Teodoro García 3899, C1427ECG CABA'),
(79, 'cual es la direccion de la escuela', 'Teodoro García 3899, C1427ECG CABA'),
(80, 'ubicacion de la escuela', 'Teodoro García 3899, C1427ECG CABA'),
(81, 'cual es la ubicacion de la escuela?', 'Teodoro García 3899, C1427ECG CABA'),
(82, 'cual es la ubicacion de la escuela?', 'Teodoro García 3899, C1427ECG CABA'),
(83, 'direccion', 'Teodoro García 3899, C1427ECG CABA'),
(84, 'ubicacion', 'Teodoro García 3899, C1427ECG CABA'),
(85, 'donde se ubica la escuela', 'Teodoro García 3899, C1427ECG CABA'),
(86, 'donde se ubica la escuela?', 'Teodoro García 3899, C1427ECG CABA'),
(87, 'donde se encuentra la escuela', 'Teodoro García 3899, C1427ECG CABA'),
(88, 'que contactos tiene la escuela?', 'Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion'),
(89, 'que contactos tiene la escuela', 'Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion'),
(90, 'contactos de la escuela', 'Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion'),
(91, 'cuales son los contactos de la esucela?', 'Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion'),
(92, 'cuales son los contactos de la escuela', 'Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion'),
(93, 'contactos', 'Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion'),
(94, 'esta bien', 'No hay de que, estoy a tu servicio si necesitas hacer otra pregunta'),
(95, 'ok', 'No hay de que, estoy a tu servicio si necesitas hacer otra pregunta'),
(96, 'gracias!', 'No hay de que, estoy a tu servicio si necesitas hacer otra pregunta'),
(97, 'gracias', 'No hay de que, estoy a tu servicio si necesitas hacer otra pregunta'),
(98, 'muchas gracias!', 'No hay de que, estoy a tu servicio si necesitas hacer otra pregunta'),
(99, 'muchas gracias', 'No hay de que, estoy a tu servicio si necesitas hacer otra pregunta'),
(100, 'materias', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(101, 'materias?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(102, 'cuales son las materias que hay en la escuela', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(103, 'cuales son las materias que hay en la escuela?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(104, 'que materias hay en la escuela?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(105, 'que materias hay en la escuela', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(106, 'que materias hay?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(107, 'que materias hay', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(108, 'que materias tienen la escuela?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(109, 'que materias tienen la escuela', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(110, 'que materias tienen?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(111, 'que materias tienen', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(112, 'cuales son las materias?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(113, 'cuales son las materias de la escuela?', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(114, 'cuales son las materias', 'Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/'),
(115, 'cuales son las especialidades de la escuela', 'Las Especialidades del colegio son, Tecnico en Computacion, Tecnico automotriz, Tecnico Mecanico'),
(116, 'cuales son las especialidades de la escuela?', 'Las Especialidades del colegio son, Tecnico en Computacion, Tecnico automotriz, Tecnico Mecanico'),
(117, 'cuales son los indices de abandono de las especialidades', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general.'),
(118, 'cuales son los indices de abandono de especialidades', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general'),
(119, 'cuales son los indices de abandono de las carreras', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general'),
(120, 'cuales son los indices de abandono de la escuela', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general'),
(121, 'cuales son los indices de abandono de las especialidades?', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general.'),
(122, 'cuales son los indices de abandono de especialidades?', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general'),
(123, 'cuales son los indices de abandono de las carreras?', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general'),
(124, 'cuales son los indices de abandono de la escuela?', 'Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general'),
(125, 'la escuela tecnica es dificil', 'En comparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible'),
(126, 'las escuela tecnicas son dificiles', 'En comparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible.'),
(127, 'la escuela tecnica es complicada', 'En comparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible.'),
(128, 'la escuela es dificil', 'En comparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible.'),
(129, 'cuales son los años mas dificiles', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(130, 'cuales son los años mas dificiles?', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(131, 'cual es el año mas dificil', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(132, 'cual es el año mas dificil?', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(133, 'cual es el año mas dificil de la escuela?', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(134, 'cual es el año mas dificil de la escuela', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(135, 'que años son dificiles en la escuela?', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(136, 'que año es dificil de la escuela?', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(137, 'que año es dificil de la escuela', 'Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil.Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.'),
(138, 'es posible ingresar a la escuela sin haber estudiado desde primer año', 'Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos'),
(139, 'es posible ingresar a la escuela sin haber estudiado desde primer año?', 'Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos'),
(140, 'se puede ingresar en años posteriores?', 'Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos'),
(141, 'se puede ingresar en años posteriores', 'Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos'),
(142, 'puedo anotarme a la escuela sin haber estado en primer año', 'Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos'),
(143, 'puedo anotarme a la escuela sin haber estado en primer año?', 'Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntasbien`
--
ALTER TABLE `preguntasbien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntasbien`
--
ALTER TABLE `preguntasbien`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
