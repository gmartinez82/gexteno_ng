<?php
include "_autoload.php";

$modulo = Gral::getVars(Gral::VARS_GET, 'modulo', 0);
$key    = Gral::getVars(Gral::VARS_GET, 'key', 0);

$var_sesion_random = Gral::getVars(Gral::VARS_GET, 'var_sesion_random', '');
$var_sesion_modulo = $modulo.'_retencion_info'.$var_sesion_random;

$arr_vta_recibo_retencion_infos = Gral::getSes($var_sesion_modulo);

if (!is_null($arr_vta_recibo_retencion_infos[$key])) {
    $arr = $arr_vta_recibo_retencion_infos[$key];

    $txt_descripcion = $arr['descripcion'];
    $txt_numero_comprobante = $arr['numero_comprobante'];
    $txt_fecha_emision = Gral::getFechaToWeb($arr['fecha_emision']);
    $txt_importe_base_imponible = $arr['importe_base_imponible'];
    $txa_observacion = $arr['observacion'];

    //Gral::prr($arr_vta_recibo_retencion_infos[$key]);
}

//Gral::prr($arr_vta_recibo_retencion_infos);
//Gral::prr($arr_vta_recibo_retencion_infos[$key]);
?>

<form id='form_set_retencion_info' name='form_set_retencion_info' method='post' action='' modulo='<?php echo $modulo ?>' key='<?php echo $key ?>' var_sesion_random='<?php echo $var_sesion_random; ?>'>
    <div class="label-error" id="error_general_error"></div>

    <div class="datos">
        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <input name='txt_descripcion' type='text' class='textbox' id='txt_descripcion' value='<?php Gral::_echoTxt($txt_descripcion) ?>' size='40' />
                <div class="label-error" id="txt_descripcion_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nro Comprobante') ?></div>
            <div class="dato">
                <input name='txt_numero_comprobante' type='text' class='textbox' id='txt_numero_comprobante' value='<?php Gral::_echoTxt($txt_numero_comprobante) ?>' size='20' />
                <div class="label-error" id="txt_numero_comprobante_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <input id="txt_fecha_emision" name="txt_fecha_emision" type="text" class="textbox date" size="9" value="<?php Gral::_echoTxt($txt_fecha_emision) ?>" title="<?php Lang::_lang('Ingrese la fecha de Emision') ?>" />
                <input type="button" id="cal_txt_fecha_emision" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_emision', onUpdate: function () {
                            //setAdmBuscadorTop('vta_remito_gestion')
                        }
                    });
                </script>
                <div class="label-error" id="txt_fecha_emision_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Base Imponible') ?></div>
            <div class="dato">
                <input name='txt_importe_base_imponible' type='text' class='textbox moneda' id='txt_importe_base_imponible' value='<?php Gral::_echoTxt($txt_importe_base_imponible) ?>' size='20' />
                <div class="label-error" id="txt_importe_base_imponible_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton btn_guardar" id='btn_guardar' name='btn_guardar' type='button'><?php Lang::_lang('Guardar Datos de la Retencion') ?></button>
        </div>
    </div>
</form>

<script>
    setInit();
    setInitVtaReciboGestion();
</script>