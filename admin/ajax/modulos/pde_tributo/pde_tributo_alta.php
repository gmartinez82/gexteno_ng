<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA')){
    echo "No tiene asignada la credencial PDE_TRIBUTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_tributo';
$db_nombre_pagina = 'pde_tributo_alta';

$pde_tributo = new PdeTributo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_tributo = new PdeTributo();
	if(trim($hdn_id) != '') $pde_tributo->setId($hdn_id, false);
	$pde_tributo->setDescripcion(Gral::getVars(1, "pde_tributo_txt_descripcion"));
	$pde_tributo->setAlicuotaPorcentual(Gral::getVars(1, "pde_tributo_txt_alicuota_porcentual", 0));
	$pde_tributo->setAlicuotaDecimal(Gral::getVars(1, "pde_tributo_txt_alicuota_decimal", 0));
	$pde_tributo->setFormula(Gral::getVars(1, "pde_tributo_txa_formula"));
	$pde_tributo->setCntbCuentaId(Gral::getVars(1, "pde_tributo_dbsug_cntb_cuenta_id", null));
	$pde_tributo->setEsRetencion(Gral::getVars(1, "pde_tributo_cmb_es_retencion", 0));
	$pde_tributo->setEsPercepcion(Gral::getVars(1, "pde_tributo_cmb_es_percepcion", 0));
	$pde_tributo->setCodigo(Gral::getVars(1, "pde_tributo_txt_codigo"));
	$pde_tributo->setObservacion(Gral::getVars(1, "pde_tributo_txa_observacion"));
	$pde_tributo->setOrden(Gral::getVars(1, "pde_tributo_txt_orden", 0));
	$pde_tributo->setEstado(Gral::getVars(1, "pde_tributo_cmb_estado", 0));
	$pde_tributo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_tributo_txt_creado")));
	$pde_tributo->setCreadoPor(Gral::getVars(1, "pde_tributo__creado_por", 0));
	$pde_tributo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_tributo_txt_modificado")));
	$pde_tributo->setModificadoPor(Gral::getVars(1, "pde_tributo__modificado_por", 0));

	$pde_tributo_estado = new PdeTributo();
	if(trim($hdn_id) != ''){
		$pde_tributo_estado->setId($hdn_id);
		$pde_tributo->setEstado($pde_tributo_estado->getEstado());
				
	}else{
		$pde_tributo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_tributo->control();
			if(!$error->getExisteError()){
				$pde_tributo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_tributo_alta.php?cs=1&id='.$pde_tributo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_tributo->control();
			if(!$error->getExisteError()){
				$pde_tributo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_tributo_alta.php?cs=1');
				$pde_tributo = new PdeTributo();
			}
		break;
	}
	Gral::setSes('PdeTributo_ULTIMO_INSERTADO', $pde_tributo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_tributo_id = Gral::getVars(2, $prefijo.'cmb_pde_tributo_id', 0);
	if($cmb_pde_tributo_id != 0){
		$pde_tributo = PdeTributo::getOxId($cmb_pde_tributo_id);
	}else{
	
	$pde_tributo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_tributo->setAlicuotaPorcentual(Gral::getVars(2, "alicuota_porcentual", 0));
	$pde_tributo->setAlicuotaDecimal(Gral::getVars(2, "alicuota_decimal", 0));
	$pde_tributo->setFormula(Gral::getVars(2, "formula", ''));
	$pde_tributo->setCntbCuentaId(Gral::getVars(2, "cntb_cuenta_id", 'null'));
	$pde_tributo->setEsRetencion(Gral::getVars(2, "es_retencion", 0));
	$pde_tributo->setEsPercepcion(Gral::getVars(2, "es_percepcion", 0));
	$pde_tributo->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_tributo->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_tributo->setOrden(Gral::getVars(2, "orden", 0));
	$pde_tributo->setEstado(Gral::getVars(2, "estado", 0));
	$pde_tributo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_tributo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_tributo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_tributo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_tributo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_tributo/pde_tributo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_tributo' width='90%'>
        
				<tr>
				  <td  id="label_pde_tributo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_tributo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_tributo_txt_descripcion' value='<?php Gral::_echoTxt($pde_tributo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_tributo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tributo_txt_alicuota_porcentual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alicuota_porcentual' ?>" >
				  
                                        <?php Lang::_lang('Alicuota Porcentual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_txt_alicuota_porcentual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alicuota_porcentual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_tributo_txt_alicuota_porcentual' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_tributo_txt_alicuota_porcentual' value='<?php Gral::_echoTxt($pde_tributo->getAlicuotaPorcentual(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_pde_tributo_alta_alicuota_porcentual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_alicuota_porcentual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_alicuota_porcentual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_alicuota_porcentual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alicuota_porcentual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tributo_txt_alicuota_decimal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_alicuota_decimal' ?>" >
				  
                                        <?php Lang::_lang('Alicuota Decimal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_txt_alicuota_decimal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('alicuota_decimal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_tributo_txt_alicuota_decimal' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='pde_tributo_txt_alicuota_decimal' value='<?php Gral::_echoTxt($pde_tributo->getAlicuotaDecimal(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_pde_tributo_alta_alicuota_decimal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_alicuota_decimal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_alicuota_decimal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_alicuota_decimal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alicuota_decimal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tributo_txa_formula" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_formula' ?>" >
				  
                                        <?php Lang::_lang('Formula', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_txa_formula" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('formula')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_tributo_txa_formula' rows='10' cols='50' id='pde_tributo_txa_formula' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_tributo->getFormula(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_tributo_alta_formula', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_formula', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_formula', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_formula', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('formula')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tributo_dbsug_cntb_cuenta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_id' ?>" >
				  
                                        <?php Lang::_lang('CntbCuenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_dbsug_cntb_cuenta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_tributo_dbsug_cntb_cuenta', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $pde_tributo->getCntbCuentaId(), $pde_tributo->getCntbCuenta()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_tributo_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tributo_cmb_es_retencion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_es_retencion' ?>" >
				  
                                        <?php Lang::_lang('Es Retencion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_cmb_es_retencion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('es_retencion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_tributo_cmb_es_retencion', GralSiNo::getGralSiNosCmb(), $pde_tributo->getEsRetencion(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_tributo_alta_es_retencion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_es_retencion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_es_retencion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_es_retencion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_retencion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tributo_cmb_es_percepcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_es_percepcion' ?>" >
				  
                                        <?php Lang::_lang('Es Percepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_cmb_es_percepcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('es_percepcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_tributo_cmb_es_percepcion', GralSiNo::getGralSiNosCmb(), $pde_tributo->getEsPercepcion(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_tributo_alta_es_percepcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_es_percepcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_es_percepcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_es_percepcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_percepcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_tributo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_tributo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_tributo_txa_observacion' rows='10' cols='50' id='pde_tributo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_tributo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_tributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_tributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_tributo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_tributo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_tributo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_tributo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_tributo'/>
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

