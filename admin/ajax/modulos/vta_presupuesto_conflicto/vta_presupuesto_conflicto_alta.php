<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_CONFLICTO_ALTA')){
    echo "No tiene asignada la credencial VTA_PRESUPUESTO_CONFLICTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_presupuesto_conflicto';
$db_nombre_pagina = 'vta_presupuesto_conflicto_alta';

$vta_presupuesto_conflicto = new VtaPresupuestoConflicto();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_presupuesto_conflicto = new VtaPresupuestoConflicto();
	if(trim($hdn_id) != '') $vta_presupuesto_conflicto->setId($hdn_id, false);
	$vta_presupuesto_conflicto->setDescripcion(Gral::getVars(1, "vta_presupuesto_conflicto_txt_descripcion"));
	$vta_presupuesto_conflicto->setVtaPresupuestoInsInsumoId(Gral::getVars(1, "vta_presupuesto_conflicto_cmb_vta_presupuesto_ins_insumo_id", null));
	$vta_presupuesto_conflicto->setImporteInicial(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_conflicto_txt_importe_inicial", 0)));
	$vta_presupuesto_conflicto->setImporteActualizado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_conflicto_txt_importe_actualizado", 0)));
	$vta_presupuesto_conflicto->setImporteDiferencia(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_conflicto_txt_importe_diferencia", 0)));
	$vta_presupuesto_conflicto->setImporteResuelto(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_presupuesto_conflicto_txt_importe_resuelto", 0)));
	$vta_presupuesto_conflicto->setFechaConflicto(Gral::getFechaToDb(Gral::getVars(1, "vta_presupuesto_conflicto_txt_fecha_conflicto")));
	$vta_presupuesto_conflicto->setFechaResolucion(Gral::getFechaToDb(Gral::getVars(1, "vta_presupuesto_conflicto_txt_fecha_resolucion")));
	$vta_presupuesto_conflicto->setUsUsuarioResolucion(Gral::getVars(1, "vta_presupuesto_conflicto_cmb_us_usuario_resolucion", null));
	$vta_presupuesto_conflicto->setResuelto(Gral::getVars(1, "vta_presupuesto_conflicto_cmb_resuelto", 0));
	$vta_presupuesto_conflicto->setCodigo(Gral::getVars(1, "vta_presupuesto_conflicto_txt_codigo"));
	$vta_presupuesto_conflicto->setObservacion(Gral::getVars(1, "vta_presupuesto_conflicto_txa_observacion"));
	$vta_presupuesto_conflicto->setOrden(Gral::getVars(1, "vta_presupuesto_conflicto_txt_orden", 0));
	$vta_presupuesto_conflicto->setEstado(Gral::getVars(1, "vta_presupuesto_conflicto_cmb_estado", 0));
	$vta_presupuesto_conflicto->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_presupuesto_conflicto_txt_creado")));
	$vta_presupuesto_conflicto->setCreadoPor(Gral::getVars(1, "vta_presupuesto_conflicto__creado_por", 0));
	$vta_presupuesto_conflicto->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_presupuesto_conflicto_txt_modificado")));
	$vta_presupuesto_conflicto->setModificadoPor(Gral::getVars(1, "vta_presupuesto_conflicto__modificado_por", 0));

	$vta_presupuesto_conflicto_estado = new VtaPresupuestoConflicto();
	if(trim($hdn_id) != ''){
		$vta_presupuesto_conflicto_estado->setId($hdn_id);
		$vta_presupuesto_conflicto->setEstado($vta_presupuesto_conflicto_estado->getEstado());
				
	}else{
		$vta_presupuesto_conflicto->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_presupuesto_conflicto->control();
			if(!$error->getExisteError()){
				$vta_presupuesto_conflicto->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_presupuesto_conflicto_alta.php?cs=1&id='.$vta_presupuesto_conflicto->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_presupuesto_conflicto->control();
			if(!$error->getExisteError()){
				$vta_presupuesto_conflicto->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_presupuesto_conflicto_alta.php?cs=1');
				$vta_presupuesto_conflicto = new VtaPresupuestoConflicto();
			}
		break;
	}
	Gral::setSes('VtaPresupuestoConflicto_ULTIMO_INSERTADO', $vta_presupuesto_conflicto->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_presupuesto_conflicto_id = Gral::getVars(2, $prefijo.'cmb_vta_presupuesto_conflicto_id', 0);
	if($cmb_vta_presupuesto_conflicto_id != 0){
		$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($cmb_vta_presupuesto_conflicto_id);
	}else{
	
	$vta_presupuesto_conflicto->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_presupuesto_conflicto->setVtaPresupuestoInsInsumoId(Gral::getVars(2, "vta_presupuesto_ins_insumo_id", 'null'));
	$vta_presupuesto_conflicto->setImporteInicial(Gral::getVars(2, "importe_inicial", 0));
	$vta_presupuesto_conflicto->setImporteActualizado(Gral::getVars(2, "importe_actualizado", 0));
	$vta_presupuesto_conflicto->setImporteDiferencia(Gral::getVars(2, "importe_diferencia", 0));
	$vta_presupuesto_conflicto->setImporteResuelto(Gral::getVars(2, "importe_resuelto", 0));
	$vta_presupuesto_conflicto->setFechaConflicto(Gral::getVars(2, "fecha_conflicto", date('Y-m-d')));
	$vta_presupuesto_conflicto->setFechaResolucion(Gral::getVars(2, "fecha_resolucion", date('Y-m-d')));
	$vta_presupuesto_conflicto->setUsUsuarioResolucion(Gral::getVars(2, "us_usuario_resolucion", 'null'));
	$vta_presupuesto_conflicto->setResuelto(Gral::getVars(2, "resuelto", 0));
	$vta_presupuesto_conflicto->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_presupuesto_conflicto->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_presupuesto_conflicto->setOrden(Gral::getVars(2, "orden", 0));
	$vta_presupuesto_conflicto->setEstado(Gral::getVars(2, "estado", 0));
	$vta_presupuesto_conflicto->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_presupuesto_conflicto->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_presupuesto_conflicto->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_presupuesto_conflicto->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_presupuesto_conflicto->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_presupuesto_conflicto/vta_presupuesto_conflicto_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_presupuesto_conflicto' width='90%'>
        
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_conflicto_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_presupuesto_conflicto_txt_descripcion' value='<?php Gral::_echoTxt($vta_presupuesto_conflicto->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPresupuestoInsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_cmb_vta_presupuesto_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_conflicto_cmb_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), '...'), $vta_presupuesto_conflicto->getVtaPresupuestoInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_CONFLICTO_ALTA_CMB_EDIT_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_presupuesto_conflicto_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='vta_presupuesto_conflicto_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_ins_insumo_id" <?php echo ($vta_presupuesto_conflicto->getVtaPresupuestoInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_presupuesto_conflicto_cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='vta_presupuesto_conflicto_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_presupuesto_conflicto_cmb_vta_presupuesto_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_txt_fecha_conflicto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_conflicto' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Conflicto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_txt_fecha_conflicto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_conflicto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_conflicto_txt_fecha_conflicto' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_presupuesto_conflicto_txt_fecha_conflicto' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_presupuesto_conflicto->getFechaConflicto()), true) ?>' size='40' />
					<input type='button' id='cal_vta_presupuesto_conflicto_txt_fecha_conflicto' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_presupuesto_conflicto_txt_fecha_conflicto', ifFormat: '%d/%m/%Y', button: 'cal_vta_presupuesto_conflicto_txt_fecha_conflicto'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_fecha_conflicto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_fecha_conflicto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_fecha_conflicto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_fecha_conflicto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_conflicto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_txt_fecha_resolucion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_resolucion' ?>" >
				  
                                        <?php Lang::_lang('Fecha de Resolucion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_txt_fecha_resolucion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_resolucion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_conflicto_txt_fecha_resolucion' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_presupuesto_conflicto_txt_fecha_resolucion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_presupuesto_conflicto->getFechaResolucion()), true) ?>' size='40' />
					<input type='button' id='cal_vta_presupuesto_conflicto_txt_fecha_resolucion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_presupuesto_conflicto_txt_fecha_resolucion', ifFormat: '%d/%m/%Y', button: 'cal_vta_presupuesto_conflicto_txt_fecha_resolucion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_fecha_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_fecha_resolucion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_fecha_resolucion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_fecha_resolucion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_resolucion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_cmb_us_usuario_resolucion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_resolucion' ?>" >
				  
                                        <?php Lang::_lang('UsUsuario Resolucion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_cmb_us_usuario_resolucion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('us_usuario_resolucion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_conflicto_cmb_us_usuario_resolucion', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $vta_presupuesto_conflicto->getUsUsuarioResolucion(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_us_usuario_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_us_usuario_resolucion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_us_usuario_resolucion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_us_usuario_resolucion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_resolucion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_cmb_resuelto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_resuelto' ?>" >
				  
                                        <?php Lang::_lang('Resuelto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_cmb_resuelto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('resuelto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_presupuesto_conflicto_cmb_resuelto', GralSiNo::getGralSiNosCmb(), $vta_presupuesto_conflicto->getResuelto(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_resuelto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_resuelto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_resuelto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_resuelto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('resuelto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_presupuesto_conflicto_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_presupuesto_conflicto_txt_codigo' value='<?php Gral::_echoTxt($vta_presupuesto_conflicto->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_presupuesto_conflicto_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_presupuesto_conflicto_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_presupuesto_conflicto_txa_observacion' rows='10' cols='50' id='vta_presupuesto_conflicto_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_presupuesto_conflicto->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_presupuesto_conflicto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_presupuesto_conflicto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_presupuesto_conflicto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_presupuesto_conflicto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_presupuesto_conflicto->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_presupuesto_conflicto_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_presupuesto_conflicto'/>
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

