<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_PRCA_PROCESO_ALTA')){
    echo "No tiene asignada la credencial GEN_PRCA_PROCESO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_prca_proceso';
$db_nombre_pagina = 'gen_prca_proceso_alta';

$gen_prca_proceso = new GenPrcaProceso();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_prca_proceso = new GenPrcaProceso();
	if(trim($hdn_id) != '') $gen_prca_proceso->setId($hdn_id, false);
	$gen_prca_proceso->setDescripcion(Gral::getVars(1, "gen_prca_proceso_txt_descripcion"));
	$gen_prca_proceso->setCodigo(Gral::getVars(1, "gen_prca_proceso_txt_codigo"));
	$gen_prca_proceso->setObservacion(Gral::getVars(1, "gen_prca_proceso_txa_observacion"));
	$gen_prca_proceso->setOrden(Gral::getVars(1, "gen_prca_proceso_txt_orden", 0));
	$gen_prca_proceso->setEstado(Gral::getVars(1, "gen_prca_proceso_cmb_estado", 0));
	$gen_prca_proceso->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_prca_proceso_txt_creado")));
	$gen_prca_proceso->setCreadoPor(Gral::getVars(1, "gen_prca_proceso__creado_por", 0));
	$gen_prca_proceso->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_prca_proceso_txt_modificado")));
	$gen_prca_proceso->setModificadoPor(Gral::getVars(1, "gen_prca_proceso__modificado_por", 0));

	$gen_prca_proceso_estado = new GenPrcaProceso();
	if(trim($hdn_id) != ''){
		$gen_prca_proceso_estado->setId($hdn_id);
		$gen_prca_proceso->setEstado($gen_prca_proceso_estado->getEstado());
				
	}else{
		$gen_prca_proceso->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_prca_proceso->control();
			if(!$error->getExisteError()){
				$gen_prca_proceso->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_prca_proceso_alta.php?cs=1&id='.$gen_prca_proceso->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_prca_proceso->control();
			if(!$error->getExisteError()){
				$gen_prca_proceso->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_prca_proceso_alta.php?cs=1');
				$gen_prca_proceso = new GenPrcaProceso();
			}
		break;
	}
	Gral::setSes('GenPrcaProceso_ULTIMO_INSERTADO', $gen_prca_proceso->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_prca_proceso_id = Gral::getVars(2, $prefijo.'cmb_gen_prca_proceso_id', 0);
	if($cmb_gen_prca_proceso_id != 0){
		$gen_prca_proceso = GenPrcaProceso::getOxId($cmb_gen_prca_proceso_id);
	}else{
	
	$gen_prca_proceso->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_prca_proceso->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_prca_proceso->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_prca_proceso->setOrden(Gral::getVars(2, "orden", 0));
	$gen_prca_proceso->setEstado(Gral::getVars(2, "estado", 0));
	$gen_prca_proceso->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_prca_proceso->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_prca_proceso->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_prca_proceso->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_prca_proceso->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_prca_proceso/gen_prca_proceso_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_prca_proceso' width='90%'>
        
				<tr>
				  <td  id="label_gen_prca_proceso_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_proceso_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_prca_proceso_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_prca_proceso_txt_descripcion' value='<?php Gral::_echoTxt($gen_prca_proceso->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_prca_proceso_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_proceso_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_proceso_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_proceso_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_proceso_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_proceso_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_prca_proceso_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_prca_proceso_txt_codigo' value='<?php Gral::_echoTxt($gen_prca_proceso->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_prca_proceso_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_proceso_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_proceso_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_proceso_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_prca_proceso_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_prca_proceso_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_prca_proceso_txa_observacion' rows='10' cols='50' id='gen_prca_proceso_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_prca_proceso->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_prca_proceso_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_prca_proceso_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_prca_proceso_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_prca_proceso_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_prca_proceso->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_prca_proceso_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_prca_proceso'/>
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

