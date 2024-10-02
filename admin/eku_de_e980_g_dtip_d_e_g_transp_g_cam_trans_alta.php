<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans';
$db_nombre_pagina = 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta';


$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = new EkuDeE980GDtipDEGTranspGCamTrans();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = new EkuDeE980GDtipDEGTranspGCamTrans();
    // if(trim($hdn_id) != '') $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setId($hdn_id, false);

    $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = EkuDeE980GDtipDEGTranspGCamTrans::getOxId($hdn_id);
    if(!$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){
        $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = new EkuDeE980GDtipDEGTranspGCamTrans();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){
            if(EkuDeE980GDtipDEGTranspGCamTrans::GEN_CONTROL_ALCANCE){
                if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE980GDtipDEGTranspGCamTrans&id='.$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA')){ 
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE981Inattrans(Gral::getVars(1, "txt_eku_e981_inattrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE982Dnomtrans(Gral::getVars(1, "txt_eku_e982_dnomtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE983Dructrans(Gral::getVars(1, "txt_eku_e983_dructrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE984Ddvtrans(Gral::getVars(1, "txt_eku_e984_ddvtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE985Itipidtrans(Gral::getVars(1, "txt_eku_e985_itipidtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE986Ddtipidtrans(Gral::getVars(1, "txt_eku_e986_ddtipidtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE987Dnumidtrans(Gral::getVars(1, "txt_eku_e987_dnumidtrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE988Cnactrans(Gral::getVars(1, "txt_eku_e988_cnactrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE989Ddesnactrans(Gral::getVars(1, "txt_eku_e989_ddesnactrans"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE990Dnumidchof(Gral::getVars(1, "txt_eku_e990_dnumidchof"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE991Dnomchof(Gral::getVars(1, "txt_eku_e991_dnomchof"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE992Ddomfisc(Gral::getVars(1, "txt_eku_e992_ddomfisc"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE993Ddirchof(Gral::getVars(1, "txt_eku_e993_ddirchof"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE994Dnombag(Gral::getVars(1, "txt_eku_e994_dnombag"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE995Drucag(Gral::getVars(1, "txt_eku_e995_drucag"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE996Ddvag(Gral::getVars(1, "txt_eku_e996_ddvag"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE997Ddirage(Gral::getVars(1, "txt_eku_e997_ddirage"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->control();
                if(!$error->getExisteError()){
                    $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId().'&hash='.$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->control();
                if(!$error->getExisteError()){
                    $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){
                if(EkuDeE980GDtipDEGTranspGCamTrans::GEN_CONTROL_ALCANCE){
                    if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE980GDtipDEGTranspGCamTrans&id='.$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE981Inattrans(Gral::getVars(2, "eku_e981_inattrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE982Dnomtrans(Gral::getVars(2, "eku_e982_dnomtrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE983Dructrans(Gral::getVars(2, "eku_e983_dructrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE984Ddvtrans(Gral::getVars(2, "eku_e984_ddvtrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE985Itipidtrans(Gral::getVars(2, "eku_e985_itipidtrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE986Ddtipidtrans(Gral::getVars(2, "eku_e986_ddtipidtrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE987Dnumidtrans(Gral::getVars(2, "eku_e987_dnumidtrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE988Cnactrans(Gral::getVars(2, "eku_e988_cnactrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE989Ddesnactrans(Gral::getVars(2, "eku_e989_ddesnactrans", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE990Dnumidchof(Gral::getVars(2, "eku_e990_dnumidchof", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE991Dnomchof(Gral::getVars(2, "eku_e991_dnomchof", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE992Ddomfisc(Gral::getVars(2, "eku_e992_ddomfisc", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE993Ddirchof(Gral::getVars(2, "eku_e993_ddirchof", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE994Dnombag(Gral::getVars(2, "eku_e994_dnombag", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE995Drucag(Gral::getVars(2, "eku_e995_drucag", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE996Ddvag(Gral::getVars(2, "eku_e996_ddvag", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEkuE997Ddirage(Gral::getVars(2, "eku_e997_ddirage", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE980GDtipDEGTranspGCamTranss') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE980GDtipDEGTranspGCamTrans::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE980GDtipDEGTranspGCamTrans::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e981_inattrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e981_inattrans' ?>" >

                    <?php Lang::_lang('eku_e981_inattrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e981_inattrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e981_inattrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e981_inattrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e981_inattrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e981_inattrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE981Inattrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e981_inattrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e981_inattrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e981_inattrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e981_inattrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e981_inattrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e981_inattrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e981_inattrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e982_dnomtrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e982_dnomtrans' ?>" >

                    <?php Lang::_lang('eku_e982_dnomtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e982_dnomtrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e982_dnomtrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e982_dnomtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e982_dnomtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e982_dnomtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE982Dnomtrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e982_dnomtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e982_dnomtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e982_dnomtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e982_dnomtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e982_dnomtrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e982_dnomtrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e982_dnomtrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e983_dructrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e983_dructrans' ?>" >

                    <?php Lang::_lang('eku_e983_dructrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e983_dructrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e983_dructrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e983_dructrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e983_dructrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e983_dructrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE983Dructrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e983_dructrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e983_dructrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e983_dructrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e983_dructrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e983_dructrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e983_dructrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e983_dructrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e984_ddvtrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e984_ddvtrans' ?>" >

                    <?php Lang::_lang('eku_e984_ddvtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e984_ddvtrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e984_ddvtrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e984_ddvtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e984_ddvtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e984_ddvtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE984Ddvtrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e984_ddvtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e984_ddvtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e984_ddvtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e984_ddvtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e984_ddvtrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e984_ddvtrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e984_ddvtrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e985_itipidtrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e985_itipidtrans' ?>" >

                    <?php Lang::_lang('eku_e985_itipidtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e985_itipidtrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e985_itipidtrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e985_itipidtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e985_itipidtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e985_itipidtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE985Itipidtrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e985_itipidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e985_itipidtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e985_itipidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e985_itipidtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e985_itipidtrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e985_itipidtrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e985_itipidtrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e986_ddtipidtrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e986_ddtipidtrans' ?>" >

                    <?php Lang::_lang('eku_e986_ddtipidtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e986_ddtipidtrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e986_ddtipidtrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e986_ddtipidtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e986_ddtipidtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e986_ddtipidtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE986Ddtipidtrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e986_ddtipidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e986_ddtipidtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e986_ddtipidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e986_ddtipidtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e986_ddtipidtrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e986_ddtipidtrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e986_ddtipidtrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e987_dnumidtrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e987_dnumidtrans' ?>" >

                    <?php Lang::_lang('eku_e987_dnumidtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e987_dnumidtrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e987_dnumidtrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e987_dnumidtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e987_dnumidtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e987_dnumidtrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE987Dnumidtrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e987_dnumidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e987_dnumidtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e987_dnumidtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e987_dnumidtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e987_dnumidtrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e987_dnumidtrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e987_dnumidtrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e988_cnactrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e988_cnactrans' ?>" >

                    <?php Lang::_lang('eku_e988_cnactrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e988_cnactrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e988_cnactrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e988_cnactrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e988_cnactrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e988_cnactrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE988Cnactrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e988_cnactrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e988_cnactrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e988_cnactrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e988_cnactrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e988_cnactrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e988_cnactrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e988_cnactrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e989_ddesnactrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e989_ddesnactrans' ?>" >

                    <?php Lang::_lang('eku_e989_ddesnactrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e989_ddesnactrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e989_ddesnactrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e989_ddesnactrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e989_ddesnactrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e989_ddesnactrans' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE989Ddesnactrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e989_ddesnactrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e989_ddesnactrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e989_ddesnactrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e989_ddesnactrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e989_ddesnactrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e989_ddesnactrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e989_ddesnactrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e990_dnumidchof" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e990_dnumidchof' ?>" >

                    <?php Lang::_lang('eku_e990_dnumidchof', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e990_dnumidchof' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e990_dnumidchof" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e990_dnumidchof')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e990_dnumidchof' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e990_dnumidchof' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE990Dnumidchof()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e990_dnumidchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e990_dnumidchof', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e990_dnumidchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e990_dnumidchof', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e990_dnumidchof')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e990_dnumidchof_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e990_dnumidchof_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e991_dnomchof" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e991_dnomchof' ?>" >

                    <?php Lang::_lang('eku_e991_dnomchof', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e991_dnomchof' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e991_dnomchof" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e991_dnomchof')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e991_dnomchof' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e991_dnomchof' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE991Dnomchof()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e991_dnomchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e991_dnomchof', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e991_dnomchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e991_dnomchof', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e991_dnomchof')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e991_dnomchof_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e991_dnomchof_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e992_ddomfisc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e992_ddomfisc' ?>" >

                    <?php Lang::_lang('eku_e992_ddomfisc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e992_ddomfisc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e992_ddomfisc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e992_ddomfisc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e992_ddomfisc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e992_ddomfisc' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE992Ddomfisc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e992_ddomfisc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e992_ddomfisc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e992_ddomfisc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e992_ddomfisc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e992_ddomfisc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e992_ddomfisc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e992_ddomfisc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e993_ddirchof" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e993_ddirchof' ?>" >

                    <?php Lang::_lang('eku_e993_ddirchof', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e993_ddirchof' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e993_ddirchof" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e993_ddirchof')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e993_ddirchof' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e993_ddirchof' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE993Ddirchof()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e993_ddirchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e993_ddirchof', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e993_ddirchof', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e993_ddirchof', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e993_ddirchof')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e993_ddirchof_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e993_ddirchof_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e994_dnombag" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e994_dnombag' ?>" >

                    <?php Lang::_lang('eku_e994_dnombag', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e994_dnombag' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e994_dnombag" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e994_dnombag')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e994_dnombag' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e994_dnombag' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE994Dnombag()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e994_dnombag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e994_dnombag', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e994_dnombag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e994_dnombag', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e994_dnombag')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e994_dnombag_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e994_dnombag_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e995_drucag" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e995_drucag' ?>" >

                    <?php Lang::_lang('eku_e995_drucag', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e995_drucag' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e995_drucag" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e995_drucag')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e995_drucag' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e995_drucag' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE995Drucag()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e995_drucag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e995_drucag', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e995_drucag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e995_drucag', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e995_drucag')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e995_drucag_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e995_drucag_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e996_ddvag" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e996_ddvag' ?>" >

                    <?php Lang::_lang('eku_e996_ddvag', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e996_ddvag' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e996_ddvag" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e996_ddvag')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e996_ddvag' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e996_ddvag' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE996Ddvag()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e996_ddvag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e996_ddvag', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e996_ddvag', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e996_ddvag', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e996_ddvag')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e996_ddvag_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e996_ddvag_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e997_ddirage" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e997_ddirage' ?>" >

                    <?php Lang::_lang('eku_e997_ddirage', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=eku_e997_ddirage' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e997_ddirage" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e997_ddirage')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e997_ddirage' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e997_ddirage' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE997Ddirage()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e997_ddirage', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e997_ddirage', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e997_ddirage', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e997_ddirage', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e997_ddirage')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e997_ddirage_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_eku_e997_ddirage_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE980GDtipDEGTranspGCamTrans::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE980GDtipDEGTranspGCamTrans::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) != ''){ ?>
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

