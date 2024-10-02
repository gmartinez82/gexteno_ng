<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ESTADO_ALTA')){
    echo "No tiene asignada la credencial INS_STOCK_RESUMEN_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_stock_resumen_estado';
$db_nombre_pagina = 'ins_stock_resumen_estado_alta';

$ins_stock_resumen_estado = new InsStockResumenEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_stock_resumen_estado = new InsStockResumenEstado();
	if(trim($hdn_id) != '') $ins_stock_resumen_estado->setId($hdn_id, false);
	$ins_stock_resumen_estado->setInsStockResumenId(Gral::getVars(1, "ins_stock_resumen_estado_cmb_ins_stock_resumen_id", null));
	$ins_stock_resumen_estado->setInsStockResumenTipoEstadoId(Gral::getVars(1, "ins_stock_resumen_estado_cmb_ins_stock_resumen_tipo_estado_id", null));
	$ins_stock_resumen_estado->setInicial(Gral::getVars(1, "ins_stock_resumen_estado_cmb_inicial", 0));
	$ins_stock_resumen_estado->setActual(Gral::getVars(1, "ins_stock_resumen_estado_cmb_actual", 0));
	$ins_stock_resumen_estado->setObservacion(Gral::getVars(1, "ins_stock_resumen_estado_txa_observacion"));
	$ins_stock_resumen_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_stock_resumen_estado_txt_creado")));
	$ins_stock_resumen_estado->setCreadoPor(Gral::getVars(1, "ins_stock_resumen_estado__creado_por", null));
	$ins_stock_resumen_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_stock_resumen_estado_txt_modificado")));
	$ins_stock_resumen_estado->setModificadoPor(Gral::getVars(1, "ins_stock_resumen_estado__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $ins_stock_resumen_estado->control();
			if(!$error->getExisteError()){
				$ins_stock_resumen_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_stock_resumen_estado_alta.php?cs=1&id='.$ins_stock_resumen_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_stock_resumen_estado->control();
			if(!$error->getExisteError()){
				$ins_stock_resumen_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_stock_resumen_estado_alta.php?cs=1');
				$ins_stock_resumen_estado = new InsStockResumenEstado();
			}
		break;
	}
	Gral::setSes('InsStockResumenEstado_ULTIMO_INSERTADO', $ins_stock_resumen_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_stock_resumen_estado_id = Gral::getVars(2, $prefijo.'cmb_ins_stock_resumen_estado_id', 0);
	if($cmb_ins_stock_resumen_estado_id != 0){
		$ins_stock_resumen_estado = InsStockResumenEstado::getOxId($cmb_ins_stock_resumen_estado_id);
	}else{
	
	$ins_stock_resumen_estado->setInsStockResumenId(Gral::getVars(2, "ins_stock_resumen_id", 'null'));
	$ins_stock_resumen_estado->setInsStockResumenTipoEstadoId(Gral::getVars(2, "ins_stock_resumen_tipo_estado_id", 'null'));
	$ins_stock_resumen_estado->setInicial(Gral::getVars(2, "inicial", 0));
	$ins_stock_resumen_estado->setActual(Gral::getVars(2, "actual", 0));
	$ins_stock_resumen_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_stock_resumen_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_stock_resumen_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_stock_resumen_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_stock_resumen_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_stock_resumen_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_stock_resumen_estado/ins_stock_resumen_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_stock_resumen_estado' width='90%'>
        
				<tr>
				  <td  id="label_ins_stock_resumen_estado_cmb_ins_stock_resumen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_stock_resumen_id' ?>" >
				  
                                        <?php Lang::_lang('InsStockResumen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_estado_cmb_ins_stock_resumen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_stock_resumen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_resumen_estado_cmb_ins_stock_resumen_id', Gral::getCmbFiltro(InsStockResumen::getInsStockResumensCmb(), '...'), $ins_stock_resumen_estado->getInsStockResumenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ESTADO_ALTA_CMB_EDIT_INS_STOCK_RESUMEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_resumen_estado_cmb_ins_stock_resumen_id" clase_id="ins_stock_resumen" prefijo='ins_stock_resumen_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_stock_resumen_id" <?php echo ($ins_stock_resumen_estado->getInsStockResumenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_resumen_estado_cmb_ins_stock_resumen_id" clase_id="ins_stock_resumen" prefijo='ins_stock_resumen_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_resumen_estado_cmb_ins_stock_resumen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_resumen_estado_alta_ins_stock_resumen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_estado_alta_ins_stock_resumen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_estado_alta_ins_stock_resumen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_estado_alta_ins_stock_resumen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_stock_resumen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_estado_cmb_ins_stock_resumen_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_stock_resumen_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('InsStockResumenTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_estado_cmb_ins_stock_resumen_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_stock_resumen_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_resumen_estado_cmb_ins_stock_resumen_tipo_estado_id', Gral::getCmbFiltro(InsStockResumenTipoEstado::getInsStockResumenTipoEstadosCmb(), '...'), $ins_stock_resumen_estado->getInsStockResumenTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ESTADO_ALTA_CMB_EDIT_INS_STOCK_RESUMEN_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_resumen_estado_cmb_ins_stock_resumen_tipo_estado_id" clase_id="ins_stock_resumen_tipo_estado" prefijo='ins_stock_resumen_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_stock_resumen_tipo_estado_id" <?php echo ($ins_stock_resumen_estado->getInsStockResumenTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_resumen_estado_cmb_ins_stock_resumen_tipo_estado_id" clase_id="ins_stock_resumen_tipo_estado" prefijo='ins_stock_resumen_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_resumen_estado_cmb_ins_stock_resumen_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_resumen_estado_alta_ins_stock_resumen_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_estado_alta_ins_stock_resumen_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_estado_alta_ins_stock_resumen_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_estado_alta_ins_stock_resumen_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_stock_resumen_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_estado_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_estado_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_resumen_estado_cmb_inicial', GralSiNo::getGralSiNosCmb(), $ins_stock_resumen_estado->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_stock_resumen_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_estado_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_estado_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_resumen_estado_cmb_actual', GralSiNo::getGralSiNosCmb(), $ins_stock_resumen_estado->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_stock_resumen_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_stock_resumen_estado_txa_observacion' rows='10' cols='50' id='ins_stock_resumen_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_stock_resumen_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_stock_resumen_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_stock_resumen_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_stock_resumen_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_stock_resumen_estado'/>
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

