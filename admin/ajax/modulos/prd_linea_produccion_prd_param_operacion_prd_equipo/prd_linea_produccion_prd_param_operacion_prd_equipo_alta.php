<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA')){
    echo "No tiene asignada la credencial PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_linea_produccion_prd_param_operacion_prd_equipo';
$db_nombre_pagina = 'prd_linea_produccion_prd_param_operacion_prd_equipo_alta';

$prd_linea_produccion_prd_param_operacion_prd_equipo = new PrdLineaProduccionPrdParamOperacionPrdEquipo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_linea_produccion_prd_param_operacion_prd_equipo = new PrdLineaProduccionPrdParamOperacionPrdEquipo();
	if(trim($hdn_id) != '') $prd_linea_produccion_prd_param_operacion_prd_equipo->setId($hdn_id, false);
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setDescripcion(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_txt_descripcion"));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdLineaProduccionId(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_linea_produccion_id", null));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdParamOperacionId(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_param_operacion_id", null));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdEquipoId(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_equipo_id", null));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setCodigo(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_txt_codigo"));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setObservacion(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_txa_observacion"));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setOrden(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_txt_orden", 0));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setEstado(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_estado", 0));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_txt_creado")));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setCreadoPor(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo__creado_por", 0));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo_txt_modificado")));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setModificadoPor(Gral::getVars(1, "prd_linea_produccion_prd_param_operacion_prd_equipo__modificado_por", 0));

	$prd_linea_produccion_prd_param_operacion_prd_equipo_estado = new PrdLineaProduccionPrdParamOperacionPrdEquipo();
	if(trim($hdn_id) != ''){
		$prd_linea_produccion_prd_param_operacion_prd_equipo_estado->setId($hdn_id);
		$prd_linea_produccion_prd_param_operacion_prd_equipo->setEstado($prd_linea_produccion_prd_param_operacion_prd_equipo_estado->getEstado());
				
	}else{
		$prd_linea_produccion_prd_param_operacion_prd_equipo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_linea_produccion_prd_param_operacion_prd_equipo->control();
			if(!$error->getExisteError()){
				$prd_linea_produccion_prd_param_operacion_prd_equipo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_linea_produccion_prd_param_operacion_prd_equipo_alta.php?cs=1&id='.$prd_linea_produccion_prd_param_operacion_prd_equipo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_linea_produccion_prd_param_operacion_prd_equipo->control();
			if(!$error->getExisteError()){
				$prd_linea_produccion_prd_param_operacion_prd_equipo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_linea_produccion_prd_param_operacion_prd_equipo_alta.php?cs=1');
				$prd_linea_produccion_prd_param_operacion_prd_equipo = new PrdLineaProduccionPrdParamOperacionPrdEquipo();
			}
		break;
	}
	Gral::setSes('PrdLineaProduccionPrdParamOperacionPrdEquipo_ULTIMO_INSERTADO', $prd_linea_produccion_prd_param_operacion_prd_equipo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_linea_produccion_prd_param_operacion_prd_equipo_id = Gral::getVars(2, $prefijo.'cmb_prd_linea_produccion_prd_param_operacion_prd_equipo_id', 0);
	if($cmb_prd_linea_produccion_prd_param_operacion_prd_equipo_id != 0){
		$prd_linea_produccion_prd_param_operacion_prd_equipo = PrdLineaProduccionPrdParamOperacionPrdEquipo::getOxId($cmb_prd_linea_produccion_prd_param_operacion_prd_equipo_id);
	}else{
	
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdLineaProduccionId(Gral::getVars(2, "prd_linea_produccion_id", 'null'));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdParamOperacionId(Gral::getVars(2, "prd_param_operacion_id", 'null'));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdEquipoId(Gral::getVars(2, "prd_equipo_id", 'null'));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setOrden(Gral::getVars(2, "orden", 0));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setEstado(Gral::getVars(2, "estado", 0));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_linea_produccion_prd_param_operacion_prd_equipo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_linea_produccion_prd_param_operacion_prd_equipo' width='90%'>
        
				<tr>
				  <td  id="label_prd_linea_produccion_prd_param_operacion_prd_equipo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_prd_param_operacion_prd_equipo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_linea_produccion_prd_param_operacion_prd_equipo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_linea_produccion_prd_param_operacion_prd_equipo_txt_descripcion' value='<?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_linea_produccion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_linea_produccion_id' ?>" >
				  
                                        <?php Lang::_lang('PrdLineaProduccion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_linea_produccion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_linea_produccion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_linea_produccion_id', Gral::getCmbFiltro(PrdLineaProduccion::getPrdLineaProduccionsCmb(), '...'), $prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdLineaProduccionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA_CMB_EDIT_PRD_LINEA_PRODUCCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_linea_produccion_id" clase_id="prd_linea_produccion" prefijo='prd_linea_produccion_prd_param_operacion_prd_equipo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_linea_produccion_id" <?php echo ($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdLineaProduccionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_linea_produccion_id" clase_id="prd_linea_produccion" prefijo='prd_linea_produccion_prd_param_operacion_prd_equipo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_linea_produccion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_linea_produccion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_linea_produccion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_linea_produccion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_linea_produccion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_linea_produccion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_param_operacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_param_operacion_id' ?>" >
				  
                                        <?php Lang::_lang('PrdParamOperacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_param_operacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_param_operacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_param_operacion_id', Gral::getCmbFiltro(PrdParamOperacion::getPrdParamOperacionsCmb(), '...'), $prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdParamOperacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA_CMB_EDIT_PRD_PARAM_OPERACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_param_operacion_id" clase_id="prd_param_operacion" prefijo='prd_linea_produccion_prd_param_operacion_prd_equipo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_param_operacion_id" <?php echo ($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdParamOperacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_param_operacion_id" clase_id="prd_param_operacion" prefijo='prd_linea_produccion_prd_param_operacion_prd_equipo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_param_operacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_param_operacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_param_operacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_param_operacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_param_operacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_param_operacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_equipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prd_equipo_id' ?>" >
				  
                                        <?php Lang::_lang('PrdEquipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_equipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prd_equipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_equipo_id', Gral::getCmbFiltro(PrdEquipo::getPrdEquiposCmb(), '...'), $prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdEquipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA_CMB_EDIT_PRD_EQUIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_equipo_id" clase_id="prd_equipo" prefijo='prd_linea_produccion_prd_param_operacion_prd_equipo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_equipo_id" <?php echo ($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdEquipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_equipo_id" clase_id="prd_equipo" prefijo='prd_linea_produccion_prd_param_operacion_prd_equipo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prd_linea_produccion_prd_param_operacion_prd_equipo_cmb_prd_equipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_equipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_equipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_equipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_prd_equipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_equipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_prd_param_operacion_prd_equipo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_prd_param_operacion_prd_equipo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_linea_produccion_prd_param_operacion_prd_equipo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_linea_produccion_prd_param_operacion_prd_equipo_txt_codigo' value='<?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_linea_produccion_prd_param_operacion_prd_equipo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_linea_produccion_prd_param_operacion_prd_equipo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_linea_produccion_prd_param_operacion_prd_equipo_txa_observacion' rows='10' cols='50' id='prd_linea_produccion_prd_param_operacion_prd_equipo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_linea_produccion_prd_param_operacion_prd_equipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_linea_produccion_prd_param_operacion_prd_equipo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_linea_produccion_prd_param_operacion_prd_equipo'/>
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

