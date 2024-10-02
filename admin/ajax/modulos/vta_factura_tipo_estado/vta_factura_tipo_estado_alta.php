<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_FACTURA_TIPO_ESTADO_ALTA')){
    echo "No tiene asignada la credencial VTA_FACTURA_TIPO_ESTADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_factura_tipo_estado';
$db_nombre_pagina = 'vta_factura_tipo_estado_alta';

$vta_factura_tipo_estado = new VtaFacturaTipoEstado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_factura_tipo_estado = new VtaFacturaTipoEstado();
	if(trim($hdn_id) != '') $vta_factura_tipo_estado->setId($hdn_id, false);
	$vta_factura_tipo_estado->setDescripcion(Gral::getVars(1, "vta_factura_tipo_estado_txt_descripcion"));
	$vta_factura_tipo_estado->setDescripcionPublica(Gral::getVars(1, "vta_factura_tipo_estado_txt_descripcion_publica"));
	$vta_factura_tipo_estado->setCodigo(Gral::getVars(1, "vta_factura_tipo_estado_txt_codigo"));
	$vta_factura_tipo_estado->setActivo(Gral::getVars(1, "vta_factura_tipo_estado_cmb_activo", 0));
	$vta_factura_tipo_estado->setTerminal(Gral::getVars(1, "vta_factura_tipo_estado_cmb_terminal", 0));
	$vta_factura_tipo_estado->setImputable(Gral::getVars(1, "vta_factura_tipo_estado_cmb_imputable", 0));
	$vta_factura_tipo_estado->setGestionable(Gral::getVars(1, "vta_factura_tipo_estado_cmb_gestionable", 0));
	$vta_factura_tipo_estado->setAprobadoAfip(Gral::getVars(1, "vta_factura_tipo_estado_cmb_aprobado_afip", 0));
	$vta_factura_tipo_estado->setContabilizable(Gral::getVars(1, "vta_factura_tipo_estado_cmb_contabilizable", 0));
	$vta_factura_tipo_estado->setAnulado(Gral::getVars(1, "vta_factura_tipo_estado_cmb_anulado", 0));
	$vta_factura_tipo_estado->setObservacion(Gral::getVars(1, "vta_factura_tipo_estado_txa_observacion"));
	$vta_factura_tipo_estado->setOrden(Gral::getVars(1, "vta_factura_tipo_estado_txt_orden", 0));
	$vta_factura_tipo_estado->setEstado(Gral::getVars(1, "vta_factura_tipo_estado_cmb_estado", 0));
	$vta_factura_tipo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_factura_tipo_estado_txt_creado")));
	$vta_factura_tipo_estado->setCreadoPor(Gral::getVars(1, "vta_factura_tipo_estado__creado_por", 0));
	$vta_factura_tipo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_factura_tipo_estado_txt_modificado")));
	$vta_factura_tipo_estado->setModificadoPor(Gral::getVars(1, "vta_factura_tipo_estado__modificado_por", 0));

	$vta_factura_tipo_estado_estado = new VtaFacturaTipoEstado();
	if(trim($hdn_id) != ''){
		$vta_factura_tipo_estado_estado->setId($hdn_id);
		$vta_factura_tipo_estado->setEstado($vta_factura_tipo_estado_estado->getEstado());
				
	}else{
		$vta_factura_tipo_estado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_factura_tipo_estado->control();
			if(!$error->getExisteError()){
				$vta_factura_tipo_estado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_factura_tipo_estado_alta.php?cs=1&id='.$vta_factura_tipo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_factura_tipo_estado->control();
			if(!$error->getExisteError()){
				$vta_factura_tipo_estado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_factura_tipo_estado_alta.php?cs=1');
				$vta_factura_tipo_estado = new VtaFacturaTipoEstado();
			}
		break;
	}
	Gral::setSes('VtaFacturaTipoEstado_ULTIMO_INSERTADO', $vta_factura_tipo_estado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_factura_tipo_estado_id = Gral::getVars(2, $prefijo.'cmb_vta_factura_tipo_estado_id', 0);
	if($cmb_vta_factura_tipo_estado_id != 0){
		$vta_factura_tipo_estado = VtaFacturaTipoEstado::getOxId($cmb_vta_factura_tipo_estado_id);
	}else{
	
	$vta_factura_tipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_factura_tipo_estado->setDescripcionPublica(Gral::getVars(2, "descripcion_publica", ''));
	$vta_factura_tipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_factura_tipo_estado->setActivo(Gral::getVars(2, "activo", 0));
	$vta_factura_tipo_estado->setTerminal(Gral::getVars(2, "terminal", 0));
	$vta_factura_tipo_estado->setImputable(Gral::getVars(2, "imputable", 0));
	$vta_factura_tipo_estado->setGestionable(Gral::getVars(2, "gestionable", 0));
	$vta_factura_tipo_estado->setAprobadoAfip(Gral::getVars(2, "aprobado_afip", 0));
	$vta_factura_tipo_estado->setContabilizable(Gral::getVars(2, "contabilizable", 0));
	$vta_factura_tipo_estado->setAnulado(Gral::getVars(2, "anulado", 0));
	$vta_factura_tipo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_factura_tipo_estado->setOrden(Gral::getVars(2, "orden", 0));
	$vta_factura_tipo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$vta_factura_tipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_factura_tipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_factura_tipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_factura_tipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_factura_tipo_estado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_factura_tipo_estado/vta_factura_tipo_estado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_factura_tipo_estado' width='90%'>
        
				<tr>
				  <td  id="label_vta_factura_tipo_estado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_factura_tipo_estado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_factura_tipo_estado_txt_descripcion' value='<?php Gral::_echoTxt($vta_factura_tipo_estado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_txt_descripcion_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_publica' ?>" >
				  
                                        <?php Lang::_lang('Descr Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_txt_descripcion_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_factura_tipo_estado_txt_descripcion_publica' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_factura_tipo_estado_txt_descripcion_publica' value='<?php Gral::_echoTxt($vta_factura_tipo_estado->getDescripcionPublica(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_descripcion_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_descripcion_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_descripcion_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_descripcion_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_factura_tipo_estado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_factura_tipo_estado_txt_codigo' value='<?php Gral::_echoTxt($vta_factura_tipo_estado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_cmb_activo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_activo' ?>" >
				  
                                        <?php Lang::_lang('Activo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_cmb_activo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('activo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_tipo_estado_cmb_activo', GralSiNo::getGralSiNosCmb(), $vta_factura_tipo_estado->getActivo(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_activo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_activo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_activo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('activo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_cmb_terminal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_terminal' ?>" >
				  
                                        <?php Lang::_lang('Terminal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_cmb_terminal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('terminal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_tipo_estado_cmb_terminal', GralSiNo::getGralSiNosCmb(), $vta_factura_tipo_estado->getTerminal(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_terminal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_terminal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_terminal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('terminal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_cmb_imputable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_imputable' ?>" >
				  
                                        <?php Lang::_lang('Imputable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_cmb_imputable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('imputable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_tipo_estado_cmb_imputable', GralSiNo::getGralSiNosCmb(), $vta_factura_tipo_estado->getImputable(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_imputable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_imputable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_imputable', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_imputable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('imputable')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_cmb_gestionable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gestionable' ?>" >
				  
                                        <?php Lang::_lang('Gestionable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_cmb_gestionable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gestionable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_tipo_estado_cmb_gestionable', GralSiNo::getGralSiNosCmb(), $vta_factura_tipo_estado->getGestionable(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_gestionable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_gestionable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_gestionable', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_gestionable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gestionable')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_cmb_aprobado_afip" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_aprobado_afip' ?>" >
				  
                                        <?php Lang::_lang('Aprobado por Afip', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_cmb_aprobado_afip" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('aprobado_afip')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_tipo_estado_cmb_aprobado_afip', GralSiNo::getGralSiNosCmb(), $vta_factura_tipo_estado->getAprobadoAfip(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_aprobado_afip', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_aprobado_afip', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_aprobado_afip', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_aprobado_afip', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aprobado_afip')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_cmb_contabilizable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_contabilizable' ?>" >
				  
                                        <?php Lang::_lang('Contabilizable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_cmb_contabilizable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('contabilizable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_tipo_estado_cmb_contabilizable', GralSiNo::getGralSiNosCmb(), $vta_factura_tipo_estado->getContabilizable(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_contabilizable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_contabilizable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_contabilizable', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_contabilizable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('contabilizable')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_cmb_anulado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_anulado' ?>" >
				  
                                        <?php Lang::_lang('Anulado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_cmb_anulado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('anulado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_factura_tipo_estado_cmb_anulado', GralSiNo::getGralSiNosCmb(), $vta_factura_tipo_estado->getAnulado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_anulado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_anulado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_anulado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_anulado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anulado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_factura_tipo_estado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_factura_tipo_estado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_factura_tipo_estado_txa_observacion' rows='10' cols='50' id='vta_factura_tipo_estado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_factura_tipo_estado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_factura_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_factura_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_factura_tipo_estado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_factura_tipo_estado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_factura_tipo_estado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_factura_tipo_estado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_factura_tipo_estado'/>
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

