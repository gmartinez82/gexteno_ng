<?php
include "_autoload.php";

$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);
$hoja_ruta_tipo_estado_codigo = Gral::getVars(Gral::VARS_GET, 'hoja_ruta_tipo_estado_codigo', 0, Gral::TIPO_STRING);

$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);
$vta_hoja_ruta_tipo_estado = VtaHojaRutaTipoEstado::getOxCodigo($hoja_ruta_tipo_estado_codigo);
$ope_chofer_id = $vta_hoja_ruta->getOpeChoferId();

?>

<form id='form_cambiar_estado' name='form_cambiar_estado' method='post' action='' >
    <div class="datos cambiar-estado" >                
        <div class="label-error" id="error_general_error"></div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getCodigo()); ?>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Cambiar estado a'); ?>
            </div>
            <div class='dato'>
                <?php Gral::_echo($vta_hoja_ruta_tipo_estado->getDescripcion()); ?>
            </div>
        </div>
        
        <?php //if($vta_hoja_ruta_tipo_estado->getCodigo() == VtaHojaRutaTipoEstado::TIPO_EN_RUTA): ?>
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Chofer'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_ope_chofer_id', Gral::getCmbFiltro(OpeChofer::getOpeChofersCmb(true), '...'), $ope_chofer_id, 'textbox '); ?>
                <div id='cmb_ope_chofer_id_error' class='label-error'></div>
            </div>
        </div>
        <?php //endif; ?>
        
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Observacion'); ?>
            </div>
            <div class='dato'>
                <textarea id='txa_observacion' name='txa_observacion' rows='10' cols='50' class='textbox'><?php Gral::_echoTxt($observacion); ?></textarea>
                <div id='txa_observacion_error' class='label-error'></div>
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/vta_hoja_ruta_gestion/set_modal_hoja_ruta_cambiar_estado.php?vta_hoja_ruta_id=<?php echo $vta_hoja_ruta_id; ?>&hoja_ruta_tipo_estado_codigo=<?php echo $hoja_ruta_tipo_estado_codigo; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaHojaRutaGestion(); refreshAdmUno('vta_hoja_ruta_gestion', <?php echo $vta_hoja_ruta_id; ?>);"><?php Lang::_lang('Cambiar Estado') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitVtaHojaRutaGestion();
</script>