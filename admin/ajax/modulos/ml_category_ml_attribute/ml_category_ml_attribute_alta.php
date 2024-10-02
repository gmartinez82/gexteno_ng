<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ML_CATEGORY_ML_ATTRIBUTE_ALTA')){
    echo "No tiene asignada la credencial ML_CATEGORY_ML_ATTRIBUTE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ml_category_ml_attribute';
$db_nombre_pagina = 'ml_category_ml_attribute_alta';

$ml_category_ml_attribute = new MlCategoryMlAttribute();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ml_category_ml_attribute = new MlCategoryMlAttribute();
	if(trim($hdn_id) != '') $ml_category_ml_attribute->setId($hdn_id, false);
	$ml_category_ml_attribute->setMlCategoryId(Gral::getVars(1, "ml_category_ml_attribute_cmb_ml_category_id", null));
	$ml_category_ml_attribute->setMlAttributeId(Gral::getVars(1, "ml_category_ml_attribute_cmb_ml_attribute_id", null));
	$ml_category_ml_attribute->setMlRelevance(Gral::getVars(1, "ml_category_ml_attribute_txt_ml_relevance"));
	$ml_category_ml_attribute->setObservacion(Gral::getVars(1, "ml_category_ml_attribute_txa_observacion"));
	$ml_category_ml_attribute->setOrden(Gral::getVars(1, "ml_category_ml_attribute_txt_orden", 0));
	$ml_category_ml_attribute->setEstado(Gral::getVars(1, "ml_category_ml_attribute__estado", 0));
	$ml_category_ml_attribute->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_category_ml_attribute_txt_creado")));
	$ml_category_ml_attribute->setCreadoPor(Gral::getVars(1, "ml_category_ml_attribute__creado_por", 0));
	$ml_category_ml_attribute->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_category_ml_attribute_txt_modificado")));
	$ml_category_ml_attribute->setModificadoPor(Gral::getVars(1, "ml_category_ml_attribute__modificado_por", 0));

	$ml_category_ml_attribute_estado = new MlCategoryMlAttribute();
	if(trim($hdn_id) != ''){
		$ml_category_ml_attribute_estado->setId($hdn_id);
		$ml_category_ml_attribute->setEstado($ml_category_ml_attribute_estado->getEstado());
				
	}else{
		$ml_category_ml_attribute->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ml_category_ml_attribute->control();
			if(!$error->getExisteError()){
				$ml_category_ml_attribute->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ml_category_ml_attribute_alta.php?cs=1&id='.$ml_category_ml_attribute->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ml_category_ml_attribute->control();
			if(!$error->getExisteError()){
				$ml_category_ml_attribute->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ml_category_ml_attribute_alta.php?cs=1');
				$ml_category_ml_attribute = new MlCategoryMlAttribute();
			}
		break;
	}
	Gral::setSes('MlCategoryMlAttribute_ULTIMO_INSERTADO', $ml_category_ml_attribute->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ml_category_ml_attribute_id = Gral::getVars(2, $prefijo.'cmb_ml_category_ml_attribute_id', 0);
	if($cmb_ml_category_ml_attribute_id != 0){
		$ml_category_ml_attribute = MlCategoryMlAttribute::getOxId($cmb_ml_category_ml_attribute_id);
	}else{
	
	$ml_category_ml_attribute->setMlCategoryId(Gral::getVars(2, "ml_category_id", 'null'));
	$ml_category_ml_attribute->setMlAttributeId(Gral::getVars(2, "ml_attribute_id", 'null'));
	$ml_category_ml_attribute->setMlRelevance(Gral::getVars(2, "ml_relevance", ''));
	$ml_category_ml_attribute->setObservacion(Gral::getVars(2, "observacion", ''));
	$ml_category_ml_attribute->setOrden(Gral::getVars(2, "orden", 0));
	$ml_category_ml_attribute->setEstado(Gral::getVars(2, "estado", 0));
	$ml_category_ml_attribute->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ml_category_ml_attribute->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ml_category_ml_attribute->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ml_category_ml_attribute->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ml_category_ml_attribute->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ml_category_ml_attribute/ml_category_ml_attribute_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ml_category_ml_attribute' width='90%'>
        
				<tr>
				  <td  id="label_ml_category_ml_attribute_cmb_ml_category_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_category_id' ?>" >
				  
                                        <?php Lang::_lang('MlCategory', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_category_ml_attribute_cmb_ml_category_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_category_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ml_category_ml_attribute_cmb_ml_category_id', Gral::getCmbFiltro(MlCategory::getMlCategorysCmb(), '...'), $ml_category_ml_attribute->getMlCategoryId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ML_CATEGORY_ML_ATTRIBUTE_ALTA_CMB_EDIT_ML_CATEGORY')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ml_category_ml_attribute_cmb_ml_category_id" clase_id="ml_category" prefijo='ml_category_ml_attribute_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_category_id" <?php echo ($ml_category_ml_attribute->getMlCategoryId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ml_category_ml_attribute_cmb_ml_category_id" clase_id="ml_category" prefijo='ml_category_ml_attribute_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ml_category_ml_attribute_cmb_ml_category_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ml_category_ml_attribute_alta_ml_category_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_category_ml_attribute_alta_ml_category_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_category_ml_attribute_alta_ml_category_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_category_ml_attribute_alta_ml_category_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_category_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_category_ml_attribute_cmb_ml_attribute_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_attribute_id' ?>" >
				  
                                        <?php Lang::_lang('MlAttribute', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_category_ml_attribute_cmb_ml_attribute_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ml_category_ml_attribute_cmb_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), $ml_category_ml_attribute->getMlAttributeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ML_CATEGORY_ML_ATTRIBUTE_ALTA_CMB_EDIT_ML_ATTRIBUTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ml_category_ml_attribute_cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='ml_category_ml_attribute_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_attribute_id" <?php echo ($ml_category_ml_attribute->getMlAttributeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ml_category_ml_attribute_cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='ml_category_ml_attribute_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ml_category_ml_attribute_cmb_ml_attribute_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ml_category_ml_attribute_alta_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_category_ml_attribute_alta_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_category_ml_attribute_alta_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_category_ml_attribute_alta_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_category_ml_attribute_txt_ml_relevance" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_relevance' ?>" >
				  
                                        <?php Lang::_lang('ML Relevance', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_category_ml_attribute_txt_ml_relevance" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_relevance')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ml_category_ml_attribute_txt_ml_relevance' type='text' class='textbox <?php echo $error_input_css ?> ' id='ml_category_ml_attribute_txt_ml_relevance' value='<?php Gral::_echoTxt($ml_category_ml_attribute->getMlRelevance(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ml_category_ml_attribute_alta_ml_relevance', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_category_ml_attribute_alta_ml_relevance', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_category_ml_attribute_alta_ml_relevance', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_category_ml_attribute_alta_ml_relevance', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_relevance')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_category_ml_attribute_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_category_ml_attribute_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ml_category_ml_attribute_txa_observacion' rows='10' cols='50' id='ml_category_ml_attribute_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ml_category_ml_attribute->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ml_category_ml_attribute_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_category_ml_attribute_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_category_ml_attribute_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_category_ml_attribute_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ml_category_ml_attribute->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ml_category_ml_attribute_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ml_category_ml_attribute'/>
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

