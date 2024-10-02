<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA')){
    echo "No tiene asignada la credencial PRD_ORDEN_TRABAJO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_orden_trabajo';
$db_nombre_pagina = 'prd_orden_trabajo_alta';

$prd_orden_trabajo = new PrdOrdenTrabajo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_orden_trabajo = new PrdOrdenTrabajo();
	if(trim($hdn_id) != '') $prd_orden_trabajo->setId($hdn_id, false);
	$prd_orden_trabajo->setDescripcion(Gral::getVars(1, "prd_orden_trabajo_txt_descripcion"));
	$prd_orden_trabajo->setVtaPresupuestoId(Gral::getVars(1, "prd_orden_trabajo_cmb_vta_presupuesto_id", null));
	$prd_orden_trabajo->setVtaPresupuestoInsInsumoId(Gral::getVars(1, "prd_orden_trabajo_cmb_vta_presupuesto_ins_insumo_id", null));
	$prd_orden_trabajo->setCliClienteId(Gral::getVars(1, "prd_orden_trabajo_cmb_cli_cliente_id", null));
	$prd_orden_trabajo->setPrdTipoOrigenId(Gral::getVars(1, "prd_orden_trabajo_cmb_prd_tipo_origen_id", null));
	$prd_orden_trabajo->setPrdProcesoProductivoId(Gral::getVars(1, "prd_orden_trabajo_cmb_prd_proceso_productivo_id", null));
	$prd_orden_trabajo->setPrdPrioridadId(Gral::getVars(1, "prd_orden_trabajo_cmb_prd_prioridad_id", null));
	$prd_orden_trabajo->setInsInsumoId(Gral::getVars(1, "prd_orden_trabajo_cmb_ins_insumo_id", null));
	$prd_orden_trabajo->setCodigo(Gral::getVars(1, "prd_orden_trabajo_txt_codigo"));
	$prd_orden_trabajo->setCantidad(Gral::getVars(1, "prd_orden_trabajo_txt_cantidad", 0));
	$prd_orden_trabajo->setFecha(Gral::getFechaToDb(Gral::getVars(1, "prd_orden_trabajo_txt_fecha")));
	$prd_orden_trabajo->setObservacion(Gral::getVars(1, "prd_orden_trabajo_txa_observacion"));
	$prd_orden_trabajo->setOrden(Gral::getVars(1, "prd_orden_trabajo_txt_orden", 0));
	$prd_orden_trabajo->setEstado(Gral::getVars(1, "prd_orden_trabajo_cmb_estado", 0));
	$prd_orden_trabajo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_orden_trabajo_txt_creado")));
	$prd_orden_trabajo->setCreadoPor(Gral::getVars(1, "prd_orden_trabajo__creado_por", 0));
	$prd_orden_trabajo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_orden_trabajo_txt_modificado")));
	$prd_orden_trabajo->setModificadoPor(Gral::getVars(1, "prd_orden_trabajo__modificado_por", 0));

	$prd_orden_trabajo_estado = new PrdOrdenTrabajo();
	if(trim($hdn_id) != ''){
		$prd_orden_trabajo_estado->setId($hdn_id);
		$prd_orden_trabajo->setEstado($prd_orden_trabajo_estado->getEstado());
				
	}else{
		$prd_orden_trabajo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_orden_trabajo->control();
			if(!$error->getExisteError()){
				$prd_orden_trabajo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_orden_trabajo_alta.php?cs=1&id='.$prd_orden_trabajo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_orden_trabajo->control();
			if(!$error->getExisteError()){
				$prd_orden_trabajo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_orden_trabajo_alta.php?cs=1');
				$prd_orden_trabajo = new PrdOrdenTrabajo();
			}
		break;
	}
	Gral::setSes('PrdOrdenTrabajo_ULTIMO_INSERTADO', $prd_orden_trabajo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_orden_trabajo_id = Gral::getVars(2, $prefijo.'cmb_prd_orden_trabajo_id', 0);
	if($cmb_prd_orden_trabajo_id != 0){
		$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($cmb_prd_orden_trabajo_id);
	}else{
	
	$prd_orden_trabajo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_orden_trabajo->setVtaPresupuestoId(Gral::getVars(2, "vta_presupuesto_id", 'null'));
	$prd_orden_trabajo->setVtaPresupuestoInsInsumoId(Gral::getVars(2, "vta_presupuesto_ins_insumo_id", 'null'));
	$prd_orden_trabajo->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$prd_orden_trabajo->setPrdTipoOrigenId(Gral::getVars(2, "prd_tipo_origen_id", 'null'));
	$prd_orden_trabajo->setPrdProcesoProductivoId(Gral::getVars(2, "prd_proceso_productivo_id", 'null'));
	$prd_orden_trabajo->setPrdPrioridadId(Gral::getVars(2, "prd_prioridad_id", 'null'));
	$prd_orden_trabajo->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$prd_orden_trabajo->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_orden_trabajo->setCantidad(Gral::getVars(2, "cantidad", 0));
	$prd_orden_trabajo->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$prd_orden_trabajo->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_orden_trabajo->setOrden(Gral::getVars(2, "orden", 0));
	$prd_orden_trabajo->setEstado(Gral::getVars(2, "estado", 0));
	$prd_orden_trabajo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_orden_trabajo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_orden_trabajo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_orden_trabajo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_orden_trabajo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_orden_trabajo_gestion/prd_orden_trabajo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_orden_trabajo' width='90%'>
        
				<tr>
				  <td  id="label_prd_orden_trabajo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_orden_trabajo_txt_descripcion' value='<?php Gral::_echoTxt($prd_orden_trabajo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_cmb_vta_presupuesto_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuesto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_cmb_vta_presupuesto_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_cmb_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), $prd_orden_trabajo->getVtaPresupuestoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_VTA_PRESUPUESTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='prd_orden_trabajo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_id" <?php echo ($prd_orden_trabajo->getVtaPresupuestoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='prd_orden_trabajo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_cmb_vta_presupuesto_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuestoInsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_cmb_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), '...'), $prd_orden_trabajo->getVtaPresupuestoInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='prd_orden_trabajo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_ins_insumo_id" <?php echo ($prd_orden_trabajo->getVtaPresupuestoInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='prd_orden_trabajo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_cmb_vta_presupuesto_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $prd_orden_trabajo->getCliClienteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='prd_orden_trabajo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($prd_orden_trabajo->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='prd_orden_trabajo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_cmb_cli_cliente_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_cmb_prd_tipo_origen_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_tipo_origen_id' ?>" >
				  
                                        <?php Lang::_lang('PrdTipoOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_cmb_prd_tipo_origen_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_tipo_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_cmb_prd_tipo_origen_id', Gral::getCmbFiltro(PrdTipoOrigen::getPrdTipoOrigensCmb(), '...'), $prd_orden_trabajo->getPrdTipoOrigenId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_PRD_TIPO_ORIGEN')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_cmb_prd_tipo_origen_id" clase_id="prd_tipo_origen" prefijo='prd_orden_trabajo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_tipo_origen_id" <?php echo ($prd_orden_trabajo->getPrdTipoOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_cmb_prd_tipo_origen_id" clase_id="prd_tipo_origen" prefijo='prd_orden_trabajo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_cmb_prd_tipo_origen_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_prd_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_prd_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_prd_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_prd_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_tipo_origen_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_cmb_prd_proceso_productivo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_proceso_productivo_id' ?>" >
				  
                                        <?php Lang::_lang('PrdProcesoProductivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_cmb_prd_proceso_productivo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_cmb_prd_proceso_productivo_id', Gral::getCmbFiltro(PrdProcesoProductivo::getPrdProcesoProductivosCmb(), '...'), $prd_orden_trabajo->getPrdProcesoProductivoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_PRD_PROCESO_PRODUCTIVO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='prd_orden_trabajo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_proceso_productivo_id" <?php echo ($prd_orden_trabajo->getPrdProcesoProductivoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='prd_orden_trabajo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_cmb_prd_proceso_productivo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_cmb_prd_prioridad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_prioridad_id' ?>" >
				  
                                        <?php Lang::_lang('PrdPrioridad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_cmb_prd_prioridad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_prioridad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_cmb_prd_prioridad_id', Gral::getCmbFiltro(PrdPrioridad::getPrdPrioridadsCmb(), '...'), $prd_orden_trabajo->getPrdPrioridadId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_PRD_PRIORIDAD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_cmb_prd_prioridad_id" clase_id="prd_prioridad" prefijo='prd_orden_trabajo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_prioridad_id" <?php echo ($prd_orden_trabajo->getPrdPrioridadId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_cmb_prd_prioridad_id" clase_id="prd_prioridad" prefijo='prd_orden_trabajo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_cmb_prd_prioridad_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_prd_prioridad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_prd_prioridad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_prd_prioridad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_prd_prioridad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_prioridad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_orden_trabajo_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $prd_orden_trabajo->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_orden_trabajo_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='prd_orden_trabajo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($prd_orden_trabajo->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_orden_trabajo_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='prd_orden_trabajo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_orden_trabajo_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_orden_trabajo_txt_codigo' value='<?php Gral::_echoTxt($prd_orden_trabajo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prd_orden_trabajo_txt_cantidad' value='<?php Gral::_echoTxt($prd_orden_trabajo->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_orden_trabajo_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_orden_trabajo_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($prd_orden_trabajo->getFecha()), true) ?>' size='20' />
					<input type='button' id='cal_prd_orden_trabajo_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'prd_orden_trabajo_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_prd_orden_trabajo_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_orden_trabajo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_orden_trabajo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_orden_trabajo_txa_observacion' rows='10' cols='50' id='prd_orden_trabajo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_orden_trabajo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_orden_trabajo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_orden_trabajo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_orden_trabajo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_orden_trabajo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_orden_trabajo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_orden_trabajo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_orden_trabajo'/>
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

