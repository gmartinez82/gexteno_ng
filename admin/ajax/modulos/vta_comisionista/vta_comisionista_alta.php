<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_comisionista';
$db_nombre_pagina = 'vta_comisionista_alta';

$vta_comisionista = new VtaComisionista();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_comisionista = new VtaComisionista();
	if(trim($hdn_id) != '') $vta_comisionista->setId($hdn_id, false);
	$vta_comisionista->setDescripcion(Gral::getVars(1, "vta_comisionista_txt_descripcion"));
	$vta_comisionista->setApellido(Gral::getVars(1, "vta_comisionista_txt_apellido"));
	$vta_comisionista->setNombre(Gral::getVars(1, "vta_comisionista_txt_nombre"));
	$vta_comisionista->setCodigo(Gral::getVars(1, "vta_comisionista_txt_codigo"));
	$vta_comisionista->setObservacion(Gral::getVars(1, "vta_comisionista_txa_observacion"));
	$vta_comisionista->setOrden(Gral::getVars(1, "vta_comisionista_txt_orden", 0));
	$vta_comisionista->setEstado(Gral::getVars(1, "vta_comisionista_cmb_estado", 0));
	$vta_comisionista->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_comisionista_txt_creado")));
	$vta_comisionista->setCreadoPor(Gral::getVars(1, "vta_comisionista__creado_por", 0));
	$vta_comisionista->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_comisionista_txt_modificado")));
	$vta_comisionista->setModificadoPor(Gral::getVars(1, "vta_comisionista__modificado_por", 0));

	$vta_comisionista_estado = new VtaComisionista();
	if(trim($hdn_id) != ''){
		$vta_comisionista_estado->setId($hdn_id);
		$vta_comisionista->setEstado($vta_comisionista_estado->getEstado());
				
	}else{
		$vta_comisionista->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_comisionista->control();
			if(!$error->getExisteError()){
				$vta_comisionista->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_comisionista_alta.php?cs=1&id='.$vta_comisionista->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_comisionista->control();
			if(!$error->getExisteError()){
				$vta_comisionista->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_comisionista_alta.php?cs=1');
				$vta_comisionista = new VtaComisionista();
			}
		break;
	}
	Gral::setSes('VtaComisionista_ULTIMO_INSERTADO', $vta_comisionista->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_comisionista_id = Gral::getVars(2, $prefijo.'cmb_vta_comisionista_id', 0);
	if($cmb_vta_comisionista_id != 0){
		$vta_comisionista = VtaComisionista::getOxId($cmb_vta_comisionista_id);
	}else{
	
	$vta_comisionista->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_comisionista->setApellido(Gral::getVars(2, "apellido", ''));
	$vta_comisionista->setNombre(Gral::getVars(2, "nombre", ''));
	$vta_comisionista->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_comisionista->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_comisionista->setOrden(Gral::getVars(2, "orden", 0));
	$vta_comisionista->setEstado(Gral::getVars(2, "estado", 0));
	$vta_comisionista->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_comisionista->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_comisionista->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_comisionista->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_comisionista->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_comisionista/vta_comisionista_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_comisionista'>
        
				<tr>
				  <td  id="label_vta_comisionista_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_comisionista_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_comisionista_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_comisionista_txt_descripcion' value='<?php Gral::_echoTxt($vta_comisionista->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_comisionista_txt_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                        <?php Lang::_lang('Apellido') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_apellido', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_apellido', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_comisionista_txt_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_comisionista_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_comisionista_txt_apellido' value='<?php Gral::_echoTxt($vta_comisionista->getApellido(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_comisionista_txt_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                        <?php Lang::_lang('Nombre') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nombre', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nombre', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_comisionista_txt_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_comisionista_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_comisionista_txt_nombre' value='<?php Gral::_echoTxt($vta_comisionista->getNombre(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_comisionista_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_comisionista_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_comisionista_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_comisionista_txt_codigo' value='<?php Gral::_echoTxt($vta_comisionista->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_vta_comisionista_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_vta_comisionista_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_comisionista_txa_observacion' rows='10' cols='50' id='vta_comisionista_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_comisionista->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_comisionista->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_comisionista_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_comisionista'/>
		  <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>
		  
		  <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

		  <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />
			  
	
          <input name='btn_guardarnvo' type='button' class='btn_guardarnvo' value="<?php Lang::_lang('Guardar y Agregar Nuevo') ?>" />
		  <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
        </tr>
      </table>
	  
	  
</form>
</body>
</html>
<script>
setInit();
</script>

