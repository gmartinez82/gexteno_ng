<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA')){
    echo "No tiene asignada la credencial VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_vendedor_valoracion_agrupacion';
$db_nombre_pagina = 'vta_vendedor_valoracion_agrupacion_alta';

$vta_vendedor_valoracion_agrupacion = new VtaVendedorValoracionAgrupacion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_vendedor_valoracion_agrupacion = new VtaVendedorValoracionAgrupacion();
	if(trim($hdn_id) != '') $vta_vendedor_valoracion_agrupacion->setId($hdn_id, false);
	$vta_vendedor_valoracion_agrupacion->setDescripcion(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_descripcion"));
	$vta_vendedor_valoracion_agrupacion->setApellido(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_apellido"));
	$vta_vendedor_valoracion_agrupacion->setNombre(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_nombre"));
	$vta_vendedor_valoracion_agrupacion->setEmail(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_email"));
	$vta_vendedor_valoracion_agrupacion->setTelefono(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_telefono"));
	$vta_vendedor_valoracion_agrupacion->setFecha(Gral::getFechaToDb(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_fecha")));
	$vta_vendedor_valoracion_agrupacion->setVtaVendedorId(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_cmb_vta_vendedor_id", null));
	$vta_vendedor_valoracion_agrupacion->setValoracion(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_valoracion", 0));
	$vta_vendedor_valoracion_agrupacion->setCliClienteId(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_dbsug_cli_cliente_id", null));
	$vta_vendedor_valoracion_agrupacion->setSession(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_session"));
	$vta_vendedor_valoracion_agrupacion->setNavegador(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_navegador"));
	$vta_vendedor_valoracion_agrupacion->setIp(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_ip"));
	$vta_vendedor_valoracion_agrupacion->setObservacion(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txa_observacion"));
	$vta_vendedor_valoracion_agrupacion->setOrden(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_orden", 0));
	$vta_vendedor_valoracion_agrupacion->setEstado(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion__estado", 0));
	$vta_vendedor_valoracion_agrupacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_creado")));
	$vta_vendedor_valoracion_agrupacion->setCreadoPor(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion__creado_por", 0));
	$vta_vendedor_valoracion_agrupacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion_txt_modificado")));
	$vta_vendedor_valoracion_agrupacion->setModificadoPor(Gral::getVars(1, "vta_vendedor_valoracion_agrupacion__modificado_por", 0));

	$vta_vendedor_valoracion_agrupacion_estado = new VtaVendedorValoracionAgrupacion();
	if(trim($hdn_id) != ''){
		$vta_vendedor_valoracion_agrupacion_estado->setId($hdn_id);
		$vta_vendedor_valoracion_agrupacion->setEstado($vta_vendedor_valoracion_agrupacion_estado->getEstado());
				
	}else{
		$vta_vendedor_valoracion_agrupacion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_vendedor_valoracion_agrupacion->control();
			if(!$error->getExisteError()){
				$vta_vendedor_valoracion_agrupacion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_vendedor_valoracion_agrupacion_alta.php?cs=1&id='.$vta_vendedor_valoracion_agrupacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_vendedor_valoracion_agrupacion->control();
			if(!$error->getExisteError()){
				$vta_vendedor_valoracion_agrupacion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_vendedor_valoracion_agrupacion_alta.php?cs=1');
				$vta_vendedor_valoracion_agrupacion = new VtaVendedorValoracionAgrupacion();
			}
		break;
	}
	Gral::setSes('VtaVendedorValoracionAgrupacion_ULTIMO_INSERTADO', $vta_vendedor_valoracion_agrupacion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_vendedor_valoracion_agrupacion_id = Gral::getVars(2, $prefijo.'cmb_vta_vendedor_valoracion_agrupacion_id', 0);
	if($cmb_vta_vendedor_valoracion_agrupacion_id != 0){
		$vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::getOxId($cmb_vta_vendedor_valoracion_agrupacion_id);
	}else{
	
	$vta_vendedor_valoracion_agrupacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_vendedor_valoracion_agrupacion->setApellido(Gral::getVars(2, "apellido", ''));
	$vta_vendedor_valoracion_agrupacion->setNombre(Gral::getVars(2, "nombre", ''));
	$vta_vendedor_valoracion_agrupacion->setEmail(Gral::getVars(2, "email", ''));
	$vta_vendedor_valoracion_agrupacion->setTelefono(Gral::getVars(2, "telefono", ''));
	$vta_vendedor_valoracion_agrupacion->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$vta_vendedor_valoracion_agrupacion->setVtaVendedorId(Gral::getVars(2, "vta_vendedor_id", 'null'));
	$vta_vendedor_valoracion_agrupacion->setValoracion(Gral::getVars(2, "valoracion", 0));
	$vta_vendedor_valoracion_agrupacion->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$vta_vendedor_valoracion_agrupacion->setSession(Gral::getVars(2, "session", ''));
	$vta_vendedor_valoracion_agrupacion->setNavegador(Gral::getVars(2, "navegador", ''));
	$vta_vendedor_valoracion_agrupacion->setIp(Gral::getVars(2, "ip", ''));
	$vta_vendedor_valoracion_agrupacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_vendedor_valoracion_agrupacion->setOrden(Gral::getVars(2, "orden", 0));
	$vta_vendedor_valoracion_agrupacion->setEstado(Gral::getVars(2, "estado", 0));
	$vta_vendedor_valoracion_agrupacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_vendedor_valoracion_agrupacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_vendedor_valoracion_agrupacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_vendedor_valoracion_agrupacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_vendedor_valoracion_agrupacion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_vendedor_valoracion_agrupacion' width='90%'>
        
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_txt_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                        <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_txt_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_agrupacion_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_agrupacion_txt_apellido' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getApellido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_apellido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_txt_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                        <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_txt_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_agrupacion_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_agrupacion_txt_nombre' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getNombre(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_nombre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_agrupacion_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_agrupacion_txt_email' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_agrupacion_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_valoracion_agrupacion_txt_telefono' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getTelefono(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_agrupacion_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='vta_vendedor_valoracion_agrupacion_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_vendedor_valoracion_agrupacion->getFecha()), true) ?>' size='40' />
					<input type='button' id='cal_vta_vendedor_valoracion_agrupacion_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_vendedor_valoracion_agrupacion_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_vta_vendedor_valoracion_agrupacion_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_cmb_vta_vendedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_vendedor_id' ?>" >
				  
                                        <?php Lang::_lang('VtaVendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_cmb_vta_vendedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_vendedor_valoracion_agrupacion_cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $vta_vendedor_valoracion_agrupacion->getVtaVendedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA_CMB_EDIT_VTA_VENDEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_vendedor_valoracion_agrupacion_cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='vta_vendedor_valoracion_agrupacion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_vendedor_id" <?php echo ($vta_vendedor_valoracion_agrupacion->getVtaVendedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_valoracion_agrupacion_cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='vta_vendedor_valoracion_agrupacion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_vendedor_valoracion_agrupacion_cmb_vta_vendedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_txt_valoracion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_valoracion' ?>" >
				  
                                        <?php Lang::_lang('Valoracion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_txt_valoracion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('valoracion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_valoracion_agrupacion_txt_valoracion' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_vendedor_valoracion_agrupacion_txt_valoracion' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getValoracion(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_valoracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_valoracion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_valoracion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_valoracion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('valoracion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_valoracion_agrupacion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_valoracion_agrupacion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_vendedor_valoracion_agrupacion_txa_observacion' rows='7' cols='60' id='vta_vendedor_valoracion_agrupacion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_valoracion_agrupacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_valoracion_agrupacion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_vendedor_valoracion_agrupacion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_vendedor_valoracion_agrupacion'/>
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

