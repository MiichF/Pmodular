<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Datos de la etiqueta</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre de la etiqueta</label>
        <input 
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre etiqueta"
            value="<?php echo $etiqueta->nombre ?? ''; ?>"
        >
    </div>
    <div class="formulario__campo">
        <label for="prefijo" class="formulario__label">Prefijo de la Etiqueta</label>
        <input 
            type="text"
            class="formulario__input"
            id="prefijo"
            name="prefijo"
            placeholder="Prefijo de la etiqueta"
            value="<?php echo $etiqueta->prefijo ?? ''; ?>"
        >
    </div>
</fieldset>