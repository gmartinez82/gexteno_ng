<table border="0" class="tabla-modal" id="tbl_insumo_gestion_ficha_vinculados">
    <tr>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang('Foto') ?></td>
        <td class="adm_tbl_encabezado" width="500" align='center'><?php Lang::_lang('Descripcion') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Acciones') ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($ins_insumo_vinculados as $ins_insumo_vinculado) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        
        ?>
    <tr class="uno" insumo_vinculado_id="<?php Gral::_echo($ins_insumo_vinculado->getId()) ?>">
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="avatar">
                    <a href="<?php Gral::_echo($ins_insumo_vinculado->getPathImagenPrincipal()) ?>">
                        <img src="<?php Gral::_echo($ins_insumo_vinculado->getPathImagenPrincipal(true)) ?>" alt="img-prd" />
                    </a>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="id">
                    Id: <?php Gral::_echo($ins_insumo_vinculado->getId()) ?>
                </div>
                <div class="descripcion">
                    <?php Gral::_echo($ins_insumo_vinculado->getDescripcion()) ?>
                </div>
                <div class="marca">
                    Marca: <?php Gral::_echo($ins_insumo_vinculado->getInsMarca()->getDescripcion()) ?>
                </div>
                <div class="codigo_marca">
                    Cod Marca: <?php Gral::_echo($ins_insumo_vinculado->getCodigoMarca()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <input type="button" class="boton" id="btn_eliminar_vinculado" name="btn_eliminar_vinculado" value="Eliminar Vinculo" />
            </td>
        </tr>
    <?php } ?>
</table>