<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_caja';
$db_nombre_pagina = 'fnd_caja_alta';


$fnd_caja = new FndCaja();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $fnd_caja = new FndCaja();
    if(trim($hdn_id) != '') $fnd_caja->setId($hdn_id, false);
	$fnd_caja->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$fnd_caja->setFndCajeroId(Gral::getVars(1, "cmb_fnd_cajero_id", null));
	$fnd_caja->setGralCajaId(Gral::getVars(1, "cmb_gral_caja_id", null));
	$fnd_caja->setFndCajaTipoEstadoId(Gral::getVars(1, "cmb_fnd_caja_tipo_estado_id", null));
	$fnd_caja->setFechaApertura(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_apertura")));
	$fnd_caja->setFechaCierre(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_cierre")));
	$fnd_caja->setFechaRendicion(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_rendicion")));
	$fnd_caja->setImporteSaldoInicialEsperado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_saldo_inicial_esperado", 0)));
	$fnd_caja->setImporteSaldoInicialReal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_saldo_inicial_real", 0)));
	$fnd_caja->setImporteSaldoInicialDiferencia(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_saldo_inicial_diferencia", 0)));
	$fnd_caja->setImporteSaldoFinal(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_saldo_final", 0)));
	$fnd_caja->setCodigo(Gral::getVars(1, "txt_codigo"));
	$fnd_caja->setObservacion(Gral::getVars(1, "txa_observacion"));
	$fnd_caja->setOrden(Gral::getVars(1, "txt_orden", 0));
	$fnd_caja->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$fnd_caja->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$fnd_caja->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$fnd_caja->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$fnd_caja->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$fnd_caja_estado = new FndCaja();
	if(trim($hdn_id) != ''){
            $fnd_caja_estado->setId($hdn_id);            
            $fnd_caja->setEstado($fnd_caja_estado->getEstado());
	}else{            
            $fnd_caja->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $fnd_caja->control();
			if(!$error->getExisteError()){
				$fnd_caja->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$fnd_caja->getId());
			}
		break;
		case 'guardarnvo':
			$error = $fnd_caja->control();
			if(!$error->getExisteError()){
				$fnd_caja->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$fnd_caja->setId($hdn_id);
	}else{
	
	$fnd_caja->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$fnd_caja->setFndCajeroId(Gral::getVars(2, "fnd_cajero_id", 'null'));
	$fnd_caja->setGralCajaId(Gral::getVars(2, "gral_caja_id", 'null'));
	$fnd_caja->setFndCajaTipoEstadoId(Gral::getVars(2, "fnd_caja_tipo_estado_id", 'null'));
	$fnd_caja->setFechaApertura(Gral::getVars(2, "fecha_apertura", date('Y-m-d')));
	$fnd_caja->setFechaCierre(Gral::getVars(2, "fecha_cierre", date('Y-m-d')));
	$fnd_caja->setFechaRendicion(Gral::getVars(2, "fecha_rendicion", date('Y-m-d')));
	$fnd_caja->setImporteSaldoInicialEsperado(Gral::getVars(2, "importe_saldo_inicial_esperado", 0));
	$fnd_caja->setImporteSaldoInicialReal(Gral::getVars(2, "importe_saldo_inicial_real", 0));
	$fnd_caja->setImporteSaldoInicialDiferencia(Gral::getVars(2, "importe_saldo_inicial_diferencia", 0));
	$fnd_caja->setImporteSaldoFinal(Gral::getVars(2, "importe_saldo_final", 0));
	$fnd_caja->setCodigo(Gral::getVars(2, "codigo", ''));
	$fnd_caja->setObservacion(Gral::getVars(2, "observacion", ''));
	$fnd_caja->setOrden(Gral::getVars(2, "orden", 0));
	$fnd_caja->setEstado(Gral::getVars(2, "estado", 0));
	$fnd_caja->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$fnd_caja->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$fnd_caja->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$fnd_caja->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('FndCajas') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(FndCaja::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(FndCaja::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_fnd_caja'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($fnd_caja->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_fnd_cajero_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_cajero_id' ?>" >

                    <?php Lang::_lang('FndCajero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=fnd_cajero_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_fnd_cajero_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_FND_CAJERO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_cajero_id" <?php echo ($fnd_caja->getFndCajeroId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_fnd_cajero_id" clase_id="fnd_cajero" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_fnd_cajero_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_fnd_cajero_id', Gral::getCmbFiltro(FndCajero::getFndCajerosCmb(), '...'), $fnd_caja->getFndCajeroId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_cajero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_cajero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_cajero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_cajero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_cajero_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_caja_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_caja_id' ?>" >

                    <?php Lang::_lang('GralCaja', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=gral_caja_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_caja_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_caja_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_GRAL_CAJA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_caja_id" clase_id="gral_caja" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_caja_id" <?php echo ($fnd_caja->getGralCajaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_caja_id" clase_id="gral_caja" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_caja_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_caja_id', Gral::getCmbFiltro(GralCaja::getGralCajasCmb(), '...'), $fnd_caja->getGralCajaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_caja_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_caja_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_caja_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_fnd_caja_tipo_estado_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id' ?>" >

                    <?php Lang::_lang('FndCajaTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=fnd_caja_tipo_estado_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_fnd_caja_tipo_estado_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fnd_caja_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_CMB_EDIT_FND_CAJA_TIPO_ESTADO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_fnd_caja_tipo_estado_id" clase_id="fnd_caja_tipo_estado" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_fnd_caja_tipo_estado_id" <?php echo ($fnd_caja->getFndCajaTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_fnd_caja_tipo_estado_id" clase_id="fnd_caja_tipo_estado" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_fnd_caja_tipo_estado_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_fnd_caja_tipo_estado_id', Gral::getCmbFiltro(FndCajaTipoEstado::getFndCajaTipoEstadosCmb(), '...'), $fnd_caja->getFndCajaTipoEstadoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fnd_caja_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fnd_caja_tipo_estado_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_apertura" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_apertura' ?>" >

                    <?php Lang::_lang('Fecha de Apertura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=fecha_apertura' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_apertura" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_apertura')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_apertura' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_apertura' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaApertura())) ?>' size='40' />
                    <input type='button' id='cal_txt_fecha_apertura' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_apertura', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_apertura'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_apertura', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_apertura', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_apertura', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_apertura', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_apertura')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_cierre" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_cierre' ?>" >

                    <?php Lang::_lang('Fecha de Cierre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=fecha_cierre' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_cierre" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_cierre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_cierre' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_cierre' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaCierre())) ?>' size='40' />
                    <input type='button' id='cal_txt_fecha_cierre' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_cierre', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_cierre'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_cierre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_cierre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_cierre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_cierre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_cierre')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_rendicion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_rendicion' ?>" >

                    <?php Lang::_lang('Fecha de Rendicion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=fecha_rendicion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_rendicion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_rendicion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_rendicion' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_rendicion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fnd_caja->getFechaRendicion())) ?>' size='40' />
                    <input type='button' id='cal_txt_fecha_rendicion' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_rendicion', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_rendicion'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_rendicion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_rendicion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_rendicion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_rendicion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_rendicion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_importe_saldo_inicial_esperado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_inicial_esperado' ?>" >

                    <?php Lang::_lang('Importe Saldo Inicial Esperado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=importe_saldo_inicial_esperado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_importe_saldo_inicial_esperado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('importe_saldo_inicial_esperado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe_saldo_inicial_esperado' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='txt_importe_saldo_inicial_esperado' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoInicialEsperado())) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_inicial_esperado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_inicial_esperado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_inicial_esperado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_inicial_esperado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_inicial_esperado')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_importe_saldo_inicial_real" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_inicial_real' ?>" >

                    <?php Lang::_lang('Importe Saldo Inicial Real', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=importe_saldo_inicial_real' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_importe_saldo_inicial_real" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('importe_saldo_inicial_real')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe_saldo_inicial_real' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='txt_importe_saldo_inicial_real' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoInicialReal())) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_inicial_real', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_inicial_real', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_inicial_real', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_inicial_real', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_inicial_real')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_importe_saldo_inicial_diferencia" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_inicial_diferencia' ?>" >

                    <?php Lang::_lang('Importe Saldo Inicial Diferencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=importe_saldo_inicial_diferencia' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_importe_saldo_inicial_diferencia" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('importe_saldo_inicial_diferencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe_saldo_inicial_diferencia' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='txt_importe_saldo_inicial_diferencia' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoInicialDiferencia())) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_inicial_diferencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_inicial_diferencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_inicial_diferencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_inicial_diferencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_inicial_diferencia')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_importe_saldo_final" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_importe_saldo_final' ?>" >

                    <?php Lang::_lang('Importe Saldo Final', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=importe_saldo_final' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_importe_saldo_final" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('importe_saldo_final')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_importe_saldo_final' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='txt_importe_saldo_final' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($fnd_caja->getImporteSaldoFinal())) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_final', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_importe_saldo_final', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_final', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_importe_saldo_final', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_saldo_final')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($fnd_caja->getCodigo()) ?>' size='40' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=fnd_caja_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($fnd_caja->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($fnd_caja->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(FndCaja::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(FndCaja::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($fnd_caja->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/fnd_caja/bloque_vinculo_fnd_caja_ingreso.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/fnd_caja/bloque_vinculo_fnd_caja_egreso.php" ?>
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

