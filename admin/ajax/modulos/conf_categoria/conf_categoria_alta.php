<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CONF_CATEGORIA_ALTA')){
    echo "No tiene asignada la credencial CONF_CATEGORIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'conf_categoria';
$db_nombre_pagina = 'conf_categoria_alta';

$conf_categoria = new ConfCategoria();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$conf_categoria = new ConfCategoria();
	if(trim($hdn_id) != '') $conf_categoria->setId($hdn_id, false);
	$conf_categoria->setDescripcion(Gral::getVars(1, "conf_categoria_txt_descripcion"));
	$conf_categoria->setCodigo(Gral::getVars(1, "conf_categoria_txt_codigo"));
	$conf_categoria->setObservacion(Gral::getVars(1, "conf_categoria_txa_observacion"));
	$conf_categoria->setOrden(Gral::getVars(1, "conf_categoria_txt_orden", 0));
	$conf_categoria->setEstado(Gral::getVars(1, "conf_categoria_cmb_estado", 0));
	$conf_categoria->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "conf_categoria_txt_creado")));
	$conf_categoria->setCreadoPor(Gral::getVars(1, "conf_categoria__creado_por", 0));
	$conf_categoria->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "conf_categoria_txt_modificado")));
	$conf_categoria->setModificadoPor(Gral::getVars(1, "conf_categoria__modificado_por", 0));

	$conf_categoria_estado = new ConfCategoria();
	if(trim($hdn_id) != ''){
		$conf_categoria_estado->setId($hdn_id);
		$conf_categoria->setEstado($conf_categoria_estado->getEstado());
				
	}else{
		$conf_categoria->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $conf_categoria->control();
			if(!$error->getExisteError()){
				$conf_categoria->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: conf_categoria_alta.php?cs=1&id='.$conf_categoria->getId());
			}
		break;
		case 'guardarnvo':
			$error = $conf_categoria->control();
			if(!$error->getExisteError()){
				$conf_categoria->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: conf_categoria_alta.php?cs=1');
				$conf_categoria = new ConfCategoria();
			}
		break;
	}
	Gral::setSes('ConfCategoria_ULTIMO_INSERTADO', $conf_categoria->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_conf_categoria_id = Gral::getVars(2, $prefijo.'cmb_conf_categoria_id', 0);
	if($cmb_conf_categoria_id != 0){
		$conf_categoria = ConfCategoria::getOxId($cmb_conf_categoria_id);
	}else{
	
	$conf_categoria->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$conf_categoria->setCodigo(Gral::getVars(2, "codigo", ''));
	$conf_categoria->setObservacion(Gral::getVars(2, "observacion", ''));
	$conf_categoria->setOrden(Gral::getVars(2, "orden", 0));
	$conf_categoria->setEstado(Gral::getVars(2, "estado", 0));
	$conf_categoria->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$conf_categoria->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$conf_categoria->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$conf_categoria->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $conf_categoria->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/conf_categoria/conf_categoria_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_conf_categoria' width='90%'>
        
				<tr>
				  <td  id="label_conf_categoria_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_categoria_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='conf_categoria_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='conf_categoria_txt_descripcion' value='<?php Gral::_echoTxt($conf_categoria->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_conf_categoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_categoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_categoria_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_categoria_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_conf_categoria_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_categoria_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='conf_categoria_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='conf_categoria_txt_codigo' value='<?php Gral::_echoTxt($conf_categoria->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_conf_categoria_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_categoria_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_categoria_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_categoria_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_conf_categoria_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_conf_categoria_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='conf_categoria_txa_observacion' rows='10' cols='50' id='conf_categoria_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($conf_categoria->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_conf_categoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_conf_categoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_conf_categoria_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_conf_categoria_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($conf_categoria->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_conf_categoria_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='conf_categoria'/>
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

