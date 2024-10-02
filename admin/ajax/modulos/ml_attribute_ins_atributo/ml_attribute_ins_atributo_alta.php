<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ALTA')){
    echo "No tiene asignada la credencial ML_ATTRIBUTE_INS_ATRIBUTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ml_attribute_ins_atributo';
$db_nombre_pagina = 'ml_attribute_ins_atributo_alta';

$ml_attribute_ins_atributo = new MlAttributeInsAtributo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ml_attribute_ins_atributo = new MlAttributeInsAtributo();
	if(trim($hdn_id) != '') $ml_attribute_ins_atributo->setId($hdn_id, false);
	$ml_attribute_ins_atributo->setMlAttributeId(Gral::getVars(1, "ml_attribute_ins_atributo_cmb_ml_attribute_id", null));
	$ml_attribute_ins_atributo->setInsAtributoId(Gral::getVars(1, "ml_attribute_ins_atributo_cmb_ins_atributo_id", null));
	$ml_attribute_ins_atributo->setObservacion(Gral::getVars(1, "ml_attribute_ins_atributo_txa_observacion"));
	$ml_attribute_ins_atributo->setOrden(Gral::getVars(1, "ml_attribute_ins_atributo_txt_orden", 0));
	$ml_attribute_ins_atributo->setEstado(Gral::getVars(1, "ml_attribute_ins_atributo__estado", 0));
	$ml_attribute_ins_atributo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_attribute_ins_atributo_txt_creado")));
	$ml_attribute_ins_atributo->setCreadoPor(Gral::getVars(1, "ml_attribute_ins_atributo__creado_por", 0));
	$ml_attribute_ins_atributo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ml_attribute_ins_atributo_txt_modificado")));
	$ml_attribute_ins_atributo->setModificadoPor(Gral::getVars(1, "ml_attribute_ins_atributo__modificado_por", 0));

	$ml_attribute_ins_atributo_estado = new MlAttributeInsAtributo();
	if(trim($hdn_id) != ''){
		$ml_attribute_ins_atributo_estado->setId($hdn_id);
		$ml_attribute_ins_atributo->setEstado($ml_attribute_ins_atributo_estado->getEstado());
				
	}else{
		$ml_attribute_ins_atributo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ml_attribute_ins_atributo->control();
			if(!$error->getExisteError()){
				$ml_attribute_ins_atributo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ml_attribute_ins_atributo_alta.php?cs=1&id='.$ml_attribute_ins_atributo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ml_attribute_ins_atributo->control();
			if(!$error->getExisteError()){
				$ml_attribute_ins_atributo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ml_attribute_ins_atributo_alta.php?cs=1');
				$ml_attribute_ins_atributo = new MlAttributeInsAtributo();
			}
		break;
	}
	Gral::setSes('MlAttributeInsAtributo_ULTIMO_INSERTADO', $ml_attribute_ins_atributo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ml_attribute_ins_atributo_id = Gral::getVars(2, $prefijo.'cmb_ml_attribute_ins_atributo_id', 0);
	if($cmb_ml_attribute_ins_atributo_id != 0){
		$ml_attribute_ins_atributo = MlAttributeInsAtributo::getOxId($cmb_ml_attribute_ins_atributo_id);
	}else{
	
	$ml_attribute_ins_atributo->setMlAttributeId(Gral::getVars(2, "ml_attribute_id", 'null'));
	$ml_attribute_ins_atributo->setInsAtributoId(Gral::getVars(2, "ins_atributo_id", 'null'));
	$ml_attribute_ins_atributo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ml_attribute_ins_atributo->setOrden(Gral::getVars(2, "orden", 0));
	$ml_attribute_ins_atributo->setEstado(Gral::getVars(2, "estado", 0));
	$ml_attribute_ins_atributo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ml_attribute_ins_atributo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ml_attribute_ins_atributo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ml_attribute_ins_atributo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ml_attribute_ins_atributo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ml_attribute_ins_atributo/ml_attribute_ins_atributo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ml_attribute_ins_atributo' width='90%'>
        
				<tr>
				  <td  id="label_ml_attribute_ins_atributo_cmb_ml_attribute_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_attribute_id' ?>" >
				  
                                        <?php Lang::_lang('MlAttribute', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_attribute_ins_atributo_cmb_ml_attribute_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ml_attribute_ins_atributo_cmb_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), $ml_attribute_ins_atributo->getMlAttributeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ALTA_CMB_EDIT_ML_ATTRIBUTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ml_attribute_ins_atributo_cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='ml_attribute_ins_atributo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_attribute_id" <?php echo ($ml_attribute_ins_atributo->getMlAttributeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ml_attribute_ins_atributo_cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='ml_attribute_ins_atributo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ml_attribute_ins_atributo_cmb_ml_attribute_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ml_attribute_ins_atributo_alta_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_attribute_ins_atributo_alta_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_attribute_ins_atributo_alta_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_attribute_ins_atributo_alta_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_attribute_ins_atributo_cmb_ins_atributo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_atributo_id' ?>" >
				  
                                        <?php Lang::_lang('InsAtributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_attribute_ins_atributo_cmb_ins_atributo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_atributo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ml_attribute_ins_atributo_cmb_ins_atributo_id', Gral::getCmbFiltro(InsAtributo::getInsAtributosCmb(), '...'), $ml_attribute_ins_atributo->getInsAtributoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ALTA_CMB_EDIT_INS_ATRIBUTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ml_attribute_ins_atributo_cmb_ins_atributo_id" clase_id="ins_atributo" prefijo='ml_attribute_ins_atributo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_atributo_id" <?php echo ($ml_attribute_ins_atributo->getInsAtributoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ml_attribute_ins_atributo_cmb_ins_atributo_id" clase_id="ins_atributo" prefijo='ml_attribute_ins_atributo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ml_attribute_ins_atributo_cmb_ins_atributo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ml_attribute_ins_atributo_alta_ins_atributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_attribute_ins_atributo_alta_ins_atributo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_attribute_ins_atributo_alta_ins_atributo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_attribute_ins_atributo_alta_ins_atributo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_atributo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ml_attribute_ins_atributo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ml_attribute_ins_atributo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ml_attribute_ins_atributo_txa_observacion' rows='10' cols='50' id='ml_attribute_ins_atributo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ml_attribute_ins_atributo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ml_attribute_ins_atributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ml_attribute_ins_atributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ml_attribute_ins_atributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ml_attribute_ins_atributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ml_attribute_ins_atributo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ml_attribute_ins_atributo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ml_attribute_ins_atributo'/>
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

