<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PER_PERSONA_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial PER_PERSONA_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'per_persona_imagen';
$db_nombre_pagina = 'per_persona_imagen_alta';

$per_persona_imagen = new PerPersonaImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$per_persona_imagen = new PerPersonaImagen();
	if(trim($hdn_id) != '') $per_persona_imagen->setId($hdn_id, false);
	$per_persona_imagen->setDescripcion(Gral::getVars(1, "per_persona_imagen_txt_descripcion"));
	$per_persona_imagen->setPerPersonaId(Gral::getVars(1, "per_persona_imagen_dbsug_per_persona_id", null));
	$per_persona_imagen->setCodigo(Gral::getVars(1, "per_persona_imagen_txt_codigo"));
	$per_persona_imagen->setArchivo(Gral::getVars(1, "per_persona_imagen__archivo"));
	$per_persona_imagen->setPeso(Gral::getVars(1, "per_persona_imagen_txt_peso"));
	$per_persona_imagen->setTipo(Gral::getVars(1, "per_persona_imagen_txt_tipo"));
	$per_persona_imagen->setAlto(Gral::getVars(1, "per_persona_imagen_txt_alto"));
	$per_persona_imagen->setAncho(Gral::getVars(1, "per_persona_imagen_txt_ancho"));
	$per_persona_imagen->setObservacion(Gral::getVars(1, "per_persona_imagen_txa_observacion"));
	$per_persona_imagen->setOrden(Gral::getVars(1, "per_persona_imagen_txt_orden", 0));
	$per_persona_imagen->setEstado(Gral::getVars(1, "per_persona_imagen_cmb_estado", 0));
	$per_persona_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_persona_imagen_txt_creado")));
	$per_persona_imagen->setCreadoPor(Gral::getVars(1, "per_persona_imagen__creado_por", 0));
	$per_persona_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_persona_imagen_txt_modificado")));
	$per_persona_imagen->setModificadoPor(Gral::getVars(1, "per_persona_imagen__modificado_por", 0));

	$per_persona_imagen_estado = new PerPersonaImagen();
	if(trim($hdn_id) != ''){
		$per_persona_imagen_estado->setId($hdn_id);
		$per_persona_imagen->setEstado($per_persona_imagen_estado->getEstado());
				
	}else{
		$per_persona_imagen->setEstado(1);
				
	}
	

	$per_persona_imagen_existente = new PerPersonaImagen();
	if(trim($hdn_id) != ''){
		$per_persona_imagen_existente->setId($hdn_id);
		$per_persona_imagen->setArchivo($per_persona_imagen_existente->getArchivo());
		$per_persona_imagen->setPeso($per_persona_imagen_existente->getPeso());
		$per_persona_imagen->setTipo($per_persona_imagen_existente->getTipo());
		$per_persona_imagen->setOrden($per_persona_imagen_existente->getOrden());
		$per_persona_imagen->setAlto($per_persona_imagen_existente->getAlto());
		$per_persona_imagen->setAncho($per_persona_imagen_existente->getAncho());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $per_persona_imagen->control();
			if(!$error->getExisteError()){
				$per_persona_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: per_persona_imagen_alta.php?cs=1&id='.$per_persona_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $per_persona_imagen->control();
			if(!$error->getExisteError()){
				$per_persona_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: per_persona_imagen_alta.php?cs=1');
				$per_persona_imagen = new PerPersonaImagen();
			}
		break;
	}
	Gral::setSes('PerPersonaImagen_ULTIMO_INSERTADO', $per_persona_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_per_persona_imagen_id = Gral::getVars(2, $prefijo.'cmb_per_persona_imagen_id', 0);
	if($cmb_per_persona_imagen_id != 0){
		$per_persona_imagen = PerPersonaImagen::getOxId($cmb_per_persona_imagen_id);
	}else{
	
	$per_persona_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$per_persona_imagen->setPerPersonaId(Gral::getVars(2, "per_persona_id", 'null'));
	$per_persona_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$per_persona_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$per_persona_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$per_persona_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$per_persona_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$per_persona_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	$per_persona_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$per_persona_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$per_persona_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$per_persona_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$per_persona_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$per_persona_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$per_persona_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $per_persona_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/per_persona_imagen/per_persona_imagen_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_per_persona_imagen' width='90%'>
        
				<tr>
				  <td  id="label_per_persona_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_persona_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_persona_imagen_txt_descripcion' value='<?php Gral::_echoTxt($per_persona_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_per_persona_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_persona_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_persona_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_persona_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_persona_imagen_dbsug_per_persona_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_per_persona_id' ?>" >
				  
                                        <?php Lang::_lang('PerPersona', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_persona_imagen_dbsug_per_persona_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('per_persona_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'per_persona_imagen_dbsug_per_persona', 'ajax/modulos/per_persona/per_persona_dbsuggest.php', false, true, '', 'Ingrese ...', $per_persona_imagen->getPerPersonaId(), $per_persona_imagen->getPerPersona()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_per_persona_imagen_alta_per_persona_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_persona_imagen_alta_per_persona_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_persona_imagen_alta_per_persona_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_persona_imagen_alta_per_persona_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_persona_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_persona_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_persona_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_persona_imagen_txt_codigo' value='<?php Gral::_echoTxt($per_persona_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_per_persona_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_persona_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_persona_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_persona_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_persona_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_persona_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='per_persona_imagen_txa_observacion' rows='10' cols='50' id='per_persona_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($per_persona_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_per_persona_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_persona_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_persona_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_persona_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_persona_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_per_persona_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='per_persona_imagen'/>
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

