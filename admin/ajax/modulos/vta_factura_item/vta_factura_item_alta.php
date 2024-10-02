<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_FACTURA_ITEM_ALTA')){
    echo "No tiene asignada la credencial VTA_FACTURA_ITEM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_factura_item';
$db_nombre_pagina = 'vta_factura_item_alta';

$vta_factura_item = new VtaFacturaItem();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_factura_item = new VtaFacturaItem();
	if(trim($hdn_id) != '') $vta_factura_item->setId($hdn_id, false);
	$vta_factura_item->setDescripcion(Gral::getVars(1, "vta_factura_item_txt_descripcion"));
	$vta_factura_item->setVtaFacturaId(Gral::getVars(1, "vta_factura_item_cmb_vta_factura_id", null));
	$vta_factura_item->setGralTipoIvaId(Gral::getVars(1, "vta_factura_item_cmb_gral_tipo_iva_id", null));
	$vta_factura_item->setVtaFacturaConceptoId(Gral::getVars(1, "vta_factura_item_cmb_vta_factura_concepto_id", null));
	$vta_factura_item->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_factura_item_txt_importe_unitario", 0)));
	$vta_factura_item->setCantidad(Gral::getVars(1, "vta_factura_item_txt_cantidad", 0));
	$vta_factura_item->setPercepcionIibbAplica(Gral::getVars(1, "vta_factura_item_cmb_percepcion_iibb_aplica", 0));
	$vta_factura_item->setCodigo(Gral::getVars(1, "vta_factura_item_txt_codigo"));
	$vta_factura_item->setObservacion(Gral::getVars(1, "vta_factura_item_txa_observacion"));
	$vta_factura_item->setOrden(Gral::getVars(1, "vta_factura_item_txt_orden", 0));
	$vta_factura_item->setEstado(Gral::getVars(1, "vta_factura_item_cmb_estado", 0));
	$vta_factura_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_factura_item_txt_creado")));
	$vta_factura_item->setCreadoPor(Gral::getVars(1, "vta_factura_item__creado_por", 0));
	$vta_factura_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_factura_item_txt_modificado")));
	$vta_factura_item->setModificadoPor(Gral::getVars(1, "vta_factura_item__modificado_por", 0));

	$vta_factura_item_estado = new VtaFacturaItem();
	if(trim($hdn_id) != ''){
		$vta_factura_item_estado->setId($hdn_id);
		$vta_factura_item->setEstado($vta_factura_item_estado->getEstado());
				
	}else{
		$vta_factura_item->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_factura_item->control();
			if(!$error->getExisteError()){
				$vta_factura_item->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_factura_item_alta.php?cs=1&id='.$vta_factura_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_factura_item->control();
			if(!$error->getExisteError()){
				$vta_factura_item->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_factura_item_alta.php?cs=1');
				$vta_factura_item = new VtaFacturaItem();
			}
		break;
	}
	Gral::setSes('VtaFacturaItem_ULTIMO_INSERTADO', $vta_factura_item->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_factura_item_id = Gral::getVars(2, $prefijo.'cmb_vta_factura_item_id', 0);
	if($cmb_vta_factura_item_id != 0){
		$vta_factura_item = VtaFacturaItem::getOxId($cmb_vta_factura_item_id);
	}else{
	
	$vta_factura_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_factura_item->setVtaFacturaId(Gral::getVars(2, "vta_factura_id", 'null'));
	$vta_factura_item->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$vta_factura_item->setVtaFacturaConceptoId(Gral::getVars(2, "vta_factura_concepto_id", 'null'));
	$vta_factura_item->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$vta_factura_item->setCantidad(Gral::getVars(2, "cantidad", 0));
	$vta_factura_item->setPercepcionIibbAplica(Gral::getVars(2, "percepcion_iibb_aplica", 0));
	$vta_factura_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_factura_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_factura_item->setOrden(Gral::getVars(2, "orden", 0));
	$vta_factura_item->setEstado(Gral::getVars(2, "estado", 0));
	$vta_factura_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_factura_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_factura_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_factura_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_factura_item->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_factura_item/vta_factura_item_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_factura_item' width='90%'>
        
				<tr>
				  <td  id="label_vta_factura_item_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_item_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_factura_item_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_factura_item_txt_descripcion' value='<?php Gral::_echoTxt($vta_factura_item->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_factura_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_item_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_item_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_item_cmb_vta_factura_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_factura_id' ?>" >
				  
                                        <?php Lang::_lang('VtaFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_item_cmb_vta_factura_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_item_cmb_vta_factura_id', Gral::getCmbFiltro(VtaFactura::getVtaFacturasCmb(), '...'), $vta_factura_item->getVtaFacturaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ITEM_ALTA_CMB_EDIT_VTA_FACTURA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_item_cmb_vta_factura_id" clase_id="vta_factura" prefijo='vta_factura_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_factura_id" <?php echo ($vta_factura_item->getVtaFacturaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_item_cmb_vta_factura_id" clase_id="vta_factura" prefijo='vta_factura_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_item_cmb_vta_factura_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_item_alta_vta_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_item_alta_vta_factura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_item_alta_vta_factura_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_item_alta_vta_factura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_factura_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_item_cmb_gral_tipo_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_item_cmb_gral_tipo_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_item_cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $vta_factura_item->getGralTipoIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ITEM_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_item_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_factura_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($vta_factura_item->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_item_cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='vta_factura_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_item_cmb_gral_tipo_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_item_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_item_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_item_alta_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_item_alta_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_item_cmb_vta_factura_concepto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_factura_concepto_id' ?>" >
				  
                                        <?php Lang::_lang('VtaFacturaConcepto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_item_cmb_vta_factura_concepto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_factura_concepto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_item_cmb_vta_factura_concepto_id', Gral::getCmbFiltro(VtaFacturaConcepto::getVtaFacturaConceptosCmb(), '...'), $vta_factura_item->getVtaFacturaConceptoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ITEM_ALTA_CMB_EDIT_VTA_FACTURA_CONCEPTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_factura_item_cmb_vta_factura_concepto_id" clase_id="vta_factura_concepto" prefijo='vta_factura_item_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_factura_concepto_id" <?php echo ($vta_factura_item->getVtaFacturaConceptoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_factura_item_cmb_vta_factura_concepto_id" clase_id="vta_factura_concepto" prefijo='vta_factura_item_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_factura_item_cmb_vta_factura_concepto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_factura_item_alta_vta_factura_concepto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_item_alta_vta_factura_concepto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_item_alta_vta_factura_concepto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_item_alta_vta_factura_concepto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_factura_concepto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_item_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_item_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_factura_item_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_factura_item_txt_codigo' value='<?php Gral::_echoTxt($vta_factura_item->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_factura_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_item_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_item_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_item_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_item_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_factura_item_txa_observacion' rows='10' cols='50' id='vta_factura_item_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_factura_item->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_factura_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_item_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_item_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_factura_item->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_factura_item_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_factura_item'/>
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

