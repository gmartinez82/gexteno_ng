<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_g050_g_cam_gen_g_cam_carg';
$db_nombre_pagina = 'eku_de_g050_g_cam_gen_g_cam_carg_alta';


$eku_de_g050_g_cam_gen_g_cam_carg = new EkuDeG050GCamGenGCamCarg();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_g050_g_cam_gen_g_cam_carg = new EkuDeG050GCamGenGCamCarg();
    // if(trim($hdn_id) != '') $eku_de_g050_g_cam_gen_g_cam_carg->setId($hdn_id, false);

    $eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($hdn_id);
    if(!$eku_de_g050_g_cam_gen_g_cam_carg){
        $eku_de_g050_g_cam_gen_g_cam_carg = new EkuDeG050GCamGenGCamCarg();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_g050_g_cam_gen_g_cam_carg){
            if(EkuDeG050GCamGenGCamCarg::GEN_CONTROL_ALCANCE){
                if($eku_de_g050_g_cam_gen_g_cam_carg->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeG050GCamGenGCamCarg&id='.$eku_de_g050_g_cam_gen_g_cam_carg->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA')){ 
	$eku_de_g050_g_cam_gen_g_cam_carg->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG051Cunimedtotvol(Gral::getVars(1, "txt_eku_g051_cunimedtotvol"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG052Ddesunimedtotvol(Gral::getVars(1, "txt_eku_g052_ddesunimedtotvol"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG053Dtotvolmerc(Gral::getVars(1, "txt_eku_g053_dtotvolmerc"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG054Cunimedtotpes(Gral::getVars(1, "txt_eku_g054_cunimedtotpes"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG055Ddesunimedtotpes(Gral::getVars(1, "txt_eku_g055_ddesunimedtotpes"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG056Dtotpesmerc(Gral::getVars(1, "txt_eku_g056_dtotpesmerc"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG057Icarcarga(Gral::getVars(1, "txt_eku_g057_icarcarga"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG058Ddescarcarga(Gral::getVars(1, "txt_eku_g058_ddescarcarga"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_g050_g_cam_gen_g_cam_carg->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_g050_g_cam_gen_g_cam_carg->control();
                if(!$error->getExisteError()){
                    $eku_de_g050_g_cam_gen_g_cam_carg->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_g050_g_cam_gen_g_cam_carg->getId().'&hash='.$eku_de_g050_g_cam_gen_g_cam_carg->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_g050_g_cam_gen_g_cam_carg->control();
                if(!$error->getExisteError()){
                    $eku_de_g050_g_cam_gen_g_cam_carg->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_g050_g_cam_gen_g_cam_carg->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_g050_g_cam_gen_g_cam_carg){
                if(EkuDeG050GCamGenGCamCarg::GEN_CONTROL_ALCANCE){
                    if($eku_de_g050_g_cam_gen_g_cam_carg->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeG050GCamGenGCamCarg&id='.$eku_de_g050_g_cam_gen_g_cam_carg->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_g050_g_cam_gen_g_cam_carg->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG051Cunimedtotvol(Gral::getVars(2, "eku_g051_cunimedtotvol", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG052Ddesunimedtotvol(Gral::getVars(2, "eku_g052_ddesunimedtotvol", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG053Dtotvolmerc(Gral::getVars(2, "eku_g053_dtotvolmerc", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG054Cunimedtotpes(Gral::getVars(2, "eku_g054_cunimedtotpes", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG055Ddesunimedtotpes(Gral::getVars(2, "eku_g055_ddesunimedtotpes", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG056Dtotpesmerc(Gral::getVars(2, "eku_g056_dtotpesmerc", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG057Icarcarga(Gral::getVars(2, "eku_g057_icarcarga", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEkuG058Ddescarcarga(Gral::getVars(2, "eku_g058_ddescarcarga", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_g050_g_cam_gen_g_cam_carg->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_g050_g_cam_gen_g_cam_carg->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_g050_g_cam_gen_g_cam_carg->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_g050_g_cam_gen_g_cam_carg->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_g050_g_cam_gen_g_cam_carg->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_g050_g_cam_gen_g_cam_carg->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_g050_g_cam_gen_g_cam_carg' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeG050GCamGenGCamCargs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeG050GCamGenGCamCarg::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeG050GCamGenGCamCarg::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_g050_g_cam_gen_g_cam_carg'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_g050_g_cam_gen_g_cam_carg->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_g050_g_cam_gen_g_cam_carg->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g051_cunimedtotvol" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g051_cunimedtotvol' ?>" >

                    <?php Lang::_lang('eku_g051_cunimedtotvol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g051_cunimedtotvol' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g051_cunimedtotvol" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g051_cunimedtotvol')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g051_cunimedtotvol' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g051_cunimedtotvol' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG051Cunimedtotvol()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g051_cunimedtotvol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g051_cunimedtotvol', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g051_cunimedtotvol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g051_cunimedtotvol', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g051_cunimedtotvol')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g051_cunimedtotvol_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g051_cunimedtotvol_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g052_ddesunimedtotvol" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g052_ddesunimedtotvol' ?>" >

                    <?php Lang::_lang('eku_g052_ddesunimedtotvol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g052_ddesunimedtotvol' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g052_ddesunimedtotvol" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g052_ddesunimedtotvol')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g052_ddesunimedtotvol' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g052_ddesunimedtotvol' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG052Ddesunimedtotvol()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g052_ddesunimedtotvol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g052_ddesunimedtotvol', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g052_ddesunimedtotvol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g052_ddesunimedtotvol', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g052_ddesunimedtotvol')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g052_ddesunimedtotvol_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g052_ddesunimedtotvol_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g053_dtotvolmerc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g053_dtotvolmerc' ?>" >

                    <?php Lang::_lang('eku_g053_dtotvolmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g053_dtotvolmerc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g053_dtotvolmerc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g053_dtotvolmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g053_dtotvolmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g053_dtotvolmerc' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG053Dtotvolmerc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g053_dtotvolmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g053_dtotvolmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g053_dtotvolmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g053_dtotvolmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g053_dtotvolmerc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g053_dtotvolmerc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g053_dtotvolmerc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g054_cunimedtotpes" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g054_cunimedtotpes' ?>" >

                    <?php Lang::_lang('eku_g054_cunimedtotpes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g054_cunimedtotpes' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g054_cunimedtotpes" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g054_cunimedtotpes')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g054_cunimedtotpes' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g054_cunimedtotpes' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG054Cunimedtotpes()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g054_cunimedtotpes', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g054_cunimedtotpes', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g054_cunimedtotpes', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g054_cunimedtotpes', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g054_cunimedtotpes')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g054_cunimedtotpes_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g054_cunimedtotpes_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g055_ddesunimedtotpes" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g055_ddesunimedtotpes' ?>" >

                    <?php Lang::_lang('eku_g055_ddesunimedtotpes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g055_ddesunimedtotpes' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g055_ddesunimedtotpes" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g055_ddesunimedtotpes')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g055_ddesunimedtotpes' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g055_ddesunimedtotpes' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG055Ddesunimedtotpes()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g055_ddesunimedtotpes', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g055_ddesunimedtotpes', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g055_ddesunimedtotpes', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g055_ddesunimedtotpes', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g055_ddesunimedtotpes')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g055_ddesunimedtotpes_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g055_ddesunimedtotpes_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g056_dtotpesmerc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g056_dtotpesmerc' ?>" >

                    <?php Lang::_lang('eku_g056_dtotpesmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g056_dtotpesmerc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g056_dtotpesmerc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g056_dtotpesmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g056_dtotpesmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g056_dtotpesmerc' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG056Dtotpesmerc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g056_dtotpesmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g056_dtotpesmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g056_dtotpesmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g056_dtotpesmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g056_dtotpesmerc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g056_dtotpesmerc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g056_dtotpesmerc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g057_icarcarga" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g057_icarcarga' ?>" >

                    <?php Lang::_lang('eku_g057_icarcarga', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g057_icarcarga' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g057_icarcarga" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g057_icarcarga')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g057_icarcarga' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g057_icarcarga' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG057Icarcarga()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g057_icarcarga', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g057_icarcarga', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g057_icarcarga', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g057_icarcarga', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g057_icarcarga')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g057_icarcarga_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g057_icarcarga_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_g058_ddescarcarga" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g058_ddescarcarga' ?>" >

                    <?php Lang::_lang('eku_g058_ddescarcarga', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=eku_g058_ddescarcarga' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_g058_ddescarcarga" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_g058_ddescarcarga')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_g058_ddescarcarga' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_g058_ddescarcarga' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG058Ddescarcarga()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_g058_ddescarcarga', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_g058_ddescarcarga', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g058_ddescarcarga', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_g058_ddescarcarga', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g058_ddescarcarga')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g058_ddescarcarga_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_eku_g058_ddescarcarga_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_g050_g_cam_gen_g_cam_carg_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeG050GCamGenGCamCarg::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeG050GCamGenGCamCarg::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_g050_g_cam_gen_g_cam_carg->getId()) != ''){ ?>
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

