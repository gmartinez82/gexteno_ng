<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_remito';
$db_nombre_pagina = 'vta_remito_alta';

$vta_remito = new VtaRemito();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_remito = new VtaRemito();
	if(trim($hdn_id) != '') $vta_remito->setId($hdn_id, false);
	$vta_remito->setDescripcion(Gral::getVars(1, "vta_remito_txt_descripcion"));
	$vta_remito->setCliClienteId(Gral::getVars(1, "vta_remito_cmb_cli_cliente_id", null));
	$vta_remito->setVtaRemitoTipoEstadoId(Gral::getVars(1, "vta_remito_cmb_vta_remito_tipo_estado_id", null));
	$vta_remito->setFecha(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_txt_fecha")));
	$vta_remito->setCodigo(Gral::getVars(1, "vta_remito_txt_codigo"));
	$vta_remito->setObservacion(Gral::getVars(1, "vta_remito_txa_observacion"));
	$vta_remito->setOrden(Gral::getVars(1, "vta_remito_txt_orden", 0));
	$vta_remito->setEstado(Gral::getVars(1, "vta_remito_cmb_estado", 0));
	$vta_remito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_txt_creado")));
	$vta_remito->setCreadoPor(Gral::getVars(1, "vta_remito__creado_por", 0));
	$vta_remito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_txt_modificado")));
	$vta_remito->setModificadoPor(Gral::getVars(1, "vta_remito__modificado_por", 0));

	$vta_remito_estado = new VtaRemito();
	if(trim($hdn_id) != ''){
		$vta_remito_estado->setId($hdn_id);
		$vta_remito->setEstado($vta_remito_estado->getEstado());
				
	}else{
		$vta_remito->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_remito->control();
			if(!$error->getExisteError()){
				$vta_remito->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_remito_alta.php?cs=1&id='.$vta_remito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_remito->control();
			if(!$error->getExisteError()){
				$vta_remito->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_remito_alta.php?cs=1');
				$vta_remito = new VtaRemito();
			}
		break;
	}
	Gral::setSes('VtaRemito_ULTIMO_INSERTADO', $vta_remito->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_remito_id = Gral::getVars(2, $prefijo.'cmb_vta_remito_id', 0);
	if($cmb_vta_remito_id != 0){
		$vta_remito = VtaRemito::getOxId($cmb_vta_remito_id);
	}else{
	
	$vta_remito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_remito->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$vta_remito->setVtaRemitoTipoEstadoId(Gral::getVars(2, "vta_remito_tipo_estado_id", 'null'));
	$vta_remito->setFecha(Gral::getVars(2, "fecha", date('Y-m-d H:m:s')));
	$vta_remito->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_remito->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_remito->setOrden(Gral::getVars(2, "orden", 0));
	$vta_remito->setEstado(Gral::getVars(2, "estado", 0));
	$vta_remito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_remito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_remito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_remito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_remito->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_remito/vta_remito_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_remito'>
        
				<tr>
				  <td  id="label_vta_remito_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_remito_txt_descripcion' value='<?php Gral::_echoTxt($vta_remito->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), Lang::_lang('Seleccione CliCliente', true)), $vta_remito->getCliClienteId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
		<img class="img_btn_editar" elemento_id="vta_remito_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($vta_remito->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_remito_cmb_cli_cliente_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_remito_cmb_vta_remito_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_remito_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRemitoTipoEstado') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_remito_tipo_estado_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_remito_tipo_estado_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_remito_cmb_vta_remito_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_remito_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_cmb_vta_remito_tipo_estado_id', Gral::getCmbFiltro(VtaRemitoTipoEstado::getVtaRemitoTipoEstadosCmb(), Lang::_lang('Seleccione VtaRemitoTipoEstado', true)), $vta_remito->getVtaRemitoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA_CMB_EDIT_VTA_REMITO_TIPO_ESTADO')){ ?>
		<img class="img_btn_editar" elemento_id="vta_remito_cmb_vta_remito_tipo_estado_id" clase_id="vta_remito_tipo_estado" prefijo='vta_remito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_remito_tipo_estado_id" <?php echo ($vta_remito->getVtaRemitoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_remito_cmb_vta_remito_tipo_estado_id" clase_id="vta_remito_tipo_estado" prefijo='vta_remito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_remito_cmb_vta_remito_tipo_estado_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_remito_tipo_estado_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_remito_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='vta_remito_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($vta_remito->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_vta_remito_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_remito_txt_fecha', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_vta_remito_txt_fecha'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_remito_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_remito_txt_codigo' value='<?php Gral::_echoTxt($vta_remito->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_remito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_remito_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_remito_txa_observacion' rows='10' cols='50' id='vta_remito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_remito->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_remito->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_remito_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_remito'/>
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

