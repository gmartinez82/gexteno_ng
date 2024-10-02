<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CONCILIADO_ALTA')){
    echo "No tiene asignada la credencial VTA_RECIBO_ITEM_CONCILIADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_recibo_item_conciliado';
$db_nombre_pagina = 'vta_recibo_item_conciliado_alta';

$vta_recibo_item_conciliado = new VtaReciboItemConciliado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_recibo_item_conciliado = new VtaReciboItemConciliado();
	if(trim($hdn_id) != '') $vta_recibo_item_conciliado->setId($hdn_id, false);
	$vta_recibo_item_conciliado->setDescripcion(Gral::getVars(1, "vta_recibo_item_conciliado_txt_descripcion"));
	$vta_recibo_item_conciliado->setVtaReciboItemId(Gral::getVars(1, "vta_recibo_item_conciliado_cmb_vta_recibo_item_id", null));
	$vta_recibo_item_conciliado->setImporteOriginal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_recibo_item_conciliado_txt_importe_original", 0)));
	$vta_recibo_item_conciliado->setImporteConciliado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_recibo_item_conciliado_txt_importe_conciliado", 0)));
	$vta_recibo_item_conciliado->setImporteDiferencia(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "vta_recibo_item_conciliado_txt_importe_diferencia", 0)));
	$vta_recibo_item_conciliado->setFecha(Gral::getFechaToDb(Gral::getVars(1, "vta_recibo_item_conciliado_txt_fecha")));
	$vta_recibo_item_conciliado->setCodigo(Gral::getVars(1, "vta_recibo_item_conciliado_txt_codigo"));
	$vta_recibo_item_conciliado->setObservacion(Gral::getVars(1, "vta_recibo_item_conciliado_txa_observacion"));
	$vta_recibo_item_conciliado->setOrden(Gral::getVars(1, "vta_recibo_item_conciliado_txt_orden", 0));
	$vta_recibo_item_conciliado->setEstado(Gral::getVars(1, "vta_recibo_item_conciliado_cmb_estado", 0));
	$vta_recibo_item_conciliado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_item_conciliado_txt_creado")));
	$vta_recibo_item_conciliado->setCreadoPor(Gral::getVars(1, "vta_recibo_item_conciliado__creado_por", 0));
	$vta_recibo_item_conciliado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_recibo_item_conciliado_txt_modificado")));
	$vta_recibo_item_conciliado->setModificadoPor(Gral::getVars(1, "vta_recibo_item_conciliado__modificado_por", 0));

	$vta_recibo_item_conciliado_estado = new VtaReciboItemConciliado();
	if(trim($hdn_id) != ''){
		$vta_recibo_item_conciliado_estado->setId($hdn_id);
		$vta_recibo_item_conciliado->setEstado($vta_recibo_item_conciliado_estado->getEstado());
				
	}else{
		$vta_recibo_item_conciliado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_recibo_item_conciliado->control();
			if(!$error->getExisteError()){
				$vta_recibo_item_conciliado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_recibo_item_conciliado_alta.php?cs=1&id='.$vta_recibo_item_conciliado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_recibo_item_conciliado->control();
			if(!$error->getExisteError()){
				$vta_recibo_item_conciliado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_recibo_item_conciliado_alta.php?cs=1');
				$vta_recibo_item_conciliado = new VtaReciboItemConciliado();
			}
		break;
	}
	Gral::setSes('VtaReciboItemConciliado_ULTIMO_INSERTADO', $vta_recibo_item_conciliado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_recibo_item_conciliado_id = Gral::getVars(2, $prefijo.'cmb_vta_recibo_item_conciliado_id', 0);
	if($cmb_vta_recibo_item_conciliado_id != 0){
		$vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($cmb_vta_recibo_item_conciliado_id);
	}else{
	
	$vta_recibo_item_conciliado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_recibo_item_conciliado->setVtaReciboItemId(Gral::getVars(2, "vta_recibo_item_id", 'null'));
	$vta_recibo_item_conciliado->setImporteOriginal(Gral::getVars(2, "importe_original", 0));
	$vta_recibo_item_conciliado->setImporteConciliado(Gral::getVars(2, "importe_conciliado", 0));
	$vta_recibo_item_conciliado->setImporteDiferencia(Gral::getVars(2, "importe_diferencia", 0));
	$vta_recibo_item_conciliado->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$vta_recibo_item_conciliado->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_recibo_item_conciliado->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_recibo_item_conciliado->setOrden(Gral::getVars(2, "orden", 0));
	$vta_recibo_item_conciliado->setEstado(Gral::getVars(2, "estado", 0));
	$vta_recibo_item_conciliado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_recibo_item_conciliado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_recibo_item_conciliado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_recibo_item_conciliado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_recibo_item_conciliado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_recibo_item_conciliado/vta_recibo_item_conciliado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_recibo_item_conciliado' width='90%'>
        
				<tr>
				  <td  id="label_vta_recibo_item_conciliado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_conciliado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_conciliado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_conciliado_txt_descripcion' value='<?php Gral::_echoTxt($vta_recibo_item_conciliado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_conciliado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_conciliado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_conciliado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_conciliado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_conciliado_cmb_vta_recibo_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_recibo_item_id' ?>" >
				  
                                        <?php Lang::_lang('VtaReciboItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_conciliado_cmb_vta_recibo_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_recibo_item_conciliado_cmb_vta_recibo_item_id', Gral::getCmbFiltro(VtaReciboItem::getVtaReciboItemsCmb(), '...'), $vta_recibo_item_conciliado->getVtaReciboItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CONCILIADO_ALTA_CMB_EDIT_VTA_RECIBO_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_recibo_item_conciliado_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='vta_recibo_item_conciliado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_recibo_item_id" <?php echo ($vta_recibo_item_conciliado->getVtaReciboItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_recibo_item_conciliado_cmb_vta_recibo_item_id" clase_id="vta_recibo_item" prefijo='vta_recibo_item_conciliado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_recibo_item_conciliado_cmb_vta_recibo_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_conciliado_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_conciliado_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_conciliado_alta_vta_recibo_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_conciliado_alta_vta_recibo_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_recibo_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_conciliado_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_conciliado_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_conciliado_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_recibo_item_conciliado_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_recibo_item_conciliado->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_vta_recibo_item_conciliado_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_recibo_item_conciliado_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_vta_recibo_item_conciliado_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_recibo_item_conciliado_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_conciliado_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_conciliado_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_conciliado_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_conciliado_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_conciliado_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_recibo_item_conciliado_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_recibo_item_conciliado_txt_codigo' value='<?php Gral::_echoTxt($vta_recibo_item_conciliado->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_recibo_item_conciliado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_conciliado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_conciliado_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_conciliado_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_recibo_item_conciliado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_recibo_item_conciliado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_recibo_item_conciliado_txa_observacion' rows='10' cols='50' id='vta_recibo_item_conciliado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_recibo_item_conciliado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_recibo_item_conciliado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_recibo_item_conciliado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_recibo_item_conciliado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_recibo_item_conciliado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_recibo_item_conciliado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_recibo_item_conciliado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_recibo_item_conciliado'/>
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

