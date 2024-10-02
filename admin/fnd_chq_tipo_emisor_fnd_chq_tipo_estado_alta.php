<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado';
$db_nombre_pagina = 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta';


$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = new FndChqTipoEmisorFndChqTipoEstado();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $fnd_chq_tipo_emisor_fnd_chq_tipo_estado = new FndChqTipoEmisorFndChqTipoEstado();
    if(trim($hdn_id) != '') $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setId($hdn_id, false);
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEmisorId(Gral::getVars(1, "cmb_fnd_chq_tipo_emisor_id", null));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoId(Gral::getVars(1, "cmb_fnd_chq_tipo_estado_id", null));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoPosible(Gral::getVars(1, "cmb_fnd_chq_tipo_estado_posible", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioAutomatico(Gral::getVars(1, "cmb_cambio_automatico", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioManual(Gral::getVars(1, "cmb_cambio_manual", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setPredeterminado(Gral::getVars(1, "cmb_predeterminado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioOtroComprobante(Gral::getVars(1, "cmb_cambio_otro_comprobante", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioSimultaneo(Gral::getVars(1, "cmb_cambio_simultaneo", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCodigo(Gral::getVars(1, "txt_codigo"));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setObservacion(Gral::getVars(1, "txa_observacion"));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setOrden(Gral::getVars(1, "txt_orden", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado = new FndChqTipoEmisorFndChqTipoEstado();
	if(trim($hdn_id) != ''){
            $fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado->setId($hdn_id);            
            $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado($fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado->getEstado());
	}else{            
            $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->control();
			if(!$error->getExisteError()){
				$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->control();
			if(!$error->getExisteError()){
				$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setId($hdn_id);
	}else{
	
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEmisorId(Gral::getVars(2, "fnd_chq_tipo_emisor_id", 'null'));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoId(Gral::getVars(2, "fnd_chq_tipo_estado_id", 'null'));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setFndChqTipoEstadoPosible(Gral::getVars(2, "fnd_chq_tipo_estado_posible", 'null'));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioAutomatico(Gral::getVars(2, "cambio_automatico", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioManual(Gral::getVars(2, "cambio_manual", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setPredeterminado(Gral::getVars(2, "predeterminado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioOtroComprobante(Gral::getVars(2, "cambio_otro_comprobante", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCambioSimultaneo(Gral::getVars(2, "cambio_simultaneo", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(FndChqTipoEmisorFndChqTipoEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(FndChqTipoEmisorFndChqTipoEstado::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_fnd_chq_tipo_emisor_fnd_chq_tipo_estado'>
        
            <tr>
                <td id="label_cmb_fnd_chq_tipo_emisor_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id' ?>" >

                    <?php Lang::_lang('FndChqTipoEmisor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=fnd_chq_tipo_emisor_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_fnd_chq_tipo_emisor_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA_CMB_EDIT_FND_CHQ_TIPO_EMISOR')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_emisor_id" <?php echo ($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisorId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_fnd_chq_tipo_emisor_id" clase_id="fnd_chq_tipo_emisor" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_fnd_chq_tipo_emisor_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), '...'), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisorId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_chq_tipo_emisor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_emisor_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_fnd_chq_tipo_estado_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id' ?>" >

                    <?php Lang::_lang('FndChqTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=fnd_chq_tipo_estado_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_fnd_chq_tipo_estado_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA_CMB_EDIT_FND_CHQ_TIPO_ESTADO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_chq_tipo_estado_id" <?php echo ($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_fnd_chq_tipo_estado_id" clase_id="fnd_chq_tipo_estado" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_fnd_chq_tipo_estado_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_estado_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_fnd_chq_tipo_estado_posible" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_posible' ?>" >

                    <?php Lang::_lang('FndChqTipoEstadoPosible', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=fnd_chq_tipo_estado_posible' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_fnd_chq_tipo_estado_posible" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fnd_chq_tipo_estado_posible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_fnd_chq_tipo_estado_posible', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_posible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_posible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_posible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_chq_tipo_estado_posible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_chq_tipo_estado_posible')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_cambio_automatico" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_automatico' ?>" >

                    <?php Lang::_lang('Cambio Automatico', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=cambio_automatico' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cambio_automatico" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cambio_automatico')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_cambio_automatico', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cambio_automatico', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cambio_automatico', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_automatico', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_automatico', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_automatico')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_cambio_manual" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_manual' ?>" >

                    <?php Lang::_lang('Cambio Manual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=cambio_manual' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cambio_manual" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cambio_manual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_cambio_manual', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cambio_manual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cambio_manual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_manual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_manual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_manual')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_predeterminado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_predeterminado' ?>" >

                    <?php Lang::_lang('Predeterminado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=predeterminado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_predeterminado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('predeterminado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_predeterminado', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_predeterminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_predeterminado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_predeterminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_predeterminado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('predeterminado')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_cambio_otro_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_otro_comprobante' ?>" >

                    <?php Lang::_lang('Cambio Otro Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=cambio_otro_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cambio_otro_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cambio_otro_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_cambio_otro_comprobante', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cambio_otro_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cambio_otro_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_otro_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_otro_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_otro_comprobante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_cambio_simultaneo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cambio_simultaneo' ?>" >

                    <?php Lang::_lang('Cambio Simultaneo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=cambio_simultaneo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cambio_simultaneo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cambio_simultaneo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_cambio_simultaneo', GralSiNo::getGralSiNosCmb(), $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cambio_simultaneo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cambio_simultaneo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_simultaneo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cambio_simultaneo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cambio_simultaneo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(FndChqTipoEmisorFndChqTipoEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(FndChqTipoEmisorFndChqTipoEstado::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) != ''){ ?>
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

