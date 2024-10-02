<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ALTA')){
    echo "No tiene asignada la credencial ALT_ALERTA_US_USUARIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'alt_alerta_us_usuario';
$db_nombre_pagina = 'alt_alerta_us_usuario_alta';

$alt_alerta_us_usuario = new AltAlertaUsUsuario();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$alt_alerta_us_usuario = new AltAlertaUsUsuario();
	if(trim($hdn_id) != '') $alt_alerta_us_usuario->setId($hdn_id, false);
	$alt_alerta_us_usuario->setAltAlertaId(Gral::getVars(1, "alt_alerta_us_usuario_cmb_alt_alerta_id", null));
	$alt_alerta_us_usuario->setUsUsuarioId(Gral::getVars(1, "alt_alerta_us_usuario_cmb_us_usuario_id", null));
	$alt_alerta_us_usuario->setObservado(Gral::getVars(1, "alt_alerta_us_usuario_cmb_observado", 0));
	$alt_alerta_us_usuario->setLeido(Gral::getVars(1, "alt_alerta_us_usuario_cmb_leido", 0));
	$alt_alerta_us_usuario->setDestacado(Gral::getVars(1, "alt_alerta_us_usuario_cmb_destacado", 0));
	$alt_alerta_us_usuario->setAvisoEmail(Gral::getVars(1, "alt_alerta_us_usuario_cmb_aviso_email", 0));
	$alt_alerta_us_usuario->setAvisoSms(Gral::getVars(1, "alt_alerta_us_usuario_cmb_aviso_sms", 0));
	$alt_alerta_us_usuario->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_alerta_us_usuario_txt_creado")));
	$alt_alerta_us_usuario->setCreadoPor(Gral::getVars(1, "alt_alerta_us_usuario__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $alt_alerta_us_usuario->control();
			if(!$error->getExisteError()){
				$alt_alerta_us_usuario->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: alt_alerta_us_usuario_alta.php?cs=1&id='.$alt_alerta_us_usuario->getId());
			}
		break;
		case 'guardarnvo':
			$error = $alt_alerta_us_usuario->control();
			if(!$error->getExisteError()){
				$alt_alerta_us_usuario->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: alt_alerta_us_usuario_alta.php?cs=1');
				$alt_alerta_us_usuario = new AltAlertaUsUsuario();
			}
		break;
	}
	Gral::setSes('AltAlertaUsUsuario_ULTIMO_INSERTADO', $alt_alerta_us_usuario->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_alt_alerta_us_usuario_id = Gral::getVars(2, $prefijo.'cmb_alt_alerta_us_usuario_id', 0);
	if($cmb_alt_alerta_us_usuario_id != 0){
		$alt_alerta_us_usuario = AltAlertaUsUsuario::getOxId($cmb_alt_alerta_us_usuario_id);
	}else{
	
	$alt_alerta_us_usuario->setAltAlertaId(Gral::getVars(2, "alt_alerta_id", 'null'));
	$alt_alerta_us_usuario->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$alt_alerta_us_usuario->setObservado(Gral::getVars(2, "observado", 0));
	$alt_alerta_us_usuario->setLeido(Gral::getVars(2, "leido", 0));
	$alt_alerta_us_usuario->setDestacado(Gral::getVars(2, "destacado", 0));
	$alt_alerta_us_usuario->setAvisoEmail(Gral::getVars(2, "aviso_email", 0));
	$alt_alerta_us_usuario->setAvisoSms(Gral::getVars(2, "aviso_sms", 0));
	$alt_alerta_us_usuario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$alt_alerta_us_usuario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $alt_alerta_us_usuario->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/alt_alerta_us_usuario/alt_alerta_us_usuario_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_alt_alerta_us_usuario' width='90%'>
        
				<tr>
				  <td  id="label_alt_alerta_us_usuario_cmb_alt_alerta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alt_alerta_id' ?>" >
				  
                                        <?php Lang::_lang('Alerta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_us_usuario_cmb_alt_alerta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alt_alerta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_us_usuario_cmb_alt_alerta_id', Gral::getCmbFiltro(AltAlerta::getAltAlertasCmb(), '...'), $alt_alerta_us_usuario->getAltAlertaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ALTA_CMB_EDIT_ALT_ALERTA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_alerta_us_usuario_cmb_alt_alerta_id" clase_id="alt_alerta" prefijo='alt_alerta_us_usuario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_alt_alerta_id" <?php echo ($alt_alerta_us_usuario->getAltAlertaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_alerta_us_usuario_cmb_alt_alerta_id" clase_id="alt_alerta" prefijo='alt_alerta_us_usuario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_alerta_us_usuario_cmb_alt_alerta_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_alerta_us_usuario_alta_alt_alerta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_us_usuario_alta_alt_alerta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_us_usuario_alta_alt_alerta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_us_usuario_alta_alt_alerta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alt_alerta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_us_usuario_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_us_usuario_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_us_usuario_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $alt_alerta_us_usuario->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="alt_alerta_us_usuario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='alt_alerta_us_usuario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($alt_alerta_us_usuario->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="alt_alerta_us_usuario_cmb_us_usuario_id" clase_id="us_usuario" prefijo='alt_alerta_us_usuario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_alt_alerta_us_usuario_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_alt_alerta_us_usuario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_us_usuario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_us_usuario_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_us_usuario_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_us_usuario_cmb_observado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observado' ?>" >
				  
                                        <?php Lang::_lang('Observado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_us_usuario_cmb_observado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_us_usuario_cmb_observado', GralSiNo::getGralSiNosCmb(), $alt_alerta_us_usuario->getObservado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_alt_alerta_us_usuario_alta_observado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_us_usuario_alta_observado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_us_usuario_alta_observado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_us_usuario_alta_observado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_us_usuario_cmb_leido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_leido' ?>" >
				  
                                        <?php Lang::_lang('Leido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_us_usuario_cmb_leido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('leido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_us_usuario_cmb_leido', GralSiNo::getGralSiNosCmb(), $alt_alerta_us_usuario->getLeido(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_alt_alerta_us_usuario_alta_leido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_us_usuario_alta_leido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_us_usuario_alta_leido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_us_usuario_alta_leido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_us_usuario_cmb_destacado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_destacado' ?>" >
				  
                                        <?php Lang::_lang('Destacado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_us_usuario_cmb_destacado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('destacado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_us_usuario_cmb_destacado', GralSiNo::getGralSiNosCmb(), $alt_alerta_us_usuario->getDestacado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_alt_alerta_us_usuario_alta_destacado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_us_usuario_alta_destacado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_us_usuario_alta_destacado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_us_usuario_alta_destacado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destacado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_us_usuario_cmb_aviso_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aviso_email' ?>" >
				  
                                        <?php Lang::_lang('Aviso Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_us_usuario_cmb_aviso_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aviso_email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_us_usuario_cmb_aviso_email', GralSiNo::getGralSiNosCmb(), $alt_alerta_us_usuario->getAvisoEmail(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_alt_alerta_us_usuario_alta_aviso_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_us_usuario_alta_aviso_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_us_usuario_alta_aviso_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_us_usuario_alta_aviso_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aviso_email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_alerta_us_usuario_cmb_aviso_sms" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aviso_sms' ?>" >
				  
                                        <?php Lang::_lang('Aviso Sms', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_alerta_us_usuario_cmb_aviso_sms" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aviso_sms')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'alt_alerta_us_usuario_cmb_aviso_sms', GralSiNo::getGralSiNosCmb(), $alt_alerta_us_usuario->getAvisoSms(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_alt_alerta_us_usuario_alta_aviso_sms', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_alerta_us_usuario_alta_aviso_sms', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_alerta_us_usuario_alta_aviso_sms', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_alerta_us_usuario_alta_aviso_sms', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aviso_sms')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($alt_alerta_us_usuario->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_alt_alerta_us_usuario_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='alt_alerta_us_usuario'/>
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

