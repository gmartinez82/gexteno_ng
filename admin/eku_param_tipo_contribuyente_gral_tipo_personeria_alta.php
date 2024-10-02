<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_tipo_contribuyente_gral_tipo_personeria';
$db_nombre_pagina = 'eku_param_tipo_contribuyente_gral_tipo_personeria_alta';


$eku_param_tipo_contribuyente_gral_tipo_personeria = new EkuParamTipoContribuyenteGralTipoPersoneria();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_param_tipo_contribuyente_gral_tipo_personeria = new EkuParamTipoContribuyenteGralTipoPersoneria();
    // if(trim($hdn_id) != '') $eku_param_tipo_contribuyente_gral_tipo_personeria->setId($hdn_id, false);

    $eku_param_tipo_contribuyente_gral_tipo_personeria = EkuParamTipoContribuyenteGralTipoPersoneria::getOxId($hdn_id);
    if(!$eku_param_tipo_contribuyente_gral_tipo_personeria){
        $eku_param_tipo_contribuyente_gral_tipo_personeria = new EkuParamTipoContribuyenteGralTipoPersoneria();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_param_tipo_contribuyente_gral_tipo_personeria){
            if(EkuParamTipoContribuyenteGralTipoPersoneria::GEN_CONTROL_ALCANCE){
                if($eku_param_tipo_contribuyente_gral_tipo_personeria->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuParamTipoContribuyenteGralTipoPersoneria&id='.$eku_param_tipo_contribuyente_gral_tipo_personeria->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ALTA')){ 
	$eku_param_tipo_contribuyente_gral_tipo_personeria->setEkuParamTipoContribuyenteId(Gral::getVars(1, "cmb_eku_param_tipo_contribuyente_id", null));
	$eku_param_tipo_contribuyente_gral_tipo_personeria->setGralTipoPersoneriaId(Gral::getVars(1, "cmb_gral_tipo_personeria_id", null));
    }
    if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ALTA_AVANZADA')){ 
    }
    
	switch($accion){
            case 'guardar':
                $error = $eku_param_tipo_contribuyente_gral_tipo_personeria->control();
                if(!$error->getExisteError()){
                    $eku_param_tipo_contribuyente_gral_tipo_personeria->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_param_tipo_contribuyente_gral_tipo_personeria->getId().'&hash='.$eku_param_tipo_contribuyente_gral_tipo_personeria->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_param_tipo_contribuyente_gral_tipo_personeria->control();
                if(!$error->getExisteError()){
                    $eku_param_tipo_contribuyente_gral_tipo_personeria->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_param_tipo_contribuyente_gral_tipo_personeria->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_param_tipo_contribuyente_gral_tipo_personeria){
                if(EkuParamTipoContribuyenteGralTipoPersoneria::GEN_CONTROL_ALCANCE){
                    if($eku_param_tipo_contribuyente_gral_tipo_personeria->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuParamTipoContribuyenteGralTipoPersoneria&id='.$eku_param_tipo_contribuyente_gral_tipo_personeria->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_param_tipo_contribuyente_gral_tipo_personeria->setEkuParamTipoContribuyenteId(Gral::getVars(2, "eku_param_tipo_contribuyente_id", 'null'));
            $eku_param_tipo_contribuyente_gral_tipo_personeria->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
            $eku_param_tipo_contribuyente_gral_tipo_personeria->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_param_tipo_contribuyente_gral_tipo_personeria->setCreadoPor(Gral::getVars(2, "creado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_param_tipo_contribuyente_gral_tipo_personeria' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamTipoContribuyenteGralTipoPersonerias') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuParamTipoContribuyenteGralTipoPersoneria::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuParamTipoContribuyenteGralTipoPersoneria::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_param_tipo_contribuyente_gral_tipo_personeria'>
        
            <tr>
                <td id="label_cmb_eku_param_tipo_contribuyente_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_param_tipo_contribuyente_id' ?>" >

                    <?php Lang::_lang('EkuParamTipoContribuyente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_param_tipo_contribuyente_gral_tipo_personeria_alta&atributo=eku_param_tipo_contribuyente_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_param_tipo_contribuyente_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_param_tipo_contribuyente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ALTA_CMB_EDIT_EKU_PARAM_TIPO_CONTRIBUYENTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_param_tipo_contribuyente_id" clase_id="eku_param_tipo_contribuyente" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_param_tipo_contribuyente_id" <?php echo ($eku_param_tipo_contribuyente_gral_tipo_personeria->getEkuParamTipoContribuyenteId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_param_tipo_contribuyente_id" clase_id="eku_param_tipo_contribuyente" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_param_tipo_contribuyente_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_param_tipo_contribuyente_id', Gral::getCmbFiltro(EkuParamTipoContribuyente::getEkuParamTipoContribuyentesCmb(true), '...'), $eku_param_tipo_contribuyente_gral_tipo_personeria->getEkuParamTipoContribuyenteId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_param_tipo_contribuyente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_param_tipo_contribuyente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_param_tipo_contribuyente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_param_tipo_contribuyente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_param_tipo_contribuyente_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_contribuyente_gral_tipo_personeria/eku_param_tipo_contribuyente_gral_tipo_personeria_alta_campo_eku_param_tipo_contribuyente_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_contribuyente_gral_tipo_personeria/eku_param_tipo_contribuyente_gral_tipo_personeria_alta_campo_eku_param_tipo_contribuyente_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_tipo_personeria_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_personeria_id' ?>" >

                    <?php Lang::_lang('GralTipoPersoneria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_param_tipo_contribuyente_gral_tipo_personeria_alta&atributo=gral_tipo_personeria_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_tipo_personeria_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($eku_param_tipo_contribuyente_gral_tipo_personeria->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_tipo_personeria_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(true), '...'), $eku_param_tipo_contribuyente_gral_tipo_personeria->getGralTipoPersoneriaId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_personeria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_personeria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_personeria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_personeria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_contribuyente_gral_tipo_personeria/eku_param_tipo_contribuyente_gral_tipo_personeria_alta_campo_gral_tipo_personeria_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_contribuyente_gral_tipo_personeria/eku_param_tipo_contribuyente_gral_tipo_personeria_alta_campo_gral_tipo_personeria_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_param_tipo_contribuyente_gral_tipo_personeria->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_param_tipo_contribuyente_gral_tipo_personeria->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuParamTipoContribuyenteGralTipoPersoneria::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuParamTipoContribuyenteGralTipoPersoneria::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_param_tipo_contribuyente_gral_tipo_personeria->getId()) != ''){ ?>
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

