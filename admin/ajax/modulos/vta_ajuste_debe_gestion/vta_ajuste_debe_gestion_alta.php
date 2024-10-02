<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_ajuste_debe';
$db_nombre_pagina = 'vta_ajuste_debe_alta';

$vta_ajuste_debe = new VtaAjusteDebe();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_ajuste_debe = new VtaAjusteDebe();
	if(trim($hdn_id) != '') $vta_ajuste_debe->setId($hdn_id, false);
	$vta_ajuste_debe->setDescripcion(Gral::getVars(1, "vta_ajuste_debe_txt_descripcion"));
	$vta_ajuste_debe->setCliClienteId(Gral::getVars(1, "vta_ajuste_debe_cmb_cli_cliente_id", null));
	$vta_ajuste_debe->setVtaAjusteDebeTipoEstadoId(Gral::getVars(1, "vta_ajuste_debe_cmb_vta_ajuste_debe_tipo_estado_id", null));
	$vta_ajuste_debe->setVtaTipoAjusteDebeId(Gral::getVars(1, "vta_ajuste_debe_cmb_vta_tipo_ajuste_debe_id", null));
	$vta_ajuste_debe->setGralCondicionIvaId(Gral::getVars(1, "vta_ajuste_debe_cmb_gral_condicion_iva_id", null));
	$vta_ajuste_debe->setGralTipoPersoneriaId(Gral::getVars(1, "vta_ajuste_debe_cmb_gral_tipo_personeria_id", null));
	$vta_ajuste_debe->setNumeroAjusteDebe(Gral::getVars(1, "vta_ajuste_debe_txt_numero_ajuste_debe"));
	$vta_ajuste_debe->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "vta_ajuste_debe_txt_fecha_emision")));
	$vta_ajuste_debe->setPersonaDescripcion(Gral::getVars(1, "vta_ajuste_debe_txt_persona_descripcion"));
	$vta_ajuste_debe->setRazonSocial(Gral::getVars(1, "vta_ajuste_debe_txt_razon_social"));
	$vta_ajuste_debe->setDomicilioLegal(Gral::getVars(1, "vta_ajuste_debe_txt_domicilio_legal"));
	$vta_ajuste_debe->setCuit(Gral::getVars(1, "vta_ajuste_debe_txt_cuit"));
	$vta_ajuste_debe->setCodigo(Gral::getVars(1, "vta_ajuste_debe_txt_codigo"));
	$vta_ajuste_debe->setObservacion(Gral::getVars(1, "vta_ajuste_debe_txa_observacion"));
	$vta_ajuste_debe->setOrden(Gral::getVars(1, "vta_ajuste_debe_txt_orden", 0));
	$vta_ajuste_debe->setEstado(Gral::getVars(1, "vta_ajuste_debe_cmb_estado", 0));
	$vta_ajuste_debe->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_ajuste_debe_txt_creado")));
	$vta_ajuste_debe->setCreadoPor(Gral::getVars(1, "vta_ajuste_debe__creado_por", 0));
	$vta_ajuste_debe->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_ajuste_debe_txt_modificado")));
	$vta_ajuste_debe->setModificadoPor(Gral::getVars(1, "vta_ajuste_debe__modificado_por", 0));

	$vta_ajuste_debe_estado = new VtaAjusteDebe();
	if(trim($hdn_id) != ''){
		$vta_ajuste_debe_estado->setId($hdn_id);
		$vta_ajuste_debe->setEstado($vta_ajuste_debe_estado->getEstado());
				
	}else{
		$vta_ajuste_debe->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_ajuste_debe->control();
			if(!$error->getExisteError()){
				$vta_ajuste_debe->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_ajuste_debe_alta.php?cs=1&id='.$vta_ajuste_debe->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_ajuste_debe->control();
			if(!$error->getExisteError()){
				$vta_ajuste_debe->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_ajuste_debe_alta.php?cs=1');
				$vta_ajuste_debe = new VtaAjusteDebe();
			}
		break;
	}
	Gral::setSes('VtaAjusteDebe_ULTIMO_INSERTADO', $vta_ajuste_debe->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_ajuste_debe_id = Gral::getVars(2, $prefijo.'cmb_vta_ajuste_debe_id', 0);
	if($cmb_vta_ajuste_debe_id != 0){
		$vta_ajuste_debe = VtaAjusteDebe::getOxId($cmb_vta_ajuste_debe_id);
	}else{
	
	$vta_ajuste_debe->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_ajuste_debe->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$vta_ajuste_debe->setVtaAjusteDebeTipoEstadoId(Gral::getVars(2, "vta_ajuste_debe_tipo_estado_id", 'null'));
	$vta_ajuste_debe->setVtaTipoAjusteDebeId(Gral::getVars(2, "vta_tipo_ajuste_debe_id", 'null'));
	$vta_ajuste_debe->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
	$vta_ajuste_debe->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
	$vta_ajuste_debe->setNumeroAjusteDebe(Gral::getVars(2, "numero_ajuste_debe", ''));
	$vta_ajuste_debe->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
	$vta_ajuste_debe->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
	$vta_ajuste_debe->setRazonSocial(Gral::getVars(2, "razon_social", ''));
	$vta_ajuste_debe->setDomicilioLegal(Gral::getVars(2, "domicilio_legal", ''));
	$vta_ajuste_debe->setCuit(Gral::getVars(2, "cuit", ''));
	$vta_ajuste_debe->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_ajuste_debe->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_ajuste_debe->setOrden(Gral::getVars(2, "orden", 0));
	$vta_ajuste_debe->setEstado(Gral::getVars(2, "estado", 0));
	$vta_ajuste_debe->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_ajuste_debe->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_ajuste_debe->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_ajuste_debe->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_ajuste_debe->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_ajuste_debe/vta_ajuste_debe_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_ajuste_debe'>
        
				<tr>
				  <td  id="label_vta_ajuste_debe_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_ajuste_debe_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_ajuste_debe_txt_descripcion' value='<?php Gral::_echoTxt($vta_ajuste_debe->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_ajuste_debe_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), Lang::_lang('Seleccione CliCliente', true)), $vta_ajuste_debe->getCliClienteId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
		<img class="img_btn_editar" elemento_id="vta_ajuste_debe_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_ajuste_debe_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($vta_ajuste_debe->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_ajuste_debe_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_ajuste_debe_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_ajuste_debe_cmb_cli_cliente_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_cmb_vta_ajuste_debe_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_ajuste_debe_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('VtaAjusteDebeTipoEstado') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_ajuste_debe_tipo_estado_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_ajuste_debe_tipo_estado_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_cmb_vta_ajuste_debe_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_ajuste_debe_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_ajuste_debe_cmb_vta_ajuste_debe_tipo_estado_id', Gral::getCmbFiltro(VtaAjusteDebeTipoEstado::getVtaAjusteDebeTipoEstadosCmb(), Lang::_lang('Seleccione VtaAjusteDebeTipoEstado', true)), $vta_ajuste_debe->getVtaAjusteDebeTipoEstadoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_VTA_FACTURA_TIPO_ESTADO')){ ?>
		<img class="img_btn_editar" elemento_id="vta_ajuste_debe_cmb_vta_ajuste_debe_tipo_estado_id" clase_id="vta_ajuste_debe_tipo_estado" prefijo='vta_ajuste_debe_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_ajuste_debe_tipo_estado_id" <?php echo ($vta_ajuste_debe->getVtaAjusteDebeTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_ajuste_debe_cmb_vta_ajuste_debe_tipo_estado_id" clase_id="vta_ajuste_debe_tipo_estado" prefijo='vta_ajuste_debe_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_ajuste_debe_cmb_vta_ajuste_debe_tipo_estado_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_ajuste_debe_tipo_estado_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_cmb_vta_tipo_ajuste_debe_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_tipo_ajuste_debe_id' ?>" >
				  
                                        <?php Lang::_lang('VtaTipoAjusteDebe') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_tipo_ajuste_debe_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_tipo_ajuste_debe_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_cmb_vta_tipo_ajuste_debe_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_tipo_ajuste_debe_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_ajuste_debe_cmb_vta_tipo_ajuste_debe_id', Gral::getCmbFiltro(VtaTipoAjusteDebe::getVtaTipoAjusteDebesCmb(), Lang::_lang('Seleccione VtaTipoAjusteDebe', true)), $vta_ajuste_debe->getVtaTipoAjusteDebeId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_VTA_TIPO_FACTURA')){ ?>
		<img class="img_btn_editar" elemento_id="vta_ajuste_debe_cmb_vta_tipo_ajuste_debe_id" clase_id="vta_tipo_ajuste_debe" prefijo='vta_ajuste_debe_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_tipo_ajuste_debe_id" <?php echo ($vta_ajuste_debe->getVtaTipoAjusteDebeId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_ajuste_debe_cmb_vta_tipo_ajuste_debe_id" clase_id="vta_tipo_ajuste_debe" prefijo='vta_ajuste_debe_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_ajuste_debe_cmb_vta_tipo_ajuste_debe_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_tipo_ajuste_debe_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_condicion_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralCondicionIva') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_condicion_iva_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_condicion_iva_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_ajuste_debe_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), Lang::_lang('Seleccione GralCondicionIva', true)), $vta_ajuste_debe->getGralCondicionIvaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')){ ?>
		<img class="img_btn_editar" elemento_id="vta_ajuste_debe_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='vta_ajuste_debe_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($vta_ajuste_debe->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_ajuste_debe_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='vta_ajuste_debe_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_ajuste_debe_cmb_gral_condicion_iva_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_cmb_gral_tipo_personeria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_personeria_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoPersoneria') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_personeria_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_personeria_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_cmb_gral_tipo_personeria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_ajuste_debe_cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), Lang::_lang('Seleccione GralTipoPersoneria', true)), $vta_ajuste_debe->getGralTipoPersoneriaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')){ ?>
		<img class="img_btn_editar" elemento_id="vta_ajuste_debe_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='vta_ajuste_debe_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($vta_ajuste_debe->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_ajuste_debe_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='vta_ajuste_debe_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_ajuste_debe_cmb_gral_tipo_personeria_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_txt_numero_ajuste_debe" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_ajuste_debe' ?>" >
				  
                                        <?php Lang::_lang('Numero de AjusteDebe') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_numero_ajuste_debe', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_numero_ajuste_debe', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txt_numero_ajuste_debe" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_ajuste_debe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_ajuste_debe_txt_numero_ajuste_debe' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_ajuste_debe_txt_numero_ajuste_debe' value='<?php Gral::_echoTxt($vta_ajuste_debe->getNumeroAjusteDebe(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_ajuste_debe')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Emision') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_emision', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_emision', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_ajuste_debe_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_ajuste_debe_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_ajuste_debe->getFechaEmision()), true) ?>' size='40' />
					<input type='button' id='cal_vta_ajuste_debe_txt_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_ajuste_debe_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_vta_ajuste_debe_txt_fecha_emision'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_txt_razon_social" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_razon_social' ?>" >
				  
                                        <?php Lang::_lang('Razon Social') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_razon_social', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_razon_social', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txt_razon_social" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('razon_social')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_ajuste_debe_txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_ajuste_debe_txt_razon_social' value='<?php Gral::_echoTxt($vta_ajuste_debe->getRazonSocial(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('razon_social')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_txt_domicilio_legal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio_legal' ?>" >
				  
                                        <?php Lang::_lang('Domicilio Legal') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_domicilio_legal', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_domicilio_legal', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txt_domicilio_legal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio_legal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_ajuste_debe_txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_ajuste_debe_txt_domicilio_legal' value='<?php Gral::_echoTxt($vta_ajuste_debe->getDomicilioLegal(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_legal')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuit' ?>" >
				  
                                        <?php Lang::_lang('CUIT') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cuit', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cuit', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txt_cuit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_ajuste_debe_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_ajuste_debe_txt_cuit' value='<?php Gral::_echoTxt($vta_ajuste_debe->getCuit(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_ajuste_debe_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_ajuste_debe_txt_codigo' value='<?php Gral::_echoTxt($vta_ajuste_debe->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_ajuste_debe_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_ajuste_debe_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_ajuste_debe_txa_observacion' rows='10' cols='50' id='vta_ajuste_debe_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_ajuste_debe->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_ajuste_debe->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_ajuste_debe_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_ajuste_debe'/>
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

