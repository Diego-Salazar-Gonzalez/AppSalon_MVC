<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reetablece tu password escribiendo tu email a continuacion</p>

<?php 
include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/olvide" class="formulario" method="POST">

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu Email">
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">

</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aun no tienes cuenta? Crear una </a>
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
</div>