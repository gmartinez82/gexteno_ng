<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'nov_novedad';
$db_nombre_pagina = 'nov_novedad_alta';

$nov_novedad = new NovNovedad();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$nov_novedad = new NovNovedad();
	if(trim($hdn_id) != '') $nov_novedad->setId($hdn_id, false);
	$nov_novedad->setDescripcion(Gral::getVars(1, "nov_novedad_txt_descripcion"));
	$nov_novedad->setCodigo(Gral::getVars(1, "nov_novedad_txt_codigo"));
	$nov_novedad->setDescripcionBreve(Gral::getVars(1, "nov_novedad_txt_descripcion_breve"));
	$nov_novedad->setFecha(Gral::getFechaToDb(Gral::getVars(1, "nov_novedad_txt_fecha")));
	$nov_novedad->setDescripcionExtendida(Gral::getVars(1, "nov_novedad_rtf_descripcion_extendida"));
	$nov_novedad->setObservacion(Gral::getVars(1, "nov_novedad_txa_observacion"));
	$nov_novedad->setOrden(Gral::getVars(1, "nov_novedad_txt_orden", 0));
	$nov_novedad->setEstado(Gral::getVars(1, "nov_novedad_cmb_estado", 0));
	$nov_novedad->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "nov_novedad_txt_creado")));
	$nov_novedad->setCreadoPor(Gral::getVars(1, "nov_novedad__creado_por", 0));
	$nov_novedad->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "nov_novedad_txt_modificado")));
	$nov_novedad->setModificadoPor(Gral::getVars(1, "nov_novedad__modificado_por", 0));

	$nov_novedad_estado = new NovNovedad();
	if(trim($hdn_id) != ''){
		$nov_novedad_estado->setId($hdn_id);
		$nov_novedad->setEstado($nov_novedad_estado->getEstado());
				
	}else{
		$nov_novedad->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $nov_novedad->control();
			if(!$error->getExisteError()){
				$nov_novedad->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: nov_novedad_alta.php?cs=1&id='.$nov_novedad->getId());
			}
		break;
		case 'guardarnvo':
			$error = $nov_novedad->control();
			if(!$error->getExisteError()){
				$nov_novedad->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: nov_novedad_alta.php?cs=1');
				$nov_novedad = new NovNovedad();
			}
		break;
	}
	Gral::setSes('NovNovedad_ULTIMO_INSERTADO', $nov_novedad->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_nov_novedad_id = Gral::getVars(2, $prefijo.'cmb_nov_novedad_id', 0);
	if($cmb_nov_novedad_id != 0){
		$nov_novedad = NovNovedad::getOxId($cmb_nov_novedad_id);
	}else{
	
	$nov_novedad->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$nov_novedad->setCodigo(Gral::getVars(2, "codigo", ''));
	$nov_novedad->setDescripcionBreve(Gral::getVars(2, "descripcion_breve", ''));
	$nov_novedad->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$nov_novedad->setDescripcionExtendida(Gral::getVars(2, "descripcion_extendida", ''));
	$nov_novedad->setObservacion(Gral::getVars(2, "observacion", ''));
	$nov_novedad->setOrden(Gral::getVars(2, "orden", 0));
	$nov_novedad->setEstado(Gral::getVars(2, "estado", 0));
	$nov_novedad->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$nov_novedad->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$nov_novedad->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$nov_novedad->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $nov_novedad->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/nov_novedad_gestion/nov_novedad_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_nov_novedad'>
        
				<tr>
				  <td  id="label_nov_novedad_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Titulo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='nov_novedad_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='nov_novedad_txt_descripcion' value='<?php Gral::_echoTxt($nov_novedad->getDescripcion(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_nov_novedad_txt_descripcion_breve" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_breve' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Breve') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_breve', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_breve', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_txt_descripcion_breve" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_breve')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='nov_novedad_txt_descripcion_breve' type='text' class='textbox <?php echo $error_input_css ?> ' id='nov_novedad_txt_descripcion_breve' value='<?php Gral::_echoTxt($nov_novedad->getDescripcionBreve(), true) ?>' size='60' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_breve')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_nov_novedad_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='nov_novedad_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='nov_novedad_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($nov_novedad->getFecha()), true) ?>' size='10' />
					<input type='button' id='cal_nov_novedad_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'nov_novedad_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_nov_novedad_txt_fecha'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_nov_novedad_rtf_descripcion_extendida" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_extendida' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Extendida') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_extendida', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_extendida', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_rtf_descripcion_extendida" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_extendida')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='nov_novedad_rtf_descripcion_extendida' rows='10' cols='50' id='nov_novedad_rtf_descripcion_extendida' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($nov_novedad->getDescripcionExtendida(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_extendida')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_nov_novedad_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_nov_novedad_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='nov_novedad_txa_observacion' rows='10' cols='50' id='nov_novedad_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($nov_novedad->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($nov_novedad->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_nov_novedad_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='nov_novedad'/>
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

