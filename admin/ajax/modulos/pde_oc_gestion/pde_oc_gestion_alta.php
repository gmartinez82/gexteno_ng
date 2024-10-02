<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$db_nombre_pagina = 'pde_oc_alta';

$pde_oc = new PdeOc();
$error = new Error();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_oc = new PdeOc();
	if(trim($hdn_id) != '') $pde_oc->setId($hdn_id, false);
	$pde_oc->setDescripcion(Gral::getVars(1, "pde_oc_txt_descripcion"));
	$pde_oc->setCodigo(Gral::getVars(1, "pde_oc_txt_codigo"));
	$pde_oc->setPdePedidoId(Gral::getVars(1, "pde_oc_cmb_pde_pedido_id", null));
	$pde_oc->setPdeCotizacionId(Gral::getVars(1, "pde_oc_cmb_pde_cotizacion_id", null));
	$pde_oc->setPrvProveedorId(Gral::getVars(1, "pde_oc_cmb_prv_proveedor_id", null));
	$pde_oc->setInsInsumoId(Gral::getVars(1, "pde_oc_cmb_ins_insumo_id", null));
	$pde_oc->setInsMarcaId(Gral::getVars(1, "pde_oc_cmb_ins_marca_id", null));
	$pde_oc->setPdeCentroRecepcionId(Gral::getVars(1, "pde_oc_cmb_pde_centro_recepcion_id", null));
	$pde_oc->setCantidad(Gral::getVars(1, "pde_oc_txt_cantidad", 0));
	$pde_oc->setFechaEntrega(Gral::getFechaToDb(Gral::getVars(1, "pde_oc_txt_fecha_entrega")));
	$pde_oc->setImporteUnidad(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_oc_txt_importe_unidad", 0)));
	$pde_oc->setImporteTotal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_oc_txt_importe_total", 0)));
	$pde_oc->setVencimiento(Gral::getFechaToDb(Gral::getVars(1, "pde_oc_txt_vencimiento")));
	$pde_oc->setObservacion(Gral::getVars(1, "pde_oc_txa_observacion"));
	$pde_oc->setOrden(Gral::getVars(1, "pde_oc_txt_orden", 0));
	$pde_oc->setEstado(Gral::getVars(1, "pde_oc__estado", 0));
	$pde_oc->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_oc_txt_creado")));
	$pde_oc->setCreadoPor(Gral::getVars(1, "pde_oc__creado_por", null));
	$pde_oc->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_oc_txt_modificado")));
	$pde_oc->setModificadoPor(Gral::getVars(1, "pde_oc__modificado_por", null));

	$pde_oc_estado = new PdeOc();
	if(trim($hdn_id) != ''){
		$pde_oc_estado->setId($hdn_id);
		$pde_oc->setEstado($pde_oc_estado->getEstado());
				
	}else{
		$pde_oc->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_oc->control();
			if(!$error->getExisteError()){
				$pde_oc->saveDesdeBackend();				
								
				//header('Location: pde_oc_alta.php?cs=1&id='.$pde_oc->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_oc->control();
			if(!$error->getExisteError()){
				$pde_oc->saveDesdeBackend();

				//header('Location: pde_oc_alta.php?cs=1');
				$pde_oc = new PdeOc();
			}
		break;
	}
	Gral::setSes('PdeOc_ULTIMO_INSERTADO', $pde_oc->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_oc_id = Gral::getVars(2, $prefijo.'cmb_pde_oc_id', 0);
	if($cmb_pde_oc_id != 0){
		$pde_oc = PdeOc::getOxId($cmb_pde_oc_id);
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_oc->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_oc/pde_oc_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_oc'>
        
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Descripcion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txt_descripcion">
				  
				  <input name='pde_oc_txt_descripcion' type='text' class='textbox ' id='pde_oc_txt_descripcion' value='<?php Gral::_echoTxt($pde_oc->getDescripcion(), true) ?>' size='50' />
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Codigo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txt_codigo">
				  
				  <input name='pde_oc_txt_codigo' type='text' class='textbox ' id='pde_oc_txt_codigo' value='<?php Gral::_echoTxt($pde_oc->getCodigo(), true) ?>' size='40' />
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PdePedido') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_pedido_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_pedido_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_cmb_pde_pedido_id">
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(),'Seleccione PdePedido'), $pde_oc->getPdePedidoId(), 'textbox')?>
         <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_pedido_id" <?php echo ($pde_oc->getPdePedidoId() == 'null') ? "style='display:none;'" : '' ?> />
		 <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_oc_cmb_pde_pedido_id"></div>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PdeCotizacion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_cotizacion_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_cotizacion_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_cmb_pde_cotizacion_id">
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_cotizacion_id', Gral::getCmbFiltro(PdeCotizacion::getPdeCotizacionsCmb(),'Seleccione PdeCotizacion'), $pde_oc->getPdeCotizacionId(), 'textbox')?>
         <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_cotizacion_id" clase_id="pde_cotizacion" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_cotizacion_id" <?php echo ($pde_oc->getPdeCotizacionId() == 'null') ? "style='display:none;'" : '' ?> />
		 <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_cotizacion_id" clase_id="pde_cotizacion" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_oc_cmb_pde_cotizacion_id"></div>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PrvProveedor') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_cmb_prv_proveedor_id">
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(),'Seleccione PrvProveedor'), $pde_oc->getPrvProveedorId(), 'textbox')?>
         <img class="img_btn_editar" elemento_id="pde_oc_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_oc->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />
		 <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_oc_cmb_prv_proveedor_id"></div>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('InsInsumo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_cmb_ins_insumo_id">
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(),'Seleccione InsInsumo'), $pde_oc->getInsInsumoId(), 'textbox')?>
         <img class="img_btn_editar" elemento_id="pde_oc_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pde_oc->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />
		 <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_oc_cmb_ins_insumo_id"></div>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('InsMarca') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_cmb_ins_marca_id">
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(),'Seleccione InsMarca'), $pde_oc->getInsMarcaId(), 'textbox')?>
         <img class="img_btn_editar" elemento_id="pde_oc_cmb_ins_marca_id" clase_id="ins_marca" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($pde_oc->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />
		 <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_ins_marca_id" clase_id="ins_marca" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_oc_cmb_ins_marca_id"></div>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PdeCentroRecepcion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_recepcion_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_recepcion_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_cmb_pde_centro_recepcion_id">
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(),'Seleccione PdeCentroRecepcion'), $pde_oc->getPdeCentroRecepcionId(), 'textbox')?>
         <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_recepcion_id" <?php echo ($pde_oc->getPdeCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />
		 <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_pde_oc_cmb_pde_centro_recepcion_id"></div>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Cantidad') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txt_cantidad">
				  
				  <input name='pde_oc_txt_cantidad' type='text' class='textbox spinner' id='pde_oc_txt_cantidad' value='<?php Gral::_echoTxt($pde_oc->getCantidad(), true) ?>' size='40' />
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Fecha Entrega') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_entrega', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_entrega', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txt_fecha_entrega">
				  
				  <input name='pde_oc_txt_fecha_entrega' type='text' class='textbox date' id='pde_oc_txt_fecha_entrega' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_oc->getFechaEntrega()), true) ?>' size='40' />
					<input type='button' id='cal_pde_oc_txt_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_oc_txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_pde_oc_txt_fecha_entrega'
						});
					</script>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Importe Unidad') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_unidad', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_unidad', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txt_importe_unidad">
				  
				  <input name='pde_oc_txt_importe_unidad' type='text' class='textbox moneda' id='pde_oc_txt_importe_unidad' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_oc->getImporteUnidad()), true) ?>' size='40' />
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Importe Total') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_total', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_total', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txt_importe_total">
				  
				  <input name='pde_oc_txt_importe_total' type='text' class='textbox moneda' id='pde_oc_txt_importe_total' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_oc->getImporteTotal()), true) ?>' size='40' />
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Vencimiento') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vencimiento', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vencimiento', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txt_vencimiento">
				  
				  <input name='pde_oc_txt_vencimiento' type='text' class='textbox date' id='pde_oc_txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_oc->getVencimiento()), true) ?>' size='40' />
					<input type='button' id='cal_pde_oc_txt_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_oc_txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_pde_oc_txt_vencimiento'
						});
					</script>
		
				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Observaciones') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='250' class='adm_carga_datos_datos' id="dato_pde_oc_txa_observacion">
				  
			<textarea name='pde_oc_txa_observacion' rows='10' cols='50' id='pde_oc_txa_observacion' class='textbox'><?php Gral::_echoTxt($pde_oc->getObservacion(), true) ?></textarea>
				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_oc->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_oc_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_oc'/>
		  <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>
		  

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

