<?php
$widget_modulo_desde = date('Y-m-d');
$widget_modulo_hasta = date('Y-m-d');
$cmb_visualizacion = GralSiNo::GRAL_SINO_CI_IMPORTE;
?>
<div class="gen-widget-modulo-buscador">

    <form id='widget_modulo_<?php echo $codigo ?>_buscador_form' name='widget_modulo_<?php echo $codigo ?>_buscador_form'>

        <div class='col par'>
            <div class='label'>Desde</div>
            <div class='dato'>
                <input type='text' size='8' class='textbox date' id='widget_modulo_<?php echo $codigo ?>_txt_desde' name='widget_modulo_<?php echo $codigo ?>_txt_desde' value='<?php Gral::_echo(Gral::getFechaToWeb($widget_modulo_desde)) ?>' filtro="widget_txt_desde" />
                <input type='button' id='cal_widget_modulo_<?php echo $codigo ?>_txt_desde' class='btn-calendario' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'widget_modulo_<?php echo $codigo ?>_txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_widget_modulo_<?php echo $codigo ?>_txt_desde'
                    });
                </script>
            </div>
        </div>

        <div class='col par'>
            <div class=label>Hasta</div>
            <div class='dato'>
                <input type='text' size='8' class='textbox date' id='widget_modulo_<?php echo $codigo ?>_txt_hasta' name='widget_modulo_<?php echo $codigo ?>_txt_hasta' value='<?php Gral::_echo(Gral::getFechaToWeb($widget_modulo_hasta)) ?>' filtro="widget_txt_hasta" />
                <input type='button' id='cal_widget_modulo_<?php echo $codigo ?>_txt_hasta' class='btn-calendario' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'widget_modulo_<?php echo $codigo ?>_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_modulo_<?php echo $codigo ?>_txt_hasta'
                    });
                </script>
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Cliente'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmbXAlcance(true), '...'), $widget_modulo_cmb_cli_cliente_id, 'textbox widget_modulo_cmb_cli_cliente_id ' . $error_input_css, $ancho = '', 'filtro="widget_cmb_cli_cliente_id"'); ?>
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Vendedor'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $widget_modulo_cmb_vta_vendedor_id, 'textbox' . $error_input_css, $ancho = '', 'filtro="widget_cmb_vta_vendedor_id"'); ?>
            </div>
        </div>

        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Sucursal'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $widget_modulo_cmb_gral_sucursal_id, 'textbox ' . $error_input_css, $ancho = '', 'filtro="widget_cmb_gral_sucursal_id"'); ?>
            </div>
        </div>

        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Categoria'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $widget_modulo_cmb_ins_categoria_id, 'textbox'. $error_input_css, $ancho = '', 'filtro="widget_cmb_ins_categoria_id"'); ?>
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Actividad'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(true), '...'), $widget_modulo_cmb_gral_actividad_id, 'textbox ' . $error_input_css, $ancho = '', 'filtro="widget_cmb_gral_actividad_id"'); ?>
            </div>
        </div>

        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Escenario'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(true), '...'), $widget_modulo_cmb_gral_escenario_id, 'textbox ' . $error_input_css, $ancho = '', 'filtro="widget_cmb_gral_escenario_id"'); ?>
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Etiqueta'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $widget_modulo_cmb_ins_etiqueta_id, 'textbox'. $error_input_css, $ancho = '', 'filtro="widget_cmb_ins_etiqueta_id"'); ?>
            </div>
        </div>

        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Visualizacion'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_modulo_' . $codigo . '_cmb_visualizacion', GralSiNo::getTipoVisualizacionCantidadImporteCmb(), $cmb_visualizacion, 'textbox ' . $error_input_css, $ancho = '', 'filtro="widget_cmb_visualizacion"'); ?>
            </div>
        </div>
        
        <div class='col botonera'>
            <button type='button' id='widget_modulo_<?php echo $codigo ?>_btn_buscar' name='widget_modulo_<?php echo $codigo ?>_btn_buscar' class='boton boton-buscar'>Buscar</button>
        </div>
    </form>  

</div>