<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante';
$db_nombre_pagina = 'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta';


$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante = new PdeTipoNotaCreditoWsFeParamTipoComprobante();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante = new PdeTipoNotaCreditoWsFeParamTipoComprobante();
    if(trim($hdn_id) != '') $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setId($hdn_id, false);
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setPdeTipoNotaCreditoId(Gral::getVars(1, "cmb_pde_tipo_nota_credito_id", null));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setWsFeParamTipoComprobanteId(Gral::getVars(1, "cmb_ws_fe_param_tipo_comprobante_id", null));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setCodigo(Gral::getVars(1, "txt_codigo"));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setObservacion(Gral::getVars(1, "txa_observacion"));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setOrden(Gral::getVars(1, "txt_orden", 0));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado = new PdeTipoNotaCreditoWsFeParamTipoComprobante();
	if(trim($hdn_id) != ''){
            $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado->setId($hdn_id);            
            $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setEstado($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_estado->getEstado());
	}else{            
            $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->control();
			if(!$error->getExisteError()){
				$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->control();
			if(!$error->getExisteError()){
				$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setId($hdn_id);
	}else{
	
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setPdeTipoNotaCreditoId(Gral::getVars(2, "pde_tipo_nota_credito_id", 'null'));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setWsFeParamTipoComprobanteId(Gral::getVars(2, "ws_fe_param_tipo_comprobante_id", 'null'));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setOrden(Gral::getVars(2, "orden", 0));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setEstado(Gral::getVars(2, "estado", 0));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobante') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeTipoNotaCreditoWsFeParamTipoComprobante::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeTipoNotaCreditoWsFeParamTipoComprobante::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pde_tipo_nota_credito_ws_fe_param_tipo_comprobante'>
        
            <tr>
                <td id="label_cmb_pde_tipo_nota_credito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_nota_credito_id' ?>" >

                    <?php Lang::_lang('PdeTipoNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta&atributo=pde_tipo_nota_credito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_tipo_nota_credito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_tipo_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_CMB_EDIT_PDE_TIPO_NOTA_CREDITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_tipo_nota_credito_id" clase_id="pde_tipo_nota_credito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_nota_credito_id" <?php echo ($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getPdeTipoNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_tipo_nota_credito_id" clase_id="pde_tipo_nota_credito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_tipo_nota_credito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_tipo_nota_credito_id', Gral::getCmbFiltro(PdeTipoNotaCredito::getPdeTipoNotaCreditosCmb(), '...'), $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getPdeTipoNotaCreditoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_tipo_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_tipo_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_nota_credito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ws_fe_param_tipo_comprobante_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ws_fe_param_tipo_comprobante_id' ?>" >

                    <?php Lang::_lang('WsFeParamTipoComprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta&atributo=ws_fe_param_tipo_comprobante_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ws_fe_param_tipo_comprobante_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ws_fe_param_tipo_comprobante_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_CMB_EDIT_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ws_fe_param_tipo_comprobante_id" clase_id="ws_fe_param_tipo_comprobante" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ws_fe_param_tipo_comprobante_id" <?php echo ($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getWsFeParamTipoComprobanteId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ws_fe_param_tipo_comprobante_id" clase_id="ws_fe_param_tipo_comprobante" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ws_fe_param_tipo_comprobante_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ws_fe_param_tipo_comprobante_id', Gral::getCmbFiltro(WsFeParamTipoComprobante::getWsFeParamTipoComprobantesCmb(), '...'), $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getWsFeParamTipoComprobanteId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_param_tipo_comprobante_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ws_fe_param_tipo_comprobante_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_param_tipo_comprobante_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ws_fe_param_tipo_comprobante_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ws_fe_param_tipo_comprobante_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeTipoNotaCreditoWsFeParamTipoComprobante::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeTipoNotaCreditoWsFeParamTipoComprobante::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getId()) != ''){ ?>
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

