<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor">
    <?php if(!empty($usuarios)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Correo</th>
                    <th scope="col" class="table__th"> </th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($usuarios as $usuario) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $usuario->nombre, ' ',$usuario->apellido; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $usuario->email; ?>
                        </td>
                        <td class="table__td--acciones">
                            <form method="POST" action="/admin/registrados/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Bannear
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php }else{ ?>
        <p class="text-center">No hay usuarios</p>

    <?php } ?>

</div>