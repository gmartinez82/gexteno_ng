<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cntb_diario_asiento_vta_nota_credito';
$db_nombre_pagina = 'cntb_diario_asiento_vta_nota_credito_alta';


$cntb_diario_asiento_vta_nota_credito = new CntbDiarioAsientoVtaNotaCredito();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $cntb_diario_asiento_vta_nota_credito = new CntbDiarioAsientoVtaNotaCredito();
    if(trim($hdn_id) != '') $cntb_diario_asiento_vta_nota_credito->setId($hdn_id, false);
	$cntb_diario_asiento_vta_nota_credito->setCntbPeriodoId(Gral::getVars(1, "cmb_cntb_periodo_id", null));
	$cntb_diario_asiento_vta_nota_credito->setCntbDiarioAsientoId(Gral::getVars(1, "cmb_cntb_diario_asiento_id", null));
	$cntb_diario_asiento_vta_nota_credito->setVtaNotaCreditoId(Gral::getVars(1, "cmb_vta_nota_credito_id", null));
	$cntb_diario_asiento_vta_nota_credito->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$cntb_diario_asiento_vta_nota_credito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$cntb_diario_asiento_vta_nota_credito->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$cntb_diario_asiento_vta_nota_credito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$cntb_diario_asiento_vta_nota_credito->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$cntb_diario_asiento_vta_nota_credito_estado = new CntbDiarioAsientoVtaNotaCredito();
	if(trim($hdn_id) != ''){
            $cntb_diario_asiento_vta_nota_credito_estado->setId($hdn_id);            
            $cntb_diario_asiento_vta_nota_credito->setEstado($cntb_diario_asiento_vta_nota_credito_estado->getEstado());
	}else{            
            $cntb_diario_asiento_vta_nota_credito->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_diario_asiento_vta_nota_credito->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento_vta_nota_credito->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$cntb_diario_asiento_vta_nota_credito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_diario_asiento_vta_nota_credito->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento_vta_nota_credito->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$cntb_diario_asiento_vta_nota_credito->setId($hdn_id);
	}else{
	
	$cntb_diario_asiento_vta_nota_credito->setCntbPeriodoId(Gral::getVars(2, "cntb_periodo_id", 'null'));
	$cntb_diario_asiento_vta_nota_credito->setCntbDiarioAsientoId(Gral::getVars(2, "cntb_diario_asiento_id", 'null'));
	$cntb_diario_asiento_vta_nota_credito->setVtaNotaCreditoId(Gral::getVars(2, "vta_nota_credito_id", 'null'));
	$cntb_diario_asiento_vta_nota_credito->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_diario_asiento_vta_nota_credito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento_vta_nota_credito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_diario_asiento_vta_nota_credito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento_vta_nota_credito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('CntbDiarioAsientoVtaNotaCreditos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CntbDiarioAsientoVtaNotaCredito::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CntbDiarioAsientoVtaNotaCredito::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_cntb_diario_asiento_vta_nota_credito'>
        
            <tr>
                <td id="label_cmb_cntb_periodo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_periodo_id' ?>" >

                    <?php Lang::_lang('CntbPeriodo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_diario_asiento_vta_nota_credito_alta&atributo=cntb_periodo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cntb_periodo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cntb_periodo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_ALTA_CMB_EDIT_CNTB_PERIODO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_cntb_periodo_id" clase_id="cntb_periodo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_periodo_id" <?php echo ($cntb_diario_asiento_vta_nota_credito->getCntbPeriodoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_cntb_periodo_id" clase_id="cntb_periodo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_cntb_periodo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_cntb_periodo_id', Gral::getCmbFiltro(CntbPeriodo::getCntbPeriodosCmb(), '...'), $cntb_diario_asiento_vta_nota_credito->getCntbPeriodoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cntb_periodo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cntb_periodo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cntb_periodo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cntb_periodo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_periodo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_cntb_diario_asiento_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_diario_asiento_id' ?>" >

                    <?php Lang::_lang('CntbDiarioAsiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_diario_asiento_vta_nota_credito_alta&atributo=cntb_diario_asiento_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cntb_diario_asiento_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_ALTA_CMB_EDIT_CNTB_DIARIO_ASIENTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_diario_asiento_id" <?php echo ($cntb_diario_asiento_vta_nota_credito->getCntbDiarioAsientoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_cntb_diario_asiento_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), $cntb_diario_asiento_vta_nota_credito->getCntbDiarioAsientoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_nota_credito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_nota_credito_id' ?>" >

                    <?php Lang::_lang('VtaNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_diario_asiento_vta_nota_credito_alta&atributo=vta_nota_credito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_nota_credito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_ALTA_CMB_EDIT_VTA_NOTA_CREDITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_nota_credito_id" <?php echo ($cntb_diario_asiento_vta_nota_credito->getVtaNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_nota_credito_id" clase_id="vta_nota_credito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_nota_credito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), $cntb_diario_asiento_vta_nota_credito->getVtaNotaCreditoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_nota_credito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_diario_asiento_vta_nota_credito->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CntbDiarioAsientoVtaNotaCredito::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CntbDiarioAsientoVtaNotaCredito::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($cntb_diario_asiento_vta_nota_credito->getId()) != ''){ ?>
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

