<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA')){
    echo "No tiene asignada la credencial GRAL_SUCURSAL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_sucursal';
$db_nombre_pagina = 'gral_sucursal_alta';

$gral_sucursal = new GralSucursal();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_sucursal = new GralSucursal();
	if(trim($hdn_id) != '') $gral_sucursal->setId($hdn_id, false);
	$gral_sucursal->setDescripcion(Gral::getVars(1, "gral_sucursal_txt_descripcion"));
	$gral_sucursal->setGralEmpresaId(Gral::getVars(1, "gral_sucursal_cmb_gral_empresa_id", null));
	$gral_sucursal->setGralSucursalTipoId(Gral::getVars(1, "gral_sucursal_cmb_gral_sucursal_tipo_id", null));
	$gral_sucursal->setDomicilio(Gral::getVars(1, "gral_sucursal_txt_domicilio"));
	$gral_sucursal->setTelefono(Gral::getVars(1, "gral_sucursal_txt_telefono"));
	$gral_sucursal->setEmail(Gral::getVars(1, "gral_sucursal_txt_email"));
	$gral_sucursal->setCodigoPostal(Gral::getVars(1, "gral_sucursal_txt_codigo_postal"));
	$gral_sucursal->setGeoLocalidadId(Gral::getVars(1, "gral_sucursal_cmb_geo_localidad_id", null));
	$gral_sucursal->setCodigo(Gral::getVars(1, "gral_sucursal_txt_codigo"));
	$gral_sucursal->setLatitud(Gral::getVars(1, "gral_sucursal_txt_latitud", 0));
	$gral_sucursal->setLongitud(Gral::getVars(1, "gral_sucursal_txt_longitud", 0));
	$gral_sucursal->setColor(Gral::getVars(1, "gral_sucursal_txt_color"));
	$gral_sucursal->setNumero(Gral::getVars(1, "gral_sucursal_txt_numero"));
	$gral_sucursal->setObservacion(Gral::getVars(1, "gral_sucursal_txa_observacion"));
	$gral_sucursal->setOrden(Gral::getVars(1, "gral_sucursal_txt_orden", 0));
	$gral_sucursal->setEstado(Gral::getVars(1, "gral_sucursal_cmb_estado", 0));
	$gral_sucursal->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_sucursal_txt_creado")));
	$gral_sucursal->setCreadoPor(Gral::getVars(1, "gral_sucursal__creado_por", 0));
	$gral_sucursal->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_sucursal_txt_modificado")));
	$gral_sucursal->setModificadoPor(Gral::getVars(1, "gral_sucursal__modificado_por", 0));

	$gral_sucursal_estado = new GralSucursal();
	if(trim($hdn_id) != ''){
		$gral_sucursal_estado->setId($hdn_id);
		$gral_sucursal->setEstado($gral_sucursal_estado->getEstado());
				
	}else{
		$gral_sucursal->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_sucursal->control();
			if(!$error->getExisteError()){
				$gral_sucursal->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_sucursal_alta.php?cs=1&id='.$gral_sucursal->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_sucursal->control();
			if(!$error->getExisteError()){
				$gral_sucursal->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_sucursal_alta.php?cs=1');
				$gral_sucursal = new GralSucursal();
			}
		break;
	}
	Gral::setSes('GralSucursal_ULTIMO_INSERTADO', $gral_sucursal->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_sucursal_id = Gral::getVars(2, $prefijo.'cmb_gral_sucursal_id', 0);
	if($cmb_gral_sucursal_id != 0){
		$gral_sucursal = GralSucursal::getOxId($cmb_gral_sucursal_id);
	}else{
	
	$gral_sucursal->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_sucursal->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$gral_sucursal->setGralSucursalTipoId(Gral::getVars(2, "gral_sucursal_tipo_id", 'null'));
	$gral_sucursal->setDomicilio(Gral::getVars(2, "domicilio", ''));
	$gral_sucursal->setTelefono(Gral::getVars(2, "telefono", ''));
	$gral_sucursal->setEmail(Gral::getVars(2, "email", ''));
	$gral_sucursal->setCodigoPostal(Gral::getVars(2, "codigo_postal", ''));
	$gral_sucursal->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
	$gral_sucursal->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_sucursal->setLatitud(Gral::getVars(2, "latitud", 0));
	$gral_sucursal->setLongitud(Gral::getVars(2, "longitud", 0));
	$gral_sucursal->setColor(Gral::getVars(2, "color", ''));
	$gral_sucursal->setNumero(Gral::getVars(2, "numero", ''));
	$gral_sucursal->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_sucursal->setOrden(Gral::getVars(2, "orden", 0));
	$gral_sucursal->setEstado(Gral::getVars(2, "estado", 0));
	$gral_sucursal->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_sucursal->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_sucursal->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_sucursal->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_sucursal->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_sucursal/gral_sucursal_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_sucursal' width='90%'>
        
				<tr>
				  <td  id="label_gral_sucursal_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_sucursal_txt_descripcion' value='<?php Gral::_echoTxt($gral_sucursal->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >
				  
                                        <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_sucursal_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $gral_sucursal->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_sucursal_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='gral_sucursal_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($gral_sucursal->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_sucursal_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='gral_sucursal_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_sucursal_cmb_gral_empresa_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_cmb_gral_sucursal_tipo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_tipo_id' ?>" >
				  
                                        <?php Lang::_lang('GralSucursalTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_cmb_gral_sucursal_tipo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_sucursal_cmb_gral_sucursal_tipo_id', Gral::getCmbFiltro(GralSucursalTipo::getGralSucursalTiposCmb(), '...'), $gral_sucursal->getGralSucursalTipoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GRAL_SUCURSAL_TIPO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="gral_sucursal_cmb_gral_sucursal_tipo_id" clase_id="gral_sucursal_tipo" prefijo='gral_sucursal_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_tipo_id" <?php echo ($gral_sucursal->getGralSucursalTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="gral_sucursal_cmb_gral_sucursal_tipo_id" clase_id="gral_sucursal_tipo" prefijo='gral_sucursal_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_gral_sucursal_cmb_gral_sucursal_tipo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_gral_sucursal_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_gral_sucursal_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_gral_sucursal_tipo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_gral_sucursal_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_tipo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_txt_domicilio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio' ?>" >
				  
                                        <?php Lang::_lang('Domicilio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_domicilio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('domicilio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_domicilio' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_sucursal_txt_domicilio' value='<?php Gral::_echoTxt($gral_sucursal->getDomicilio(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_domicilio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_domicilio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_sucursal_txt_telefono' value='<?php Gral::_echoTxt($gral_sucursal->getTelefono(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_sucursal_txt_email' value='<?php Gral::_echoTxt($gral_sucursal->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_txt_codigo_postal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_postal' ?>" >
				  
                                        <?php Lang::_lang('Codigo Postal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_codigo_postal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_postal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_codigo_postal' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_sucursal_txt_codigo_postal' value='<?php Gral::_echoTxt($gral_sucursal->getCodigoPostal(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_codigo_postal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_codigo_postal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_codigo_postal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_codigo_postal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_postal')->getMensaje()) ?></div>

                </td>
            </tr>
				
                    <tr>
                      <td id="label_gral_sucursal_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>">

                        <?php Lang::_lang('Pais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_gral_sucursal_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
					if(!Gral::esPost() and $gral_sucursal->getId()) $cmb_geo_pais_id = $gral_sucursal->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
					$c = new Criterio(GeoPais::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_pais');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'gral_sucursal_cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), Lang::_lang('Seleccione Pais', true)), $cmb_geo_pais_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="gral_sucursal_x" elemento_id="cmb_geo_pais_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="gral_sucursal_cmb_geo_pais_id" clase_id="geo_pais" prefijo='gral_sucursal_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="gral_sucursal_cmb_geo_pais_id" clase_id="geo_pais" prefijo='gral_sucursal_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_gral_sucursal_cmb_geo_pais_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_gral_sucursal_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_gral_sucursal_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_gral_sucursal_cmb_geo_provincia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_provincia_id' ?>">

                        <?php Lang::_lang('Provincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_gral_sucursal_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
					if(!Gral::esPost() and $gral_sucursal->getId()) $cmb_geo_provincia_id = $gral_sucursal->getGeoLocalidad()->getGeoProvincia()->getId();			
					$c = new Criterio(GeoProvincia::SES_CRITERIOS);
					$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_provincia');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'gral_sucursal_cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), Lang::_lang('Seleccione Provincia', true)), $cmb_geo_provincia_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="gral_sucursal_cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="gral_sucursal_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='gral_sucursal_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="gral_sucursal_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='gral_sucursal_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_gral_sucursal_cmb_geo_provincia_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_gral_sucursal_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_gral_sucursal_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_gral_sucursal_cmb_geo_localidad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_localidad_id' ?>">

                        <?php Lang::_lang('Localidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_gral_sucursal_cmb_geo_localidad_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
					if(!Gral::esPost() and $gral_sucursal->getId()) $cmb_geo_localidad_id = $gral_sucursal->getGeoLocalidad()->getId();			
					$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
					$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_localidad');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'gral_sucursal_cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c), Lang::_lang('Seleccione Localidad', true)), $cmb_geo_localidad_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="gral_sucursal_cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="gral_sucursal_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='gral_sucursal_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_localidad_id" <?php echo ($cmb_geo_localidad_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="gral_sucursal_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='gral_sucursal_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_gral_sucursal_cmb_geo_localidad_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_gral_sucursal_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_gral_sucursal_alta_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_gral_sucursal_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_sucursal_txt_codigo' value='<?php Gral::_echoTxt($gral_sucursal->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_txt_color" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >
				  
                                        <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_color" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_color' type='text' class='textbox <?php echo $error_input_css ?> minicolors' id='gral_sucursal_txt_color' value='<?php Gral::_echoTxt($gral_sucursal->getColor(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_color', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_txt_numero" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >
				  
                                        <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txt_numero" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_sucursal_txt_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_sucursal_txt_numero' value='<?php Gral::_echoTxt($gral_sucursal->getNumero(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_numero', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_sucursal_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_sucursal_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_sucursal_txa_observacion' rows='10' cols='50' id='gral_sucursal_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_sucursal->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_sucursal_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_sucursal_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_sucursal_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_sucursal_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_sucursal->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_sucursal_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_sucursal'/>
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

