<?php
include "_autoload.php";

$vta_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_debito_id', 0);
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);

$vta_nota_debito_importe_total = $vta_nota_debito->getVtaNotaDebitoTotal();


$arr_comprobantes_afip = $vta_nota_debito->getWsFeOpeSolicitudConNroComprobanteAutorizadoEnAfip();
//Gral::prr($arr_comprobantes_afip);

$afip_codigo_autorizacion = '';
$afip_codigo_autorizacion_existe = false;
if ($arr_comprobantes_afip && is_array($arr_comprobantes_afip)) {
    foreach ($arr_comprobantes_afip as $ws_fe_ope_solicitud_id => $arr_comprobante_afip) {
        $afip_codigo_autorizacion = $arr_comprobante_afip['codigo_autorizacion'];
        if (trim($afip_codigo_autorizacion) != '') {
            $afip_codigo_autorizacion_existe = true;

            $afip_comprobante_desde = $arr_comprobante_afip['comprobante_desde'];
            $afip_punto_venta = $arr_comprobante_afip['punto_venta'];
            $afip_fecha_proceso = $arr_comprobante_afip['fecha_proceso'];
            $afip_numero_documento = $arr_comprobante_afip['numero_documento'];
            $afip_importe_total = $arr_comprobante_afip['importe_total'];
            $afip_tipo_comprobante = $arr_comprobante_afip['tipo_comprobante'];

            $afip_numero_comprobante_completo = str_pad($afip_punto_venta, 4, 0, STR_PAD_LEFT) . '-' . str_pad($afip_comprobante_desde, 8, 0, STR_PAD_LEFT);

            $ws_fe_param_tipo_comprobante = WsFeParamTipoComprobante::getOxCodigoAfip($afip_tipo_comprobante);
            $vta_tipo_nota_debito = $ws_fe_param_tipo_comprobante->getVtaTipoNotaDebitoXVtaTipoNotaDebitoWsFeParamTipoComprobante();

            $array = array(
                'campo' => 'vta_tipo_nota_debito_id', 'valor' => $vta_tipo_nota_debito->getId(),
                'campo' => 'numero_factura_completo', 'valor' => $afip_numero_comprobante_completo,
            );
            $vta_nota_debito_duplicada = VtaNotaDebito::getOxArray($array);
            //$vta_nota_debito_duplicada = VtaNotaDebito::getOxNumeroNotaDebitoCompleto($afip_numero_comprobante_completo);
            //Gral::prr($vta_nota_debito_duplicada);
        }
    }
}
?>
<?php if(!$afip_codigo_autorizacion_existe){ ?>

<div class="datos generar-nota-debito-online-afip" vta_nota_debito_id="<?php Gral::_echo($vta_nota_debito->getId()) ?>">
    <form id='form_generar_nota_debito_online_afip' name='form_generar_nota_debito_online_afip' method='POST' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Nota de Debito') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_debito->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_debito->getPersonaDescripcion()) ?></div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_debito->getPersonaDocumento()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato"><?php Gral::_echo($vta_nota_debito->getVtaTipoNotaDebito()->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        
        <div class="label-mensaje-alerta">La fecha del comprobante se actualizará a fecha actual.</div>
        
        <div class="label-error" id="generar_nota_debito_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_nota_debito_online_afip' name='btn_generar_nota_debito_online_afip' type='button' class='btn_generar_nota_debito_online_afip'><?php Lang::_lang('Autorizar Comprobante en SIFEN') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitVtaNotaDebitoGestion();
</script>

<?php } else { ?>
    <div class="datos generar-nota-debito-online-afip" vta_nota_debito_id="<?php Gral::_echo($vta_nota_debito->getId()) ?>" nro_comprobante="<?php Gral::_echo($afip_comprobante_desde) ?>">
        Se ha encontrado una ANOMALIA en el comprobante <?php Gral::_echo($vta_nota_debito->getCodigo()) ?> emitido el <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getCreado())) ?> que se desea autorizar. 
        <br />
        El nro de comprobante parece ya haber sido autorizado con los siguientes datos:
        <ul>
            <li>CUIT: <?php Gral::_echo($afip_numero_documento) ?></li>
            <li>Nro: <?php Gral::_echo($afip_numero_comprobante_completo) ?></li>
            <li>CAE: <?php Gral::_echo($afip_codigo_autorizacion) ?></li>
            <li>Fecha: <?php Gral::_echo($afip_fecha_proceso) ?></li>
            <li>Importe: <?php Gral::_echoImp($afip_importe_total) ?></li>
        </ul>

        <?php if ($vta_nota_debito_duplicada) { ?>
            <br />
            El nro de comprobante <?php Gral::_echo($afip_comprobante_desde) ?> se asignó a otro comprobante emitido y registrado en el sistema
            <br />    
            <ul>
                <li>CUIT: <?php Gral::_echo($vta_nota_debito_duplicada->getPersonaDocumento()) ?></li>
                <li>Cliente: <?php Gral::_echo($vta_nota_debito_duplicada->getPersonaDescripcion()) ?></li>
                <li>Cod: <?php Gral::_echo($vta_nota_debito_duplicada->getCodigo()) ?></li>
                <li>Emitido el: <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_duplicada->getCreado())) ?></li>
                <li>Importe: <?php Gral::_echoImp($vta_nota_debito_duplicada->getImporteTotalComprobante()) ?></li>
            </ul>

            <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_AFIP_DESVINCULAR_NRO_COMPROBANTE')) { ?>
                <div class="botonera">
                    <button class="boton" type="button" id="btn_comprobante_desvincular_nro_comprobante" name="btn_comprobante_desvincular_nro_comprobante" >Desvincular el <?php Gral::_echo($afip_comprobante_desde) ?> de este comprobante</button>
                </div>
            <?php } ?>
        <?php } else { ?>
            <br />
            Datos de la nota de debito actual
            <br />    
            <ul>
                <li>CUIT: <?php Gral::_echo($vta_nota_debito->getPersonaDocumento()) ?></li>
                <li>Cliente: <?php Gral::_echo($vta_nota_debito->getPersonaDescripcion()) ?></li>
                <li>Cod: <?php Gral::_echo($vta_nota_debito->getCodigo()) ?></li>
                <li>Emitido el: <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getCreado())) ?></li>
                <li>Importe: <?php Gral::_echoImp($vta_nota_debito->getImporteTotalComprobante()) ?></li>
            </ul>

            <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_AFIP_CLONARNRO_COMPROBANTE')) { ?>
                <div class="botonera">
                    <?php
                    if ($arr_comprobantes_afip && is_array($arr_comprobantes_afip)) {
                        foreach ($arr_comprobantes_afip as $ws_fe_ope_solicitud_id => $arr_comprobante_afip) {
                            $ws_fe_ope_solicitud = WsFeOpeSolicitud::getOxId($ws_fe_ope_solicitud_id);
                            if ($ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde() != '') {
                                ?>                    
                                <button class="boton" type="button" id="btn_comprobante_clonar_nro_comprobante" name="btn_comprobante_clonar_nro_comprobante" ws_fe_ope_solicitud_id="<?php echo $ws_fe_ope_solicitud_id ?>" >Clonar datos de este comprobante desde AFIP para Solicitud <?php echo $ws_fe_ope_solicitud_id ?></button>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_AFIP_DESVINCULAR_NRO_COMPROBANTE')) { ?>
            <div class="botonera">
                <button class="boton" type="button" id="btn_comprobante_desvincular_nro_comprobante" name="btn_comprobante_desvincular_nro_comprobante" >Desvincular el <?php Gral::_echo($afip_comprobante_desde) ?> de este comprobante</button>
            </div>
        <?php } ?>
            
        <br />
        Por favor comuniquese con el administrador del sistema para regularizar el caso.
    </div>
<?php } ?>
