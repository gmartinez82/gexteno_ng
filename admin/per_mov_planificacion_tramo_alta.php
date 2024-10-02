<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_mov_planificacion_tramo';
$db_nombre_pagina = 'per_mov_planificacion_tramo_alta';


$per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
    // if(trim($hdn_id) != '') $per_mov_planificacion_tramo->setId($hdn_id, false);

    $per_mov_planificacion_tramo = PerMovPlanificacionTramo::getOxId($hdn_id);
    if(!$per_mov_planificacion_tramo){
        $per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($per_mov_planificacion_tramo){
            if(PerMovPlanificacionTramo::GEN_CONTROL_ALCANCE){
                if($per_mov_planificacion_tramo->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PerMovPlanificacionTramo&id='.$per_mov_planificacion_tramo->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA')){ 
	$per_mov_planificacion_tramo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$per_mov_planificacion_tramo->setPerMovPlanificacionId(Gral::getVars(1, "cmb_per_mov_planificacion_id", null));
	$per_mov_planificacion_tramo->setPlnJornadaTramoId(Gral::getVars(1, "cmb_pln_jornada_tramo_id", null));
	$per_mov_planificacion_tramo->setTramoDesde(Gral::getVars(1, "txt_tramo_desde"));
	$per_mov_planificacion_tramo->setTramoHasta(Gral::getVars(1, "txt_tramo_hasta"));
	$per_mov_planificacion_tramo->setHorasTramo(Gral::getVars(1, "txt_horas_tramo"));
	$per_mov_planificacion_tramo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$per_mov_planificacion_tramo->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $per_mov_planificacion_tramo->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $per_mov_planificacion_tramo->control();
                if(!$error->getExisteError()){
                    $per_mov_planificacion_tramo->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$per_mov_planificacion_tramo->getId().'&hash='.$per_mov_planificacion_tramo->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $per_mov_planificacion_tramo->control();
                if(!$error->getExisteError()){
                    $per_mov_planificacion_tramo->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $per_mov_planificacion_tramo->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($per_mov_planificacion_tramo){
                if(PerMovPlanificacionTramo::GEN_CONTROL_ALCANCE){
                    if($per_mov_planificacion_tramo->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PerMovPlanificacionTramo&id='.$per_mov_planificacion_tramo->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $per_mov_planificacion_tramo->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $per_mov_planificacion_tramo->setPerMovPlanificacionId(Gral::getVars(2, "per_mov_planificacion_id", 'null'));
            $per_mov_planificacion_tramo->setPlnJornadaTramoId(Gral::getVars(2, "pln_jornada_tramo_id", 'null'));
            $per_mov_planificacion_tramo->setTramoDesde(Gral::getVars(2, "tramo_desde", ''));
            $per_mov_planificacion_tramo->setTramoHasta(Gral::getVars(2, "tramo_hasta", ''));
            $per_mov_planificacion_tramo->setHorasTramo(Gral::getVars(2, "horas_tramo", ''));
            $per_mov_planificacion_tramo->setCodigo(Gral::getVars(2, "codigo", ''));
            $per_mov_planificacion_tramo->setObservacion(Gral::getVars(2, "observacion", ''));
            $per_mov_planificacion_tramo->setOrden(Gral::getVars(2, "orden", 0));
            $per_mov_planificacion_tramo->setEstado(Gral::getVars(2, "estado", 0));
            $per_mov_planificacion_tramo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $per_mov_planificacion_tramo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $per_mov_planificacion_tramo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $per_mov_planificacion_tramo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='per_mov_planificacion_tramo' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PerMovPlanificacionTramos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PerMovPlanificacionTramo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PerMovPlanificacionTramo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_per_mov_planificacion_tramo'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_per_mov_planificacion_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_per_mov_planificacion_id' ?>" >

                    <?php Lang::_lang('PerMovPlanificacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=per_mov_planificacion_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_per_mov_planificacion_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('per_mov_planificacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA_CMB_EDIT_PER_MOV_PLANIFICACION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_per_mov_planificacion_id" clase_id="per_mov_planificacion" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_mov_planificacion_id" <?php echo ($per_mov_planificacion_tramo->getPerMovPlanificacionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_per_mov_planificacion_id" clase_id="per_mov_planificacion" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_per_mov_planificacion_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_per_mov_planificacion_id', Gral::getCmbFiltro(PerMovPlanificacion::getPerMovPlanificacionsCmb(true), '...'), $per_mov_planificacion_tramo->getPerMovPlanificacionId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_per_mov_planificacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_per_mov_planificacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_per_mov_planificacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_per_mov_planificacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_mov_planificacion_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_per_mov_planificacion_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_per_mov_planificacion_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pln_jornada_tramo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pln_jornada_tramo_id' ?>" >

                    <?php Lang::_lang('PlnJornadaTramo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=pln_jornada_tramo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pln_jornada_tramo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pln_jornada_tramo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ALTA_CMB_EDIT_PLN_JORNADA_TRAMO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pln_jornada_tramo_id" clase_id="pln_jornada_tramo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pln_jornada_tramo_id" <?php echo ($per_mov_planificacion_tramo->getPlnJornadaTramoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pln_jornada_tramo_id" clase_id="pln_jornada_tramo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pln_jornada_tramo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pln_jornada_tramo_id', Gral::getCmbFiltro(PlnJornadaTramo::getPlnJornadaTramosCmb(true), '...'), $per_mov_planificacion_tramo->getPlnJornadaTramoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pln_jornada_tramo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pln_jornada_tramo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pln_jornada_tramo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pln_jornada_tramo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pln_jornada_tramo_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_pln_jornada_tramo_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_pln_jornada_tramo_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_tramo_desde" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_tramo_desde' ?>" >

                    <?php Lang::_lang('Tramo Desde', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=tramo_desde' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_tramo_desde" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('tramo_desde')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_tramo_desde' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_tramo_desde' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getTramoDesde()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_tramo_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_tramo_desde', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_tramo_desde', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_tramo_desde', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tramo_desde')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_tramo_desde_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_tramo_desde_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_tramo_hasta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_tramo_hasta' ?>" >

                    <?php Lang::_lang('Tramo Hasta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=tramo_hasta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_tramo_hasta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('tramo_hasta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_tramo_hasta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_tramo_hasta' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getTramoHasta()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_tramo_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_tramo_hasta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_tramo_hasta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_tramo_hasta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('tramo_hasta')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_tramo_hasta_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_tramo_hasta_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_horas_tramo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_horas_tramo' ?>" >

                    <?php Lang::_lang('Horas Tramo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=horas_tramo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_horas_tramo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('horas_tramo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_horas_tramo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_horas_tramo' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getHorasTramo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_horas_tramo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_horas_tramo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_horas_tramo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_horas_tramo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('horas_tramo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_horas_tramo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_horas_tramo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Credencial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getCodigo()) ?>' size='20' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_mov_planificacion_tramo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($per_mov_planificacion_tramo->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($per_mov_planificacion_tramo->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PerMovPlanificacionTramo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PerMovPlanificacionTramo::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($per_mov_planificacion_tramo->getId()) != ''){ ?>
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

