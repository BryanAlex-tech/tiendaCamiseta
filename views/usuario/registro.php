<h1>Registrarse</h1>



<?php if(isset($_SESSION['register']) && ($_SESSION['register'] == 'complete')): ?>
    <strong class="alert_green">Registro completado correctamente</strong>
<?php elseif((isset($_SESSION['register']) && ($_SESSION['register'] == 'failed'))): ?>
    <strong class="alert_red">Registro fallido</strong>
<?php endif; ?>
<!--Al mostrarse el texto de la sesión se borra automáticamente para que no vuelva a aparecer al recargar la página-->
<?php Utils::deleteSession('register'); ?>




<form action="<?=base_url?>usuario/save" method="post">
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" required>
    
    <label for="email">Email</label>
    <input type="email" name="email" required>
    
    <label for="password">Contraseña</label>
    <input type="password" name="password" required>
    
    <input type="submit" value="Registrarse">

</form>

