<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_recepcion';
$db_nombre_pagina = 'pde_recepcion_alta';

$pde_recepcion = new PdeRecepcion();
$error = new Error();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recepcion = new PdeRecepcion();
	if(trim($hdn_id) != '') $pde_recepcion->setId($hdn_id, false);
	$pde_recepcion->setDescripcion(Gral::getVars(1, "pde_recepcion_txt_descripcion"));
	$pde_recepcion->setCodigo(Gral::getVars(1, "pde_recepcion_txt_codigo"));
	$pde_recepcion->setNroComprobante(Gral::getVars(1, "pde_recepcion_txt_nro_comprobante"));
	$pde_recepcion->setPdeTipoRecepcionId(Gral::getVars(1, "pde_recepcion_cmb_pde_tipo_recepcion_id", null));
	$pde_recepcion->setPdeCentroRecepcionId(Gral::getVars(1, "pde_recepcion_cmb_pde_centro_recepcion_id", null));
	$pde_recepcion->setPrvProveedorId(Gral::getVars(1, "pde_recepcion_cmb_prv_proveedor_id", null));
	$pde_recepcion->setPdePedidoId(Gral::getVars(1, "pde_recepcion_cmb_pde_pedido_id", null));
	$pde_recepcion->setPdeOcId(Gral::getVars(1, "pde_recepcion_cmb_pde_oc_id", null));
	$pde_recepcion->setInsMarcaId(Gral::getVars(1, "pde_recepcion_cmb_ins_marca_id", null));
	$pde_recepcion->setInsInsumoId(Gral::getVars(1, "pde_recepcion_cmb_ins_insumo_id", null));
	$pde_recepcion->setCantidad(Gral::getVars(1, "pde_recepcion_txt_cantidad", 0));
	$pde_recepcion->setFechaEntrega(Gral::getFechaToDb(Gral::getVars(1, "pde_recepcion_txt_fecha_entrega")));
	$pde_recepcion->setImporteUnidad(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_recepcion_txt_importe_unidad", 0)));
	$pde_recepcion->setImporteTotal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_recepcion_txt_importe_total", 0)));
	$pde_recepcion->setVencimiento(Gral::getFechaToDb(Gral::getVars(1, "pde_recepcion_txt_vencimiento")));
	$pde_recepcion->setObservacion(Gral::getVars(1, "pde_recepcion_txa_observacion"));
	$pde_recepcion->setOrden(Gral::getVars(1, "pde_recepcion_txt_orden", 0));
	$pde_recepcion->setEstado(Gral::getVars(1, "pde_recepcion__estado", 0));
	$pde_recepcion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_txt_creado")));
	$pde_recepcion->setCreadoPor(Gral::getVars(1, "pde_recepcion__creado_por", null));
	$pde_recepcion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_txt_modificado")));
	$pde_recepcion->setModificadoPor(Gral::getVars(1, "pde_recepcion__modificado_por", null));

	$pde_recepcion_estado = new PdeRecepcion();
	if(trim($hdn_id) != ''){
		$pde_recepcion_estado->setId($hdn_id);
		$pde_recepcion->setEstado($pde_recepcion_estado->getEstado());
				
	}else{
		$pde_recepcion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recepcion->control();
			if(!$error->getExisteError()){
				$pde_recepcion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recepcion_alta.php?cs=1&id='.$pde_recepcion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recepcion->control();
			if(!$error->getExisteError()){
				$pde_recepcion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recepcion_alta.php?cs=1');
				$pde_recepcion = new PdeRecepcion();
			}
		break;
	}
	Gral::setSes('PdeRecepcion_ULTIMO_INSERTADO', $pde_recepcion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recepcion_id = Gral::getVars(2, $prefijo.'cmb_pde_recepcion_id', 0);
	if($cmb_pde_recepcion_id != 0){
		$pde_recepcion = PdeRecepcion::getOxId($cmb_pde_recepcion_id);
	}else{
	
	$pde_recepcion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recepcion->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recepcion->setNroComprobante(Gral::getVars(2, "nro_comprobante", ''));
	$pde_recepcion->setPdeTipoRecepcionId(Gral::getVars(2, "pde_tipo_recepcion_id", 'null'));
	$pde_recepcion->setPdeCentroRecepcionId(Gral::getVars(2, "pde_centro_recepcion_id", 'null'));
	$pde_recepcion->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_recepcion->setPdePedidoId(Gral::getVars(2, "pde_pedido_id", 'null'));
	$pde_recepcion->setPdeOcId(Gral::getVars(2, "pde_oc_id", 'null'));
	$pde_recepcion->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
	$pde_recepcion->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$pde_recepcion->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_recepcion->setFechaEntrega(Gral::getVars(2, "fecha_entrega", date('Y-m-d')));
	$pde_recepcion->setImporteUnidad(Gral::getVars(2, "importe_unidad", 0));
	$pde_recepcion->setImporteTotal(Gral::getVars(2, "importe_total", 0));
	$pde_recepcion->setVencimiento(Gral::getVars(2, "vencimiento", date('Y-m-d')));
	$pde_recepcion->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recepcion->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recepcion->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recepcion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recepcion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recepcion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recepcion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recepcion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recepcion/pde_recepcion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recepcion'>
        
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Descripcion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_descripcion">

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_txt_descripcion' value='<?php Gral::_echoTxt($pde_recepcion->getDescripcion(), true) ?>' size='50' />
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
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_codigo">

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_txt_codigo' value='<?php Gral::_echoTxt($pde_recepcion->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Nro Comprobante') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nro_comprobante', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nro_comprobante', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_nro_comprobante">

					<?php $error_input_css = ($error->getErrorXIndice('nro_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_nro_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_txt_nro_comprobante' value='<?php Gral::_echoTxt($pde_recepcion->getNroComprobante(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nro_comprobante')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PdeTipoRecepcion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_recepcion_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_recepcion_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_cmb_pde_tipo_recepcion_id">

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_cmb_pde_tipo_recepcion_id', Gral::getCmbFiltro(PdeTipoRecepcion::getPdeTipoRecepcionsCmb(), Lang::_lang('Seleccione PdeTipoRecepcion', true)), $pde_recepcion->getPdeTipoRecepcionId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA_CMB_EDIT_PDE_TIPO_RECEPCION')){ ?>
		<img class="img_btn_editar" elemento_id="pde_recepcion_cmb_pde_tipo_recepcion_id" clase_id="pde_tipo_recepcion" prefijo='pde_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_recepcion_id" <?php echo ($pde_recepcion->getPdeTipoRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_cmb_pde_tipo_recepcion_id" clase_id="pde_tipo_recepcion" prefijo='pde_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_recepcion_cmb_pde_tipo_recepcion_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_recepcion_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PdeCentroRecepcion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_recepcion_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_recepcion_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_cmb_pde_centro_recepcion_id">

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), Lang::_lang('Seleccione PdeCentroRecepcion', true)), $pde_recepcion->getPdeCentroRecepcionId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA_CMB_EDIT_PDE_CENTRO_RECEPCION')){ ?>
		<img class="img_btn_editar" elemento_id="pde_recepcion_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_recepcion_id" <?php echo ($pde_recepcion->getPdeCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_recepcion_cmb_pde_centro_recepcion_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PrvProveedor') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_cmb_prv_proveedor_id">

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), Lang::_lang('Seleccione PrvProveedor', true)), $pde_recepcion->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
		<img class="img_btn_editar" elemento_id="pde_recepcion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_recepcion->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_recepcion_cmb_prv_proveedor_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PdePedido') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_pedido_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_pedido_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_cmb_pde_pedido_id">

					<?php $error_input_css = ($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_cmb_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), Lang::_lang('Seleccione PdePedido', true)), $pde_recepcion->getPdePedidoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA_CMB_EDIT_PDE_PEDIDO')){ ?>
		<img class="img_btn_editar" elemento_id="pde_recepcion_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_pedido_id" <?php echo ($pde_recepcion->getPdePedidoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_recepcion_cmb_pde_pedido_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PdeOc') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_oc_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_oc_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_cmb_pde_oc_id">

					<?php $error_input_css = ($error->getErrorXIndice('pde_oc_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_cmb_pde_oc_id', Gral::getCmbFiltro(PdeOc::getPdeOcsCmb(), Lang::_lang('Seleccione PdeOc', true)), $pde_recepcion->getPdeOcId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA_CMB_EDIT_PDE_OC')){ ?>
		<img class="img_btn_editar" elemento_id="pde_recepcion_cmb_pde_oc_id" clase_id="pde_oc" prefijo='pde_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_id" <?php echo ($pde_recepcion->getPdeOcId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_cmb_pde_oc_id" clase_id="pde_oc" prefijo='pde_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_recepcion_cmb_pde_oc_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('InsMarca') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_cmb_ins_marca_id">

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), Lang::_lang('Seleccione InsMarca', true)), $pde_recepcion->getInsMarcaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA_CMB_EDIT_INS_MARCA')){ ?>
		<img class="img_btn_editar" elemento_id="pde_recepcion_cmb_ins_marca_id" clase_id="ins_marca" prefijo='pde_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($pde_recepcion->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_cmb_ins_marca_id" clase_id="ins_marca" prefijo='pde_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_recepcion_cmb_ins_marca_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('InsInsumo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_cmb_ins_insumo_id">

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), Lang::_lang('Seleccione InsInsumo', true)), $pde_recepcion->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
		<img class="img_btn_editar" elemento_id="pde_recepcion_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pde_recepcion->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_recepcion_cmb_ins_insumo_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Cantidad') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_cantidad">

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_recepcion_txt_cantidad' value='<?php Gral::_echoTxt($pde_recepcion->getCantidad(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Fecha Entrega') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_entrega', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_entrega', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_fecha_entrega">

					<?php $error_input_css = ($error->getErrorXIndice('fecha_entrega')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_fecha_entrega' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_recepcion_txt_fecha_entrega' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_recepcion->getFechaEntrega()), true) ?>' size='40' />
					<input type='button' id='cal_pde_recepcion_txt_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_recepcion_txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_pde_recepcion_txt_fecha_entrega'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_entrega')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Importe Unidad') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_unidad', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_unidad', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_importe_unidad">

					<?php $error_input_css = ($error->getErrorXIndice('importe_unidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_importe_unidad' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='pde_recepcion_txt_importe_unidad' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_recepcion->getImporteUnidad()), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_unidad')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Importe Total') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_total', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_total', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_importe_total">

					<?php $error_input_css = ($error->getErrorXIndice('importe_total')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_importe_total' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='pde_recepcion_txt_importe_total' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_recepcion->getImporteTotal()), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_total')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Vencimiento') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vencimiento', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vencimiento', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txt_vencimiento">

					<?php $error_input_css = ($error->getErrorXIndice('vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_txt_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_recepcion_txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_recepcion->getVencimiento()), true) ?>' size='40' />
					<input type='button' id='cal_pde_recepcion_txt_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_recepcion_txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_pde_recepcion_txt_vencimiento'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vencimiento')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Observaciones') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_pde_recepcion_txa_observacion">

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recepcion_txa_observacion' rows='10' cols='50' id='pde_recepcion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recepcion->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recepcion->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recepcion_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recepcion'/>
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

