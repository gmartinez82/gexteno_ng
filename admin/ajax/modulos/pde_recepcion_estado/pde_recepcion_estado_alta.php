<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_ALTA')){
    echo "No tiene asignada la credencial PDE_RECEPCION_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recepcion_estado';
$db_nombre_pagina = 'pde_recepcion_estado_alta';

$pde_recepcion_estado = new PdeRecepcionEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recepcion_estado = new PdeRecepcionEstado();
	if(trim($hdn_id) != '') $pde_recepcion_estado->setId($hdn_id, false);
	$pde_recepcion_estado->setPdeRecepcionId(Gral::getVars(1, "pde_recepcion_estado_cmb_pde_recepcion_id", null));
	$pde_recepcion_estado->setPdeRecepcionTipoEstadoId(Gral::getVars(1, "pde_recepcion_estado_cmb_pde_recepcion_tipo_estado_id", null));
	$pde_recepcion_estado->setPdeCentroRecepcionId(Gral::getVars(1, "pde_recepcion_estado_cmb_pde_centro_recepcion_id", null));
	$pde_recepcion_estado->setPanPanolId(Gral::getVars(1, "pde_recepcion_estado_cmb_pan_panol_id", null));
	$pde_recepcion_estado->setCantidad(Gral::getVars(1, "pde_recepcion_estado_txt_cantidad", 0));
	$pde_recepcion_estado->setInicial(Gral::getVars(1, "pde_recepcion_estado_cmb_inicial", 0));
	$pde_recepcion_estado->setActual(Gral::getVars(1, "pde_recepcion_estado_cmb_actual", 0));
	$pde_recepcion_estado->setObservacion(Gral::getVars(1, "pde_recepcion_estado_txa_observacion"));
	$pde_recepcion_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_estado_txt_creado")));
	$pde_recepcion_estado->setCreadoPor(Gral::getVars(1, "pde_recepcion_estado__creado_por", null));
	$pde_recepcion_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_estado_txt_modificado")));
	$pde_recepcion_estado->setModificadoPor(Gral::getVars(1, "pde_recepcion_estado__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $pde_recepcion_estado->control();
			if(!$error->getExisteError()){
				$pde_recepcion_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recepcion_estado_alta.php?cs=1&id='.$pde_recepcion_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recepcion_estado->control();
			if(!$error->getExisteError()){
				$pde_recepcion_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recepcion_estado_alta.php?cs=1');
				$pde_recepcion_estado = new PdeRecepcionEstado();
			}
		break;
	}
	Gral::setSes('PdeRecepcionEstado_ULTIMO_INSERTADO', $pde_recepcion_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recepcion_estado_id = Gral::getVars(2, $prefijo.'cmb_pde_recepcion_estado_id', 0);
	if($cmb_pde_recepcion_estado_id != 0){
		$pde_recepcion_estado = PdeRecepcionEstado::getOxId($cmb_pde_recepcion_estado_id);
	}else{
	
	$pde_recepcion_estado->setPdeRecepcionId(Gral::getVars(2, "pde_recepcion_id", 'null'));
	$pde_recepcion_estado->setPdeRecepcionTipoEstadoId(Gral::getVars(2, "pde_recepcion_tipo_estado_id", 'null'));
	$pde_recepcion_estado->setPdeCentroRecepcionId(Gral::getVars(2, "pde_centro_recepcion_id", 'null'));
	$pde_recepcion_estado->setPanPanolId(Gral::getVars(2, "pan_panol_id", 'null'));
	$pde_recepcion_estado->setCantidad(Gral::getVars(2, "cantidad", 0));
	$pde_recepcion_estado->setInicial(Gral::getVars(2, "inicial", 0));
	$pde_recepcion_estado->setActual(Gral::getVars(2, "actual", 0));
	$pde_recepcion_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recepcion_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recepcion_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recepcion_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recepcion_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recepcion_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recepcion_estado/pde_recepcion_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recepcion_estado' width='90%'>
        
				<tr>
				  <td  id="label_pde_recepcion_estado_cmb_pde_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_cmb_pde_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_estado_cmb_pde_recepcion_id', Gral::getCmbFiltro(PdeRecepcion::getPdeRecepcionsCmb(), '...'), $pde_recepcion_estado->getPdeRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_ALTA_CMB_EDIT_PDE_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_estado_cmb_pde_recepcion_id" clase_id="pde_recepcion" prefijo='pde_recepcion_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recepcion_id" <?php echo ($pde_recepcion_estado->getPdeRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_estado_cmb_pde_recepcion_id" clase_id="pde_recepcion" prefijo='pde_recepcion_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_estado_cmb_pde_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_pde_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_pde_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_pde_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_pde_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_estado_cmb_pde_recepcion_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recepcion_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecepcionTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_cmb_pde_recepcion_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recepcion_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_estado_cmb_pde_recepcion_tipo_estado_id', Gral::getCmbFiltro(PdeRecepcionTipoEstado::getPdeRecepcionTipoEstadosCmb(), '...'), $pde_recepcion_estado->getPdeRecepcionTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_ALTA_CMB_EDIT_PDE_RECEPCION_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_estado_cmb_pde_recepcion_tipo_estado_id" clase_id="pde_recepcion_tipo_estado" prefijo='pde_recepcion_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recepcion_tipo_estado_id" <?php echo ($pde_recepcion_estado->getPdeRecepcionTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_estado_cmb_pde_recepcion_tipo_estado_id" clase_id="pde_recepcion_tipo_estado" prefijo='pde_recepcion_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_estado_cmb_pde_recepcion_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_pde_recepcion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_pde_recepcion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_pde_recepcion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_pde_recepcion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recepcion_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_estado_cmb_pde_centro_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_cmb_pde_centro_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_estado_cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $pde_recepcion_estado->getPdeCentroRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_ALTA_CMB_EDIT_PDE_CENTRO_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_estado_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_recepcion_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_recepcion_id" <?php echo ($pde_recepcion_estado->getPdeCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_estado_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_recepcion_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_estado_cmb_pde_centro_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_estado_cmb_pan_panol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_id' ?>" >
				  
                                        <?php Lang::_lang('PanPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_cmb_pan_panol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_estado_cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $pde_recepcion_estado->getPanPanolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_ALTA_CMB_EDIT_PAN_PANOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_estado_cmb_pan_panol_id" clase_id="pan_panol" prefijo='pde_recepcion_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_panol_id" <?php echo ($pde_recepcion_estado->getPanPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_estado_cmb_pan_panol_id" clase_id="pan_panol" prefijo='pde_recepcion_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_estado_cmb_pan_panol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_estado_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_estado_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_recepcion_estado_txt_cantidad' value='<?php Gral::_echoTxt($pde_recepcion_estado->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_estado_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_estado_cmb_inicial', GralSiNo::getGralSiNosCmb(), $pde_recepcion_estado->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_estado_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_estado_cmb_actual', GralSiNo::getGralSiNosCmb(), $pde_recepcion_estado->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recepcion_estado_txa_observacion' rows='10' cols='50' id='pde_recepcion_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recepcion_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recepcion_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recepcion_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recepcion_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recepcion_estado'/>
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

