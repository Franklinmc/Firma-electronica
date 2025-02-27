<h1 class="nombre-pagina">Olvide mi password</h1>
<p class="descripcion-pagina">Restablece tu password con tu email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php"
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email" 
            id="email"
            name="email"
            placeholder="Tu email"
        />
    </div>
    <input type="submit" class="boton" value="Solicitar Cambio">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>