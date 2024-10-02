<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_orden_trabajo';
$db_nombre_pagina = 'prd_orden_trabajo_alta';


$prd_orden_trabajo = new PrdOrdenTrabajo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $prd_orden_trabajo = new PrdOrdenTrabajo();
    // if(trim($hdn_id) != '') $prd_orden_trabajo->setId($hdn_id, false);

    $prd_orden_trabajo = PrdOrdenTrabajo::getOxId($hdn_id);
    if(!$prd_orden_trabajo){
        $prd_orden_trabajo = new PrdOrdenTrabajo();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($prd_orden_trabajo){
            if(PrdOrdenTrabajo::GEN_CONTROL_ALCANCE){
                if($prd_orden_trabajo->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PrdOrdenTrabajo&id='.$prd_orden_trabajo->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA')){ 
	$prd_orden_trabajo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$prd_orden_trabajo->setVtaPresupuestoId(Gral::getVars(1, "cmb_vta_presupuesto_id", null));
	$prd_orden_trabajo->setVtaPresupuestoInsInsumoId(Gral::getVars(1, "cmb_vta_presupuesto_ins_insumo_id", null));
	$prd_orden_trabajo->setCliClienteId(Gral::getVars(1, "cmb_cli_cliente_id", null));
	$prd_orden_trabajo->setPrdTipoOrigenId(Gral::getVars(1, "cmb_prd_tipo_origen_id", null));
	$prd_orden_trabajo->setPrdProcesoProductivoId(Gral::getVars(1, "cmb_prd_proceso_productivo_id", null));
	$prd_orden_trabajo->setPrdPrioridadId(Gral::getVars(1, "cmb_prd_prioridad_id", null));
	$prd_orden_trabajo->setInsInsumoId(Gral::getVars(1, "cmb_ins_insumo_id", null));
	$prd_orden_trabajo->setPrdOrdenTrabajoTipoEstadoId(Gral::getVars(1, "cmb_prd_orden_trabajo_tipo_estado_id", null));
	$prd_orden_trabajo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$prd_orden_trabajo->setCantidad(Gral::getVars(1, "txt_cantidad", 0));
	$prd_orden_trabajo->setFecha(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha")));
	$prd_orden_trabajo->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $prd_orden_trabajo->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $prd_orden_trabajo->control();
                if(!$error->getExisteError()){
                    $prd_orden_trabajo->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$prd_orden_trabajo->getId().'&hash='.$prd_orden_trabajo->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $prd_orden_trabajo->control();
                if(!$error->getExisteError()){
                    $prd_orden_trabajo->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $prd_orden_trabajo->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($prd_orden_trabajo){
                if(PrdOrdenTrabajo::GEN_CONTROL_ALCANCE){
                    if($prd_orden_trabajo->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PrdOrdenTrabajo&id='.$prd_orden_trabajo->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $prd_orden_trabajo->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $prd_orden_trabajo->setVtaPresupuestoId(Gral::getVars(2, "vta_presupuesto_id", 'null'));
            $prd_orden_trabajo->setVtaPresupuestoInsInsumoId(Gral::getVars(2, "vta_presupuesto_ins_insumo_id", 'null'));
            $prd_orden_trabajo->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
            $prd_orden_trabajo->setPrdTipoOrigenId(Gral::getVars(2, "prd_tipo_origen_id", 'null'));
            $prd_orden_trabajo->setPrdProcesoProductivoId(Gral::getVars(2, "prd_proceso_productivo_id", 'null'));
            $prd_orden_trabajo->setPrdPrioridadId(Gral::getVars(2, "prd_prioridad_id", 'null'));
            $prd_orden_trabajo->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
            $prd_orden_trabajo->setPrdOrdenTrabajoTipoEstadoId(Gral::getVars(2, "prd_orden_trabajo_tipo_estado_id", 'null'));
            $prd_orden_trabajo->setCodigo(Gral::getVars(2, "codigo", ''));
            $prd_orden_trabajo->setCantidad(Gral::getVars(2, "cantidad", 0));
            $prd_orden_trabajo->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
            $prd_orden_trabajo->setObservacion(Gral::getVars(2, "observacion", ''));
            $prd_orden_trabajo->setOrden(Gral::getVars(2, "orden", 0));
            $prd_orden_trabajo->setEstado(Gral::getVars(2, "estado", 0));
            $prd_orden_trabajo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $prd_orden_trabajo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $prd_orden_trabajo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $prd_orden_trabajo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='prd_orden_trabajo' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdOrdenTrabajos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrdOrdenTrabajo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrdOrdenTrabajo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_prd_orden_trabajo'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($prd_orden_trabajo->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_presupuesto_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_id' ?>" >

                    <?php Lang::_lang('VtaPresupuesto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=vta_presupuesto_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_presupuesto_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_VTA_PRESUPUESTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_id" <?php echo ($prd_orden_trabajo->getVtaPresupuestoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_presupuesto_id" clase_id="vta_presupuesto" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_presupuesto_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(true), '...'), $prd_orden_trabajo->getVtaPresupuestoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_presupuesto_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_presupuesto_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_vta_presupuesto_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_vta_presupuesto_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_presupuesto_ins_insumo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id' ?>" >

                    <?php Lang::_lang('VtaPresupuestoInsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=vta_presupuesto_ins_insumo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_presupuesto_ins_insumo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_VTA_PRESUPUESTO_INS_INSUMO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_presupuesto_ins_insumo_id" <?php echo ($prd_orden_trabajo->getVtaPresupuestoInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_presupuesto_ins_insumo_id" clase_id="vta_presupuesto_ins_insumo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_presupuesto_ins_insumo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(true), '...'), $prd_orden_trabajo->getVtaPresupuestoInsInsumoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_presupuesto_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_presupuesto_ins_insumo_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_vta_presupuesto_ins_insumo_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_vta_presupuesto_ins_insumo_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_cli_cliente_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >

                    <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=cli_cliente_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cli_cliente_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($prd_orden_trabajo->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_cli_cliente_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $prd_orden_trabajo->getCliClienteId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_cli_cliente_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_cli_cliente_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_tipo_origen_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_tipo_origen_id' ?>" >

                    <?php Lang::_lang('PrdTipoOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=prd_tipo_origen_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_tipo_origen_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_tipo_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_PRD_TIPO_ORIGEN')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_tipo_origen_id" clase_id="prd_tipo_origen" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_tipo_origen_id" <?php echo ($prd_orden_trabajo->getPrdTipoOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_tipo_origen_id" clase_id="prd_tipo_origen" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_tipo_origen_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_tipo_origen_id', Gral::getCmbFiltro(PrdTipoOrigen::getPrdTipoOrigensCmb(true), '...'), $prd_orden_trabajo->getPrdTipoOrigenId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_tipo_origen_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_tipo_origen_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_tipo_origen_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_proceso_productivo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_proceso_productivo_id' ?>" >

                    <?php Lang::_lang('PrdProcesoProductivo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=prd_proceso_productivo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_proceso_productivo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_PRD_PROCESO_PRODUCTIVO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_proceso_productivo_id" <?php echo ($prd_orden_trabajo->getPrdProcesoProductivoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_proceso_productivo_id" clase_id="prd_proceso_productivo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_proceso_productivo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_proceso_productivo_id', Gral::getCmbFiltro(PrdProcesoProductivo::getPrdProcesoProductivosCmb(true), '...'), $prd_orden_trabajo->getPrdProcesoProductivoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_proceso_productivo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_proceso_productivo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_proceso_productivo_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_proceso_productivo_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_proceso_productivo_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_prioridad_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_prioridad_id' ?>" >

                    <?php Lang::_lang('PrdPrioridad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=prd_prioridad_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_prioridad_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_prioridad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_PRD_PRIORIDAD')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_prioridad_id" clase_id="prd_prioridad" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_prioridad_id" <?php echo ($prd_orden_trabajo->getPrdPrioridadId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_prioridad_id" clase_id="prd_prioridad" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_prioridad_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_prioridad_id', Gral::getCmbFiltro(PrdPrioridad::getPrdPrioridadsCmb(true), '...'), $prd_orden_trabajo->getPrdPrioridadId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_prioridad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_prioridad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_prioridad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_prioridad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_prioridad_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_prioridad_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_prioridad_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ins_insumo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >

                    <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=ins_insumo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_insumo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($prd_orden_trabajo->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_insumo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(true), '...'), $prd_orden_trabajo->getInsInsumoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_ins_insumo_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_ins_insumo_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_orden_trabajo_tipo_estado_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_orden_trabajo_tipo_estado_id' ?>" >

                    <?php Lang::_lang('PrdOrdenTrabajoTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=prd_orden_trabajo_tipo_estado_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_orden_trabajo_tipo_estado_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_orden_trabajo_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA_CMB_EDIT_PRD_ORDEN_TRABAJO_TIPO_ESTADO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_orden_trabajo_tipo_estado_id" clase_id="prd_orden_trabajo_tipo_estado" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_orden_trabajo_tipo_estado_id" <?php echo ($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_orden_trabajo_tipo_estado_id" clase_id="prd_orden_trabajo_tipo_estado" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_orden_trabajo_tipo_estado_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_orden_trabajo_tipo_estado_id', Gral::getCmbFiltro(PrdOrdenTrabajoTipoEstado::getPrdOrdenTrabajoTipoEstadosCmb(true), '...'), $prd_orden_trabajo->getPrdOrdenTrabajoTipoEstadoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_orden_trabajo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_orden_trabajo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_orden_trabajo_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_orden_trabajo_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_orden_trabajo_tipo_estado_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_orden_trabajo_tipo_estado_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_prd_orden_trabajo_tipo_estado_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($prd_orden_trabajo->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_cantidad" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >

                    <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=cantidad' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_cantidad" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_cantidad' value='<?php Gral::_echoTxt($prd_orden_trabajo->getCantidad()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_cantidad_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_cantidad_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >

                    <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=fecha' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($prd_orden_trabajo->getFecha())) ?>' size='20' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_fecha_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_fecha_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($prd_orden_trabajo->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_orden_trabajo->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($prd_orden_trabajo->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrdOrdenTrabajo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrdOrdenTrabajo::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($prd_orden_trabajo->getId()) != ''){ ?>
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

