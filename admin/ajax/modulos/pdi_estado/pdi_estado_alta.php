<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDI_ESTADO_ALTA')){
    echo "No tiene asignada la credencial PDI_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pdi_estado';
$db_nombre_pagina = 'pdi_estado_alta';

$pdi_estado = new PdiEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pdi_estado = new PdiEstado();
	if(trim($hdn_id) != '') $pdi_estado->setId($hdn_id, false);
	$pdi_estado->setPdiPedidoId(Gral::getVars(1, "pdi_estado_cmb_pdi_pedido_id", null));
	$pdi_estado->setPdiTipoEstadoId(Gral::getVars(1, "pdi_estado_cmb_pdi_tipo_estado_id", null));
	$pdi_estado->setInicial(Gral::getVars(1, "pdi_estado_cmb_inicial", 0));
	$pdi_estado->setActual(Gral::getVars(1, "pdi_estado_cmb_actual", 0));
	$pdi_estado->setCantidad(Gral::getVars(1, "pdi_estado_txt_cantidad", 0));
	$pdi_estado->setCantidadStockReal(Gral::getVars(1, "pdi_estado_txt_cantidad_stock_real", 0));
	$pdi_estado->setCantidadStockComprometida(Gral::getVars(1, "pdi_estado_txt_cantidad_stock_comprometida", 0));
	$pdi_estado->setFechahora(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_estado_txt_fechahora")));
	$pdi_estado->setVentaPerdida(Gral::getVars(1, "pdi_estado_cmb_venta_perdida", 0));
	$pdi_estado->setObservacion(Gral::getVars(1, "pdi_estado_txa_observacion"));
	$pdi_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_estado_txt_creado")));
	$pdi_estado->setCreadoPor(Gral::getVars(1, "pdi_estado__creado_por", null));
	$pdi_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_estado_txt_modificado")));
	$pdi_estado->setModificadoPor(Gral::getVars(1, "pdi_estado__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $pdi_estado->control();
			if(!$error->getExisteError()){
				$pdi_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pdi_estado_alta.php?cs=1&id='.$pdi_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_estado->control();
			if(!$error->getExisteError()){
				$pdi_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pdi_estado_alta.php?cs=1');
				$pdi_estado = new PdiEstado();
			}
		break;
	}
	Gral::setSes('PdiEstado_ULTIMO_INSERTADO', $pdi_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pdi_estado_id = Gral::getVars(2, $prefijo.'cmb_pdi_estado_id', 0);
	if($cmb_pdi_estado_id != 0){
		$pdi_estado = PdiEstado::getOxId($cmb_pdi_estado_id);
	}else{
	
	$pdi_estado->setPdiPedidoId(Gral::getVars(2, "pdi_pedido_id", 'null'));
	$pdi_estado->setPdiTipoEstadoId(Gral::getVars(2, "pdi_tipo_estado_id", 'null'));
	$pdi_estado->setInicial(Gral::getVars(2, "inicial", 0));
	$pdi_estado->setActual(Gral::getVars(2, "actual", 0));
	$pdi_estado->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pdi_estado->setCantidadStockReal(Gral::getVars(2, "cantidad_stock_real", 0));
	$pdi_estado->setCantidadStockComprometida(Gral::getVars(2, "cantidad_stock_comprometida", 0));
	$pdi_estado->setFechahora(Gral::getVars(2, "fechahora", date('Y-m-d H:m:s')));
	$pdi_estado->setVentaPerdida(Gral::getVars(2, "venta_perdida", 0));
	$pdi_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pdi_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pdi_estado/pdi_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pdi_estado' width='90%'>
        
				<tr>
				  <td  id="label_pdi_estado_cmb_pdi_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdiPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_cmb_pdi_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_estado_cmb_pdi_pedido_id', Gral::getCmbFiltro(PdiPedido::getPdiPedidosCmb(), '...'), $pdi_estado->getPdiPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_ESTADO_ALTA_CMB_EDIT_PDI_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_estado_cmb_pdi_pedido_id" clase_id="pdi_pedido" prefijo='pdi_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_pedido_id" <?php echo ($pdi_estado->getPdiPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_estado_cmb_pdi_pedido_id" clase_id="pdi_pedido" prefijo='pdi_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_estado_cmb_pdi_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_estado_alta_pdi_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_pdi_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_pdi_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_pdi_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_cmb_pdi_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdiTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_cmb_pdi_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_estado_cmb_pdi_tipo_estado_id', Gral::getCmbFiltro(PdiTipoEstado::getPdiTipoEstadosCmb(), '...'), $pdi_estado->getPdiTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_ESTADO_ALTA_CMB_EDIT_PDI_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_estado_cmb_pdi_tipo_estado_id" clase_id="pdi_tipo_estado" prefijo='pdi_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_tipo_estado_id" <?php echo ($pdi_estado->getPdiTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_estado_cmb_pdi_tipo_estado_id" clase_id="pdi_tipo_estado" prefijo='pdi_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_estado_cmb_pdi_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_estado_alta_pdi_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_pdi_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_pdi_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_pdi_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_estado_cmb_inicial', GralSiNo::getGralSiNosCmb(), $pdi_estado->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_estado_cmb_actual', GralSiNo::getGralSiNosCmb(), $pdi_estado->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_estado_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pdi_estado_txt_cantidad' value='<?php Gral::_echoTxt($pdi_estado->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_estado_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_txt_cantidad_stock_real" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_stock_real' ?>" >
				  
                                        <?php Lang::_lang('Cantidad Stock Real', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_txt_cantidad_stock_real" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_stock_real')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_estado_txt_cantidad_stock_real' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pdi_estado_txt_cantidad_stock_real' value='<?php Gral::_echoTxt($pdi_estado->getCantidadStockReal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_estado_alta_cantidad_stock_real', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_cantidad_stock_real', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_cantidad_stock_real', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_cantidad_stock_real', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_stock_real')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_txt_cantidad_stock_comprometida" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_stock_comprometida' ?>" >
				  
                                        <?php Lang::_lang('Cantidad Stock Comprometida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_txt_cantidad_stock_comprometida" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_stock_comprometida')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_estado_txt_cantidad_stock_comprometida' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pdi_estado_txt_cantidad_stock_comprometida' value='<?php Gral::_echoTxt($pdi_estado->getCantidadStockComprometida(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_estado_alta_cantidad_stock_comprometida', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_cantidad_stock_comprometida', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_cantidad_stock_comprometida', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_cantidad_stock_comprometida', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_stock_comprometida')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_txt_fechahora" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fechahora' ?>" >
				  
                                        <?php Lang::_lang('Fecha Hora', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_txt_fechahora" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fechahora')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_estado_txt_fechahora' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='pdi_estado_txt_fechahora' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($pdi_estado->getFechahora()), true) ?>' size='40' />
					<input type='button' id='cal_pdi_estado_txt_fechahora' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pdi_estado_txt_fechahora', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_pdi_estado_txt_fechahora'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pdi_estado_alta_fechahora', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_fechahora', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_fechahora', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_fechahora', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fechahora')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_cmb_venta_perdida" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_venta_perdida' ?>" >
				  
                                        <?php Lang::_lang('Venta Perdida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_cmb_venta_perdida" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('venta_perdida')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_estado_cmb_venta_perdida', GralSiNo::getGralSiNosCmb(), $pdi_estado->getVentaPerdida(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_estado_alta_venta_perdida', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_venta_perdida', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_venta_perdida', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_venta_perdida', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('venta_perdida')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_estado_txa_observacion' rows='10' cols='50' id='pdi_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pdi_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pdi_estado'/>
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

