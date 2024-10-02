<div class="titulo"><?php Lang::_lang('Marcas') ?></div>

<div class="bloque-prv-proveedor-marca">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Id') ?></td>
            <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang('Marca') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_proveedor_ins_marcas as $prv_proveedor_ins_marca) {
            $ins_marca = $prv_proveedor_ins_marca->getInsMarca();
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="ins-marca-id">
                        <?php Gral::_echo($ins_marca->getId()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="ins-marca-descripcion">
                        <?php Gral::_echo($ins_marca->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="ins-marca-creado-por">
                        <?php Gral::_echo($prv_proveedor_ins_marca->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="ins-marca-creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_ins_marca->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />