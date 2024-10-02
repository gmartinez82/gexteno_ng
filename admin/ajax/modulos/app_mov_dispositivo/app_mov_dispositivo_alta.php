<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('APP_MOV_DISPOSITIVO_ALTA')){
    echo "No tiene asignada la credencial APP_MOV_DISPOSITIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'app_mov_dispositivo';
$db_nombre_pagina = 'app_mov_dispositivo_alta';

$app_mov_dispositivo = new AppMovDispositivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$app_mov_dispositivo = new AppMovDispositivo();
	if(trim($hdn_id) != '') $app_mov_dispositivo->setId($hdn_id, false);
	$app_mov_dispositivo->setDescripcion(Gral::getVars(1, "app_mov_dispositivo_txt_descripcion"));
	$app_mov_dispositivo->setCodigo(Gral::getVars(1, "app_mov_dispositivo_txt_codigo"));
	$app_mov_dispositivo->setSoDescripcion(Gral::getVars(1, "app_mov_dispositivo_txt_so_descripcion"));
	$app_mov_dispositivo->setSoVersion(Gral::getVars(1, "app_mov_dispositivo_txt_so_version"));
	$app_mov_dispositivo->setMarca(Gral::getVars(1, "app_mov_dispositivo_txt_marca"));
	$app_mov_dispositivo->setModelo(Gral::getVars(1, "app_mov_dispositivo_txt_modelo"));
	$app_mov_dispositivo->setImei(Gral::getVars(1, "app_mov_dispositivo_txt_imei"));
	$app_mov_dispositivo->setTelefonoNro(Gral::getVars(1, "app_mov_dispositivo_txt_telefono_nro"));
	$app_mov_dispositivo->setTitularApellido(Gral::getVars(1, "app_mov_dispositivo_txt_titular_apellido"));
	$app_mov_dispositivo->setTitularNombre(Gral::getVars(1, "app_mov_dispositivo_txt_titular_nombre"));
	$app_mov_dispositivo->setObservacion(Gral::getVars(1, "app_mov_dispositivo_txa_observacion"));
	$app_mov_dispositivo->setOrden(Gral::getVars(1, "app_mov_dispositivo_txt_orden", 0));
	$app_mov_dispositivo->setEstado(Gral::getVars(1, "app_mov_dispositivo__estado", 0));
	$app_mov_dispositivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "app_mov_dispositivo_txt_creado")));
	$app_mov_dispositivo->setCreadoPor(Gral::getVars(1, "app_mov_dispositivo__creado_por", null));
	$app_mov_dispositivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "app_mov_dispositivo_txt_modificado")));
	$app_mov_dispositivo->setModificadoPor(Gral::getVars(1, "app_mov_dispositivo__modificado_por", null));

	$app_mov_dispositivo_estado = new AppMovDispositivo();
	if(trim($hdn_id) != ''){
		$app_mov_dispositivo_estado->setId($hdn_id);
		$app_mov_dispositivo->setEstado($app_mov_dispositivo_estado->getEstado());
				
	}else{
		$app_mov_dispositivo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $app_mov_dispositivo->control();
			if(!$error->getExisteError()){
				$app_mov_dispositivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: app_mov_dispositivo_alta.php?cs=1&id='.$app_mov_dispositivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $app_mov_dispositivo->control();
			if(!$error->getExisteError()){
				$app_mov_dispositivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: app_mov_dispositivo_alta.php?cs=1');
				$app_mov_dispositivo = new AppMovDispositivo();
			}
		break;
	}
	Gral::setSes('AppMovDispositivo_ULTIMO_INSERTADO', $app_mov_dispositivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_app_mov_dispositivo_id = Gral::getVars(2, $prefijo.'cmb_app_mov_dispositivo_id', 0);
	if($cmb_app_mov_dispositivo_id != 0){
		$app_mov_dispositivo = AppMovDispositivo::getOxId($cmb_app_mov_dispositivo_id);
	}else{
	
	$app_mov_dispositivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$app_mov_dispositivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$app_mov_dispositivo->setSoDescripcion(Gral::getVars(2, "so_descripcion", ''));
	$app_mov_dispositivo->setSoVersion(Gral::getVars(2, "so_version", ''));
	$app_mov_dispositivo->setMarca(Gral::getVars(2, "marca", ''));
	$app_mov_dispositivo->setModelo(Gral::getVars(2, "modelo", ''));
	$app_mov_dispositivo->setImei(Gral::getVars(2, "imei", ''));
	$app_mov_dispositivo->setTelefonoNro(Gral::getVars(2, "telefono_nro", ''));
	$app_mov_dispositivo->setTitularApellido(Gral::getVars(2, "titular_apellido", ''));
	$app_mov_dispositivo->setTitularNombre(Gral::getVars(2, "titular_nombre", ''));
	$app_mov_dispositivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$app_mov_dispositivo->setOrden(Gral::getVars(2, "orden", 0));
	$app_mov_dispositivo->setEstado(Gral::getVars(2, "estado", 0));
	$app_mov_dispositivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$app_mov_dispositivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$app_mov_dispositivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$app_mov_dispositivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $app_mov_dispositivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/app_mov_dispositivo/app_mov_dispositivo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_app_mov_dispositivo' width='90%'>
        
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_descripcion' value='<?php Gral::_echoTxt($app_mov_dispositivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_codigo' value='<?php Gral::_echoTxt($app_mov_dispositivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_so_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_so_descripcion' ?>" >
				  
                                        <?php Lang::_lang('S.O. Descr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_so_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('so_descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_so_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_so_descripcion' value='<?php Gral::_echoTxt($app_mov_dispositivo->getSoDescripcion(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_so_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_so_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_so_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_so_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('so_descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_so_version" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_so_version' ?>" >
				  
                                        <?php Lang::_lang('S.O. Version', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_so_version" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('so_version')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_so_version' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_so_version' value='<?php Gral::_echoTxt($app_mov_dispositivo->getSoVersion(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_so_version', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_so_version', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_so_version', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_so_version', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('so_version')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_marca" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_marca' ?>" >
				  
                                        <?php Lang::_lang('Marca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_marca" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('marca')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_marca' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_marca' value='<?php Gral::_echoTxt($app_mov_dispositivo->getMarca(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_marca', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_marca', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_marca', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_marca', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('marca')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_modelo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_modelo' ?>" >
				  
                                        <?php Lang::_lang('Modelo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_modelo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('modelo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_modelo' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_modelo' value='<?php Gral::_echoTxt($app_mov_dispositivo->getModelo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_modelo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_modelo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_modelo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_modelo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('modelo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_imei" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_imei' ?>" >
				  
                                        <?php Lang::_lang('IMEI', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_imei" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('imei')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_imei' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_imei' value='<?php Gral::_echoTxt($app_mov_dispositivo->getImei(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_imei', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_imei', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_imei', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_imei', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('imei')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_telefono_nro" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono_nro' ?>" >
				  
                                        <?php Lang::_lang('Telefono Nro', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_telefono_nro" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono_nro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_telefono_nro' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_telefono_nro' value='<?php Gral::_echoTxt($app_mov_dispositivo->getTelefonoNro(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_telefono_nro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_telefono_nro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_telefono_nro', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_telefono_nro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono_nro')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_titular_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_titular_apellido' ?>" >
				  
                                        <?php Lang::_lang('Titular Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_titular_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('titular_apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_titular_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_titular_apellido' value='<?php Gral::_echoTxt($app_mov_dispositivo->getTitularApellido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_titular_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_titular_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_titular_apellido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_titular_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('titular_apellido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txt_titular_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_titular_nombre' ?>" >
				  
                                        <?php Lang::_lang('Titular Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txt_titular_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('titular_nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='app_mov_dispositivo_txt_titular_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='app_mov_dispositivo_txt_titular_nombre' value='<?php Gral::_echoTxt($app_mov_dispositivo->getTitularNombre(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_titular_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_titular_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_titular_nombre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_titular_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('titular_nombre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_app_mov_dispositivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_app_mov_dispositivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='app_mov_dispositivo_txa_observacion' rows='10' cols='50' id='app_mov_dispositivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($app_mov_dispositivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_app_mov_dispositivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_app_mov_dispositivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_app_mov_dispositivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_app_mov_dispositivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($app_mov_dispositivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_app_mov_dispositivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='app_mov_dispositivo'/>
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

