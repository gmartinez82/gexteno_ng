<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_ACTIVIDAD_ALTA')){
    echo "No tiene asignada la credencial GRAL_ACTIVIDAD_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_actividad';
$db_nombre_pagina = 'gral_actividad_alta';

$gral_actividad = new GralActividad();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_actividad = new GralActividad();
	if(trim($hdn_id) != '') $gral_actividad->setId($hdn_id, false);
	$gral_actividad->setDescripcion(Gral::getVars(1, "gral_actividad_txt_descripcion"));
	$gral_actividad->setCodigo(Gral::getVars(1, "gral_actividad_txt_codigo"));
	$gral_actividad->setObservacion(Gral::getVars(1, "gral_actividad_txa_observacion"));
	$gral_actividad->setOrden(Gral::getVars(1, "gral_actividad_txt_orden", 0));
	$gral_actividad->setEstado(Gral::getVars(1, "gral_actividad__estado", 0));
	$gral_actividad->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_actividad_txt_creado")));
	$gral_actividad->setCreadoPor(Gral::getVars(1, "gral_actividad__creado_por", 0));
	$gral_actividad->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_actividad_txt_modificado")));
	$gral_actividad->setModificadoPor(Gral::getVars(1, "gral_actividad__modificado_por", 0));

	$gral_actividad_estado = new GralActividad();
	if(trim($hdn_id) != ''){
		$gral_actividad_estado->setId($hdn_id);
		$gral_actividad->setEstado($gral_actividad_estado->getEstado());
				
	}else{
		$gral_actividad->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_actividad->control();
			if(!$error->getExisteError()){
				$gral_actividad->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_actividad_alta.php?cs=1&id='.$gral_actividad->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_actividad->control();
			if(!$error->getExisteError()){
				$gral_actividad->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_actividad_alta.php?cs=1');
				$gral_actividad = new GralActividad();
			}
		break;
	}
	Gral::setSes('GralActividad_ULTIMO_INSERTADO', $gral_actividad->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_actividad_id = Gral::getVars(2, $prefijo.'cmb_gral_actividad_id', 0);
	if($cmb_gral_actividad_id != 0){
		$gral_actividad = GralActividad::getOxId($cmb_gral_actividad_id);
	}else{
	
	$gral_actividad->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_actividad->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_actividad->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_actividad->setOrden(Gral::getVars(2, "orden", 0));
	$gral_actividad->setEstado(Gral::getVars(2, "estado", 0));
	$gral_actividad->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_actividad->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_actividad->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_actividad->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_actividad->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_actividad/gral_actividad_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_actividad' width='90%'>
        
				<tr>
				  <td  id="label_gral_actividad_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_actividad_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_actividad_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_actividad_txt_descripcion' value='<?php Gral::_echoTxt($gral_actividad->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_actividad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_actividad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_actividad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_actividad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_actividad_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_actividad_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_actividad_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_actividad_txt_codigo' value='<?php Gral::_echoTxt($gral_actividad->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_actividad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_actividad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_actividad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_actividad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_actividad_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_actividad_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_actividad_txa_observacion' rows='10' cols='50' id='gral_actividad_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_actividad->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_actividad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_actividad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_actividad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_actividad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_actividad->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_actividad_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_actividad'/>
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

