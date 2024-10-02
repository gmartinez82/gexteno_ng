<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_d010_g_dat_gral_ope_g_ope_com';
$db_nombre_pagina = 'eku_de_d010_g_dat_gral_ope_g_ope_com_alta';


$eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
    // if(trim($hdn_id) != '') $eku_de_d010_g_dat_gral_ope_g_ope_com->setId($hdn_id, false);

    $eku_de_d010_g_dat_gral_ope_g_ope_com = EkuDeD010GDatGralOpeGOpeCom::getOxId($hdn_id);
    if(!$eku_de_d010_g_dat_gral_ope_g_ope_com){
        $eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_d010_g_dat_gral_ope_g_ope_com){
            if(EkuDeD010GDatGralOpeGOpeCom::GEN_CONTROL_ALCANCE){
                if($eku_de_d010_g_dat_gral_ope_g_ope_com->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeD010GDatGralOpeGOpeCom&id='.$eku_de_d010_g_dat_gral_ope_g_ope_com->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA')){ 
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD011Itiptra(Gral::getVars(1, "txt_eku_d011_itiptra"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD012Ddestiptra(Gral::getVars(1, "txt_eku_d012_ddestiptra"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD013Itimp(Gral::getVars(1, "txt_eku_d013_itimp"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD014Ddestimp(Gral::getVars(1, "txt_eku_d014_ddestimp"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD015Cmoneope(Gral::getVars(1, "txt_eku_d015_cmoneope"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD016Ddesmoneope(Gral::getVars(1, "txt_eku_d016_ddesmoneope"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD017Dcondticam(Gral::getVars(1, "txt_eku_d017_dcondticam"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD018Dticam(Gral::getVars(1, "txt_eku_d018_dticam"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD019Icondant(Gral::getVars(1, "txt_eku_d019_icondant"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD020Ddescondant(Gral::getVars(1, "txt_eku_d020_ddescondant"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_d010_g_dat_gral_ope_g_ope_com->control();
                if(!$error->getExisteError()){
                    $eku_de_d010_g_dat_gral_ope_g_ope_com->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_d010_g_dat_gral_ope_g_ope_com->getId().'&hash='.$eku_de_d010_g_dat_gral_ope_g_ope_com->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_d010_g_dat_gral_ope_g_ope_com->control();
                if(!$error->getExisteError()){
                    $eku_de_d010_g_dat_gral_ope_g_ope_com->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_d010_g_dat_gral_ope_g_ope_com){
                if(EkuDeD010GDatGralOpeGOpeCom::GEN_CONTROL_ALCANCE){
                    if($eku_de_d010_g_dat_gral_ope_g_ope_com->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeD010GDatGralOpeGOpeCom&id='.$eku_de_d010_g_dat_gral_ope_g_ope_com->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD011Itiptra(Gral::getVars(2, "eku_d011_itiptra", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD012Ddestiptra(Gral::getVars(2, "eku_d012_ddestiptra", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD013Itimp(Gral::getVars(2, "eku_d013_itimp", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD014Ddestimp(Gral::getVars(2, "eku_d014_ddestimp", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD015Cmoneope(Gral::getVars(2, "eku_d015_cmoneope", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD016Ddesmoneope(Gral::getVars(2, "eku_d016_ddesmoneope", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD017Dcondticam(Gral::getVars(2, "eku_d017_dcondticam", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD018Dticam(Gral::getVars(2, "eku_d018_dticam", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD019Icondant(Gral::getVars(2, "eku_d019_icondant", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD020Ddescondant(Gral::getVars(2, "eku_d020_ddescondant", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_d010_g_dat_gral_ope_g_ope_com->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_d010_g_dat_gral_ope_g_ope_com' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeD010GDatGralOpeGOpeComs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeD010GDatGralOpeGOpeCom::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeD010GDatGralOpeGOpeCom::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_d010_g_dat_gral_ope_g_ope_com'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d011_itiptra" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d011_itiptra' ?>" >

                    <?php Lang::_lang('eku_d011_itiptra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d011_itiptra' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d011_itiptra" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d011_itiptra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d011_itiptra' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d011_itiptra' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD011Itiptra()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d011_itiptra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d011_itiptra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d011_itiptra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d011_itiptra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d011_itiptra')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d011_itiptra_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d011_itiptra_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d012_ddestiptra" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d012_ddestiptra' ?>" >

                    <?php Lang::_lang('eku_d012_ddestiptra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d012_ddestiptra' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d012_ddestiptra" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d012_ddestiptra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d012_ddestiptra' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d012_ddestiptra' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD012Ddestiptra()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d012_ddestiptra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d012_ddestiptra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d012_ddestiptra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d012_ddestiptra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d012_ddestiptra')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d012_ddestiptra_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d012_ddestiptra_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d013_itimp" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d013_itimp' ?>" >

                    <?php Lang::_lang('eku_d013_itimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d013_itimp' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d013_itimp" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d013_itimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d013_itimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d013_itimp' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD013Itimp()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d013_itimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d013_itimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d013_itimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d013_itimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d013_itimp')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d013_itimp_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d013_itimp_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d014_ddestimp" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d014_ddestimp' ?>" >

                    <?php Lang::_lang('eku_d014_ddestimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d014_ddestimp' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d014_ddestimp" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d014_ddestimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d014_ddestimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d014_ddestimp' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD014Ddestimp()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d014_ddestimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d014_ddestimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d014_ddestimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d014_ddestimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d014_ddestimp')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d014_ddestimp_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d014_ddestimp_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d015_cmoneope" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d015_cmoneope' ?>" >

                    <?php Lang::_lang('eku_d015_cmoneope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d015_cmoneope' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d015_cmoneope" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d015_cmoneope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d015_cmoneope' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d015_cmoneope' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD015Cmoneope()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d015_cmoneope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d015_cmoneope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d015_cmoneope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d015_cmoneope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d015_cmoneope')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d015_cmoneope_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d015_cmoneope_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d016_ddesmoneope" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d016_ddesmoneope' ?>" >

                    <?php Lang::_lang('eku_d016_ddesmoneope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d016_ddesmoneope' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d016_ddesmoneope" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d016_ddesmoneope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d016_ddesmoneope' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d016_ddesmoneope' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD016Ddesmoneope()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d016_ddesmoneope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d016_ddesmoneope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d016_ddesmoneope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d016_ddesmoneope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d016_ddesmoneope')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d016_ddesmoneope_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d016_ddesmoneope_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d017_dcondticam" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d017_dcondticam' ?>" >

                    <?php Lang::_lang('eku_d017_dcondticam', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d017_dcondticam' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d017_dcondticam" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d017_dcondticam')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d017_dcondticam' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d017_dcondticam' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD017Dcondticam()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d017_dcondticam', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d017_dcondticam', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d017_dcondticam', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d017_dcondticam', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d017_dcondticam')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d017_dcondticam_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d017_dcondticam_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d018_dticam" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d018_dticam' ?>" >

                    <?php Lang::_lang('eku_d018_dticam', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d018_dticam' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d018_dticam" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d018_dticam')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d018_dticam' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d018_dticam' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD018Dticam()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d018_dticam', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d018_dticam', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d018_dticam', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d018_dticam', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d018_dticam')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d018_dticam_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d018_dticam_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d019_icondant" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d019_icondant' ?>" >

                    <?php Lang::_lang('eku_d019_icondant', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d019_icondant' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d019_icondant" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d019_icondant')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d019_icondant' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d019_icondant' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD019Icondant()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d019_icondant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d019_icondant', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d019_icondant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d019_icondant', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d019_icondant')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d019_icondant_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d019_icondant_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d020_ddescondant" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d020_ddescondant' ?>" >

                    <?php Lang::_lang('eku_d020_ddescondant', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=eku_d020_ddescondant' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d020_ddescondant" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d020_ddescondant')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d020_ddescondant' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d020_ddescondant' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD020Ddescondant()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d020_ddescondant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d020_ddescondant', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d020_ddescondant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d020_ddescondant', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d020_ddescondant')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d020_ddescondant_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_eku_d020_ddescondant_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d010_g_dat_gral_ope_g_ope_com_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeD010GDatGralOpeGOpeCom::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeD010GDatGralOpeGOpeCom::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_d010_g_dat_gral_ope_g_ope_com->getId()) != ''){ ?>
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

