<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA')){
    echo "No tiene asignada la credencial PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_nota_credito_pde_factura_pde_oc';
$db_nombre_pagina = 'pde_nota_credito_pde_factura_pde_oc_alta';

$pde_nota_credito_pde_factura_pde_oc = new PdeNotaCreditoPdeFacturaPdeOc();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_nota_credito_pde_factura_pde_oc = new PdeNotaCreditoPdeFacturaPdeOc();
	if(trim($hdn_id) != '') $pde_nota_credito_pde_factura_pde_oc->setId($hdn_id, false);
	$pde_nota_credito_pde_factura_pde_oc->setDescripcion(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txt_descripcion"));
	$pde_nota_credito_pde_factura_pde_oc->setPdeNotaCreditoId(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_cmb_pde_nota_credito_id", null));
	$pde_nota_credito_pde_factura_pde_oc->setPdeFacturaPdeOcId(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_cmb_pde_factura_pde_oc_id", null));
	$pde_nota_credito_pde_factura_pde_oc->setInsInsumoId(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_cmb_ins_insumo_id", null));
	$pde_nota_credito_pde_factura_pde_oc->setInsUnidadMedidaId(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_cmb_ins_unidad_medida_id", null));
	$pde_nota_credito_pde_factura_pde_oc->setGralTipoIvaId(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_cmb_gral_tipo_iva_id", null));
	$pde_nota_credito_pde_factura_pde_oc->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txt_importe_unitario", 0)));
	$pde_nota_credito_pde_factura_pde_oc->setCantidad(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txt_cantidad", 0));
	$pde_nota_credito_pde_factura_pde_oc->setCodigo(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txt_codigo"));
	$pde_nota_credito_pde_factura_pde_oc->setObservacion(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txa_observacion"));
	$pde_nota_credito_pde_factura_pde_oc->setOrden(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txt_orden", 0));
	$pde_nota_credito_pde_factura_pde_oc->setEstado(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_cmb_estado", 0));
	$pde_nota_credito_pde_factura_pde_oc->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txt_creado")));
	$pde_nota_credito_pde_factura_pde_oc->setCreadoPor(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc__creado_por", 0));
	$pde_nota_credito_pde_factura_pde_oc->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc_txt_modificado")));
	$pde_nota_credito_pde_factura_pde_oc->setModificadoPor(Gral::getVars(1, "pde_nota_credito_pde_factura_pde_oc__modificado_por", 0));

	$pde_nota_credito_pde_factura_pde_oc_estado = new PdeNotaCreditoPdeFacturaPdeOc();
	if(trim($hdn_id) != ''){
		$pde_nota_credito_pde_factura_pde_oc_estado->setId($hdn_id);
		$pde_nota_credito_pde_factura_pde_oc->setEstado($pde_nota_credito_pde_factura_pde_oc_estado->getEstado());
				
	}else{
		$pde_nota_credito_pde_factura_pde_oc->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_nota_credito_pde_factura_pde_oc->control();
			if(!$error->getExisteError()){
				$pde_nota_credito_pde_factura_pde_oc->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_nota_credito_pde_factura_pde_oc_alta.php?cs=1&id='.$pde_nota_credito_pde_factura_pde_oc->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_nota_credito_pde_factura_pde_oc->control();
			if(!$error->getExisteError()){
				$pde_nota_credito_pde_factura_pde_oc->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_nota_credito_pde_factura_pde_oc_alta.php?cs=1');
				$pde_nota_credito_pde_factura_pde_oc = new PdeNotaCreditoPdeFacturaPdeOc();
			}
		break;
	}
	Gral::setSes('PdeNotaCreditoPdeFacturaPdeOc_ULTIMO_INSERTADO', $pde_nota_credito_pde_factura_pde_oc->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_nota_credito_pde_factura_pde_oc_id = Gral::getVars(2, $prefijo.'cmb_pde_nota_credito_pde_factura_pde_oc_id', 0);
	if($cmb_pde_nota_credito_pde_factura_pde_oc_id != 0){
		$pde_nota_credito_pde_factura_pde_oc = PdeNotaCreditoPdeFacturaPdeOc::getOxId($cmb_pde_nota_credito_pde_factura_pde_oc_id);
	}else{
	
	$pde_nota_credito_pde_factura_pde_oc->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_nota_credito_pde_factura_pde_oc->setPdeNotaCreditoId(Gral::getVars(2, "pde_nota_credito_id", 'null'));
	$pde_nota_credito_pde_factura_pde_oc->setPdeFacturaPdeOcId(Gral::getVars(2, "pde_factura_pde_oc_id", 'null'));
	$pde_nota_credito_pde_factura_pde_oc->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$pde_nota_credito_pde_factura_pde_oc->setInsUnidadMedidaId(Gral::getVars(2, "ins_unidad_medida_id", 'null'));
	$pde_nota_credito_pde_factura_pde_oc->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$pde_nota_credito_pde_factura_pde_oc->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$pde_nota_credito_pde_factura_pde_oc->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_nota_credito_pde_factura_pde_oc->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_nota_credito_pde_factura_pde_oc->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_nota_credito_pde_factura_pde_oc->setOrden(Gral::getVars(2, "orden", 0));
	$pde_nota_credito_pde_factura_pde_oc->setEstado(Gral::getVars(2, "estado", 0));
	$pde_nota_credito_pde_factura_pde_oc->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_nota_credito_pde_factura_pde_oc->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_nota_credito_pde_factura_pde_oc->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_nota_credito_pde_factura_pde_oc->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_nota_credito_pde_factura_pde_oc->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_nota_credito_pde_factura_pde_oc/pde_nota_credito_pde_factura_pde_oc_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_nota_credito_pde_factura_pde_oc' width='90%'>
        
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_pde_factura_pde_oc_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_pde_factura_pde_oc_txt_descripcion' value='<?php Gral::_echoTxt($pde_nota_credito_pde_factura_pde_oc->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_cmb_pde_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_cmb_pde_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_pde_factura_pde_oc_cmb_pde_nota_credito_id', Gral::getCmbFiltro(PdeNotaCredito::getPdeNotaCreditosCmb(), '...'), $pde_nota_credito_pde_factura_pde_oc->getPdeNotaCreditoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA_CMB_EDIT_PDE_NOTA_CREDITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_pde_nota_credito_id" clase_id="pde_nota_credito" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_credito_id" <?php echo ($pde_nota_credito_pde_factura_pde_oc->getPdeNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_pde_nota_credito_id" clase_id="pde_nota_credito" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_pde_factura_pde_oc_cmb_pde_nota_credito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_cmb_pde_factura_pde_oc_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_factura_pde_oc_id' ?>" >
				  
                                        <?php Lang::_lang('PdeFacturaPdeOc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_cmb_pde_factura_pde_oc_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_factura_pde_oc_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_pde_factura_pde_oc_cmb_pde_factura_pde_oc_id', Gral::getCmbFiltro(PdeFacturaPdeOc::getPdeFacturaPdeOcsCmb(), '...'), $pde_nota_credito_pde_factura_pde_oc->getPdeFacturaPdeOcId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA_CMB_EDIT_PDE_FACTURA_PDE_OC')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_pde_factura_pde_oc_id" clase_id="pde_factura_pde_oc" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_factura_pde_oc_id" <?php echo ($pde_nota_credito_pde_factura_pde_oc->getPdeFacturaPdeOcId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_pde_factura_pde_oc_id" clase_id="pde_factura_pde_oc" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_pde_factura_pde_oc_cmb_pde_factura_pde_oc_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_pde_factura_pde_oc_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_pde_factura_pde_oc_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_pde_factura_pde_oc_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_pde_factura_pde_oc_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_factura_pde_oc_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_pde_factura_pde_oc_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $pde_nota_credito_pde_factura_pde_oc->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pde_nota_credito_pde_factura_pde_oc->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_pde_factura_pde_oc_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_cmb_ins_unidad_medida_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_unidad_medida_id' ?>" >
				  
                                        <?php Lang::_lang('InsUnidadMedida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_cmb_ins_unidad_medida_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_pde_factura_pde_oc_cmb_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), $pde_nota_credito_pde_factura_pde_oc->getInsUnidadMedidaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA_CMB_EDIT_INS_UNIDAD_MEDIDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_unidad_medida_id" <?php echo ($pde_nota_credito_pde_factura_pde_oc->getInsUnidadMedidaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_pde_factura_pde_oc_cmb_ins_unidad_medida_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_cmb_gral_tipo_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_cmb_gral_tipo_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_pde_factura_pde_oc_cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $pde_nota_credito_pde_factura_pde_oc->getGralTipoIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($pde_nota_credito_pde_factura_pde_oc->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_pde_factura_pde_oc_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='pde_nota_credito_pde_factura_pde_oc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_pde_factura_pde_oc_cmb_gral_tipo_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_pde_factura_pde_oc_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_pde_factura_pde_oc_txt_codigo' value='<?php Gral::_echoTxt($pde_nota_credito_pde_factura_pde_oc->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_pde_factura_pde_oc_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_pde_factura_pde_oc_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_nota_credito_pde_factura_pde_oc_txa_observacion' rows='10' cols='50' id='pde_nota_credito_pde_factura_pde_oc_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_nota_credito_pde_factura_pde_oc->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_pde_factura_pde_oc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_pde_factura_pde_oc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_nota_credito_pde_factura_pde_oc->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_nota_credito_pde_factura_pde_oc_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_nota_credito_pde_factura_pde_oc'/>
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

