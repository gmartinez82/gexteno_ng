<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ml_attribute_ml_value';
$db_nombre_pagina = 'ml_attribute_ml_value_alta';


$ml_attribute_ml_value = new MlAttributeMlValue();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $ml_attribute_ml_value = new MlAttributeMlValue();
    if(trim($hdn_id) != '') $ml_attribute_ml_value->setId($hdn_id, false);
	$ml_attribute_ml_value->setMlAttributeId(Gral::getVars(1, "cmb_ml_attribute_id", null));
	$ml_attribute_ml_value->setMlValueId(Gral::getVars(1, "cmb_ml_value_id", null));
	$ml_attribute_ml_value->setObservacion(Gral::getVars(1, "txa_observacion"));
	$ml_attribute_ml_value->setOrden(Gral::getVars(1, "txt_orden", 0));
	$ml_attribute_ml_value->setEstado(Gral::getVars(1, "_estado", 0));
	$ml_attribute_ml_value->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$ml_attribute_ml_value->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$ml_attribute_ml_value->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$ml_attribute_ml_value->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$ml_attribute_ml_value_estado = new MlAttributeMlValue();
	if(trim($hdn_id) != ''){
            $ml_attribute_ml_value_estado->setId($hdn_id);            
            $ml_attribute_ml_value->setEstado($ml_attribute_ml_value_estado->getEstado());
	}else{            
            $ml_attribute_ml_value->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $ml_attribute_ml_value->control();
			if(!$error->getExisteError()){
				$ml_attribute_ml_value->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$ml_attribute_ml_value->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ml_attribute_ml_value->control();
			if(!$error->getExisteError()){
				$ml_attribute_ml_value->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$ml_attribute_ml_value->setId($hdn_id);
	}else{
	
	$ml_attribute_ml_value->setMlAttributeId(Gral::getVars(2, "ml_attribute_id", 'null'));
	$ml_attribute_ml_value->setMlValueId(Gral::getVars(2, "ml_value_id", 'null'));
	$ml_attribute_ml_value->setObservacion(Gral::getVars(2, "observacion", ''));
	$ml_attribute_ml_value->setOrden(Gral::getVars(2, "orden", 0));
	$ml_attribute_ml_value->setEstado(Gral::getVars(2, "estado", 0));
	$ml_attribute_ml_value->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ml_attribute_ml_value->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ml_attribute_ml_value->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ml_attribute_ml_value->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
<?php include 'parciales/encabezado.php'?>
<?php include 'parciales/user.php';?>
<?php include 'parciales/mensajes.php' ?>
    
<div id='menu'>
    <?php include 'parciales/menuh.php' ?>
</div>

<div id='cuerpo' >
    <form id='formu' name='formu' method='post' action='' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('MlAttributeMlValues') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(MlAttributeMlValue::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(MlAttributeMlValue::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ML_VALUE_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ml_attribute_ml_value'>
        
            <tr>
                <td id="label_cmb_ml_attribute_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ml_attribute_id' ?>" >

                    <?php Lang::_lang('MlAttribute', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ml_attribute_ml_value_alta&atributo=ml_attribute_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ml_attribute_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ML_VALUE_ALTA_CMB_EDIT_ML_ATTRIBUTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_attribute_id" <?php echo ($ml_attribute_ml_value->getMlAttributeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ml_attribute_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), $ml_attribute_ml_value->getMlAttributeId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ml_attribute_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ml_attribute_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ml_value_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ml_value_id' ?>" >

                    <?php Lang::_lang('MlValue', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ml_attribute_ml_value_alta&atributo=ml_value_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ml_value_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ml_value_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ML_VALUE_ALTA_CMB_EDIT_ML_VALUE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ml_value_id" clase_id="ml_value" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_value_id" <?php echo ($ml_attribute_ml_value->getMlValueId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ml_value_id" clase_id="ml_value" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ml_value_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ml_value_id', Gral::getCmbFiltro(MlValue::getMlValuesCmb(), '...'), $ml_attribute_ml_value->getMlValueId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ml_value_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ml_value_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ml_value_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ml_value_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_value_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ml_attribute_ml_value_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ml_attribute_ml_value->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ml_attribute_ml_value->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(MlAttributeMlValue::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(MlAttributeMlValue::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($ml_attribute_ml_value->getId()) != ''){ ?>
    <div class="alta relaciones">
		
    </div>
	<?php } ?>


	  
	  </div>

        </form>
    </div>

    <div id='pie'>
        <?php include 'parciales/pie.php' ?>
    </div>

    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>

