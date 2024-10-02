<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_condicion_iva';
$db_nombre_pagina = 'gral_condicion_iva_alta';


$gral_condicion_iva = new GralCondicionIva();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $gral_condicion_iva = new GralCondicionIva();
    // if(trim($hdn_id) != '') $gral_condicion_iva->setId($hdn_id, false);

    $gral_condicion_iva = GralCondicionIva::getOxId($hdn_id);
    if(!$gral_condicion_iva){
        $gral_condicion_iva = new GralCondicionIva();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($gral_condicion_iva){
            if(GralCondicionIva::GEN_CONTROL_ALCANCE){
                if($gral_condicion_iva->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=GralCondicionIva&id='.$gral_condicion_iva->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA')){ 
	$gral_condicion_iva->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$gral_condicion_iva->setCodigo(Gral::getVars(1, "txt_codigo"));
	$gral_condicion_iva->setIvaDiscriminado(Gral::getVars(1, "cmb_iva_discriminado", 0));
	$gral_condicion_iva->setIvaDiscriminadoComprobante(Gral::getVars(1, "cmb_iva_discriminado_comprobante", 0));
	$gral_condicion_iva->setLeyendaComprobante(Gral::getVars(1, "txa_leyenda_comprobante"));
	$gral_condicion_iva->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $gral_condicion_iva->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $gral_condicion_iva->control();
                if(!$error->getExisteError()){
                    $gral_condicion_iva->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$gral_condicion_iva->getId().'&hash='.$gral_condicion_iva->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $gral_condicion_iva->control();
                if(!$error->getExisteError()){
                    $gral_condicion_iva->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $gral_condicion_iva->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($gral_condicion_iva){
                if(GralCondicionIva::GEN_CONTROL_ALCANCE){
                    if($gral_condicion_iva->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=GralCondicionIva&id='.$gral_condicion_iva->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $gral_condicion_iva->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $gral_condicion_iva->setCodigo(Gral::getVars(2, "codigo", ''));
            $gral_condicion_iva->setIvaDiscriminado(Gral::getVars(2, "iva_discriminado", 0));
            $gral_condicion_iva->setIvaDiscriminadoComprobante(Gral::getVars(2, "iva_discriminado_comprobante", 0));
            $gral_condicion_iva->setLeyendaComprobante(Gral::getVars(2, "leyenda_comprobante", ''));
            $gral_condicion_iva->setObservacion(Gral::getVars(2, "observacion", ''));
            $gral_condicion_iva->setOrden(Gral::getVars(2, "orden", 0));
            $gral_condicion_iva->setEstado(Gral::getVars(2, "estado", 0));
            $gral_condicion_iva->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $gral_condicion_iva->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $gral_condicion_iva->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $gral_condicion_iva->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='gral_condicion_iva' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('GralCondicionIva') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCondicionIva::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCondicionIva::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_gral_condicion_iva'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($gral_condicion_iva->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($gral_condicion_iva->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_iva_discriminado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_iva_discriminado' ?>" >

                    <?php Lang::_lang('Iva Discriminado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_alta&atributo=iva_discriminado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_iva_discriminado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('iva_discriminado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_iva_discriminado', GralSiNo::getGralSiNosCmb(), $gral_condicion_iva->getIvaDiscriminado(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_iva_discriminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_iva_discriminado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_iva_discriminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_iva_discriminado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('iva_discriminado')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_iva_discriminado_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_iva_discriminado_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_iva_discriminado_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_iva_discriminado_comprobante' ?>" >

                    <?php Lang::_lang('Iva Discr Compr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_alta&atributo=iva_discriminado_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_iva_discriminado_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('iva_discriminado_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_iva_discriminado_comprobante', GralSiNo::getGralSiNosCmb(), $gral_condicion_iva->getIvaDiscriminadoComprobante(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_iva_discriminado_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_iva_discriminado_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_iva_discriminado_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_iva_discriminado_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('iva_discriminado_comprobante')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_iva_discriminado_comprobante_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_iva_discriminado_comprobante_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_leyenda_comprobante" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_leyenda_comprobante' ?>" >

                    <?php Lang::_lang('Leyenda Comprobante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_alta&atributo=leyenda_comprobante' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_leyenda_comprobante" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('leyenda_comprobante')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_leyenda_comprobante' rows='10' cols='50' id='txa_leyenda_comprobante' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_condicion_iva->getLeyendaComprobante()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_leyenda_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_leyenda_comprobante', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_leyenda_comprobante', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_leyenda_comprobante', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leyenda_comprobante')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_leyenda_comprobante_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_leyenda_comprobante_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_condicion_iva_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_condicion_iva->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_condicion_iva->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($gral_condicion_iva->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralCondicionIva::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralCondicionIva::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($gral_condicion_iva->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_vta_tipo_factura.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_vta_tipo_nota_credito.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_vta_tipo_nota_debito.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_vta_tipo_recibo.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_pde_tipo_factura.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_pde_tipo_nota_credito.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_pde_tipo_nota_debito.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_pde_tipo_recibo.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_vta_tipo_ajuste_debe.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_gral_condicion_iva_vta_tipo_ajuste_haber.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_condicion_iva/bloque_relacion_eku_param_tipo_naturaleza_receptor_gral_condicion_iva.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'gral_condicion_iva_set.php' ?>
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

