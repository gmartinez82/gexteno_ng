<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_g001_g_cam_gen';
$db_nombre_pagina = 'eku_de_g001_g_cam_gen_alta';


$eku_de_g001_g_cam_gen = new EkuDeG001GCamGen();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_g001_g_cam_gen = new EkuDeG001GCamGen();
    // if(trim($hdn_id) != '') $eku_de_g001_g_cam_gen->setId($hdn_id, false);

    $eku_de_g001_g_cam_gen = EkuDeG001GCamGen::getOxId($hdn_id);
    if(!$eku_de_g001_g_cam_gen){
        $eku_de_g001_g_cam_gen = new EkuDeG001GCamGen();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_g001_g_cam_gen){
            if(EkuDeG001GCamGen::GEN_CONTROL_ALCANCE){
                if($eku_de_g001_g_cam_gen->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeG001GCamGen&id='.$eku_de_g001_g_cam_gen->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_G001_G_CAM_GEN_ALTA')){ 
	$eku_de_g001_g_cam_gen->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_g001_g_cam_gen->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_g001_g_cam_gen->setEkuG002Dordcompra(Gral::getVars(1, "txt_eku_g002_dordcompra"));
	$eku_de_g001_g_cam_gen->setEkuG003Dordvta(Gral::getVars(1, "txt_eku_g003_dordvta"));
	$eku_de_g001_g_cam_gen->setEkuG004Dasiento(Gral::getVars(1, "txt_eku_g004_dasiento"));
	$eku_de_g001_g_cam_gen->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_g001_g_cam_gen->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_G001_G_CAM_GEN_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_g001_g_cam_gen->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_g001_g_cam_gen->control();
                if(!$error->getExisteError()){
                    $eku_de_g001_g_cam_gen->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_g001_g_cam_gen->getId().'&hash='.$eku_de_g001_g_cam_gen->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_g001_g_cam_gen->control();
                if(!$error->getExisteError()){
                    $eku_de_g001_g_cam_gen->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_g001_g_cam_gen->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_g001_g_cam_gen){
                if(EkuDeG001GCamGen::GEN_CONTROL_ALCANCE){
                    if($eku_de_g001_g_cam_gen->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeG001GCamGen&id='.$eku_de_g001_g_cam_gen->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_g001_g_cam_gen->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_g001_g_cam_gen->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_g001_g_cam_gen->setEkuG002Dordcompra(Gral::getVars(2, "eku_g002_dordcompra", ''));
            $eku_de_g001_g_cam_gen->setEkuG003Dordvta(Gral::getVars(2, "eku_g003_dordvta", ''));
            $eku_de_g001_g_cam_gen->setEkuG004Dasiento(Gral::getVars(2, "eku_g004_dasiento", ''));
            $eku_de_g001_g_cam_gen->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_g001_g_cam_gen->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_g001_g_cam_gen->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_g001_g_cam_gen->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_g001_g_cam_gen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_g001_g_cam_gen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_g001_g_cam_gen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_g001_g_cam_gen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_g001_g_cam_gen' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeG001GCamGens') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeG001GCamGen::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeG001GCamGen::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_G001_G_CAM_GEN_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_g001_g_cam_gen'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g001_g_cam_gen_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g001_g_cam_gen_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_G001_G_CAM_GEN_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_g001_g_cam_gen->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_g001_g_cam_gen->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g002_dordcompra" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g002_dordcompra' ?>" >

                    <?php Lang::_lang('eku_g002_dordcompra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g001_g_cam_gen_alta&atributo=eku_g002_dordcompra' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g002_dordcompra" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g002_dordcompra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g002_dordcompra' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g002_dordcompra' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getEkuG002Dordcompra()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g002_dordcompra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g002_dordcompra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g002_dordcompra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g002_dordcompra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g002_dordcompra')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_g002_dordcompra_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_g002_dordcompra_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g003_dordvta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g003_dordvta' ?>" >

                    <?php Lang::_lang('eku_g003_dordvta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g001_g_cam_gen_alta&atributo=eku_g003_dordvta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g003_dordvta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g003_dordvta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g003_dordvta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g003_dordvta' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getEkuG003Dordvta()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g003_dordvta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g003_dordvta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g003_dordvta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g003_dordvta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g003_dordvta')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_g003_dordvta_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_g003_dordvta_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g004_dasiento" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g004_dasiento' ?>" >

                    <?php Lang::_lang('eku_g004_dasiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g001_g_cam_gen_alta&atributo=eku_g004_dasiento' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g004_dasiento" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g004_dasiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g004_dasiento' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g004_dasiento' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getEkuG004Dasiento()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g004_dasiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g004_dasiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g004_dasiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g004_dasiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g004_dasiento')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_g004_dasiento_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_eku_g004_dasiento_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g001_g_cam_gen_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g001_g_cam_gen_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_g001_g_cam_gen->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeG001GCamGen::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeG001GCamGen::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_g001_g_cam_gen->getId()) != ''){ ?>
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

