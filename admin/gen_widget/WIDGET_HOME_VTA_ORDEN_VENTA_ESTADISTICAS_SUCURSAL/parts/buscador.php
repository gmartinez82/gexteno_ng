<?php
$gral_sucursales_cmb = GralSucursal::getGralSucursalsCmbPorAlcance($vta_vendedor_autenticado);
$vta_vendedors_cmb = VtaVendedor::getVtaVendedorsCmbXAlcance();
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
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Sucursal'); ?>
        </div>
        <div class='dato'>
            <?php 
            if(count($gral_sucursales_cmb) > 1){
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', Gral::getCmbFiltro($gral_sucursales_cmb, '...'), $widget_cmb_gral_sucursal_id, 'textbox widget_cmb_gral_sucursal_id '. $error_input_css);
            }else{
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', $gral_sucursales_cmb, $widget_cmb_gral_sucursal_id, 'textbox widget_cmb_gral_sucursal_id '. $error_input_css);
            }
            ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Vendedor'); ?>
        </div>
        <div class='dato'>
            <?php //Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $widget_cmb_vta_vendedor_id, 'textbox widget_cmb_vta_vendedor_id '. $error_input_css); ?>
            <?php 
            if(count($vta_vendedors_cmb) > 1){
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', Gral::getCmbFiltro($vta_vendedors_cmb, '...'), $widget_cmb_vta_vendedor_id, 'textbox widget_cmb_vta_vendedor_id '. $error_input_css);                 
            }else{
                Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_vendedor_id', $vta_vendedors_cmb, $widget_cmb_vta_vendedor_id, 'textbox widget_cmb_vta_vendedor_id '. $error_input_css);                 
            }
            ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Cliente'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $widget_cmb_cli_cliente_id, 'textbox widget_cmb_cli_cliente_id selective-input-filtro '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Categoria'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(true), '...'), $widget_cmb_cli_categoria_id, 'textbox widget_cmb_cli_categoria_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Rubro'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_cli_rubro_id', Gral::getCmbFiltro(CliRubro::getCliRubrosCmb(true), '...'), $widget_cmb_cli_rubro_id, 'textbox widget_cmb_cli_rubro_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Etiqueta'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $widget_cmb_ins_etiqueta_id, 'textbox widget_cmb_ins_etiqueta_id'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Actividad'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(true), '...'), $widget_cmb_gral_actividad_id, 'textbox widget_cmb_gral_actividad_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Escenario'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(true), '...'), $widget_cmb_gral_escenario_id, 'textbox widget_cmb_gral_escenario_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Cant. Ranking'); ?>
        </div>
        <div class='dato'>
            <input id='widget_<?php echo $widget_key ?>_txt_cantidad' name='widget_<?php echo $widget_key ?>_txt_cantidad'  size='3' class='textbox spinner'  type='text' value='<?php Gral::_echo($txt_cantidad) ?>' />
        </div>
    </div>
    
    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>