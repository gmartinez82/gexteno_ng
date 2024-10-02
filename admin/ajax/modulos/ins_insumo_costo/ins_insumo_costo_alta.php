<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_COSTO_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_COSTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo_costo';
$db_nombre_pagina = 'ins_insumo_costo_alta';

$ins_insumo_costo = new InsInsumoCosto();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo_costo = new InsInsumoCosto();
	if(trim($hdn_id) != '') $ins_insumo_costo->setId($hdn_id, false);
	$ins_insumo_costo->setInsInsumoId(Gral::getVars(1, "ins_insumo_costo_dbsug_ins_insumo_id", null));
	$ins_insumo_costo->setPrvProveedorId(Gral::getVars(1, "ins_insumo_costo_cmb_prv_proveedor_id", null));
	$ins_insumo_costo->setDescripcion(Gral::getVars(1, "ins_insumo_costo_txt_descripcion"));
	$ins_insumo_costo->setCodigo(Gral::getVars(1, "ins_insumo_costo_txt_codigo"));
	$ins_insumo_costo->setFecha(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_costo_txt_fecha")));
	$ins_insumo_costo->setCosto(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "ins_insumo_costo_txt_costo", 0)));
	$ins_insumo_costo->setInicial(Gral::getVars(1, "ins_insumo_costo_cmb_inicial", 0));
	$ins_insumo_costo->setActual(Gral::getVars(1, "ins_insumo_costo_cmb_actual", 0));
	$ins_insumo_costo->setPrvImportacionId(Gral::getVars(1, "ins_insumo_costo_dbsug_prv_importacion_id", null));
	$ins_insumo_costo->setInsStockTransformacionId(Gral::getVars(1, "ins_insumo_costo_dbsug_ins_stock_transformacion_id", null));
	$ins_insumo_costo->setObservacion(Gral::getVars(1, "ins_insumo_costo_txa_observacion"));
	$ins_insumo_costo->setOrden(Gral::getVars(1, "ins_insumo_costo_txt_orden", 0));
	$ins_insumo_costo->setEstado(Gral::getVars(1, "ins_insumo_costo__estado", 0));
	$ins_insumo_costo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_costo_txt_creado")));
	$ins_insumo_costo->setCreadoPor(Gral::getVars(1, "ins_insumo_costo__creado_por", null));
	$ins_insumo_costo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_costo_txt_modificado")));
	$ins_insumo_costo->setModificadoPor(Gral::getVars(1, "ins_insumo_costo__modificado_por", null));

	$ins_insumo_costo_estado = new InsInsumoCosto();
	if(trim($hdn_id) != ''){
		$ins_insumo_costo_estado->setId($hdn_id);
		$ins_insumo_costo->setEstado($ins_insumo_costo_estado->getEstado());
				
	}else{
		$ins_insumo_costo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_costo->control();
			if(!$error->getExisteError()){
				$ins_insumo_costo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_costo_alta.php?cs=1&id='.$ins_insumo_costo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_costo->control();
			if(!$error->getExisteError()){
				$ins_insumo_costo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_costo_alta.php?cs=1');
				$ins_insumo_costo = new InsInsumoCosto();
			}
		break;
	}
	Gral::setSes('InsInsumoCosto_ULTIMO_INSERTADO', $ins_insumo_costo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_costo_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_costo_id', 0);
	if($cmb_ins_insumo_costo_id != 0){
		$ins_insumo_costo = InsInsumoCosto::getOxId($cmb_ins_insumo_costo_id);
	}else{
	
	$ins_insumo_costo->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_costo->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$ins_insumo_costo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_insumo_costo->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_insumo_costo->setFecha(Gral::getVars(2, "fecha", date('Y-m-d H:m:s')));
	$ins_insumo_costo->setCosto(Gral::getVars(2, "costo", 0));
	$ins_insumo_costo->setInicial(Gral::getVars(2, "inicial", 0));
	$ins_insumo_costo->setActual(Gral::getVars(2, "actual", 0));
	$ins_insumo_costo->setPrvImportacionId(Gral::getVars(2, "prv_importacion_id", 'null'));
	$ins_insumo_costo->setInsStockTransformacionId(Gral::getVars(2, "ins_stock_transformacion_id", 'null'));
	$ins_insumo_costo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_insumo_costo->setOrden(Gral::getVars(2, "orden", 0));
	$ins_insumo_costo->setEstado(Gral::getVars(2, "estado", 0));
	$ins_insumo_costo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_costo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_costo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_costo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo_costo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_costo/ins_insumo_costo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_costo' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_costo_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_costo_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_costo->getInsInsumoId(), $ins_insumo_costo->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_costo_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $ins_insumo_costo->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_COSTO_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_costo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='ins_insumo_costo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($ins_insumo_costo->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_costo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='ins_insumo_costo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_costo_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_costo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_costo_txt_descripcion' value='<?php Gral::_echoTxt($ins_insumo_costo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_costo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_costo_txt_codigo' value='<?php Gral::_echoTxt($ins_insumo_costo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_costo_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='ins_insumo_costo_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($ins_insumo_costo->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_ins_insumo_costo_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'ins_insumo_costo_txt_fecha', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_ins_insumo_costo_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_txt_costo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_costo' ?>" >
				  
                                        <?php Lang::_lang('Costo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_txt_costo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('costo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_costo_txt_costo' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='ins_insumo_costo_txt_costo' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($ins_insumo_costo->getCosto()), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_costo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_costo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_costo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_costo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('costo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_costo_cmb_inicial', GralSiNo::getGralSiNosCmb(), $ins_insumo_costo->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_costo_cmb_actual', GralSiNo::getGralSiNosCmb(), $ins_insumo_costo->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_dbsug_prv_importacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_importacion_id' ?>" >
				  
                                        <?php Lang::_lang('PrvImportacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_dbsug_prv_importacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_importacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_costo_dbsug_prv_importacion', 'ajax/modulos/prv_importacion/prv_importacion_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_costo->getPrvImportacionId(), $ins_insumo_costo->getPrvImportacion()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_prv_importacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_prv_importacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_prv_importacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_prv_importacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_importacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_dbsug_ins_stock_transformacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_stock_transformacion_id' ?>" >
				  
                                        <?php Lang::_lang('InsStockTransformacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_dbsug_ins_stock_transformacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_stock_transformacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_costo_dbsug_ins_stock_transformacion', 'ajax/modulos/ins_stock_transformacion/ins_stock_transformacion_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_costo->getInsStockTransformacionId(), $ins_insumo_costo->getInsStockTransformacion()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_ins_stock_transformacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_ins_stock_transformacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_ins_stock_transformacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_ins_stock_transformacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_stock_transformacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_costo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_costo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_costo_txa_observacion' rows='10' cols='50' id='ins_insumo_costo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo_costo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_insumo_costo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_costo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_costo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_costo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_costo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_costo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_costo'/>
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

