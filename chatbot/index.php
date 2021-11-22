<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/realstyle.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4 class="txt"> <img src='img/escuela.png' class='imgRedonda'/> Escuela Tecnica 32  D.E.14 </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola bienvenido!, este es un chat de la Escuela Tecnica 32, si buscas informacion o necesitas ayuda podes probar preguntando algo. <br> Si no sabes que preguntar, intenta con algunas de estas preguntas frecuentes: <br> Especialidades de la Escuela <br>Materias <br>Inscripcion <br>Contactos de la Escuela</p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>

            <input type=button class="creador" value="Diseñadores" onClick="mi_alerta()">
      
            <a href="principal.php" class="button">Inicio</a>



           </a>
        </div>
    </div>
    
    <script src="app.js"></script>
    
            <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("Este Chatbox fue diseñado por los alumnos: "+
               "\n"+
               "Bryan Freitas, Santiago Castillo, Pablo Gonzalez, Ana Valderrama");
        }
        </SCRIPT>


        
</body>

</html>