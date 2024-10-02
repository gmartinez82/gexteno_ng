<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_USUARIO_AUDITORIA_ALTA')){
    echo "No tiene asignada la credencial US_USUARIO_AUDITORIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_usuario_auditoria';
$db_nombre_pagina = 'us_usuario_auditoria_alta';

$us_usuario_auditoria = new UsUsuarioAuditoria();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_usuario_auditoria = new UsUsuarioAuditoria();
	if(trim($hdn_id) != '') $us_usuario_auditoria->setId($hdn_id, false);
	$us_usuario_auditoria->setDescripcion(Gral::getVars(1, "us_usuario_auditoria_txt_descripcion"));
	$us_usuario_auditoria->setUsUsuarioId(Gral::getVars(1, "us_usuario_auditoria_cmb_us_usuario_id", null));
	$us_usuario_auditoria->setTabla(Gral::getVars(1, "us_usuario_auditoria_txt_tabla"));
	$us_usuario_auditoria->setAccion(Gral::getVars(1, "us_usuario_auditoria_txt_accion"));
	$us_usuario_auditoria->setPagina(Gral::getVars(1, "us_usuario_auditoria_txt_pagina"));
	$us_usuario_auditoria->setUrl(Gral::getVars(1, "us_usuario_auditoria_txt_url"));
	$us_usuario_auditoria->setComando(Gral::getVars(1, "us_usuario_auditoria_txa_comando"));
	$us_usuario_auditoria->setDatoBefore(Gral::getVars(1, "us_usuario_auditoria_txa_dato_before"));
	$us_usuario_auditoria->setDatoAfter(Gral::getVars(1, "us_usuario_auditoria_txa_dato_after"));
	$us_usuario_auditoria->setObservacion(Gral::getVars(1, "us_usuario_auditoria_txa_observacion"));
	$us_usuario_auditoria->setOrden(Gral::getVars(1, "us_usuario_auditoria_txt_orden", 0));
	$us_usuario_auditoria->setEstado(Gral::getVars(1, "us_usuario_auditoria_cmb_estado", 0));
	$us_usuario_auditoria->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_usuario_auditoria_txt_creado")));
	$us_usuario_auditoria->setCreadoPor(Gral::getVars(1, "us_usuario_auditoria__creado_por", 0));
	$us_usuario_auditoria->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_usuario_auditoria_txt_modificado")));
	$us_usuario_auditoria->setModificadoPor(Gral::getVars(1, "us_usuario_auditoria__modificado_por", 0));

	$us_usuario_auditoria_estado = new UsUsuarioAuditoria();
	if(trim($hdn_id) != ''){
		$us_usuario_auditoria_estado->setId($hdn_id);
		$us_usuario_auditoria->setEstado($us_usuario_auditoria_estado->getEstado());
				
	}else{
		$us_usuario_auditoria->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_usuario_auditoria->control();
			if(!$error->getExisteError()){
				$us_usuario_auditoria->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_usuario_auditoria_alta.php?cs=1&id='.$us_usuario_auditoria->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_usuario_auditoria->control();
			if(!$error->getExisteError()){
				$us_usuario_auditoria->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_usuario_auditoria_alta.php?cs=1');
				$us_usuario_auditoria = new UsUsuarioAuditoria();
			}
		break;
	}
	Gral::setSes('UsUsuarioAuditoria_ULTIMO_INSERTADO', $us_usuario_auditoria->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_usuario_auditoria_id = Gral::getVars(2, $prefijo.'cmb_us_usuario_auditoria_id', 0);
	if($cmb_us_usuario_auditoria_id != 0){
		$us_usuario_auditoria = UsUsuarioAuditoria::getOxId($cmb_us_usuario_auditoria_id);
	}else{
	
	$us_usuario_auditoria->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$us_usuario_auditoria->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_usuario_auditoria->setTabla(Gral::getVars(2, "tabla", ''));
	$us_usuario_auditoria->setAccion(Gral::getVars(2, "accion", ''));
	$us_usuario_auditoria->setPagina(Gral::getVars(2, "pagina", ''));
	$us_usuario_auditoria->setUrl(Gral::getVars(2, "url", ''));
	$us_usuario_auditoria->setComando(Gral::getVars(2, "comando", ''));
	$us_usuario_auditoria->setDatoBefore(Gral::getVars(2, "dato_before", ''));
	$us_usuario_auditoria->setDatoAfter(Gral::getVars(2, "dato_after", ''));
	$us_usuario_auditoria->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_usuario_auditoria->setOrden(Gral::getVars(2, "orden", 0));
	$us_usuario_auditoria->setEstado(Gral::getVars(2, "estado", 0));
	$us_usuario_auditoria->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_usuario_auditoria->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_usuario_auditoria->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_usuario_auditoria->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_usuario_auditoria->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_usuario_auditoria/us_usuario_auditoria_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_usuario_auditoria' width='90%'>
        
				<tr>
				  <td  id="label_us_usuario_auditoria_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_auditoria_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_auditoria_txt_descripcion' value='<?php Gral::_echoTxt($us_usuario_auditoria->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_usuario_auditoria_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $us_usuario_auditoria->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_USUARIO_AUDITORIA_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_usuario_auditoria_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_usuario_auditoria_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($us_usuario_auditoria->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_usuario_auditoria_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_usuario_auditoria_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_usuario_auditoria_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txt_tabla" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_tabla' ?>" >
				  
                                        <?php Lang::_lang('Tabla', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txt_tabla" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('tabla')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_auditoria_txt_tabla' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_auditoria_txt_tabla' value='<?php Gral::_echoTxt($us_usuario_auditoria->getTabla(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_tabla', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_tabla', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_tabla', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_tabla', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tabla')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txt_accion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_accion' ?>" >
				  
                                        <?php Lang::_lang('Accion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txt_accion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('accion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_auditoria_txt_accion' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_auditoria_txt_accion' value='<?php Gral::_echoTxt($us_usuario_auditoria->getAccion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_accion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_accion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_accion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_accion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('accion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txt_pagina" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pagina' ?>" >
				  
                                        <?php Lang::_lang('Pagina', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txt_pagina" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pagina')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_auditoria_txt_pagina' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_auditoria_txt_pagina' value='<?php Gral::_echoTxt($us_usuario_auditoria->getPagina(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_pagina', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_pagina', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_pagina', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_pagina', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pagina')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txt_url" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_url' ?>" >
				  
                                        <?php Lang::_lang('Url', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txt_url" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('url')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_auditoria_txt_url' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_auditoria_txt_url' value='<?php Gral::_echoTxt($us_usuario_auditoria->getUrl(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_url', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_url', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_url', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_url', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('url')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txa_comando" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_comando' ?>" >
				  
                                        <?php Lang::_lang('Comando', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txa_comando" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('comando')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_usuario_auditoria_txa_comando' rows='5' cols='70' id='us_usuario_auditoria_txa_comando' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_usuario_auditoria->getComando(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_comando', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_comando', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_comando', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_comando', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('comando')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txa_dato_before" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_dato_before' ?>" >
				  
                                        <?php Lang::_lang('Before', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txa_dato_before" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('dato_before')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_usuario_auditoria_txa_dato_before' rows='20' cols='70' id='us_usuario_auditoria_txa_dato_before' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_usuario_auditoria->getDatoBefore(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_dato_before', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_dato_before', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_dato_before', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_dato_before', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('dato_before')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txa_dato_after" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_dato_after' ?>" >
				  
                                        <?php Lang::_lang('After', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txa_dato_after" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('dato_after')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_usuario_auditoria_txa_dato_after' rows='20' cols='70' id='us_usuario_auditoria_txa_dato_after' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_usuario_auditoria->getDatoAfter(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_dato_after', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_dato_after', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_dato_after', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_dato_after', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('dato_after')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_auditoria_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_auditoria_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_usuario_auditoria_txa_observacion' rows='10' cols='50' id='us_usuario_auditoria_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_usuario_auditoria->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_usuario_auditoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_auditoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_auditoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_auditoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_usuario_auditoria->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_usuario_auditoria_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_usuario_auditoria'/>
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

