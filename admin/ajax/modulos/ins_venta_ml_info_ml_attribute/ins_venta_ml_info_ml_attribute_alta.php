<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA')){
    echo "No tiene asignada la credencial INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_venta_ml_info_ml_attribute';
$db_nombre_pagina = 'ins_venta_ml_info_ml_attribute_alta';

$ins_venta_ml_info_ml_attribute = new InsVentaMlInfoMlAttribute();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_venta_ml_info_ml_attribute = new InsVentaMlInfoMlAttribute();
	if(trim($hdn_id) != '') $ins_venta_ml_info_ml_attribute->setId($hdn_id, false);
	$ins_venta_ml_info_ml_attribute->setInsVentaMlInfoId(Gral::getVars(1, "ins_venta_ml_info_ml_attribute_dbsug_ins_venta_ml_info_id", null));
	$ins_venta_ml_info_ml_attribute->setMlAttributeId(Gral::getVars(1, "ins_venta_ml_info_ml_attribute_cmb_ml_attribute_id", null));
	$ins_venta_ml_info_ml_attribute->setMlValueId(Gral::getVars(1, "ins_venta_ml_info_ml_attribute_cmb_ml_value_id", null));
	$ins_venta_ml_info_ml_attribute->setMlValueValor(Gral::getVars(1, "ins_venta_ml_info_ml_attribute_txt_ml_value_valor"));
	$ins_venta_ml_info_ml_attribute->setObservacion(Gral::getVars(1, "ins_venta_ml_info_ml_attribute_txa_observacion"));
	$ins_venta_ml_info_ml_attribute->setOrden(Gral::getVars(1, "ins_venta_ml_info_ml_attribute__orden", 0));
	$ins_venta_ml_info_ml_attribute->setEstado(Gral::getVars(1, "ins_venta_ml_info_ml_attribute__estado", 0));
	$ins_venta_ml_info_ml_attribute->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_venta_ml_info_ml_attribute_txt_creado")));
	$ins_venta_ml_info_ml_attribute->setCreadoPor(Gral::getVars(1, "ins_venta_ml_info_ml_attribute__creado_por", null));
	$ins_venta_ml_info_ml_attribute->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_venta_ml_info_ml_attribute_txt_modificado")));
	$ins_venta_ml_info_ml_attribute->setModificadoPor(Gral::getVars(1, "ins_venta_ml_info_ml_attribute__modificado_por", null));

	$ins_venta_ml_info_ml_attribute_estado = new InsVentaMlInfoMlAttribute();
	if(trim($hdn_id) != ''){
		$ins_venta_ml_info_ml_attribute_estado->setId($hdn_id);
		$ins_venta_ml_info_ml_attribute->setEstado($ins_venta_ml_info_ml_attribute_estado->getEstado());
				
	}else{
		$ins_venta_ml_info_ml_attribute->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_venta_ml_info_ml_attribute->control();
			if(!$error->getExisteError()){
				$ins_venta_ml_info_ml_attribute->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_venta_ml_info_ml_attribute_alta.php?cs=1&id='.$ins_venta_ml_info_ml_attribute->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_venta_ml_info_ml_attribute->control();
			if(!$error->getExisteError()){
				$ins_venta_ml_info_ml_attribute->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_venta_ml_info_ml_attribute_alta.php?cs=1');
				$ins_venta_ml_info_ml_attribute = new InsVentaMlInfoMlAttribute();
			}
		break;
	}
	Gral::setSes('InsVentaMlInfoMlAttribute_ULTIMO_INSERTADO', $ins_venta_ml_info_ml_attribute->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_venta_ml_info_ml_attribute_id = Gral::getVars(2, $prefijo.'cmb_ins_venta_ml_info_ml_attribute_id', 0);
	if($cmb_ins_venta_ml_info_ml_attribute_id != 0){
		$ins_venta_ml_info_ml_attribute = InsVentaMlInfoMlAttribute::getOxId($cmb_ins_venta_ml_info_ml_attribute_id);
	}else{
	
	$ins_venta_ml_info_ml_attribute->setInsVentaMlInfoId(Gral::getVars(2, "ins_venta_ml_info_id", 'null'));
	$ins_venta_ml_info_ml_attribute->setMlAttributeId(Gral::getVars(2, "ml_attribute_id", 'null'));
	$ins_venta_ml_info_ml_attribute->setMlValueId(Gral::getVars(2, "ml_value_id", 'null'));
	$ins_venta_ml_info_ml_attribute->setMlValueValor(Gral::getVars(2, "ml_value_valor", ''));
	$ins_venta_ml_info_ml_attribute->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_venta_ml_info_ml_attribute->setOrden(Gral::getVars(2, "orden", 0));
	$ins_venta_ml_info_ml_attribute->setEstado(Gral::getVars(2, "estado", 0));
	$ins_venta_ml_info_ml_attribute->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_venta_ml_info_ml_attribute->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_venta_ml_info_ml_attribute->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_venta_ml_info_ml_attribute->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_venta_ml_info_ml_attribute->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_venta_ml_info_ml_attribute/ins_venta_ml_info_ml_attribute_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_venta_ml_info_ml_attribute' width='90%'>
        
				<tr>
				  <td  id="label_ins_venta_ml_info_ml_attribute_dbsug_ins_venta_ml_info_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_venta_ml_info_id' ?>" >
				  
                                        <?php Lang::_lang('InsVentaMlInfo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_ml_attribute_dbsug_ins_venta_ml_info_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_venta_ml_info_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_venta_ml_info_ml_attribute_dbsug_ins_venta_ml_info', 'ajax/modulos/ins_venta_ml_info/ins_venta_ml_info_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_venta_ml_info_ml_attribute->getInsVentaMlInfoId(), $ins_venta_ml_info_ml_attribute->getInsVentaMlInfo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ins_venta_ml_info_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ins_venta_ml_info_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ins_venta_ml_info_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ins_venta_ml_info_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_venta_ml_info_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_ml_attribute_cmb_ml_attribute_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_attribute_id' ?>" >
				  
                                        <?php Lang::_lang('MlAttribute', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_ml_attribute_cmb_ml_attribute_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_venta_ml_info_ml_attribute_cmb_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), $ins_venta_ml_info_ml_attribute->getMlAttributeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA_CMB_EDIT_ML_ATTRIBUTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_venta_ml_info_ml_attribute_cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='ins_venta_ml_info_ml_attribute_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_attribute_id" <?php echo ($ins_venta_ml_info_ml_attribute->getMlAttributeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_venta_ml_info_ml_attribute_cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='ins_venta_ml_info_ml_attribute_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_venta_ml_info_ml_attribute_cmb_ml_attribute_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_ml_attribute_cmb_ml_value_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_value_id' ?>" >
				  
                                        <?php Lang::_lang('MlValue', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_ml_attribute_cmb_ml_value_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_value_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_venta_ml_info_ml_attribute_cmb_ml_value_id', Gral::getCmbFiltro(MlValue::getMlValuesCmb(), '...'), $ins_venta_ml_info_ml_attribute->getMlValueId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA_CMB_EDIT_ML_VALUE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_venta_ml_info_ml_attribute_cmb_ml_value_id" clase_id="ml_value" prefijo='ins_venta_ml_info_ml_attribute_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_value_id" <?php echo ($ins_venta_ml_info_ml_attribute->getMlValueId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_venta_ml_info_ml_attribute_cmb_ml_value_id" clase_id="ml_value" prefijo='ins_venta_ml_info_ml_attribute_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_venta_ml_info_ml_attribute_cmb_ml_value_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ml_value_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ml_value_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ml_value_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ml_value_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_value_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_ml_attribute_txt_ml_value_valor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_value_valor' ?>" >
				  
                                        <?php Lang::_lang('ML Value Valor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_ml_attribute_txt_ml_value_valor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_value_valor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_ml_attribute_txt_ml_value_valor' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_ml_attribute_txt_ml_value_valor' value='<?php Gral::_echoTxt($ins_venta_ml_info_ml_attribute->getMlValueValor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ml_value_valor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_ml_attribute_alta_ml_value_valor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ml_value_valor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_ml_attribute_alta_ml_value_valor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_value_valor')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_venta_ml_info_ml_attribute->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_venta_ml_info_ml_attribute_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_venta_ml_info_ml_attribute'/>
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

