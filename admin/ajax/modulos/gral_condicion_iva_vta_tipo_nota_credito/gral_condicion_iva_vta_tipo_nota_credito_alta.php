<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO_ALTA')){
    echo "No tiene asignada la credencial GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_condicion_iva_vta_tipo_nota_credito';
$db_nombre_pagina = 'gral_condicion_iva_vta_tipo_nota_credito_alta';

$gral_condicion_iva_vta_tipo_nota_credito = new GralCondicionIvaVtaTipoNotaCredito();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_condicion_iva_vta_tipo_nota_credito = new GralCondicionIvaVtaTipoNotaCredito();
	if(trim($hdn_id) != '') $gral_condicion_iva_vta_tipo_nota_credito->setId($hdn_id, false);
	$gral_condicion_iva_vta_tipo_nota_credito->setDescripcion(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_txt_descripcion"));
	$gral_condicion_iva_vta_tipo_nota_credito->setGralCondicionIvaId(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_cmb_gral_condicion_iva_id", null));
	$gral_condicion_iva_vta_tipo_nota_credito->setVtaTipoNotaCreditoId(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_cmb_vta_tipo_nota_credito_id", null));
	$gral_condicion_iva_vta_tipo_nota_credito->setCodigo(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_txt_codigo"));
	$gral_condicion_iva_vta_tipo_nota_credito->setObservacion(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_txa_observacion"));
	$gral_condicion_iva_vta_tipo_nota_credito->setOrden(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_txt_orden", 0));
	$gral_condicion_iva_vta_tipo_nota_credito->setEstado(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_cmb_estado", 0));
	$gral_condicion_iva_vta_tipo_nota_credito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_txt_creado")));
	$gral_condicion_iva_vta_tipo_nota_credito->setCreadoPor(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito__creado_por", 0));
	$gral_condicion_iva_vta_tipo_nota_credito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito_txt_modificado")));
	$gral_condicion_iva_vta_tipo_nota_credito->setModificadoPor(Gral::getVars(1, "gral_condicion_iva_vta_tipo_nota_credito__modificado_por", 0));

	$gral_condicion_iva_vta_tipo_nota_credito_estado = new GralCondicionIvaVtaTipoNotaCredito();
	if(trim($hdn_id) != ''){
		$gral_condicion_iva_vta_tipo_nota_credito_estado->setId($hdn_id);
		$gral_condicion_iva_vta_tipo_nota_credito->setEstado($gral_condicion_iva_vta_tipo_nota_credito_estado->getEstado());
				
	}else{
		$gral_condicion_iva_vta_tipo_nota_credito->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_condicion_iva_vta_tipo_nota_credito->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva_vta_tipo_nota_credito->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_condicion_iva_vta_tipo_nota_credito_alta.php?cs=1&id='.$gral_condicion_iva_vta_tipo_nota_credito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_condicion_iva_vta_tipo_nota_credito->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva_vta_tipo_nota_credito->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_condicion_iva_vta_tipo_nota_credito_alta.php?cs=1');
				$gral_condicion_iva_vta_tipo_nota_credito = new GralCondicionIvaVtaTipoNotaCredito();
			}
		break;
	}
	Gral::setSes('GralCondicionIvaVtaTipoNotaCredito_ULTIMO_INSERTADO', $gral_condicion_iva_vta_tipo_nota_credito->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_condicion_iva_vta_tipo_nota_credito_id = Gral::getVars(2, $prefijo.'cmb_gral_condicion_iva_vta_tipo_nota_credito_id', 0);
	if($cmb_gral_condicion_iva_vta_tipo_nota_credito_id != 0){
		$gral_condicion_iva_vta_tipo_nota_credito = GralCondicionIvaVtaTipoNotaCredito::getOxId($cmb_gral_condicion_iva_vta_tipo_nota_credito_id);
	}else{
	
	$gral_condicion_iva_vta_tipo_nota_credito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_condicion_iva_vta_tipo_nota_credito->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
	$gral_condicion_iva_vta_tipo_nota_credito->setVtaTipoNotaCreditoId(Gral::getVars(2, "vta_tipo_nota_credito_id", 'null'));
	$gral_condicion_iva_vta_tipo_nota_credito->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_condicion_iva_vta_tipo_nota_credito->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_condicion_iva_vta_tipo_nota_credito->setOrden(Gral::getVars(2, "orden", 0));
	$gral_condicion_iva_vta_tipo_nota_credito->setEstado(Gral::getVars(2, "estado", 0));
	$gral_condicion_iva_vta_tipo_nota_credito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_condicion_iva_vta_tipo_nota_credito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_condicion_iva_vta_tipo_nota_credito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_condicion_iva_vta_tipo_nota_credito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_condicion_iva_vta_tipo_nota_credito->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_condicion_iva_vta_tipo_nota_credito/gral_condicion_iva_vta_tipo_nota_credito_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_condicion_iva_vta_tipo_nota_credito' width='90%'>
        
				<tr>
				  <td  id="label_gral_condicion_iva_vta_tipo_nota_credito_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_condicion_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralCondicionIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_vta_tipo_nota_credito_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_condicion_iva_vta_tipo_nota_credito_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), $gral_condicion_iva_vta_tipo_nota_credito->getGralCondicionIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_condicion_iva_vta_tipo_nota_credito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='gral_condicion_iva_vta_tipo_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($gral_condicion_iva_vta_tipo_nota_credito->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_condicion_iva_vta_tipo_nota_credito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='gral_condicion_iva_vta_tipo_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_condicion_iva_vta_tipo_nota_credito_cmb_gral_condicion_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_condicion_iva_vta_tipo_nota_credito_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_vta_tipo_nota_credito_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_vta_tipo_nota_credito_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_vta_tipo_nota_credito_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_vta_tipo_nota_credito_cmb_vta_tipo_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_tipo_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('VtaTipoNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_vta_tipo_nota_credito_cmb_vta_tipo_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_tipo_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_condicion_iva_vta_tipo_nota_credito_cmb_vta_tipo_nota_credito_id', Gral::getCmbFiltro(VtaTipoNotaCredito::getVtaTipoNotaCreditosCmb(), '...'), $gral_condicion_iva_vta_tipo_nota_credito->getVtaTipoNotaCreditoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_NOTA_CREDITO_ALTA_CMB_EDIT_VTA_TIPO_NOTA_CREDITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_condicion_iva_vta_tipo_nota_credito_cmb_vta_tipo_nota_credito_id" clase_id="vta_tipo_nota_credito" prefijo='gral_condicion_iva_vta_tipo_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_tipo_nota_credito_id" <?php echo ($gral_condicion_iva_vta_tipo_nota_credito->getVtaTipoNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_condicion_iva_vta_tipo_nota_credito_cmb_vta_tipo_nota_credito_id" clase_id="vta_tipo_nota_credito" prefijo='gral_condicion_iva_vta_tipo_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_condicion_iva_vta_tipo_nota_credito_cmb_vta_tipo_nota_credito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_condicion_iva_vta_tipo_nota_credito_alta_vta_tipo_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_vta_tipo_nota_credito_alta_vta_tipo_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_vta_tipo_nota_credito_alta_vta_tipo_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_vta_tipo_nota_credito_alta_vta_tipo_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_tipo_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_vta_tipo_nota_credito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_vta_tipo_nota_credito_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_condicion_iva_vta_tipo_nota_credito_txa_observacion' rows='10' cols='50' id='gral_condicion_iva_vta_tipo_nota_credito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_condicion_iva_vta_tipo_nota_credito->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_condicion_iva_vta_tipo_nota_credito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_vta_tipo_nota_credito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_vta_tipo_nota_credito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_vta_tipo_nota_credito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_condicion_iva_vta_tipo_nota_credito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_condicion_iva_vta_tipo_nota_credito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_condicion_iva_vta_tipo_nota_credito'/>
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

