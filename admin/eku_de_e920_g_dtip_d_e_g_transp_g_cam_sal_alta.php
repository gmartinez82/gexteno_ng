<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal';
$db_nombre_pagina = 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta';


$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = new EkuDeE920GDtipDEGTranspGCamSal();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = new EkuDeE920GDtipDEGTranspGCamSal();
    // if(trim($hdn_id) != '') $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setId($hdn_id, false);

    $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = EkuDeE920GDtipDEGTranspGCamSal::getOxId($hdn_id);
    if(!$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal){
        $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = new EkuDeE920GDtipDEGTranspGCamSal();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal){
            if(EkuDeE920GDtipDEGTranspGCamSal::GEN_CONTROL_ALCANCE){
                if($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE920GDtipDEGTranspGCamSal&id='.$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA')){ 
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE921Ddirlocsal(Gral::getVars(1, "txt_eku_e921_ddirlocsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE922Dnumcassal(Gral::getVars(1, "txt_eku_e922_dnumcassal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE923Dcomp1sal(Gral::getVars(1, "txt_eku_e923_dcomp1sal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE924Dcomp2sal(Gral::getVars(1, "txt_eku_e924_dcomp2sal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE925Cdepsal(Gral::getVars(1, "txt_eku_e925_cdepsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE926Ddesdepsal(Gral::getVars(1, "txt_eku_e926_ddesdepsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE927Cdissal(Gral::getVars(1, "txt_eku_e927_cdissal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE928Ddesdissal(Gral::getVars(1, "txt_eku_e928_ddesdissal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE929Cciusal(Gral::getVars(1, "txt_eku_e929_cciusal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE930Ddesciusal(Gral::getVars(1, "txt_eku_e930_ddesciusal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE931Dtelsal(Gral::getVars(1, "txt_eku_e931_dtelsal"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->control();
                if(!$error->getExisteError()){
                    $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId().'&hash='.$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->control();
                if(!$error->getExisteError()){
                    $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal){
                if(EkuDeE920GDtipDEGTranspGCamSal::GEN_CONTROL_ALCANCE){
                    if($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE920GDtipDEGTranspGCamSal&id='.$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE921Ddirlocsal(Gral::getVars(2, "eku_e921_ddirlocsal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE922Dnumcassal(Gral::getVars(2, "eku_e922_dnumcassal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE923Dcomp1sal(Gral::getVars(2, "eku_e923_dcomp1sal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE924Dcomp2sal(Gral::getVars(2, "eku_e924_dcomp2sal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE925Cdepsal(Gral::getVars(2, "eku_e925_cdepsal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE926Ddesdepsal(Gral::getVars(2, "eku_e926_ddesdepsal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE927Cdissal(Gral::getVars(2, "eku_e927_cdissal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE928Ddesdissal(Gral::getVars(2, "eku_e928_ddesdissal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE929Cciusal(Gral::getVars(2, "eku_e929_cciusal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE930Ddesciusal(Gral::getVars(2, "eku_e930_ddesciusal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEkuE931Dtelsal(Gral::getVars(2, "eku_e931_dtelsal", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE920GDtipDEGTranspGCamSals') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE920GDtipDEGTranspGCamSal::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE920GDtipDEGTranspGCamSal::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e921_ddirlocsal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e921_ddirlocsal' ?>" >

                    <?php Lang::_lang('eku_e921_ddirlocsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e921_ddirlocsal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e921_ddirlocsal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e921_ddirlocsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e921_ddirlocsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e921_ddirlocsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE921Ddirlocsal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e921_ddirlocsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e921_ddirlocsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e921_ddirlocsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e921_ddirlocsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e921_ddirlocsal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e921_ddirlocsal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e921_ddirlocsal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e922_dnumcassal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e922_dnumcassal' ?>" >

                    <?php Lang::_lang('eku_e922_dnumcassal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e922_dnumcassal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e922_dnumcassal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e922_dnumcassal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e922_dnumcassal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e922_dnumcassal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE922Dnumcassal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e922_dnumcassal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e922_dnumcassal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e922_dnumcassal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e922_dnumcassal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e922_dnumcassal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e922_dnumcassal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e922_dnumcassal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e923_dcomp1sal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e923_dcomp1sal' ?>" >

                    <?php Lang::_lang('eku_e923_dcomp1sal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e923_dcomp1sal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e923_dcomp1sal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e923_dcomp1sal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e923_dcomp1sal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e923_dcomp1sal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE923Dcomp1sal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e923_dcomp1sal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e923_dcomp1sal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e923_dcomp1sal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e923_dcomp1sal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e923_dcomp1sal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e923_dcomp1sal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e923_dcomp1sal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e924_dcomp2sal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e924_dcomp2sal' ?>" >

                    <?php Lang::_lang('eku_e924_dcomp2sal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e924_dcomp2sal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e924_dcomp2sal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e924_dcomp2sal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e924_dcomp2sal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e924_dcomp2sal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE924Dcomp2sal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e924_dcomp2sal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e924_dcomp2sal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e924_dcomp2sal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e924_dcomp2sal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e924_dcomp2sal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e924_dcomp2sal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e924_dcomp2sal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e925_cdepsal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e925_cdepsal' ?>" >

                    <?php Lang::_lang('eku_e925_cdepsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e925_cdepsal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e925_cdepsal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e925_cdepsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e925_cdepsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e925_cdepsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE925Cdepsal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e925_cdepsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e925_cdepsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e925_cdepsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e925_cdepsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e925_cdepsal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e925_cdepsal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e925_cdepsal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e926_ddesdepsal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e926_ddesdepsal' ?>" >

                    <?php Lang::_lang('eku_e926_ddesdepsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e926_ddesdepsal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e926_ddesdepsal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e926_ddesdepsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e926_ddesdepsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e926_ddesdepsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE926Ddesdepsal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e926_ddesdepsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e926_ddesdepsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e926_ddesdepsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e926_ddesdepsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e926_ddesdepsal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e926_ddesdepsal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e926_ddesdepsal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e927_cdissal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e927_cdissal' ?>" >

                    <?php Lang::_lang('eku_e927_cdissal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e927_cdissal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e927_cdissal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e927_cdissal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e927_cdissal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e927_cdissal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE927Cdissal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e927_cdissal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e927_cdissal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e927_cdissal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e927_cdissal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e927_cdissal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e927_cdissal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e927_cdissal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e928_ddesdissal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e928_ddesdissal' ?>" >

                    <?php Lang::_lang('eku_e928_ddesdissal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e928_ddesdissal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e928_ddesdissal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e928_ddesdissal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e928_ddesdissal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e928_ddesdissal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE928Ddesdissal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e928_ddesdissal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e928_ddesdissal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e928_ddesdissal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e928_ddesdissal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e928_ddesdissal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e928_ddesdissal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e928_ddesdissal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e929_cciusal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e929_cciusal' ?>" >

                    <?php Lang::_lang('eku_e929_cciusal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e929_cciusal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e929_cciusal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e929_cciusal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e929_cciusal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e929_cciusal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE929Cciusal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e929_cciusal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e929_cciusal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e929_cciusal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e929_cciusal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e929_cciusal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e929_cciusal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e929_cciusal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e930_ddesciusal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e930_ddesciusal' ?>" >

                    <?php Lang::_lang('eku_e930_ddesciusal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e930_ddesciusal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e930_ddesciusal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e930_ddesciusal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e930_ddesciusal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e930_ddesciusal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE930Ddesciusal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e930_ddesciusal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e930_ddesciusal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e930_ddesciusal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e930_ddesciusal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e930_ddesciusal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e930_ddesciusal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e930_ddesciusal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e931_dtelsal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e931_dtelsal' ?>" >

                    <?php Lang::_lang('eku_e931_dtelsal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=eku_e931_dtelsal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e931_dtelsal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e931_dtelsal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e931_dtelsal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e931_dtelsal' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE931Dtelsal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e931_dtelsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e931_dtelsal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e931_dtelsal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e931_dtelsal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e931_dtelsal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e931_dtelsal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_eku_e931_dtelsal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE920GDtipDEGTranspGCamSal::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE920GDtipDEGTranspGCamSal::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) != ''){ ?>
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

