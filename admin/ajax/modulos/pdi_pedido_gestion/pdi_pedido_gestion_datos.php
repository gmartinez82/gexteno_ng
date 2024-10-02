<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/pdi_pedido.php';   ?>

<?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_DASHBOARD_TOP')) { ?>
    <div class="div_listado_dashboard_top" modulo="pdi_pedido">
        <?php //include Gral::getPathAbs() . 'admin/ajax/modulos/pdi_pedido_gestion/pdi_pedido_gestion_dashboard.php' ?>
    </div>
<?php } ?>

<div class="div_listado_acciones" modulo="pdi_pedido">
    <?php include Gral::getPathAbs() . 'admin/ajax/modulos/pdi_pedido_gestion/pdi_pedido_gestion_acciones_masivas.php' ?>
</div>

<?php if (count($pdi_pedidos) > 0) { ?>
    <form id="form_datos" name="form_datos" method="post" action="">
        <table border='0' align='center' class='listado' id='listado_adm_pdi_pedido'>
            <tr>
                <td align='center' class=''></td>
                <td align='center' class=''>&nbsp;</td>
                <td align='center' class=''>&nbsp;</td>

                <td align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Informacion del Movimiento') ?></td>
                <!--<td align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Fecha') ?></td>-->
                <td align='center' class=''>&nbsp;</td>
                <td align='center' class=''>&nbsp;</td>
                <td align='center' class=''>&nbsp;</td>
            </tr>
            <tr>
                <td width='30' align='center' class=''>
                    <input type="checkbox" id="chk_pdi_pedidos" name="chk_pdi_pedidos" />
                </td>
                <td width='40' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Id') ?><?php if ($criterio->getOrdenDato('campo') == 'id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>
                <td width='360' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=ins_insumo_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('InsInsumo') ?><?php if ($criterio->getOrdenDato('campo') == 'ins_insumo_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>
                <td width='380' align='center' class='adm_tbl_encabezado'>
                    <div class="adm_tbl_bloque">
                        <div class="uno" title="<?php Lang::_lang('Solicitada') ?>">
                            <?php Lang::_lang('Solic') ?>
                        </div>
                        <div class="uno" title="<?php Lang::_lang('Aceptada') ?>">
                            <?php Lang::_lang('Acept') ?>
                        </div>
                        <div class="uno" title="<?php Lang::_lang('Despachada') ?>">
                            <?php Lang::_lang('Desp') ?>
                        </div>
                        <div class="uno" title="<?php Lang::_lang('Recibida') ?>">
                            <?php Lang::_lang('Recib') ?>
                        </div>
                    </div>
                </td>
                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=pdi_estado.pdi_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('PdiEstado') ?><?php if ($criterio->getOrdenDato('campo') == 'pdi_estado.pdi_tipo_estado_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>
                <td width='140' align='center' class='adm_tbl_encabezado'><a href="?ord=1&amp;c=ope_operario_id&amp;t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Solicita') ?>
                        <?php if ($criterio->getOrdenDato('campo') == 'pan_panol_origen') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0' />
                        <?php } ?>
                    </a>
                </td>
                <td width="120" align='center' class='adm_tbl_encabezado'></td>
            </tr>
            <?php
            foreach ($pdi_pedidos as $pdi_pedido) {
                $pdi_id = $pdi_pedido->getId();

                $noleido = ($pdi_pedido->esPdiPedidoLeido()) ? '' : 'noleido';
                $destacado = ($pdi_pedido->esPdiPedidoDestacado()) ? 'destacado' : '';
                $arr_movimientos = $pdi_pedido->getPdiPedidoMovimientos();
                $pdi_comentarios = $pdi_pedido->getPdiComentarios();

                $cantidad_comentarios = (!empty($pdi_comentarios)) ? count($pdi_comentarios) : "Sin";
                ?>
                <tr id="tr_pdi_pedido_gestion_uno_<?php echo $pdi_pedido->getId() ?>" class="uno" identificador="<?php echo $pdi_pedido->getId() ?>" >
                    <?php include "pdi_pedido_gestion_uno.php" ?>
                </tr>

                <?php
                // auto hash de mas info de acuerdo al id recibido por url
                $id = Gral::getVars(2, 'id');
                $mi_display = "style='display:none;'";
                if (trim($id) == $pdi_pedido->getId()) {
                    $mi_display = '';
                    $mi_hash = "location.hash = 'mi_" . $id . "';";
                }
                ?>
                <tr id='tr_mi_<?php Gral::_echo($pdi_pedido->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                    <td colspan='7' align='center' class='adm_tbl_lineas'>


                        <div class="masinfo">
                            <?php
                            if (trim($id) == $pdi_pedido->getId()) {
                                include "pdi_pedido_adm_masinfo.php";
                            }
                            ?>
                        </div>		</td>
                    <td align='center'></td>
                </tr>


            <?php } ?>
            <tr>
                <td colspan='7' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
            </tr>
        </table>
    </form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>
