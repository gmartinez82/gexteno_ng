<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/per_persona_gestion/set_per_persona_gestion_buscador_top.php">
    
    <div class="col gral-empresa">
        <div class="label">
            <?php Lang::_lang("Empresa") ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_gral_empresa_id", Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true, true),"..."), $cmb_filtro_gral_empresa_id, "textbox") ?>
        </div>
    </div>
    
    <div class="col per-tipo-estado">
        <div class="label">
            <?php Lang::_lang("Tipo Estado") ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_per_tipo_estado_id", Gral::getCmbFiltro(PerTipoEstado::getPerTipoEstadosCmb(true, true),"..."), $cmb_filtro_per_tipo_estado_id, "textbox") ?>
        </div>
    </div>
    
    <div class="col codigo">
        <div class="label"><?php Lang::_lang('Legajo') ?></div>
        <input id="txt_filtro_legajo" name="txt_filtro_legajo" type="text" class="textbox" size="5" title="<?php Lang::_lang('Ingrese Legajo') ?>" />
    </div>
     
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>
    <div class="col">
    <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="5" value="<?php echo PerPersona::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PerPersona::getSesPagCantidad() ?> <?php Lang::_lang('PerPersona') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    <div class="col botonera">
        <input id='btn_buscar' name='btn_buscar' type='button' class="boton" value='<?php Lang::_lang('Buscar') ?>' />
    </div>
    
    <div class="col">
        <a class="boton" href='per_persona_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PerPersona') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='per_persona_gestion'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/refresh.gif" width="25"></label>
    </div>
    
</form>

