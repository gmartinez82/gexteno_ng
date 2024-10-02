<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ALTA')){
    echo "No tiene asignada la credencial PRV_INSUMO_COSTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_insumo_costo';
$db_nombre_pagina = 'prv_insumo_costo_alta';

$prv_insumo_costo = new PrvInsumoCosto();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_insumo_costo = new PrvInsumoCosto();
	if(trim($hdn_id) != '') $prv_insumo_costo->setId($hdn_id, false);
	$prv_insumo_costo->setPrvInsumoId(Gral::getVars(1, "prv_insumo_costo_cmb_prv_insumo_id", null));
	$prv_insumo_costo->setImporteBruto(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "prv_insumo_costo_txt_importe_bruto", 0)));
	$prv_insumo_costo->setDescuento(Gral::getVars(1, "prv_insumo_costo_txt_descuento", 0));
	$prv_insumo_costo->setInicial(Gral::getVars(1, "prv_insumo_costo_txt_inicial", 0));
	$prv_insumo_costo->setActual(Gral::getVars(1, "prv_insumo_costo_txt_actual", 0));
	$prv_insumo_costo->setNumeroImportacion(Gral::getVars(1, "prv_insumo_costo_txt_numero_importacion", 0));
	$prv_insumo_costo->setFechaActualizacion(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_insumo_costo_txt_fecha_actualizacion")));
	$prv_insumo_costo->setPrvImportacionId(Gral::getVars(1, "prv_insumo_costo_cmb_prv_importacion_id", null));
	$prv_insumo_costo->setObservacion(Gral::getVars(1, "prv_insumo_costo_txa_observacion"));
	$prv_insumo_costo->setOrden(Gral::getVars(1, "prv_insumo_costo_txt_orden", 0));
	$prv_insumo_costo->setEstado(Gral::getVars(1, "prv_insumo_costo__estado", 0));
	$prv_insumo_costo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_insumo_costo_txt_creado")));
	$prv_insumo_costo->setCreadoPor(Gral::getVars(1, "prv_insumo_costo__creado_por", 0));
	$prv_insumo_costo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_insumo_costo_txt_modificado")));
	$prv_insumo_costo->setModificadoPor(Gral::getVars(1, "prv_insumo_costo__modificado_por", 0));

	$prv_insumo_costo_estado = new PrvInsumoCosto();
	if(trim($hdn_id) != ''){
		$prv_insumo_costo_estado->setId($hdn_id);
		$prv_insumo_costo->setEstado($prv_insumo_costo_estado->getEstado());
				
	}else{
		$prv_insumo_costo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prv_insumo_costo->control();
			if(!$error->getExisteError()){
				$prv_insumo_costo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_insumo_costo_alta.php?cs=1&id='.$prv_insumo_costo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_insumo_costo->control();
			if(!$error->getExisteError()){
				$prv_insumo_costo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_insumo_costo_alta.php?cs=1');
				$prv_insumo_costo = new PrvInsumoCosto();
			}
		break;
	}
	Gral::setSes('PrvInsumoCosto_ULTIMO_INSERTADO', $prv_insumo_costo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_insumo_costo_id = Gral::getVars(2, $prefijo.'cmb_prv_insumo_costo_id', 0);
	if($cmb_prv_insumo_costo_id != 0){
		$prv_insumo_costo = PrvInsumoCosto::getOxId($cmb_prv_insumo_costo_id);
	}else{
	
	$prv_insumo_costo->setPrvInsumoId(Gral::getVars(2, "prv_insumo_id", 'null'));
	$prv_insumo_costo->setImporteBruto(Gral::getVars(2, "importe_bruto", 0));
	$prv_insumo_costo->setDescuento(Gral::getVars(2, "descuento", 0));
	$prv_insumo_costo->setInicial(Gral::getVars(2, "inicial", 0));
	$prv_insumo_costo->setActual(Gral::getVars(2, "actual", 0));
	$prv_insumo_costo->setNumeroImportacion(Gral::getVars(2, "numero_importacion", 0));
	$prv_insumo_costo->setFechaActualizacion(Gral::getVars(2, "fecha_actualizacion", date('Y-m-d H:m:s')));
	$prv_insumo_costo->setPrvImportacionId(Gral::getVars(2, "prv_importacion_id", 'null'));
	$prv_insumo_costo->setObservacion(Gral::getVars(2, "observacion", ''));
	$prv_insumo_costo->setOrden(Gral::getVars(2, "orden", 0));
	$prv_insumo_costo->setEstado(Gral::getVars(2, "estado", 0));
	$prv_insumo_costo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_insumo_costo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prv_insumo_costo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prv_insumo_costo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_insumo_costo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_insumo_costo/prv_insumo_costo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_insumo_costo' width='90%'>
        
				<tr>
				  <td  id="label_prv_insumo_costo_cmb_prv_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('PrvInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_cmb_prv_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_insumo_costo_cmb_prv_insumo_id', Gral::getCmbFiltro(PrvInsumo::getPrvInsumosCmb(), '...'), $prv_insumo_costo->getPrvInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ALTA_CMB_EDIT_PRV_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_insumo_costo_cmb_prv_insumo_id" clase_id="prv_insumo" prefijo='prv_insumo_costo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_insumo_id" <?php echo ($prv_insumo_costo->getPrvInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_insumo_costo_cmb_prv_insumo_id" clase_id="prv_insumo" prefijo='prv_insumo_costo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_insumo_costo_cmb_prv_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_prv_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_prv_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_prv_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_prv_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_txt_importe_bruto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_bruto' ?>" >
				  
                                        <?php Lang::_lang('Importe Bruto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_txt_importe_bruto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_bruto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_costo_txt_importe_bruto' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='prv_insumo_costo_txt_importe_bruto' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($prv_insumo_costo->getImporteBruto()), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_importe_bruto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_importe_bruto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_importe_bruto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_importe_bruto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_bruto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_txt_descuento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descuento' ?>" >
				  
                                        <?php Lang::_lang('Descuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_txt_descuento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descuento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_costo_txt_descuento' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_costo_txt_descuento' value='<?php Gral::_echoTxt($prv_insumo_costo->getDescuento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_descuento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_descuento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_descuento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_descuento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descuento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_txt_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_txt_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_costo_txt_inicial' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_costo_txt_inicial' value='<?php Gral::_echoTxt($prv_insumo_costo->getInicial(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_txt_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_txt_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_costo_txt_actual' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_costo_txt_actual' value='<?php Gral::_echoTxt($prv_insumo_costo->getActual(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_txt_numero_importacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_importacion' ?>" >
				  
                                        <?php Lang::_lang('Nro Importac', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_txt_numero_importacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_importacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_costo_txt_numero_importacion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_costo_txt_numero_importacion' value='<?php Gral::_echoTxt($prv_insumo_costo->getNumeroImportacion(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_numero_importacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_numero_importacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_numero_importacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_numero_importacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_importacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_txt_fecha_actualizacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_actualizacion' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_txt_fecha_actualizacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_actualizacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_costo_txt_fecha_actualizacion' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='prv_insumo_costo_txt_fecha_actualizacion' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($prv_insumo_costo->getFechaActualizacion()), true) ?>' size='40' />
					<input type='button' id='cal_prv_insumo_costo_txt_fecha_actualizacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'prv_insumo_costo_txt_fecha_actualizacion', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_prv_insumo_costo_txt_fecha_actualizacion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_fecha_actualizacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_fecha_actualizacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_fecha_actualizacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_fecha_actualizacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_actualizacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_cmb_prv_importacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_importacion_id' ?>" >
				  
                                        <?php Lang::_lang('PrvImportacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_cmb_prv_importacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_importacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_insumo_costo_cmb_prv_importacion_id', Gral::getCmbFiltro(PrvImportacion::getPrvImportacionsCmb(), '...'), $prv_insumo_costo->getPrvImportacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ALTA_CMB_EDIT_PRV_IMPORTACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_insumo_costo_cmb_prv_importacion_id" clase_id="prv_importacion" prefijo='prv_insumo_costo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_importacion_id" <?php echo ($prv_insumo_costo->getPrvImportacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_insumo_costo_cmb_prv_importacion_id" clase_id="prv_importacion" prefijo='prv_insumo_costo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_insumo_costo_cmb_prv_importacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_prv_importacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_prv_importacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_prv_importacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_prv_importacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_importacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_costo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_costo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_insumo_costo_txa_observacion' rows='10' cols='50' id='prv_insumo_costo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_insumo_costo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_insumo_costo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_costo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_costo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_costo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_insumo_costo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_insumo_costo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_insumo_costo'/>
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

