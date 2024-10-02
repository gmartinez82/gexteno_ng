<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA')){
    echo "No tiene asignada la credencial PDE_CENTRO_RECEPCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_centro_recepcion';
$db_nombre_pagina = 'pde_centro_recepcion_alta';

$pde_centro_recepcion = new PdeCentroRecepcion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_centro_recepcion = new PdeCentroRecepcion();
	if(trim($hdn_id) != '') $pde_centro_recepcion->setId($hdn_id, false);
	$pde_centro_recepcion->setDescripcion(Gral::getVars(1, "pde_centro_recepcion_txt_descripcion"));
	$pde_centro_recepcion->setGeoLocalidadId(Gral::getVars(1, "pde_centro_recepcion_cmb_geo_localidad_id", null));
	$pde_centro_recepcion->setResponsable(Gral::getVars(1, "pde_centro_recepcion_txt_responsable"));
	$pde_centro_recepcion->setEmail(Gral::getVars(1, "pde_centro_recepcion_txt_email"));
	$pde_centro_recepcion->setTelefono(Gral::getVars(1, "pde_centro_recepcion_txt_telefono"));
	$pde_centro_recepcion->setDomicilio(Gral::getVars(1, "pde_centro_recepcion_txt_domicilio"));
	$pde_centro_recepcion->setCodigo(Gral::getVars(1, "pde_centro_recepcion_txt_codigo"));
	$pde_centro_recepcion->setEsPanol(Gral::getVars(1, "pde_centro_recepcion_cmb_es_panol", 0));
	$pde_centro_recepcion->setObservacion(Gral::getVars(1, "pde_centro_recepcion_txa_observacion"));
	$pde_centro_recepcion->setOrden(Gral::getVars(1, "pde_centro_recepcion_txt_orden", 0));
	$pde_centro_recepcion->setEstado(Gral::getVars(1, "pde_centro_recepcion__estado", 0));
	$pde_centro_recepcion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_centro_recepcion_txt_creado")));
	$pde_centro_recepcion->setCreadoPor(Gral::getVars(1, "pde_centro_recepcion__creado_por", null));
	$pde_centro_recepcion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_centro_recepcion_txt_modificado")));
	$pde_centro_recepcion->setModificadoPor(Gral::getVars(1, "pde_centro_recepcion__modificado_por", null));

	$pde_centro_recepcion_estado = new PdeCentroRecepcion();
	if(trim($hdn_id) != ''){
		$pde_centro_recepcion_estado->setId($hdn_id);
		$pde_centro_recepcion->setEstado($pde_centro_recepcion_estado->getEstado());
				
	}else{
		$pde_centro_recepcion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_centro_recepcion->control();
			if(!$error->getExisteError()){
				$pde_centro_recepcion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_centro_recepcion_alta.php?cs=1&id='.$pde_centro_recepcion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_centro_recepcion->control();
			if(!$error->getExisteError()){
				$pde_centro_recepcion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_centro_recepcion_alta.php?cs=1');
				$pde_centro_recepcion = new PdeCentroRecepcion();
			}
		break;
	}
	Gral::setSes('PdeCentroRecepcion_ULTIMO_INSERTADO', $pde_centro_recepcion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_centro_recepcion_id = Gral::getVars(2, $prefijo.'cmb_pde_centro_recepcion_id', 0);
	if($cmb_pde_centro_recepcion_id != 0){
		$pde_centro_recepcion = PdeCentroRecepcion::getOxId($cmb_pde_centro_recepcion_id);
	}else{
	
	$pde_centro_recepcion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_centro_recepcion->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
	$pde_centro_recepcion->setResponsable(Gral::getVars(2, "responsable", ''));
	$pde_centro_recepcion->setEmail(Gral::getVars(2, "email", ''));
	$pde_centro_recepcion->setTelefono(Gral::getVars(2, "telefono", ''));
	$pde_centro_recepcion->setDomicilio(Gral::getVars(2, "domicilio", ''));
	$pde_centro_recepcion->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_centro_recepcion->setEsPanol(Gral::getVars(2, "es_panol", 0));
	$pde_centro_recepcion->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_centro_recepcion->setOrden(Gral::getVars(2, "orden", 0));
	$pde_centro_recepcion->setEstado(Gral::getVars(2, "estado", 0));
	$pde_centro_recepcion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_centro_recepcion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_centro_recepcion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_centro_recepcion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_centro_recepcion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_centro_recepcion/pde_centro_recepcion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_centro_recepcion' width='90%'>
        
				<tr>
				  <td  id="label_pde_centro_recepcion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_centro_recepcion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_centro_recepcion_txt_descripcion' value='<?php Gral::_echoTxt($pde_centro_recepcion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
                    <tr>
                      <td id="label_pde_centro_recepcion_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>">

                        <?php Lang::_lang('Pais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_pde_centro_recepcion_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
					if(!Gral::esPost() and $pde_centro_recepcion->getId()) $cmb_geo_pais_id = $pde_centro_recepcion->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
					$c = new Criterio(GeoPais::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_pais');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'pde_centro_recepcion_cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), Lang::_lang('Seleccione Pais', true)), $cmb_geo_pais_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="pde_centro_recepcion_x" elemento_id="cmb_geo_pais_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="pde_centro_recepcion_cmb_geo_pais_id" clase_id="geo_pais" prefijo='pde_centro_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="pde_centro_recepcion_cmb_geo_pais_id" clase_id="geo_pais" prefijo='pde_centro_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_pde_centro_recepcion_cmb_geo_pais_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_pde_centro_recepcion_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_pde_centro_recepcion_cmb_geo_provincia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_provincia_id' ?>">

                        <?php Lang::_lang('Provincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_pde_centro_recepcion_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
					if(!Gral::esPost() and $pde_centro_recepcion->getId()) $cmb_geo_provincia_id = $pde_centro_recepcion->getGeoLocalidad()->getGeoProvincia()->getId();			
					$c = new Criterio(GeoProvincia::SES_CRITERIOS);
					$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_provincia');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'pde_centro_recepcion_cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), Lang::_lang('Seleccione Provincia', true)), $cmb_geo_provincia_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="pde_centro_recepcion_cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="pde_centro_recepcion_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='pde_centro_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="pde_centro_recepcion_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='pde_centro_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_pde_centro_recepcion_cmb_geo_provincia_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_pde_centro_recepcion_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_pde_centro_recepcion_cmb_geo_localidad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_localidad_id' ?>">

                        <?php Lang::_lang('Localidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_pde_centro_recepcion_cmb_geo_localidad_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
					if(!Gral::esPost() and $pde_centro_recepcion->getId()) $cmb_geo_localidad_id = $pde_centro_recepcion->getGeoLocalidad()->getId();			
					$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
					$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_localidad');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'pde_centro_recepcion_cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c), Lang::_lang('Seleccione Localidad', true)), $cmb_geo_localidad_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="pde_centro_recepcion_cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="pde_centro_recepcion_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='pde_centro_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_localidad_id" <?php echo ($cmb_geo_localidad_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="pde_centro_recepcion_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='pde_centro_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_pde_centro_recepcion_cmb_geo_localidad_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_pde_centro_recepcion_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_pde_centro_recepcion_txt_responsable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_responsable' ?>" >
				  
                                        <?php Lang::_lang('Responsable', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_txt_responsable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('responsable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_centro_recepcion_txt_responsable' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_centro_recepcion_txt_responsable' value='<?php Gral::_echoTxt($pde_centro_recepcion->getResponsable(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_responsable', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_responsable', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_responsable', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_responsable', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('responsable')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_recepcion_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_centro_recepcion_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_centro_recepcion_txt_email' value='<?php Gral::_echoTxt($pde_centro_recepcion->getEmail(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_recepcion_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_centro_recepcion_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_centro_recepcion_txt_telefono' value='<?php Gral::_echoTxt($pde_centro_recepcion->getTelefono(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_recepcion_txt_domicilio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio' ?>" >
				  
                                        <?php Lang::_lang('Domicilio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_txt_domicilio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_centro_recepcion_txt_domicilio' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_centro_recepcion_txt_domicilio' value='<?php Gral::_echoTxt($pde_centro_recepcion->getDomicilio(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_recepcion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_centro_recepcion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_centro_recepcion_txt_codigo' value='<?php Gral::_echoTxt($pde_centro_recepcion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_recepcion_cmb_es_panol" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_es_panol' ?>" >
				  
                                        <?php Lang::_lang('Es Panol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_cmb_es_panol" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('es_panol')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_centro_recepcion_cmb_es_panol', GralSiNo::getGralSiNosCmb(), $pde_centro_recepcion->getEsPanol(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_es_panol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_es_panol', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_es_panol', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_es_panol', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_panol')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_recepcion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_recepcion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_centro_recepcion_txa_observacion' rows='10' cols='50' id='pde_centro_recepcion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_centro_recepcion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_centro_recepcion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_recepcion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_recepcion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_recepcion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_centro_recepcion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_centro_recepcion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_centro_recepcion'/>
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

