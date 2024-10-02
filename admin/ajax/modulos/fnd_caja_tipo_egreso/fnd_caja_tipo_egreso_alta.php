<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('FND_CAJA_TIPO_EGRESO_ALTA')){
    echo "No tiene asignada la credencial FND_CAJA_TIPO_EGRESO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'fnd_caja_tipo_egreso';
$db_nombre_pagina = 'fnd_caja_tipo_egreso_alta';

$fnd_caja_tipo_egreso = new FndCajaTipoEgreso();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$fnd_caja_tipo_egreso = new FndCajaTipoEgreso();
	if(trim($hdn_id) != '') $fnd_caja_tipo_egreso->setId($hdn_id, false);
	$fnd_caja_tipo_egreso->setDescripcion(Gral::getVars(1, "fnd_caja_tipo_egreso_txt_descripcion"));
	$fnd_caja_tipo_egreso->setCodigo(Gral::getVars(1, "fnd_caja_tipo_egreso_txt_codigo"));
	$fnd_caja_tipo_egreso->setObservacion(Gral::getVars(1, "fnd_caja_tipo_egreso_txa_observacion"));
	$fnd_caja_tipo_egreso->setOrden(Gral::getVars(1, "fnd_caja_tipo_egreso_txt_orden", 0));
	$fnd_caja_tipo_egreso->setEstado(Gral::getVars(1, "fnd_caja_tipo_egreso_cmb_estado", 0));
	$fnd_caja_tipo_egreso->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_tipo_egreso_txt_creado")));
	$fnd_caja_tipo_egreso->setCreadoPor(Gral::getVars(1, "fnd_caja_tipo_egreso__creado_por", 0));
	$fnd_caja_tipo_egreso->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "fnd_caja_tipo_egreso_txt_modificado")));
	$fnd_caja_tipo_egreso->setModificadoPor(Gral::getVars(1, "fnd_caja_tipo_egreso__modificado_por", 0));

	$fnd_caja_tipo_egreso_estado = new FndCajaTipoEgreso();
	if(trim($hdn_id) != ''){
		$fnd_caja_tipo_egreso_estado->setId($hdn_id);
		$fnd_caja_tipo_egreso->setEstado($fnd_caja_tipo_egreso_estado->getEstado());
				
	}else{
		$fnd_caja_tipo_egreso->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_caja_tipo_egreso->control();
			if(!$error->getExisteError()){
				$fnd_caja_tipo_egreso->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: fnd_caja_tipo_egreso_alta.php?cs=1&id='.$fnd_caja_tipo_egreso->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_caja_tipo_egreso->control();
			if(!$error->getExisteError()){
				$fnd_caja_tipo_egreso->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: fnd_caja_tipo_egreso_alta.php?cs=1');
				$fnd_caja_tipo_egreso = new FndCajaTipoEgreso();
			}
		break;
	}
	Gral::setSes('FndCajaTipoEgreso_ULTIMO_INSERTADO', $fnd_caja_tipo_egreso->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_fnd_caja_tipo_egreso_id = Gral::getVars(2, $prefijo.'cmb_fnd_caja_tipo_egreso_id', 0);
	if($cmb_fnd_caja_tipo_egreso_id != 0){
		$fnd_caja_tipo_egreso = FndCajaTipoEgreso::getOxId($cmb_fnd_caja_tipo_egreso_id);
	}else{
	
	$fnd_caja_tipo_egreso->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_caja_tipo_egreso->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_caja_tipo_egreso->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_caja_tipo_egreso->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_caja_tipo_egreso->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_caja_tipo_egreso->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_caja_tipo_egreso->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_caja_tipo_egreso->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_caja_tipo_egreso->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $fnd_caja_tipo_egreso->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/fnd_caja_tipo_egreso/fnd_caja_tipo_egreso_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_fnd_caja_tipo_egreso' width='90%'>
        
				<tr>
				  <td  id="label_fnd_caja_tipo_egreso_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_tipo_egreso_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_tipo_egreso_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_tipo_egreso_txt_descripcion' value='<?php Gral::_echoTxt($fnd_caja_tipo_egreso->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_fnd_caja_tipo_egreso_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_tipo_egreso_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_tipo_egreso_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_tipo_egreso_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_tipo_egreso_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_tipo_egreso_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='fnd_caja_tipo_egreso_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='fnd_caja_tipo_egreso_txt_codigo' value='<?php Gral::_echoTxt($fnd_caja_tipo_egreso->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_fnd_caja_tipo_egreso_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_tipo_egreso_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_tipo_egreso_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_tipo_egreso_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_fnd_caja_tipo_egreso_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_fnd_caja_tipo_egreso_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='fnd_caja_tipo_egreso_txa_observacion' rows='10' cols='50' id='fnd_caja_tipo_egreso_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($fnd_caja_tipo_egreso->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_fnd_caja_tipo_egreso_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_fnd_caja_tipo_egreso_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_fnd_caja_tipo_egreso_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_fnd_caja_tipo_egreso_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_caja_tipo_egreso->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_fnd_caja_tipo_egreso_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='fnd_caja_tipo_egreso'/>
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

