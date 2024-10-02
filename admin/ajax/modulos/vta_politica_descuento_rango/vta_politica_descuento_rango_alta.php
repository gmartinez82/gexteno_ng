<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_RANGO_ALTA')){
    echo "No tiene asignada la credencial VTA_POLITICA_DESCUENTO_RANGO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_politica_descuento_rango';
$db_nombre_pagina = 'vta_politica_descuento_rango_alta';

$vta_politica_descuento_rango = new VtaPoliticaDescuentoRango();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_politica_descuento_rango = new VtaPoliticaDescuentoRango();
	if(trim($hdn_id) != '') $vta_politica_descuento_rango->setId($hdn_id, false);
	$vta_politica_descuento_rango->setDescripcion(Gral::getVars(1, "vta_politica_descuento_rango_txt_descripcion"));
	$vta_politica_descuento_rango->setVtaPoliticaDescuentoId(Gral::getVars(1, "vta_politica_descuento_rango_cmb_vta_politica_descuento_id", null));
	$vta_politica_descuento_rango->setCantidadDesde(Gral::getVars(1, "vta_politica_descuento_rango_txt_cantidad_desde", 0));
	$vta_politica_descuento_rango->setCantidadHasta(Gral::getVars(1, "vta_politica_descuento_rango_txt_cantidad_hasta", 0));
	$vta_politica_descuento_rango->setPorcentajeDescuento(Gral::getVars(1, "vta_politica_descuento_rango_txt_porcentaje_descuento", 0));
	$vta_politica_descuento_rango->setPorcentajeNegociacion(Gral::getVars(1, "vta_politica_descuento_rango_txt_porcentaje_negociacion", 0));
	$vta_politica_descuento_rango->setCodigo(Gral::getVars(1, "vta_politica_descuento_rango_txt_codigo"));
	$vta_politica_descuento_rango->setObservacion(Gral::getVars(1, "vta_politica_descuento_rango_txa_observacion"));
	$vta_politica_descuento_rango->setOrden(Gral::getVars(1, "vta_politica_descuento_rango_txt_orden", 0));
	$vta_politica_descuento_rango->setEstado(Gral::getVars(1, "vta_politica_descuento_rango__estado", 0));
	$vta_politica_descuento_rango->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_politica_descuento_rango_txt_creado")));
	$vta_politica_descuento_rango->setCreadoPor(Gral::getVars(1, "vta_politica_descuento_rango__creado_por", 0));
	$vta_politica_descuento_rango->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_politica_descuento_rango_txt_modificado")));
	$vta_politica_descuento_rango->setModificadoPor(Gral::getVars(1, "vta_politica_descuento_rango__modificado_por", 0));

	$vta_politica_descuento_rango_estado = new VtaPoliticaDescuentoRango();
	if(trim($hdn_id) != ''){
		$vta_politica_descuento_rango_estado->setId($hdn_id);
		$vta_politica_descuento_rango->setEstado($vta_politica_descuento_rango_estado->getEstado());
				
	}else{
		$vta_politica_descuento_rango->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_politica_descuento_rango->control();
			if(!$error->getExisteError()){
				$vta_politica_descuento_rango->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_politica_descuento_rango_alta.php?cs=1&id='.$vta_politica_descuento_rango->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_politica_descuento_rango->control();
			if(!$error->getExisteError()){
				$vta_politica_descuento_rango->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_politica_descuento_rango_alta.php?cs=1');
				$vta_politica_descuento_rango = new VtaPoliticaDescuentoRango();
			}
		break;
	}
	Gral::setSes('VtaPoliticaDescuentoRango_ULTIMO_INSERTADO', $vta_politica_descuento_rango->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_politica_descuento_rango_id = Gral::getVars(2, $prefijo.'cmb_vta_politica_descuento_rango_id', 0);
	if($cmb_vta_politica_descuento_rango_id != 0){
		$vta_politica_descuento_rango = VtaPoliticaDescuentoRango::getOxId($cmb_vta_politica_descuento_rango_id);
	}else{
	
	$vta_politica_descuento_rango->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_politica_descuento_rango->setVtaPoliticaDescuentoId(Gral::getVars(2, "vta_politica_descuento_id", 'null'));
	$vta_politica_descuento_rango->setCantidadDesde(Gral::getVars(2, "cantidad_desde", 0));
	$vta_politica_descuento_rango->setCantidadHasta(Gral::getVars(2, "cantidad_hasta", 0));
	$vta_politica_descuento_rango->setPorcentajeDescuento(Gral::getVars(2, "porcentaje_descuento", 0));
	$vta_politica_descuento_rango->setPorcentajeNegociacion(Gral::getVars(2, "porcentaje_negociacion", 0));
	$vta_politica_descuento_rango->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_politica_descuento_rango->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_politica_descuento_rango->setOrden(Gral::getVars(2, "orden", 0));
	$vta_politica_descuento_rango->setEstado(Gral::getVars(2, "estado", 0));
	$vta_politica_descuento_rango->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_politica_descuento_rango->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_politica_descuento_rango->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_politica_descuento_rango->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_politica_descuento_rango->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_politica_descuento_rango/vta_politica_descuento_rango_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_politica_descuento_rango' width='90%'>
        
				<tr>
				  <td  id="label_vta_politica_descuento_rango_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_rango_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_politica_descuento_rango_txt_descripcion' value='<?php Gral::_echoTxt($vta_politica_descuento_rango->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_rango_cmb_vta_politica_descuento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_politica_descuento_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPoliticaDescuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_cmb_vta_politica_descuento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_politica_descuento_rango_cmb_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), $vta_politica_descuento_rango->getVtaPoliticaDescuentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_RANGO_ALTA_CMB_EDIT_VTA_POLITICA_DESCUENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_politica_descuento_rango_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_politica_descuento_rango_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_politica_descuento_id" <?php echo ($vta_politica_descuento_rango->getVtaPoliticaDescuentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_politica_descuento_rango_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_politica_descuento_rango_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_politica_descuento_rango_cmb_vta_politica_descuento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_rango_txt_cantidad_desde" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_desde' ?>" >
				  
                                        <?php Lang::_lang('Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_txt_cantidad_desde" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_rango_txt_cantidad_desde' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_politica_descuento_rango_txt_cantidad_desde' value='<?php Gral::_echoTxt($vta_politica_descuento_rango->getCantidadDesde(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_cantidad_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_cantidad_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_cantidad_desde', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_cantidad_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_desde')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_rango_txt_cantidad_hasta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_hasta' ?>" >
				  
                                        <?php Lang::_lang('Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_txt_cantidad_hasta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_rango_txt_cantidad_hasta' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_politica_descuento_rango_txt_cantidad_hasta' value='<?php Gral::_echoTxt($vta_politica_descuento_rango->getCantidadHasta(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_cantidad_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_cantidad_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_cantidad_hasta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_cantidad_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_hasta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_rango_txt_porcentaje_descuento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_descuento' ?>" >
				  
                                        <?php Lang::_lang('Porc Descuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_txt_porcentaje_descuento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_descuento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_rango_txt_porcentaje_descuento' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_politica_descuento_rango_txt_porcentaje_descuento' value='<?php Gral::_echoTxt($vta_politica_descuento_rango->getPorcentajeDescuento(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_porcentaje_descuento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_porcentaje_descuento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_porcentaje_descuento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_porcentaje_descuento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_descuento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_rango_txt_porcentaje_negociacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_negociacion' ?>" >
				  
                                        <?php Lang::_lang('Porc Negociacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_txt_porcentaje_negociacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_negociacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_rango_txt_porcentaje_negociacion' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_politica_descuento_rango_txt_porcentaje_negociacion' value='<?php Gral::_echoTxt($vta_politica_descuento_rango->getPorcentajeNegociacion(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_porcentaje_negociacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_porcentaje_negociacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_porcentaje_negociacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_porcentaje_negociacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_negociacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_rango_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_politica_descuento_rango_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_politica_descuento_rango_txt_codigo' value='<?php Gral::_echoTxt($vta_politica_descuento_rango->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_rango_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_rango_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_politica_descuento_rango_txa_observacion' rows='10' cols='50' id='vta_politica_descuento_rango_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_politica_descuento_rango->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_politica_descuento_rango_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_rango_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_rango_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_rango_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_politica_descuento_rango->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_politica_descuento_rango_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_politica_descuento_rango'/>
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

