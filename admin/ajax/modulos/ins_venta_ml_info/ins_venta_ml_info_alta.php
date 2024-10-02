<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ALTA')){
    echo "No tiene asignada la credencial INS_VENTA_ML_INFO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_venta_ml_info';
$db_nombre_pagina = 'ins_venta_ml_info_alta';

$ins_venta_ml_info = new InsVentaMlInfo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_venta_ml_info = new InsVentaMlInfo();
	if(trim($hdn_id) != '') $ins_venta_ml_info->setId($hdn_id, false);
	$ins_venta_ml_info->setInsInsumoId(Gral::getVars(1, "ins_venta_ml_info_dbsug_ins_insumo_id", null));
	$ins_venta_ml_info->setDescripcion(Gral::getVars(1, "ins_venta_ml_info_txt_descripcion"));
	$ins_venta_ml_info->setDescripcionBreve(Gral::getVars(1, "ins_venta_ml_info_txa_descripcion_breve"));
	$ins_venta_ml_info->setDescripcionEmpresa(Gral::getVars(1, "ins_venta_ml_info_txa_descripcion_empresa"));
	$ins_venta_ml_info->setCantidad(Gral::getVars(1, "ins_venta_ml_info_txt_cantidad", 0));
	$ins_venta_ml_info->setImporte(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "ins_venta_ml_info_txt_importe", 0)));
	$ins_venta_ml_info->setCodigo(Gral::getVars(1, "ins_venta_ml_info_txt_codigo"));
	$ins_venta_ml_info->setMlIdentificador(Gral::getVars(1, "ins_venta_ml_info_txt_ml_identificador"));
	$ins_venta_ml_info->setMlCategoryId(Gral::getVars(1, "ins_venta_ml_info_txt_ml_category_id", null));
	$ins_venta_ml_info->setMlCategoryDesc(Gral::getVars(1, "ins_venta_ml_info_txt_ml_category_desc"));
	$ins_venta_ml_info->setMlCategoryCod(Gral::getVars(1, "ins_venta_ml_info_txt_ml_category_cod"));
	$ins_venta_ml_info->setMlListingTypeId(Gral::getVars(1, "ins_venta_ml_info_txt_ml_listing_type_id", null));
	$ins_venta_ml_info->setMlListingTypeDesc(Gral::getVars(1, "ins_venta_ml_info_txt_ml_listing_type_desc"));
	$ins_venta_ml_info->setMlConditionId(Gral::getVars(1, "ins_venta_ml_info_txt_ml_condition_id", null));
	$ins_venta_ml_info->setMlConditionDesc(Gral::getVars(1, "ins_venta_ml_info_txt_ml_condition_desc"));
	$ins_venta_ml_info->setMlShippingModeId(Gral::getVars(1, "ins_venta_ml_info_txt_ml_shipping_mode_id", null));
	$ins_venta_ml_info->setMlShippingModeDesc(Gral::getVars(1, "ins_venta_ml_info_txt_ml_shipping_mode_desc"));
	$ins_venta_ml_info->setMlPermalink(Gral::getVars(1, "ins_venta_ml_info_txt_ml_permalink"));
	$ins_venta_ml_info->setMlStartTime(Gral::getVars(1, "ins_venta_ml_info_txt_ml_start_time"));
	$ins_venta_ml_info->setMlExpirationTime(Gral::getVars(1, "ins_venta_ml_info_txt_ml_expiration_time"));
	$ins_venta_ml_info->setMlSeller(Gral::getVars(1, "ins_venta_ml_info_txt_ml_seller"));
	$ins_venta_ml_info->setMlStatus(Gral::getVars(1, "ins_venta_ml_info_txt_ml_status"));
	$ins_venta_ml_info->setMlItemStatusId(Gral::getVars(1, "ins_venta_ml_info_dbsug_ml_item_status_id", null));
	$ins_venta_ml_info->setMlInitialQuantity(Gral::getVars(1, "ins_venta_ml_info_txt_ml_initial_quantity", null));
	$ins_venta_ml_info->setMlAvailableQuantity(Gral::getVars(1, "ins_venta_ml_info_txt_ml_available_quantity", null));
	$ins_venta_ml_info->setMlSoldQuantity(Gral::getVars(1, "ins_venta_ml_info_txt_ml_sold_quantity", null));
	$ins_venta_ml_info->setMlPrice(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "ins_venta_ml_info_txt_ml_price", 0)));
	$ins_venta_ml_info->setMlUltimaActualizacion(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_venta_ml_info_txt_ml_ultima_actualizacion")));
	$ins_venta_ml_info->setMlFreeShipping(Gral::getVars(1, "ins_venta_ml_info_cmb_ml_free_shipping", 0));
	$ins_venta_ml_info->setMlLocalPickup(Gral::getVars(1, "ins_venta_ml_info_cmb_ml_local_pickup", 0));
	$ins_venta_ml_info->setObservacion(Gral::getVars(1, "ins_venta_ml_info_txa_observacion"));
	$ins_venta_ml_info->setOrden(Gral::getVars(1, "ins_venta_ml_info__orden", 0));
	$ins_venta_ml_info->setEstado(Gral::getVars(1, "ins_venta_ml_info__estado", 0));
	$ins_venta_ml_info->setEditado(Gral::getVars(1, "ins_venta_ml_info__editado", 0));
	$ins_venta_ml_info->setPublicado(Gral::getVars(1, "ins_venta_ml_info__publicado", 0));
	$ins_venta_ml_info->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_venta_ml_info_txt_creado")));
	$ins_venta_ml_info->setCreadoPor(Gral::getVars(1, "ins_venta_ml_info__creado_por", null));
	$ins_venta_ml_info->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_venta_ml_info_txt_modificado")));
	$ins_venta_ml_info->setModificadoPor(Gral::getVars(1, "ins_venta_ml_info__modificado_por", null));

	$ins_venta_ml_info_estado = new InsVentaMlInfo();
	if(trim($hdn_id) != ''){
		$ins_venta_ml_info_estado->setId($hdn_id);
		$ins_venta_ml_info->setEstado($ins_venta_ml_info_estado->getEstado());
		$ins_venta_ml_info->setPublicado($ins_venta_ml_info_estado->getPublicado());		
	}else{
		$ins_venta_ml_info->setEstado(1);
		$ins_venta_ml_info->setPublicado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_venta_ml_info->control();
			if(!$error->getExisteError()){
				$ins_venta_ml_info->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_venta_ml_info_alta.php?cs=1&id='.$ins_venta_ml_info->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_venta_ml_info->control();
			if(!$error->getExisteError()){
				$ins_venta_ml_info->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_venta_ml_info_alta.php?cs=1');
				$ins_venta_ml_info = new InsVentaMlInfo();
			}
		break;
	}
	Gral::setSes('InsVentaMlInfo_ULTIMO_INSERTADO', $ins_venta_ml_info->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_venta_ml_info_id = Gral::getVars(2, $prefijo.'cmb_ins_venta_ml_info_id', 0);
	if($cmb_ins_venta_ml_info_id != 0){
		$ins_venta_ml_info = InsVentaMlInfo::getOxId($cmb_ins_venta_ml_info_id);
	}else{
	
	$ins_venta_ml_info->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_venta_ml_info->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_venta_ml_info->setDescripcionBreve(Gral::getVars(2, "descripcion_breve", ''));
	$ins_venta_ml_info->setDescripcionEmpresa(Gral::getVars(2, "descripcion_empresa", ''));
	$ins_venta_ml_info->setCantidad(Gral::getVars(2, "cantidad", 0));
	$ins_venta_ml_info->setImporte(Gral::getVars(2, "importe", 0));
	$ins_venta_ml_info->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_venta_ml_info->setMlIdentificador(Gral::getVars(2, "ml_identificador", ''));
	$ins_venta_ml_info->setMlCategoryId(Gral::getVars(2, "ml_category_id", 'null'));
	$ins_venta_ml_info->setMlCategoryDesc(Gral::getVars(2, "ml_category_desc", ''));
	$ins_venta_ml_info->setMlCategoryCod(Gral::getVars(2, "ml_category_cod", ''));
	$ins_venta_ml_info->setMlListingTypeId(Gral::getVars(2, "ml_listing_type_id", 'null'));
	$ins_venta_ml_info->setMlListingTypeDesc(Gral::getVars(2, "ml_listing_type_desc", ''));
	$ins_venta_ml_info->setMlConditionId(Gral::getVars(2, "ml_condition_id", 'null'));
	$ins_venta_ml_info->setMlConditionDesc(Gral::getVars(2, "ml_condition_desc", ''));
	$ins_venta_ml_info->setMlShippingModeId(Gral::getVars(2, "ml_shipping_mode_id", 'null'));
	$ins_venta_ml_info->setMlShippingModeDesc(Gral::getVars(2, "ml_shipping_mode_desc", ''));
	$ins_venta_ml_info->setMlPermalink(Gral::getVars(2, "ml_permalink", ''));
	$ins_venta_ml_info->setMlStartTime(Gral::getVars(2, "ml_start_time", ''));
	$ins_venta_ml_info->setMlExpirationTime(Gral::getVars(2, "ml_expiration_time", ''));
	$ins_venta_ml_info->setMlSeller(Gral::getVars(2, "ml_seller", ''));
	$ins_venta_ml_info->setMlStatus(Gral::getVars(2, "ml_status", ''));
	$ins_venta_ml_info->setMlItemStatusId(Gral::getVars(2, "ml_item_status_id", 'null'));
	$ins_venta_ml_info->setMlInitialQuantity(Gral::getVars(2, "ml_initial_quantity", 0));
	$ins_venta_ml_info->setMlAvailableQuantity(Gral::getVars(2, "ml_available_quantity", 0));
	$ins_venta_ml_info->setMlSoldQuantity(Gral::getVars(2, "ml_sold_quantity", 0));
	$ins_venta_ml_info->setMlPrice(Gral::getVars(2, "ml_price", 0));
	$ins_venta_ml_info->setMlUltimaActualizacion(Gral::getVars(2, "ml_ultima_actualizacion", date('Y-m-d H:m:s')));
	$ins_venta_ml_info->setMlFreeShipping(Gral::getVars(2, "ml_free_shipping", 0));
	$ins_venta_ml_info->setMlLocalPickup(Gral::getVars(2, "ml_local_pickup", 0));
	$ins_venta_ml_info->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_venta_ml_info->setOrden(Gral::getVars(2, "orden", 0));
	$ins_venta_ml_info->setEstado(Gral::getVars(2, "estado", 0));
	$ins_venta_ml_info->setEditado(Gral::getVars(2, "editado", 0));
	$ins_venta_ml_info->setPublicado(Gral::getVars(2, "publicado", 0));
	$ins_venta_ml_info->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_venta_ml_info->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_venta_ml_info->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_venta_ml_info->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_venta_ml_info->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_venta_ml_info/ins_venta_ml_info_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_venta_ml_info' width='90%'>
        
				<tr>
				  <td  id="label_ins_venta_ml_info_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_venta_ml_info_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_venta_ml_info->getInsInsumoId(), $ins_venta_ml_info->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Titulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_descripcion' value='<?php Gral::_echoTxt($ins_venta_ml_info->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txa_descripcion_breve" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_breve' ?>" >
				  
                                        <?php Lang::_lang('Desc Breve', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txa_descripcion_breve" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_breve')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_venta_ml_info_txa_descripcion_breve' rows='5' cols='50' id='ins_venta_ml_info_txa_descripcion_breve' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_venta_ml_info->getDescripcionBreve(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_descripcion_breve', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_descripcion_breve', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_descripcion_breve', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_descripcion_breve', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_breve')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txa_descripcion_empresa" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_empresa' ?>" >
				  
                                        <?php Lang::_lang('Desc Empresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txa_descripcion_empresa" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_empresa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_venta_ml_info_txa_descripcion_empresa' rows='5' cols='50' id='ins_venta_ml_info_txa_descripcion_empresa' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_venta_ml_info->getDescripcionEmpresa(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_descripcion_empresa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_descripcion_empresa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_descripcion_empresa', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_descripcion_empresa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_empresa')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_venta_ml_info_txt_cantidad' value='<?php Gral::_echoTxt($ins_venta_ml_info->getCantidad(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_importe" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe' ?>" >
				  
                                        <?php Lang::_lang('Importe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_importe" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_importe' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='ins_venta_ml_info_txt_importe' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($ins_venta_ml_info->getImporte()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_importe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_importe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_importe', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_importe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_identificador" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_identificador' ?>" >
				  
                                        <?php Lang::_lang('ML ID', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_identificador" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_identificador')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_identificador' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_identificador' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlIdentificador(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_identificador', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_identificador', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_identificador', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_identificador', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_identificador')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_category_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_category_id' ?>" >
				  
                                        <?php Lang::_lang('ML Cat', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_category_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_category_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_category_id' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_category_id' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlCategoryId(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_category_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_category_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_category_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_category_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_category_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_category_desc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_category_desc' ?>" >
				  
                                        <?php Lang::_lang('ML Cat', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_category_desc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_category_desc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_category_desc' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_category_desc' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlCategoryDesc(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_category_desc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_category_desc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_category_desc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_category_desc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_category_desc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_category_cod" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_category_cod' ?>" >
				  
                                        <?php Lang::_lang('ML Cat Cod', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_category_cod" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_category_cod')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_category_cod' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_category_cod' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlCategoryCod(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_category_cod', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_category_cod', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_category_cod', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_category_cod', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_category_cod')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_listing_type_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_listing_type_id' ?>" >
				  
                                        <?php Lang::_lang('ML Listing Type', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_listing_type_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_listing_type_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_listing_type_id' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_listing_type_id' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlListingTypeId(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_listing_type_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_listing_type_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_listing_type_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_listing_type_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_listing_type_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_listing_type_desc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_listing_type_desc' ?>" >
				  
                                        <?php Lang::_lang('ML Listing Type', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_listing_type_desc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_listing_type_desc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_listing_type_desc' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_listing_type_desc' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlListingTypeDesc(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_listing_type_desc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_listing_type_desc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_listing_type_desc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_listing_type_desc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_listing_type_desc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_condition_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_condition_id' ?>" >
				  
                                        <?php Lang::_lang('ML Condition', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_condition_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_condition_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_condition_id' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_condition_id' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlConditionId(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_condition_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_condition_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_condition_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_condition_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_condition_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_condition_desc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_condition_desc' ?>" >
				  
                                        <?php Lang::_lang('ML Condition', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_condition_desc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_condition_desc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_condition_desc' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_condition_desc' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlConditionDesc(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_condition_desc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_condition_desc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_condition_desc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_condition_desc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_condition_desc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_shipping_mode_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_shipping_mode_id' ?>" >
				  
                                        <?php Lang::_lang('ML Shipping Mode', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_shipping_mode_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_shipping_mode_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_shipping_mode_id' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_shipping_mode_id' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlShippingModeId(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_shipping_mode_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_shipping_mode_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_shipping_mode_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_shipping_mode_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_shipping_mode_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_shipping_mode_desc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_shipping_mode_desc' ?>" >
				  
                                        <?php Lang::_lang('ML Shipping Mode', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_shipping_mode_desc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_shipping_mode_desc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_shipping_mode_desc' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_shipping_mode_desc' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlShippingModeDesc(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_shipping_mode_desc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_shipping_mode_desc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_shipping_mode_desc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_shipping_mode_desc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_shipping_mode_desc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_permalink" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_permalink' ?>" >
				  
                                        <?php Lang::_lang('ML Permalink', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_permalink" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_permalink')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_permalink' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_permalink' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlPermalink(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_permalink', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_permalink', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_permalink', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_permalink', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_permalink')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_start_time" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_start_time' ?>" >
				  
                                        <?php Lang::_lang('ML Start Time', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_start_time" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_start_time')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_start_time' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_start_time' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlStartTime(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_start_time', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_start_time', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_start_time', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_start_time', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_start_time')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_expiration_time" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_expiration_time' ?>" >
				  
                                        <?php Lang::_lang('ML Exp Time', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_expiration_time" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_expiration_time')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_expiration_time' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_expiration_time' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlExpirationTime(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_expiration_time', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_expiration_time', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_expiration_time', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_expiration_time', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_expiration_time')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_seller" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_seller' ?>" >
				  
                                        <?php Lang::_lang('ML Seller', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_seller" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_seller')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_seller' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_seller' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlSeller(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_seller', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_seller', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_seller', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_seller', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_seller')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_status" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_status' ?>" >
				  
                                        <?php Lang::_lang('ML Status', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_status" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_status')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_status' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_status' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlStatus(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_status', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_status', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_status', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_status', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_status')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_dbsug_ml_item_status_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_item_status_id' ?>" >
				  
                                        <?php Lang::_lang('MlItemStatus', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_dbsug_ml_item_status_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_item_status_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_venta_ml_info_dbsug_ml_item_status', 'ajax/modulos/ml_item_status/ml_item_status_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_venta_ml_info->getMlItemStatusId(), $ins_venta_ml_info->getMlItemStatus()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_item_status_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_item_status_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_item_status_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_item_status_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_item_status_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_initial_quantity" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_initial_quantity' ?>" >
				  
                                        <?php Lang::_lang('ML Initial Quantity', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_initial_quantity" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_initial_quantity')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_initial_quantity' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_initial_quantity' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlInitialQuantity(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_initial_quantity', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_initial_quantity', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_initial_quantity', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_initial_quantity', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_initial_quantity')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_available_quantity" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_available_quantity' ?>" >
				  
                                        <?php Lang::_lang('ML Available Quantity', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_available_quantity" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_available_quantity')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_available_quantity' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_available_quantity' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlAvailableQuantity(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_available_quantity', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_available_quantity', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_available_quantity', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_available_quantity', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_available_quantity')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_sold_quantity" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_sold_quantity' ?>" >
				  
                                        <?php Lang::_lang('ML Sold Quantity', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_sold_quantity" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_sold_quantity')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_sold_quantity' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_venta_ml_info_txt_ml_sold_quantity' value='<?php Gral::_echoTxt($ins_venta_ml_info->getMlSoldQuantity(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_sold_quantity', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_sold_quantity', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_sold_quantity', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_sold_quantity', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_sold_quantity')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_price" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_price' ?>" >
				  
                                        <?php Lang::_lang('ML Price', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_price" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_price')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_price' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='ins_venta_ml_info_txt_ml_price' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($ins_venta_ml_info->getMlPrice()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_price', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_price', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_price', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_price', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_price')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_txt_ml_ultima_actualizacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_ultima_actualizacion' ?>" >
				  
                                        <?php Lang::_lang('ML Ult Act', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_txt_ml_ultima_actualizacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_ultima_actualizacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_venta_ml_info_txt_ml_ultima_actualizacion' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='ins_venta_ml_info_txt_ml_ultima_actualizacion' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($ins_venta_ml_info->getMlUltimaActualizacion()), true) ?>' size='40' />
					<input type='button' id='cal_ins_venta_ml_info_txt_ml_ultima_actualizacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'ins_venta_ml_info_txt_ml_ultima_actualizacion', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_ins_venta_ml_info_txt_ml_ultima_actualizacion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_ultima_actualizacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_ultima_actualizacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_ultima_actualizacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_ultima_actualizacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_ultima_actualizacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_cmb_ml_free_shipping" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_free_shipping' ?>" >
				  
                                        <?php Lang::_lang('ML Free Shipping', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_cmb_ml_free_shipping" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_free_shipping')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_venta_ml_info_cmb_ml_free_shipping', GralSiNo::getGralSiNosCmb(), $ins_venta_ml_info->getMlFreeShipping(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_free_shipping', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_free_shipping', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_free_shipping', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_free_shipping', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_free_shipping')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_venta_ml_info_cmb_ml_local_pickup" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ml_local_pickup' ?>" >
				  
                                        <?php Lang::_lang('ML Local Pickup', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_venta_ml_info_cmb_ml_local_pickup" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ml_local_pickup')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_venta_ml_info_cmb_ml_local_pickup', GralSiNo::getGralSiNosCmb(), $ins_venta_ml_info->getMlLocalPickup(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_venta_ml_info_alta_ml_local_pickup', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_venta_ml_info_alta_ml_local_pickup', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_venta_ml_info_alta_ml_local_pickup', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_venta_ml_info_alta_ml_local_pickup', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ml_local_pickup')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_venta_ml_info->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_venta_ml_info_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_venta_ml_info'/>
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

