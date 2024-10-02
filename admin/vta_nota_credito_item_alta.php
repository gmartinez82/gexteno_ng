<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_nota_credito_item';
$db_nombre_pagina = 'vta_nota_credito_item_alta';


$vta_nota_credito_item = new VtaNotaCreditoItem();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $vta_nota_credito_item = new VtaNotaCreditoItem();
    if(trim($hdn_id) != '') $vta_nota_credito_item->setId($hdn_id, false);
	$vta_nota_credito_item->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$vta_nota_credito_item->setVtaNotaCreditoId(Gral::getVars(1, "cmb_vta_nota_credito_id", null));
	$vta_nota_credito_item->setGralTipoIvaId(Gral::getVars(1, "cmb_gral_tipo_iva_id", null));
	$vta_nota_credito_item->setVtaNotaCreditoConceptoId(Gral::getVars(1, "cmb_vta_nota_credito_concepto_id", null));
	$vta_nota_credito_item->setImporteUnitario(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_unitario", 0)));
	$vta_nota_credito_item->setCantidad(Gral::getVars(1, "txt_cantidad", 0));
	$vta_nota_credito_item->setPercepcionIibbAplica(Gral::getVars(1, "cmb_percepcion_iibb_aplica", 0));
	$vta_nota_credito_item->setCodigo(Gral::getVars(1, "txt_codigo"));
	$vta_nota_credito_item->setObservacion(Gral::getVars(1, "txa_observacion"));
	$vta_nota_credito_item->setOrden(Gral::getVars(1, "txt_orden", 0));
	$vta_nota_credito_item->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$vta_nota_credito_item->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$vta_nota_credito_item->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$vta_nota_credito_item->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$vta_nota_credito_item->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$vta_nota_credito_item_estado = new VtaNotaCreditoItem();
	if(trim($hdn_id) != ''){
            $vta_nota_credito_item_estado->setId($hdn_id);            
            $vta_nota_credito_item->setEstado($vta_nota_credito_item_estado->getEstado());
	}else{            
            $vta_nota_credito_item->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_nota_credito_item->control();
			if(!$error->getExisteError()){
				$vta_nota_credito_item->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$vta_nota_credito_item->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_nota_credito_item->control();
			if(!$error->getExisteError()){
				$vta_nota_credito_item->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$vta_nota_credito_item->setId($hdn_id);
	}else{
	
	$vta_nota_credito_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_nota_credito_item->setVtaNotaCreditoId(Gral::getVars(2, "vta_nota_credito_id", 'null'));
	$vta_nota_credito_item->setGralTipoIvaId(Gral::getVars(2, "gral_tipo_iva_id", 'null'));
	$vta_nota_credito_item->setVtaNotaCreditoConceptoId(Gral::getVars(2, "vta_nota_credito_concepto_id", 'null'));
	$vta_nota_credito_item->setImporteUnitario(Gral::getVars(2, "importe_unitario", 0));
	$vta_nota_credito_item->setCantidad(Gral::getVars(2, "cantidad", 0));
	$vta_nota_credito_item->setPercepcionIibbAplica(Gral::getVars(2, "percepcion_iibb_aplica", 0));
	$vta_nota_credito_item->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_nota_credito_item->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_nota_credito_item->setOrden(Gral::getVars(2, "orden", 0));
	$vta_nota_credito_item->setEstado(Gral::getVars(2, "estado", 0));
	$vta_nota_credito_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_nota_credito_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_nota_credito_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_nota_credito_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaNotaCreditoItem') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaNotaCreditoItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaNotaCreditoItem::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ITEM_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_vta_nota_credito_item'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_nota_credito_item_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($vta_nota_credito_item->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_vta_nota_credito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_credito_id' ?>" >

                    <?php Lang::_lang('VtaNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_nota_credito_item_alta&atributo=vta_nota_credito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_nota_credito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ITEM_ALTA_CMB_EDIT_VTA_NOTA_CREDITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_nota_credito_id" <?php echo ($vta_nota_credito_item->getVtaNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_nota_credito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), $vta_nota_credito_item->getVtaNotaCreditoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_tipo_iva_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_id' ?>" >

                    <?php Lang::_lang('GralTipoIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_nota_credito_item_alta&atributo=gral_tipo_iva_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_tipo_iva_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ITEM_ALTA_CMB_EDIT_GRAL_TIPO_IVA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_iva_id" <?php echo ($vta_nota_credito_item->getGralTipoIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_tipo_iva_id" clase_id="gral_tipo_iva" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_tipo_iva_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), $vta_nota_credito_item->getGralTipoIvaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_nota_credito_concepto_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_credito_concepto_id' ?>" >

                    <?php Lang::_lang('VtaNotaCreditoConcepto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_nota_credito_item_alta&atributo=vta_nota_credito_concepto_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_nota_credito_concepto_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_nota_credito_concepto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ITEM_ALTA_CMB_EDIT_VTA_NOTA_CREDITO_CONCEPTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_nota_credito_concepto_id" clase_id="vta_nota_credito_concepto" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_nota_credito_concepto_id" <?php echo ($vta_nota_credito_item->getVtaNotaCreditoConceptoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_nota_credito_concepto_id" clase_id="vta_nota_credito_concepto" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_nota_credito_concepto_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_nota_credito_concepto_id', Gral::getCmbFiltro(VtaNotaCreditoConcepto::getVtaNotaCreditoConceptosCmb(), '...'), $vta_nota_credito_item->getVtaNotaCreditoConceptoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_concepto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_concepto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_concepto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_concepto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_credito_concepto_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_nota_credito_item_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($vta_nota_credito_item->getCodigo()) ?>' size='40' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_nota_credito_item_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($vta_nota_credito_item->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_nota_credito_item->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaNotaCreditoItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaNotaCreditoItem::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($vta_nota_credito_item->getId()) != ''){ ?>
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

