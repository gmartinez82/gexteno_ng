<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECIBO_CONCEPTO_ALTA')){
    echo "No tiene asignada la credencial PDE_RECIBO_CONCEPTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recibo_concepto';
$db_nombre_pagina = 'pde_recibo_concepto_alta';

$pde_recibo_concepto = new PdeReciboConcepto();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recibo_concepto = new PdeReciboConcepto();
	if(trim($hdn_id) != '') $pde_recibo_concepto->setId($hdn_id, false);
	$pde_recibo_concepto->setDescripcion(Gral::getVars(1, "pde_recibo_concepto_txt_descripcion"));
	$pde_recibo_concepto->setCodigo(Gral::getVars(1, "pde_recibo_concepto_txt_codigo"));
	$pde_recibo_concepto->setCntbCuentaId(Gral::getVars(1, "pde_recibo_concepto_dbsug_cntb_cuenta_id", null));
	$pde_recibo_concepto->setObservacion(Gral::getVars(1, "pde_recibo_concepto_txa_observacion"));
	$pde_recibo_concepto->setOrden(Gral::getVars(1, "pde_recibo_concepto_txt_orden", 0));
	$pde_recibo_concepto->setEstado(Gral::getVars(1, "pde_recibo_concepto__estado", 0));
	$pde_recibo_concepto->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_concepto_txt_creado")));
	$pde_recibo_concepto->setCreadoPor(Gral::getVars(1, "pde_recibo_concepto__creado_por", 0));
	$pde_recibo_concepto->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_concepto_txt_modificado")));
	$pde_recibo_concepto->setModificadoPor(Gral::getVars(1, "pde_recibo_concepto__modificado_por", 0));

	$pde_recibo_concepto_estado = new PdeReciboConcepto();
	if(trim($hdn_id) != ''){
		$pde_recibo_concepto_estado->setId($hdn_id);
		$pde_recibo_concepto->setEstado($pde_recibo_concepto_estado->getEstado());
				
	}else{
		$pde_recibo_concepto->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recibo_concepto->control();
			if(!$error->getExisteError()){
				$pde_recibo_concepto->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recibo_concepto_alta.php?cs=1&id='.$pde_recibo_concepto->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recibo_concepto->control();
			if(!$error->getExisteError()){
				$pde_recibo_concepto->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recibo_concepto_alta.php?cs=1');
				$pde_recibo_concepto = new PdeReciboConcepto();
			}
		break;
	}
	Gral::setSes('PdeReciboConcepto_ULTIMO_INSERTADO', $pde_recibo_concepto->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recibo_concepto_id = Gral::getVars(2, $prefijo.'cmb_pde_recibo_concepto_id', 0);
	if($cmb_pde_recibo_concepto_id != 0){
		$pde_recibo_concepto = PdeReciboConcepto::getOxId($cmb_pde_recibo_concepto_id);
	}else{
	
	$pde_recibo_concepto->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recibo_concepto->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recibo_concepto->setCntbCuentaId(Gral::getVars(2, "cntb_cuenta_id", 'null'));
	$pde_recibo_concepto->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recibo_concepto->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recibo_concepto->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recibo_concepto->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recibo_concepto->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recibo_concepto->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recibo_concepto->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recibo_concepto->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recibo_concepto/pde_recibo_concepto_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recibo_concepto' width='90%'>
        
				<tr>
				  <td  id="label_pde_recibo_concepto_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_concepto_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_concepto_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_concepto_txt_descripcion' value='<?php Gral::_echoTxt($pde_recibo_concepto->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recibo_concepto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_concepto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_concepto_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_concepto_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_concepto_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_concepto_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_concepto_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_concepto_txt_codigo' value='<?php Gral::_echoTxt($pde_recibo_concepto->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_concepto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_concepto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_concepto_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_concepto_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_concepto_dbsug_cntb_cuenta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_id' ?>" >
				  
                                        <?php Lang::_lang('CntbCuenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_concepto_dbsug_cntb_cuenta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_recibo_concepto_dbsug_cntb_cuenta', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $pde_recibo_concepto->getCntbCuentaId(), $pde_recibo_concepto->getCntbCuenta()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_recibo_concepto_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_concepto_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_concepto_alta_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_concepto_alta_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_concepto_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_concepto_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recibo_concepto_txa_observacion' rows='10' cols='50' id='pde_recibo_concepto_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recibo_concepto->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recibo_concepto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_concepto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_concepto_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_concepto_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recibo_concepto->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recibo_concepto_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recibo_concepto'/>
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

