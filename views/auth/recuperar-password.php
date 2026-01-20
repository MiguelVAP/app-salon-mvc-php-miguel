<h1 class="nombre-pagina">Recuperar Pagina </h1>
<p class="descripcion-pagina"">Introduce tu Nuevo Passwor a continuación</p>

<?php 
   include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password </label>
        <input 
             type="password" 
             id="password"
             name="password"
             placeholder="Nuevo Password"
            >
    </div>

    <input type="submit" class="boton" value="Guardar Nuevo Password">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes Cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tines Cuenta? Crea una</a>
</div>