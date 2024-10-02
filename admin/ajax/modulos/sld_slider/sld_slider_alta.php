<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('SLD_SLIDER_ALTA')){
    echo "No tiene asignada la credencial SLD_SLIDER_ALTA. ";
    return false;
}

$db_nombre_objeto = 'sld_slider';
$db_nombre_pagina = 'sld_slider_alta';

$sld_slider = new SldSlider();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$sld_slider = new SldSlider();
	if(trim($hdn_id) != '') $sld_slider->setId($hdn_id, false);
	$sld_slider->setDescripcion(Gral::getVars(1, "sld_slider_txt_descripcion"));
	$sld_slider->setInsInsumoId(Gral::getVars(1, "sld_slider_dbsug_ins_insumo_id", null));
	$sld_slider->setUrl(Gral::getVars(1, "sld_slider_txt_url"));
	$sld_slider->setCodigo(Gral::getVars(1, "sld_slider_txt_codigo"));
	$sld_slider->setObservacion(Gral::getVars(1, "sld_slider_txa_observacion"));
	$sld_slider->setOrden(Gral::getVars(1, "sld_slider_txt_orden", 0));
	$sld_slider->setEstado(Gral::getVars(1, "sld_slider_cmb_estado", 0));
	$sld_slider->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "sld_slider_txt_creado")));
	$sld_slider->setCreadoPor(Gral::getVars(1, "sld_slider__creado_por", null));
	$sld_slider->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "sld_slider_txt_modificado")));
	$sld_slider->setModificadoPor(Gral::getVars(1, "sld_slider__modificado_por", null));

	$sld_slider_estado = new SldSlider();
	if(trim($hdn_id) != ''){
		$sld_slider_estado->setId($hdn_id);
		$sld_slider->setEstado($sld_slider_estado->getEstado());
				
	}else{
		$sld_slider->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $sld_slider->control();
			if(!$error->getExisteError()){
				$sld_slider->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: sld_slider_alta.php?cs=1&id='.$sld_slider->getId());
			}
		break;
		case 'guardarnvo':
			$error = $sld_slider->control();
			if(!$error->getExisteError()){
				$sld_slider->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: sld_slider_alta.php?cs=1');
				$sld_slider = new SldSlider();
			}
		break;
	}
	Gral::setSes('SldSlider_ULTIMO_INSERTADO', $sld_slider->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_sld_slider_id = Gral::getVars(2, $prefijo.'cmb_sld_slider_id', 0);
	if($cmb_sld_slider_id != 0){
		$sld_slider = SldSlider::getOxId($cmb_sld_slider_id);
	}else{
	
	$sld_slider->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$sld_slider->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$sld_slider->setUrl(Gral::getVars(2, "url", ''));
	$sld_slider->setCodigo(Gral::getVars(2, "codigo", ''));
	$sld_slider->setObservacion(Gral::getVars(2, "observacion", ''));
	$sld_slider->setOrden(Gral::getVars(2, "orden", 0));
	$sld_slider->setEstado(Gral::getVars(2, "estado", 0));
	$sld_slider->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$sld_slider->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$sld_slider->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$sld_slider->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $sld_slider->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/sld_slider/sld_slider_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_sld_slider' width='90%'>
        
				<tr>
				  <td  id="label_sld_slider_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_slider_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_slider_txt_descripcion' value='<?php Gral::_echoTxt($sld_slider->getDescripcion(), true) ?>' size='60' />            
                    <?php if(Lang::_lang('help_sld_slider_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'sld_slider_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $sld_slider->getInsInsumoId(), $sld_slider->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_sld_slider_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_txt_url" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_url' ?>" >
				  
                                        <?php Lang::_lang('Url', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_txt_url" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('url')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_slider_txt_url' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_slider_txt_url' value='<?php Gral::_echoTxt($sld_slider->getUrl(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_sld_slider_alta_url', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_alta_url', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_alta_url', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_alta_url', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('url')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_slider_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_slider_txt_codigo' value='<?php Gral::_echoTxt($sld_slider->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_sld_slider_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='sld_slider_txa_observacion' rows='3' cols='70' id='sld_slider_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($sld_slider->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_sld_slider_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_sld_slider_txt_orden" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_orden' ?>" >
				  
                                        <?php Lang::_lang('Orden', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_sld_slider_txt_orden" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('orden')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='sld_slider_txt_orden' type='text' class='textbox <?php echo $error_input_css ?> ' id='sld_slider_txt_orden' value='<?php Gral::_echoTxt($sld_slider->getOrden(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_sld_slider_alta_orden', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_sld_slider_alta_orden', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_sld_slider_alta_orden', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_sld_slider_alta_orden', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('orden')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($sld_slider->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_sld_slider_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='sld_slider'/>
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

