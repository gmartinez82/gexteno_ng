<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA')){
    echo "No tiene asignada la credencial VTA_FACTURA_VTA_ORDEN_VENTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_factura_vta_orden_venta';
$db_nombre_pagina = 'vta_factura_vta_orden_venta_alta';

$vta_factura_vta_orden_venta = new VtaFacturaVtaOrdenVenta();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_factura_vta_orden_venta = new VtaFacturaVtaOrdenVenta();
	if(trim($hdn_id) != '') $vta_factura_vta_orden_venta->setId($hdn_id, false);
	$vta_factura_vta_orden_venta->setDescripcion(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_descripcion"));
	$vta_factura_vta_orden_venta->setVtaFacturaId(Gral::getVars(1, "vta_factura_vta_orden_venta_cmb_vta_factura_id", null));
	$vta_factura_vta_orden_venta->setVtaOrdenVentaId(Gral::getVars(1, "vta_factura_vta_orden_venta_cmb_vta_orden_venta_id", null));
	$vta_factura_vta_orden_venta->setInsInsumoId(Gral::getVars(1, "vta_factura_vta_orden_venta_cmb_ins_insumo_id", null));
	$vta_factura_vta_orden_venta->setInsUnidadMedidaId(Gral::getVars(1, "vta_factura_vta_orden_venta_cmb_ins_unidad_medida_id", null));
	$vta_factura_vta_orden_venta->setGralTipoIvaId(Gral::getVars(1, "vta_factura_vta_orden_venta_cmb_gral_tipo_iva_id", null));
	$vta_factura_vta_orden_venta->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_importe_unitario", 0)));
	$vta_factura_vta_orden_venta->setCantidad(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_cantidad", 0));
	$vta_factura_vta_orden_venta->setInsInsumoCostoId(Gral::getVars(1, "vta_factura_vta_orden_venta_cmb_ins_insumo_costo_id", null));
	$vta_factura_vta_orden_venta->setImporteCosto(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_importe_costo", 0)));
	$vta_factura_vta_orden_venta->setCodigo(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_codigo"));
	$vta_factura_vta_orden_venta->setObservacion(Gral::getVars(1, "vta_factura_vta_orden_venta_txa_observacion"));
	$vta_factura_vta_orden_venta->setOrden(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_orden", 0));
	$vta_factura_vta_orden_venta->setEstado(Gral::getVars(1, "vta_factura_vta_orden_venta_cmb_estado", 0));
	$vta_factura_vta_orden_venta->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_creado")));
	$vta_factura_vta_orden_venta->setCreadoPor(Gral::getVars(1, "vta_factura_vta_orden_venta__creado_por", 0));
	$vta_factura_vta_orden_venta->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_factura_vta_orden_venta_txt_modificado")));
	$vta_factura_vta_orden_venta->setModificadoPor(Gral::getVars(1, "vta_factura_vta_orden_venta__modificado_por", 0));

	$vta_factura_vta_orden_venta_estado = new VtaFacturaVtaOrdenVenta();
	if(trim($hdn_id) != ''){
		$vta_factura_vta_orden_venta_estado->setId($hdn_id);
		$vta_factura_vta_orden_venta->setEstado($vta_factura_vta_orden_venta_estado->getEstado());
				
	}else{
		$vta_factura_vta_orden_venta->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_factura_vta_orden_venta->control();
			if(!$error->getExisteError()){
				$vta_factura_vta_orden_venta->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_factura_vta_orden_venta_alta.php?cs=1&id='.$vta_factura_vta_orden_venta->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_factura_vta_orden_venta->control();
			if(!$error->getExisteError()){
				$vta_factura_vta_orden_venta->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_factura_vta_orden_venta_alta.php?cs=1');
				$vta_factura_vta_orden_venta = new VtaFacturaVtaOrdenVenta();
			}
		break;
	}
	Gral::setSes('VtaFacturaVtaOrdenVenta_ULTIMO_INSERTADO', $vta_factura_vta_orden_venta->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_factura_vta_orden_venta_id = Gral::getVars(2, $prefijo.'cmb_vta_factura_vta_orden_venta_id', 0);
	if($cmb_vta_factura_vta_orden_venta_id != 0){
		$vta_factura_vta_orden_venta = VtaFacturaVtaOrdenVenta::getOxId($cmb_vta_factura_vta_orden_venta_id);
	}else{
	
	$vta_factura_vta_orden_venta->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_factura_vta_orden_venta->setVtaFacturaId(Gral::getVars(2, "vta_factura_id", 'null'));
	$vta_factura_vta_orden_venta->setVtaOrdenVentaId(Gral::getVars(2, "vta_orden_venta_id", 'null'));
	$vta_factura_vta_orden_venta->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$vta_factura_vta_orden_venta->setInsUnidadMedidaId(Gral::getVars(2, "ins_unidad_medida_id", 'null'));
	$vta_factura_vta_orden_venta->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$vta_factura_vta_orden_venta->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$vta_factura_vta_orden_venta->setCantidad(Gral::getVars(2, "cantidad", 0));
	$vta_factura_vta_orden_venta->setInsInsumoCostoId(Gral::getVars(2, "ins_insumo_costo_id", 'null'));
	$vta_factura_vta_orden_venta->setImporteCosto(Gral::getVars(2, "importe_costo", 0));
	$vta_factura_vta_orden_venta->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_factura_vta_orden_venta->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_factura_vta_orden_venta->setOrden(Gral::getVars(2, "orden", 0));
	$vta_factura_vta_orden_venta->setEstado(Gral::getVars(2, "estado", 0));
	$vta_factura_vta_orden_venta->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_factura_vta_orden_venta->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_factura_vta_orden_venta->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_factura_vta_orden_venta->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_factura_vta_orden_venta->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_factura_vta_orden_venta/vta_factura_vta_orden_venta_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_factura_vta_orden_venta' width='90%'>
        
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_factura_vta_orden_venta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_factura_vta_orden_venta_txt_descripcion' value='<?php Gral::_echoTxt($vta_factura_vta_orden_venta->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_cmb_vta_factura_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_factura_id' ?>" >
				  
                                        <?php Lang::_lang('VtaFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_cmb_vta_factura_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_vta_orden_venta_cmb_vta_factura_id', Gral::getCmbFiltro(VtaFactura::getVtaFacturasCmb(), '...'), $vta_factura_vta_orden_venta->getVtaFacturaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_FACTURA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_vta_orden_venta_cmb_vta_factura_id" clase_id="vta_factura" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_factura_id" <?php echo ($vta_factura_vta_orden_venta->getVtaFacturaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_vta_orden_venta_cmb_vta_factura_id" clase_id="vta_factura" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_vta_orden_venta_cmb_vta_factura_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_vta_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_vta_factura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_vta_factura_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_vta_factura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_factura_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_cmb_vta_orden_venta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_id' ?>" >
				  
                                        <?php Lang::_lang('VtaOrdenVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_cmb_vta_orden_venta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_vta_orden_venta_cmb_vta_orden_venta_id', Gral::getCmbFiltro(VtaOrdenVenta::getVtaOrdenVentasCmb(), '...'), $vta_factura_vta_orden_venta->getVtaOrdenVentaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA_CMB_EDIT_VTA_ORDEN_VENTA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_vta_orden_venta_cmb_vta_orden_venta_id" clase_id="vta_orden_venta" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_id" <?php echo ($vta_factura_vta_orden_venta->getVtaOrdenVentaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_vta_orden_venta_cmb_vta_orden_venta_id" clase_id="vta_orden_venta" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_vta_orden_venta_cmb_vta_orden_venta_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_vta_orden_venta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_vta_orden_venta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_vta_orden_venta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_vta_orden_venta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_vta_orden_venta_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $vta_factura_vta_orden_venta->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_vta_orden_venta_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($vta_factura_vta_orden_venta->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_vta_orden_venta_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_vta_orden_venta_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_cmb_ins_unidad_medida_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_unidad_medida_id' ?>" >
				  
                                        <?php Lang::_lang('InsUnidadMedida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_cmb_ins_unidad_medida_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_vta_orden_venta_cmb_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), $vta_factura_vta_orden_venta->getInsUnidadMedidaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_UNIDAD_MEDIDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_vta_orden_venta_cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_unidad_medida_id" <?php echo ($vta_factura_vta_orden_venta->getInsUnidadMedidaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_vta_orden_venta_cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_vta_orden_venta_cmb_ins_unidad_medida_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_cmb_gral_tipo_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_cmb_gral_tipo_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_vta_orden_venta_cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $vta_factura_vta_orden_venta->getGralTipoIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_vta_orden_venta_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($vta_factura_vta_orden_venta->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_vta_orden_venta_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_vta_orden_venta_cmb_gral_tipo_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_cmb_ins_insumo_costo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_costo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumoCosto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_cmb_ins_insumo_costo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_costo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_vta_orden_venta_cmb_ins_insumo_costo_id', Gral::getCmbFiltro(InsInsumoCosto::getInsInsumoCostosCmb(), '...'), $vta_factura_vta_orden_venta->getInsInsumoCostoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA_CMB_EDIT_INS_INSUMO_COSTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_vta_orden_venta_cmb_ins_insumo_costo_id" clase_id="ins_insumo_costo" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_costo_id" <?php echo ($vta_factura_vta_orden_venta->getInsInsumoCostoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_vta_orden_venta_cmb_ins_insumo_costo_id" clase_id="ins_insumo_costo" prefijo='vta_factura_vta_orden_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_vta_orden_venta_cmb_ins_insumo_costo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_ins_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_ins_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_ins_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_ins_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_costo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_factura_vta_orden_venta_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_factura_vta_orden_venta_txt_codigo' value='<?php Gral::_echoTxt($vta_factura_vta_orden_venta->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_vta_orden_venta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_vta_orden_venta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_factura_vta_orden_venta_txa_observacion' rows='10' cols='50' id='vta_factura_vta_orden_venta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_factura_vta_orden_venta->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_factura_vta_orden_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_vta_orden_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_vta_orden_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_factura_vta_orden_venta->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_factura_vta_orden_venta_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_factura_vta_orden_venta'/>
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

