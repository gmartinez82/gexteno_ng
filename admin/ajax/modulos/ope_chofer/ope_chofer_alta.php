<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('OPE_CHOFER_ALTA')){
    echo "No tiene asignada la credencial OPE_CHOFER_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ope_chofer';
$db_nombre_pagina = 'ope_chofer_alta';

$ope_chofer = new OpeChofer();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ope_chofer = new OpeChofer();
	if(trim($hdn_id) != '') $ope_chofer->setId($hdn_id, false);
	$ope_chofer->setDescripcion(Gral::getVars(1, "ope_chofer_txt_descripcion"));
	$ope_chofer->setApellido(Gral::getVars(1, "ope_chofer_txt_apellido"));
	$ope_chofer->setNombre(Gral::getVars(1, "ope_chofer_txt_nombre"));
	$ope_chofer->setEmail(Gral::getVars(1, "ope_chofer_txt_email"));
	$ope_chofer->setTelefono(Gral::getVars(1, "ope_chofer_txt_telefono"));
	$ope_chofer->setCelular(Gral::getVars(1, "ope_chofer_txt_celular"));
	$ope_chofer->setCodigo(Gral::getVars(1, "ope_chofer_txt_codigo"));
	$ope_chofer->setObservacion(Gral::getVars(1, "ope_chofer_txa_observacion"));
	$ope_chofer->setOrden(Gral::getVars(1, "ope_chofer_txt_orden", 0));
	$ope_chofer->setEstado(Gral::getVars(1, "ope_chofer_cmb_estado", 0));
	$ope_chofer->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ope_chofer_txt_creado")));
	$ope_chofer->setCreadoPor(Gral::getVars(1, "ope_chofer__creado_por", 0));
	$ope_chofer->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ope_chofer_txt_modificado")));
	$ope_chofer->setModificadoPor(Gral::getVars(1, "ope_chofer__modificado_por", 0));

	$ope_chofer_estado = new OpeChofer();
	if(trim($hdn_id) != ''){
		$ope_chofer_estado->setId($hdn_id);
		$ope_chofer->setEstado($ope_chofer_estado->getEstado());
				
	}else{
		$ope_chofer->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ope_chofer->control();
			if(!$error->getExisteError()){
				$ope_chofer->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ope_chofer_alta.php?cs=1&id='.$ope_chofer->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ope_chofer->control();
			if(!$error->getExisteError()){
				$ope_chofer->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ope_chofer_alta.php?cs=1');
				$ope_chofer = new OpeChofer();
			}
		break;
	}
	Gral::setSes('OpeChofer_ULTIMO_INSERTADO', $ope_chofer->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ope_chofer_id = Gral::getVars(2, $prefijo.'cmb_ope_chofer_id', 0);
	if($cmb_ope_chofer_id != 0){
		$ope_chofer = OpeChofer::getOxId($cmb_ope_chofer_id);
	}else{
	
	$ope_chofer->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ope_chofer->setApellido(Gral::getVars(2, "apellido", ''));
	$ope_chofer->setNombre(Gral::getVars(2, "nombre", ''));
	$ope_chofer->setEmail(Gral::getVars(2, "email", ''));
	$ope_chofer->setTelefono(Gral::getVars(2, "telefono", ''));
	$ope_chofer->setCelular(Gral::getVars(2, "celular", ''));
	$ope_chofer->setCodigo(Gral::getVars(2, "codigo", ''));
	$ope_chofer->setObservacion(Gral::getVars(2, "observacion", ''));
	$ope_chofer->setOrden(Gral::getVars(2, "orden", 0));
	$ope_chofer->setEstado(Gral::getVars(2, "estado", 0));
	$ope_chofer->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ope_chofer->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ope_chofer->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ope_chofer->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ope_chofer->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ope_chofer/ope_chofer_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ope_chofer' width='90%'>
        
				<tr>
				  <td  id="label_ope_chofer_txt_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                        <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ope_chofer_txt_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ope_chofer_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='ope_chofer_txt_apellido' value='<?php Gral::_echoTxt($ope_chofer->getApellido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ope_chofer_alta_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ope_chofer_alta_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ope_chofer_alta_apellido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ope_chofer_alta_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ope_chofer_txt_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                        <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ope_chofer_txt_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ope_chofer_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='ope_chofer_txt_nombre' value='<?php Gral::_echoTxt($ope_chofer->getNombre(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ope_chofer_alta_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ope_chofer_alta_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ope_chofer_alta_nombre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ope_chofer_alta_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ope_chofer_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ope_chofer_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ope_chofer_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='ope_chofer_txt_email' value='<?php Gral::_echoTxt($ope_chofer->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ope_chofer_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ope_chofer_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ope_chofer_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ope_chofer_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ope_chofer_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ope_chofer_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ope_chofer_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='ope_chofer_txt_telefono' value='<?php Gral::_echoTxt($ope_chofer->getTelefono(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ope_chofer_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ope_chofer_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ope_chofer_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ope_chofer_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ope_chofer_txt_celular" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_celular' ?>" >
				  
                                        <?php Lang::_lang('Celular', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ope_chofer_txt_celular" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('celular')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ope_chofer_txt_celular' type='text' class='textbox <?php echo $error_input_css ?> ' id='ope_chofer_txt_celular' value='<?php Gral::_echoTxt($ope_chofer->getCelular(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ope_chofer_alta_celular', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ope_chofer_alta_celular', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ope_chofer_alta_celular', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ope_chofer_alta_celular', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('celular')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ope_chofer_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ope_chofer_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ope_chofer_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ope_chofer_txt_codigo' value='<?php Gral::_echoTxt($ope_chofer->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ope_chofer_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ope_chofer_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ope_chofer_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ope_chofer_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ope_chofer_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ope_chofer_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ope_chofer_txa_observacion' rows='10' cols='50' id='ope_chofer_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ope_chofer->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ope_chofer_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ope_chofer_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ope_chofer_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ope_chofer_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ope_chofer->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ope_chofer_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ope_chofer'/>
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

