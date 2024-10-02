<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ALTA')){
    echo "No tiene asignada la credencial INS_STOCK_RESUMEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_stock_resumen';
$db_nombre_pagina = 'ins_stock_resumen_alta';

$ins_stock_resumen = new InsStockResumen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_stock_resumen = new InsStockResumen();
	if(trim($hdn_id) != '') $ins_stock_resumen->setId($hdn_id, false);
	$ins_stock_resumen->setDescripcion(Gral::getVars(1, "ins_stock_resumen_txt_descripcion"));
	$ins_stock_resumen->setInsStockResumenTipoEstadoId(Gral::getVars(1, "ins_stock_resumen_cmb_ins_stock_resumen_tipo_estado_id", null));
	$ins_stock_resumen->setInsInsumoId(Gral::getVars(1, "ins_stock_resumen_cmb_ins_insumo_id", null));
	$ins_stock_resumen->setPanPanolId(Gral::getVars(1, "ins_stock_resumen_cmb_pan_panol_id", null));
	$ins_stock_resumen->setCodigo(Gral::getVars(1, "ins_stock_resumen_txt_codigo"));
	$ins_stock_resumen->setCantidad(Gral::getVars(1, "ins_stock_resumen_txt_cantidad", 0));
	$ins_stock_resumen->setCantidadReal(Gral::getVars(1, "ins_stock_resumen_txt_cantidad_real", 0));
	$ins_stock_resumen->setCantidadComprometida(Gral::getVars(1, "ins_stock_resumen_txt_cantidad_comprometida", 0));
	$ins_stock_resumen->setCantidadPasivo(Gral::getVars(1, "ins_stock_resumen_txt_cantidad_pasivo", 0));
	$ins_stock_resumen->setObservacion(Gral::getVars(1, "ins_stock_resumen_txa_observacion"));
	$ins_stock_resumen->setOrden(Gral::getVars(1, "ins_stock_resumen_txt_orden", 0));
	$ins_stock_resumen->setEstado(Gral::getVars(1, "ins_stock_resumen__estado", 0));
	$ins_stock_resumen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_stock_resumen_txt_creado")));
	$ins_stock_resumen->setCreadoPor(Gral::getVars(1, "ins_stock_resumen__creado_por", null));
	$ins_stock_resumen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_stock_resumen_txt_modificado")));
	$ins_stock_resumen->setModificadoPor(Gral::getVars(1, "ins_stock_resumen__modificado_por", null));

	$ins_stock_resumen_estado = new InsStockResumen();
	if(trim($hdn_id) != ''){
		$ins_stock_resumen_estado->setId($hdn_id);
		$ins_stock_resumen->setEstado($ins_stock_resumen_estado->getEstado());
				
	}else{
		$ins_stock_resumen->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_stock_resumen->control();
			if(!$error->getExisteError()){
				$ins_stock_resumen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_stock_resumen_alta.php?cs=1&id='.$ins_stock_resumen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_stock_resumen->control();
			if(!$error->getExisteError()){
				$ins_stock_resumen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_stock_resumen_alta.php?cs=1');
				$ins_stock_resumen = new InsStockResumen();
			}
		break;
	}
	Gral::setSes('InsStockResumen_ULTIMO_INSERTADO', $ins_stock_resumen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_stock_resumen_id = Gral::getVars(2, $prefijo.'cmb_ins_stock_resumen_id', 0);
	if($cmb_ins_stock_resumen_id != 0){
		$ins_stock_resumen = InsStockResumen::getOxId($cmb_ins_stock_resumen_id);
	}else{
	
	$ins_stock_resumen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_stock_resumen->setInsStockResumenTipoEstadoId(Gral::getVars(2, "ins_stock_resumen_tipo_estado_id", 'null'));
	$ins_stock_resumen->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_stock_resumen->setPanPanolId(Gral::getVars(2, "pan_panol_id", 'null'));
	$ins_stock_resumen->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_stock_resumen->setCantidad(Gral::getVars(2, "cantidad", 0));
	$ins_stock_resumen->setCantidadReal(Gral::getVars(2, "cantidad_real", 0));
	$ins_stock_resumen->setCantidadComprometida(Gral::getVars(2, "cantidad_comprometida", 0));
	$ins_stock_resumen->setCantidadPasivo(Gral::getVars(2, "cantidad_pasivo", 0));
	$ins_stock_resumen->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_stock_resumen->setOrden(Gral::getVars(2, "orden", 0));
	$ins_stock_resumen->setEstado(Gral::getVars(2, "estado", 0));
	$ins_stock_resumen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_stock_resumen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_stock_resumen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_stock_resumen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_stock_resumen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_stock_resumen/ins_stock_resumen_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_stock_resumen' width='90%'>
        
				<tr>
				  <td  id="label_ins_stock_resumen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_resumen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_stock_resumen_txt_descripcion' value='<?php Gral::_echoTxt($ins_stock_resumen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_cmb_ins_stock_resumen_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_stock_resumen_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('InsStockResumenTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_cmb_ins_stock_resumen_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_stock_resumen_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_resumen_cmb_ins_stock_resumen_tipo_estado_id', Gral::getCmbFiltro(InsStockResumenTipoEstado::getInsStockResumenTipoEstadosCmb(), '...'), $ins_stock_resumen->getInsStockResumenTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ALTA_CMB_EDIT_INS_STOCK_RESUMEN_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_resumen_cmb_ins_stock_resumen_tipo_estado_id" clase_id="ins_stock_resumen_tipo_estado" prefijo='ins_stock_resumen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_stock_resumen_tipo_estado_id" <?php echo ($ins_stock_resumen->getInsStockResumenTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_resumen_cmb_ins_stock_resumen_tipo_estado_id" clase_id="ins_stock_resumen_tipo_estado" prefijo='ins_stock_resumen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_resumen_cmb_ins_stock_resumen_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_ins_stock_resumen_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_ins_stock_resumen_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_ins_stock_resumen_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_ins_stock_resumen_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_stock_resumen_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_resumen_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $ins_stock_resumen->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_resumen_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='ins_stock_resumen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($ins_stock_resumen->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_resumen_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='ins_stock_resumen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_resumen_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_cmb_pan_panol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_id' ?>" >
				  
                                        <?php Lang::_lang('PanPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_cmb_pan_panol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_resumen_cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $ins_stock_resumen->getPanPanolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ALTA_CMB_EDIT_PAN_PANOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_resumen_cmb_pan_panol_id" clase_id="pan_panol" prefijo='ins_stock_resumen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_panol_id" <?php echo ($ins_stock_resumen->getPanPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_resumen_cmb_pan_panol_id" clase_id="pan_panol" prefijo='ins_stock_resumen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_resumen_cmb_pan_panol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_resumen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_stock_resumen_txt_codigo' value='<?php Gral::_echoTxt($ins_stock_resumen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_resumen_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_stock_resumen_txt_cantidad' value='<?php Gral::_echoTxt($ins_stock_resumen->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_txt_cantidad_real" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_real' ?>" >
				  
                                        <?php Lang::_lang('Cantidad Real', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_txt_cantidad_real" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_real')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_resumen_txt_cantidad_real' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_stock_resumen_txt_cantidad_real' value='<?php Gral::_echoTxt($ins_stock_resumen->getCantidadReal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_cantidad_real', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_cantidad_real', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_cantidad_real', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_cantidad_real', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_real')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_txt_cantidad_comprometida" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_comprometida' ?>" >
				  
                                        <?php Lang::_lang('Cantidad Comprometida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_txt_cantidad_comprometida" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_comprometida')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_resumen_txt_cantidad_comprometida' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_stock_resumen_txt_cantidad_comprometida' value='<?php Gral::_echoTxt($ins_stock_resumen->getCantidadComprometida(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_cantidad_comprometida', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_cantidad_comprometida', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_cantidad_comprometida', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_cantidad_comprometida', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_comprometida')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_txt_cantidad_pasivo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_pasivo' ?>" >
				  
                                        <?php Lang::_lang('Cant Pasivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_txt_cantidad_pasivo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_pasivo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_resumen_txt_cantidad_pasivo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_stock_resumen_txt_cantidad_pasivo' value='<?php Gral::_echoTxt($ins_stock_resumen->getCantidadPasivo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_cantidad_pasivo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_cantidad_pasivo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_cantidad_pasivo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_cantidad_pasivo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_pasivo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_resumen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_resumen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_stock_resumen_txa_observacion' rows='10' cols='50' id='ins_stock_resumen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_stock_resumen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_stock_resumen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_resumen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_resumen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_resumen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_stock_resumen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_stock_resumen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_stock_resumen'/>
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

