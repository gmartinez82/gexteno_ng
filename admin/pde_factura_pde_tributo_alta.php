<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_factura_pde_tributo';
$db_nombre_pagina = 'pde_factura_pde_tributo_alta';


$pde_factura_pde_tributo = new PdeFacturaPdeTributo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $pde_factura_pde_tributo = new PdeFacturaPdeTributo();
    if(trim($hdn_id) != '') $pde_factura_pde_tributo->setId($hdn_id, false);
	$pde_factura_pde_tributo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$pde_factura_pde_tributo->setPdeFacturaId(Gral::getVars(1, "cmb_pde_factura_id", null));
	$pde_factura_pde_tributo->setPdeTributoId(Gral::getVars(1, "cmb_pde_tributo_id", null));
	$pde_factura_pde_tributo->setImporteImponible(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_imponible", 0)));
	$pde_factura_pde_tributo->setImporteTributo(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_tributo", 0)));
	$pde_factura_pde_tributo->setAlicuotaPorcentual(Gral::getVars(1, "txt_alicuota_porcentual", 0));
	$pde_factura_pde_tributo->setAlicuotaDecimal(Gral::getVars(1, "txt_alicuota_decimal", 0));
	$pde_factura_pde_tributo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$pde_factura_pde_tributo->setObservacion(Gral::getVars(1, "txa_observacion"));
	$pde_factura_pde_tributo->setOrden(Gral::getVars(1, "txt_orden", 0));
	$pde_factura_pde_tributo->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$pde_factura_pde_tributo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$pde_factura_pde_tributo->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$pde_factura_pde_tributo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$pde_factura_pde_tributo->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$pde_factura_pde_tributo_estado = new PdeFacturaPdeTributo();
	if(trim($hdn_id) != ''){
            $pde_factura_pde_tributo_estado->setId($hdn_id);            
            $pde_factura_pde_tributo->setEstado($pde_factura_pde_tributo_estado->getEstado());
	}else{            
            $pde_factura_pde_tributo->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_factura_pde_tributo->control();
			if(!$error->getExisteError()){
				$pde_factura_pde_tributo->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$pde_factura_pde_tributo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_factura_pde_tributo->control();
			if(!$error->getExisteError()){
				$pde_factura_pde_tributo->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$pde_factura_pde_tributo->setId($hdn_id);
	}else{
	
	$pde_factura_pde_tributo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_factura_pde_tributo->setPdeFacturaId(Gral::getVars(2, "pde_factura_id", 'null'));
	$pde_factura_pde_tributo->setPdeTributoId(Gral::getVars(2, "pde_tributo_id", 'null'));
	$pde_factura_pde_tributo->setImporteImponible(Gral::getVars(2, "importe_imponible", 0));
	$pde_factura_pde_tributo->setImporteTributo(Gral::getVars(2, "importe_tributo", 0));
	$pde_factura_pde_tributo->setAlicuotaPorcentual(Gral::getVars(2, "alicuota_porcentual", 0));
	$pde_factura_pde_tributo->setAlicuotaDecimal(Gral::getVars(2, "alicuota_decimal", 0));
	$pde_factura_pde_tributo->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_factura_pde_tributo->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_factura_pde_tributo->setOrden(Gral::getVars(2, "orden", 0));
	$pde_factura_pde_tributo->setEstado(Gral::getVars(2, "estado", 0));
	$pde_factura_pde_tributo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_factura_pde_tributo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_factura_pde_tributo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_factura_pde_tributo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeFacturaPdeTributo') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeFacturaPdeTributo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeFacturaPdeTributo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pde_factura_pde_tributo'>
        
            <tr>
                <td id="label_cmb_pde_factura_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_factura_id' ?>" >

                    <?php Lang::_lang('PdeFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_pde_tributo_alta&atributo=pde_factura_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_factura_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_ALTA_CMB_EDIT_PDE_FACTURA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_factura_id" clase_id="pde_factura" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_factura_id" <?php echo ($pde_factura_pde_tributo->getPdeFacturaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_factura_id" clase_id="pde_factura" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_factura_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), $pde_factura_pde_tributo->getPdeFacturaId(), 'textbox '.$error_input_css) ?>
		

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
                <td id="label_cmb_pde_tributo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tributo_id' ?>" >

                    <?php Lang::_lang('PdeTributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_pde_tributo_alta&atributo=pde_tributo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_tributo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_tributo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_ALTA_CMB_EDIT_PDE_TRIBUTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_tributo_id" clase_id="pde_tributo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tributo_id" <?php echo ($pde_factura_pde_tributo->getPdeTributoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_tributo_id" clase_id="pde_tributo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_tributo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_tributo_id', Gral::getCmbFiltro(PdeTributo::getPdeTributosCmb(), '...'), $pde_factura_pde_tributo->getPdeTributoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_tributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_tributo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_tributo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_tributo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tributo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_importe_imponible" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_importe_imponible' ?>" >

                    <?php Lang::_lang('Imp Imponible', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_pde_tributo_alta&atributo=importe_imponible' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_importe_imponible" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('importe_imponible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe_imponible' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='txt_importe_imponible' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_factura_pde_tributo->getImporteImponible())) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_imponible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_imponible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_imponible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_imponible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_imponible')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_importe_tributo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_importe_tributo' ?>" >

                    <?php Lang::_lang('Imp Tributo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_pde_tributo_alta&atributo=importe_tributo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_importe_tributo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('importe_tributo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe_tributo' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='txt_importe_tributo' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($pde_factura_pde_tributo->getImporteTributo())) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_tributo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_tributo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_tributo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_tributo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_tributo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_alicuota_porcentual" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_alicuota_porcentual' ?>" >

                    <?php Lang::_lang('Alicuota Porcentual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_pde_tributo_alta&atributo=alicuota_porcentual' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_alicuota_porcentual" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('alicuota_porcentual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_alicuota_porcentual' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_alicuota_porcentual' value='<?php Gral::_echoTxt($pde_factura_pde_tributo->getAlicuotaPorcentual()) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_alicuota_porcentual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_alicuota_porcentual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_alicuota_porcentual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_alicuota_porcentual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alicuota_porcentual')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_alicuota_decimal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_alicuota_decimal' ?>" >

                    <?php Lang::_lang('Alicuota Decimal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_pde_tributo_alta&atributo=alicuota_decimal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_alicuota_decimal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('alicuota_decimal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_alicuota_decimal' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_alicuota_decimal' value='<?php Gral::_echoTxt($pde_factura_pde_tributo->getAlicuotaDecimal()) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_alicuota_decimal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_alicuota_decimal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_alicuota_decimal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_alicuota_decimal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('alicuota_decimal')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_pde_tributo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pde_factura_pde_tributo->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_factura_pde_tributo->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeFacturaPdeTributo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeFacturaPdeTributo::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($pde_factura_pde_tributo->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/pde_factura_pde_tributo/bloque_relacion_pde_nota_credito_pde_factura_pde_tributo.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'pde_factura_pde_tributo_set.php' ?>
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

