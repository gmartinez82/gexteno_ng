<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA')){
    echo "No tiene asignada la credencial XML_LENGUAJE_CODIGO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'xml_lenguaje_codigo';
$db_nombre_pagina = 'xml_lenguaje_codigo_alta';

$xml_lenguaje_codigo = new XmlLenguajeCodigo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$xml_lenguaje_codigo = new XmlLenguajeCodigo();
	if(trim($hdn_id) != '') $xml_lenguaje_codigo->setId($hdn_id, false);
	$xml_lenguaje_codigo->setDescripcion(Gral::getVars(1, "xml_lenguaje_codigo_txt_descripcion"));
	$xml_lenguaje_codigo->setXmlLenguajeTipoId(Gral::getVars(1, "xml_lenguaje_codigo_cmb_xml_lenguaje_tipo_id", null));
	$xml_lenguaje_codigo->setXmlLenguajePaginaId(Gral::getVars(1, "xml_lenguaje_codigo_cmb_xml_lenguaje_pagina_id", null));
	$xml_lenguaje_codigo->setXmlLenguajeEntornoId(Gral::getVars(1, "xml_lenguaje_codigo_cmb_xml_lenguaje_entorno_id", null));
	$xml_lenguaje_codigo->setCodigo(Gral::getVars(1, "xml_lenguaje_codigo_txt_codigo"));
	$xml_lenguaje_codigo->setObservacion(Gral::getVars(1, "xml_lenguaje_codigo_txa_observacion"));
	$xml_lenguaje_codigo->setOrden(Gral::getVars(1, "xml_lenguaje_codigo_txt_orden", 0));
	$xml_lenguaje_codigo->setEstado(Gral::getVars(1, "xml_lenguaje_codigo_cmb_estado", 0));
	$xml_lenguaje_codigo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "xml_lenguaje_codigo_txt_creado")));
	$xml_lenguaje_codigo->setCreadoPor(Gral::getVars(1, "xml_lenguaje_codigo__creado_por", 0));
	$xml_lenguaje_codigo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "xml_lenguaje_codigo_txt_modificado")));
	$xml_lenguaje_codigo->setModificadoPor(Gral::getVars(1, "xml_lenguaje_codigo__modificado_por", 0));

	$xml_lenguaje_codigo_estado = new XmlLenguajeCodigo();
	if(trim($hdn_id) != ''){
		$xml_lenguaje_codigo_estado->setId($hdn_id);
		$xml_lenguaje_codigo->setEstado($xml_lenguaje_codigo_estado->getEstado());
				
	}else{
		$xml_lenguaje_codigo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $xml_lenguaje_codigo->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_codigo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: xml_lenguaje_codigo_alta.php?cs=1&id='.$xml_lenguaje_codigo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $xml_lenguaje_codigo->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_codigo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: xml_lenguaje_codigo_alta.php?cs=1');
				$xml_lenguaje_codigo = new XmlLenguajeCodigo();
			}
		break;
	}
	Gral::setSes('XmlLenguajeCodigo_ULTIMO_INSERTADO', $xml_lenguaje_codigo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_xml_lenguaje_codigo_id = Gral::getVars(2, $prefijo.'cmb_xml_lenguaje_codigo_id', 0);
	if($cmb_xml_lenguaje_codigo_id != 0){
		$xml_lenguaje_codigo = XmlLenguajeCodigo::getOxId($cmb_xml_lenguaje_codigo_id);
	}else{
	
	$xml_lenguaje_codigo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$xml_lenguaje_codigo->setXmlLenguajeTipoId(Gral::getVars(2, "xml_lenguaje_tipo_id", 'null'));
	$xml_lenguaje_codigo->setXmlLenguajePaginaId(Gral::getVars(2, "xml_lenguaje_pagina_id", 'null'));
	$xml_lenguaje_codigo->setXmlLenguajeEntornoId(Gral::getVars(2, "xml_lenguaje_entorno_id", 'null'));
	$xml_lenguaje_codigo->setCodigo(Gral::getVars(2, "codigo", ''));
	$xml_lenguaje_codigo->setObservacion(Gral::getVars(2, "observacion", ''));
	$xml_lenguaje_codigo->setOrden(Gral::getVars(2, "orden", 0));
	$xml_lenguaje_codigo->setEstado(Gral::getVars(2, "estado", 0));
	$xml_lenguaje_codigo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$xml_lenguaje_codigo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$xml_lenguaje_codigo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$xml_lenguaje_codigo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $xml_lenguaje_codigo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/xml_lenguaje_codigo/xml_lenguaje_codigo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_xml_lenguaje_codigo' width='90%'>
        
				<tr>
				  <td  id="label_xml_lenguaje_codigo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_codigo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='xml_lenguaje_codigo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='xml_lenguaje_codigo_txt_descripcion' value='<?php Gral::_echoTxt($xml_lenguaje_codigo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_xml_lenguaje_codigo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_codigo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_codigo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_codigo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_codigo_cmb_xml_lenguaje_tipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_xml_lenguaje_tipo_id' ?>" >
				  
                                        <?php Lang::_lang('XmlLenguajeTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_codigo_cmb_xml_lenguaje_tipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('xml_lenguaje_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'xml_lenguaje_codigo_cmb_xml_lenguaje_tipo_id', Gral::getCmbFiltro(XmlLenguajeTipo::getXmlLenguajeTiposCmb(), '...'), $xml_lenguaje_codigo->getXmlLenguajeTipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA_CMB_EDIT_XML_LENGUAJE_TIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="xml_lenguaje_codigo_cmb_xml_lenguaje_tipo_id" clase_id="xml_lenguaje_tipo" prefijo='xml_lenguaje_codigo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_xml_lenguaje_tipo_id" <?php echo ($xml_lenguaje_codigo->getXmlLenguajeTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="xml_lenguaje_codigo_cmb_xml_lenguaje_tipo_id" clase_id="xml_lenguaje_tipo" prefijo='xml_lenguaje_codigo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_xml_lenguaje_codigo_cmb_xml_lenguaje_tipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_xml_lenguaje_codigo_alta_xml_lenguaje_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_codigo_alta_xml_lenguaje_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_codigo_alta_xml_lenguaje_tipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_codigo_alta_xml_lenguaje_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('xml_lenguaje_tipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_codigo_cmb_xml_lenguaje_pagina_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_xml_lenguaje_pagina_id' ?>" >
				  
                                        <?php Lang::_lang('XmlLenguajePagina', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_codigo_cmb_xml_lenguaje_pagina_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('xml_lenguaje_pagina_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'xml_lenguaje_codigo_cmb_xml_lenguaje_pagina_id', Gral::getCmbFiltro(XmlLenguajePagina::getXmlLenguajePaginasCmb(), '...'), $xml_lenguaje_codigo->getXmlLenguajePaginaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA_CMB_EDIT_XML_LENGUAJE_PAGINA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="xml_lenguaje_codigo_cmb_xml_lenguaje_pagina_id" clase_id="xml_lenguaje_pagina" prefijo='xml_lenguaje_codigo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_xml_lenguaje_pagina_id" <?php echo ($xml_lenguaje_codigo->getXmlLenguajePaginaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="xml_lenguaje_codigo_cmb_xml_lenguaje_pagina_id" clase_id="xml_lenguaje_pagina" prefijo='xml_lenguaje_codigo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_xml_lenguaje_codigo_cmb_xml_lenguaje_pagina_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_xml_lenguaje_codigo_alta_xml_lenguaje_pagina_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_codigo_alta_xml_lenguaje_pagina_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_codigo_alta_xml_lenguaje_pagina_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_codigo_alta_xml_lenguaje_pagina_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('xml_lenguaje_pagina_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_codigo_cmb_xml_lenguaje_entorno_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_xml_lenguaje_entorno_id' ?>" >
				  
                                        <?php Lang::_lang('XmlLenguajeEntorno', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_codigo_cmb_xml_lenguaje_entorno_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('xml_lenguaje_entorno_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'xml_lenguaje_codigo_cmb_xml_lenguaje_entorno_id', Gral::getCmbFiltro(XmlLenguajeEntorno::getXmlLenguajeEntornosCmb(), '...'), $xml_lenguaje_codigo->getXmlLenguajeEntornoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA_CMB_EDIT_XML_LENGUAJE_ENTORNO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="xml_lenguaje_codigo_cmb_xml_lenguaje_entorno_id" clase_id="xml_lenguaje_entorno" prefijo='xml_lenguaje_codigo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_xml_lenguaje_entorno_id" <?php echo ($xml_lenguaje_codigo->getXmlLenguajeEntornoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="xml_lenguaje_codigo_cmb_xml_lenguaje_entorno_id" clase_id="xml_lenguaje_entorno" prefijo='xml_lenguaje_codigo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_xml_lenguaje_codigo_cmb_xml_lenguaje_entorno_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_xml_lenguaje_codigo_alta_xml_lenguaje_entorno_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_codigo_alta_xml_lenguaje_entorno_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_codigo_alta_xml_lenguaje_entorno_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_codigo_alta_xml_lenguaje_entorno_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('xml_lenguaje_entorno_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_codigo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_codigo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='xml_lenguaje_codigo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='xml_lenguaje_codigo_txt_codigo' value='<?php Gral::_echoTxt($xml_lenguaje_codigo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_xml_lenguaje_codigo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_codigo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_codigo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_codigo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_codigo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_codigo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='xml_lenguaje_codigo_txa_observacion' rows='10' cols='50' id='xml_lenguaje_codigo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($xml_lenguaje_codigo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_xml_lenguaje_codigo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_codigo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_codigo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_codigo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($xml_lenguaje_codigo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_xml_lenguaje_codigo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='xml_lenguaje_codigo'/>
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

