<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejércitos del Mundo</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            color: #d1d1d1;
            background-color: #111;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Barra de navegación */
        nav {
            background-color: #111;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6);
        }

        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .navbar a {
            color: #a2d9b7;
            text-decoration: none;
            font-size: 1.2em;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .navbar a:hover {
            background-color: #004d26;
            color: #fff;
            transform: scale(1.1);
        }

        .navbar a.active {
            background-color: #004d26;
            color: #fff;
        }

        /* Animaciones generales */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* Encabezado */
        header {
            background-color: #0c0c0c;
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #004d26;
            animation: fadeIn 2s ease-out;
            z-index: 2;
        }

        header h1 {
            font-size: 2.5em;
            color: #a2d9b7;
        }

        header p {
            color: #8a8a8a;
            font-size: 1.2em;
        }

        /* Contenedor principal */
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
            position: relative;
            z-index: 1;
            animation: fadeIn 3s ease-out;
        }

        .intro {
            text-align: center;
            margin-bottom: 40px;
            animation: slideIn 2s ease-out;
        }

        .intro h2 {
            color: #7fb89e;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .intro p {
            font-size: 1.2em;
            color: #d1d1d1;
        }

        /* Cuadros de información */
        .info-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
            animation: fadeIn 3s ease-out;
        }

        .info-card {
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            border: 3px solid #004d26;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.7);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            animation: slideIn 2s ease-out;
            cursor: pointer;
        }

        .info-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.9);
        }

        .info-card h3 {
            color: #a2d9b7;
            margin-bottom: 10px;
            font-size: 1.8em;
        }

        .info-card p {
            color: #d1d1d1;
            font-size: 1em;
            line-height: 1.6;
        }

        /* Galería de imágenes */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
            animation: fadeIn 3s ease-out;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            border: 3px solid #004d26;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.7);
            cursor: pointer;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.9);
        }

        /* Animación de repliegue */
        @keyframes shrinkBack {
            from { transform: scale(1.05); }
            to { transform: scale(1); }
        }

        /* Animación aplicada a la sección de mejores ejércitos */
        .army-card img {
            width: 120px;
            height: auto;
            margin-right: 20px;
            border-radius: 8px;
            border: 2px solid #004d26;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.7);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .army-card img:hover {
            transform: scale(1.05);
            animation: shrinkBack 0.4s forwards;
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.9);
        }

        /* Sección de mejores ejércitos */
        .top-armies-section {
            margin-top: 40px;
        }

        .army-card {
            display: flex;
            align-items: center;
            background-color: #1c1c1c;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 3px solid #004d26;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.7);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .army-card:hover {
            transform: scale(1.02);
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.9);
        }

        .army-card h3 {
            color: #a2d9b7;
            margin: 0;
            font-size: 1.6em;
        }

        .army-card p {
            color: #d1d1d1;
            margin-top: 8px;
            font-size: 1em;
            line-height: 1.4;
        }

        /* Pie de página */
        footer {
            background-color: #0c0c0c;
            padding: 20px;
            text-align: center;
            color: #8a8a8a;
            border-top: 3px solid #004d26;
            animation: fadeIn 4s ease-out;
        }

        footer p {
            animation: fadeIn 4s ease-out;
        }

        footer a {
            color: #50C878;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        footer a:hover {
            color: #a2d9b7;
            transform: scale(1.1);
        }

    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <nav>
        <div class="navbar">
        <a href="inicio.php">Inicio</a> 
        <a href="ejercitos.php">Ejercitos</a>
        <a href="temas.php">Temas</a>
        <a href="algomas.php">Algo mas</a>
        <a href="justificacion.php">Algo mas</a>
    </nav>

    

    <!-- Contenido principal -->
    <div class="container">
        <div class="intro">
            <h2>Conoce más</h2>
            <p>
                Los ejércitos del mundo están formados por fuerzas organizadas y preparadas para defender la seguridad y los intereses nacionales. A continuación, te presentamos
                una visión general de los diferentes tipos de ejércitos y de los mejores ejércitos del mundo.
            </p>
        </div>

        <!-- Galería de imágenes -->
        <div class="gallery">
            <img src="imagenes/tierra.jpg" alt="Ejército de Tierra">
            <img src="imagenes/aire.jpg" alt="Fuerza Aérea">
            <img src="imagenes/naval.jpg" alt="Fuerza Naval">
            <img src="imagenes/farmadas.jpg" alt="Fuerzas Especiales">
        </div>

        <!-- Cuadros de información sobre los tipos de ejércitos -->
        <div class="info-section">
            <div class="info-card">
                <h3>Ejército de Tierra</h3>
                <p>
                    Compuesto por tropas terrestres, este ejército es responsable de operaciones en tierra y defensa de fronteras. Sus unidades incluyen infantería, artillería, 
                    caballería y fuerzas especiales, desplegadas en diversas zonas estratégicas del país.
                </p>
            </div>
            <div class="info-card">
                <h3>Fuerza Aérea</h3>
                <p>
                    La fuerza aérea protege el espacio aéreo nacional y apoya operaciones terrestres y marítimas. Utiliza aviones de combate, helicópteros y drones, 
                    proporcionando defensa aérea, reconocimiento y apoyo logístico.
                </p>
            </div>
            <div class="info-card">
                <h3>Fuerza Naval</h3>
                <p>
                    La fuerza naval defiende las aguas territoriales y realiza operaciones marítimas. Con buques, submarinos y aeronaves navales, asegura la protección de rutas
                    marítimas, vigilancia y rescate en alta mar.
                </p>
            </div>
            <div class="info-card">
                <h3>Fuerzas Especiales</h3>
                <p>
                    Las fuerzas especiales realizan operaciones de alta precisión y riesgo, incluyendo rescates, inteligencia y lucha contra el terrorismo. Estas unidades son 
                    altamente entrenadas y operan en situaciones complejas.
                </p>
            </div>
        </div>

        <!-- Sección de los mejores ejércitos del mundo -->
        <div class="top-armies-section">
            <div class="army-card">
                <img src="imagenes/usa.jpg" alt="Ejército de Estados Unidos">
                <div>
                    <h3>Estados Unidos</h3>
                    <p>Con tecnología avanzada y poderío global, el ejército de EE.UU. tiene una fuerte presencia en todas las ramas y domina en innovación y estrategia militar.</p>
                </div>
            </div>
            <div class="army-card">
                <img src="imagenes/rusia.jpg" alt="Ejército de Rusia">
                <div>
                    <h3>Rusia</h3>
                    <p>Rusia mantiene una fuerte presencia militar y es conocida por sus sistemas de defensa aérea y armas nucleares, con un enfoque en misiles y fuerzas terrestres.</p>
                </div>
            </div>
            <div class="army-card">
                <img src="imagenes/Durabol Bandera República Popular China 150 x 90 cm Satén.jpg" alt="Ejército de China">
                <div>
                    <h3>China</h3>
                    <p>El ejército de China, con un personal numeroso, avanza en tecnología militar, drones y capacidad marítima, consolidando su influencia global en Asia.</p>
                </div>
            </div>
            <div class="army-card">
                <img src="imagenes/india.jpg" alt="Ejército de India">
                <div>
                    <h3>India</h3>
                    <p>India es el séptimo ejército más poderoso del mundo y el segundo más numeroso con 1,4 millones de soldados, Se estima que tiene alrededor de 1,1 millones de reservistas.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2023 Ejércitos del Mundo. Todos los derechos reservados.</p>
        <p><a href="privacidad.php">Política de Privacidad</a></p>
    </footer>

</body>
</html>
