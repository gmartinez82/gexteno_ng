<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e300_g_dtip_d_e_g_cam_a_e';
$db_nombre_pagina = 'eku_de_e300_g_dtip_d_e_g_cam_a_e_alta';


$eku_de_e300_g_dtip_d_e_g_cam_a_e = new EkuDeE300GDtipDEGCamAE();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e300_g_dtip_d_e_g_cam_a_e = new EkuDeE300GDtipDEGCamAE();
    // if(trim($hdn_id) != '') $eku_de_e300_g_dtip_d_e_g_cam_a_e->setId($hdn_id, false);

    $eku_de_e300_g_dtip_d_e_g_cam_a_e = EkuDeE300GDtipDEGCamAE::getOxId($hdn_id);
    if(!$eku_de_e300_g_dtip_d_e_g_cam_a_e){
        $eku_de_e300_g_dtip_d_e_g_cam_a_e = new EkuDeE300GDtipDEGCamAE();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e300_g_dtip_d_e_g_cam_a_e){
            if(EkuDeE300GDtipDEGCamAE::GEN_CONTROL_ALCANCE){
                if($eku_de_e300_g_dtip_d_e_g_cam_a_e->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE300GDtipDEGCamAE&id='.$eku_de_e300_g_dtip_d_e_g_cam_a_e->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA')){ 
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE301Inatven(Gral::getVars(1, "txt_eku_e301_inatven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE302Ddesnatven(Gral::getVars(1, "txt_eku_e302_ddesnatven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE304Itipidven(Gral::getVars(1, "txt_eku_e304_itipidven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE305Ddtipidven(Gral::getVars(1, "txt_eku_e305_ddtipidven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE306Dnumidven(Gral::getVars(1, "txt_eku_e306_dnumidven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE307Dnomven(Gral::getVars(1, "txt_eku_e307_dnomven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE308Ddirven(Gral::getVars(1, "txt_eku_e308_ddirven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE309Dnumcasven(Gral::getVars(1, "txt_eku_e309_dnumcasven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE310Cdepven(Gral::getVars(1, "txt_eku_e310_cdepven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE311Ddesdepven(Gral::getVars(1, "txt_eku_e311_ddesdepven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE312Cdisven(Gral::getVars(1, "txt_eku_e312_cdisven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE313Ddesdisven(Gral::getVars(1, "txt_eku_e313_ddesdisven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE314Cciuven(Gral::getVars(1, "txt_eku_e314_cciuven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE315Ddesciuven(Gral::getVars(1, "txt_eku_e315_ddesciuven"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE316Ddirprov(Gral::getVars(1, "txt_eku_e316_ddirprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE317Cdepprov(Gral::getVars(1, "txt_eku_e317_cdepprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE318Ddesdepprov(Gral::getVars(1, "txt_eku_e318_ddesdepprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE319Cdisprov(Gral::getVars(1, "txt_eku_e319_cdisprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE320Ddesdisprov(Gral::getVars(1, "txt_eku_e320_ddesdisprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE321Cciuprov(Gral::getVars(1, "txt_eku_e321_cciuprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE322Ddesciuprov(Gral::getVars(1, "txt_eku_e322_ddesciuprov"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e300_g_dtip_d_e_g_cam_a_e->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e300_g_dtip_d_e_g_cam_a_e->control();
                if(!$error->getExisteError()){
                    $eku_de_e300_g_dtip_d_e_g_cam_a_e->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e300_g_dtip_d_e_g_cam_a_e->getId().'&hash='.$eku_de_e300_g_dtip_d_e_g_cam_a_e->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e300_g_dtip_d_e_g_cam_a_e->control();
                if(!$error->getExisteError()){
                    $eku_de_e300_g_dtip_d_e_g_cam_a_e->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e300_g_dtip_d_e_g_cam_a_e){
                if(EkuDeE300GDtipDEGCamAE::GEN_CONTROL_ALCANCE){
                    if($eku_de_e300_g_dtip_d_e_g_cam_a_e->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE300GDtipDEGCamAE&id='.$eku_de_e300_g_dtip_d_e_g_cam_a_e->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE301Inatven(Gral::getVars(2, "eku_e301_inatven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE302Ddesnatven(Gral::getVars(2, "eku_e302_ddesnatven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE304Itipidven(Gral::getVars(2, "eku_e304_itipidven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE305Ddtipidven(Gral::getVars(2, "eku_e305_ddtipidven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE306Dnumidven(Gral::getVars(2, "eku_e306_dnumidven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE307Dnomven(Gral::getVars(2, "eku_e307_dnomven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE308Ddirven(Gral::getVars(2, "eku_e308_ddirven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE309Dnumcasven(Gral::getVars(2, "eku_e309_dnumcasven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE310Cdepven(Gral::getVars(2, "eku_e310_cdepven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE311Ddesdepven(Gral::getVars(2, "eku_e311_ddesdepven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE312Cdisven(Gral::getVars(2, "eku_e312_cdisven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE313Ddesdisven(Gral::getVars(2, "eku_e313_ddesdisven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE314Cciuven(Gral::getVars(2, "eku_e314_cciuven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE315Ddesciuven(Gral::getVars(2, "eku_e315_ddesciuven", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE316Ddirprov(Gral::getVars(2, "eku_e316_ddirprov", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE317Cdepprov(Gral::getVars(2, "eku_e317_cdepprov", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE318Ddesdepprov(Gral::getVars(2, "eku_e318_ddesdepprov", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE319Cdisprov(Gral::getVars(2, "eku_e319_cdisprov", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE320Ddesdisprov(Gral::getVars(2, "eku_e320_ddesdisprov", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE321Cciuprov(Gral::getVars(2, "eku_e321_cciuprov", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEkuE322Ddesciuprov(Gral::getVars(2, "eku_e322_ddesciuprov", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e300_g_dtip_d_e_g_cam_a_e->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e300_g_dtip_d_e_g_cam_a_e' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE300GDtipDEGCamAEs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE300GDtipDEGCamAE::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE300GDtipDEGCamAE::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e300_g_dtip_d_e_g_cam_a_e'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e301_inatven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e301_inatven' ?>" >

                    <?php Lang::_lang('eku_e301_inatven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e301_inatven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e301_inatven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e301_inatven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e301_inatven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e301_inatven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE301Inatven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e301_inatven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e301_inatven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e301_inatven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e301_inatven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e301_inatven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e301_inatven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e301_inatven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e302_ddesnatven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e302_ddesnatven' ?>" >

                    <?php Lang::_lang('eku_e302_ddesnatven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e302_ddesnatven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e302_ddesnatven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e302_ddesnatven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e302_ddesnatven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e302_ddesnatven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE302Ddesnatven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e302_ddesnatven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e302_ddesnatven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e302_ddesnatven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e302_ddesnatven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e302_ddesnatven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e302_ddesnatven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e302_ddesnatven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e304_itipidven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e304_itipidven' ?>" >

                    <?php Lang::_lang('eku_e304_itipidven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e304_itipidven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e304_itipidven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e304_itipidven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e304_itipidven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e304_itipidven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE304Itipidven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e304_itipidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e304_itipidven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e304_itipidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e304_itipidven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e304_itipidven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e304_itipidven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e304_itipidven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e305_ddtipidven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e305_ddtipidven' ?>" >

                    <?php Lang::_lang('eku_e305_ddtipidven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e305_ddtipidven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e305_ddtipidven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e305_ddtipidven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e305_ddtipidven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e305_ddtipidven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE305Ddtipidven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e305_ddtipidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e305_ddtipidven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e305_ddtipidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e305_ddtipidven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e305_ddtipidven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e305_ddtipidven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e305_ddtipidven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e306_dnumidven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e306_dnumidven' ?>" >

                    <?php Lang::_lang('eku_e306_dnumidven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e306_dnumidven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e306_dnumidven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e306_dnumidven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e306_dnumidven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e306_dnumidven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE306Dnumidven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e306_dnumidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e306_dnumidven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e306_dnumidven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e306_dnumidven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e306_dnumidven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e306_dnumidven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e306_dnumidven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e307_dnomven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e307_dnomven' ?>" >

                    <?php Lang::_lang('eku_e307_dnomven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e307_dnomven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e307_dnomven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e307_dnomven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e307_dnomven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e307_dnomven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE307Dnomven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e307_dnomven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e307_dnomven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e307_dnomven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e307_dnomven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e307_dnomven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e307_dnomven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e307_dnomven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e308_ddirven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e308_ddirven' ?>" >

                    <?php Lang::_lang('eku_e308_ddirven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e308_ddirven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e308_ddirven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e308_ddirven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e308_ddirven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e308_ddirven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE308Ddirven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e308_ddirven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e308_ddirven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e308_ddirven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e308_ddirven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e308_ddirven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e308_ddirven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e308_ddirven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e309_dnumcasven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e309_dnumcasven' ?>" >

                    <?php Lang::_lang('eku_e309_dnumcasven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e309_dnumcasven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e309_dnumcasven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e309_dnumcasven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e309_dnumcasven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e309_dnumcasven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE309Dnumcasven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e309_dnumcasven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e309_dnumcasven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e309_dnumcasven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e309_dnumcasven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e309_dnumcasven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e309_dnumcasven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e309_dnumcasven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e310_cdepven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e310_cdepven' ?>" >

                    <?php Lang::_lang('eku_e310_cdepven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e310_cdepven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e310_cdepven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e310_cdepven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e310_cdepven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e310_cdepven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE310Cdepven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e310_cdepven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e310_cdepven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e310_cdepven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e310_cdepven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e310_cdepven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e310_cdepven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e310_cdepven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e311_ddesdepven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e311_ddesdepven' ?>" >

                    <?php Lang::_lang('eku_e311_ddesdepven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e311_ddesdepven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e311_ddesdepven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e311_ddesdepven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e311_ddesdepven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e311_ddesdepven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE311Ddesdepven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e311_ddesdepven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e311_ddesdepven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e311_ddesdepven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e311_ddesdepven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e311_ddesdepven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e311_ddesdepven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e311_ddesdepven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e312_cdisven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e312_cdisven' ?>" >

                    <?php Lang::_lang('eku_e312_cdisven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e312_cdisven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e312_cdisven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e312_cdisven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e312_cdisven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e312_cdisven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE312Cdisven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e312_cdisven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e312_cdisven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e312_cdisven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e312_cdisven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e312_cdisven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e312_cdisven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e312_cdisven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e313_ddesdisven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e313_ddesdisven' ?>" >

                    <?php Lang::_lang('eku_e313_ddesdisven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e313_ddesdisven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e313_ddesdisven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e313_ddesdisven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e313_ddesdisven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e313_ddesdisven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE313Ddesdisven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e313_ddesdisven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e313_ddesdisven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e313_ddesdisven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e313_ddesdisven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e313_ddesdisven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e313_ddesdisven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e313_ddesdisven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e314_cciuven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e314_cciuven' ?>" >

                    <?php Lang::_lang('eku_e314_cciuven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e314_cciuven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e314_cciuven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e314_cciuven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e314_cciuven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e314_cciuven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE314Cciuven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e314_cciuven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e314_cciuven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e314_cciuven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e314_cciuven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e314_cciuven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e314_cciuven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e314_cciuven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e315_ddesciuven" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e315_ddesciuven' ?>" >

                    <?php Lang::_lang('eku_e315_ddesciuven', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e315_ddesciuven' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e315_ddesciuven" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e315_ddesciuven')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e315_ddesciuven' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e315_ddesciuven' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE315Ddesciuven()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e315_ddesciuven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e315_ddesciuven', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e315_ddesciuven', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e315_ddesciuven', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e315_ddesciuven')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e315_ddesciuven_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e315_ddesciuven_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e316_ddirprov" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e316_ddirprov' ?>" >

                    <?php Lang::_lang('eku_e316_ddirprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e316_ddirprov' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e316_ddirprov" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e316_ddirprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e316_ddirprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e316_ddirprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE316Ddirprov()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e316_ddirprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e316_ddirprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e316_ddirprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e316_ddirprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e316_ddirprov')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e316_ddirprov_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e316_ddirprov_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e317_cdepprov" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e317_cdepprov' ?>" >

                    <?php Lang::_lang('eku_e317_cdepprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e317_cdepprov' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e317_cdepprov" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e317_cdepprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e317_cdepprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e317_cdepprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE317Cdepprov()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e317_cdepprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e317_cdepprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e317_cdepprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e317_cdepprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e317_cdepprov')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e317_cdepprov_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e317_cdepprov_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e318_ddesdepprov" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e318_ddesdepprov' ?>" >

                    <?php Lang::_lang('eku_e318_ddesdepprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e318_ddesdepprov' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e318_ddesdepprov" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e318_ddesdepprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e318_ddesdepprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e318_ddesdepprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE318Ddesdepprov()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e318_ddesdepprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e318_ddesdepprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e318_ddesdepprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e318_ddesdepprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e318_ddesdepprov')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e318_ddesdepprov_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e318_ddesdepprov_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e319_cdisprov" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e319_cdisprov' ?>" >

                    <?php Lang::_lang('eku_e319_cdisprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e319_cdisprov' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e319_cdisprov" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e319_cdisprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e319_cdisprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e319_cdisprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE319Cdisprov()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e319_cdisprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e319_cdisprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e319_cdisprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e319_cdisprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e319_cdisprov')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e319_cdisprov_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e319_cdisprov_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e320_ddesdisprov" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e320_ddesdisprov' ?>" >

                    <?php Lang::_lang('eku_e320_ddesdisprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e320_ddesdisprov' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e320_ddesdisprov" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e320_ddesdisprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e320_ddesdisprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e320_ddesdisprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE320Ddesdisprov()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e320_ddesdisprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e320_ddesdisprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e320_ddesdisprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e320_ddesdisprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e320_ddesdisprov')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e320_ddesdisprov_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e320_ddesdisprov_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e321_cciuprov" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e321_cciuprov' ?>" >

                    <?php Lang::_lang('eku_e321_cciuprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e321_cciuprov' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e321_cciuprov" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e321_cciuprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e321_cciuprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e321_cciuprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE321Cciuprov()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e321_cciuprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e321_cciuprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e321_cciuprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e321_cciuprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e321_cciuprov')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e321_cciuprov_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e321_cciuprov_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e322_ddesciuprov" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e322_ddesciuprov' ?>" >

                    <?php Lang::_lang('eku_e322_ddesciuprov', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=eku_e322_ddesciuprov' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e322_ddesciuprov" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e322_ddesciuprov')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e322_ddesciuprov' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e322_ddesciuprov' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE322Ddesciuprov()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e322_ddesciuprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e322_ddesciuprov', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e322_ddesciuprov', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e322_ddesciuprov', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e322_ddesciuprov')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e322_ddesciuprov_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_eku_e322_ddesciuprov_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e300_g_dtip_d_e_g_cam_a_e_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e300_g_dtip_d_e_g_cam_a_e->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE300GDtipDEGCamAE::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE300GDtipDEGCamAE::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) != ''){ ?>
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

