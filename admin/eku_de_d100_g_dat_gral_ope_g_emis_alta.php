<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_d100_g_dat_gral_ope_g_emis';
$db_nombre_pagina = 'eku_de_d100_g_dat_gral_ope_g_emis_alta';


$eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
    // if(trim($hdn_id) != '') $eku_de_d100_g_dat_gral_ope_g_emis->setId($hdn_id, false);

    $eku_de_d100_g_dat_gral_ope_g_emis = EkuDeD100GDatGralOpeGEmis::getOxId($hdn_id);
    if(!$eku_de_d100_g_dat_gral_ope_g_emis){
        $eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_d100_g_dat_gral_ope_g_emis){
            if(EkuDeD100GDatGralOpeGEmis::GEN_CONTROL_ALCANCE){
                if($eku_de_d100_g_dat_gral_ope_g_emis->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeD100GDatGralOpeGEmis&id='.$eku_de_d100_g_dat_gral_ope_g_emis->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA')){ 
	$eku_de_d100_g_dat_gral_ope_g_emis->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD101Drucem(Gral::getVars(1, "txt_eku_d101_drucem"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD102Ddvemi(Gral::getVars(1, "txt_eku_d102_ddvemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD103Itipcont(Gral::getVars(1, "txt_eku_d103_itipcont"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD104Ctipreg(Gral::getVars(1, "txt_eku_d104_ctipreg"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD105Dnomemi(Gral::getVars(1, "txt_eku_d105_dnomemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD106Dnomfanemi(Gral::getVars(1, "txt_eku_d106_dnomfanemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD107Ddiremi(Gral::getVars(1, "txt_eku_d107_ddiremi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD108Dnumcas(Gral::getVars(1, "txt_eku_d108_dnumcas"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD109Dcompdir1(Gral::getVars(1, "txt_eku_d109_dcompdir1"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD110Dcompdir2(Gral::getVars(1, "txt_eku_d110_dcompdir2"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD111Cdepemi(Gral::getVars(1, "txt_eku_d111_cdepemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD112Ddesdepemi(Gral::getVars(1, "txt_eku_d112_ddesdepemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD113Cdisemi(Gral::getVars(1, "txt_eku_d113_cdisemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD114Ddesdisemi(Gral::getVars(1, "txt_eku_d114_ddesdisemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD115Cciuemi(Gral::getVars(1, "txt_eku_d115_cciuemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD116Ddesciuemi(Gral::getVars(1, "txt_eku_d116_ddesciuemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD117Dtelemi(Gral::getVars(1, "txt_eku_d117_dtelemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD118Demaile(Gral::getVars(1, "txt_eku_d118_demaile"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD119Ddensuc(Gral::getVars(1, "txt_eku_d119_ddensuc"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_d100_g_dat_gral_ope_g_emis->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_d100_g_dat_gral_ope_g_emis->control();
                if(!$error->getExisteError()){
                    $eku_de_d100_g_dat_gral_ope_g_emis->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_d100_g_dat_gral_ope_g_emis->getId().'&hash='.$eku_de_d100_g_dat_gral_ope_g_emis->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_d100_g_dat_gral_ope_g_emis->control();
                if(!$error->getExisteError()){
                    $eku_de_d100_g_dat_gral_ope_g_emis->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_d100_g_dat_gral_ope_g_emis->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_d100_g_dat_gral_ope_g_emis){
                if(EkuDeD100GDatGralOpeGEmis::GEN_CONTROL_ALCANCE){
                    if($eku_de_d100_g_dat_gral_ope_g_emis->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeD100GDatGralOpeGEmis&id='.$eku_de_d100_g_dat_gral_ope_g_emis->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_d100_g_dat_gral_ope_g_emis->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD101Drucem(Gral::getVars(2, "eku_d101_drucem", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD102Ddvemi(Gral::getVars(2, "eku_d102_ddvemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD103Itipcont(Gral::getVars(2, "eku_d103_itipcont", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD104Ctipreg(Gral::getVars(2, "eku_d104_ctipreg", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD105Dnomemi(Gral::getVars(2, "eku_d105_dnomemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD106Dnomfanemi(Gral::getVars(2, "eku_d106_dnomfanemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD107Ddiremi(Gral::getVars(2, "eku_d107_ddiremi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD108Dnumcas(Gral::getVars(2, "eku_d108_dnumcas", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD109Dcompdir1(Gral::getVars(2, "eku_d109_dcompdir1", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD110Dcompdir2(Gral::getVars(2, "eku_d110_dcompdir2", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD111Cdepemi(Gral::getVars(2, "eku_d111_cdepemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD112Ddesdepemi(Gral::getVars(2, "eku_d112_ddesdepemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD113Cdisemi(Gral::getVars(2, "eku_d113_cdisemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD114Ddesdisemi(Gral::getVars(2, "eku_d114_ddesdisemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD115Cciuemi(Gral::getVars(2, "eku_d115_cciuemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD116Ddesciuemi(Gral::getVars(2, "eku_d116_ddesciuemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD117Dtelemi(Gral::getVars(2, "eku_d117_dtelemi", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD118Demaile(Gral::getVars(2, "eku_d118_demaile", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEkuD119Ddensuc(Gral::getVars(2, "eku_d119_ddensuc", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_d100_g_dat_gral_ope_g_emis->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_d100_g_dat_gral_ope_g_emis->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_d100_g_dat_gral_ope_g_emis->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_d100_g_dat_gral_ope_g_emis->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_d100_g_dat_gral_ope_g_emis->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_d100_g_dat_gral_ope_g_emis->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_d100_g_dat_gral_ope_g_emis' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeD100GDatGralOpeGEmiss') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeD100GDatGralOpeGEmis::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeD100GDatGralOpeGEmis::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_d100_g_dat_gral_ope_g_emis'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_d100_g_dat_gral_ope_g_emis->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_d100_g_dat_gral_ope_g_emis->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d101_drucem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d101_drucem' ?>" >

                    <?php Lang::_lang('eku_d101_drucem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d101_drucem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d101_drucem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d101_drucem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d101_drucem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d101_drucem' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD101Drucem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d101_drucem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d101_drucem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d101_drucem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d101_drucem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d101_drucem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d101_drucem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d101_drucem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d102_ddvemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d102_ddvemi' ?>" >

                    <?php Lang::_lang('eku_d102_ddvemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d102_ddvemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d102_ddvemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d102_ddvemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d102_ddvemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d102_ddvemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD102Ddvemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d102_ddvemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d102_ddvemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d102_ddvemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d102_ddvemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d102_ddvemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d102_ddvemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d102_ddvemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d103_itipcont" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d103_itipcont' ?>" >

                    <?php Lang::_lang('eku_d103_itipcont', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d103_itipcont' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d103_itipcont" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d103_itipcont')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d103_itipcont' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d103_itipcont' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD103Itipcont()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d103_itipcont', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d103_itipcont', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d103_itipcont', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d103_itipcont', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d103_itipcont')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d103_itipcont_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d103_itipcont_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d104_ctipreg" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d104_ctipreg' ?>" >

                    <?php Lang::_lang('eku_d104_ctipreg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d104_ctipreg' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d104_ctipreg" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d104_ctipreg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d104_ctipreg' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d104_ctipreg' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD104Ctipreg()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d104_ctipreg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d104_ctipreg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d104_ctipreg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d104_ctipreg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d104_ctipreg')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d104_ctipreg_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d104_ctipreg_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d105_dnomemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d105_dnomemi' ?>" >

                    <?php Lang::_lang('eku_d105_dnomemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d105_dnomemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d105_dnomemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d105_dnomemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d105_dnomemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d105_dnomemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD105Dnomemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d105_dnomemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d105_dnomemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d105_dnomemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d105_dnomemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d105_dnomemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d105_dnomemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d105_dnomemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d106_dnomfanemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d106_dnomfanemi' ?>" >

                    <?php Lang::_lang('eku_d106_dnomfanemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d106_dnomfanemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d106_dnomfanemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d106_dnomfanemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d106_dnomfanemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d106_dnomfanemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD106Dnomfanemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d106_dnomfanemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d106_dnomfanemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d106_dnomfanemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d106_dnomfanemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d106_dnomfanemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d106_dnomfanemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d106_dnomfanemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d107_ddiremi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d107_ddiremi' ?>" >

                    <?php Lang::_lang('eku_d107_ddiremi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d107_ddiremi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d107_ddiremi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d107_ddiremi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d107_ddiremi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d107_ddiremi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD107Ddiremi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d107_ddiremi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d107_ddiremi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d107_ddiremi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d107_ddiremi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d107_ddiremi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d107_ddiremi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d107_ddiremi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d108_dnumcas" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d108_dnumcas' ?>" >

                    <?php Lang::_lang('eku_d108_dnumcas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d108_dnumcas' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d108_dnumcas" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d108_dnumcas')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d108_dnumcas' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d108_dnumcas' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD108Dnumcas()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d108_dnumcas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d108_dnumcas', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d108_dnumcas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d108_dnumcas', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d108_dnumcas')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d108_dnumcas_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d108_dnumcas_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d109_dcompdir1" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d109_dcompdir1' ?>" >

                    <?php Lang::_lang('eku_d109_dcompdir1', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d109_dcompdir1' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d109_dcompdir1" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d109_dcompdir1')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d109_dcompdir1' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d109_dcompdir1' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD109Dcompdir1()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d109_dcompdir1', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d109_dcompdir1', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d109_dcompdir1', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d109_dcompdir1', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d109_dcompdir1')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d109_dcompdir1_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d109_dcompdir1_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d110_dcompdir2" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d110_dcompdir2' ?>" >

                    <?php Lang::_lang('eku_d110_dcompdir2', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d110_dcompdir2' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d110_dcompdir2" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d110_dcompdir2')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d110_dcompdir2' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d110_dcompdir2' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD110Dcompdir2()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d110_dcompdir2', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d110_dcompdir2', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d110_dcompdir2', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d110_dcompdir2', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d110_dcompdir2')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d110_dcompdir2_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d110_dcompdir2_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d111_cdepemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d111_cdepemi' ?>" >

                    <?php Lang::_lang('eku_d111_cdepemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d111_cdepemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d111_cdepemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d111_cdepemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d111_cdepemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d111_cdepemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD111Cdepemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d111_cdepemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d111_cdepemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d111_cdepemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d111_cdepemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d111_cdepemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d111_cdepemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d111_cdepemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d112_ddesdepemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d112_ddesdepemi' ?>" >

                    <?php Lang::_lang('eku_d112_ddesdepemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d112_ddesdepemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d112_ddesdepemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d112_ddesdepemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d112_ddesdepemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d112_ddesdepemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD112Ddesdepemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d112_ddesdepemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d112_ddesdepemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d112_ddesdepemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d112_ddesdepemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d112_ddesdepemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d112_ddesdepemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d112_ddesdepemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d113_cdisemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d113_cdisemi' ?>" >

                    <?php Lang::_lang('eku_d113_cdisemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d113_cdisemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d113_cdisemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d113_cdisemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d113_cdisemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d113_cdisemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD113Cdisemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d113_cdisemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d113_cdisemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d113_cdisemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d113_cdisemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d113_cdisemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d113_cdisemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d113_cdisemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d114_ddesdisemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d114_ddesdisemi' ?>" >

                    <?php Lang::_lang('eku_d114_ddesdisemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d114_ddesdisemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d114_ddesdisemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d114_ddesdisemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d114_ddesdisemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d114_ddesdisemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD114Ddesdisemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d114_ddesdisemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d114_ddesdisemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d114_ddesdisemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d114_ddesdisemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d114_ddesdisemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d114_ddesdisemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d114_ddesdisemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d115_cciuemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d115_cciuemi' ?>" >

                    <?php Lang::_lang('eku_d115_cciuemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d115_cciuemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d115_cciuemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d115_cciuemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d115_cciuemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d115_cciuemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD115Cciuemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d115_cciuemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d115_cciuemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d115_cciuemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d115_cciuemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d115_cciuemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d115_cciuemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d115_cciuemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d116_ddesciuemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d116_ddesciuemi' ?>" >

                    <?php Lang::_lang('eku_d116_ddesciuemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d116_ddesciuemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d116_ddesciuemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d116_ddesciuemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d116_ddesciuemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d116_ddesciuemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD116Ddesciuemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d116_ddesciuemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d116_ddesciuemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d116_ddesciuemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d116_ddesciuemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d116_ddesciuemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d116_ddesciuemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d116_ddesciuemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d117_dtelemi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d117_dtelemi' ?>" >

                    <?php Lang::_lang('eku_d117_dtelemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d117_dtelemi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d117_dtelemi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d117_dtelemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d117_dtelemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d117_dtelemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD117Dtelemi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d117_dtelemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d117_dtelemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d117_dtelemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d117_dtelemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d117_dtelemi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d117_dtelemi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d117_dtelemi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d118_demaile" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d118_demaile' ?>" >

                    <?php Lang::_lang('eku_d118_demaile', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d118_demaile' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d118_demaile" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d118_demaile')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d118_demaile' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d118_demaile' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD118Demaile()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d118_demaile', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d118_demaile', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d118_demaile', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d118_demaile', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d118_demaile')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d118_demaile_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d118_demaile_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d119_ddensuc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d119_ddensuc' ?>" >

                    <?php Lang::_lang('eku_d119_ddensuc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=eku_d119_ddensuc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d119_ddensuc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d119_ddensuc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d119_ddensuc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d119_ddensuc' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD119Ddensuc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d119_ddensuc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d119_ddensuc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d119_ddensuc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d119_ddensuc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d119_ddensuc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d119_ddensuc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_eku_d119_ddensuc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d100_g_dat_gral_ope_g_emis_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeD100GDatGralOpeGEmis::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeD100GDatGralOpeGEmis::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_d100_g_dat_gral_ope_g_emis->getId()) != ''){ ?>
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

