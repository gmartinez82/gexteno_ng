<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cli_subcategoria_vta_descuento_financiero';
$db_nombre_pagina = 'cli_subcategoria_vta_descuento_financiero_alta';


$cli_subcategoria_vta_descuento_financiero = new CliSubcategoriaVtaDescuentoFinanciero();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $cli_subcategoria_vta_descuento_financiero = new CliSubcategoriaVtaDescuentoFinanciero();
    // if(trim($hdn_id) != '') $cli_subcategoria_vta_descuento_financiero->setId($hdn_id, false);

    $cli_subcategoria_vta_descuento_financiero = CliSubcategoriaVtaDescuentoFinanciero::getOxId($hdn_id);
    if(!$cli_subcategoria_vta_descuento_financiero){
        $cli_subcategoria_vta_descuento_financiero = new CliSubcategoriaVtaDescuentoFinanciero();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($cli_subcategoria_vta_descuento_financiero){
            if($cli_subcategoria_vta_descuento_financiero->getHash() != $hdn_hash){
                
                header('Location: us_noautorizado.php?tipo=HASH&clase=CliSubcategoriaVtaDescuentoFinanciero&id='.$cli_subcategoria_vta_descuento_financiero->getId().'&cod='.$hdn_hash);
                exit;
            }
        }            
    }
    
	$cli_subcategoria_vta_descuento_financiero->setCliSubcategoriaId(Gral::getVars(1, "cmb_cli_subcategoria_id", null));
	$cli_subcategoria_vta_descuento_financiero->setVtaDescuentoFinancieroId(Gral::getVars(1, "cmb_vta_descuento_financiero_id", null));
	$cli_subcategoria_vta_descuento_financiero->setPredeterminado(Gral::getVars(1, "cmb_predeterminado", 0));
	$cli_subcategoria_vta_descuento_financiero->setObservacion(Gral::getVars(1, "txa_observacion"));

	if($hdn_id == 0){
            $cli_subcategoria_vta_descuento_financiero->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $cli_subcategoria_vta_descuento_financiero->control();
                if(!$error->getExisteError()){
                    $cli_subcategoria_vta_descuento_financiero->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$cli_subcategoria_vta_descuento_financiero->getId().'&hash='.$cli_subcategoria_vta_descuento_financiero->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $cli_subcategoria_vta_descuento_financiero->control();
                if(!$error->getExisteError()){
                    $cli_subcategoria_vta_descuento_financiero->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $cli_subcategoria_vta_descuento_financiero->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($cli_subcategoria_vta_descuento_financiero){
                if($cli_subcategoria_vta_descuento_financiero->getHash() != $hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=CliSubcategoriaVtaDescuentoFinanciero&id='.$cli_subcategoria_vta_descuento_financiero->getId().'&cod='.$hash);
                    exit;
                }
            }            

	}else{
	
            $cli_subcategoria_vta_descuento_financiero->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $cli_subcategoria_vta_descuento_financiero->setCliSubcategoriaId(Gral::getVars(2, "cli_subcategoria_id", 'null'));
            $cli_subcategoria_vta_descuento_financiero->setVtaDescuentoFinancieroId(Gral::getVars(2, "vta_descuento_financiero_id", 'null'));
            $cli_subcategoria_vta_descuento_financiero->setPredeterminado(Gral::getVars(2, "predeterminado", 0));
            $cli_subcategoria_vta_descuento_financiero->setCodigo(Gral::getVars(2, "codigo", ''));
            $cli_subcategoria_vta_descuento_financiero->setObservacion(Gral::getVars(2, "observacion", ''));
            $cli_subcategoria_vta_descuento_financiero->setOrden(Gral::getVars(2, "orden", 0));
            $cli_subcategoria_vta_descuento_financiero->setEstado(Gral::getVars(2, "estado", 0));
            $cli_subcategoria_vta_descuento_financiero->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $cli_subcategoria_vta_descuento_financiero->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $cli_subcategoria_vta_descuento_financiero->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $cli_subcategoria_vta_descuento_financiero->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('CliSubcategoriaVtaDescuentoFinancieros') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliSubcategoriaVtaDescuentoFinanciero::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliSubcategoriaVtaDescuentoFinanciero::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_cli_subcategoria_vta_descuento_financiero'>
        
            <tr>
                <td id="label_cmb_cli_subcategoria_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cli_subcategoria_id' ?>" >

                    <?php Lang::_lang('CliSubcategoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_subcategoria_vta_descuento_financiero_alta&atributo=cli_subcategoria_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cli_subcategoria_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cli_subcategoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_ALTA_CMB_EDIT_CLI_SUBCATEGORIA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_cli_subcategoria_id" clase_id="cli_subcategoria" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_subcategoria_id" <?php echo ($cli_subcategoria_vta_descuento_financiero->getCliSubcategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_cli_subcategoria_id" clase_id="cli_subcategoria" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_cli_subcategoria_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_cli_subcategoria_id', Gral::getCmbFiltro(CliSubcategoria::getCliSubcategoriasCmb(true), '...'), $cli_subcategoria_vta_descuento_financiero->getCliSubcategoriaId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cli_subcategoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cli_subcategoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_subcategoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_subcategoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_subcategoria_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_descuento_financiero_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_descuento_financiero_id' ?>" >

                    <?php Lang::_lang('VtaDescuentoFinanciero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_subcategoria_vta_descuento_financiero_alta&atributo=vta_descuento_financiero_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_descuento_financiero_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_descuento_financiero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_ALTA_CMB_EDIT_VTA_DESCUENTO_FINANCIERO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_descuento_financiero_id" clase_id="vta_descuento_financiero" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_descuento_financiero_id" <?php echo ($cli_subcategoria_vta_descuento_financiero->getVtaDescuentoFinancieroId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_descuento_financiero_id" clase_id="vta_descuento_financiero" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_descuento_financiero_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_descuento_financiero_id', Gral::getCmbFiltro(VtaDescuentoFinanciero::getVtaDescuentoFinancierosCmb(true), '...'), $cli_subcategoria_vta_descuento_financiero->getVtaDescuentoFinancieroId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_descuento_financiero_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_predeterminado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_predeterminado' ?>" >

                    <?php Lang::_lang('Predeterminado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_subcategoria_vta_descuento_financiero_alta&atributo=predeterminado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_predeterminado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('predeterminado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_predeterminado', GralSiNo::getGralSiNosCmb(), $cli_subcategoria_vta_descuento_financiero->getPredeterminado(), 'textbox '.$error_input_css) ?>
		

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
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_subcategoria_vta_descuento_financiero_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($cli_subcategoria_vta_descuento_financiero->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_subcategoria_vta_descuento_financiero->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($cli_subcategoria_vta_descuento_financiero->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliSubcategoriaVtaDescuentoFinanciero::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliSubcategoriaVtaDescuentoFinanciero::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($cli_subcategoria_vta_descuento_financiero->getId()) != ''){ ?>
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

