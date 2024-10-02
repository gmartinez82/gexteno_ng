<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_ope_tipo_estado';
$db_nombre_pagina = 'eku_de_ope_tipo_estado_alta';


$eku_de_ope_tipo_estado = new EkuDeOpeTipoEstado();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_ope_tipo_estado = new EkuDeOpeTipoEstado();
    // if(trim($hdn_id) != '') $eku_de_ope_tipo_estado->setId($hdn_id, false);

    $eku_de_ope_tipo_estado = EkuDeOpeTipoEstado::getOxId($hdn_id);
    if(!$eku_de_ope_tipo_estado){
        $eku_de_ope_tipo_estado = new EkuDeOpeTipoEstado();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_ope_tipo_estado){
            if(EkuDeOpeTipoEstado::GEN_CONTROL_ALCANCE){
                if($eku_de_ope_tipo_estado->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeOpeTipoEstado&id='.$eku_de_ope_tipo_estado->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_ALTA')){ 
	$eku_de_ope_tipo_estado->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_ope_tipo_estado->setDescripcionCorta(Gral::getVars(1, "txt_descripcion_corta"));
	$eku_de_ope_tipo_estado->setAprobado(Gral::getVars(1, "cmb_aprobado", 0));
	$eku_de_ope_tipo_estado->setActivo(Gral::getVars(1, "cmb_activo", 0));
	$eku_de_ope_tipo_estado->setTerminal(Gral::getVars(1, "cmb_terminal", 0));
	$eku_de_ope_tipo_estado->setAnulado(Gral::getVars(1, "cmb_anulado", 0));
	$eku_de_ope_tipo_estado->setGestionable(Gral::getVars(1, "cmb_gestionable", 0));
	$eku_de_ope_tipo_estado->setColor(Gral::getVars(1, "txt_color"));
	$eku_de_ope_tipo_estado->setColorSecundario(Gral::getVars(1, "txt_color_secundario"));
	$eku_de_ope_tipo_estado->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_ope_tipo_estado->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_ope_tipo_estado->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_ope_tipo_estado->control();
                if(!$error->getExisteError()){
                    $eku_de_ope_tipo_estado->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_ope_tipo_estado->getId().'&hash='.$eku_de_ope_tipo_estado->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_ope_tipo_estado->control();
                if(!$error->getExisteError()){
                    $eku_de_ope_tipo_estado->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_ope_tipo_estado->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_ope_tipo_estado){
                if(EkuDeOpeTipoEstado::GEN_CONTROL_ALCANCE){
                    if($eku_de_ope_tipo_estado->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeOpeTipoEstado&id='.$eku_de_ope_tipo_estado->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_ope_tipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_ope_tipo_estado->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
            $eku_de_ope_tipo_estado->setAprobado(Gral::getVars(2, "aprobado", 0));
            $eku_de_ope_tipo_estado->setActivo(Gral::getVars(2, "activo", 0));
            $eku_de_ope_tipo_estado->setTerminal(Gral::getVars(2, "terminal", 0));
            $eku_de_ope_tipo_estado->setAnulado(Gral::getVars(2, "anulado", 0));
            $eku_de_ope_tipo_estado->setGestionable(Gral::getVars(2, "gestionable", 0));
            $eku_de_ope_tipo_estado->setColor(Gral::getVars(2, "color", ''));
            $eku_de_ope_tipo_estado->setColorSecundario(Gral::getVars(2, "color_secundario", ''));
            $eku_de_ope_tipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_ope_tipo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_ope_tipo_estado->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_ope_tipo_estado->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_ope_tipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_ope_tipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_ope_tipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_ope_tipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_ope_tipo_estado' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeOpeTipoEstados') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeOpeTipoEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeOpeTipoEstado::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_ope_tipo_estado'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_descripcion_corta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >

                    <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=descripcion_corta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion_corta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion_corta' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getDescripcionCorta()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_descripcion_corta_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_descripcion_corta_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_aprobado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_aprobado' ?>" >

                    <?php Lang::_lang('Aprobado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=aprobado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_aprobado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('aprobado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_aprobado', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getAprobado(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_aprobado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_aprobado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_aprobado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_aprobado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('aprobado')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_aprobado_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_aprobado_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_activo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_activo' ?>" >

                    <?php Lang::_lang('Activo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=activo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_activo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('activo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_activo', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getActivo(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_activo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_activo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('activo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_activo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_activo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_terminal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_terminal' ?>" >

                    <?php Lang::_lang('Terminal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=terminal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_terminal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('terminal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_terminal', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getTerminal(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_terminal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_terminal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('terminal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_terminal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_terminal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_anulado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_anulado' ?>" >

                    <?php Lang::_lang('Anulado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=anulado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_anulado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('anulado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_anulado', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getAnulado(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_anulado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_anulado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_anulado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_anulado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anulado')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_anulado_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_anulado_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gestionable" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gestionable' ?>" >

                    <?php Lang::_lang('Gestionable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=gestionable' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gestionable" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gestionable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_gestionable', GralSiNo::getGralSiNosCmb(), $eku_de_ope_tipo_estado->getGestionable(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gestionable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gestionable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gestionable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gestionable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gestionable')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_gestionable_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_gestionable_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_color" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >

                    <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=color' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_color" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_color' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_color' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getColor()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_color_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_color_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_color_secundario" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_color_secundario' ?>" >

                    <?php Lang::_lang('Color Secundario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=color_secundario' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_color_secundario" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('color_secundario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_color_secundario' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_color_secundario' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getColorSecundario()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_color_secundario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_color_secundario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_color_secundario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_color_secundario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color_secundario')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_color_secundario_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_color_secundario_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_ope_tipo_estado_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_ope_tipo_estado->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_ope_tipo_estado/eku_de_ope_tipo_estado_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_ope_tipo_estado->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeOpeTipoEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeOpeTipoEstado::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_ope_tipo_estado->getId()) != ''){ ?>
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

