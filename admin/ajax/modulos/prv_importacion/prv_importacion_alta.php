<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA')){
    echo "No tiene asignada la credencial PRV_IMPORTACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_importacion';
$db_nombre_pagina = 'prv_importacion_alta';

$prv_importacion = new PrvImportacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_importacion = new PrvImportacion();
	if(trim($hdn_id) != '') $prv_importacion->setId($hdn_id, false);
	$prv_importacion->setDescripcion(Gral::getVars(1, "prv_importacion_txt_descripcion"));
	$prv_importacion->setCodigo(Gral::getVars(1, "prv_importacion_txt_codigo"));
	$prv_importacion->setPrvImportacionTipoEstadoId(Gral::getVars(1, "prv_importacion_cmb_prv_importacion_tipo_estado_id", null));
	$prv_importacion->setPrvProveedorId(Gral::getVars(1, "prv_importacion_cmb_prv_proveedor_id", null));
	$prv_importacion->setInsMarcaId(Gral::getVars(1, "prv_importacion_cmb_ins_marca_id", null));
	$prv_importacion->setInsMarcaPieza(Gral::getVars(1, "prv_importacion_cmb_ins_marca_pieza", null));
	$prv_importacion->setPrvConvenioDescuentoId(Gral::getVars(1, "prv_importacion_cmb_prv_convenio_descuento_id", null));
	$prv_importacion->setDescuento(Gral::getVars(1, "prv_importacion_txt_descuento", 0));
	$prv_importacion->setCantidadTab1(Gral::getVars(1, "prv_importacion_txt_cantidad_tab1", 0));
	$prv_importacion->setCantidadTab2(Gral::getVars(1, "prv_importacion_txt_cantidad_tab2", 0));
	$prv_importacion->setCantidadTab3(Gral::getVars(1, "prv_importacion_txt_cantidad_tab3", 0));
	$prv_importacion->setCantidadTab4(Gral::getVars(1, "prv_importacion_txt_cantidad_tab4", 0));
	$prv_importacion->setSeleccionarTodos(Gral::getVars(1, "prv_importacion_cmb_seleccionar_todos", 0));
	$prv_importacion->setSeleccionarTodosDescripcion(Gral::getVars(1, "prv_importacion_cmb_seleccionar_todos_descripcion", 0));
	$prv_importacion->setObservacion(Gral::getVars(1, "prv_importacion_txa_observacion"));
	$prv_importacion->setOrden(Gral::getVars(1, "prv_importacion_txt_orden", 0));
	$prv_importacion->setEstado(Gral::getVars(1, "prv_importacion__estado", 0));
	$prv_importacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_importacion_txt_creado")));
	$prv_importacion->setCreadoPor(Gral::getVars(1, "prv_importacion__creado_por", null));
	$prv_importacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_importacion_txt_modificado")));
	$prv_importacion->setModificadoPor(Gral::getVars(1, "prv_importacion__modificado_por", null));

	$prv_importacion_estado = new PrvImportacion();
	if(trim($hdn_id) != ''){
		$prv_importacion_estado->setId($hdn_id);
		$prv_importacion->setEstado($prv_importacion_estado->getEstado());
				
	}else{
		$prv_importacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prv_importacion->control();
			if(!$error->getExisteError()){
				$prv_importacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_importacion_alta.php?cs=1&id='.$prv_importacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_importacion->control();
			if(!$error->getExisteError()){
				$prv_importacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_importacion_alta.php?cs=1');
				$prv_importacion = new PrvImportacion();
			}
		break;
	}
	Gral::setSes('PrvImportacion_ULTIMO_INSERTADO', $prv_importacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_importacion_id = Gral::getVars(2, $prefijo.'cmb_prv_importacion_id', 0);
	if($cmb_prv_importacion_id != 0){
		$prv_importacion = PrvImportacion::getOxId($cmb_prv_importacion_id);
	}else{
	
	$prv_importacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prv_importacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$prv_importacion->setPrvImportacionTipoEstadoId(Gral::getVars(2, "prv_importacion_tipo_estado_id", 'null'));
	$prv_importacion->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$prv_importacion->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
	$prv_importacion->setInsMarcaPieza(Gral::getVars(2, "ins_marca_pieza", 'null'));
	$prv_importacion->setPrvConvenioDescuentoId(Gral::getVars(2, "prv_convenio_descuento_id", 'null'));
	$prv_importacion->setDescuento(Gral::getVars(2, "descuento", 0));
	$prv_importacion->setCantidadTab1(Gral::getVars(2, "cantidad_tab1", 0));
	$prv_importacion->setCantidadTab2(Gral::getVars(2, "cantidad_tab2", 0));
	$prv_importacion->setCantidadTab3(Gral::getVars(2, "cantidad_tab3", 0));
	$prv_importacion->setCantidadTab4(Gral::getVars(2, "cantidad_tab4", 0));
	$prv_importacion->setSeleccionarTodos(Gral::getVars(2, "seleccionar_todos", 0));
	$prv_importacion->setSeleccionarTodosDescripcion(Gral::getVars(2, "seleccionar_todos_descripcion", 0));
	$prv_importacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$prv_importacion->setOrden(Gral::getVars(2, "orden", 0));
	$prv_importacion->setEstado(Gral::getVars(2, "estado", 0));
	$prv_importacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_importacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prv_importacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prv_importacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_importacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_importacion/prv_importacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_importacion' width='90%'>
        
				<tr>
				  <td  id="label_prv_importacion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_importacion_txt_descripcion' value='<?php Gral::_echoTxt($prv_importacion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prv_importacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_importacion_txt_codigo' value='<?php Gral::_echoTxt($prv_importacion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_importacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_cmb_prv_importacion_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_importacion_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('Estado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_cmb_prv_importacion_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_importacion_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_cmb_prv_importacion_tipo_estado_id', Gral::getCmbFiltro(PrvImportacionTipoEstado::getPrvImportacionTipoEstadosCmb(), '...'), $prv_importacion->getPrvImportacionTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA_CMB_EDIT_PRV_IMPORTACION_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_importacion_cmb_prv_importacion_tipo_estado_id" clase_id="prv_importacion_tipo_estado" prefijo='prv_importacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_importacion_tipo_estado_id" <?php echo ($prv_importacion->getPrvImportacionTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_importacion_cmb_prv_importacion_tipo_estado_id" clase_id="prv_importacion_tipo_estado" prefijo='prv_importacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_importacion_cmb_prv_importacion_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_importacion_alta_prv_importacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_prv_importacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_prv_importacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_prv_importacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_importacion_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $prv_importacion->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_importacion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_importacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($prv_importacion->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_importacion_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_importacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_importacion_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_importacion_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_cmb_ins_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_id' ?>" >
				  
                                        <?php Lang::_lang('InsMarca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_cmb_ins_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $prv_importacion->getInsMarcaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA_CMB_EDIT_INS_MARCA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_importacion_cmb_ins_marca_id" clase_id="ins_marca" prefijo='prv_importacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($prv_importacion->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_importacion_cmb_ins_marca_id" clase_id="ins_marca" prefijo='prv_importacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_importacion_cmb_ins_marca_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_importacion_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_cmb_ins_marca_pieza" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_pieza' ?>" >
				  
                                        <?php Lang::_lang('Marca Pieza', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_cmb_ins_marca_pieza" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_pieza')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_cmb_ins_marca_pieza', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $prv_importacion->getInsMarcaPieza(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_prv_importacion_alta_ins_marca_pieza', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_ins_marca_pieza', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_ins_marca_pieza', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_ins_marca_pieza', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_pieza')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_cmb_prv_convenio_descuento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_convenio_descuento_id' ?>" >
				  
                                        <?php Lang::_lang('PrvConvenioDescuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_cmb_prv_convenio_descuento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_convenio_descuento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_cmb_prv_convenio_descuento_id', Gral::getCmbFiltro(PrvConvenioDescuento::getPrvConvenioDescuentosCmb(), '...'), $prv_importacion->getPrvConvenioDescuentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA_CMB_EDIT_PRV_CONVENIO_DESCUENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_importacion_cmb_prv_convenio_descuento_id" clase_id="prv_convenio_descuento" prefijo='prv_importacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_convenio_descuento_id" <?php echo ($prv_importacion->getPrvConvenioDescuentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_importacion_cmb_prv_convenio_descuento_id" clase_id="prv_convenio_descuento" prefijo='prv_importacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_importacion_cmb_prv_convenio_descuento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_importacion_alta_prv_convenio_descuento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_prv_convenio_descuento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_prv_convenio_descuento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_prv_convenio_descuento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_convenio_descuento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_txt_descuento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descuento' ?>" >
				  
                                        <?php Lang::_lang('Descuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txt_descuento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descuento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_txt_descuento' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_importacion_txt_descuento' value='<?php Gral::_echoTxt($prv_importacion->getDescuento(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_importacion_alta_descuento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_descuento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_descuento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_descuento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descuento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_txt_cantidad_tab1" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_tab1' ?>" >
				  
                                        <?php Lang::_lang('Cant Tab 1', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txt_cantidad_tab1" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_tab1')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_txt_cantidad_tab1' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prv_importacion_txt_cantidad_tab1' value='<?php Gral::_echoTxt($prv_importacion->getCantidadTab1(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_importacion_alta_cantidad_tab1', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_cantidad_tab1', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_cantidad_tab1', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_cantidad_tab1', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_tab1')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_txt_cantidad_tab2" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_tab2' ?>" >
				  
                                        <?php Lang::_lang('Cant Tab 2', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txt_cantidad_tab2" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_tab2')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_txt_cantidad_tab2' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prv_importacion_txt_cantidad_tab2' value='<?php Gral::_echoTxt($prv_importacion->getCantidadTab2(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_importacion_alta_cantidad_tab2', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_cantidad_tab2', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_cantidad_tab2', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_cantidad_tab2', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_tab2')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_txt_cantidad_tab3" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_tab3' ?>" >
				  
                                        <?php Lang::_lang('Cant Tab 3', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txt_cantidad_tab3" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_tab3')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_txt_cantidad_tab3' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prv_importacion_txt_cantidad_tab3' value='<?php Gral::_echoTxt($prv_importacion->getCantidadTab3(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_importacion_alta_cantidad_tab3', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_cantidad_tab3', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_cantidad_tab3', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_cantidad_tab3', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_tab3')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_txt_cantidad_tab4" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_tab4' ?>" >
				  
                                        <?php Lang::_lang('Cant Tab 4', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txt_cantidad_tab4" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_tab4')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_importacion_txt_cantidad_tab4' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='prv_importacion_txt_cantidad_tab4' value='<?php Gral::_echoTxt($prv_importacion->getCantidadTab4(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_importacion_alta_cantidad_tab4', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_cantidad_tab4', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_cantidad_tab4', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_cantidad_tab4', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_tab4')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_cmb_seleccionar_todos" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_seleccionar_todos' ?>" >
				  
                                        <?php Lang::_lang('Sel Todos', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_cmb_seleccionar_todos" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('seleccionar_todos')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_cmb_seleccionar_todos', GralSiNo::getGralSiNosCmb(), $prv_importacion->getSeleccionarTodos(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_prv_importacion_alta_seleccionar_todos', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_seleccionar_todos', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_seleccionar_todos', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_seleccionar_todos', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('seleccionar_todos')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_cmb_seleccionar_todos_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_seleccionar_todos_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Sel Todos Desc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_cmb_seleccionar_todos_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('seleccionar_todos_descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_importacion_cmb_seleccionar_todos_descripcion', GralSiNo::getGralSiNosCmb(), $prv_importacion->getSeleccionarTodosDescripcion(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_prv_importacion_alta_seleccionar_todos_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_seleccionar_todos_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_seleccionar_todos_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_seleccionar_todos_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('seleccionar_todos_descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_importacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_importacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_importacion_txa_observacion' rows='10' cols='50' id='prv_importacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_importacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_importacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_importacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_importacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_importacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_importacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_importacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_importacion'/>
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

