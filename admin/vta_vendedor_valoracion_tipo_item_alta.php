<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_vendedor_valoracion_tipo_item';
$db_nombre_pagina = 'vta_vendedor_valoracion_tipo_item_alta';


$vta_vendedor_valoracion_tipo_item = new VtaVendedorValoracionTipoItem();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $vta_vendedor_valoracion_tipo_item = new VtaVendedorValoracionTipoItem();
    // if(trim($hdn_id) != '') $vta_vendedor_valoracion_tipo_item->setId($hdn_id, false);

    $vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($hdn_id);
    if(!$vta_vendedor_valoracion_tipo_item){
        $vta_vendedor_valoracion_tipo_item = new VtaVendedorValoracionTipoItem();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($vta_vendedor_valoracion_tipo_item){
            if(VtaVendedorValoracionTipoItem::GEN_CONTROL_ALCANCE){
                if($vta_vendedor_valoracion_tipo_item->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=VtaVendedorValoracionTipoItem&id='.$vta_vendedor_valoracion_tipo_item->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_ALTA')){ 
	$vta_vendedor_valoracion_tipo_item->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$vta_vendedor_valoracion_tipo_item->setDescripcionCorta(Gral::getVars(1, "txt_descripcion_corta"));
	$vta_vendedor_valoracion_tipo_item->setDescripcionPublica(Gral::getVars(1, "txt_descripcion_publica"));
	$vta_vendedor_valoracion_tipo_item->setColor(Gral::getVars(1, "txt_color"));
	$vta_vendedor_valoracion_tipo_item->setColorSecundario(Gral::getVars(1, "txt_color_secundario"));
	$vta_vendedor_valoracion_tipo_item->setCodigo(Gral::getVars(1, "txt_codigo"));
	$vta_vendedor_valoracion_tipo_item->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $vta_vendedor_valoracion_tipo_item->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $vta_vendedor_valoracion_tipo_item->control();
                if(!$error->getExisteError()){
                    $vta_vendedor_valoracion_tipo_item->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$vta_vendedor_valoracion_tipo_item->getId().'&hash='.$vta_vendedor_valoracion_tipo_item->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $vta_vendedor_valoracion_tipo_item->control();
                if(!$error->getExisteError()){
                    $vta_vendedor_valoracion_tipo_item->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $vta_vendedor_valoracion_tipo_item->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($vta_vendedor_valoracion_tipo_item){
                if(VtaVendedorValoracionTipoItem::GEN_CONTROL_ALCANCE){
                    if($vta_vendedor_valoracion_tipo_item->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=VtaVendedorValoracionTipoItem&id='.$vta_vendedor_valoracion_tipo_item->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $vta_vendedor_valoracion_tipo_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $vta_vendedor_valoracion_tipo_item->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
            $vta_vendedor_valoracion_tipo_item->setDescripcionPublica(Gral::getVars(2, "descripcion_publica", ''));
            $vta_vendedor_valoracion_tipo_item->setColor(Gral::getVars(2, "color", ''));
            $vta_vendedor_valoracion_tipo_item->setColorSecundario(Gral::getVars(2, "color_secundario", ''));
            $vta_vendedor_valoracion_tipo_item->setCodigo(Gral::getVars(2, "codigo", ''));
            $vta_vendedor_valoracion_tipo_item->setObservacion(Gral::getVars(2, "observacion", ''));
            $vta_vendedor_valoracion_tipo_item->setOrden(Gral::getVars(2, "orden", 0));
            $vta_vendedor_valoracion_tipo_item->setEstado(Gral::getVars(2, "estado", 0));
            $vta_vendedor_valoracion_tipo_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $vta_vendedor_valoracion_tipo_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $vta_vendedor_valoracion_tipo_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $vta_vendedor_valoracion_tipo_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='vta_vendedor_valoracion_tipo_item' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaVendedorValoracionTipoItems') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaVendedorValoracionTipoItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaVendedorValoracionTipoItem::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_vta_vendedor_valoracion_tipo_item'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_tipo_item_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_descripcion_corta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >

                    <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_tipo_item_alta&atributo=descripcion_corta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion_corta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion_corta' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getDescripcionCorta()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_descripcion_corta_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_descripcion_corta_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_descripcion_publica" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_publica' ?>" >

                    <?php Lang::_lang('Descr Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_tipo_item_alta&atributo=descripcion_publica' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion_publica" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion_publica' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion_publica' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getDescripcionPublica()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_publica')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_descripcion_publica_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_descripcion_publica_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_color" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >

                    <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_tipo_item_alta&atributo=color' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_color" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_color' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_color' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getColor()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_color_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_color_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_color_secundario" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_color_secundario' ?>" >

                    <?php Lang::_lang('Color Secundario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_tipo_item_alta&atributo=color_secundario' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_color_secundario" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('color_secundario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_color_secundario' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_color_secundario' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getColorSecundario()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_color_secundario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_color_secundario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_color_secundario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_color_secundario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color_secundario')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_color_secundario_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_color_secundario_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_tipo_item_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_tipo_item_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/vta_vendedor_valoracion_tipo_item_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_tipo_item->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaVendedorValoracionTipoItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaVendedorValoracionTipoItem::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($vta_vendedor_valoracion_tipo_item->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_tipo_item/bloque_relacion_vta_vendedor_valoracion_tipo_item_vta_vendedor.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'vta_vendedor_valoracion_tipo_item_set.php' ?>
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

