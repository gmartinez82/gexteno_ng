<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_persona_gral_sucursal';
$db_nombre_pagina = 'per_persona_gral_sucursal_alta';


$per_persona_gral_sucursal = new PerPersonaGralSucursal();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $per_persona_gral_sucursal = new PerPersonaGralSucursal();
    // if(trim($hdn_id) != '') $per_persona_gral_sucursal->setId($hdn_id, false);

    $per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($hdn_id);
    if(!$per_persona_gral_sucursal){
        $per_persona_gral_sucursal = new PerPersonaGralSucursal();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($per_persona_gral_sucursal){
            if(PerPersonaGralSucursal::GEN_CONTROL_ALCANCE){
                if($per_persona_gral_sucursal->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PerPersonaGralSucursal&id='.$per_persona_gral_sucursal->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ALTA')){ 
	$per_persona_gral_sucursal->setPerPersonaId(Gral::getVars(1, "cmb_per_persona_id", null));
	$per_persona_gral_sucursal->setGralSucursalId(Gral::getVars(1, "cmb_gral_sucursal_id", null));
	$per_persona_gral_sucursal->setCodigo(Gral::getVars(1, "txt_codigo"));
    }
    if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $per_persona_gral_sucursal->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $per_persona_gral_sucursal->control();
                if(!$error->getExisteError()){
                    $per_persona_gral_sucursal->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$per_persona_gral_sucursal->getId().'&hash='.$per_persona_gral_sucursal->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $per_persona_gral_sucursal->control();
                if(!$error->getExisteError()){
                    $per_persona_gral_sucursal->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $per_persona_gral_sucursal->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($per_persona_gral_sucursal){
                if(PerPersonaGralSucursal::GEN_CONTROL_ALCANCE){
                    if($per_persona_gral_sucursal->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PerPersonaGralSucursal&id='.$per_persona_gral_sucursal->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $per_persona_gral_sucursal->setPerPersonaId(Gral::getVars(2, "per_persona_id", 'null'));
            $per_persona_gral_sucursal->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
            $per_persona_gral_sucursal->setCodigo(Gral::getVars(2, "codigo", ''));
            $per_persona_gral_sucursal->setEstado(Gral::getVars(2, "estado", 0));
            $per_persona_gral_sucursal->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $per_persona_gral_sucursal->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $per_persona_gral_sucursal->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $per_persona_gral_sucursal->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='per_persona_gral_sucursal' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PerPersonaGralSucursal') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PerPersonaGralSucursal::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PerPersonaGralSucursal::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_per_persona_gral_sucursal'>
        
            <tr>
                <td id="label_cmb_per_persona_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_per_persona_id' ?>" >

                    <?php Lang::_lang('PerPersona', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_gral_sucursal_alta&atributo=per_persona_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_per_persona_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('per_persona_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ALTA_CMB_EDIT_PER_PERSONA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_per_persona_id" clase_id="per_persona" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_persona_id" <?php echo ($per_persona_gral_sucursal->getPerPersonaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_per_persona_id" clase_id="per_persona" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_per_persona_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_per_persona_id', Gral::getCmbFiltro(PerPersona::getPerPersonasCmb(true), '...'), $per_persona_gral_sucursal->getPerPersonaId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_per_persona_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_per_persona_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_per_persona_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_per_persona_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_persona_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta_campo_per_persona_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta_campo_per_persona_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_sucursal_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>" >

                    <?php Lang::_lang('GralSucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_gral_sucursal_alta&atributo=gral_sucursal_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_sucursal_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($per_persona_gral_sucursal->getGralSucursalId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_sucursal_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $per_persona_gral_sucursal->getGralSucursalId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta_campo_gral_sucursal_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta_campo_gral_sucursal_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_gral_sucursal_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($per_persona_gral_sucursal->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_persona_gral_sucursal->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($per_persona_gral_sucursal->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PerPersonaGralSucursal::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PerPersonaGralSucursal::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($per_persona_gral_sucursal->getId()) != ''){ ?>
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

