<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA')){
    echo "No tiene asignada la credencial VTA_PUNTO_VENTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_punto_venta';
$db_nombre_pagina = 'vta_punto_venta_alta';

$vta_punto_venta = new VtaPuntoVenta();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_punto_venta = new VtaPuntoVenta();
	if(trim($hdn_id) != '') $vta_punto_venta->setId($hdn_id, false);
	$vta_punto_venta->setDescripcion(Gral::getVars(1, "vta_punto_venta_txt_descripcion"));
	$vta_punto_venta->setVtaTipoPuntoVentaId(Gral::getVars(1, "vta_punto_venta_cmb_vta_tipo_punto_venta_id", null));
	$vta_punto_venta->setGralEmpresaId(Gral::getVars(1, "vta_punto_venta_cmb_gral_empresa_id", null));
	$vta_punto_venta->setGeoLocalidadId(Gral::getVars(1, "vta_punto_venta_cmb_geo_localidad_id", null));
	$vta_punto_venta->setDomicilioFiscal(Gral::getVars(1, "vta_punto_venta_txt_domicilio_fiscal"));
	$vta_punto_venta->setCodigo(Gral::getVars(1, "vta_punto_venta_txt_codigo"));
	$vta_punto_venta->setNumero(Gral::getVars(1, "vta_punto_venta_txt_numero"));
	$vta_punto_venta->setNumeroTimbrado(Gral::getVars(1, "vta_punto_venta_txt_numero_timbrado"));
	$vta_punto_venta->setFechaInicioTimbrado(Gral::getFechaToDb(Gral::getVars(1, "vta_punto_venta_txt_fecha_inicio_timbrado")));
	$vta_punto_venta->setSerie(Gral::getVars(1, "vta_punto_venta_txt_serie"));
	$vta_punto_venta->setNumeroActual(Gral::getVars(1, "vta_punto_venta_txt_numero_actual", 0));
	$vta_punto_venta->setTipoEmision(Gral::getVars(1, "vta_punto_venta_txt_tipo_emision"));
	$vta_punto_venta->setBloqueado(Gral::getVars(1, "vta_punto_venta_txt_bloqueado"));
	$vta_punto_venta->setFechaBaja(Gral::getVars(1, "vta_punto_venta_txt_fecha_baja"));
	$vta_punto_venta->setRequiereCae(Gral::getVars(1, "vta_punto_venta_cmb_requiere_cae", 0));
	$vta_punto_venta->setSolicitaCae(Gral::getVars(1, "vta_punto_venta_cmb_solicita_cae", 0));
	$vta_punto_venta->setAutoincremental(Gral::getVars(1, "vta_punto_venta_cmb_autoincremental", 0));
	$vta_punto_venta->setObservacion(Gral::getVars(1, "vta_punto_venta_txa_observacion"));
	$vta_punto_venta->setOrden(Gral::getVars(1, "vta_punto_venta_txt_orden", 0));
	$vta_punto_venta->setEstado(Gral::getVars(1, "vta_punto_venta__estado", 0));
	$vta_punto_venta->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_punto_venta_txt_creado")));
	$vta_punto_venta->setCreadoPor(Gral::getVars(1, "vta_punto_venta__creado_por", null));
	$vta_punto_venta->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_punto_venta_txt_modificado")));
	$vta_punto_venta->setModificadoPor(Gral::getVars(1, "vta_punto_venta__modificado_por", null));

	$vta_punto_venta_estado = new VtaPuntoVenta();
	if(trim($hdn_id) != ''){
		$vta_punto_venta_estado->setId($hdn_id);
		$vta_punto_venta->setEstado($vta_punto_venta_estado->getEstado());
				
	}else{
		$vta_punto_venta->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_punto_venta->control();
			if(!$error->getExisteError()){
				$vta_punto_venta->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_punto_venta_alta.php?cs=1&id='.$vta_punto_venta->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_punto_venta->control();
			if(!$error->getExisteError()){
				$vta_punto_venta->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_punto_venta_alta.php?cs=1');
				$vta_punto_venta = new VtaPuntoVenta();
			}
		break;
	}
	Gral::setSes('VtaPuntoVenta_ULTIMO_INSERTADO', $vta_punto_venta->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_punto_venta_id = Gral::getVars(2, $prefijo.'cmb_vta_punto_venta_id', 0);
	if($cmb_vta_punto_venta_id != 0){
		$vta_punto_venta = VtaPuntoVenta::getOxId($cmb_vta_punto_venta_id);
	}else{
	
	$vta_punto_venta->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_punto_venta->setVtaTipoPuntoVentaId(Gral::getVars(2, "vta_tipo_punto_venta_id", 'null'));
	$vta_punto_venta->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$vta_punto_venta->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
	$vta_punto_venta->setDomicilioFiscal(Gral::getVars(2, "domicilio_fiscal", ''));
	$vta_punto_venta->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_punto_venta->setNumero(Gral::getVars(2, "numero", ''));
	$vta_punto_venta->setNumeroTimbrado(Gral::getVars(2, "numero_timbrado", ''));
	$vta_punto_venta->setFechaInicioTimbrado(Gral::getVars(2, "fecha_inicio_timbrado", date('Y-m-d')));
	$vta_punto_venta->setSerie(Gral::getVars(2, "serie", ''));
	$vta_punto_venta->setNumeroActual(Gral::getVars(2, "numero_actual", 0));
	$vta_punto_venta->setTipoEmision(Gral::getVars(2, "tipo_emision", ''));
	$vta_punto_venta->setBloqueado(Gral::getVars(2, "bloqueado", ''));
	$vta_punto_venta->setFechaBaja(Gral::getVars(2, "fecha_baja", ''));
	$vta_punto_venta->setRequiereCae(Gral::getVars(2, "requiere_cae", 0));
	$vta_punto_venta->setSolicitaCae(Gral::getVars(2, "solicita_cae", 0));
	$vta_punto_venta->setAutoincremental(Gral::getVars(2, "autoincremental", 0));
	$vta_punto_venta->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_punto_venta->setOrden(Gral::getVars(2, "orden", 0));
	$vta_punto_venta->setEstado(Gral::getVars(2, "estado", 0));
	$vta_punto_venta->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_punto_venta->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_punto_venta->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_punto_venta->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_punto_venta->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_punto_venta/vta_punto_venta_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_punto_venta' width='90%'>
        
				<tr>
				  <td  id="label_vta_punto_venta_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_punto_venta_txt_descripcion' value='<?php Gral::_echoTxt($vta_punto_venta->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_cmb_vta_tipo_punto_venta_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_tipo_punto_venta_id' ?>" >
				  
                                        <?php Lang::_lang('VtaTipoPuntoVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_cmb_vta_tipo_punto_venta_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_tipo_punto_venta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_vta_tipo_punto_venta_id', Gral::getCmbFiltro(VtaTipoPuntoVenta::getVtaTipoPuntoVentasCmb(), '...'), $vta_punto_venta->getVtaTipoPuntoVentaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_CMB_EDIT_VTA_TIPO_PUNTO_VENTA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_punto_venta_cmb_vta_tipo_punto_venta_id" clase_id="vta_tipo_punto_venta" prefijo='vta_punto_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_tipo_punto_venta_id" <?php echo ($vta_punto_venta->getVtaTipoPuntoVentaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_punto_venta_cmb_vta_tipo_punto_venta_id" clase_id="vta_tipo_punto_venta" prefijo='vta_punto_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_punto_venta_cmb_vta_tipo_punto_venta_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_vta_tipo_punto_venta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_vta_tipo_punto_venta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_vta_tipo_punto_venta_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_vta_tipo_punto_venta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_tipo_punto_venta_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $vta_punto_venta->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_punto_venta_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='vta_punto_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($vta_punto_venta->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_punto_venta_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='vta_punto_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_punto_venta_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
                    <tr>
                      <td id="label_vta_punto_venta_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>">

                        <?php Lang::_lang('Pais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_vta_punto_venta_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
					if(!Gral::esPost() and $vta_punto_venta->getId()) $cmb_geo_pais_id = $vta_punto_venta->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
					$c = new Criterio(GeoPais::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_pais');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), Lang::_lang('Seleccione Pais', true)), $cmb_geo_pais_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="vta_punto_venta_x" elemento_id="cmb_geo_pais_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="vta_punto_venta_cmb_geo_pais_id" clase_id="geo_pais" prefijo='vta_punto_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="vta_punto_venta_cmb_geo_pais_id" clase_id="geo_pais" prefijo='vta_punto_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_vta_punto_venta_cmb_geo_pais_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_vta_punto_venta_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_vta_punto_venta_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_vta_punto_venta_cmb_geo_provincia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_provincia_id' ?>">

                        <?php Lang::_lang('Provincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_vta_punto_venta_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
					if(!Gral::esPost() and $vta_punto_venta->getId()) $cmb_geo_provincia_id = $vta_punto_venta->getGeoLocalidad()->getGeoProvincia()->getId();			
					$c = new Criterio(GeoProvincia::SES_CRITERIOS);
					$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_provincia');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), Lang::_lang('Seleccione Provincia', true)), $cmb_geo_provincia_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="vta_punto_venta_cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="vta_punto_venta_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='vta_punto_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="vta_punto_venta_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='vta_punto_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_vta_punto_venta_cmb_geo_provincia_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_vta_punto_venta_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_vta_punto_venta_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_vta_punto_venta_cmb_geo_localidad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_localidad_id' ?>">

                        <?php Lang::_lang('Localidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_vta_punto_venta_cmb_geo_localidad_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
					if(!Gral::esPost() and $vta_punto_venta->getId()) $cmb_geo_localidad_id = $vta_punto_venta->getGeoLocalidad()->getId();			
					$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
					$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_localidad');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c), Lang::_lang('Seleccione Localidad', true)), $cmb_geo_localidad_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="vta_punto_venta_cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="vta_punto_venta_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='vta_punto_venta_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_localidad_id" <?php echo ($cmb_geo_localidad_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="vta_punto_venta_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='vta_punto_venta_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_vta_punto_venta_cmb_geo_localidad_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_vta_punto_venta_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_vta_punto_venta_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_vta_punto_venta_txt_domicilio_fiscal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio_fiscal' ?>" >
				  
                                        <?php Lang::_lang('Domicilio Fiscal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_domicilio_fiscal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio_fiscal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_domicilio_fiscal' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_punto_venta_txt_domicilio_fiscal' value='<?php Gral::_echoTxt($vta_punto_venta->getDomicilioFiscal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_domicilio_fiscal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_domicilio_fiscal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_domicilio_fiscal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_domicilio_fiscal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_fiscal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_punto_venta_txt_codigo' value='<?php Gral::_echoTxt($vta_punto_venta->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_punto_venta_txt_numero' value='<?php Gral::_echoTxt($vta_punto_venta->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_txt_numero_timbrado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_timbrado' ?>" >
				  
                                        <?php Lang::_lang('Numero Timbrado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_numero_timbrado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_timbrado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_numero_timbrado' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_punto_venta_txt_numero_timbrado' value='<?php Gral::_echoTxt($vta_punto_venta->getNumeroTimbrado(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_numero_timbrado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_numero_timbrado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_numero_timbrado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_numero_timbrado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_timbrado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_txt_fecha_inicio_timbrado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_inicio_timbrado' ?>" >
				  
                                        <?php Lang::_lang('Fecha Inicio Timbr', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_fecha_inicio_timbrado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha_inicio_timbrado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_fecha_inicio_timbrado' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_punto_venta_txt_fecha_inicio_timbrado' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_punto_venta->getFechaInicioTimbrado()), true) ?>' size='40' />
					<input type='button' id='cal_vta_punto_venta_txt_fecha_inicio_timbrado' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'vta_punto_venta_txt_fecha_inicio_timbrado', ifFormat: '%d/%m/%Y', button: 'cal_vta_punto_venta_txt_fecha_inicio_timbrado'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_fecha_inicio_timbrado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_fecha_inicio_timbrado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_fecha_inicio_timbrado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_fecha_inicio_timbrado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_inicio_timbrado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_txt_serie" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_serie' ?>" >
				  
                                        <?php Lang::_lang('Serie', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_serie" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('serie')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_serie' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_punto_venta_txt_serie' value='<?php Gral::_echoTxt($vta_punto_venta->getSerie(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_serie', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_serie', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_serie', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_serie', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('serie')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_txt_numero_actual" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero_actual' ?>" >
				  
                                        <?php Lang::_lang('Numero Actual', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txt_numero_actual" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero_actual')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_punto_venta_txt_numero_actual' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='vta_punto_venta_txt_numero_actual' value='<?php Gral::_echoTxt($vta_punto_venta->getNumeroActual(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_numero_actual', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_numero_actual', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_numero_actual', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_numero_actual', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_actual')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_cmb_requiere_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_requiere_cae' ?>" >
				  
                                        <?php Lang::_lang('Requiere CAE', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_cmb_requiere_cae" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('requiere_cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_requiere_cae', GralSiNo::getGralSiNosCmb(), $vta_punto_venta->getRequiereCae(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_requiere_cae', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_requiere_cae', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_requiere_cae', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_requiere_cae', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('requiere_cae')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_cmb_solicita_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_solicita_cae' ?>" >
				  
                                        <?php Lang::_lang('Solicita CAE', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_cmb_solicita_cae" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('solicita_cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_solicita_cae', GralSiNo::getGralSiNosCmb(), $vta_punto_venta->getSolicitaCae(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_solicita_cae', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_solicita_cae', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_solicita_cae', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_solicita_cae', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('solicita_cae')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_cmb_autoincremental" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_autoincremental' ?>" >
				  
                                        <?php Lang::_lang('Autoincremental', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_cmb_autoincremental" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('autoincremental')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_punto_venta_cmb_autoincremental', GralSiNo::getGralSiNosCmb(), $vta_punto_venta->getAutoincremental(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_autoincremental', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_autoincremental', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_autoincremental', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_autoincremental', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('autoincremental')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_punto_venta_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_punto_venta_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_punto_venta_txa_observacion' rows='10' cols='50' id='vta_punto_venta_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_punto_venta->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_punto_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_punto_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_punto_venta_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_punto_venta_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_punto_venta->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_punto_venta_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_punto_venta'/>
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

