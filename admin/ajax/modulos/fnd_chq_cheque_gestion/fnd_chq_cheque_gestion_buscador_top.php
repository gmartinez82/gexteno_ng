<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/fnd_chq_cheque_gestion/set_fnd_chq_cheque_gestion_buscador_top.php">
    <div class="col tipo-emisor">
        <div class="label">
            <?php Lang::_lang('Tipo Emisor'); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emisor_id, 'textbox') ?>
        </div>
    </div>

    <div class="col tipo-emision">
        <div class="label">
            <?php Lang::_lang('Tipo Emision'); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_emision_id', Gral::getCmbFiltro(FndChqTipoEmision::getFndChqTipoEmisionsCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emision_id, 'textbox') ?>
        </div>
    </div>

    <div class="col tipo-pago">
        <div class="label">
            <?php Lang::_lang('Tipo Pago'); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_pago_id', Gral::getCmbFiltro(FndChqTipoPago::getFndChqTipoPagosCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emision_id, 'textbox') ?>
        </div>
    </div>

    <div class="col banco">
        <div class="label">
            <?php Lang::_lang('Banco'); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(true), '...'), $cmb_filtro_gral_banco_id, 'textbox') ?>
        </div>
    </div>

    <div class="col tipo-pago">
        <div class="label">
            <?php Lang::_lang('Tipo Estado'); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(true), '...'), $cmb_filtro_fnd_chq_tipo_emision_id, 'textbox') ?>
        </div>
    </div>

    <div class="col en-cartera">
        <div class="label"><?php Lang::_lang('En Cartera') ?></div>
        <div class="dato">
            <?php
            Html::html_dib_select(1, 'cmb_fnd_chq_en_cartera', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_fnd_chq_en_cartera, 'textbox');
            ?>
            <div class="label-error" id="cmb_fnd_chq_en_cartera_error"></div>
        </div>
    </div>
    
    <div class="col gral-caja">
        <div class="label"><?php Lang::_lang('Caja') ?></div>
        <div class="dato">
            <?php
            Html::html_dib_select(1, 'cmb_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(true), '...'), $cmb_gral_caja_id, 'textbox');
            ?>
            <div class="label-error" id="cmb_fnd_chq_en_cartera_error"></div>
        </div>
    </div>

    <div class="col fecha-cobro-desde">
        <div class="label"><?php Lang::_lang('Cobro Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_fecha_cobro_desde" name="txt_filtro_fecha_cobro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_fecha_cobro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_fecha_cobro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_cobro_desde', onUpdate: function(){setAdmBuscadorTop('fnd_chq_cheque_gestion')}
                });
            </script>
        </div>
    </div>
    
    <div class="col fecha-cobro-hasta">
        <div class="label"><?php Lang::_lang('Cobro Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_fecha_cobro_hasta" name="txt_filtro_fecha_cobro_hasta" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_fecha_cobro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_fecha_cobro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_cobro_hasta', onUpdate: function(){setAdmBuscadorTop('fnd_chq_cheque_gestion')}
                });
            </script>
        </div>
    </div>
    <div class='col importe-desde'>
        <div class='label'>
            <?php Lang::_lang('Imp Desde'); ?>
        </div>
        <div class='dato'>
            <input id='txt_filtro_importe_desde' name='txt_filtro_importe_desde' type='text' class='textbox' size='7'  title='<?php Lang::_lang('Ingrese un importe desde') ?>' />
        </div>
    </div>
    <div class='col importe-hasta'>
        <div class='label'>
            <?php Lang::_lang('Imp Hasta'); ?>
        </div>
        <div class='dato'>
            <input id='txt_filtro_importe_hasta' name='txt_filtro_importe_hasta' type='text' class='textbox' size='7'  title='<?php Lang::_lang('Ingrese un importe hasta') ?>' />
        </div>
    </div>
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>
    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo FndChqCheque::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo FndChqCheque::getSesPagCantidad() ?> <?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    <div class="col">
        <?php if (UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_GESTION_ACCION_ALTA')): ?>
            <label class="boton alta_cheque" title="<?php Lang::_lang('Alta Cheque') ?>" modulo='fnd_chq_cheque_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php endif; ?>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>
</form>