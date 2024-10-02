<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ENVIADO_ALTA')){
    echo "No tiene asignada la credencial VTA_NOTA_DEBITO_ENVIADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_nota_debito_enviado';
$db_nombre_pagina = 'vta_nota_debito_enviado_alta';

$vta_nota_debito_enviado = new VtaNotaDebitoEnviado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_nota_debito_enviado = new VtaNotaDebitoEnviado();
	if(trim($hdn_id) != '') $vta_nota_debito_enviado->setId($hdn_id, false);
	$vta_nota_debito_enviado->setDescripcion(Gral::getVars(1, "vta_nota_debito_enviado_txt_descripcion"));
	$vta_nota_debito_enviado->setVtaNotaDebitoId(Gral::getVars(1, "vta_nota_debito_enviado_cmb_vta_nota_debito_id", null));
	$vta_nota_debito_enviado->setAsunto(Gral::getVars(1, "vta_nota_debito_enviado_txt_asunto"));
	$vta_nota_debito_enviado->setDestinatario(Gral::getVars(1, "vta_nota_debito_enviado_txt_destinatario"));
	$vta_nota_debito_enviado->setCuerpo(Gral::getVars(1, "vta_nota_debito_enviado_txa_cuerpo"));
	$vta_nota_debito_enviado->setAdjunto(Gral::getVars(1, "vta_nota_debito_enviado_txa_adjunto"));
	$vta_nota_debito_enviado->setCodigoEnvio(Gral::getVars(1, "vta_nota_debito_enviado_txa_codigo_envio"));
	$vta_nota_debito_enviado->setCodigo(Gral::getVars(1, "vta_nota_debito_enviado_txt_codigo"));
	$vta_nota_debito_enviado->setObservacion(Gral::getVars(1, "vta_nota_debito_enviado_txa_observacion"));
	$vta_nota_debito_enviado->setOrden(Gral::getVars(1, "vta_nota_debito_enviado_txt_orden", 0));
	$vta_nota_debito_enviado->setEstado(Gral::getVars(1, "vta_nota_debito_enviado_cmb_estado", 0));
	$vta_nota_debito_enviado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_debito_enviado_txt_creado")));
	$vta_nota_debito_enviado->setCreadoPor(Gral::getVars(1, "vta_nota_debito_enviado__creado_por", 0));
	$vta_nota_debito_enviado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_debito_enviado_txt_modificado")));
	$vta_nota_debito_enviado->setModificadoPor(Gral::getVars(1, "vta_nota_debito_enviado__modificado_por", 0));

	$vta_nota_debito_enviado_estado = new VtaNotaDebitoEnviado();
	if(trim($hdn_id) != ''){
		$vta_nota_debito_enviado_estado->setId($hdn_id);
		$vta_nota_debito_enviado->setEstado($vta_nota_debito_enviado_estado->getEstado());
				
	}else{
		$vta_nota_debito_enviado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_nota_debito_enviado->control();
			if(!$error->getExisteError()){
				$vta_nota_debito_enviado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_nota_debito_enviado_alta.php?cs=1&id='.$vta_nota_debito_enviado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_nota_debito_enviado->control();
			if(!$error->getExisteError()){
				$vta_nota_debito_enviado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_nota_debito_enviado_alta.php?cs=1');
				$vta_nota_debito_enviado = new VtaNotaDebitoEnviado();
			}
		break;
	}
	Gral::setSes('VtaNotaDebitoEnviado_ULTIMO_INSERTADO', $vta_nota_debito_enviado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_nota_debito_enviado_id = Gral::getVars(2, $prefijo.'cmb_vta_nota_debito_enviado_id', 0);
	if($cmb_vta_nota_debito_enviado_id != 0){
		$vta_nota_debito_enviado = VtaNotaDebitoEnviado::getOxId($cmb_vta_nota_debito_enviado_id);
	}else{
	
	$vta_nota_debito_enviado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_nota_debito_enviado->setVtaNotaDebitoId(Gral::getVars(2, "vta_nota_debito_id", 'null'));
	$vta_nota_debito_enviado->setAsunto(Gral::getVars(2, "asunto", ''));
	$vta_nota_debito_enviado->setDestinatario(Gral::getVars(2, "destinatario", ''));
	$vta_nota_debito_enviado->setCuerpo(Gral::getVars(2, "cuerpo", ''));
	$vta_nota_debito_enviado->setAdjunto(Gral::getVars(2, "adjunto", ''));
	$vta_nota_debito_enviado->setCodigoEnvio(Gral::getVars(2, "codigo_envio", ''));
	$vta_nota_debito_enviado->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_nota_debito_enviado->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_nota_debito_enviado->setOrden(Gral::getVars(2, "orden", 0));
	$vta_nota_debito_enviado->setEstado(Gral::getVars(2, "estado", 0));
	$vta_nota_debito_enviado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_nota_debito_enviado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_nota_debito_enviado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_nota_debito_enviado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_nota_debito_enviado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_nota_debito_enviado/vta_nota_debito_enviado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_nota_debito_enviado' width='90%'>
        
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_debito_enviado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_enviado_txt_descripcion' value='<?php Gral::_echoTxt($vta_nota_debito_enviado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_cmb_vta_nota_debito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_debito_id' ?>" >
				  
                                        <?php Lang::_lang('VtaNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_cmb_vta_nota_debito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_nota_debito_enviado_cmb_vta_nota_debito_id', Gral::getCmbFiltro(VtaNotaDebito::getVtaNotaDebitosCmb(), '...'), $vta_nota_debito_enviado->getVtaNotaDebitoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ENVIADO_ALTA_CMB_EDIT_VTA_NOTA_DEBITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_nota_debito_enviado_cmb_vta_nota_debito_id" clase_id="vta_nota_debito" prefijo='vta_nota_debito_enviado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_nota_debito_id" <?php echo ($vta_nota_debito_enviado->getVtaNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_debito_enviado_cmb_vta_nota_debito_id" clase_id="vta_nota_debito" prefijo='vta_nota_debito_enviado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_debito_enviado_cmb_vta_nota_debito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_vta_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_vta_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_vta_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_vta_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_debito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txt_asunto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_asunto' ?>" >
				  
                                        <?php Lang::_lang('Asunto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txt_asunto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('asunto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_debito_enviado_txt_asunto' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_enviado_txt_asunto' value='<?php Gral::_echoTxt($vta_nota_debito_enviado->getAsunto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_asunto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_asunto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_asunto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_asunto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('asunto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txt_destinatario" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_destinatario' ?>" >
				  
                                        <?php Lang::_lang('Destinatario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txt_destinatario" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('destinatario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_debito_enviado_txt_destinatario' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_enviado_txt_destinatario' value='<?php Gral::_echoTxt($vta_nota_debito_enviado->getDestinatario(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_destinatario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_destinatario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_destinatario', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_destinatario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destinatario')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txa_cuerpo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuerpo' ?>" >
				  
                                        <?php Lang::_lang('Cuerpo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txa_cuerpo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuerpo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_nota_debito_enviado_txa_cuerpo' rows='10' cols='50' id='vta_nota_debito_enviado_txa_cuerpo' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_nota_debito_enviado->getCuerpo(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuerpo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txa_adjunto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_adjunto' ?>" >
				  
                                        <?php Lang::_lang('Adjunto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txa_adjunto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('adjunto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_nota_debito_enviado_txa_adjunto' rows='10' cols='50' id='vta_nota_debito_enviado_txa_adjunto' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_nota_debito_enviado->getAdjunto(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_adjunto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_adjunto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_adjunto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_adjunto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('adjunto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txa_codigo_envio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_envio' ?>" >
				  
                                        <?php Lang::_lang('Codigo de Envio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txa_codigo_envio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_envio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_nota_debito_enviado_txa_codigo_envio' rows='10' cols='50' id='vta_nota_debito_enviado_txa_codigo_envio' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_nota_debito_enviado->getCodigoEnvio(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_codigo_envio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_codigo_envio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_codigo_envio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_codigo_envio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_envio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_debito_enviado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_enviado_txt_codigo' value='<?php Gral::_echoTxt($vta_nota_debito_enviado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_enviado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_enviado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_nota_debito_enviado_txa_observacion' rows='10' cols='50' id='vta_nota_debito_enviado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_nota_debito_enviado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_nota_debito_enviado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_enviado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_enviado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_enviado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_nota_debito_enviado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_nota_debito_enviado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_nota_debito_enviado'/>
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

