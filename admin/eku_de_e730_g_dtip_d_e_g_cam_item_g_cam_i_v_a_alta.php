<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a';
$db_nombre_pagina = 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta';


$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
    // if(trim($hdn_id) != '') $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setId($hdn_id, false);

    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = EkuDeE730GDtipDEGCamItemGCamIVA::getOxId($hdn_id);
    if(!$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = new EkuDeE730GDtipDEGCamItemGCamIVA();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){
            if(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_CONTROL_ALCANCE){
                if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE730GDtipDEGCamItemGCamIVA&id='.$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA')){ 
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE731Iafeciva(Gral::getVars(1, "txt_eku_e731_iafeciva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE732Ddesafeciva(Gral::getVars(1, "txt_eku_e732_ddesafeciva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE733Dpropiva(Gral::getVars(1, "txt_eku_e733_dpropiva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE734Dtasaiva(Gral::getVars(1, "txt_eku_e734_dtasaiva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE735Dbasgraviva(Gral::getVars(1, "txt_eku_e735_dbasgraviva"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE736Dliqivaitem(Gral::getVars(1, "txt_eku_e736_dliqivaitem"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->control();
                if(!$error->getExisteError()){
                    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId().'&hash='.$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->control();
                if(!$error->getExisteError()){
                    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){
                if(EkuDeE730GDtipDEGCamItemGCamIVA::GEN_CONTROL_ALCANCE){
                    if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE730GDtipDEGCamItemGCamIVA&id='.$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE731Iafeciva(Gral::getVars(2, "eku_e731_iafeciva", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE732Ddesafeciva(Gral::getVars(2, "eku_e732_ddesafeciva", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE733Dpropiva(Gral::getVars(2, "eku_e733_dpropiva", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE734Dtasaiva(Gral::getVars(2, "eku_e734_dtasaiva", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE735Dbasgraviva(Gral::getVars(2, "eku_e735_dbasgraviva", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEkuE736Dliqivaitem(Gral::getVars(2, "eku_e736_dliqivaitem", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE730GDtipDEGCamItemGCamIVAs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE730GDtipDEGCamItemGCamIVA::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE730GDtipDEGCamItemGCamIVA::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >

                    <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_de_e700_g_dtip_d_e_g_cam_item_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(true), '...'), $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItemId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e731_iafeciva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e731_iafeciva' ?>" >

                    <?php Lang::_lang('eku_e731_iafeciva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_e731_iafeciva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e731_iafeciva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e731_iafeciva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e731_iafeciva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e731_iafeciva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE731Iafeciva()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e731_iafeciva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e731_iafeciva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e731_iafeciva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e731_iafeciva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e731_iafeciva')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e731_iafeciva_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e731_iafeciva_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e732_ddesafeciva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e732_ddesafeciva' ?>" >

                    <?php Lang::_lang('eku_e732_ddesafeciva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_e732_ddesafeciva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e732_ddesafeciva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e732_ddesafeciva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e732_ddesafeciva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e732_ddesafeciva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE732Ddesafeciva()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e732_ddesafeciva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e732_ddesafeciva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e732_ddesafeciva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e732_ddesafeciva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e732_ddesafeciva')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e732_ddesafeciva_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e732_ddesafeciva_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e733_dpropiva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e733_dpropiva' ?>" >

                    <?php Lang::_lang('eku_e733_dpropiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_e733_dpropiva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e733_dpropiva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e733_dpropiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e733_dpropiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e733_dpropiva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE733Dpropiva()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e733_dpropiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e733_dpropiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e733_dpropiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e733_dpropiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e733_dpropiva')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e733_dpropiva_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e733_dpropiva_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e734_dtasaiva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e734_dtasaiva' ?>" >

                    <?php Lang::_lang('eku_e734_dtasaiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_e734_dtasaiva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e734_dtasaiva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e734_dtasaiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e734_dtasaiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e734_dtasaiva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e734_dtasaiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e734_dtasaiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e734_dtasaiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e734_dtasaiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e734_dtasaiva')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e734_dtasaiva_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e734_dtasaiva_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e735_dbasgraviva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e735_dbasgraviva' ?>" >

                    <?php Lang::_lang('eku_e735_dbasgraviva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_e735_dbasgraviva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e735_dbasgraviva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e735_dbasgraviva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e735_dbasgraviva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e735_dbasgraviva' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE735Dbasgraviva()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e735_dbasgraviva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e735_dbasgraviva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e735_dbasgraviva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e735_dbasgraviva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e735_dbasgraviva')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e735_dbasgraviva_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e735_dbasgraviva_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e736_dliqivaitem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e736_dliqivaitem' ?>" >

                    <?php Lang::_lang('eku_e736_dliqivaitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=eku_e736_dliqivaitem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e736_dliqivaitem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e736_dliqivaitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e736_dliqivaitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e736_dliqivaitem' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE736Dliqivaitem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e736_dliqivaitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e736_dliqivaitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e736_dliqivaitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e736_dliqivaitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e736_dliqivaitem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e736_dliqivaitem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_eku_e736_dliqivaitem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE730GDtipDEGCamItemGCamIVA::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE730GDtipDEGCamItemGCamIVA::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) != ''){ ?>
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

