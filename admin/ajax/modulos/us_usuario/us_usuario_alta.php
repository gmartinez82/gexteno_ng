<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('US_USUARIO_ALTA')){
    echo "No tiene asignada la credencial US_USUARIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'us_usuario';
$db_nombre_pagina = 'us_usuario_alta';

$us_usuario = new UsUsuario();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$us_usuario = new UsUsuario();
	if(trim($hdn_id) != '') $us_usuario->setId($hdn_id, false);
	$us_usuario->setGralLenguajeId(Gral::getVars(1, "us_usuario_cmb_gral_lenguaje_id", null));
	$us_usuario->setDescripcion(Gral::getVars(1, "us_usuario_txt_descripcion"));
	$us_usuario->setApellido(Gral::getVars(1, "us_usuario_txt_apellido"));
	$us_usuario->setNombre(Gral::getVars(1, "us_usuario_txt_nombre"));
	$us_usuario->setUsuario(Gral::getVars(1, "us_usuario_txt_usuario"));
	$us_usuario->setCodigo(Gral::getVars(1, "us_usuario_txt_codigo"));
	$us_usuario->setHash(Gral::getVars(1, "us_usuario_txt_hash"));
	$us_usuario->setEmail(Gral::getVars(1, "us_usuario_txt_email"));
	$us_usuario->setTelefono(Gral::getVars(1, "us_usuario_txt_telefono"));
	$us_usuario->setCelular(Gral::getVars(1, "us_usuario_txt_celular"));
	$us_usuario->setAbsoluto(Gral::getVars(1, "us_usuario_cmb_absoluto", 0));
	$us_usuario->setObservacion(Gral::getVars(1, "us_usuario_txa_observacion"));
	$us_usuario->setOrden(Gral::getVars(1, "us_usuario_txt_orden", 0));
	$us_usuario->setActivado(Gral::getVars(1, "us_usuario_cmb_activado", 0));
	$us_usuario->setEstado(Gral::getVars(1, "us_usuario_cmb_estado", 0));
	$us_usuario->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_usuario_txt_creado")));
	$us_usuario->setCreadoPor(Gral::getVars(1, "us_usuario__creado_por", 0));
	$us_usuario->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "us_usuario_txt_modificado")));
	$us_usuario->setModificadoPor(Gral::getVars(1, "us_usuario__modificado_por", 0));

	$us_usuario_estado = new UsUsuario();
	if(trim($hdn_id) != ''){
		$us_usuario_estado->setId($hdn_id);
		$us_usuario->setEstado($us_usuario_estado->getEstado());
				
	}else{
		$us_usuario->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $us_usuario->control();
			if(!$error->getExisteError()){
				$us_usuario->saveDesdeBackend();				
				
				// inicializacion de clave, al crear el usuario: clave = usuario.
				$clave_actual = $us_usuario->getClaveActual();
				if(!$clave_actual){
					$us_usuario->setNuevaClave($us_usuario->getUsuario());
				}

								
				$hdn_error = 0;
				//header('Location: us_usuario_alta.php?cs=1&id='.$us_usuario->getId());
			}
		break;
		case 'guardarnvo':
			$error = $us_usuario->control();
			if(!$error->getExisteError()){
				$us_usuario->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: us_usuario_alta.php?cs=1');
				$us_usuario = new UsUsuario();
			}
		break;
	}
	Gral::setSes('UsUsuario_ULTIMO_INSERTADO', $us_usuario->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_us_usuario_id = Gral::getVars(2, $prefijo.'cmb_us_usuario_id', 0);
	if($cmb_us_usuario_id != 0){
		$us_usuario = UsUsuario::getOxId($cmb_us_usuario_id);
	}else{
	
	$us_usuario->setGralLenguajeId(Gral::getVars(2, "gral_lenguaje_id", 'null'));
	$us_usuario->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$us_usuario->setApellido(Gral::getVars(2, "apellido", ''));
	$us_usuario->setNombre(Gral::getVars(2, "nombre", ''));
	$us_usuario->setUsuario(Gral::getVars(2, "usuario", ''));
	$us_usuario->setCodigo(Gral::getVars(2, "codigo", ''));
	$us_usuario->setHash(Gral::getVars(2, "hash", ''));
	$us_usuario->setEmail(Gral::getVars(2, "email", ''));
	$us_usuario->setTelefono(Gral::getVars(2, "telefono", ''));
	$us_usuario->setCelular(Gral::getVars(2, "celular", ''));
	$us_usuario->setAbsoluto(Gral::getVars(2, "absoluto", 0));
	$us_usuario->setObservacion(Gral::getVars(2, "observacion", ''));
	$us_usuario->setOrden(Gral::getVars(2, "orden", 0));
	$us_usuario->setActivado(Gral::getVars(2, "activado", 0));
	$us_usuario->setEstado(Gral::getVars(2, "estado", 0));
	$us_usuario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$us_usuario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$us_usuario->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$us_usuario->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $us_usuario->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/us_usuario/us_usuario_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_us_usuario' width='90%'>
        
				<tr>
				  <td  id="label_us_usuario_cmb_gral_lenguaje_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_lenguaje_id' ?>" >
				  
                                        <?php Lang::_lang('Lenguaje', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_cmb_gral_lenguaje_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_lenguaje_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'us_usuario_cmb_gral_lenguaje_id', Gral::getCmbFiltro(GralLenguaje::getGralLenguajesCmb(), '...'), $us_usuario->getGralLenguajeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_CMB_EDIT_GRAL_LENGUAJE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="us_usuario_cmb_gral_lenguaje_id" clase_id="gral_lenguaje" prefijo='us_usuario_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_lenguaje_id" <?php echo ($us_usuario->getGralLenguajeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="us_usuario_cmb_gral_lenguaje_id" clase_id="gral_lenguaje" prefijo='us_usuario_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_us_usuario_cmb_gral_lenguaje_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_us_usuario_alta_gral_lenguaje_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_gral_lenguaje_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_gral_lenguaje_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_gral_lenguaje_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_lenguaje_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                        <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_apellido' value='<?php Gral::_echoTxt($us_usuario->getApellido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_apellido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                        <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_nombre' value='<?php Gral::_echoTxt($us_usuario->getNombre(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_nombre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_usuario" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_usuario' ?>" >
				  
                                        <?php Lang::_lang('Usuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_usuario" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('usuario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_usuario' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_usuario' value='<?php Gral::_echoTxt($us_usuario->getUsuario(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_usuario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_usuario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_usuario', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_usuario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('usuario')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_codigo' value='<?php Gral::_echoTxt($us_usuario->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_hash" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_hash' ?>" >
				  
                                        <?php Lang::_lang('Hash', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_hash" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('hash')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_hash' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_hash' value='<?php Gral::_echoTxt($us_usuario->getHash(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_hash', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_hash', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_hash', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_hash', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('hash')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_email' value='<?php Gral::_echoTxt($us_usuario->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_telefono' value='<?php Gral::_echoTxt($us_usuario->getTelefono(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txt_celular" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_celular' ?>" >
				  
                                        <?php Lang::_lang('Celular', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txt_celular" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('celular')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='us_usuario_txt_celular' type='text' class='textbox <?php echo $error_input_css ?> ' id='us_usuario_txt_celular' value='<?php Gral::_echoTxt($us_usuario->getCelular(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_us_usuario_alta_celular', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_celular', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_celular', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_celular', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('celular')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_us_usuario_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_us_usuario_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='us_usuario_txa_observacion' rows='5' cols='40' id='us_usuario_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($us_usuario->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_us_usuario_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_us_usuario_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_us_usuario_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_us_usuario_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($us_usuario->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_us_usuario_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='us_usuario'/>
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

