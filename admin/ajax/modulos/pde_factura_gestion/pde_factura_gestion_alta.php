<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_factura';
$db_nombre_pagina = 'pde_factura_alta';

$pde_factura = new PdeFactura();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_factura = new PdeFactura();
	if(trim($hdn_id) != '') $pde_factura->setId($hdn_id, false);
	$pde_factura->setDescripcion(Gral::getVars(1, "pde_factura_txt_descripcion"));
	$pde_factura->setPrvProveedorId(Gral::getVars(1, "pde_factura_cmb_prv_proveedor_id", null));
	$pde_factura->setPdeFacturaTipoEstadoId(Gral::getVars(1, "pde_factura_cmb_pde_factura_tipo_estado_id", null));
	$pde_factura->setPdeTipoFacturaId(Gral::getVars(1, "pde_factura_cmb_pde_tipo_factura_id", null));
	$pde_factura->setGralCondicionIvaId(Gral::getVars(1, "pde_factura_cmb_gral_condicion_iva_id", null));
	$pde_factura->setGralTipoPersoneriaId(Gral::getVars(1, "pde_factura_cmb_gral_tipo_personeria_id", null));
	$pde_factura->setNumeroFactura(Gral::getVars(1, "pde_factura_txt_numero_factura"));
	$pde_factura->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "pde_factura_txt_fecha_emision")));
	$pde_factura->setPersonaDescripcion(Gral::getVars(1, "pde_factura_txt_persona_descripcion"));
	$pde_factura->setRazonSocial(Gral::getVars(1, "pde_factura_txt_razon_social"));
	$pde_factura->setDomicilioLegal(Gral::getVars(1, "pde_factura_txt_domicilio_legal"));
	$pde_factura->setCuit(Gral::getVars(1, "pde_factura_txt_cuit"));
	$pde_factura->setCodigo(Gral::getVars(1, "pde_factura_txt_codigo"));
	$pde_factura->setObservacion(Gral::getVars(1, "pde_factura_txa_observacion"));
	$pde_factura->setOrden(Gral::getVars(1, "pde_factura_txt_orden", 0));
	$pde_factura->setEstado(Gral::getVars(1, "pde_factura_cmb_estado", 0));
	$pde_factura->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_factura_txt_creado")));
	$pde_factura->setCreadoPor(Gral::getVars(1, "pde_factura__creado_por", 0));
	$pde_factura->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_factura_txt_modificado")));
	$pde_factura->setModificadoPor(Gral::getVars(1, "pde_factura__modificado_por", 0));

	$pde_factura_estado = new PdeFactura();
	if(trim($hdn_id) != ''){
		$pde_factura_estado->setId($hdn_id);
		$pde_factura->setEstado($pde_factura_estado->getEstado());
				
	}else{
		$pde_factura->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_factura->control();
			if(!$error->getExisteError()){
				$pde_factura->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_factura_alta.php?cs=1&id='.$pde_factura->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_factura->control();
			if(!$error->getExisteError()){
				$pde_factura->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_factura_alta.php?cs=1');
				$pde_factura = new PdeFactura();
			}
		break;
	}
	Gral::setSes('PdeFactura_ULTIMO_INSERTADO', $pde_factura->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_factura_id = Gral::getVars(2, $prefijo.'cmb_pde_factura_id', 0);
	if($cmb_pde_factura_id != 0){
		$pde_factura = PdeFactura::getOxId($cmb_pde_factura_id);
	}else{
	
	$pde_factura->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_factura->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_factura->setPdeFacturaTipoEstadoId(Gral::getVars(2, "pde_factura_tipo_estado_id", 'null'));
	$pde_factura->setPdeTipoFacturaId(Gral::getVars(2, "pde_tipo_factura_id", 'null'));
	$pde_factura->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
	$pde_factura->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
	$pde_factura->setNumeroFactura(Gral::getVars(2, "numero_factura", ''));
	$pde_factura->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
	$pde_factura->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
	$pde_factura->setRazonSocial(Gral::getVars(2, "razon_social", ''));
	$pde_factura->setDomicilioLegal(Gral::getVars(2, "domicilio_legal", ''));
	$pde_factura->setCuit(Gral::getVars(2, "cuit", ''));
	$pde_factura->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_factura->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_factura->setOrden(Gral::getVars(2, "orden", 0));
	$pde_factura->setEstado(Gral::getVars(2, "estado", 0));
	$pde_factura->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_factura->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_factura->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_factura->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_factura->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_factura/pde_factura_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_factura'>
        
				<tr>
				  <td  id="label_pde_factura_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_factura_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_factura_txt_descripcion' value='<?php Gral::_echoTxt($pde_factura->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_factura_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), Lang::_lang('Seleccione PrvProveedor', true)), $pde_factura->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
		<img class="img_btn_editar" elemento_id="pde_factura_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_factura->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_factura_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_factura_cmb_prv_proveedor_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_cmb_pde_factura_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_factura_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdeFacturaTipoEstado') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_factura_tipo_estado_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_factura_tipo_estado_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_cmb_pde_factura_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_factura_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_factura_cmb_pde_factura_tipo_estado_id', Gral::getCmbFiltro(PdeFacturaTipoEstado::getPdeFacturaTipoEstadosCmb(), Lang::_lang('Seleccione PdeFacturaTipoEstado', true)), $pde_factura->getPdeFacturaTipoEstadoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_VTA_FACTURA_TIPO_ESTADO')){ ?>
		<img class="img_btn_editar" elemento_id="pde_factura_cmb_pde_factura_tipo_estado_id" clase_id="pde_factura_tipo_estado" prefijo='pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_factura_tipo_estado_id" <?php echo ($pde_factura->getPdeFacturaTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_factura_cmb_pde_factura_tipo_estado_id" clase_id="pde_factura_tipo_estado" prefijo='pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_factura_cmb_pde_factura_tipo_estado_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_factura_tipo_estado_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_cmb_pde_tipo_factura_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_factura_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoFactura') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_factura_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_factura_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_cmb_pde_tipo_factura_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_factura_cmb_pde_tipo_factura_id', Gral::getCmbFiltro(PdeTipoFactura::getPdeTipoFacturasCmb(), Lang::_lang('Seleccione PdeTipoFactura', true)), $pde_factura->getPdeTipoFacturaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_VTA_TIPO_FACTURA')){ ?>
		<img class="img_btn_editar" elemento_id="pde_factura_cmb_pde_tipo_factura_id" clase_id="pde_tipo_factura" prefijo='pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_factura_id" <?php echo ($pde_factura->getPdeTipoFacturaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_factura_cmb_pde_tipo_factura_id" clase_id="pde_tipo_factura" prefijo='pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_factura_cmb_pde_tipo_factura_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_factura_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_condicion_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralCondicionIva') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_condicion_iva_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_condicion_iva_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_factura_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), Lang::_lang('Seleccione GralCondicionIva', true)), $pde_factura->getGralCondicionIvaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')){ ?>
		<img class="img_btn_editar" elemento_id="pde_factura_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($pde_factura->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_factura_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_factura_cmb_gral_condicion_iva_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_cmb_gral_tipo_personeria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_personeria_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoPersoneria') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_personeria_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_personeria_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_cmb_gral_tipo_personeria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_factura_cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), Lang::_lang('Seleccione GralTipoPersoneria', true)), $pde_factura->getGralTipoPersoneriaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')){ ?>
		<img class="img_btn_editar" elemento_id="pde_factura_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($pde_factura->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_factura_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_factura_cmb_gral_tipo_personeria_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_txt_numero_factura" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_factura' ?>" >
				  
                                        <?php Lang::_lang('Numero de Factura') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_numero_factura', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_numero_factura', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txt_numero_factura" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_factura')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_factura_txt_numero_factura' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_factura_txt_numero_factura' value='<?php Gral::_echoTxt($pde_factura->getNumeroFactura(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_factura')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Emision') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_emision', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_emision', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_factura_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_factura_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_factura->getFechaEmision()), true) ?>' size='40' />
					<input type='button' id='cal_pde_factura_txt_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_factura_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_pde_factura_txt_fecha_emision'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_txt_razon_social" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_razon_social' ?>" >
				  
                                        <?php Lang::_lang('Razon Social') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_razon_social', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_razon_social', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txt_razon_social" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('razon_social')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_factura_txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_factura_txt_razon_social' value='<?php Gral::_echoTxt($pde_factura->getRazonSocial(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('razon_social')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_txt_domicilio_legal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio_legal' ?>" >
				  
                                        <?php Lang::_lang('Domicilio Legal') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_domicilio_legal', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_domicilio_legal', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txt_domicilio_legal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio_legal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_factura_txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_factura_txt_domicilio_legal' value='<?php Gral::_echoTxt($pde_factura->getDomicilioLegal(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_legal')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuit' ?>" >
				  
                                        <?php Lang::_lang('CUIT') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cuit', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cuit', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txt_cuit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_factura_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_factura_txt_cuit' value='<?php Gral::_echoTxt($pde_factura->getCuit(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_factura_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_factura_txt_codigo' value='<?php Gral::_echoTxt($pde_factura->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_pde_factura_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_pde_factura_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_factura_txa_observacion' rows='10' cols='50' id='pde_factura_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_factura->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_factura->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_factura_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_factura'/>
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

