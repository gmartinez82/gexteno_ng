<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ALTA')){
    echo "No tiene asignada la credencial WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ws_fe_ope_solicitud_comprobante_asociado';
$db_nombre_pagina = 'ws_fe_ope_solicitud_comprobante_asociado_alta';

$ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud_comprobante_asociado->setId($hdn_id, false);
	$ws_fe_ope_solicitud_comprobante_asociado->setDescripcion(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_descripcion"));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_cmb_ws_fe_ope_solicitud_id", null));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_tipo_comprobante"));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_punto_venta"));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_numero"));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_cuit"));
	$ws_fe_ope_solicitud_comprobante_asociado->setCodigo(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_codigo"));
	$ws_fe_ope_solicitud_comprobante_asociado->setObservacion(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txa_observacion"));
	$ws_fe_ope_solicitud_comprobante_asociado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_creado")));
	$ws_fe_ope_solicitud_comprobante_asociado->setCreadoPor(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado__creado_por", null));
	$ws_fe_ope_solicitud_comprobante_asociado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado_txt_modificado")));
	$ws_fe_ope_solicitud_comprobante_asociado->setModificadoPor(Gral::getVars(1, "ws_fe_ope_solicitud_comprobante_asociado__modificado_por", null));

	$ws_fe_ope_solicitud_comprobante_asociado_estado = new WsFeOpeSolicitudComprobanteAsociado();
	if(trim($hdn_id) != ''){
		$ws_fe_ope_solicitud_comprobante_asociado_estado->setId($hdn_id);
		$ws_fe_ope_solicitud_comprobante_asociado->setEstado($ws_fe_ope_solicitud_comprobante_asociado_estado->getEstado());
				
	}else{
		$ws_fe_ope_solicitud_comprobante_asociado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_ope_solicitud_comprobante_asociado->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_comprobante_asociado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ws_fe_ope_solicitud_comprobante_asociado_alta.php?cs=1&id='.$ws_fe_ope_solicitud_comprobante_asociado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_ope_solicitud_comprobante_asociado->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_comprobante_asociado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ws_fe_ope_solicitud_comprobante_asociado_alta.php?cs=1');
				$ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
			}
		break;
	}
	Gral::setSes('WsFeOpeSolicitudComprobanteAsociado_ULTIMO_INSERTADO', $ws_fe_ope_solicitud_comprobante_asociado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ws_fe_ope_solicitud_comprobante_asociado_id = Gral::getVars(2, $prefijo.'cmb_ws_fe_ope_solicitud_comprobante_asociado_id', 0);
	if($cmb_ws_fe_ope_solicitud_comprobante_asociado_id != 0){
		$ws_fe_ope_solicitud_comprobante_asociado = WsFeOpeSolicitudComprobanteAsociado::getOxId($cmb_ws_fe_ope_solicitud_comprobante_asociado_id);
	}else{
	
	$ws_fe_ope_solicitud_comprobante_asociado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId(Gral::getVars(2, "ws_fe_ope_solicitud_id", 'null'));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante(Gral::getVars(2, "ws_fe_afip_tipo_comprobante", ''));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta(Gral::getVars(2, "ws_fe_afip_punto_venta", ''));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero(Gral::getVars(2, "ws_fe_afip_numero", ''));
	$ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(Gral::getVars(2, "ws_fe_afip_cuit", ''));
	$ws_fe_ope_solicitud_comprobante_asociado->setCodigo(Gral::getVars(2, "codigo", ''));
	$ws_fe_ope_solicitud_comprobante_asociado->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_ope_solicitud_comprobante_asociado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_comprobante_asociado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_ope_solicitud_comprobante_asociado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_comprobante_asociado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ws_fe_ope_solicitud_comprobante_asociado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ws_fe_ope_solicitud_comprobante_asociado/ws_fe_ope_solicitud_comprobante_asociado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ws_fe_ope_solicitud_comprobante_asociado' width='90%'>
        
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_comprobante_asociado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_comprobante_asociado_txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_cmb_ws_fe_ope_solicitud_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeOpeSolicitud', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_cmb_ws_fe_ope_solicitud_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_ope_solicitud_comprobante_asociado_cmb_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), $ws_fe_ope_solicitud_comprobante_asociado->getWsFeOpeSolicitudId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ALTA_CMB_EDIT_WS_FE_OPE_SOLICITUD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_ope_solicitud_comprobante_asociado_cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='ws_fe_ope_solicitud_comprobante_asociado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_ope_solicitud_id" <?php echo ($ws_fe_ope_solicitud_comprobante_asociado->getWsFeOpeSolicitudId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_ope_solicitud_comprobante_asociado_cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='ws_fe_ope_solicitud_comprobante_asociado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_ope_solicitud_comprobante_asociado_cmb_ws_fe_ope_solicitud_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_tipo_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_tipo_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_tipo_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_tipo_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_tipo_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_tipo_comprobante' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipTipoComprobante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_tipo_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_punto_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_punto_venta' ?>" >
				  
                                        <?php Lang::_lang('Punto de Venta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_punto_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_punto_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_punto_venta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_punto_venta' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipPuntoVenta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_punto_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_punto_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_punto_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_punto_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_numero' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_cuit' ?>" >
				  
                                        <?php Lang::_lang('Cuit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_cuit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_comprobante_asociado_txt_ws_fe_afip_cuit' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipCuit(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_cuit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_cuit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_cuit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_ws_fe_afip_cuit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_cuit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_ope_solicitud_comprobante_asociado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_ope_solicitud_comprobante_asociado_txt_codigo' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_ope_solicitud_comprobante_asociado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_ope_solicitud_comprobante_asociado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ws_fe_ope_solicitud_comprobante_asociado_txa_observacion' rows='10' cols='50' id='ws_fe_ope_solicitud_comprobante_asociado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_ope_solicitud_comprobante_asociado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_ope_solicitud_comprobante_asociado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_comprobante_asociado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ws_fe_ope_solicitud_comprobante_asociado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ws_fe_ope_solicitud_comprobante_asociado'/>
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

