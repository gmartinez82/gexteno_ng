<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA')){
    echo "No tiene asignada la credencial PDE_NOTA_CREDITO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_nota_credito';
$db_nombre_pagina = 'pde_nota_credito_alta';

$pde_nota_credito = new PdeNotaCredito();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_nota_credito = new PdeNotaCredito();
	if(trim($hdn_id) != '') $pde_nota_credito->setId($hdn_id, false);
	$pde_nota_credito->setDescripcion(Gral::getVars(1, "pde_nota_credito_txt_descripcion"));
	$pde_nota_credito->setPrvProveedorId(Gral::getVars(1, "pde_nota_credito_cmb_prv_proveedor_id", null));
	$pde_nota_credito->setPdeTipoNotaCreditoId(Gral::getVars(1, "pde_nota_credito_cmb_pde_tipo_nota_credito_id", null));
	$pde_nota_credito->setPdeTipoOrigenNotaCreditoId(Gral::getVars(1, "pde_nota_credito_cmb_pde_tipo_origen_nota_credito_id", null));
	$pde_nota_credito->setGralCondicionIvaId(Gral::getVars(1, "pde_nota_credito_cmb_gral_condicion_iva_id", null));
	$pde_nota_credito->setGralTipoPersoneriaId(Gral::getVars(1, "pde_nota_credito_cmb_gral_tipo_personeria_id", null));
	$pde_nota_credito->setGralEmpresaId(Gral::getVars(1, "pde_nota_credito_cmb_gral_empresa_id", null));
	$pde_nota_credito->setPdeCentroPedidoId(Gral::getVars(1, "pde_nota_credito_cmb_pde_centro_pedido_id", null));
	$pde_nota_credito->setPdeNotaCreditoTipoEstadoId(Gral::getVars(1, "pde_nota_credito_cmb_pde_nota_credito_tipo_estado_id", null));
	$pde_nota_credito->setGralFpFormaPagoId(Gral::getVars(1, "pde_nota_credito_cmb_gral_fp_forma_pago_id", null));
	$pde_nota_credito->setGralActividadId(Gral::getVars(1, "pde_nota_credito_cmb_gral_actividad_id", null));
	$pde_nota_credito->setGralEscenarioId(Gral::getVars(1, "pde_nota_credito_cmb_gral_escenario_id", null));
	$pde_nota_credito->setNumeroPuntoVenta(Gral::getVars(1, "pde_nota_credito_txt_numero_punto_venta"));
	$pde_nota_credito->setNumeroNotaCredito(Gral::getVars(1, "pde_nota_credito_txt_numero_nota_credito"));
	$pde_nota_credito->setNumeroNotaCreditoCompleto(Gral::getVars(1, "pde_nota_credito_txt_numero_nota_credito_completo"));
	$pde_nota_credito->setCae(Gral::getVars(1, "pde_nota_credito_txt_cae"));
	$pde_nota_credito->setNumeroDespacho(Gral::getVars(1, "pde_nota_credito_txt_numero_despacho"));
	$pde_nota_credito->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "pde_nota_credito_txt_fecha_emision")));
	$pde_nota_credito->setFechaVencimiento(Gral::getFechaToDb(Gral::getVars(1, "pde_nota_credito_txt_fecha_vencimiento")));
	$pde_nota_credito->setPersonaDescripcion(Gral::getVars(1, "pde_nota_credito_txt_persona_descripcion"));
	$pde_nota_credito->setRazonSocial(Gral::getVars(1, "pde_nota_credito_txt_razon_social"));
	$pde_nota_credito->setDomicilioLegal(Gral::getVars(1, "pde_nota_credito_txt_domicilio_legal"));
	$pde_nota_credito->setCuit(Gral::getVars(1, "pde_nota_credito_txt_cuit"));
	$pde_nota_credito->setCodigo(Gral::getVars(1, "pde_nota_credito_txt_codigo"));
	$pde_nota_credito->setAnio(Gral::getVars(1, "pde_nota_credito_txt_anio", 0));
	$pde_nota_credito->setGralMesId(Gral::getVars(1, "pde_nota_credito_cmb_gral_mes_id", null));
	$pde_nota_credito->setCntbDiarioAsientoId(Gral::getVars(1, "pde_nota_credito_cmb_cntb_diario_asiento_id", null));
	$pde_nota_credito->setObservacion(Gral::getVars(1, "pde_nota_credito_txa_observacion"));
	$pde_nota_credito->setNotaInterna(Gral::getVars(1, "pde_nota_credito_txa_nota_interna"));
	$pde_nota_credito->setOrden(Gral::getVars(1, "pde_nota_credito_txt_orden", 0));
	$pde_nota_credito->setEstado(Gral::getVars(1, "pde_nota_credito_cmb_estado", 0));
	$pde_nota_credito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_txt_creado")));
	$pde_nota_credito->setCreadoPor(Gral::getVars(1, "pde_nota_credito__creado_por", 0));
	$pde_nota_credito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_txt_modificado")));
	$pde_nota_credito->setModificadoPor(Gral::getVars(1, "pde_nota_credito__modificado_por", 0));

	$pde_nota_credito_estado = new PdeNotaCredito();
	if(trim($hdn_id) != ''){
		$pde_nota_credito_estado->setId($hdn_id);
		$pde_nota_credito->setEstado($pde_nota_credito_estado->getEstado());
				
	}else{
		$pde_nota_credito->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_nota_credito->control();
			if(!$error->getExisteError()){
				$pde_nota_credito->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_nota_credito_alta.php?cs=1&id='.$pde_nota_credito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_nota_credito->control();
			if(!$error->getExisteError()){
				$pde_nota_credito->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_nota_credito_alta.php?cs=1');
				$pde_nota_credito = new PdeNotaCredito();
			}
		break;
	}
	Gral::setSes('PdeNotaCredito_ULTIMO_INSERTADO', $pde_nota_credito->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_nota_credito_id = Gral::getVars(2, $prefijo.'cmb_pde_nota_credito_id', 0);
	if($cmb_pde_nota_credito_id != 0){
		$pde_nota_credito = PdeNotaCredito::getOxId($cmb_pde_nota_credito_id);
	}else{
	
	$pde_nota_credito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_nota_credito->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_nota_credito->setPdeTipoNotaCreditoId(Gral::getVars(2, "pde_tipo_nota_credito_id", 'null'));
	$pde_nota_credito->setPdeTipoOrigenNotaCreditoId(Gral::getVars(2, "pde_tipo_origen_nota_credito_id", 'null'));
	$pde_nota_credito->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
	$pde_nota_credito->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
	$pde_nota_credito->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$pde_nota_credito->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
	$pde_nota_credito->setPdeNotaCreditoTipoEstadoId(Gral::getVars(2, "pde_nota_credito_tipo_estado_id", 'null'));
	$pde_nota_credito->setGralFpFormaPagoId(Gral::getVars(2, "gral_fp_forma_pago_id", 'null'));
	$pde_nota_credito->setGralActividadId(Gral::getVars(2, "gral_actividad_id", 'null'));
	$pde_nota_credito->setGralEscenarioId(Gral::getVars(2, "gral_escenario_id", 'null'));
	$pde_nota_credito->setNumeroPuntoVenta(Gral::getVars(2, "numero_punto_venta", ''));
	$pde_nota_credito->setNumeroNotaCredito(Gral::getVars(2, "numero_nota_credito", ''));
	$pde_nota_credito->setNumeroNotaCreditoCompleto(Gral::getVars(2, "numero_nota_credito_completo", ''));
	$pde_nota_credito->setCae(Gral::getVars(2, "cae", ''));
	$pde_nota_credito->setNumeroDespacho(Gral::getVars(2, "numero_despacho", ''));
	$pde_nota_credito->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
	$pde_nota_credito->setFechaVencimiento(Gral::getVars(2, "fecha_vencimiento", date('Y-m-d')));
	$pde_nota_credito->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
	$pde_nota_credito->setRazonSocial(Gral::getVars(2, "razon_social", ''));
	$pde_nota_credito->setDomicilioLegal(Gral::getVars(2, "domicilio_legal", ''));
	$pde_nota_credito->setCuit(Gral::getVars(2, "cuit", ''));
	$pde_nota_credito->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_nota_credito->setAnio(Gral::getVars(2, "anio", 0));
	$pde_nota_credito->setGralMesId(Gral::getVars(2, "gral_mes_id", 'null'));
	$pde_nota_credito->setCntbDiarioAsientoId(Gral::getVars(2, "cntb_diario_asiento_id", 'null'));
	$pde_nota_credito->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_nota_credito->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pde_nota_credito->setOrden(Gral::getVars(2, "orden", 0));
	$pde_nota_credito->setEstado(Gral::getVars(2, "estado", 0));
	$pde_nota_credito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_nota_credito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_nota_credito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_nota_credito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_nota_credito->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_nota_credito/pde_nota_credito_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_nota_credito' width='90%'>
        
				<tr>
				  <td  id="label_pde_nota_credito_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_descripcion' value='<?php Gral::_echoTxt($pde_nota_credito->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_nota_credito->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_nota_credito->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_pde_tipo_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_pde_tipo_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_pde_tipo_nota_credito_id', Gral::getCmbFiltro(PdeTipoNotaCredito::getPdeTipoNotaCreditosCmb(), '...'), $pde_nota_credito->getPdeTipoNotaCreditoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_PDE_TIPO_NOTA_CREDITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_pde_tipo_nota_credito_id" clase_id="pde_tipo_nota_credito" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_nota_credito_id" <?php echo ($pde_nota_credito->getPdeTipoNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_pde_tipo_nota_credito_id" clase_id="pde_tipo_nota_credito" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_pde_tipo_nota_credito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_pde_tipo_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_pde_tipo_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_pde_tipo_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_pde_tipo_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_pde_tipo_origen_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_origen_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoOrigenNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_pde_tipo_origen_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_origen_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_pde_tipo_origen_nota_credito_id', Gral::getCmbFiltro(PdeTipoOrigenNotaCredito::getPdeTipoOrigenNotaCreditosCmb(), '...'), $pde_nota_credito->getPdeTipoOrigenNotaCreditoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_PDE_TIPO_ORIGEN_NOTA_CREDITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_pde_tipo_origen_nota_credito_id" clase_id="pde_tipo_origen_nota_credito" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_origen_nota_credito_id" <?php echo ($pde_nota_credito->getPdeTipoOrigenNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_pde_tipo_origen_nota_credito_id" clase_id="pde_tipo_origen_nota_credito" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_pde_tipo_origen_nota_credito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_pde_tipo_origen_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_pde_tipo_origen_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_pde_tipo_origen_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_pde_tipo_origen_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_origen_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_condicion_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralCondicionIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), $pde_nota_credito->getGralCondicionIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($pde_nota_credito->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_condicion_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_gral_tipo_personeria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_personeria_id' ?>" >
				  
                                        <?php Lang::_lang('GralTipoPersoneria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_gral_tipo_personeria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), $pde_nota_credito->getGralTipoPersoneriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($pde_nota_credito->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_tipo_personeria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_gral_tipo_personeria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_gral_tipo_personeria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_gral_tipo_personeria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_gral_tipo_personeria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $pde_nota_credito->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($pde_nota_credito->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_pde_centro_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_pde_centro_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_nota_credito->getPdeCentroPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pde_nota_credito->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_pde_centro_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_pde_nota_credito_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_credito_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdeNotaCreditoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_pde_nota_credito_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_nota_credito_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_pde_nota_credito_tipo_estado_id', Gral::getCmbFiltro(PdeNotaCreditoTipoEstado::getPdeNotaCreditoTipoEstadosCmb(), '...'), $pde_nota_credito->getPdeNotaCreditoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_PDE_NOTA_CREDITO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_pde_nota_credito_tipo_estado_id" clase_id="pde_nota_credito_tipo_estado" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_credito_tipo_estado_id" <?php echo ($pde_nota_credito->getPdeNotaCreditoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_pde_nota_credito_tipo_estado_id" clase_id="pde_nota_credito_tipo_estado" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_pde_nota_credito_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_pde_nota_credito_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_pde_nota_credito_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_pde_nota_credito_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_pde_nota_credito_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_credito_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >
				  
                                        <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $pde_nota_credito->getGralFpFormaPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($pde_nota_credito->getGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_fp_forma_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_gral_actividad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_actividad_id' ?>" >
				  
                                        <?php Lang::_lang('GralActividad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_gral_actividad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_actividad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $pde_nota_credito->getGralActividadId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_ACTIVIDAD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_actividad_id" clase_id="gral_actividad" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_actividad_id" <?php echo ($pde_nota_credito->getGralActividadId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_actividad_id" clase_id="gral_actividad" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_actividad_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_gral_actividad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_gral_actividad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_gral_actividad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_gral_actividad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_actividad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_gral_escenario_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_escenario_id' ?>" >
				  
                                        <?php Lang::_lang('GralEscenario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_gral_escenario_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_escenario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(), '...'), $pde_nota_credito->getGralEscenarioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_ESCENARIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_escenario_id" clase_id="gral_escenario" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_escenario_id" <?php echo ($pde_nota_credito->getGralEscenarioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_escenario_id" clase_id="gral_escenario" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_escenario_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_gral_escenario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_gral_escenario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_gral_escenario_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_gral_escenario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_escenario_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_numero_punto_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_punto_venta' ?>" >
				  
                                        <?php Lang::_lang('Numero de Pto Vta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_numero_punto_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_punto_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_numero_punto_venta' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_numero_punto_venta' value='<?php Gral::_echoTxt($pde_nota_credito->getNumeroPuntoVenta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_numero_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_numero_punto_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_numero_punto_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_numero_punto_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_punto_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_numero_nota_credito" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_nota_credito' ?>" >
				  
                                        <?php Lang::_lang('Numero de Nota de Credito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_numero_nota_credito" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_nota_credito')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_numero_nota_credito' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_numero_nota_credito' value='<?php Gral::_echoTxt($pde_nota_credito->getNumeroNotaCredito(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_numero_nota_credito', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_numero_nota_credito', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_numero_nota_credito', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_numero_nota_credito', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_nota_credito')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_numero_nota_credito_completo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_nota_credito_completo' ?>" >
				  
                                        <?php Lang::_lang('Numero de Nota de Credito Completo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_numero_nota_credito_completo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_nota_credito_completo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_numero_nota_credito_completo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_numero_nota_credito_completo' value='<?php Gral::_echoTxt($pde_nota_credito->getNumeroNotaCreditoCompleto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_numero_nota_credito_completo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_numero_nota_credito_completo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_numero_nota_credito_completo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_numero_nota_credito_completo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_nota_credito_completo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cae' ?>" >
				  
                                        <?php Lang::_lang('Cae', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_cae" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_cae' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_cae' value='<?php Gral::_echoTxt($pde_nota_credito->getCae(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_cae', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_cae', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_cae', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_cae', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cae')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_numero_despacho" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_despacho' ?>" >
				  
                                        <?php Lang::_lang('Numero de Despacho', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_numero_despacho" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_despacho')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_numero_despacho' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_numero_despacho' value='<?php Gral::_echoTxt($pde_nota_credito->getNumeroDespacho(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_numero_despacho', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_numero_despacho', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_numero_despacho', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_numero_despacho', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_despacho')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_emision' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Emision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_nota_credito_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_nota_credito->getFechaEmision()), true) ?>' size='40' />
					<input type='button' id='cal_pde_nota_credito_txt_fecha_emision' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_nota_credito_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_pde_nota_credito_txt_fecha_emision'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_fecha_emision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_fecha_emision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_fecha_vencimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_vencimiento' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Vencimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_fecha_vencimiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_fecha_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_nota_credito_txt_fecha_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_nota_credito->getFechaVencimiento()), true) ?>' size='40' />
					<input type='button' id='cal_pde_nota_credito_txt_fecha_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_nota_credito_txt_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_pde_nota_credito_txt_fecha_vencimiento'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_fecha_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_fecha_vencimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_fecha_vencimiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_fecha_vencimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_vencimiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_razon_social" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_razon_social' ?>" >
				  
                                        <?php Lang::_lang('Razon Social', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_razon_social" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('razon_social')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_razon_social' value='<?php Gral::_echoTxt($pde_nota_credito->getRazonSocial(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_razon_social', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_razon_social', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_razon_social', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_razon_social', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('razon_social')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_domicilio_legal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio_legal' ?>" >
				  
                                        <?php Lang::_lang('Domicilio Legal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_domicilio_legal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio_legal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_domicilio_legal' value='<?php Gral::_echoTxt($pde_nota_credito->getDomicilioLegal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_domicilio_legal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_domicilio_legal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_domicilio_legal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_domicilio_legal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_legal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuit' ?>" >
				  
                                        <?php Lang::_lang('CUIT', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_cuit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_cuit' value='<?php Gral::_echoTxt($pde_nota_credito->getCuit(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_cuit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_cuit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_cuit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_cuit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_codigo' value='<?php Gral::_echoTxt($pde_nota_credito->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txt_anio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_anio' ?>" >
				  
                                        <?php Lang::_lang('Anio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txt_anio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('anio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_txt_anio' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_anio' value='<?php Gral::_echoTxt($pde_nota_credito->getAnio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_anio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_anio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_anio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_anio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_gral_mes_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_mes_id' ?>" >
				  
                                        <?php Lang::_lang('GralMes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_gral_mes_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_mes_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(), '...'), $pde_nota_credito->getGralMesId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_MES')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_mes_id" clase_id="gral_mes" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_mes_id" <?php echo ($pde_nota_credito->getGralMesId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_mes_id" clase_id="gral_mes" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_mes_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_gral_mes_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_gral_mes_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_mes_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_cmb_cntb_diario_asiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_diario_asiento_id' ?>" >
				  
                                        <?php Lang::_lang('CntbDiarioAsiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_cmb_cntb_diario_asiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_credito_cmb_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), $pde_nota_credito->getCntbDiarioAsientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_CMB_EDIT_CNTB_DIARIO_ASIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_diario_asiento_id" <?php echo ($pde_nota_credito->getCntbDiarioAsientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_cntb_diario_asiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_nota_credito_txa_observacion' rows='10' cols='50' id='pde_nota_credito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_nota_credito->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_nota_credito_txa_nota_interna' rows='10' cols='50' id='pde_nota_credito_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_nota_credito->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_nota_credito_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_nota_credito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_nota_credito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_nota_credito'/>
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

