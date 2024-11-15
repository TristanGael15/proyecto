<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas sobre Ejércitos</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #d1d1d1;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Barra de navegación */
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 40px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.6);
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
            color: #6f9d56;
            transform: scale(1.1);
        }

        /* Animaciones */
        @keyframes slideInFromLeft {
            from { opacity: 0; transform: translateX(-100px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInFromRight {
            from { opacity: 0; transform: translateX(100px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* Encabezado */
        header {
            position: relative;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 80px 30px;
            margin-bottom: 40px;
            text-align: center;
            color: #eaeaea;
            background-image: url('imagenes/ejercito_fondo.jpg');
            background-position: center;
            background-size: cover;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            animation: fadeInHeader 1s ease-out;
        }

        /* Animación del encabezado */
        @keyframes fadeInHeader {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        header h1 {
            font-size: 4em;
            color: #88c740; /* Verde vibrante */
            margin: 0;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
        }

        header p {
            font-size: 1.3em;
            color: #d1d1d1;
            margin-top: 10px;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.7);
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
            font-style: italic;
        }

        /* Sección de temas */
        .topics-section {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        /* Tarjeta de tema */
        .topic-card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            border: 3px solid #004d26;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.7);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            background-color: rgba(0, 0, 0, 0.5);
            height: 300px;
        }

        .topic-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.9);
        }

        /* Imagen de fondo */
        .topic-card img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
            transition: filter 0.3s ease;
        }

        .topic-card:hover img {
            filter: brightness(0.7);
        }

        /* Contenido del tema */
        .topic-content {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 20px;
            color: #f0f0f0;
            width: 100%;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            animation: slideInFromLeft 0.5s ease-out;
        }

        .topic-content h2 {
            font-size: 1.8em;
            color: #a2d9b7;
            margin: 0;
            padding-bottom: 10px;
        }

        .topic-content p {
            font-size: 1em;
            color: #d1d1d1;
            line-height: 1.4;
        }

        /* Tarjeta alterna con animación desde la derecha */
        .topic-card:nth-child(even) .topic-content {
            animation: slideInFromRight 0.5s ease-out;
        }

        /* Modal (Ventana emergente) */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8); /* Fondo oscuro */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #222;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
            color: #fff;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #aaa;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
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

    <!-- Encabezado -->
    <header>
        <h1>Temas</h1>
        <p>Información y noticias de los ejércitos y fuerzas armadas a nivel global</p>
    </header>

    <!-- Sección de temas -->
    <section class="topics-section">
        <!-- Tarjeta de tema: Tecnología Militar -->
        <div class="topic-card" onclick="openModal('Tecnología Militar', 'La tecnología en los ejércitos avanza hacia drones autónomos, inteligencia artificial y sistemas de defensa cibernética para mejorar la seguridad y capacidad de respuesta.')">
            <img src="imagenes/tec militar.jpg" alt="Tecnología Militar">
            <div class="topic-content">
                <h2>Tecnología Militar</h2>
                <p>La tecnología en los ejércitos avanza hacia drones autónomos, inteligencia artificial y sistemas de defensa cibernética para mejorar la seguridad y capacidad de respuesta.</p>
            </div>
        </div>

        <!-- Tarjeta de tema: Operaciones Especiales -->
        <div class="topic-card" onclick="openModal('Operaciones Especiales', 'Las unidades de élite realizan misiones de alto riesgo con precisión y entrenamiento especializado, destacando en inteligencia y rescate.')">
            <img src="imagenes/opespeciales.jpg" alt="Operaciones Especiales">
            <div class="topic-content">
                <h2>Operaciones Especiales</h2>
                <p>Las unidades de élite realizan misiones de alto riesgo con precisión y entrenamiento especializado, destacando en inteligencia y rescate.</p>
            </div>
        </div>

        <!-- Tarjeta de tema: Defensa Aérea -->
        <div class="topic-card" onclick="openModal('Defensa Aérea', 'Los sistemas de defensa aérea evolucionan con misiles hipersónicos y radares avanzados para proteger el espacio aéreo y responder ante amenazas aéreas.')">
            <img src="imagenes/defensa aerea.jpg" alt="Defensa Aérea">
            <div class="topic-content">
                <h2>Defensa Aérea</h2>
                <p>Los sistemas de defensa aérea evolucionan con misiles hipersónicos y radares avanzados para proteger el espacio aéreo y responder ante amenazas aéreas.</p>
            </div>
        </div>

        <!-- Tarjeta de tema: Seguridad Cibernética -->
        <div class="topic-card" onclick="openModal('Seguridad Cibernética', 'La ciberseguridad se convierte en una prioridad para proteger infraestructuras militares de ataques informáticos y amenazas digitales.')">
            <img src="imagenes/seguridad.jpg" alt="Seguridad Cibernética">
            <div class="topic-content">
                <h2>Seguridad Cibernética</h2>
                <p>La ciberseguridad se convierte en una prioridad para proteger infraestructuras militares de ataques informáticos y amenazas digitales.</p>
            </div>
        </div>

        <!-- Tarjeta de tema: Estrategias Navales -->
        <div class="topic-card" onclick="openModal('Estrategias Navales', 'Las fuerzas navales buscan dominar mares estratégicos y proteger rutas marítimas con la última tecnología en embarcaciones y submarinos.')">
            <img src="imagenes/naval2.jpg" alt="Estrategias Navales">
            <div class="topic-content">
                <h2>Estrategias Navales</h2>
                <p>Las fuerzas navales buscan dominar mares estratégicos y proteger rutas marítimas con la última tecnología en embarcaciones y submarinos.</p>
            </div>
        </div>

        <!-- Tarjeta de tema: Entrenamiento Militar -->
        <div class="topic-card" onclick="openModal('Entrenamiento Militar', 'Los soldados se entrenan en condiciones extremas para fortalecer habilidades físicas y mentales, adaptándose a cualquier situación de combate.')">
            <img src="imagenes/entrenamiento.jpg" alt="Entrenamiento Militar">
            <div class="topic-content">
                <h2>Entrenamiento Militar</h2>
                <p>Los soldados se entrenan en condiciones extremas para fortalecer habilidades físicas y mentales, adaptándose a cualquier situación de combate.</p>
            </div>
        </div>
    </section>

    <!-- Modal (Ventana emergente) -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2023 Ejércitos del Mundo. Todos los derechos reservados.</p>
        <p><a href="privacidad.php">Política de Privacidad</a></p>
    </footer>

    <script>
        // Función para abrir el modal
        function openModal(title, description) {
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-description').textContent = description;
            document.getElementById('modal').style.display = "block";
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('modal').style.display = "none";
        }
    </script>

</body>
</html>
