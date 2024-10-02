<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_condicion_iva_pde_tipo_nota_debito';
$db_nombre_pagina = 'gral_condicion_iva_pde_tipo_nota_debito_alta';


$gral_condicion_iva_pde_tipo_nota_debito = new GralCondicionIvaPdeTipoNotaDebito();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $gral_condicion_iva_pde_tipo_nota_debito = new GralCondicionIvaPdeTipoNotaDebito();
    if(trim($hdn_id) != '') $gral_condicion_iva_pde_tipo_nota_debito->setId($hdn_id, false);
	$gral_condicion_iva_pde_tipo_nota_debito->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$gral_condicion_iva_pde_tipo_nota_debito->setGralCondicionIvaId(Gral::getVars(1, "cmb_gral_condicion_iva_id", null));
	$gral_condicion_iva_pde_tipo_nota_debito->setPdeTipoNotaDebitoId(Gral::getVars(1, "cmb_pde_tipo_nota_debito_id", null));
	$gral_condicion_iva_pde_tipo_nota_debito->setCodigo(Gral::getVars(1, "txt_codigo"));
	$gral_condicion_iva_pde_tipo_nota_debito->setObservacion(Gral::getVars(1, "txa_observacion"));
	$gral_condicion_iva_pde_tipo_nota_debito->setOrden(Gral::getVars(1, "txt_orden", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$gral_condicion_iva_pde_tipo_nota_debito_estado = new GralCondicionIvaPdeTipoNotaDebito();
	if(trim($hdn_id) != ''){
            $gral_condicion_iva_pde_tipo_nota_debito_estado->setId($hdn_id);            
            $gral_condicion_iva_pde_tipo_nota_debito->setEstado($gral_condicion_iva_pde_tipo_nota_debito_estado->getEstado());
	}else{            
            $gral_condicion_iva_pde_tipo_nota_debito->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_condicion_iva_pde_tipo_nota_debito->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva_pde_tipo_nota_debito->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$gral_condicion_iva_pde_tipo_nota_debito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_condicion_iva_pde_tipo_nota_debito->control();
			if(!$error->getExisteError()){
				$gral_condicion_iva_pde_tipo_nota_debito->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$gral_condicion_iva_pde_tipo_nota_debito->setId($hdn_id);
	}else{
	
	$gral_condicion_iva_pde_tipo_nota_debito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_condicion_iva_pde_tipo_nota_debito->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
	$gral_condicion_iva_pde_tipo_nota_debito->setPdeTipoNotaDebitoId(Gral::getVars(2, "pde_tipo_nota_debito_id", 'null'));
	$gral_condicion_iva_pde_tipo_nota_debito->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_condicion_iva_pde_tipo_nota_debito->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_condicion_iva_pde_tipo_nota_debito->setOrden(Gral::getVars(2, "orden", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setEstado(Gral::getVars(2, "estado", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_condicion_iva_pde_tipo_nota_debito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_condicion_iva_pde_tipo_nota_debito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('GralCondicionIvaPdeTipoNotaDebito') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCondicionIvaPdeTipoNotaDebito::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCondicionIvaPdeTipoNotaDebito::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_gral_condicion_iva_pde_tipo_nota_debito'>
        
            <tr>
                <td id="label_cmb_gral_condicion_iva_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_condicion_iva_id' ?>" >

                    <?php Lang::_lang('GralCondicionIva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_pde_tipo_nota_debito_alta&atributo=gral_condicion_iva_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_condicion_iva_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($gral_condicion_iva_pde_tipo_nota_debito->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_condicion_iva_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), $gral_condicion_iva_pde_tipo_nota_debito->getGralCondicionIvaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_condicion_iva_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_condicion_iva_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_tipo_nota_debito_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_tipo_nota_debito_id' ?>" >

                    <?php Lang::_lang('PdeTipoNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_pde_tipo_nota_debito_alta&atributo=pde_tipo_nota_debito_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_tipo_nota_debito_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_tipo_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ALTA_CMB_EDIT_PDE_TIPO_NOTA_DEBITO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_tipo_nota_debito_id" clase_id="pde_tipo_nota_debito" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_nota_debito_id" <?php echo ($gral_condicion_iva_pde_tipo_nota_debito->getPdeTipoNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_tipo_nota_debito_id" clase_id="pde_tipo_nota_debito" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_tipo_nota_debito_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_tipo_nota_debito_id', Gral::getCmbFiltro(PdeTipoNotaDebito::getPdeTipoNotaDebitosCmb(), '...'), $gral_condicion_iva_pde_tipo_nota_debito->getPdeTipoNotaDebitoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_tipo_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_tipo_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_tipo_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_nota_debito_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_pde_tipo_nota_debito_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_condicion_iva_pde_tipo_nota_debito->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_condicion_iva_pde_tipo_nota_debito->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCondicionIvaPdeTipoNotaDebito::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCondicionIvaPdeTipoNotaDebito::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($gral_condicion_iva_pde_tipo_nota_debito->getId()) != ''){ ?>
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

