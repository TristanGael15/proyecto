<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejércitos del Mundo</title>
    <style>
        /* Estilos generales */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: #e0e0e0;
            background-color: #121212; /* Fondo oscuro */
            background-image: url('opespeciales.jpg'); /* Imagen de fondo */
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
        }

        /* Animaciones de entrada */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes zoomIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        /* Barra de navegación */
        .navbar {
            background-color: rgba(20, 20, 20, 0.9);
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 40px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
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
            color: #6f9d56; /* Color verde militar */
            transform: scale(1.1);
        }

        /* Contenedor de bienvenida */
        .welcome-container {
            text-align: center;
            padding: 80px 20px;
            background-color: rgba(10, 10, 10, 0.7);
            margin: 80px auto;
            width: 75%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.6);
            animation: zoomIn 2s ease-out;
        }

        .welcome-container h1 {
            color: #7bbf7b; /* Verde oliva suave */
            font-size: 3.5em;
            margin-bottom: 20px;
            letter-spacing: 1px;
            animation: fadeIn 1.5s ease-out;
        }

        .welcome-container p {
            font-size: 1.3em;
            color: #b2c3b0;
            max-width: 600px;
            margin: auto;
            line-height: 1.6;
            animation: fadeIn 1.8s ease-out;
        }

        /* Botón de llamada a la acción */
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            font-size: 1.1em;
            color: #0f1e13;
            background-color: #6f9d56;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0px 4px 12px rgba(50, 205, 50, 0.3);
            animation: fadeIn 2s ease-out;
        }

        .cta-button:hover {
            background-color: #4b7e43;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0px 6px 16px rgba(50, 205, 50, 0.4);
        }

        /* Sección de imágenes */
        .image-gallery {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
            animation: fadeIn 2s ease-out;
        }

        .image-gallery img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.6);
            transition: transform 0.3s;
        }

        .image-gallery img:hover {
            transform: scale(1.05);
        }

        /* Sección de características */
        .features {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
            animation: fadeIn 2s ease-out;
        }

        .feature-item {
            background-color: rgba(20, 20, 20, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 250px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 25px rgba(0, 0, 0, 0.7);
        }

        .feature-item img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .feature-item h3 {
            color: #50C878; /* Verde claro */
            margin-bottom: 10px;
        }

        .feature-item p {
            color: #d1e7dd;
            font-size: 1.1em;
        }

        /* Footer */
        footer {
            background-color: rgba(10, 10, 10, 0.9);
            text-align: center;
            padding: 20px;
            color: #a4a4a4;
            font-size: 14px;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0px -4px 8px rgba(0, 0, 0, 0.3);
            animation: fadeIn 2.2s ease-out;
        }

        footer a {
            color: #6f9d56; /* Verde militar */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        footer a:hover {
            color: #a2d0b6;
            transform: scale(1.1);
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

    <!-- Sección de Parallax -->
    <div class="parallax"></div>

    <!-- Contenedor de bienvenida -->
    <div class="welcome-container">
        <h1>Fuerzas Armadas</h1>
        <p>Explora la historia, las tácticas y los avances tecnológicos que han definido a los ejércitos más poderosos del planeta. Desde las antiguas civilizaciones hasta las fuerzas armadas contemporáneas, aquí encontrarás información detallada sobre las estructuras, estrategias y el impacto global de los ejércitos en la historia.</p>
        <a href="ejercitos.php" class="cta-button">Explorar Ejércitos</a>
    </div>

    

    <!-- Sección de características -->
    <div class="features">
        <div class="feature-item">
            
            <h3>Estrategias Militares</h3>
            <p>Estudia las principales estrategias y tácticas que han sido utilizadas en los campos de batalla a lo largo de la historia.</p>
        </div>
        <div class="feature-item">
           
            <h3>Avances Tecnológicos</h3>
            <p>Conoce los avances tecnológicos que han revolucionado la guerra moderna, desde drones hasta ciberseguridad.</p>
        </div>
        <div class="feature-item">
         
            <h3>Fuerzas Especiales</h3>
            <p>Descubre las unidades de élite que realizan misiones de alto riesgo y operan en las condiciones más extremas.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Ejércitos del Mundo. Todos los derechos reservados. | <a href="privacidad.php">Política de Privacidad</a></p>
    </footer>

</body>
</html>
