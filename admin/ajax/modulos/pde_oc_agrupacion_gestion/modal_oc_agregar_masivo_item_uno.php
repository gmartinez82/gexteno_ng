<?php
include_once "_autoload.php";

$costo_variacion_importe = 0;
$costo_variacion_porcentaje = 0;
$css_costo_porcentaje_variacion = '';

$importe_oc_con_descuento_comercial = $txt_importe_oc;
$importe_oc_con_descuento_comercial = PdeOcAgrupacion::getImporteConDescuentoComercial($cmb_prv_descuento_comercial_id, $importe_oc_con_descuento_comercial);

if($iva_incluido){
    //$importe_oc_con_descuento_comercial = $importe_oc_con_descuento_comercial / 1.1;
}

$importe_costo_actual_neto = 0;
if ($ins_insumo && $ins_insumo_costo_actual) {

    $importe_costo_actual_neto = $ins_insumo_costo_actual->getCostoNeto($iva_incluido);
    
    $costo_variacion_importe = $importe_oc_con_descuento_comercial - $importe_costo_actual_neto;
    $costo_variacion_porcentaje = ($importe_oc_con_descuento_comercial / $importe_costo_actual_neto - 1) * 100;

    if ($costo_variacion_porcentaje > 0 && $costo_variacion_porcentaje <= 10) {
        $css_costo_porcentaje_variacion = 'alerta_blanca';
    } elseif ($costo_variacion_porcentaje > 10 && $costo_variacion_porcentaje <= 50) {
        $css_costo_porcentaje_variacion = 'alerta_amarilla';
    } elseif ($costo_variacion_porcentaje > 50 && $costo_variacion_porcentaje <= 100) {
        $css_costo_porcentaje_variacion = 'alerta_naranja';
    } elseif ($costo_variacion_porcentaje > 100) {
        $css_costo_porcentaje_variacion = 'alerta_roja';
    } elseif ($costo_variacion_porcentaje < 0) {
        $css_costo_porcentaje_variacion = 'alerta_azul';
    }
}

if ($ins_insumo) {
    // se consultan los pedidos PDE activos
    $pde_pedidos_activos = PdePedido::getPdePedidosActivos($pde_centro_pedido->getId(), $ins_insumo->getId());

    // se consultan las OCs activos
    $pde_ocs_activos = PdeOc::getPdeOcsActivos($pde_centro_pedido->getId(), $ins_insumo->getId());

    // se consultan los items temporales de AOCs
    $pde_oc_agrupacion_items = PdeOcAgrupacion::getPdeOcAgrupacionItemsActivos($pde_centro_pedido->getId(), $ins_insumo->getId(), $pde_oc_agrupacion_id);
}

?>
<td align="center">
    <div class="key">
        <?php echo $key ?>
    </div>
</td>

<td align="center">
    <div class="codigo-interno">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
    </div>
    <div class="cantidad">
        <input step="1" min="1" max="" type="text" id="txt_cantidad_<?php echo $key ?>" name="txt_cantidad[<?php echo $key ?>]" value="<?php echo $txt_cantidad ?>" size="6" class="textbox txt_cantidad spinner spinner_cantidad" />
    </div>
    <div class="label-error" id="txt_cantidad_<?php echo $key ?>_error"></div>
</td>

