<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA')){
    echo "No tiene asignada la credencial PDI_PEDIDO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pdi_pedido';
$db_nombre_pagina = 'pdi_pedido_alta';

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pdi_pedido = new PdiPedido();
	if(trim($hdn_id) != '') $pdi_pedido->setId($hdn_id, false);
	$pdi_pedido->setDescripcion(Gral::getVars(1, "pdi_pedido_txt_descripcion"));
	$pdi_pedido->setInsInsumoId(Gral::getVars(1, "pdi_pedido_cmb_ins_insumo_id", null));
	$pdi_pedido->setPdiTipoOrigenId(Gral::getVars(1, "pdi_pedido_cmb_pdi_tipo_origen_id", null));
	$pdi_pedido->setPdiUrgenciaId(Gral::getVars(1, "pdi_pedido_cmb_pdi_urgencia_id", null));
	$pdi_pedido->setPanPanolOrigen(Gral::getVars(1, "pdi_pedido_cmb_pan_panol_origen", null));
	$pdi_pedido->setPanPanolDestino(Gral::getVars(1, "pdi_pedido_cmb_pan_panol_destino", null));
	$pdi_pedido->setCodigo(Gral::getVars(1, "pdi_pedido_txt_codigo"));
	$pdi_pedido->setPdiTipoEstadoId(Gral::getVars(1, "pdi_pedido_cmb_pdi_tipo_estado_id", null));
	$pdi_pedido->setPdiPedidoAgrupacionId(Gral::getVars(1, "pdi_pedido_dbsug_pdi_pedido_agrupacion_id", null));
	$pdi_pedido->setPdiPedidoAgrupacionItemId(Gral::getVars(1, "pdi_pedido_dbsug_pdi_pedido_agrupacion_item_id", null));
	$pdi_pedido->setVentaPerdida(Gral::getVars(1, "pdi_pedido_cmb_venta_perdida", 0));
	$pdi_pedido->setNotaPublica(Gral::getVars(1, "pdi_pedido_txa_nota_publica"));
	$pdi_pedido->setNotaInterna(Gral::getVars(1, "pdi_pedido_txa_nota_interna"));
	$pdi_pedido->setObservacion(Gral::getVars(1, "pdi_pedido_txa_observacion"));
	$pdi_pedido->setOrden(Gral::getVars(1, "pdi_pedido_txt_orden", 0));
	$pdi_pedido->setEstado(Gral::getVars(1, "pdi_pedido__estado", 0));
	$pdi_pedido->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_txt_creado")));
	$pdi_pedido->setCreadoPor(Gral::getVars(1, "pdi_pedido__creado_por", null));
	$pdi_pedido->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_txt_modificado")));
	$pdi_pedido->setModificadoPor(Gral::getVars(1, "pdi_pedido__modificado_por", null));

	$pdi_pedido_estado = new PdiPedido();
	if(trim($hdn_id) != ''){
		$pdi_pedido_estado->setId($hdn_id);
		$pdi_pedido->setEstado($pdi_pedido_estado->getEstado());
				
	}else{
		$pdi_pedido->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pdi_pedido->control();
			if(!$error->getExisteError()){
				$pdi_pedido->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pdi_pedido_alta.php?cs=1&id='.$pdi_pedido->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_pedido->control();
			if(!$error->getExisteError()){
				$pdi_pedido->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pdi_pedido_alta.php?cs=1');
				$pdi_pedido = new PdiPedido();
			}
		break;
	}
	Gral::setSes('PdiPedido_ULTIMO_INSERTADO', $pdi_pedido->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pdi_pedido_id = Gral::getVars(2, $prefijo.'cmb_pdi_pedido_id', 0);
	if($cmb_pdi_pedido_id != 0){
		$pdi_pedido = PdiPedido::getOxId($cmb_pdi_pedido_id);
	}else{
	
	$pdi_pedido->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pdi_pedido->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$pdi_pedido->setPdiTipoOrigenId(Gral::getVars(2, "pdi_tipo_origen_id", 'null'));
	$pdi_pedido->setPdiUrgenciaId(Gral::getVars(2, "pdi_urgencia_id", 'null'));
	$pdi_pedido->setPanPanolOrigen(Gral::getVars(2, "pan_panol_origen", 'null'));
	$pdi_pedido->setPanPanolDestino(Gral::getVars(2, "pan_panol_destino", 'null'));
	$pdi_pedido->setCodigo(Gral::getVars(2, "codigo", ''));
	$pdi_pedido->setPdiTipoEstadoId(Gral::getVars(2, "pdi_tipo_estado_id", 'null'));
	$pdi_pedido->setPdiPedidoAgrupacionId(Gral::getVars(2, "pdi_pedido_agrupacion_id", 'null'));
	$pdi_pedido->setPdiPedidoAgrupacionItemId(Gral::getVars(2, "pdi_pedido_agrupacion_item_id", 'null'));
	$pdi_pedido->setVentaPerdida(Gral::getVars(2, "venta_perdida", 0));
	$pdi_pedido->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$pdi_pedido->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pdi_pedido->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_pedido->setOrden(Gral::getVars(2, "orden", 0));
	$pdi_pedido->setEstado(Gral::getVars(2, "estado", 0));
	$pdi_pedido->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_pedido->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_pedido->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_pedido->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pdi_pedido->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pdi_pedido/pdi_pedido_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pdi_pedido' width='90%'>
        
				<tr>
				  <td  id="label_pdi_pedido_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_txt_descripcion' value='<?php Gral::_echoTxt($pdi_pedido->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $pdi_pedido->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pdi_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pdi_pedido->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pdi_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_cmb_pdi_tipo_origen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_tipo_origen_id' ?>" >
				  
                                        <?php Lang::_lang('PdiTipoOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_cmb_pdi_tipo_origen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_tipo_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_cmb_pdi_tipo_origen_id', Gral::getCmbFiltro(PdiTipoOrigen::getPdiTipoOrigensCmb(), '...'), $pdi_pedido->getPdiTipoOrigenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA_CMB_EDIT_PDI_TIPO_ORIGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_cmb_pdi_tipo_origen_id" clase_id="pdi_tipo_origen" prefijo='pdi_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_tipo_origen_id" <?php echo ($pdi_pedido->getPdiTipoOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_cmb_pdi_tipo_origen_id" clase_id="pdi_tipo_origen" prefijo='pdi_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_cmb_pdi_tipo_origen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_pdi_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_pdi_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_pdi_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_pdi_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_tipo_origen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_cmb_pdi_urgencia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_urgencia_id' ?>" >
				  
                                        <?php Lang::_lang('PdiUrgencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_cmb_pdi_urgencia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_urgencia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_cmb_pdi_urgencia_id', Gral::getCmbFiltro(PdiUrgencia::getPdiUrgenciasCmb(), '...'), $pdi_pedido->getPdiUrgenciaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA_CMB_EDIT_PDI_URGENCIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_cmb_pdi_urgencia_id" clase_id="pdi_urgencia" prefijo='pdi_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_urgencia_id" <?php echo ($pdi_pedido->getPdiUrgenciaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_cmb_pdi_urgencia_id" clase_id="pdi_urgencia" prefijo='pdi_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_cmb_pdi_urgencia_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_pdi_urgencia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_pdi_urgencia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_pdi_urgencia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_pdi_urgencia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_urgencia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_cmb_pan_panol_origen" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_origen' ?>" >
				  
                                        <?php Lang::_lang('PanPanolOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_cmb_pan_panol_origen" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_origen')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_cmb_pan_panol_origen', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $pdi_pedido->getPanPanolOrigen(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_pan_panol_origen', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_pan_panol_origen', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_pan_panol_origen', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_pan_panol_origen', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_origen')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_cmb_pan_panol_destino" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_destino' ?>" >
				  
                                        <?php Lang::_lang('PanPanolDestino', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_cmb_pan_panol_destino" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_destino')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_cmb_pan_panol_destino', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $pdi_pedido->getPanPanolDestino(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_pan_panol_destino', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_pan_panol_destino', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_pan_panol_destino', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_pan_panol_destino', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_destino')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_txt_codigo' value='<?php Gral::_echoTxt($pdi_pedido->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_cmb_pdi_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdiTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_cmb_pdi_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_cmb_pdi_tipo_estado_id', Gral::getCmbFiltro(PdiTipoEstado::getPdiTipoEstadosCmb(), '...'), $pdi_pedido->getPdiTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA_CMB_EDIT_PDI_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_cmb_pdi_tipo_estado_id" clase_id="pdi_tipo_estado" prefijo='pdi_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_tipo_estado_id" <?php echo ($pdi_pedido->getPdiTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_cmb_pdi_tipo_estado_id" clase_id="pdi_tipo_estado" prefijo='pdi_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_cmb_pdi_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_pdi_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_pdi_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_pdi_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_pdi_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_dbsug_pdi_pedido_agrupacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_pedido_agrupacion_id' ?>" >
				  
                                        <?php Lang::_lang('PdiPedidoAgrupacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_dbsug_pdi_pedido_agrupacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_pedido_agrupacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_dbsug_pdi_pedido_agrupacion', 'ajax/modulos/pdi_pedido_agrupacion/pdi_pedido_agrupacion_dbsuggest.php', false, true, '', 'Ingrese ...', $pdi_pedido->getPdiPedidoAgrupacionId(), $pdi_pedido->getPdiPedidoAgrupacion()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_pdi_pedido_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_pdi_pedido_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_pdi_pedido_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_pdi_pedido_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_pedido_agrupacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_dbsug_pdi_pedido_agrupacion_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_pedido_agrupacion_item_id' ?>" >
				  
                                        <?php Lang::_lang('PdiPedidoAgrupacionItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_dbsug_pdi_pedido_agrupacion_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_pedido_agrupacion_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pdi_pedido_dbsug_pdi_pedido_agrupacion_item', 'ajax/modulos/pdi_pedido_agrupacion_item/pdi_pedido_agrupacion_item_dbsuggest.php', false, true, '', 'Ingrese ...', $pdi_pedido->getPdiPedidoAgrupacionItemId(), $pdi_pedido->getPdiPedidoAgrupacionItem()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_pdi_pedido_agrupacion_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_pdi_pedido_agrupacion_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_pdi_pedido_agrupacion_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_pdi_pedido_agrupacion_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_pedido_agrupacion_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_cmb_venta_perdida" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_venta_perdida' ?>" >
				  
                                        <?php Lang::_lang('Venta Perdida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_cmb_venta_perdida" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('venta_perdida')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_cmb_venta_perdida', GralSiNo::getGralSiNosCmb(), $pdi_pedido->getVentaPerdida(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_venta_perdida', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_venta_perdida', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_venta_perdida', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_venta_perdida', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('venta_perdida')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_txa_nota_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >
				  
                                        <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_txa_nota_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_txa_nota_publica' rows='10' cols='50' id='pdi_pedido_txa_nota_publica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido->getNotaPublica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_txa_nota_interna' rows='10' cols='50' id='pdi_pedido_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_txa_observacion' rows='10' cols='50' id='pdi_pedido_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_pedido->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pdi_pedido_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pdi_pedido'/>
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

