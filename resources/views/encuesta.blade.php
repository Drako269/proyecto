<!DOCTYPE html>
<html>
<head>
    <title>Encuesta</title>
    <link rel="stylesheet" href="/css/estilo_encu.css">
</head>
<body>
    <div class="container">
    <h1>Encuesta sobre uso de la APP</h1>
    <form>
        <h2>Preguntas para conocimiento general</h2>
        <p>
             ¿Utilizas algún tipo de control parental en los dispositivos de tus hijos?
            <br>
            <input type="radio" name="DudaG" value="Si"> Si
            <br>
            <input type="radio" name="DudaG" value="No"> No
            <br>
            <input type="radio" name="DudaG" value="No lo se"> No lo se
        </p>
        <p>
            ¿En una escala del 1 al 5 (1 siendo nada y 5 siendo mucho), ¿qué tan importante crees que es que los padres se involucren en las actividades en línea de sus hijos?
           <br>
           <input type="radio" name="DudaG2" value="1"> 1
           <br>
           <input type="radio" name="DudaG2" value="2"> 2
           <br>
           <input type="radio" name="DudaG2" value="3"> 3
           <br>
           <input type="radio" name="DudaG2" value="4"> 4
           <br>
           <input type="radio" name="DudaG2" value="5"> 5
       </p>
       <p>
            ¿Crees que el control parental ha tenido o pueda tener un impacto positivo en la familia moderna?
            <br>
            <input type="radio" name="DudaG3" value="Si"> Si
            <br>
            <input type="radio" name="DudaG3" value="No"> no
            <br>
            <input type="radio" name="DudaG3" value="NoEs"> No estoy seguro/a
        </p>
        <p>
            ¿Crees que los controles parentales son una herramienta efectiva para proteger a los niños y adolescentes en el mundo digital?
           <br>
           <input type="radio" name="DudaG4" value="Si"> Si
           <br>
           <input type="radio" name="DudaG4" value="No"> No
           <br>
           <input type="radio" name="DudaG4" value="Deps"> Depende de la situacion
        </p>
        <h2>Preguntas de selección múltiple</h2>
        <p>
            Si utilizas control parental, ¿qué tipo de restricciones implementas principalmente?
            <br>
            <input type="checkbox" name="DudaM1" value="Lim"> Limitar el tiempo de pantalla o de internet
            <br>
            <input type="checkbox" name="DudaM1" value="bloq"> Bloquear contenido inapropiado
            <br>
            <input type="checkbox"name="DudaM1" value="Actl"> Monitorear la actividad en línea
            <br>
            <input type="checkbox" name="DudaM1" value="Otra"> Otra
        </p>
        <p>
            ¿Cuál es la principal razón por la que decidiste implementar controles parentales?
            <br>
            <input type="checkbox" name="DudaM2" value="Proh"> Proteger a mis hijos de contenido inapropiado
            <br>
            <input type="checkbox" name="DudaM2" value="bloq2"> Equilibrar el tiempo de pantalla con otras actividades
            <br>
            <input type="checkbox" name="DudaM2" value="Act2"> Monitorear su actividad en línea
            <br>
            <input type="checkbox" name="DudaM2" value="Otra2"> Otra
        </p>
        <!-- <p>
            ¿Cuáles son tus frameworks favoritos?
            <br>
            <input type="checkbox" name="frameworks" value="react"> React
            <br>
            <input type="checkbox" name="frameworks" value="angular"> Angular
            <br>
            <input type="checkbox" name="frameworks" value="vue"> Vue
        </p> -->
        <p>
        <label for="Comentario">¿Qué sugerencias darías a otros padres sobre cómo utilizar el control parental de manera efectiva?</label>
        <br>
        <textarea type="text" placeholder="Escribe aquí"></textarea>
        </p>
        <button type="submit">Enviar</button>
        
    </form>
    <button onclick="window.location.href='info'">Ver Informacion</button>
</div>
</body>
</html>