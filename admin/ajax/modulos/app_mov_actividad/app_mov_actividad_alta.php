<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('APP_MOV_ACTIVIDAD_ALTA')){
    echo "No tiene asignada la credencial APP_MOV_ACTIVIDAD_ALTA. ";
    return false;
}

$db_nombre_objeto = 'app_mov_actividad';
$db_nombre_pagina = 'app_mov_actividad_alta';

$app_mov_actividad = new AppMovActividad();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$app_mov_actividad = new AppMovActividad();
	if(trim($hdn_id) != '') $app_mov_actividad->setId($hdn_id, false);
	$app_mov_actividad->setDescripcion(Gral::getVars(1, "app_mov_actividad_txt_descripcion"));
	$app_mov_actividad->setAppMovInstalacionId(Gral::getVars(1, "app_mov_actividad_cmb_app_mov_instalacion_id", null));
	$app_mov_actividad->setAppMovDispositivoId(Gral::getVars(1, "app_mov_actividad_cmb_app_mov_dispositivo_id", null));
	$app_mov_actividad->setAppMovModuloId(Gral::getVars(1, "app_mov_actividad_cmb_app_mov_modulo_id", null));
	$app_mov_actividad->setGenApiTokenId(Gral::getVars(1, "app_mov_actividad_cmb_gen_api_token_id", null));
	$app_mov_actividad->setMetodo(Gral::getVars(1, "app_mov_actividad_txt_metodo"));
	$app_mov_actividad->setRegistros(Gral::getVars(1, "app_mov_actividad_txt_registros"));
	$app_mov_actividad->setCodigo(Gral::getVars(1, "app_mov_actividad_txt_codigo"));
	$app_mov_actividad->setFechaActividad(Gral::getFechaHoraToDb(Gral::getVars(1, "app_mov_actividad_txt_fecha_actividad")));
	$app_mov_actividad->setToken(Gral::getVars(1, "app_mov_actividad_txt_token"));
	$app_mov_actividad->setRespuesta(Gral::getVars(1, "app_mov_actividad_txa_respuesta"));
	$app_mov_actividad->setObservacion(Gral::getVars(1, "app_mov_actividad_txa_observacion"));
	$app_mov_actividad->setOrden(Gral::getVars(1, "app_mov_actividad_txt_orden", 0));
	$app_mov_actividad->setEstado(Gral::getVars(1, "app_mov_actividad__estado", 0));
	$app_mov_actividad->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "app_mov_actividad_txt_creado")));
	$app_mov_actividad->setCreadoPor(Gral::getVars(1, "app_mov_actividad__creado_por", null));
	$app_mov_actividad->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "app_mov_actividad_txt_modificado")));
	$app_mov_actividad->setModificadoPor(Gral::getVars(1, "app_mov_actividad__modificado_por", null));

	$app_mov_actividad_estado = new AppMovActividad();
	if(trim($hdn_id) != ''){
		$app_mov_actividad_estado->setId($hdn_id);
		$app_mov_actividad->setEstado($app_mov_actividad_estado->getEstado());
				
	}else{
		$app_mov_actividad->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $app_mov_actividad->control();
			if(!$error->getExisteError()){
				$app_mov_actividad->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: app_mov_actividad_alta.php?cs=1&id='.$app_mov_actividad->getId());
			}
		break;
		case 'guardarnvo':
			$error = $app_mov_actividad->control();
			if(!$error->getExisteError()){
				$app_mov_actividad->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: app_mov_actividad_alta.php?cs=1');
				$app_mov_actividad = new AppMovActividad();
			}
		break;
	}
	Gral::setSes('AppMovActividad_ULTIMO_INSERTADO', $app_mov_actividad->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_app_mov_actividad_id = Gral::getVars(2, $prefijo.'cmb_app_mov_actividad_id', 0);
	if($cmb_app_mov_actividad_id != 0){
		$app_mov_actividad = AppMovActividad::getOxId($cmb_app_mov_actividad_id);
	}else{
	
	$app_mov_actividad->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$app_mov_actividad->setAppMovInstalacionId(Gral::getVars(2, "app_mov_instalacion_id", 'null'));
	$app_mov_actividad->setAppMovDispositivoId(Gral::getVars(2, "app_mov_dispositivo_id", 'null'));
	$app_mov_actividad->setAppMovModuloId(Gral::getVars(2, "app_mov_modulo_id", 'null'));
	$app_mov_actividad->setGenApiTokenId(Gral::getVars(2, "gen_api_token_id", 'null'));
	$app_mov_actividad->setMetodo(Gral::getVars(2, "metodo", ''));
	$app_mov_actividad->setRegistros(Gral::getVars(2, "registros", ''));
	$app_mov_actividad->setCodigo(Gral::getVars(2, "codigo", ''));
	$app_mov_actividad->setFechaActividad(Gral::getVars(2, "fecha_actividad", date('Y-m-d H:m:s')));
	$app_mov_actividad->setToken(Gral::getVars(2, "token", ''));
	$app_mov_actividad->setRespuesta(Gral::getVars(2, "respuesta", ''));
	$app_mov_actividad->setObservacion(Gral::getVars(2, "observacion", ''));
	$app_mov_actividad->setOrden(Gral::getVars(2, "orden", 0));
	$app_mov_actividad->setEstado(Gral::getVars(2, "estado", 0));
	$app_mov_actividad->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$app_mov_actividad->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$app_mov_actividad->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$app_mov_actividad->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $app_mov_actividad->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/app_mov_actividad/app_mov_actividad_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_app_mov_actividad' width='90%'>
        
				<tr>
				  <td  id="label_app_mov_actividad_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_actividad_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_actividad_txt_descripcion' value='<?php Gral::_echoTxt($app_mov_actividad->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_cmb_app_mov_instalacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_app_mov_instalacion_id' ?>" >
				  
                                        <?php Lang::_lang('AppMovInstalacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_cmb_app_mov_instalacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('app_mov_instalacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'app_mov_actividad_cmb_app_mov_instalacion_id', Gral::getCmbFiltro(AppMovInstalacion::getAppMovInstalacionsCmb(), '...'), $app_mov_actividad->getAppMovInstalacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('APP_MOV_ACTIVIDAD_ALTA_CMB_EDIT_APP_MOV_INSTALACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="app_mov_actividad_cmb_app_mov_instalacion_id" clase_id="app_mov_instalacion" prefijo='app_mov_actividad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_app_mov_instalacion_id" <?php echo ($app_mov_actividad->getAppMovInstalacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="app_mov_actividad_cmb_app_mov_instalacion_id" clase_id="app_mov_instalacion" prefijo='app_mov_actividad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_app_mov_actividad_cmb_app_mov_instalacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_app_mov_instalacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_app_mov_instalacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_app_mov_instalacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_app_mov_instalacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('app_mov_instalacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_cmb_app_mov_dispositivo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_app_mov_dispositivo_id' ?>" >
				  
                                        <?php Lang::_lang('AppMovDispositivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_cmb_app_mov_dispositivo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('app_mov_dispositivo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'app_mov_actividad_cmb_app_mov_dispositivo_id', Gral::getCmbFiltro(AppMovDispositivo::getAppMovDispositivosCmb(), '...'), $app_mov_actividad->getAppMovDispositivoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('APP_MOV_ACTIVIDAD_ALTA_CMB_EDIT_APP_MOV_DISPOSITIVO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="app_mov_actividad_cmb_app_mov_dispositivo_id" clase_id="app_mov_dispositivo" prefijo='app_mov_actividad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_app_mov_dispositivo_id" <?php echo ($app_mov_actividad->getAppMovDispositivoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="app_mov_actividad_cmb_app_mov_dispositivo_id" clase_id="app_mov_dispositivo" prefijo='app_mov_actividad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_app_mov_actividad_cmb_app_mov_dispositivo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_app_mov_dispositivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_app_mov_dispositivo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_app_mov_dispositivo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_app_mov_dispositivo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('app_mov_dispositivo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_cmb_app_mov_modulo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_app_mov_modulo_id' ?>" >
				  
                                        <?php Lang::_lang('AppMovModulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_cmb_app_mov_modulo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('app_mov_modulo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'app_mov_actividad_cmb_app_mov_modulo_id', Gral::getCmbFiltro(AppMovModulo::getAppMovModulosCmb(), '...'), $app_mov_actividad->getAppMovModuloId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('APP_MOV_ACTIVIDAD_ALTA_CMB_EDIT_APP_MOV_MODULO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="app_mov_actividad_cmb_app_mov_modulo_id" clase_id="app_mov_modulo" prefijo='app_mov_actividad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_app_mov_modulo_id" <?php echo ($app_mov_actividad->getAppMovModuloId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="app_mov_actividad_cmb_app_mov_modulo_id" clase_id="app_mov_modulo" prefijo='app_mov_actividad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_app_mov_actividad_cmb_app_mov_modulo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_app_mov_modulo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_app_mov_modulo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_app_mov_modulo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_app_mov_modulo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('app_mov_modulo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_cmb_gen_api_token_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gen_api_token_id' ?>" >
				  
                                        <?php Lang::_lang('GenApiToken', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_cmb_gen_api_token_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gen_api_token_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'app_mov_actividad_cmb_gen_api_token_id', Gral::getCmbFiltro(GenApiToken::getGenApiTokensCmb(), '...'), $app_mov_actividad->getGenApiTokenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('APP_MOV_ACTIVIDAD_ALTA_CMB_EDIT_GEN_API_TOKEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="app_mov_actividad_cmb_gen_api_token_id" clase_id="gen_api_token" prefijo='app_mov_actividad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gen_api_token_id" <?php echo ($app_mov_actividad->getGenApiTokenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="app_mov_actividad_cmb_gen_api_token_id" clase_id="gen_api_token" prefijo='app_mov_actividad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_app_mov_actividad_cmb_gen_api_token_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_gen_api_token_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_gen_api_token_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_gen_api_token_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_gen_api_token_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gen_api_token_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_txt_metodo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_metodo' ?>" >
				  
                                        <?php Lang::_lang('Metodo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txt_metodo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('metodo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_actividad_txt_metodo' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_actividad_txt_metodo' value='<?php Gral::_echoTxt($app_mov_actividad->getMetodo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_metodo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_metodo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_metodo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_metodo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('metodo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_txt_registros" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_registros' ?>" >
				  
                                        <?php Lang::_lang('Registros', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txt_registros" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('registros')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_actividad_txt_registros' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_actividad_txt_registros' value='<?php Gral::_echoTxt($app_mov_actividad->getRegistros(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_registros', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_registros', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_registros', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_registros', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('registros')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_actividad_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_actividad_txt_codigo' value='<?php Gral::_echoTxt($app_mov_actividad->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_txt_fecha_actividad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_actividad' ?>" >
				  
                                        <?php Lang::_lang('Fecha Activ', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txt_fecha_actividad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_actividad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_actividad_txt_fecha_actividad' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='app_mov_actividad_txt_fecha_actividad' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($app_mov_actividad->getFechaActividad()), true) ?>' size='40' />
					<input type='button' id='cal_app_mov_actividad_txt_fecha_actividad' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'app_mov_actividad_txt_fecha_actividad', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_app_mov_actividad_txt_fecha_actividad'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_fecha_actividad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_fecha_actividad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_fecha_actividad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_fecha_actividad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_actividad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_txt_token" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_token' ?>" >
				  
                                        <?php Lang::_lang('Token', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txt_token" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('token')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_actividad_txt_token' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_actividad_txt_token' value='<?php Gral::_echoTxt($app_mov_actividad->getToken(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_token', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_token', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_token', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_token', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('token')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_txa_respuesta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_respuesta' ?>" >
				  
                                        <?php Lang::_lang('Respuesta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txa_respuesta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('respuesta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='app_mov_actividad_txa_respuesta' rows='10' cols='50' id='app_mov_actividad_txa_respuesta' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($app_mov_actividad->getRespuesta(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_respuesta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_respuesta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_respuesta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_respuesta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('respuesta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_actividad_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_actividad_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='app_mov_actividad_txa_observacion' rows='10' cols='50' id='app_mov_actividad_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($app_mov_actividad->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_app_mov_actividad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_actividad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_actividad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_actividad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($app_mov_actividad->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_app_mov_actividad_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='app_mov_actividad'/>
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

