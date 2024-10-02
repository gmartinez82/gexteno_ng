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
$pde_oc_reclamos = $pde_oc->getPdeOcReclamos();
?>
<td align="center">
    <div class="key">
        <?php echo $key ?>
    </div>
</td>

<td align="center">
    <?php if ($txt_cantidad_recibir > 0) { ?>
        <div class="checkbox">
            <input type="checkbox" class="textbox chk_recibir" id="chk_recibir_<?php echo $key ?>" name="chk_recibir[<?php echo $key ?>]" value="<?php echo $arr_pde_ocs[$key] ?>" />
        </div>
    <?php } ?>
</td>

<td align="center">
    <div class="cantidad">
        <?php if ($txt_cantidad_recibir > 0) { ?>
            <?php echo $txt_cantidad_recibir ?> <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
            <input step="1" min="0" max="" type="text" id="txt_cantidad_recibir_<?php echo $key ?>" name="txt_cantidad_recibir[<?php echo $key ?>]" value="<?php echo $txt_cantidad_recibir ?>" size="2" class="textbox txt_cantidad_recibir spinner spinner_cantidad_recibir" />
        <?php } ?>
        <?php Gral::_echo($cantidad_total_recibida) ?> de <?php Gral::_echo($cantidad) ?>
    </div>
    <div class="label-error" id="txt_cantidad_recibir_<?php echo $key ?>_error"></div>
</td>

<td align="left">
    <div class="ins-insumo">
        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>

        <img class='pde_oc_reclamos' id='pde_oc_reclamos_<?php echo $pde_oc->getId() ?>' src='imgs/btn_reclamar.png' width='18' align='absmiddle' title='<?php Lang::_lang('La OC tiene reclamos registrados') ?>' style='<?php echo (count($pde_oc_reclamos) > 0) ? '' : 'display:none'; ?>;'>
    </div>

    <?php if ($prv_insumo) { ?>
        <div class="prv-insumo">
            <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
        </div>
        <div class="codigo-proveedor">
            <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
        </div>
    <?php } ?>

    <div class="tipo-estado">
        <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc_tipo_estado->getCodigo()) ?>.png' width='12' align='absmiddle' />
        <?php Gral::_echo($pde_oc_tipo_estado->getDescripcion()) ?>
    </div>    

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
        <?php Gral::_echoImp($pde_oc->getImporteUnidadNeto()) ?>
        <input type="text" id="txt_importe_unitario_<?php echo $key ?>" name="txt_importe_unitario[<?php echo $key ?>]" value="<?php echo Gral::getImporteDesdeDbToPriceFormat($pde_oc->getImporteUnidadNeto()) ?>" size="10" class="textbox moneda txt_importe_unitario" />
    </div>

    <?php if($pde_oc->getIvaIncluido()){ ?>
        <label class="texto-iva texto-iva-incluido">
            IVA Incluido
        </label>
    <?php }else{ ?>
        <label class="texto-iva texto-mas-iva">
            + IVA
        </label>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_ACCIONES_RECIBIR_AGREGAR_RECLAMO')) { ?>
        <div class='pde_oc_reclamar'>
            <?php Lang::_lang('Agregar Reclamo') ?>
        </div> 
    <?php } ?>    

</td>

