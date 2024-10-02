<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc_agrupacion';
$db_nombre_pagina = 'pde_oc_agrupacion_alta';


$pde_oc_agrupacion = new PdeOcAgrupacion();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $pde_oc_agrupacion = new PdeOcAgrupacion();
    if(trim($hdn_id) != '') $pde_oc_agrupacion->setId($hdn_id, false);
	$pde_oc_agrupacion->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$pde_oc_agrupacion->setCodigo(Gral::getVars(1, "txt_codigo"));
	$pde_oc_agrupacion->setPdeOcTipoOrigenId(Gral::getVars(1, "cmb_pde_oc_tipo_origen_id", null));
	$pde_oc_agrupacion->setPrvProveedorId(Gral::getVars(1, "cmb_prv_proveedor_id", null));
	$pde_oc_agrupacion->setPdeCentroPedidoId(Gral::getVars(1, "cmb_pde_centro_pedido_id", null));
	$pde_oc_agrupacion->setPdeCentroRecepcionId(Gral::getVars(1, "cmb_pde_centro_recepcion_id", null));
	$pde_oc_agrupacion->setPdeOcAgrupacionTipoEstadoId(Gral::getVars(1, "cmb_pde_oc_agrupacion_tipo_estado_id", null));
	$pde_oc_agrupacion->setPrvDescuentoFinancieroId(Gral::getVars(1, "cmb_prv_descuento_financiero_id", null));
	$pde_oc_agrupacion->setFechaEntrega(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_entrega")));
	$pde_oc_agrupacion->setVencimiento(Gral::getFechaToDb(Gral::getVars(1, "txt_vencimiento")));
	$pde_oc_agrupacion->setNotaPublica(Gral::getVars(1, "txa_nota_publica"));
	$pde_oc_agrupacion->setNotaInterna(Gral::getVars(1, "txa_nota_interna"));
	$pde_oc_agrupacion->setObservacion(Gral::getVars(1, "txa_observacion"));
	$pde_oc_agrupacion->setOrden(Gral::getVars(1, "txt_orden", 0));
	$pde_oc_agrupacion->setEstado(Gral::getVars(1, "_estado", 0));
	$pde_oc_agrupacion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$pde_oc_agrupacion->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$pde_oc_agrupacion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$pde_oc_agrupacion->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$pde_oc_agrupacion_estado = new PdeOcAgrupacion();
	if(trim($hdn_id) != ''){
            $pde_oc_agrupacion_estado->setId($hdn_id);            
            $pde_oc_agrupacion->setEstado($pde_oc_agrupacion_estado->getEstado());
	}else{            
            $pde_oc_agrupacion->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_oc_agrupacion->control();
			if(!$error->getExisteError()){
				$pde_oc_agrupacion->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$pde_oc_agrupacion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_oc_agrupacion->control();
			if(!$error->getExisteError()){
				$pde_oc_agrupacion->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$pde_oc_agrupacion->setId($hdn_id);
	}else{
	
	$pde_oc_agrupacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_oc_agrupacion->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_oc_agrupacion->setPdeOcTipoOrigenId(Gral::getVars(2, "pde_oc_tipo_origen_id", 'null'));
	$pde_oc_agrupacion->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_oc_agrupacion->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
	$pde_oc_agrupacion->setPdeCentroRecepcionId(Gral::getVars(2, "pde_centro_recepcion_id", 'null'));
	$pde_oc_agrupacion->setPdeOcAgrupacionTipoEstadoId(Gral::getVars(2, "pde_oc_agrupacion_tipo_estado_id", 'null'));
	$pde_oc_agrupacion->setPrvDescuentoFinancieroId(Gral::getVars(2, "prv_descuento_financiero_id", 'null'));
	$pde_oc_agrupacion->setFechaEntrega(Gral::getVars(2, "fecha_entrega", date('Y-m-d')));
	$pde_oc_agrupacion->setVencimiento(Gral::getVars(2, "vencimiento", date('Y-m-d')));
	$pde_oc_agrupacion->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$pde_oc_agrupacion->setNotaInterna(Gral::getVars(2, "nota_interna", ''));
	$pde_oc_agrupacion->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_oc_agrupacion->setOrden(Gral::getVars(2, "orden", 0));
	$pde_oc_agrupacion->setEstado(Gral::getVars(2, "estado", 0));
	$pde_oc_agrupacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_oc_agrupacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_oc_agrupacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_oc_agrupacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeOcAgrupacions') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeOcAgrupacion::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeOcAgrupacion::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pde_oc_agrupacion'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($pde_oc_agrupacion->getDescripcion()) ?>' size='50' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($pde_oc_agrupacion->getCodigo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_oc_tipo_origen_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_tipo_origen_id' ?>" >

                    <?php Lang::_lang('PdeOcTipoOrigen', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=pde_oc_tipo_origen_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_oc_tipo_origen_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_oc_tipo_origen_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA_CMB_EDIT_PDE_OC_TIPO_ORIGEN')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_oc_tipo_origen_id" clase_id="pde_oc_tipo_origen" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_tipo_origen_id" <?php echo ($pde_oc_agrupacion->getPdeOcTipoOrigenId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_oc_tipo_origen_id" clase_id="pde_oc_tipo_origen" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_oc_tipo_origen_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_oc_tipo_origen_id', Gral::getCmbFiltro(PdeOcTipoOrigen::getPdeOcTipoOrigensCmb(), '...'), $pde_oc_agrupacion->getPdeOcTipoOrigenId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_oc_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_oc_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_oc_tipo_origen_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_oc_tipo_origen_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_tipo_origen_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prv_proveedor_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >

                    <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=prv_proveedor_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prv_proveedor_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_oc_agrupacion->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prv_proveedor_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_oc_agrupacion->getPrvProveedorId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_centro_pedido_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >

                    <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=pde_centro_pedido_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_centro_pedido_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pde_oc_agrupacion->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_centro_pedido_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_oc_agrupacion->getPdeCentroPedidoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_centro_recepcion_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_recepcion_id' ?>" >

                    <?php Lang::_lang('PdeCentroRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=pde_centro_recepcion_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_centro_recepcion_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA_CMB_EDIT_PDE_CENTRO_RECEPCION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_recepcion_id" <?php echo ($pde_oc_agrupacion->getPdeCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_centro_recepcion_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $pde_oc_agrupacion->getPdeCentroRecepcionId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_oc_agrupacion_tipo_estado_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_oc_agrupacion_tipo_estado_id' ?>" >

                    <?php Lang::_lang('PdeOcAgrupacionTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=pde_oc_agrupacion_tipo_estado_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_oc_agrupacion_tipo_estado_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_oc_agrupacion_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA_CMB_EDIT_PDE_OC_AGRUPACION_TIPO_ESTADO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_oc_agrupacion_tipo_estado_id" clase_id="pde_oc_agrupacion_tipo_estado" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_oc_agrupacion_tipo_estado_id" <?php echo ($pde_oc_agrupacion->getPdeOcAgrupacionTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_oc_agrupacion_tipo_estado_id" clase_id="pde_oc_agrupacion_tipo_estado" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_oc_agrupacion_tipo_estado_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_oc_agrupacion_tipo_estado_id', Gral::getCmbFiltro(PdeOcAgrupacionTipoEstado::getPdeOcAgrupacionTipoEstadosCmb(), '...'), $pde_oc_agrupacion->getPdeOcAgrupacionTipoEstadoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_oc_agrupacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_oc_agrupacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_oc_agrupacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_oc_agrupacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_oc_agrupacion_tipo_estado_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prv_descuento_financiero_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prv_descuento_financiero_id' ?>" >

                    <?php Lang::_lang('PrvDescuentoFinanciero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=prv_descuento_financiero_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prv_descuento_financiero_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prv_descuento_financiero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA_CMB_EDIT_PRV_DESCUENTO_FINANCIERO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prv_descuento_financiero_id" clase_id="prv_descuento_financiero" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_descuento_financiero_id" <?php echo ($pde_oc_agrupacion->getPrvDescuentoFinancieroId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prv_descuento_financiero_id" clase_id="prv_descuento_financiero" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prv_descuento_financiero_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prv_descuento_financiero_id', Gral::getCmbFiltro(PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmb(), '...'), $pde_oc_agrupacion->getPrvDescuentoFinancieroId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prv_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prv_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_descuento_financiero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_descuento_financiero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_descuento_financiero_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_entrega" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_entrega' ?>" >

                    <?php Lang::_lang('Fecha Entrega', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=fecha_entrega' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_entrega" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_entrega')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_entrega' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_entrega' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_oc_agrupacion->getFechaEntrega())) ?>' size='40' />
                    <input type='button' id='cal_txt_fecha_entrega' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_entrega'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_entrega', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_entrega', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_entrega')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_vencimiento" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vencimiento' ?>" >

                    <?php Lang::_lang('Vencimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=vencimiento' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_vencimiento" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vencimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_vencimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_oc_agrupacion->getVencimiento())) ?>' size='40' />
                    <input type='button' id='cal_txt_vencimiento' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_vencimiento'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vencimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vencimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vencimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vencimiento')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_nota_publica" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >

                    <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=nota_publica' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_nota_publica" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_nota_publica' rows='10' cols='50' id='txa_nota_publica' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pde_oc_agrupacion->getNotaPublica()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_nota_interna" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nota_interna' ?>" >

                    <?php Lang::_lang('Nota Interna', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=nota_interna' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_nota_interna" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('nota_interna')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_nota_interna' rows='10' cols='50' id='txa_nota_interna' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pde_oc_agrupacion->getNotaInterna()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nota_interna', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_nota_interna', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_nota_interna', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_interna')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_oc_agrupacion_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pde_oc_agrupacion->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_oc_agrupacion->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeOcAgrupacion::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeOcAgrupacion::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($pde_oc_agrupacion->getId()) != ''){ ?>
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

