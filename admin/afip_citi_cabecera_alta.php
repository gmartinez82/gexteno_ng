<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'afip_citi_cabecera';
$db_nombre_pagina = 'afip_citi_cabecera_alta';


$afip_citi_cabecera = new AfipCitiCabecera();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $afip_citi_cabecera = new AfipCitiCabecera();
    if(trim($hdn_id) != '') $afip_citi_cabecera->setId($hdn_id, false);
	$afip_citi_cabecera->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$afip_citi_cabecera->setCodigo(Gral::getVars(1, "txt_codigo"));
	$afip_citi_cabecera->setAfipCitiPrcId(Gral::getVars(1, "cmb_afip_citi_prc_id", null));
	$afip_citi_cabecera->setInicial(Gral::getVars(1, "cmb_inicial", 0));
	$afip_citi_cabecera->setActual(Gral::getVars(1, "cmb_actual", 0));
	$afip_citi_cabecera->setAfipCitiCuitInformante(Gral::getVars(1, "txt_afip_citi_cuit_informante"));
	$afip_citi_cabecera->setAfipCitiPeriodo(Gral::getVars(1, "txt_afip_citi_periodo"));
	$afip_citi_cabecera->setAfipCitiSecuencia(Gral::getVars(1, "txt_afip_citi_secuencia"));
	$afip_citi_cabecera->setAfipCitiSinMovimiento(Gral::getVars(1, "txt_afip_citi_sin_movimiento"));
	$afip_citi_cabecera->setAfipCitiProrratearCfComputable(Gral::getVars(1, "txt_afip_citi_prorratear_cf_computable"));
	$afip_citi_cabecera->setAfipCitiCfComputableOComprobante(Gral::getVars(1, "txt_afip_citi_cf_computable_o_comprobante"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableGlobal(Gral::getVars(1, "txt_afip_citi_importe_cf_computable_global"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableAsignacionDirecta(Gral::getVars(1, "txt_afip_citi_importe_cf_computable_asignacion_directa"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableProrrateo(Gral::getVars(1, "txt_afip_citi_importe_cf_computable_prorrateo"));
	$afip_citi_cabecera->setAfipCitiImporteCfNoComputableGlobal(Gral::getVars(1, "txt_afip_citi_importe_cf_no_computable_global"));
	$afip_citi_cabecera->setAfipCitiImporteCfContribuyenteSsYOc(Gral::getVars(1, "txt_afip_citi_importe_cf_contribuyente_ss_y_oc"));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableSsYOc(Gral::getVars(1, "txt_afip_citi_importe_cf_computable_ss_y_oc"));
	$afip_citi_cabecera->setObservacion(Gral::getVars(1, "txa_observacion"));
	$afip_citi_cabecera->setOrden(Gral::getVars(1, "txt_orden", 0));
	$afip_citi_cabecera->setEstado(Gral::getVars(1, "_estado", 0));
	$afip_citi_cabecera->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$afip_citi_cabecera->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$afip_citi_cabecera->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$afip_citi_cabecera->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$afip_citi_cabecera_estado = new AfipCitiCabecera();
	if(trim($hdn_id) != ''){
            $afip_citi_cabecera_estado->setId($hdn_id);            
            $afip_citi_cabecera->setEstado($afip_citi_cabecera_estado->getEstado());
	}else{            
            $afip_citi_cabecera->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $afip_citi_cabecera->control();
			if(!$error->getExisteError()){
				$afip_citi_cabecera->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$afip_citi_cabecera->getId());
			}
		break;
		case 'guardarnvo':
			$error = $afip_citi_cabecera->control();
			if(!$error->getExisteError()){
				$afip_citi_cabecera->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$afip_citi_cabecera->setId($hdn_id);
	}else{
	
	$afip_citi_cabecera->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$afip_citi_cabecera->setCodigo(Gral::getVars(2, "codigo", ''));
	$afip_citi_cabecera->setAfipCitiPrcId(Gral::getVars(2, "afip_citi_prc_id", 'null'));
	$afip_citi_cabecera->setInicial(Gral::getVars(2, "inicial", 0));
	$afip_citi_cabecera->setActual(Gral::getVars(2, "actual", 0));
	$afip_citi_cabecera->setAfipCitiCuitInformante(Gral::getVars(2, "afip_citi_cuit_informante", ''));
	$afip_citi_cabecera->setAfipCitiPeriodo(Gral::getVars(2, "afip_citi_periodo", ''));
	$afip_citi_cabecera->setAfipCitiSecuencia(Gral::getVars(2, "afip_citi_secuencia", ''));
	$afip_citi_cabecera->setAfipCitiSinMovimiento(Gral::getVars(2, "afip_citi_sin_movimiento", ''));
	$afip_citi_cabecera->setAfipCitiProrratearCfComputable(Gral::getVars(2, "afip_citi_prorratear_cf_computable", ''));
	$afip_citi_cabecera->setAfipCitiCfComputableOComprobante(Gral::getVars(2, "afip_citi_cf_computable_o_comprobante", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableGlobal(Gral::getVars(2, "afip_citi_importe_cf_computable_global", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableAsignacionDirecta(Gral::getVars(2, "afip_citi_importe_cf_computable_asignacion_directa", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableProrrateo(Gral::getVars(2, "afip_citi_importe_cf_computable_prorrateo", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfNoComputableGlobal(Gral::getVars(2, "afip_citi_importe_cf_no_computable_global", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfContribuyenteSsYOc(Gral::getVars(2, "afip_citi_importe_cf_contribuyente_ss_y_oc", ''));
	$afip_citi_cabecera->setAfipCitiImporteCfComputableSsYOc(Gral::getVars(2, "afip_citi_importe_cf_computable_ss_y_oc", ''));
	$afip_citi_cabecera->setObservacion(Gral::getVars(2, "observacion", ''));
	$afip_citi_cabecera->setOrden(Gral::getVars(2, "orden", 0));
	$afip_citi_cabecera->setEstado(Gral::getVars(2, "estado", 0));
	$afip_citi_cabecera->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$afip_citi_cabecera->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$afip_citi_cabecera->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$afip_citi_cabecera->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('AfipCitiCabeceras') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AfipCitiCabecera::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AfipCitiCabecera::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_afip_citi_cabecera'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($afip_citi_cabecera->getDescripcion()) ?>' size='50' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($afip_citi_cabecera->getCodigo()) ?>' size='40' />

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
                <td id="label_cmb_afip_citi_prc_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_prc_id' ?>" >

                    <?php Lang::_lang('AfipCitiPrc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_prc_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_afip_citi_prc_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ALTA_CMB_EDIT_AFIP_CITI_PRC')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_prc_id" <?php echo ($afip_citi_cabecera->getAfipCitiPrcId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_afip_citi_prc_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), $afip_citi_cabecera->getAfipCitiPrcId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_prc_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_prc_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_inicial" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_inicial' ?>" >

                    <?php Lang::_lang('Inicial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=inicial' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_inicial" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('inicial')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_inicial', GralSiNo::getGralSiNosCmb(), $afip_citi_cabecera->getInicial(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_inicial', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_inicial', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_inicial', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('inicial')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_actual" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_actual' ?>" >

                    <?php Lang::_lang('Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=actual' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_actual" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_actual', GralSiNo::getGralSiNosCmb(), $afip_citi_cabecera->getActual(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('actual')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_cuit_informante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cuit_informante' ?>" >

                    <?php Lang::_lang('Cuit Informante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_cuit_informante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_cuit_informante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_cuit_informante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_cuit_informante' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_cuit_informante' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiCuitInformante()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cuit_informante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cuit_informante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cuit_informante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cuit_informante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cuit_informante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_periodo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_periodo' ?>" >

                    <?php Lang::_lang('Periodo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_periodo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_periodo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_periodo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_periodo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_periodo' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiPeriodo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_periodo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_periodo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_periodo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_periodo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_periodo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_secuencia" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_secuencia' ?>" >

                    <?php Lang::_lang('Secuencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_secuencia' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_secuencia" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_secuencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_secuencia' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_secuencia' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiSecuencia()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_secuencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_secuencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_secuencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_secuencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_secuencia')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_sin_movimiento" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_sin_movimiento' ?>" >

                    <?php Lang::_lang('Sin Movimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_sin_movimiento' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_sin_movimiento" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_sin_movimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_sin_movimiento' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_sin_movimiento' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiSinMovimiento()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_sin_movimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_sin_movimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_sin_movimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_sin_movimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_sin_movimiento')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_prorratear_cf_computable" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_prorratear_cf_computable' ?>" >

                    <?php Lang::_lang('Prorratear Cred Fiscal computable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_prorratear_cf_computable' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_prorratear_cf_computable" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_prorratear_cf_computable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_prorratear_cf_computable' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_prorratear_cf_computable' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiProrratearCfComputable()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_prorratear_cf_computable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_prorratear_cf_computable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_prorratear_cf_computable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_prorratear_cf_computable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_prorratear_cf_computable')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_cf_computable_o_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cf_computable_o_comprobante' ?>" >

                    <?php Lang::_lang('Cred Fiscal Computable o Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_cf_computable_o_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_cf_computable_o_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_cf_computable_o_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_cf_computable_o_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_cf_computable_o_comprobante' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiCfComputableOComprobante()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cf_computable_o_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cf_computable_o_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cf_computable_o_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cf_computable_o_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cf_computable_o_comprobante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_cf_computable_global" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_global' ?>" >

                    <?php Lang::_lang('Importe Cred Fiscal Computable Global', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_importe_cf_computable_global' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_cf_computable_global" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_global')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_cf_computable_global' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_cf_computable_global' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableGlobal()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_global', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_global', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_global', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_global', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_global')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_cf_computable_asignacion_directa" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_asignacion_directa' ?>" >

                    <?php Lang::_lang('Importe Cred Fiscal Computable Asignacion Directa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_importe_cf_computable_asignacion_directa' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_cf_computable_asignacion_directa" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_asignacion_directa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_cf_computable_asignacion_directa' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_cf_computable_asignacion_directa' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableAsignacionDirecta()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_asignacion_directa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_asignacion_directa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_asignacion_directa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_asignacion_directa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_asignacion_directa')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_cf_computable_prorrateo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_prorrateo' ?>" >

                    <?php Lang::_lang('Importe Cred Fiscal Computable Prorrateo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_importe_cf_computable_prorrateo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_cf_computable_prorrateo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_prorrateo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_cf_computable_prorrateo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_cf_computable_prorrateo' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableProrrateo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_prorrateo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_prorrateo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_prorrateo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_prorrateo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_prorrateo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_cf_no_computable_global" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_no_computable_global' ?>" >

                    <?php Lang::_lang('Importe Cred Fiscal No Computable Global', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_importe_cf_no_computable_global' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_cf_no_computable_global" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_no_computable_global')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_cf_no_computable_global' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_cf_no_computable_global' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfNoComputableGlobal()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_no_computable_global', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_no_computable_global', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_no_computable_global', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_no_computable_global', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_no_computable_global')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_cf_contribuyente_ss_y_oc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_contribuyente_ss_y_oc' ?>" >

                    <?php Lang::_lang('Importe Cred Fiscal Contribuyente Seg Social', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_importe_cf_contribuyente_ss_y_oc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_cf_contribuyente_ss_y_oc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_contribuyente_ss_y_oc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_cf_contribuyente_ss_y_oc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_cf_contribuyente_ss_y_oc' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfContribuyenteSsYOc()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_contribuyente_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_contribuyente_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_contribuyente_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_contribuyente_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_contribuyente_ss_y_oc')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_cf_computable_ss_y_oc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_ss_y_oc' ?>" >

                    <?php Lang::_lang('Importe Cred Fiscal Computable Seg Social', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=afip_citi_importe_cf_computable_ss_y_oc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_cf_computable_ss_y_oc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_cf_computable_ss_y_oc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_cf_computable_ss_y_oc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_cf_computable_ss_y_oc' value='<?php Gral::_echoTxt($afip_citi_cabecera->getAfipCitiImporteCfComputableSsYOc()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_ss_y_oc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_cf_computable_ss_y_oc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_cf_computable_ss_y_oc')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_cabecera_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($afip_citi_cabecera->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($afip_citi_cabecera->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AfipCitiCabecera::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AfipCitiCabecera::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($afip_citi_cabecera->getId()) != ''){ ?>
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

