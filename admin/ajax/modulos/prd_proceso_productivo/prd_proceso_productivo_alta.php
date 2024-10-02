<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_PROCESO_PRODUCTIVO_ALTA')){
    echo "No tiene asignada la credencial PRD_PROCESO_PRODUCTIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_proceso_productivo';
$db_nombre_pagina = 'prd_proceso_productivo_alta';

$prd_proceso_productivo = new PrdProcesoProductivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_proceso_productivo = new PrdProcesoProductivo();
	if(trim($hdn_id) != '') $prd_proceso_productivo->setId($hdn_id, false);
	$prd_proceso_productivo->setDescripcion(Gral::getVars(1, "prd_proceso_productivo_txt_descripcion"));
	$prd_proceso_productivo->setDescripcionCorta(Gral::getVars(1, "prd_proceso_productivo_txt_descripcion_corta"));
	$prd_proceso_productivo->setInsInsumoId(Gral::getVars(1, "prd_proceso_productivo_cmb_ins_insumo_id", null));
	$prd_proceso_productivo->setCantidad(Gral::getVars(1, "prd_proceso_productivo_txt_cantidad", 0));
	$prd_proceso_productivo->setConfigurado(Gral::getVars(1, "prd_proceso_productivo_cmb_configurado", 0));
	$prd_proceso_productivo->setCodigo(Gral::getVars(1, "prd_proceso_productivo_txt_codigo"));
	$prd_proceso_productivo->setObservacion(Gral::getVars(1, "prd_proceso_productivo_txa_observacion"));
	$prd_proceso_productivo->setOrden(Gral::getVars(1, "prd_proceso_productivo_txt_orden", 0));
	$prd_proceso_productivo->setEstado(Gral::getVars(1, "prd_proceso_productivo_cmb_estado", 0));
	$prd_proceso_productivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_proceso_productivo_txt_creado")));
	$prd_proceso_productivo->setCreadoPor(Gral::getVars(1, "prd_proceso_productivo__creado_por", 0));
	$prd_proceso_productivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_proceso_productivo_txt_modificado")));
	$prd_proceso_productivo->setModificadoPor(Gral::getVars(1, "prd_proceso_productivo__modificado_por", 0));

	$prd_proceso_productivo_estado = new PrdProcesoProductivo();
	if(trim($hdn_id) != ''){
		$prd_proceso_productivo_estado->setId($hdn_id);
		$prd_proceso_productivo->setEstado($prd_proceso_productivo_estado->getEstado());
				
	}else{
		$prd_proceso_productivo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_proceso_productivo->control();
			if(!$error->getExisteError()){
				$prd_proceso_productivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_proceso_productivo_alta.php?cs=1&id='.$prd_proceso_productivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_proceso_productivo->control();
			if(!$error->getExisteError()){
				$prd_proceso_productivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_proceso_productivo_alta.php?cs=1');
				$prd_proceso_productivo = new PrdProcesoProductivo();
			}
		break;
	}
	Gral::setSes('PrdProcesoProductivo_ULTIMO_INSERTADO', $prd_proceso_productivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_proceso_productivo_id = Gral::getVars(2, $prefijo.'cmb_prd_proceso_productivo_id', 0);
	if($cmb_prd_proceso_productivo_id != 0){
		$prd_proceso_productivo = PrdProcesoProductivo::getOxId($cmb_prd_proceso_productivo_id);
	}else{
	
	$prd_proceso_productivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_proceso_productivo->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$prd_proceso_productivo->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$prd_proceso_productivo->setCantidad(Gral::getVars(2, "cantidad", 0));
	$prd_proceso_productivo->setConfigurado(Gral::getVars(2, "configurado", 0));
	$prd_proceso_productivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_proceso_productivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_proceso_productivo->setOrden(Gral::getVars(2, "orden", 0));
	$prd_proceso_productivo->setEstado(Gral::getVars(2, "estado", 0));
	$prd_proceso_productivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_proceso_productivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_proceso_productivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_proceso_productivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_proceso_productivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_proceso_productivo/prd_proceso_productivo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_proceso_productivo' width='90%'>
        
				<tr>
				  <td  id="label_prd_proceso_productivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_proceso_productivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_proceso_productivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_proceso_productivo_txt_descripcion' value='<?php Gral::_echoTxt($prd_proceso_productivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_proceso_productivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_proceso_productivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_proceso_productivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_proceso_productivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_proceso_productivo_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_proceso_productivo_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_proceso_productivo_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_proceso_productivo_txt_descripcion_corta' value='<?php Gral::_echoTxt($prd_proceso_productivo->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_proceso_productivo_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_proceso_productivo_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_proceso_productivo_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_proceso_productivo_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_proceso_productivo_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_proceso_productivo_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_proceso_productivo_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $prd_proceso_productivo->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_PROCESO_PRODUCTIVO_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_proceso_productivo_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='prd_proceso_productivo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($prd_proceso_productivo->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_proceso_productivo_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='prd_proceso_productivo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_proceso_productivo_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_proceso_productivo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_proceso_productivo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_proceso_productivo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_proceso_productivo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_proceso_productivo_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_proceso_productivo_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_proceso_productivo_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_proceso_productivo_txt_cantidad' value='<?php Gral::_echoTxt($prd_proceso_productivo->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_proceso_productivo_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_proceso_productivo_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_proceso_productivo_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_proceso_productivo_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_proceso_productivo_cmb_configurado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_configurado' ?>" >
				  
                                        <?php Lang::_lang('Configurado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_proceso_productivo_cmb_configurado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('configurado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_proceso_productivo_cmb_configurado', GralSiNo::getGralSiNosCmb(), $prd_proceso_productivo->getConfigurado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_prd_proceso_productivo_alta_configurado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_proceso_productivo_alta_configurado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_proceso_productivo_alta_configurado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_proceso_productivo_alta_configurado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('configurado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_proceso_productivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_proceso_productivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_proceso_productivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_proceso_productivo_txt_codigo' value='<?php Gral::_echoTxt($prd_proceso_productivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_proceso_productivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_proceso_productivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_proceso_productivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_proceso_productivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_proceso_productivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_proceso_productivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_proceso_productivo_txa_observacion' rows='10' cols='50' id='prd_proceso_productivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_proceso_productivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_proceso_productivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_proceso_productivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_proceso_productivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_proceso_productivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_proceso_productivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_proceso_productivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_proceso_productivo'/>
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

