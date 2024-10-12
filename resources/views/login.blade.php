<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" 
 required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" 
 required>

            <button type="submit" onclick="window.location.href='info'">Iniciar Sesión</button>
                <a href="informacion.html" ></a>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
