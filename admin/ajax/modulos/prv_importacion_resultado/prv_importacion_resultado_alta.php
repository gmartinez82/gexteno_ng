<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_IMPORTACION_RESULTADO_ALTA')){
    echo "No tiene asignada la credencial PRV_IMPORTACION_RESULTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_importacion_resultado';
$db_nombre_pagina = 'prv_importacion_resultado_alta';

$prv_importacion_resultado = new PrvImportacionResultado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_importacion_resultado = new PrvImportacionResultado();
	if(trim($hdn_id) != '') $prv_importacion_resultado->setId($hdn_id, false);
	$prv_importacion_resultado->setDescripcion(Gral::getVars(1, "prv_importacion_resultado_txt_descripcion"));
	$prv_importacion_resultado->setPrvImportacionId(Gral::getVars(1, "prv_importacion_resultado_cmb_prv_importacion_id", null));
	$prv_importacion_resultado->setCodigo(Gral::getVars(1, "prv_importacion_resultado_txt_codigo"));
	$prv_importacion_resultado->setObservacion(Gral::getVars(1, "prv_importacion_resultado_txa_observacion"));
	$prv_importacion_resultado->setObservacionTecnica(Gral::getVars(1, "prv_importacion_resultado_txa_observacion_tecnica"));
	$prv_importacion_resultado->setEstado(Gral::getVars(1, "prv_importacion_resultado__estado", 0));
	$prv_importacion_resultado->setOrden(Gral::getVars(1, "prv_importacion_resultado_txt_orden", 0));
	$prv_importacion_resultado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_importacion_resultado_txt_creado")));
	$prv_importacion_resultado->setCreadoPor(Gral::getVars(1, "prv_importacion_resultado__creado_por", null));
	$prv_importacion_resultado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_importacion_resultado_txt_modificado")));
	$prv_importacion_resultado->setModificadoPor(Gral::getVars(1, "prv_importacion_resultado__modificado_por", 0));

	$prv_importacion_resultado_estado = new PrvImportacionResultado();
	if(trim($hdn_id) != ''){
		$prv_importacion_resultado_estado->setId($hdn_id);
		$prv_importacion_resultado->setEstado($prv_importacion_resultado_estado->getEstado());
				
	}else{
		$prv_importacion_resultado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prv_importacion_resultado->control();
			if(!$error->getExisteError()){
				$prv_importacion_resultado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_importacion_resultado_alta.php?cs=1&id='.$prv_importacion_resultado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_importacion_resultado->control();
			if(!$error->getExisteError()){
				$prv_importacion_resultado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_importacion_resultado_alta.php?cs=1');
				$prv_importacion_resultado = new PrvImportacionResultado();
			}
		break;
	}
	Gral::setSes('PrvImportacionResultado_ULTIMO_INSERTADO', $prv_importacion_resultado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_importacion_resultado_id = Gral::getVars(2, $prefijo.'cmb_prv_importacion_resultado_id', 0);
	if($cmb_prv_importacion_resultado_id != 0){
		$prv_importacion_resultado = PrvImportacionResultado::getOxId($cmb_prv_importacion_resultado_id);
	}else{
	
	$prv_importacion_resultado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prv_importacion_resultado->setPrvImportacionId(Gral::getVars(2, "prv_importacion_id", 'null'));
	$prv_importacion_resultado->setCodigo(Gral::getVars(2, "codigo", ''));
	$prv_importacion_resultado->setObservacion(Gral::getVars(2, "observacion", ''));
	$prv_importacion_resultado->setObservacionTecnica(Gral::getVars(2, "observacion_tecnica", ''));
	$prv_importacion_resultado->setEstado(Gral::getVars(2, "estado", 0));
	$prv_importacion_resultado->setOrden(Gral::getVars(2, "orden", 0));
	$prv_importacion_resultado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_importacion_resultado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prv_importacion_resultado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prv_importacion_resultado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_importacion_resultado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_importacion_resultado/prv_importacion_resultado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_importacion_resultado' width='90%'>
        
				<tr>
				  <td  id="label_prv_importacion_resultado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_resultado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_resultado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_importacion_resultado_txt_descripcion' value='<?php Gral::_echoTxt($prv_importacion_resultado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prv_importacion_resultado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_resultado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_resultado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_resultado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_resultado_cmb_prv_importacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_importacion_id' ?>" >
				  
                                        <?php Lang::_lang('PrvImportacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_resultado_cmb_prv_importacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_importacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_resultado_cmb_prv_importacion_id', Gral::getCmbFiltro(PrvImportacion::getPrvImportacionsCmb(), '...'), $prv_importacion_resultado->getPrvImportacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_RESULTADO_ALTA_CMB_EDIT_PRV_IMPORTACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_importacion_resultado_cmb_prv_importacion_id" clase_id="prv_importacion" prefijo='prv_importacion_resultado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_importacion_id" <?php echo ($prv_importacion_resultado->getPrvImportacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_importacion_resultado_cmb_prv_importacion_id" clase_id="prv_importacion" prefijo='prv_importacion_resultado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_importacion_resultado_cmb_prv_importacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_importacion_resultado_alta_prv_importacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_resultado_alta_prv_importacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_resultado_alta_prv_importacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_resultado_alta_prv_importacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_importacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_resultado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_resultado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_resultado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_importacion_resultado_txt_codigo' value='<?php Gral::_echoTxt($prv_importacion_resultado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_importacion_resultado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_resultado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_resultado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_resultado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_resultado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_resultado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_importacion_resultado_txa_observacion' rows='10' cols='50' id='prv_importacion_resultado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_importacion_resultado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_importacion_resultado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_resultado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_resultado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_resultado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_resultado_txa_observacion_tecnica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion_tecnica' ?>" >
				  
                                        <?php Lang::_lang('Observaciones Tecnicas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_resultado_txa_observacion_tecnica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion_tecnica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_importacion_resultado_txa_observacion_tecnica' rows='10' cols='50' id='prv_importacion_resultado_txa_observacion_tecnica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_importacion_resultado->getObservacionTecnica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_importacion_resultado_alta_observacion_tecnica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_resultado_alta_observacion_tecnica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_resultado_alta_observacion_tecnica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_resultado_alta_observacion_tecnica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion_tecnica')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_importacion_resultado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_importacion_resultado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_importacion_resultado'/>
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

