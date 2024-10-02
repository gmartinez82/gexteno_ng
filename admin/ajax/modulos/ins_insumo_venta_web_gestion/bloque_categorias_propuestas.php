<?php
$ml_api_categories_info = MlGeneral::getCategoria($ins_venta_ml_info->getMlCategoryCod());
//Gral::prr($ml_api_categories_info);
$ml_api_category_total_items = $ml_api_categories_info['body']->total_items_in_this_category;
$ml_api_category_settings_shipping_modes = $ml_api_categories_info['body']->settings->shipping_modes;

?>
<div class="par">
    <div class="label"><?php Lang::_lang('Categoria ML') ?></div>
    <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_ml_category_cod', Gral::getCmbFiltro(MlGeneral::getMlCategoriasSugeridasGetCmb($palabras_claves), '...'), $ins_venta_ml_info->getMlCategoryCod(), 'textbox') ?>
        <div class="label-error" id="cmb_ml_category_cod_error"></div>
        <div class="comentario destacado amarillo">En funcion de la categoria registrada se importaran los atributos requeridos para ML</div>
    </div>
</div>

<div class="caracteristicas">
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Info de Categoria') ?></div>
        <div class="dato">
            <?php Gral::_echo($ins_venta_ml_info->getMlCategoryCod()) ?> <?php Gral::_echo($ins_venta_ml_info->getMlCategoryDesc()) ?>
        </div>
    </div>
    
    <div class="par">
        <div class="label"><?php Lang::_lang('Items en Categoria') ?></div>
        <div class="dato">
            <?php Gral::_echoInt($ml_api_category_total_items) ?>
        </div>
    </div>
    <div class="par">
        <div class="label"><?php Lang::_lang('Envio Permitido') ?></div>
        <div class="dato">
            <?php foreach($ml_api_category_settings_shipping_modes as $ml_api_category_settings_shipping_mode){ ?>
            <?php Gral::_echo($ml_api_category_settings_shipping_mode) ?><br />
            <?php } ?>
        </div>
    </div>
</div>

<div class="botonera">
    <button type="button" class="boton" id="btn_ml_categorizar" name="btn_ml_categorizar"><?php Lang::_lang('Categorizar para ML') ?></button>
</div>
