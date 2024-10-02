<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pan_panol';
$db_nombre_pagina = 'pan_panol_alta';


$pan_panol = new PanPanol();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $pan_panol = new PanPanol();
    // if(trim($hdn_id) != '') $pan_panol->setId($hdn_id, false);

    $pan_panol = PanPanol::getOxId($hdn_id);
    if(!$pan_panol){
        $pan_panol = new PanPanol();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($pan_panol){
            if(PanPanol::GEN_CONTROL_ALCANCE){
                if($pan_panol->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PanPanol&id='.$pan_panol->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA')){ 
	$pan_panol->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$pan_panol->setPanTipoPanolId(Gral::getVars(1, "cmb_pan_tipo_panol_id", null));
	$pan_panol->setPdeCentroPedidoId(Gral::getVars(1, "cmb_pde_centro_pedido_id", null));
	$pan_panol->setGeoLocalidadId(Gral::getVars(1, "cmb_geo_localidad_id", null));
	$pan_panol->setDomicilio(Gral::getVars(1, "txt_domicilio"));
	$pan_panol->setResponsable(Gral::getVars(1, "txt_responsable"));
	$pan_panol->setTelefono(Gral::getVars(1, "txt_telefono"));
	$pan_panol->setEmail(Gral::getVars(1, "txt_email"));
	$pan_panol->setCodigo(Gral::getVars(1, "txt_codigo"));
	$pan_panol->setCodigoCorto(Gral::getVars(1, "txt_codigo_corto"));
	$pan_panol->setColor(Gral::getVars(1, "txt_color"));
	$pan_panol->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $pan_panol->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $pan_panol->control();
                if(!$error->getExisteError()){
                    $pan_panol->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$pan_panol->getId().'&hash='.$pan_panol->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $pan_panol->control();
                if(!$error->getExisteError()){
                    $pan_panol->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $pan_panol->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($pan_panol){
                if(PanPanol::GEN_CONTROL_ALCANCE){
                    if($pan_panol->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PanPanol&id='.$pan_panol->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $pan_panol->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $pan_panol->setPanTipoPanolId(Gral::getVars(2, "pan_tipo_panol_id", 'null'));
            $pan_panol->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
            $pan_panol->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
            $pan_panol->setDomicilio(Gral::getVars(2, "domicilio", ''));
            $pan_panol->setResponsable(Gral::getVars(2, "responsable", ''));
            $pan_panol->setTelefono(Gral::getVars(2, "telefono", ''));
            $pan_panol->setEmail(Gral::getVars(2, "email", ''));
            $pan_panol->setCodigo(Gral::getVars(2, "codigo", ''));
            $pan_panol->setCodigoCorto(Gral::getVars(2, "codigo_corto", ''));
            $pan_panol->setColor(Gral::getVars(2, "color", ''));
            $pan_panol->setObservacion(Gral::getVars(2, "observacion", ''));
            $pan_panol->setOrden(Gral::getVars(2, "orden", 0));
            $pan_panol->setEstado(Gral::getVars(2, "estado", 0));
            $pan_panol->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $pan_panol->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $pan_panol->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $pan_panol->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PanPanol') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PanPanol::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PanPanol::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pan_panol'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($pan_panol->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_pan_tipo_panol_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_tipo_panol_id' ?>" >

                    <?php Lang::_lang('PanTipoPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=pan_tipo_panol_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_tipo_panol_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_tipo_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_PAN_TIPO_PANOL')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_tipo_panol_id" clase_id="pan_tipo_panol" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_tipo_panol_id" <?php echo ($pan_panol->getPanTipoPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_tipo_panol_id" clase_id="pan_tipo_panol" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_tipo_panol_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_tipo_panol_id', Gral::getCmbFiltro(PanTipoPanol::getPanTipoPanolsCmb(true), '...'), $pan_panol->getPanTipoPanolId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_tipo_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_tipo_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_tipo_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_tipo_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_tipo_panol_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pde_centro_pedido_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >

                    <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=pde_centro_pedido_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pde_centro_pedido_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pan_panol->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pde_centro_pedido_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(true), '...'), $pan_panol->getPdeCentroPedidoId(), 'textbox  '.$error_input_css) ?>
		

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
                        <td id="label_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>" >

                            <?php Lang::_lang('Pais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=geo_pais_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
                    			if(!Gral::esPost() and $pan_panol->getId()) $cmb_geo_pais_id = $pan_panol->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
                        $c = new Criterio(GeoPais::SES_CRITERIOS);
                        $c->add('geo_pais.x', $x, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_pais');
                        $c = GeoPais::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), '...'), $cmb_geo_pais_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="x" elemento_id="cmb_geo_pais_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_GEO_PAIS')){ ?>			
                        <div class="div_botonera_cmb_alta_editar">
                            <img class="img_btn_editar" elemento_id="cmb_geo_pais_id" clase_id="geo_pais" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />

                            <img class="img_btn_agregar_nuevo" elemento_id="cmb_geo_pais_id" clase_id="geo_pais" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                            <div class="div_modal_cmb_geo_pais_id"></div>
                        </div>
                        <?php } ?>

                            <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                            <?php } ?>   

                            <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                            <?php } ?>   

                            <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>

                        </td>
                    </tr>
                    
                    <tr>
                        <td id="label_cmb_geo_provincia_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_provincia_id' ?>" >

                            <?php Lang::_lang('Provincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=geo_provincia_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
                    			if(!Gral::esPost() and $pan_panol->getId()) $cmb_geo_provincia_id = $pan_panol->getGeoLocalidad()->getGeoProvincia()->getId();			
                        $c = new Criterio(GeoProvincia::SES_CRITERIOS);
                        $c->add('geo_provincia.geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_provincia');
                        $c = GeoProvincia::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), '...'), $cmb_geo_provincia_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>			
                        <div class="div_botonera_cmb_alta_editar">
                            <img class="img_btn_editar" elemento_id="cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />

                            <img class="img_btn_agregar_nuevo" elemento_id="cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                            <div class="div_modal_cmb_geo_provincia_id"></div>
                        </div>
                        <?php } ?>

                            <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                            <?php } ?>   

                            <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                            <?php } ?>   

                            <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>

                        </td>
                    </tr>
                    
                    <tr>
                        <td id="label_cmb_geo_localidad_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_localidad_id' ?>" >

                            <?php Lang::_lang('Localidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=geo_localidad_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_localidad_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
                    			if(!Gral::esPost() and $pan_panol->getId()) $cmb_geo_localidad_id = $pan_panol->getGeoLocalidad()->getId();			
                        $c = new Criterio(GeoLocalidad::SES_CRITERIOS);
                        $c->add('geo_localidad.geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_localidad');
                        $c = GeoLocalidad::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c), '...'), $cmb_geo_localidad_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>			
                        <div class="div_botonera_cmb_alta_editar">
                            <img class="img_btn_editar" elemento_id="cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_localidad_id" <?php echo ($cmb_geo_localidad_id == '') ? "style='display:none;'" : '' ?> />

                            <img class="img_btn_agregar_nuevo" elemento_id="cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                            <div class="div_modal_cmb_geo_localidad_id"></div>
                        </div>
                        <?php } ?>

                            <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                            <?php } ?>   

                            <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                            <?php } ?>   

                            <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>

                        </td>
                    </tr>
                    
            <tr>
                <td id="label_txt_domicilio" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio' ?>" >

                    <?php Lang::_lang('Domicilio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=domicilio' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_domicilio" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('domicilio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_domicilio' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_domicilio' value='<?php Gral::_echoTxt($pan_panol->getDomicilio()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_domicilio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_domicilio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_responsable" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_responsable' ?>" >

                    <?php Lang::_lang('Responsable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=responsable' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_responsable" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('responsable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_responsable' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_responsable' value='<?php Gral::_echoTxt($pan_panol->getResponsable()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_responsable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_responsable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_responsable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_responsable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('responsable')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_telefono" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >

                    <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=telefono' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_telefono" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_telefono' value='<?php Gral::_echoTxt($pan_panol->getTelefono()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_email" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >

                    <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=email' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_email" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_email' value='<?php Gral::_echoTxt($pan_panol->getEmail()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($pan_panol->getCodigo()) ?>' size='40' />

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
                <td id="label_txt_codigo_corto" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_corto' ?>" >

                    <?php Lang::_lang('Codigo Corto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=codigo_corto' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo_corto" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo_corto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo_corto' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo_corto' value='<?php Gral::_echoTxt($pan_panol->getCodigoCorto()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_corto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_corto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_corto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_corto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_corto')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_color" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >

                    <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=color' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_color" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_color' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_color' value='<?php Gral::_echoTxt($pan_panol->getColor()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pan_panol_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pan_panol->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pan_panol->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($pan_panol->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PanPanol::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PanPanol::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($pan_panol->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/pan_panol/bloque_relacion_gral_sucursal_pan_panol.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/pan_panol/bloque_relacion_pan_panol_us_usuario.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/pan_panol/bloque_relacion_pde_centro_recepcion_pan_panol.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'pan_panol_set.php' ?>
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

