<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_INSUMO_ALTA')){
    echo "No tiene asignada la credencial PRV_INSUMO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_insumo';
$db_nombre_pagina = 'prv_insumo_alta';

$prv_insumo = new PrvInsumo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_insumo = new PrvInsumo();
	if(trim($hdn_id) != '') $prv_insumo->setId($hdn_id, false);
	$prv_insumo->setDescripcion(Gral::getVars(1, "prv_insumo_txt_descripcion"));
	$prv_insumo->setInsInsumoId(Gral::getVars(1, "prv_insumo_dbsug_ins_insumo_id", null));
	$prv_insumo->setPrvProveedorId(Gral::getVars(1, "prv_insumo_cmb_prv_proveedor_id", null));
	$prv_insumo->setCodigoProveedor(Gral::getVars(1, "prv_insumo_txt_codigo_proveedor"));
	$prv_insumo->setInsMarcaId(Gral::getVars(1, "prv_insumo_cmb_ins_marca_id", null));
	$prv_insumo->setCodigoMarca(Gral::getVars(1, "prv_insumo_txt_codigo_marca"));
	$prv_insumo->setInsMatrizId(Gral::getVars(1, "prv_insumo_dbsug_ins_matriz_id", null));
	$prv_insumo->setInsMarcaPieza(Gral::getVars(1, "prv_insumo_cmb_ins_marca_pieza", null));
	$prv_insumo->setCodigoPieza(Gral::getVars(1, "prv_insumo_txt_codigo_pieza"));
	$prv_insumo->setCodigo(Gral::getVars(1, "prv_insumo_txt_codigo"));
	$prv_insumo->setFechaActualizacion(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_insumo_txt_fecha_actualizacion")));
	$prv_insumo->setReferencial(Gral::getVars(1, "prv_insumo_cmb_referencial", 0));
	$prv_insumo->setClaves(Gral::getVars(1, "prv_insumo_txa_claves"));
	$prv_insumo->setObservacion(Gral::getVars(1, "prv_insumo_txa_observacion"));
	$prv_insumo->setOrden(Gral::getVars(1, "prv_insumo_txt_orden", 0));
	$prv_insumo->setEstado(Gral::getVars(1, "prv_insumo__estado", 0));
	$prv_insumo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_insumo_txt_creado")));
	$prv_insumo->setCreadoPor(Gral::getVars(1, "prv_insumo__creado_por", 0));
	$prv_insumo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_insumo_txt_modificado")));
	$prv_insumo->setModificadoPor(Gral::getVars(1, "prv_insumo__modificado_por", 0));

	$prv_insumo_estado = new PrvInsumo();
	if(trim($hdn_id) != ''){
		$prv_insumo_estado->setId($hdn_id);
		$prv_insumo->setEstado($prv_insumo_estado->getEstado());
				
	}else{
		$prv_insumo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prv_insumo->control();
			if(!$error->getExisteError()){
				$prv_insumo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_insumo_alta.php?cs=1&id='.$prv_insumo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_insumo->control();
			if(!$error->getExisteError()){
				$prv_insumo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_insumo_alta.php?cs=1');
				$prv_insumo = new PrvInsumo();
			}
		break;
	}
	Gral::setSes('PrvInsumo_ULTIMO_INSERTADO', $prv_insumo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_insumo_id = Gral::getVars(2, $prefijo.'cmb_prv_insumo_id', 0);
	if($cmb_prv_insumo_id != 0){
		$prv_insumo = PrvInsumo::getOxId($cmb_prv_insumo_id);
	}else{
	
	$prv_insumo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prv_insumo->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$prv_insumo->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$prv_insumo->setCodigoProveedor(Gral::getVars(2, "codigo_proveedor", ''));
	$prv_insumo->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
	$prv_insumo->setCodigoMarca(Gral::getVars(2, "codigo_marca", ''));
	$prv_insumo->setInsMatrizId(Gral::getVars(2, "ins_matriz_id", 'null'));
	$prv_insumo->setInsMarcaPieza(Gral::getVars(2, "ins_marca_pieza", 'null'));
	$prv_insumo->setCodigoPieza(Gral::getVars(2, "codigo_pieza", ''));
	$prv_insumo->setCodigo(Gral::getVars(2, "codigo", ''));
	$prv_insumo->setFechaActualizacion(Gral::getVars(2, "fecha_actualizacion", date('Y-m-d H:m:s')));
	$prv_insumo->setReferencial(Gral::getVars(2, "referencial", 0));
	$prv_insumo->setClaves(Gral::getVars(2, "claves", ''));
	$prv_insumo->setObservacion(Gral::getVars(2, "observacion", ''));
	$prv_insumo->setOrden(Gral::getVars(2, "orden", 0));
	$prv_insumo->setEstado(Gral::getVars(2, "estado", 0));
	$prv_insumo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_insumo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prv_insumo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prv_insumo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_insumo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_insumo/prv_insumo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_insumo' width='90%'>
        
				<tr>
				  <td  id="label_prv_insumo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_txt_descripcion' value='<?php Gral::_echoTxt($prv_insumo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prv_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'prv_insumo_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $prv_insumo->getInsInsumoId(), $prv_insumo->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_prv_insumo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_insumo_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $prv_insumo->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_insumo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($prv_insumo->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_insumo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_insumo_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_insumo_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_txt_codigo_proveedor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_proveedor' ?>" >
				  
                                        <?php Lang::_lang('Cod Proveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_txt_codigo_proveedor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_proveedor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_txt_codigo_proveedor' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_txt_codigo_proveedor' value='<?php Gral::_echoTxt($prv_insumo->getCodigoProveedor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_alta_codigo_proveedor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_codigo_proveedor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_codigo_proveedor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_codigo_proveedor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_proveedor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_cmb_ins_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_id' ?>" >
				  
                                        <?php Lang::_lang('InsMarca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_cmb_ins_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_insumo_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $prv_insumo->getInsMarcaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_ALTA_CMB_EDIT_INS_MARCA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_insumo_cmb_ins_marca_id" clase_id="ins_marca" prefijo='prv_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($prv_insumo->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_insumo_cmb_ins_marca_id" clase_id="ins_marca" prefijo='prv_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_insumo_cmb_ins_marca_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_insumo_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_txt_codigo_marca" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_marca' ?>" >
				  
                                        <?php Lang::_lang('Cod Marca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_txt_codigo_marca" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_marca')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_txt_codigo_marca' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_txt_codigo_marca' value='<?php Gral::_echoTxt($prv_insumo->getCodigoMarca(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_alta_codigo_marca', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_codigo_marca', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_codigo_marca', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_codigo_marca', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_marca')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_dbsug_ins_matriz_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_matriz_id' ?>" >
				  
                                        <?php Lang::_lang('InsMatriz', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_dbsug_ins_matriz_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_matriz_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'prv_insumo_dbsug_ins_matriz', 'ajax/modulos/ins_matriz/ins_matriz_dbsuggest.php', false, true, '', 'Ingrese ...', $prv_insumo->getInsMatrizId(), $prv_insumo->getInsMatriz()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_prv_insumo_alta_ins_matriz_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_ins_matriz_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_ins_matriz_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_ins_matriz_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_matriz_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_cmb_ins_marca_pieza" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_pieza' ?>" >
				  
                                        <?php Lang::_lang('InsMarcaPieza', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_cmb_ins_marca_pieza" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_pieza')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_insumo_cmb_ins_marca_pieza', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $prv_insumo->getInsMarcaPieza(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_prv_insumo_alta_ins_marca_pieza', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_ins_marca_pieza', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_ins_marca_pieza', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_ins_marca_pieza', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_pieza')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_txt_codigo_pieza" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_pieza' ?>" >
				  
                                        <?php Lang::_lang('Cod Pieza', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_txt_codigo_pieza" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_pieza')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_txt_codigo_pieza' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_txt_codigo_pieza' value='<?php Gral::_echoTxt($prv_insumo->getCodigoPieza(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_alta_codigo_pieza', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_codigo_pieza', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_codigo_pieza', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_codigo_pieza', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_pieza')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_insumo_txt_codigo' value='<?php Gral::_echoTxt($prv_insumo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_insumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_txt_fecha_actualizacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_actualizacion' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_txt_fecha_actualizacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_actualizacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_insumo_txt_fecha_actualizacion' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='prv_insumo_txt_fecha_actualizacion' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($prv_insumo->getFechaActualizacion()), true) ?>' size='40' />
					<input type='button' id='cal_prv_insumo_txt_fecha_actualizacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'prv_insumo_txt_fecha_actualizacion', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_prv_insumo_txt_fecha_actualizacion'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_prv_insumo_alta_fecha_actualizacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_fecha_actualizacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_fecha_actualizacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_fecha_actualizacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_actualizacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_cmb_referencial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_referencial' ?>" >
				  
                                        <?php Lang::_lang('Referencial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_cmb_referencial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('referencial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_insumo_cmb_referencial', GralSiNo::getGralSiNosCmb(), $prv_insumo->getReferencial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_prv_insumo_alta_referencial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_referencial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_referencial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_referencial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('referencial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_insumo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_insumo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_insumo_txa_observacion' rows='10' cols='50' id='prv_insumo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_insumo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_insumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_insumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_insumo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_insumo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_insumo'/>
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

