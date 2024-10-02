<?php
include "_autoload.php";
unset($_SESSION['vta_comision_cheque_info']);

$var_sesion_random = '_' . rand(1, 999999);

foreach ($_SESSION as $key => $value) {
    // se limpia la variable de info de cheque
    //if (strpos($key, 'vta_comision_cheque_info') === 0)
    //    unset($_SESSION[$key]);
}


$txt_fecha_desde = Date::sumarDias(date('Y-m-d'), -15);
$txt_fecha_hasta = date('Y-m-d');
?>

<div class="datos vta-comision-agregar" var_sesion_random='<?php echo $var_sesion_random; ?>'>

    <div class="buscador">

        <div class="col fecha fecha-desde">
            <div class="label"><?php Lang::_lang('Desde') ?></div>
            <div class="dato">
                <input id="txt_fecha_desde" name="txt_fecha_desde" type="text" class="textbox date" size="10" value="<?php echo Gral::getFechaToWEB($txt_fecha_desde) ?>" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                <input type="button" id="cal_txt_fecha_desde" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_desde', onUpdate: function () {
                            $("#cmb_ver_todos").trigger('change');
                        }
                    });
                </script>
            </div>
        </div>

        <div class="col fecha fecha-hasta">
            <div class="label"><?php Lang::_lang('Hasta') ?></div>
            <div class="dato">
                <input id="txt_fecha_hasta" name="txt_fecha_hasta" type="text" class="textbox date" size="10" value="<?php echo Gral::getFechaToWEB($txt_fecha_hasta) ?>" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                <input type="button" id="cal_txt_fecha_hasta" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_hasta', onUpdate: function () {
                            $("#cmb_ver_todos").trigger('change');
                        }
                    });
                </script>
            </div>
        </div>

        <div class="col si-no" style="display: nonex;">
            <div class="label">
                <?php Lang::_lang('Ver Todos'); ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ver_todos', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_ver_todos, 'textbox cmb_filtro_comprobantes ' . $error_input_css) ?>
                <div id="cmb_ver_todos_error" class="error label-error" ><?php Gral::_echo($cmb_ver_todos_error) ?></div>
            </div>
        </div>

        <div class="col si-no" style="display: nonex;">
            <div class="label">
                <?php Lang::_lang('Ver Otros'); ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ver_otros', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_ver_otros, 'textbox cmb_filtro_comprobantes ' . $error_input_css) ?>
                <div id="cmb_ver_otros_error" class="error label-error" ><?php Gral::_echo($cmb_ver_otros_error) ?></div>
            </div>
        </div>
        
        <div class="col comisionista">
            <div class="label">
                <?php Lang::_lang('Preventista'); ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), $cmb_vta_preventista_id, 'textbox cmb_filtro_comprobantes cmb_vta_comisionista_id ' . $error_input_css) ?>
                <div id="cmb_vta_preventista_id_error" class="error label-error" ><?php Gral::_echo($cmb_vta_preventista_id_error) ?></div>   
            </div>
        </div>

        <div class="col comisionista">
            <div class="label">
                <?php Lang::_lang('Comprador'); ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), $cmb_vta_comprador_id, 'textbox cmb_filtro_comprobantes cmb_vta_comisionista_id ' . $error_input_css) ?>
                <div id="cmb_vta_comprador_id_error" class="error label-error" ><?php Gral::_echo($cmb_vta_comprador_id_error) ?></div>   
            </div>
        </div>

        <div class="col comisionista">
            <div class="label">
                <?php Lang::_lang('Vendedor'); ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $cmb_vta_vendedor_id, 'textbox cmb_filtro_comprobantes cmb_vta_comisionista_id ' . $error_input_css) ?>
                <div id="cmb_vta_vendedor_id_error" class="error label-error" ><?php Gral::_echo($cmb_vta_vendedor_id_error) ?></div>   
            </div>
        </div>

        <div class="col">
            <div class="label">
                <?php Lang::_lang('Actividad'); ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $cmb_gral_actividad_id, 'textbox cmb_filtro_comprobantes ' . $error_input_css) ?>
            </div>
        </div>

        <div class="col">
            <div class="label">
                <?php Lang::_lang('Escenario'); ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(), '...'), $cmb_gral_escenario_id, 'textbox cmb_filtro_comprobantes ' . $error_input_css) ?>
            </div>
        </div>

    </div>


    <div class="div_datos_agregar_vta_comision">

    </div>
</div>
