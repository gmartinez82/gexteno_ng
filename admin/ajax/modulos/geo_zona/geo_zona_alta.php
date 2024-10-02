<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEO_ZONA_ALTA')){
    echo "No tiene asignada la credencial GEO_ZONA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'geo_zona';
$db_nombre_pagina = 'geo_zona_alta';

$geo_zona = new GeoZona();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$geo_zona = new GeoZona();
	if(trim($hdn_id) != '') $geo_zona->setId($hdn_id, false);
	$geo_zona->setDescripcion(Gral::getVars(1, "geo_zona_txt_descripcion"));
	$geo_zona->setCodigo(Gral::getVars(1, "geo_zona_txt_codigo"));
	$geo_zona->setObservacion(Gral::getVars(1, "geo_zona_txa_observacion"));
	$geo_zona->setOrden(Gral::getVars(1, "geo_zona_txt_orden", 0));
	$geo_zona->setEstado(Gral::getVars(1, "geo_zona_cmb_estado", 0));
	$geo_zona->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "geo_zona_txt_creado")));
	$geo_zona->setCreadoPor(Gral::getVars(1, "geo_zona__creado_por", 0));
	$geo_zona->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "geo_zona_txt_modificado")));
	$geo_zona->setModificadoPor(Gral::getVars(1, "geo_zona__modificado_por", 0));

	$geo_zona_estado = new GeoZona();
	if(trim($hdn_id) != ''){
		$geo_zona_estado->setId($hdn_id);
		$geo_zona->setEstado($geo_zona_estado->getEstado());
				
	}else{
		$geo_zona->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $geo_zona->control();
			if(!$error->getExisteError()){
				$geo_zona->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: geo_zona_alta.php?cs=1&id='.$geo_zona->getId());
			}
		break;
		case 'guardarnvo':
			$error = $geo_zona->control();
			if(!$error->getExisteError()){
				$geo_zona->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: geo_zona_alta.php?cs=1');
				$geo_zona = new GeoZona();
			}
		break;
	}
	Gral::setSes('GeoZona_ULTIMO_INSERTADO', $geo_zona->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_geo_zona_id = Gral::getVars(2, $prefijo.'cmb_geo_zona_id', 0);
	if($cmb_geo_zona_id != 0){
		$geo_zona = GeoZona::getOxId($cmb_geo_zona_id);
	}else{
	
	$geo_zona->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$geo_zona->setCodigo(Gral::getVars(2, "codigo", ''));
	$geo_zona->setObservacion(Gral::getVars(2, "observacion", ''));
	$geo_zona->setOrden(Gral::getVars(2, "orden", 0));
	$geo_zona->setEstado(Gral::getVars(2, "estado", 0));
	$geo_zona->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$geo_zona->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$geo_zona->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$geo_zona->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $geo_zona->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/geo_zona/geo_zona_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_geo_zona' width='90%'>
        
				<tr>
				  <td  id="label_geo_zona_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_zona_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_zona_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_zona_txt_descripcion' value='<?php Gral::_echoTxt($geo_zona->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_geo_zona_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_zona_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_zona_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_zona_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_zona_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_zona_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_zona_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_zona_txt_codigo' value='<?php Gral::_echoTxt($geo_zona->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_zona_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_zona_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_zona_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_zona_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_zona_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_zona_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='geo_zona_txa_observacion' rows='10' cols='50' id='geo_zona_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($geo_zona->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_geo_zona_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_zona_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_zona_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_zona_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($geo_zona->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_geo_zona_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='geo_zona'/>
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

