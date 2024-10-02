<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'app_mov_dispositivo';
$db_nombre_pagina = 'app_mov_dispositivo_alta';


$app_mov_dispositivo = new AppMovDispositivo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $app_mov_dispositivo = new AppMovDispositivo();
    if(trim($hdn_id) != '') $app_mov_dispositivo->setId($hdn_id, false);
	$app_mov_dispositivo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$app_mov_dispositivo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$app_mov_dispositivo->setSoDescripcion(Gral::getVars(1, "txt_so_descripcion"));
	$app_mov_dispositivo->setSoVersion(Gral::getVars(1, "txt_so_version"));
	$app_mov_dispositivo->setMarca(Gral::getVars(1, "txt_marca"));
	$app_mov_dispositivo->setModelo(Gral::getVars(1, "txt_modelo"));
	$app_mov_dispositivo->setImei(Gral::getVars(1, "txt_imei"));
	$app_mov_dispositivo->setTelefonoNro(Gral::getVars(1, "txt_telefono_nro"));
	$app_mov_dispositivo->setTitularApellido(Gral::getVars(1, "txt_titular_apellido"));
	$app_mov_dispositivo->setTitularNombre(Gral::getVars(1, "txt_titular_nombre"));
	$app_mov_dispositivo->setObservacion(Gral::getVars(1, "txa_observacion"));
	$app_mov_dispositivo->setOrden(Gral::getVars(1, "txt_orden", 0));
	$app_mov_dispositivo->setEstado(Gral::getVars(1, "_estado", 0));
	$app_mov_dispositivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$app_mov_dispositivo->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$app_mov_dispositivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$app_mov_dispositivo->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$app_mov_dispositivo_estado = new AppMovDispositivo();
	if(trim($hdn_id) != ''){
            $app_mov_dispositivo_estado->setId($hdn_id);            
            $app_mov_dispositivo->setEstado($app_mov_dispositivo_estado->getEstado());
	}else{            
            $app_mov_dispositivo->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $app_mov_dispositivo->control();
			if(!$error->getExisteError()){
				$app_mov_dispositivo->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$app_mov_dispositivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $app_mov_dispositivo->control();
			if(!$error->getExisteError()){
				$app_mov_dispositivo->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$app_mov_dispositivo->setId($hdn_id);
	}else{
	
	$app_mov_dispositivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$app_mov_dispositivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$app_mov_dispositivo->setSoDescripcion(Gral::getVars(2, "so_descripcion", ''));
	$app_mov_dispositivo->setSoVersion(Gral::getVars(2, "so_version", ''));
	$app_mov_dispositivo->setMarca(Gral::getVars(2, "marca", ''));
	$app_mov_dispositivo->setModelo(Gral::getVars(2, "modelo", ''));
	$app_mov_dispositivo->setImei(Gral::getVars(2, "imei", ''));
	$app_mov_dispositivo->setTelefonoNro(Gral::getVars(2, "telefono_nro", ''));
	$app_mov_dispositivo->setTitularApellido(Gral::getVars(2, "titular_apellido", ''));
	$app_mov_dispositivo->setTitularNombre(Gral::getVars(2, "titular_nombre", ''));
	$app_mov_dispositivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$app_mov_dispositivo->setOrden(Gral::getVars(2, "orden", 0));
	$app_mov_dispositivo->setEstado(Gral::getVars(2, "estado", 0));
	$app_mov_dispositivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$app_mov_dispositivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$app_mov_dispositivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$app_mov_dispositivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
<?php include 'parciales/encabezado.php'?>
<?php include 'parciales/user.php';?>
<?php include 'parciales/mensajes.php' ?>
    
<div id='menu'>
    <?php include 'parciales/menuh.php' ?>
</div>

<div id='cuerpo' >
    <form id='formu' name='formu' method='post' action='' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('AppMovDispositivos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AppMovDispositivo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AppMovDispositivo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('APP_MOV_DISPOSITIVO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_app_mov_dispositivo'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($app_mov_dispositivo->getDescripcion()) ?>' size='50' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($app_mov_dispositivo->getCodigo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_so_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_so_descripcion' ?>" >

                    <?php Lang::_lang('S.O. Descr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=so_descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_so_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('so_descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_so_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_so_descripcion' value='<?php Gral::_echoTxt($app_mov_dispositivo->getSoDescripcion()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_so_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_so_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_so_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_so_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('so_descripcion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_so_version" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_so_version' ?>" >

                    <?php Lang::_lang('S.O. Version', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=so_version' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_so_version" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('so_version')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_so_version' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_so_version' value='<?php Gral::_echoTxt($app_mov_dispositivo->getSoVersion()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_so_version', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_so_version', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_so_version', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_so_version', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('so_version')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_marca" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_marca' ?>" >

                    <?php Lang::_lang('Marca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=marca' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_marca" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('marca')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_marca' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_marca' value='<?php Gral::_echoTxt($app_mov_dispositivo->getMarca()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_marca', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_marca', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_marca', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_marca', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('marca')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_modelo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_modelo' ?>" >

                    <?php Lang::_lang('Modelo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=modelo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_modelo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('modelo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_modelo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_modelo' value='<?php Gral::_echoTxt($app_mov_dispositivo->getModelo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_modelo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_modelo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_modelo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_modelo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('modelo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_imei" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_imei' ?>" >

                    <?php Lang::_lang('IMEI', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=imei' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_imei" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('imei')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_imei' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_imei' value='<?php Gral::_echoTxt($app_mov_dispositivo->getImei()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_imei', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_imei', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_imei', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_imei', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('imei')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_telefono_nro" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_telefono_nro' ?>" >

                    <?php Lang::_lang('Telefono Nro', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=telefono_nro' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_telefono_nro" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('telefono_nro')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_telefono_nro' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_telefono_nro' value='<?php Gral::_echoTxt($app_mov_dispositivo->getTelefonoNro()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_telefono_nro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_telefono_nro', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono_nro', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono_nro', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono_nro')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_titular_apellido" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_titular_apellido' ?>" >

                    <?php Lang::_lang('Titular Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=titular_apellido' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_titular_apellido" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('titular_apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_titular_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_titular_apellido' value='<?php Gral::_echoTxt($app_mov_dispositivo->getTitularApellido()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_titular_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_titular_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_titular_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_titular_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('titular_apellido')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_titular_nombre" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_titular_nombre' ?>" >

                    <?php Lang::_lang('Titular Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=titular_nombre' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_titular_nombre" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('titular_nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_titular_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_titular_nombre' value='<?php Gral::_echoTxt($app_mov_dispositivo->getTitularNombre()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_titular_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_titular_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_titular_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_titular_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('titular_nombre')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=app_mov_dispositivo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($app_mov_dispositivo->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($app_mov_dispositivo->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AppMovDispositivo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AppMovDispositivo::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($app_mov_dispositivo->getId()) != ''){ ?>
    <div class="alta relaciones">
		
    </div>
	<?php } ?>


	  
	  </div>

        </form>
    </div>

    <div id='pie'>
        <?php include 'parciales/pie.php' ?>
    </div>

    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>

