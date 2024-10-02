<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/os_orden_servicio_gestion/set_os_orden_servicio_gestion_buscador_top.php">

    <div class="col per-empresa">
        <div class="label">
            <?php Lang::_lang("Empresa"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_gral_empresa_id", Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true, true),"..."), $cmb_filtro_gral_empresa_id, "textbox") ?>
        </div>
    </div>

    <div class="col per-persona">
        <div class="label">
            <?php Lang::_lang("Persona"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_per_persona_id", Gral::getCmbFiltro(PerPersona::getPerPersonasCmbOrdenadas(true, true),"..."), $cmb_filtro_per_persona_id, "textbox") ?>
        </div>
    </div>
    
    <div class="col os-tipo">
        <div class="label">
            <?php Lang::_lang("Tipo OS"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_os_tipo_id", Gral::getCmbFiltro(OsTipo::getOsTiposCmb(true, true), "..."), $cmb_filtro_os_tipo_id, "textbox") ?>
        </div>
    </div>
    
    <div class="col os-tipo-estado">
        <div class="label">
            <?php Lang::_lang("Estado Tipo OS"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_os_tipo_estado_id", Gral::getCmbFiltro(OsTipoEstado::getOsTipoEstadosCmb(true, true), "..."), $cmb_filtro_os_tipo_estado_id, "textbox") ?>
        </div>
    </div>
    
    <div class="col os-prioridad">
        <div class="label">
            <?php Lang::_lang("Prioridad OS"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_os_prioridad_id", Gral::getCmbFiltro(OsPrioridad::getOsPrioridadsCmb(true, true), "..."), $cmb_filtro_os_prioridad_id, "textbox") ?>
        </div>
    </div>

    <div class="col os-activo">
        <div class="label">
            <?php Lang::_lang("Activo"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_activo", Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true, true), "..."), $cmb_filtro_activo, "textbox") ?>
        </div>
    </div>
    
    <div class="col os-resoluble">
        <div class="label">
            <?php Lang::_lang("Resoluble"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_resoluble", Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true, true), "..."), $cmb_filtro_resoluble, "textbox") ?>
        </div>
    </div>
    
    <div class="col os-tipo-resolucion">
        <div class="label">
            <?php Lang::_lang("Resolucion"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_tipo_resolucion_id", Gral::getCmbFiltro(OsTipoResolucion::getOsTipoResolucionsCmb(true, true), "..."), $cmb_filtro_os_tipo_resolucion_id, "textbox") ?>
        </div>
    </div>
    
    <div class="col fecha_desde">
        <div class="label">
            <?php Lang::_lang("Fecha Desde"); ?>
        </div>
        <div class="dato">
            <input name="txt_filtro_fecha_desde" type="text" class="textbox date" id="txt_filtro_fecha_desde" value="<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_filtro_fecha_desde)) ?>" size="4" />
            <input type="button" id="cal_txt_filtro_fecha_desde" value="..." class="boton_calendario" />
            <script type="text/javascript">
                Calendar.setup({
                    inputField: "txt_filtro_fecha_desde", ifFormat: "%d/%m/%Y", button: "cal_txt_filtro_fecha_desde", onUpdate: function()
                    {
                        //setAdmBuscadorTop("os_orden_servicio_gestion");
                    }
                });
            </script>
        </div>
    </div>
    
    <div class="col fecha_hasta">
        <div class="label">
            <?php Lang::_lang("Fecha Hasta"); ?>
        </div>
        <div class="dato">
            <input name="txt_filtro_fecha_hasta" type="text" class="textbox date" id="txt_filtro_fecha_hasta" value="<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_filtro_fecha_hasta)) ?>" size="4" />
            <input type="button" id="cal_txt_filtro_fecha_hasta" value="..." class="boton_calendario" />
            <script type="text/javascript">
                Calendar.setup({
                    inputField: "txt_filtro_fecha_hasta", ifFormat: "%d/%m/%Y", button: "cal_txt_filtro_fecha_hasta", onUpdate: function(){
                        //setAdmBuscadorTop("os_orden_servicio_gestion");
                    }
                });
            </script>
        </div>
    </div>
    
    <div class="col os-tipo-resolucion">
        <div class="label">
            <?php Lang::_lang("Venc en Prox Dias"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_cantidad_dias_limite_resolucion", Gral::getCmbFiltro(Gral::getCantidadsCmb(), "..."), $cmb_filtro_cantidad_dias_limite_resolucion, "textbox") ?>
            
        </div>
    </div>
    
    <div class="col">
        <div class="label">
            <?php Lang::_lang("Busqueda rapida (2 letras min)"); ?>
        </div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>
    
    <div class="col botonera">
        <input id='btn_buscar' name='btn_buscar' type='button' class="boton" value='<?php Lang::_lang('Buscar') ?>' />
    </div>
    
    <div class="col">
            <div class="label"><?php Lang::_lang("Cant por Pag"); ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo OsOrdenServicio::getSesPagCantidad() ?>" title="<?php Lang::_lang("Actualmente se visualizan"); ?> <?php echo OsOrdenServicio::getSesPagCantidad() ?> <?php Lang::_lang("OsOrdenServicio"); ?> <?php Lang::_lang("por Pagina"); ?>" />
    </div>
    
    <div class="col">
        
        <?php if(UsCredencial::getEsAcreditado("OS_ORDEN_SERVICIO_GESTION_ACCION_TOP_CARGA")): ?>
        <a class="boton agregar" href="#" title="<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('OsOrdenServicio') ?>">
            <img src="imgs/btn_add.gif" width="25">
        </a>
	<?php endif; ?>
        
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>">
            <img src="imgs/refresh.gif" width="25">
        </label>
    </div>
    
</form>