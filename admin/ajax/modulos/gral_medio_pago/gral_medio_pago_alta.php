<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_MEDIO_PAGO_ALTA')){
    echo "No tiene asignada la credencial GRAL_MEDIO_PAGO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_medio_pago';
$db_nombre_pagina = 'gral_medio_pago_alta';

$gral_medio_pago = new GralMedioPago();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_medio_pago = new GralMedioPago();
	if(trim($hdn_id) != '') $gral_medio_pago->setId($hdn_id, false);
	$gral_medio_pago->setDescripcion(Gral::getVars(1, "gral_medio_pago_txt_descripcion"));
	$gral_medio_pago->setCodigo(Gral::getVars(1, "gral_medio_pago_txt_codigo"));
	$gral_medio_pago->setMueveCaja(Gral::getVars(1, "gral_medio_pago_cmb_mueve_caja", 0));
	$gral_medio_pago->setRealizaPago(Gral::getVars(1, "gral_medio_pago_cmb_realiza_pago", 0));
	$gral_medio_pago->setObservacion(Gral::getVars(1, "gral_medio_pago_txa_observacion"));
	$gral_medio_pago->setOrden(Gral::getVars(1, "gral_medio_pago_txt_orden", 0));
	$gral_medio_pago->setEstado(Gral::getVars(1, "gral_medio_pago_cmb_estado", 0));
	$gral_medio_pago->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_medio_pago_txt_creado")));
	$gral_medio_pago->setCreadoPor(Gral::getVars(1, "gral_medio_pago__creado_por", 0));
	$gral_medio_pago->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_medio_pago_txt_modificado")));
	$gral_medio_pago->setModificadoPor(Gral::getVars(1, "gral_medio_pago__modificado_por", 0));

	$gral_medio_pago_estado = new GralMedioPago();
	if(trim($hdn_id) != ''){
		$gral_medio_pago_estado->setId($hdn_id);
		$gral_medio_pago->setEstado($gral_medio_pago_estado->getEstado());
				
	}else{
		$gral_medio_pago->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_medio_pago->control();
			if(!$error->getExisteError()){
				$gral_medio_pago->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_medio_pago_alta.php?cs=1&id='.$gral_medio_pago->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_medio_pago->control();
			if(!$error->getExisteError()){
				$gral_medio_pago->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_medio_pago_alta.php?cs=1');
				$gral_medio_pago = new GralMedioPago();
			}
		break;
	}
	Gral::setSes('GralMedioPago_ULTIMO_INSERTADO', $gral_medio_pago->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_medio_pago_id = Gral::getVars(2, $prefijo.'cmb_gral_medio_pago_id', 0);
	if($cmb_gral_medio_pago_id != 0){
		$gral_medio_pago = GralMedioPago::getOxId($cmb_gral_medio_pago_id);
	}else{
	
	$gral_medio_pago->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_medio_pago->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_medio_pago->setMueveCaja(Gral::getVars(2, "mueve_caja", 0));
	$gral_medio_pago->setRealizaPago(Gral::getVars(2, "realiza_pago", 0));
	$gral_medio_pago->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_medio_pago->setOrden(Gral::getVars(2, "orden", 0));
	$gral_medio_pago->setEstado(Gral::getVars(2, "estado", 0));
	$gral_medio_pago->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_medio_pago->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_medio_pago->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_medio_pago->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_medio_pago->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_medio_pago/gral_medio_pago_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_medio_pago' width='90%'>
        
				<tr>
				  <td  id="label_gral_medio_pago_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_medio_pago_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_medio_pago_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_medio_pago_txt_descripcion' value='<?php Gral::_echoTxt($gral_medio_pago->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_medio_pago_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_medio_pago_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_medio_pago_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_medio_pago_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_medio_pago_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_medio_pago_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_medio_pago_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_medio_pago_txt_codigo' value='<?php Gral::_echoTxt($gral_medio_pago->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_medio_pago_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_medio_pago_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_medio_pago_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_medio_pago_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_medio_pago_cmb_mueve_caja" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_mueve_caja' ?>" >
				  
                                        <?php Lang::_lang('Mueve Caja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_medio_pago_cmb_mueve_caja" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('mueve_caja')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_medio_pago_cmb_mueve_caja', GralSiNo::getGralSiNosCmb(), $gral_medio_pago->getMueveCaja(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_medio_pago_alta_mueve_caja', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_medio_pago_alta_mueve_caja', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_medio_pago_alta_mueve_caja', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_medio_pago_alta_mueve_caja', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('mueve_caja')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_medio_pago_cmb_realiza_pago" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_realiza_pago' ?>" >
				  
                                        <?php Lang::_lang('Realiza Pagos', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_medio_pago_cmb_realiza_pago" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('realiza_pago')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_medio_pago_cmb_realiza_pago', GralSiNo::getGralSiNosCmb(), $gral_medio_pago->getRealizaPago(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_medio_pago_alta_realiza_pago', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_medio_pago_alta_realiza_pago', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_medio_pago_alta_realiza_pago', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_medio_pago_alta_realiza_pago', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('realiza_pago')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_medio_pago_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_medio_pago_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_medio_pago_txa_observacion' rows='10' cols='50' id='gral_medio_pago_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_medio_pago->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_medio_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_medio_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_medio_pago_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_medio_pago_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_medio_pago->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_medio_pago_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_medio_pago'/>
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

