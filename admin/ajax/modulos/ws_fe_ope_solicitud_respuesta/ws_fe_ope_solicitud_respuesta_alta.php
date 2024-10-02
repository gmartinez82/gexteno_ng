<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ALTA')){
    echo "No tiene asignada la credencial WS_FE_OPE_SOLICITUD_RESPUESTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ws_fe_ope_solicitud_respuesta';
$db_nombre_pagina = 'ws_fe_ope_solicitud_respuesta_alta';

$ws_fe_ope_solicitud_respuesta = new WsFeOpeSolicitudRespuesta();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ws_fe_ope_solicitud_respuesta = new WsFeOpeSolicitudRespuesta();
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud_respuesta->setId($hdn_id, false);
	$ws_fe_ope_solicitud_respuesta->setDescripcion(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_descripcion"));
	$ws_fe_ope_solicitud_respuesta->setWsFeOpeSolicitudId(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_cmb_ws_fe_ope_solicitud_id", null));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCuit(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cuit"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipPuntoVenta(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_punto_venta"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoComprobante(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_comprobante"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipFechaProceso(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_fecha_proceso"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCantidadRegistro(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cantidad_registro"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoCabecera(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_cabecera"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipReproceso(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_reproceso"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoConcepto(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_concepto"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoDocumento(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_documento"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipNumeroDocumento(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_numero_documento"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteDesde(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_desde"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteHasta(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_hasta"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteFecha(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_fecha"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoDetalle(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_detalle"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCae(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae"));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCaeFechaVencimiento(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae_fecha_vencimiento"));
	$ws_fe_ope_solicitud_respuesta->setObservacion(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txa_observacion"));
	$ws_fe_ope_solicitud_respuesta->setOrden(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_orden", 0));
	$ws_fe_ope_solicitud_respuesta->setEstado(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_cmb_estado", 0));
	$ws_fe_ope_solicitud_respuesta->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_creado")));
	$ws_fe_ope_solicitud_respuesta->setCreadoPor(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta__creado_por", 0));
	$ws_fe_ope_solicitud_respuesta->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta_txt_modificado")));
	$ws_fe_ope_solicitud_respuesta->setModificadoPor(Gral::getVars(1, "ws_fe_ope_solicitud_respuesta__modificado_por", 0));

	$ws_fe_ope_solicitud_respuesta_estado = new WsFeOpeSolicitudRespuesta();
	if(trim($hdn_id) != ''){
		$ws_fe_ope_solicitud_respuesta_estado->setId($hdn_id);
		$ws_fe_ope_solicitud_respuesta->setEstado($ws_fe_ope_solicitud_respuesta_estado->getEstado());
				
	}else{
		$ws_fe_ope_solicitud_respuesta->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_ope_solicitud_respuesta->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_respuesta->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ws_fe_ope_solicitud_respuesta_alta.php?cs=1&id='.$ws_fe_ope_solicitud_respuesta->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_ope_solicitud_respuesta->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_respuesta->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ws_fe_ope_solicitud_respuesta_alta.php?cs=1');
				$ws_fe_ope_solicitud_respuesta = new WsFeOpeSolicitudRespuesta();
			}
		break;
	}
	Gral::setSes('WsFeOpeSolicitudRespuesta_ULTIMO_INSERTADO', $ws_fe_ope_solicitud_respuesta->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ws_fe_ope_solicitud_respuesta_id = Gral::getVars(2, $prefijo.'cmb_ws_fe_ope_solicitud_respuesta_id', 0);
	if($cmb_ws_fe_ope_solicitud_respuesta_id != 0){
		$ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxId($cmb_ws_fe_ope_solicitud_respuesta_id);
	}else{
	
	$ws_fe_ope_solicitud_respuesta->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeOpeSolicitudId(Gral::getVars(2, "ws_fe_ope_solicitud_id", 'null'));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCuit(Gral::getVars(2, "ws_fe_afip_cuit", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipPuntoVenta(Gral::getVars(2, "ws_fe_afip_punto_venta", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoComprobante(Gral::getVars(2, "ws_fe_afip_tipo_comprobante", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipFechaProceso(Gral::getVars(2, "ws_fe_afip_fecha_proceso", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCantidadRegistro(Gral::getVars(2, "ws_fe_afip_cantidad_registro", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoCabecera(Gral::getVars(2, "ws_fe_afip_resultado_cabecera", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipReproceso(Gral::getVars(2, "ws_fe_afip_reproceso", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoConcepto(Gral::getVars(2, "ws_fe_afip_tipo_concepto", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoDocumento(Gral::getVars(2, "ws_fe_afip_tipo_documento", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipNumeroDocumento(Gral::getVars(2, "ws_fe_afip_numero_documento", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteDesde(Gral::getVars(2, "ws_fe_afip_comprobante_desde", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteHasta(Gral::getVars(2, "ws_fe_afip_comprobante_hasta", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteFecha(Gral::getVars(2, "ws_fe_afip_comprobante_fecha", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoDetalle(Gral::getVars(2, "ws_fe_afip_resultado_detalle", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCae(Gral::getVars(2, "ws_fe_afip_cae", ''));
	$ws_fe_ope_solicitud_respuesta->setWsFeAfipCaeFechaVencimiento(Gral::getVars(2, "ws_fe_afip_cae_fecha_vencimiento", ''));
	$ws_fe_ope_solicitud_respuesta->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_ope_solicitud_respuesta->setOrden(Gral::getVars(2, "orden", 0));
	$ws_fe_ope_solicitud_respuesta->setEstado(Gral::getVars(2, "estado", 0));
	$ws_fe_ope_solicitud_respuesta->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_respuesta->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_ope_solicitud_respuesta->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_respuesta->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud_respuesta->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ws_fe_ope_solicitud_respuesta/ws_fe_ope_solicitud_respuesta_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ws_fe_ope_solicitud_respuesta' width='90%'>
        
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_cmb_ws_fe_ope_solicitud_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeSolicitud', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_cmb_ws_fe_ope_solicitud_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_respuesta_cmb_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), $ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitudId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ALTA_CMB_EDIT_WS_FE_OPE_SOLICITUD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_respuesta_cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='ws_fe_ope_solicitud_respuesta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_ope_solicitud_id" <?php echo ($ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitudId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_respuesta_cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='ws_fe_ope_solicitud_respuesta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_respuesta_cmb_ws_fe_ope_solicitud_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_cuit' ?>" >
				  
                                        <?php Lang::_lang('Cuit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cuit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cuit' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipCuit(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cuit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cuit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cuit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cuit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_cuit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_punto_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_punto_venta' ?>" >
				  
                                        <?php Lang::_lang('Punto de Venta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_punto_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_punto_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_punto_venta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_punto_venta' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipPuntoVenta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_punto_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_punto_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_punto_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_punto_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_comprobante' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoComprobante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_fecha_proceso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_fecha_proceso' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Proceso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_fecha_proceso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_fecha_proceso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_fecha_proceso' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_fecha_proceso' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipFechaProceso(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_fecha_proceso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_fecha_proceso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_fecha_proceso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_fecha_proceso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_fecha_proceso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cantidad_registro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_cantidad_registro' ?>" >
				  
                                        <?php Lang::_lang('Cantidad de Registros', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cantidad_registro" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_cantidad_registro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cantidad_registro' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cantidad_registro' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipCantidadRegistro(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cantidad_registro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cantidad_registro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cantidad_registro', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cantidad_registro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_cantidad_registro')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_cabecera" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_resultado_cabecera' ?>" >
				  
                                        <?php Lang::_lang('Resultado de la Cabecera', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_cabecera" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_resultado_cabecera')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_cabecera' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_cabecera' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoCabecera(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_cabecera', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_cabecera', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_cabecera', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_cabecera', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_resultado_cabecera')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_reproceso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_reproceso' ?>" >
				  
                                        <?php Lang::_lang('Reproceso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_reproceso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_reproceso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_reproceso' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_reproceso' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipReproceso(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_reproceso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_reproceso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_reproceso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_reproceso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_reproceso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_concepto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_concepto' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Concepto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_concepto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_concepto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_concepto' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_concepto' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoConcepto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_concepto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_concepto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_concepto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_concepto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_concepto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_documento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_documento' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Documento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_documento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_documento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_documento' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_tipo_documento' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoDocumento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_documento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_documento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_documento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_tipo_documento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_documento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_numero_documento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_numero_documento' ?>" >
				  
                                        <?php Lang::_lang('Numero de Documento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_numero_documento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_numero_documento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_numero_documento' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_numero_documento' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipNumeroDocumento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_numero_documento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_numero_documento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_numero_documento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_numero_documento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_numero_documento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_desde" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_comprobante_desde' ?>" >
				  
                                        <?php Lang::_lang('Comprobante Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_desde" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_comprobante_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_desde' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_desde' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteDesde(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_desde', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_comprobante_desde')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_hasta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_comprobante_hasta' ?>" >
				  
                                        <?php Lang::_lang('Comprobante Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_hasta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_comprobante_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_hasta' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteHasta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_hasta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_comprobante_hasta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_comprobante_fecha' ?>" >
				  
                                        <?php Lang::_lang('Comprobante Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_comprobante_fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_fecha' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_comprobante_fecha' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteFecha(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_comprobante_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_comprobante_fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_detalle" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_resultado_detalle' ?>" >
				  
                                        <?php Lang::_lang('Resultado del Detalle', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_detalle" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_resultado_detalle')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_detalle' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_resultado_detalle' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoDetalle(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_detalle', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_detalle', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_detalle', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_resultado_detalle', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_resultado_detalle')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_cae' ?>" >
				  
                                        <?php Lang::_lang('Cae', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipCae(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_cae')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae_fecha_vencimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_cae_fecha_vencimiento' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Vencimiento del CAE', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae_fecha_vencimiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_cae_fecha_vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae_fecha_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_respuesta_txt_ws_fe_afip_cae_fecha_vencimiento' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae_fecha_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae_fecha_vencimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae_fecha_vencimiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_ws_fe_afip_cae_fecha_vencimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_cae_fecha_vencimiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_respuesta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_respuesta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ws_fe_ope_solicitud_respuesta_txa_observacion' rows='10' cols='50' id='ws_fe_ope_solicitud_respuesta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_respuesta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_respuesta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_respuesta->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ws_fe_ope_solicitud_respuesta_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ws_fe_ope_solicitud_respuesta'/>
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

