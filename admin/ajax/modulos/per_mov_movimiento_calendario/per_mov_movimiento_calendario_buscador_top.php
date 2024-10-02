<?php
$txt_filtro_fecha_desde = PerPersona::getSesFiltroFechaDesde();
?>
<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_calendario_buscador_top.php">

    <div class="col gral-empresa">
        <div class="label">
            <?php Lang::_lang("Empresa"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_gral_empresa_id", Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true, true), "..."), $cmb_filtro_gral_empresa_id, "textbox") ?>
        </div>
    </div>

    <div class="col co-centro-operativo">
        <div class="label">
            <?php Lang::_lang("Tipo Estado"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_per_tipo_estado_id", Gral::getCmbFiltro(PerTipoEstado::getPerTipoEstadosCmb(true, true), "..."), $cmb_filtro_per_tipo_estado_id, "textbox") ?>
        </div>
    </div>

    <div class="col control-horario">
        <div class="label">
            <?php Lang::_lang("Ctrl Hora"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_filtro_control_horario", Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true, true), "..."), $cmb_filtro_control_horario, "textbox") ?>
        </div>
    </div>

    <div class="col fecha_desde">
        <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
        <div class="dato">
            <input name='txt_filtro_fecha_desde' type='text' class='textbox date' id='txt_filtro_fecha_desde' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_filtro_fecha_desde)) ?>' size='5' />
            <input type='button' id='cal_txt_filtro_fecha_desde' value='...' class="boton_calendario" />
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_fecha_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_fecha_desde', onUpdate: function () {
                        //setAdmBuscadorTop('per_mov_movimiento_calendario')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant Dias'); ?></div>
        <input id="txt_cantidad_dias" name="txt_cantidad_dias" type="text" class="textbox" size="1" value="<?php Gral::_echo(PerPersona::getSesDiasPantallaCantidad()); ?>" title="" />
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag'); ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php Gral::_echo(PerPersona::getSesPagCantidad()); ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php Gral::_echo(PerPersona::getSesPagCantidad()); ?> <?php Lang::_lang('PerPersona') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div> 

    <div class="col botonera">
        <input id='btn_buscar' name='btn_buscar' type='button' class="boton" value='<?php Lang::_lang('Buscar') ?>' />
    </div>
    
</form>