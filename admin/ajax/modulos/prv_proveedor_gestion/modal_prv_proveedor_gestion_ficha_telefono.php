<div class="titulo"><?php Lang::_lang('Telefonos') ?></div>

<div class="bloque-prv-proveedor-telefono">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Tipo') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Pais') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Cod. Area') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Telefono') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_telefonos as $prv_telefono) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="tipo">
                        <?php Gral::_echo($prv_telefono->getPrvTelefonoTipo()->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="pais">
                        <?php Gral::_echo($prv_telefono->getGeoPais()->getDescripcion()) ?>
                    </div>
                </td>    
                <td class="adm_tbl_lineas" align="center">
                    <div class="cod-area">
                        <?php Gral::_echo($prv_telefono->getCodigo()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="telefono">
                        <?php Gral::_echo($prv_telefono->getTelefono()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($prv_telefono->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($prv_telefono->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />