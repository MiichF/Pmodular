<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="">Coloca tu nueva contraseña</p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) {  ?>
        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nueva contraseña</label>
                <input 
                type="password"
                class="formulario__input"
                placeholder="Ingresa tu nueva contraseña"
                id="password" 
                name="password"
                >       
            </div>
        
                <input type="submit" class="formulario__submit" value="Guardar nueva contraseña">
        </form>
    <?php } ?>

    <div class = "acciones">
    <a href="/login" class= "acciones__enlace">¿Ya tienes una cuenta? Iniciar sesión</a>  
    <a href="/registro" class= "acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
      
    </div>

</main>