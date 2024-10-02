<?php
include "_autoload.php";

$cntb_ejercicio_actual = CntbEjercicio::getCntbEjercicioActual();
$txt_fecha_desde = Date::sumarDias(date('Y-m-d'), -7);
$txt_fecha_hasta = date('d/m/Y');

?>
<form id="cntb_diario_asiento_ver_libro_diario" name="cntb_diario_asiento_ver_libro_diario">
    <div class="datos cntb_diario_asiento_agregar">

        <div class="par">
            <div class="label">Ejercicio</div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_cntb_ejercicio_id', CntbEjercicio::getCntbEjerciciosCmb(), $cntb_ejercicio_actual->getId(), 'textbox ' . $error_input_css) ?>
                <div class="label-error" id="cmb_cntb_ejercicio_id_error"></div>
            </div>
        </div>
        <div class="par">
            <div class="label">Tipo de Asiento</div>
            <div class="dato">                    
                <?php Html::html_dib_select(1, 'cmb_cntb_tipo_asiento_id', Gral::getCmbFiltro(CntbTipoAsiento::getCntbTipoAsientosCmb(), '...'), 0, 'textbox ' . $error_input_css) ?>
                <div class="label-error" id="cmb_cntb_tipo_asiento_id_error"></div>
            </div>
        </div>
        <div class="par">
            <div class="label">Actividad</div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), 0, 'textbox ' . $error_input_css) ?>
                <div class="label-error" id="cmb_gral_actividad_id_error"></div>
            </div>
        </div>
        <div class="par">
            <div class="label">Tipo de Movimiento</div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_cntb_tipo_movimiento_id', Gral::getCmbFiltro(CntbTipoMovimiento::getCntbTipoMovimientosCmb(), '...'), 0, 'textbox ' . $error_input_css) ?>
                <div class="label-error" id="cmb_cntb_tipo_movimiento_id_error"></div>
            </div>
        </div>
        <div class="par">
            <div class="label">Fecha Desde</div>
            <div class="dato">
                <input name='txt_fecha_desde' type='text' class='textbox date <?php echo $error_input_css ?> ' id='txt_fecha_desde' value='<?php Gral::_echoTxt(Gral::getFechaToWEB($txt_fecha_desde), true) ?>' size='10' />
                <input type="button" id="cal_txt_fecha_desde" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_desde', onUpdate: function(){
}
                    });
                </script>
                
                <div class="label-error" id="txt_fecha_desde_error"></div>
            </div>
        </div>            
        <div class="par">
            <div class="label">Fecha Hasta</div>
            <div class="dato">
                <input name='txt_fecha_hasta' type='text' class='textbox date <?php echo $error_input_css ?> ' id='txt_fecha_hasta' value='<?php Gral::_echoTxt(Gral::getFechaToWEB($txt_fecha_hasta), true) ?>' size='10' />
                <input type="button" id="cal_txt_fecha_hasta" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_hasta', onUpdate: function(){
}
                    });
                </script>
                
                <div class="label-error" id="txt_fecha_desde_error"></div>
            </div>
        </div>            

        <div class="botonera">
            <div class="label-error" id="botonera_error"></div>
            <button type="button" id="btn_ver_diario" name="btn_ver_diario" class="boton"><?php Lang::_lang('Ver Libro Diario') ?></button>
        </div>

    </div>
</form>