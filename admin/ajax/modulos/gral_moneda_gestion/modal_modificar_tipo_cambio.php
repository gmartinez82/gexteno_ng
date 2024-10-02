<?php
include "_autoload.php";

$gral_moneda_id = Gral::getVars(Gral::VARS_GET, 'gral_moneda_id', 0, Gral::TIPO_INTEGER);
$gral_moneda_comparada_id = Gral::getVars(Gral::VARS_GET, 'gral_moneda_comparada', 0, Gral::TIPO_INTEGER);

$gral_moneda = GralMoneda::getOxId($gral_moneda_id);
$gral_moneda_comparada = GralMoneda::getOxId($gral_moneda_comparada_id);

$gral_moneda_tipo_cambio = $gral_moneda->getGralMonedaTipoCambioActual($gral_moneda_comparada);
if($gral_moneda_tipo_cambio){
    $txt_tipo_cambio = $gral_moneda_tipo_cambio->getTipoCambio();
    $txt_coeficiente_ajuste = $gral_moneda_tipo_cambio->getCoeficienteAjuste();
    $txt_tipo_cambio_real = $gral_moneda_tipo_cambio->getTipoCambioReal();
}
$txt_fecha = date('Y-m-d');
?>
<form id='form_cambiar_estado' name='form_cambiar_estado' method='post' action='' >
    <div class="datos cambiar-estado" >                
        <div class="label-error" id="error_general_error"></div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Moneda Base') ?></div>
            <div class="dato">
                <img src="<?php echo Gral::getPathHttp() ?>admin/imgs/flag_<?php Gral::_echo($gral_moneda->getCodigoIso()) ?>.png" alt="flag" width="15" />
                <?php Gral::_echo($gral_moneda->getDescripcion()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Moneda Comparada') ?></div>
            <div class="dato">
                 <img src="<?php echo Gral::getPathHttp() ?>admin/imgs/flag_<?php Gral::_echo($gral_moneda_comparada->getCodigoIso()) ?>.png" alt="flag" width="15" />
               <?php Gral::_echo($gral_moneda_comparada->getDescripcion()); ?>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Fecha'); ?>
            </div>
            <div class='dato'>
                <input id="txt_fecha" name="txt_fecha" type="text" class="textbox date" value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha)) ?>' size="10" title="<?php Lang::_lang('Ingrese la fecha') ?>" />
                <input type="button" id="cal_txt_fecha" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha', onUpdate: function () {
                        }
                    });
                </script>
                <div id='txt_fecha_error' class='label-error'></div>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Tipo de Cambio'); ?>
            </div>
            <div class='dato'>
                <input name='txt_tipo_cambio' type='text' class='textbox moneda-d5' id='txt_tipo_cambio' value='<?php echo Gral::getImporteDesdeDbToPriceFormat($txt_tipo_cambio, 5) ?>' size='15' />
                <div id='txt_tipo_cambio_error' class='label-error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Coeficiente Ajuste'); ?>
            </div>
            <div class='dato'>
                <input name='txt_coeficiente_ajuste' type='text' class='textbox moneda-d5' id='txt_coeficiente_ajuste' value='<?php echo Gral::getImporteDesdeDbToPriceFormat($txt_coeficiente_ajuste, 5) ?>' size='15' />
                <div id='txt_coeficiente_ajuste_error' class='label-error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Tipo de Cambio Real'); ?>
            </div>
            <div class='dato'>
                <?php Gral::_echo($txt_tipo_cambio_real) ?>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Observacion'); ?>
            </div>
            <div class='dato'>
                <textarea id='txa_observacion' name='txa_observacion' rows='5' cols='50' class='textbox'><?php Gral::_echoTxt($observacion); ?></textarea>
                <div id='txa_observacion_error' class='label-error'></div>
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/gral_moneda_gestion/set_modal_modificar_tipo_cambio.php?gral_moneda_id=<?php echo $gral_moneda_id; ?>&gral_moneda_comparada=<?php echo $gral_moneda_comparada->getId() ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitGralMonedaGestion(); refreshAdmUno('gral_moneda_gestion', <?php echo $gral_moneda_id; ?>);"><?php Lang::_lang('Guardar Datos') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitGralMonedaGestion();
</script>