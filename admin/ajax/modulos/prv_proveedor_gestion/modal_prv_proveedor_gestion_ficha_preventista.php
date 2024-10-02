<div class="titulo"><?php Lang::_lang('Preventistas') ?></div>

<div class="bloque-prv-proveedor-preventista">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Apellido') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Nombre') ?></td>
            <td class="adm_tbl_encabezado" width="170" align='center'><?php Lang::_lang('Email') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Telefono') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Celular') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_preventistas as $prv_preventista) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="apellido">
                        <?php Gral::_echo($prv_preventista->getApellido()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="nombre">
                        <?php Gral::_echo($prv_preventista->getNombre()) ?>
                    </div>
                </td>    
                <td class="adm_tbl_lineas" align="center">
                    <div class="email">
                        <?php Gral::_echo($prv_preventista->getEmail()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="telefono">
                        <?php Gral::_echo($prv_preventista->getTelefono()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="celular">
                        <?php Gral::_echo($prv_preventista->getCelular()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($prv_preventista->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($prv_preventista->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_preventista->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />