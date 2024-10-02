<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ALTA')){
    echo "No tiene asignada la credencial INS_STOCK_TRANSFORMACION_DESTINO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_stock_transformacion_destino';
$db_nombre_pagina = 'ins_stock_transformacion_destino_alta';

$ins_stock_transformacion_destino = new InsStockTransformacionDestino();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_stock_transformacion_destino = new InsStockTransformacionDestino();
	if(trim($hdn_id) != '') $ins_stock_transformacion_destino->setId($hdn_id, false);
	$ins_stock_transformacion_destino->setDescripcion(Gral::getVars(1, "ins_stock_transformacion_destino_txt_descripcion"));
	$ins_stock_transformacion_destino->setInsStockTransformacionId(Gral::getVars(1, "ins_stock_transformacion_destino_cmb_ins_stock_transformacion_id", null));
	$ins_stock_transformacion_destino->setInsInsumoId(Gral::getVars(1, "ins_stock_transformacion_destino_cmb_ins_insumo_id", null));
	$ins_stock_transformacion_destino->setPanPanolId(Gral::getVars(1, "ins_stock_transformacion_destino_cmb_pan_panol_id", null));
	$ins_stock_transformacion_destino->setCodigo(Gral::getVars(1, "ins_stock_transformacion_destino_txt_codigo"));
	$ins_stock_transformacion_destino->setCantidad(Gral::getVars(1, "ins_stock_transformacion_destino_txt_cantidad", 0));
	$ins_stock_transformacion_destino->setObservacion(Gral::getVars(1, "ins_stock_transformacion_destino_txa_observacion"));
	$ins_stock_transformacion_destino->setOrden(Gral::getVars(1, "ins_stock_transformacion_destino_txt_orden", 0));
	$ins_stock_transformacion_destino->setEstado(Gral::getVars(1, "ins_stock_transformacion_destino__estado", 0));
	$ins_stock_transformacion_destino->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_stock_transformacion_destino_txt_creado")));
	$ins_stock_transformacion_destino->setCreadoPor(Gral::getVars(1, "ins_stock_transformacion_destino__creado_por", null));
	$ins_stock_transformacion_destino->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_stock_transformacion_destino_txt_modificado")));
	$ins_stock_transformacion_destino->setModificadoPor(Gral::getVars(1, "ins_stock_transformacion_destino__modificado_por", null));

	$ins_stock_transformacion_destino_estado = new InsStockTransformacionDestino();
	if(trim($hdn_id) != ''){
		$ins_stock_transformacion_destino_estado->setId($hdn_id);
		$ins_stock_transformacion_destino->setEstado($ins_stock_transformacion_destino_estado->getEstado());
				
	}else{
		$ins_stock_transformacion_destino->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_stock_transformacion_destino->control();
			if(!$error->getExisteError()){
				$ins_stock_transformacion_destino->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_stock_transformacion_destino_alta.php?cs=1&id='.$ins_stock_transformacion_destino->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_stock_transformacion_destino->control();
			if(!$error->getExisteError()){
				$ins_stock_transformacion_destino->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_stock_transformacion_destino_alta.php?cs=1');
				$ins_stock_transformacion_destino = new InsStockTransformacionDestino();
			}
		break;
	}
	Gral::setSes('InsStockTransformacionDestino_ULTIMO_INSERTADO', $ins_stock_transformacion_destino->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_stock_transformacion_destino_id = Gral::getVars(2, $prefijo.'cmb_ins_stock_transformacion_destino_id', 0);
	if($cmb_ins_stock_transformacion_destino_id != 0){
		$ins_stock_transformacion_destino = InsStockTransformacionDestino::getOxId($cmb_ins_stock_transformacion_destino_id);
	}else{
	
	$ins_stock_transformacion_destino->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_stock_transformacion_destino->setInsStockTransformacionId(Gral::getVars(2, "ins_stock_transformacion_id", 'null'));
	$ins_stock_transformacion_destino->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_stock_transformacion_destino->setPanPanolId(Gral::getVars(2, "pan_panol_id", 'null'));
	$ins_stock_transformacion_destino->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_stock_transformacion_destino->setCantidad(Gral::getVars(2, "cantidad", 0));
	$ins_stock_transformacion_destino->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_stock_transformacion_destino->setOrden(Gral::getVars(2, "orden", 0));
	$ins_stock_transformacion_destino->setEstado(Gral::getVars(2, "estado", 0));
	$ins_stock_transformacion_destino->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_stock_transformacion_destino->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_stock_transformacion_destino->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_stock_transformacion_destino->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_stock_transformacion_destino->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_stock_transformacion_destino/ins_stock_transformacion_destino_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_stock_transformacion_destino' width='90%'>
        
				<tr>
				  <td  id="label_ins_stock_transformacion_destino_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_transformacion_destino_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_transformacion_destino_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_stock_transformacion_destino_txt_descripcion' value='<?php Gral::_echoTxt($ins_stock_transformacion_destino->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_stock_transformacion_destino_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_transformacion_destino_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_transformacion_destino_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_transformacion_destino_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_transformacion_destino_cmb_ins_stock_transformacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_stock_transformacion_id' ?>" >
				  
                                        <?php Lang::_lang('InsStockTransformacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_transformacion_destino_cmb_ins_stock_transformacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_stock_transformacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_transformacion_destino_cmb_ins_stock_transformacion_id', Gral::getCmbFiltro(InsStockTransformacion::getInsStockTransformacionsCmb(), '...'), $ins_stock_transformacion_destino->getInsStockTransformacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ALTA_CMB_EDIT_INS_STOCK_TRANSFORMACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_transformacion_destino_cmb_ins_stock_transformacion_id" clase_id="ins_stock_transformacion" prefijo='ins_stock_transformacion_destino_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_stock_transformacion_id" <?php echo ($ins_stock_transformacion_destino->getInsStockTransformacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_transformacion_destino_cmb_ins_stock_transformacion_id" clase_id="ins_stock_transformacion" prefijo='ins_stock_transformacion_destino_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_transformacion_destino_cmb_ins_stock_transformacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_transformacion_destino_alta_ins_stock_transformacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_transformacion_destino_alta_ins_stock_transformacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_transformacion_destino_alta_ins_stock_transformacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_transformacion_destino_alta_ins_stock_transformacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_stock_transformacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_transformacion_destino_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_transformacion_destino_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_transformacion_destino_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $ins_stock_transformacion_destino->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_transformacion_destino_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='ins_stock_transformacion_destino_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($ins_stock_transformacion_destino->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_transformacion_destino_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='ins_stock_transformacion_destino_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_transformacion_destino_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_transformacion_destino_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_transformacion_destino_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_transformacion_destino_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_transformacion_destino_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_transformacion_destino_cmb_pan_panol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_id' ?>" >
				  
                                        <?php Lang::_lang('PanPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_transformacion_destino_cmb_pan_panol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_stock_transformacion_destino_cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $ins_stock_transformacion_destino->getPanPanolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ALTA_CMB_EDIT_PAN_PANOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_stock_transformacion_destino_cmb_pan_panol_id" clase_id="pan_panol" prefijo='ins_stock_transformacion_destino_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_panol_id" <?php echo ($ins_stock_transformacion_destino->getPanPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_stock_transformacion_destino_cmb_pan_panol_id" clase_id="pan_panol" prefijo='ins_stock_transformacion_destino_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_stock_transformacion_destino_cmb_pan_panol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_stock_transformacion_destino_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_transformacion_destino_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_transformacion_destino_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_transformacion_destino_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_transformacion_destino_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_transformacion_destino_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_transformacion_destino_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_stock_transformacion_destino_txt_codigo' value='<?php Gral::_echoTxt($ins_stock_transformacion_destino->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_stock_transformacion_destino_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_transformacion_destino_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_transformacion_destino_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_transformacion_destino_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_transformacion_destino_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_transformacion_destino_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_stock_transformacion_destino_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_stock_transformacion_destino_txt_cantidad' value='<?php Gral::_echoTxt($ins_stock_transformacion_destino->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_stock_transformacion_destino_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_transformacion_destino_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_transformacion_destino_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_transformacion_destino_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_stock_transformacion_destino_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_stock_transformacion_destino_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_stock_transformacion_destino_txa_observacion' rows='10' cols='50' id='ins_stock_transformacion_destino_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_stock_transformacion_destino->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_stock_transformacion_destino_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_stock_transformacion_destino_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_stock_transformacion_destino_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_stock_transformacion_destino_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_stock_transformacion_destino->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_stock_transformacion_destino_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_stock_transformacion_destino'/>
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

