<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA')){
    echo "No tiene asignada la credencial PDE_PEDIDO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_pedido';
$db_nombre_pagina = 'pde_pedido_alta';

$pde_pedido = new PdePedido();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_pedido = new PdePedido();
	if(trim($hdn_id) != '') $pde_pedido->setId($hdn_id, false);
	$pde_pedido->setDescripcion(Gral::getVars(1, "pde_pedido_txt_descripcion"));
	$pde_pedido->setPdeCentroPedidoId(Gral::getVars(1, "pde_pedido_cmb_pde_centro_pedido_id", null));
	$pde_pedido->setInsInsumoId(Gral::getVars(1, "pde_pedido_cmb_ins_insumo_id", null));
	$pde_pedido->setPdeUrgenciaId(Gral::getVars(1, "pde_pedido_cmb_pde_urgencia_id", null));
	$pde_pedido->setPdeTipoEstadoId(Gral::getVars(1, "pde_pedido_cmb_pde_tipo_estado_id", null));
	$pde_pedido->setCantidad(Gral::getVars(1, "pde_pedido_txt_cantidad", 0));
	$pde_pedido->setVencimiento(Gral::getFechaToDb(Gral::getVars(1, "pde_pedido_txt_vencimiento")));
	$pde_pedido->setCodigo(Gral::getVars(1, "pde_pedido_txt_codigo"));
	$pde_pedido->setComentarioProveedor(Gral::getVars(1, "pde_pedido_txa_comentario_proveedor"));
	$pde_pedido->setNotaPublica(Gral::getVars(1, "pde_pedido_txa_nota_publica"));
	$pde_pedido->setNotaInterna(Gral::getVars(1, "pde_pedido_txa_nota_interna"));
	$pde_pedido->setObservacion(Gral::getVars(1, "pde_pedido_txa_observacion"));
	$pde_pedido->setOrden(Gral::getVars(1, "pde_pedido_txt_orden", 0));
	$pde_pedido->setEstado(Gral::getVars(1, "pde_pedido__estado", 0));
	$pde_pedido->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_pedido_txt_creado")));
	$pde_pedido->setCreadoPor(Gral::getVars(1, "pde_pedido__creado_por", null));
	$pde_pedido->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_pedido_txt_modificado")));
	$pde_pedido->setModificadoPor(Gral::getVars(1, "pde_pedido__modificado_por", null));

	$pde_pedido_estado = new PdePedido();
	if(trim($hdn_id) != ''){
		$pde_pedido_estado->setId($hdn_id);
		$pde_pedido->setEstado($pde_pedido_estado->getEstado());
				
	}else{
		$pde_pedido->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_pedido->control();
			if(!$error->getExisteError()){
				$pde_pedido->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_pedido_alta.php?cs=1&id='.$pde_pedido->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_pedido->control();
			if(!$error->getExisteError()){
				$pde_pedido->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_pedido_alta.php?cs=1');
				$pde_pedido = new PdePedido();
			}
		break;
	}
	Gral::setSes('PdePedido_ULTIMO_INSERTADO', $pde_pedido->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_pedido_id = Gral::getVars(2, $prefijo.'cmb_pde_pedido_id', 0);
	if($cmb_pde_pedido_id != 0){
		$pde_pedido = PdePedido::getOxId($cmb_pde_pedido_id);
	}else{
	
	$pde_pedido->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_pedido->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
	$pde_pedido->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$pde_pedido->setPdeUrgenciaId(Gral::getVars(2, "pde_urgencia_id", 'null'));
	$pde_pedido->setPdeTipoEstadoId(Gral::getVars(2, "pde_tipo_estado_id", 'null'));
	$pde_pedido->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_pedido->setVencimiento(Gral::getVars(2, "vencimiento", date('Y-m-d')));
	$pde_pedido->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_pedido->setComentarioProveedor(Gral::getVars(2, "comentario_proveedor", ''));
	$pde_pedido->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$pde_pedido->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pde_pedido->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_pedido->setOrden(Gral::getVars(2, "orden", 0));
	$pde_pedido->setEstado(Gral::getVars(2, "estado", 0));
	$pde_pedido->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_pedido->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_pedido->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_pedido->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_pedido->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_pedido/pde_pedido_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_pedido' width='90%'>
        
				<tr>
				  <td  id="label_pde_pedido_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_pedido_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_pedido_txt_descripcion' value='<?php Gral::_echoTxt($pde_pedido->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_pedido_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_cmb_pde_centro_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_cmb_pde_centro_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_pedido_cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_pedido->getPdeCentroPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_pedido_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pde_pedido->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_pedido_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_pedido_cmb_pde_centro_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_pedido_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_pedido_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $pde_pedido->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_pedido_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($pde_pedido->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_pedido_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='pde_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_pedido_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_pedido_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_cmb_pde_urgencia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_urgencia_id' ?>" >
				  
                                        <?php Lang::_lang('PdeUrgencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_cmb_pde_urgencia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_urgencia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_pedido_cmb_pde_urgencia_id', Gral::getCmbFiltro(PdeUrgencia::getPdeUrgenciasCmb(), '...'), $pde_pedido->getPdeUrgenciaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA_CMB_EDIT_PDE_URGENCIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_pedido_cmb_pde_urgencia_id" clase_id="pde_urgencia" prefijo='pde_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_urgencia_id" <?php echo ($pde_pedido->getPdeUrgenciaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_pedido_cmb_pde_urgencia_id" clase_id="pde_urgencia" prefijo='pde_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_pedido_cmb_pde_urgencia_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_pedido_alta_pde_urgencia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_pde_urgencia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_pde_urgencia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_pde_urgencia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_urgencia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_cmb_pde_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_cmb_pde_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_pedido_cmb_pde_tipo_estado_id', Gral::getCmbFiltro(PdeTipoEstado::getPdeTipoEstadosCmb(), '...'), $pde_pedido->getPdeTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA_CMB_EDIT_PDE_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_pedido_cmb_pde_tipo_estado_id" clase_id="pde_tipo_estado" prefijo='pde_pedido_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_estado_id" <?php echo ($pde_pedido->getPdeTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_pedido_cmb_pde_tipo_estado_id" clase_id="pde_tipo_estado" prefijo='pde_pedido_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_pedido_cmb_pde_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_pedido_alta_pde_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_pde_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_pde_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_pde_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_pedido_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_pedido_txt_cantidad' value='<?php Gral::_echoTxt($pde_pedido->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_pedido_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_txt_vencimiento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vencimiento' ?>" >
				  
                                        <?php Lang::_lang('Vencimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txt_vencimiento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_pedido_txt_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_pedido_txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_pedido->getVencimiento()), true) ?>' size='40' />
					<input type='button' id='cal_pde_pedido_txt_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_pedido_txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_pde_pedido_txt_vencimiento'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_pedido_alta_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_vencimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_vencimiento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_vencimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vencimiento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_pedido_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_pedido_txt_codigo' value='<?php Gral::_echoTxt($pde_pedido->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_pedido_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_txa_comentario_proveedor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_comentario_proveedor' ?>" >
				  
                                        <?php Lang::_lang('Coment a Proveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txa_comentario_proveedor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('comentario_proveedor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_pedido_txa_comentario_proveedor' rows='10' cols='50' id='pde_pedido_txa_comentario_proveedor' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_pedido->getComentarioProveedor(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_pedido_alta_comentario_proveedor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_comentario_proveedor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_comentario_proveedor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_comentario_proveedor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('comentario_proveedor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_txa_nota_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >
				  
                                        <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txa_nota_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_pedido_txa_nota_publica' rows='10' cols='50' id='pde_pedido_txa_nota_publica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_pedido->getNotaPublica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_pedido_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_pedido_txa_nota_interna' rows='10' cols='50' id='pde_pedido_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_pedido->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_pedido_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_pedido_txa_observacion' rows='10' cols='50' id='pde_pedido_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_pedido->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_pedido_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_pedido->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_pedido_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_pedido'/>
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

