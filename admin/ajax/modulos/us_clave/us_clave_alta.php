<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_CLAVE_ALTA')){
    echo "No tiene asignada la credencial US_CLAVE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_clave';
$db_nombre_pagina = 'us_clave_alta';

$us_clave = new UsClave();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_clave = new UsClave();
	if(trim($hdn_id) != '') $us_clave->setId($hdn_id, false);
	$us_clave->setUsUsuarioId(Gral::getVars(1, "us_clave_cmb_us_usuario_id", null));
	$us_clave->setClave(Gral::getVars(1, "us_clave_txt_clave"));
	$us_clave->setObservacion(Gral::getVars(1, "us_clave_txa_observacion"));
	$us_clave->setEstado(Gral::getVars(1, "us_clave_cmb_estado", 0));
	$us_clave->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_clave_txt_creado")));
	$us_clave->setCreadoPor(Gral::getVars(1, "us_clave__creado_por", 0));
	$us_clave->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_clave_txt_modificado")));
	$us_clave->setModificadoPor(Gral::getVars(1, "us_clave__modificado_por", 0));

	$us_clave_estado = new UsClave();
	if(trim($hdn_id) != ''){
		$us_clave_estado->setId($hdn_id);
		$us_clave->setEstado($us_clave_estado->getEstado());
				
	}else{
		$us_clave->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_clave->control();
			if(!$error->getExisteError()){
				$us_clave->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: us_clave_alta.php?cs=1&id='.$us_clave->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_clave->control();
			if(!$error->getExisteError()){
				$us_clave->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_clave_alta.php?cs=1');
				$us_clave = new UsClave();
			}
		break;
	}
	Gral::setSes('UsClave_ULTIMO_INSERTADO', $us_clave->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_clave_id = Gral::getVars(2, $prefijo.'cmb_us_clave_id', 0);
	if($cmb_us_clave_id != 0){
		$us_clave = UsClave::getOxId($cmb_us_clave_id);
	}else{
	
	$us_clave->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$us_clave->setClave(Gral::getVars(2, "clave", ''));
	$us_clave->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_clave->setEstado(Gral::getVars(2, "estado", 0));
	$us_clave->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_clave->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_clave->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_clave->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_clave->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_clave/us_clave_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_clave' width='90%'>
        
				<tr>
				  <td  id="label_us_clave_cmb_us_usuario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_clave_cmb_us_usuario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_clave_cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $us_clave->getUsUsuarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_CLAVE_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_clave_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_clave_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($us_clave->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_clave_cmb_us_usuario_id" clase_id="us_usuario" prefijo='us_clave_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_clave_cmb_us_usuario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_clave_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_clave_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_clave_alta_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_clave_alta_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_clave_txt_clave" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_clave' ?>" >
				  
                                        <?php Lang::_lang('Clave', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_clave_txt_clave" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('clave')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_clave_txt_clave' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_clave_txt_clave' value='<?php Gral::_echoTxt($us_clave->getClave(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_clave_alta_clave', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_clave_alta_clave', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_clave_alta_clave', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_clave_alta_clave', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('clave')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_clave_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_clave_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_clave_txa_observacion' rows='10' cols='50' id='us_clave_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_clave->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_clave_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_clave_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_clave_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_clave_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_clave->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_clave_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_clave'/>
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

