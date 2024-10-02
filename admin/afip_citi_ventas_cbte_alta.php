<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'afip_citi_ventas_cbte';
$db_nombre_pagina = 'afip_citi_ventas_cbte_alta';


$afip_citi_ventas_cbte = new AfipCitiVentasCbte();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $afip_citi_ventas_cbte = new AfipCitiVentasCbte();
    if(trim($hdn_id) != '') $afip_citi_ventas_cbte->setId($hdn_id, false);
	$afip_citi_ventas_cbte->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$afip_citi_ventas_cbte->setCodigo(Gral::getVars(1, "txt_codigo"));
	$afip_citi_ventas_cbte->setAfipCitiPrcId(Gral::getVars(1, "cmb_afip_citi_prc_id", null));
	$afip_citi_ventas_cbte->setAfipCitiCabeceraId(Gral::getVars(1, "cmb_afip_citi_cabecera_id", null));
	$afip_citi_ventas_cbte->setAfipCitiFechaComprobante(Gral::getVars(1, "txt_afip_citi_fecha_comprobante"));
	$afip_citi_ventas_cbte->setAfipCitiTipoComprobante(Gral::getVars(1, "txt_afip_citi_tipo_comprobante"));
	$afip_citi_ventas_cbte->setAfipCitiPuntoVenta(Gral::getVars(1, "txt_afip_citi_punto_venta"));
	$afip_citi_ventas_cbte->setAfipCitiNumeroComprobante(Gral::getVars(1, "txt_afip_citi_numero_comprobante"));
	$afip_citi_ventas_cbte->setAfipCitiNumeroComprobanteHasta(Gral::getVars(1, "txt_afip_citi_numero_comprobante_hasta"));
	$afip_citi_ventas_cbte->setAfipCitiCodigoDocumentoComprador(Gral::getVars(1, "txt_afip_citi_codigo_documento_comprador"));
	$afip_citi_ventas_cbte->setAfipCitiNumeroIdentificacionComprador(Gral::getVars(1, "txt_afip_citi_numero_identificacion_comprador"));
	$afip_citi_ventas_cbte->setAfipCitiDenominacionComprador(Gral::getVars(1, "txt_afip_citi_denominacion_comprador"));
	$afip_citi_ventas_cbte->setAfipCitiImporteTotalOperacion(Gral::getVars(1, "txt_afip_citi_importe_total_operacion"));
	$afip_citi_ventas_cbte->setAfipCitiImporteTotalConceptos(Gral::getVars(1, "txt_afip_citi_importe_total_conceptos"));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionNoCategorizados(Gral::getVars(1, "txt_afip_citi_importe_percepcion_no_categorizados"));
	$afip_citi_ventas_cbte->setAfipCitiImporteOperacionesExentas(Gral::getVars(1, "txt_afip_citi_importe_operaciones_exentas"));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionesImpuestosNacionales(Gral::getVars(1, "txt_afip_citi_importe_percepciones_impuestos_nacionales"));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionesIngresosBrutos(Gral::getVars(1, "txt_afip_citi_importe_percepciones_ingresos_brutos"));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionesImpuestosMunicipales(Gral::getVars(1, "txt_afip_citi_importe_percepciones_impuestos_municipales"));
	$afip_citi_ventas_cbte->setAfipCitiImporteImpuestosInternos(Gral::getVars(1, "txt_afip_citi_importe_impuestos_internos"));
	$afip_citi_ventas_cbte->setAfipCitiCodigoMoneda(Gral::getVars(1, "txt_afip_citi_codigo_moneda"));
	$afip_citi_ventas_cbte->setAfipCitiTipoCambio(Gral::getVars(1, "txt_afip_citi_tipo_cambio"));
	$afip_citi_ventas_cbte->setAfipCitiCantidadAlicuotasIva(Gral::getVars(1, "txt_afip_citi_cantidad_alicuotas_iva"));
	$afip_citi_ventas_cbte->setAfipCitiCodigoOperacion(Gral::getVars(1, "txt_afip_citi_codigo_operacion"));
	$afip_citi_ventas_cbte->setAfipCitiImporteOtrosTributos(Gral::getVars(1, "txt_afip_citi_importe_otros_tributos"));
	$afip_citi_ventas_cbte->setAfipCitiFechaVencimientoPago(Gral::getVars(1, "txt_afip_citi_fecha_vencimiento_pago"));
	$afip_citi_ventas_cbte->setVtaFacturaId(Gral::getVars(1, "cmb_vta_factura_id", null));
	$afip_citi_ventas_cbte->setVtaNotaCreditoId(Gral::getVars(1, "cmb_vta_nota_credito_id", null));
	$afip_citi_ventas_cbte->setVtaNotaDebitoId(Gral::getVars(1, "cmb_vta_nota_debito_id", null));
	$afip_citi_ventas_cbte->setObservacion(Gral::getVars(1, "txa_observacion"));
	$afip_citi_ventas_cbte->setOrden(Gral::getVars(1, "txt_orden", 0));
	$afip_citi_ventas_cbte->setEstado(Gral::getVars(1, "_estado", 0));
	$afip_citi_ventas_cbte->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$afip_citi_ventas_cbte->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$afip_citi_ventas_cbte->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$afip_citi_ventas_cbte->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$afip_citi_ventas_cbte_estado = new AfipCitiVentasCbte();
	if(trim($hdn_id) != ''){
            $afip_citi_ventas_cbte_estado->setId($hdn_id);            
            $afip_citi_ventas_cbte->setEstado($afip_citi_ventas_cbte_estado->getEstado());
	}else{            
            $afip_citi_ventas_cbte->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $afip_citi_ventas_cbte->control();
			if(!$error->getExisteError()){
				$afip_citi_ventas_cbte->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$afip_citi_ventas_cbte->getId());
			}
		break;
		case 'guardarnvo':
			$error = $afip_citi_ventas_cbte->control();
			if(!$error->getExisteError()){
				$afip_citi_ventas_cbte->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$afip_citi_ventas_cbte->setId($hdn_id);
	}else{
	
	$afip_citi_ventas_cbte->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$afip_citi_ventas_cbte->setCodigo(Gral::getVars(2, "codigo", ''));
	$afip_citi_ventas_cbte->setAfipCitiPrcId(Gral::getVars(2, "afip_citi_prc_id", 'null'));
	$afip_citi_ventas_cbte->setAfipCitiCabeceraId(Gral::getVars(2, "afip_citi_cabecera_id", 'null'));
	$afip_citi_ventas_cbte->setAfipCitiFechaComprobante(Gral::getVars(2, "afip_citi_fecha_comprobante", ''));
	$afip_citi_ventas_cbte->setAfipCitiTipoComprobante(Gral::getVars(2, "afip_citi_tipo_comprobante", ''));
	$afip_citi_ventas_cbte->setAfipCitiPuntoVenta(Gral::getVars(2, "afip_citi_punto_venta", ''));
	$afip_citi_ventas_cbte->setAfipCitiNumeroComprobante(Gral::getVars(2, "afip_citi_numero_comprobante", ''));
	$afip_citi_ventas_cbte->setAfipCitiNumeroComprobanteHasta(Gral::getVars(2, "afip_citi_numero_comprobante_hasta", ''));
	$afip_citi_ventas_cbte->setAfipCitiCodigoDocumentoComprador(Gral::getVars(2, "afip_citi_codigo_documento_comprador", ''));
	$afip_citi_ventas_cbte->setAfipCitiNumeroIdentificacionComprador(Gral::getVars(2, "afip_citi_numero_identificacion_comprador", ''));
	$afip_citi_ventas_cbte->setAfipCitiDenominacionComprador(Gral::getVars(2, "afip_citi_denominacion_comprador", ''));
	$afip_citi_ventas_cbte->setAfipCitiImporteTotalOperacion(Gral::getVars(2, "afip_citi_importe_total_operacion", ''));
	$afip_citi_ventas_cbte->setAfipCitiImporteTotalConceptos(Gral::getVars(2, "afip_citi_importe_total_conceptos", ''));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionNoCategorizados(Gral::getVars(2, "afip_citi_importe_percepcion_no_categorizados", ''));
	$afip_citi_ventas_cbte->setAfipCitiImporteOperacionesExentas(Gral::getVars(2, "afip_citi_importe_operaciones_exentas", ''));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionesImpuestosNacionales(Gral::getVars(2, "afip_citi_importe_percepciones_impuestos_nacionales", ''));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionesIngresosBrutos(Gral::getVars(2, "afip_citi_importe_percepciones_ingresos_brutos", ''));
	$afip_citi_ventas_cbte->setAfipCitiImportePercepcionesImpuestosMunicipales(Gral::getVars(2, "afip_citi_importe_percepciones_impuestos_municipales", ''));
	$afip_citi_ventas_cbte->setAfipCitiImporteImpuestosInternos(Gral::getVars(2, "afip_citi_importe_impuestos_internos", ''));
	$afip_citi_ventas_cbte->setAfipCitiCodigoMoneda(Gral::getVars(2, "afip_citi_codigo_moneda", ''));
	$afip_citi_ventas_cbte->setAfipCitiTipoCambio(Gral::getVars(2, "afip_citi_tipo_cambio", ''));
	$afip_citi_ventas_cbte->setAfipCitiCantidadAlicuotasIva(Gral::getVars(2, "afip_citi_cantidad_alicuotas_iva", ''));
	$afip_citi_ventas_cbte->setAfipCitiCodigoOperacion(Gral::getVars(2, "afip_citi_codigo_operacion", ''));
	$afip_citi_ventas_cbte->setAfipCitiImporteOtrosTributos(Gral::getVars(2, "afip_citi_importe_otros_tributos", ''));
	$afip_citi_ventas_cbte->setAfipCitiFechaVencimientoPago(Gral::getVars(2, "afip_citi_fecha_vencimiento_pago", ''));
	$afip_citi_ventas_cbte->setVtaFacturaId(Gral::getVars(2, "vta_factura_id", 'null'));
	$afip_citi_ventas_cbte->setVtaNotaCreditoId(Gral::getVars(2, "vta_nota_credito_id", 'null'));
	$afip_citi_ventas_cbte->setVtaNotaDebitoId(Gral::getVars(2, "vta_nota_debito_id", 'null'));
	$afip_citi_ventas_cbte->setObservacion(Gral::getVars(2, "observacion", ''));
	$afip_citi_ventas_cbte->setOrden(Gral::getVars(2, "orden", 0));
	$afip_citi_ventas_cbte->setEstado(Gral::getVars(2, "estado", 0));
	$afip_citi_ventas_cbte->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$afip_citi_ventas_cbte->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$afip_citi_ventas_cbte->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$afip_citi_ventas_cbte->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
<?php include 'parciales/encabezado.php'?>
<?php include 'parciales/user.php';?>
<?php include 'parciales/mensajes.php' ?>
    
<div id='menu'>
    <?php include 'parciales/menuh.php' ?>
</div>

<div id='cuerpo' >
    <form id='formu' name='formu' method='post' action='' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('AfipCitiVentasCbtes') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AfipCitiVentasCbte::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AfipCitiVentasCbte::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_afip_citi_ventas_cbte'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getDescripcion()) ?>' size='50' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getCodigo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_afip_citi_prc_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_prc_id' ?>" >

                    <?php Lang::_lang('AfipCitiPrc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_prc_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_afip_citi_prc_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA_CMB_EDIT_AFIP_CITI_PRC')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_prc_id" <?php echo ($afip_citi_ventas_cbte->getAfipCitiPrcId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_afip_citi_prc_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), $afip_citi_ventas_cbte->getAfipCitiPrcId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_afip_citi_cabecera_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cabecera_id' ?>" >

                    <?php Lang::_lang('AfipCitiCabecera', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_cabecera_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_afip_citi_cabecera_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_cabecera_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA_CMB_EDIT_AFIP_CITI_CABECERA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_afip_citi_cabecera_id" clase_id="afip_citi_cabecera" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_cabecera_id" <?php echo ($afip_citi_ventas_cbte->getAfipCitiCabeceraId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_afip_citi_cabecera_id" clase_id="afip_citi_cabecera" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_afip_citi_cabecera_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_afip_citi_cabecera_id', Gral::getCmbFiltro(AfipCitiCabecera::getAfipCitiCabecerasCmb(), '...'), $afip_citi_ventas_cbte->getAfipCitiCabeceraId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cabecera_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cabecera_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cabecera_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cabecera_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cabecera_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_fecha_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_fecha_comprobante' ?>" >

                    <?php Lang::_lang('Fecha Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_fecha_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_fecha_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_fecha_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_fecha_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_fecha_comprobante' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiFechaComprobante()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_fecha_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_fecha_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_fecha_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_fecha_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_fecha_comprobante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_tipo_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante' ?>" >

                    <?php Lang::_lang('Tipo Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_tipo_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_tipo_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_tipo_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_tipo_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_tipo_comprobante' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiTipoComprobante()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_tipo_comprobante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_punto_venta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_punto_venta' ?>" >

                    <?php Lang::_lang('Punto Venta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_punto_venta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_punto_venta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_punto_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_punto_venta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_punto_venta' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiPuntoVenta()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_punto_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_punto_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_punto_venta')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_numero_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante' ?>" >

                    <?php Lang::_lang('Nro Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_numero_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_numero_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_numero_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_numero_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_numero_comprobante' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiNumeroComprobante()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_numero_comprobante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_numero_comprobante_hasta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante_hasta' ?>" >

                    <?php Lang::_lang('Nro Comprobante Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_numero_comprobante_hasta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_numero_comprobante_hasta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_numero_comprobante_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_numero_comprobante_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_numero_comprobante_hasta' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiNumeroComprobanteHasta()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_comprobante_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_comprobante_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_numero_comprobante_hasta')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_codigo_documento_comprador" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_codigo_documento_comprador' ?>" >

                    <?php Lang::_lang('Codigo Documento Comprador', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_codigo_documento_comprador' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_codigo_documento_comprador" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_codigo_documento_comprador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_codigo_documento_comprador' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_codigo_documento_comprador' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiCodigoDocumentoComprador()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_documento_comprador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_documento_comprador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_documento_comprador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_documento_comprador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_codigo_documento_comprador')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_numero_identificacion_comprador" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_comprador' ?>" >

                    <?php Lang::_lang('Nro Identificacion Comprador', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_numero_identificacion_comprador' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_numero_identificacion_comprador" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_numero_identificacion_comprador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_numero_identificacion_comprador' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_numero_identificacion_comprador' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiNumeroIdentificacionComprador()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_comprador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_comprador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_comprador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_comprador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_numero_identificacion_comprador')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_denominacion_comprador" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_denominacion_comprador' ?>" >

                    <?php Lang::_lang('Denominacion Comprador', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_denominacion_comprador' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_denominacion_comprador" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_denominacion_comprador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_denominacion_comprador' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_denominacion_comprador' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiDenominacionComprador()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_denominacion_comprador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_denominacion_comprador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_denominacion_comprador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_denominacion_comprador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_denominacion_comprador')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_total_operacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_total_operacion' ?>" >

                    <?php Lang::_lang('Importe Total Operacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_total_operacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_total_operacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_total_operacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_total_operacion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_total_operacion' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImporteTotalOperacion()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_total_operacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_total_operacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_total_operacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_total_operacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_total_operacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_total_conceptos" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_total_conceptos' ?>" >

                    <?php Lang::_lang('Importe Total Conceptos', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_total_conceptos' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_total_conceptos" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_total_conceptos')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_total_conceptos' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_total_conceptos' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImporteTotalConceptos()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_total_conceptos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_total_conceptos', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_total_conceptos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_total_conceptos', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_total_conceptos')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_percepcion_no_categorizados" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_percepcion_no_categorizados' ?>" >

                    <?php Lang::_lang('Importe Percepcion No Categorizados', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_percepcion_no_categorizados' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_percepcion_no_categorizados" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_percepcion_no_categorizados')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_percepcion_no_categorizados' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_percepcion_no_categorizados' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImportePercepcionNoCategorizados()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepcion_no_categorizados', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepcion_no_categorizados', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepcion_no_categorizados', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepcion_no_categorizados', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_percepcion_no_categorizados')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_operaciones_exentas" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_operaciones_exentas' ?>" >

                    <?php Lang::_lang('Importe Operaciones Exentas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_operaciones_exentas' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_operaciones_exentas" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_operaciones_exentas')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_operaciones_exentas' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_operaciones_exentas' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImporteOperacionesExentas()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_operaciones_exentas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_operaciones_exentas', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_operaciones_exentas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_operaciones_exentas', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_operaciones_exentas')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_percepciones_impuestos_nacionales" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_nacionales' ?>" >

                    <?php Lang::_lang('Importe Percepciones Impuestos Nacionales', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_percepciones_impuestos_nacionales' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_percepciones_impuestos_nacionales" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_percepciones_impuestos_nacionales')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_percepciones_impuestos_nacionales' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_percepciones_impuestos_nacionales' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosNacionales()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_nacionales', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_nacionales', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_nacionales', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_nacionales', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_percepciones_impuestos_nacionales')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_percepciones_ingresos_brutos" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_ingresos_brutos' ?>" >

                    <?php Lang::_lang('Importe Percepciones Ingresos Brutos', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_percepciones_ingresos_brutos' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_percepciones_ingresos_brutos" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_percepciones_ingresos_brutos')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_percepciones_ingresos_brutos' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_percepciones_ingresos_brutos' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesIngresosBrutos()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_ingresos_brutos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_ingresos_brutos', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_ingresos_brutos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_ingresos_brutos', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_percepciones_ingresos_brutos')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_percepciones_impuestos_municipales" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_municipales' ?>" >

                    <?php Lang::_lang('Importe Percepciones Impuestos Municipales', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_percepciones_impuestos_municipales' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_percepciones_impuestos_municipales" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_percepciones_impuestos_municipales')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_percepciones_impuestos_municipales' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_percepciones_impuestos_municipales' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_municipales', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_municipales', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_municipales', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_percepciones_impuestos_municipales', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_percepciones_impuestos_municipales')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_impuestos_internos" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_impuestos_internos' ?>" >

                    <?php Lang::_lang('Importe Impuestos Internos', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_impuestos_internos' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_impuestos_internos" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_impuestos_internos')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_impuestos_internos' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_impuestos_internos' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImporteImpuestosInternos()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_impuestos_internos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_impuestos_internos', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_impuestos_internos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_impuestos_internos', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_impuestos_internos')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_codigo_moneda" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_codigo_moneda' ?>" >

                    <?php Lang::_lang('Codigo Moneda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_codigo_moneda' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_codigo_moneda" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_codigo_moneda')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_codigo_moneda' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_codigo_moneda' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiCodigoMoneda()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_moneda', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_moneda', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_moneda', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_moneda', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_codigo_moneda')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_tipo_cambio" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_tipo_cambio' ?>" >

                    <?php Lang::_lang('Tipo Cambio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_tipo_cambio' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_tipo_cambio" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_tipo_cambio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_tipo_cambio' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_tipo_cambio' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiTipoCambio()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_tipo_cambio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_tipo_cambio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_tipo_cambio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_tipo_cambio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_tipo_cambio')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_cantidad_alicuotas_iva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cantidad_alicuotas_iva' ?>" >

                    <?php Lang::_lang('Cantidad Alicuotas Iva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_cantidad_alicuotas_iva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_cantidad_alicuotas_iva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_cantidad_alicuotas_iva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_cantidad_alicuotas_iva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_cantidad_alicuotas_iva' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiCantidadAlicuotasIva()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cantidad_alicuotas_iva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cantidad_alicuotas_iva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cantidad_alicuotas_iva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cantidad_alicuotas_iva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cantidad_alicuotas_iva')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_codigo_operacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_codigo_operacion' ?>" >

                    <?php Lang::_lang('Codigo Operacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_codigo_operacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_codigo_operacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_codigo_operacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_codigo_operacion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_codigo_operacion' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiCodigoOperacion()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_operacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_operacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_operacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_operacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_codigo_operacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_otros_tributos" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_otros_tributos' ?>" >

                    <?php Lang::_lang('Importe Otros Tributos', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_importe_otros_tributos' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_otros_tributos" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_otros_tributos')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_otros_tributos' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_otros_tributos' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiImporteOtrosTributos()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_otros_tributos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_otros_tributos', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_otros_tributos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_otros_tributos', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_otros_tributos')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_fecha_vencimiento_pago" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_fecha_vencimiento_pago' ?>" >

                    <?php Lang::_lang('Fecha Vencimiento Pago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=afip_citi_fecha_vencimiento_pago' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_fecha_vencimiento_pago" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_fecha_vencimiento_pago')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_fecha_vencimiento_pago' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_fecha_vencimiento_pago' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getAfipCitiFechaVencimientoPago()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_fecha_vencimiento_pago', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_fecha_vencimiento_pago', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_fecha_vencimiento_pago', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_fecha_vencimiento_pago', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_fecha_vencimiento_pago')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_factura_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_factura_id' ?>" >

                    <?php Lang::_lang('VtaFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=vta_factura_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_factura_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA_CMB_EDIT_VTA_FACTURA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_factura_id" clase_id="vta_factura" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_factura_id" <?php echo ($afip_citi_ventas_cbte->getVtaFacturaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_factura_id" clase_id="vta_factura" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_factura_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_factura_id', Gral::getCmbFiltro(VtaFactura::getVtaFacturasCmb(), '...'), $afip_citi_ventas_cbte->getVtaFacturaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_factura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_factura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_factura_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_nota_credito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_credito_id' ?>" >

                    <?php Lang::_lang('VtaNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=vta_nota_credito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_nota_credito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA_CMB_EDIT_VTA_NOTA_CREDITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_nota_credito_id" <?php echo ($afip_citi_ventas_cbte->getVtaNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_nota_credito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), $afip_citi_ventas_cbte->getVtaNotaCreditoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_nota_debito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_debito_id' ?>" >

                    <?php Lang::_lang('VtaNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=vta_nota_debito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_nota_debito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA_CMB_EDIT_VTA_NOTA_DEBITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_nota_debito_id" clase_id="vta_nota_debito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_nota_debito_id" <?php echo ($afip_citi_ventas_cbte->getVtaNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_nota_debito_id" clase_id="vta_nota_debito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_nota_debito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_nota_debito_id', Gral::getCmbFiltro(VtaNotaDebito::getVtaNotaDebitosCmb(), '...'), $afip_citi_ventas_cbte->getVtaNotaDebitoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_debito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_ventas_cbte_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($afip_citi_ventas_cbte->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($afip_citi_ventas_cbte->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AfipCitiVentasCbte::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AfipCitiVentasCbte::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($afip_citi_ventas_cbte->getId()) != ''){ ?>
    <div class="alta relaciones">
		
    </div>
	<?php } ?>


	  
	  </div>

        </form>
    </div>

    <div id='pie'>
        <?php include 'parciales/pie.php' ?>
    </div>

    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>

