<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_INS_ATRIBUTO_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_INS_ATRIBUTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo_ins_atributo';
$db_nombre_pagina = 'ins_insumo_ins_atributo_alta';

$ins_insumo_ins_atributo = new InsInsumoInsAtributo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo_ins_atributo = new InsInsumoInsAtributo();
	if(trim($hdn_id) != '') $ins_insumo_ins_atributo->setId($hdn_id, false);
	$ins_insumo_ins_atributo->setInsInsumoId(Gral::getVars(1, "ins_insumo_ins_atributo_dbsug_ins_insumo_id", null));
	$ins_insumo_ins_atributo->setInsAtributoId(Gral::getVars(1, "ins_insumo_ins_atributo_cmb_ins_atributo_id", null));
	$ins_insumo_ins_atributo->setValor(Gral::getVars(1, "ins_insumo_ins_atributo_txt_valor"));
	$ins_insumo_ins_atributo->setInsUnidadMedidaAtributoId(Gral::getVars(1, "ins_insumo_ins_atributo_cmb_ins_unidad_medida_atributo_id", null));
	$ins_insumo_ins_atributo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_ins_atributo_txt_creado")));
	$ins_insumo_ins_atributo->setCreadoPor(Gral::getVars(1, "ins_insumo_ins_atributo__creado_por", null));
	$ins_insumo_ins_atributo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_ins_atributo_txt_modificado")));
	$ins_insumo_ins_atributo->setModificadoPor(Gral::getVars(1, "ins_insumo_ins_atributo__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_ins_atributo->control();
			if(!$error->getExisteError()){
				$ins_insumo_ins_atributo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_ins_atributo_alta.php?cs=1&id='.$ins_insumo_ins_atributo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_ins_atributo->control();
			if(!$error->getExisteError()){
				$ins_insumo_ins_atributo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_ins_atributo_alta.php?cs=1');
				$ins_insumo_ins_atributo = new InsInsumoInsAtributo();
			}
		break;
	}
	Gral::setSes('InsInsumoInsAtributo_ULTIMO_INSERTADO', $ins_insumo_ins_atributo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_ins_atributo_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_ins_atributo_id', 0);
	if($cmb_ins_insumo_ins_atributo_id != 0){
		$ins_insumo_ins_atributo = InsInsumoInsAtributo::getOxId($cmb_ins_insumo_ins_atributo_id);
	}else{
	
	$ins_insumo_ins_atributo->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_ins_atributo->setInsAtributoId(Gral::getVars(2, "ins_atributo_id", 'null'));
	$ins_insumo_ins_atributo->setValor(Gral::getVars(2, "valor", ''));
	$ins_insumo_ins_atributo->setInsUnidadMedidaAtributoId(Gral::getVars(2, "ins_unidad_medida_atributo_id", 'null'));
	$ins_insumo_ins_atributo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_ins_atributo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_ins_atributo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_ins_atributo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo_ins_atributo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_ins_atributo/ins_insumo_ins_atributo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_ins_atributo' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_ins_atributo_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_ins_atributo_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_ins_atributo_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_ins_atributo->getInsInsumoId(), $ins_insumo_ins_atributo->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_ins_atributo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_ins_atributo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_ins_atributo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_ins_atributo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_ins_atributo_cmb_ins_atributo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_atributo_id' ?>" >
				  
                                        <?php Lang::_lang('InsAtributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_ins_atributo_cmb_ins_atributo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_atributo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_ins_atributo_cmb_ins_atributo_id', Gral::getCmbFiltro(InsAtributo::getInsAtributosCmb(), '...'), $ins_insumo_ins_atributo->getInsAtributoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_ATRIBUTO_ALTA_CMB_EDIT_INS_ATRIBUTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_ins_atributo_cmb_ins_atributo_id" clase_id="ins_atributo" prefijo='ins_insumo_ins_atributo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_atributo_id" <?php echo ($ins_insumo_ins_atributo->getInsAtributoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_ins_atributo_cmb_ins_atributo_id" clase_id="ins_atributo" prefijo='ins_insumo_ins_atributo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_ins_atributo_cmb_ins_atributo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_ins_atributo_alta_ins_atributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_ins_atributo_alta_ins_atributo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_ins_atributo_alta_ins_atributo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_ins_atributo_alta_ins_atributo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_atributo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_ins_atributo_txt_valor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_valor' ?>" >
				  
                                        <?php Lang::_lang('Valor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_ins_atributo_txt_valor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('valor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_ins_atributo_txt_valor' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_ins_atributo_txt_valor' value='<?php Gral::_echoTxt($ins_insumo_ins_atributo->getValor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_ins_atributo_alta_valor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_ins_atributo_alta_valor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_ins_atributo_alta_valor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_ins_atributo_alta_valor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('valor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_ins_atributo_cmb_ins_unidad_medida_atributo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_unidad_medida_atributo_id' ?>" >
				  
                                        <?php Lang::_lang('InsUnidadMedidaAtributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_ins_atributo_cmb_ins_unidad_medida_atributo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_unidad_medida_atributo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_ins_atributo_cmb_ins_unidad_medida_atributo_id', Gral::getCmbFiltro(InsUnidadMedidaAtributo::getInsUnidadMedidaAtributosCmb(), '...'), $ins_insumo_ins_atributo->getInsUnidadMedidaAtributoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_ATRIBUTO_ALTA_CMB_EDIT_INS_UNIDAD_MEDIDA_ATRIBUTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_ins_atributo_cmb_ins_unidad_medida_atributo_id" clase_id="ins_unidad_medida_atributo" prefijo='ins_insumo_ins_atributo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_unidad_medida_atributo_id" <?php echo ($ins_insumo_ins_atributo->getInsUnidadMedidaAtributoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_ins_atributo_cmb_ins_unidad_medida_atributo_id" clase_id="ins_unidad_medida_atributo" prefijo='ins_insumo_ins_atributo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_ins_atributo_cmb_ins_unidad_medida_atributo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_ins_atributo_alta_ins_unidad_medida_atributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_ins_atributo_alta_ins_unidad_medida_atributo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_ins_atributo_alta_ins_unidad_medida_atributo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_ins_atributo_alta_ins_unidad_medida_atributo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_unidad_medida_atributo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_ins_atributo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_ins_atributo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_ins_atributo'/>
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

