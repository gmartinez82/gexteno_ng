<?php
include "_autoload.php";

$vta_nota_credito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_id', 0);
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

$vta_nota_credito->setAutorizarDE_SIFEN();

?>
<div class="datos generar-nota-credito-online-afip" vta_nota_credito_id="<?php Gral::_echo($vta_nota_credito->getId()) ?>">
    <form id='form_generar_nota_credito_online_afip' name='form_generar_nota_credito_online_afip' method='POST' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Nota de Credito') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_credito->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_credito->getPersonaDocumento()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_credito->getVtaTipoNotaCredito()->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        
        <div class="label-mensaje-alerta">La fecha del comprobante se actualizará a fecha actual.</div>
        
        <div class="label-error" id="generar_nota_credito_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_nota_credito_online_afip' name='btn_generar_nota_credito_online_afip' type='button' class='btn_generar_nota_credito_online_afip'><?php Lang::_lang('Autorizar Comprobante en SIFEN') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitVtaNotaCreditoGestion();
</script>

