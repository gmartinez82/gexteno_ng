<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA')){
    echo "No tiene asignada la credencial GRAL_CONDICION_IVA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_condicion_iva';
$db_nombre_pagina = 'gral_condicion_iva_alta';

$gral_condicion_iva = new GralCondicionIva();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_condicion_iva = new GralCondicionIva();
	if(trim($hdn_id) != '') $gral_condicion_iva->setId($hdn_id, false);
	$gral_condicion_iva->setDescripcion(Gral::getVars(1, "gral_condicion_iva_txt_descripcion"));
	$gral_condicion_iva->setCodigo(Gral::getVars(1, "gral_condicion_iva_txt_codigo"));
	$gral_condicion_iva->setIvaDiscriminado(Gral::getVars(1, "gral_condicion_iva_cmb_iva_discriminado", 0));
	$gral_condicion_iva->setIvaDiscriminadoComprobante(Gral::getVars(1, "gral_condicion_iva_cmb_iva_discriminado_comprobante", 0));
	$gral_condicion_iva->setLeyendaComprobante(Gral::getVars(1, "gral_condicion_iva_txa_leyenda_comprobante"));
	$gral_condicion_iva->setObservacion(Gral::getVars(1, "gral_condicion_iva_txa_observacion"));
	$gral_condicion_iva->setOrden(Gral::getVars(1, "gral_condicion_iva_txt_orden", 0));
	$gral_condicion_iva->setEstado(Gral::getVars(1, "gral_condicion_iva_cmb_estado", 0));
	$gral_condicion_iva->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_condicion_iva_txt_creado")));
	$gral_condicion_iva->setCreadoPor(Gral::getVars(1, "gral_condicion_iva__creado_por", 0));
	$gral_condicion_iva->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_condicion_iva_txt_modificado")));
	$gral_condicion_iva->setModificadoPor(Gral::getVars(1, "gral_condicion_iva__modificado_por", 0));

	$gral_condicion_iva_estado = new GralCondicionIva();
	if(trim($hdn_id) != ''){
		$gral_condicion_iva_estado->setId($hdn_id);
		$gral_condicion_iva->setEstado($gral_condicion_iva_estado->getEstado());
				
	}else{
		$gral_condicion_iva->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_condicion_iva->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_condicion_iva_alta.php?cs=1&id='.$gral_condicion_iva->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_condicion_iva->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_condicion_iva_alta.php?cs=1');
				$gral_condicion_iva = new GralCondicionIva();
			}
		break;
	}
	Gral::setSes('GralCondicionIva_ULTIMO_INSERTADO', $gral_condicion_iva->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_condicion_iva_id = Gral::getVars(2, $prefijo.'cmb_gral_condicion_iva_id', 0);
	if($cmb_gral_condicion_iva_id != 0){
		$gral_condicion_iva = GralCondicionIva::getOxId($cmb_gral_condicion_iva_id);
	}else{
	
	$gral_condicion_iva->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_condicion_iva->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_condicion_iva->setIvaDiscriminado(Gral::getVars(2, "iva_discriminado", 0));
	$gral_condicion_iva->setIvaDiscriminadoComprobante(Gral::getVars(2, "iva_discriminado_comprobante", 0));
	$gral_condicion_iva->setLeyendaComprobante(Gral::getVars(2, "leyenda_comprobante", ''));
	$gral_condicion_iva->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_condicion_iva->setOrden(Gral::getVars(2, "orden", 0));
	$gral_condicion_iva->setEstado(Gral::getVars(2, "estado", 0));
	$gral_condicion_iva->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_condicion_iva->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_condicion_iva->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_condicion_iva->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_condicion_iva->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_condicion_iva' width='90%'>
        
				<tr>
				  <td  id="label_gral_condicion_iva_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_condicion_iva_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_condicion_iva_txt_descripcion' value='<?php Gral::_echoTxt($gral_condicion_iva->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_condicion_iva_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_condicion_iva_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_condicion_iva_txt_codigo' value='<?php Gral::_echoTxt($gral_condicion_iva->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_condicion_iva_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_cmb_iva_discriminado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_iva_discriminado' ?>" >
				  
                                        <?php Lang::_lang('Iva Discriminado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_cmb_iva_discriminado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('iva_discriminado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_condicion_iva_cmb_iva_discriminado', GralSiNo::getGralSiNosCmb(), $gral_condicion_iva->getIvaDiscriminado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_condicion_iva_alta_iva_discriminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_alta_iva_discriminado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_alta_iva_discriminado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_alta_iva_discriminado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('iva_discriminado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_cmb_iva_discriminado_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_iva_discriminado_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Iva Discr Compr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_cmb_iva_discriminado_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('iva_discriminado_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_condicion_iva_cmb_iva_discriminado_comprobante', GralSiNo::getGralSiNosCmb(), $gral_condicion_iva->getIvaDiscriminadoComprobante(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_condicion_iva_alta_iva_discriminado_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_alta_iva_discriminado_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_alta_iva_discriminado_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_alta_iva_discriminado_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('iva_discriminado_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_txa_leyenda_comprobante" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_leyenda_comprobante' ?>" >
				  
                                        <?php Lang::_lang('Leyenda Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_txa_leyenda_comprobante" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('leyenda_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_condicion_iva_txa_leyenda_comprobante' rows='10' cols='50' id='gral_condicion_iva_txa_leyenda_comprobante' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_condicion_iva->getLeyendaComprobante(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_condicion_iva_alta_leyenda_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_alta_leyenda_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_alta_leyenda_comprobante', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_alta_leyenda_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leyenda_comprobante')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_condicion_iva_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_condicion_iva_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_condicion_iva_txa_observacion' rows='10' cols='50' id='gral_condicion_iva_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_condicion_iva->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_condicion_iva_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_condicion_iva_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_condicion_iva_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_condicion_iva_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_condicion_iva->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_condicion_iva_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_condicion_iva'/>
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

