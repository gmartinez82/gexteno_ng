<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('NOV_NOVEDAD_ARCHIVO_ALTA')){
    echo "No tiene asignada la credencial NOV_NOVEDAD_ARCHIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'nov_novedad_archivo';
$db_nombre_pagina = 'nov_novedad_archivo_alta';

$nov_novedad_archivo = new NovNovedadArchivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$nov_novedad_archivo = new NovNovedadArchivo();
	if(trim($hdn_id) != '') $nov_novedad_archivo->setId($hdn_id, false);
	$nov_novedad_archivo->setDescripcion(Gral::getVars(1, "nov_novedad_archivo_txt_descripcion"));
	$nov_novedad_archivo->setNovNovedadId(Gral::getVars(1, "nov_novedad_archivo_dbsug_nov_novedad_id", null));
	$nov_novedad_archivo->setCodigo(Gral::getVars(1, "nov_novedad_archivo_txt_codigo"));
	$nov_novedad_archivo->setObservacion(Gral::getVars(1, "nov_novedad_archivo_txa_observacion"));
	$nov_novedad_archivo->setOrden(Gral::getVars(1, "nov_novedad_archivo_txt_orden", 0));
	$nov_novedad_archivo->setEstado(Gral::getVars(1, "nov_novedad_archivo__estado", 0));
	$nov_novedad_archivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "nov_novedad_archivo_txt_creado")));
	$nov_novedad_archivo->setCreadoPor(Gral::getVars(1, "nov_novedad_archivo__creado_por", 0));
	$nov_novedad_archivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "nov_novedad_archivo_txt_modificado")));
	$nov_novedad_archivo->setModificadoPor(Gral::getVars(1, "nov_novedad_archivo__modificado_por", 0));
	$nov_novedad_archivo->setArchivo(Gral::getVars(1, "nov_novedad_archivo__archivo"));
	$nov_novedad_archivo->setPeso(Gral::getVars(1, "nov_novedad_archivo_txt_peso"));
	$nov_novedad_archivo->setTipo(Gral::getVars(1, "nov_novedad_archivo_txt_tipo"));

	$nov_novedad_archivo_estado = new NovNovedadArchivo();
	if(trim($hdn_id) != ''){
		$nov_novedad_archivo_estado->setId($hdn_id);
		$nov_novedad_archivo->setEstado($nov_novedad_archivo_estado->getEstado());
				
	}else{
		$nov_novedad_archivo->setEstado(1);
				
	}
	

	$nov_novedad_archivo_existente = new NovNovedadArchivo();
	if(trim($hdn_id) != ''){
		$nov_novedad_archivo_existente->setId($hdn_id);
		$nov_novedad_archivo->setArchivo($nov_novedad_archivo_existente->getArchivo());
		$nov_novedad_archivo->setPeso($nov_novedad_archivo_existente->getPeso());
		$nov_novedad_archivo->setTipo($nov_novedad_archivo_existente->getTipo());
		$nov_novedad_archivo->setOrden($nov_novedad_archivo_existente->getOrden());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $nov_novedad_archivo->control();
			if(!$error->getExisteError()){
				$nov_novedad_archivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: nov_novedad_archivo_alta.php?cs=1&id='.$nov_novedad_archivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $nov_novedad_archivo->control();
			if(!$error->getExisteError()){
				$nov_novedad_archivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: nov_novedad_archivo_alta.php?cs=1');
				$nov_novedad_archivo = new NovNovedadArchivo();
			}
		break;
	}
	Gral::setSes('NovNovedadArchivo_ULTIMO_INSERTADO', $nov_novedad_archivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_nov_novedad_archivo_id = Gral::getVars(2, $prefijo.'cmb_nov_novedad_archivo_id', 0);
	if($cmb_nov_novedad_archivo_id != 0){
		$nov_novedad_archivo = NovNovedadArchivo::getOxId($cmb_nov_novedad_archivo_id);
	}else{
	
	$nov_novedad_archivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$nov_novedad_archivo->setNovNovedadId(Gral::getVars(2, "nov_novedad_id", 'null'));
	$nov_novedad_archivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$nov_novedad_archivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$nov_novedad_archivo->setOrden(Gral::getVars(2, "orden", 0));
	$nov_novedad_archivo->setEstado(Gral::getVars(2, "estado", 0));
	$nov_novedad_archivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$nov_novedad_archivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$nov_novedad_archivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$nov_novedad_archivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	$nov_novedad_archivo->setArchivo(Gral::getVars(2, "archivo", ''));
	$nov_novedad_archivo->setPeso(Gral::getVars(2, "peso", ''));
	$nov_novedad_archivo->setTipo(Gral::getVars(2, "tipo", ''));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $nov_novedad_archivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/nov_novedad_archivo/nov_novedad_archivo_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_nov_novedad_archivo' width='90%'>
        
				<tr>
				  <td  id="label_nov_novedad_archivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_archivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='nov_novedad_archivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='nov_novedad_archivo_txt_descripcion' value='<?php Gral::_echoTxt($nov_novedad_archivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_nov_novedad_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_nov_novedad_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_nov_novedad_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_nov_novedad_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_nov_novedad_archivo_dbsug_nov_novedad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nov_novedad_id' ?>" >
				  
                                        <?php Lang::_lang('NovNovedad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_archivo_dbsug_nov_novedad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nov_novedad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'nov_novedad_archivo_dbsug_nov_novedad', 'ajax/modulos/nov_novedad/nov_novedad_dbsuggest.php', false, true, '', 'Ingrese ...', $nov_novedad_archivo->getNovNovedadId(), $nov_novedad_archivo->getNovNovedad()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_nov_novedad_archivo_alta_nov_novedad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_nov_novedad_archivo_alta_nov_novedad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_nov_novedad_archivo_alta_nov_novedad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_nov_novedad_archivo_alta_nov_novedad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nov_novedad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_nov_novedad_archivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_archivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='nov_novedad_archivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='nov_novedad_archivo_txt_codigo' value='<?php Gral::_echoTxt($nov_novedad_archivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_nov_novedad_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_nov_novedad_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_nov_novedad_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_nov_novedad_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_nov_novedad_archivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_archivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='nov_novedad_archivo_txa_observacion' rows='10' cols='50' id='nov_novedad_archivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($nov_novedad_archivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_nov_novedad_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_nov_novedad_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_nov_novedad_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_nov_novedad_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($nov_novedad_archivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_nov_novedad_archivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='nov_novedad_archivo'/>
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

