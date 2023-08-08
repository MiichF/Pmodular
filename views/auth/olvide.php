<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="">Recupera tu cuenta de StudentWebCamp </p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
             type="email"
             class="formulario__input"
             placeholder="Ingresa tu email"
             id="email" 
             name="email"
             >       
        </div>
      
            <input type="submit" class="formulario__submit" value="Enviar correo">
    </form>

    <div class = "acciones">
    <a href="/login" class= "acciones__enlace">¿Ya tienes una cuenta? Iniciar sesión</a>  
    <a href="/registro" class= "acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
      
    </div>
</main>
