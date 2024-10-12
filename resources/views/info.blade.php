<!DOCTYPE html>
<html>
<head>
    <title>Mi Página Principal</title>
    <link rel="stylesheet" href="/css/estilo_informacion.css">
</head>
<body>
    <header>
        <h1>Bienvenido <span id="username"></span></h1>
    </header>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><button onclick="window.location.href='login'">Cerrar sesion</button></li>
                </ul>
        </nav>
        <div class="contenedor">
            <main>
                <p>¡Hola! Queremos conocer más sobre cómo usas el internet en tu hogar. Tu participación nos 
                    ayudará a entender mejor las tendencias y necesidades actuales en el uso del internet doméstico. 
                    Esta encuesta es anónima y solo te tomará unos minutos completar. ¡Gracias por tu tiempo y colaboración!</p>
            </main>
        </div>
    </div>
    <footer>
        <button onclick="window.location.href='encuesta'">Ir a la Encuesta</button>
    </footer>
    <script src="/js/coneccion.js"></script>
</body>
</html>