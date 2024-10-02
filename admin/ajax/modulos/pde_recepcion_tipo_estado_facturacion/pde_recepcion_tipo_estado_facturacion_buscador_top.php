<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/pde_recepcion_tipo_estado_facturacion/set_pde_recepcion_tipo_estado_facturacion_buscador_top.php">
    
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo PdeRecepcionTipoEstadoFacturacion::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PdeRecepcionTipoEstadoFacturacion::getSesPagCantidad() ?> <?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_TIPO_ESTADO_FACTURACION_ALTA')){ ?>
        <a class="boton" href='pde_recepcion_tipo_estado_facturacion_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='pde_recepcion_tipo_estado_facturacion'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

