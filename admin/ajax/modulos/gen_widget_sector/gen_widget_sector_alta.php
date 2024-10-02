<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEN_WIDGET_SECTOR_ALTA')){
    echo "No tiene asignada la credencial GEN_WIDGET_SECTOR_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gen_widget_sector';
$db_nombre_pagina = 'gen_widget_sector_alta';

$gen_widget_sector = new GenWidgetSector();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gen_widget_sector = new GenWidgetSector();
	if(trim($hdn_id) != '') $gen_widget_sector->setId($hdn_id, false);
	$gen_widget_sector->setDescripcion(Gral::getVars(1, "gen_widget_sector_txt_descripcion"));
	$gen_widget_sector->setCodigo(Gral::getVars(1, "gen_widget_sector_txt_codigo"));
	$gen_widget_sector->setObservacion(Gral::getVars(1, "gen_widget_sector_txa_observacion"));
	$gen_widget_sector->setOrden(Gral::getVars(1, "gen_widget_sector_txt_orden", 0));
	$gen_widget_sector->setEstado(Gral::getVars(1, "gen_widget_sector_cmb_estado", 0));
	$gen_widget_sector->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_widget_sector_txt_creado")));
	$gen_widget_sector->setCreadoPor(Gral::getVars(1, "gen_widget_sector__creado_por", 0));
	$gen_widget_sector->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gen_widget_sector_txt_modificado")));
	$gen_widget_sector->setModificadoPor(Gral::getVars(1, "gen_widget_sector__modificado_por", 0));

	$gen_widget_sector_estado = new GenWidgetSector();
	if(trim($hdn_id) != ''){
		$gen_widget_sector_estado->setId($hdn_id);
		$gen_widget_sector->setEstado($gen_widget_sector_estado->getEstado());
				
	}else{
		$gen_widget_sector->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gen_widget_sector->control();
			if(!$error->getExisteError()){
				$gen_widget_sector->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gen_widget_sector_alta.php?cs=1&id='.$gen_widget_sector->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gen_widget_sector->control();
			if(!$error->getExisteError()){
				$gen_widget_sector->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gen_widget_sector_alta.php?cs=1');
				$gen_widget_sector = new GenWidgetSector();
			}
		break;
	}
	Gral::setSes('GenWidgetSector_ULTIMO_INSERTADO', $gen_widget_sector->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gen_widget_sector_id = Gral::getVars(2, $prefijo.'cmb_gen_widget_sector_id', 0);
	if($cmb_gen_widget_sector_id != 0){
		$gen_widget_sector = GenWidgetSector::getOxId($cmb_gen_widget_sector_id);
	}else{
	
	$gen_widget_sector->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gen_widget_sector->setCodigo(Gral::getVars(2, "codigo", ''));
	$gen_widget_sector->setObservacion(Gral::getVars(2, "observacion", ''));
	$gen_widget_sector->setOrden(Gral::getVars(2, "orden", 0));
	$gen_widget_sector->setEstado(Gral::getVars(2, "estado", 0));
	$gen_widget_sector->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gen_widget_sector->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gen_widget_sector->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gen_widget_sector->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gen_widget_sector->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gen_widget_sector/gen_widget_sector_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gen_widget_sector' width='90%'>
        
				<tr>
				  <td  id="label_gen_widget_sector_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_sector_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_widget_sector_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_widget_sector_txt_descripcion' value='<?php Gral::_echoTxt($gen_widget_sector->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gen_widget_sector_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_sector_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_sector_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_sector_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_sector_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_sector_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gen_widget_sector_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gen_widget_sector_txt_codigo' value='<?php Gral::_echoTxt($gen_widget_sector->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gen_widget_sector_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_sector_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_sector_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_sector_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gen_widget_sector_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gen_widget_sector_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gen_widget_sector_txa_observacion' rows='10' cols='50' id='gen_widget_sector_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gen_widget_sector->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gen_widget_sector_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gen_widget_sector_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gen_widget_sector_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gen_widget_sector_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gen_widget_sector->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gen_widget_sector_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gen_widget_sector'/>
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

