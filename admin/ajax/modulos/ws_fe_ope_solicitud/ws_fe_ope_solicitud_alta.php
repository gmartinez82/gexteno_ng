<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA')){
    echo "No tiene asignada la credencial WS_FE_OPE_SOLICITUD_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ws_fe_ope_solicitud';
$db_nombre_pagina = 'ws_fe_ope_solicitud_alta';

$ws_fe_ope_solicitud = new WsFeOpeSolicitud();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ws_fe_ope_solicitud = new WsFeOpeSolicitud();
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud->setId($hdn_id, false);
	$ws_fe_ope_solicitud->setDescripcion(Gral::getVars(1, "ws_fe_ope_solicitud_txt_descripcion"));
	$ws_fe_ope_solicitud->setWsFeParamPuntoVentaId(Gral::getVars(1, "ws_fe_ope_solicitud_cmb_ws_fe_param_punto_venta_id", null));
	$ws_fe_ope_solicitud->setWsFeParamTipoComprobanteId(Gral::getVars(1, "ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_comprobante_id", null));
	$ws_fe_ope_solicitud->setWsFeParamTipoConceptoId(Gral::getVars(1, "ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_concepto_id", null));
	$ws_fe_ope_solicitud->setWsFeParamTipoDocumentoId(Gral::getVars(1, "ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_documento_id", null));
	$ws_fe_ope_solicitud->setWsFeParamTipoMonedaId(Gral::getVars(1, "ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_moneda_id", null));
	$ws_fe_ope_solicitud->setGralEmpresaId(Gral::getVars(1, "ws_fe_ope_solicitud_cmb_gral_empresa_id", null));
	$ws_fe_ope_solicitud->setWsFeAfipCantidadRegistro(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_cantidad_registro"));
	$ws_fe_ope_solicitud->setWsFeAfipPuntoVenta(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_punto_venta"));
	$ws_fe_ope_solicitud->setWsFeAfipTipoComprobante(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_comprobante"));
	$ws_fe_ope_solicitud->setWsFeAfipTipoConcepto(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_concepto"));
	$ws_fe_ope_solicitud->setWsFeAfipTipoDocumento(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_documento"));
	$ws_fe_ope_solicitud->setWsFeAfipNumeroDocumento(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_numero_documento"));
	$ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_desde"));
	$ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_hasta"));
	$ws_fe_ope_solicitud->setWsFeAfipComprobanteFecha(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_fecha"));
	$ws_fe_ope_solicitud->setWsFeAfipImporteTotal(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total"));
	$ws_fe_ope_solicitud->setWsFeAfipImporteTotalConcepto(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total_concepto"));
	$ws_fe_ope_solicitud->setWsFeAfipImporteNeto(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_importe_neto"));
	$ws_fe_ope_solicitud->setWsFeAfipImporteOperacionExenta(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_importe_operacion_exenta"));
	$ws_fe_ope_solicitud->setWsFeAfipImporteTributo(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_importe_tributo"));
	$ws_fe_ope_solicitud->setWsFeAfipImporteIva(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_importe_iva"));
	$ws_fe_ope_solicitud->setWsFeAfipFechaServicioDesde(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_desde"));
	$ws_fe_ope_solicitud->setWsFeAfipFechaServicioHasta(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_hasta"));
	$ws_fe_ope_solicitud->setWsFeAfipVencimientoPago(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_vencimiento_pago"));
	$ws_fe_ope_solicitud->setWsFeAfipTipoMoneda(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_moneda"));
	$ws_fe_ope_solicitud->setWsFeAfipCotizacionMoneda(Gral::getVars(1, "ws_fe_ope_solicitud_txt_ws_fe_afip_cotizacion_moneda"));
	$ws_fe_ope_solicitud->setObservacion(Gral::getVars(1, "ws_fe_ope_solicitud_txa_observacion"));
	$ws_fe_ope_solicitud->setOrden(Gral::getVars(1, "ws_fe_ope_solicitud_txt_orden", 0));
	$ws_fe_ope_solicitud->setEstado(Gral::getVars(1, "ws_fe_ope_solicitud_cmb_estado", 0));
	$ws_fe_ope_solicitud->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_txt_creado")));
	$ws_fe_ope_solicitud->setCreadoPor(Gral::getVars(1, "ws_fe_ope_solicitud__creado_por", 0));
	$ws_fe_ope_solicitud->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_txt_modificado")));
	$ws_fe_ope_solicitud->setModificadoPor(Gral::getVars(1, "ws_fe_ope_solicitud__modificado_por", 0));

	$ws_fe_ope_solicitud_estado = new WsFeOpeSolicitud();
	if(trim($hdn_id) != ''){
		$ws_fe_ope_solicitud_estado->setId($hdn_id);
		$ws_fe_ope_solicitud->setEstado($ws_fe_ope_solicitud_estado->getEstado());
				
	}else{
		$ws_fe_ope_solicitud->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_ope_solicitud->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ws_fe_ope_solicitud_alta.php?cs=1&id='.$ws_fe_ope_solicitud->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_ope_solicitud->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ws_fe_ope_solicitud_alta.php?cs=1');
				$ws_fe_ope_solicitud = new WsFeOpeSolicitud();
			}
		break;
	}
	Gral::setSes('WsFeOpeSolicitud_ULTIMO_INSERTADO', $ws_fe_ope_solicitud->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ws_fe_ope_solicitud_id = Gral::getVars(2, $prefijo.'cmb_ws_fe_ope_solicitud_id', 0);
	if($cmb_ws_fe_ope_solicitud_id != 0){
		$ws_fe_ope_solicitud = WsFeOpeSolicitud::getOxId($cmb_ws_fe_ope_solicitud_id);
	}else{
	
	$ws_fe_ope_solicitud->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_ope_solicitud->setWsFeParamPuntoVentaId(Gral::getVars(2, "ws_fe_param_punto_venta_id", 'null'));
	$ws_fe_ope_solicitud->setWsFeParamTipoComprobanteId(Gral::getVars(2, "ws_fe_param_tipo_comprobante_id", 'null'));
	$ws_fe_ope_solicitud->setWsFeParamTipoConceptoId(Gral::getVars(2, "ws_fe_param_tipo_concepto_id", 'null'));
	$ws_fe_ope_solicitud->setWsFeParamTipoDocumentoId(Gral::getVars(2, "ws_fe_param_tipo_documento_id", 'null'));
	$ws_fe_ope_solicitud->setWsFeParamTipoMonedaId(Gral::getVars(2, "ws_fe_param_tipo_moneda_id", 'null'));
	$ws_fe_ope_solicitud->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$ws_fe_ope_solicitud->setWsFeAfipCantidadRegistro(Gral::getVars(2, "ws_fe_afip_cantidad_registro", ''));
	$ws_fe_ope_solicitud->setWsFeAfipPuntoVenta(Gral::getVars(2, "ws_fe_afip_punto_venta", ''));
	$ws_fe_ope_solicitud->setWsFeAfipTipoComprobante(Gral::getVars(2, "ws_fe_afip_tipo_comprobante", ''));
	$ws_fe_ope_solicitud->setWsFeAfipTipoConcepto(Gral::getVars(2, "ws_fe_afip_tipo_concepto", ''));
	$ws_fe_ope_solicitud->setWsFeAfipTipoDocumento(Gral::getVars(2, "ws_fe_afip_tipo_documento", ''));
	$ws_fe_ope_solicitud->setWsFeAfipNumeroDocumento(Gral::getVars(2, "ws_fe_afip_numero_documento", ''));
	$ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde(Gral::getVars(2, "ws_fe_afip_comprobante_desde", ''));
	$ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta(Gral::getVars(2, "ws_fe_afip_comprobante_hasta", ''));
	$ws_fe_ope_solicitud->setWsFeAfipComprobanteFecha(Gral::getVars(2, "ws_fe_afip_comprobante_fecha", ''));
	$ws_fe_ope_solicitud->setWsFeAfipImporteTotal(Gral::getVars(2, "ws_fe_afip_importe_total", ''));
	$ws_fe_ope_solicitud->setWsFeAfipImporteTotalConcepto(Gral::getVars(2, "ws_fe_afip_importe_total_concepto", ''));
	$ws_fe_ope_solicitud->setWsFeAfipImporteNeto(Gral::getVars(2, "ws_fe_afip_importe_neto", ''));
	$ws_fe_ope_solicitud->setWsFeAfipImporteOperacionExenta(Gral::getVars(2, "ws_fe_afip_importe_operacion_exenta", ''));
	$ws_fe_ope_solicitud->setWsFeAfipImporteTributo(Gral::getVars(2, "ws_fe_afip_importe_tributo", ''));
	$ws_fe_ope_solicitud->setWsFeAfipImporteIva(Gral::getVars(2, "ws_fe_afip_importe_iva", ''));
	$ws_fe_ope_solicitud->setWsFeAfipFechaServicioDesde(Gral::getVars(2, "ws_fe_afip_fecha_servicio_desde", ''));
	$ws_fe_ope_solicitud->setWsFeAfipFechaServicioHasta(Gral::getVars(2, "ws_fe_afip_fecha_servicio_hasta", ''));
	$ws_fe_ope_solicitud->setWsFeAfipVencimientoPago(Gral::getVars(2, "ws_fe_afip_vencimiento_pago", ''));
	$ws_fe_ope_solicitud->setWsFeAfipTipoMoneda(Gral::getVars(2, "ws_fe_afip_tipo_moneda", ''));
	$ws_fe_ope_solicitud->setWsFeAfipCotizacionMoneda(Gral::getVars(2, "ws_fe_afip_cotizacion_moneda", ''));
	$ws_fe_ope_solicitud->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_ope_solicitud->setOrden(Gral::getVars(2, "orden", 0));
	$ws_fe_ope_solicitud->setEstado(Gral::getVars(2, "estado", 0));
	$ws_fe_ope_solicitud->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_ope_solicitud->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ws_fe_ope_solicitud/ws_fe_ope_solicitud_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ws_fe_ope_solicitud' width='90%'>
        
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_cmb_ws_fe_param_punto_venta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_punto_venta_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeParampuntoVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_cmb_ws_fe_param_punto_venta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_punto_venta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_cmb_ws_fe_param_punto_venta_id', Gral::getCmbFiltro(WsFeParamPuntoVenta::getWsFeParamPuntoVentasCmb(), '...'), $ws_fe_ope_solicitud->getWsFeParamPuntoVentaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_CMB_EDIT_WS_FE_PARAM_PUNTO_VENTA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_punto_venta_id" clase_id="ws_fe_param_punto_venta" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_punto_venta_id" <?php echo ($ws_fe_ope_solicitud->getWsFeParamPuntoVentaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_punto_venta_id" clase_id="ws_fe_param_punto_venta" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_cmb_ws_fe_param_punto_venta_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_punto_venta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_punto_venta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_punto_venta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_punto_venta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_punto_venta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_comprobante_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_comprobante_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeParamTipoComprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_comprobante_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_comprobante_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_comprobante_id', Gral::getCmbFiltro(WsFeParamTipoComprobante::getWsFeParamTipoComprobantesCmb(), '...'), $ws_fe_ope_solicitud->getWsFeParamTipoComprobanteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_comprobante_id" clase_id="ws_fe_param_tipo_comprobante" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_comprobante_id" <?php echo ($ws_fe_ope_solicitud->getWsFeParamTipoComprobanteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_comprobante_id" clase_id="ws_fe_param_tipo_comprobante" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_comprobante_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_comprobante_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_comprobante_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_comprobante_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_comprobante_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_comprobante_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_concepto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_concepto_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeParamTipoConcepto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_concepto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_concepto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_concepto_id', Gral::getCmbFiltro(WsFeParamTipoConcepto::getWsFeParamTipoConceptosCmb(), '...'), $ws_fe_ope_solicitud->getWsFeParamTipoConceptoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_CONCEPTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_concepto_id" clase_id="ws_fe_param_tipo_concepto" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_concepto_id" <?php echo ($ws_fe_ope_solicitud->getWsFeParamTipoConceptoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_concepto_id" clase_id="ws_fe_param_tipo_concepto" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_concepto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_concepto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_concepto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_concepto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_concepto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_concepto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_documento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_documento_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeParamTipoDocumento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_documento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_documento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_documento_id', Gral::getCmbFiltro(WsFeParamTipoDocumento::getWsFeParamTipoDocumentosCmb(), '...'), $ws_fe_ope_solicitud->getWsFeParamTipoDocumentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_DOCUMENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_documento_id" clase_id="ws_fe_param_tipo_documento" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_documento_id" <?php echo ($ws_fe_ope_solicitud->getWsFeParamTipoDocumentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_documento_id" clase_id="ws_fe_param_tipo_documento" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_documento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_documento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_moneda_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_moneda_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeParamTipoMoneda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_moneda_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_moneda_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_moneda_id', Gral::getCmbFiltro(WsFeParamTipoMoneda::getWsFeParamTipoMonedasCmb(), '...'), $ws_fe_ope_solicitud->getWsFeParamTipoMonedaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_MONEDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_moneda_id" clase_id="ws_fe_param_tipo_moneda" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_moneda_id" <?php echo ($ws_fe_ope_solicitud->getWsFeParamTipoMonedaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_moneda_id" clase_id="ws_fe_param_tipo_moneda" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_cmb_ws_fe_param_tipo_moneda_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_moneda_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_moneda_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_moneda_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_param_tipo_moneda_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_moneda_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $ws_fe_ope_solicitud->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($ws_fe_ope_solicitud->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='ws_fe_ope_solicitud_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_cantidad_registro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_cantidad_registro' ?>" >
				  
                                        <?php Lang::_lang('Cantidad de Registros', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_cantidad_registro" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_cantidad_registro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_cantidad_registro' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_cantidad_registro' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipCantidadRegistro(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_cantidad_registro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_cantidad_registro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_cantidad_registro', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_cantidad_registro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_cantidad_registro')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_punto_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_punto_venta' ?>" >
				  
                                        <?php Lang::_lang('Punto de Venta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_punto_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_punto_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_punto_venta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_punto_venta' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipPuntoVenta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_punto_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_punto_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_punto_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_punto_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_comprobante' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipTipoComprobante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_concepto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_concepto' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Concepto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_concepto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_concepto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_concepto' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_concepto' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipTipoConcepto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_concepto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_concepto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_concepto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_concepto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_concepto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_documento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_documento' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Documento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_documento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_documento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_documento' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_documento' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipTipoDocumento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_documento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_documento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_documento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_documento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_documento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_numero_documento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_numero_documento' ?>" >
				  
                                        <?php Lang::_lang('Numero de Documento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_numero_documento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_numero_documento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_numero_documento' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_numero_documento' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipNumeroDocumento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_numero_documento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_numero_documento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_numero_documento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_numero_documento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_numero_documento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_desde" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_comprobante_desde' ?>" >
				  
                                        <?php Lang::_lang('Comprobante Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_desde" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_comprobante_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_desde' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_desde' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_desde', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_comprobante_desde')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_hasta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_comprobante_hasta' ?>" >
				  
                                        <?php Lang::_lang('Comprobante Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_hasta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_comprobante_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_hasta' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipComprobanteHasta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_hasta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_comprobante_hasta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_comprobante_fecha' ?>" >
				  
                                        <?php Lang::_lang('Comprobante Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_comprobante_fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_fecha' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_comprobante_fecha' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipComprobanteFecha(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_comprobante_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_comprobante_fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_importe_total' ?>" >
				  
                                        <?php Lang::_lang('Importe Total', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_importe_total')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipImporteTotal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_importe_total')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total_concepto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_importe_total_concepto' ?>" >
				  
                                        <?php Lang::_lang('Importe Total Concepto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total_concepto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_importe_total_concepto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total_concepto' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_total_concepto' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipImporteTotalConcepto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total_concepto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total_concepto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total_concepto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_total_concepto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_importe_total_concepto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_neto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_importe_neto' ?>" >
				  
                                        <?php Lang::_lang('Importe Neto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_neto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_importe_neto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_neto' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_neto' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipImporteNeto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_neto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_neto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_neto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_neto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_importe_neto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_operacion_exenta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_importe_operacion_exenta' ?>" >
				  
                                        <?php Lang::_lang('Importe Operacion Exenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_operacion_exenta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_importe_operacion_exenta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_operacion_exenta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_operacion_exenta' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipImporteOperacionExenta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_operacion_exenta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_operacion_exenta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_operacion_exenta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_operacion_exenta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_importe_operacion_exenta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_tributo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_importe_tributo' ?>" >
				  
                                        <?php Lang::_lang('Importe Tributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_tributo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_importe_tributo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_tributo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_tributo' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipImporteTributo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_tributo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_tributo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_tributo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_tributo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_importe_tributo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_iva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_importe_iva' ?>" >
				  
                                        <?php Lang::_lang('Importe Iva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_importe_iva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_importe_iva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_iva' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_importe_iva' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipImporteIva(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_iva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_iva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_iva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_importe_iva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_importe_iva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_desde" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_fecha_servicio_desde' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Servicio Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_desde" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_fecha_servicio_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_desde' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_desde' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipFechaServicioDesde(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_desde', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_fecha_servicio_desde')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_hasta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_fecha_servicio_hasta' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Servicio Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_hasta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_fecha_servicio_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_fecha_servicio_hasta' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipFechaServicioHasta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_hasta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_fecha_servicio_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_fecha_servicio_hasta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_vencimiento_pago" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_vencimiento_pago' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Vencimiento de Pago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_vencimiento_pago" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_vencimiento_pago')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_vencimiento_pago' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_vencimiento_pago' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipVencimientoPago(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_vencimiento_pago', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_vencimiento_pago', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_vencimiento_pago', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_vencimiento_pago', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_vencimiento_pago')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_moneda" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_moneda' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Moneda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_moneda" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_moneda')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_moneda' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_tipo_moneda' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipTipoMoneda(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_moneda', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_moneda', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_moneda', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_tipo_moneda', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_moneda')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txt_ws_fe_afip_cotizacion_moneda" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_cotizacion_moneda' ?>" >
				  
                                        <?php Lang::_lang('Cotizacion de Moneda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txt_ws_fe_afip_cotizacion_moneda" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_cotizacion_moneda')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_txt_ws_fe_afip_cotizacion_moneda' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_txt_ws_fe_afip_cotizacion_moneda' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getWsFeAfipCotizacionMoneda(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_cotizacion_moneda', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_ws_fe_afip_cotizacion_moneda', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_cotizacion_moneda', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_ws_fe_afip_cotizacion_moneda', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_cotizacion_moneda')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ws_fe_ope_solicitud_txa_observacion' rows='10' cols='50' id='ws_fe_ope_solicitud_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ws_fe_ope_solicitud->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ws_fe_ope_solicitud_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ws_fe_ope_solicitud'/>
                    <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />
			  
	
                    <input name='btn_guardarnvo' type='button' class='btn_guardarnvo' value="<?php Lang::_lang('Guardar y Agregar Nuevo') ?>" />
                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
                </td>
            </tr>
      </table>
      
	  
</form>
</body>
</html>
<script>
    setInit();
    setInitDbSuggest();
    setInitDbContext();
</script>

