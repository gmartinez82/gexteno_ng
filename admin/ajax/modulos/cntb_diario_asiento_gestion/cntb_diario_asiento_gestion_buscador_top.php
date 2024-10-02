<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/cntb_diario_asiento_gestion/set_cntb_diario_asiento_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        setAdmBuscadorTop('cntb_diario_asiento_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_hasta" name="txt_filtro_hasta" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta', onUpdate: function () {
                        setAdmBuscadorTop('cntb_diario_asiento_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col cntb_ejercicio">
        <div class="label"><?php Lang::_lang('Ejercicio') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cntb_ejercicio_id', Gral::getCmbFiltro(CntbEjercicio::getCntbEjerciciosCmb(true), '...'), $cmb_filtro_cntb_ejercicio_id, 'textbox') ?>
        </div>
    </div>

    <div class="col cntb_tipo_asiento">
        <div class="label"><?php Lang::_lang('Tipo Asiento') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cntb_tipo_asiento_id', Gral::getCmbFiltro(CntbTipoAsiento::getCntbTipoAsientosCmb(true), '...'), $cmb_filtro_cntb_tipo_asiento_id, 'textbox') ?>
        </div>
    </div>

    <div class="col cntb_tipo_origen">
        <div class="label"><?php Lang::_lang('Tipo Origen') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cntb_tipo_origen_id', Gral::getCmbFiltro(CntbTipoOrigen::getCntbTipoOrigensCmb(true), '...'), $cmb_filtro_cntb_tipo_origen_id, 'textbox') ?>
        </div>
    </div>

    <div class="col gral_actividad">
        <div class="label"><?php Lang::_lang('Actividad') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(true), '...'), $cmb_filtro_gral_actividad_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col cntb_tipo_movimiento">
        <div class="label"><?php Lang::_lang('Tipo Movimiento') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cntb_tipo_movimiento_id', Gral::getCmbFiltro(CntbTipoMovimiento::getCntbTipoMovimientosCmb(true), '...'), $cmb_filtro_cntb_tipo_movimiento_id, 'textbox') ?>
        </div>
    </div>

    <div class="col cntb_tipo_movimiento">
        <div class="label"><?php Lang::_lang('Cuenta') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cntb_cuenta_id', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(true), '...'), $cmb_filtro_cntb_cuenta_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="14" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo CntbDiarioAsiento::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo CntbDiarioAsiento::getSesPagCantidad() ?> <?php Lang::_lang('CntbDiarioAsiento') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <label class="boton ver-libro-diario" title="<?php Lang::_lang('Agregar Asiento') ?>"><img src="imgs/btn_pdf.png" width="22"></label>
        
        <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA')) { ?>
            <label class="boton agregar-asiento" title="<?php Lang::_lang('Agregar Asiento') ?>"><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

