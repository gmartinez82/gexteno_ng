<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_comision_gral_fp_forma_pago';
$db_nombre_pagina = 'vta_comision_gral_fp_forma_pago_alta';


$vta_comision_gral_fp_forma_pago = new VtaComisionGralFpFormaPago();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $vta_comision_gral_fp_forma_pago = new VtaComisionGralFpFormaPago();
    if(trim($hdn_id) != '') $vta_comision_gral_fp_forma_pago->setId($hdn_id, false);
	$vta_comision_gral_fp_forma_pago->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$vta_comision_gral_fp_forma_pago->setVtaComisionId(Gral::getVars(1, "cmb_vta_comision_id", null));
	$vta_comision_gral_fp_forma_pago->setGralFpFormaPagoId(Gral::getVars(1, "cmb_gral_fp_forma_pago_id", null));
	$vta_comision_gral_fp_forma_pago->setImporteAfectado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "txt_importe_afectado", 0)));
	$vta_comision_gral_fp_forma_pago->setCodigo(Gral::getVars(1, "txt_codigo"));
	$vta_comision_gral_fp_forma_pago->setObservacion(Gral::getVars(1, "txa_observacion"));
	$vta_comision_gral_fp_forma_pago->setOrden(Gral::getVars(1, "txt_orden", 0));
	$vta_comision_gral_fp_forma_pago->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$vta_comision_gral_fp_forma_pago->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$vta_comision_gral_fp_forma_pago->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$vta_comision_gral_fp_forma_pago->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$vta_comision_gral_fp_forma_pago->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$vta_comision_gral_fp_forma_pago_estado = new VtaComisionGralFpFormaPago();
	if(trim($hdn_id) != ''){
            $vta_comision_gral_fp_forma_pago_estado->setId($hdn_id);            
            $vta_comision_gral_fp_forma_pago->setEstado($vta_comision_gral_fp_forma_pago_estado->getEstado());
	}else{            
            $vta_comision_gral_fp_forma_pago->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_comision_gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$vta_comision_gral_fp_forma_pago->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$vta_comision_gral_fp_forma_pago->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_comision_gral_fp_forma_pago->control();
			if(!$error->getExisteError()){
				$vta_comision_gral_fp_forma_pago->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$vta_comision_gral_fp_forma_pago->setId($hdn_id);
	}else{
	
	$vta_comision_gral_fp_forma_pago->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_comision_gral_fp_forma_pago->setVtaComisionId(Gral::getVars(2, "vta_comision_id", 'null'));
	$vta_comision_gral_fp_forma_pago->setGralFpFormaPagoId(Gral::getVars(2, "gral_fp_forma_pago_id", 'null'));
	$vta_comision_gral_fp_forma_pago->setImporteAfectado(Gral::getVars(2, "importe_afectado", 0));
	$vta_comision_gral_fp_forma_pago->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_comision_gral_fp_forma_pago->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_comision_gral_fp_forma_pago->setOrden(Gral::getVars(2, "orden", 0));
	$vta_comision_gral_fp_forma_pago->setEstado(Gral::getVars(2, "estado", 0));
	$vta_comision_gral_fp_forma_pago->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_comision_gral_fp_forma_pago->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_comision_gral_fp_forma_pago->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_comision_gral_fp_forma_pago->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaComisionGralFpFormaPago') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaComisionGralFpFormaPago::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaComisionGralFpFormaPago::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_vta_comision_gral_fp_forma_pago'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_comision_gral_fp_forma_pago_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_vta_comision_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_comision_id' ?>" >

                    <?php Lang::_lang('VtaComision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_comision_gral_fp_forma_pago_alta&atributo=vta_comision_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_comision_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_comision_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA_CMB_EDIT_VTA_COMISION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_comision_id" clase_id="vta_comision" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_comision_id" <?php echo ($vta_comision_gral_fp_forma_pago->getVtaComisionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_comision_id" clase_id="vta_comision" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_comision_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), $vta_comision_gral_fp_forma_pago->getVtaComisionId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_comision_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_comision_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_comision_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_comision_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_comision_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_fp_forma_pago_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >

                    <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_comision_gral_fp_forma_pago_alta&atributo=gral_fp_forma_pago_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_fp_forma_pago_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($vta_comision_gral_fp_forma_pago->getGralFpFormaPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_fp_forma_pago_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $vta_comision_gral_fp_forma_pago->getGralFpFormaPagoId(), 'textbox '.$error_input_css) ?>
		

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_comision_gral_fp_forma_pago_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getCodigo()) ?>' size='40' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_comision_gral_fp_forma_pago_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_comision_gral_fp_forma_pago->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaComisionGralFpFormaPago::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaComisionGralFpFormaPago::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($vta_comision_gral_fp_forma_pago->getId()) != ''){ ?>
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

