<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ENVIADO_ALTA')){
    echo "No tiene asignada la credencial PDI_PEDIDO_AGRUPACION_ENVIADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pdi_pedido_agrupacion_enviado';
$db_nombre_pagina = 'pdi_pedido_agrupacion_enviado_alta';

$pdi_pedido_agrupacion_enviado = new PdiPedidoAgrupacionEnviado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pdi_pedido_agrupacion_enviado = new PdiPedidoAgrupacionEnviado();
	if(trim($hdn_id) != '') $pdi_pedido_agrupacion_enviado->setId($hdn_id, false);
	$pdi_pedido_agrupacion_enviado->setDescripcion(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txt_descripcion"));
	$pdi_pedido_agrupacion_enviado->setPdiPedidoAgrupacionId(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_cmb_pdi_pedido_agrupacion_id", null));
	$pdi_pedido_agrupacion_enviado->setAsunto(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txt_asunto"));
	$pdi_pedido_agrupacion_enviado->setDestinatario(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txt_destinatario"));
	$pdi_pedido_agrupacion_enviado->setCuerpo(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txa_cuerpo"));
	$pdi_pedido_agrupacion_enviado->setAdjunto(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txa_adjunto"));
	$pdi_pedido_agrupacion_enviado->setCodigoEnvio(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txa_codigo_envio"));
	$pdi_pedido_agrupacion_enviado->setCodigo(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txt_codigo"));
	$pdi_pedido_agrupacion_enviado->setObservacion(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txa_observacion"));
	$pdi_pedido_agrupacion_enviado->setOrden(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txt_orden", 0));
	$pdi_pedido_agrupacion_enviado->setEstado(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_cmb_estado", 0));
	$pdi_pedido_agrupacion_enviado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txt_creado")));
	$pdi_pedido_agrupacion_enviado->setCreadoPor(Gral::getVars(1, "pdi_pedido_agrupacion_enviado__creado_por", 0));
	$pdi_pedido_agrupacion_enviado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_agrupacion_enviado_txt_modificado")));
	$pdi_pedido_agrupacion_enviado->setModificadoPor(Gral::getVars(1, "pdi_pedido_agrupacion_enviado__modificado_por", 0));

	$pdi_pedido_agrupacion_enviado_estado = new PdiPedidoAgrupacionEnviado();
	if(trim($hdn_id) != ''){
		$pdi_pedido_agrupacion_enviado_estado->setId($hdn_id);
		$pdi_pedido_agrupacion_enviado->setEstado($pdi_pedido_agrupacion_enviado_estado->getEstado());
				
	}else{
		$pdi_pedido_agrupacion_enviado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pdi_pedido_agrupacion_enviado->control();
			if(!$error->getExisteError()){
				$pdi_pedido_agrupacion_enviado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pdi_pedido_agrupacion_enviado_alta.php?cs=1&id='.$pdi_pedido_agrupacion_enviado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_pedido_agrupacion_enviado->control();
			if(!$error->getExisteError()){
				$pdi_pedido_agrupacion_enviado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pdi_pedido_agrupacion_enviado_alta.php?cs=1');
				$pdi_pedido_agrupacion_enviado = new PdiPedidoAgrupacionEnviado();
			}
		break;
	}
	Gral::setSes('PdiPedidoAgrupacionEnviado_ULTIMO_INSERTADO', $pdi_pedido_agrupacion_enviado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pdi_pedido_agrupacion_enviado_id = Gral::getVars(2, $prefijo.'cmb_pdi_pedido_agrupacion_enviado_id', 0);
	if($cmb_pdi_pedido_agrupacion_enviado_id != 0){
		$pdi_pedido_agrupacion_enviado = PdiPedidoAgrupacionEnviado::getOxId($cmb_pdi_pedido_agrupacion_enviado_id);
	}else{
	
	$pdi_pedido_agrupacion_enviado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pdi_pedido_agrupacion_enviado->setPdiPedidoAgrupacionId(Gral::getVars(2, "pdi_pedido_agrupacion_id", 'null'));
	$pdi_pedido_agrupacion_enviado->setAsunto(Gral::getVars(2, "asunto", ''));
	$pdi_pedido_agrupacion_enviado->setDestinatario(Gral::getVars(2, "destinatario", ''));
	$pdi_pedido_agrupacion_enviado->setCuerpo(Gral::getVars(2, "cuerpo", ''));
	$pdi_pedido_agrupacion_enviado->setAdjunto(Gral::getVars(2, "adjunto", ''));
	$pdi_pedido_agrupacion_enviado->setCodigoEnvio(Gral::getVars(2, "codigo_envio", ''));
	$pdi_pedido_agrupacion_enviado->setCodigo(Gral::getVars(2, "codigo", ''));
	$pdi_pedido_agrupacion_enviado->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_pedido_agrupacion_enviado->setOrden(Gral::getVars(2, "orden", 0));
	$pdi_pedido_agrupacion_enviado->setEstado(Gral::getVars(2, "estado", 0));
	$pdi_pedido_agrupacion_enviado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_pedido_agrupacion_enviado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_pedido_agrupacion_enviado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_pedido_agrupacion_enviado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pdi_pedido_agrupacion_enviado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pdi_pedido_agrupacion_enviado/pdi_pedido_agrupacion_enviado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pdi_pedido_agrupacion_enviado' width='90%'>
        
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_agrupacion_enviado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_agrupacion_enviado_txt_descripcion' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_cmb_pdi_pedido_agrupacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_pedido_agrupacion_id' ?>" >
				  
                                        <?php Lang::_lang('PdiPedidoAgrupacionEnviado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_cmb_pdi_pedido_agrupacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_pedido_agrupacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_agrupacion_enviado_cmb_pdi_pedido_agrupacion_id', Gral::getCmbFiltro(PdiPedidoAgrupacion::getPdiPedidoAgrupacionsCmb(), '...'), $pdi_pedido_agrupacion_enviado->getPdiPedidoAgrupacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ENVIADO_ALTA_CMB_EDIT_PDI_PEDIDO_AGRUPACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_agrupacion_enviado_cmb_pdi_pedido_agrupacion_id" clase_id="pdi_pedido_agrupacion" prefijo='pdi_pedido_agrupacion_enviado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_pedido_agrupacion_id" <?php echo ($pdi_pedido_agrupacion_enviado->getPdiPedidoAgrupacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_agrupacion_enviado_cmb_pdi_pedido_agrupacion_id" clase_id="pdi_pedido_agrupacion" prefijo='pdi_pedido_agrupacion_enviado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_agrupacion_enviado_cmb_pdi_pedido_agrupacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_pdi_pedido_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_pdi_pedido_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_pdi_pedido_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_pdi_pedido_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_pedido_agrupacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txt_asunto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_asunto' ?>" >
				  
                                        <?php Lang::_lang('Asunto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txt_asunto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('asunto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_agrupacion_enviado_txt_asunto' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_agrupacion_enviado_txt_asunto' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getAsunto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_asunto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_asunto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_asunto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_asunto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('asunto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txt_destinatario" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_destinatario' ?>" >
				  
                                        <?php Lang::_lang('Destinatario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txt_destinatario" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('destinatario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_agrupacion_enviado_txt_destinatario' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_agrupacion_enviado_txt_destinatario' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getDestinatario(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_destinatario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_destinatario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_destinatario', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_destinatario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destinatario')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txa_cuerpo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuerpo' ?>" >
				  
                                        <?php Lang::_lang('Cuerpo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txa_cuerpo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuerpo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_agrupacion_enviado_txa_cuerpo' rows='10' cols='50' id='pdi_pedido_agrupacion_enviado_txa_cuerpo' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getCuerpo(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_cuerpo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_cuerpo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuerpo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txa_adjunto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_adjunto' ?>" >
				  
                                        <?php Lang::_lang('Adjunto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txa_adjunto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('adjunto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_agrupacion_enviado_txa_adjunto' rows='10' cols='50' id='pdi_pedido_agrupacion_enviado_txa_adjunto' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getAdjunto(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_adjunto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_adjunto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_adjunto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_adjunto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('adjunto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txa_codigo_envio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_envio' ?>" >
				  
                                        <?php Lang::_lang('Codigo de Envio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txa_codigo_envio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_envio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_agrupacion_enviado_txa_codigo_envio' rows='10' cols='50' id='pdi_pedido_agrupacion_enviado_txa_codigo_envio' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getCodigoEnvio(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_codigo_envio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_codigo_envio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_codigo_envio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_codigo_envio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_envio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_agrupacion_enviado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_agrupacion_enviado_txt_codigo' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_enviado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_enviado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_agrupacion_enviado_txa_observacion' rows='10' cols='50' id='pdi_pedido_agrupacion_enviado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_enviado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_enviado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_enviado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pdi_pedido_agrupacion_enviado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pdi_pedido_agrupacion_enviado'/>
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

