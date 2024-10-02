<?php if ($ins_tipo_lista_precio->getBultoCerrado() && count($ins_insumo_bultos) > 0) { ?>
    <div class="par bultos">
        <div class="label"><?php Lang::_lang('Bultos') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_ins_insumo_bulto_id', Gral::getCmbFiltro($ins_insumo->getInsInsumoBultosOrdenadosCmb($ins_tipo_lista_precio), '...'), $ins_insumo_bulto_id, 'textbox') ?>
            <div class="error label-error" id="cmb_ins_insumo_bulto_id_error"></div>
            <div class="comentario bulto-cerrado">La lista de precios elegida EXIGE venta por BULTO CERRADO.</div>
        </div>
    </div>
<?php } ?>
