<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a href="/admin/etiquetas" class="dashboard__boton">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>


<div class="dashboard__formulario">
    <?php
        require_once __DIR__ . '/../../templates/alertas.php'; 
    ?>
    <form method="POST" enctype="multipart/form-data" class="formulario">
        <?php include_once __DIR__ . '/formulario.php'; ?>

        <input type="submit" class="formulario__submit formulario__submit--registrar" value="Actualizar Etiqueta">
    </form>
</div>