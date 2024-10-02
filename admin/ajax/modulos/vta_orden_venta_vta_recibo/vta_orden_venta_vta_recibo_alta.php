<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_VTA_RECIBO_ALTA')){
    echo "No tiene asignada la credencial VTA_ORDEN_VENTA_VTA_RECIBO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_orden_venta_vta_recibo';
$db_nombre_pagina = 'vta_orden_venta_vta_recibo_alta';

$vta_orden_venta_vta_recibo = new VtaOrdenVentaVtaRecibo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_orden_venta_vta_recibo = new VtaOrdenVentaVtaRecibo();
	if(trim($hdn_id) != '') $vta_orden_venta_vta_recibo->setId($hdn_id, false);
	$vta_orden_venta_vta_recibo->setDescripcion(Gral::getVars(1, "vta_orden_venta_vta_recibo_txt_descripcion"));
	$vta_orden_venta_vta_recibo->setVtaOrdenVentaId(Gral::getVars(1, "vta_orden_venta_vta_recibo_cmb_vta_orden_venta_id", null));
	$vta_orden_venta_vta_recibo->setVtaReciboId(Gral::getVars(1, "vta_orden_venta_vta_recibo_cmb_vta_recibo_id", null));
	$vta_orden_venta_vta_recibo->setImporteAfectado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_orden_venta_vta_recibo_txt_importe_afectado", 0)));
	$vta_orden_venta_vta_recibo->setCodigo(Gral::getVars(1, "vta_orden_venta_vta_recibo_txt_codigo"));
	$vta_orden_venta_vta_recibo->setObservacion(Gral::getVars(1, "vta_orden_venta_vta_recibo_txa_observacion"));
	$vta_orden_venta_vta_recibo->setOrden(Gral::getVars(1, "vta_orden_venta_vta_recibo_txt_orden", 0));
	$vta_orden_venta_vta_recibo->setEstado(Gral::getVars(1, "vta_orden_venta_vta_recibo_cmb_estado", 0));
	$vta_orden_venta_vta_recibo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_orden_venta_vta_recibo_txt_creado")));
	$vta_orden_venta_vta_recibo->setCreadoPor(Gral::getVars(1, "vta_orden_venta_vta_recibo__creado_por", 0));
	$vta_orden_venta_vta_recibo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_orden_venta_vta_recibo_txt_modificado")));
	$vta_orden_venta_vta_recibo->setModificadoPor(Gral::getVars(1, "vta_orden_venta_vta_recibo__modificado_por", 0));

	$vta_orden_venta_vta_recibo_estado = new VtaOrdenVentaVtaRecibo();
	if(trim($hdn_id) != ''){
		$vta_orden_venta_vta_recibo_estado->setId($hdn_id);
		$vta_orden_venta_vta_recibo->setEstado($vta_orden_venta_vta_recibo_estado->getEstado());
				
	}else{
		$vta_orden_venta_vta_recibo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_orden_venta_vta_recibo->control();
			if(!$error->getExisteError()){
				$vta_orden_venta_vta_recibo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_orden_venta_vta_recibo_alta.php?cs=1&id='.$vta_orden_venta_vta_recibo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_orden_venta_vta_recibo->control();
			if(!$error->getExisteError()){
				$vta_orden_venta_vta_recibo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_orden_venta_vta_recibo_alta.php?cs=1');
				$vta_orden_venta_vta_recibo = new VtaOrdenVentaVtaRecibo();
			}
		break;
	}
	Gral::setSes('VtaOrdenVentaVtaRecibo_ULTIMO_INSERTADO', $vta_orden_venta_vta_recibo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_orden_venta_vta_recibo_id = Gral::getVars(2, $prefijo.'cmb_vta_orden_venta_vta_recibo_id', 0);
	if($cmb_vta_orden_venta_vta_recibo_id != 0){
		$vta_orden_venta_vta_recibo = VtaOrdenVentaVtaRecibo::getOxId($cmb_vta_orden_venta_vta_recibo_id);
	}else{
	
	$vta_orden_venta_vta_recibo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_orden_venta_vta_recibo->setVtaOrdenVentaId(Gral::getVars(2, "vta_orden_venta_id", 'null'));
	$vta_orden_venta_vta_recibo->setVtaReciboId(Gral::getVars(2, "vta_recibo_id", 'null'));
	$vta_orden_venta_vta_recibo->setImporteAfectado(Gral::getVars(2, "importe_afectado", 0));
	$vta_orden_venta_vta_recibo->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_orden_venta_vta_recibo->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_orden_venta_vta_recibo->setOrden(Gral::getVars(2, "orden", 0));
	$vta_orden_venta_vta_recibo->setEstado(Gral::getVars(2, "estado", 0));
	$vta_orden_venta_vta_recibo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_orden_venta_vta_recibo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_orden_venta_vta_recibo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_orden_venta_vta_recibo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_orden_venta_vta_recibo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_orden_venta_vta_recibo/vta_orden_venta_vta_recibo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_orden_venta_vta_recibo' width='90%'>
        
				<tr>
				  <td  id="label_vta_orden_venta_vta_recibo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_vta_recibo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_vta_recibo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_vta_recibo_txt_descripcion' value='<?php Gral::_echoTxt($vta_orden_venta_vta_recibo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_vta_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_vta_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_vta_recibo_cmb_vta_orden_venta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_id' ?>" >
				  
                                        <?php Lang::_lang('VtaOrdenVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_vta_recibo_cmb_vta_orden_venta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_vta_recibo_cmb_vta_orden_venta_id', Gral::getCmbFiltro(VtaOrdenVenta::getVtaOrdenVentasCmb(), '...'), $vta_orden_venta_vta_recibo->getVtaOrdenVentaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_VTA_RECIBO_ALTA_CMB_EDIT_VTA_ORDEN_VENTA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_vta_recibo_cmb_vta_orden_venta_id" clase_id="vta_orden_venta" prefijo='vta_orden_venta_vta_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_id" <?php echo ($vta_orden_venta_vta_recibo->getVtaOrdenVentaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_vta_recibo_cmb_vta_orden_venta_id" clase_id="vta_orden_venta" prefijo='vta_orden_venta_vta_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_vta_recibo_cmb_vta_orden_venta_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_vta_recibo_alta_vta_orden_venta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_vta_recibo_alta_vta_orden_venta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_vta_orden_venta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_vta_orden_venta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_vta_recibo_cmb_vta_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('VtaRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_vta_recibo_cmb_vta_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_orden_venta_vta_recibo_cmb_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), $vta_orden_venta_vta_recibo->getVtaReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_VTA_RECIBO_ALTA_CMB_EDIT_VTA_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_orden_venta_vta_recibo_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='vta_orden_venta_vta_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_id" <?php echo ($vta_orden_venta_vta_recibo->getVtaReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_orden_venta_vta_recibo_cmb_vta_recibo_id" clase_id="vta_recibo" prefijo='vta_orden_venta_vta_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_orden_venta_vta_recibo_cmb_vta_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_orden_venta_vta_recibo_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_vta_recibo_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_vta_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_vta_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_vta_recibo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_vta_recibo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_orden_venta_vta_recibo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_orden_venta_vta_recibo_txt_codigo' value='<?php Gral::_echoTxt($vta_orden_venta_vta_recibo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_orden_venta_vta_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_vta_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_orden_venta_vta_recibo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_orden_venta_vta_recibo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_orden_venta_vta_recibo_txa_observacion' rows='10' cols='50' id='vta_orden_venta_vta_recibo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_orden_venta_vta_recibo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_orden_venta_vta_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_orden_venta_vta_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_orden_venta_vta_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_orden_venta_vta_recibo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_orden_venta_vta_recibo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_orden_venta_vta_recibo'/>
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

