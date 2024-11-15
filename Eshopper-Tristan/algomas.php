<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretos del Ejército</title>
    <style>
        /* Estilos generales */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
            background-color: #121212;
            color: #e0e0e0;
            height: 100vh;
        }

        /* Barra de navegación */
        .navbar {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 20px;
            display: flex;
            justify-content: center;
            gap: 40px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.7);
            animation: slideIn 1s ease-out;
        }

        .navbar a {
            color: #a4a4a4;
            text-decoration: none;
            font-size: 18px;
            padding: 12px 20px;
            transition: color 0.3s, transform 0.3s;
            border-radius: 5px;
        }

        .navbar a:hover {
            color: #88c740;
            transform: scale(1.1);
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* Contenedor central */
        .content-box {
            max-width: 1000px;
            margin: 80px auto;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.9);
            color: #eaeaea;
            text-align: center;
            backdrop-filter: blur(12px);
            animation: zoomIn 1.5s ease-out;
        }

        @keyframes zoomIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        /* Encabezado */
        .content-box h1 {
            font-size: 2.8em;
            color: #88c740;
            margin-bottom: 20px;
        }

        .content-box p {
            font-size: 1.2em;
            color: #cfcfcf;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Botones de sección */
        .topic-button {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            background-color: #1d1d1d;
            color: #eaeaea;
            font-size: 1.3em;
            font-weight: bold;
            border: none;
            cursor: pointer;
            text-align: left;
            transition: background-color 0.3s, transform 0.3s;
            border-radius: 8px;
        }

        .topic-button:hover {
            background-color: #88c740;
            transform: scale(1.02);
        }

        /* Contenedor de información desplegable */
        .info-content {
            display: none;
            text-align: left;
            font-size: 1.1em;
            color: #d1d1d1;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 8px;
            margin-top: 10px;
            line-height: 1.5;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Botón de cierre */
        .close-btn {
            display: inline-block;
            margin-top: 10px;
            color: #88c740;
            font-size: 0.9em;
            cursor: pointer;
            text-decoration: underline;
            transition: color 0.3s;
        }

        .close-btn:hover {
            color: #a4d03b;
        }

        /* Galería de imágenes */
        .image-gallery {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            margin: 40px 0;
            animation: fadeIn 2s ease-out;
        }

        .image-gallery img {
            width: 100%;
            max-width: 350px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.6);
            transition: transform 0.3s ease-in-out;
        }

        .image-gallery img:hover {
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            background-color: rgba(0, 0, 0, 0.9);
            text-align: center;
            padding: 20px;
            color: #a4a4a4;
            font-size: 14px;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0px -4px 8px rgba(0, 0, 0, 0.3);
        }

        footer a {
            color: #88c740;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        footer a:hover {
            color: #a4d03b;
            transform: scale(1.1);
        }

    </style>
    <script>
        // JavaScript para mostrar y ocultar la información
        function toggleInfo(id) {
            const infoContent = document.getElementById(id);
            if (infoContent.style.display === 'none' || infoContent.style.display === '') {
                infoContent.style.display = 'block';
            } else {
                infoContent.style.display = 'none';
            }
        }
    </script>
</head>
<body>

    <!-- Barra de navegación -->
    <div class="navbar">
        <a href="inicio.php">Inicio</a> 
        <a href="ejercitos.php">Ejercitos</a>
        <a href="temas.php">Temas</a>
        <a href="algomas.php">Algo mas</a>
        <a href="justificacion.php">Justificacion</a>
     
    </div>

    <!-- Contenedor central -->
    <div class="content-box">
        <h1>Secretos del Ejército</h1>
        <p>Explora datos y curiosidades poco conocidos sobre el mundo de los ejércitos y fuerzas armadas.</p>
        
        <!-- Botones para cada tema -->
        <button class="topic-button" onclick="toggleInfo('info1')">1. Tecnología en el Campo de Batalla</button>
        <div id="info1" class="info-content">
            <p>La tecnología moderna permite a los ejércitos usar sistemas de realidad aumentada, lo cual ayuda a mejorar la precisión en el combate y facilita el entrenamiento de soldados en situaciones controladas.</p>
            <p>También se desarrollan exoesqueletos para aumentar la fuerza y resistencia de los soldados en operaciones largas y exigentes. Además, se incorporan tecnologías como la visión nocturna avanzada y drones para misiones de reconocimiento.
            El futuro de la tecnología militar.

            La tecnología militar está en constante evolución. Con la llegada de tecnologías emergentes como la inteligencia artificial, los sistemas autónomos, y la realidad aumentada, es probable que los ejércitos del futuro sean muy diferentes de los actuales. Los avances en la tecnología cuántica también podrían cambiar la forma en que se llevan a cabo las comunicaciones y la criptografía militar, aumentando la velocidad y seguridad de las operaciones.

            demás, las tecnologías como los drones autónomos, los vehículos de combate no tripulados y las armas láser prometen transformar los campos de batalla, reduciendo las bajas humanas y ofreciendo nuevas capacidades estratégicas.

            El desarrollo de la guerra cibernética también será crucial, ya que los enemigos no solo se enfrentarán en campos de batalla tradicionales, sino que las redes digitales y las infraestructuras críticas serán un objetivo clave.</p>
            <span class="close-btn" onclick="toggleInfo('info1')">Cerrar</span>
        </div>

        <button class="topic-button" onclick="toggleInfo('info2')">2. Unidades de Inteligencia Militar</button>
        <div id="info2" class="info-content">
            <p>Las unidades de inteligencia son responsables de recopilar y analizar información crítica. Operan en secreto y utilizan herramientas avanzadas de vigilancia para asegurar el conocimiento de las amenazas.</p>
            <p>En muchos casos, las fuerzas de inteligencia pueden incluso llevar a cabo operaciones encubiertas para neutralizar amenazas antes de que lleguen al país. Esto incluye el uso de comunicaciones cifradas y dispositivos de espionaje.</p>
            <span class="close-btn" onclick="toggleInfo('info2')">Cerrar</span>
        </div>

        <button class="topic-button" onclick="toggleInfo('info3')">3. Avances en Robótica y Automatización</button>
        <div id="info3" class="info-content">
            <p>Los ejércitos están invirtiendo en robots para tareas peligrosas, como desactivación de explosivos, rescates en zonas de guerra y exploración de terrenos hostiles sin exponer vidas humanas.</p>
            <p>Estos robots están equipados con sensores y cámaras de alta precisión que permiten la observación detallada y en tiempo real. También se están desarrollando vehículos autónomos para misiones de patrullaje.</p>
            <span class="close-btn" onclick="toggleInfo('info3')">Cerrar</span>
        </div>

        <button class="topic-button" onclick="toggleInfo('info4')">4. Entrenamiento en Supervivencia Extrema</button>
        <div id="info4" class="info-content">
            <p>Los soldados reciben entrenamiento en técnicas de supervivencia para sobrevivir en condiciones extremas, como climas árticos o desérticos, y también en técnicas de evasión y escape.</p>
            <p>Este entrenamiento incluye cómo encontrar y purificar agua, cazar y prepararse para situaciones de aislamiento total. Además, aprenden a utilizar herramientas improvisadas y adaptarse a cualquier entorno hostil.</p>
            <span class="close-btn" onclick="toggleInfo('info4')">Cerrar</span>
        </div>

        <button class="topic-button" onclick="toggleInfo('info5')">5. Psicología y Resiliencia</button>
        <div id="info5" class="info-content">
            <p>Los ejércitos ofrecen programas de entrenamiento psicológico para aumentar la resiliencia de sus soldados, ayudándolos a gestionar el estrés y las experiencias traumáticas del combate.</p>
            <p>Se enseña a los soldados a mantener la calma bajo presión y a trabajar en equipo para sobrellevar las dificultades mentales y emocionales. También se promueven actividades de descompresión para reducir los efectos del estrés postraumático.</p>
            <span class="close-btn" onclick="toggleInfo('info5')">Cerrar</span>
        </div>
    </div>

    <!-- Galería de imágenes -->
    <div class="image-gallery">
        <img src="imagenes/robotica.jpg" alt="Avances en Robótica">
        <img src="imagenes/inteligencia.jpg" alt="Unidades de Inteligencia Militar">
        <img src="imagenes/supervivencia.jpg" alt="Entrenamiento en Supervivencia">
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Secretos del Ejército. Todos los derechos reservados. | <a href="privacidad.php">Política de Privacidad</a></p>
    </footer>

</body>
</html>

