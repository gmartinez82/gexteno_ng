<?php
header("Content-Type: text/xml");

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$vta_nota_credito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_id', 0, Gral::TIPO_INTEGER);
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

if($vta_nota_credito->getCae() == ''){
    echo 'El comprobante no se encuentra autorizado, no se puede cancelar.';
    exit;
}

$txa_observacion = 'Se cancela el DE por ... ';

?>
<form id="form_evento" name="fomr_evento">
    <div class="datos comprobante" >
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getCodigo()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nro Factura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getNumeroComprobanteCompleto()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Motivo de la Cancelacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='70' id='txa_observacion' class='textbox'><?php echo $txa_observacion ?></textarea>
                <div class="error label-error" id="txa_observacion_error"></div>
            </div>
        </div>
            
        <div class="botonera">
            
            <div class="error label-error label-error-general" id="error_general_error"></div>
            
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/vta_nota_credito_gestion/set_modal_sifen_de_evento_cancelar.php?vta_nota_credito_id=<?php echo $vta_nota_credito_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaNotaCreditoGestion(); refreshAdmUno('vta_nota_credito_gestion', <?php echo $vta_nota_credito_id; ?>);">
                <?php Lang::_lang('Cancelar en SIFEN') ?>
            </button>
        </div>
        
    </div>
</form>
