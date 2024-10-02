<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PAN_PANOL_ALTA')){
    echo "No tiene asignada la credencial PAN_PANOL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pan_panol';
$db_nombre_pagina = 'pan_panol_alta';

$pan_panol = new PanPanol();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pan_panol = new PanPanol();
	if(trim($hdn_id) != '') $pan_panol->setId($hdn_id, false);
	$pan_panol->setDescripcion(Gral::getVars(1, "pan_panol_txt_descripcion"));
	$pan_panol->setPanTipoPanolId(Gral::getVars(1, "pan_panol_cmb_pan_tipo_panol_id", null));
	$pan_panol->setPdeCentroPedidoId(Gral::getVars(1, "pan_panol_cmb_pde_centro_pedido_id", null));
	$pan_panol->setGeoLocalidadId(Gral::getVars(1, "pan_panol_cmb_geo_localidad_id", null));
	$pan_panol->setDomicilio(Gral::getVars(1, "pan_panol_txt_domicilio"));
	$pan_panol->setResponsable(Gral::getVars(1, "pan_panol_txt_responsable"));
	$pan_panol->setTelefono(Gral::getVars(1, "pan_panol_txt_telefono"));
	$pan_panol->setEmail(Gral::getVars(1, "pan_panol_txt_email"));
	$pan_panol->setCodigo(Gral::getVars(1, "pan_panol_txt_codigo"));
	$pan_panol->setCodigoCorto(Gral::getVars(1, "pan_panol_txt_codigo_corto"));
	$pan_panol->setColor(Gral::getVars(1, "pan_panol_txt_color"));
	$pan_panol->setObservacion(Gral::getVars(1, "pan_panol_txa_observacion"));
	$pan_panol->setOrden(Gral::getVars(1, "pan_panol_txt_orden", 0));
	$pan_panol->setEstado(Gral::getVars(1, "pan_panol__estado", 0));
	$pan_panol->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pan_panol_txt_creado")));
	$pan_panol->setCreadoPor(Gral::getVars(1, "pan_panol__creado_por", null));
	$pan_panol->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pan_panol_txt_modificado")));
	$pan_panol->setModificadoPor(Gral::getVars(1, "pan_panol__modificado_por", null));

	$pan_panol_estado = new PanPanol();
	if(trim($hdn_id) != ''){
		$pan_panol_estado->setId($hdn_id);
		$pan_panol->setEstado($pan_panol_estado->getEstado());
				
	}else{
		$pan_panol->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pan_panol->control();
			if(!$error->getExisteError()){
				$pan_panol->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pan_panol_alta.php?cs=1&id='.$pan_panol->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pan_panol->control();
			if(!$error->getExisteError()){
				$pan_panol->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pan_panol_alta.php?cs=1');
				$pan_panol = new PanPanol();
			}
		break;
	}
	Gral::setSes('PanPanol_ULTIMO_INSERTADO', $pan_panol->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pan_panol_id = Gral::getVars(2, $prefijo.'cmb_pan_panol_id', 0);
	if($cmb_pan_panol_id != 0){
		$pan_panol = PanPanol::getOxId($cmb_pan_panol_id);
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

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pan_panol->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pan_panol/pan_panol_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pan_panol' width='90%'>
        
				<tr>
				  <td  id="label_pan_panol_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_descripcion' value='<?php Gral::_echoTxt($pan_panol->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_cmb_pan_tipo_panol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_tipo_panol_id' ?>" >
				  
                                        <?php Lang::_lang('PanTipoPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_cmb_pan_tipo_panol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_tipo_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pan_panol_cmb_pan_tipo_panol_id', Gral::getCmbFiltro(PanTipoPanol::getPanTipoPanolsCmb(), '...'), $pan_panol->getPanTipoPanolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_PAN_TIPO_PANOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pan_panol_cmb_pan_tipo_panol_id" clase_id="pan_tipo_panol" prefijo='pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_tipo_panol_id" <?php echo ($pan_panol->getPanTipoPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pan_panol_cmb_pan_tipo_panol_id" clase_id="pan_tipo_panol" prefijo='pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pan_panol_cmb_pan_tipo_panol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pan_panol_alta_pan_tipo_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_pan_tipo_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_pan_tipo_panol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_pan_tipo_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_tipo_panol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_cmb_pde_centro_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_cmb_pde_centro_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pan_panol_cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pan_panol->getPdeCentroPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pan_panol_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pan_panol->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pan_panol_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pan_panol_cmb_pde_centro_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pan_panol_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
                    <tr>
                      <td id="label_pan_panol_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>">

                        <?php Lang::_lang('Pais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_pan_panol_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
					if(!Gral::esPost() and $pan_panol->getId()) $cmb_geo_pais_id = $pan_panol->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
					$c = new Criterio(GeoPais::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_pais');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'pan_panol_cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), Lang::_lang('Seleccione Pais', true)), $cmb_geo_pais_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="pan_panol_x" elemento_id="cmb_geo_pais_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="pan_panol_cmb_geo_pais_id" clase_id="geo_pais" prefijo='pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="pan_panol_cmb_geo_pais_id" clase_id="geo_pais" prefijo='pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_pan_panol_cmb_geo_pais_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_pan_panol_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_pan_panol_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_pan_panol_cmb_geo_provincia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_provincia_id' ?>">

                        <?php Lang::_lang('Provincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_pan_panol_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
					if(!Gral::esPost() and $pan_panol->getId()) $cmb_geo_provincia_id = $pan_panol->getGeoLocalidad()->getGeoProvincia()->getId();			
					$c = new Criterio(GeoProvincia::SES_CRITERIOS);
					$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_provincia');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'pan_panol_cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), Lang::_lang('Seleccione Provincia', true)), $cmb_geo_provincia_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="pan_panol_cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="pan_panol_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="pan_panol_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_pan_panol_cmb_geo_provincia_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_pan_panol_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_pan_panol_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_pan_panol_cmb_geo_localidad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_localidad_id' ?>">

                        <?php Lang::_lang('Localidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_pan_panol_cmb_geo_localidad_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
					if(!Gral::esPost() and $pan_panol->getId()) $cmb_geo_localidad_id = $pan_panol->getGeoLocalidad()->getId();			
					$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
					$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_localidad');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'pan_panol_cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c), Lang::_lang('Seleccione Localidad', true)), $cmb_geo_localidad_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="pan_panol_cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="pan_panol_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_localidad_id" <?php echo ($cmb_geo_localidad_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="pan_panol_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_pan_panol_cmb_geo_localidad_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_pan_panol_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_pan_panol_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_pan_panol_txt_domicilio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio' ?>" >
				  
                                        <?php Lang::_lang('Domicilio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_domicilio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_domicilio' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_domicilio' value='<?php Gral::_echoTxt($pan_panol->getDomicilio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_txt_responsable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_responsable' ?>" >
				  
                                        <?php Lang::_lang('Responsable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_responsable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('responsable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_responsable' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_responsable' value='<?php Gral::_echoTxt($pan_panol->getResponsable(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_responsable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_responsable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_responsable', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_responsable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('responsable')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_telefono' value='<?php Gral::_echoTxt($pan_panol->getTelefono(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_email' value='<?php Gral::_echoTxt($pan_panol->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_codigo' value='<?php Gral::_echoTxt($pan_panol->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_txt_codigo_corto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_corto' ?>" >
				  
                                        <?php Lang::_lang('Codigo Corto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_codigo_corto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_corto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_codigo_corto' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_codigo_corto' value='<?php Gral::_echoTxt($pan_panol->getCodigoCorto(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_codigo_corto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_codigo_corto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_codigo_corto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_codigo_corto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_corto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_txt_color" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >
				  
                                        <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txt_color" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pan_panol_txt_color' type='text' class='textbox <?php echo $error_input_css ?> ' id='pan_panol_txt_color' value='<?php Gral::_echoTxt($pan_panol->getColor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pan_panol_alta_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_color', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pan_panol_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pan_panol_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pan_panol_txa_observacion' rows='10' cols='50' id='pan_panol_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pan_panol->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pan_panol_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pan_panol_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pan_panol_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pan_panol_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pan_panol->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pan_panol_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pan_panol'/>
                    <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />
			  
	
                    <input name='btn_guardarnvo' type='button' class='btn_guardarnvo' value="<?php Lang::_lang('Guardar y Agregar Nuevo') ?>" />
                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
                </td>
            </tr>
      </table>
      
	  
</form>
</body>
</html>
<script>
    setInit();
    setInitDbSuggest();
    setInitDbContext();
</script>

