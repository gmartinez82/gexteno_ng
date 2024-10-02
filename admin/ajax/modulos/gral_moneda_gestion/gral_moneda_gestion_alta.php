<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_moneda';
$db_nombre_pagina = 'gral_moneda_alta';

$gral_moneda = new GralMoneda();
$error = new Error();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_moneda = new GralMoneda();
	if(trim($hdn_id) != '') $gral_moneda->setId($hdn_id, false);
	$gral_moneda->setDescripcion(Gral::getVars(1, "gral_moneda_txt_descripcion"));
	$gral_moneda->setCodigo(Gral::getVars(1, "gral_moneda_txt_codigo"));
	$gral_moneda->setSimbolo(Gral::getVars(1, "gral_moneda_txt_simbolo"));
	$gral_moneda->setCotizacionRespectoPeso(Gral::getVars(1, "gral_moneda_txt_cotizacion_respecto_peso", 0));
	$gral_moneda->setObservacion(Gral::getVars(1, "gral_moneda_txa_observacion"));
	$gral_moneda->setOrden(Gral::getVars(1, "gral_moneda_txt_orden", 0));
	$gral_moneda->setEstado(Gral::getVars(1, "gral_moneda__estado", 0));
	$gral_moneda->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_moneda_txt_creado")));
	$gral_moneda->setCreadoPor(Gral::getVars(1, "gral_moneda__creado_por", 0));
	$gral_moneda->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_moneda_txt_modificado")));
	$gral_moneda->setModificadoPor(Gral::getVars(1, "gral_moneda__modificado_por", 0));

	$gral_moneda_estado = new GralMoneda();
	if(trim($hdn_id) != ''){
		$gral_moneda_estado->setId($hdn_id);
		$gral_moneda->setEstado($gral_moneda_estado->getEstado());
				
	}else{
		$gral_moneda->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_moneda->control();
			if(!$error->getExisteError()){
				$gral_moneda->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_moneda_alta.php?cs=1&id='.$gral_moneda->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_moneda->control();
			if(!$error->getExisteError()){
				$gral_moneda->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_moneda_alta.php?cs=1');
				$gral_moneda = new GralMoneda();
			}
		break;
	}
	Gral::setSes('GralMoneda_ULTIMO_INSERTADO', $gral_moneda->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_moneda_id = Gral::getVars(2, $prefijo.'cmb_gral_moneda_id', 0);
	if($cmb_gral_moneda_id != 0){
		$gral_moneda = GralMoneda::getOxId($cmb_gral_moneda_id);
	}else{
	
	$gral_moneda->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_moneda->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_moneda->setSimbolo(Gral::getVars(2, "simbolo", ''));
	$gral_moneda->setCotizacionRespectoPeso(Gral::getVars(2, "cotizacion_respecto_peso", 0));
	$gral_moneda->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_moneda->setOrden(Gral::getVars(2, "orden", 0));
	$gral_moneda->setEstado(Gral::getVars(2, "estado", 0));
	$gral_moneda->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_moneda->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_moneda->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_moneda->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_moneda->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_moneda/gral_moneda_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_moneda'>
        
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Descripcion') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_gral_moneda_txt_descripcion">

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_descripcion' value='<?php Gral::_echoTxt($gral_moneda->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Codigo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_gral_moneda_txt_codigo">

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_codigo' value='<?php Gral::_echoTxt($gral_moneda->getCodigo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Simbolo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_simbolo', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_simbolo', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_gral_moneda_txt_simbolo">

					<?php $error_input_css = ($error->getErrorXIndice('simbolo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_simbolo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_moneda_txt_simbolo' value='<?php Gral::_echoTxt($gral_moneda->getSimbolo(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('simbolo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Cot Resp Peso') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cotizacion_respecto_peso', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cotizacion_respecto_peso', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_gral_moneda_txt_cotizacion_respecto_peso">

					<?php $error_input_css = ($error->getErrorXIndice('cotizacion_respecto_peso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_moneda_txt_cotizacion_respecto_peso' type='text' class='textbox <?php echo $error_input_css ?>' id='gral_moneda_txt_cotizacion_respecto_peso' value='<?php Gral::_echoTxt($gral_moneda->getCotizacionRespectoPeso(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cotizacion_respecto_peso')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Observaciones') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_gral_moneda_txa_observacion">

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_moneda_txa_observacion' rows='10' cols='50' id='gral_moneda_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_moneda->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_moneda->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_moneda_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_moneda'/>
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

