<div class="titulo"><?php Lang::_lang('Emails') ?></div>

<div class="bloque-prv-proveedor-email">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="270" align='center'><?php Lang::_lang('Email') ?></td>
            <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_emails as $prv_email) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($prv_email->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($prv_email->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($prv_email->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_email->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />