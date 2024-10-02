<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ws_fe_ope_solicitud_tributo';
$db_nombre_pagina = 'ws_fe_ope_solicitud_tributo_alta';


$ws_fe_ope_solicitud_tributo = new WsFeOpeSolicitudTributo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $ws_fe_ope_solicitud_tributo = new WsFeOpeSolicitudTributo();
    if(trim($hdn_id) != '') $ws_fe_ope_solicitud_tributo->setId($hdn_id, false);
	$ws_fe_ope_solicitud_tributo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$ws_fe_ope_solicitud_tributo->setWsFeOpeSolicitudId(Gral::getVars(1, "cmb_ws_fe_ope_solicitud_id", null));
	$ws_fe_ope_solicitud_tributo->setWsFeParamTipoTributoId(Gral::getVars(1, "cmb_ws_fe_param_tipo_tributo_id", null));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipCodigo(Gral::getVars(1, "txt_ws_fe_afip_codigo"));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipDescripcion(Gral::getVars(1, "txt_ws_fe_afip_descripcion"));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipBaseImponible(Gral::getVars(1, "txt_ws_fe_afip_base_imponible"));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipAlicuota(Gral::getVars(1, "txt_ws_fe_afip_alicuota"));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipImporte(Gral::getVars(1, "txt_ws_fe_afip_importe"));
	$ws_fe_ope_solicitud_tributo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$ws_fe_ope_solicitud_tributo->setObservacion(Gral::getVars(1, "txa_observacion"));
	$ws_fe_ope_solicitud_tributo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$ws_fe_ope_solicitud_tributo->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$ws_fe_ope_solicitud_tributo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$ws_fe_ope_solicitud_tributo->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$ws_fe_ope_solicitud_tributo_estado = new WsFeOpeSolicitudTributo();
	if(trim($hdn_id) != ''){
            $ws_fe_ope_solicitud_tributo_estado->setId($hdn_id);            
            $ws_fe_ope_solicitud_tributo->setEstado($ws_fe_ope_solicitud_tributo_estado->getEstado());
	}else{            
            $ws_fe_ope_solicitud_tributo->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $ws_fe_ope_solicitud_tributo->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_tributo->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$ws_fe_ope_solicitud_tributo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ws_fe_ope_solicitud_tributo->control();
			if(!$error->getExisteError()){
				$ws_fe_ope_solicitud_tributo->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$ws_fe_ope_solicitud_tributo->setId($hdn_id);
	}else{
	
	$ws_fe_ope_solicitud_tributo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ws_fe_ope_solicitud_tributo->setWsFeOpeSolicitudId(Gral::getVars(2, "ws_fe_ope_solicitud_id", 'null'));
	$ws_fe_ope_solicitud_tributo->setWsFeParamTipoTributoId(Gral::getVars(2, "ws_fe_param_tipo_tributo_id", 'null'));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipCodigo(Gral::getVars(2, "ws_fe_afip_codigo", ''));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipDescripcion(Gral::getVars(2, "ws_fe_afip_descripcion", ''));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipBaseImponible(Gral::getVars(2, "ws_fe_afip_base_imponible", ''));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipAlicuota(Gral::getVars(2, "ws_fe_afip_alicuota", ''));
	$ws_fe_ope_solicitud_tributo->setWsFeAfipImporte(Gral::getVars(2, "ws_fe_afip_importe", ''));
	$ws_fe_ope_solicitud_tributo->setCodigo(Gral::getVars(2, "codigo", ''));
	$ws_fe_ope_solicitud_tributo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ws_fe_ope_solicitud_tributo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_tributo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ws_fe_ope_solicitud_tributo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ws_fe_ope_solicitud_tributo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('WsFeOpeSolicitudTributo') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(WsFeOpeSolicitudTributo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(WsFeOpeSolicitudTributo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ws_fe_ope_solicitud_tributo'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_ws_fe_ope_solicitud_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id' ?>" >

                    <?php Lang::_lang('WsFeOpeSolicitud', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=ws_fe_ope_solicitud_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ws_fe_ope_solicitud_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ALTA_CMB_EDIT_WS_FE_OPE_SOLICITUD')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_ope_solicitud_id" <?php echo ($ws_fe_ope_solicitud_tributo->getWsFeOpeSolicitudId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ws_fe_ope_solicitud_id" clase_id="ws_fe_ope_solicitud" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ws_fe_ope_solicitud_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ws_fe_ope_solicitud_id', Gral::getCmbFiltro(WsFeOpeSolicitud::getWsFeOpeSolicitudsCmb(), '...'), $ws_fe_ope_solicitud_tributo->getWsFeOpeSolicitudId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_ope_solicitud_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_ope_solicitud_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ws_fe_param_tipo_tributo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_tributo_id' ?>" >

                    <?php Lang::_lang('WsFeParamTipoTributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=ws_fe_param_tipo_tributo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ws_fe_param_tipo_tributo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_tributo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_TRIBUTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ws_fe_param_tipo_tributo_id" clase_id="ws_fe_param_tipo_tributo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_tributo_id" <?php echo ($ws_fe_ope_solicitud_tributo->getWsFeParamTipoTributoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ws_fe_param_tipo_tributo_id" clase_id="ws_fe_param_tipo_tributo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ws_fe_param_tipo_tributo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ws_fe_param_tipo_tributo_id', Gral::getCmbFiltro(WsFeParamTipoTributo::getWsFeParamTipoTributosCmb(), '...'), $ws_fe_ope_solicitud_tributo->getWsFeParamTipoTributoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_param_tipo_tributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_param_tipo_tributo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_param_tipo_tributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_param_tipo_tributo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_tributo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_ws_fe_afip_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=ws_fe_afip_codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_ws_fe_afip_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_ws_fe_afip_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_ws_fe_afip_codigo' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getWsFeAfipCodigo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_codigo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_ws_fe_afip_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=ws_fe_afip_descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_ws_fe_afip_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_ws_fe_afip_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_ws_fe_afip_descripcion' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getWsFeAfipDescripcion()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_descripcion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_ws_fe_afip_base_imponible" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_base_imponible' ?>" >

                    <?php Lang::_lang('Base Imponible', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=ws_fe_afip_base_imponible' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_ws_fe_afip_base_imponible" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_base_imponible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_ws_fe_afip_base_imponible' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_ws_fe_afip_base_imponible' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getWsFeAfipBaseImponible()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_base_imponible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_base_imponible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_base_imponible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_base_imponible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_base_imponible')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_ws_fe_afip_alicuota" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_alicuota' ?>" >

                    <?php Lang::_lang('Alicuota', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=ws_fe_afip_alicuota' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_ws_fe_afip_alicuota" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_alicuota')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_ws_fe_afip_alicuota' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_ws_fe_afip_alicuota' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getWsFeAfipAlicuota()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_alicuota', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_alicuota', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_alicuota', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_alicuota', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_alicuota')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_ws_fe_afip_importe" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_afip_importe' ?>" >

                    <?php Lang::_lang('Importe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=ws_fe_afip_importe' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_ws_fe_afip_importe" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_afip_importe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_ws_fe_afip_importe' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_ws_fe_afip_importe' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getWsFeAfipImporte()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_importe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_afip_importe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_importe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_afip_importe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_afip_importe')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getCodigo()) ?>' size='40' />

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
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ws_fe_ope_solicitud_tributo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ws_fe_ope_solicitud_tributo->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(WsFeOpeSolicitudTributo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(WsFeOpeSolicitudTributo::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($ws_fe_ope_solicitud_tributo->getId()) != ''){ ?>
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

