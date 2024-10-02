<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECEPCION_DESTINATARIO_ALTA')){
    echo "No tiene asignada la credencial PDE_RECEPCION_DESTINATARIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recepcion_destinatario';
$db_nombre_pagina = 'pde_recepcion_destinatario_alta';

$pde_recepcion_destinatario = new PdeRecepcionDestinatario();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recepcion_destinatario = new PdeRecepcionDestinatario();
	if(trim($hdn_id) != '') $pde_recepcion_destinatario->setId($hdn_id, false);
	$pde_recepcion_destinatario->setDescripcion(Gral::getVars(1, "pde_recepcion_destinatario_txt_descripcion"));
	$pde_recepcion_destinatario->setPdeRecepcionId(Gral::getVars(1, "pde_recepcion_destinatario_cmb_pde_recepcion_id", null));
	$pde_recepcion_destinatario->setUsUsuarioId(Gral::getVars(1, "pde_recepcion_destinatario_cmb_us_usuario_id", null));
	$pde_recepcion_destinatario->setObservado(Gral::getVars(1, "pde_recepcion_destinatario_cmb_observado", 0));
	$pde_recepcion_destinatario->setLeido(Gral::getVars(1, "pde_recepcion_destinatario_cmb_leido", 0));
	$pde_recepcion_destinatario->setDestacado(Gral::getVars(1, "pde_recepcion_destinatario_cmb_destacado", 0));
	$pde_recepcion_destinatario->setAvisoEmail(Gral::getVars(1, "pde_recepcion_destinatario_cmb_aviso_email", 0));
	$pde_recepcion_destinatario->setAvisoSms(Gral::getVars(1, "pde_recepcion_destinatario_cmb_aviso_sms", 0));
	$pde_recepcion_destinatario->setCodigo(Gral::getVars(1, "pde_recepcion_destinatario_txt_codigo"));
	$pde_recepcion_destinatario->setObservacion(Gral::getVars(1, "pde_recepcion_destinatario_txa_observacion"));
	$pde_recepcion_destinatario->setOrden(Gral::getVars(1, "pde_recepcion_destinatario_txt_orden", 0));
	$pde_recepcion_destinatario->setEstado(Gral::getVars(1, "pde_recepcion_destinatario__estado", 0));
	$pde_recepcion_destinatario->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_destinatario_txt_creado")));
	$pde_recepcion_destinatario->setCreadoPor(Gral::getVars(1, "pde_recepcion_destinatario__creado_por", null));
	$pde_recepcion_destinatario->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_destinatario_txt_modificado")));
	$pde_recepcion_destinatario->setModificadoPor(Gral::getVars(1, "pde_recepcion_destinatario__modificado_por", null));

	$pde_recepcion_destinatario_estado = new PdeRecepcionDestinatario();
	if(trim($hdn_id) != ''){
		$pde_recepcion_destinatario_estado->setId($hdn_id);
		$pde_recepcion_destinatario->setEstado($pde_recepcion_destinatario_estado->getEstado());
				
	}else{
		$pde_recepcion_destinatario->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recepcion_destinatario->control();
			if(!$error->getExisteError()){
				$pde_recepcion_destinatario->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recepcion_destinatario_alta.php?cs=1&id='.$pde_recepcion_destinatario->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recepcion_destinatario->control();
			if(!$error->getExisteError()){
				$pde_recepcion_destinatario->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recepcion_destinatario_alta.php?cs=1');
				$pde_recepcion_destinatario = new PdeRecepcionDestinatario();
			}
		break;
	}
	Gral::setSes('PdeRecepcionDestinatario_ULTIMO_INSERTADO', $pde_recepcion_destinatario->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recepcion_destinatario_id = Gral::getVars(2, $prefijo.'cmb_pde_recepcion_destinatario_id', 0);
	if($cmb_pde_recepcion_destinatario_id != 0){
		$pde_recepcion_destinatario = PdeRecepcionDestinatario::getOxId($cmb_pde_recepcion_destinatario_id);
	}else{
	
	$pde_recepcion_destinatario->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recepcion_destinatario->setPdeRecepcionId(Gral::getVars(2, "pde_recepcion_id", 'null'));
	$pde_recepcion_destinatario->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$pde_recepcion_destinatario->setObservado(Gral::getVars(2, "observado", 0));
	$pde_recepcion_destinatario->setLeido(Gral::getVars(2, "leido", 0));
	$pde_recepcion_destinatario->setDestacado(Gral::getVars(2, "destacado", 0));
	$pde_recepcion_destinatario->setAvisoEmail(Gral::getVars(2, "aviso_email", 0));
	$pde_recepcion_destinatario->setAvisoSms(Gral::getVars(2, "aviso_sms", 0));
	$pde_recepcion_destinatario->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recepcion_destinatario->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recepcion_destinatario->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recepcion_destinatario->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recepcion_destinatario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recepcion_destinatario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recepcion_destinatario->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recepcion_destinatario->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recepcion_destinatario->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recepcion_destinatario/pde_recepcion_destinatario_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recepcion_destinatario' width='90%'>
        
				<tr>
				  <td  id="label_pde_recepcion_destinatario_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_destinatario_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_destinatario_txt_descripcion' value='<?php Gral::_echoTxt($pde_recepcion_destinatario->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_cmb_pde_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_cmb_pde_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_destinatario_cmb_pde_recepcion_id', Gral::getCmbFiltro(PdeRecepcion::getPdeRecepcionsCmb(), '...'), $pde_recepcion_destinatario->getPdeRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_DESTINATARIO_ALTA_CMB_EDIT_PDE_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_destinatario_cmb_pde_recepcion_id" clase_id="pde_recepcion" prefijo='pde_recepcion_destinatario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recepcion_id" <?php echo ($pde_recepcion_destinatario->getPdeRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_destinatario_cmb_pde_recepcion_id" clase_id="pde_recepcion" prefijo='pde_recepcion_destinatario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_destinatario_cmb_pde_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_pde_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_pde_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_pde_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_pde_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('UsUsuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_destinatario_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $pde_recepcion_destinatario->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_DESTINATARIO_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_destinatario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='pde_recepcion_destinatario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($pde_recepcion_destinatario->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_destinatario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='pde_recepcion_destinatario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_destinatario_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_cmb_observado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observado' ?>" >
				  
                                        <?php Lang::_lang('Observado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_cmb_observado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_destinatario_cmb_observado', GralSiNo::getGralSiNosCmb(), $pde_recepcion_destinatario->getObservado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_observado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_observado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_observado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_observado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_cmb_leido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_leido' ?>" >
				  
                                        <?php Lang::_lang('Leido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_cmb_leido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('leido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_destinatario_cmb_leido', GralSiNo::getGralSiNosCmb(), $pde_recepcion_destinatario->getLeido(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_leido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_leido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_leido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_leido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_cmb_destacado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_destacado' ?>" >
				  
                                        <?php Lang::_lang('Destacado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_cmb_destacado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('destacado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_destinatario_cmb_destacado', GralSiNo::getGralSiNosCmb(), $pde_recepcion_destinatario->getDestacado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_destacado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_destacado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_destacado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_destacado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destacado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_cmb_aviso_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aviso_email' ?>" >
				  
                                        <?php Lang::_lang('Aviso Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_cmb_aviso_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aviso_email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_destinatario_cmb_aviso_email', GralSiNo::getGralSiNosCmb(), $pde_recepcion_destinatario->getAvisoEmail(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_aviso_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_aviso_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_aviso_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_aviso_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aviso_email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_cmb_aviso_sms" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aviso_sms' ?>" >
				  
                                        <?php Lang::_lang('Aviso Sms', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_cmb_aviso_sms" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aviso_sms')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_destinatario_cmb_aviso_sms', GralSiNo::getGralSiNosCmb(), $pde_recepcion_destinatario->getAvisoSms(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_aviso_sms', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_aviso_sms', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_aviso_sms', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_aviso_sms', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aviso_sms')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_destinatario_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_destinatario_txt_codigo' value='<?php Gral::_echoTxt($pde_recepcion_destinatario->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_destinatario_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_destinatario_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recepcion_destinatario_txa_observacion' rows='10' cols='50' id='pde_recepcion_destinatario_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recepcion_destinatario->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recepcion_destinatario_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_destinatario_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_destinatario_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_destinatario_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recepcion_destinatario->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recepcion_destinatario_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recepcion_destinatario'/>
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

