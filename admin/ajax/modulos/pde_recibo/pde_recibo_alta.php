<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA')){
    echo "No tiene asignada la credencial PDE_RECIBO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recibo';
$db_nombre_pagina = 'pde_recibo_alta';

$pde_recibo = new PdeRecibo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recibo = new PdeRecibo();
	if(trim($hdn_id) != '') $pde_recibo->setId($hdn_id, false);
	$pde_recibo->setDescripcion(Gral::getVars(1, "pde_recibo_txt_descripcion"));
	$pde_recibo->setPrvProveedorId(Gral::getVars(1, "pde_recibo_cmb_prv_proveedor_id", null));
	$pde_recibo->setPdeTipoReciboId(Gral::getVars(1, "pde_recibo_cmb_pde_tipo_recibo_id", null));
	$pde_recibo->setPdeTipoOrigenReciboId(Gral::getVars(1, "pde_recibo_cmb_pde_tipo_origen_recibo_id", null));
	$pde_recibo->setGralCondicionIvaId(Gral::getVars(1, "pde_recibo_cmb_gral_condicion_iva_id", null));
	$pde_recibo->setGralTipoPersoneriaId(Gral::getVars(1, "pde_recibo_cmb_gral_tipo_personeria_id", null));
	$pde_recibo->setGralEmpresaId(Gral::getVars(1, "pde_recibo_cmb_gral_empresa_id", null));
	$pde_recibo->setPdeCentroPedidoId(Gral::getVars(1, "pde_recibo_cmb_pde_centro_pedido_id", null));
	$pde_recibo->setPdeReciboTipoEstadoId(Gral::getVars(1, "pde_recibo_cmb_pde_recibo_tipo_estado_id", null));
	$pde_recibo->setNumeroPuntoVenta(Gral::getVars(1, "pde_recibo_txt_numero_punto_venta"));
	$pde_recibo->setNumeroRecibo(Gral::getVars(1, "pde_recibo_txt_numero_recibo"));
	$pde_recibo->setNumeroReciboCompleto(Gral::getVars(1, "pde_recibo_txt_numero_recibo_completo"));
	$pde_recibo->setCae(Gral::getVars(1, "pde_recibo_txt_cae"));
	$pde_recibo->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "pde_recibo_txt_fecha_emision")));
	$pde_recibo->setPersonaDescripcion(Gral::getVars(1, "pde_recibo_txt_persona_descripcion"));
	$pde_recibo->setRazonSocial(Gral::getVars(1, "pde_recibo_txt_razon_social"));
	$pde_recibo->setDomicilioLegal(Gral::getVars(1, "pde_recibo_txt_domicilio_legal"));
	$pde_recibo->setCuit(Gral::getVars(1, "pde_recibo_txt_cuit"));
	$pde_recibo->setCodigo(Gral::getVars(1, "pde_recibo_txt_codigo"));
	$pde_recibo->setAnio(Gral::getVars(1, "pde_recibo_txt_anio", 0));
	$pde_recibo->setGralMesId(Gral::getVars(1, "pde_recibo_cmb_gral_mes_id", null));
	$pde_recibo->setCntbDiarioAsientoId(Gral::getVars(1, "pde_recibo_cmb_cntb_diario_asiento_id", null));
	$pde_recibo->setPdeOrdenPagoId(Gral::getVars(1, "pde_recibo_cmb_pde_orden_pago_id", null));
	$pde_recibo->setFndCajaId(Gral::getVars(1, "pde_recibo_dbsug_fnd_caja_id", null));
	$pde_recibo->setObservacion(Gral::getVars(1, "pde_recibo_txa_observacion"));
	$pde_recibo->setNotaInterna(Gral::getVars(1, "pde_recibo_txa_nota_interna"));
	$pde_recibo->setOrden(Gral::getVars(1, "pde_recibo_txt_orden", 0));
	$pde_recibo->setEstado(Gral::getVars(1, "pde_recibo_cmb_estado", 0));
	$pde_recibo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_txt_creado")));
	$pde_recibo->setCreadoPor(Gral::getVars(1, "pde_recibo__creado_por", 0));
	$pde_recibo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_txt_modificado")));
	$pde_recibo->setModificadoPor(Gral::getVars(1, "pde_recibo__modificado_por", 0));

	$pde_recibo_estado = new PdeRecibo();
	if(trim($hdn_id) != ''){
		$pde_recibo_estado->setId($hdn_id);
		$pde_recibo->setEstado($pde_recibo_estado->getEstado());
				
	}else{
		$pde_recibo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recibo->control();
			if(!$error->getExisteError()){
				$pde_recibo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recibo_alta.php?cs=1&id='.$pde_recibo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recibo->control();
			if(!$error->getExisteError()){
				$pde_recibo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recibo_alta.php?cs=1');
				$pde_recibo = new PdeRecibo();
			}
		break;
	}
	Gral::setSes('PdeRecibo_ULTIMO_INSERTADO', $pde_recibo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recibo_id = Gral::getVars(2, $prefijo.'cmb_pde_recibo_id', 0);
	if($cmb_pde_recibo_id != 0){
		$pde_recibo = PdeRecibo::getOxId($cmb_pde_recibo_id);
	}else{
	
	$pde_recibo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recibo->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_recibo->setPdeTipoReciboId(Gral::getVars(2, "pde_tipo_recibo_id", 'null'));
	$pde_recibo->setPdeTipoOrigenReciboId(Gral::getVars(2, "pde_tipo_origen_recibo_id", 'null'));
	$pde_recibo->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
	$pde_recibo->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
	$pde_recibo->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$pde_recibo->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
	$pde_recibo->setPdeReciboTipoEstadoId(Gral::getVars(2, "pde_recibo_tipo_estado_id", 'null'));
	$pde_recibo->setNumeroPuntoVenta(Gral::getVars(2, "numero_punto_venta", ''));
	$pde_recibo->setNumeroRecibo(Gral::getVars(2, "numero_recibo", ''));
	$pde_recibo->setNumeroReciboCompleto(Gral::getVars(2, "numero_recibo_completo", ''));
	$pde_recibo->setCae(Gral::getVars(2, "cae", ''));
	$pde_recibo->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
	$pde_recibo->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
	$pde_recibo->setRazonSocial(Gral::getVars(2, "razon_social", ''));
	$pde_recibo->setDomicilioLegal(Gral::getVars(2, "domicilio_legal", ''));
	$pde_recibo->setCuit(Gral::getVars(2, "cuit", ''));
	$pde_recibo->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recibo->setAnio(Gral::getVars(2, "anio", 0));
	$pde_recibo->setGralMesId(Gral::getVars(2, "gral_mes_id", 'null'));
	$pde_recibo->setCntbDiarioAsientoId(Gral::getVars(2, "cntb_diario_asiento_id", 'null'));
	$pde_recibo->setPdeOrdenPagoId(Gral::getVars(2, "pde_orden_pago_id", 'null'));
	$pde_recibo->setFndCajaId(Gral::getVars(2, "fnd_caja_id", 'null'));
	$pde_recibo->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recibo->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pde_recibo->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recibo->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recibo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recibo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recibo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recibo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recibo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recibo/pde_recibo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recibo' width='90%'>
        
				<tr>
				  <td  id="label_pde_recibo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_descripcion' value='<?php Gral::_echoTxt($pde_recibo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_recibo->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_recibo->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_pde_tipo_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_pde_tipo_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_pde_tipo_recibo_id', Gral::getCmbFiltro(PdeTipoRecibo::getPdeTipoRecibosCmb(), '...'), $pde_recibo->getPdeTipoReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_PDE_TIPO_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_pde_tipo_recibo_id" clase_id="pde_tipo_recibo" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_recibo_id" <?php echo ($pde_recibo->getPdeTipoReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_pde_tipo_recibo_id" clase_id="pde_tipo_recibo" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_pde_tipo_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_pde_tipo_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_pde_tipo_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_pde_tipo_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_pde_tipo_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_pde_tipo_origen_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_origen_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoOrigenRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_pde_tipo_origen_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_origen_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_pde_tipo_origen_recibo_id', Gral::getCmbFiltro(PdeTipoOrigenRecibo::getPdeTipoOrigenRecibosCmb(), '...'), $pde_recibo->getPdeTipoOrigenReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_PDE_TIPO_ORIGEN_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_pde_tipo_origen_recibo_id" clase_id="pde_tipo_origen_recibo" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_origen_recibo_id" <?php echo ($pde_recibo->getPdeTipoOrigenReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_pde_tipo_origen_recibo_id" clase_id="pde_tipo_origen_recibo" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_pde_tipo_origen_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_pde_tipo_origen_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_pde_tipo_origen_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_pde_tipo_origen_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_pde_tipo_origen_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_origen_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_condicion_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralCondicionIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), $pde_recibo->getGralCondicionIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($pde_recibo->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_gral_condicion_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_gral_tipo_personeria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_personeria_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoPersoneria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_gral_tipo_personeria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), $pde_recibo->getGralTipoPersoneriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($pde_recibo->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_gral_tipo_personeria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_gral_tipo_personeria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_gral_tipo_personeria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_gral_tipo_personeria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_gral_tipo_personeria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $pde_recibo->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($pde_recibo->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_pde_centro_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_pde_centro_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_recibo->getPdeCentroPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pde_recibo->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_pde_centro_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_pde_recibo_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdeReciboTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_pde_recibo_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_pde_recibo_tipo_estado_id', Gral::getCmbFiltro(PdeReciboTipoEstado::getPdeReciboTipoEstadosCmb(), '...'), $pde_recibo->getPdeReciboTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_PDE_RECIBO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_pde_recibo_tipo_estado_id" clase_id="pde_recibo_tipo_estado" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_tipo_estado_id" <?php echo ($pde_recibo->getPdeReciboTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_pde_recibo_tipo_estado_id" clase_id="pde_recibo_tipo_estado" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_pde_recibo_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_pde_recibo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_pde_recibo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_pde_recibo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_pde_recibo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_numero_punto_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_punto_venta' ?>" >
				  
                                        <?php Lang::_lang('Numero de Pto Vta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_numero_punto_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_punto_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_numero_punto_venta' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_numero_punto_venta' value='<?php Gral::_echoTxt($pde_recibo->getNumeroPuntoVenta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_numero_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_numero_punto_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_numero_punto_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_numero_punto_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_punto_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_numero_recibo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_recibo' ?>" >
				  
                                        <?php Lang::_lang('Numero de recibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_numero_recibo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_recibo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_numero_recibo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_numero_recibo' value='<?php Gral::_echoTxt($pde_recibo->getNumeroRecibo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_numero_recibo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_numero_recibo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_numero_recibo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_numero_recibo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_recibo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_numero_recibo_completo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_recibo_completo' ?>" >
				  
                                        <?php Lang::_lang('Numero de recibo Completo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_numero_recibo_completo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_recibo_completo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_numero_recibo_completo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_numero_recibo_completo' value='<?php Gral::_echoTxt($pde_recibo->getNumeroReciboCompleto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_numero_recibo_completo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_numero_recibo_completo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_numero_recibo_completo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_numero_recibo_completo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_recibo_completo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cae' ?>" >
				  
                                        <?php Lang::_lang('Cae', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_cae" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_cae' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_cae' value='<?php Gral::_echoTxt($pde_recibo->getCae(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_cae', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_cae', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_cae', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_cae', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cae')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Emision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_recibo_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_recibo->getFechaEmision()), true) ?>' size='40' />
					<input type='button' id='cal_pde_recibo_txt_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_recibo_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_pde_recibo_txt_fecha_emision'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_razon_social" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_razon_social' ?>" >
				  
                                        <?php Lang::_lang('Razon Social', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_razon_social" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('razon_social')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_razon_social' value='<?php Gral::_echoTxt($pde_recibo->getRazonSocial(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_razon_social', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_razon_social', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_razon_social', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_razon_social', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('razon_social')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_domicilio_legal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio_legal' ?>" >
				  
                                        <?php Lang::_lang('Domicilio Legal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_domicilio_legal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio_legal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_domicilio_legal' value='<?php Gral::_echoTxt($pde_recibo->getDomicilioLegal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_domicilio_legal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_domicilio_legal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_domicilio_legal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_domicilio_legal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_legal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuit' ?>" >
				  
                                        <?php Lang::_lang('CUIT', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_cuit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_cuit' value='<?php Gral::_echoTxt($pde_recibo->getCuit(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_cuit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_cuit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_cuit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_cuit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_codigo' value='<?php Gral::_echoTxt($pde_recibo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txt_anio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_anio' ?>" >
				  
                                        <?php Lang::_lang('Anio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txt_anio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('anio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_txt_anio' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_anio' value='<?php Gral::_echoTxt($pde_recibo->getAnio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_alta_anio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_anio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_anio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_anio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_gral_mes_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_mes_id' ?>" >
				  
                                        <?php Lang::_lang('GralMes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_gral_mes_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_mes_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), $pde_recibo->getGralMesId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_GRAL_MES')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_gral_mes_id" clase_id="gral_mes" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_mes_id" <?php echo ($pde_recibo->getGralMesId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_gral_mes_id" clase_id="gral_mes" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_gral_mes_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_mes_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_cntb_diario_asiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_diario_asiento_id' ?>" >
				  
                                        <?php Lang::_lang('CntbDiarioAsiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_cntb_diario_asiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), $pde_recibo->getCntbDiarioAsientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_CNTB_DIARIO_ASIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_diario_asiento_id" <?php echo ($pde_recibo->getCntbDiarioAsientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_cntb_diario_asiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_cmb_pde_orden_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOrdenPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_cmb_pde_orden_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recibo_cmb_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), $pde_recibo->getPdeOrdenPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA_CMB_EDIT_PDE_ORDEN_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_id" <?php echo ($pde_recibo->getPdeOrdenPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_pde_orden_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recibo_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_dbsug_fnd_caja_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_id' ?>" >
				  
                                        <?php Lang::_lang('FndCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_dbsug_fnd_caja_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_recibo_dbsug_fnd_caja', 'ajax/modulos/fnd_caja/fnd_caja_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_recibo->getFndCajaId(), $pde_recibo->getFndCaja()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_recibo_alta_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recibo_txa_observacion' rows='10' cols='50' id='pde_recibo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recibo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recibo_txa_nota_interna' rows='10' cols='50' id='pde_recibo_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recibo->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recibo_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recibo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recibo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recibo'/>
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

