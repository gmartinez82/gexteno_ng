<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_venta_ml_info_ml_attribute';
$db_nombre_pagina = 'ins_venta_ml_info_ml_attribute_alta';


$ins_venta_ml_info_ml_attribute = new InsVentaMlInfoMlAttribute();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $ins_venta_ml_info_ml_attribute = new InsVentaMlInfoMlAttribute();
    if(trim($hdn_id) != '') $ins_venta_ml_info_ml_attribute->setId($hdn_id, false);
	$ins_venta_ml_info_ml_attribute->setInsVentaMlInfoId(Gral::getVars(1, "dbsug_ins_venta_ml_info_id", null));
	$ins_venta_ml_info_ml_attribute->setMlAttributeId(Gral::getVars(1, "cmb_ml_attribute_id", null));
	$ins_venta_ml_info_ml_attribute->setMlValueId(Gral::getVars(1, "cmb_ml_value_id", null));
	$ins_venta_ml_info_ml_attribute->setMlValueValor(Gral::getVars(1, "txt_ml_value_valor"));
	$ins_venta_ml_info_ml_attribute->setObservacion(Gral::getVars(1, "txa_observacion"));
	$ins_venta_ml_info_ml_attribute->setOrden(Gral::getVars(1, "_orden", 0));
	$ins_venta_ml_info_ml_attribute->setEstado(Gral::getVars(1, "_estado", 0));
	$ins_venta_ml_info_ml_attribute->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$ins_venta_ml_info_ml_attribute->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$ins_venta_ml_info_ml_attribute->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$ins_venta_ml_info_ml_attribute->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

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
								
				header('Location: ?cs=1&id='.$ins_venta_ml_info_ml_attribute->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_venta_ml_info_ml_attribute->control();
			if(!$error->getExisteError()){
				$ins_venta_ml_info_ml_attribute->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$ins_venta_ml_info_ml_attribute->setId($hdn_id);
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('InsVentaMlInfoMlAttributes') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsVentaMlInfoMlAttribute::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsVentaMlInfoMlAttribute::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ins_venta_ml_info_ml_attribute'>
        
            <tr>
                <td id="label_dbsug_ins_venta_ml_info_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_venta_ml_info_id' ?>" >

                    <?php Lang::_lang('InsVentaMlInfo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_ml_info_ml_attribute_alta&atributo=ins_venta_ml_info_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_ins_venta_ml_info_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_venta_ml_info_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_venta_ml_info', 'ajax/modulos/ins_venta_ml_info/ins_venta_ml_info_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_venta_ml_info_ml_attribute->getInsVentaMlInfoId(), $ins_venta_ml_info_ml_attribute->getInsVentaMlInfo()->getDescripcion(), 40, false, $error_input_css) ?>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_venta_ml_info_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_venta_ml_info_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_venta_ml_info_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_venta_ml_info_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_venta_ml_info_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ml_attribute_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ml_attribute_id' ?>" >

                    <?php Lang::_lang('MlAttribute', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_ml_info_ml_attribute_alta&atributo=ml_attribute_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ml_attribute_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ml_attribute_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA_CMB_EDIT_ML_ATTRIBUTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_attribute_id" <?php echo ($ins_venta_ml_info_ml_attribute->getMlAttributeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ml_attribute_id" clase_id="ml_attribute" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ml_attribute_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), $ins_venta_ml_info_ml_attribute->getMlAttributeId(), 'textbox '.$error_input_css) ?>
		

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_ml_info_ml_attribute_alta&atributo=ml_value_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ml_value_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ml_value_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA_CMB_EDIT_ML_VALUE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ml_value_id" clase_id="ml_value" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ml_value_id" <?php echo ($ins_venta_ml_info_ml_attribute->getMlValueId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ml_value_id" clase_id="ml_value" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ml_value_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ml_value_id', Gral::getCmbFiltro(MlValue::getMlValuesCmb(), '...'), $ins_venta_ml_info_ml_attribute->getMlValueId(), 'textbox '.$error_input_css) ?>
		

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
                <td id="label_txt_ml_value_valor" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ml_value_valor' ?>" >

                    <?php Lang::_lang('ML Value Valor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_ml_info_ml_attribute_alta&atributo=ml_value_valor' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_ml_value_valor" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ml_value_valor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_ml_value_valor' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_ml_value_valor' value='<?php Gral::_echoTxt($ins_venta_ml_info_ml_attribute->getMlValueValor()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ml_value_valor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ml_value_valor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ml_value_valor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ml_value_valor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_value_valor')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_venta_ml_info_ml_attribute->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsVentaMlInfoMlAttribute::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsVentaMlInfoMlAttribute::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($ins_venta_ml_info_ml_attribute->getId()) != ''){ ?>
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

