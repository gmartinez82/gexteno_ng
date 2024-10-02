<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_caja';
$db_nombre_pagina = 'fnd_caja_alta';

$fnd_caja = new FndCaja();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_caja = new FndCaja();
	if(trim($hdn_id) != '') $fnd_caja->setId($hdn_id, false);
	$fnd_caja->setDescripcion(Gral::getVars(1, "fnd_caja_txt_descripcion"));
	$fnd_caja->setFndCajeroId(Gral::getVars(1, "fnd_caja_cmb_fnd_cajero_id", null));
	$fnd_caja->setFndCajaTipoEstadoId(Gral::getVars(1, "fnd_caja_cmb_fnd_caja_tipo_estado_id", null));
	$fnd_caja->setFechaApertura(Gral::getFechaToDb(Gral::getVars(1, "fnd_caja_txt_fecha_apertura")));
	$fnd_caja->setFechaCierre(Gral::getFechaToDb(Gral::getVars(1, "fnd_caja_txt_fecha_cierre")));
	$fnd_caja->setFechaRendicion(Gral::getFechaToDb(Gral::getVars(1, "fnd_caja_txt_fecha_rendicion")));
	$fnd_caja->setCodigo(Gral::getVars(1, "fnd_caja_txt_codigo"));
	$fnd_caja->setObservacion(Gral::getVars(1, "fnd_caja_txa_observacion"));
	$fnd_caja->setOrden(Gral::getVars(1, "fnd_caja_txt_orden", 0));
	$fnd_caja->setEstado(Gral::getVars(1, "fnd_caja_cmb_estado", 0));
	$fnd_caja->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_txt_creado")));
	$fnd_caja->setCreadoPor(Gral::getVars(1, "fnd_caja__creado_por", 0));
	$fnd_caja->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_txt_modificado")));
	$fnd_caja->setModificadoPor(Gral::getVars(1, "fnd_caja__modificado_por", 0));

	$fnd_caja_estado = new FndCaja();
	if(trim($hdn_id) != ''){
		$fnd_caja_estado->setId($hdn_id);
		$fnd_caja->setEstado($fnd_caja_estado->getEstado());
				
	}else{
		$fnd_caja->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_caja->control();
			if(!$error->getExisteError()){
				$fnd_caja->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_caja_alta.php?cs=1&id='.$fnd_caja->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_caja->control();
			if(!$error->getExisteError()){
				$fnd_caja->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_caja_alta.php?cs=1');
				$fnd_caja = new FndCaja();
			}
		break;
	}
	Gral::setSes('FndCaja_ULTIMO_INSERTADO', $fnd_caja->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_caja_id = Gral::getVars(2, $prefijo.'cmb_fnd_caja_id', 0);
	if($cmb_fnd_caja_id != 0){
		$fnd_caja = FndCaja::getOxId($cmb_fnd_caja_id);
	}else{
	
	$fnd_caja->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_caja->setFndCajeroId(Gral::getVars(2, "fnd_cajero_id", 'null'));
	$fnd_caja->setFndCajaTipoEstadoId(Gral::getVars(2, "fnd_caja_tipo_estado_id", 'null'));
	$fnd_caja->setFechaApertura(Gral::getVars(2, "fecha_apertura", date('Y-m-d')));
	$fnd_caja->setFechaCierre(Gral::getVars(2, "fecha_cierre", date('Y-m-d')));
	$fnd_caja->setFechaRendicion(Gral::getVars(2, "fecha_rendicion", date('Y-m-d')));
	$fnd_caja->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_caja->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_caja->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_caja->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_caja->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_caja->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_caja->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_caja->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_caja->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_caja_gestion/fnd_caja_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_caja'>
        
				<tr>
				  <td  id="label_fnd_caja_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_txt_descripcion' value='<?php Gral::_echoTxt($fnd_caja->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_caja_cmb_fnd_cajero_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_cajero_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajero') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_cajero_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_cajero_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_cmb_fnd_cajero_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_caja_cmb_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(), Lang::_lang('Seleccione FndCajero', true)), $fnd_caja->getFndCajeroId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_FND_CAJERO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_caja_cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='fnd_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_cajero_id" <?php echo ($fnd_caja->getFndCajeroId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_caja_cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='fnd_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_caja_cmb_fnd_cajero_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_caja_cmb_fnd_caja_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('FndCajaTipoEstado') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_cmb_fnd_caja_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'fnd_caja_cmb_fnd_caja_tipo_estado_id', Gral::getCmbFiltro(FndCajaTipoEstado::getFndCajaTipoEstadosCmb(), Lang::_lang('Seleccione FndCajaTipoEstado', true)), $fnd_caja->getFndCajaTipoEstadoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_FND_CAJA_TIPO_ESTADO')){ ?>
		<img class="img_btn_editar" elemento_id="fnd_caja_cmb_fnd_caja_tipo_estado_id" clase_id="fnd_caja_tipo_estado" prefijo='fnd_caja_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_tipo_estado_id" <?php echo ($fnd_caja->getFndCajaTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="fnd_caja_cmb_fnd_caja_tipo_estado_id" clase_id="fnd_caja_tipo_estado" prefijo='fnd_caja_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_fnd_caja_cmb_fnd_caja_tipo_estado_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_tipo_estado_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_fecha_apertura" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_apertura' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Apertura') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_apertura', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_apertura', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_fecha_apertura" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_apertura')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_fecha_apertura' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_caja_txt_fecha_apertura' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaApertura()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_caja_txt_fecha_apertura' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_caja_txt_fecha_apertura', ifFormat: '%d/%m/%Y', button: 'cal_fnd_caja_txt_fecha_apertura'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_apertura')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_fecha_cierre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_cierre' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Cierre') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_cierre', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_cierre', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_fecha_cierre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_cierre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_fecha_cierre' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_caja_txt_fecha_cierre' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaCierre()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_caja_txt_fecha_cierre' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_caja_txt_fecha_cierre', ifFormat: '%d/%m/%Y', button: 'cal_fnd_caja_txt_fecha_cierre'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_cierre')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_fecha_rendicion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_rendicion' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Rendicion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_rendicion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_rendicion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_fecha_rendicion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_rendicion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_fecha_rendicion' type='text' class='textbox <?php echo $error_input_css ?> date' id='fnd_caja_txt_fecha_rendicion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaRendicion()), true) ?>' size='40' />
					<input type='button' id='cal_fnd_caja_txt_fecha_rendicion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'fnd_caja_txt_fecha_rendicion', ifFormat: '%d/%m/%Y', button: 'cal_fnd_caja_txt_fecha_rendicion'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_rendicion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_txt_codigo' value='<?php Gral::_echoTxt($fnd_caja->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_fnd_caja_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_caja_txa_observacion' rows='10' cols='50' id='fnd_caja_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_caja->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_caja->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_caja_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_caja'/>
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

