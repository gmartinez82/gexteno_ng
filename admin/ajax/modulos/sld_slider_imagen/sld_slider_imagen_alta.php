<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('SLD_SLIDER_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial SLD_SLIDER_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'sld_slider_imagen';
$db_nombre_pagina = 'sld_slider_imagen_alta';

$sld_slider_imagen = new SldSliderImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$sld_slider_imagen = new SldSliderImagen();
	if(trim($hdn_id) != '') $sld_slider_imagen->setId($hdn_id, false);
	$sld_slider_imagen->setSldSliderId(Gral::getVars(1, "sld_slider_imagen_dbsug_sld_slider_id", null));
	$sld_slider_imagen->setSldTipoImagenId(Gral::getVars(1, "sld_slider_imagen_cmb_sld_tipo_imagen_id", null));
	$sld_slider_imagen->setDescripcion(Gral::getVars(1, "sld_slider_imagen_txt_descripcion"));
	$sld_slider_imagen->setCodigo(Gral::getVars(1, "sld_slider_imagen_txt_codigo"));
	$sld_slider_imagen->setObservacion(Gral::getVars(1, "sld_slider_imagen_txa_observacion"));
	$sld_slider_imagen->setArchivo(Gral::getVars(1, "sld_slider_imagen_file_archivo"));
	$sld_slider_imagen->setPeso(Gral::getVars(1, "sld_slider_imagen_txt_peso"));
	$sld_slider_imagen->setTipo(Gral::getVars(1, "sld_slider_imagen_txt_tipo"));
	$sld_slider_imagen->setAlto(Gral::getVars(1, "sld_slider_imagen_txt_alto"));
	$sld_slider_imagen->setAncho(Gral::getVars(1, "sld_slider_imagen_txt_ancho"));
	$sld_slider_imagen->setOrden(Gral::getVars(1, "sld_slider_imagen_txt_orden", 0));
	$sld_slider_imagen->setEstado(Gral::getVars(1, "sld_slider_imagen__estado", 0));
	$sld_slider_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "sld_slider_imagen_txt_creado")));
	$sld_slider_imagen->setCreadoPor(Gral::getVars(1, "sld_slider_imagen__creado_por", null));
	$sld_slider_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "sld_slider_imagen_txt_modificado")));
	$sld_slider_imagen->setModificadoPor(Gral::getVars(1, "sld_slider_imagen__modificado_por", null));

	$sld_slider_imagen_estado = new SldSliderImagen();
	if(trim($hdn_id) != ''){
		$sld_slider_imagen_estado->setId($hdn_id);
		$sld_slider_imagen->setEstado($sld_slider_imagen_estado->getEstado());
				
	}else{
		$sld_slider_imagen->setEstado(1);
				
	}
	

	$sld_slider_imagen_existente = new SldSliderImagen();
	if(trim($hdn_id) != ''){
		$sld_slider_imagen_existente->setId($hdn_id);
		$sld_slider_imagen->setArchivo($sld_slider_imagen_existente->getArchivo());
		$sld_slider_imagen->setPeso($sld_slider_imagen_existente->getPeso());
		$sld_slider_imagen->setTipo($sld_slider_imagen_existente->getTipo());
		$sld_slider_imagen->setOrden($sld_slider_imagen_existente->getOrden());
		$sld_slider_imagen->setAlto($sld_slider_imagen_existente->getAlto());
		$sld_slider_imagen->setAncho($sld_slider_imagen_existente->getAncho());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $sld_slider_imagen->control();
			if(!$error->getExisteError()){
				$sld_slider_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: sld_slider_imagen_alta.php?cs=1&id='.$sld_slider_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $sld_slider_imagen->control();
			if(!$error->getExisteError()){
				$sld_slider_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: sld_slider_imagen_alta.php?cs=1');
				$sld_slider_imagen = new SldSliderImagen();
			}
		break;
	}
	Gral::setSes('SldSliderImagen_ULTIMO_INSERTADO', $sld_slider_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_sld_slider_imagen_id = Gral::getVars(2, $prefijo.'cmb_sld_slider_imagen_id', 0);
	if($cmb_sld_slider_imagen_id != 0){
		$sld_slider_imagen = SldSliderImagen::getOxId($cmb_sld_slider_imagen_id);
	}else{
	
	$sld_slider_imagen->setSldSliderId(Gral::getVars(2, "sld_slider_id", 'null'));
	$sld_slider_imagen->setSldTipoImagenId(Gral::getVars(2, "sld_tipo_imagen_id", 'null'));
	$sld_slider_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$sld_slider_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$sld_slider_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$sld_slider_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$sld_slider_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$sld_slider_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$sld_slider_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$sld_slider_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	$sld_slider_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$sld_slider_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$sld_slider_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$sld_slider_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$sld_slider_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$sld_slider_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $sld_slider_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/sld_slider_imagen/sld_slider_imagen_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_sld_slider_imagen' width='90%'>
        
				<tr>
				  <td  id="label_sld_slider_imagen_dbsug_sld_slider_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sld_slider_id' ?>" >
				  
                                        <?php Lang::_lang('SldSlider', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_imagen_dbsug_sld_slider_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sld_slider_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'sld_slider_imagen_dbsug_sld_slider', 'ajax/modulos/sld_slider/sld_slider_dbsuggest.php', false, true, '', 'Ingrese ...', $sld_slider_imagen->getSldSliderId(), $sld_slider_imagen->getSldSlider()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_sld_slider_imagen_alta_sld_slider_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_imagen_alta_sld_slider_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_imagen_alta_sld_slider_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_imagen_alta_sld_slider_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sld_slider_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_imagen_cmb_sld_tipo_imagen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sld_tipo_imagen_id' ?>" >
				  
                                        <?php Lang::_lang('SldTipoImagen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_imagen_cmb_sld_tipo_imagen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sld_tipo_imagen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'sld_slider_imagen_cmb_sld_tipo_imagen_id', Gral::getCmbFiltro(SldTipoImagen::getSldTipoImagensCmb(), '...'), $sld_slider_imagen->getSldTipoImagenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('SLD_SLIDER_IMAGEN_ALTA_CMB_EDIT_SLD_TIPO_IMAGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="sld_slider_imagen_cmb_sld_tipo_imagen_id" clase_id="sld_tipo_imagen" prefijo='sld_slider_imagen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_sld_tipo_imagen_id" <?php echo ($sld_slider_imagen->getSldTipoImagenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="sld_slider_imagen_cmb_sld_tipo_imagen_id" clase_id="sld_tipo_imagen" prefijo='sld_slider_imagen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_sld_slider_imagen_cmb_sld_tipo_imagen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_sld_slider_imagen_alta_sld_tipo_imagen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_imagen_alta_sld_tipo_imagen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_imagen_alta_sld_tipo_imagen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_imagen_alta_sld_tipo_imagen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sld_tipo_imagen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_slider_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_slider_imagen_txt_descripcion' value='<?php Gral::_echoTxt($sld_slider_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_sld_slider_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_slider_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_slider_imagen_txt_codigo' value='<?php Gral::_echoTxt($sld_slider_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_sld_slider_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='sld_slider_imagen_txa_observacion' rows='3' cols='50' id='sld_slider_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($sld_slider_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_sld_slider_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($sld_slider_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_sld_slider_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='sld_slider_imagen'/>
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

