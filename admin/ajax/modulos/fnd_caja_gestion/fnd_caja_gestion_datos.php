<?php
//include Gral::getPathAbs().'admin/parciales/buscadores/activos/fnd_caja_gestion.php'       
?>

<?php if (count($fnd_cajas) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_fnd_caja_gestion'>

        <tr>
            <td align='center' class='' colspan="6"></td>

            <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) { ?>
                <td align='center' class=''></td>
                <td align='center' class=''></td>
            <?php } ?>

            <td width='30' align='center' class='adm_tbl_encabezado' colspan="2">
                Extraordinarios
            </td>

            <?php if (false) { ?>
                <td width='30' align='center' class='adm_tbl_encabezado' colspan="2">
                    Entre Cajas
                </td>
            <?php } ?>

        </tr>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'></td>

            <td width='30' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Id') ?><?php if ($criterio->getOrdenDato('campo') == 'id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=fnd_cajero_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('FndCajero') ?><?php if ($criterio->getOrdenDato('campo') == 'fnd_cajero_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Fechas') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Saldo Inicial') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Cobros') ?>
            </td>

            <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) { ?>
                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Pagos') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Orden Pagos') ?>
                </td>
            <?php } ?>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Ingresos') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Egresos') ?>
            </td>

            <?php if (false) { ?>
                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Ingresos') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Egresos') ?>
                </td>
            <?php } ?>

            <td align='center' class='adm_tbl_encabezado'></td>
        </tr>


        <?php
        foreach ($fnd_cajas as $fnd_caja) {
            $estado = ($fnd_caja->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_fnd_caja_gestion_uno_<?php Gral::_echo($fnd_caja->getId()) ?>" class="uno" identificador="<?php Gral::_echo($fnd_caja->getId()) ?>">
                <?php include "fnd_caja_gestion_uno.php" ?>
            </tr>


            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $fnd_caja->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($fnd_caja->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='13' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $fnd_caja->getId()) {
                            include "fnd_caja_adm_masinfo.php";
                        }
                        ?>
                    </div>

                </td>
                <td align='center'></td>
            </tr>


        <?php } ?>

        <tr>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) { ?>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <?php } ?>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <?php if (false) { ?>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <?php } ?>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        </tr>

        <tr>
            <td colspan='14' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


