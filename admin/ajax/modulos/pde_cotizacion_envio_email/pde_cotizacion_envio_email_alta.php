<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_COTIZACION_ENVIO_EMAIL_ALTA')){
    echo "No tiene asignada la credencial PDE_COTIZACION_ENVIO_EMAIL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_cotizacion_envio_email';
$db_nombre_pagina = 'pde_cotizacion_envio_email_alta';

$pde_cotizacion_envio_email = new PdeCotizacionEnvioEmail();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_cotizacion_envio_email = new PdeCotizacionEnvioEmail();
	if(trim($hdn_id) != '') $pde_cotizacion_envio_email->setId($hdn_id, false);
	$pde_cotizacion_envio_email->setDescripcion(Gral::getVars(1, "pde_cotizacion_envio_email_txt_descripcion"));
	$pde_cotizacion_envio_email->setPdeCotizacionId(Gral::getVars(1, "pde_cotizacion_envio_email_cmb_pde_cotizacion_id", null));
	$pde_cotizacion_envio_email->setPdeCotizacionDestinatarioId(Gral::getVars(1, "pde_cotizacion_envio_email_cmb_pde_cotizacion_destinatario_id", null));
	$pde_cotizacion_envio_email->setAsunto(Gral::getVars(1, "pde_cotizacion_envio_email_txt_asunto"));
	$pde_cotizacion_envio_email->setEmail(Gral::getVars(1, "pde_cotizacion_envio_email_txt_email"));
	$pde_cotizacion_envio_email->setCuerpo(Gral::getVars(1, "pde_cotizacion_envio_email_txa_cuerpo"));
	$pde_cotizacion_envio_email->setAdjunto(Gral::getVars(1, "pde_cotizacion_envio_email_txa_adjunto"));
	$pde_cotizacion_envio_email->setCodigoEnvio(Gral::getVars(1, "pde_cotizacion_envio_email_txa_codigo_envio"));
	$pde_cotizacion_envio_email->setCodigo(Gral::getVars(1, "pde_cotizacion_envio_email_txt_codigo"));
	$pde_cotizacion_envio_email->setObservacion(Gral::getVars(1, "pde_cotizacion_envio_email_txa_observacion"));
	$pde_cotizacion_envio_email->setOrden(Gral::getVars(1, "pde_cotizacion_envio_email_txt_orden", 0));
	$pde_cotizacion_envio_email->setEstado(Gral::getVars(1, "pde_cotizacion_envio_email_cmb_estado", 0));
	$pde_cotizacion_envio_email->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_cotizacion_envio_email_txt_creado")));
	$pde_cotizacion_envio_email->setCreadoPor(Gral::getVars(1, "pde_cotizacion_envio_email__creado_por", 0));
	$pde_cotizacion_envio_email->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_cotizacion_envio_email_txt_modificado")));
	$pde_cotizacion_envio_email->setModificadoPor(Gral::getVars(1, "pde_cotizacion_envio_email__modificado_por", 0));

	$pde_cotizacion_envio_email_estado = new PdeCotizacionEnvioEmail();
	if(trim($hdn_id) != ''){
		$pde_cotizacion_envio_email_estado->setId($hdn_id);
		$pde_cotizacion_envio_email->setEstado($pde_cotizacion_envio_email_estado->getEstado());
				
	}else{
		$pde_cotizacion_envio_email->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_cotizacion_envio_email->control();
			if(!$error->getExisteError()){
				$pde_cotizacion_envio_email->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_cotizacion_envio_email_alta.php?cs=1&id='.$pde_cotizacion_envio_email->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_cotizacion_envio_email->control();
			if(!$error->getExisteError()){
				$pde_cotizacion_envio_email->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_cotizacion_envio_email_alta.php?cs=1');
				$pde_cotizacion_envio_email = new PdeCotizacionEnvioEmail();
			}
		break;
	}
	Gral::setSes('PdeCotizacionEnvioEmail_ULTIMO_INSERTADO', $pde_cotizacion_envio_email->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_cotizacion_envio_email_id = Gral::getVars(2, $prefijo.'cmb_pde_cotizacion_envio_email_id', 0);
	if($cmb_pde_cotizacion_envio_email_id != 0){
		$pde_cotizacion_envio_email = PdeCotizacionEnvioEmail::getOxId($cmb_pde_cotizacion_envio_email_id);
	}else{
	
	$pde_cotizacion_envio_email->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_cotizacion_envio_email->setPdeCotizacionId(Gral::getVars(2, "pde_cotizacion_id", 'null'));
	$pde_cotizacion_envio_email->setPdeCotizacionDestinatarioId(Gral::getVars(2, "pde_cotizacion_destinatario_id", 'null'));
	$pde_cotizacion_envio_email->setAsunto(Gral::getVars(2, "asunto", ''));
	$pde_cotizacion_envio_email->setEmail(Gral::getVars(2, "email", ''));
	$pde_cotizacion_envio_email->setCuerpo(Gral::getVars(2, "cuerpo", ''));
	$pde_cotizacion_envio_email->setAdjunto(Gral::getVars(2, "adjunto", ''));
	$pde_cotizacion_envio_email->setCodigoEnvio(Gral::getVars(2, "codigo_envio", ''));
	$pde_cotizacion_envio_email->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_cotizacion_envio_email->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_cotizacion_envio_email->setOrden(Gral::getVars(2, "orden", 0));
	$pde_cotizacion_envio_email->setEstado(Gral::getVars(2, "estado", 0));
	$pde_cotizacion_envio_email->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_cotizacion_envio_email->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_cotizacion_envio_email->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_cotizacion_envio_email->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_cotizacion_envio_email->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_cotizacion_envio_email/pde_cotizacion_envio_email_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_cotizacion_envio_email' width='90%'>
        
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_envio_email_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_cotizacion_envio_email_txt_descripcion' value='<?php Gral::_echoTxt($pde_cotizacion_envio_email->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_cmb_pde_cotizacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_cotizacion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCotizacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_cmb_pde_cotizacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_cotizacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_cotizacion_envio_email_cmb_pde_cotizacion_id', Gral::getCmbFiltro(PdeCotizacion::getPdeCotizacionsCmb(), '...'), $pde_cotizacion_envio_email->getPdeCotizacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ENVIO_EMAIL_ALTA_CMB_EDIT_PDE_COTIZACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_cotizacion_envio_email_cmb_pde_cotizacion_id" clase_id="pde_cotizacion" prefijo='pde_cotizacion_envio_email_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_cotizacion_id" <?php echo ($pde_cotizacion_envio_email->getPdeCotizacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_cotizacion_envio_email_cmb_pde_cotizacion_id" clase_id="pde_cotizacion" prefijo='pde_cotizacion_envio_email_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_cotizacion_envio_email_cmb_pde_cotizacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_pde_cotizacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_pde_cotizacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_pde_cotizacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_pde_cotizacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_cotizacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_cmb_pde_cotizacion_destinatario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_cotizacion_destinatario_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCotizacionDestinatario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_cmb_pde_cotizacion_destinatario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_cotizacion_destinatario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_cotizacion_envio_email_cmb_pde_cotizacion_destinatario_id', Gral::getCmbFiltro(PdeCotizacionDestinatario::getPdeCotizacionDestinatariosCmb(), '...'), $pde_cotizacion_envio_email->getPdeCotizacionDestinatarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ENVIO_EMAIL_ALTA_CMB_EDIT_PDE_COTIZACION_DESTINATARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_cotizacion_envio_email_cmb_pde_cotizacion_destinatario_id" clase_id="pde_cotizacion_destinatario" prefijo='pde_cotizacion_envio_email_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_cotizacion_destinatario_id" <?php echo ($pde_cotizacion_envio_email->getPdeCotizacionDestinatarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_cotizacion_envio_email_cmb_pde_cotizacion_destinatario_id" clase_id="pde_cotizacion_destinatario" prefijo='pde_cotizacion_envio_email_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_cotizacion_envio_email_cmb_pde_cotizacion_destinatario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_pde_cotizacion_destinatario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_pde_cotizacion_destinatario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_pde_cotizacion_destinatario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_pde_cotizacion_destinatario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_cotizacion_destinatario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txt_asunto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_asunto' ?>" >
				  
                                        <?php Lang::_lang('Asunto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txt_asunto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('asunto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_envio_email_txt_asunto' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_cotizacion_envio_email_txt_asunto' value='<?php Gral::_echoTxt($pde_cotizacion_envio_email->getAsunto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_asunto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_asunto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_asunto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_asunto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('asunto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_envio_email_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_cotizacion_envio_email_txt_email' value='<?php Gral::_echoTxt($pde_cotizacion_envio_email->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txa_cuerpo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuerpo' ?>" >
				  
                                        <?php Lang::_lang('Cuerpo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txa_cuerpo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuerpo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_cotizacion_envio_email_txa_cuerpo' rows='10' cols='50' id='pde_cotizacion_envio_email_txa_cuerpo' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_cotizacion_envio_email->getCuerpo(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuerpo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txa_adjunto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_adjunto' ?>" >
				  
                                        <?php Lang::_lang('Adjunto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txa_adjunto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('adjunto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_cotizacion_envio_email_txa_adjunto' rows='10' cols='50' id='pde_cotizacion_envio_email_txa_adjunto' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_cotizacion_envio_email->getAdjunto(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_adjunto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_adjunto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_adjunto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_adjunto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('adjunto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txa_codigo_envio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_envio' ?>" >
				  
                                        <?php Lang::_lang('Codigo de Envio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txa_codigo_envio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_envio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_cotizacion_envio_email_txa_codigo_envio' rows='10' cols='50' id='pde_cotizacion_envio_email_txa_codigo_envio' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_cotizacion_envio_email->getCodigoEnvio(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_codigo_envio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_codigo_envio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_codigo_envio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_codigo_envio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_envio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_envio_email_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_cotizacion_envio_email_txt_codigo' value='<?php Gral::_echoTxt($pde_cotizacion_envio_email->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_envio_email_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_envio_email_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_cotizacion_envio_email_txa_observacion' rows='10' cols='50' id='pde_cotizacion_envio_email_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_cotizacion_envio_email->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_cotizacion_envio_email_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_envio_email_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_envio_email_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_envio_email_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_cotizacion_envio_email->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_cotizacion_envio_email_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_cotizacion_envio_email'/>
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

