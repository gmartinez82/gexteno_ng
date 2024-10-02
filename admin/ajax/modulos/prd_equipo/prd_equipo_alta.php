<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRD_EQUIPO_ALTA')){
    echo "No tiene asignada la credencial PRD_EQUIPO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prd_equipo';
$db_nombre_pagina = 'prd_equipo_alta';

$prd_equipo = new PrdEquipo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prd_equipo = new PrdEquipo();
	if(trim($hdn_id) != '') $prd_equipo->setId($hdn_id, false);
	$prd_equipo->setDescripcion(Gral::getVars(1, "prd_equipo_txt_descripcion"));
	$prd_equipo->setDescripcionCorta(Gral::getVars(1, "prd_equipo_txt_descripcion_corta"));
	$prd_equipo->setCodigo(Gral::getVars(1, "prd_equipo_txt_codigo"));
	$prd_equipo->setObservacion(Gral::getVars(1, "prd_equipo_txa_observacion"));
	$prd_equipo->setOrden(Gral::getVars(1, "prd_equipo_txt_orden", 0));
	$prd_equipo->setEstado(Gral::getVars(1, "prd_equipo_cmb_estado", 0));
	$prd_equipo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_equipo_txt_creado")));
	$prd_equipo->setCreadoPor(Gral::getVars(1, "prd_equipo__creado_por", 0));
	$prd_equipo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prd_equipo_txt_modificado")));
	$prd_equipo->setModificadoPor(Gral::getVars(1, "prd_equipo__modificado_por", 0));

	$prd_equipo_estado = new PrdEquipo();
	if(trim($hdn_id) != ''){
		$prd_equipo_estado->setId($hdn_id);
		$prd_equipo->setEstado($prd_equipo_estado->getEstado());
				
	}else{
		$prd_equipo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prd_equipo->control();
			if(!$error->getExisteError()){
				$prd_equipo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prd_equipo_alta.php?cs=1&id='.$prd_equipo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prd_equipo->control();
			if(!$error->getExisteError()){
				$prd_equipo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prd_equipo_alta.php?cs=1');
				$prd_equipo = new PrdEquipo();
			}
		break;
	}
	Gral::setSes('PrdEquipo_ULTIMO_INSERTADO', $prd_equipo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prd_equipo_id = Gral::getVars(2, $prefijo.'cmb_prd_equipo_id', 0);
	if($cmb_prd_equipo_id != 0){
		$prd_equipo = PrdEquipo::getOxId($cmb_prd_equipo_id);
	}else{
	
	$prd_equipo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prd_equipo->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$prd_equipo->setCodigo(Gral::getVars(2, "codigo", ''));
	$prd_equipo->setObservacion(Gral::getVars(2, "observacion", ''));
	$prd_equipo->setOrden(Gral::getVars(2, "orden", 0));
	$prd_equipo->setEstado(Gral::getVars(2, "estado", 0));
	$prd_equipo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prd_equipo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prd_equipo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prd_equipo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prd_equipo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prd_equipo/prd_equipo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prd_equipo' width='90%'>
        
				<tr>
				  <td  id="label_prd_equipo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_equipo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_equipo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_equipo_txt_descripcion' value='<?php Gral::_echoTxt($prd_equipo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_equipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_equipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_equipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_equipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_equipo_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_equipo_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_equipo_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_equipo_txt_descripcion_corta' value='<?php Gral::_echoTxt($prd_equipo->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prd_equipo_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_equipo_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_equipo_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_equipo_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_equipo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_equipo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prd_equipo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prd_equipo_txt_codigo' value='<?php Gral::_echoTxt($prd_equipo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prd_equipo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_equipo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_equipo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_equipo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prd_equipo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prd_equipo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prd_equipo_txa_observacion' rows='10' cols='50' id='prd_equipo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prd_equipo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prd_equipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prd_equipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prd_equipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prd_equipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_equipo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prd_equipo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prd_equipo'/>
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

