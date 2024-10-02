<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial OS_ORDEN_SERVICIO_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'os_orden_servicio_imagen';
$db_nombre_pagina = 'os_orden_servicio_imagen_alta';

$os_orden_servicio_imagen = new OsOrdenServicioImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$os_orden_servicio_imagen = new OsOrdenServicioImagen();
	if(trim($hdn_id) != '') $os_orden_servicio_imagen->setId($hdn_id, false);
	$os_orden_servicio_imagen->setDescripcion(Gral::getVars(1, "os_orden_servicio_imagen_txt_descripcion"));
	$os_orden_servicio_imagen->setOsOrdenServicioId(Gral::getVars(1, "os_orden_servicio_imagen_dbsug_os_orden_servicio_id", null));
	$os_orden_servicio_imagen->setCodigo(Gral::getVars(1, "os_orden_servicio_imagen_txt_codigo"));
	$os_orden_servicio_imagen->setArchivo(Gral::getVars(1, "os_orden_servicio_imagen__archivo"));
	$os_orden_servicio_imagen->setPeso(Gral::getVars(1, "os_orden_servicio_imagen_txt_peso"));
	$os_orden_servicio_imagen->setTipo(Gral::getVars(1, "os_orden_servicio_imagen_txt_tipo"));
	$os_orden_servicio_imagen->setAlto(Gral::getVars(1, "os_orden_servicio_imagen_txt_alto"));
	$os_orden_servicio_imagen->setAncho(Gral::getVars(1, "os_orden_servicio_imagen_txt_ancho"));
	$os_orden_servicio_imagen->setObservacion(Gral::getVars(1, "os_orden_servicio_imagen_txa_observacion"));
	$os_orden_servicio_imagen->setOrden(Gral::getVars(1, "os_orden_servicio_imagen_txt_orden", 0));
	$os_orden_servicio_imagen->setEstado(Gral::getVars(1, "os_orden_servicio_imagen_cmb_estado", 0));
	$os_orden_servicio_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_orden_servicio_imagen_txt_creado")));
	$os_orden_servicio_imagen->setCreadoPor(Gral::getVars(1, "os_orden_servicio_imagen__creado_por", 0));
	$os_orden_servicio_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_orden_servicio_imagen_txt_modificado")));
	$os_orden_servicio_imagen->setModificadoPor(Gral::getVars(1, "os_orden_servicio_imagen__modificado_por", 0));

	$os_orden_servicio_imagen_estado = new OsOrdenServicioImagen();
	if(trim($hdn_id) != ''){
		$os_orden_servicio_imagen_estado->setId($hdn_id);
		$os_orden_servicio_imagen->setEstado($os_orden_servicio_imagen_estado->getEstado());
				
	}else{
		$os_orden_servicio_imagen->setEstado(1);
				
	}
	

	$os_orden_servicio_imagen_existente = new OsOrdenServicioImagen();
	if(trim($hdn_id) != ''){
		$os_orden_servicio_imagen_existente->setId($hdn_id);
		$os_orden_servicio_imagen->setArchivo($os_orden_servicio_imagen_existente->getArchivo());
		$os_orden_servicio_imagen->setPeso($os_orden_servicio_imagen_existente->getPeso());
		$os_orden_servicio_imagen->setTipo($os_orden_servicio_imagen_existente->getTipo());
		$os_orden_servicio_imagen->setOrden($os_orden_servicio_imagen_existente->getOrden());
		$os_orden_servicio_imagen->setAlto($os_orden_servicio_imagen_existente->getAlto());
		$os_orden_servicio_imagen->setAncho($os_orden_servicio_imagen_existente->getAncho());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $os_orden_servicio_imagen->control();
			if(!$error->getExisteError()){
				$os_orden_servicio_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: os_orden_servicio_imagen_alta.php?cs=1&id='.$os_orden_servicio_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $os_orden_servicio_imagen->control();
			if(!$error->getExisteError()){
				$os_orden_servicio_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: os_orden_servicio_imagen_alta.php?cs=1');
				$os_orden_servicio_imagen = new OsOrdenServicioImagen();
			}
		break;
	}
	Gral::setSes('OsOrdenServicioImagen_ULTIMO_INSERTADO', $os_orden_servicio_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_os_orden_servicio_imagen_id = Gral::getVars(2, $prefijo.'cmb_os_orden_servicio_imagen_id', 0);
	if($cmb_os_orden_servicio_imagen_id != 0){
		$os_orden_servicio_imagen = OsOrdenServicioImagen::getOxId($cmb_os_orden_servicio_imagen_id);
	}else{
	
	$os_orden_servicio_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$os_orden_servicio_imagen->setOsOrdenServicioId(Gral::getVars(2, "os_orden_servicio_id", 'null'));
	$os_orden_servicio_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$os_orden_servicio_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$os_orden_servicio_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$os_orden_servicio_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$os_orden_servicio_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$os_orden_servicio_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	$os_orden_servicio_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$os_orden_servicio_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$os_orden_servicio_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$os_orden_servicio_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$os_orden_servicio_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$os_orden_servicio_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$os_orden_servicio_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $os_orden_servicio_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/os_orden_servicio_imagen/os_orden_servicio_imagen_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_os_orden_servicio_imagen' width='90%'>
        
				<tr>
				  <td  id="label_os_orden_servicio_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_imagen_txt_descripcion' value='<?php Gral::_echoTxt($os_orden_servicio_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_os_orden_servicio_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_imagen_dbsug_os_orden_servicio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_os_orden_servicio_id' ?>" >
				  
                                        <?php Lang::_lang('OsOrdenServicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_imagen_dbsug_os_orden_servicio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('os_orden_servicio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'os_orden_servicio_imagen_dbsug_os_orden_servicio', 'ajax/modulos/os_orden_servicio/os_orden_servicio_dbsuggest.php', false, true, '', 'Ingrese ...', $os_orden_servicio_imagen->getOsOrdenServicioId(), $os_orden_servicio_imagen->getOsOrdenServicio()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_os_orden_servicio_imagen_alta_os_orden_servicio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_imagen_alta_os_orden_servicio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_imagen_alta_os_orden_servicio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_imagen_alta_os_orden_servicio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('os_orden_servicio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_imagen_txt_codigo' value='<?php Gral::_echoTxt($os_orden_servicio_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_os_orden_servicio_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_orden_servicio_imagen_txa_observacion' rows='10' cols='50' id='os_orden_servicio_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_orden_servicio_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_orden_servicio_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($os_orden_servicio_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_os_orden_servicio_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='os_orden_servicio_imagen'/>
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

