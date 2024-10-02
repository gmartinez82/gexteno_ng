
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/pde_orden_pago_gestion.php' ?>

<?php if (count($pde_orden_pagos) > 0) { ?>
    <form id="form_cuerpo" name="form_cuerpo" method="post" action="">
        <table border='0' align='center' class='listado' id='listado_adm_pde_orden_pago_gestion'>

            <tr>

                <td width='80' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=codigo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Codigo') ?>

                        <?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                    </a>
                </td>

                <td width='250' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=prv_proveedor_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Proveedor') ?>

                        <?php if ($criterio->getOrdenDato('campo') == 'prv_proveedor_id') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                    </a>
                </td>

                <td width='110' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=pde_orden_pago_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Estado') ?>

                        <?php if ($criterio->getOrdenDato('campo') == 'pde_orden_pago_tipo_estado_id') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                    </a>
                </td>

                <td width='210' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Comprobantes') ?>
                </td>

                <td width='180' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Formas de Pago') ?>
                </td>

                <td width='200' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Total OP') ?>
                </td>
                
                <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
            </tr>


            <?php
            foreach ($pde_orden_pagos as $pde_orden_pago) {
                $estado = ($pde_orden_pago->getEstado()) ? 'habilitado' : 'deshabilitado';
                ?>

                <tr id="tr_pde_orden_pago_gestion_uno_<?php Gral::_echo($pde_orden_pago->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pde_orden_pago->getId()) ?>">
                    <?php include "pde_orden_pago_gestion_uno.php" ?>
                </tr>


                <?php
                // auto hash de mas info de acuerdo al id recibido por url
                $id = Gral::getVars(2, 'id');
                $mi_display = "style='display:none;'";
                if (trim($id) == $pde_orden_pago->getId()) {
                    $mi_display = '';
                    $mi_hash = "location.hash = 'mi_" . $id . "';";
                }
                ?>
                <tr id='tr_mi_<?php Gral::_echo($pde_orden_pago->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                    <td colspan='13' align='center' class='adm_tbl_lineas'>


                        <div class="masinfo">
                            <?php
                            if (trim($id) == $pde_orden_pago->getId()) {
                                include "pde_orden_pago_gestion_adm_masinfo.php";
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
            </tr>

            <tr>
                <td colspan='13' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
            </tr>
        </table>
    </form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


