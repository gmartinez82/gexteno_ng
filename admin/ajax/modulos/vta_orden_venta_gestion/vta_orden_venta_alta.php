<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_orden_venta';
$db_nombre_pagina = 'vta_orden_venta_alta';

$vta_orden_venta = new VtaOrdenVenta();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_orden_venta = new VtaOrdenVenta();
	if(trim($hdn_id) != '') $vta_orden_venta->setId($hdn_id, false);
	$vta_orden_venta->setDescripcion(Gral::getVars(1, "vta_orden_venta_txt_descripcion"));
	$vta_orden_venta->setVtaPresupuestoInsInsumoId(Gral::getVars(1, "vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id", null));
	$vta_orden_venta->setInsInsumoId(Gral::getVars(1, "vta_orden_venta_cmb_ins_insumo_id", null));
	$vta_orden_venta->setGralTipoIvaId(Gral::getVars(1, "vta_orden_venta_cmb_gral_tipo_iva_id", null));
	$vta_orden_venta->setInsListaPrecioId(Gral::getVars(1, "vta_orden_venta_cmb_ins_lista_precio_id", null));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoId(Gral::getVars(1, "vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id", null));
	$vta_orden_venta->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_unitario", 0)));
	$vta_orden_venta->setCantidad(Gral::getVars(1, "vta_orden_venta_txt_cantidad", 0));
	$vta_orden_venta->setCodigo(Gral::getVars(1, "vta_orden_venta_txt_codigo"));
	$vta_orden_venta->setObservacion(Gral::getVars(1, "vta_orden_venta_txa_observacion"));
	$vta_orden_venta->setOrden(Gral::getVars(1, "vta_orden_venta_txt_orden", 0));
	$vta_orden_venta->setEstado(Gral::getVars(1, "vta_orden_venta_cmb_estado", 0));
	$vta_orden_venta->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_orden_venta_txt_creado")));
	$vta_orden_venta->setCreadoPor(Gral::getVars(1, "vta_orden_venta__creado_por", 0));
	$vta_orden_venta->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_orden_venta_txt_modificado")));
	$vta_orden_venta->setModificadoPor(Gral::getVars(1, "vta_orden_venta__modificado_por", 0));

	$vta_orden_venta_estado = new VtaOrdenVenta();
	if(trim($hdn_id) != ''){
		$vta_orden_venta_estado->setId($hdn_id);
		$vta_orden_venta->setEstado($vta_orden_venta_estado->getEstado());
				
	}else{
		$vta_orden_venta->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_orden_venta->control();
			if(!$error->getExisteError()){
				$vta_orden_venta->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_orden_venta_alta.php?cs=1&id='.$vta_orden_venta->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_orden_venta->control();
			if(!$error->getExisteError()){
				$vta_orden_venta->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_orden_venta_alta.php?cs=1');
				$vta_orden_venta = new VtaOrdenVenta();
			}
		break;
	}
	Gral::setSes('VtaOrdenVenta_ULTIMO_INSERTADO', $vta_orden_venta->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_orden_venta_id = Gral::getVars(2, $prefijo.'cmb_vta_orden_venta_id', 0);
	if($cmb_vta_orden_venta_id != 0){
		$vta_orden_venta = VtaOrdenVenta::getOxId($cmb_vta_orden_venta_id);
	}else{
	
	$vta_orden_venta->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_orden_venta->setVtaPresupuestoInsInsumoId(Gral::getVars(2, "vta_presupuesto_ins_insumo_id", 'null'));
	$vta_orden_venta->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$vta_orden_venta->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$vta_orden_venta->setInsListaPrecioId(Gral::getVars(2, "ins_lista_precio_id", 'null'));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoId(Gral::getVars(2, "vta_orden_venta_tipo_estado_id", 'null'));
	$vta_orden_venta->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$vta_orden_venta->setCantidad(Gral::getVars(2, "cantidad", 0));
	$vta_orden_venta->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_orden_venta->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_orden_venta->setOrden(Gral::getVars(2, "orden", 0));
	$vta_orden_venta->setEstado(Gral::getVars(2, "estado", 0));
	$vta_orden_venta->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_orden_venta->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_orden_venta->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_orden_venta->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_orden_venta->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_orden_venta/vta_orden_venta_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_orden_venta'>
        
				<tr>
				  <td  id="label_vta_orden_venta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_txt_descripcion' value='<?php Gral::_echoTxt($vta_orden_venta->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuestoInsInsumo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), Lang::_lang('Seleccione VtaPresupuestoInsInsumo', true)), $vta_orden_venta->getVtaPresupuestoInsInsumoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
		<img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_ins_insumo_id" <?php echo ($vta_orden_venta->getVtaPresupuestoInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), Lang::_lang('Seleccione InsInsumo', true)), $vta_orden_venta->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
		<img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($vta_orden_venta->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_orden_venta_cmb_ins_insumo_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_gral_tipo_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoIva') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_gral_tipo_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), Lang::_lang('Seleccione GralTipoIva', true)), $vta_orden_venta->getGralTipoIvaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
		<img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($vta_orden_venta->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_orden_venta_cmb_gral_tipo_iva_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_ins_lista_precio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_lista_precio_id' ?>" >
				  
                                        <?php Lang::_lang('InsListaPrecio') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_lista_precio_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_lista_precio_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_ins_lista_precio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_lista_precio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_ins_lista_precio_id', Gral::getCmbFiltro(InsListaPrecio::getInsListaPreciosCmb(), Lang::_lang('Seleccione InsListaPrecio', true)), $vta_orden_venta->getInsListaPrecioId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_LISTA_PRECIO')){ ?>
		<img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_ins_lista_precio_id" clase_id="ins_lista_precio" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_lista_precio_id" <?php echo ($vta_orden_venta->getInsListaPrecioId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_ins_lista_precio_id" clase_id="ins_lista_precio" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_orden_venta_cmb_ins_lista_precio_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_lista_precio_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('VtaOrdenVentaTipoEstado') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstadosCmb(), Lang::_lang('Seleccione VtaOrdenVentaTipoEstado', true)), $vta_orden_venta->getVtaOrdenVentaTipoEstadoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_ORDEN_VENTA_TIPO_ESTADO')){ ?>
		<img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" clase_id="vta_orden_venta_tipo_estado" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_tipo_estado_id" <?php echo ($vta_orden_venta->getVtaOrdenVentaTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" clase_id="vta_orden_venta_tipo_estado" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_tipo_estado_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_txt_codigo' value='<?php Gral::_echoTxt($vta_orden_venta->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_orden_venta_txa_observacion' rows='10' cols='50' id='vta_orden_venta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_orden_venta->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_orden_venta->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_orden_venta_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_orden_venta'/>
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

