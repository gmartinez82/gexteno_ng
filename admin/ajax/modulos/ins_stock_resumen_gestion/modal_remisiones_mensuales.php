<?php
include "_autoload.php";

$identificador = Gral::getVars(2, 'identificador', 0);
$ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($identificador);
$ins_insumo = $ins_insumo_pan_panol->getInsInsumo();
$pan_panol = $ins_insumo_pan_panol->getPanPanol();
$pan_tipo_panol = $pan_panol->getPanTipoPanol();

$arr_puntos = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);

if($pan_tipo_panol->getCodigo() == PanTipoPanol::TIPO_PRINCIPAL){
    $arr_periodo = $ins_insumo_pan_panol->getResumenRemisionesYDespachosMensualesCantidad();    
}elseif($pan_tipo_panol->getCodigo() == PanTipoPanol::TIPO_SUCURSAL){
    //$arr_periodo = $ins_insumo_pan_panol->getResumenVentasMensualesCantidad();
    $arr_periodo = $ins_insumo_pan_panol->getResumenRemisionesMensualesCantidad();
}

//Gral::prr($arr_periodo);

$ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
?>
<div class="datos detalle">
    
    <div class="par">
        <div class="label">Producto</div>
        <div class="dato"><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?> - <?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
    </div>
    <div class="par">
        <div class="label">Deposito</div>
        <div class="dato"><?php Gral::_echo($pan_panol->getDescripcion()) ?></div>
    </div>
    
    <table border="0" class="tabla-modal" align="center">
        <tr>
            <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Stock Actual') ?></td>
            <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Estado de Stock') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Min') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Ped') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Max') ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Tipo Conf') ?></td>
        </tr>
        <tr>
            <td class="adm_tbl_lineas strong" align="center">
                <strong>
                    <?php Gral::_echoFloatDyn($ins_stock_resumen->getCantidad()) ?>
                </strong>
            </td>
            <td class="adm_tbl_lineas strong" align="center">
                <?php Gral::_echo($ins_stock_resumen->getInsStockResumenTipoEstado()->getDescripcion()) ?>
            </td>
            <td class="adm_tbl_lineas strong" align="center">
                <?php Gral::_echoFloatDyn($arr_puntos[InsInsumo::PUNTO_MINIMO]) ?>
            </td>
            <td class="adm_tbl_lineas strong" align="center">
                <?php Gral::_echoFloatDyn($arr_puntos[InsInsumo::PUNTO_PEDIDO]) ?>
            </td>
            <td class="adm_tbl_lineas strong" align="center">
                <?php Gral::_echoFloatDyn($arr_puntos[InsInsumo::PUNTO_MAXIMO]) ?>
            </td>
            <td class="adm_tbl_lineas strong" align="center">
                <?php Gral::_echo($ins_insumo_pan_panol->getInsStockTipoConfiguracion()->getDescripcion()) ?>
            </td>
        </tr>
    </table>
    
    <br />
    
    <table border="0" class="tabla-modal" align="center">
        <?php if($pan_tipo_panol->getCodigo() == PanTipoPanol::TIPO_PRINCIPAL){ ?>
            <tr>
                <td align="center"><?php Lang::_lang('Ultimos Remisiones y Despachos Realizados') ?></td>
                <td class="adm_tbl_encabezado" align='center' colspan="3"><?php Lang::_lang('Unidades') ?></td>
            </tr>
        <?php }elseif($pan_tipo_panol->getCodigo() == PanTipoPanol::TIPO_SUCURSAL){ ?>
            <tr>
                <td align="center"><?php Lang::_lang('Ultimas Remisiones Realizadas') ?></td>
                <td class="adm_tbl_encabezado" align='center' colspan="3"><?php Lang::_lang('Unidades') ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Mes') ?></td>
            <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Mensual') ?></td>
            <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Promedio Semanal') ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('MIN') ?>/<?php Lang::_lang('MAX') ?></td>
        </tr>
        <?php
        foreach ($arr_periodo as $mes => $arr_periodo_uno) {
            ?>
            <tr>
                <td class="adm_tbl_lineas strong" align="left">
                    <?php Gral::_echo($arr_periodo_uno['MES_DESCRIPCION']) ?>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <strong><?php Gral::_echoInt($arr_periodo_uno['CANTIDAD_VENDIDOS_MENSUAL']) ?></strong>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <strong><?php Gral::_echoInt($arr_periodo_uno['CANTIDAD_VENDIDOS_SEMANAL']) ?></strong>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <?php if($arr_periodo_uno['ES_MINIMO']){ ?>
                        MIN
                    <?php } ?>
                    <?php if($arr_periodo_uno['ES_MAXIMO']){ ?>
                        MAX
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br />

</div>
