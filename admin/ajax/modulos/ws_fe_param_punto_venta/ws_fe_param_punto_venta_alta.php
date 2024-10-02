<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_ALTA')){
    echo "No tiene asignada la credencial WS_FE_PARAM_PUNTO_VENTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ws_fe_param_punto_venta';
$db_nombre_pagina = 'ws_fe_param_punto_venta_alta';

$ws_fe_param_punto_venta = new WsFeParamPuntoVenta();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ws_fe_param_punto_venta = new WsFeParamPuntoVenta();
	if(trim($hdn_id) != '') $ws_fe_param_punto_venta->setId($hdn_id, false);
	$ws_fe_param_punto_venta->setDescripcion(Gral::getVars(1, "ws_fe_param_punto_venta_txt_descripcion"));
	$ws_fe_param_punto_venta->setGralEmpresaId(Gral::getVars(1, "ws_fe_param_punto_venta_cmb_gral_empresa_id", null));
	$ws_fe_param_punto_venta->setCuit(Gral::getVars(1, "ws_fe_param_punto_venta_txt_cuit"));
	$ws_fe_param_punto_venta->setCodigo(Gral::getVars(1, "ws_fe_param_punto_venta_txt_codigo"));
	$ws_fe_param_punto_venta->setNumero(Gral::getVars(1, "ws_fe_param_punto_venta_txt_numero"));
	$ws_fe_param_punto_venta->setTipoEmision(Gral::getVars(1, "ws_fe_param_punto_venta_txt_tipo_emision"));
	$ws_fe_param_punto_venta->setBloqueado(Gral::getVars(1, "ws_fe_param_punto_venta_txt_bloqueado"));
	$ws_fe_param_punto_venta->setFechaBaja(Gral::getVars(1, "ws_fe_param_punto_venta_txt_fecha_baja"));
	$ws_fe_param_punto_venta->setObservacion(Gral::getVars(1, "ws_fe_param_punto_venta_txa_observacion"));
	$ws_fe_param_punto_venta->setOrden(Gral::getVars(1, "ws_fe_param_punto_venta_txt_orden", 0));
	$ws_fe_param_punto_venta->setEstado(Gral::getVars(1, "ws_fe_param_punto_venta__estado", 0));
	$ws_fe_param_punto_venta->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_param_punto_venta_txt_creado")));
	$ws_fe_param_punto_venta->setCreadoPor(Gral::getVars(1, "ws_fe_param_punto_venta__creado_por", null));
	$ws_fe_param_punto_venta->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ws_fe_param_punto_venta_txt_modificado")));
	$ws_fe_param_punto_venta->setModificadoPor(Gral::getVars(1, "ws_fe_param_punto_venta__modificado_por", null));

	$ws_fe_param_punto_venta_estado = new WsFeParamPuntoVenta();
	if(trim($hdn_id) != ''){
		$ws_fe_param_punto_venta_estado->setId($hdn_id);
		$ws_fe_param_punto_venta->setEstado($ws_fe_param_punto_venta_estado->getEstado());
				
	}else{
		$ws_fe_param_punto_venta->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_param_punto_venta->control();
			if(!$error->getExisteError()){
				$ws_fe_param_punto_venta->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ws_fe_param_punto_venta_alta.php?cs=1&id='.$ws_fe_param_punto_venta->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_param_punto_venta->control();
			if(!$error->getExisteError()){
				$ws_fe_param_punto_venta->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ws_fe_param_punto_venta_alta.php?cs=1');
				$ws_fe_param_punto_venta = new WsFeParamPuntoVenta();
			}
		break;
	}
	Gral::setSes('WsFeParamPuntoVenta_ULTIMO_INSERTADO', $ws_fe_param_punto_venta->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ws_fe_param_punto_venta_id = Gral::getVars(2, $prefijo.'cmb_ws_fe_param_punto_venta_id', 0);
	if($cmb_ws_fe_param_punto_venta_id != 0){
		$ws_fe_param_punto_venta = WsFeParamPuntoVenta::getOxId($cmb_ws_fe_param_punto_venta_id);
	}else{
	
	$ws_fe_param_punto_venta->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_param_punto_venta->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$ws_fe_param_punto_venta->setCuit(Gral::getVars(2, "cuit", ''));
	$ws_fe_param_punto_venta->setCodigo(Gral::getVars(2, "codigo", ''));
	$ws_fe_param_punto_venta->setNumero(Gral::getVars(2, "numero", ''));
	$ws_fe_param_punto_venta->setTipoEmision(Gral::getVars(2, "tipo_emision", ''));
	$ws_fe_param_punto_venta->setBloqueado(Gral::getVars(2, "bloqueado", ''));
	$ws_fe_param_punto_venta->setFechaBaja(Gral::getVars(2, "fecha_baja", ''));
	$ws_fe_param_punto_venta->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_param_punto_venta->setOrden(Gral::getVars(2, "orden", 0));
	$ws_fe_param_punto_venta->setEstado(Gral::getVars(2, "estado", 0));
	$ws_fe_param_punto_venta->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_param_punto_venta->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_param_punto_venta->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_param_punto_venta->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ws_fe_param_punto_venta->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ws_fe_param_punto_venta/ws_fe_param_punto_venta_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ws_fe_param_punto_venta' width='90%'>
        
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_punto_venta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_punto_venta_txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ws_fe_param_punto_venta_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $ws_fe_param_punto_venta->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ws_fe_param_punto_venta_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='ws_fe_param_punto_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($ws_fe_param_punto_venta->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ws_fe_param_punto_venta_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='ws_fe_param_punto_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ws_fe_param_punto_venta_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cuit' ?>" >
				  
                                        <?php Lang::_lang('CUIT', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txt_cuit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_punto_venta_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_punto_venta_txt_cuit' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getCuit(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_cuit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_cuit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_cuit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_cuit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_punto_venta_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_punto_venta_txt_codigo' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_punto_venta_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_punto_venta_txt_numero' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txt_tipo_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_tipo_emision' ?>" >
				  
                                        <?php Lang::_lang('Tipo de Emision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txt_tipo_emision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('tipo_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_punto_venta_txt_tipo_emision' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_punto_venta_txt_tipo_emision' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getTipoEmision(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_tipo_emision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_tipo_emision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_tipo_emision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_tipo_emision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tipo_emision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txt_bloqueado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_bloqueado' ?>" >
				  
                                        <?php Lang::_lang('Bloqueado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txt_bloqueado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('bloqueado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_punto_venta_txt_bloqueado' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_punto_venta_txt_bloqueado' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getBloqueado(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_bloqueado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_bloqueado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_bloqueado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_bloqueado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('bloqueado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txt_fecha_baja" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_baja' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Baja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txt_fecha_baja" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_baja')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ws_fe_param_punto_venta_txt_fecha_baja' type='text' class='textbox <?php echo $error_input_css ?> ' id='ws_fe_param_punto_venta_txt_fecha_baja' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getFechaBaja(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_fecha_baja', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_fecha_baja', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_fecha_baja', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_fecha_baja', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_baja')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ws_fe_param_punto_venta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ws_fe_param_punto_venta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ws_fe_param_punto_venta_txa_observacion' rows='10' cols='50' id='ws_fe_param_punto_venta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ws_fe_param_punto_venta->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ws_fe_param_punto_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ws_fe_param_punto_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ws_fe_param_punto_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_param_punto_venta->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ws_fe_param_punto_venta_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ws_fe_param_punto_venta'/>
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

