<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent';
$db_nombre_pagina = 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta';


$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = new EkuDeE940GDtipDEGTranspGCamEnt();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = new EkuDeE940GDtipDEGTranspGCamEnt();
    // if(trim($hdn_id) != '') $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setId($hdn_id, false);

    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($hdn_id);
    if(!$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = new EkuDeE940GDtipDEGTranspGCamEnt();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){
            if(EkuDeE940GDtipDEGTranspGCamEnt::GEN_CONTROL_ALCANCE){
                if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE940GDtipDEGTranspGCamEnt&id='.$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA')){ 
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE941Ddirlocent(Gral::getVars(1, "txt_eku_e941_ddirlocent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE942Dnumcasent(Gral::getVars(1, "txt_eku_e942_dnumcasent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE943Dcomp1ent(Gral::getVars(1, "txt_eku_e943_dcomp1ent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE944Dcomp2ent(Gral::getVars(1, "txt_eku_e944_dcomp2ent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE945Cdepent(Gral::getVars(1, "txt_eku_e945_cdepent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE946Ddesdepent(Gral::getVars(1, "txt_eku_e946_ddesdepent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE947Cdisent(Gral::getVars(1, "txt_eku_e947_cdisent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE948Ddesdisent(Gral::getVars(1, "txt_eku_e948_ddesdisent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE949Cciuent(Gral::getVars(1, "txt_eku_e949_cciuent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE950Ddesciuent(Gral::getVars(1, "txt_eku_e950_ddesciuent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE951Dtelent(Gral::getVars(1, "txt_eku_e951_dtelent"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->control();
                if(!$error->getExisteError()){
                    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId().'&hash='.$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->control();
                if(!$error->getExisteError()){
                    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){
                if(EkuDeE940GDtipDEGTranspGCamEnt::GEN_CONTROL_ALCANCE){
                    if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE940GDtipDEGTranspGCamEnt&id='.$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE941Ddirlocent(Gral::getVars(2, "eku_e941_ddirlocent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE942Dnumcasent(Gral::getVars(2, "eku_e942_dnumcasent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE943Dcomp1ent(Gral::getVars(2, "eku_e943_dcomp1ent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE944Dcomp2ent(Gral::getVars(2, "eku_e944_dcomp2ent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE945Cdepent(Gral::getVars(2, "eku_e945_cdepent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE946Ddesdepent(Gral::getVars(2, "eku_e946_ddesdepent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE947Cdisent(Gral::getVars(2, "eku_e947_cdisent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE948Ddesdisent(Gral::getVars(2, "eku_e948_ddesdisent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE949Cciuent(Gral::getVars(2, "eku_e949_cciuent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE950Ddesciuent(Gral::getVars(2, "eku_e950_ddesciuent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEkuE951Dtelent(Gral::getVars(2, "eku_e951_dtelent", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE940GDtipDEGTranspGCamEnts') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE940GDtipDEGTranspGCamEnt::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE940GDtipDEGTranspGCamEnt::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e941_ddirlocent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e941_ddirlocent' ?>" >

                    <?php Lang::_lang('eku_e941_ddirlocent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e941_ddirlocent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e941_ddirlocent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e941_ddirlocent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e941_ddirlocent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e941_ddirlocent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE941Ddirlocent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e941_ddirlocent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e941_ddirlocent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e941_ddirlocent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e941_ddirlocent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e941_ddirlocent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e941_ddirlocent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e941_ddirlocent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e942_dnumcasent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e942_dnumcasent' ?>" >

                    <?php Lang::_lang('eku_e942_dnumcasent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e942_dnumcasent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e942_dnumcasent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e942_dnumcasent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e942_dnumcasent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e942_dnumcasent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE942Dnumcasent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e942_dnumcasent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e942_dnumcasent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e942_dnumcasent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e942_dnumcasent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e942_dnumcasent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e942_dnumcasent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e942_dnumcasent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e943_dcomp1ent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e943_dcomp1ent' ?>" >

                    <?php Lang::_lang('eku_e943_dcomp1ent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e943_dcomp1ent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e943_dcomp1ent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e943_dcomp1ent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e943_dcomp1ent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e943_dcomp1ent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE943Dcomp1ent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e943_dcomp1ent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e943_dcomp1ent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e943_dcomp1ent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e943_dcomp1ent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e943_dcomp1ent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e943_dcomp1ent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e943_dcomp1ent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e944_dcomp2ent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e944_dcomp2ent' ?>" >

                    <?php Lang::_lang('eku_e944_dcomp2ent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e944_dcomp2ent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e944_dcomp2ent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e944_dcomp2ent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e944_dcomp2ent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e944_dcomp2ent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE944Dcomp2ent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e944_dcomp2ent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e944_dcomp2ent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e944_dcomp2ent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e944_dcomp2ent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e944_dcomp2ent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e944_dcomp2ent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e944_dcomp2ent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e945_cdepent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e945_cdepent' ?>" >

                    <?php Lang::_lang('eku_e945_cdepent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e945_cdepent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e945_cdepent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e945_cdepent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e945_cdepent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e945_cdepent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE945Cdepent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e945_cdepent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e945_cdepent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e945_cdepent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e945_cdepent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e945_cdepent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e945_cdepent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e945_cdepent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e946_ddesdepent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e946_ddesdepent' ?>" >

                    <?php Lang::_lang('eku_e946_ddesdepent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e946_ddesdepent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e946_ddesdepent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e946_ddesdepent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e946_ddesdepent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e946_ddesdepent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE946Ddesdepent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e946_ddesdepent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e946_ddesdepent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e946_ddesdepent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e946_ddesdepent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e946_ddesdepent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e946_ddesdepent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e946_ddesdepent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e947_cdisent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e947_cdisent' ?>" >

                    <?php Lang::_lang('eku_e947_cdisent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e947_cdisent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e947_cdisent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e947_cdisent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e947_cdisent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e947_cdisent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE947Cdisent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e947_cdisent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e947_cdisent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e947_cdisent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e947_cdisent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e947_cdisent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e947_cdisent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e947_cdisent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e948_ddesdisent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e948_ddesdisent' ?>" >

                    <?php Lang::_lang('eku_e948_ddesdisent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e948_ddesdisent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e948_ddesdisent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e948_ddesdisent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e948_ddesdisent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e948_ddesdisent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE948Ddesdisent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e948_ddesdisent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e948_ddesdisent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e948_ddesdisent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e948_ddesdisent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e948_ddesdisent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e948_ddesdisent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e948_ddesdisent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e949_cciuent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e949_cciuent' ?>" >

                    <?php Lang::_lang('eku_e949_cciuent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e949_cciuent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e949_cciuent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e949_cciuent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e949_cciuent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e949_cciuent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE949Cciuent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e949_cciuent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e949_cciuent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e949_cciuent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e949_cciuent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e949_cciuent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e949_cciuent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e949_cciuent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e950_ddesciuent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e950_ddesciuent' ?>" >

                    <?php Lang::_lang('eku_e950_ddesciuent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e950_ddesciuent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e950_ddesciuent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e950_ddesciuent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e950_ddesciuent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e950_ddesciuent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE950Ddesciuent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e950_ddesciuent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e950_ddesciuent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e950_ddesciuent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e950_ddesciuent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e950_ddesciuent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e950_ddesciuent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e950_ddesciuent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e951_dtelent" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e951_dtelent' ?>" >

                    <?php Lang::_lang('eku_e951_dtelent', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=eku_e951_dtelent' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e951_dtelent" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e951_dtelent')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e951_dtelent' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e951_dtelent' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE951Dtelent()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e951_dtelent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e951_dtelent', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e951_dtelent', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e951_dtelent', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e951_dtelent')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e951_dtelent_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_eku_e951_dtelent_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE940GDtipDEGTranspGCamEnt::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE940GDtipDEGTranspGCamEnt::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) != ''){ ?>
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

