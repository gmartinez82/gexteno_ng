<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA')){
    echo "No tiene asignada la credencial VTA_ORDEN_VENTA_ALTA. ";
    return false;
}

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
	$vta_orden_venta->setVtaPresupuestoId(Gral::getVars(1, "vta_orden_venta_cmb_vta_presupuesto_id", null));
	$vta_orden_venta->setVtaPresupuestoInsInsumoId(Gral::getVars(1, "vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id", null));
	$vta_orden_venta->setInsInsumoId(Gral::getVars(1, "vta_orden_venta_cmb_ins_insumo_id", null));
	$vta_orden_venta->setGralTipoIvaId(Gral::getVars(1, "vta_orden_venta_cmb_gral_tipo_iva_id", null));
	$vta_orden_venta->setInsTipoListaPrecioId(Gral::getVars(1, "vta_orden_venta_cmb_ins_tipo_lista_precio_id", null));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoId(Gral::getVars(1, "vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id", null));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoFacturacionId(Gral::getVars(1, "vta_orden_venta_cmb_vta_orden_venta_tipo_estado_facturacion_id", null));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoRemisionId(Gral::getVars(1, "vta_orden_venta_cmb_vta_orden_venta_tipo_estado_remision_id", null));
	$vta_orden_venta->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_unitario", 0)));
	$vta_orden_venta->setCantidad(Gral::getVars(1, "vta_orden_venta_txt_cantidad", 0));
	$vta_orden_venta->setDescuento(Gral::getVars(1, "vta_orden_venta_txt_descuento", 0));
	$vta_orden_venta->setInsInsumoCostoId(Gral::getVars(1, "vta_orden_venta_cmb_ins_insumo_costo_id", null));
	$vta_orden_venta->setImporteCosto(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_costo", 0)));
	$vta_orden_venta->setVtaPoliticaDescuentoId(Gral::getVars(1, "vta_orden_venta_cmb_vta_politica_descuento_id", null));
	$vta_orden_venta->setVtaPoliticaDescuentoRangoId(Gral::getVars(1, "vta_orden_venta_cmb_vta_politica_descuento_rango_id", null));
	$vta_orden_venta->setPorcentajePoliticaDescuento(Gral::getVars(1, "vta_orden_venta_txt_porcentaje_politica_descuento", 0));
	$vta_orden_venta->setImportePoliticaDescuento(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_politica_descuento", 0)));
	$vta_orden_venta->setGralSucursalId(Gral::getVars(1, "vta_orden_venta_cmb_gral_sucursal_id", null));
	$vta_orden_venta->setIncluyeLogistica(Gral::getVars(1, "vta_orden_venta_cmb_incluye_logistica", 0));
	$vta_orden_venta->setPorcentajeComision(Gral::getVars(1, "vta_orden_venta_txt_porcentaje_comision", 0));
	$vta_orden_venta->setImporteComision(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_comision", 0)));
	$vta_orden_venta->setPorcentajeLogistica(Gral::getVars(1, "vta_orden_venta_txt_porcentaje_logistica", 0));
	$vta_orden_venta->setImporteLogistica(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_logistica", 0)));
	$vta_orden_venta->setInsInsumoBultoId(Gral::getVars(1, "vta_orden_venta_cmb_ins_insumo_bulto_id", null));
	$vta_orden_venta->setCantidadBulto(Gral::getVars(1, "vta_orden_venta_txt_cantidad_bulto", 0));
	$vta_orden_venta->setImporteDescuento(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_descuento", 0)));
	$vta_orden_venta->setImporteRecargo(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe_recargo", 0)));
	$vta_orden_venta->setImporte(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_txt_importe", 0)));
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
	$vta_orden_venta->setVtaPresupuestoId(Gral::getVars(2, "vta_presupuesto_id", 'null'));
	$vta_orden_venta->setVtaPresupuestoInsInsumoId(Gral::getVars(2, "vta_presupuesto_ins_insumo_id", 'null'));
	$vta_orden_venta->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$vta_orden_venta->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$vta_orden_venta->setInsTipoListaPrecioId(Gral::getVars(2, "ins_tipo_lista_precio_id", 'null'));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoId(Gral::getVars(2, "vta_orden_venta_tipo_estado_id", 'null'));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoFacturacionId(Gral::getVars(2, "vta_orden_venta_tipo_estado_facturacion_id", 'null'));
	$vta_orden_venta->setVtaOrdenVentaTipoEstadoRemisionId(Gral::getVars(2, "vta_orden_venta_tipo_estado_remision_id", 'null'));
	$vta_orden_venta->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$vta_orden_venta->setCantidad(Gral::getVars(2, "cantidad", 0));
	$vta_orden_venta->setDescuento(Gral::getVars(2, "descuento", 0));
	$vta_orden_venta->setInsInsumoCostoId(Gral::getVars(2, "ins_insumo_costo_id", 'null'));
	$vta_orden_venta->setImporteCosto(Gral::getVars(2, "importe_costo", 0));
	$vta_orden_venta->setVtaPoliticaDescuentoId(Gral::getVars(2, "vta_politica_descuento_id", 'null'));
	$vta_orden_venta->setVtaPoliticaDescuentoRangoId(Gral::getVars(2, "vta_politica_descuento_rango_id", 'null'));
	$vta_orden_venta->setPorcentajePoliticaDescuento(Gral::getVars(2, "porcentaje_politica_descuento", 0));
	$vta_orden_venta->setImportePoliticaDescuento(Gral::getVars(2, "importe_politica_descuento", 0));
	$vta_orden_venta->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
	$vta_orden_venta->setIncluyeLogistica(Gral::getVars(2, "incluye_logistica", 0));
	$vta_orden_venta->setPorcentajeComision(Gral::getVars(2, "porcentaje_comision", 0));
	$vta_orden_venta->setImporteComision(Gral::getVars(2, "importe_comision", 0));
	$vta_orden_venta->setPorcentajeLogistica(Gral::getVars(2, "porcentaje_logistica", 0));
	$vta_orden_venta->setImporteLogistica(Gral::getVars(2, "importe_logistica", 0));
	$vta_orden_venta->setInsInsumoBultoId(Gral::getVars(2, "ins_insumo_bulto_id", 'null'));
	$vta_orden_venta->setCantidadBulto(Gral::getVars(2, "cantidad_bulto", 0));
	$vta_orden_venta->setImporteDescuento(Gral::getVars(2, "importe_descuento", 0));
	$vta_orden_venta->setImporteRecargo(Gral::getVars(2, "importe_recargo", 0));
	$vta_orden_venta->setImporte(Gral::getVars(2, "importe", 0));
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
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_orden_venta' width='90%'>
        
				<tr>
				  <td  id="label_vta_orden_venta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_txt_descripcion' value='<?php Gral::_echoTxt($vta_orden_venta->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_presupuesto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuesto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_presupuesto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), $vta_orden_venta->getVtaPresupuestoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_PRESUPUESTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_id" <?php echo ($vta_orden_venta->getVtaPresupuestoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_vta_presupuesto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuestoInsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), '...'), $vta_orden_venta->getVtaPresupuestoInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_ins_insumo_id" <?php echo ($vta_orden_venta->getVtaPresupuestoInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_vta_presupuesto_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $vta_orden_venta->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($vta_orden_venta->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_gral_tipo_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_gral_tipo_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $vta_orden_venta->getGralTipoIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($vta_orden_venta->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_gral_tipo_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_ins_tipo_lista_precio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id' ?>" >
				  
                                        <?php Lang::_lang('InsTipoListaPrecio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_ins_tipo_lista_precio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), $vta_orden_venta->getInsTipoListaPrecioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_TIPO_LISTA_PRECIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_tipo_lista_precio_id" <?php echo ($vta_orden_venta->getInsTipoListaPrecioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_ins_tipo_lista_precio_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('VtaOrdenVentaTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstadosCmb(), '...'), $vta_orden_venta->getVtaOrdenVentaTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_ORDEN_VENTA_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" clase_id="vta_orden_venta_tipo_estado" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_tipo_estado_id" <?php echo ($vta_orden_venta->getVtaOrdenVentaTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id" clase_id="vta_orden_venta_tipo_estado" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_vta_orden_venta_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_vta_orden_venta_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_vta_orden_venta_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_vta_orden_venta_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_facturacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_facturacion_id' ?>" >
				  
                                        <?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_facturacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_tipo_estado_facturacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_orden_venta_tipo_estado_facturacion_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoFacturacion::getVtaOrdenVentaTipoEstadoFacturacionsCmb(), '...'), $vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_facturacion_id" clase_id="vta_orden_venta_tipo_estado_facturacion" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_tipo_estado_facturacion_id" <?php echo ($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_facturacion_id" clase_id="vta_orden_venta_tipo_estado_facturacion" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_facturacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_vta_orden_venta_tipo_estado_facturacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_vta_orden_venta_tipo_estado_facturacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_vta_orden_venta_tipo_estado_facturacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_vta_orden_venta_tipo_estado_facturacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_tipo_estado_facturacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_remision_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_remision_id' ?>" >
				  
                                        <?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_remision_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_tipo_estado_remision_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_orden_venta_tipo_estado_remision_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoRemision::getVtaOrdenVentaTipoEstadoRemisionsCmb(), '...'), $vta_orden_venta->getVtaOrdenVentaTipoEstadoRemisionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_remision_id" clase_id="vta_orden_venta_tipo_estado_remision" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_tipo_estado_remision_id" <?php echo ($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemisionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_orden_venta_tipo_estado_remision_id" clase_id="vta_orden_venta_tipo_estado_remision" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_vta_orden_venta_tipo_estado_remision_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_vta_orden_venta_tipo_estado_remision_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_vta_orden_venta_tipo_estado_remision_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_vta_orden_venta_tipo_estado_remision_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_vta_orden_venta_tipo_estado_remision_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_tipo_estado_remision_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_ins_insumo_costo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_costo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumoCosto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_ins_insumo_costo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_costo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_ins_insumo_costo_id', Gral::getCmbFiltro(InsInsumoCosto::getInsInsumoCostosCmb(), '...'), $vta_orden_venta->getInsInsumoCostoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_INSUMO_COSTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_ins_insumo_costo_id" clase_id="ins_insumo_costo" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_costo_id" <?php echo ($vta_orden_venta->getInsInsumoCostoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_ins_insumo_costo_id" clase_id="ins_insumo_costo" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_ins_insumo_costo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_ins_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_ins_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_ins_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_ins_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_costo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_politica_descuento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_politica_descuento_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPoliticaDescuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_politica_descuento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), $vta_orden_venta->getVtaPoliticaDescuentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_POLITICA_DESCUENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_politica_descuento_id" <?php echo ($vta_orden_venta->getVtaPoliticaDescuentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_vta_politica_descuento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_vta_politica_descuento_rango_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_politica_descuento_rango_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPoliticaDescuentoRango', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_vta_politica_descuento_rango_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_politica_descuento_rango_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_vta_politica_descuento_rango_id', Gral::getCmbFiltro(VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangosCmb(), '...'), $vta_orden_venta->getVtaPoliticaDescuentoRangoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_POLITICA_DESCUENTO_RANGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_vta_politica_descuento_rango_id" clase_id="vta_politica_descuento_rango" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_politica_descuento_rango_id" <?php echo ($vta_orden_venta->getVtaPoliticaDescuentoRangoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_vta_politica_descuento_rango_id" clase_id="vta_politica_descuento_rango" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_vta_politica_descuento_rango_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_vta_politica_descuento_rango_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_vta_politica_descuento_rango_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_vta_politica_descuento_rango_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_vta_politica_descuento_rango_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_politica_descuento_rango_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_gral_sucursal_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>" >
				  
                                        <?php Lang::_lang('GralSucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_gral_sucursal_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), $vta_orden_venta->getGralSucursalId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($vta_orden_venta->getGralSucursalId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_gral_sucursal_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_incluye_logistica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_incluye_logistica' ?>" >
				  
                                        <?php Lang::_lang('Incl Log', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_incluye_logistica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('incluye_logistica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_incluye_logistica', GralSiNo::getGralSiNosCmb(), $vta_orden_venta->getIncluyeLogistica(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_incluye_logistica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_incluye_logistica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_incluye_logistica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_incluye_logistica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('incluye_logistica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_txt_porcentaje_comision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_comision' ?>" >
				  
                                        <?php Lang::_lang('Porc Comis', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txt_porcentaje_comision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_txt_porcentaje_comision' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_orden_venta_txt_porcentaje_comision' value='<?php Gral::_echoTxt($vta_orden_venta->getPorcentajeComision(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_txt_porcentaje_logistica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_logistica' ?>" >
				  
                                        <?php Lang::_lang('Porc Logis', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txt_porcentaje_logistica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_logistica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_txt_porcentaje_logistica' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_orden_venta_txt_porcentaje_logistica' value='<?php Gral::_echoTxt($vta_orden_venta->getPorcentajeLogistica(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_porcentaje_logistica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_porcentaje_logistica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_porcentaje_logistica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_porcentaje_logistica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_logistica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_cmb_ins_insumo_bulto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_bulto_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumoBulto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_cmb_ins_insumo_bulto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_bulto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_cmb_ins_insumo_bulto_id', Gral::getCmbFiltro(InsInsumoBulto::getInsInsumoBultosCmb(), '...'), $vta_orden_venta->getInsInsumoBultoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_INSUMO_BULTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_cmb_ins_insumo_bulto_id" clase_id="ins_insumo_bulto" prefijo='vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_bulto_id" <?php echo ($vta_orden_venta->getInsInsumoBultoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_cmb_ins_insumo_bulto_id" clase_id="ins_insumo_bulto" prefijo='vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_cmb_ins_insumo_bulto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_ins_insumo_bulto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_ins_insumo_bulto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_ins_insumo_bulto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_ins_insumo_bulto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_bulto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_txt_codigo' value='<?php Gral::_echoTxt($vta_orden_venta->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_orden_venta_txa_observacion' rows='10' cols='50' id='vta_orden_venta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_orden_venta->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_orden_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
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

