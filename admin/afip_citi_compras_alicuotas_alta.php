<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'afip_citi_compras_alicuotas';
$db_nombre_pagina = 'afip_citi_compras_alicuotas_alta';


$afip_citi_compras_alicuotas = new AfipCitiComprasAlicuotas();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $afip_citi_compras_alicuotas = new AfipCitiComprasAlicuotas();
    if(trim($hdn_id) != '') $afip_citi_compras_alicuotas->setId($hdn_id, false);
	$afip_citi_compras_alicuotas->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$afip_citi_compras_alicuotas->setCodigo(Gral::getVars(1, "txt_codigo"));
	$afip_citi_compras_alicuotas->setAfipCitiPrcId(Gral::getVars(1, "cmb_afip_citi_prc_id", null));
	$afip_citi_compras_alicuotas->setAfipCitiCabeceraId(Gral::getVars(1, "cmb_afip_citi_cabecera_id", null));
	$afip_citi_compras_alicuotas->setAfipCitiTipoComprobante(Gral::getVars(1, "txt_afip_citi_tipo_comprobante"));
	$afip_citi_compras_alicuotas->setAfipCitiPuntoVenta(Gral::getVars(1, "txt_afip_citi_punto_venta"));
	$afip_citi_compras_alicuotas->setAfipCitiNumeroComprobante(Gral::getVars(1, "txt_afip_citi_numero_comprobante"));
	$afip_citi_compras_alicuotas->setAfipCitiCodigoDocumentoVendedor(Gral::getVars(1, "txt_afip_citi_codigo_documento_vendedor"));
	$afip_citi_compras_alicuotas->setAfipCitiNumeroIdentificacionVendedor(Gral::getVars(1, "txt_afip_citi_numero_identificacion_vendedor"));
	$afip_citi_compras_alicuotas->setAfipCitiImporteNetoGravado(Gral::getVars(1, "txt_afip_citi_importe_neto_gravado"));
	$afip_citi_compras_alicuotas->setAfipCitiAlicuotaIva(Gral::getVars(1, "txt_afip_citi_alicuota_iva"));
	$afip_citi_compras_alicuotas->setAfipCitiImporteImpuestoLiquidado(Gral::getVars(1, "txt_afip_citi_importe_impuesto_liquidado"));
	$afip_citi_compras_alicuotas->setPdeFacturaId(Gral::getVars(1, "cmb_pde_factura_id", null));
	$afip_citi_compras_alicuotas->setPdeNotaCreditoId(Gral::getVars(1, "cmb_pde_nota_credito_id", null));
	$afip_citi_compras_alicuotas->setPdeNotaDebitoId(Gral::getVars(1, "cmb_pde_nota_debito_id", null));
	$afip_citi_compras_alicuotas->setObservacion(Gral::getVars(1, "txa_observacion"));
	$afip_citi_compras_alicuotas->setOrden(Gral::getVars(1, "txt_orden", 0));
	$afip_citi_compras_alicuotas->setEstado(Gral::getVars(1, "_estado", 0));
	$afip_citi_compras_alicuotas->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$afip_citi_compras_alicuotas->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$afip_citi_compras_alicuotas->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$afip_citi_compras_alicuotas->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$afip_citi_compras_alicuotas_estado = new AfipCitiComprasAlicuotas();
	if(trim($hdn_id) != ''){
            $afip_citi_compras_alicuotas_estado->setId($hdn_id);            
            $afip_citi_compras_alicuotas->setEstado($afip_citi_compras_alicuotas_estado->getEstado());
	}else{            
            $afip_citi_compras_alicuotas->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $afip_citi_compras_alicuotas->control();
			if(!$error->getExisteError()){
				$afip_citi_compras_alicuotas->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$afip_citi_compras_alicuotas->getId());
			}
		break;
		case 'guardarnvo':
			$error = $afip_citi_compras_alicuotas->control();
			if(!$error->getExisteError()){
				$afip_citi_compras_alicuotas->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$afip_citi_compras_alicuotas->setId($hdn_id);
	}else{
	
	$afip_citi_compras_alicuotas->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$afip_citi_compras_alicuotas->setCodigo(Gral::getVars(2, "codigo", ''));
	$afip_citi_compras_alicuotas->setAfipCitiPrcId(Gral::getVars(2, "afip_citi_prc_id", 'null'));
	$afip_citi_compras_alicuotas->setAfipCitiCabeceraId(Gral::getVars(2, "afip_citi_cabecera_id", 'null'));
	$afip_citi_compras_alicuotas->setAfipCitiTipoComprobante(Gral::getVars(2, "afip_citi_tipo_comprobante", ''));
	$afip_citi_compras_alicuotas->setAfipCitiPuntoVenta(Gral::getVars(2, "afip_citi_punto_venta", ''));
	$afip_citi_compras_alicuotas->setAfipCitiNumeroComprobante(Gral::getVars(2, "afip_citi_numero_comprobante", ''));
	$afip_citi_compras_alicuotas->setAfipCitiCodigoDocumentoVendedor(Gral::getVars(2, "afip_citi_codigo_documento_vendedor", ''));
	$afip_citi_compras_alicuotas->setAfipCitiNumeroIdentificacionVendedor(Gral::getVars(2, "afip_citi_numero_identificacion_vendedor", ''));
	$afip_citi_compras_alicuotas->setAfipCitiImporteNetoGravado(Gral::getVars(2, "afip_citi_importe_neto_gravado", ''));
	$afip_citi_compras_alicuotas->setAfipCitiAlicuotaIva(Gral::getVars(2, "afip_citi_alicuota_iva", ''));
	$afip_citi_compras_alicuotas->setAfipCitiImporteImpuestoLiquidado(Gral::getVars(2, "afip_citi_importe_impuesto_liquidado", ''));
	$afip_citi_compras_alicuotas->setPdeFacturaId(Gral::getVars(2, "pde_factura_id", 'null'));
	$afip_citi_compras_alicuotas->setPdeNotaCreditoId(Gral::getVars(2, "pde_nota_credito_id", 'null'));
	$afip_citi_compras_alicuotas->setPdeNotaDebitoId(Gral::getVars(2, "pde_nota_debito_id", 'null'));
	$afip_citi_compras_alicuotas->setObservacion(Gral::getVars(2, "observacion", ''));
	$afip_citi_compras_alicuotas->setOrden(Gral::getVars(2, "orden", 0));
	$afip_citi_compras_alicuotas->setEstado(Gral::getVars(2, "estado", 0));
	$afip_citi_compras_alicuotas->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$afip_citi_compras_alicuotas->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$afip_citi_compras_alicuotas->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$afip_citi_compras_alicuotas->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('AfipCitiComprasAlicuotass') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AfipCitiComprasAlicuotas::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AfipCitiComprasAlicuotas::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_afip_citi_compras_alicuotas'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getDescripcion()) ?>' size='50' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getCodigo()) ?>' size='40' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_prc_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_afip_citi_prc_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_prc_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA_CMB_EDIT_AFIP_CITI_PRC')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_prc_id" <?php echo ($afip_citi_compras_alicuotas->getAfipCitiPrcId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_afip_citi_prc_id" clase_id="afip_citi_prc" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_afip_citi_prc_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), $afip_citi_compras_alicuotas->getAfipCitiPrcId(), 'textbox '.$error_input_css) ?>
		

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
                <td id="label_cmb_afip_citi_cabecera_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_cabecera_id' ?>" >

                    <?php Lang::_lang('AfipCitiCabecera', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_cabecera_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_afip_citi_cabecera_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_cabecera_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA_CMB_EDIT_AFIP_CITI_CABECERA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_afip_citi_cabecera_id" clase_id="afip_citi_cabecera" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_afip_citi_cabecera_id" <?php echo ($afip_citi_compras_alicuotas->getAfipCitiCabeceraId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_afip_citi_cabecera_id" clase_id="afip_citi_cabecera" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_afip_citi_cabecera_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_afip_citi_cabecera_id', Gral::getCmbFiltro(AfipCitiCabecera::getAfipCitiCabecerasCmb(), '...'), $afip_citi_compras_alicuotas->getAfipCitiCabeceraId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cabecera_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_cabecera_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cabecera_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_cabecera_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_cabecera_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_tipo_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante' ?>" >

                    <?php Lang::_lang('afip_citi_tipo_comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_tipo_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_tipo_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_tipo_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_tipo_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_tipo_comprobante' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiTipoComprobante()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_tipo_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_tipo_comprobante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_punto_venta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_punto_venta' ?>" >

                    <?php Lang::_lang('afip_citi_punto_venta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_punto_venta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_punto_venta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_punto_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_punto_venta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_punto_venta' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiPuntoVenta()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_punto_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_punto_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_punto_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_punto_venta')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_numero_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante' ?>" >

                    <?php Lang::_lang('afip_citi_numero_comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_numero_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_numero_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_numero_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_numero_comprobante' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_numero_comprobante' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiNumeroComprobante()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_numero_comprobante')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_codigo_documento_vendedor" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_codigo_documento_vendedor' ?>" >

                    <?php Lang::_lang('afip_citi_codigo_documento_vendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_codigo_documento_vendedor' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_codigo_documento_vendedor" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_codigo_documento_vendedor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_codigo_documento_vendedor' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_codigo_documento_vendedor' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiCodigoDocumentoVendedor()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_documento_vendedor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_codigo_documento_vendedor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_documento_vendedor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_codigo_documento_vendedor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_codigo_documento_vendedor')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_numero_identificacion_vendedor" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_vendedor' ?>" >

                    <?php Lang::_lang('afip_citi_numero_identificacion_vendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_numero_identificacion_vendedor' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_numero_identificacion_vendedor" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_numero_identificacion_vendedor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_numero_identificacion_vendedor' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_numero_identificacion_vendedor' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiNumeroIdentificacionVendedor()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_vendedor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_vendedor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_vendedor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_numero_identificacion_vendedor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_numero_identificacion_vendedor')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_neto_gravado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_neto_gravado' ?>" >

                    <?php Lang::_lang('afip_citi_importe_neto_gravado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_importe_neto_gravado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_neto_gravado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_neto_gravado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_neto_gravado' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_neto_gravado' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiImporteNetoGravado()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_neto_gravado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_neto_gravado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_neto_gravado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_neto_gravado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_neto_gravado')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_alicuota_iva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_alicuota_iva' ?>" >

                    <?php Lang::_lang('afip_citi_alicuota_iva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_alicuota_iva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_alicuota_iva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_alicuota_iva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_alicuota_iva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_alicuota_iva' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiAlicuotaIva()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_alicuota_iva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_alicuota_iva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_alicuota_iva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_alicuota_iva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_alicuota_iva')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_afip_citi_importe_impuesto_liquidado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_afip_citi_importe_impuesto_liquidado' ?>" >

                    <?php Lang::_lang('afip_citi_importe_impuesto_liquidado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=afip_citi_importe_impuesto_liquidado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_afip_citi_importe_impuesto_liquidado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('afip_citi_importe_impuesto_liquidado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_afip_citi_importe_impuesto_liquidado' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_afip_citi_importe_impuesto_liquidado' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getAfipCitiImporteImpuestoLiquidado()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_impuesto_liquidado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_afip_citi_importe_impuesto_liquidado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_impuesto_liquidado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_afip_citi_importe_impuesto_liquidado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('afip_citi_importe_impuesto_liquidado')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_factura_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_factura_id' ?>" >

                    <?php Lang::_lang('PdeFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=pde_factura_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_factura_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA_CMB_EDIT_PDE_FACTURA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_factura_id" clase_id="pde_factura" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_factura_id" <?php echo ($afip_citi_compras_alicuotas->getPdeFacturaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_factura_id" clase_id="pde_factura" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_factura_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), $afip_citi_compras_alicuotas->getPdeFacturaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_factura_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_nota_credito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_credito_id' ?>" >

                    <?php Lang::_lang('PdeNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=pde_nota_credito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_nota_credito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA_CMB_EDIT_PDE_NOTA_CREDITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_nota_credito_id" clase_id="pde_nota_credito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_credito_id" <?php echo ($afip_citi_compras_alicuotas->getPdeNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_nota_credito_id" clase_id="pde_nota_credito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_nota_credito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_nota_credito_id', Gral::getCmbFiltro(PdeNotaCredito::getPdeNotaCreditosCmb(), '...'), $afip_citi_compras_alicuotas->getPdeNotaCreditoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_nota_debito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_debito_id' ?>" >

                    <?php Lang::_lang('PdeNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=pde_nota_debito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_nota_debito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA_CMB_EDIT_PDE_NOTA_DEBITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_debito_id" <?php echo ($afip_citi_compras_alicuotas->getPdeNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_nota_debito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_nota_debito_id', Gral::getCmbFiltro(PdeNotaDebito::getPdeNotaDebitosCmb(), '...'), $afip_citi_compras_alicuotas->getPdeNotaDebitoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=afip_citi_compras_alicuotas_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($afip_citi_compras_alicuotas->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($afip_citi_compras_alicuotas->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(AfipCitiComprasAlicuotas::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(AfipCitiComprasAlicuotas::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($afip_citi_compras_alicuotas->getId()) != ''){ ?>
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

