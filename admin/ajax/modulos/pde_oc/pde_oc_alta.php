<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_OC_ALTA')){
    echo "No tiene asignada la credencial PDE_OC_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_oc';
$db_nombre_pagina = 'pde_oc_alta';

$pde_oc = new PdeOc();
$error = new DbError();
$hdn_error = 1;

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
	$pde_oc->setPdeOcAgrupacionId(Gral::getVars(1, "pde_oc_cmb_pde_oc_agrupacion_id", null));
	$pde_oc->setPdeCentroPedidoId(Gral::getVars(1, "pde_oc_cmb_pde_centro_pedido_id", null));
	$pde_oc->setPdeCentroRecepcionId(Gral::getVars(1, "pde_oc_cmb_pde_centro_recepcion_id", null));
	$pde_oc->setPdeOcTipoEstadoId(Gral::getVars(1, "pde_oc_cmb_pde_oc_tipo_estado_id", null));
	$pde_oc->setPdeOcTipoEstadoRecepcionId(Gral::getVars(1, "pde_oc_cmb_pde_oc_tipo_estado_recepcion_id", null));
	$pde_oc->setPdeOcTipoEstadoFacturacionId(Gral::getVars(1, "pde_oc_cmb_pde_oc_tipo_estado_facturacion_id", null));
	$pde_oc->setPdeOcTipoOrigenId(Gral::getVars(1, "pde_oc_cmb_pde_oc_tipo_origen_id", null));
	$pde_oc->setCantidad(Gral::getVars(1, "pde_oc_txt_cantidad", 0));
	$pde_oc->setFechaEntrega(Gral::getFechaToDb(Gral::getVars(1, "pde_oc_txt_fecha_entrega")));
	$pde_oc->setImporteUnidad(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_oc_txt_importe_unidad", 0)));
	$pde_oc->setImporteTotal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_oc_txt_importe_total", 0)));
	$pde_oc->setVencimiento(Gral::getFechaToDb(Gral::getVars(1, "pde_oc_txt_vencimiento")));
	$pde_oc->setPrvInsumoId(Gral::getVars(1, "pde_oc_dbsug_prv_insumo_id", null));
	$pde_oc->setPrvInsumoCostoId(Gral::getVars(1, "pde_oc_dbsug_prv_insumo_costo_id", null));
	$pde_oc->setImporteEsperado(Gral::getVars(1, "pde_oc_txt_importe_esperado", 0));
	$pde_oc->setAfectaCosto(Gral::getVars(1, "pde_oc_cmb_afecta_costo", 0));
	$pde_oc->setPrvDescuentoFinancieroId(Gral::getVars(1, "pde_oc_cmb_prv_descuento_financiero_id", null));
	$pde_oc->setPrvDescuentoComercialId(Gral::getVars(1, "pde_oc_cmb_prv_descuento_comercial_id", null));
	$pde_oc->setNotaPublica(Gral::getVars(1, "pde_oc_txa_nota_publica"));
	$pde_oc->setNotaInterna(Gral::getVars(1, "pde_oc_txa_nota_interna"));
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
								
				$hdn_error = 0;
				//header('Location: pde_oc_alta.php?cs=1&id='.$pde_oc->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_oc->control();
			if(!$error->getExisteError()){
				$pde_oc->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
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
	}else{
	
	$pde_oc->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_oc->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_oc->setPdePedidoId(Gral::getVars(2, "pde_pedido_id", 'null'));
	$pde_oc->setPdeCotizacionId(Gral::getVars(2, "pde_cotizacion_id", 'null'));
	$pde_oc->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_oc->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$pde_oc->setPdeOcAgrupacionId(Gral::getVars(2, "pde_oc_agrupacion_id", 'null'));
	$pde_oc->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
	$pde_oc->setPdeCentroRecepcionId(Gral::getVars(2, "pde_centro_recepcion_id", 'null'));
	$pde_oc->setPdeOcTipoEstadoId(Gral::getVars(2, "pde_oc_tipo_estado_id", 'null'));
	$pde_oc->setPdeOcTipoEstadoRecepcionId(Gral::getVars(2, "pde_oc_tipo_estado_recepcion_id", 'null'));
	$pde_oc->setPdeOcTipoEstadoFacturacionId(Gral::getVars(2, "pde_oc_tipo_estado_facturacion_id", 'null'));
	$pde_oc->setPdeOcTipoOrigenId(Gral::getVars(2, "pde_oc_tipo_origen_id", 'null'));
	$pde_oc->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_oc->setFechaEntrega(Gral::getVars(2, "fecha_entrega", date('Y-m-d')));
	$pde_oc->setImporteUnidad(Gral::getVars(2, "importe_unidad", 0));
	$pde_oc->setImporteTotal(Gral::getVars(2, "importe_total", 0));
	$pde_oc->setVencimiento(Gral::getVars(2, "vencimiento", date('Y-m-d')));
	$pde_oc->setPrvInsumoId(Gral::getVars(2, "prv_insumo_id", 'null'));
	$pde_oc->setPrvInsumoCostoId(Gral::getVars(2, "prv_insumo_costo_id", 'null'));
	$pde_oc->setImporteEsperado(Gral::getVars(2, "importe_esperado", 0));
	$pde_oc->setAfectaCosto(Gral::getVars(2, "afecta_costo", 0));
	$pde_oc->setPrvDescuentoFinancieroId(Gral::getVars(2, "prv_descuento_financiero_id", 'null'));
	$pde_oc->setPrvDescuentoComercialId(Gral::getVars(2, "prv_descuento_comercial_id", 'null'));
	$pde_oc->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$pde_oc->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pde_oc->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_oc->setOrden(Gral::getVars(2, "orden", 0));
	$pde_oc->setEstado(Gral::getVars(2, "estado", 0));
	$pde_oc->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_oc->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_oc->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_oc->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_oc' width='90%'>
        
				<tr>
				  <td  id="label_pde_oc_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_txt_descripcion' value='<?php Gral::_echoTxt($pde_oc->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_oc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_txt_codigo' value='<?php Gral::_echoTxt($pde_oc->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdePedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), $pde_oc->getPdePedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_pedido_id" <?php echo ($pde_oc->getPdePedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_cotizacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_cotizacion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCotizacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_cotizacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_cotizacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_cotizacion_id', Gral::getCmbFiltro(PdeCotizacion::getPdeCotizacionsCmb(), '...'), $pde_oc->getPdeCotizacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_COTIZACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_cotizacion_id" clase_id="pde_cotizacion" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_cotizacion_id" <?php echo ($pde_oc->getPdeCotizacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_cotizacion_id" clase_id="pde_cotizacion" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_cotizacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_cotizacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_cotizacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_cotizacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_cotizacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_cotizacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_oc->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_oc->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $pde_oc->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pde_oc->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_oc_agrupacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_agrupacion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOcAgrupacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_oc_agrupacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_oc_agrupacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_oc_agrupacion_id', Gral::getCmbFiltro(PdeOcAgrupacion::getPdeOcAgrupacionsCmb(), '...'), $pde_oc->getPdeOcAgrupacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_OC_AGRUPACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_oc_agrupacion_id" clase_id="pde_oc_agrupacion" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_agrupacion_id" <?php echo ($pde_oc->getPdeOcAgrupacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_oc_agrupacion_id" clase_id="pde_oc_agrupacion" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_oc_agrupacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_oc_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_oc_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_oc_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_oc_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_agrupacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_centro_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_centro_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_oc->getPdeCentroPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pde_oc->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_centro_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_centro_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_centro_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $pde_oc->getPdeCentroRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_CENTRO_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_recepcion_id" <?php echo ($pde_oc->getPdeCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_centro_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_oc_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOcTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_oc_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_oc_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_oc_tipo_estado_id', Gral::getCmbFiltro(PdeOcTipoEstado::getPdeOcTipoEstadosCmb(), '...'), $pde_oc->getPdeOcTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_OC_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_oc_tipo_estado_id" clase_id="pde_oc_tipo_estado" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_tipo_estado_id" <?php echo ($pde_oc->getPdeOcTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_oc_tipo_estado_id" clase_id="pde_oc_tipo_estado" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_oc_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_oc_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_oc_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_oc_tipo_estado_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_tipo_estado_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOcTipoEstadoRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_oc_tipo_estado_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_oc_tipo_estado_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_oc_tipo_estado_recepcion_id', Gral::getCmbFiltro(PdeOcTipoEstadoRecepcion::getPdeOcTipoEstadoRecepcionsCmb(), '...'), $pde_oc->getPdeOcTipoEstadoRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_OC_TIPO_ESTADO_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_oc_tipo_estado_recepcion_id" clase_id="pde_oc_tipo_estado_recepcion" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_tipo_estado_recepcion_id" <?php echo ($pde_oc->getPdeOcTipoEstadoRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_oc_tipo_estado_recepcion_id" clase_id="pde_oc_tipo_estado_recepcion" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_oc_tipo_estado_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_oc_tipo_estado_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_oc_tipo_estado_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_estado_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_estado_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_tipo_estado_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_oc_tipo_estado_facturacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_tipo_estado_facturacion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOcTipoEstadoFacturacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_oc_tipo_estado_facturacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_oc_tipo_estado_facturacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_oc_tipo_estado_facturacion_id', Gral::getCmbFiltro(PdeOcTipoEstadoFacturacion::getPdeOcTipoEstadoFacturacionsCmb(), '...'), $pde_oc->getPdeOcTipoEstadoFacturacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_OC_TIPO_ESTADO_FACTURACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_oc_tipo_estado_facturacion_id" clase_id="pde_oc_tipo_estado_facturacion" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_tipo_estado_facturacion_id" <?php echo ($pde_oc->getPdeOcTipoEstadoFacturacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_oc_tipo_estado_facturacion_id" clase_id="pde_oc_tipo_estado_facturacion" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_oc_tipo_estado_facturacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_oc_tipo_estado_facturacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_oc_tipo_estado_facturacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_estado_facturacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_estado_facturacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_tipo_estado_facturacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_pde_oc_tipo_origen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_tipo_origen_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOcTipoOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_pde_oc_tipo_origen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_oc_tipo_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_pde_oc_tipo_origen_id', Gral::getCmbFiltro(PdeOcTipoOrigen::getPdeOcTipoOrigensCmb(), '...'), $pde_oc->getPdeOcTipoOrigenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PDE_OC_TIPO_ORIGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_pde_oc_tipo_origen_id" clase_id="pde_oc_tipo_origen" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_tipo_origen_id" <?php echo ($pde_oc->getPdeOcTipoOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_pde_oc_tipo_origen_id" clase_id="pde_oc_tipo_origen" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_pde_oc_tipo_origen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_pde_oc_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_pde_oc_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_pde_oc_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_tipo_origen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_oc_txt_cantidad' value='<?php Gral::_echoTxt($pde_oc->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txt_fecha_entrega" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_entrega' ?>" >
				  
                                        <?php Lang::_lang('Fecha Entrega', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_fecha_entrega" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_entrega')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_fecha_entrega' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_oc_txt_fecha_entrega' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_oc->getFechaEntrega()), true) ?>' size='40' />
					<input type='button' id='cal_pde_oc_txt_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_oc_txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_pde_oc_txt_fecha_entrega'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_entrega')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txt_importe_unidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_unidad' ?>" >
				  
                                        <?php Lang::_lang('Importe Unidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_importe_unidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_unidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_importe_unidad' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='pde_oc_txt_importe_unidad' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_oc->getImporteUnidad()), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_alta_importe_unidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_importe_unidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_importe_unidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_importe_unidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_unidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txt_importe_total" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_total' ?>" >
				  
                                        <?php Lang::_lang('Importe Total', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_importe_total" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_total')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_importe_total' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='pde_oc_txt_importe_total' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_oc->getImporteTotal()), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_alta_importe_total', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_importe_total', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_importe_total', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_importe_total', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_total')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txt_vencimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vencimiento' ?>" >
				  
                                        <?php Lang::_lang('Vencimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_vencimiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_oc_txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_oc->getVencimiento()), true) ?>' size='40' />
					<input type='button' id='cal_pde_oc_txt_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_oc_txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_pde_oc_txt_vencimiento'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_vencimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_vencimiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_vencimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vencimiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_dbsug_prv_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('PrvInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_dbsug_prv_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_oc_dbsug_prv_insumo', 'ajax/modulos/prv_insumo/prv_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_oc->getPrvInsumoId(), $pde_oc->getPrvInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_oc_alta_prv_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_prv_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_prv_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_prv_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_dbsug_prv_insumo_costo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_insumo_costo_id' ?>" >
				  
                                        <?php Lang::_lang('PrvInsumoCosto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_dbsug_prv_insumo_costo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_insumo_costo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_oc_dbsug_prv_insumo_costo', 'ajax/modulos/prv_insumo_costo/prv_insumo_costo_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_oc->getPrvInsumoCostoId(), $pde_oc->getPrvInsumoCosto()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_oc_alta_prv_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_prv_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_prv_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_prv_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_insumo_costo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txt_importe_esperado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_esperado' ?>" >
				  
                                        <?php Lang::_lang('Importe Esperado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txt_importe_esperado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_esperado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_txt_importe_esperado' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_txt_importe_esperado' value='<?php Gral::_echoTxt($pde_oc->getImporteEsperado(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_alta_importe_esperado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_importe_esperado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_importe_esperado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_importe_esperado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_esperado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_afecta_costo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afecta_costo' ?>" >
				  
                                        <?php Lang::_lang('Afecta Costo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_afecta_costo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afecta_costo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_afecta_costo', GralSiNo::getGralSiNosCmb(), $pde_oc->getAfectaCosto(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_afecta_costo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_afecta_costo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_afecta_costo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_afecta_costo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afecta_costo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_prv_descuento_financiero_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_descuento_financiero_id' ?>" >
				  
                                        <?php Lang::_lang('PrvDescuentoFinanciero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_prv_descuento_financiero_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_descuento_financiero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_prv_descuento_financiero_id', Gral::getCmbFiltro(PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmb(), '...'), $pde_oc->getPrvDescuentoFinancieroId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PRV_DESCUENTO_FINANCIERO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_prv_descuento_financiero_id" clase_id="prv_descuento_financiero" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_descuento_financiero_id" <?php echo ($pde_oc->getPrvDescuentoFinancieroId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_prv_descuento_financiero_id" clase_id="prv_descuento_financiero" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_prv_descuento_financiero_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_prv_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_prv_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_prv_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_prv_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_descuento_financiero_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_cmb_prv_descuento_comercial_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_descuento_comercial_id' ?>" >
				  
                                        <?php Lang::_lang('PrvDescuentoComercial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_cmb_prv_descuento_comercial_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_descuento_comercial_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_cmb_prv_descuento_comercial_id', Gral::getCmbFiltro(PrvDescuentoComercial::getPrvDescuentoComercialsCmb(), '...'), $pde_oc->getPrvDescuentoComercialId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA_CMB_EDIT_PRV_DESCUENTO_COMERCIAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_cmb_prv_descuento_comercial_id" clase_id="prv_descuento_comercial" prefijo='pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_descuento_comercial_id" <?php echo ($pde_oc->getPrvDescuentoComercialId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_cmb_prv_descuento_comercial_id" clase_id="prv_descuento_comercial" prefijo='pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_cmb_prv_descuento_comercial_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_alta_prv_descuento_comercial_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_prv_descuento_comercial_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_prv_descuento_comercial_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_prv_descuento_comercial_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_descuento_comercial_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txa_nota_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >
				  
                                        <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txa_nota_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_oc_txa_nota_publica' rows='10' cols='50' id='pde_oc_txa_nota_publica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_oc->getNotaPublica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_oc_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_oc_txa_nota_interna' rows='10' cols='50' id='pde_oc_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_oc->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_oc_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_oc_txa_observacion' rows='10' cols='50' id='pde_oc_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_oc->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_oc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_oc->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_oc_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_oc'/>
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

