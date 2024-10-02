<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

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
	$os_orden_servicio->setOsTipoEstadoId(Gral::getVars(1, "os_orden_servicio_cmb_os_tipo_estado_id", null));
	$os_orden_servicio->setFecha(Gral::getFechaToDb(Gral::getVars(1, "os_orden_servicio_txt_fecha")));
	$os_orden_servicio->setNotificacion(Gral::getVars(1, "os_orden_servicio_txa_notificacion"));
	$os_orden_servicio->setDiasParaDescargo(Gral::getVars(1, "os_orden_servicio_txt_dias_para_descargo", 0));
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
	$os_orden_servicio->setOsTipoEstadoId(Gral::getVars(2, "os_tipo_estado_id", 'null'));
	$os_orden_servicio->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$os_orden_servicio->setNotificacion(Gral::getVars(2, "notificacion", ''));
	$os_orden_servicio->setDiasParaDescargo(Gral::getVars(2, "dias_para_descargo", 0));
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
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_os_orden_servicio'>
        
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Fecha') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_os_orden_servicio_txt_fecha">

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_orden_servicio_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFecha()), true) ?>' size='10' />
					<input type='button' id='cal_os_orden_servicio_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_orden_servicio_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_os_orden_servicio_txt_fecha'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Notificacion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_notificacion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_notificacion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_os_orden_servicio_txa_notificacion">

					<?php $error_input_css = ($error->getErrorXIndice('notificacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_orden_servicio_txa_notificacion' rows='10' cols='50' id='os_orden_servicio_txa_notificacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_orden_servicio->getNotificacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('notificacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Descripcion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_os_orden_servicio_txt_descripcion">

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_txt_descripcion' value='<?php Gral::_echoTxt($os_orden_servicio->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Codigo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_os_orden_servicio_txt_codigo">

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_orden_servicio_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_orden_servicio_txt_codigo' value='<?php Gral::_echoTxt($os_orden_servicio->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Observaciones') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_os_orden_servicio_txa_observacion">

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_orden_servicio_txa_observacion' rows='10' cols='50' id='os_orden_servicio_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_orden_servicio->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
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
		  <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
        </tr>
      </table>
	  
	  
</form>
</body>
</html>
<script>
setInit();
</script>

