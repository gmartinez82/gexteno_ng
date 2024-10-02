<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('NOT_TIPO_ARCHIVO_ALTA')){
    echo "No tiene asignada la credencial NOT_TIPO_ARCHIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'not_tipo_archivo';
$db_nombre_pagina = 'not_tipo_archivo_alta';

$not_tipo_archivo = new NotTipoArchivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$not_tipo_archivo = new NotTipoArchivo();
	if(trim($hdn_id) != '') $not_tipo_archivo->setId($hdn_id, false);
	$not_tipo_archivo->setDescripcion(Gral::getVars(1, "not_tipo_archivo_txt_descripcion"));
	$not_tipo_archivo->setCodigo(Gral::getVars(1, "not_tipo_archivo_txt_codigo"));
	$not_tipo_archivo->setObservacion(Gral::getVars(1, "not_tipo_archivo_txa_observacion"));
	$not_tipo_archivo->setOrden(Gral::getVars(1, "not_tipo_archivo_txt_orden", 0));
	$not_tipo_archivo->setEstado(Gral::getVars(1, "not_tipo_archivo__estado", 0));
	$not_tipo_archivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_tipo_archivo_txt_creado")));
	$not_tipo_archivo->setCreadoPor(Gral::getVars(1, "not_tipo_archivo__creado_por", 0));
	$not_tipo_archivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_tipo_archivo_txt_modificado")));
	$not_tipo_archivo->setModificadoPor(Gral::getVars(1, "not_tipo_archivo__modificado_por", 0));

	$not_tipo_archivo_estado = new NotTipoArchivo();
	if(trim($hdn_id) != ''){
		$not_tipo_archivo_estado->setId($hdn_id);
		$not_tipo_archivo->setEstado($not_tipo_archivo_estado->getEstado());
				
	}else{
		$not_tipo_archivo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $not_tipo_archivo->control();
			if(!$error->getExisteError()){
				$not_tipo_archivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: not_tipo_archivo_alta.php?cs=1&id='.$not_tipo_archivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $not_tipo_archivo->control();
			if(!$error->getExisteError()){
				$not_tipo_archivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: not_tipo_archivo_alta.php?cs=1');
				$not_tipo_archivo = new NotTipoArchivo();
			}
		break;
	}
	Gral::setSes('NotTipoArchivo_ULTIMO_INSERTADO', $not_tipo_archivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_not_tipo_archivo_id = Gral::getVars(2, $prefijo.'cmb_not_tipo_archivo_id', 0);
	if($cmb_not_tipo_archivo_id != 0){
		$not_tipo_archivo = NotTipoArchivo::getOxId($cmb_not_tipo_archivo_id);
	}else{
	
	$not_tipo_archivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$not_tipo_archivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$not_tipo_archivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$not_tipo_archivo->setOrden(Gral::getVars(2, "orden", 0));
	$not_tipo_archivo->setEstado(Gral::getVars(2, "estado", 0));
	$not_tipo_archivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$not_tipo_archivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$not_tipo_archivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$not_tipo_archivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $not_tipo_archivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/not_tipo_archivo/not_tipo_archivo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_not_tipo_archivo' width='90%'>
        
				<tr>
				  <td  id="label_not_tipo_archivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_tipo_archivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_tipo_archivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_tipo_archivo_txt_descripcion' value='<?php Gral::_echoTxt($not_tipo_archivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_not_tipo_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_tipo_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_tipo_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_tipo_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_tipo_archivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_tipo_archivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_tipo_archivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_tipo_archivo_txt_codigo' value='<?php Gral::_echoTxt($not_tipo_archivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_not_tipo_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_tipo_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_tipo_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_tipo_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_tipo_archivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_tipo_archivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='not_tipo_archivo_txa_observacion' rows='10' cols='50' id='not_tipo_archivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($not_tipo_archivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_not_tipo_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_tipo_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_tipo_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_tipo_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($not_tipo_archivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_not_tipo_archivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='not_tipo_archivo'/>
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

