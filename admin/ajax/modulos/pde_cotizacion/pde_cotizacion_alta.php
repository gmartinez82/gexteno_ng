<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_COTIZACION_ALTA')){
    echo "No tiene asignada la credencial PDE_COTIZACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_cotizacion';
$db_nombre_pagina = 'pde_cotizacion_alta';

$pde_cotizacion = new PdeCotizacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_cotizacion = new PdeCotizacion();
	if(trim($hdn_id) != '') $pde_cotizacion->setId($hdn_id, false);
	$pde_cotizacion->setDescripcion(Gral::getVars(1, "pde_cotizacion_txt_descripcion"));
	$pde_cotizacion->setCodigo(Gral::getVars(1, "pde_cotizacion_txt_codigo"));
	$pde_cotizacion->setPdePedidoId(Gral::getVars(1, "pde_cotizacion_cmb_pde_pedido_id", null));
	$pde_cotizacion->setPrvProveedorId(Gral::getVars(1, "pde_cotizacion_cmb_prv_proveedor_id", null));
	$pde_cotizacion->setInsInsumoId(Gral::getVars(1, "pde_cotizacion_cmb_ins_insumo_id", null));
	$pde_cotizacion->setCantidad(Gral::getVars(1, "pde_cotizacion_txt_cantidad", 0));
	$pde_cotizacion->setFechaEntrega(Gral::getFechaToDb(Gral::getVars(1, "pde_cotizacion_txt_fecha_entrega")));
	$pde_cotizacion->setImporteUnidad(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_cotizacion_txt_importe_unidad", 0)));
	$pde_cotizacion->setImporteTotal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_cotizacion_txt_importe_total", 0)));
	$pde_cotizacion->setObservacion(Gral::getVars(1, "pde_cotizacion_txa_observacion"));
	$pde_cotizacion->setOrden(Gral::getVars(1, "pde_cotizacion_txt_orden", 0));
	$pde_cotizacion->setEstado(Gral::getVars(1, "pde_cotizacion__estado", 0));
	$pde_cotizacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_cotizacion_txt_creado")));
	$pde_cotizacion->setCreadoPor(Gral::getVars(1, "pde_cotizacion__creado_por", null));
	$pde_cotizacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_cotizacion_txt_modificado")));
	$pde_cotizacion->setModificadoPor(Gral::getVars(1, "pde_cotizacion__modificado_por", null));

	$pde_cotizacion_estado = new PdeCotizacion();
	if(trim($hdn_id) != ''){
		$pde_cotizacion_estado->setId($hdn_id);
		$pde_cotizacion->setEstado($pde_cotizacion_estado->getEstado());
				
	}else{
		$pde_cotizacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_cotizacion->control();
			if(!$error->getExisteError()){
				$pde_cotizacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_cotizacion_alta.php?cs=1&id='.$pde_cotizacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_cotizacion->control();
			if(!$error->getExisteError()){
				$pde_cotizacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_cotizacion_alta.php?cs=1');
				$pde_cotizacion = new PdeCotizacion();
			}
		break;
	}
	Gral::setSes('PdeCotizacion_ULTIMO_INSERTADO', $pde_cotizacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_cotizacion_id = Gral::getVars(2, $prefijo.'cmb_pde_cotizacion_id', 0);
	if($cmb_pde_cotizacion_id != 0){
		$pde_cotizacion = PdeCotizacion::getOxId($cmb_pde_cotizacion_id);
	}else{
	
	$pde_cotizacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_cotizacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_cotizacion->setPdePedidoId(Gral::getVars(2, "pde_pedido_id", 'null'));
	$pde_cotizacion->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_cotizacion->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$pde_cotizacion->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_cotizacion->setFechaEntrega(Gral::getVars(2, "fecha_entrega", date('Y-m-d')));
	$pde_cotizacion->setImporteUnidad(Gral::getVars(2, "importe_unidad", 0));
	$pde_cotizacion->setImporteTotal(Gral::getVars(2, "importe_total", 0));
	$pde_cotizacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_cotizacion->setOrden(Gral::getVars(2, "orden", 0));
	$pde_cotizacion->setEstado(Gral::getVars(2, "estado", 0));
	$pde_cotizacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_cotizacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_cotizacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_cotizacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_cotizacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_cotizacion/pde_cotizacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_cotizacion' width='90%'>
        
				<tr>
				  <td  id="label_pde_cotizacion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_cotizacion_txt_descripcion' value='<?php Gral::_echoTxt($pde_cotizacion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_cotizacion_txt_codigo' value='<?php Gral::_echoTxt($pde_cotizacion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_cmb_pde_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdePedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_cmb_pde_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_cotizacion_cmb_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), $pde_cotizacion->getPdePedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ALTA_CMB_EDIT_PDE_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_cotizacion_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_cotizacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_pedido_id" <?php echo ($pde_cotizacion->getPdePedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_cotizacion_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_cotizacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_cotizacion_cmb_pde_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_pde_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_pde_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_pde_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_pde_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_cotizacion_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_cotizacion->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_cotizacion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_cotizacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_cotizacion->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_cotizacion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_cotizacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_cotizacion_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_cotizacion_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $pde_cotizacion->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_cotizacion_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_cotizacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pde_cotizacion->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_cotizacion_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_cotizacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_cotizacion_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_cotizacion_txt_cantidad' value='<?php Gral::_echoTxt($pde_cotizacion->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_txt_fecha_entrega" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_entrega' ?>" >
				  
                                        <?php Lang::_lang('Fecha Entrega', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_txt_fecha_entrega" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_entrega')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_txt_fecha_entrega' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_cotizacion_txt_fecha_entrega' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_cotizacion->getFechaEntrega()), true) ?>' size='40' />
					<input type='button' id='cal_pde_cotizacion_txt_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_cotizacion_txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_pde_cotizacion_txt_fecha_entrega'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_entrega')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_txt_importe_unidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_unidad' ?>" >
				  
                                        <?php Lang::_lang('Importe Unidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_txt_importe_unidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_unidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_txt_importe_unidad' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='pde_cotizacion_txt_importe_unidad' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_cotizacion->getImporteUnidad()), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_importe_unidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_importe_unidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_importe_unidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_importe_unidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_unidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_txt_importe_total" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_total' ?>" >
				  
                                        <?php Lang::_lang('Importe Total', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_txt_importe_total" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_total')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_cotizacion_txt_importe_total' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='pde_cotizacion_txt_importe_total' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_cotizacion->getImporteTotal()), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_importe_total', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_importe_total', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_importe_total', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_importe_total', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_total')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_cotizacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_cotizacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_cotizacion_txa_observacion' rows='10' cols='50' id='pde_cotizacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_cotizacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_cotizacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_cotizacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_cotizacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_cotizacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_cotizacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_cotizacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_cotizacion'/>
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

