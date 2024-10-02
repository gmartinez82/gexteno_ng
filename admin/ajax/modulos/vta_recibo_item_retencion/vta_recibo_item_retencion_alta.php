<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_RETENCION_ALTA')){
    echo "No tiene asignada la credencial VTA_RECIBO_ITEM_RETENCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_recibo_item_retencion';
$db_nombre_pagina = 'vta_recibo_item_retencion_alta';

$vta_recibo_item_retencion = new VtaReciboItemRetencion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_recibo_item_retencion = new VtaReciboItemRetencion();
	if(trim($hdn_id) != '') $vta_recibo_item_retencion->setId($hdn_id, false);
	$vta_recibo_item_retencion->setDescripcion(Gral::getVars(1, "vta_recibo_item_retencion_txt_descripcion"));
	$vta_recibo_item_retencion->setVtaReciboId(Gral::getVars(1, "vta_recibo_item_retencion_cmb_vta_recibo_id", null));
	$vta_recibo_item_retencion->setVtaReciboItemId(Gral::getVars(1, "vta_recibo_item_retencion_cmb_vta_recibo_item_id", null));
	$vta_recibo_item_retencion->setNumeroComprobante(Gral::getVars(1, "vta_recibo_item_retencion_txt_numero_comprobante"));
	$vta_recibo_item_retencion->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "vta_recibo_item_retencion_txt_fecha_emision")));
	$vta_recibo_item_retencion->setImporteBaseImponible(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_recibo_item_retencion_txt_importe_base_imponible", 0)));
	$vta_recibo_item_retencion->setImporteRetencion(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_recibo_item_retencion_txt_importe_retencion", 0)));
	$vta_recibo_item_retencion->setCodigo(Gral::getVars(1, "vta_recibo_item_retencion_txt_codigo"));
	$vta_recibo_item_retencion->setObservacion(Gral::getVars(1, "vta_recibo_item_retencion_txa_observacion"));
	$vta_recibo_item_retencion->setOrden(Gral::getVars(1, "vta_recibo_item_retencion_txt_orden", 0));
	$vta_recibo_item_retencion->setEstado(Gral::getVars(1, "vta_recibo_item_retencion_cmb_estado", 0));
	$vta_recibo_item_retencion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_item_retencion_txt_creado")));
	$vta_recibo_item_retencion->setCreadoPor(Gral::getVars(1, "vta_recibo_item_retencion__creado_por", 0));
	$vta_recibo_item_retencion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_item_retencion_txt_modificado")));
	$vta_recibo_item_retencion->setModificadoPor(Gral::getVars(1, "vta_recibo_item_retencion__modificado_por", 0));

	$vta_recibo_item_retencion_estado = new VtaReciboItemRetencion();
	if(trim($hdn_id) != ''){
		$vta_recibo_item_retencion_estado->setId($hdn_id);
		$vta_recibo_item_retencion->setEstado($vta_recibo_item_retencion_estado->getEstado());
				
	}else{
		$vta_recibo_item_retencion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_recibo_item_retencion->control();
			if(!$error->getExisteError()){
				$vta_recibo_item_retencion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_recibo_item_retencion_alta.php?cs=1&id='.$vta_recibo_item_retencion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_recibo_item_retencion->control();
			if(!$error->getExisteError()){
				$vta_recibo_item_retencion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_recibo_item_retencion_alta.php?cs=1');
				$vta_recibo_item_retencion = new VtaReciboItemRetencion();
			}
		break;
	}
	Gral::setSes('VtaReciboItemRetencion_ULTIMO_INSERTADO', $vta_recibo_item_retencion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_recibo_item_retencion_id = Gral::getVars(2, $prefijo.'cmb_vta_recibo_item_retencion_id', 0);
	if($cmb_vta_recibo_item_retencion_id != 0){
		$vta_recibo_item_retencion = VtaReciboItemRetencion::getOxId($cmb_vta_recibo_item_retencion_id);
	}else{
	
	$vta_recibo_item_retencion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_recibo_item_retencion->setVtaReciboId(Gral::getVars(2, "vta_recibo_id", 'null'));
	$vta_recibo_item_retencion->setVtaReciboItemId(Gral::getVars(2, "vta_recibo_item_id", 'null'));
	$vta_recibo_item_retencion->setNumeroComprobante(Gral::getVars(2, "numero_comprobante", ''));
	$vta_recibo_item_retencion->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
	$vta_recibo_item_retencion->setImporteBaseImponible(Gral::getVars(2, "importe_base_imponible", 0));
	$vta_recibo_item_retencion->setImporteRetencion(Gral::getVars(2, "importe_retencion", 0));
	$vta_recibo_item_retencion->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_recibo_item_retencion->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_recibo_item_retencion->setOrden(Gral::getVars(2, "orden", 0));
	$vta_recibo_item_retencion->setEstado(Gral::getVars(2, "estado", 0));
	$vta_recibo_item_retencion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_recibo_item_retencion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_recibo_item_retencion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_recibo_item_retencion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_recibo_item_retencion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_recibo_item_retencion/vta_recibo_item_retencion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_recibo_item_retencion' width='90%'>
        
				<tr>
				  <td  id="label_vta_recibo_item_retencion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_retencion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_retencion_txt_descripcion' value='<?php Gral::_echoTxt($vta_recibo_item_retencion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_cmb_vta_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_cmb_vta_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_recibo_item_retencion_cmb_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), $vta_recibo_item_retencion->getVtaReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_RETENCION_ALTA_CMB_EDIT_VTA_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_recibo_item_retencion_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='vta_recibo_item_retencion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_id" <?php echo ($vta_recibo_item_retencion->getVtaReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_recibo_item_retencion_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='vta_recibo_item_retencion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_recibo_item_retencion_cmb_vta_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_cmb_vta_recibo_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_item_id' ?>" >
				  
                                        <?php Lang::_lang('VtaReciboItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_cmb_vta_recibo_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_recibo_item_retencion_cmb_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), '...'), $vta_recibo_item_retencion->getVtaReciboItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_RETENCION_ALTA_CMB_EDIT_VTA_RECIBO_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_recibo_item_retencion_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='vta_recibo_item_retencion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_item_id" <?php echo ($vta_recibo_item_retencion->getVtaReciboItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_recibo_item_retencion_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='vta_recibo_item_retencion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_recibo_item_retencion_cmb_vta_recibo_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_txt_numero_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Numero de Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_txt_numero_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_retencion_txt_numero_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_retencion_txt_numero_comprobante' value='<?php Gral::_echoTxt($vta_recibo_item_retencion->getNumeroComprobante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_numero_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_numero_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_numero_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_numero_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Emision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_retencion_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_recibo_item_retencion_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_recibo_item_retencion->getFechaEmision()), true) ?>' size='40' />
					<input type='button' id='cal_vta_recibo_item_retencion_txt_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_recibo_item_retencion_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_vta_recibo_item_retencion_txt_fecha_emision'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_txt_importe_base_imponible" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_base_imponible' ?>" >
				  
                                        <?php Lang::_lang('Imp BI', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_txt_importe_base_imponible" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_base_imponible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_retencion_txt_importe_base_imponible' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='vta_recibo_item_retencion_txt_importe_base_imponible' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($vta_recibo_item_retencion->getImporteBaseImponible()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_importe_base_imponible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_importe_base_imponible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_importe_base_imponible', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_importe_base_imponible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_base_imponible')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_txt_importe_retencion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_retencion' ?>" >
				  
                                        <?php Lang::_lang('Imp Retencion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_txt_importe_retencion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_retencion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_retencion_txt_importe_retencion' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='vta_recibo_item_retencion_txt_importe_retencion' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($vta_recibo_item_retencion->getImporteRetencion()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_importe_retencion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_importe_retencion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_importe_retencion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_importe_retencion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_retencion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_retencion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_retencion_txt_codigo' value='<?php Gral::_echoTxt($vta_recibo_item_retencion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_retencion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_retencion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_recibo_item_retencion_txa_observacion' rows='10' cols='50' id='vta_recibo_item_retencion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_recibo_item_retencion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_recibo_item_retencion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_retencion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_retencion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_retencion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_recibo_item_retencion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_recibo_item_retencion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_recibo_item_retencion'/>
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

