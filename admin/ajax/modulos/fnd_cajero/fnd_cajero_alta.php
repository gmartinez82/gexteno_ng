<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('FND_CAJERO_ALTA')){
    echo "No tiene asignada la credencial FND_CAJERO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'fnd_cajero';
$db_nombre_pagina = 'fnd_cajero_alta';

$fnd_cajero = new FndCajero();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_cajero = new FndCajero();
	if(trim($hdn_id) != '') $fnd_cajero->setId($hdn_id, false);
	$fnd_cajero->setDescripcion(Gral::getVars(1, "fnd_cajero_txt_descripcion"));
	$fnd_cajero->setApellido(Gral::getVars(1, "fnd_cajero_txt_apellido"));
	$fnd_cajero->setNombre(Gral::getVars(1, "fnd_cajero_txt_nombre"));
	$fnd_cajero->setCodigo(Gral::getVars(1, "fnd_cajero_txt_codigo"));
	$fnd_cajero->setObservacion(Gral::getVars(1, "fnd_cajero_txa_observacion"));
	$fnd_cajero->setOrden(Gral::getVars(1, "fnd_cajero_txt_orden", 0));
	$fnd_cajero->setEstado(Gral::getVars(1, "fnd_cajero_cmb_estado", 0));
	$fnd_cajero->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_cajero_txt_creado")));
	$fnd_cajero->setCreadoPor(Gral::getVars(1, "fnd_cajero__creado_por", 0));
	$fnd_cajero->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_cajero_txt_modificado")));
	$fnd_cajero->setModificadoPor(Gral::getVars(1, "fnd_cajero__modificado_por", 0));

	$fnd_cajero_estado = new FndCajero();
	if(trim($hdn_id) != ''){
		$fnd_cajero_estado->setId($hdn_id);
		$fnd_cajero->setEstado($fnd_cajero_estado->getEstado());
				
	}else{
		$fnd_cajero->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_cajero->control();
			if(!$error->getExisteError()){
				$fnd_cajero->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_cajero_alta.php?cs=1&id='.$fnd_cajero->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_cajero->control();
			if(!$error->getExisteError()){
				$fnd_cajero->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_cajero_alta.php?cs=1');
				$fnd_cajero = new FndCajero();
			}
		break;
	}
	Gral::setSes('FndCajero_ULTIMO_INSERTADO', $fnd_cajero->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_cajero_id = Gral::getVars(2, $prefijo.'cmb_fnd_cajero_id', 0);
	if($cmb_fnd_cajero_id != 0){
		$fnd_cajero = FndCajero::getOxId($cmb_fnd_cajero_id);
	}else{
	
	$fnd_cajero->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_cajero->setApellido(Gral::getVars(2, "apellido", ''));
	$fnd_cajero->setNombre(Gral::getVars(2, "nombre", ''));
	$fnd_cajero->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_cajero->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_cajero->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_cajero->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_cajero->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_cajero->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_cajero->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_cajero->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_cajero->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_cajero/fnd_cajero_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_cajero' width='90%'>
        
				<tr>
				  <td  id="label_fnd_cajero_txt_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                        <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_cajero_txt_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_cajero_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_cajero_txt_apellido' value='<?php Gral::_echoTxt($fnd_cajero->getApellido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_cajero_alta_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_cajero_alta_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_cajero_alta_apellido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_cajero_alta_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_cajero_txt_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                        <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_cajero_txt_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_cajero_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_cajero_txt_nombre' value='<?php Gral::_echoTxt($fnd_cajero->getNombre(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_cajero_alta_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_cajero_alta_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_cajero_alta_nombre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_cajero_alta_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_cajero_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_cajero_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_cajero_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_cajero_txt_codigo' value='<?php Gral::_echoTxt($fnd_cajero->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_cajero_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_cajero_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_cajero_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_cajero_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_cajero_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_cajero_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_cajero_txa_observacion' rows='10' cols='50' id='fnd_cajero_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_cajero->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_fnd_cajero_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_cajero_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_cajero_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_cajero_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_cajero->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_cajero_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_cajero'/>
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

