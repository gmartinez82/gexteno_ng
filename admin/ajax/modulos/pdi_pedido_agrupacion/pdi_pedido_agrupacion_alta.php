<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ALTA')){
    echo "No tiene asignada la credencial PDI_PEDIDO_AGRUPACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pdi_pedido_agrupacion';
$db_nombre_pagina = 'pdi_pedido_agrupacion_alta';

$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();
	if(trim($hdn_id) != '') $pdi_pedido_agrupacion->setId($hdn_id, false);
	$pdi_pedido_agrupacion->setDescripcion(Gral::getVars(1, "pdi_pedido_agrupacion_txt_descripcion"));
	$pdi_pedido_agrupacion->setCodigo(Gral::getVars(1, "pdi_pedido_agrupacion_txt_codigo"));
	$pdi_pedido_agrupacion->setPanPanolOrigen(Gral::getVars(1, "pdi_pedido_agrupacion_cmb_pan_panol_origen", null));
	$pdi_pedido_agrupacion->setPanPanolDestino(Gral::getVars(1, "pdi_pedido_agrupacion_cmb_pan_panol_destino", null));
	$pdi_pedido_agrupacion->setPdiPedidoAgrupacionTipoEstadoId(Gral::getVars(1, "pdi_pedido_agrupacion_cmb_pdi_pedido_agrupacion_tipo_estado_id", null));
	$pdi_pedido_agrupacion->setPdiTipoOrigenId(Gral::getVars(1, "pdi_pedido_agrupacion_cmb_pdi_tipo_origen_id", null));
	$pdi_pedido_agrupacion->setPdiUrgenciaId(Gral::getVars(1, "pdi_pedido_agrupacion_cmb_pdi_urgencia_id", null));
	$pdi_pedido_agrupacion->setNotaPublica(Gral::getVars(1, "pdi_pedido_agrupacion_txa_nota_publica"));
	$pdi_pedido_agrupacion->setNotaInterna(Gral::getVars(1, "pdi_pedido_agrupacion_txa_nota_interna"));
	$pdi_pedido_agrupacion->setObservacion(Gral::getVars(1, "pdi_pedido_agrupacion_txa_observacion"));
	$pdi_pedido_agrupacion->setOrden(Gral::getVars(1, "pdi_pedido_agrupacion_txt_orden", 0));
	$pdi_pedido_agrupacion->setEstado(Gral::getVars(1, "pdi_pedido_agrupacion__estado", 0));
	$pdi_pedido_agrupacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_agrupacion_txt_creado")));
	$pdi_pedido_agrupacion->setCreadoPor(Gral::getVars(1, "pdi_pedido_agrupacion__creado_por", null));
	$pdi_pedido_agrupacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pdi_pedido_agrupacion_txt_modificado")));
	$pdi_pedido_agrupacion->setModificadoPor(Gral::getVars(1, "pdi_pedido_agrupacion__modificado_por", null));

	$pdi_pedido_agrupacion_estado = new PdiPedidoAgrupacion();
	if(trim($hdn_id) != ''){
		$pdi_pedido_agrupacion_estado->setId($hdn_id);
		$pdi_pedido_agrupacion->setEstado($pdi_pedido_agrupacion_estado->getEstado());
				
	}else{
		$pdi_pedido_agrupacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pdi_pedido_agrupacion->control();
			if(!$error->getExisteError()){
				$pdi_pedido_agrupacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pdi_pedido_agrupacion_alta.php?cs=1&id='.$pdi_pedido_agrupacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_pedido_agrupacion->control();
			if(!$error->getExisteError()){
				$pdi_pedido_agrupacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pdi_pedido_agrupacion_alta.php?cs=1');
				$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();
			}
		break;
	}
	Gral::setSes('PdiPedidoAgrupacion_ULTIMO_INSERTADO', $pdi_pedido_agrupacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pdi_pedido_agrupacion_id = Gral::getVars(2, $prefijo.'cmb_pdi_pedido_agrupacion_id', 0);
	if($cmb_pdi_pedido_agrupacion_id != 0){
		$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($cmb_pdi_pedido_agrupacion_id);
	}else{
	
	$pdi_pedido_agrupacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pdi_pedido_agrupacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$pdi_pedido_agrupacion->setPanPanolOrigen(Gral::getVars(2, "pan_panol_origen", 'null'));
	$pdi_pedido_agrupacion->setPanPanolDestino(Gral::getVars(2, "pan_panol_destino", 'null'));
	$pdi_pedido_agrupacion->setPdiPedidoAgrupacionTipoEstadoId(Gral::getVars(2, "pdi_pedido_agrupacion_tipo_estado_id", 'null'));
	$pdi_pedido_agrupacion->setPdiTipoOrigenId(Gral::getVars(2, "pdi_tipo_origen_id", 'null'));
	$pdi_pedido_agrupacion->setPdiUrgenciaId(Gral::getVars(2, "pdi_urgencia_id", 'null'));
	$pdi_pedido_agrupacion->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$pdi_pedido_agrupacion->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pdi_pedido_agrupacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_pedido_agrupacion->setOrden(Gral::getVars(2, "orden", 0));
	$pdi_pedido_agrupacion->setEstado(Gral::getVars(2, "estado", 0));
	$pdi_pedido_agrupacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_pedido_agrupacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_pedido_agrupacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_pedido_agrupacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pdi_pedido_agrupacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pdi_pedido_agrupacion/pdi_pedido_agrupacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pdi_pedido_agrupacion' width='90%'>
        
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_agrupacion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_agrupacion_txt_descripcion' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pdi_pedido_agrupacion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pdi_pedido_agrupacion_txt_codigo' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_cmb_pan_panol_origen" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_origen' ?>" >
				  
                                        <?php Lang::_lang('PanPanolOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_cmb_pan_panol_origen" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_origen')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_agrupacion_cmb_pan_panol_origen', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $pdi_pedido_agrupacion->getPanPanolOrigen(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_pan_panol_origen', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_pan_panol_origen', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pan_panol_origen', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pan_panol_origen', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_origen')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_cmb_pan_panol_destino" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_destino' ?>" >
				  
                                        <?php Lang::_lang('PanPanolDestino', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_cmb_pan_panol_destino" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_destino')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_agrupacion_cmb_pan_panol_destino', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $pdi_pedido_agrupacion->getPanPanolDestino(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_pan_panol_destino', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_pan_panol_destino', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pan_panol_destino', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pan_panol_destino', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_destino')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_cmb_pdi_pedido_agrupacion_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_pedido_agrupacion_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdiPedidoAgrupacionTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_cmb_pdi_pedido_agrupacion_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_pedido_agrupacion_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_agrupacion_cmb_pdi_pedido_agrupacion_tipo_estado_id', Gral::getCmbFiltro(PdiPedidoAgrupacionTipoEstado::getPdiPedidoAgrupacionTipoEstadosCmb(), '...'), $pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ALTA_CMB_EDIT_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_agrupacion_cmb_pdi_pedido_agrupacion_tipo_estado_id" clase_id="pdi_pedido_agrupacion_tipo_estado" prefijo='pdi_pedido_agrupacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_pedido_agrupacion_tipo_estado_id" <?php echo ($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_agrupacion_cmb_pdi_pedido_agrupacion_tipo_estado_id" clase_id="pdi_pedido_agrupacion_tipo_estado" prefijo='pdi_pedido_agrupacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_agrupacion_cmb_pdi_pedido_agrupacion_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_pdi_pedido_agrupacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_pdi_pedido_agrupacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pdi_pedido_agrupacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pdi_pedido_agrupacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_pedido_agrupacion_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_cmb_pdi_tipo_origen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_tipo_origen_id' ?>" >
				  
                                        <?php Lang::_lang('PdiTipoOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_cmb_pdi_tipo_origen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_tipo_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_agrupacion_cmb_pdi_tipo_origen_id', Gral::getCmbFiltro(PdiTipoOrigen::getPdiTipoOrigensCmb(), '...'), $pdi_pedido_agrupacion->getPdiTipoOrigenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ALTA_CMB_EDIT_PDI_TIPO_ORIGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_agrupacion_cmb_pdi_tipo_origen_id" clase_id="pdi_tipo_origen" prefijo='pdi_pedido_agrupacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_tipo_origen_id" <?php echo ($pdi_pedido_agrupacion->getPdiTipoOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_agrupacion_cmb_pdi_tipo_origen_id" clase_id="pdi_tipo_origen" prefijo='pdi_pedido_agrupacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_agrupacion_cmb_pdi_tipo_origen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_pdi_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_pdi_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pdi_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pdi_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_tipo_origen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_cmb_pdi_urgencia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pdi_urgencia_id' ?>" >
				  
                                        <?php Lang::_lang('PdiUrgencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_cmb_pdi_urgencia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pdi_urgencia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pdi_pedido_agrupacion_cmb_pdi_urgencia_id', Gral::getCmbFiltro(PdiUrgencia::getPdiUrgenciasCmb(), '...'), $pdi_pedido_agrupacion->getPdiUrgenciaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ALTA_CMB_EDIT_PDI_URGENCIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pdi_pedido_agrupacion_cmb_pdi_urgencia_id" clase_id="pdi_urgencia" prefijo='pdi_pedido_agrupacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pdi_urgencia_id" <?php echo ($pdi_pedido_agrupacion->getPdiUrgenciaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pdi_pedido_agrupacion_cmb_pdi_urgencia_id" clase_id="pdi_urgencia" prefijo='pdi_pedido_agrupacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pdi_pedido_agrupacion_cmb_pdi_urgencia_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_pdi_urgencia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_pdi_urgencia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pdi_urgencia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_pdi_urgencia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pdi_urgencia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_txa_nota_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >
				  
                                        <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_txa_nota_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_agrupacion_txa_nota_publica' rows='10' cols='50' id='pdi_pedido_agrupacion_txa_nota_publica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_agrupacion->getNotaPublica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_agrupacion_txa_nota_interna' rows='10' cols='50' id='pdi_pedido_agrupacion_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_agrupacion->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pdi_pedido_agrupacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pdi_pedido_agrupacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pdi_pedido_agrupacion_txa_observacion' rows='10' cols='50' id='pdi_pedido_agrupacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pdi_pedido_agrupacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pdi_pedido_agrupacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pdi_pedido_agrupacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pdi_pedido_agrupacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pdi_pedido_agrupacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pdi_pedido_agrupacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pdi_pedido_agrupacion'/>
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

