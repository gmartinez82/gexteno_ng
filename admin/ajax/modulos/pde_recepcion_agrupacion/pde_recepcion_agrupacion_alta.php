<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECEPCION_AGRUPACION_ALTA')){
    echo "No tiene asignada la credencial PDE_RECEPCION_AGRUPACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recepcion_agrupacion';
$db_nombre_pagina = 'pde_recepcion_agrupacion_alta';

$pde_recepcion_agrupacion = new PdeRecepcionAgrupacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recepcion_agrupacion = new PdeRecepcionAgrupacion();
	if(trim($hdn_id) != '') $pde_recepcion_agrupacion->setId($hdn_id, false);
	$pde_recepcion_agrupacion->setDescripcion(Gral::getVars(1, "pde_recepcion_agrupacion_txt_descripcion"));
	$pde_recepcion_agrupacion->setCodigo(Gral::getVars(1, "pde_recepcion_agrupacion_txt_codigo"));
	$pde_recepcion_agrupacion->setNroComprobante(Gral::getVars(1, "pde_recepcion_agrupacion_txt_nro_comprobante"));
	$pde_recepcion_agrupacion->setPdeTipoRecepcionId(Gral::getVars(1, "pde_recepcion_agrupacion_cmb_pde_tipo_recepcion_id", null));
	$pde_recepcion_agrupacion->setPdeCentroRecepcionId(Gral::getVars(1, "pde_recepcion_agrupacion_cmb_pde_centro_recepcion_id", null));
	$pde_recepcion_agrupacion->setPrvProveedorId(Gral::getVars(1, "pde_recepcion_agrupacion_cmb_prv_proveedor_id", null));
	$pde_recepcion_agrupacion->setFechaEntrega(Gral::getFechaToDb(Gral::getVars(1, "pde_recepcion_agrupacion_txt_fecha_entrega")));
	$pde_recepcion_agrupacion->setObservacion(Gral::getVars(1, "pde_recepcion_agrupacion_txa_observacion"));
	$pde_recepcion_agrupacion->setOrden(Gral::getVars(1, "pde_recepcion_agrupacion_txt_orden", 0));
	$pde_recepcion_agrupacion->setEstado(Gral::getVars(1, "pde_recepcion_agrupacion__estado", 0));
	$pde_recepcion_agrupacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_agrupacion_txt_creado")));
	$pde_recepcion_agrupacion->setCreadoPor(Gral::getVars(1, "pde_recepcion_agrupacion__creado_por", null));
	$pde_recepcion_agrupacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recepcion_agrupacion_txt_modificado")));
	$pde_recepcion_agrupacion->setModificadoPor(Gral::getVars(1, "pde_recepcion_agrupacion__modificado_por", null));

	$pde_recepcion_agrupacion_estado = new PdeRecepcionAgrupacion();
	if(trim($hdn_id) != ''){
		$pde_recepcion_agrupacion_estado->setId($hdn_id);
		$pde_recepcion_agrupacion->setEstado($pde_recepcion_agrupacion_estado->getEstado());
				
	}else{
		$pde_recepcion_agrupacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recepcion_agrupacion->control();
			if(!$error->getExisteError()){
				$pde_recepcion_agrupacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recepcion_agrupacion_alta.php?cs=1&id='.$pde_recepcion_agrupacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recepcion_agrupacion->control();
			if(!$error->getExisteError()){
				$pde_recepcion_agrupacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recepcion_agrupacion_alta.php?cs=1');
				$pde_recepcion_agrupacion = new PdeRecepcionAgrupacion();
			}
		break;
	}
	Gral::setSes('PdeRecepcionAgrupacion_ULTIMO_INSERTADO', $pde_recepcion_agrupacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recepcion_agrupacion_id = Gral::getVars(2, $prefijo.'cmb_pde_recepcion_agrupacion_id', 0);
	if($cmb_pde_recepcion_agrupacion_id != 0){
		$pde_recepcion_agrupacion = PdeRecepcionAgrupacion::getOxId($cmb_pde_recepcion_agrupacion_id);
	}else{
	
	$pde_recepcion_agrupacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recepcion_agrupacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recepcion_agrupacion->setNroComprobante(Gral::getVars(2, "nro_comprobante", ''));
	$pde_recepcion_agrupacion->setPdeTipoRecepcionId(Gral::getVars(2, "pde_tipo_recepcion_id", 'null'));
	$pde_recepcion_agrupacion->setPdeCentroRecepcionId(Gral::getVars(2, "pde_centro_recepcion_id", 'null'));
	$pde_recepcion_agrupacion->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_recepcion_agrupacion->setFechaEntrega(Gral::getVars(2, "fecha_entrega", date('Y-m-d')));
	$pde_recepcion_agrupacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recepcion_agrupacion->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recepcion_agrupacion->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recepcion_agrupacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recepcion_agrupacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recepcion_agrupacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recepcion_agrupacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recepcion_agrupacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recepcion_agrupacion/pde_recepcion_agrupacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recepcion_agrupacion' width='90%'>
        
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_agrupacion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_agrupacion_txt_descripcion' value='<?php Gral::_echoTxt($pde_recepcion_agrupacion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_agrupacion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_agrupacion_txt_codigo' value='<?php Gral::_echoTxt($pde_recepcion_agrupacion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_txt_nro_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nro_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Nro Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_txt_nro_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nro_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_agrupacion_txt_nro_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recepcion_agrupacion_txt_nro_comprobante' value='<?php Gral::_echoTxt($pde_recepcion_agrupacion->getNroComprobante(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_nro_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_nro_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_nro_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_nro_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nro_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_cmb_pde_tipo_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_cmb_pde_tipo_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_agrupacion_cmb_pde_tipo_recepcion_id', Gral::getCmbFiltro(PdeTipoRecepcion::getPdeTipoRecepcionsCmb(), '...'), $pde_recepcion_agrupacion->getPdeTipoRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_AGRUPACION_ALTA_CMB_EDIT_PDE_TIPO_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_agrupacion_cmb_pde_tipo_recepcion_id" clase_id="pde_tipo_recepcion" prefijo='pde_recepcion_agrupacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_recepcion_id" <?php echo ($pde_recepcion_agrupacion->getPdeTipoRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_agrupacion_cmb_pde_tipo_recepcion_id" clase_id="pde_tipo_recepcion" prefijo='pde_recepcion_agrupacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_agrupacion_cmb_pde_tipo_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_pde_tipo_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_pde_tipo_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_pde_tipo_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_pde_tipo_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_cmb_pde_centro_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_cmb_pde_centro_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_agrupacion_cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $pde_recepcion_agrupacion->getPdeCentroRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_AGRUPACION_ALTA_CMB_EDIT_PDE_CENTRO_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_agrupacion_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_recepcion_agrupacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_recepcion_id" <?php echo ($pde_recepcion_agrupacion->getPdeCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_agrupacion_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_recepcion_agrupacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_agrupacion_cmb_pde_centro_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_recepcion_agrupacion_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_recepcion_agrupacion->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_AGRUPACION_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_recepcion_agrupacion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recepcion_agrupacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_recepcion_agrupacion->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recepcion_agrupacion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recepcion_agrupacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recepcion_agrupacion_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_txt_fecha_entrega" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_entrega' ?>" >
				  
                                        <?php Lang::_lang('Fecha Entrega', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_txt_fecha_entrega" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_entrega')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recepcion_agrupacion_txt_fecha_entrega' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_recepcion_agrupacion_txt_fecha_entrega' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_recepcion_agrupacion->getFechaEntrega()), true) ?>' size='40' />
					<input type='button' id='cal_pde_recepcion_agrupacion_txt_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_recepcion_agrupacion_txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_pde_recepcion_agrupacion_txt_fecha_entrega'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_entrega')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recepcion_agrupacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recepcion_agrupacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recepcion_agrupacion_txa_observacion' rows='10' cols='50' id='pde_recepcion_agrupacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recepcion_agrupacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recepcion_agrupacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recepcion_agrupacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recepcion_agrupacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recepcion_agrupacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recepcion_agrupacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recepcion_agrupacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recepcion_agrupacion'/>
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

