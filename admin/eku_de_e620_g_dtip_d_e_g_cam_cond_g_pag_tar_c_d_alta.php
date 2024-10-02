<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d';
$db_nombre_pagina = 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta';


$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = new EkuDeE620GDtipDEGCamCondGPagTarCD();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = new EkuDeE620GDtipDEGCamCondGPagTarCD();
    // if(trim($hdn_id) != '') $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setId($hdn_id, false);

    $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = EkuDeE620GDtipDEGCamCondGPagTarCD::getOxId($hdn_id);
    if(!$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d){
        $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = new EkuDeE620GDtipDEGCamCondGPagTarCD();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d){
            if(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_CONTROL_ALCANCE){
                if($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE620GDtipDEGCamCondGPagTarCD&id='.$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA')){ 
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE621Identarj(Gral::getVars(1, "txt_eku_e621_identarj"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE622Ddesdentarj(Gral::getVars(1, "txt_eku_e622_ddesdentarj"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE623Drsprotar(Gral::getVars(1, "txt_eku_e623_drsprotar"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE624Drucprotar(Gral::getVars(1, "txt_eku_e624_drucprotar"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE625Ddvprotar(Gral::getVars(1, "txt_eku_e625_ddvprotar"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE626Iforpropa(Gral::getVars(1, "txt_eku_e626_iforpropa"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE627Dcodauope(Gral::getVars(1, "txt_eku_e627_dcodauope"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE628Dnomtit(Gral::getVars(1, "txt_eku_e628_dnomtit"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE629Dnumtarj(Gral::getVars(1, "txt_eku_e629_dnumtarj"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->control();
                if(!$error->getExisteError()){
                    $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId().'&hash='.$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->control();
                if(!$error->getExisteError()){
                    $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d){
                if(EkuDeE620GDtipDEGCamCondGPagTarCD::GEN_CONTROL_ALCANCE){
                    if($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE620GDtipDEGCamCondGPagTarCD&id='.$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE621Identarj(Gral::getVars(2, "eku_e621_identarj", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE622Ddesdentarj(Gral::getVars(2, "eku_e622_ddesdentarj", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE623Drsprotar(Gral::getVars(2, "eku_e623_drsprotar", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE624Drucprotar(Gral::getVars(2, "eku_e624_drucprotar", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE625Ddvprotar(Gral::getVars(2, "eku_e625_ddvprotar", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE626Iforpropa(Gral::getVars(2, "eku_e626_iforpropa", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE627Dcodauope(Gral::getVars(2, "eku_e627_dcodauope", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE628Dnomtit(Gral::getVars(2, "eku_e628_dnomtit", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEkuE629Dnumtarj(Gral::getVars(2, "eku_e629_dnumtarj", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE620GDtipDEGCamCondGPagTarCDs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE620GDtipDEGCamCondGPagTarCD::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE620GDtipDEGCamCondGPagTarCD::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e621_identarj" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e621_identarj' ?>" >

                    <?php Lang::_lang('eku_e621_identarj', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e621_identarj' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e621_identarj" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e621_identarj')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e621_identarj' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e621_identarj' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE621Identarj()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e621_identarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e621_identarj', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e621_identarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e621_identarj', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e621_identarj')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e621_identarj_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e621_identarj_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e622_ddesdentarj" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e622_ddesdentarj' ?>" >

                    <?php Lang::_lang('eku_e622_ddesdentarj', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e622_ddesdentarj' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e622_ddesdentarj" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e622_ddesdentarj')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e622_ddesdentarj' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e622_ddesdentarj' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE622Ddesdentarj()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e622_ddesdentarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e622_ddesdentarj', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e622_ddesdentarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e622_ddesdentarj', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e622_ddesdentarj')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e622_ddesdentarj_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e622_ddesdentarj_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e623_drsprotar" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e623_drsprotar' ?>" >

                    <?php Lang::_lang('eku_e623_drsprotar', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e623_drsprotar' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e623_drsprotar" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e623_drsprotar')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e623_drsprotar' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e623_drsprotar' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE623Drsprotar()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e623_drsprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e623_drsprotar', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e623_drsprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e623_drsprotar', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e623_drsprotar')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e623_drsprotar_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e623_drsprotar_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e624_drucprotar" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e624_drucprotar' ?>" >

                    <?php Lang::_lang('eku_e624_drucprotar', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e624_drucprotar' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e624_drucprotar" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e624_drucprotar')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e624_drucprotar' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e624_drucprotar' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE624Drucprotar()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e624_drucprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e624_drucprotar', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e624_drucprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e624_drucprotar', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e624_drucprotar')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e624_drucprotar_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e624_drucprotar_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e625_ddvprotar" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e625_ddvprotar' ?>" >

                    <?php Lang::_lang('eku_e625_ddvprotar', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e625_ddvprotar' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e625_ddvprotar" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e625_ddvprotar')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e625_ddvprotar' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e625_ddvprotar' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE625Ddvprotar()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e625_ddvprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e625_ddvprotar', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e625_ddvprotar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e625_ddvprotar', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e625_ddvprotar')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e625_ddvprotar_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e625_ddvprotar_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e626_iforpropa" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e626_iforpropa' ?>" >

                    <?php Lang::_lang('eku_e626_iforpropa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e626_iforpropa' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e626_iforpropa" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e626_iforpropa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e626_iforpropa' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e626_iforpropa' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE626Iforpropa()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e626_iforpropa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e626_iforpropa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e626_iforpropa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e626_iforpropa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e626_iforpropa')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e626_iforpropa_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e626_iforpropa_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e627_dcodauope" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e627_dcodauope' ?>" >

                    <?php Lang::_lang('eku_e627_dcodauope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e627_dcodauope' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e627_dcodauope" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e627_dcodauope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e627_dcodauope' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e627_dcodauope' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE627Dcodauope()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e627_dcodauope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e627_dcodauope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e627_dcodauope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e627_dcodauope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e627_dcodauope')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e627_dcodauope_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e627_dcodauope_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e628_dnomtit" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e628_dnomtit' ?>" >

                    <?php Lang::_lang('eku_e628_dnomtit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e628_dnomtit' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e628_dnomtit" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e628_dnomtit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e628_dnomtit' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e628_dnomtit' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE628Dnomtit()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e628_dnomtit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e628_dnomtit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e628_dnomtit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e628_dnomtit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e628_dnomtit')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e628_dnomtit_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e628_dnomtit_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e629_dnumtarj" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e629_dnumtarj' ?>" >

                    <?php Lang::_lang('eku_e629_dnumtarj', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=eku_e629_dnumtarj' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e629_dnumtarj" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e629_dnumtarj')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e629_dnumtarj' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e629_dnumtarj' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE629Dnumtarj()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e629_dnumtarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e629_dnumtarj', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e629_dnumtarj', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e629_dnumtarj', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e629_dnumtarj')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e629_dnumtarj_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_eku_e629_dnumtarj_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE620GDtipDEGCamCondGPagTarCD::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE620GDtipDEGCamCondGPagTarCD::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) != ''){ ?>
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

