<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_ALTA')){
    echo "No tiene asignada la credencial CLI_TIPO_CLIENTE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cli_tipo_cliente';
$db_nombre_pagina = 'cli_tipo_cliente_alta';

$cli_tipo_cliente = new CliTipoCliente();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cli_tipo_cliente = new CliTipoCliente();
	if(trim($hdn_id) != '') $cli_tipo_cliente->setId($hdn_id, false);
	$cli_tipo_cliente->setDescripcion(Gral::getVars(1, "cli_tipo_cliente_txt_descripcion"));
	$cli_tipo_cliente->setCodigo(Gral::getVars(1, "cli_tipo_cliente_txt_codigo"));
	$cli_tipo_cliente->setObservacion(Gral::getVars(1, "cli_tipo_cliente_txa_observacion"));
	$cli_tipo_cliente->setOrden(Gral::getVars(1, "cli_tipo_cliente_txt_orden", 0));
	$cli_tipo_cliente->setEstado(Gral::getVars(1, "cli_tipo_cliente_cmb_estado", 0));
	$cli_tipo_cliente->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_tipo_cliente_txt_creado")));
	$cli_tipo_cliente->setCreadoPor(Gral::getVars(1, "cli_tipo_cliente__creado_por", 0));
	$cli_tipo_cliente->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_tipo_cliente_txt_modificado")));
	$cli_tipo_cliente->setModificadoPor(Gral::getVars(1, "cli_tipo_cliente__modificado_por", 0));

	$cli_tipo_cliente_estado = new CliTipoCliente();
	if(trim($hdn_id) != ''){
		$cli_tipo_cliente_estado->setId($hdn_id);
		$cli_tipo_cliente->setEstado($cli_tipo_cliente_estado->getEstado());
				
	}else{
		$cli_tipo_cliente->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_tipo_cliente->control();
			if(!$error->getExisteError()){
				$cli_tipo_cliente->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cli_tipo_cliente_alta.php?cs=1&id='.$cli_tipo_cliente->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_tipo_cliente->control();
			if(!$error->getExisteError()){
				$cli_tipo_cliente->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cli_tipo_cliente_alta.php?cs=1');
				$cli_tipo_cliente = new CliTipoCliente();
			}
		break;
	}
	Gral::setSes('CliTipoCliente_ULTIMO_INSERTADO', $cli_tipo_cliente->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cli_tipo_cliente_id = Gral::getVars(2, $prefijo.'cmb_cli_tipo_cliente_id', 0);
	if($cmb_cli_tipo_cliente_id != 0){
		$cli_tipo_cliente = CliTipoCliente::getOxId($cmb_cli_tipo_cliente_id);
	}else{
	
	$cli_tipo_cliente->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_tipo_cliente->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_tipo_cliente->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_tipo_cliente->setOrden(Gral::getVars(2, "orden", 0));
	$cli_tipo_cliente->setEstado(Gral::getVars(2, "estado", 0));
	$cli_tipo_cliente->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_tipo_cliente->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_tipo_cliente->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_tipo_cliente->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cli_tipo_cliente->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cli_tipo_cliente/cli_tipo_cliente_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cli_tipo_cliente' width='90%'>
        
				<tr>
				  <td  id="label_cli_tipo_cliente_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_tipo_cliente_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_tipo_cliente_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_tipo_cliente_txt_codigo' value='<?php Gral::_echoTxt($cli_tipo_cliente->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_tipo_cliente_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_tipo_cliente_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_tipo_cliente_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_tipo_cliente_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_tipo_cliente_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_tipo_cliente_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cli_tipo_cliente_txa_observacion' rows='10' cols='50' id='cli_tipo_cliente_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cli_tipo_cliente->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cli_tipo_cliente_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_tipo_cliente_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_tipo_cliente_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_tipo_cliente_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_tipo_cliente->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cli_tipo_cliente_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cli_tipo_cliente'/>
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

