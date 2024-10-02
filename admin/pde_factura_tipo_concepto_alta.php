<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_factura_tipo_concepto';
$db_nombre_pagina = 'pde_factura_tipo_concepto_alta';


$pde_factura_tipo_concepto = new PdeFacturaTipoConcepto();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $pde_factura_tipo_concepto = new PdeFacturaTipoConcepto();
    // if(trim($hdn_id) != '') $pde_factura_tipo_concepto->setId($hdn_id, false);

    $pde_factura_tipo_concepto = PdeFacturaTipoConcepto::getOxId($hdn_id);
    if(!$pde_factura_tipo_concepto){
        $pde_factura_tipo_concepto = new PdeFacturaTipoConcepto();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($pde_factura_tipo_concepto){
            if(PdeFacturaTipoConcepto::GEN_CONTROL_ALCANCE){
                if($pde_factura_tipo_concepto->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PdeFacturaTipoConcepto&id='.$pde_factura_tipo_concepto->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PDE_FACTURA_TIPO_CONCEPTO_ALTA')){ 
	$pde_factura_tipo_concepto->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$pde_factura_tipo_concepto->setCodigo(Gral::getVars(1, "txt_codigo"));
	$pde_factura_tipo_concepto->setCntbCuentaId(Gral::getVars(1, "dbsug_cntb_cuenta_id", null));
	$pde_factura_tipo_concepto->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('PDE_FACTURA_TIPO_CONCEPTO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $pde_factura_tipo_concepto->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $pde_factura_tipo_concepto->control();
                if(!$error->getExisteError()){
                    $pde_factura_tipo_concepto->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$pde_factura_tipo_concepto->getId().'&hash='.$pde_factura_tipo_concepto->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $pde_factura_tipo_concepto->control();
                if(!$error->getExisteError()){
                    $pde_factura_tipo_concepto->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $pde_factura_tipo_concepto->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($pde_factura_tipo_concepto){
                if(PdeFacturaTipoConcepto::GEN_CONTROL_ALCANCE){
                    if($pde_factura_tipo_concepto->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PdeFacturaTipoConcepto&id='.$pde_factura_tipo_concepto->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $pde_factura_tipo_concepto->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $pde_factura_tipo_concepto->setCodigo(Gral::getVars(2, "codigo", ''));
            $pde_factura_tipo_concepto->setCntbCuentaId(Gral::getVars(2, "cntb_cuenta_id", 'null'));
            $pde_factura_tipo_concepto->setObservacion(Gral::getVars(2, "observacion", ''));
            $pde_factura_tipo_concepto->setOrden(Gral::getVars(2, "orden", 0));
            $pde_factura_tipo_concepto->setEstado(Gral::getVars(2, "estado", 0));
            $pde_factura_tipo_concepto->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $pde_factura_tipo_concepto->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $pde_factura_tipo_concepto->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $pde_factura_tipo_concepto->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeFacturaTipoConceptos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeFacturaTipoConcepto::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeFacturaTipoConcepto::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_TIPO_CONCEPTO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pde_factura_tipo_concepto'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_tipo_concepto_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($pde_factura_tipo_concepto->getDescripcion()) ?>' size='50' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_tipo_concepto_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($pde_factura_tipo_concepto->getCodigo()) ?>' size='40' />

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
                <td id="label_dbsug_cntb_cuenta_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_cuenta_id' ?>" >

                    <?php Lang::_lang('CntbCuenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_tipo_concepto_alta&atributo=cntb_cuenta_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_cntb_cuenta_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_cntb_cuenta', 'ajax/modulos/cntb_cuenta/cntb_cuenta_dbsuggest_custom.php', false, true, '', 'Ingrese ...', $pde_factura_tipo_concepto->getCntbCuentaId(), $pde_factura_tipo_concepto->getCntbCuenta()->getDescripcion(), 40, false, $error_input_css) ?>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cntb_cuenta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cntb_cuenta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_cuenta_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_tipo_concepto_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pde_factura_tipo_concepto->getObservacion()) ?></textarea>

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
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_factura_tipo_concepto->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($pde_factura_tipo_concepto->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeFacturaTipoConcepto::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeFacturaTipoConcepto::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($pde_factura_tipo_concepto->getId()) != ''){ ?>
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

