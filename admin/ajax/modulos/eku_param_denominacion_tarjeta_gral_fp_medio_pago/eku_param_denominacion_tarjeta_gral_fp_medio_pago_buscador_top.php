<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/eku_param_denominacion_tarjeta_gral_fp_medio_pago/set_eku_param_denominacion_tarjeta_gral_fp_medio_pago_buscador_top.php">
    
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" value="<?php echo $criterio->getBuscador() ?>" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
        
        <div class="quitar-filtro" style="display: <?php echo ($criterio->getBuscador()) ? 'block' : 'none' ?>;" title="Quitar Filtro">
            <img src="imgs/btn_eliminar.png" width="7" /> Quitar
        </div>            
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo EkuParamDenominacionTarjetaGralFpMedioPago::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo EkuParamDenominacionTarjetaGralFpMedioPago::getSesPagCantidad() ?> <?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPago') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_ALTA')){ ?>
        <a class="boton" href='eku_param_denominacion_tarjeta_gral_fp_medio_pago_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPago') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='eku_param_denominacion_tarjeta_gral_fp_medio_pago'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

