<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_MENSAJE_ALTA')){
    echo "No tiene asignada la credencial US_MENSAJE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_mensaje';
$db_nombre_pagina = 'us_mensaje_alta';

$us_mensaje = new UsMensaje();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_mensaje = new UsMensaje();
	if(trim($hdn_id) != '') $us_mensaje->setId($hdn_id, false);
	$us_mensaje->setDescripcion(Gral::getVars(1, "us_mensaje_txt_descripcion"));
	$us_mensaje->setUsUsuarioId(Gral::getVars(1, "us_mensaje_cmb_us_usuario_id", null));
	$us_mensaje->setCodigo(Gral::getVars(1, "us_mensaje_txt_codigo"));
	$us_mensaje->setObservacion(Gral::getVars(1, "us_mensaje_txa_observacion"));
	$us_mensaje->setLeido(Gral::getVars(1, "us_mensaje_txt_leido", 0));
	$us_mensaje->setOrden(Gral::getVars(1, "us_mensaje_txt_orden", 0));
	$us_mensaje->setEstado(Gral::getVars(1, "us_mensaje_cmb_estado", 0));
	$us_mensaje->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_mensaje_txt_creado")));
	$us_mensaje->setCreadoPor(Gral::getVars(1, "us_mensaje__creado_por", 0));
	$us_mensaje->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_mensaje_txt_modificado")));
	$us_mensaje->setModificadoPor(Gral::getVars(1, "us_mensaje__modificado_por", 0));

	$us_mensaje_estado = new UsMensaje();
	if(trim($hdn_id) != ''){
		$us_mensaje_estado->setId($hdn_id);
		$us_mensaje->setEstado($us_mensaje_estado->getEstado());
				
	}else{
		$us_mensaje->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_mensaje->control();
			if(!$error->getExisteError()){
				$us_mensaje->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_mensaje_alta.php?cs=1&id='.$us_mensaje->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_mensaje->control();
			if(!$error->getExisteError()){
				$us_mensaje->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_mensaje_alta.php?cs=1');
				$us_mensaje = new UsMensaje();
			}
		break;
	}
	Gral::setSes('UsMensaje_ULTIMO_INSERTADO', $us_mensaje->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_mensaje_id = Gral::getVars(2, $prefijo.'cmb_us_mensaje_id', 0);
	if($cmb_us_mensaje_id != 0){
		$us_mensaje = UsMensaje::getOxId($cmb_us_mensaje_id);
	}else{
	
	$us_mensaje->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$us_mensaje->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_mensaje->setCodigo(Gral::getVars(2, "codigo", ''));
	$us_mensaje->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_mensaje->setLeido(Gral::getVars(2, "leido", 0));
	$us_mensaje->setOrden(Gral::getVars(2, "orden", 0));
	$us_mensaje->setEstado(Gral::getVars(2, "estado", 0));
	$us_mensaje->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_mensaje->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_mensaje->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_mensaje->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_mensaje->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_mensaje/us_mensaje_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_mensaje' width='90%'>
        
				<tr>
				  <td  id="label_us_mensaje_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_mensaje_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_mensaje_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_mensaje_txt_descripcion' value='<?php Gral::_echoTxt($us_mensaje->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_mensaje_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_mensaje_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_mensaje_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_mensaje_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_mensaje_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_mensaje_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_mensaje_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $us_mensaje->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_MENSAJE_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_mensaje_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_mensaje_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($us_mensaje->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_mensaje_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_mensaje_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_mensaje_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_mensaje_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_mensaje_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_mensaje_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_mensaje_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_mensaje_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_mensaje_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_mensaje_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_mensaje_txt_codigo' value='<?php Gral::_echoTxt($us_mensaje->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_mensaje_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_mensaje_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_mensaje_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_mensaje_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_mensaje_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_mensaje_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_mensaje_txa_observacion' rows='10' cols='50' id='us_mensaje_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_mensaje->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_mensaje_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_mensaje_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_mensaje_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_mensaje_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_mensaje_txt_leido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_leido' ?>" >
				  
                                        <?php Lang::_lang('Leido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_mensaje_txt_leido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('leido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_mensaje_txt_leido' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_mensaje_txt_leido' value='<?php Gral::_echoTxt($us_mensaje->getLeido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_mensaje_alta_leido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_mensaje_alta_leido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_mensaje_alta_leido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_mensaje_alta_leido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leido')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_mensaje->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_mensaje_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_mensaje'/>
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

