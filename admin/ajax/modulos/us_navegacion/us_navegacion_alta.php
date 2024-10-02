<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_NAVEGACION_ALTA')){
    echo "No tiene asignada la credencial US_NAVEGACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_navegacion';
$db_nombre_pagina = 'us_navegacion_alta';

$us_navegacion = new UsNavegacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_navegacion = new UsNavegacion();
	if(trim($hdn_id) != '') $us_navegacion->setId($hdn_id, false);
	$us_navegacion->setUsUsuarioId(Gral::getVars(1, "us_navegacion_cmb_us_usuario_id", null));
	$us_navegacion->setSession(Gral::getVars(1, "us_navegacion_txt_session"));
	$us_navegacion->setIp(Gral::getVars(1, "us_navegacion_txt_ip"));
	$us_navegacion->setNavegador(Gral::getVars(1, "us_navegacion_txt_navegador"));
	$us_navegacion->setPagina(Gral::getVars(1, "us_navegacion_txt_pagina"));
	$us_navegacion->setUrl(Gral::getVars(1, "us_navegacion_txt_url"));
	$us_navegacion->setUrlReferer(Gral::getVars(1, "us_navegacion_txt_url_referer"));
	$us_navegacion->setObservacion(Gral::getVars(1, "us_navegacion_txa_observacion"));
	$us_navegacion->setOrden(Gral::getVars(1, "us_navegacion_txt_orden", 0));
	$us_navegacion->setEstado(Gral::getVars(1, "us_navegacion_cmb_estado", 0));
	$us_navegacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_navegacion_txt_creado")));
	$us_navegacion->setCreadoPor(Gral::getVars(1, "us_navegacion__creado_por", 0));
	$us_navegacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_navegacion_txt_modificado")));
	$us_navegacion->setModificadoPor(Gral::getVars(1, "us_navegacion__modificado_por", 0));

	$us_navegacion_estado = new UsNavegacion();
	if(trim($hdn_id) != ''){
		$us_navegacion_estado->setId($hdn_id);
		$us_navegacion->setEstado($us_navegacion_estado->getEstado());
				
	}else{
		$us_navegacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_navegacion->control();
			if(!$error->getExisteError()){
				$us_navegacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_navegacion_alta.php?cs=1&id='.$us_navegacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_navegacion->control();
			if(!$error->getExisteError()){
				$us_navegacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_navegacion_alta.php?cs=1');
				$us_navegacion = new UsNavegacion();
			}
		break;
	}
	Gral::setSes('UsNavegacion_ULTIMO_INSERTADO', $us_navegacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_navegacion_id = Gral::getVars(2, $prefijo.'cmb_us_navegacion_id', 0);
	if($cmb_us_navegacion_id != 0){
		$us_navegacion = UsNavegacion::getOxId($cmb_us_navegacion_id);
	}else{
	
	$us_navegacion->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_navegacion->setSession(Gral::getVars(2, "session", ''));
	$us_navegacion->setIp(Gral::getVars(2, "ip", ''));
	$us_navegacion->setNavegador(Gral::getVars(2, "navegador", ''));
	$us_navegacion->setPagina(Gral::getVars(2, "pagina", ''));
	$us_navegacion->setUrl(Gral::getVars(2, "url", ''));
	$us_navegacion->setUrlReferer(Gral::getVars(2, "url_referer", ''));
	$us_navegacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_navegacion->setOrden(Gral::getVars(2, "orden", 0));
	$us_navegacion->setEstado(Gral::getVars(2, "estado", 0));
	$us_navegacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_navegacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_navegacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_navegacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_navegacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_navegacion/us_navegacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_navegacion' width='90%'>
        
				<tr>
				  <td  id="label_us_navegacion_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_navegacion_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $us_navegacion->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_NAVEGACION_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_navegacion_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_navegacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($us_navegacion->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_navegacion_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_navegacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_navegacion_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_navegacion_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_navegacion_txt_session" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_session' ?>" >
				  
                                        <?php Lang::_lang('Session', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_txt_session" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('session')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_navegacion_txt_session' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_navegacion_txt_session' value='<?php Gral::_echoTxt($us_navegacion->getSession(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_navegacion_alta_session', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_session', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_session', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_session', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('session')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_navegacion_txt_ip" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ip' ?>" >
				  
                                        <?php Lang::_lang('IP', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_txt_ip" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ip')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_navegacion_txt_ip' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_navegacion_txt_ip' value='<?php Gral::_echoTxt($us_navegacion->getIp(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_navegacion_alta_ip', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_ip', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_ip', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_ip', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ip')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_navegacion_txt_navegador" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_navegador' ?>" >
				  
                                        <?php Lang::_lang('Navegador', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_txt_navegador" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('navegador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_navegacion_txt_navegador' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_navegacion_txt_navegador' value='<?php Gral::_echoTxt($us_navegacion->getNavegador(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_navegacion_alta_navegador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_navegador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_navegador', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_navegador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('navegador')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_navegacion_txt_pagina" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pagina' ?>" >
				  
                                        <?php Lang::_lang('Pagina', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_txt_pagina" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pagina')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_navegacion_txt_pagina' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_navegacion_txt_pagina' value='<?php Gral::_echoTxt($us_navegacion->getPagina(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_navegacion_alta_pagina', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_pagina', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_pagina', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_pagina', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pagina')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_navegacion_txt_url" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_url' ?>" >
				  
                                        <?php Lang::_lang('Url', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_txt_url" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('url')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_navegacion_txt_url' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_navegacion_txt_url' value='<?php Gral::_echoTxt($us_navegacion->getUrl(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_navegacion_alta_url', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_url', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_url', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_url', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('url')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_navegacion_txt_url_referer" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_url_referer' ?>" >
				  
                                        <?php Lang::_lang('Url Anterior', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_txt_url_referer" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('url_referer')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_navegacion_txt_url_referer' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_navegacion_txt_url_referer' value='<?php Gral::_echoTxt($us_navegacion->getUrlReferer(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_navegacion_alta_url_referer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_url_referer', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_url_referer', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_url_referer', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('url_referer')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_navegacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_navegacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_navegacion_txa_observacion' rows='10' cols='50' id='us_navegacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_navegacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_navegacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_navegacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_navegacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_navegacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_navegacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_navegacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_navegacion'/>
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

