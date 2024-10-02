<?php
include "_autoload.php";

$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_id', 0);
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);

$vta_ajuste_debe_importe_total = $vta_ajuste_debe->getVtaAjusteDebeTotal();

// se inicializa variable de configuracion 
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();

$arr_comprobantes_afip = $vta_ajuste_debe->getWsFeOpeSolicitudConNroComprobanteAutorizadoEnAfip();
//Gral::prr($arr_comprobantes_afip);

$afip_codigo_autorizacion = '';
$afip_codigo_autorizacion_existe = false;
if($arr_comprobantes_afip && is_array($arr_comprobantes_afip)){
    foreach($arr_comprobantes_afip as $arr_comprobante_afip){
        $afip_codigo_autorizacion = $arr_comprobante_afip['codigo_autorizacion'];
        if(trim($afip_codigo_autorizacion) != ''){
            $afip_codigo_autorizacion_existe = true;            
            
            $afip_comprobante_desde = $arr_comprobante_afip['comprobante_desde'];
            $afip_fecha_proceso = $arr_comprobante_afip['fecha_proceso'];
        }
    }
}
?>
<?php if(!$afip_codigo_autorizacion_existe){ ?>

<div class="datos generar-ajuste-debe-online-afip" vta_ajuste_debe_id="<?php Gral::_echo($vta_ajuste_debe->getId()) ?>">
    <form id='form_generar_factura_online_afip' name='form_generar_factura_online_afip' method='POST' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
            <div class="dato"><?php Gral::_echo($vta_ajuste_debe->getGralCondicionIva()->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato"><?php Gral::_echo($vta_ajuste_debe->getVtaTipoAjusteDebe()->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('AjusteDebe') ?></div>
            <div class="dato"><?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Ajustar Debe a') ?></div>
            <div class="dato">
                <input name='txt_persona_descripcion' type='text' class='textbox' id='txt_persona_descripcion' value='<?php Gral::_echoTxt($vta_ajuste_debe->getPersonaDescripcion()) ?>' size='40' />
                <div class="label-error" id="txt_persona_descripcion_error"><?php Gral::_echo($txt_persona_descripcion_error) ?></div>  
            </div>
        </div>            

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Doc') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), $vta_ajuste_debe->getGralTipoDocumentoId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_tipo_documento_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Documento') ?></div>
            <div class="dato">
                <input name='txt_persona_documento' type='text' class='textbox' id='txt_persona_documento' value='<?php Gral::_echoTxt($vta_ajuste_debe->getPersonaDocumento()) ?>' size='20' />
                <div class="label-error" id="txt_persona_documento_error"><?php Gral::_echo($txt_persona_documento_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <input name='txt_persona_email' type='text' class='textbox' id='txt_persona_email' value='<?php Gral::_echoTxt($vta_ajuste_debe->getPersonaEmail()) ?>' size='40' />
                <div class="label-error" id="txt_persona_email_error"><?php Gral::_echo($txt_persona_email_error) ?></div>  
            </div>
        </div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <?php if ($vta_ajuste_debe_importe_total >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) { ?>                    
            <div class="consumidor-final-solicitud-datos-alerta">
                El importe facturado supera los <?php Gral::_echoImp($cv_importe_minimo_exigencia_info_comprador_consumidor_final) ?> por lo que se debera solicitar informacion del comprador.
            </div>
        <?php } ?>   


        <div class="label-error" id="generar_factura_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_factura_online_afip' name='btn_generar_factura_online_afip' type='button' class='btn_generar_factura_online_afip'><?php Lang::_lang('Generar AjusteDebe Online AFIP') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitVtaAjusteDebeGestion();
</script>

<?php }else{ ?>
    Se ha encontrado una ANOMALIA en el comprobante. 
    <br />
    El comprobante parece ya haber sido autorizado, con el numero <?php echo str_pad($afip_comprobante_desde, 8, 0, STR_PAD_LEFT) ?> con el CAE <?php echo $afip_codigo_autorizacion ?> el <?php echo $afip_fecha_proceso ?>.
    <br />
    <br />
    Por favor comuniquese con el administrador del sistema para regularizar el caso.
<?php } ?>
