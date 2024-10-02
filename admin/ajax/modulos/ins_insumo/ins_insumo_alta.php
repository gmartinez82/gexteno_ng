<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo';
$db_nombre_pagina = 'ins_insumo_alta';

$ins_insumo = new InsInsumo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo = new InsInsumo();
	if(trim($hdn_id) != '') $ins_insumo->setId($hdn_id, false);
	$ins_insumo->setInsCategoriaId(Gral::getVars(1, "ins_insumo_cmb_ins_categoria_id", null));
	$ins_insumo->setInsMatrizId(Gral::getVars(1, "ins_insumo_dbsug_ins_matriz_id", null));
	$ins_insumo->setDescripcion(Gral::getVars(1, "ins_insumo_txt_descripcion"));
	$ins_insumo->setInsMarcaId(Gral::getVars(1, "ins_insumo_cmb_ins_marca_id", null));
	$ins_insumo->setDescripcionCorta(Gral::getVars(1, "ins_insumo_txt_descripcion_corta"));
	$ins_insumo->setDescripcionWeb(Gral::getVars(1, "ins_insumo_txt_descripcion_web"));
	$ins_insumo->setCodigo(Gral::getVars(1, "ins_insumo_txt_codigo"));
	$ins_insumo->setCodigoMarca(Gral::getVars(1, "ins_insumo_txt_codigo_marca"));
	$ins_insumo->setCodigoInterno(Gral::getVars(1, "ins_insumo_txt_codigo_interno"));
	$ins_insumo->setCodigoImportacion(Gral::getVars(1, "ins_insumo_txt_codigo_importacion"));
	$ins_insumo->setCodigoBarra(Gral::getVars(1, "ins_insumo_txt_codigo_barra"));
	$ins_insumo->setCodigoBarraInterno(Gral::getVars(1, "ins_insumo_txt_codigo_barra_interno"));
	$ins_insumo->setUrlTienda(Gral::getVars(1, "ins_insumo_txt_url_tienda"));
	$ins_insumo->setInsUnidadMedidaId(Gral::getVars(1, "ins_insumo_cmb_ins_unidad_medida_id", null));
	$ins_insumo->setEsComprable(Gral::getVars(1, "ins_insumo_cmb_es_comprable", 0));
	$ins_insumo->setEsConsumible(Gral::getVars(1, "ins_insumo_cmb_es_consumible", 0));
	$ins_insumo->setEsVendible(Gral::getVars(1, "ins_insumo_cmb_es_vendible", 0));
	$ins_insumo->setEsFabricable(Gral::getVars(1, "ins_insumo_cmb_es_fabricable", 0));
	$ins_insumo->setEsTransformableOrigen(Gral::getVars(1, "ins_insumo_cmb_es_transformable_origen", 0));
	$ins_insumo->setEsTransformableDestino(Gral::getVars(1, "ins_insumo_cmb_es_transformable_destino", 0));
	$ins_insumo->setInsUnidadMedidaPedidoId(Gral::getVars(1, "ins_insumo_cmb_ins_unidad_medida_pedido_id", null));
	$ins_insumo->setInsTipoConsumoId(Gral::getVars(1, "ins_insumo_cmb_ins_tipo_consumo_id", null));
	$ins_insumo->setRetornable(Gral::getVars(1, "ins_insumo_cmb_retornable", 0));
	$ins_insumo->setIdentificable(Gral::getVars(1, "ins_insumo_cmb_identificable", 0));
	$ins_insumo->setControlStock(Gral::getVars(1, "ins_insumo_cmb_control_stock", 0));
	$ins_insumo->setPuntoMinimo(Gral::getVars(1, "ins_insumo_txt_punto_minimo", 0));
	$ins_insumo->setPuntoPedido(Gral::getVars(1, "ins_insumo_txt_punto_pedido", 0));
	$ins_insumo->setPuntoMaximo(Gral::getVars(1, "ins_insumo_txt_punto_maximo", 0));
	$ins_insumo->setCantidadMaximaPedido(Gral::getVars(1, "ins_insumo_txt_cantidad_maxima_pedido", 0));
	$ins_insumo->setInsTipoNecesidadId(Gral::getVars(1, "ins_insumo_cmb_ins_tipo_necesidad_id", null));
	$ins_insumo->setInsNivelAprovisionamientoId(Gral::getVars(1, "ins_insumo_cmb_ins_nivel_aprovisionamiento_id", null));
	$ins_insumo->setHeredaMarcas(Gral::getVars(1, "ins_insumo_cmb_hereda_marcas", 0));
	$ins_insumo->setVentaWeb(Gral::getVars(1, "ins_insumo_cmb_venta_web", 0));
	$ins_insumo->setVentaMercadolibre(Gral::getVars(1, "ins_insumo_cmb_venta_mercadolibre", 0));
	$ins_insumo->setVentaMayorista(Gral::getVars(1, "ins_insumo_cmb_venta_mayorista", 0));
	$ins_insumo->setGralTipoIvaVenta(Gral::getVars(1, "ins_insumo_cmb_gral_tipo_iva_venta", null));
	$ins_insumo->setGralTipoIvaVentaZ(Gral::getVars(1, "ins_insumo_cmb_gral_tipo_iva_venta_z", null));
	$ins_insumo->setGralTipoIvaCompra(Gral::getVars(1, "ins_insumo_cmb_gral_tipo_iva_compra", null));
	$ins_insumo->setGralTipoIvaCompraZ(Gral::getVars(1, "ins_insumo_cmb_gral_tipo_iva_compra_z", null));
	$ins_insumo->setProporcionIva(Gral::getVars(1, "ins_insumo_txt_proporcion_iva", 100));
	$ins_insumo->setInsTipoInsumoId(Gral::getVars(1, "ins_insumo_cmb_ins_tipo_insumo_id", null));
	$ins_insumo->setInsTipoFabricanteId(Gral::getVars(1, "ins_insumo_cmb_ins_tipo_fabricante_id", null));
	$ins_insumo->setNotasInternas(Gral::getVars(1, "ins_insumo_txa_notas_internas"));
	$ins_insumo->setObservacion(Gral::getVars(1, "ins_insumo_txa_observacion"));
	$ins_insumo->setDatosMigracion(Gral::getVars(1, "ins_insumo_txa_datos_migracion"));
	$ins_insumo->setClaves(Gral::getVars(1, "ins_insumo_txa_claves"));
	$ins_insumo->setClavesAtributos(Gral::getVars(1, "ins_insumo_txa_claves_atributos"));
	$ins_insumo->setClavesTienda(Gral::getVars(1, "ins_insumo_txa_claves_tienda"));
	$ins_insumo->setOrden(Gral::getVars(1, "ins_insumo_txt_orden", 0));
	$ins_insumo->setEstado(Gral::getVars(1, "ins_insumo__estado", 0));
	$ins_insumo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_txt_creado")));
	$ins_insumo->setCreadoPor(Gral::getVars(1, "ins_insumo__creado_por", null));
	$ins_insumo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_txt_modificado")));
	$ins_insumo->setModificadoPor(Gral::getVars(1, "ins_insumo__modificado_por", null));

	$ins_insumo_estado = new InsInsumo();
	if(trim($hdn_id) != ''){
		$ins_insumo_estado->setId($hdn_id);
		$ins_insumo->setEstado($ins_insumo_estado->getEstado());
				
	}else{
		$ins_insumo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_insumo->control();
			if(!$error->getExisteError()){
				$ins_insumo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_alta.php?cs=1&id='.$ins_insumo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo->control();
			if(!$error->getExisteError()){
				$ins_insumo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_alta.php?cs=1');
				$ins_insumo = new InsInsumo();
			}
		break;
	}
	Gral::setSes('InsInsumo_ULTIMO_INSERTADO', $ins_insumo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_id', 0);
	if($cmb_ins_insumo_id != 0){
		$ins_insumo = InsInsumo::getOxId($cmb_ins_insumo_id);
	}else{
	
	$ins_insumo->setInsCategoriaId(Gral::getVars(2, "ins_categoria_id", 'null'));
	$ins_insumo->setInsMatrizId(Gral::getVars(2, "ins_matriz_id", 'null'));
	$ins_insumo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_insumo->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
	$ins_insumo->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$ins_insumo->setDescripcionWeb(Gral::getVars(2, "descripcion_web", ''));
	$ins_insumo->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_insumo->setCodigoMarca(Gral::getVars(2, "codigo_marca", ''));
	$ins_insumo->setCodigoInterno(Gral::getVars(2, "codigo_interno", ''));
	$ins_insumo->setCodigoImportacion(Gral::getVars(2, "codigo_importacion", ''));
	$ins_insumo->setCodigoBarra(Gral::getVars(2, "codigo_barra", ''));
	$ins_insumo->setCodigoBarraInterno(Gral::getVars(2, "codigo_barra_interno", ''));
	$ins_insumo->setUrlTienda(Gral::getVars(2, "url_tienda", ''));
	$ins_insumo->setInsUnidadMedidaId(Gral::getVars(2, "ins_unidad_medida_id", 'null'));
	$ins_insumo->setEsComprable(Gral::getVars(2, "es_comprable", 0));
	$ins_insumo->setEsConsumible(Gral::getVars(2, "es_consumible", 0));
	$ins_insumo->setEsVendible(Gral::getVars(2, "es_vendible", 0));
	$ins_insumo->setEsFabricable(Gral::getVars(2, "es_fabricable", 0));
	$ins_insumo->setEsTransformableOrigen(Gral::getVars(2, "es_transformable_origen", 0));
	$ins_insumo->setEsTransformableDestino(Gral::getVars(2, "es_transformable_destino", 0));
	$ins_insumo->setInsUnidadMedidaPedidoId(Gral::getVars(2, "ins_unidad_medida_pedido_id", 'null'));
	$ins_insumo->setInsTipoConsumoId(Gral::getVars(2, "ins_tipo_consumo_id", 'null'));
	$ins_insumo->setRetornable(Gral::getVars(2, "retornable", 0));
	$ins_insumo->setIdentificable(Gral::getVars(2, "identificable", 0));
	$ins_insumo->setControlStock(Gral::getVars(2, "control_stock", 0));
	$ins_insumo->setPuntoMinimo(Gral::getVars(2, "punto_minimo", 0));
	$ins_insumo->setPuntoPedido(Gral::getVars(2, "punto_pedido", 0));
	$ins_insumo->setPuntoMaximo(Gral::getVars(2, "punto_maximo", 0));
	$ins_insumo->setCantidadMaximaPedido(Gral::getVars(2, "cantidad_maxima_pedido", 0));
	$ins_insumo->setInsTipoNecesidadId(Gral::getVars(2, "ins_tipo_necesidad_id", 'null'));
	$ins_insumo->setInsNivelAprovisionamientoId(Gral::getVars(2, "ins_nivel_aprovisionamiento_id", 'null'));
	$ins_insumo->setHeredaMarcas(Gral::getVars(2, "hereda_marcas", 0));
	$ins_insumo->setVentaWeb(Gral::getVars(2, "venta_web", 0));
	$ins_insumo->setVentaMercadolibre(Gral::getVars(2, "venta_mercadolibre", 0));
	$ins_insumo->setVentaMayorista(Gral::getVars(2, "venta_mayorista", 0));
	$ins_insumo->setGralTipoIvaVenta(Gral::getVars(2, "gral_tipo_iva_venta", 'null'));
	$ins_insumo->setGralTipoIvaVentaZ(Gral::getVars(2, "gral_tipo_iva_venta_z", 'null'));
	$ins_insumo->setGralTipoIvaCompra(Gral::getVars(2, "gral_tipo_iva_compra", 'null'));
	$ins_insumo->setGralTipoIvaCompraZ(Gral::getVars(2, "gral_tipo_iva_compra_z", 'null'));
	$ins_insumo->setProporcionIva(Gral::getVars(2, "proporcion_iva", 0));
	$ins_insumo->setInsTipoInsumoId(Gral::getVars(2, "ins_tipo_insumo_id", 'null'));
	$ins_insumo->setInsTipoFabricanteId(Gral::getVars(2, "ins_tipo_fabricante_id", 'null'));
	$ins_insumo->setNotasInternas(Gral::getVars(2, "notas_internas", ''));
	$ins_insumo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_insumo->setDatosMigracion(Gral::getVars(2, "datos_migracion", ''));
	$ins_insumo->setClaves(Gral::getVars(2, "claves", ''));
	$ins_insumo->setClavesAtributos(Gral::getVars(2, "claves_atributos", ''));
	$ins_insumo->setClavesTienda(Gral::getVars(2, "claves_tienda", ''));
	$ins_insumo->setOrden(Gral::getVars(2, "orden", 0));
	$ins_insumo->setEstado(Gral::getVars(2, "estado", 0));
	$ins_insumo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo/ins_insumo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_cmb_ins_categoria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_categoria_id' ?>" >
				  
                                        <?php Lang::_lang('InsCategoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_ins_categoria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_categoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), $ins_insumo->getInsCategoriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_CATEGORIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_cmb_ins_categoria_id" clase_id="ins_categoria" prefijo='ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_categoria_id" <?php echo ($ins_insumo->getInsCategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_cmb_ins_categoria_id" clase_id="ins_categoria" prefijo='ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_cmb_ins_categoria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_alta_ins_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_ins_categoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_ins_categoria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_ins_categoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_categoria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_txt_descripcion' value='<?php Gral::_echoTxt($ins_insumo->getDescripcion(), true) ?>' size='60' />            
                    <?php if(Lang::_lang('help_ins_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_ins_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_id' ?>" >
				  
                                        <?php Lang::_lang('InsMarca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_ins_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $ins_insumo->getInsMarcaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_MARCA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_cmb_ins_marca_id" clase_id="ins_marca" prefijo='ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($ins_insumo->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_cmb_ins_marca_id" clase_id="ins_marca" prefijo='ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_cmb_ins_marca_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_codigo_interno" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_interno' ?>" >
				  
                                        <?php Lang::_lang('Codigo Interno', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_codigo_interno" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_interno')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_codigo_interno' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_txt_codigo_interno' value='<?php Gral::_echoTxt($ins_insumo->getCodigoInterno(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_alta_codigo_interno', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_codigo_interno', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_codigo_interno', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_codigo_interno', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_interno')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_ins_tipo_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_tipo_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsTipoInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_ins_tipo_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_tipo_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(), '...'), $ins_insumo->getInsTipoInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_TIPO_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_cmb_ins_tipo_insumo_id" clase_id="ins_tipo_insumo" prefijo='ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_tipo_insumo_id" <?php echo ($ins_insumo->getInsTipoInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_cmb_ins_tipo_insumo_id" clase_id="ins_tipo_insumo" prefijo='ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_cmb_ins_tipo_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_alta_ins_tipo_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_ins_tipo_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_ins_tipo_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_ins_tipo_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_tipo_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txa_notas_internas" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_notas_internas' ?>" >
				  
                                        <?php Lang::_lang('Notas Internas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txa_notas_internas" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('notas_internas')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_txa_notas_internas' rows='3' cols='70' id='ins_insumo_txa_notas_internas' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo->getNotasInternas(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_insumo_alta_notas_internas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_notas_internas', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_notas_internas', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_notas_internas', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('notas_internas')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_txa_observacion' rows='3' cols='70' id='ins_insumo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txa_datos_migracion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_datos_migracion' ?>" >
				  
                                        <?php Lang::_lang('Datos Migracion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txa_datos_migracion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('datos_migracion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_txa_datos_migracion' rows='3' cols='50' id='ins_insumo_txa_datos_migracion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo->getDatosMigracion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_insumo_alta_datos_migracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_alta_datos_migracion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_alta_datos_migracion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_alta_datos_migracion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('datos_migracion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo'/>
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

