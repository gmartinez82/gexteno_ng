<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_linea_produccion_prd_param_operacion_prd_equipo';
$db_nombre_pagina = 'prd_linea_produccion_prd_param_operacion_prd_equipo_alta';


$prd_linea_produccion_prd_param_operacion_prd_equipo = new PrdLineaProduccionPrdParamOperacionPrdEquipo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $prd_linea_produccion_prd_param_operacion_prd_equipo = new PrdLineaProduccionPrdParamOperacionPrdEquipo();
    // if(trim($hdn_id) != '') $prd_linea_produccion_prd_param_operacion_prd_equipo->setId($hdn_id, false);

    $prd_linea_produccion_prd_param_operacion_prd_equipo = PrdLineaProduccionPrdParamOperacionPrdEquipo::getOxId($hdn_id);
    if(!$prd_linea_produccion_prd_param_operacion_prd_equipo){
        $prd_linea_produccion_prd_param_operacion_prd_equipo = new PrdLineaProduccionPrdParamOperacionPrdEquipo();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($prd_linea_produccion_prd_param_operacion_prd_equipo){
            if(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_CONTROL_ALCANCE){
                if($prd_linea_produccion_prd_param_operacion_prd_equipo->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PrdLineaProduccionPrdParamOperacionPrdEquipo&id='.$prd_linea_produccion_prd_param_operacion_prd_equipo->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA')){ 
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdLineaProduccionId(Gral::getVars(1, "cmb_prd_linea_produccion_id", null));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdParamOperacionId(Gral::getVars(1, "cmb_prd_param_operacion_id", null));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdEquipoId(Gral::getVars(1, "cmb_prd_equipo_id", null));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$prd_linea_produccion_prd_param_operacion_prd_equipo->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $prd_linea_produccion_prd_param_operacion_prd_equipo->control();
                if(!$error->getExisteError()){
                    $prd_linea_produccion_prd_param_operacion_prd_equipo->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$prd_linea_produccion_prd_param_operacion_prd_equipo->getId().'&hash='.$prd_linea_produccion_prd_param_operacion_prd_equipo->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $prd_linea_produccion_prd_param_operacion_prd_equipo->control();
                if(!$error->getExisteError()){
                    $prd_linea_produccion_prd_param_operacion_prd_equipo->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($prd_linea_produccion_prd_param_operacion_prd_equipo){
                if(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_CONTROL_ALCANCE){
                    if($prd_linea_produccion_prd_param_operacion_prd_equipo->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PrdLineaProduccionPrdParamOperacionPrdEquipo&id='.$prd_linea_produccion_prd_param_operacion_prd_equipo->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdLineaProduccionId(Gral::getVars(2, "prd_linea_produccion_id", 'null'));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdParamOperacionId(Gral::getVars(2, "prd_param_operacion_id", 'null'));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setPrdEquipoId(Gral::getVars(2, "prd_equipo_id", 'null'));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setCodigo(Gral::getVars(2, "codigo", ''));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setObservacion(Gral::getVars(2, "observacion", ''));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setOrden(Gral::getVars(2, "orden", 0));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setEstado(Gral::getVars(2, "estado", 0));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $prd_linea_produccion_prd_param_operacion_prd_equipo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='prd_linea_produccion_prd_param_operacion_prd_equipo' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrdLineaProduccionPrdParamOperacionPrdEquipo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrdLineaProduccionPrdParamOperacionPrdEquipo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_prd_linea_produccion_prd_param_operacion_prd_equipo'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_linea_produccion_prd_param_operacion_prd_equipo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_linea_produccion_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_linea_produccion_id' ?>" >

                    <?php Lang::_lang('PrdLineaProduccion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_linea_produccion_prd_param_operacion_prd_equipo_alta&atributo=prd_linea_produccion_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_linea_produccion_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_linea_produccion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA_CMB_EDIT_PRD_LINEA_PRODUCCION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_linea_produccion_id" clase_id="prd_linea_produccion" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_linea_produccion_id" <?php echo ($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdLineaProduccionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_linea_produccion_id" clase_id="prd_linea_produccion" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_linea_produccion_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_linea_produccion_id', Gral::getCmbFiltro(PrdLineaProduccion::getPrdLineaProduccionsCmb(true), '...'), $prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdLineaProduccionId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_linea_produccion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_linea_produccion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_linea_produccion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_linea_produccion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_linea_produccion_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_prd_linea_produccion_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_prd_linea_produccion_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_param_operacion_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_param_operacion_id' ?>" >

                    <?php Lang::_lang('PrdParamOperacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_linea_produccion_prd_param_operacion_prd_equipo_alta&atributo=prd_param_operacion_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_param_operacion_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_param_operacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA_CMB_EDIT_PRD_PARAM_OPERACION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_param_operacion_id" clase_id="prd_param_operacion" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_param_operacion_id" <?php echo ($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdParamOperacionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_param_operacion_id" clase_id="prd_param_operacion" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_param_operacion_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_param_operacion_id', Gral::getCmbFiltro(PrdParamOperacion::getPrdParamOperacionsCmb(true), '...'), $prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdParamOperacionId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_param_operacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_param_operacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_param_operacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_param_operacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_param_operacion_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_prd_param_operacion_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_prd_param_operacion_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_equipo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_equipo_id' ?>" >

                    <?php Lang::_lang('PrdEquipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_linea_produccion_prd_param_operacion_prd_equipo_alta&atributo=prd_equipo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_equipo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_equipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA_CMB_EDIT_PRD_EQUIPO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_equipo_id" clase_id="prd_equipo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_equipo_id" <?php echo ($prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdEquipoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_equipo_id" clase_id="prd_equipo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_equipo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_equipo_id', Gral::getCmbFiltro(PrdEquipo::getPrdEquiposCmb(true), '...'), $prd_linea_produccion_prd_param_operacion_prd_equipo->getPrdEquipoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_equipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_equipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_equipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_equipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_equipo_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_prd_equipo_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_prd_equipo_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_linea_produccion_prd_param_operacion_prd_equipo_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_linea_produccion_prd_param_operacion_prd_equipo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($prd_linea_produccion_prd_param_operacion_prd_equipo->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrdLineaProduccionPrdParamOperacionPrdEquipo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrdLineaProduccionPrdParamOperacionPrdEquipo::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($prd_linea_produccion_prd_param_operacion_prd_equipo->getId()) != ''){ ?>
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

