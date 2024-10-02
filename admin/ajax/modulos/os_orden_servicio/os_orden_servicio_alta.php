<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ALTA')){
    echo "No tiene asignada la credencial OS_ORDEN_SERVICIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'os_orden_servicio';
$db_nombre_pagina = 'os_orden_servicio_alta';

$os_orden_servicio = new OsOrdenServicio();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$os_orden_servicio = new OsOrdenServicio();
	if(trim($hdn_id) != '') $os_orden_servicio->setId($hdn_id, false);
	$os_orden_servicio->setOsTipoId(Gral::getVars(1, "os_orden_servicio_cmb_os_tipo_id", null));
	$os_orden_servicio->setPerPersonaId(Gral::getVars(1, "os_orden_servicio_cmb_per_persona_id", null));
	$os_orden_servicio->setOsPrioridadId(Gral::getVars(1, "os_orden_servicio_cmb_os_prioridad_id", null));
	$os_orden_servicio->setOsTipoEstadoId(Gral::getVars(1, "os_orden_servicio_cmb_os_tipo_estado_id", null));
	$os_orden_servicio->setNotificacion(Gral::getVars(1, "os_orden_servicio_txa_notificacion"));
	$os_orden_servicio->setNotificacionMecano(Gral::getVars(1, "os_orden_servicio_cmb_notificacion_mecano", 0));
	$os_orden_servicio->setFecha(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha")));
	$os_orden_servicio->setFechaHecho(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha_hecho")));
	$os_orden_servicio->setFechaNotificacion(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha_notificacion")));
	$os_orden_servicio->setDiasParaDescargo(Gral::getVars(1, "os_orden_servicio_txt_dias_para_descargo", 0));
	$os_orden_servicio->setFechaLimiteDescargo(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha_limite_descargo")));
	$os_orden_servicio->setFechaDescargo(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha_descargo")));
	$os_orden_servicio->setFechaNotificadoSinDescargo(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha_notificado_sin_descargo")));
	$os_orden_servicio->setFechaLimiteResolucion(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha_limite_resolucion")));
	$os_orden_servicio->setFechaResolucion(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha_resolucion")));
	$os_orden_servicio->setDescripcion(Gral::getVars(1, "os_orden_servicio_txt_descripcion"));
	$os_orden_servicio->setCodigo(Gral::getVars(1, "os_orden_servicio_txt_codigo"));
	$os_orden_servicio->setObservacion(Gral::getVars(1, "os_orden_servicio_txa_observacion"));
	$os_orden_servicio->setOrden(Gral::getVars(1, "os_orden_servicio_txt_orden", 0));
	$os_orden_servicio->setEstado(Gral::getVars(1, "os_orden_servicio_cmb_estado", 0));
	$os_orden_servicio->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_orden_servicio_txt_creado")));
	$os_orden_servicio->setCreadoPor(Gral::getVars(1, "os_orden_servicio__creado_por", 0));
	$os_orden_servicio->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_orden_servicio_txt_modificado")));
	$os_orden_servicio->setModificadoPor(Gral::getVars(1, "os_orden_servicio__modificado_por", 0));

	$os_orden_servicio_estado = new OsOrdenServicio();
	if(trim($hdn_id) != ''){
		$os_orden_servicio_estado->setId($hdn_id);
		$os_orden_servicio->setEstado($os_orden_servicio_estado->getEstado());
				
	}else{
		$os_orden_servicio->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $os_orden_servicio->control();
			if(!$error->getExisteError()){
				$os_orden_servicio->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: os_orden_servicio_alta.php?cs=1&id='.$os_orden_servicio->getId());
			}
		break;
		case 'guardarnvo':
			$error = $os_orden_servicio->control();
			if(!$error->getExisteError()){
				$os_orden_servicio->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: os_orden_servicio_alta.php?cs=1');
				$os_orden_servicio = new OsOrdenServicio();
			}
		break;
	}
	Gral::setSes('OsOrdenServicio_ULTIMO_INSERTADO', $os_orden_servicio->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_os_orden_servicio_id = Gral::getVars(2, $prefijo.'cmb_os_orden_servicio_id', 0);
	if($cmb_os_orden_servicio_id != 0){
		$os_orden_servicio = OsOrdenServicio::getOxId($cmb_os_orden_servicio_id);
	}else{
	
	$os_orden_servicio->setOsTipoId(Gral::getVars(2, "os_tipo_id", 'null'));
	$os_orden_servicio->setPerPersonaId(Gral::getVars(2, "per_persona_id", 'null'));
	$os_orden_servicio->setOsPrioridadId(Gral::getVars(2, "os_prioridad_id", 'null'));
	$os_orden_servicio->setOsTipoEstadoId(Gral::getVars(2, "os_tipo_estado_id", 'null'));
	$os_orden_servicio->setNotificacion(Gral::getVars(2, "notificacion", ''));
	$os_orden_servicio->setNotificacionMecano(Gral::getVars(2, "notificacion_mecano", 0));
	$os_orden_servicio->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$os_orden_servicio->setFechaHecho(Gral::getVars(2, "fecha_hecho", date('Y-m-d')));
	$os_orden_servicio->setFechaNotificacion(Gral::getVars(2, "fecha_notificacion", date('Y-m-d')));
	$os_orden_servicio->setDiasParaDescargo(Gral::getVars(2, "dias_para_descargo", 0));
	$os_orden_servicio->setFechaLimiteDescargo(Gral::getVars(2, "fecha_limite_descargo", date('Y-m-d')));
	$os_orden_servicio->setFechaDescargo(Gral::getVars(2, "fecha_descargo", date('Y-m-d')));
	$os_orden_servicio->setFechaNotificadoSinDescargo(Gral::getVars(2, "fecha_notificado_sin_descargo", date('Y-m-d')));
	$os_orden_servicio->setFechaLimiteResolucion(Gral::getVars(2, "fecha_limite_resolucion", date('Y-m-d')));
	$os_orden_servicio->setFechaResolucion(Gral::getVars(2, "fecha_resolucion", date('Y-m-d')));
	$os_orden_servicio->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$os_orden_servicio->setCodigo(Gral::getVars(2, "codigo", ''));
	$os_orden_servicio->setObservacion(Gral::getVars(2, "observacion", ''));
	$os_orden_servicio->setOrden(Gral::getVars(2, "orden", 0));
	$os_orden_servicio->setEstado(Gral::getVars(2, "estado", 0));
	$os_orden_servicio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$os_orden_servicio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$os_orden_servicio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$os_orden_servicio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $os_orden_servicio->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/os_orden_servicio/os_orden_servicio_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_os_orden_servicio' width='90%'>
        
				<tr>
				  <td  id="label_os_orden_servicio_txa_notificacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_notificacion' ?>" >
				  
                                        <?php Lang::_lang('Notificacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txa_notificacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('notificacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_orden_servicio_txa_notificacion' rows='10' cols='50' id='os_orden_servicio_txa_notificacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_orden_servicio->getNotificacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_notificacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_notificacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_notificacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_notificacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('notificacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_cmb_notificacion_mecano" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_notificacion_mecano' ?>" >
				  
                                        <?php Lang::_lang('Not Mec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_cmb_notificacion_mecano" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('notificacion_mecano')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'os_orden_servicio_cmb_notificacion_mecano', GralSiNo::getGralSiNosCmb(), $os_orden_servicio->getNotificacionMecano(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_notificacion_mecano', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_notificacion_mecano', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_notificacion_mecano', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_notificacion_mecano', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('notificacion_mecano')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFecha()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha_hecho" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_hecho' ?>" >
				  
                                        <?php Lang::_lang('Fecha Hecho', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha_hecho" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_hecho')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha_hecho' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha_hecho' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha_hecho' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha_hecho', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha_hecho'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha_hecho', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha_hecho', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha_hecho', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha_hecho', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_hecho')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha_notificacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_notificacion' ?>" >
				  
                                        <?php Lang::_lang('Fecha Notif', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha_notificacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_notificacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha_notificacion' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha_notificacion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificacion()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha_notificacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha_notificacion', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha_notificacion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha_notificacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha_notificacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha_notificacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha_notificacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_notificacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha_limite_descargo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_limite_descargo' ?>" >
				  
                                        <?php Lang::_lang('Fecha Limite Descargo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha_limite_descargo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_limite_descargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha_limite_descargo' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha_limite_descargo' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteDescargo()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha_limite_descargo' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha_limite_descargo', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha_limite_descargo'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha_limite_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha_limite_descargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha_limite_descargo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha_limite_descargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_limite_descargo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha_descargo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_descargo' ?>" >
				  
                                        <?php Lang::_lang('Fecha Descargo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha_descargo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_descargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha_descargo' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha_descargo' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaDescargo()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha_descargo' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha_descargo', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha_descargo'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha_descargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha_descargo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha_descargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_descargo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha_notificado_sin_descargo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_notificado_sin_descargo' ?>" >
				  
                                        <?php Lang::_lang('Fecha Noti sin Descargo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha_notificado_sin_descargo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_notificado_sin_descargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha_notificado_sin_descargo' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha_notificado_sin_descargo' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificadoSinDescargo()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha_notificado_sin_descargo' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha_notificado_sin_descargo', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha_notificado_sin_descargo'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha_notificado_sin_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha_notificado_sin_descargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha_notificado_sin_descargo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha_notificado_sin_descargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_notificado_sin_descargo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha_limite_resolucion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_limite_resolucion' ?>" >
				  
                                        <?php Lang::_lang('Fecha Limite Resolucion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha_limite_resolucion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_limite_resolucion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha_limite_resolucion' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha_limite_resolucion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteResolucion()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha_limite_resolucion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha_limite_resolucion', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha_limite_resolucion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha_limite_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha_limite_resolucion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha_limite_resolucion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha_limite_resolucion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_limite_resolucion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_fecha_resolucion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_resolucion' ?>" >
				  
                                        <?php Lang::_lang('Fecha Resolucion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_fecha_resolucion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_resolucion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha_resolucion' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha_resolucion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaResolucion()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha_resolucion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha_resolucion', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha_resolucion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_fecha_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_fecha_resolucion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_fecha_resolucion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_fecha_resolucion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_resolucion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_txt_descripcion' value='<?php Gral::_echoTxt($os_orden_servicio->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_txt_codigo' value='<?php Gral::_echoTxt($os_orden_servicio->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_orden_servicio_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_orden_servicio_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_orden_servicio_txa_observacion' rows='10' cols='50' id='os_orden_servicio_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_orden_servicio->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_orden_servicio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_orden_servicio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_orden_servicio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_orden_servicio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($os_orden_servicio->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_os_orden_servicio_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='os_orden_servicio'/>
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

