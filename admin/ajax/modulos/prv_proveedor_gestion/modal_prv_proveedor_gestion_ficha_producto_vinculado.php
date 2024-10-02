<div class="titulo"><?php Lang::_lang('Productos Vinculados') ?></div>

<div class="bloque-prv-proveedor-producto-vinculado">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Id') ?></td>
            <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang('Producto') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($ins_insumos_prv_proveedors as $ins_insumos_prv_proveedor) {
            $ins_insumo = $ins_insumos_prv_proveedor->getInsInsumo();
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="ins-insumo-id">
                        <?php Gral::_echo($ins_insumo->getId()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="ins-insumo-descripcion">
                        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="ins-insumo-creado-por">
                        <?php Gral::_echo($ins_insumos_prv_proveedor->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="ins-insumo-creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumos_prv_proveedor->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />