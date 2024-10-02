<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA')){
    echo "No tiene asignada la credencial CTRL_EQUIPO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ctrl_equipo';
$db_nombre_pagina = 'ctrl_equipo_alta';

$ctrl_equipo = new CtrlEquipo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ctrl_equipo = new CtrlEquipo();
	if(trim($hdn_id) != '') $ctrl_equipo->setId($hdn_id, false);
	$ctrl_equipo->setDescripcion(Gral::getVars(1, "ctrl_equipo_txt_descripcion"));
	$ctrl_equipo->setCodigo(Gral::getVars(1, "ctrl_equipo_txt_codigo"));
	$ctrl_equipo->setObservacion(Gral::getVars(1, "ctrl_equipo_txa_observacion"));
	$ctrl_equipo->setOrden(Gral::getVars(1, "ctrl_equipo_txt_orden", 0));
	$ctrl_equipo->setEstado(Gral::getVars(1, "ctrl_equipo_cmb_estado", 0));
	$ctrl_equipo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ctrl_equipo_txt_creado")));
	$ctrl_equipo->setCreadoPor(Gral::getVars(1, "ctrl_equipo__creado_por", 0));
	$ctrl_equipo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ctrl_equipo_txt_modificado")));
	$ctrl_equipo->setModificadoPor(Gral::getVars(1, "ctrl_equipo__modificado_por", 0));

	$ctrl_equipo_estado = new CtrlEquipo();
	if(trim($hdn_id) != ''){
		$ctrl_equipo_estado->setId($hdn_id);
		$ctrl_equipo->setEstado($ctrl_equipo_estado->getEstado());
				
	}else{
		$ctrl_equipo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ctrl_equipo->control();
			if(!$error->getExisteError()){
				$ctrl_equipo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ctrl_equipo_alta.php?cs=1&id='.$ctrl_equipo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ctrl_equipo->control();
			if(!$error->getExisteError()){
				$ctrl_equipo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ctrl_equipo_alta.php?cs=1');
				$ctrl_equipo = new CtrlEquipo();
			}
		break;
	}
	Gral::setSes('CtrlEquipo_ULTIMO_INSERTADO', $ctrl_equipo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ctrl_equipo_id = Gral::getVars(2, $prefijo.'cmb_ctrl_equipo_id', 0);
	if($cmb_ctrl_equipo_id != 0){
		$ctrl_equipo = CtrlEquipo::getOxId($cmb_ctrl_equipo_id);
	}else{
	
	$ctrl_equipo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ctrl_equipo->setCodigo(Gral::getVars(2, "codigo", ''));
	$ctrl_equipo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ctrl_equipo->setOrden(Gral::getVars(2, "orden", 0));
	$ctrl_equipo->setEstado(Gral::getVars(2, "estado", 0));
	$ctrl_equipo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ctrl_equipo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ctrl_equipo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ctrl_equipo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ctrl_equipo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ctrl_equipo/ctrl_equipo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ctrl_equipo' width='90%'>
        
				<tr>
				  <td  id="label_ctrl_equipo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ctrl_equipo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ctrl_equipo_txt_descripcion' value='<?php Gral::_echoTxt($ctrl_equipo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ctrl_equipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ctrl_equipo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ctrl_equipo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ctrl_equipo_txa_observacion' rows='10' cols='50' id='ctrl_equipo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ctrl_equipo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ctrl_equipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ctrl_equipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ctrl_equipo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ctrl_equipo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ctrl_equipo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ctrl_equipo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ctrl_equipo'/>
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

