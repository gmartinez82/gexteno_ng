<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('XML_LENGUAJE_TRADUCCION_ALTA')){
    echo "No tiene asignada la credencial XML_LENGUAJE_TRADUCCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'xml_lenguaje_traduccion';
$db_nombre_pagina = 'xml_lenguaje_traduccion_alta';

$xml_lenguaje_traduccion = new XmlLenguajeTraduccion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$xml_lenguaje_traduccion = new XmlLenguajeTraduccion();
	if(trim($hdn_id) != '') $xml_lenguaje_traduccion->setId($hdn_id, false);
	$xml_lenguaje_traduccion->setGralLenguajeId(Gral::getVars(1, "xml_lenguaje_traduccion_cmb_gral_lenguaje_id", null));
	$xml_lenguaje_traduccion->setXmlLenguajeCodigoId(Gral::getVars(1, "xml_lenguaje_traduccion_cmb_xml_lenguaje_codigo_id", null));
	$xml_lenguaje_traduccion->setDescripcion(Gral::getVars(1, "xml_lenguaje_traduccion_txt_descripcion"));
	$xml_lenguaje_traduccion->setCodigo(Gral::getVars(1, "xml_lenguaje_traduccion_txt_codigo"));
	$xml_lenguaje_traduccion->setTraduccion(Gral::getVars(1, "xml_lenguaje_traduccion_txt_traduccion"));
	$xml_lenguaje_traduccion->setObservacion(Gral::getVars(1, "xml_lenguaje_traduccion_txa_observacion"));
	$xml_lenguaje_traduccion->setOrden(Gral::getVars(1, "xml_lenguaje_traduccion_txt_orden", 0));
	$xml_lenguaje_traduccion->setEstado(Gral::getVars(1, "xml_lenguaje_traduccion_cmb_estado", 0));
	$xml_lenguaje_traduccion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "xml_lenguaje_traduccion_txt_creado")));
	$xml_lenguaje_traduccion->setCreadoPor(Gral::getVars(1, "xml_lenguaje_traduccion__creado_por", 0));
	$xml_lenguaje_traduccion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "xml_lenguaje_traduccion_txt_modificado")));
	$xml_lenguaje_traduccion->setModificadoPor(Gral::getVars(1, "xml_lenguaje_traduccion__modificado_por", 0));

	$xml_lenguaje_traduccion_estado = new XmlLenguajeTraduccion();
	if(trim($hdn_id) != ''){
		$xml_lenguaje_traduccion_estado->setId($hdn_id);
		$xml_lenguaje_traduccion->setEstado($xml_lenguaje_traduccion_estado->getEstado());
				
	}else{
		$xml_lenguaje_traduccion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $xml_lenguaje_traduccion->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_traduccion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: xml_lenguaje_traduccion_alta.php?cs=1&id='.$xml_lenguaje_traduccion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $xml_lenguaje_traduccion->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_traduccion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: xml_lenguaje_traduccion_alta.php?cs=1');
				$xml_lenguaje_traduccion = new XmlLenguajeTraduccion();
			}
		break;
	}
	Gral::setSes('XmlLenguajeTraduccion_ULTIMO_INSERTADO', $xml_lenguaje_traduccion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_xml_lenguaje_traduccion_id = Gral::getVars(2, $prefijo.'cmb_xml_lenguaje_traduccion_id', 0);
	if($cmb_xml_lenguaje_traduccion_id != 0){
		$xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($cmb_xml_lenguaje_traduccion_id);
	}else{
	
	$xml_lenguaje_traduccion->setGralLenguajeId(Gral::getVars(2, "gral_lenguaje_id", 'null'));
	$xml_lenguaje_traduccion->setXmlLenguajeCodigoId(Gral::getVars(2, "xml_lenguaje_codigo_id", 'null'));
	$xml_lenguaje_traduccion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$xml_lenguaje_traduccion->setCodigo(Gral::getVars(2, "codigo", ''));
	$xml_lenguaje_traduccion->setTraduccion(Gral::getVars(2, "traduccion", ''));
	$xml_lenguaje_traduccion->setObservacion(Gral::getVars(2, "observacion", ''));
	$xml_lenguaje_traduccion->setOrden(Gral::getVars(2, "orden", 0));
	$xml_lenguaje_traduccion->setEstado(Gral::getVars(2, "estado", 0));
	$xml_lenguaje_traduccion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$xml_lenguaje_traduccion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$xml_lenguaje_traduccion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$xml_lenguaje_traduccion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $xml_lenguaje_traduccion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/xml_lenguaje_traduccion/xml_lenguaje_traduccion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_xml_lenguaje_traduccion' width='90%'>
        
				<tr>
				  <td  id="label_xml_lenguaje_traduccion_cmb_gral_lenguaje_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_lenguaje_id' ?>" >
				  
                                        <?php Lang::_lang('Lenguaje', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_traduccion_cmb_gral_lenguaje_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_lenguaje_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'xml_lenguaje_traduccion_cmb_gral_lenguaje_id', Gral::getCmbFiltro(GralLenguaje::getGralLenguajesCmb(), '...'), $xml_lenguaje_traduccion->getGralLenguajeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_TRADUCCION_ALTA_CMB_EDIT_GRAL_LENGUAJE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="xml_lenguaje_traduccion_cmb_gral_lenguaje_id" clase_id="gral_lenguaje" prefijo='xml_lenguaje_traduccion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_lenguaje_id" <?php echo ($xml_lenguaje_traduccion->getGralLenguajeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="xml_lenguaje_traduccion_cmb_gral_lenguaje_id" clase_id="gral_lenguaje" prefijo='xml_lenguaje_traduccion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_xml_lenguaje_traduccion_cmb_gral_lenguaje_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_xml_lenguaje_traduccion_alta_gral_lenguaje_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_traduccion_alta_gral_lenguaje_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_traduccion_alta_gral_lenguaje_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_traduccion_alta_gral_lenguaje_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_lenguaje_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_traduccion_cmb_xml_lenguaje_codigo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_xml_lenguaje_codigo_id' ?>" >
				  
                                        <?php Lang::_lang('Lenguaje Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_traduccion_cmb_xml_lenguaje_codigo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('xml_lenguaje_codigo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'xml_lenguaje_traduccion_cmb_xml_lenguaje_codigo_id', Gral::getCmbFiltro(XmlLenguajeCodigo::getXmlLenguajeCodigosCmb(), '...'), $xml_lenguaje_traduccion->getXmlLenguajeCodigoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_TRADUCCION_ALTA_CMB_EDIT_XML_LENGUAJE_CODIGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="xml_lenguaje_traduccion_cmb_xml_lenguaje_codigo_id" clase_id="xml_lenguaje_codigo" prefijo='xml_lenguaje_traduccion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_xml_lenguaje_codigo_id" <?php echo ($xml_lenguaje_traduccion->getXmlLenguajeCodigoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="xml_lenguaje_traduccion_cmb_xml_lenguaje_codigo_id" clase_id="xml_lenguaje_codigo" prefijo='xml_lenguaje_traduccion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_xml_lenguaje_traduccion_cmb_xml_lenguaje_codigo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_xml_lenguaje_traduccion_alta_xml_lenguaje_codigo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_traduccion_alta_xml_lenguaje_codigo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_traduccion_alta_xml_lenguaje_codigo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_traduccion_alta_xml_lenguaje_codigo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('xml_lenguaje_codigo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_traduccion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_traduccion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='xml_lenguaje_traduccion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='xml_lenguaje_traduccion_txt_descripcion' value='<?php Gral::_echoTxt($xml_lenguaje_traduccion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_xml_lenguaje_traduccion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_traduccion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_traduccion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_traduccion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_traduccion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_traduccion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='xml_lenguaje_traduccion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='xml_lenguaje_traduccion_txt_codigo' value='<?php Gral::_echoTxt($xml_lenguaje_traduccion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_xml_lenguaje_traduccion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_traduccion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_traduccion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_traduccion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_traduccion_txt_traduccion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_traduccion' ?>" >
				  
                                        <?php Lang::_lang('Traduccion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_traduccion_txt_traduccion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('traduccion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='xml_lenguaje_traduccion_txt_traduccion' type='text' class='textbox <?php echo $error_input_css ?> ' id='xml_lenguaje_traduccion_txt_traduccion' value='<?php Gral::_echoTxt($xml_lenguaje_traduccion->getTraduccion(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_xml_lenguaje_traduccion_alta_traduccion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_traduccion_alta_traduccion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_traduccion_alta_traduccion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_traduccion_alta_traduccion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('traduccion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_traduccion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_traduccion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='xml_lenguaje_traduccion_txa_observacion' rows='10' cols='50' id='xml_lenguaje_traduccion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($xml_lenguaje_traduccion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_xml_lenguaje_traduccion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_traduccion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_traduccion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_traduccion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($xml_lenguaje_traduccion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_xml_lenguaje_traduccion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='xml_lenguaje_traduccion'/>
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

