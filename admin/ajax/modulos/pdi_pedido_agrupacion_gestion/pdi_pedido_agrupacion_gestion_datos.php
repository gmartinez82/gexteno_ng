
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/pdi_pedido_agrupacion.php'; ?>

<?php if (count($pdi_pedido_agrupacions) > 0) { ?>

    <br />
    <table id='listado_adm_pdi_pedido_agrupacion_gestion' border='0' align='center' class='listado' >
        <tr>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Cod') ?><?php if ($criterio->getOrdenDato('campo') == 'id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>

            <td width='550' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('PanPanol') ?>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=pde_estado.pde_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Estado Agrupac') ?>
                        <?php if ($criterio->getOrdenDato('campo') == 'pde_estado.pde_tipo_estado_id') { ?>
                    <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                </a>				
            </td>

            <td width="50" align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Solic') ?></td>
            <td width="50" align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Acept') ?></td>
            <td width="50" align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Despach') ?></td>
            <td width="50" align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Recib') ?></td>
            <td width="50" align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Rechaz') ?></td>

            <td width="140" align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>
        <?php
        foreach ($pdi_pedido_agrupacions as $pdi_pedido_agrupacion) {
            ?>
            <tr id="tr_pdi_pedido_agrupacion_gestion_uno_<?php echo $pdi_pedido_agrupacion->getId() ?>" class="uno" identificador="<?php echo $pdi_pedido_agrupacion->getId() ?>">
                <?php include "pdi_pedido_agrupacion_gestion_uno.php" ?>
            </tr>

            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $pdi_pedido_agrupacion->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='12' align='center' class='adm_tbl_lineas'>
                    <div class="masinfo">
                        <?php
                        if (trim($id) == $pdi_pedido_agrupacion->getId()) {
                            include "pdi_pedido_agrupacion_adm_masinfo.php";
                        }
                        ?>
                    </div>		
                </td>
                <td align='center'></td>
            </tr>
        <?php } ?>
        <tr>
            <td align='center' class='adm_tbl_encabezado' colspan="3"></td>

            <td align='center' class='adm_tbl_encabezado'><?php Gral::_echoInt($total_cantidad_solicitada) ?></td>
            <td align='center' class='adm_tbl_encabezado'><?php Gral::_echoInt($total_cantidad_aceptada) ?></td>
            <td align='center' class='adm_tbl_encabezado'><?php Gral::_echoInt($total_cantidad_despachada) ?></td>
            <td align='center' class='adm_tbl_encabezado'><?php Gral::_echoInt($total_cantidad_recibida) ?></td>
            <td align='center' class='adm_tbl_encabezado'><?php Gral::_echoInt($total_cantidad_rechazada) ?></td>
            
            <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>
            
        <tr>
            <td colspan='12' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>