<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_CREDITO_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_VTA_NOTA_CREDITO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_vta_nota_credito';
$db_nombre_pagina = 'eku_de_vta_nota_credito_alta';

$eku_de_vta_nota_credito = new EkuDeVtaNotaCredito();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_vta_nota_credito = new EkuDeVtaNotaCredito();
	if(trim($hdn_id) != '') $eku_de_vta_nota_credito->setId($hdn_id, false);
	$eku_de_vta_nota_credito->setDescripcion(Gral::getVars(1, "eku_de_vta_nota_credito_txt_descripcion"));
	$eku_de_vta_nota_credito->setEkuDeId(Gral::getVars(1, "eku_de_vta_nota_credito_dbsug_eku_de_id", null));
	$eku_de_vta_nota_credito->setVtaNotaCreditoId(Gral::getVars(1, "eku_de_vta_nota_credito_dbsug_vta_nota_credito_id", null));
	$eku_de_vta_nota_credito->setInicial(Gral::getVars(1, "eku_de_vta_nota_credito_cmb_inicial", 0));
	$eku_de_vta_nota_credito->setActual(Gral::getVars(1, "eku_de_vta_nota_credito_cmb_actual", 0));
	$eku_de_vta_nota_credito->setCodigo(Gral::getVars(1, "eku_de_vta_nota_credito_txt_codigo"));
	$eku_de_vta_nota_credito->setObservacion(Gral::getVars(1, "eku_de_vta_nota_credito_txa_observacion"));
	$eku_de_vta_nota_credito->setOrden(Gral::getVars(1, "eku_de_vta_nota_credito_txt_orden", 0));
	$eku_de_vta_nota_credito->setEstado(Gral::getVars(1, "eku_de_vta_nota_credito_cmb_estado", 0));
	$eku_de_vta_nota_credito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_vta_nota_credito_txt_creado")));
	$eku_de_vta_nota_credito->setCreadoPor(Gral::getVars(1, "eku_de_vta_nota_credito__creado_por", 0));
	$eku_de_vta_nota_credito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_vta_nota_credito_txt_modificado")));
	$eku_de_vta_nota_credito->setModificadoPor(Gral::getVars(1, "eku_de_vta_nota_credito__modificado_por", 0));

	$eku_de_vta_nota_credito_estado = new EkuDeVtaNotaCredito();
	if(trim($hdn_id) != ''){
		$eku_de_vta_nota_credito_estado->setId($hdn_id);
		$eku_de_vta_nota_credito->setEstado($eku_de_vta_nota_credito_estado->getEstado());
				
	}else{
		$eku_de_vta_nota_credito->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_vta_nota_credito->control();
			if(!$error->getExisteError()){
				$eku_de_vta_nota_credito->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_vta_nota_credito_alta.php?cs=1&id='.$eku_de_vta_nota_credito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_vta_nota_credito->control();
			if(!$error->getExisteError()){
				$eku_de_vta_nota_credito->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_vta_nota_credito_alta.php?cs=1');
				$eku_de_vta_nota_credito = new EkuDeVtaNotaCredito();
			}
		break;
	}
	Gral::setSes('EkuDeVtaNotaCredito_ULTIMO_INSERTADO', $eku_de_vta_nota_credito->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_vta_nota_credito_id = Gral::getVars(2, $prefijo.'cmb_eku_de_vta_nota_credito_id', 0);
	if($cmb_eku_de_vta_nota_credito_id != 0){
		$eku_de_vta_nota_credito = EkuDeVtaNotaCredito::getOxId($cmb_eku_de_vta_nota_credito_id);
	}else{
	
	$eku_de_vta_nota_credito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_vta_nota_credito->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_vta_nota_credito->setVtaNotaCreditoId(Gral::getVars(2, "vta_nota_credito_id", 'null'));
	$eku_de_vta_nota_credito->setInicial(Gral::getVars(2, "inicial", 0));
	$eku_de_vta_nota_credito->setActual(Gral::getVars(2, "actual", 0));
	$eku_de_vta_nota_credito->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_vta_nota_credito->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_vta_nota_credito->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_vta_nota_credito->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_vta_nota_credito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_vta_nota_credito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_vta_nota_credito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_vta_nota_credito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_vta_nota_credito->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_vta_nota_credito/eku_de_vta_nota_credito_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_vta_nota_credito' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_vta_nota_credito_dbsug_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_vta_nota_credito_dbsug_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'eku_de_vta_nota_credito_dbsug_eku_de', 'ajax/modulos/eku_de/eku_de_dbsuggest.php', false, true, '', 'Ingrese ...', $eku_de_vta_nota_credito->getEkuDeId(), $eku_de_vta_nota_credito->getEkuDe()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_eku_de_vta_nota_credito_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_vta_nota_credito_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_vta_nota_credito_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_vta_nota_credito_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_vta_nota_credito_dbsug_vta_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('VtaNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_vta_nota_credito_dbsug_vta_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'eku_de_vta_nota_credito_dbsug_vta_nota_credito', 'ajax/modulos/vta_nota_credito/vta_nota_credito_dbsuggest.php', false, true, '', 'Ingrese ...', $eku_de_vta_nota_credito->getVtaNotaCreditoId(), $eku_de_vta_nota_credito->getVtaNotaCredito()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_eku_de_vta_nota_credito_alta_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_vta_nota_credito_alta_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_vta_nota_credito_alta_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_vta_nota_credito_alta_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_vta_nota_credito_cmb_inicial" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >
				  
                                        <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_vta_nota_credito_cmb_inicial" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_vta_nota_credito_cmb_inicial', GralSiNo::getGralSiNosCmb(), $eku_de_vta_nota_credito->getInicial(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_eku_de_vta_nota_credito_alta_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_vta_nota_credito_alta_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_vta_nota_credito_alta_inicial', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_vta_nota_credito_alta_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_vta_nota_credito_cmb_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >
				  
                                        <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_vta_nota_credito_cmb_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_vta_nota_credito_cmb_actual', GralSiNo::getGralSiNosCmb(), $eku_de_vta_nota_credito->getActual(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_eku_de_vta_nota_credito_alta_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_vta_nota_credito_alta_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_vta_nota_credito_alta_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_vta_nota_credito_alta_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_vta_nota_credito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_vta_nota_credito_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_vta_nota_credito_txa_observacion' rows='10' cols='50' id='eku_de_vta_nota_credito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_vta_nota_credito->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_vta_nota_credito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_vta_nota_credito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_vta_nota_credito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_vta_nota_credito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_vta_nota_credito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_vta_nota_credito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_vta_nota_credito'/>
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

