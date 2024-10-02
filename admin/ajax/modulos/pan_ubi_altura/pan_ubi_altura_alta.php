<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PAN_UBI_ALTURA_ALTA')){
    echo "No tiene asignada la credencial PAN_UBI_ALTURA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pan_ubi_altura';
$db_nombre_pagina = 'pan_ubi_altura_alta';

$pan_ubi_altura = new PanUbiAltura();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pan_ubi_altura = new PanUbiAltura();
	if(trim($hdn_id) != '') $pan_ubi_altura->setId($hdn_id, false);
	$pan_ubi_altura->setDescripcion(Gral::getVars(1, "pan_ubi_altura_txt_descripcion"));
	$pan_ubi_altura->setCodigo(Gral::getVars(1, "pan_ubi_altura_txt_codigo"));
	$pan_ubi_altura->setObservacion(Gral::getVars(1, "pan_ubi_altura_txa_observacion"));
	$pan_ubi_altura->setOrden(Gral::getVars(1, "pan_ubi_altura_txt_orden", 0));
	$pan_ubi_altura->setEstado(Gral::getVars(1, "pan_ubi_altura__estado", 0));
	$pan_ubi_altura->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pan_ubi_altura_txt_creado")));
	$pan_ubi_altura->setCreadoPor(Gral::getVars(1, "pan_ubi_altura__creado_por", null));
	$pan_ubi_altura->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pan_ubi_altura_txt_modificado")));
	$pan_ubi_altura->setModificadoPor(Gral::getVars(1, "pan_ubi_altura__modificado_por", null));

	$pan_ubi_altura_estado = new PanUbiAltura();
	if(trim($hdn_id) != ''){
		$pan_ubi_altura_estado->setId($hdn_id);
		$pan_ubi_altura->setEstado($pan_ubi_altura_estado->getEstado());
				
	}else{
		$pan_ubi_altura->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pan_ubi_altura->control();
			if(!$error->getExisteError()){
				$pan_ubi_altura->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pan_ubi_altura_alta.php?cs=1&id='.$pan_ubi_altura->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pan_ubi_altura->control();
			if(!$error->getExisteError()){
				$pan_ubi_altura->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pan_ubi_altura_alta.php?cs=1');
				$pan_ubi_altura = new PanUbiAltura();
			}
		break;
	}
	Gral::setSes('PanUbiAltura_ULTIMO_INSERTADO', $pan_ubi_altura->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pan_ubi_altura_id = Gral::getVars(2, $prefijo.'cmb_pan_ubi_altura_id', 0);
	if($cmb_pan_ubi_altura_id != 0){
		$pan_ubi_altura = PanUbiAltura::getOxId($cmb_pan_ubi_altura_id);
	}else{
	
	$pan_ubi_altura->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pan_ubi_altura->setCodigo(Gral::getVars(2, "codigo", ''));
	$pan_ubi_altura->setObservacion(Gral::getVars(2, "observacion", ''));
	$pan_ubi_altura->setOrden(Gral::getVars(2, "orden", 0));
	$pan_ubi_altura->setEstado(Gral::getVars(2, "estado", 0));
	$pan_ubi_altura->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pan_ubi_altura->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pan_ubi_altura->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pan_ubi_altura->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pan_ubi_altura->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pan_ubi_altura/pan_ubi_altura_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pan_ubi_altura' width='90%'>
        
				<tr>
				  <td  id="label_pan_ubi_altura_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_ubi_altura_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_ubi_altura_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_ubi_altura_txt_descripcion' value='<?php Gral::_echoTxt($pan_ubi_altura->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pan_ubi_altura_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_ubi_altura_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_ubi_altura_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_ubi_altura_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_ubi_altura_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_ubi_altura_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_ubi_altura_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_ubi_altura_txt_codigo' value='<?php Gral::_echoTxt($pan_ubi_altura->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_ubi_altura_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_ubi_altura_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_ubi_altura_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_ubi_altura_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_ubi_altura_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_ubi_altura_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pan_ubi_altura_txa_observacion' rows='10' cols='50' id='pan_ubi_altura_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pan_ubi_altura->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pan_ubi_altura_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_ubi_altura_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_ubi_altura_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_ubi_altura_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pan_ubi_altura->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pan_ubi_altura_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pan_ubi_altura'/>
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

