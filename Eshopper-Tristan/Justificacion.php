<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Tema de los Ejércitos</title>
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

        /* Sección de Justificación */
        section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;
            background-color: #2a2a2a;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
        }

        section h2 {
            color: #32CD32;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        section p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-align: justify;
            line-height: 1.8;
        }

        section p:last-child {
            margin-bottom: 0;
        }

        /* Pie de página */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #1a1a1a;
            color: #bbb;
            margin-top: 50px;
        }

        footer p {
            font-size: 1rem;
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

        .topic-card:nth-child(even) .topic-content {
            animation: slideInFromRight 0.5s ease-out;
        }
    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar">
        <ul>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="ejercitos.php">Ejércitos</a></li>
            <li><a href="temas.php">Temas</a></li>
            <li><a href="algomas.php">Algo Más</a></li>
            <li><a href="justificacion.php">Justificación</a></li>
        </ul>
    </nav>

    <!-- Encabezado -->
    <header>
        <h1>El Tema de los Ejércitos</h1>
        <p>Un análisis profundo sobre los ejércitos a lo largo de la historia</p>
    </header>

    <!-- Sección de Justificación -->
    <section id="justificacion">
        <h2>¿Por qué elegí el tema de los Ejércitos?</h2>
        <p>
            La elección del tema de los ejércitos para esta página web no es una decisión trivial. Los ejércitos han sido una de las instituciones más fundamentales a lo largo de la historia humana. A través de las guerras, los conflictos y las confrontaciones, los ejércitos han modelado el destino de naciones, impulsado avances tecnológicos, y también ocasionado enormes tragedias.
        </p>
        <p>
            A lo largo de los siglos, las fuerzas armadas han evolucionado de ser una agrupación rudimentaria de soldados a convertirse en organizaciones altamente sofisticadas, equipadas con tecnología de punta. Este tema es de interés tanto por su relevancia histórica como por su impacto en la geopolítica moderna. Los ejércitos no solo han servido como defensa nacional, sino que también han sido agentes de poder, influencia, y control social. Es por esto que elegí este tema, porque examinar los ejércitos nos permite comprender mejor las dinámicas de poder, el impacto de las decisiones militares en la vida civil y las transformaciones políticas y sociales que han sucedido a lo largo del tiempo.
        </p>
        <p>
            En la era contemporánea, las fuerzas armadas de los países más poderosos siguen teniendo una influencia significativa en los eventos globales. Analizar sus estructuras, estrategias y los hombres y mujeres que las componen, nos brinda una perspectiva única sobre cómo las naciones se defienden, proyectan poder, y enfrentan amenazas internas y externas. Además, las cuestiones relacionadas con la ética, los derechos humanos y el uso de la fuerza siguen siendo debates fundamentales que no pueden ser ignorados.
        </p>
        <p>
            Elegí este tema porque considero que conocer la historia, los valores y las prácticas de los ejércitos no solo es crucial para entender el pasado, sino también para anticipar el futuro. Vivimos en un mundo interconectado, donde los conflictos armados pueden tener repercusiones globales, y entender cómo los ejércitos actúan, se preparan y responden ante situaciones de crisis es una herramienta invaluable para la reflexión y el análisis.
        </p>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 El Tema de los Ejércitos</p>
    </footer>

</body>
</html>
