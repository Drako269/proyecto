// Suponiendo que tienes el nombre de usuario almacenado en una variable de sesión
const username = "username"; // Reemplaza "TuNombre" con el valor real

// Mostrar el nombre de usuario en el HTML
const usernameElement = document.getElementById('username');
usernameElement.textContent = username;

// Función para redirigir a la encuesta
function irAEncuesta() {
    // Reemplaza 'encuesta.html' con la URL real de tu encuesta
    window.location.href = 'encuesta.html';
}