<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_centro_costo_prv_proveedor';
$db_nombre_pagina = 'gral_centro_costo_prv_proveedor_alta';


$gral_centro_costo_prv_proveedor = new GralCentroCostoPrvProveedor();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $gral_centro_costo_prv_proveedor = new GralCentroCostoPrvProveedor();
    // if(trim($hdn_id) != '') $gral_centro_costo_prv_proveedor->setId($hdn_id, false);

    $gral_centro_costo_prv_proveedor = GralCentroCostoPrvProveedor::getOxId($hdn_id);
    if(!$gral_centro_costo_prv_proveedor){
        $gral_centro_costo_prv_proveedor = new GralCentroCostoPrvProveedor();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($gral_centro_costo_prv_proveedor){
            if(GralCentroCostoPrvProveedor::GEN_CONTROL_ALCANCE){
                if($gral_centro_costo_prv_proveedor->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=GralCentroCostoPrvProveedor&id='.$gral_centro_costo_prv_proveedor->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_PRV_PROVEEDOR_ALTA')){ 
	$gral_centro_costo_prv_proveedor->setGralCentroCostoId(Gral::getVars(1, "cmb_gral_centro_costo_id", null));
	$gral_centro_costo_prv_proveedor->setPrvProveedorId(Gral::getVars(1, "dbsug_prv_proveedor_id", null));
	$gral_centro_costo_prv_proveedor->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_PRV_PROVEEDOR_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $gral_centro_costo_prv_proveedor->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $gral_centro_costo_prv_proveedor->control();
                if(!$error->getExisteError()){
                    $gral_centro_costo_prv_proveedor->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$gral_centro_costo_prv_proveedor->getId().'&hash='.$gral_centro_costo_prv_proveedor->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $gral_centro_costo_prv_proveedor->control();
                if(!$error->getExisteError()){
                    $gral_centro_costo_prv_proveedor->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $gral_centro_costo_prv_proveedor->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($gral_centro_costo_prv_proveedor){
                if(GralCentroCostoPrvProveedor::GEN_CONTROL_ALCANCE){
                    if($gral_centro_costo_prv_proveedor->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=GralCentroCostoPrvProveedor&id='.$gral_centro_costo_prv_proveedor->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $gral_centro_costo_prv_proveedor->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $gral_centro_costo_prv_proveedor->setGralCentroCostoId(Gral::getVars(2, "gral_centro_costo_id", 'null'));
            $gral_centro_costo_prv_proveedor->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
            $gral_centro_costo_prv_proveedor->setCodigo(Gral::getVars(2, "codigo", ''));
            $gral_centro_costo_prv_proveedor->setObservacion(Gral::getVars(2, "observacion", ''));
            $gral_centro_costo_prv_proveedor->setOrden(Gral::getVars(2, "orden", 0));
            $gral_centro_costo_prv_proveedor->setEstado(Gral::getVars(2, "estado", 0));
            $gral_centro_costo_prv_proveedor->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $gral_centro_costo_prv_proveedor->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $gral_centro_costo_prv_proveedor->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $gral_centro_costo_prv_proveedor->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('GralCentroCostoPrvProveedors') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCentroCostoPrvProveedor::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCentroCostoPrvProveedor::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_PRV_PROVEEDOR_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_gral_centro_costo_prv_proveedor'>
        
            <tr>
                <td id="label_cmb_gral_centro_costo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_centro_costo_id' ?>" >

                    <?php Lang::_lang('GralCentroCosto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_centro_costo_prv_proveedor_alta&atributo=gral_centro_costo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_centro_costo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_centro_costo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_PRV_PROVEEDOR_ALTA_CMB_EDIT_GRAL_CENTRO_COSTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_centro_costo_id" clase_id="gral_centro_costo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_centro_costo_id" <?php echo ($gral_centro_costo_prv_proveedor->getGralCentroCostoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_centro_costo_id" clase_id="gral_centro_costo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_centro_costo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_centro_costo_id', Gral::getCmbFiltro(GralCentroCosto::getGralCentroCostosCmb(true), '...'), $gral_centro_costo_prv_proveedor->getGralCentroCostoId(), 'textbox  '.$error_input_css) ?>
		

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
                <td id="label_dbsug_prv_proveedor_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >

                    <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_centro_costo_prv_proveedor_alta&atributo=prv_proveedor_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_prv_proveedor_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_prv_proveedor', 'ajax/modulos/prv_proveedor/prv_proveedor_dbsuggest.php', false, true, '', 'Ingrese ...', $gral_centro_costo_prv_proveedor->getPrvProveedorId(), $gral_centro_costo_prv_proveedor->getPrvProveedor()->getDescripcion(), 40, false, $error_input_css) ?>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_centro_costo_prv_proveedor_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_centro_costo_prv_proveedor->getObservacion()) ?></textarea>

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
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_centro_costo_prv_proveedor->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($gral_centro_costo_prv_proveedor->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCentroCostoPrvProveedor::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCentroCostoPrvProveedor::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($gral_centro_costo_prv_proveedor->getId()) != ''){ ?>
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

