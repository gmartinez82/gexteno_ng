<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ML_AUTORIZATION_ALTA')){
    echo "No tiene asignada la credencial ML_AUTORIZATION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ml_autorization';
$db_nombre_pagina = 'ml_autorization_alta';

$ml_autorization = new MlAutorization();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ml_autorization = new MlAutorization();
	if(trim($hdn_id) != '') $ml_autorization->setId($hdn_id, false);
	$ml_autorization->setDescripcion(Gral::getVars(1, "ml_autorization_txt_descripcion"));
	$ml_autorization->setCodigo(Gral::getVars(1, "ml_autorization_txt_codigo"));
	$ml_autorization->setMlAccessToken(Gral::getVars(1, "ml_autorization_txt_ml_access_token"));
	$ml_autorization->setMlRefreshCode(Gral::getVars(1, "ml_autorization_txt_ml_refresh_code"));
	$ml_autorization->setInicial(Gral::getVars(1, "ml_autorization_cmb_inicial", 0));
	$ml_autorization->setActual(Gral::getVars(1, "ml_autorization_cmb_actual", 0));
	$ml_autorization->setObservacion(Gral::getVars(1, "ml_autorization_txa_observacion"));
	$ml_autorization->setOrden(Gral::getVars(1, "ml_autorization_txt_orden", 0));
	$ml_autorization->setEstado(Gral::getVars(1, "ml_autorization__estado", 0));
	$ml_autorization->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_autorization_txt_creado")));
	$ml_autorization->setCreadoPor(Gral::getVars(1, "ml_autorization__creado_por", 0));
	$ml_autorization->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_autorization_txt_modificado")));
	$ml_autorization->setModificadoPor(Gral::getVars(1, "ml_autorization__modificado_por", 0));

	$ml_autorization_estado = new MlAutorization();
	if(trim($hdn_id) != ''){
		$ml_autorization_estado->setId($hdn_id);
		$ml_autorization->setEstado($ml_autorization_estado->getEstado());
				
	}else{
		$ml_autorization->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ml_autorization->control();
			if(!$error->getExisteError()){
				$ml_autorization->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ml_autorization_alta.php?cs=1&id='.$ml_autorization->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ml_autorization->control();
			if(!$error->getExisteError()){
				$ml_autorization->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ml_autorization_alta.php?cs=1');
				$ml_autorization = new MlAutorization();
			}
		break;
	}
	Gral::setSes('MlAutorization_ULTIMO_INSERTADO', $ml_autorization->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ml_autorization_id = Gral::getVars(2, $prefijo.'cmb_ml_autorization_id', 0);
	if($cmb_ml_autorization_id != 0){
		$ml_autorization = MlAutorization::getOxId($cmb_ml_autorization_id);
	}else{
	
	$ml_autorization->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ml_autorization->setCodigo(Gral::getVars(2, "codigo", ''));
	$ml_autorization->setMlAccessToken(Gral::getVars(2, "ml_access_token", ''));
	$ml_autorization->setMlRefreshCode(Gral::getVars(2, "ml_refresh_code", ''));
	$ml_autorization->setInicial(Gral::getVars(2, "inicial", 0));
	$ml_autorization->setActual(Gral::getVars(2, "actual", 0));
	$ml_autorization->setObservacion(Gral::getVars(2, "observacion", ''));
	$ml_autorization->setOrden(Gral::getVars(2, "orden", 0));
	$ml_autorization->setEstado(Gral::getVars(2, "estado", 0));
	$ml_autorization->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ml_autorization->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ml_autorization->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ml_autorization->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ml_autorization->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ml_autorization/ml_autorization_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ml_autorization' width='90%'>
        
				<tr>
				  <td  id="label_ml_autorization_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_autorization_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_autorization_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_autorization_txt_descripcion' value='<?php Gral::_echoTxt($ml_autorization->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ml_autorization_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_autorization_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_autorization_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_autorization_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_autorization_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_autorization_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_autorization_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_autorization_txt_codigo' value='<?php Gral::_echoTxt($ml_autorization->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ml_autorization_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_autorization_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_autorization_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_autorization_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_autorization_txt_ml_access_token" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_access_token' ?>" >
				  
                                        <?php Lang::_lang('ML Access Token', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_autorization_txt_ml_access_token" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_access_token')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_autorization_txt_ml_access_token' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_autorization_txt_ml_access_token' value='<?php Gral::_echoTxt($ml_autorization->getMlAccessToken(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ml_autorization_alta_ml_access_token', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_autorization_alta_ml_access_token', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_autorization_alta_ml_access_token', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_autorization_alta_ml_access_token', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_access_token')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_autorization_txt_ml_refresh_code" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_refresh_code' ?>" >
				  
                                        <?php Lang::_lang('ML Refresh Code', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_autorization_txt_ml_refresh_code" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_refresh_code')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_autorization_txt_ml_refresh_code' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_autorization_txt_ml_refresh_code' value='<?php Gral::_echoTxt($ml_autorization->getMlRefreshCode(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ml_autorization_alta_ml_refresh_code', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_autorization_alta_ml_refresh_code', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_autorization_alta_ml_refresh_code', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_autorization_alta_ml_refresh_code', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_refresh_code')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_autorization_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_autorization_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ml_autorization_txa_observacion' rows='10' cols='50' id='ml_autorization_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ml_autorization->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ml_autorization_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_autorization_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_autorization_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_autorization_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ml_autorization->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ml_autorization_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ml_autorization'/>
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

