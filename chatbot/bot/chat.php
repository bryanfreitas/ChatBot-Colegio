<?php
include "Bot.php";
$bot = new Bot;
$questions = [ 
    //Saludo
    "hola" => "Hola buenas, mi nombre es " . $bot->getName() . " y estoy aca para ayudarte con lo que necesites en informacion sobre la escuela :)",
    "Hola" => "Hola buenas, mi nombre es " . $bot->getName() . " y estoy aca para ayudarte con lo que necesites en informacion sobre la escuela :)",
    "buenas" => "Hola buenas, mi nombre es " . $bot->getName() . " y estoy aca para ayudarte con lo que necesites en informacion sobre la escuela :)",
    "Buenas" => "Hola buenas, mi nombre es " . $bot->getName() . " y estoy aca para ayudarte con lo que necesites en informacion sobre la escuela :)",
    "que tal?" => "Hola buenas me encuentro muy bien, mi nombre es " . $bot->getName() . " y estoy aca para ayudarte con lo que necesites en informacion sobre la escuela :)",
    "Que tal?" => "Hola buenas me encuentr o muy bien, mi nombre es " . $bot->getName() . " y estoy aca para ayudarte con lo que necesites en informacion sobre la escuela :)",


    
    //Preguntas frecuentes
    "preguntas frecuentes" => "Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela",
    "cuales son las preguntas frecuentes?" => "Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela",
    "preguntas frecuentes?" => "Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela",
    "cuales son las preguntas que la gente mas hace" => "Son la siguientes: Especialidades de la Escuela, Materias, Inscripcion, Contactos de la Escuela",
    
    "especialidades de la escuela" => "Las Especialidades del colegio son, Tecnico en Computacion, Tecnico automotriz, Tecnico Mecanico ",
    "Especialidades de la escuela" => "Las Especialidades del colegio son, Tecnico en Computacion, Tecnico automotriz, Tecnico Mecanico",
    "Cuales son las especialidades de la escuela" => "Las Especialidades del colegio son, Tecnico en Computacion, Tecnico automotriz, Tecnico Mecanico",
    "Cuales son las especialidades de la escuela?" => "Las Especialidades del colegio son, Tecnico en Computacion, Tecnico automotriz, Tecnico Mecanico",
    
    "Materia" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "Materias" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "materia" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "materias" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "cuales son las materias de la escuela" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "Cuales son las materias de la escuela?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "cuales son las materias" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "Cuales son las materias" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "Cuales son las materias?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "cuales son las materias?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "que materias tienen" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "que materias tienen?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "que materias tiene la escuela" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "que materias tiene la escuela?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "que materias hay" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "que materias hay en la escuela?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "que materias hay en la escuela" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "cuales son las materias que hay en la escuela" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "cuales son las materias que hay en la escuela?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",
    "materias?" => "Para saber las materias de cada especialidad de la escuela, ingrese a la pagina web de la escuela: https://www.escuelatecnica32de14.edu.ar/",

    //despedida
    "muchas gracias" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "muchas gracias!" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "MUCHAS GRACIAS" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "MUCHAS GRACIAS!" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "Muchas gracias" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "Muchas gracias!" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "gracias" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "gracias!" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "Gracias" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "Gracias!" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "ok" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "Ok" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "esta bien" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",
    "Esta bien" => "No hay de que, estoy a tu servicio si necesitas hacer otra pregunta",

         //CONTACTOS DE LA ESCUELA
         "contactos" => "Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion",
         "contactos de la escuela" => "Los contactos de la escuela son los siguientes: Email, Telefono, Pagina de la escuela, Facebook y ubicacion",
         "Cuales son los contactos de la escuela?" => "Los contactos de la escuela son: Pagina web, Instagram, Facebook, Numero de la Escuela, Email y Direccion de la Escuela",
         "cuales son los contactos de la escuela?" => "Los contactos de la escuela son: Pagina web, Instagram, Facebook, Numero de la Escuela, Email y Direccion de la Escuela",
         "CUALES SON LOS CONTACTOS DE LA ESCUELA" => "Los contactos de la escuela son: Pagina web, Instagram, Facebook, Numero de la Escuela, Email y Direccion de la Escuela",
         "CUALES SON LOS CONTACTOS DE LA ESCUELA?" => "Los contactos de la escuela son: Pagina web, Instagram, Facebook, Numero de la Escuela, Email y Direccion de la Escuela",
         "que contactos tiene la escuela?" => "Los contactos de la escuela son: Pagina web, Instagram, Facebook, Numero de la Escuela, Email y Direccion de la Escuela",
         "Que contactos tiene la escuela?" => "Los contactos de la escuela son: Pagina web, Instagram, Facebook, Numero de la Escuela, Email y Direccion de la Escuela",
         "pagina web de la escuela" => "https://escuelatecnica32de14.edu.ar/",
         "pagina de la escuela" => "https://escuelatecnica32de14.edu.ar/",
         "Pagina web de la escuela" => "https://escuelatecnica32de14.edu.ar/",
         "pagina web de la escuela?" => "https://escuelatecnica32de14.edu.ar/",
         "Pagina web de la escuela?" => "https://escuelatecnica32de14.edu.ar/",
         "PAGINA WEB DE LA ESCUELA" => "https://escuelatecnica32de14.edu.ar/",
         "PAGINA WEB DE LA ESCUELA?" => "https://escuelatecnica32de14.edu.ar/",
         "pagina web" => "https://escuelatecnica32de14.edu.ar/",
         "pagina web?" => "https://escuelatecnica32de14.edu.ar/",
         "PAGINA WEB" => "https://escuelatecnica32de14.edu.ar/",
         "Pagina web" => "https://escuelatecnica32de14.edu.ar/",
         "instagram de la escuela" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "instagram" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "INSTAGRAM" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "Instagram" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "Instagram de la Escuela" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "cual es el instagram de la escuela" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "cual es el instagram de la escuela?" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "Cual es el instagram de la escuela" => "https://www.instagram.com/la_gloriosa_32_escuela_tecnica/",
         "Facebook" => "https://www.facebook.com/groups/tecnica32",
         "FACEBOOK" => "https://www.facebook.com/groups/tecnica32",
         "facebook" => "https://www.facebook.com/groups/tecnica32",
         "facebook de la escuela" => "https://www.facebook.com/groups/tecnica32",
         "Email de la escuela" => "ofdealumnos32@gmail.com",
         "email de la escuela" => "ofdealumnos32@gmail.com",
         "Email de la Escuela" => "ofdealumnos32@gmail.com",
         "email" => "ofdealumnos32@gmail.com",
         "Email" => "ofdealumnos32@gmail.com",
         "Numero de telefono de la escuela" => "4551-9121 4555-4026/4034",
         "numero de telefono de la escuela" => "4551-9121 4555-4026/4034",
         "NUMERO DE TELEFONO DE LA ESCUELA" => "4551-9121 4555-4026/4034",
         "telefono de la escuela" => "4551-9121 4555-4026/4034",
         "Telefono de la escuela" => "4551-9121 4555-4026/4034",
         "Telefono" => "4551-9121 4555-4026/4034",
         "telefono" => "4551-9121 4555-4026/4034",
         "tel" => "4551-9121 4555-4026/4034",
         "Tel" => "4551-9121 4555-4026/4034",
         "tel." => "4551-9121 4555-4026/4034",
         "Tel." => "4551-9121 4555-4026/4034",
         "Direccion de la Escuela" => "Teodoro García 3899, C1427ECG CABA",
         "ubicacion" => "Teodoro García 3899, C1427ECG CABA",
         "ubicacion de la escuela" => "Teodoro García 3899, C1427ECG CABA",
         "Cual es la direccion de la escuela" => "Teodoro García 3899, C1427ECG CABA",
         "Direccion" => "Teodoro García 3899, C1427ECG CABA",
         "direccion de la escuela" => "Teodoro García 3899, C1427ECG CABA",
         "direccion" => "Teodoro García 3899, C1427ECG CABA",
         "done se ubica la escuela" => "Teodoro García 3899, C1427ECG CABA",
         
     //especialidades
     "que especialidades hay" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "que especialidades hay?" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "Que especialidades hay" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "Que especialidades hay?" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "QUE ESPECIALIDADES HAY" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "Especialidades" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "especialidades" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "Especialidades?" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
         "especialidades?" => "Nuestras especialidades son: 
     Técnico en automotores
     Técnico en computación
     Técnico mecánico",
     
     
     //inscripciones
     "inscripciones" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     "inscripcion" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     "inscripciones 2021" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     "hola" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     "Inscripciones" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     "Inscripciones 2021" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     "INSCRIPCIONES" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     "INSCRIPCIONES 2021" => "Para iniciar la preinscripción enviar un correo electrónico a ofdealumnos32@gmail.com incluyendo datos personales del estudiante",
     
     //contacto
     "contacto" => "Contacto
     Email: ofdealumnos32@gmail.com
     Teléfonos: 4551-9121 4555-4026/4034
     Dirección: Teodoro García 3899, C1427ECG CABA",
         "Contacto" => "Contacto
     Email: ofdealumnos32@gmail.com
     Teléfonos: 4551-9121 4555-4026/4034
     Dirección: Teodoro García 3899, C1427ECG CABA",
         "CONTACTO" => "Contacto
     Email: ofdealumnos32@gmail.com
     Teléfonos: 4551-9121 4555-4026/4034
     Dirección: Teodoro García 3899, C1427ECG CABA",
         "contacto?" => "Contacto
     Email: ofdealumnos32@gmail.com
     Teléfonos: 4551-9121 4555-4026/4034
     Dirección: Teodoro García 3899, C1427ECG CABA",
         "Contacto?" => "Contacto
     Email: ofdealumnos32@gmail.com
     Teléfonos: 4551-9121 4555-4026/4034
     Dirección: Teodoro García 3899, C1427ECG CABA",
         "CONTACTO?" => "Contacto
     Email: ofdealumnos32@gmail.com
     Teléfonos: 4551-9121 4555-4026/4034
     Dirección: Teodoro García 3899, C1427ECG CABA",
     
     //becas
     "becas" => "Actualmente están las becas alimentarias y refrigerio",
     "beca alimentaria" => "Los alumnos que desean inscribirse a la beca alimentaria en el ciclo lectivo 2021 encontraran la información en el sector de novedades. Las familias que se inscribieron a becas alimentarias en el 2020, se retiran cada 15 días los días lunes 9:00 a 11:00 y de 14:00 a 16:00.",
     "beca refrigerio" => "Aquellos que deseen solicitar la beca de refrigerio deberán completar el siguiente formulario y entregarlo al preceptor. https://escuelatecnica32de14.edu.ar/assets/docs/beca_refrigerio.pdf",
     "Becas" => "Actualmente están las becas alimentarias y refrigerio",
     "Beca alimentaria" => "Los alumnos que desean inscribirse a la beca alimentaria en el ciclo lectivo 2021 encontraran la información en el sector de novedades. Las familias que se inscribieron a becas alimentarias en el 2020, se retiran cada 15 días los días lunes 9:00 a 11:00 y de 14:00 a 16:00.",
     "Beca refrigerio" => "Aquellos que deseen solicitar la beca de refrigerio deberán completar el siguiente formulario y entregarlo al preceptor. https://escuelatecnica32de14.edu.ar/assets/docs/beca_refrigerio.pdf",
     "BECAS" => "Actualmente están las becas alimentarias y refrigerio",
     "BECA ALIMENTARIA" => "Los alumnos que desean inscribirse a la beca alimentaria en el ciclo lectivo 2021 encontraran la información en el sector de novedades. Las familias que se inscribieron a becas alimentarias en el 2020, se retiran cada 15 días los días lunes 9:00 a 11:00 y de 14:00 a 16:00.",
     "BECA REFRIGERIO" => "Aquellos que deseen solicitar la beca de refrigerio deberán completar el siguiente formulario y entregarlo al preceptor. https://escuelatecnica32de14.edu.ar/assets/docs/beca_refrigerio.pdf",
         
         //saludo
         "hola" => "Hola!. Soy el BOT de la ET32",
         "buenas" => "Hola!. Soy el BOT de la ET32",
         "Hola" => "Hola!. Soy el BOT de la ET32",
         "Buenas" => "Hola!. Soy el BOT de la ET32",
         "HOLA" => "Hola!. Soy el BOT de la ET32",
         "BUENAS" => "Hola!. Soy el BOT de la ET32",
         "que tal" => "Hola!. Soy el BOT de la ET32",
         "Que tal" => "Hola!. Soy el BOT de la ET32",
         "que tal?" => "Hola!. Soy el BOT de la ET32",
         "Que tal?" => "Hola!. Soy el BOT de la ET32",
         "QUE TAL" => "Hola!. Soy el BOT de la ET32",
         "QUE TAL?" => "Hola!. Soy el BOT de la ET32",    
         "la concha de tu madre" => "la tuya por que es mas canchera ", 
         
         //despedida
         "chau" => "Hasta luego que tengas un buen dia!",
         "Chau" => "Hasta luego que tengas un buen dia!",
         "adios" => "Hasta luego que tengas un buen dia!",
         "Adios" => "Hasta luego que tengas un buen dia!",


          //preguntas taller
          "requerimientos para taller" => "Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.",
          "Requerimientos para taller" => "Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.",
          "requerimientos para las especialidades" => "Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.",
          "requerimientos taller" => "Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.",
          "requerimientos especialidades" => "Los requerimientos sin importar la especialidad, de 1er año hasta 3er año se debera de llevar un guardapolvo azul oscuro, y cada año se debera de abonar la cooperadora para poder tener los materiales para la clase.",

          //preguntas rebuscadas
          "cuales son los indices de abandono de las especialidades" => "Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general.",
          "cuales son los indices de abandono de especialidades" => "Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general.",
          "cuales son los indices de abandono de las carreras" => "Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general.",
          "cuales son los indices de abandono de la escuela" => "Por lo general en todas las especialidades cada año se van filtrando los alumnos, en el sentido de que el que quiera estudiar y le guste va a seguir estando en la especialidad, en cambio la gente que decida no hacer nada suelen abandonar entre los primeros Tres Años. Un ejemplo: Un curso de 1er año son 30 alumnos, en segundo solo pasan 25, en 3er año 20 y en 4to y 5to año que son los años de la carrera, son los años que menos alumnos hay ya que algunos lo dejan a la mitad por lo general.",
          "la escuela tecnica es dificil" => "En conparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible.",
          "las escuela tecnicas es dificil" => "En conparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible.",
          "la escuela tecnica es complicada" => "En conparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible.",
          "la escuela es dificil" => "En conparacion a las secundarias tipo bachiller, tiene un nivel mas avanzado con las materias. Pero no por eso es imposible completar una escuela tecnica. Si el alumno es responsable y le pone pilas todo es posible.",
          "cuales son los años mas dificiles" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "cual es el año mas dificil" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "que años son dificiles" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "que año es dificil" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "cuales son los años mas dificiles en la escuela" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "cual es el año mas dificil en la escuela" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "que años son dificiles en la escuela" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "que año es dificil en la escuela" => "Por promedio de los estudiantes los años mas dificiles suelen ser: 1er año ya que es el primer año de la secundaria y siempre algo nuevo es dificil. Despues 3er año suele ser tambien uno de los años mas dificiles por que es el ultimo año de rotacion de especialidades, y suele ser el año mas cargado con materias.",
          "es posible ingresar a la escuela sin haber estudiado desde primer año" => "Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos",
          "se puede ingresar años posteriores" => "Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos",
          "puedo anotarme a la escuela sin haber estado en primer año" => "Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos",
          "es posible ingresar a la escuela sin haber estudiado desde primer año?" => "Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos",
          "se puede ingresar años posteriores?" => "Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos",
          "puedo anotarme a la escuela sin haber estado en primer año?" => "Si es posible, pero los alumnos que ingresen años posteriores deberan de hacer una nivelacion para estar al dia en comparacion a los demas alumnos",


    
    



    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "como es tu nombre?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento no se como responder a tu pregunta, por favor pregunta algo que este relacionadas con la escuela.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
