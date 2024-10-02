<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_CONCEPTO_ALTA')){
    echo "No tiene asignada la credencial VTA_NOTA_DEBITO_CONCEPTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_nota_debito_concepto';
$db_nombre_pagina = 'vta_nota_debito_concepto_alta';

$vta_nota_debito_concepto = new VtaNotaDebitoConcepto();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_nota_debito_concepto = new VtaNotaDebitoConcepto();
	if(trim($hdn_id) != '') $vta_nota_debito_concepto->setId($hdn_id, false);
	$vta_nota_debito_concepto->setDescripcion(Gral::getVars(1, "vta_nota_debito_concepto_txt_descripcion"));
	$vta_nota_debito_concepto->setCodigo(Gral::getVars(1, "vta_nota_debito_concepto_txt_codigo"));
	$vta_nota_debito_concepto->setCntbCuentaId(Gral::getVars(1, "vta_nota_debito_concepto_dbsug_cntb_cuenta_id", null));
	$vta_nota_debito_concepto->setObservacion(Gral::getVars(1, "vta_nota_debito_concepto_txa_observacion"));
	$vta_nota_debito_concepto->setOrden(Gral::getVars(1, "vta_nota_debito_concepto_txt_orden", 0));
	$vta_nota_debito_concepto->setEstado(Gral::getVars(1, "vta_nota_debito_concepto__estado", 0));
	$vta_nota_debito_concepto->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_debito_concepto_txt_creado")));
	$vta_nota_debito_concepto->setCreadoPor(Gral::getVars(1, "vta_nota_debito_concepto__creado_por", 0));
	$vta_nota_debito_concepto->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_debito_concepto_txt_modificado")));
	$vta_nota_debito_concepto->setModificadoPor(Gral::getVars(1, "vta_nota_debito_concepto__modificado_por", 0));

	$vta_nota_debito_concepto_estado = new VtaNotaDebitoConcepto();
	if(trim($hdn_id) != ''){
		$vta_nota_debito_concepto_estado->setId($hdn_id);
		$vta_nota_debito_concepto->setEstado($vta_nota_debito_concepto_estado->getEstado());
				
	}else{
		$vta_nota_debito_concepto->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_nota_debito_concepto->control();
			if(!$error->getExisteError()){
				$vta_nota_debito_concepto->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_nota_debito_concepto_alta.php?cs=1&id='.$vta_nota_debito_concepto->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_nota_debito_concepto->control();
			if(!$error->getExisteError()){
				$vta_nota_debito_concepto->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_nota_debito_concepto_alta.php?cs=1');
				$vta_nota_debito_concepto = new VtaNotaDebitoConcepto();
			}
		break;
	}
	Gral::setSes('VtaNotaDebitoConcepto_ULTIMO_INSERTADO', $vta_nota_debito_concepto->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_nota_debito_concepto_id = Gral::getVars(2, $prefijo.'cmb_vta_nota_debito_concepto_id', 0);
	if($cmb_vta_nota_debito_concepto_id != 0){
		$vta_nota_debito_concepto = VtaNotaDebitoConcepto::getOxId($cmb_vta_nota_debito_concepto_id);
	}else{
	
	$vta_nota_debito_concepto->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_nota_debito_concepto->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_nota_debito_concepto->setCntbCuentaId(Gral::getVars(2, "cntb_cuenta_id", 'null'));
	$vta_nota_debito_concepto->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_nota_debito_concepto->setOrden(Gral::getVars(2, "orden", 0));
	$vta_nota_debito_concepto->setEstado(Gral::getVars(2, "estado", 0));
	$vta_nota_debito_concepto->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_nota_debito_concepto->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_nota_debito_concepto->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_nota_debito_concepto->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_nota_debito_concepto->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_nota_debito_concepto/vta_nota_debito_concepto_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_nota_debito_concepto' width='90%'>
        
				<tr>
				  <td  id="label_vta_nota_debito_concepto_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_concepto_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_debito_concepto_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_concepto_txt_descripcion' value='<?php Gral::_echoTxt($vta_nota_debito_concepto->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_nota_debito_concepto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_concepto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_concepto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_concepto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_concepto_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_concepto_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_nota_debito_concepto_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_concepto_txt_codigo' value='<?php Gral::_echoTxt($vta_nota_debito_concepto->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_nota_debito_concepto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_concepto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_concepto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_concepto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_concepto_dbsug_cntb_cuenta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_id' ?>" >
				  
                                        <?php Lang::_lang('CntbCuenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_concepto_dbsug_cntb_cuenta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'vta_nota_debito_concepto_dbsug_cntb_cuenta', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $vta_nota_debito_concepto->getCntbCuentaId(), $vta_nota_debito_concepto->getCntbCuenta()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_vta_nota_debito_concepto_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_concepto_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_concepto_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_concepto_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_nota_debito_concepto_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_nota_debito_concepto_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_nota_debito_concepto_txa_observacion' rows='10' cols='50' id='vta_nota_debito_concepto_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_nota_debito_concepto->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_nota_debito_concepto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_nota_debito_concepto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_nota_debito_concepto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_nota_debito_concepto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_nota_debito_concepto->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_nota_debito_concepto_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_nota_debito_concepto'/>
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

