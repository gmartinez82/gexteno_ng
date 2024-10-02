<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_centro_costo_vta_vendedor';
$db_nombre_pagina = 'gral_centro_costo_vta_vendedor_alta';


$gral_centro_costo_vta_vendedor = new GralCentroCostoVtaVendedor();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $gral_centro_costo_vta_vendedor = new GralCentroCostoVtaVendedor();
    // if(trim($hdn_id) != '') $gral_centro_costo_vta_vendedor->setId($hdn_id, false);

    $gral_centro_costo_vta_vendedor = GralCentroCostoVtaVendedor::getOxId($hdn_id);
    if(!$gral_centro_costo_vta_vendedor){
        $gral_centro_costo_vta_vendedor = new GralCentroCostoVtaVendedor();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($gral_centro_costo_vta_vendedor){
            if(GralCentroCostoVtaVendedor::GEN_CONTROL_ALCANCE){
                if($gral_centro_costo_vta_vendedor->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=GralCentroCostoVtaVendedor&id='.$gral_centro_costo_vta_vendedor->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ALTA')){ 
	$gral_centro_costo_vta_vendedor->setGralCentroCostoId(Gral::getVars(1, "cmb_gral_centro_costo_id", null));
	$gral_centro_costo_vta_vendedor->setVtaVendedorId(Gral::getVars(1, "cmb_vta_vendedor_id", null));
	$gral_centro_costo_vta_vendedor->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $gral_centro_costo_vta_vendedor->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $gral_centro_costo_vta_vendedor->control();
                if(!$error->getExisteError()){
                    $gral_centro_costo_vta_vendedor->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$gral_centro_costo_vta_vendedor->getId().'&hash='.$gral_centro_costo_vta_vendedor->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $gral_centro_costo_vta_vendedor->control();
                if(!$error->getExisteError()){
                    $gral_centro_costo_vta_vendedor->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $gral_centro_costo_vta_vendedor->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($gral_centro_costo_vta_vendedor){
                if(GralCentroCostoVtaVendedor::GEN_CONTROL_ALCANCE){
                    if($gral_centro_costo_vta_vendedor->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=GralCentroCostoVtaVendedor&id='.$gral_centro_costo_vta_vendedor->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $gral_centro_costo_vta_vendedor->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $gral_centro_costo_vta_vendedor->setGralCentroCostoId(Gral::getVars(2, "gral_centro_costo_id", 'null'));
            $gral_centro_costo_vta_vendedor->setVtaVendedorId(Gral::getVars(2, "vta_vendedor_id", 'null'));
            $gral_centro_costo_vta_vendedor->setCodigo(Gral::getVars(2, "codigo", ''));
            $gral_centro_costo_vta_vendedor->setObservacion(Gral::getVars(2, "observacion", ''));
            $gral_centro_costo_vta_vendedor->setOrden(Gral::getVars(2, "orden", 0));
            $gral_centro_costo_vta_vendedor->setEstado(Gral::getVars(2, "estado", 0));
            $gral_centro_costo_vta_vendedor->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $gral_centro_costo_vta_vendedor->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $gral_centro_costo_vta_vendedor->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $gral_centro_costo_vta_vendedor->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('GralCentroCostoVtaVendedors') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCentroCostoVtaVendedor::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCentroCostoVtaVendedor::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_gral_centro_costo_vta_vendedor'>
        
            <tr>
                <td id="label_cmb_gral_centro_costo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_centro_costo_id' ?>" >

                    <?php Lang::_lang('GralCentroCosto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_centro_costo_vta_vendedor_alta&atributo=gral_centro_costo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_centro_costo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_centro_costo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ALTA_CMB_EDIT_GRAL_CENTRO_COSTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_centro_costo_id" clase_id="gral_centro_costo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_centro_costo_id" <?php echo ($gral_centro_costo_vta_vendedor->getGralCentroCostoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_centro_costo_id" clase_id="gral_centro_costo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_centro_costo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_centro_costo_id', Gral::getCmbFiltro(GralCentroCosto::getGralCentroCostosCmb(true), '...'), $gral_centro_costo_vta_vendedor->getGralCentroCostoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_centro_costo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_centro_costo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_centro_costo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_centro_costo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_centro_costo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_vendedor_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_vendedor_id' ?>" >

                    <?php Lang::_lang('VtaVendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_centro_costo_vta_vendedor_alta&atributo=vta_vendedor_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_vendedor_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ALTA_CMB_EDIT_VTA_VENDEDOR')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_vendedor_id" <?php echo ($gral_centro_costo_vta_vendedor->getVtaVendedorId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_vendedor_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $gral_centro_costo_vta_vendedor->getVtaVendedorId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_centro_costo_vta_vendedor_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_centro_costo_vta_vendedor->getObservacion()) ?></textarea>

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
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_centro_costo_vta_vendedor->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($gral_centro_costo_vta_vendedor->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCentroCostoVtaVendedor::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCentroCostoVtaVendedor::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($gral_centro_costo_vta_vendedor->getId()) != ''){ ?>
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

