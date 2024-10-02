<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo';
$db_nombre_pagina = 'ins_insumo_alta';


$ins_insumo = new InsInsumo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $ins_insumo = new InsInsumo();
    // if(trim($hdn_id) != '') $ins_insumo->setId($hdn_id, false);

    $ins_insumo = InsInsumo::getOxId($hdn_id);
    if(!$ins_insumo){
        $ins_insumo = new InsInsumo();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($ins_insumo){
            if(InsInsumo::GEN_CONTROL_ALCANCE){
                if($ins_insumo->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=InsInsumo&id='.$ins_insumo->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){ 
	$ins_insumo->setInsCategoriaId(Gral::getVars(1, "cmb_ins_categoria_id", null));
	$ins_insumo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$ins_insumo->setInsMarcaId(Gral::getVars(1, "cmb_ins_marca_id", null));
	$ins_insumo->setCodigoInterno(Gral::getVars(1, "txt_codigo_interno"));
	$ins_insumo->setInsTipoInsumoId(Gral::getVars(1, "cmb_ins_tipo_insumo_id", null));
	$ins_insumo->setNotasInternas(Gral::getVars(1, "txa_notas_internas"));
	$ins_insumo->setObservacion(Gral::getVars(1, "txa_observacion"));
	$ins_insumo->setDatosMigracion(Gral::getVars(1, "txa_datos_migracion"));
    }
    if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_AVANZADA')){ 
	$ins_insumo->setDescripcionCorta(Gral::getVars(1, "txt_descripcion_corta"));
	$ins_insumo->setCodigoBarra(Gral::getVars(1, "txt_codigo_barra"));
	$ins_insumo->setInsUnidadMedidaId(Gral::getVars(1, "cmb_ins_unidad_medida_id", null));
	$ins_insumo->setEsComprable(Gral::getVars(1, "cmb_es_comprable", 0));
	$ins_insumo->setEsConsumible(Gral::getVars(1, "cmb_es_consumible", 0));
	$ins_insumo->setEsVendible(Gral::getVars(1, "cmb_es_vendible", 0));
	$ins_insumo->setControlStock(Gral::getVars(1, "cmb_control_stock", 0));
	$ins_insumo->setGralTipoIvaVenta(Gral::getVars(1, "cmb_gral_tipo_iva_venta", null));
	$ins_insumo->setGralTipoIvaVentaZ(Gral::getVars(1, "cmb_gral_tipo_iva_venta_z", null));
	$ins_insumo->setGralTipoIvaCompra(Gral::getVars(1, "cmb_gral_tipo_iva_compra", null));
	$ins_insumo->setGralTipoIvaCompraZ(Gral::getVars(1, "cmb_gral_tipo_iva_compra_z", null));
    }
    

	if($hdn_id == 0){
            $ins_insumo->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $ins_insumo->control();
                if(!$error->getExisteError()){
                    $ins_insumo->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$ins_insumo->getId().'&hash='.$ins_insumo->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $ins_insumo->control();
                if(!$error->getExisteError()){
                    $ins_insumo->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $ins_insumo->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($ins_insumo){
                if(InsInsumo::GEN_CONTROL_ALCANCE){
                    if($ins_insumo->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=InsInsumo&id='.$ins_insumo->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $ins_insumo->setInsCategoriaId(Gral::getVars(2, "ins_categoria_id", 'null'));
            $ins_insumo->setInsMatrizId(Gral::getVars(2, "ins_matriz_id", 'null'));
            $ins_insumo->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $ins_insumo->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
            $ins_insumo->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
            $ins_insumo->setDescripcionWeb(Gral::getVars(2, "descripcion_web", ''));
            $ins_insumo->setCodigo(Gral::getVars(2, "codigo", ''));
            $ins_insumo->setCodigoMarca(Gral::getVars(2, "codigo_marca", ''));
            $ins_insumo->setCodigoInterno(Gral::getVars(2, "codigo_interno", ''));
            $ins_insumo->setCodigoImportacion(Gral::getVars(2, "codigo_importacion", ''));
            $ins_insumo->setCodigoBarra(Gral::getVars(2, "codigo_barra", ''));
            $ins_insumo->setCodigoBarraInterno(Gral::getVars(2, "codigo_barra_interno", ''));
            $ins_insumo->setUrlTienda(Gral::getVars(2, "url_tienda", ''));
            $ins_insumo->setInsUnidadMedidaId(Gral::getVars(2, "ins_unidad_medida_id", 'null'));
            $ins_insumo->setEsComprable(Gral::getVars(2, "es_comprable", 0));
            $ins_insumo->setEsConsumible(Gral::getVars(2, "es_consumible", 0));
            $ins_insumo->setEsVendible(Gral::getVars(2, "es_vendible", 0));
            $ins_insumo->setEsFabricable(Gral::getVars(2, "es_fabricable", 0));
            $ins_insumo->setEsTransformableOrigen(Gral::getVars(2, "es_transformable_origen", 0));
            $ins_insumo->setEsTransformableDestino(Gral::getVars(2, "es_transformable_destino", 0));
            $ins_insumo->setInsUnidadMedidaPedidoId(Gral::getVars(2, "ins_unidad_medida_pedido_id", 'null'));
            $ins_insumo->setInsTipoConsumoId(Gral::getVars(2, "ins_tipo_consumo_id", 'null'));
            $ins_insumo->setRetornable(Gral::getVars(2, "retornable", 0));
            $ins_insumo->setIdentificable(Gral::getVars(2, "identificable", 0));
            $ins_insumo->setControlStock(Gral::getVars(2, "control_stock", 0));
            $ins_insumo->setPuntoMinimo(Gral::getVars(2, "punto_minimo", 0));
            $ins_insumo->setPuntoPedido(Gral::getVars(2, "punto_pedido", 0));
            $ins_insumo->setPuntoMaximo(Gral::getVars(2, "punto_maximo", 0));
            $ins_insumo->setCantidadMaximaPedido(Gral::getVars(2, "cantidad_maxima_pedido", 0));
            $ins_insumo->setInsTipoNecesidadId(Gral::getVars(2, "ins_tipo_necesidad_id", 'null'));
            $ins_insumo->setInsNivelAprovisionamientoId(Gral::getVars(2, "ins_nivel_aprovisionamiento_id", 'null'));
            $ins_insumo->setHeredaMarcas(Gral::getVars(2, "hereda_marcas", 0));
            $ins_insumo->setVentaWeb(Gral::getVars(2, "venta_web", 0));
            $ins_insumo->setVentaMercadolibre(Gral::getVars(2, "venta_mercadolibre", 0));
            $ins_insumo->setVentaMayorista(Gral::getVars(2, "venta_mayorista", 0));
            $ins_insumo->setGralTipoIvaVenta(Gral::getVars(2, "gral_tipo_iva_venta", 'null'));
            $ins_insumo->setGralTipoIvaVentaZ(Gral::getVars(2, "gral_tipo_iva_venta_z", 'null'));
            $ins_insumo->setGralTipoIvaCompra(Gral::getVars(2, "gral_tipo_iva_compra", 'null'));
            $ins_insumo->setGralTipoIvaCompraZ(Gral::getVars(2, "gral_tipo_iva_compra_z", 'null'));
            $ins_insumo->setProporcionIva(Gral::getVars(2, "proporcion_iva", 100));
            $ins_insumo->setInsTipoInsumoId(Gral::getVars(2, "ins_tipo_insumo_id", 'null'));
            $ins_insumo->setInsTipoFabricanteId(Gral::getVars(2, "ins_tipo_fabricante_id", 'null'));
            $ins_insumo->setNotasInternas(Gral::getVars(2, "notas_internas", ''));
            $ins_insumo->setObservacion(Gral::getVars(2, "observacion", ''));
            $ins_insumo->setDatosMigracion(Gral::getVars(2, "datos_migracion", ''));
            $ins_insumo->setClaves(Gral::getVars(2, "claves", ''));
            $ins_insumo->setClavesAtributos(Gral::getVars(2, "claves_atributos", ''));
            $ins_insumo->setClavesTienda(Gral::getVars(2, "claves_tienda", ''));
            $ins_insumo->setOrden(Gral::getVars(2, "orden", 0));
            $ins_insumo->setEstado(Gral::getVars(2, "estado", 0));
            $ins_insumo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $ins_insumo->setCreadoPor(Gral::getVars(2, "creado_por", null));
            $ins_insumo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $ins_insumo->setModificadoPor(Gral::getVars(2, "modificado_por", null));
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
    <form id='formu' name='formu' method='post' action='' modulo='ins_insumo' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('InsInsumos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsInsumo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsInsumo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ins_insumo'>
        
            <tr>
                <td id="label_cmb_ins_categoria_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_categoria_id' ?>" >

                    <?php Lang::_lang('InsCategoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=ins_categoria_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_categoria_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_categoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_CATEGORIA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_categoria_id" clase_id="ins_categoria" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_categoria_id" <?php echo ($ins_insumo->getInsCategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_categoria_id" clase_id="ins_categoria" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_categoria_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $ins_insumo->getInsCategoriaId(), 'textbox selective-input-edit '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_categoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_categoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_categoria_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_categoria_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_categoria_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($ins_insumo->getDescripcion()) ?>' size='60' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ins_marca_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_id' ?>" >

                    <?php Lang::_lang('InsMarca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=ins_marca_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_marca_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_MARCA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_marca_id" clase_id="ins_marca" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($ins_insumo->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_marca_id" clase_id="ins_marca" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_marca_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(true), '...'), $ins_insumo->getInsMarcaId(), 'textbox selective-input-edit '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_marca_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_marca_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo_interno" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_interno' ?>" >

                    <?php Lang::_lang('Codigo Interno', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=codigo_interno' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo_interno" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo_interno')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo_interno' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo_interno' value='<?php Gral::_echoTxt($ins_insumo->getCodigoInterno()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_interno', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_interno', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_interno', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_interno', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_interno')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_codigo_interno_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_codigo_interno_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ins_tipo_insumo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_tipo_insumo_id' ?>" >

                    <?php Lang::_lang('InsTipoInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=ins_tipo_insumo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_tipo_insumo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_tipo_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_TIPO_INSUMO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_tipo_insumo_id" clase_id="ins_tipo_insumo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_tipo_insumo_id" <?php echo ($ins_insumo->getInsTipoInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_tipo_insumo_id" clase_id="ins_tipo_insumo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_tipo_insumo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(true), '...'), $ins_insumo->getInsTipoInsumoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_tipo_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_tipo_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_tipo_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_tipo_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_tipo_insumo_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_tipo_insumo_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_tipo_insumo_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_notas_internas" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_notas_internas' ?>" >

                    <?php Lang::_lang('Notas Internas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=notas_internas' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_notas_internas" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('notas_internas')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_notas_internas' rows='3' cols='50' id='txa_notas_internas' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ins_insumo->getNotasInternas()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_notas_internas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_notas_internas', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_notas_internas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_notas_internas', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('notas_internas')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_notas_internas_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_notas_internas_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ins_insumo->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_datos_migracion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_datos_migracion' ?>" >

                    <?php Lang::_lang('Datos Migracion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=datos_migracion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_datos_migracion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('datos_migracion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_datos_migracion' rows='3' cols='50' id='txa_datos_migracion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ins_insumo->getDatosMigracion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_datos_migracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_datos_migracion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_datos_migracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_datos_migracion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('datos_migracion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_datos_migracion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_datos_migracion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_AVANZADA')){ ?>

        <div class="titulo av"><?php Lang::_lang('Info Avanzada', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ins_insumo'>
        
            <tr>
                <td id="label_txt_descripcion_corta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >

                    <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=descripcion_corta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion_corta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion_corta' value='<?php Gral::_echoTxt($ins_insumo->getDescripcionCorta()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_descripcion_corta_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_descripcion_corta_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo_barra" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_barra' ?>" >

                    <?php Lang::_lang('Codigo Barra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=codigo_barra' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo_barra" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo_barra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo_barra' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo_barra' value='<?php Gral::_echoTxt($ins_insumo->getCodigoBarra()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_barra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_barra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_barra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_barra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_barra')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_codigo_barra_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_codigo_barra_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ins_unidad_medida_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_unidad_medida_id' ?>" >

                    <?php Lang::_lang('Unidad Medida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=ins_unidad_medida_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_unidad_medida_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_UNIDAD_MEDIDA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_unidad_medida_id" <?php echo ($ins_insumo->getInsUnidadMedidaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_unidad_medida_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(true), '...'), $ins_insumo->getInsUnidadMedidaId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_unidad_medida_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_ins_unidad_medida_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_es_comprable" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_es_comprable' ?>" >

                    <?php Lang::_lang('Es Comprable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=es_comprable' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_es_comprable" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('es_comprable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_es_comprable', GralSiNo::getGralSiNosCmb(), $ins_insumo->getEsComprable(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_es_comprable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_es_comprable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_es_comprable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_es_comprable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_comprable')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_es_comprable_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_es_comprable_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_es_consumible" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_es_consumible' ?>" >

                    <?php Lang::_lang('Es Consumible', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=es_consumible' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_es_consumible" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('es_consumible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_es_consumible', GralSiNo::getGralSiNosCmb(), $ins_insumo->getEsConsumible(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_es_consumible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_es_consumible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_es_consumible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_es_consumible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_consumible')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_es_consumible_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_es_consumible_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_es_vendible" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_es_vendible' ?>" >

                    <?php Lang::_lang('Es Vendible', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=es_vendible' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_es_vendible" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('es_vendible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_es_vendible', GralSiNo::getGralSiNosCmb(), $ins_insumo->getEsVendible(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_es_vendible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_es_vendible', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_es_vendible', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_es_vendible', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_vendible')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_es_vendible_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_es_vendible_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_control_stock" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_control_stock' ?>" >

                    <?php Lang::_lang('Control Stock', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=control_stock' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_control_stock" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('control_stock')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_control_stock', GralSiNo::getGralSiNosCmb(), $ins_insumo->getControlStock(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_control_stock', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_control_stock', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_control_stock', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_control_stock', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('control_stock')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_control_stock_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_control_stock_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_tipo_iva_venta" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_venta' ?>" >

                    <?php Lang::_lang('GralTipoIvaVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=gral_tipo_iva_venta' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_tipo_iva_venta" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_venta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_venta', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(true), '...'), $ins_insumo->getGralTipoIvaVenta(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_venta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_venta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_venta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_venta')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_venta_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_venta_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_tipo_iva_venta_z" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_venta_z' ?>" >

                    <?php Lang::_lang('GralTipoIvaVentaZ', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=gral_tipo_iva_venta_z' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_tipo_iva_venta_z" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_venta_z')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_venta_z', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(true), '...'), $ins_insumo->getGralTipoIvaVentaZ(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_venta_z', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_venta_z', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_venta_z', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_venta_z', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_venta_z')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_venta_z_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_venta_z_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_tipo_iva_compra" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_compra' ?>" >

                    <?php Lang::_lang('GralTipoIvaCompra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=gral_tipo_iva_compra' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_tipo_iva_compra" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_compra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_compra', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(true), '...'), $ins_insumo->getGralTipoIvaCompra(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_compra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_compra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_compra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_compra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_compra')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_compra_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_compra_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_tipo_iva_compra_z" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_iva_compra_z' ?>" >

                    <?php Lang::_lang('GralTipoIvaCompraZ', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_alta&atributo=gral_tipo_iva_compra_z' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_tipo_iva_compra_z" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_iva_compra_z')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_compra_z', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(true), '...'), $ins_insumo->getGralTipoIvaCompraZ(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_compra_z', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_iva_compra_z', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_compra_z', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_iva_compra_z', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_iva_compra_z')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_compra_z_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/ins_insumo_alta_campo_gral_tipo_iva_compra_z_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($ins_insumo->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsInsumo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsInsumo::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($ins_insumo->getId()) != ''){ ?>
    <div class="alta relaciones">
		
        <div class="imagenes">
            <div class="titulo"><?php Lang::_lang('InsInsumoImagens') ?></div>
            <div class="datos">
                <?php
                $imagenes = $ins_insumo->getInsInsumoImagens();
                if(count($imagenes) > 0){ 
                ?>
                    <div class="imagen <?php echo (count($imagenes) > 3) ? 'slide' : '' ?>">
                        <?php foreach($imagenes as $imagen){ ?>
                            <a href="<?php echo $imagen->getPathImagen() ?>" rel="ins_insumo_<?php echo $ins_insumo->getId() ?>" title="<?php echo $imagen->getDescripcion() ?>">
                                <img class="imagen" src="<?php echo $imagen->getPathImagen(true) ?>" width="120" alt="imagen" />
                            </a>
                        <?php } ?>
                    </div>
                <?php }else{ ?>
                    <div class="comentario"><?php Lang::_lang('No existen aun imagenes cargadas') ?></div>
                <?php } ?>
            </div>
            <div class="link"><a href='ins_insumo_imagen_gestor.php?id=<?php echo $ins_insumo->getId() ?>'><?php Lang::_lang('Ir al Gestor de Imagenes') ?></a></div>
        </div>
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/bloque_relacion_ins_insumo_prv_proveedor.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/bloque_relacion_ins_insumo_composicion.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/bloque_relacion_ins_lista_precio.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/bloque_relacion_ins_insumo_ins_etiqueta.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/bloque_relacion_ins_insumo_ins_atributo.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/bloque_relacion_vta_politica_descuento_ins_insumo.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo/bloque_vinculo_ins_insumo_bulto.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'ins_insumo_set.php' ?>
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

