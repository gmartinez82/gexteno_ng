<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras';
$db_nombre_pagina = 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta';


$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = new EkuDeE960GDtipDEGTranspGVehTras();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = new EkuDeE960GDtipDEGTranspGVehTras();
    // if(trim($hdn_id) != '') $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setId($hdn_id, false);

    $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = EkuDeE960GDtipDEGTranspGVehTras::getOxId($hdn_id);
    if(!$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras){
        $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = new EkuDeE960GDtipDEGTranspGVehTras();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras){
            if(EkuDeE960GDtipDEGTranspGVehTras::GEN_CONTROL_ALCANCE){
                if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE960GDtipDEGTranspGVehTras&id='.$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA')){ 
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE961Dtivehtras(Gral::getVars(1, "txt_eku_e961_dtivehtras"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE962Dmarveh(Gral::getVars(1, "txt_eku_e962_dmarveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE967Dtipidenveh(Gral::getVars(1, "txt_eku_e967_dtipidenveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE963Dnroidveh(Gral::getVars(1, "txt_eku_e963_dnroidveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE964Dadicveh(Gral::getVars(1, "txt_eku_e964_dadicveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE965Dnromatveh(Gral::getVars(1, "txt_eku_e965_dnromatveh"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE966Dnrovuelo(Gral::getVars(1, "txt_eku_e966_dnrovuelo"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->control();
                if(!$error->getExisteError()){
                    $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId().'&hash='.$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->control();
                if(!$error->getExisteError()){
                    $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras){
                if(EkuDeE960GDtipDEGTranspGVehTras::GEN_CONTROL_ALCANCE){
                    if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE960GDtipDEGTranspGVehTras&id='.$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE961Dtivehtras(Gral::getVars(2, "eku_e961_dtivehtras", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE962Dmarveh(Gral::getVars(2, "eku_e962_dmarveh", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE967Dtipidenveh(Gral::getVars(2, "eku_e967_dtipidenveh", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE963Dnroidveh(Gral::getVars(2, "eku_e963_dnroidveh", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE964Dadicveh(Gral::getVars(2, "eku_e964_dadicveh", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE965Dnromatveh(Gral::getVars(2, "eku_e965_dnromatveh", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEkuE966Dnrovuelo(Gral::getVars(2, "eku_e966_dnrovuelo", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE960GDtipDEGTranspGVehTrass') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE960GDtipDEGTranspGVehTras::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE960GDtipDEGTranspGVehTras::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e961_dtivehtras" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e961_dtivehtras' ?>" >

                    <?php Lang::_lang('eku_e961_dtivehtras', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_e961_dtivehtras' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e961_dtivehtras" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e961_dtivehtras')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e961_dtivehtras' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e961_dtivehtras' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE961Dtivehtras()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e961_dtivehtras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e961_dtivehtras', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e961_dtivehtras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e961_dtivehtras', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e961_dtivehtras')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e961_dtivehtras_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e961_dtivehtras_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e962_dmarveh" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e962_dmarveh' ?>" >

                    <?php Lang::_lang('eku_e962_dmarveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_e962_dmarveh' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e962_dmarveh" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e962_dmarveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e962_dmarveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e962_dmarveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE962Dmarveh()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e962_dmarveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e962_dmarveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e962_dmarveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e962_dmarveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e962_dmarveh')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e962_dmarveh_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e962_dmarveh_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e967_dtipidenveh" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e967_dtipidenveh' ?>" >

                    <?php Lang::_lang('eku_e967_dtipidenveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_e967_dtipidenveh' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e967_dtipidenveh" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e967_dtipidenveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e967_dtipidenveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e967_dtipidenveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE967Dtipidenveh()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e967_dtipidenveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e967_dtipidenveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e967_dtipidenveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e967_dtipidenveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e967_dtipidenveh')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e967_dtipidenveh_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e967_dtipidenveh_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e963_dnroidveh" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e963_dnroidveh' ?>" >

                    <?php Lang::_lang('eku_e963_dnroidveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_e963_dnroidveh' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e963_dnroidveh" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e963_dnroidveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e963_dnroidveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e963_dnroidveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE963Dnroidveh()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e963_dnroidveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e963_dnroidveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e963_dnroidveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e963_dnroidveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e963_dnroidveh')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e963_dnroidveh_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e963_dnroidveh_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e964_dadicveh" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e964_dadicveh' ?>" >

                    <?php Lang::_lang('eku_e964_dadicveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_e964_dadicveh' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e964_dadicveh" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e964_dadicveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e964_dadicveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e964_dadicveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE964Dadicveh()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e964_dadicveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e964_dadicveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e964_dadicveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e964_dadicveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e964_dadicveh')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e964_dadicveh_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e964_dadicveh_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e965_dnromatveh" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e965_dnromatveh' ?>" >

                    <?php Lang::_lang('eku_e965_dnromatveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_e965_dnromatveh' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e965_dnromatveh" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e965_dnromatveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e965_dnromatveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e965_dnromatveh' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE965Dnromatveh()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e965_dnromatveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e965_dnromatveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e965_dnromatveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e965_dnromatveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e965_dnromatveh')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e965_dnromatveh_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e965_dnromatveh_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e966_dnrovuelo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e966_dnrovuelo' ?>" >

                    <?php Lang::_lang('eku_e966_dnrovuelo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=eku_e966_dnrovuelo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e966_dnrovuelo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e966_dnrovuelo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e966_dnrovuelo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e966_dnrovuelo' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE966Dnrovuelo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e966_dnrovuelo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e966_dnrovuelo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e966_dnrovuelo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e966_dnrovuelo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e966_dnrovuelo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e966_dnrovuelo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_eku_e966_dnrovuelo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE960GDtipDEGTranspGVehTras::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE960GDtipDEGTranspGVehTras::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) != ''){ ?>
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

