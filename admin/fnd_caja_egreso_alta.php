<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_caja_egreso';
$db_nombre_pagina = 'fnd_caja_egreso_alta';


$fnd_caja_egreso = new FndCajaEgreso();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $fnd_caja_egreso = new FndCajaEgreso();
    if(trim($hdn_id) != '') $fnd_caja_egreso->setId($hdn_id, false);
	$fnd_caja_egreso->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$fnd_caja_egreso->setFndCajaId(Gral::getVars(1, "dbsug_fnd_caja_id", null));
	$fnd_caja_egreso->setFndCajaTipoEgresoId(Gral::getVars(1, "cmb_fnd_caja_tipo_egreso_id", null));
	$fnd_caja_egreso->setCodigoReferencia(Gral::getVars(1, "txt_codigo_referencia"));
	$fnd_caja_egreso->setImporte(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe", 0)));
	$fnd_caja_egreso->setGralFpFormaPagoId(Gral::getVars(1, "cmb_gral_fp_forma_pago_id", null));
	$fnd_caja_egreso->setCodigo(Gral::getVars(1, "txt_codigo"));
	$fnd_caja_egreso->setObservacion(Gral::getVars(1, "txa_observacion"));
	$fnd_caja_egreso->setOrden(Gral::getVars(1, "txt_orden", 0));
	$fnd_caja_egreso->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$fnd_caja_egreso->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$fnd_caja_egreso->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$fnd_caja_egreso->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$fnd_caja_egreso->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$fnd_caja_egreso_estado = new FndCajaEgreso();
	if(trim($hdn_id) != ''){
            $fnd_caja_egreso_estado->setId($hdn_id);            
            $fnd_caja_egreso->setEstado($fnd_caja_egreso_estado->getEstado());
	}else{            
            $fnd_caja_egreso->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_caja_egreso->control();
			if(!$error->getExisteError()){
				$fnd_caja_egreso->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$fnd_caja_egreso->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_caja_egreso->control();
			if(!$error->getExisteError()){
				$fnd_caja_egreso->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$fnd_caja_egreso->setId($hdn_id);
	}else{
	
	$fnd_caja_egreso->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_caja_egreso->setFndCajaId(Gral::getVars(2, "fnd_caja_id", 'null'));
	$fnd_caja_egreso->setFndCajaTipoEgresoId(Gral::getVars(2, "fnd_caja_tipo_egreso_id", 'null'));
	$fnd_caja_egreso->setCodigoReferencia(Gral::getVars(2, "codigo_referencia", ''));
	$fnd_caja_egreso->setImporte(Gral::getVars(2, "importe", 0));
	$fnd_caja_egreso->setGralFpFormaPagoId(Gral::getVars(2, "gral_fp_forma_pago_id", 'null'));
	$fnd_caja_egreso->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_caja_egreso->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_caja_egreso->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_caja_egreso->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_caja_egreso->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_caja_egreso->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_caja_egreso->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_caja_egreso->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('FndCajaEgreso') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(FndCajaEgreso::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(FndCajaEgreso::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_fnd_caja_egreso'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($fnd_caja_egreso->getDescripcion()) ?>' size='50' />

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
                <td id="label_dbsug_fnd_caja_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_id' ?>" >

                    <?php Lang::_lang('FndCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=fnd_caja_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_fnd_caja_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_fnd_caja', 'ajax/modulos/fnd_caja/fnd_caja_dbsuggest.php', false, true, '', 'Ingrese ...', $fnd_caja_egreso->getFndCajaId(), $fnd_caja_egreso->getFndCaja()->getDescripcion(), 40, false, $error_input_css) ?>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_fnd_caja_tipo_egreso_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_tipo_egreso_id' ?>" >

                    <?php Lang::_lang('FndCajaTipoEgreso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=fnd_caja_tipo_egreso_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_fnd_caja_tipo_egreso_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fnd_caja_tipo_egreso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ALTA_CMB_EDIT_FND_CAJA_TIPO_EGRESO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_fnd_caja_tipo_egreso_id" clase_id="fnd_caja_tipo_egreso" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_tipo_egreso_id" <?php echo ($fnd_caja_egreso->getFndCajaTipoEgresoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_fnd_caja_tipo_egreso_id" clase_id="fnd_caja_tipo_egreso" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_fnd_caja_tipo_egreso_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_fnd_caja_tipo_egreso_id', Gral::getCmbFiltro(FndCajaTipoEgreso::getFndCajaTipoEgresosCmb(), '...'), $fnd_caja_egreso->getFndCajaTipoEgresoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_tipo_egreso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_tipo_egreso_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_caja_tipo_egreso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_caja_tipo_egreso_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_tipo_egreso_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo_referencia" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_referencia' ?>" >

                    <?php Lang::_lang('Cod Ref', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=codigo_referencia' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo_referencia" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo_referencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo_referencia' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo_referencia' value='<?php Gral::_echoTxt($fnd_caja_egreso->getCodigoReferencia()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_referencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_referencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_referencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_referencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_referencia')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_importe" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_importe' ?>" >

                    <?php Lang::_lang('Importe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=importe' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_importe" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('importe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='txt_importe' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja_egreso->getImporte())) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_importe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_importe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_fp_forma_pago_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >

                    <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=gral_fp_forma_pago_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_fp_forma_pago_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($fnd_caja_egreso->getGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_fp_forma_pago_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $fnd_caja_egreso->getGralFpFormaPagoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($fnd_caja_egreso->getCodigo()) ?>' size='40' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_egreso_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($fnd_caja_egreso->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_caja_egreso->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(FndCajaEgreso::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(FndCajaEgreso::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($fnd_caja_egreso->getId()) != ''){ ?>
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