<td align="left">

    <div class="marca">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getInsMarca()->getDescripcion() : '') ?>
        <?php Gral::_echo(($ins_insumo && $ins_insumo->getCodigoMarca()  != '') ? ': '.$ins_insumo->getCodigoMarca() : '') ?>
    </div>
    
    <div class="ins-insumo">
        <?php //echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo_' . $key, 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php?comprable=1&prv_proveedor_id=' . $prv_proveedor->getId(), false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '', 45, 'dbsug_ins_insumo_id', "");  ?>
        <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo_' . $key, 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php?comprable=1&prv_proveedor_id=' . $prv_proveedor->getId(), false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '', 40, 'dbsug_ins_insumo_id', ""); ?>
    </div>

    <?php if ($prv_insumo) { ?>
        <div class="prv-insumo">
            <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
        </div>
        <div class="codigo-proveedor">
            Cod Prv: <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
        </div>
    <?php } elseif ($ins_insumo) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_AGREGAR_VINCULAR_INSUMO_PROVEEDOR')) { ?>
            <div class="vincular-prv-insumo">
                Vincular con "<?php Gral::_echo($prv_proveedor->getDescripcion()) ?>"
            </div>
        <?php } ?>
    <?php } ?>

    <div class="label-error" id="dbsug_ins_insumo_id_<?php echo $key ?>_error"></div>

    <?php if (count($pde_pedidos_activos) > 0) { ?>
        <div class="pde-pedido-activos">
            <?php foreach ($pde_pedidos_activos as $pde_pedido_activo) { ?>
                PDE: <label class="pde-pedido-activo"><?php Gral::_echo($pde_pedido_activo->getPdePedidoDescripcionFull()) ?></label>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (count($pde_ocs_activos) > 0) { ?>
        <div class="pde-oc-activos">
            <?php foreach ($pde_ocs_activos as $pde_oc_activo) { ?>
                OC: <label class="pde-oc-activo"><?php Gral::_echo($pde_oc_activo->getPdeOcDescripcionFull()) ?></label>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (count($pde_oc_agrupacion_items) > 0) { ?>
        <div class="pde-oc-agrupacion-item-activos">
            <?php foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) { ?>
                AOC: <label class="pde-oc-agrupacion-item-activo"><?php Gral::_echo($pde_oc_agrupacion_item->getDescripcionFull()) ?> en preparacion</label>
            <?php } ?>
        </div>
    <?php } ?>
</td>

<td align="right">
    <?php if ($ins_insumo && $ins_insumo_costo_actual) { ?>
        <div class="costo-unitario">
            <?php Gral::_echoImp($importe_costo_actual_neto) ?>
        </div>
        <div class="texto-iva">
            <?php Gral::_echo(($iva_incluido) ? 'IVA Inc' : '+ IVA') ?>
        </div>
        <div class="costo-unitario-fecha" title="Modificado por <?php Gral::_echo($ins_insumo_costo_actual->getModificadoPorDescripcion()) ?>">
            <?php Gral::_echo(Gral::getFechaToWeb($ins_insumo_costo_actual->getModificado())) ?>
        </div>
    <?php } ?>
</td>

<td align="right" valign="top">
    <div class='importe-oc <?php echo ($ins_insumo && $prv_insumo_costo_actual && $prv_insumo_costo_actual->getImporteBruto() != $txt_importe_oc) ? 'diferencia' : '' ?>'>
        <input id='txt_importe_oc_<?php echo $key; ?>' name='txt_importe_oc[<?php echo $key; ?>]' class='textbox moneda' value='<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($txt_importe_oc)) ?>' size='10' ></input>
    </div>        
    <div class="texto-iva">
        <?php Gral::_echo(($iva_incluido) ? 'IVA Inc' : '+ IVA') ?>
    </div>
    <?php if ($ins_insumo && $prv_insumo_costo_actual) { ?>

        <div class="costo-unitario-proveedor">
            <?php Gral::_echoImp($prv_insumo_costo_actual->getImporteBruto()) ?>
        </div>
        <div class="costo-unitario-proveedor-fecha" title="Modificado por <?php Gral::_echo($prv_insumo_costo_actual->getModificadoPorDescripcion()) ?>">
            <?php Gral::_echo(Gral::getFechaToWeb($prv_insumo_costo_actual->getModificado())) ?>

            <?php if ($ins_insumo && $prv_insumo && $prv_insumo->getReferencial()) { ?>
                <img src="imgs/btn_importe.png" width="8" alt="hab" title="Es proveedor referencial de precios" />                    
            <?php } ?>            
        </div>
    
    <?php } ?>
</td>

<td align="right" valign="top">
    <div class="descuento-comercial">
        <?php Html::html_dib_select(1, 'cmb_prv_descuento_comercial_id_' . $key, Gral::getCmbFiltro($prv_proveedor->getPrvDescuentoComercialsCmb(), '...'), $cmb_prv_descuento_comercial_id, 'textbox', '', '', 'cmb_prv_descuento_comercial_id[' . $key . ']') ?>
    </div>
    <div class="importe-descuento-comercial">
        <?php Gral::_echoImp($importe_oc_con_descuento_comercial); ?>
    </div>
    
    <?php if ($importe_costo_actual_neto != 0) { ?>
        <?php if (abs($costo_variacion_porcentaje) > 0.1) { ?>
            <div class="costo-porcenaje-variacion <?php echo $css_costo_porcentaje_variacion ?>" title="Porcentaje de Variacion de Costo">
                <?php Gral::_echoInt($costo_variacion_porcentaje) ?> %
            </div>
        <?php } ?>
    <?php } ?>
</td>

<td align="right">
    <div class="costo-total-proveedor">
        <?php if ($ins_insumo): ?>
            <?php Gral::_echoImp(($importe_oc_con_descuento_comercial) * $txt_cantidad) ?>
        <?php endif; ?>
    </div>
</td>

<td align="center">
    <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_AGREGAR_AFECTAR_COSTO_INSUMO')) { ?>
        <div class="checkbox">
            <input id="chk_afecta_costo_<?php echo $key; ?>" name="chk_afecta_costo[<?php echo $key; ?>]" value="<?php echo $key; ?>" type="checkbox" class="textbox " <?php echo $chk_afecta_costo_checked[$key]; ?>/>
        </div>
    <?php } ?>
</td>

<td align="center">
    <label class="boton quitar_item_oc" title="<?php Lang::_lang('Quitar Item') ?> #<?php echo $key ?>" key='<?php echo $key ?>'><img src="imgs/btn_cancelar.png" width="15"></label>
</td>
