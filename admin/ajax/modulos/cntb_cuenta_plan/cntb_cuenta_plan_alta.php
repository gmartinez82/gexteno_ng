<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CNTB_CUENTA_PLAN_ALTA')){
    echo "No tiene asignada la credencial CNTB_CUENTA_PLAN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cntb_cuenta_plan';
$db_nombre_pagina = 'cntb_cuenta_plan_alta';

$cntb_cuenta_plan = new CntbCuentaPlan();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cntb_cuenta_plan = new CntbCuentaPlan();
	if(trim($hdn_id) != '') $cntb_cuenta_plan->setId($hdn_id, false);
	$cntb_cuenta_plan->setDescripcion(Gral::getVars(1, "cntb_cuenta_plan_txt_descripcion"));
	$cntb_cuenta_plan->setCodigo(Gral::getVars(1, "cntb_cuenta_plan_txt_codigo"));
	$cntb_cuenta_plan->setPhpClase(Gral::getVars(1, "cntb_cuenta_plan_txt_php_clase"));
	$cntb_cuenta_plan->setBdTabla(Gral::getVars(1, "cntb_cuenta_plan_txt_bd_tabla"));
	$cntb_cuenta_plan->setObservacion(Gral::getVars(1, "cntb_cuenta_plan_txa_observacion"));
	$cntb_cuenta_plan->setOrden(Gral::getVars(1, "cntb_cuenta_plan_txt_orden", 0));
	$cntb_cuenta_plan->setEstado(Gral::getVars(1, "cntb_cuenta_plan_cmb_estado", 0));
	$cntb_cuenta_plan->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_cuenta_plan_txt_creado")));
	$cntb_cuenta_plan->setCreadoPor(Gral::getVars(1, "cntb_cuenta_plan__creado_por", 0));
	$cntb_cuenta_plan->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_cuenta_plan_txt_modificado")));
	$cntb_cuenta_plan->setModificadoPor(Gral::getVars(1, "cntb_cuenta_plan__modificado_por", 0));

	$cntb_cuenta_plan_estado = new CntbCuentaPlan();
	if(trim($hdn_id) != ''){
		$cntb_cuenta_plan_estado->setId($hdn_id);
		$cntb_cuenta_plan->setEstado($cntb_cuenta_plan_estado->getEstado());
				
	}else{
		$cntb_cuenta_plan->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_cuenta_plan->control();
			if(!$error->getExisteError()){
				$cntb_cuenta_plan->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cntb_cuenta_plan_alta.php?cs=1&id='.$cntb_cuenta_plan->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_cuenta_plan->control();
			if(!$error->getExisteError()){
				$cntb_cuenta_plan->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cntb_cuenta_plan_alta.php?cs=1');
				$cntb_cuenta_plan = new CntbCuentaPlan();
			}
		break;
	}
	Gral::setSes('CntbCuentaPlan_ULTIMO_INSERTADO', $cntb_cuenta_plan->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cntb_cuenta_plan_id = Gral::getVars(2, $prefijo.'cmb_cntb_cuenta_plan_id', 0);
	if($cmb_cntb_cuenta_plan_id != 0){
		$cntb_cuenta_plan = CntbCuentaPlan::getOxId($cmb_cntb_cuenta_plan_id);
	}else{
	
	$cntb_cuenta_plan->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cntb_cuenta_plan->setCodigo(Gral::getVars(2, "codigo", ''));
	$cntb_cuenta_plan->setPhpClase(Gral::getVars(2, "php_clase", ''));
	$cntb_cuenta_plan->setBdTabla(Gral::getVars(2, "bd_tabla", ''));
	$cntb_cuenta_plan->setObservacion(Gral::getVars(2, "observacion", ''));
	$cntb_cuenta_plan->setOrden(Gral::getVars(2, "orden", 0));
	$cntb_cuenta_plan->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_cuenta_plan->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_cuenta_plan->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_cuenta_plan->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_cuenta_plan->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cntb_cuenta_plan->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cntb_cuenta_plan/cntb_cuenta_plan_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cntb_cuenta_plan' width='90%'>
        
				<tr>
				  <td  id="label_cntb_cuenta_plan_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_cuenta_plan_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_cuenta_plan_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_cuenta_plan_txt_descripcion' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cntb_cuenta_plan_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_cuenta_plan_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_cuenta_plan_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_cuenta_plan_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_cuenta_plan_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_cuenta_plan_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_cuenta_plan_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_cuenta_plan_txt_codigo' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_cuenta_plan_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_cuenta_plan_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_cuenta_plan_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_cuenta_plan_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_cuenta_plan_txt_php_clase" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_php_clase' ?>" >
				  
                                        <?php Lang::_lang('PHP Clase', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_cuenta_plan_txt_php_clase" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('php_clase')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_cuenta_plan_txt_php_clase' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_cuenta_plan_txt_php_clase' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getPhpClase(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_cuenta_plan_alta_php_clase', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_cuenta_plan_alta_php_clase', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_cuenta_plan_alta_php_clase', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_cuenta_plan_alta_php_clase', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('php_clase')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_cuenta_plan_txt_bd_tabla" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_bd_tabla' ?>" >
				  
                                        <?php Lang::_lang('BD Tabla', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_cuenta_plan_txt_bd_tabla" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('bd_tabla')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cntb_cuenta_plan_txt_bd_tabla' type='text' class='textbox <?php echo $error_input_css ?> ' id='cntb_cuenta_plan_txt_bd_tabla' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getBdTabla(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cntb_cuenta_plan_alta_bd_tabla', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_cuenta_plan_alta_bd_tabla', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_cuenta_plan_alta_bd_tabla', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_cuenta_plan_alta_bd_tabla', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('bd_tabla')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_cuenta_plan_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_cuenta_plan_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cntb_cuenta_plan_txa_observacion' rows='10' cols='50' id='cntb_cuenta_plan_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cntb_cuenta_plan->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cntb_cuenta_plan_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_cuenta_plan_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_cuenta_plan_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_cuenta_plan_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cntb_cuenta_plan_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cntb_cuenta_plan'/>
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

