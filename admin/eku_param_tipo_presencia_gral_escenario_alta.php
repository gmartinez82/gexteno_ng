<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_tipo_presencia_gral_escenario';
$db_nombre_pagina = 'eku_param_tipo_presencia_gral_escenario_alta';


$eku_param_tipo_presencia_gral_escenario = new EkuParamTipoPresenciaGralEscenario();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_param_tipo_presencia_gral_escenario = new EkuParamTipoPresenciaGralEscenario();
    // if(trim($hdn_id) != '') $eku_param_tipo_presencia_gral_escenario->setId($hdn_id, false);

    $eku_param_tipo_presencia_gral_escenario = EkuParamTipoPresenciaGralEscenario::getOxId($hdn_id);
    if(!$eku_param_tipo_presencia_gral_escenario){
        $eku_param_tipo_presencia_gral_escenario = new EkuParamTipoPresenciaGralEscenario();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_param_tipo_presencia_gral_escenario){
            if(EkuParamTipoPresenciaGralEscenario::GEN_CONTROL_ALCANCE){
                if($eku_param_tipo_presencia_gral_escenario->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuParamTipoPresenciaGralEscenario&id='.$eku_param_tipo_presencia_gral_escenario->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA')){ 
	$eku_param_tipo_presencia_gral_escenario->setEkuParamTipoPresenciaId(Gral::getVars(1, "cmb_eku_param_tipo_presencia_id", null));
	$eku_param_tipo_presencia_gral_escenario->setGralEscenarioId(Gral::getVars(1, "cmb_gral_escenario_id", null));
    }
    if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA_AVANZADA')){ 
    }
    
	switch($accion){
            case 'guardar':
                $error = $eku_param_tipo_presencia_gral_escenario->control();
                if(!$error->getExisteError()){
                    $eku_param_tipo_presencia_gral_escenario->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_param_tipo_presencia_gral_escenario->getId().'&hash='.$eku_param_tipo_presencia_gral_escenario->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_param_tipo_presencia_gral_escenario->control();
                if(!$error->getExisteError()){
                    $eku_param_tipo_presencia_gral_escenario->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_param_tipo_presencia_gral_escenario->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_param_tipo_presencia_gral_escenario){
                if(EkuParamTipoPresenciaGralEscenario::GEN_CONTROL_ALCANCE){
                    if($eku_param_tipo_presencia_gral_escenario->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuParamTipoPresenciaGralEscenario&id='.$eku_param_tipo_presencia_gral_escenario->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_param_tipo_presencia_gral_escenario->setEkuParamTipoPresenciaId(Gral::getVars(2, "eku_param_tipo_presencia_id", 'null'));
            $eku_param_tipo_presencia_gral_escenario->setGralEscenarioId(Gral::getVars(2, "gral_escenario_id", 'null'));
            $eku_param_tipo_presencia_gral_escenario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_param_tipo_presencia_gral_escenario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_param_tipo_presencia_gral_escenario' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamTipoPresenciaGralEscenarios') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuParamTipoPresenciaGralEscenario::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuParamTipoPresenciaGralEscenario::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_param_tipo_presencia_gral_escenario'>
        
            <tr>
                <td id="label_cmb_eku_param_tipo_presencia_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_param_tipo_presencia_id' ?>" >

                    <?php Lang::_lang('EkuParamTipoPresencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_param_tipo_presencia_gral_escenario_alta&atributo=eku_param_tipo_presencia_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_param_tipo_presencia_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_param_tipo_presencia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA_CMB_EDIT_EKU_PARAM_TIPO_PRESENCIA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_param_tipo_presencia_id" clase_id="eku_param_tipo_presencia" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_param_tipo_presencia_id" <?php echo ($eku_param_tipo_presencia_gral_escenario->getEkuParamTipoPresenciaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_param_tipo_presencia_id" clase_id="eku_param_tipo_presencia" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_param_tipo_presencia_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_param_tipo_presencia_id', Gral::getCmbFiltro(EkuParamTipoPresencia::getEkuParamTipoPresenciasCmb(true), '...'), $eku_param_tipo_presencia_gral_escenario->getEkuParamTipoPresenciaId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_param_tipo_presencia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_param_tipo_presencia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_param_tipo_presencia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_param_tipo_presencia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_param_tipo_presencia_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_presencia_gral_escenario/eku_param_tipo_presencia_gral_escenario_alta_campo_eku_param_tipo_presencia_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_presencia_gral_escenario/eku_param_tipo_presencia_gral_escenario_alta_campo_eku_param_tipo_presencia_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_escenario_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_escenario_id' ?>" >

                    <?php Lang::_lang('GralEscenario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_param_tipo_presencia_gral_escenario_alta&atributo=gral_escenario_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_escenario_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_escenario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA_CMB_EDIT_GRAL_ESCENARIO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_escenario_id" clase_id="gral_escenario" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_escenario_id" <?php echo ($eku_param_tipo_presencia_gral_escenario->getGralEscenarioId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_escenario_id" clase_id="gral_escenario" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_escenario_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(true), '...'), $eku_param_tipo_presencia_gral_escenario->getGralEscenarioId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_escenario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_escenario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_escenario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_escenario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_escenario_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_presencia_gral_escenario/eku_param_tipo_presencia_gral_escenario_alta_campo_gral_escenario_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_param_tipo_presencia_gral_escenario/eku_param_tipo_presencia_gral_escenario_alta_campo_gral_escenario_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_param_tipo_presencia_gral_escenario->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_param_tipo_presencia_gral_escenario->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuParamTipoPresenciaGralEscenario::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuParamTipoPresenciaGralEscenario::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_param_tipo_presencia_gral_escenario->getId()) != ''){ ?>
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

