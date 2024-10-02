<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VEH_MARCA_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial VEH_MARCA_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'veh_marca_imagen';
$db_nombre_pagina = 'veh_marca_imagen_alta';

$veh_marca_imagen = new VehMarcaImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$veh_marca_imagen = new VehMarcaImagen();
	if(trim($hdn_id) != '') $veh_marca_imagen->setId($hdn_id, false);
	$veh_marca_imagen->setVehMarcaId(Gral::getVars(1, "veh_marca_imagen_dbsug_veh_marca_id", null));
	$veh_marca_imagen->setDescripcion(Gral::getVars(1, "veh_marca_imagen_txt_descripcion"));
	$veh_marca_imagen->setCodigo(Gral::getVars(1, "veh_marca_imagen_txt_codigo"));
	$veh_marca_imagen->setObservacion(Gral::getVars(1, "veh_marca_imagen_txa_observacion"));
	$veh_marca_imagen->setArchivo(Gral::getVars(1, "veh_marca_imagen_file_archivo"));
	$veh_marca_imagen->setPeso(Gral::getVars(1, "veh_marca_imagen_txt_peso"));
	$veh_marca_imagen->setTipo(Gral::getVars(1, "veh_marca_imagen_txt_tipo"));
	$veh_marca_imagen->setAlto(Gral::getVars(1, "veh_marca_imagen_txt_alto"));
	$veh_marca_imagen->setAncho(Gral::getVars(1, "veh_marca_imagen_txt_ancho"));
	$veh_marca_imagen->setOrden(Gral::getVars(1, "veh_marca_imagen_txt_orden", 0));
	$veh_marca_imagen->setEstado(Gral::getVars(1, "veh_marca_imagen__estado", 0));
	$veh_marca_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "veh_marca_imagen_txt_creado")));
	$veh_marca_imagen->setCreadoPor(Gral::getVars(1, "veh_marca_imagen__creado_por", null));
	$veh_marca_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "veh_marca_imagen_txt_modificado")));
	$veh_marca_imagen->setModificadoPor(Gral::getVars(1, "veh_marca_imagen__modificado_por", null));

	$veh_marca_imagen_estado = new VehMarcaImagen();
	if(trim($hdn_id) != ''){
		$veh_marca_imagen_estado->setId($hdn_id);
		$veh_marca_imagen->setEstado($veh_marca_imagen_estado->getEstado());
				
	}else{
		$veh_marca_imagen->setEstado(1);
				
	}
	

	$veh_marca_imagen_existente = new VehMarcaImagen();
	if(trim($hdn_id) != ''){
		$veh_marca_imagen_existente->setId($hdn_id);
		$veh_marca_imagen->setArchivo($veh_marca_imagen_existente->getArchivo());
		$veh_marca_imagen->setPeso($veh_marca_imagen_existente->getPeso());
		$veh_marca_imagen->setTipo($veh_marca_imagen_existente->getTipo());
		$veh_marca_imagen->setOrden($veh_marca_imagen_existente->getOrden());
		$veh_marca_imagen->setAlto($veh_marca_imagen_existente->getAlto());
		$veh_marca_imagen->setAncho($veh_marca_imagen_existente->getAncho());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $veh_marca_imagen->control();
			if(!$error->getExisteError()){
				$veh_marca_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: veh_marca_imagen_alta.php?cs=1&id='.$veh_marca_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $veh_marca_imagen->control();
			if(!$error->getExisteError()){
				$veh_marca_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: veh_marca_imagen_alta.php?cs=1');
				$veh_marca_imagen = new VehMarcaImagen();
			}
		break;
	}
	Gral::setSes('VehMarcaImagen_ULTIMO_INSERTADO', $veh_marca_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_veh_marca_imagen_id = Gral::getVars(2, $prefijo.'cmb_veh_marca_imagen_id', 0);
	if($cmb_veh_marca_imagen_id != 0){
		$veh_marca_imagen = VehMarcaImagen::getOxId($cmb_veh_marca_imagen_id);
	}else{
	
	$veh_marca_imagen->setVehMarcaId(Gral::getVars(2, "veh_marca_id", 'null'));
	$veh_marca_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$veh_marca_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$veh_marca_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$veh_marca_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$veh_marca_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$veh_marca_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$veh_marca_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$veh_marca_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	$veh_marca_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$veh_marca_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$veh_marca_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$veh_marca_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$veh_marca_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$veh_marca_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $veh_marca_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/veh_marca_imagen/veh_marca_imagen_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_veh_marca_imagen' width='90%'>
        
				<tr>
				  <td  id="label_veh_marca_imagen_dbsug_veh_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_veh_marca_id' ?>" >
				  
                                        <?php Lang::_lang('VehMarca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_marca_imagen_dbsug_veh_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('veh_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'veh_marca_imagen_dbsug_veh_marca', 'ajax/modulos/veh_marca/veh_marca_dbsuggest.php', false, true, '', 'Ingrese ...', $veh_marca_imagen->getVehMarcaId(), $veh_marca_imagen->getVehMarca()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_veh_marca_imagen_alta_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_marca_imagen_alta_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_marca_imagen_alta_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_marca_imagen_alta_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('veh_marca_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_marca_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_marca_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='veh_marca_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='veh_marca_imagen_txt_descripcion' value='<?php Gral::_echoTxt($veh_marca_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_veh_marca_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_marca_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_marca_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_marca_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_marca_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_marca_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='veh_marca_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='veh_marca_imagen_txt_codigo' value='<?php Gral::_echoTxt($veh_marca_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_veh_marca_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_marca_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_marca_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_marca_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_marca_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_marca_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='veh_marca_imagen_txa_observacion' rows='10' cols='50' id='veh_marca_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($veh_marca_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_veh_marca_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_marca_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_marca_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_marca_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($veh_marca_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_veh_marca_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='veh_marca_imagen'/>
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

