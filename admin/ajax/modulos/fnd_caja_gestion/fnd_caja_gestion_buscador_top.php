<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/fnd_caja_gestion/set_fnd_caja_gestion_buscador_top.php">

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_FILTROS_CAJAS')) { ?>
        <div class="col etiqueta">
            <div class="label"><?php Lang::_lang('Caja') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(true), '...'), $cmb_filtro_gral_caja_id, 'textbox') ?>
            </div>
        </div>

        <div class="col etiqueta">
            <div class="label"><?php Lang::_lang('Cajero') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(true), '...'), $cmb_filtro_fnd_cajero_id, 'textbox') ?>
            </div>
        </div>
    <?php } ?>

    <div class="col etiqueta">
        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_caja_tipo_estado_id', Gral::getCmbFiltro(FndCajaTipoEstado::getFndCajaTipoEstadosCmb(true), '...'), $cmb_filtro_fnd_caja_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col etiqueta">
        <div class="label"><?php Lang::_lang('Tipo Ingreso') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_caja_tipo_ingreso_id', Gral::getCmbFiltro(FndCajaTipoIngreso::getFndCajaTipoIngresosCmb(true), '...'), $cmb_filtro_fnd_caja_tipo_ingreso_id, 'textbox') ?>
        </div>
    </div>

    <div class="col etiqueta">
        <div class="label"><?php Lang::_lang('Tipo Egreso') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_fnd_caja_tipo_egreso_id', Gral::getCmbFiltro(FndCajaTipoEgreso::getFndCajaTipoEgresosCmb(true), '...'), $cmb_filtro_fnd_caja_tipo_egreso_id, 'textbox') ?>
        </div>
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo FndCaja::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo FndCaja::getSesPagCantidad() ?> <?php Lang::_lang('FndCaja') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALTA')) { ?>
            <a class="boton agregar" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('FndCaja') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='fnd_caja'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

