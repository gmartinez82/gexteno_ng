<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_TIPO_CONSUMO_ALTA')){
    echo "No tiene asignada la credencial INS_TIPO_CONSUMO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_tipo_consumo';
$db_nombre_pagina = 'ins_tipo_consumo_alta';

$ins_tipo_consumo = new InsTipoConsumo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_tipo_consumo = new InsTipoConsumo();
	if(trim($hdn_id) != '') $ins_tipo_consumo->setId($hdn_id, false);
	$ins_tipo_consumo->setDescripcion(Gral::getVars(1, "ins_tipo_consumo_txt_descripcion"));
	$ins_tipo_consumo->setCodigo(Gral::getVars(1, "ins_tipo_consumo_txt_codigo"));
	$ins_tipo_consumo->setObservacion(Gral::getVars(1, "ins_tipo_consumo_txa_observacion"));
	$ins_tipo_consumo->setOrden(Gral::getVars(1, "ins_tipo_consumo_txt_orden", 0));
	$ins_tipo_consumo->setEstado(Gral::getVars(1, "ins_tipo_consumo__estado", 0));
	$ins_tipo_consumo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_tipo_consumo_txt_creado")));
	$ins_tipo_consumo->setCreadoPor(Gral::getVars(1, "ins_tipo_consumo__creado_por", null));
	$ins_tipo_consumo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_tipo_consumo_txt_modificado")));
	$ins_tipo_consumo->setModificadoPor(Gral::getVars(1, "ins_tipo_consumo__modificado_por", null));

	$ins_tipo_consumo_estado = new InsTipoConsumo();
	if(trim($hdn_id) != ''){
		$ins_tipo_consumo_estado->setId($hdn_id);
		$ins_tipo_consumo->setEstado($ins_tipo_consumo_estado->getEstado());
				
	}else{
		$ins_tipo_consumo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_tipo_consumo->control();
			if(!$error->getExisteError()){
				$ins_tipo_consumo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_tipo_consumo_alta.php?cs=1&id='.$ins_tipo_consumo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_tipo_consumo->control();
			if(!$error->getExisteError()){
				$ins_tipo_consumo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_tipo_consumo_alta.php?cs=1');
				$ins_tipo_consumo = new InsTipoConsumo();
			}
		break;
	}
	Gral::setSes('InsTipoConsumo_ULTIMO_INSERTADO', $ins_tipo_consumo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_tipo_consumo_id = Gral::getVars(2, $prefijo.'cmb_ins_tipo_consumo_id', 0);
	if($cmb_ins_tipo_consumo_id != 0){
		$ins_tipo_consumo = InsTipoConsumo::getOxId($cmb_ins_tipo_consumo_id);
	}else{
	
	$ins_tipo_consumo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_tipo_consumo->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_tipo_consumo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_tipo_consumo->setOrden(Gral::getVars(2, "orden", 0));
	$ins_tipo_consumo->setEstado(Gral::getVars(2, "estado", 0));
	$ins_tipo_consumo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_tipo_consumo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_tipo_consumo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_tipo_consumo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_tipo_consumo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_tipo_consumo/ins_tipo_consumo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_tipo_consumo' width='90%'>
        
				<tr>
				  <td  id="label_ins_tipo_consumo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_consumo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_consumo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_tipo_consumo_txt_descripcion' value='<?php Gral::_echoTxt($ins_tipo_consumo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_tipo_consumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_consumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_consumo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_consumo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_consumo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_consumo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_consumo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_tipo_consumo_txt_codigo' value='<?php Gral::_echoTxt($ins_tipo_consumo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_tipo_consumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_consumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_consumo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_consumo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_consumo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_consumo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_tipo_consumo_txa_observacion' rows='10' cols='50' id='ins_tipo_consumo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_tipo_consumo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_tipo_consumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_consumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_consumo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_consumo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_tipo_consumo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_tipo_consumo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_tipo_consumo'/>
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

