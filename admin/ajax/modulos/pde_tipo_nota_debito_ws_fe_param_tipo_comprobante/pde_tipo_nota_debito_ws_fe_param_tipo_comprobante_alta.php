<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){
    echo "No tiene asignada la credencial PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante';
$db_nombre_pagina = 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta';

$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante = new PdeTipoNotaDebitoWsFeParamTipoComprobante();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante = new PdeTipoNotaDebitoWsFeParamTipoComprobante();
	if(trim($hdn_id) != '') $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setId($hdn_id, false);
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setDescripcion(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txt_descripcion"));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setPdeTipoNotaDebitoId(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_pde_tipo_nota_debito_id", null));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setWsFeParamTipoComprobanteId(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_ws_fe_param_tipo_comprobante_id", null));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setCodigo(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txt_codigo"));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setObservacion(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txa_observacion"));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setOrden(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txt_orden", 0));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setEstado(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_estado", 0));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txt_creado")));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setCreadoPor(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante__creado_por", 0));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txt_modificado")));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setModificadoPor(Gral::getVars(1, "pde_tipo_nota_debito_ws_fe_param_tipo_comprobante__modificado_por", 0));

	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_estado = new PdeTipoNotaDebitoWsFeParamTipoComprobante();
	if(trim($hdn_id) != ''){
		$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_estado->setId($hdn_id);
		$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setEstado($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_estado->getEstado());
				
	}else{
		$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->control();
			if(!$error->getExisteError()){
				$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php?cs=1&id='.$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->control();
			if(!$error->getExisteError()){
				$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php?cs=1');
				$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante = new PdeTipoNotaDebitoWsFeParamTipoComprobante();
			}
		break;
	}
	Gral::setSes('PdeTipoNotaDebitoWsFeParamTipoComprobante_ULTIMO_INSERTADO', $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id = Gral::getVars(2, $prefijo.'cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id', 0);
	if($cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id != 0){
		$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante = PdeTipoNotaDebitoWsFeParamTipoComprobante::getOxId($cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id);
	}else{
	
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setPdeTipoNotaDebitoId(Gral::getVars(2, "pde_tipo_nota_debito_id", 'null'));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setWsFeParamTipoComprobanteId(Gral::getVars(2, "ws_fe_param_tipo_comprobante_id", 'null'));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setOrden(Gral::getVars(2, "orden", 0));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setEstado(Gral::getVars(2, "estado", 0));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_tipo_nota_debito_ws_fe_param_tipo_comprobante/pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante' width='90%'>
        
				<tr>
				  <td  id="label_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_pde_tipo_nota_debito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_nota_debito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_pde_tipo_nota_debito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_pde_tipo_nota_debito_id', Gral::getCmbFiltro(PdeTipoNotaDebito::getPdeTipoNotaDebitosCmb(), '...'), $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getPdeTipoNotaDebitoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_CMB_EDIT_PDE_TIPO_NOTA_DEBITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_pde_tipo_nota_debito_id" clase_id="pde_tipo_nota_debito" prefijo='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_nota_debito_id" <?php echo ($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getPdeTipoNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_pde_tipo_nota_debito_id" clase_id="pde_tipo_nota_debito" prefijo='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_pde_tipo_nota_debito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_pde_tipo_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_pde_tipo_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_pde_tipo_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_pde_tipo_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_nota_debito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_ws_fe_param_tipo_comprobante_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_comprobante_id' ?>" >
				  
                                        <?php Lang::_lang('WsFeParamTipoComprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_ws_fe_param_tipo_comprobante_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_comprobante_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_ws_fe_param_tipo_comprobante_id', Gral::getCmbFiltro(WsFeParamTipoComprobante::getWsFeParamTipoComprobantesCmb(), '...'), $pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getWsFeParamTipoComprobanteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_ws_fe_param_tipo_comprobante_id" clase_id="ws_fe_param_tipo_comprobante" prefijo='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_comprobante_id" <?php echo ($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getWsFeParamTipoComprobanteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_ws_fe_param_tipo_comprobante_id" clase_id="ws_fe_param_tipo_comprobante" prefijo='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_cmb_ws_fe_param_tipo_comprobante_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_ws_fe_param_tipo_comprobante_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_ws_fe_param_tipo_comprobante_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_ws_fe_param_tipo_comprobante_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_ws_fe_param_tipo_comprobante_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_comprobante_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txa_observacion' rows='10' cols='50' id='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_tipo_nota_debito_ws_fe_param_tipo_comprobante->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_tipo_nota_debito_ws_fe_param_tipo_comprobante'/>
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

