<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ALTA')){
    echo "No tiene asignada la credencial PDE_OC_AGRUPACION_ITEM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_oc_agrupacion_item';
$db_nombre_pagina = 'pde_oc_agrupacion_item_alta';

$pde_oc_agrupacion_item = new PdeOcAgrupacionItem();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_oc_agrupacion_item = new PdeOcAgrupacionItem();
	if(trim($hdn_id) != '') $pde_oc_agrupacion_item->setId($hdn_id, false);
	$pde_oc_agrupacion_item->setDescripcion(Gral::getVars(1, "pde_oc_agrupacion_item_txt_descripcion"));
	$pde_oc_agrupacion_item->setCodigo(Gral::getVars(1, "pde_oc_agrupacion_item_txt_codigo"));
	$pde_oc_agrupacion_item->setPdeOcAgrupacionId(Gral::getVars(1, "pde_oc_agrupacion_item_cmb_pde_oc_agrupacion_id", null));
	$pde_oc_agrupacion_item->setInsInsumoId(Gral::getVars(1, "pde_oc_agrupacion_item_cmb_ins_insumo_id", null));
	$pde_oc_agrupacion_item->setCantidad(Gral::getVars(1, "pde_oc_agrupacion_item_txt_cantidad", 0));
	$pde_oc_agrupacion_item->setImporteUnidad(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_oc_agrupacion_item_txt_importe_unidad", 0)));
	$pde_oc_agrupacion_item->setPrvInsumoId(Gral::getVars(1, "pde_oc_agrupacion_item_dbsug_prv_insumo_id", null));
	$pde_oc_agrupacion_item->setPrvInsumoCostoId(Gral::getVars(1, "pde_oc_agrupacion_item_dbsug_prv_insumo_costo_id", null));
	$pde_oc_agrupacion_item->setImporteEsperado(Gral::getVars(1, "pde_oc_agrupacion_item_txt_importe_esperado", 0));
	$pde_oc_agrupacion_item->setAfectaCosto(Gral::getVars(1, "pde_oc_agrupacion_item_cmb_afecta_costo", 0));
	$pde_oc_agrupacion_item->setPrvDescuentoFinancieroId(Gral::getVars(1, "pde_oc_agrupacion_item_cmb_prv_descuento_financiero_id", null));
	$pde_oc_agrupacion_item->setPrvDescuentoComercialId(Gral::getVars(1, "pde_oc_agrupacion_item_cmb_prv_descuento_comercial_id", null));
	$pde_oc_agrupacion_item->setObservacion(Gral::getVars(1, "pde_oc_agrupacion_item_txa_observacion"));
	$pde_oc_agrupacion_item->setOrden(Gral::getVars(1, "pde_oc_agrupacion_item_txt_orden", 0));
	$pde_oc_agrupacion_item->setEstado(Gral::getVars(1, "pde_oc_agrupacion_item__estado", 0));
	$pde_oc_agrupacion_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_oc_agrupacion_item_txt_creado")));
	$pde_oc_agrupacion_item->setCreadoPor(Gral::getVars(1, "pde_oc_agrupacion_item__creado_por", null));
	$pde_oc_agrupacion_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_oc_agrupacion_item_txt_modificado")));
	$pde_oc_agrupacion_item->setModificadoPor(Gral::getVars(1, "pde_oc_agrupacion_item__modificado_por", null));

	$pde_oc_agrupacion_item_estado = new PdeOcAgrupacionItem();
	if(trim($hdn_id) != ''){
		$pde_oc_agrupacion_item_estado->setId($hdn_id);
		$pde_oc_agrupacion_item->setEstado($pde_oc_agrupacion_item_estado->getEstado());
				
	}else{
		$pde_oc_agrupacion_item->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_oc_agrupacion_item->control();
			if(!$error->getExisteError()){
				$pde_oc_agrupacion_item->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_oc_agrupacion_item_alta.php?cs=1&id='.$pde_oc_agrupacion_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_oc_agrupacion_item->control();
			if(!$error->getExisteError()){
				$pde_oc_agrupacion_item->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_oc_agrupacion_item_alta.php?cs=1');
				$pde_oc_agrupacion_item = new PdeOcAgrupacionItem();
			}
		break;
	}
	Gral::setSes('PdeOcAgrupacionItem_ULTIMO_INSERTADO', $pde_oc_agrupacion_item->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_oc_agrupacion_item_id = Gral::getVars(2, $prefijo.'cmb_pde_oc_agrupacion_item_id', 0);
	if($cmb_pde_oc_agrupacion_item_id != 0){
		$pde_oc_agrupacion_item = PdeOcAgrupacionItem::getOxId($cmb_pde_oc_agrupacion_item_id);
	}else{
	
	$pde_oc_agrupacion_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_oc_agrupacion_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_oc_agrupacion_item->setPdeOcAgrupacionId(Gral::getVars(2, "pde_oc_agrupacion_id", 'null'));
	$pde_oc_agrupacion_item->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$pde_oc_agrupacion_item->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_oc_agrupacion_item->setImporteUnidad(Gral::getVars(2, "importe_unidad", 0));
	$pde_oc_agrupacion_item->setPrvInsumoId(Gral::getVars(2, "prv_insumo_id", 'null'));
	$pde_oc_agrupacion_item->setPrvInsumoCostoId(Gral::getVars(2, "prv_insumo_costo_id", 'null'));
	$pde_oc_agrupacion_item->setImporteEsperado(Gral::getVars(2, "importe_esperado", 0));
	$pde_oc_agrupacion_item->setAfectaCosto(Gral::getVars(2, "afecta_costo", 0));
	$pde_oc_agrupacion_item->setPrvDescuentoFinancieroId(Gral::getVars(2, "prv_descuento_financiero_id", 'null'));
	$pde_oc_agrupacion_item->setPrvDescuentoComercialId(Gral::getVars(2, "prv_descuento_comercial_id", 'null'));
	$pde_oc_agrupacion_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_oc_agrupacion_item->setOrden(Gral::getVars(2, "orden", 0));
	$pde_oc_agrupacion_item->setEstado(Gral::getVars(2, "estado", 0));
	$pde_oc_agrupacion_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_oc_agrupacion_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_oc_agrupacion_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_oc_agrupacion_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_oc_agrupacion_item->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_oc_agrupacion_item/pde_oc_agrupacion_item_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_oc_agrupacion_item' width='90%'>
        
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_agrupacion_item_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_agrupacion_item_txt_descripcion' value='<?php Gral::_echoTxt($pde_oc_agrupacion_item->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_agrupacion_item_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_agrupacion_item_txt_codigo' value='<?php Gral::_echoTxt($pde_oc_agrupacion_item->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_cmb_pde_oc_agrupacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_agrupacion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOcAgrupacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_cmb_pde_oc_agrupacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_oc_agrupacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_agrupacion_item_cmb_pde_oc_agrupacion_id', Gral::getCmbFiltro(PdeOcAgrupacion::getPdeOcAgrupacionsCmb(), '...'), $pde_oc_agrupacion_item->getPdeOcAgrupacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ALTA_CMB_EDIT_PDE_OC_AGRUPACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_agrupacion_item_cmb_pde_oc_agrupacion_id" clase_id="pde_oc_agrupacion" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_agrupacion_id" <?php echo ($pde_oc_agrupacion_item->getPdeOcAgrupacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_agrupacion_item_cmb_pde_oc_agrupacion_id" clase_id="pde_oc_agrupacion" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_agrupacion_item_cmb_pde_oc_agrupacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_pde_oc_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_pde_oc_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_pde_oc_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_pde_oc_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_agrupacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_agrupacion_item_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $pde_oc_agrupacion_item->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_agrupacion_item_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pde_oc_agrupacion_item->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_agrupacion_item_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_agrupacion_item_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_agrupacion_item_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_oc_agrupacion_item_txt_cantidad' value='<?php Gral::_echoTxt($pde_oc_agrupacion_item->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_txt_importe_unidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_unidad' ?>" >
				  
                                        <?php Lang::_lang('Importe Unidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_txt_importe_unidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_unidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_agrupacion_item_txt_importe_unidad' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='pde_oc_agrupacion_item_txt_importe_unidad' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_oc_agrupacion_item->getImporteUnidad()), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_importe_unidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_importe_unidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_importe_unidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_importe_unidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_unidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_dbsug_prv_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('PrvInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_dbsug_prv_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_oc_agrupacion_item_dbsug_prv_insumo', 'ajax/modulos/prv_insumo/prv_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_oc_agrupacion_item->getPrvInsumoId(), $pde_oc_agrupacion_item->getPrvInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_dbsug_prv_insumo_costo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_insumo_costo_id' ?>" >
				  
                                        <?php Lang::_lang('PrvInsumoCosto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_dbsug_prv_insumo_costo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_insumo_costo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_oc_agrupacion_item_dbsug_prv_insumo_costo', 'ajax/modulos/prv_insumo_costo/prv_insumo_costo_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_oc_agrupacion_item->getPrvInsumoCostoId(), $pde_oc_agrupacion_item->getPrvInsumoCosto()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_insumo_costo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_insumo_costo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_insumo_costo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_txt_importe_esperado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_esperado' ?>" >
				  
                                        <?php Lang::_lang('Importe Esperado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_txt_importe_esperado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_esperado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_oc_agrupacion_item_txt_importe_esperado' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_oc_agrupacion_item_txt_importe_esperado' value='<?php Gral::_echoTxt($pde_oc_agrupacion_item->getImporteEsperado(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_importe_esperado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_importe_esperado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_importe_esperado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_importe_esperado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_esperado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_cmb_afecta_costo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_afecta_costo' ?>" >
				  
                                        <?php Lang::_lang('Afecta Costo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_cmb_afecta_costo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('afecta_costo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_agrupacion_item_cmb_afecta_costo', GralSiNo::getGralSiNosCmb(), $pde_oc_agrupacion_item->getAfectaCosto(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_afecta_costo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_afecta_costo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_afecta_costo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_afecta_costo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afecta_costo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_cmb_prv_descuento_financiero_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_descuento_financiero_id' ?>" >
				  
                                        <?php Lang::_lang('PrvDescuentoFinanciero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_cmb_prv_descuento_financiero_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_descuento_financiero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_agrupacion_item_cmb_prv_descuento_financiero_id', Gral::getCmbFiltro(PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmb(), '...'), $pde_oc_agrupacion_item->getPrvDescuentoFinancieroId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ALTA_CMB_EDIT_PRV_DESCUENTO_FINANCIERO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_agrupacion_item_cmb_prv_descuento_financiero_id" clase_id="prv_descuento_financiero" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_descuento_financiero_id" <?php echo ($pde_oc_agrupacion_item->getPrvDescuentoFinancieroId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_agrupacion_item_cmb_prv_descuento_financiero_id" clase_id="prv_descuento_financiero" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_agrupacion_item_cmb_prv_descuento_financiero_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_descuento_financiero_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_cmb_prv_descuento_comercial_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_descuento_comercial_id' ?>" >
				  
                                        <?php Lang::_lang('PrvDescuentoComercial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_cmb_prv_descuento_comercial_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_descuento_comercial_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_oc_agrupacion_item_cmb_prv_descuento_comercial_id', Gral::getCmbFiltro(PrvDescuentoComercial::getPrvDescuentoComercialsCmb(), '...'), $pde_oc_agrupacion_item->getPrvDescuentoComercialId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ALTA_CMB_EDIT_PRV_DESCUENTO_COMERCIAL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_oc_agrupacion_item_cmb_prv_descuento_comercial_id" clase_id="prv_descuento_comercial" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_descuento_comercial_id" <?php echo ($pde_oc_agrupacion_item->getPrvDescuentoComercialId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_oc_agrupacion_item_cmb_prv_descuento_comercial_id" clase_id="prv_descuento_comercial" prefijo='pde_oc_agrupacion_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_oc_agrupacion_item_cmb_prv_descuento_comercial_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_descuento_comercial_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_prv_descuento_comercial_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_descuento_comercial_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_prv_descuento_comercial_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_descuento_comercial_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_oc_agrupacion_item_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_oc_agrupacion_item_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_oc_agrupacion_item_txa_observacion' rows='10' cols='50' id='pde_oc_agrupacion_item_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_oc_agrupacion_item->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_oc_agrupacion_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_oc_agrupacion_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_oc_agrupacion_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_oc_agrupacion_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_oc_agrupacion_item->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_oc_agrupacion_item_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_oc_agrupacion_item'/>
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

