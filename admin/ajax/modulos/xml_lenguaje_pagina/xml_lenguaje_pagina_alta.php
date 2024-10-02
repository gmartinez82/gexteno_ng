<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('XML_LENGUAJE_PAGINA_ALTA')){
    echo "No tiene asignada la credencial XML_LENGUAJE_PAGINA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'xml_lenguaje_pagina';
$db_nombre_pagina = 'xml_lenguaje_pagina_alta';

$xml_lenguaje_pagina = new XmlLenguajePagina();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$xml_lenguaje_pagina = new XmlLenguajePagina();
	if(trim($hdn_id) != '') $xml_lenguaje_pagina->setId($hdn_id, false);
	$xml_lenguaje_pagina->setDescripcion(Gral::getVars(1, "xml_lenguaje_pagina_txt_descripcion"));
	$xml_lenguaje_pagina->setCodigo(Gral::getVars(1, "xml_lenguaje_pagina_txt_codigo"));
	$xml_lenguaje_pagina->setObservacion(Gral::getVars(1, "xml_lenguaje_pagina_txa_observacion"));
	$xml_lenguaje_pagina->setOrden(Gral::getVars(1, "xml_lenguaje_pagina_txt_orden", 0));
	$xml_lenguaje_pagina->setEstado(Gral::getVars(1, "xml_lenguaje_pagina__estado", 0));
	$xml_lenguaje_pagina->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "xml_lenguaje_pagina_txt_creado")));
	$xml_lenguaje_pagina->setCreadoPor(Gral::getVars(1, "xml_lenguaje_pagina__creado_por", null));
	$xml_lenguaje_pagina->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "xml_lenguaje_pagina_txt_modificado")));
	$xml_lenguaje_pagina->setModificadoPor(Gral::getVars(1, "xml_lenguaje_pagina__modificado_por", null));

	$xml_lenguaje_pagina_estado = new XmlLenguajePagina();
	if(trim($hdn_id) != ''){
		$xml_lenguaje_pagina_estado->setId($hdn_id);
		$xml_lenguaje_pagina->setEstado($xml_lenguaje_pagina_estado->getEstado());
				
	}else{
		$xml_lenguaje_pagina->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $xml_lenguaje_pagina->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_pagina->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: xml_lenguaje_pagina_alta.php?cs=1&id='.$xml_lenguaje_pagina->getId());
			}
		break;
		case 'guardarnvo':
			$error = $xml_lenguaje_pagina->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_pagina->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: xml_lenguaje_pagina_alta.php?cs=1');
				$xml_lenguaje_pagina = new XmlLenguajePagina();
			}
		break;
	}
	Gral::setSes('XmlLenguajePagina_ULTIMO_INSERTADO', $xml_lenguaje_pagina->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_xml_lenguaje_pagina_id = Gral::getVars(2, $prefijo.'cmb_xml_lenguaje_pagina_id', 0);
	if($cmb_xml_lenguaje_pagina_id != 0){
		$xml_lenguaje_pagina = XmlLenguajePagina::getOxId($cmb_xml_lenguaje_pagina_id);
	}else{
	
	$xml_lenguaje_pagina->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$xml_lenguaje_pagina->setCodigo(Gral::getVars(2, "codigo", ''));
	$xml_lenguaje_pagina->setObservacion(Gral::getVars(2, "observacion", ''));
	$xml_lenguaje_pagina->setOrden(Gral::getVars(2, "orden", 0));
	$xml_lenguaje_pagina->setEstado(Gral::getVars(2, "estado", 0));
	$xml_lenguaje_pagina->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$xml_lenguaje_pagina->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$xml_lenguaje_pagina->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$xml_lenguaje_pagina->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $xml_lenguaje_pagina->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/xml_lenguaje_pagina/xml_lenguaje_pagina_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_xml_lenguaje_pagina' width='90%'>
        
				<tr>
				  <td  id="label_xml_lenguaje_pagina_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_pagina_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='xml_lenguaje_pagina_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='xml_lenguaje_pagina_txt_descripcion' value='<?php Gral::_echoTxt($xml_lenguaje_pagina->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_xml_lenguaje_pagina_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_pagina_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_pagina_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_pagina_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_pagina_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_pagina_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='xml_lenguaje_pagina_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='xml_lenguaje_pagina_txt_codigo' value='<?php Gral::_echoTxt($xml_lenguaje_pagina->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_xml_lenguaje_pagina_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_pagina_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_pagina_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_pagina_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_xml_lenguaje_pagina_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_xml_lenguaje_pagina_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='xml_lenguaje_pagina_txa_observacion' rows='10' cols='50' id='xml_lenguaje_pagina_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($xml_lenguaje_pagina->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_xml_lenguaje_pagina_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_xml_lenguaje_pagina_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_xml_lenguaje_pagina_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_xml_lenguaje_pagina_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($xml_lenguaje_pagina->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_xml_lenguaje_pagina_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='xml_lenguaje_pagina'/>
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

