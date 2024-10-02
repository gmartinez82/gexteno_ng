<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA')){
    echo "No tiene asignada la credencial GEO_LOCALIDAD_ALTA. ";
    return false;
}

$db_nombre_objeto = 'geo_localidad';
$db_nombre_pagina = 'geo_localidad_alta';

$geo_localidad = new GeoLocalidad();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$geo_localidad = new GeoLocalidad();
	if(trim($hdn_id) != '') $geo_localidad->setId($hdn_id, false);
	$geo_localidad->setDescripcion(Gral::getVars(1, "geo_localidad_txt_descripcion"));
	$geo_localidad->setGeoProvinciaId(Gral::getVars(1, "geo_localidad_cmb_geo_provincia_id", null));
	$geo_localidad->setCodigo(Gral::getVars(1, "geo_localidad_txt_codigo"));
	$geo_localidad->setCodigoEku(Gral::getVars(1, "geo_localidad_txt_codigo_eku"));
	$geo_localidad->setCodigoDistritoEku(Gral::getVars(1, "geo_localidad_txt_codigo_distrito_eku"));
	$geo_localidad->setObservacion(Gral::getVars(1, "geo_localidad_txa_observacion"));
	$geo_localidad->setOrden(Gral::getVars(1, "geo_localidad_txt_orden", 0));
	$geo_localidad->setEstado(Gral::getVars(1, "geo_localidad_cmb_estado", 0));
	$geo_localidad->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "geo_localidad_txt_creado")));
	$geo_localidad->setCreadoPor(Gral::getVars(1, "geo_localidad__creado_por", 0));
	$geo_localidad->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "geo_localidad_txt_modificado")));
	$geo_localidad->setModificadoPor(Gral::getVars(1, "geo_localidad__modificado_por", 0));

	$geo_localidad_estado = new GeoLocalidad();
	if(trim($hdn_id) != ''){
		$geo_localidad_estado->setId($hdn_id);
		$geo_localidad->setEstado($geo_localidad_estado->getEstado());
				
	}else{
		$geo_localidad->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $geo_localidad->control();
			if(!$error->getExisteError()){
				$geo_localidad->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: geo_localidad_alta.php?cs=1&id='.$geo_localidad->getId());
			}
		break;
		case 'guardarnvo':
			$error = $geo_localidad->control();
			if(!$error->getExisteError()){
				$geo_localidad->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: geo_localidad_alta.php?cs=1');
				$geo_localidad = new GeoLocalidad();
			}
		break;
	}
	Gral::setSes('GeoLocalidad_ULTIMO_INSERTADO', $geo_localidad->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_geo_localidad_id = Gral::getVars(2, $prefijo.'cmb_geo_localidad_id', 0);
	if($cmb_geo_localidad_id != 0){
		$geo_localidad = GeoLocalidad::getOxId($cmb_geo_localidad_id);
	}else{
	
	$geo_localidad->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$geo_localidad->setGeoProvinciaId(Gral::getVars(2, "geo_provincia_id", 'null'));
	$geo_localidad->setCodigo(Gral::getVars(2, "codigo", ''));
	$geo_localidad->setCodigoEku(Gral::getVars(2, "codigo_eku", ''));
	$geo_localidad->setCodigoDistritoEku(Gral::getVars(2, "codigo_distrito_eku", ''));
	$geo_localidad->setObservacion(Gral::getVars(2, "observacion", ''));
	$geo_localidad->setOrden(Gral::getVars(2, "orden", 0));
	$geo_localidad->setEstado(Gral::getVars(2, "estado", 0));
	$geo_localidad->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$geo_localidad->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$geo_localidad->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$geo_localidad->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $geo_localidad->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/geo_localidad/geo_localidad_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_geo_localidad' width='90%'>
        
				<tr>
				  <td  id="label_geo_localidad_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_localidad_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_localidad_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_localidad_txt_descripcion' value='<?php Gral::_echoTxt($geo_localidad->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_geo_localidad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_localidad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_localidad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_localidad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
                    <tr>
                      <td id="label_geo_localidad_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>">

                        <?php Lang::_lang('Pais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_geo_localidad_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
					if(!Gral::esPost() and $geo_localidad->getId()) $cmb_geo_pais_id = $geo_localidad->getGeoProvincia()->getGeoPais()->getId();			
					$c = new Criterio(GeoPais::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_pais');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'geo_localidad_cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), Lang::_lang('Seleccione Pais', true)), $cmb_geo_pais_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="geo_localidad_x" elemento_id="cmb_geo_pais_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="geo_localidad_cmb_geo_pais_id" clase_id="geo_pais" prefijo='geo_localidad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="geo_localidad_cmb_geo_pais_id" clase_id="geo_pais" prefijo='geo_localidad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_geo_localidad_cmb_geo_pais_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_geo_localidad_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_localidad_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_geo_localidad_alta_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_localidad_alta_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_geo_localidad_cmb_geo_provincia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_provincia_id' ?>">

                        <?php Lang::_lang('Provincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_geo_localidad_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
					if(!Gral::esPost() and $geo_localidad->getId()) $cmb_geo_provincia_id = $geo_localidad->getGeoProvincia()->getId();			
					$c = new Criterio(GeoProvincia::SES_CRITERIOS);
					$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_provincia');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'geo_localidad_cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), Lang::_lang('Seleccione Provincia', true)), $cmb_geo_provincia_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="geo_localidad_cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="geo_localidad_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='geo_localidad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="geo_localidad_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='geo_localidad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_geo_localidad_cmb_geo_provincia_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_geo_localidad_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_localidad_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_geo_localidad_alta_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_localidad_alta_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_geo_localidad_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_localidad_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_localidad_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_localidad_txt_codigo' value='<?php Gral::_echoTxt($geo_localidad->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_localidad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_localidad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_localidad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_localidad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_localidad_txt_codigo_eku" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_eku' ?>" >
				  
                                        <?php Lang::_lang('Codigo Eku', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_localidad_txt_codigo_eku" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_eku')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_localidad_txt_codigo_eku' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_localidad_txt_codigo_eku' value='<?php Gral::_echoTxt($geo_localidad->getCodigoEku(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_localidad_alta_codigo_eku', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_localidad_alta_codigo_eku', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_localidad_alta_codigo_eku', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_localidad_alta_codigo_eku', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_eku')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_localidad_txt_codigo_distrito_eku" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_distrito_eku' ?>" >
				  
                                        <?php Lang::_lang('Codigo Distrito Eku', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_localidad_txt_codigo_distrito_eku" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_distrito_eku')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='geo_localidad_txt_codigo_distrito_eku' type='text' class='textbox <?php echo $error_input_css ?> ' id='geo_localidad_txt_codigo_distrito_eku' value='<?php Gral::_echoTxt($geo_localidad->getCodigoDistritoEku(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_geo_localidad_alta_codigo_distrito_eku', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_localidad_alta_codigo_distrito_eku', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_localidad_alta_codigo_distrito_eku', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_localidad_alta_codigo_distrito_eku', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_distrito_eku')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_geo_localidad_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_geo_localidad_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='geo_localidad_txa_observacion' rows='10' cols='50' id='geo_localidad_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($geo_localidad->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_geo_localidad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_geo_localidad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_geo_localidad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_geo_localidad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($geo_localidad->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_geo_localidad_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='geo_localidad'/>
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

