<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ML_ATTRIBUTE_TYPE_ALTA')){
    echo "No tiene asignada la credencial ML_ATTRIBUTE_TYPE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ml_attribute_type';
$db_nombre_pagina = 'ml_attribute_type_alta';

$ml_attribute_type = new MlAttributeType();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ml_attribute_type = new MlAttributeType();
	if(trim($hdn_id) != '') $ml_attribute_type->setId($hdn_id, false);
	$ml_attribute_type->setDescripcion(Gral::getVars(1, "ml_attribute_type_txt_descripcion"));
	$ml_attribute_type->setCodigo(Gral::getVars(1, "ml_attribute_type_txt_codigo"));
	$ml_attribute_type->setCodigoMl(Gral::getVars(1, "ml_attribute_type_txt_codigo_ml"));
	$ml_attribute_type->setObservacion(Gral::getVars(1, "ml_attribute_type_txa_observacion"));
	$ml_attribute_type->setOrden(Gral::getVars(1, "ml_attribute_type_txt_orden", 0));
	$ml_attribute_type->setEstado(Gral::getVars(1, "ml_attribute_type__estado", 0));
	$ml_attribute_type->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_attribute_type_txt_creado")));
	$ml_attribute_type->setCreadoPor(Gral::getVars(1, "ml_attribute_type__creado_por", 0));
	$ml_attribute_type->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_attribute_type_txt_modificado")));
	$ml_attribute_type->setModificadoPor(Gral::getVars(1, "ml_attribute_type__modificado_por", 0));

	$ml_attribute_type_estado = new MlAttributeType();
	if(trim($hdn_id) != ''){
		$ml_attribute_type_estado->setId($hdn_id);
		$ml_attribute_type->setEstado($ml_attribute_type_estado->getEstado());
				
	}else{
		$ml_attribute_type->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ml_attribute_type->control();
			if(!$error->getExisteError()){
				$ml_attribute_type->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ml_attribute_type_alta.php?cs=1&id='.$ml_attribute_type->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ml_attribute_type->control();
			if(!$error->getExisteError()){
				$ml_attribute_type->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ml_attribute_type_alta.php?cs=1');
				$ml_attribute_type = new MlAttributeType();
			}
		break;
	}
	Gral::setSes('MlAttributeType_ULTIMO_INSERTADO', $ml_attribute_type->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ml_attribute_type_id = Gral::getVars(2, $prefijo.'cmb_ml_attribute_type_id', 0);
	if($cmb_ml_attribute_type_id != 0){
		$ml_attribute_type = MlAttributeType::getOxId($cmb_ml_attribute_type_id);
	}else{
	
	$ml_attribute_type->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ml_attribute_type->setCodigo(Gral::getVars(2, "codigo", ''));
	$ml_attribute_type->setCodigoMl(Gral::getVars(2, "codigo_ml", ''));
	$ml_attribute_type->setObservacion(Gral::getVars(2, "observacion", ''));
	$ml_attribute_type->setOrden(Gral::getVars(2, "orden", 0));
	$ml_attribute_type->setEstado(Gral::getVars(2, "estado", 0));
	$ml_attribute_type->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ml_attribute_type->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ml_attribute_type->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ml_attribute_type->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ml_attribute_type->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ml_attribute_type/ml_attribute_type_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ml_attribute_type' width='90%'>
        
				<tr>
				  <td  id="label_ml_attribute_type_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_attribute_type_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_attribute_type_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_attribute_type_txt_descripcion' value='<?php Gral::_echoTxt($ml_attribute_type->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ml_attribute_type_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_attribute_type_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_attribute_type_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_attribute_type_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_attribute_type_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_attribute_type_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_attribute_type_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_attribute_type_txt_codigo' value='<?php Gral::_echoTxt($ml_attribute_type->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ml_attribute_type_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_attribute_type_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_attribute_type_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_attribute_type_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_attribute_type_txt_codigo_ml" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_ml' ?>" >
				  
                                        <?php Lang::_lang('Codigo ML', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_attribute_type_txt_codigo_ml" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_ml')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_attribute_type_txt_codigo_ml' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_attribute_type_txt_codigo_ml' value='<?php Gral::_echoTxt($ml_attribute_type->getCodigoMl(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ml_attribute_type_alta_codigo_ml', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_attribute_type_alta_codigo_ml', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_attribute_type_alta_codigo_ml', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_attribute_type_alta_codigo_ml', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_ml')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_attribute_type_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_attribute_type_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ml_attribute_type_txa_observacion' rows='10' cols='50' id='ml_attribute_type_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ml_attribute_type->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ml_attribute_type_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_attribute_type_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_attribute_type_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_attribute_type_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ml_attribute_type->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ml_attribute_type_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ml_attribute_type'/>
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

