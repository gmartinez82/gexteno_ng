
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/vta_orden_venta.php' ?>

<?php if (count($vta_orden_ventas) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_vta_orden_venta_gestion'>

        <tr>
            <td width='40' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <td width='130' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Presupuesto') ?>
            </td>

            <td width='300' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=vta_presupuesto_ins_insumo_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Insumo') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'vta_presupuesto_ins_insumo_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='80' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=vta_orden_venta_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Estado') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'vta_orden_venta_tipo_estado_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=vta_orden_venta_tipo_estado_remision_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Estado RMS') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'vta_orden_venta_tipo_estado_remision_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=vta_orden_venta_tipo_estado_facturacion_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Estado FACT') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'vta_orden_venta_tipo_estado_facturacion_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=importe_unitario&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Imp Unitario') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'importe_unitario') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Total') ?>
            </td>

            <td width='140' align='center' class='adm_tbl_encabezado'>
                &nbsp;
            </td>

        </tr>

        <?php
        $inicio = true;
        $vta_presupuesto_id_agrupacion = 0;
        $par = 'par';

        foreach ($vta_orden_ventas as $vta_orden_venta) {
            $cont++;
            $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();

            if ($inicio) {
                $inicio = false;
                $vta_presupuesto_id_agrupacion = $vta_presupuesto->getId();
            }

            $estado = ($vta_orden_venta->getEstado()) ? 'habilitado' : 'deshabilitado';

            $hay_cambio = ($vta_presupuesto_id_agrupacion != $vta_presupuesto->getId() || $cont == 1) ? true : false;
            if ($hay_cambio) {
                $par = ($par != 'par') ? 'par' : 'impar';
            }
            $vta_presupuesto_id_agrupacion = $vta_presupuesto->getId();
            ?>

            <?php if ($hay_cambio) { ?>
                <tr class="uno separador" cli_cliente_id="<?php echo $vta_presupuesto->getCliClienteId() ?>" vta_presupuesto_id="<?php echo $vta_presupuesto->getId() ?>">
                    <?php include "vta_orden_venta_gestion_uno_separador.php" ?>
                </tr>
            <?php } ?>

            <tr id="tr_vta_orden_venta_gestion_uno_<?php Gral::_echo($vta_orden_venta->getId()) ?>" class="uno <?php echo $par ?>" identificador="<?php Gral::_echo($vta_orden_venta->getId()) ?>">
                <?php include "vta_orden_venta_gestion_uno.php" ?>
            </tr>


            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $vta_orden_venta->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($vta_orden_venta->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='11' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $vta_orden_venta->getId()) {
                            include "vta_orden_venta_adm_masinfo.php";
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


