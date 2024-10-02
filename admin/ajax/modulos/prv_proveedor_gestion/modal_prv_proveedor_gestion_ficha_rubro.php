<div class="titulo"><?php Lang::_lang('Rubros') ?></div>

<div class="bloque-prv-proveedor-rubro">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Id') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Rubro') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_proveedor_prv_rubros as $prv_proveedor_prv_rubro) {
            $prv_rubro = $prv_proveedor_prv_rubro->getPrvRubro();
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="prv-rubro-id">
                        <?php Gral::_echo($prv_rubro->getId()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="prv-rubro-descripcion">
                        <?php Gral::_echo($prv_rubro->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="prv-rubro-creado-por">
                        <?php Gral::_echo($prv_proveedor_prv_rubro->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="prv-rubro-creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_prv_rubro->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />