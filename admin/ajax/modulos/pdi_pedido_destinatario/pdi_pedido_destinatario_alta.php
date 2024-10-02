<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ALTA')){
    echo "No tiene asignada la credencial PDI_PEDIDO_DESTINATARIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pdi_pedido_destinatario';
$db_nombre_pagina = 'pdi_pedido_destinatario_alta';

$pdi_pedido_destinatario = new PdiPedidoDestinatario();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pdi_pedido_destinatario = new PdiPedidoDestinatario();
	if(trim($hdn_id) != '') $pdi_pedido_destinatario->setId($hdn_id, false);
	$pdi_pedido_destinatario->setDescripcion(Gral::getVars(1, "pdi_pedido_destinatario_txt_descripcion"));
	$pdi_pedido_destinatario->setPdiPedidoId(Gral::getVars(1, "pdi_pedido_destinatario_cmb_pdi_pedido_id", null));
	$pdi_pedido_destinatario->setUsUsuarioId(Gral::getVars(1, "pdi_pedido_destinatario_cmb_us_usuario_id", null));
	$pdi_pedido_destinatario->setObservado(Gral::getVars(1, "pdi_pedido_destinatario_cmb_observado", 0));
	$pdi_pedido_destinatario->setLeido(Gral::getVars(1, "pdi_pedido_destinatario_cmb_leido", 0));
	$pdi_pedido_destinatario->setDestacado(Gral::getVars(1, "pdi_pedido_destinatario_cmb_destacado", 0));
	$pdi_pedido_destinatario->setAvisoEmail(Gral::getVars(1, "pdi_pedido_destinatario_cmb_aviso_email", 0));
	$pdi_pedido_destinatario->setAvisoSms(Gral::getVars(1, "pdi_pedido_destinatario_cmb_aviso_sms", 0));
	$pdi_pedido_destinatario->setCodigo(Gral::getVars(1, "pdi_pedido_destinatario_txt_codigo"));
	$pdi_pedido_destinatario->setObservacion(Gral::getVars(1, "pdi_pedido_destinatario_txa_observacion"));
	$pdi_pedido_destinatario->setOrden(Gral::getVars(1, "pdi_pedido_destinatario_txt_orden", 0));
	$pdi_pedido_destinatario->setEstado(Gral::getVars(1, "pdi_pedido_destinatario__estado", 0));
	$pdi_pedido_destinatario->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_destinatario_txt_creado")));
	$pdi_pedido_destinatario->setCreadoPor(Gral::getVars(1, "pdi_pedido_destinatario__creado_por", null));
	$pdi_pedido_destinatario->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_destinatario_txt_modificado")));
	$pdi_pedido_destinatario->setModificadoPor(Gral::getVars(1, "pdi_pedido_destinatario__modificado_por", null));

	$pdi_pedido_destinatario_estado = new PdiPedidoDestinatario();
	if(trim($hdn_id) != ''){
		$pdi_pedido_destinatario_estado->setId($hdn_id);
		$pdi_pedido_destinatario->setEstado($pdi_pedido_destinatario_estado->getEstado());
				
	}else{
		$pdi_pedido_destinatario->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pdi_pedido_destinatario->control();
			if(!$error->getExisteError()){
				$pdi_pedido_destinatario->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pdi_pedido_destinatario_alta.php?cs=1&id='.$pdi_pedido_destinatario->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_pedido_destinatario->control();
			if(!$error->getExisteError()){
				$pdi_pedido_destinatario->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pdi_pedido_destinatario_alta.php?cs=1');
				$pdi_pedido_destinatario = new PdiPedidoDestinatario();
			}
		break;
	}
	Gral::setSes('PdiPedidoDestinatario_ULTIMO_INSERTADO', $pdi_pedido_destinatario->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pdi_pedido_destinatario_id = Gral::getVars(2, $prefijo.'cmb_pdi_pedido_destinatario_id', 0);
	if($cmb_pdi_pedido_destinatario_id != 0){
		$pdi_pedido_destinatario = PdiPedidoDestinatario::getOxId($cmb_pdi_pedido_destinatario_id);
	}else{
	
	$pdi_pedido_destinatario->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pdi_pedido_destinatario->setPdiPedidoId(Gral::getVars(2, "pdi_pedido_id", 'null'));
	$pdi_pedido_destinatario->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$pdi_pedido_destinatario->setObservado(Gral::getVars(2, "observado", 0));
	$pdi_pedido_destinatario->setLeido(Gral::getVars(2, "leido", 0));
	$pdi_pedido_destinatario->setDestacado(Gral::getVars(2, "destacado", 0));
	$pdi_pedido_destinatario->setAvisoEmail(Gral::getVars(2, "aviso_email", 0));
	$pdi_pedido_destinatario->setAvisoSms(Gral::getVars(2, "aviso_sms", 0));
	$pdi_pedido_destinatario->setCodigo(Gral::getVars(2, "codigo", ''));
	$pdi_pedido_destinatario->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_pedido_destinatario->setOrden(Gral::getVars(2, "orden", 0));
	$pdi_pedido_destinatario->setEstado(Gral::getVars(2, "estado", 0));
	$pdi_pedido_destinatario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_pedido_destinatario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_pedido_destinatario->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_pedido_destinatario->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pdi_pedido_destinatario->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pdi_pedido_destinatario/pdi_pedido_destinatario_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pdi_pedido_destinatario' width='90%'>
        
				<tr>
				  <td  id="label_pdi_pedido_destinatario_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_destinatario_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_destinatario_txt_descripcion' value='<?php Gral::_echoTxt($pdi_pedido_destinatario->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_cmb_pdi_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdiPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_cmb_pdi_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_destinatario_cmb_pdi_pedido_id', Gral::getCmbFiltro(PdiPedido::getPdiPedidosCmb(), '...'), $pdi_pedido_destinatario->getPdiPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ALTA_CMB_EDIT_PDI_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_destinatario_cmb_pdi_pedido_id" clase_id="pdi_pedido" prefijo='pdi_pedido_destinatario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_pedido_id" <?php echo ($pdi_pedido_destinatario->getPdiPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_destinatario_cmb_pdi_pedido_id" clase_id="pdi_pedido" prefijo='pdi_pedido_destinatario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_destinatario_cmb_pdi_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_pdi_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_pdi_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_pdi_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_pdi_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('UsUsuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_destinatario_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $pdi_pedido_destinatario->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_destinatario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='pdi_pedido_destinatario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($pdi_pedido_destinatario->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_destinatario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='pdi_pedido_destinatario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_destinatario_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_cmb_observado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observado' ?>" >
				  
                                        <?php Lang::_lang('Observado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_cmb_observado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_destinatario_cmb_observado', GralSiNo::getGralSiNosCmb(), $pdi_pedido_destinatario->getObservado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_observado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_observado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_observado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_observado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_cmb_leido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_leido' ?>" >
				  
                                        <?php Lang::_lang('Leido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_cmb_leido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('leido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_destinatario_cmb_leido', GralSiNo::getGralSiNosCmb(), $pdi_pedido_destinatario->getLeido(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_leido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_leido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_leido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_leido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_cmb_destacado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_destacado' ?>" >
				  
                                        <?php Lang::_lang('Destacado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_cmb_destacado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('destacado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_destinatario_cmb_destacado', GralSiNo::getGralSiNosCmb(), $pdi_pedido_destinatario->getDestacado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_destacado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_destacado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_destacado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_destacado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destacado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_cmb_aviso_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aviso_email' ?>" >
				  
                                        <?php Lang::_lang('Aviso Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_cmb_aviso_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aviso_email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_destinatario_cmb_aviso_email', GralSiNo::getGralSiNosCmb(), $pdi_pedido_destinatario->getAvisoEmail(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_aviso_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_aviso_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_aviso_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_aviso_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aviso_email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_cmb_aviso_sms" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aviso_sms' ?>" >
				  
                                        <?php Lang::_lang('Aviso Sms', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_cmb_aviso_sms" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aviso_sms')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_destinatario_cmb_aviso_sms', GralSiNo::getGralSiNosCmb(), $pdi_pedido_destinatario->getAvisoSms(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_aviso_sms', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_aviso_sms', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_aviso_sms', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_aviso_sms', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aviso_sms')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_destinatario_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_destinatario_txt_codigo' value='<?php Gral::_echoTxt($pdi_pedido_destinatario->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_destinatario_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_destinatario_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_destinatario_txa_observacion' rows='10' cols='50' id='pdi_pedido_destinatario_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_destinatario->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_destinatario_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_destinatario_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_destinatario_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_destinatario_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_pedido_destinatario->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pdi_pedido_destinatario_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pdi_pedido_destinatario'/>
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

