<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_REMITO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial VTA_REMITO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_remito_estado';
$db_nombre_pagina = 'vta_remito_estado_alta';

$vta_remito_estado = new VtaRemitoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_remito_estado = new VtaRemitoEstado();
	if(trim($hdn_id) != '') $vta_remito_estado->setId($hdn_id, false);
	$vta_remito_estado->setDescripcion(Gral::getVars(1, "vta_remito_estado_txt_descripcion"));
	$vta_remito_estado->setVtaRemitoId(Gral::getVars(1, "vta_remito_estado_cmb_vta_remito_id", null));
	$vta_remito_estado->setVtaRemitoTipoEstadoId(Gral::getVars(1, "vta_remito_estado_cmb_vta_remito_tipo_estado_id", null));
	$vta_remito_estado->setInicial(Gral::getVars(1, "vta_remito_estado_cmb_inicial", 0));
	$vta_remito_estado->setActual(Gral::getVars(1, "vta_remito_estado_cmb_actual", 0));
	$vta_remito_estado->setCantidadBultos(Gral::getVars(1, "vta_remito_estado_cmb_cantidad_bultos", 0));
	$vta_remito_estado->setPeso(Gral::getVars(1, "vta_remito_estado_cmb_peso", 0));
	$vta_remito_estado->setCostoEnvio(Gral::getVars(1, "vta_remito_estado_cmb_costo_envio", 0));
	$vta_remito_estado->setGralEmpresaTransportadoraId(Gral::getVars(1, "vta_remito_estado_cmb_gral_empresa_transportadora_id", null));
	$vta_remito_estado->setGuia(Gral::getVars(1, "vta_remito_estado_txt_guia"));
	$vta_remito_estado->setCodigo(Gral::getVars(1, "vta_remito_estado_txt_codigo"));
	$vta_remito_estado->setNotaInterna(Gral::getVars(1, "vta_remito_estado_txa_nota_interna"));
	$vta_remito_estado->setObservacion(Gral::getVars(1, "vta_remito_estado_txa_observacion"));
	$vta_remito_estado->setOrden(Gral::getVars(1, "vta_remito_estado_txt_orden", 0));
	$vta_remito_estado->setEstado(Gral::getVars(1, "vta_remito_estado_cmb_estado", 0));
	$vta_remito_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_estado_txt_creado")));
	$vta_remito_estado->setCreadoPor(Gral::getVars(1, "vta_remito_estado__creado_por", 0));
	$vta_remito_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_remito_estado_txt_modificado")));
	$vta_remito_estado->setModificadoPor(Gral::getVars(1, "vta_remito_estado__modificado_por", 0));

	$vta_remito_estado_estado = new VtaRemitoEstado();
	if(trim($hdn_id) != ''){
		$vta_remito_estado_estado->setId($hdn_id);
		$vta_remito_estado->setEstado($vta_remito_estado_estado->getEstado());
				
	}else{
		$vta_remito_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_remito_estado->control();
			if(!$error->getExisteError()){
				$vta_remito_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_remito_estado_alta.php?cs=1&id='.$vta_remito_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_remito_estado->control();
			if(!$error->getExisteError()){
				$vta_remito_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_remito_estado_alta.php?cs=1');
				$vta_remito_estado = new VtaRemitoEstado();
			}
		break;
	}
	Gral::setSes('VtaRemitoEstado_ULTIMO_INSERTADO', $vta_remito_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_remito_estado_id = Gral::getVars(2, $prefijo.'cmb_vta_remito_estado_id', 0);
	if($cmb_vta_remito_estado_id != 0){
		$vta_remito_estado = VtaRemitoEstado::getOxId($cmb_vta_remito_estado_id);
	}else{
	
	$vta_remito_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_remito_estado->setVtaRemitoId(Gral::getVars(2, "vta_remito_id", 'null'));
	$vta_remito_estado->setVtaRemitoTipoEstadoId(Gral::getVars(2, "vta_remito_tipo_estado_id", 'null'));
	$vta_remito_estado->setInicial(Gral::getVars(2, "inicial", 0));
	$vta_remito_estado->setActual(Gral::getVars(2, "actual", 0));
	$vta_remito_estado->setCantidadBultos(Gral::getVars(2, "cantidad_bultos", 0));
	$vta_remito_estado->setPeso(Gral::getVars(2, "peso", 0));
	$vta_remito_estado->setCostoEnvio(Gral::getVars(2, "costo_envio", 0));
	$vta_remito_estado->setGralEmpresaTransportadoraId(Gral::getVars(2, "gral_empresa_transportadora_id", 'null'));
	$vta_remito_estado->setGuia(Gral::getVars(2, "guia", ''));
	$vta_remito_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_remito_estado->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$vta_remito_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_remito_estado->setOrden(Gral::getVars(2, "orden", 0));
	$vta_remito_estado->setEstado(Gral::getVars(2, "estado", 0));
	$vta_remito_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_remito_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_remito_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_remito_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_remito_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_remito_estado/vta_remito_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_remito_estado' width='90%'>
        
				<tr>
				  <td  id="label_vta_remito_estado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_estado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_remito_estado_txt_descripcion' value='<?php Gral::_echoTxt($vta_remito_estado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_estado_cmb_vta_remito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_remito_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRemito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_cmb_vta_remito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_remito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_estado_cmb_vta_remito_id', Gral::getCmbFiltro(VtaRemito::getVtaRemitosCmb(), '...'), $vta_remito_estado->getVtaRemitoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ESTADO_ALTA_CMB_EDIT_VTA_REMITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_estado_cmb_vta_remito_id" clase_id="vta_remito" prefijo='vta_remito_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_remito_id" <?php echo ($vta_remito_estado->getVtaRemitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_estado_cmb_vta_remito_id" clase_id="vta_remito" prefijo='vta_remito_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_estado_cmb_vta_remito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_vta_remito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_vta_remito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_vta_remito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_vta_remito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_remito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_estado_cmb_vta_remito_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_remito_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRemitoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_cmb_vta_remito_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_remito_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_estado_cmb_vta_remito_tipo_estado_id', Gral::getCmbFiltro(VtaRemitoTipoEstado::getVtaRemitoTipoEstadosCmb(), '...'), $vta_remito_estado->getVtaRemitoTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ESTADO_ALTA_CMB_EDIT_VTA_REMITO_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_estado_cmb_vta_remito_tipo_estado_id" clase_id="vta_remito_tipo_estado" prefijo='vta_remito_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_remito_tipo_estado_id" <?php echo ($vta_remito_estado->getVtaRemitoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_estado_cmb_vta_remito_tipo_estado_id" clase_id="vta_remito_tipo_estado" prefijo='vta_remito_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_estado_cmb_vta_remito_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_vta_remito_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_vta_remito_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_vta_remito_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_vta_remito_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_remito_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_estado_cmb_gral_empresa_transportadora_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_transportadora_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresaTransportadora', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_cmb_gral_empresa_transportadora_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_transportadora_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_remito_estado_cmb_gral_empresa_transportadora_id', Gral::getCmbFiltro(GralEmpresaTransportadora::getGralEmpresaTransportadorasCmb(), '...'), $vta_remito_estado->getGralEmpresaTransportadoraId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ESTADO_ALTA_CMB_EDIT_GRAL_EMPRESA_TRANSPORTADORA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_remito_estado_cmb_gral_empresa_transportadora_id" clase_id="gral_empresa_transportadora" prefijo='vta_remito_estado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_transportadora_id" <?php echo ($vta_remito_estado->getGralEmpresaTransportadoraId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_remito_estado_cmb_gral_empresa_transportadora_id" clase_id="gral_empresa_transportadora" prefijo='vta_remito_estado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_remito_estado_cmb_gral_empresa_transportadora_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_gral_empresa_transportadora_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_gral_empresa_transportadora_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_gral_empresa_transportadora_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_gral_empresa_transportadora_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_transportadora_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_estado_txt_guia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_guia' ?>" >
				  
                                        <?php Lang::_lang('Guia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_txt_guia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('guia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_estado_txt_guia' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_remito_estado_txt_guia' value='<?php Gral::_echoTxt($vta_remito_estado->getGuia(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_guia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_guia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_guia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_guia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('guia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_estado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_remito_estado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_remito_estado_txt_codigo' value='<?php Gral::_echoTxt($vta_remito_estado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_estado_txa_nota_interna" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >
				  
                                        <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_txa_nota_interna" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_remito_estado_txa_nota_interna' rows='10' cols='50' id='vta_remito_estado_txa_nota_interna' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_remito_estado->getNotaInterna(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_nota_interna', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_remito_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_remito_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_remito_estado_txa_observacion' rows='10' cols='50' id='vta_remito_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_remito_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_remito_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_remito_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_remito_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_remito_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_remito_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_remito_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_remito_estado'/>
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

