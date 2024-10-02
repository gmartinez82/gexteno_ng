<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ARCHIVO_ALTA')){
    echo "No tiene asignada la credencial OS_ORDEN_SERVICIO_ARCHIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'os_orden_servicio_archivo';
$db_nombre_pagina = 'os_orden_servicio_archivo_alta';

$os_orden_servicio_archivo = new OsOrdenServicioArchivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$os_orden_servicio_archivo = new OsOrdenServicioArchivo();
	if(trim($hdn_id) != '') $os_orden_servicio_archivo->setId($hdn_id, false);
	$os_orden_servicio_archivo->setDescripcion(Gral::getVars(1, "os_orden_servicio_archivo_txt_descripcion"));
	$os_orden_servicio_archivo->setOsOrdenServicioId(Gral::getVars(1, "os_orden_servicio_archivo_cmb_os_orden_servicio_id", null));
	$os_orden_servicio_archivo->setCodigo(Gral::getVars(1, "os_orden_servicio_archivo_txt_codigo"));
	$os_orden_servicio_archivo->setObservacion(Gral::getVars(1, "os_orden_servicio_archivo_txa_observacion"));
	$os_orden_servicio_archivo->setOrden(Gral::getVars(1, "os_orden_servicio_archivo_txt_orden", 0));
	$os_orden_servicio_archivo->setEstado(Gral::getVars(1, "os_orden_servicio_archivo__estado", 0));
	$os_orden_servicio_archivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_orden_servicio_archivo_txt_creado")));
	$os_orden_servicio_archivo->setCreadoPor(Gral::getVars(1, "os_orden_servicio_archivo__creado_por", 0));
	$os_orden_servicio_archivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_orden_servicio_archivo_txt_modificado")));
	$os_orden_servicio_archivo->setModificadoPor(Gral::getVars(1, "os_orden_servicio_archivo__modificado_por", 0));
	$os_orden_servicio_archivo->setArchivo(Gral::getVars(1, "os_orden_servicio_archivo__archivo"));
	$os_orden_servicio_archivo->setPeso(Gral::getVars(1, "os_orden_servicio_archivo_txt_peso"));
	$os_orden_servicio_archivo->setTipo(Gral::getVars(1, "os_orden_servicio_archivo_txt_tipo"));

	$os_orden_servicio_archivo_estado = new OsOrdenServicioArchivo();
	if(trim($hdn_id) != ''){
		$os_orden_servicio_archivo_estado->setId($hdn_id);
		$os_orden_servicio_archivo->setEstado($os_orden_servicio_archivo_estado->getEstado());
				
	}else{
		$os_orden_servicio_archivo->setEstado(1);
				
	}
	

	$os_orden_servicio_archivo_existente = new OsOrdenServicioArchivo();
	if(trim($hdn_id) != ''){
		$os_orden_servicio_archivo_existente->setId($hdn_id);
		$os_orden_servicio_archivo->setArchivo($os_orden_servicio_archivo_existente->getArchivo());
		$os_orden_servicio_archivo->setPeso($os_orden_servicio_archivo_existente->getPeso());
		$os_orden_servicio_archivo->setTipo($os_orden_servicio_archivo_existente->getTipo());
		$os_orden_servicio_archivo->setOrden($os_orden_servicio_archivo_existente->getOrden());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $os_orden_servicio_archivo->control();
			if(!$error->getExisteError()){
				$os_orden_servicio_archivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: os_orden_servicio_archivo_alta.php?cs=1&id='.$os_orden_servicio_archivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $os_orden_servicio_archivo->control();
			if(!$error->getExisteError()){
				$os_orden_servicio_archivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: os_orden_servicio_archivo_alta.php?cs=1');
				$os_orden_servicio_archivo = new OsOrdenServicioArchivo();
			}
		break;
	}
	Gral::setSes('OsOrdenServicioArchivo_ULTIMO_INSERTADO', $os_orden_servicio_archivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_os_orden_servicio_archivo_id = Gral::getVars(2, $prefijo.'cmb_os_orden_servicio_archivo_id', 0);
	if($cmb_os_orden_servicio_archivo_id != 0){
		$os_orden_servicio_archivo = OsOrdenServicioArchivo::getOxId($cmb_os_orden_servicio_archivo_id);
	}else{
	
	$os_orden_servicio_archivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$os_orden_servicio_archivo->setOsOrdenServicioId(Gral::getVars(2, "os_orden_servicio_id", 'null'));
	$os_orden_servicio_archivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$os_orden_servicio_archivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$os_orden_servicio_archivo->setOrden(Gral::getVars(2, "orden", 0));
	$os_orden_servicio_archivo->setEstado(Gral::getVars(2, "estado", 0));
	$os_orden_servicio_archivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$os_orden_servicio_archivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$os_orden_servicio_archivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$os_orden_servicio_archivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	$os_orden_servicio_archivo->setArchivo(Gral::getVars(2, "archivo", ''));
	$os_orden_servicio_archivo->setPeso(Gral::getVars(2, "peso", ''));
	$os_orden_servicio_archivo->setTipo(Gral::getVars(2, "tipo", ''));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $os_orden_servicio_archivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/os_orden_servicio_archivo/os_orden_servicio_archivo_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_os_orden_servicio_archivo' width='90%'>
        
				<tr>
				  <td  id="label_os_orden_servicio_archivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_archivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_archivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_archivo_txt_descripcion' value='<?php Gral::_echoTxt($os_orden_servicio_archivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_os_orden_servicio_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_archivo_cmb_os_orden_servicio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_os_orden_servicio_id' ?>" >
				  
                                        <?php Lang::_lang('OsOrdenServicio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_archivo_cmb_os_orden_servicio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('os_orden_servicio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'os_orden_servicio_archivo_cmb_os_orden_servicio_id', Gral::getCmbFiltro(OsOrdenServicio::getOsOrdenServiciosCmb(), '...'), $os_orden_servicio_archivo->getOsOrdenServicioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ARCHIVO_ALTA_CMB_EDIT_OS_ORDEN_SERVICIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="os_orden_servicio_archivo_cmb_os_orden_servicio_id" clase_id="os_orden_servicio" prefijo='os_orden_servicio_archivo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_os_orden_servicio_id" <?php echo ($os_orden_servicio_archivo->getOsOrdenServicioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="os_orden_servicio_archivo_cmb_os_orden_servicio_id" clase_id="os_orden_servicio" prefijo='os_orden_servicio_archivo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_os_orden_servicio_archivo_cmb_os_orden_servicio_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_archivo_alta_os_orden_servicio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_archivo_alta_os_orden_servicio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_archivo_alta_os_orden_servicio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_archivo_alta_os_orden_servicio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('os_orden_servicio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_archivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_archivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_archivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_archivo_txt_codigo' value='<?php Gral::_echoTxt($os_orden_servicio_archivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_os_orden_servicio_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_archivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_archivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_orden_servicio_archivo_txa_observacion' rows='10' cols='50' id='os_orden_servicio_archivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_orden_servicio_archivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_orden_servicio_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($os_orden_servicio_archivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_os_orden_servicio_archivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='os_orden_servicio_archivo'/>
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

