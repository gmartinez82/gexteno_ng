<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('ALT_CONTROL_ALTA')){
    echo "No tiene asignada la credencial ALT_CONTROL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'alt_control';
$db_nombre_pagina = 'alt_control_alta';

$alt_control = new AltControl();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$alt_control = new AltControl();
	if(trim($hdn_id) != '') $alt_control->setId($hdn_id, false);
	$alt_control->setDescripcion(Gral::getVars(1, "alt_control_txt_descripcion"));
	$alt_control->setCodigo(Gral::getVars(1, "alt_control_txt_codigo"));
	$alt_control->setObservacion(Gral::getVars(1, "alt_control_txa_observacion"));
	$alt_control->setOrden(Gral::getVars(1, "alt_control_txt_orden", 0));
	$alt_control->setEstado(Gral::getVars(1, "alt_control__estado", 0));
	$alt_control->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_control_txt_creado")));
	$alt_control->setCreadoPor(Gral::getVars(1, "alt_control__creado_por", 0));
	$alt_control->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "alt_control_txt_modificado")));
	$alt_control->setModificadoPor(Gral::getVars(1, "alt_control__modificado_por", 0));
	$alt_control->setControl(Gral::getVars(1, "alt_control_txa_control"));

	$alt_control_estado = new AltControl();
	if(trim($hdn_id) != ''){
		$alt_control_estado->setId($hdn_id);
		$alt_control->setEstado($alt_control_estado->getEstado());
				
	}else{
		$alt_control->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $alt_control->control();
			if(!$error->getExisteError()){
				$alt_control->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: alt_control_alta.php?cs=1&id='.$alt_control->getId());
			}
		break;
		case 'guardarnvo':
			$error = $alt_control->control();
			if(!$error->getExisteError()){
				$alt_control->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: alt_control_alta.php?cs=1');
				$alt_control = new AltControl();
			}
		break;
	}
	Gral::setSes('AltControl_ULTIMO_INSERTADO', $alt_control->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_alt_control_id = Gral::getVars(2, $prefijo.'cmb_alt_control_id', 0);
	if($cmb_alt_control_id != 0){
		$alt_control = AltControl::getOxId($cmb_alt_control_id);
	}else{
	
	$alt_control->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$alt_control->setCodigo(Gral::getVars(2, "codigo", ''));
	$alt_control->setObservacion(Gral::getVars(2, "observacion", ''));
	$alt_control->setOrden(Gral::getVars(2, "orden", 0));
	$alt_control->setEstado(Gral::getVars(2, "estado", 0));
	$alt_control->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$alt_control->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$alt_control->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$alt_control->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	$alt_control->setControl(Gral::getVars(2, "control", ''));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $alt_control->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/alt_control/alt_control_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_alt_control' width='90%'>
        
				<tr>
				  <td  id="label_alt_control_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_control_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_control_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_control_txt_descripcion' value='<?php Gral::_echoTxt($alt_control->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_alt_control_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_control_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_control_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_control_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_control_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_control_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='alt_control_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='alt_control_txt_codigo' value='<?php Gral::_echoTxt($alt_control->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_alt_control_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_control_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_control_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_control_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_control_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_control_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='alt_control_txa_observacion' rows='10' cols='50' id='alt_control_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($alt_control->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_alt_control_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_control_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_control_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_control_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_alt_control_txa_control" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_control' ?>" >
				  
                                        <?php Lang::_lang('Control', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_alt_control_txa_control" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('control')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='alt_control_txa_control' rows='10' cols='50' id='alt_control_txa_control' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($alt_control->getControl(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_alt_control_alta_control', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_alt_control_alta_control', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_alt_control_alta_control', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_alt_control_alta_control', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('control')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($alt_control->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_alt_control_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='alt_control'/>
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

