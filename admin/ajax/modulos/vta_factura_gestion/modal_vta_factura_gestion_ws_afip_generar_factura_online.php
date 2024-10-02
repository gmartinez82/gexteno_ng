<?php
include "_autoload.php";

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);

//$vta_factura->setAutorizarDE_SIFEN();

?>

<div class="datos generar-factura-online-afip" vta_factura_id="<?php Gral::_echo($vta_factura->getId()) ?>">
    <form id='form_generar_factura_online_afip' name='form_generar_factura_online_afip' method='POST' action='' >

        <div class="par">
            <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
            <div class="dato"><?php Gral::_echo($vta_factura->getGralCondicionIva()->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato"><?php Gral::_echo($vta_factura->getVtaTipoFactura()->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Factura') ?></div>
            <div class="dato"><?php Gral::_echo($vta_factura->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Facturar a') ?></div>
            <div class="dato">
                <input name='txt_persona_descripcion' type='text' class='textbox' id='txt_persona_descripcion' value='<?php Gral::_echoTxt($vta_factura->getPersonaDescripcion()) ?>' size='40' />
                <div class="label-error" id="txt_persona_descripcion_error"><?php Gral::_echo($txt_persona_descripcion_error) ?></div>  
            </div>
        </div>            

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Doc') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), $vta_factura->getGralTipoDocumentoId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_tipo_documento_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Documento') ?></div>
            <div class="dato">
                <input name='txt_persona_documento' type='text' class='textbox' id='txt_persona_documento' value='<?php Gral::_echoTxt($vta_factura->getPersonaDocumento()) ?>' size='20' />
                <div class="label-error" id="txt_persona_documento_error"><?php Gral::_echo($txt_persona_documento_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <input name='txt_persona_email' type='text' class='textbox' id='txt_persona_email' value='<?php Gral::_echoTxt($vta_factura->getPersonaEmail()) ?>' size='40' />
                <div class="label-error" id="txt_persona_email_error"><?php Gral::_echo($txt_persona_email_error) ?></div>  
            </div>
        </div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='2' cols='70' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="label-mensaje-alerta">La fecha del comprobante se actualizará a fecha actual.</div>

        <div class="botonera">
            <div class="label-error" id="error_general_error"></div>
            
            <button class="boton" id='btn_generar_factura_online_afip' name='btn_generar_factura_online_afip' type='button' class='btn_generar_factura_online_afip'><?php Lang::_lang('Autorizar Comprobante en SIFEN') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitVtaFacturaGestion();
</script>

