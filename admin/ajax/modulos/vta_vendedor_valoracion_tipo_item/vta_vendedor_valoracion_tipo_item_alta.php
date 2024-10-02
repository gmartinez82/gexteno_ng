<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_ALTA')){
    echo "No tiene asignada la credencial VTA_VENDEDOR_VALORACION_TIPO_ITEM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_vendedor_valoracion_tipo_item';
$db_nombre_pagina = 'vta_vendedor_valoracion_tipo_item_alta';

$vta_vendedor_valoracion_tipo_item = new VtaVendedorValoracionTipoItem();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_vendedor_valoracion_tipo_item = new VtaVendedorValoracionTipoItem();
	if(trim($hdn_id) != '') $vta_vendedor_valoracion_tipo_item->setId($hdn_id, false);
	$vta_vendedor_valoracion_tipo_item->setDescripcion(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_descripcion"));
	$vta_vendedor_valoracion_tipo_item->setDescripcionCorta(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_descripcion_corta"));
	$vta_vendedor_valoracion_tipo_item->setDescripcionPublica(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_descripcion_publica"));
	$vta_vendedor_valoracion_tipo_item->setColor(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_color"));
	$vta_vendedor_valoracion_tipo_item->setColorSecundario(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_color_secundario"));
	$vta_vendedor_valoracion_tipo_item->setCodigo(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_codigo"));
	$vta_vendedor_valoracion_tipo_item->setObservacion(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txa_observacion"));
	$vta_vendedor_valoracion_tipo_item->setOrden(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_orden", 0));
	$vta_vendedor_valoracion_tipo_item->setEstado(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_cmb_estado", 0));
	$vta_vendedor_valoracion_tipo_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_creado")));
	$vta_vendedor_valoracion_tipo_item->setCreadoPor(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item__creado_por", 0));
	$vta_vendedor_valoracion_tipo_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item_txt_modificado")));
	$vta_vendedor_valoracion_tipo_item->setModificadoPor(Gral::getVars(1, "vta_vendedor_valoracion_tipo_item__modificado_por", 0));

	$vta_vendedor_valoracion_tipo_item_estado = new VtaVendedorValoracionTipoItem();
	if(trim($hdn_id) != ''){
		$vta_vendedor_valoracion_tipo_item_estado->setId($hdn_id);
		$vta_vendedor_valoracion_tipo_item->setEstado($vta_vendedor_valoracion_tipo_item_estado->getEstado());
				
	}else{
		$vta_vendedor_valoracion_tipo_item->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_vendedor_valoracion_tipo_item->control();
			if(!$error->getExisteError()){
				$vta_vendedor_valoracion_tipo_item->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_vendedor_valoracion_tipo_item_alta.php?cs=1&id='.$vta_vendedor_valoracion_tipo_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_vendedor_valoracion_tipo_item->control();
			if(!$error->getExisteError()){
				$vta_vendedor_valoracion_tipo_item->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_vendedor_valoracion_tipo_item_alta.php?cs=1');
				$vta_vendedor_valoracion_tipo_item = new VtaVendedorValoracionTipoItem();
			}
		break;
	}
	Gral::setSes('VtaVendedorValoracionTipoItem_ULTIMO_INSERTADO', $vta_vendedor_valoracion_tipo_item->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_vendedor_valoracion_tipo_item_id = Gral::getVars(2, $prefijo.'cmb_vta_vendedor_valoracion_tipo_item_id', 0);
	if($cmb_vta_vendedor_valoracion_tipo_item_id != 0){
		$vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($cmb_vta_vendedor_valoracion_tipo_item_id);
	}else{
	
	$vta_vendedor_valoracion_tipo_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_vendedor_valoracion_tipo_item->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$vta_vendedor_valoracion_tipo_item->setDescripcionPublica(Gral::getVars(2, "descripcion_publica", ''));
	$vta_vendedor_valoracion_tipo_item->setColor(Gral::getVars(2, "color", ''));
	$vta_vendedor_valoracion_tipo_item->setColorSecundario(Gral::getVars(2, "color_secundario", ''));
	$vta_vendedor_valoracion_tipo_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_vendedor_valoracion_tipo_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_vendedor_valoracion_tipo_item->setOrden(Gral::getVars(2, "orden", 0));
	$vta_vendedor_valoracion_tipo_item->setEstado(Gral::getVars(2, "estado", 0));
	$vta_vendedor_valoracion_tipo_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_vendedor_valoracion_tipo_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_vendedor_valoracion_tipo_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_vendedor_valoracion_tipo_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_vendedor_valoracion_tipo_item->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_vendedor_valoracion_tipo_item' width='90%'>
        
				<tr>
				  <td  id="label_vta_vendedor_valoracion_tipo_item_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_tipo_item_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_tipo_item_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_tipo_item_txt_descripcion' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_tipo_item_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_tipo_item_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_tipo_item_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_tipo_item_txt_descripcion_corta' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_tipo_item_txt_descripcion_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_publica' ?>" >
				  
                                        <?php Lang::_lang('Descr Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_tipo_item_txt_descripcion_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_tipo_item_txt_descripcion_publica' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_tipo_item_txt_descripcion_publica' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getDescripcionPublica(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_descripcion_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_descripcion_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_descripcion_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_descripcion_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_tipo_item_txt_color" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >
				  
                                        <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_tipo_item_txt_color" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_tipo_item_txt_color' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_tipo_item_txt_color' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getColor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_color', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_tipo_item_txt_color_secundario" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_color_secundario' ?>" >
				  
                                        <?php Lang::_lang('Color Secundario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_tipo_item_txt_color_secundario" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('color_secundario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_tipo_item_txt_color_secundario' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_tipo_item_txt_color_secundario' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getColorSecundario(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_color_secundario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_color_secundario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_color_secundario', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_color_secundario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color_secundario')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_tipo_item_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_tipo_item_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_tipo_item_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_tipo_item_txt_codigo' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_tipo_item_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_tipo_item_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_vendedor_valoracion_tipo_item_txa_observacion' rows='10' cols='50' id='vta_vendedor_valoracion_tipo_item_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_tipo_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_tipo_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_vendedor_valoracion_tipo_item_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_vendedor_valoracion_tipo_item'/>
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

