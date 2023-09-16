<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a href="/admin/etiquetas/crear" class="dashboard__boton">
        <i class="fa-solid fa-circle-plus"></i>
        Nueva etiqueta
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if(!empty($etiquetas)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Prefijo</th>
                    <th scope="col" class="table__th"> </th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($etiquetas as $etiqueta) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $etiqueta->nombre; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $etiqueta->prefijo; ?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/etiquetas/editar?id=<?php echo $etiqueta->id; ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>

                            <form method="POST" action="/admin/etiquetas/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $etiqueta->id; ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php }else{ ?>
        <p class="text-center">No hay etiquetas</p>

    <?php } ?>

</div>