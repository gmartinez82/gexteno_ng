<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_marca = $ins_insumo->getInsMarca();

$ins_venta_ml_infos = $ins_insumo->getInsVentaMlInfos();
$ins_venta_ml_info = $ins_venta_ml_infos[0];

if (!$ins_venta_ml_info) {
    $ins_venta_ml_info = new InsVentaMlInfo();
    $ins_venta_ml_info->setDescripcion($ins_insumo->getDescripcion());
}

$ml_category = $ins_venta_ml_info->getMlCategory();
$ml_category_ml_shipping_modes = $ml_category->getMlCategoryMlShippingModes();
?>
<div class="datos" insumo_id="<?php echo $ins_insumo->getId() ?>" venta_ml_info_id="<?php echo $ins_venta_ml_info->getId() ?>">
    <form id="form_ml_envio" name="form_ml_envio" method="post">

        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo->getDescripcion()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Titulo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getDescripcion()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Categoria ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlCategoryCod()) ?> 
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Categoria ML Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlCategoryDesc()) ?> 
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Envio ML') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ml_shipping_mode_id', Gral::getCmbFiltro(MlShippingMode::getMlShippingModesCmb(true), '...'), $ins_venta_ml_info->getMlShippingModeId(), 'textbox') ?>
                <div class="label-error" id="cmb_ml_shipping_mode_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Envio Gratis') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ml_free_shipping', GralSiNo::getGralSiNosCmb(true), $ins_venta_ml_info->getMlFreeShipping(), 'textbox') ?>
                <div class="label-error" id="cmb_ml_free_shipping_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Retiro en Local') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ml_local_pickup', GralSiNo::getGralSiNosCmb(true), $ins_venta_ml_info->getMlLocalPickup(), 'textbox') ?>
                <div class="label-error" id="cmb_ml_local_pickup_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button type="button" class="boton" id="btn_ml_envio" name="btn_ml_envio"><?php Lang::_lang('Envio para ML') ?></button>
        </div>
    </form>
</div>