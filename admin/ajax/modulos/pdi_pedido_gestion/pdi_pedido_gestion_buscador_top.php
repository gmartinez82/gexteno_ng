<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/pdi_pedido_gestion/set_pdi_pedido_gestion_buscador_top.php">

    
    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde',onUpdate: function(){setAdmBuscadorTop('pdi_pedido_gestion')}
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
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta',onUpdate: function(){setAdmBuscadorTop('pdi_pedido_gestion')}
                });
            </script>
        </div>
    </div>
    
    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Deposito Origen') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pan_panol_origen', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true), '...'), $cmb_filtro_pan_panol_origen, 'textbox') ?>
        </div>
    </div>

    
    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Deposito Destino') ?></div>
        <div class="dato">
    <?php Html::html_dib_select(1, 'cmb_filtro_pan_panol_destino', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true), '...'), $cmb_filtro_pan_panol_destino, 'textbox') ?>
        </div>
    </div>

    <div class="col categoria" style="display: nonex;">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox') ?>
        </div>
    </div>

    <div class="col insumo" style="display: none;">
        <div class="label"><?php Lang::_lang('Insumo') ?></div>
        <div class="dato">
            <?php //Html::html_dib_select(1, 'cmb_filtro_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(true), '...'), $cmb_filtro_ins_insumo_id, 'textbox') ?>
        </div>
    </div>

    <div class="col estado">
        <div class="label"><?php Lang::_lang('Tipo de Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pdi_estado_id', Gral::getCmbFiltro(PdiTipoEstado::getPdiTipoEstadosGestionablesCmb(), '...'), $cmb_filtro_pdi_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col estado" style="display: nonex;">
        <div class="label"><?php Lang::_lang('Tipo de Origen') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pdi_tipo_origen_id', Gral::getCmbFiltro(PdiTipoOrigen::getPdiTipoOrigensCmb(true), '...'), $cmb_filtro_pdi_tipo_origen_id, 'textbox') ?>
        </div>
    </div>

    <div class="col activo">
        <div class="label"><?php Lang::_lang('Activo') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_filtro_activo, 'textbox') ?>
        </div>
    </div>

    <!--
    <div class="col destacado">
        <div class="label"><?php Lang::_lang('Destacado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_destacado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_filtro_destacado, 'textbox') ?>
        </div>
    </div>
    -->
    
    <!--
    <div class="col leido">
        <div class="label"><?php Lang::_lang('Leido') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_leido', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_filtro_leido, 'textbox') ?>
        </div>
    </div>
    -->

    <div class="col requiere-atencion" style="display:none;">
        <div class="label"><?php Lang::_lang('Req Atenc') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_requiere_atencion', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_filtro_requiere_atencion, 'textbox') ?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Buscador') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="10" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="1" value="<?php echo PdiPedido::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PdiPedido::getSesPagCantidad() ?> <?php Lang::_lang('PdiPedido') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col botonera">

        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_TOP_ACCION_AGREGAR_PDI')) { ?>
            <a class="boton agregar-pedido" href='pdi_pedido_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdiPedido') ?>'><img src="imgs/btn_add.gif" width="25" alt="pedido"></a>
        <?php } ?>

        <!--
        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_TOP_ACCION_AGREGAR_AJUSTE')) { ?>
            <a class="boton agregar-ajuste" href='pdi_pedido_ajuste.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('Ajustes de Stock') ?>'><img src="imgs/btn_ajuste.png" width="24" alt="ajuste"></a>
        <?php } ?>
        -->

        <!--
        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_TOP_ACCION_ENTREGA_OPERARIO')) { ?>
                                <a class="boton agregar-entrega-operario" href='#' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('Entrega a Operario') ?>'><img src="imgs/btn_operario.gif" width="22" alt="operario"></a>
        <?php } ?>
        -->

        <!--
        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_TOP_ACCION_IMPUTAR_MASIVO')) { ?>
                                <a class="boton agregar-imputacion-masiva" href='#' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('Imputacion Masiva') ?>'><img src="imgs/btn_ficha.png" width="18" alt="operario"></a>
        <?php } ?>
        -->

        <!--
        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_TOP_ACCION_AGREGAR_PDE')) { ?>
                                <a class="boton agregar-pedido-pde" href='pde_pedido_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdePedido') ?>'><img src="imgs/btn_comprar.png" width="15" alt="compra"></a>
        <?php } ?>
        -->

        <!--
        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_TOP_ACCION_TIPO_ASIGNACION')) { ?>
                                <label class="boton cambiar-tipo-asignacion" title="<?php Lang::_lang('Cambiar Tipo de Asignacion') ?>"><img src="imgs/btn_candado_1.png" width="23" alt="tipo asignacion"></label>
        <?php } ?>
        -->

        <?php if (false) { ?>
            <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='pdi_pedido'><img src="imgs/btn_lupa.png" width="25" alt="buscador"></label>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>

    </div>
</form>

