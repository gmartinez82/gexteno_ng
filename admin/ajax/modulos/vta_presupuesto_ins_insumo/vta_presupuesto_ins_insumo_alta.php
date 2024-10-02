<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA')){
    echo "No tiene asignada la credencial VTA_PRESUPUESTO_INS_INSUMO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_presupuesto_ins_insumo';
$db_nombre_pagina = 'vta_presupuesto_ins_insumo_alta';

$vta_presupuesto_ins_insumo = new VtaPresupuestoInsInsumo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_presupuesto_ins_insumo = new VtaPresupuestoInsInsumo();
	if(trim($hdn_id) != '') $vta_presupuesto_ins_insumo->setId($hdn_id, false);
	$vta_presupuesto_ins_insumo->setDescripcion(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_descripcion"));
	$vta_presupuesto_ins_insumo->setVtaPresupuestoId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_vta_presupuesto_id", null));
	$vta_presupuesto_ins_insumo->setInsInsumoId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_ins_insumo_id", null));
	$vta_presupuesto_ins_insumo->setGralTipoIvaId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_gral_tipo_iva_id", null));
	$vta_presupuesto_ins_insumo->setInsListaPrecioId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_ins_lista_precio_id", null));
	$vta_presupuesto_ins_insumo->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_importe_unitario", 0)));
	$vta_presupuesto_ins_insumo->setCantidad(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_cantidad", 0));
	$vta_presupuesto_ins_insumo->setDescuento(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_descuento", 0));
	$vta_presupuesto_ins_insumo->setConflicto(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_conflicto", 0));
	$vta_presupuesto_ins_insumo->setInsInsumoCostoId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_ins_insumo_costo_id", null));
	$vta_presupuesto_ins_insumo->setImporteCosto(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_importe_costo", 0)));
	$vta_presupuesto_ins_insumo->setVtaPoliticaDescuentoId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_id", null));
	$vta_presupuesto_ins_insumo->setVtaPoliticaDescuentoRangoId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_rango_id", null));
	$vta_presupuesto_ins_insumo->setPorcentajePoliticaDescuento(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_porcentaje_politica_descuento", 0));
	$vta_presupuesto_ins_insumo->setImportePoliticaDescuento(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_importe_politica_descuento", 0)));
	$vta_presupuesto_ins_insumo->setPorcentajeComision(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_porcentaje_comision", 0));
	$vta_presupuesto_ins_insumo->setImporteComision(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_importe_comision", 0)));
	$vta_presupuesto_ins_insumo->setInsInsumoBultoId(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_ins_insumo_bulto_id", null));
	$vta_presupuesto_ins_insumo->setCantidadBulto(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_cantidad_bulto", 0));
	$vta_presupuesto_ins_insumo->setImporteDescuentoBulto(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_importe_descuento_bulto", 0)));
	$vta_presupuesto_ins_insumo->setPorcentajeDescuentoBulto(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_porcentaje_descuento_bulto", 0));
	$vta_presupuesto_ins_insumo->setCodigo(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_codigo"));
	$vta_presupuesto_ins_insumo->setObservacion(Gral::getVars(1, "vta_presupuesto_ins_insumo_txa_observacion"));
	$vta_presupuesto_ins_insumo->setOrden(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_orden", 0));
	$vta_presupuesto_ins_insumo->setEstado(Gral::getVars(1, "vta_presupuesto_ins_insumo_cmb_estado", 0));
	$vta_presupuesto_ins_insumo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_creado")));
	$vta_presupuesto_ins_insumo->setCreadoPor(Gral::getVars(1, "vta_presupuesto_ins_insumo__creado_por", 0));
	$vta_presupuesto_ins_insumo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_presupuesto_ins_insumo_txt_modificado")));
	$vta_presupuesto_ins_insumo->setModificadoPor(Gral::getVars(1, "vta_presupuesto_ins_insumo__modificado_por", 0));

	$vta_presupuesto_ins_insumo_estado = new VtaPresupuestoInsInsumo();
	if(trim($hdn_id) != ''){
		$vta_presupuesto_ins_insumo_estado->setId($hdn_id);
		$vta_presupuesto_ins_insumo->setEstado($vta_presupuesto_ins_insumo_estado->getEstado());
				
	}else{
		$vta_presupuesto_ins_insumo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_presupuesto_ins_insumo->control();
			if(!$error->getExisteError()){
				$vta_presupuesto_ins_insumo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_presupuesto_ins_insumo_alta.php?cs=1&id='.$vta_presupuesto_ins_insumo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_presupuesto_ins_insumo->control();
			if(!$error->getExisteError()){
				$vta_presupuesto_ins_insumo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_presupuesto_ins_insumo_alta.php?cs=1');
				$vta_presupuesto_ins_insumo = new VtaPresupuestoInsInsumo();
			}
		break;
	}
	Gral::setSes('VtaPresupuestoInsInsumo_ULTIMO_INSERTADO', $vta_presupuesto_ins_insumo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_presupuesto_ins_insumo_id = Gral::getVars(2, $prefijo.'cmb_vta_presupuesto_ins_insumo_id', 0);
	if($cmb_vta_presupuesto_ins_insumo_id != 0){
		$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($cmb_vta_presupuesto_ins_insumo_id);
	}else{
	
	$vta_presupuesto_ins_insumo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_presupuesto_ins_insumo->setVtaPresupuestoId(Gral::getVars(2, "vta_presupuesto_id", 'null'));
	$vta_presupuesto_ins_insumo->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$vta_presupuesto_ins_insumo->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$vta_presupuesto_ins_insumo->setInsListaPrecioId(Gral::getVars(2, "ins_lista_precio_id", 'null'));
	$vta_presupuesto_ins_insumo->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$vta_presupuesto_ins_insumo->setCantidad(Gral::getVars(2, "cantidad", 0));
	$vta_presupuesto_ins_insumo->setDescuento(Gral::getVars(2, "descuento", 0));
	$vta_presupuesto_ins_insumo->setConflicto(Gral::getVars(2, "conflicto", 0));
	$vta_presupuesto_ins_insumo->setInsInsumoCostoId(Gral::getVars(2, "ins_insumo_costo_id", 'null'));
	$vta_presupuesto_ins_insumo->setImporteCosto(Gral::getVars(2, "importe_costo", 0));
	$vta_presupuesto_ins_insumo->setVtaPoliticaDescuentoId(Gral::getVars(2, "vta_politica_descuento_id", 'null'));
	$vta_presupuesto_ins_insumo->setVtaPoliticaDescuentoRangoId(Gral::getVars(2, "vta_politica_descuento_rango_id", 'null'));
	$vta_presupuesto_ins_insumo->setPorcentajePoliticaDescuento(Gral::getVars(2, "porcentaje_politica_descuento", 0));
	$vta_presupuesto_ins_insumo->setImportePoliticaDescuento(Gral::getVars(2, "importe_politica_descuento", 0));
	$vta_presupuesto_ins_insumo->setPorcentajeComision(Gral::getVars(2, "porcentaje_comision", 0));
	$vta_presupuesto_ins_insumo->setImporteComision(Gral::getVars(2, "importe_comision", 0));
	$vta_presupuesto_ins_insumo->setInsInsumoBultoId(Gral::getVars(2, "ins_insumo_bulto_id", 'null'));
	$vta_presupuesto_ins_insumo->setCantidadBulto(Gral::getVars(2, "cantidad_bulto", 0));
	$vta_presupuesto_ins_insumo->setImporteDescuentoBulto(Gral::getVars(2, "importe_descuento_bulto", 0));
	$vta_presupuesto_ins_insumo->setPorcentajeDescuentoBulto(Gral::getVars(2, "porcentaje_descuento_bulto", 0));
	$vta_presupuesto_ins_insumo->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_presupuesto_ins_insumo->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_presupuesto_ins_insumo->setOrden(Gral::getVars(2, "orden", 0));
	$vta_presupuesto_ins_insumo->setEstado(Gral::getVars(2, "estado", 0));
	$vta_presupuesto_ins_insumo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_presupuesto_ins_insumo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_presupuesto_ins_insumo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_presupuesto_ins_insumo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_presupuesto_ins_insumo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_presupuesto_ins_insumo/vta_presupuesto_ins_insumo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_presupuesto_ins_insumo' width='90%'>
        
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_ins_insumo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_presupuesto_ins_insumo_txt_descripcion' value='<?php Gral::_echoTxt($vta_presupuesto_ins_insumo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_vta_presupuesto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuesto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_vta_presupuesto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), $vta_presupuesto_ins_insumo->getVtaPresupuestoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_VTA_PRESUPUESTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_id" <?php echo ($vta_presupuesto_ins_insumo->getVtaPresupuestoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_vta_presupuesto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $vta_presupuesto_ins_insumo->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($vta_presupuesto_ins_insumo->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_gral_tipo_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_gral_tipo_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $vta_presupuesto_ins_insumo->getGralTipoIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($vta_presupuesto_ins_insumo->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_gral_tipo_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_ins_lista_precio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_lista_precio_id' ?>" >
				  
                                        <?php Lang::_lang('InsListaPrecio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_ins_lista_precio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_lista_precio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_ins_lista_precio_id', Gral::getCmbFiltro(InsListaPrecio::getInsListaPreciosCmb(), '...'), $vta_presupuesto_ins_insumo->getInsListaPrecioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_INS_LISTA_PRECIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_lista_precio_id" clase_id="ins_lista_precio" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_lista_precio_id" <?php echo ($vta_presupuesto_ins_insumo->getInsListaPrecioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_lista_precio_id" clase_id="ins_lista_precio" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_ins_lista_precio_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_lista_precio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_ins_insumo_costo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_costo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumoCosto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_ins_insumo_costo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_costo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_ins_insumo_costo_id', Gral::getCmbFiltro(InsInsumoCosto::getInsInsumoCostosCmb(), '...'), $vta_presupuesto_ins_insumo->getInsInsumoCostoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_INS_INSUMO_COSTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_insumo_costo_id" clase_id="ins_insumo_costo" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_costo_id" <?php echo ($vta_presupuesto_ins_insumo->getInsInsumoCostoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_insumo_costo_id" clase_id="ins_insumo_costo" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_ins_insumo_costo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_costo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_politica_descuento_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPoliticaDescuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), $vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_VTA_POLITICA_DESCUENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_politica_descuento_id" <?php echo ($vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_rango_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_politica_descuento_rango_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPoliticaDescuentoRango', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_rango_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_politica_descuento_rango_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_rango_id', Gral::getCmbFiltro(VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangosCmb(), '...'), $vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoRangoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_VTA_POLITICA_DESCUENTO_RANGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_rango_id" clase_id="vta_politica_descuento_rango" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_politica_descuento_rango_id" <?php echo ($vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoRangoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_rango_id" clase_id="vta_politica_descuento_rango" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_vta_politica_descuento_rango_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_rango_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_rango_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_rango_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_vta_politica_descuento_rango_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_politica_descuento_rango_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_txt_porcentaje_comision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_comision' ?>" >
				  
                                        <?php Lang::_lang('Porc Comis', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_txt_porcentaje_comision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_ins_insumo_txt_porcentaje_comision' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_presupuesto_ins_insumo_txt_porcentaje_comision' value='<?php Gral::_echoTxt($vta_presupuesto_ins_insumo->getPorcentajeComision(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_cmb_ins_insumo_bulto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_bulto_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumoBulto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_cmb_ins_insumo_bulto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_bulto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_ins_insumo_cmb_ins_insumo_bulto_id', Gral::getCmbFiltro(InsInsumoBulto::getInsInsumoBultosCmb(), '...'), $vta_presupuesto_ins_insumo->getInsInsumoBultoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ALTA_CMB_EDIT_INS_INSUMO_BULTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_insumo_bulto_id" clase_id="ins_insumo_bulto" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_bulto_id" <?php echo ($vta_presupuesto_ins_insumo->getInsInsumoBultoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_ins_insumo_cmb_ins_insumo_bulto_id" clase_id="ins_insumo_bulto" prefijo='vta_presupuesto_ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_ins_insumo_cmb_ins_insumo_bulto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_insumo_bulto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_ins_insumo_bulto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_insumo_bulto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_ins_insumo_bulto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_bulto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_txt_porcentaje_descuento_bulto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_descuento_bulto' ?>" >
				  
                                        <?php Lang::_lang('Porc Descuento Bulto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_txt_porcentaje_descuento_bulto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_descuento_bulto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_ins_insumo_txt_porcentaje_descuento_bulto' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_presupuesto_ins_insumo_txt_porcentaje_descuento_bulto' value='<?php Gral::_echoTxt($vta_presupuesto_ins_insumo->getPorcentajeDescuentoBulto(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_porcentaje_descuento_bulto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_porcentaje_descuento_bulto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_porcentaje_descuento_bulto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_porcentaje_descuento_bulto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_descuento_bulto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_ins_insumo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_presupuesto_ins_insumo_txt_codigo' value='<?php Gral::_echoTxt($vta_presupuesto_ins_insumo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_ins_insumo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_ins_insumo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_presupuesto_ins_insumo_txa_observacion' rows='10' cols='50' id='vta_presupuesto_ins_insumo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_presupuesto_ins_insumo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_presupuesto_ins_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_ins_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_ins_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_presupuesto_ins_insumo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_presupuesto_ins_insumo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_presupuesto_ins_insumo'/>
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

