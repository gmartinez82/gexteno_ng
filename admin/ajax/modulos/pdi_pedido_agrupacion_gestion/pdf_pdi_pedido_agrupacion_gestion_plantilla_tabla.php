<?php
include_once "_autoload.php";

$pdi_pedido_agrupacion_id = $param["pdi_pedido_agrupacion_id"];

$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
$pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidos();
$pdi_pedido_agrupacion_items = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionItems();
$pdi_pedido_agrupacion_tipo_estado = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado();
?>
<style>
    .tabla{
        font-size: 8px;
    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        border: #000 solid 1px;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#d0d0d0;
        border: #000 solid 1px;
    }
    .adm_tbl_pie{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        background-color:#f1f1f1;
        border-bottom:#999 solid 1px;
        height:20px;
        padding:5px;
    }

    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border: #000 solid 1px;
        border-bottom:#CCCCCC solid 1px;            
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;        
    }  

    .div_mensaje_temporal{
        border: #ccc solid 1px;
        background-color: #ddd;
        font-size: 16px;
        color: #666;        
    }
</style>

<?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_GENERADO): ?>
    <div class="div_mensaje_temporal">
        Ítems Temporales, aún no genero pedido
    </div>
    <br />
<?php endif; ?>

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris" width="25" align="center">
            #
        </th>
        <th class="adm_tbl_encabezado_gris" width="45" align="center">
            Cant
        </th>
        <th class="adm_tbl_encabezado_gris" width="295" align="center">
            Nombre de Insumo 
        </th>
        <th class="adm_tbl_encabezado_gris" width="85" align="center">
            Cod Int
        </th>
        <th class="adm_tbl_encabezado_gris" width="90" align="center">
            Estado
        </th>
    </tr>

    <?php
    foreach ($pdi_pedidos as $i => $pdi_pedido) {
        $codigo_interno = '';
        $insumo_descripcion = '';
        $marca = '';
        $tipo_estado = '';

        $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $ins_insumo = $pdi_pedido->getInsInsumo();
        $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
        $cantidad = $pdi_estado_actual->getCantidad(); //$pdi_pedido->getCantidad();
        $codigo_interno = $ins_insumo->getCodigoInterno();
        $marca = $ins_insumo->getInsMarca()->getDescripcion();
        $insumo_descripcion = $ins_insumo->getDescripcion();

        $pdi_tipo_estado = $pdi_pedido->getPdiTipoEstado();
        $tipo_estado = $pdi_tipo_estado->getDescripcion();
        ?>
        <tr id="tr_pdi_pedido_agrupacion_gestion_uno_<?php echo $pdi_pedido->getId() ?>" class="uno" identificador="<?php echo $pdi_pedido->getId() ?>">
            <td class="adm_tbl_encabezado_gris" align="center">
                <label class="cantidad">
                    <?php Gral::_echo(++$cont); ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad"><?php Gral::_echo($cantidad); ?></label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <label class="insumo"><?php Gral::_echo($insumo_descripcion); ?></label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="codigo">
                    <?php if ($codigo_interno): ?>
                        <?php Gral::_echo($codigo_interno); ?>
                    <?php endif; ?>
                </label>
                <br/>
                <label class="marca">
                    <?php if ($marca): ?>
                        <?php Gral::_echo($marca); ?>
                    <?php endif; ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="estado">
                    <?php Gral::_echo($tipo_estado); ?>
                </label>
            </td>
        </tr>
        <?php
    }
    ?>

    <?php
    foreach ($pdi_pedido_agrupacion_items as $i => $pdi_pedido_agrupacion_item) {
        $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $ins_insumo = $pdi_pedido_agrupacion_item->getInsInsumo();
        $marca = $ins_insumo->getInsMarca()->getDescripcion();
        $insumo_descripcion = $ins_insumo->getDescripcion();
        $codigo_interno = $ins_insumo->getCodigoInterno();
        $cantidad = $pdi_pedido_agrupacion_item->getCantidad();
        $tipo_estado = '';
        ?>
        <tr id="tr_pdi_pedido_agrupacion_gestion_uno_<?php echo $pdi_pedido_agrupacion_item->getId() ?>" class="uno" identificador="<?php echo $pdi_pedido_agrupacion_item->getId() ?>">
            <td class="adm_tbl_encabezado_gris" align="center">
                <label class="cantidad">
                    <?php Gral::_echo(++$cont); ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad">
                    <?php Gral::_echo($cantidad); ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <label class="insumo">
                    <?php Gral::_echo($insumo_descripcion); ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="codigo">
                    <?php if ($codigo_interno): ?>
                        CI: <?php Gral::_echo($codigo_interno); ?>
                    <?php endif; ?>
                </label>
                <br/>
                <label class="marca">
                    <?php if ($marca): ?>
                        M: <?php Gral::_echo($marca); ?>
                    <?php endif; ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="estado">
                    <?php Gral::_echo($tipo_estado); ?>
                </label>
            </td>
        </tr>
    <?php } ?>
</table>