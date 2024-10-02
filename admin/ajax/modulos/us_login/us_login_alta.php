<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_LOGIN_ALTA')){
    echo "No tiene asignada la credencial US_LOGIN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_login';
$db_nombre_pagina = 'us_login_alta';

$us_login = new UsLogin();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_login = new UsLogin();
	if(trim($hdn_id) != '') $us_login->setId($hdn_id, false);
	$us_login->setUsUsuarioId(Gral::getVars(1, "us_login_cmb_us_usuario_id", null));
	$us_login->setSession(Gral::getVars(1, "us_login_txt_session"));
	$us_login->setIp(Gral::getVars(1, "us_login_txt_ip"));
	$us_login->setExito(Gral::getVars(1, "us_login_txt_exito", 0));
	$us_login->setLogin(Gral::getVars(1, "us_login_cmb_login", 0));
	$us_login->setNavegador(Gral::getVars(1, "us_login_txt_navegador"));
	$us_login->setObservacion(Gral::getVars(1, "us_login_txa_observacion"));
	$us_login->setOrden(Gral::getVars(1, "us_login_txt_orden", 0));
	$us_login->setEstado(Gral::getVars(1, "us_login_cmb_estado", 0));
	$us_login->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_login_txt_creado")));
	$us_login->setCreadoPor(Gral::getVars(1, "us_login__creado_por", 0));
	$us_login->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_login_txt_modificado")));
	$us_login->setModificadoPor(Gral::getVars(1, "us_login__modificado_por", 0));

	$us_login_estado = new UsLogin();
	if(trim($hdn_id) != ''){
		$us_login_estado->setId($hdn_id);
		$us_login->setEstado($us_login_estado->getEstado());
				
	}else{
		$us_login->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_login->control();
			if(!$error->getExisteError()){
				$us_login->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_login_alta.php?cs=1&id='.$us_login->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_login->control();
			if(!$error->getExisteError()){
				$us_login->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_login_alta.php?cs=1');
				$us_login = new UsLogin();
			}
		break;
	}
	Gral::setSes('UsLogin_ULTIMO_INSERTADO', $us_login->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_login_id = Gral::getVars(2, $prefijo.'cmb_us_login_id', 0);
	if($cmb_us_login_id != 0){
		$us_login = UsLogin::getOxId($cmb_us_login_id);
	}else{
	
	$us_login->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_login->setSession(Gral::getVars(2, "session", ''));
	$us_login->setIp(Gral::getVars(2, "ip", ''));
	$us_login->setExito(Gral::getVars(2, "exito", 0));
	$us_login->setLogin(Gral::getVars(2, "login", 0));
	$us_login->setNavegador(Gral::getVars(2, "navegador", ''));
	$us_login->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_login->setOrden(Gral::getVars(2, "orden", 0));
	$us_login->setEstado(Gral::getVars(2, "estado", 0));
	$us_login->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_login->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_login->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_login->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_login->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_login/us_login_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_login' width='90%'>
        
				<tr>
				  <td  id="label_us_login_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_login_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_login_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $us_login->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_LOGIN_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_login_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_login_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($us_login->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_login_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_login_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_login_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_login_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_login_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_login_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_login_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_login_txt_session" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_session' ?>" >
				  
                                        <?php Lang::_lang('Session', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_login_txt_session" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('session')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_login_txt_session' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_login_txt_session' value='<?php Gral::_echoTxt($us_login->getSession(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_login_alta_session', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_login_alta_session', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_login_alta_session', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_login_alta_session', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('session')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_login_txt_ip" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ip' ?>" >
				  
                                        <?php Lang::_lang('IP', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_login_txt_ip" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ip')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_login_txt_ip' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_login_txt_ip' value='<?php Gral::_echoTxt($us_login->getIp(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_login_alta_ip', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_login_alta_ip', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_login_alta_ip', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_login_alta_ip', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ip')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_login_txt_exito" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_exito' ?>" >
				  
                                        <?php Lang::_lang('Exito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_login_txt_exito" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('exito')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_login_txt_exito' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_login_txt_exito' value='<?php Gral::_echoTxt($us_login->getExito(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_login_alta_exito', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_login_alta_exito', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_login_alta_exito', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_login_alta_exito', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('exito')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_login_cmb_login" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_login' ?>" >
				  
                                        <?php Lang::_lang('Login', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_login_cmb_login" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('login')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_login_cmb_login', GralSiNo::getGralSiNosCmb(), $us_login->getLogin(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_us_login_alta_login', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_login_alta_login', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_login_alta_login', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_login_alta_login', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('login')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_login_txt_navegador" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_navegador' ?>" >
				  
                                        <?php Lang::_lang('Navegador', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_login_txt_navegador" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('navegador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_login_txt_navegador' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_login_txt_navegador' value='<?php Gral::_echoTxt($us_login->getNavegador(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_login_alta_navegador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_login_alta_navegador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_login_alta_navegador', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_login_alta_navegador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('navegador')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_login_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_login_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_login_txa_observacion' rows='10' cols='50' id='us_login_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_login->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_login_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_login_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_login_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_login_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_login->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_login_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_login'/>
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

