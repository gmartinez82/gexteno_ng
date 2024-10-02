<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_geo_pais_geo_pais';
$db_nombre_pagina = 'eku_param_geo_pais_geo_pais_alta';


$eku_param_geo_pais_geo_pais = new EkuParamGeoPaisGeoPais();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_param_geo_pais_geo_pais = new EkuParamGeoPaisGeoPais();
    // if(trim($hdn_id) != '') $eku_param_geo_pais_geo_pais->setId($hdn_id, false);

    $eku_param_geo_pais_geo_pais = EkuParamGeoPaisGeoPais::getOxId($hdn_id);
    if(!$eku_param_geo_pais_geo_pais){
        $eku_param_geo_pais_geo_pais = new EkuParamGeoPaisGeoPais();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_param_geo_pais_geo_pais){
            if(EkuParamGeoPaisGeoPais::GEN_CONTROL_ALCANCE){
                if($eku_param_geo_pais_geo_pais->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuParamGeoPaisGeoPais&id='.$eku_param_geo_pais_geo_pais->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ALTA')){ 
	$eku_param_geo_pais_geo_pais->setEkuParamGeoPaisId(Gral::getVars(1, "cmb_eku_param_geo_pais_id", null));
	$eku_param_geo_pais_geo_pais->setGeoPaisId(Gral::getVars(1, "cmb_geo_pais_id", null));
    }
    if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ALTA_AVANZADA')){ 
    }
    
	switch($accion){
            case 'guardar':
                $error = $eku_param_geo_pais_geo_pais->control();
                if(!$error->getExisteError()){
                    $eku_param_geo_pais_geo_pais->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_param_geo_pais_geo_pais->getId().'&hash='.$eku_param_geo_pais_geo_pais->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_param_geo_pais_geo_pais->control();
                if(!$error->getExisteError()){
                    $eku_param_geo_pais_geo_pais->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_param_geo_pais_geo_pais->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_param_geo_pais_geo_pais){
                if(EkuParamGeoPaisGeoPais::GEN_CONTROL_ALCANCE){
                    if($eku_param_geo_pais_geo_pais->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuParamGeoPaisGeoPais&id='.$eku_param_geo_pais_geo_pais->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_param_geo_pais_geo_pais->setEkuParamGeoPaisId(Gral::getVars(2, "eku_param_geo_pais_id", 'null'));
            $eku_param_geo_pais_geo_pais->setGeoPaisId(Gral::getVars(2, "geo_pais_id", 'null'));
            $eku_param_geo_pais_geo_pais->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_param_geo_pais_geo_pais->setCreadoPor(Gral::getVars(2, "creado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_param_geo_pais_geo_pais' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamGeoPaisGeoPaiss') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuParamGeoPaisGeoPais::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuParamGeoPaisGeoPais::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_param_geo_pais_geo_pais'>
        
            <tr>
                <td id="label_cmb_eku_param_geo_pais_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_param_geo_pais_id' ?>" >

                    <?php Lang::_lang('EkuParamGeoPais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_param_geo_pais_geo_pais_alta&atributo=eku_param_geo_pais_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_param_geo_pais_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_param_geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ALTA_CMB_EDIT_EKU_PARAM_GEO_PAIS')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_param_geo_pais_id" clase_id="eku_param_geo_pais" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_param_geo_pais_id" <?php echo ($eku_param_geo_pais_geo_pais->getEkuParamGeoPaisId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_param_geo_pais_id" clase_id="eku_param_geo_pais" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_param_geo_pais_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_param_geo_pais_id', Gral::getCmbFiltro(EkuParamGeoPais::getEkuParamGeoPaissCmb(true), '...'), $eku_param_geo_pais_geo_pais->getEkuParamGeoPaisId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_param_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_param_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_param_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_param_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_param_geo_pais_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_alta_campo_eku_param_geo_pais_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_alta_campo_eku_param_geo_pais_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_geo_pais_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>" >

                    <?php Lang::_lang('GeoPais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_param_geo_pais_geo_pais_alta&atributo=geo_pais_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_geo_pais_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_geo_pais_id" clase_id="geo_pais" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($eku_param_geo_pais_geo_pais->getGeoPaisId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_geo_pais_id" clase_id="geo_pais" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_geo_pais_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmb(true), '...'), $eku_param_geo_pais_geo_pais->getGeoPaisId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_alta_campo_geo_pais_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_alta_campo_geo_pais_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_param_geo_pais_geo_pais->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_param_geo_pais_geo_pais->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuParamGeoPaisGeoPais::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuParamGeoPaisGeoPais::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_param_geo_pais_geo_pais->getId()) != ''){ ?>
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

