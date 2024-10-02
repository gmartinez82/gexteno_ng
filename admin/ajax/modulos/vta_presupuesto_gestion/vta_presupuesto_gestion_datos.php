
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/vta_presupuesto_gestion.php' ?>

<?php if (count($vta_presupuestos) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_vta_presupuesto_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <td width='40' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Tipo') ?>
            </td>

            <td width='130' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Codigo') ?>
                    <?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='230' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=cli_cliente_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Cliente') ?>
                    <?php if ($criterio->getOrdenDato('campo') == 'cli_cliente_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='130' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=vta_presupuesto_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Estado') ?>
                    <?php if ($criterio->getOrdenDato('campo') == 'vta_presupuesto_tipo_estado_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=fecha_vencimiento&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Vencimiento') ?>
                    <?php if ($criterio->getOrdenDato('campo') == 'fecha_vencimiento') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='40' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=cantidad_items&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Items') ?>
                    <?php if ($criterio->getOrdenDato('campo') == 'cantidad_items') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Subtotal') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Total') ?> IVA Inc
            </td>

            <td width='240' align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>


        <?php
        foreach ($vta_presupuestos as $vta_presupuesto) {
            $estado = ($vta_presupuesto->getEstado()) ? 'habilitado' : 'deshabilitado';
            $destacado = ($vta_presupuesto->getDestacado()) ? 'destacado' : '';
            ?>

            <tr id="tr_vta_presupuesto_gestion_uno_<?php Gral::_echo($vta_presupuesto->getId()) ?>" class="uno" identificador="<?php Gral::_echo($vta_presupuesto->getId()) ?>">
                <?php include "vta_presupuesto_gestion_uno.php" ?>
            </tr>


            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $vta_presupuesto->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($vta_presupuesto->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='18' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $vta_presupuesto->getId()) {
                            include "vta_presupuesto_adm_masinfo.php";
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
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        </tr>

        <tr>
            <td colspan='11' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


<script>
    setInit();
    setInitVtaPresupuestoGestion();
</script>