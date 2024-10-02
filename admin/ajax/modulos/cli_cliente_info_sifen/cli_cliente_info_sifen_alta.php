<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ALTA')){
    echo "No tiene asignada la credencial CLI_CLIENTE_INFO_SIFEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cli_cliente_info_sifen';
$db_nombre_pagina = 'cli_cliente_info_sifen_alta';

$cli_cliente_info_sifen = new CliClienteInfoSifen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cli_cliente_info_sifen = new CliClienteInfoSifen();
	if(trim($hdn_id) != '') $cli_cliente_info_sifen->setId($hdn_id, false);
	$cli_cliente_info_sifen->setDescripcion(Gral::getVars(1, "cli_cliente_info_sifen_txt_descripcion"));
	$cli_cliente_info_sifen->setCliClienteId(Gral::getVars(1, "cli_cliente_info_sifen_cmb_cli_cliente_id", null));
	$cli_cliente_info_sifen->setCodigo(Gral::getVars(1, "cli_cliente_info_sifen_txt_codigo"));
	$cli_cliente_info_sifen->setSifenDcodres(Gral::getVars(1, "cli_cliente_info_sifen_txt_sifen_dcodres"));
	$cli_cliente_info_sifen->setSifenDmsgres(Gral::getVars(1, "cli_cliente_info_sifen_txt_sifen_dmsgres"));
	$cli_cliente_info_sifen->setSifenXcontrucDruccons(Gral::getVars(1, "cli_cliente_info_sifen_txt_sifen_xcontruc_druccons"));
	$cli_cliente_info_sifen->setSifenXcontrucDrazcons(Gral::getVars(1, "cli_cliente_info_sifen_txt_sifen_xcontruc_drazcons"));
	$cli_cliente_info_sifen->setSifenXcontrucDcodestcons(Gral::getVars(1, "cli_cliente_info_sifen_txt_sifen_xcontruc_dcodestcons"));
	$cli_cliente_info_sifen->setSifenXcontrucDdesestcons(Gral::getVars(1, "cli_cliente_info_sifen_txt_sifen_xcontruc_ddesestcons"));
	$cli_cliente_info_sifen->setSifenXcontrucDrucfactelec(Gral::getVars(1, "cli_cliente_info_sifen_txt_sifen_xcontruc_drucfactelec"));
	$cli_cliente_info_sifen->setObservacion(Gral::getVars(1, "cli_cliente_info_sifen_txa_observacion"));
	$cli_cliente_info_sifen->setOrden(Gral::getVars(1, "cli_cliente_info_sifen_txt_orden", 0));
	$cli_cliente_info_sifen->setEstado(Gral::getVars(1, "cli_cliente_info_sifen_cmb_estado", 0));
	$cli_cliente_info_sifen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_cliente_info_sifen_txt_creado")));
	$cli_cliente_info_sifen->setCreadoPor(Gral::getVars(1, "cli_cliente_info_sifen__creado_por", 0));
	$cli_cliente_info_sifen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cli_cliente_info_sifen_txt_modificado")));
	$cli_cliente_info_sifen->setModificadoPor(Gral::getVars(1, "cli_cliente_info_sifen__modificado_por", 0));

	$cli_cliente_info_sifen_estado = new CliClienteInfoSifen();
	if(trim($hdn_id) != ''){
		$cli_cliente_info_sifen_estado->setId($hdn_id);
		$cli_cliente_info_sifen->setEstado($cli_cliente_info_sifen_estado->getEstado());
				
	}else{
		$cli_cliente_info_sifen->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_cliente_info_sifen->control();
			if(!$error->getExisteError()){
				$cli_cliente_info_sifen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cli_cliente_info_sifen_alta.php?cs=1&id='.$cli_cliente_info_sifen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_cliente_info_sifen->control();
			if(!$error->getExisteError()){
				$cli_cliente_info_sifen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cli_cliente_info_sifen_alta.php?cs=1');
				$cli_cliente_info_sifen = new CliClienteInfoSifen();
			}
		break;
	}
	Gral::setSes('CliClienteInfoSifen_ULTIMO_INSERTADO', $cli_cliente_info_sifen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cli_cliente_info_sifen_id = Gral::getVars(2, $prefijo.'cmb_cli_cliente_info_sifen_id', 0);
	if($cmb_cli_cliente_info_sifen_id != 0){
		$cli_cliente_info_sifen = CliClienteInfoSifen::getOxId($cmb_cli_cliente_info_sifen_id);
	}else{
	
	$cli_cliente_info_sifen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_cliente_info_sifen->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$cli_cliente_info_sifen->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_cliente_info_sifen->setSifenDcodres(Gral::getVars(2, "sifen_dcodres", ''));
	$cli_cliente_info_sifen->setSifenDmsgres(Gral::getVars(2, "sifen_dmsgres", ''));
	$cli_cliente_info_sifen->setSifenXcontrucDruccons(Gral::getVars(2, "sifen_xcontruc_druccons", ''));
	$cli_cliente_info_sifen->setSifenXcontrucDrazcons(Gral::getVars(2, "sifen_xcontruc_drazcons", ''));
	$cli_cliente_info_sifen->setSifenXcontrucDcodestcons(Gral::getVars(2, "sifen_xcontruc_dcodestcons", ''));
	$cli_cliente_info_sifen->setSifenXcontrucDdesestcons(Gral::getVars(2, "sifen_xcontruc_ddesestcons", ''));
	$cli_cliente_info_sifen->setSifenXcontrucDrucfactelec(Gral::getVars(2, "sifen_xcontruc_drucfactelec", ''));
	$cli_cliente_info_sifen->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_cliente_info_sifen->setOrden(Gral::getVars(2, "orden", 0));
	$cli_cliente_info_sifen->setEstado(Gral::getVars(2, "estado", 0));
	$cli_cliente_info_sifen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_cliente_info_sifen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_cliente_info_sifen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_cliente_info_sifen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cli_cliente_info_sifen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cli_cliente_info_sifen' width='90%'>
        
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_descripcion' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >
				  
                                        <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cli_cliente_info_sifen_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $cli_cliente_info_sifen->getCliClienteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cli_cliente_info_sifen_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_cliente_info_sifen_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($cli_cliente_info_sifen->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cli_cliente_info_sifen_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='cli_cliente_info_sifen_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cli_cliente_info_sifen_cmb_cli_cliente_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_codigo' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_sifen_dcodres" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_dcodres' ?>" >
				  
                                        <?php Lang::_lang('sifen_dcodres', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_sifen_dcodres" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sifen_dcodres')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_sifen_dcodres' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_sifen_dcodres' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenDcodres(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_dcodres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_dcodres', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_dcodres', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_dcodres', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_dcodres')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_sifen_dmsgres" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_dmsgres' ?>" >
				  
                                        <?php Lang::_lang('sifen_dmsgres', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_sifen_dmsgres" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sifen_dmsgres')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_sifen_dmsgres' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_sifen_dmsgres' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenDmsgres(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_dmsgres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_dmsgres', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_dmsgres', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_dmsgres', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_dmsgres')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_sifen_xcontruc_druccons" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_druccons' ?>" >
				  
                                        <?php Lang::_lang('sifen_xcontruc_druccons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_sifen_xcontruc_druccons" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_druccons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_sifen_xcontruc_druccons' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_sifen_xcontruc_druccons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDruccons(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_druccons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_druccons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_druccons', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_druccons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_druccons')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_sifen_xcontruc_drazcons" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_drazcons' ?>" >
				  
                                        <?php Lang::_lang('sifen_xcontruc_drazcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_sifen_xcontruc_drazcons" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_drazcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_sifen_xcontruc_drazcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_sifen_xcontruc_drazcons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDrazcons(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_drazcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_drazcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_drazcons', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_drazcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_drazcons')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_sifen_xcontruc_dcodestcons" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_dcodestcons' ?>" >
				  
                                        <?php Lang::_lang('sifen_xcontruc_dcodestcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_sifen_xcontruc_dcodestcons" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_dcodestcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_sifen_xcontruc_dcodestcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_sifen_xcontruc_dcodestcons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDcodestcons(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_dcodestcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_dcodestcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_dcodestcons', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_dcodestcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_dcodestcons')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_sifen_xcontruc_ddesestcons" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_ddesestcons' ?>" >
				  
                                        <?php Lang::_lang('sifen_xcontruc_ddesestcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_sifen_xcontruc_ddesestcons" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_ddesestcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_sifen_xcontruc_ddesestcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_sifen_xcontruc_ddesestcons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDdesestcons(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_ddesestcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_ddesestcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_ddesestcons', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_ddesestcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_ddesestcons')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txt_sifen_xcontruc_drucfactelec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_drucfactelec' ?>" >
				  
                                        <?php Lang::_lang('sifen_xcontruc_drucfactelec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txt_sifen_xcontruc_drucfactelec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_drucfactelec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='cli_cliente_info_sifen_txt_sifen_xcontruc_drucfactelec' type='text' class='textbox <?php echo $error_input_css ?> ' id='cli_cliente_info_sifen_txt_sifen_xcontruc_drucfactelec' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDrucfactelec(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_drucfactelec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_sifen_xcontruc_drucfactelec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_drucfactelec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_sifen_xcontruc_drucfactelec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_drucfactelec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cli_cliente_info_sifen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cli_cliente_info_sifen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='cli_cliente_info_sifen_txa_observacion' rows='10' cols='50' id='cli_cliente_info_sifen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($cli_cliente_info_sifen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_cli_cliente_info_sifen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cli_cliente_info_sifen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cli_cliente_info_sifen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cli_cliente_info_sifen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cli_cliente_info_sifen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cli_cliente_info_sifen'/>
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

