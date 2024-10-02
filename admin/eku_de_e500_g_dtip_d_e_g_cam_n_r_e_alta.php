<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e500_g_dtip_d_e_g_cam_n_r_e';
$db_nombre_pagina = 'eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta';


$eku_de_e500_g_dtip_d_e_g_cam_n_r_e = new EkuDeE500GDtipDEGCamNRE();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e500_g_dtip_d_e_g_cam_n_r_e = new EkuDeE500GDtipDEGCamNRE();
    // if(trim($hdn_id) != '') $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setId($hdn_id, false);

    $eku_de_e500_g_dtip_d_e_g_cam_n_r_e = EkuDeE500GDtipDEGCamNRE::getOxId($hdn_id);
    if(!$eku_de_e500_g_dtip_d_e_g_cam_n_r_e){
        $eku_de_e500_g_dtip_d_e_g_cam_n_r_e = new EkuDeE500GDtipDEGCamNRE();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e500_g_dtip_d_e_g_cam_n_r_e){
            if(EkuDeE500GDtipDEGCamNRE::GEN_CONTROL_ALCANCE){
                if($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE500GDtipDEGCamNRE&id='.$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E_ALTA')){ 
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE501Imoteminr(Gral::getVars(1, "txt_eku_e501_imoteminr"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE502Ddesmoteminr(Gral::getVars(1, "txt_eku_e502_ddesmoteminr"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE503Irespeminr(Gral::getVars(1, "txt_eku_e503_irespeminr"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE504Ddesrespeminr(Gral::getVars(1, "txt_eku_e504_ddesrespeminr"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE505Dkmr(Gral::getVars(1, "txt_eku_e505_dkmr"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE506Dfecem(Gral::getVars(1, "txt_eku_e506_dfecem"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->control();
                if(!$error->getExisteError()){
                    $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId().'&hash='.$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->control();
                if(!$error->getExisteError()){
                    $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e500_g_dtip_d_e_g_cam_n_r_e){
                if(EkuDeE500GDtipDEGCamNRE::GEN_CONTROL_ALCANCE){
                    if($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE500GDtipDEGCamNRE&id='.$eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE501Imoteminr(Gral::getVars(2, "eku_e501_imoteminr", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE502Ddesmoteminr(Gral::getVars(2, "eku_e502_ddesmoteminr", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE503Irespeminr(Gral::getVars(2, "eku_e503_irespeminr", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE504Ddesrespeminr(Gral::getVars(2, "eku_e504_ddesrespeminr", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE505Dkmr(Gral::getVars(2, "eku_e505_dkmr", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEkuE506Dfecem(Gral::getVars(2, "eku_e506_dfecem", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e500_g_dtip_d_e_g_cam_n_r_e' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE500GDtipDEGCamNREs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE500GDtipDEGCamNRE::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE500GDtipDEGCamNRE::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e500_g_dtip_d_e_g_cam_n_r_e'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e501_imoteminr" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e501_imoteminr' ?>" >

                    <?php Lang::_lang('eku_e501_imoteminr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=eku_e501_imoteminr' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e501_imoteminr" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e501_imoteminr')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e501_imoteminr' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e501_imoteminr' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE501Imoteminr()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e501_imoteminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e501_imoteminr', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e501_imoteminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e501_imoteminr', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e501_imoteminr')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e501_imoteminr_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e501_imoteminr_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e502_ddesmoteminr" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e502_ddesmoteminr' ?>" >

                    <?php Lang::_lang('eku_e502_ddesmoteminr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=eku_e502_ddesmoteminr' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e502_ddesmoteminr" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e502_ddesmoteminr')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e502_ddesmoteminr' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e502_ddesmoteminr' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE502Ddesmoteminr()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e502_ddesmoteminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e502_ddesmoteminr', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e502_ddesmoteminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e502_ddesmoteminr', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e502_ddesmoteminr')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e502_ddesmoteminr_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e502_ddesmoteminr_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e503_irespeminr" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e503_irespeminr' ?>" >

                    <?php Lang::_lang('eku_e503_irespeminr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=eku_e503_irespeminr' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e503_irespeminr" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e503_irespeminr')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e503_irespeminr' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e503_irespeminr' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE503Irespeminr()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e503_irespeminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e503_irespeminr', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e503_irespeminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e503_irespeminr', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e503_irespeminr')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e503_irespeminr_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e503_irespeminr_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e504_ddesrespeminr" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e504_ddesrespeminr' ?>" >

                    <?php Lang::_lang('eku_e504_ddesrespeminr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=eku_e504_ddesrespeminr' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e504_ddesrespeminr" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e504_ddesrespeminr')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e504_ddesrespeminr' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e504_ddesrespeminr' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE504Ddesrespeminr()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e504_ddesrespeminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e504_ddesrespeminr', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e504_ddesrespeminr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e504_ddesrespeminr', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e504_ddesrespeminr')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e504_ddesrespeminr_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e504_ddesrespeminr_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e505_dkmr" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e505_dkmr' ?>" >

                    <?php Lang::_lang('eku_e505_dkmr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=eku_e505_dkmr' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e505_dkmr" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e505_dkmr')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e505_dkmr' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e505_dkmr' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE505Dkmr()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e505_dkmr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e505_dkmr', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e505_dkmr', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e505_dkmr', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e505_dkmr')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e505_dkmr_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e505_dkmr_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e506_dfecem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e506_dfecem' ?>" >

                    <?php Lang::_lang('eku_e506_dfecem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=eku_e506_dfecem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e506_dfecem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e506_dfecem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e506_dfecem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e506_dfecem' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE506Dfecem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e506_dfecem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e506_dfecem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e506_dfecem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e506_dfecem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e506_dfecem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e506_dfecem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_eku_e506_dfecem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE500GDtipDEGCamNRE::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE500GDtipDEGCamNRE::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId()) != ''){ ?>
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

