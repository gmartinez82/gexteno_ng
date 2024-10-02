<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_comisionista';
$db_nombre_pagina = 'vta_comisionista_alta';


$vta_comisionista = new VtaComisionista();
$error = new DbError();

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');
	
	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_comisionista = new VtaComisionista();
	if(trim($hdn_id) != '') $vta_comisionista->setId($hdn_id, false);
	$vta_comisionista->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$vta_comisionista->setApellido(Gral::getVars(1, "txt_apellido"));
	$vta_comisionista->setNombre(Gral::getVars(1, "txt_nombre"));
	$vta_comisionista->setCodigo(Gral::getVars(1, "txt_codigo"));
	$vta_comisionista->setObservacion(Gral::getVars(1, "txa_observacion"));
	$vta_comisionista->setOrden(Gral::getVars(1, "txt_orden", 0));
	$vta_comisionista->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$vta_comisionista->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$vta_comisionista->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$vta_comisionista->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$vta_comisionista->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

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
								
				header('Location: ?cs=1&id='.$vta_comisionista->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_comisionista->control();
			if(!$error->getExisteError()){
				$vta_comisionista->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$vta_comisionista->setId($hdn_id);
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

?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">>
<?php include 'parciales/encabezado.php'?>
<?php include 'parciales/user.php';?>
<?php include 'parciales/mensajes.php' ?>
    
<form id='formu' name='formu' method='post' action='' >
<div id='menu'><?php include 'parciales/menuh.php' ?></div>
<div id='buscador'>
<?php include 'parciales/tips/vta_comisionista.php';?>
    	
</div>
<div id='cuerpo' >
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaComisionista') ?> </div>
	<div class='contenedor central'>
	  <div class='ubicacion'>
		  <label class='actual'><?php Lang::_lang('Alta de') ?> <?php Lang::_lang('VtaComisionista') ?></label> <br /> 
		  | <a href='_sitemap.php' title='<?php Lang::_lang('Ir al Menu') ?>'><img src='imgs/btn_sitemap.png' height='15' border='0' align='absmiddle'></a> | <a href='index.php' title='<?php Lang::_lang('Ir al Inicio') ?>'><img src='imgs/btn_home.png' height='15' border='0' align='absmiddle'></a>
	  </div>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
			  <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang('Volver al Listado') ?>' onclick='location.href="<?php Gral::_echo(UsNavegacion::getUrlBtnRegresar('vta_comisionista_adm.php')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	  
	  <div class="titulo"><?php Lang::_lang('Datos del VtaComisionista') ?></div>
	  
	  <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_vta_comisionista'>
        
				<tr>
				  <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                    <?php Lang::_lang('Descripcion') ?>
				  
                                    <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                  <?php } ?>

				  </td>
				  <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">

				  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($vta_comisionista->getDescripcion()) ?>' size='50' />

                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
				  </td>
				</tr>
				
				<tr>
				  <td id="label_txt_apellido" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                    <?php Lang::_lang('Apellido') ?>
				  
                                    <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_apellido', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_apellido', false, false) ?>" />
                  <?php } ?>

				  </td>
				  <td id="dato_txt_apellido" class="adm_carga_datos_datos" width="">

				  <?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_apellido' value='<?php Gral::_echoTxt($vta_comisionista->getApellido()) ?>' size='40' />

                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>
				  </td>
				</tr>
				
				<tr>
				  <td id="label_txt_nombre" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                    <?php Lang::_lang('Nombre') ?>
				  
                                    <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nombre', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nombre', false, false) ?>" />
                  <?php } ?>

				  </td>
				  <td id="dato_txt_nombre" class="adm_carga_datos_datos" width="">

				  <?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_nombre' value='<?php Gral::_echoTxt($vta_comisionista->getNombre()) ?>' size='40' />

                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>
				  </td>
				</tr>
				
				<tr>
				  <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                    <?php Lang::_lang('Codigo') ?>
				  
                                    <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false) ?>" />
                  <?php } ?>

				  </td>
				  <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">

				  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($vta_comisionista->getCodigo()) ?>' size='40' />

                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
				  </td>
				</tr>
				
				<tr>
				  <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                    <?php Lang::_lang('Observaciones') ?>
				  
                                    <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                  <?php } ?>

				  </td>
				  <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">

				  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($vta_comisionista->getObservacion()) ?></textarea>

                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
				  </td>
				</tr>
				
      </table>
      
	  <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_comisionista->getId()) ?>'/>

			  <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang('Volver al Listado') ?>' onclick='location.href="<?php Gral::_echo(UsNavegacion::getUrlBtnRegresar('vta_comisionista_adm.php')) ?>"' />
			  
			  <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
			  <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
		  </td>
        </tr>
      </table>
	</div>


	<?php if(trim($vta_comisionista->getId()) != ''){ ?>
    <div class="alta relaciones">
		
    </div>
	<?php } ?>


	  
	  </div>

</div>
<div id='pie'><?php include 'parciales/pie.php' ?></div>
<div class="div_modal"></div>

</form>
</body>
</html>

