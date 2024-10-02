<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA')){
    echo "No tiene asignada la credencial GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_condicion_iva_pde_tipo_nota_debito';
$db_nombre_pagina = 'gral_condicion_iva_pde_tipo_nota_debito_alta';

$gral_condicion_iva_pde_tipo_nota_debito = new GralCondicionIvaPdeTipoNotaDebito();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_condicion_iva_pde_tipo_nota_debito = new GralCondicionIvaPdeTipoNotaDebito();
	if(trim($hdn_id) != '') $gral_condicion_iva_pde_tipo_nota_debito->setId($hdn_id, false);
	$gral_condicion_iva_pde_tipo_nota_debito->setDescripcion(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_txt_descripcion"));
	$gral_condicion_iva_pde_tipo_nota_debito->setGralCondicionIvaId(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_cmb_gral_condicion_iva_id", null));
	$gral_condicion_iva_pde_tipo_nota_debito->setPdeTipoNotaDebitoId(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_cmb_pde_tipo_nota_debito_id", null));
	$gral_condicion_iva_pde_tipo_nota_debito->setCodigo(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_txt_codigo"));
	$gral_condicion_iva_pde_tipo_nota_debito->setObservacion(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_txa_observacion"));
	$gral_condicion_iva_pde_tipo_nota_debito->setOrden(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_txt_orden", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setEstado(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_cmb_estado", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_txt_creado")));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreadoPor(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito__creado_por", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito_txt_modificado")));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificadoPor(Gral::getVars(1, "gral_condicion_iva_pde_tipo_nota_debito__modificado_por", 0));

	$gral_condicion_iva_pde_tipo_nota_debito_estado = new GralCondicionIvaPdeTipoNotaDebito();
	if(trim($hdn_id) != ''){
		$gral_condicion_iva_pde_tipo_nota_debito_estado->setId($hdn_id);
		$gral_condicion_iva_pde_tipo_nota_debito->setEstado($gral_condicion_iva_pde_tipo_nota_debito_estado->getEstado());
				
	}else{
		$gral_condicion_iva_pde_tipo_nota_debito->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_condicion_iva_pde_tipo_nota_debito->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva_pde_tipo_nota_debito->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_condicion_iva_pde_tipo_nota_debito_alta.php?cs=1&id='.$gral_condicion_iva_pde_tipo_nota_debito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_condicion_iva_pde_tipo_nota_debito->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva_pde_tipo_nota_debito->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_condicion_iva_pde_tipo_nota_debito_alta.php?cs=1');
				$gral_condicion_iva_pde_tipo_nota_debito = new GralCondicionIvaPdeTipoNotaDebito();
			}
		break;
	}
	Gral::setSes('GralCondicionIvaPdeTipoNotaDebito_ULTIMO_INSERTADO', $gral_condicion_iva_pde_tipo_nota_debito->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_condicion_iva_pde_tipo_nota_debito_id = Gral::getVars(2, $prefijo.'cmb_gral_condicion_iva_pde_tipo_nota_debito_id', 0);
	if($cmb_gral_condicion_iva_pde_tipo_nota_debito_id != 0){
		$gral_condicion_iva_pde_tipo_nota_debito = GralCondicionIvaPdeTipoNotaDebito::getOxId($cmb_gral_condicion_iva_pde_tipo_nota_debito_id);
	}else{
	
	$gral_condicion_iva_pde_tipo_nota_debito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_condicion_iva_pde_tipo_nota_debito->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
	$gral_condicion_iva_pde_tipo_nota_debito->setPdeTipoNotaDebitoId(Gral::getVars(2, "pde_tipo_nota_debito_id", 'null'));
	$gral_condicion_iva_pde_tipo_nota_debito->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_condicion_iva_pde_tipo_nota_debito->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_condicion_iva_pde_tipo_nota_debito->setOrden(Gral::getVars(2, "orden", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setEstado(Gral::getVars(2, "estado", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_condicion_iva_pde_tipo_nota_debito->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_condicion_iva_pde_tipo_nota_debito/gral_condicion_iva_pde_tipo_nota_debito_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_condicion_iva_pde_tipo_nota_debito' width='90%'>
        
				<tr>
				  <td  id="label_gral_condicion_iva_pde_tipo_nota_debito_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_condicion_iva_id' ?>" >
				  
                                        <?php Lang::_lang('GralCondicionIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_pde_tipo_nota_debito_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_condicion_iva_pde_tipo_nota_debito_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), $gral_condicion_iva_pde_tipo_nota_debito->getGralCondicionIvaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_condicion_iva_pde_tipo_nota_debito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='gral_condicion_iva_pde_tipo_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($gral_condicion_iva_pde_tipo_nota_debito->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_condicion_iva_pde_tipo_nota_debito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='gral_condicion_iva_pde_tipo_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_condicion_iva_pde_tipo_nota_debito_cmb_gral_condicion_iva_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_condicion_iva_pde_tipo_nota_debito_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_pde_tipo_nota_debito_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_pde_tipo_nota_debito_alta_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_pde_tipo_nota_debito_alta_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_pde_tipo_nota_debito_cmb_pde_tipo_nota_debito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_nota_debito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeTipoNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_pde_tipo_nota_debito_cmb_pde_tipo_nota_debito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_tipo_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_condicion_iva_pde_tipo_nota_debito_cmb_pde_tipo_nota_debito_id', Gral::getCmbFiltro(PdeTipoNotaDebito::getPdeTipoNotaDebitosCmb(), '...'), $gral_condicion_iva_pde_tipo_nota_debito->getPdeTipoNotaDebitoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA_CMB_EDIT_PDE_TIPO_NOTA_DEBITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_condicion_iva_pde_tipo_nota_debito_cmb_pde_tipo_nota_debito_id" clase_id="pde_tipo_nota_debito" prefijo='gral_condicion_iva_pde_tipo_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_nota_debito_id" <?php echo ($gral_condicion_iva_pde_tipo_nota_debito->getPdeTipoNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_condicion_iva_pde_tipo_nota_debito_cmb_pde_tipo_nota_debito_id" clase_id="pde_tipo_nota_debito" prefijo='gral_condicion_iva_pde_tipo_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_condicion_iva_pde_tipo_nota_debito_cmb_pde_tipo_nota_debito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_condicion_iva_pde_tipo_nota_debito_alta_pde_tipo_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_pde_tipo_nota_debito_alta_pde_tipo_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_pde_tipo_nota_debito_alta_pde_tipo_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_pde_tipo_nota_debito_alta_pde_tipo_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_nota_debito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_pde_tipo_nota_debito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_pde_tipo_nota_debito_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_condicion_iva_pde_tipo_nota_debito_txa_observacion' rows='10' cols='50' id='gral_condicion_iva_pde_tipo_nota_debito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_condicion_iva_pde_tipo_nota_debito->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_condicion_iva_pde_tipo_nota_debito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_pde_tipo_nota_debito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_pde_tipo_nota_debito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_pde_tipo_nota_debito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_condicion_iva_pde_tipo_nota_debito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_condicion_iva_pde_tipo_nota_debito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_condicion_iva_pde_tipo_nota_debito'/>
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

