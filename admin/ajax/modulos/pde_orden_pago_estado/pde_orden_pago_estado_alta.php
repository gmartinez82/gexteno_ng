<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial PDE_ORDEN_PAGO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_orden_pago_estado';
$db_nombre_pagina = 'pde_orden_pago_estado_alta';

$pde_orden_pago_estado = new PdeOrdenPagoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_orden_pago_estado = new PdeOrdenPagoEstado();
	if(trim($hdn_id) != '') $pde_orden_pago_estado->setId($hdn_id, false);
	$pde_orden_pago_estado->setDescripcion(Gral::getVars(1, "pde_orden_pago_estado_txt_descripcion"));
	$pde_orden_pago_estado->setPdeOrdenPagoId(Gral::getVars(1, "pde_orden_pago_estado_cmb_pde_orden_pago_id", null));
	$pde_orden_pago_estado->setPdeOrdenPagoTipoEstadoId(Gral::getVars(1, "pde_orden_pago_estado_cmb_pde_orden_pago_tipo_estado_id", null));
	$pde_orden_pago_estado->setInicial(Gral::getVars(1, "pde_orden_pago_estado_cmb_inicial", 0));
	$pde_orden_pago_estado->setActual(Gral::getVars(1, "pde_orden_pago_estado_cmb_actual", 0));
	$pde_orden_pago_estado->setPrvPreventistaId(Gral::getVars(1, "pde_orden_pago_estado_cmb_prv_preventista_id", null));
	$pde_orden_pago_estado->setGralEmpresaTransportadoraId(Gral::getVars(1, "pde_orden_pago_estado_cmb_gral_empresa_transportadora_id", null));
	$pde_orden_pago_estado->setGuia(Gral::getVars(1, "pde_orden_pago_estado_txt_guia"));
	$pde_orden_pago_estado->setCodigo(Gral::getVars(1, "pde_orden_pago_estado_txt_codigo"));
	$pde_orden_pago_estado->setNotaInterna(Gral::getVars(1, "pde_orden_pago_estado_txa_nota_interna"));
	$pde_orden_pago_estado->setNotaPublica(Gral::getVars(1, "pde_orden_pago_estado_txa_nota_publica"));
	$pde_orden_pago_estado->setObservacion(Gral::getVars(1, "pde_orden_pago_estado_txa_observacion"));
	$pde_orden_pago_estado->setOrden(Gral::getVars(1, "pde_orden_pago_estado_txt_orden", 0));
	$pde_orden_pago_estado->setEstado(Gral::getVars(1, "pde_orden_pago_estado_cmb_estado", 0));
	$pde_orden_pago_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_orden_pago_estado_txt_creado")));
	$pde_orden_pago_estado->setCreadoPor(Gral::getVars(1, "pde_orden_pago_estado__creado_por", 0));
	$pde_orden_pago_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_orden_pago_estado_txt_modificado")));
	$pde_orden_pago_estado->setModificadoPor(Gral::getVars(1, "pde_orden_pago_estado__modificado_por", 0));

	$pde_orden_pago_estado_estado = new PdeOrdenPagoEstado();
	if(trim($hdn_id) != ''){
		$pde_orden_pago_estado_estado->setId($hdn_id);
		$pde_orden_pago_estado->setEstado($pde_orden_pago_estado_estado->getEstado());
				
	}else{
		$pde_orden_pago_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_orden_pago_estado->control();
			if(!$error->getExisteError()){
				$pde_orden_pago_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_orden_pago_estado_alta.php?cs=1&id='.$pde_orden_pago_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_orden_pago_estado->control();
			if(!$error->getExisteError()){
				$pde_orden_pago_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_orden_pago_estado_alta.php?cs=1');
				$pde_orden_pago_estado = new PdeOrdenPagoEstado();
			}
		break;
	}
	Gral::setSes('PdeOrdenPagoEstado_ULTIMO_INSERTADO', $pde_orden_pago_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_orden_pago_estado_id = Gral::getVars(2, $prefijo.'cmb_pde_orden_pago_estado_id', 0);
	if($cmb_pde_orden_pago_estado_id != 0){
		$pde_orden_pago_estado = PdeOrdenPagoEstado::getOxId($cmb_pde_orden_pago_estado_id);
	}else{
	
	$pde_orden_pago_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_orden_pago_estado->setPdeOrdenPagoId(Gral::getVars(2, "pde_orden_pago_id", 'null'));
	$pde_orden_pago_estado->setPdeOrdenPagoTipoEstadoId(Gral::getVars(2, "pde_orden_pago_tipo_estado_id", 'null'));
	$pde_orden_pago_estado->setInicial(Gral::getVars(2, "inicial", 0));
	$pde_orden_pago_estado->setActual(Gral::getVars(2, "actual", 0));
	$pde_orden_pago_estado->setPrvPreventistaId(Gral::getVars(2, "prv_preventista_id", 'null'));
	$pde_orden_pago_estado->setGralEmpresaTransportadoraId(Gral::getVars(2, "gral_empresa_transportadora_id", 'null'));
	$pde_orden_pago_estado->setGuia(Gral::getVars(2, "guia", ''));
	$pde_orden_pago_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_orden_pago_estado->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pde_orden_pago_estado->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$pde_orden_pago_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_orden_pago_estado->setOrden(Gral::getVars(2, "orden", 0));
	$pde_orden_pago_estado->setEstado(Gral::getVars(2, "estado", 0));
	$pde_orden_pago_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_orden_pago_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_orden_pago_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_orden_pago_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_orden_pago_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_orden_pago_estado/pde_orden_pago_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_orden_pago_estado' width='90%'>
        
				<tr>
				  <td  id="label_pde_orden_pago_estado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_orden_pago_estado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_orden_pago_estado_txt_descripcion' value='<?php Gral::_echoTxt($pde_orden_pago_estado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_cmb_pde_orden_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOrdenPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_cmb_pde_orden_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_orden_pago_estado_cmb_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), $pde_orden_pago_estado->getPdeOrdenPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ESTADO_ALTA_CMB_EDIT_PDE_ORDEN_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_orden_pago_estado_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='pde_orden_pago_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_id" <?php echo ($pde_orden_pago_estado->getPdeOrdenPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_orden_pago_estado_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='pde_orden_pago_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_orden_pago_estado_cmb_pde_orden_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_cmb_pde_orden_pago_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOrdenPagoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_cmb_pde_orden_pago_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_orden_pago_estado_cmb_pde_orden_pago_tipo_estado_id', Gral::getCmbFiltro(PdeOrdenPagoTipoEstado::getPdeOrdenPagoTipoEstadosCmb(), '...'), $pde_orden_pago_estado->getPdeOrdenPagoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ESTADO_ALTA_CMB_EDIT_PDE_ORDEN_PAGO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_orden_pago_estado_cmb_pde_orden_pago_tipo_estado_id" clase_id="pde_orden_pago_tipo_estado" prefijo='pde_orden_pago_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_tipo_estado_id" <?php echo ($pde_orden_pago_estado->getPdeOrdenPagoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_orden_pago_estado_cmb_pde_orden_pago_tipo_estado_id" clase_id="pde_orden_pago_tipo_estado" prefijo='pde_orden_pago_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_orden_pago_estado_cmb_pde_orden_pago_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_pde_orden_pago_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_pde_orden_pago_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_pde_orden_pago_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_pde_orden_pago_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_cmb_prv_preventista_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_preventista_id' ?>" >
				  
                                        <?php Lang::_lang('PrvPreventista', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_cmb_prv_preventista_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_preventista_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_orden_pago_estado_cmb_prv_preventista_id', Gral::getCmbFiltro(PrvPreventista::getPrvPreventistasCmb(), '...'), $pde_orden_pago_estado->getPrvPreventistaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ESTADO_ALTA_CMB_EDIT_PRV_PREVENTISTA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_orden_pago_estado_cmb_prv_preventista_id" clase_id="prv_preventista" prefijo='pde_orden_pago_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_preventista_id" <?php echo ($pde_orden_pago_estado->getPrvPreventistaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_orden_pago_estado_cmb_prv_preventista_id" clase_id="prv_preventista" prefijo='pde_orden_pago_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_orden_pago_estado_cmb_prv_preventista_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_prv_preventista_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_prv_preventista_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_prv_preventista_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_prv_preventista_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_preventista_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_cmb_gral_empresa_transportadora_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_transportadora_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresaTransportadora', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_cmb_gral_empresa_transportadora_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_transportadora_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_orden_pago_estado_cmb_gral_empresa_transportadora_id', Gral::getCmbFiltro(GralEmpresaTransportadora::getGralEmpresaTransportadorasCmb(), '...'), $pde_orden_pago_estado->getGralEmpresaTransportadoraId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ESTADO_ALTA_CMB_EDIT_GRAL_EMPRESA_TRANSPORTADORA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_orden_pago_estado_cmb_gral_empresa_transportadora_id" clase_id="gral_empresa_transportadora" prefijo='pde_orden_pago_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_transportadora_id" <?php echo ($pde_orden_pago_estado->getGralEmpresaTransportadoraId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_orden_pago_estado_cmb_gral_empresa_transportadora_id" clase_id="gral_empresa_transportadora" prefijo='pde_orden_pago_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_orden_pago_estado_cmb_gral_empresa_transportadora_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_gral_empresa_transportadora_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_gral_empresa_transportadora_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_gral_empresa_transportadora_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_gral_empresa_transportadora_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_transportadora_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_txt_guia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_guia' ?>" >
				  
                                        <?php Lang::_lang('Guia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_txt_guia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('guia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_orden_pago_estado_txt_guia' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_orden_pago_estado_txt_guia' value='<?php Gral::_echoTxt($pde_orden_pago_estado->getGuia(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_guia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_guia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_guia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_guia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('guia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_orden_pago_estado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_orden_pago_estado_txt_codigo' value='<?php Gral::_echoTxt($pde_orden_pago_estado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_orden_pago_estado_txa_nota_interna' rows='10' cols='50' id='pde_orden_pago_estado_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_orden_pago_estado->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_txa_nota_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >
				  
                                        <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_txa_nota_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_orden_pago_estado_txa_nota_publica' rows='10' cols='50' id='pde_orden_pago_estado_txa_nota_publica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_orden_pago_estado->getNotaPublica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_orden_pago_estado_txa_observacion' rows='10' cols='50' id='pde_orden_pago_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_orden_pago_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_orden_pago_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_orden_pago_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_orden_pago_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_orden_pago_estado'/>
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

