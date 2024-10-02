<?php
$gral_sucursales_cmb = GralSucursal::getGralSucursalsCmbPorAlcanceYDetalleClientes(false);
$vta_vendedors_cmb = VtaVendedor::getVtaVendedorsCmbXAlcanceYDetalleClientes(false);
?>
<form id='widget_<?php echo $widget_key ?>_form' name='widget_<?php echo $widget_key ?>_form'>
    
    <div class='col par'>
        <div class='label'>Desde</div>
        <div class='dato'>
            <input type='text' size='8' class='textbox date widget_txt_desde' id='widget_<?php echo $widget_key ?>_txt_desde' name='widget_<?php echo $widget_key ?>_txt_desde' value='<?php Gral::_echo(Gral::getFechaToWeb($txt_desde)) ?>' />
            <input type='button' id='cal_widget_<?php echo $widget_key ?>_txt_desde' class='btn-calendario' value='...' />
            
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_<?php echo $widget_key ?>_txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_widget_<?php echo $widget_key ?>_txt_desde'
                });
            </script>
        </div>
    </div>
    
    <div class='col par'>
        <div class=label>Hasta</div>
        <div class='dato'>
            <input type='text' size='8' class='textbox date widget_txt_hasta' id='widget_<?php echo $widget_key ?>_txt_hasta' name='widget_<?php echo $widget_key ?>_txt_hasta' value='<?php Gral::_echo(Gral::getFechaToWeb($txt_hasta)) ?>' />
            <input type='button' id='cal_widget_<?php echo $widget_key ?>_txt_hasta' class='btn-calendario' value='...' />
            
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_<?php echo $widget_key ?>_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_<?php echo $widget_key ?>_txt_hasta'
                });
            </script>
        </div>
    </div>
    
    <div class='col par' style="display: <?php echo $us_usuario_autenticado->esUsuarioAuditorVentas() ? '' : 'none' ?>;">
        <div class='label'>
            <?php Lang::_lang('Busqueda'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_busqueda', GralSiNo::getOrdenamientoVendedorBusquedaCmb(), $cmb_busqueda, 'textbox widget_cmb_busqueda '. $error_input_css); ?>
        </div>
    </div>    
    
    <div class='col par POR_VINCULO <?php echo GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL ?> ?>' style="display:<?php echo($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) ? '' : 'none' ?>;">
        <div class='label'>
            <?php Lang::_lang('Sucursal'); ?>
        </div>
        <div class='dato'>
            <?php 
            if(count($gral_sucursales_cmb) > 1){
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', Gral::getCmbFiltro($gral_sucursales_cmb, '...'), $widget_cmb_gral_sucursal_id, 'textbox widget_cmb_gral_sucursal_id '. $error_input_css);
                //Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', $gral_sucursales_cmb, $widget_cmb_gral_sucursal_id, 'textbox widget_cmb_gral_sucursal_id '. $error_input_css);
            }else{
                //Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', Gral::getCmbFiltro($gral_sucursales_cmb, '...'), $widget_cmb_gral_sucursal_id, 'textbox widget_cmb_gral_sucursal_id '. $error_input_css);
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', $gral_sucursales_cmb, $widget_cmb_gral_sucursal_id, 'textbox widget_cmb_gral_sucursal_id '. $error_input_css);
            }
            ?>
        </div>
    </div>

    <div class='col par POR_VINCULO <?php echo GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL ?> ?>' style="display:<?php echo($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) ? '' : 'none' ?>;">
        <div class='label'>
            <?php Lang::_lang('Automatico'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_sucursal_vinculo_automatico', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_sucursal_vinculo_automatico, 'textbox widget_cmb_sucursal_vinculo_automatico '. $error_input_css); ?>
        </div>
    </div>

    <div class='col par POR_VINCULO <?php echo GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL ?> ?>' style="display:<?php echo($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL) ? '' : 'none' ?>;">
        <div class='label'>
            <?php Lang::_lang('Tipo Gestion'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_cli_cliente_tipo_gestion_id', Gral::getCmbFiltro(CliClienteTipoGestion::getCliClienteTipoGestionsCmb(true), '...'), $cmb_cli_cliente_tipo_gestion_id, 'textbox widget_cmb_cli_cliente_tipo_gestion_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par' style="display: none;">
        <div class='label'>
            <?php Lang::_lang('Sucursal Vinc'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_con_sucursal_vinculada', GralSiNo::getGralSiNosCmb(), $cmb_con_sucursal_vinculada, 'textbox widget_cmb_con_sucursal_vinculada '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par POR_VINCULO <?php echo GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR ?> ?>' style="display:<?php echo($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR) ? '' : 'none' ?>;">
        <div class='label'>
            <?php Lang::_lang('Vendedor'); ?>
        </div>
        <div class='dato'>
            <?php 
            if(count($vta_vendedors_cmb) > 1){
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', Gral::getCmbFiltro($vta_vendedors_cmb, '...'), $widget_cmb_vta_vendedor_id, 'textbox widget_cmb_vta_vendedor_id '. $error_input_css);
                //Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', $vta_vendedors_cmb, $widget_cmb_vta_vendedor_id, 'textbox widget_cmb_vta_vendedor_id '. $error_input_css);                 
            }else{
                //Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', Gral::getCmbFiltro($vta_vendedors_cmb, '...'), $widget_cmb_vta_vendedor_id, 'textbox widget_cmb_vta_vendedor_id '. $error_input_css);
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', $vta_vendedors_cmb, $widget_cmb_vta_vendedor_id, 'textbox widget_cmb_vta_vendedor_id '. $error_input_css);                 
            }
            ?>
        </div>
    </div>
    
    <div class='col par' style="display: none;">
        <div class='label'>
            <?php Lang::_lang('Vendedor Vinc'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_con_vendedor_vinculado', GralSiNo::getGralSiNosCmb(), $cmb_con_vendedor_vinculado, 'textbox widget_cmb_con_vendedor_vinculado '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Solo Propias'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_solo_propias', GralSiNo::getGralSiNosCmb(), $cmb_solo_propias, 'textbox widget_cmb_solo_propias '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Tipo Emision'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_presupuesto_tipo_emision_id', Gral::getCmbFiltro(VtaPresupuestoTipoEmision::getVtaPresupuestoTipoEmisionsCmb(true), '...'), $widget_cmb_vta_presupuesto_tipo_emision_id, 'textbox widget_cmb_vta_presupuesto_tipo_emision_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Ordenamiento'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ordenamiento', GralSiNo::getOrdenamientoVendedorCmb(), $cmb_ordenamiento, 'textbox widget_cmb_ordenamiento '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Modo'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ordenamiento_modo', GralSiNo::getOrdenamientoModoCmb(), $cmb_ordenamiento_modo, 'textbox widget_cmb_ordenamiento_modo '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>