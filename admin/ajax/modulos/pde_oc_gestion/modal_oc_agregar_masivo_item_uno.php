<?php
include_once "_autoload.php";

$costo_variacion_importe = 0;
$costo_variacion_porcentaje = 0;
$css_costo_porcentaje_variacion = '';

if ($ins_insumo && $ins_insumo_costo_actual && $prv_insumo_costo_actual) {
    $costo_variacion_importe = $prv_insumo_costo_actual->getImporteNeto() - $ins_insumo_costo_actual->getCosto();
    $costo_variacion_porcentaje = ($prv_insumo_costo_actual->getImporteNeto() / $ins_insumo_costo_actual->getCosto() - 1) * 100;

    if ($costo_variacion_porcentaje > 0 && $costo_variacion_porcentaje <= 10) {
        $css_costo_porcentaje_variacion = 'alerta_blanca';
    } elseif ($costo_variacion_porcentaje > 10 && $costo_variacion_porcentaje <= 50) {
        $css_costo_porcentaje_variacion = 'alerta_amarilla';
    } elseif ($costo_variacion_porcentaje > 50 && $costo_variacion_porcentaje <= 100) {
        $css_costo_porcentaje_variacion = 'alerta_naranja';
    } elseif ($costo_variacion_porcentaje > 100) {
        $css_costo_porcentaje_variacion = 'alerta_roja';
    } elseif ($costo_variacion_porcentaje < 0) {
        $css_costo_porcentaje_variacion = 'alerta_verde';
    }
}
?>
<td align="center">
    <div class="cantidad">
        <input step="1" min="1" max="" type="text" id="txt_cantidad_<?php echo $key ?>" name="txt_cantidad[<?php echo $key ?>]" value="<?php echo $txt_cantidad ?>" size="2" class="textbox txt_cantidad spinner spinner_cantidad" />
    </div>
    <div class="label-error" id="txt_cantidad_<?php echo $key ?>_error"></div>
</td>

<td align="left">
    <div class="ins-insumo">
        <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo_' . $key, 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php?comprable=1&prv_proveedor_id=' . $prv_proveedor->getId(), false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '', 45, 'dbsug_ins_insumo_id', ""); ?>
    </div>

    <?php if ($prv_insumo) { ?>
        <div class="prv-insumo">
            <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
        </div>
    <?php } ?>

    <div class="label-error" id="dbsug_ins_insumo_id_<?php echo $key ?>_error"></div>
</td>

<td align="center">
    <div class="codigo-interno">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
    </div>
</td>

<td align="center">
    <div class="marca">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getInsMarca()->getDescripcion() : '') ?>
    </div>
    <div class="codigo-marca">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
    </div>
</td>

<td align="right">
    <div class="costo-unitario">
        <?php if ($ins_insumo && $ins_insumo_costo_actual) { ?>
            <?php Gral::_echoImp($ins_insumo_costo_actual->getCosto()) ?>
        <?php } ?>
    </div>
</td>

<td align="center">
    <div class="codigo-proveedor">
        <?php Gral::_echo(($ins_insumo && $prv_insumo) ? $prv_insumo->getCodigoProveedor() : '') ?>
    </div>
</td>

<td align="center">
    <?php if ($ins_insumo && $prv_insumo && $prv_insumo->getReferencial()) { ?>
        <img src="imgs/btn_importe.png" width="8" alt="hab" title="Es proveedor referencial de precios" />                    
    <?php } ?>
</td>

<td align="center">
    <?php if ($costo_variacion_porcentaje != 0) { ?>
        <div class="costo-porcenaje-variacion <?php echo $css_costo_porcentaje_variacion ?>" title="Porcentaje de Variacion de Costo">
            <?php Gral::_echoInt($costo_variacion_porcentaje) ?> %
        </div>
    <?php } ?>
</td>

<td align="right">
    <div class="costo_unitario-proveedor">
        <?php if ($ins_insumo && $prv_insumo_costo_actual) { ?>
            <?php Gral::_echoImp($prv_insumo_costo_actual->getImporteNeto()) ?>
        <?php } ?>
    </div>
</td>

<td align="right">
    <div class="costo_total-proveedor">
        <?php if ($ins_insumo && $prv_insumo_costo_actual) { ?>
            <?php Gral::_echoImp($prv_insumo_costo_actual->getImporteNeto() * $txt_cantidad) ?>
        <?php } ?>
    </div>
</td>

<td align="center">
    <label class="boton quitar_item_oc" title="<?php Lang::_lang('Quitar Item') ?>" key='<?php echo $key ?>'><img src="imgs/btn_cancelar.png" width="15"></label>
</td>

