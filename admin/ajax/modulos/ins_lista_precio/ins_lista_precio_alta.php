<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_LISTA_PRECIO_ALTA')){
    echo "No tiene asignada la credencial INS_LISTA_PRECIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_lista_precio';
$db_nombre_pagina = 'ins_lista_precio_alta';

$ins_lista_precio = new InsListaPrecio();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_lista_precio = new InsListaPrecio();
	if(trim($hdn_id) != '') $ins_lista_precio->setId($hdn_id, false);
	$ins_lista_precio->setInsInsumoId(Gral::getVars(1, "ins_lista_precio_dbsug_ins_insumo_id", null));
	$ins_lista_precio->setInsTipoListaPrecioId(Gral::getVars(1, "ins_lista_precio_cmb_ins_tipo_lista_precio_id", null));
	$ins_lista_precio->setImporteCalculado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "ins_lista_precio_txt_importe_calculado", 0)));
	$ins_lista_precio->setImporteManual(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "ins_lista_precio_txt_importe_manual", 0)));
	$ins_lista_precio->setImporteVenta(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "ins_lista_precio_txt_importe_venta", 0)));
	$ins_lista_precio->setPorcentajeIncremento(Gral::getVars(1, "ins_lista_precio_txt_porcentaje_incremento", 0));
	$ins_lista_precio->setPorcentajeDescuento(Gral::getVars(1, "ins_lista_precio_txt_porcentaje_descuento", 0));
	$ins_lista_precio->setPorcentajeDescuentoFijo(Gral::getVars(1, "ins_lista_precio_cmb_porcentaje_descuento_fijo", 0));
	$ins_lista_precio->setCantidadMinimaVenta(Gral::getVars(1, "ins_lista_precio_txt_cantidad_minima_venta", 0));
	$ins_lista_precio->setHabilitado(Gral::getVars(1, "ins_lista_precio_cmb_habilitado", 0));
	$ins_lista_precio->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_lista_precio_txt_creado")));
	$ins_lista_precio->setCreadoPor(Gral::getVars(1, "ins_lista_precio__creado_por", null));
	$ins_lista_precio->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_lista_precio_txt_modificado")));
	$ins_lista_precio->setModificadoPor(Gral::getVars(1, "ins_lista_precio__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $ins_lista_precio->control();
			if(!$error->getExisteError()){
				$ins_lista_precio->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_lista_precio_alta.php?cs=1&id='.$ins_lista_precio->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_lista_precio->control();
			if(!$error->getExisteError()){
				$ins_lista_precio->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_lista_precio_alta.php?cs=1');
				$ins_lista_precio = new InsListaPrecio();
			}
		break;
	}
	Gral::setSes('InsListaPrecio_ULTIMO_INSERTADO', $ins_lista_precio->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_lista_precio_id = Gral::getVars(2, $prefijo.'cmb_ins_lista_precio_id', 0);
	if($cmb_ins_lista_precio_id != 0){
		$ins_lista_precio = InsListaPrecio::getOxId($cmb_ins_lista_precio_id);
	}else{
	
	$ins_lista_precio->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_lista_precio->setInsTipoListaPrecioId(Gral::getVars(2, "ins_tipo_lista_precio_id", 'null'));
	$ins_lista_precio->setImporteCalculado(Gral::getVars(2, "importe_calculado", 0));
	$ins_lista_precio->setImporteManual(Gral::getVars(2, "importe_manual", 0));
	$ins_lista_precio->setImporteVenta(Gral::getVars(2, "importe_venta", 0));
	$ins_lista_precio->setPorcentajeIncremento(Gral::getVars(2, "porcentaje_incremento", 0));
	$ins_lista_precio->setPorcentajeDescuento(Gral::getVars(2, "porcentaje_descuento", 0));
	$ins_lista_precio->setPorcentajeDescuentoFijo(Gral::getVars(2, "porcentaje_descuento_fijo", 0));
	$ins_lista_precio->setCantidadMinimaVenta(Gral::getVars(2, "cantidad_minima_venta", 0));
	$ins_lista_precio->setHabilitado(Gral::getVars(2, "habilitado", 0));
	$ins_lista_precio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_lista_precio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_lista_precio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_lista_precio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_lista_precio->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_lista_precio/ins_lista_precio_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_lista_precio' width='90%'>
        
				<tr>
				  <td  id="label_ins_lista_precio_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_lista_precio_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_lista_precio->getInsInsumoId(), $ins_lista_precio->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_lista_precio_cmb_ins_tipo_lista_precio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id' ?>" >
				  
                                        <?php Lang::_lang('InsTipoListaPrecio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_cmb_ins_tipo_lista_precio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_lista_precio_cmb_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), $ins_lista_precio->getInsTipoListaPrecioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_LISTA_PRECIO_ALTA_CMB_EDIT_INS_TIPO_LISTA_PRECIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_lista_precio_cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='ins_lista_precio_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_tipo_lista_precio_id" <?php echo ($ins_lista_precio->getInsTipoListaPrecioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_lista_precio_cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='ins_lista_precio_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_lista_precio_cmb_ins_tipo_lista_precio_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_lista_precio_txt_importe_manual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_manual' ?>" >
				  
                                        <?php Lang::_lang('Imp Manual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_txt_importe_manual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_manual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_lista_precio_txt_importe_manual' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='ins_lista_precio_txt_importe_manual' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($ins_lista_precio->getImporteManual()), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_importe_manual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_importe_manual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_importe_manual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_importe_manual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_manual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_lista_precio_txt_porcentaje_incremento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_incremento' ?>" >
				  
                                        <?php Lang::_lang('Porc Increm', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_txt_porcentaje_incremento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_incremento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_lista_precio_txt_porcentaje_incremento' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_lista_precio_txt_porcentaje_incremento' value='<?php Gral::_echoTxt($ins_lista_precio->getPorcentajeIncremento(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_porcentaje_incremento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_porcentaje_incremento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_porcentaje_incremento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_porcentaje_incremento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_incremento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_lista_precio_txt_porcentaje_descuento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_descuento' ?>" >
				  
                                        <?php Lang::_lang('Porc Desc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_txt_porcentaje_descuento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_descuento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_lista_precio_txt_porcentaje_descuento' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_lista_precio_txt_porcentaje_descuento' value='<?php Gral::_echoTxt($ins_lista_precio->getPorcentajeDescuento(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_porcentaje_descuento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_porcentaje_descuento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_porcentaje_descuento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_porcentaje_descuento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_descuento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_lista_precio_cmb_porcentaje_descuento_fijo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_descuento_fijo' ?>" >
				  
                                        <?php Lang::_lang('Porc Increm Fijo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_cmb_porcentaje_descuento_fijo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_descuento_fijo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_lista_precio_cmb_porcentaje_descuento_fijo', GralSiNo::getGralSiNosCmb(), $ins_lista_precio->getPorcentajeDescuentoFijo(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_porcentaje_descuento_fijo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_porcentaje_descuento_fijo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_porcentaje_descuento_fijo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_porcentaje_descuento_fijo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_descuento_fijo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_lista_precio_txt_cantidad_minima_venta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_minima_venta' ?>" >
				  
                                        <?php Lang::_lang('Cantidad Minima Venta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_txt_cantidad_minima_venta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_minima_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_lista_precio_txt_cantidad_minima_venta' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_lista_precio_txt_cantidad_minima_venta' value='<?php Gral::_echoTxt($ins_lista_precio->getCantidadMinimaVenta(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_cantidad_minima_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_cantidad_minima_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_cantidad_minima_venta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_cantidad_minima_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_minima_venta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_lista_precio_cmb_habilitado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_habilitado' ?>" >
				  
                                        <?php Lang::_lang('Habilitado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_lista_precio_cmb_habilitado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('habilitado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_lista_precio_cmb_habilitado', GralSiNo::getGralSiNosCmb(), $ins_lista_precio->getHabilitado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_lista_precio_alta_habilitado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_lista_precio_alta_habilitado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_lista_precio_alta_habilitado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_lista_precio_alta_habilitado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('habilitado')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_lista_precio->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_lista_precio_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_lista_precio'/>
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

