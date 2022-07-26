<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia Sesion con tus datos</p>
<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>


<form  class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="Email">Email</label>
        <input type="email" id="email" placeholder ="Ingresa Tu Email" name="email" value="<?php echo s($auth->email)?>">
    </div>


    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Tu contraseña" name="password">
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">
</form>
<div class="acciones">
    <a href="/crear-cuenta">¿Aun no tienes cuenta? Crear una </a>
    <a href="/olvide">Olvide mi contraseña</a>
</div>