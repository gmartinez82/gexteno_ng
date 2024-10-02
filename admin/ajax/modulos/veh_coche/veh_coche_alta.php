<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VEH_COCHE_ALTA')){
    echo "No tiene asignada la credencial VEH_COCHE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'veh_coche';
$db_nombre_pagina = 'veh_coche_alta';

$veh_coche = new VehCoche();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$veh_coche = new VehCoche();
	if(trim($hdn_id) != '') $veh_coche->setId($hdn_id, false);
	$veh_coche->setVehModeloId(Gral::getVars(1, "veh_coche_cmb_veh_modelo_id", null));
	$veh_coche->setDescripcion(Gral::getVars(1, "veh_coche_txt_descripcion"));
	$veh_coche->setVersion(Gral::getVars(1, "veh_coche_txt_version"));
	$veh_coche->setCodigo(Gral::getVars(1, "veh_coche_txt_codigo"));
	$veh_coche->setPatente(Gral::getVars(1, "veh_coche_txt_patente"));
	$veh_coche->setAnio(Gral::getVars(1, "veh_coche_txt_anio", 0));
	$veh_coche->setObservacion(Gral::getVars(1, "veh_coche_txa_observacion"));
	$veh_coche->setOrden(Gral::getVars(1, "veh_coche_txt_orden", 0));
	$veh_coche->setEstado(Gral::getVars(1, "veh_coche__estado", 0));
	$veh_coche->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "veh_coche_txt_creado")));
	$veh_coche->setCreadoPor(Gral::getVars(1, "veh_coche__creado_por", null));
	$veh_coche->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "veh_coche_txt_modificado")));
	$veh_coche->setModificadoPor(Gral::getVars(1, "veh_coche__modificado_por", null));

	$veh_coche_estado = new VehCoche();
	if(trim($hdn_id) != ''){
		$veh_coche_estado->setId($hdn_id);
		$veh_coche->setEstado($veh_coche_estado->getEstado());
				
	}else{
		$veh_coche->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $veh_coche->control();
			if(!$error->getExisteError()){
				$veh_coche->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: veh_coche_alta.php?cs=1&id='.$veh_coche->getId());
			}
		break;
		case 'guardarnvo':
			$error = $veh_coche->control();
			if(!$error->getExisteError()){
				$veh_coche->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: veh_coche_alta.php?cs=1');
				$veh_coche = new VehCoche();
			}
		break;
	}
	Gral::setSes('VehCoche_ULTIMO_INSERTADO', $veh_coche->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_veh_coche_id = Gral::getVars(2, $prefijo.'cmb_veh_coche_id', 0);
	if($cmb_veh_coche_id != 0){
		$veh_coche = VehCoche::getOxId($cmb_veh_coche_id);
	}else{
	
	$veh_coche->setVehModeloId(Gral::getVars(2, "veh_modelo_id", 'null'));
	$veh_coche->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$veh_coche->setVersion(Gral::getVars(2, "version", ''));
	$veh_coche->setCodigo(Gral::getVars(2, "codigo", ''));
	$veh_coche->setPatente(Gral::getVars(2, "patente", ''));
	$veh_coche->setAnio(Gral::getVars(2, "anio", 0));
	$veh_coche->setObservacion(Gral::getVars(2, "observacion", ''));
	$veh_coche->setOrden(Gral::getVars(2, "orden", 0));
	$veh_coche->setEstado(Gral::getVars(2, "estado", 0));
	$veh_coche->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$veh_coche->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$veh_coche->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$veh_coche->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $veh_coche->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/veh_coche/veh_coche_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_veh_coche' width='90%'>
        
                    <tr>
                      <td id="label_veh_coche_cmb_veh_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_veh_marca_id' ?>">

                        <?php Lang::_lang('Marca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_veh_coche_cmb_veh_marca_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('veh_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_veh_marca_id = Gral::getVars(1, 'cmb_veh_marca_id', 0);
					if(!Gral::esPost() and $veh_coche->getId()) $cmb_veh_marca_id = $veh_coche->getVehModelo()->getVehMarca()->getId();			
					$c = new Criterio(VehMarca::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('veh_marca');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'veh_coche_cmb_veh_marca_id', Gral::getCmbFiltro(VehMarca::getVehMarcasCmbF(null, $c), Lang::_lang('Seleccione Marca', true)), $cmb_veh_marca_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="veh_coche_x" elemento_id="cmb_veh_marca_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_CMB_EDIT_VEH_MARCA')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="veh_coche_cmb_veh_marca_id" clase_id="veh_marca" prefijo='veh_coche_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_veh_marca_id" <?php echo ($cmb_veh_marca_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="veh_coche_cmb_veh_marca_id" clase_id="veh_marca" prefijo='veh_coche_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_veh_coche_cmb_veh_marca_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_veh_coche_alta_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_coche_alta_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_veh_coche_alta_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_coche_alta_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('veh_marca_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_veh_coche_cmb_veh_modelo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_veh_modelo_id' ?>">

                        <?php Lang::_lang('Modelo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_veh_coche_cmb_veh_modelo_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('veh_modelo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_veh_modelo_id = Gral::getVars(1, 'cmb_veh_modelo_id', 0);
					if(!Gral::esPost() and $veh_coche->getId()) $cmb_veh_modelo_id = $veh_coche->getVehModelo()->getId();			
					$c = new Criterio(VehModelo::SES_CRITERIOS);
					$c->add('veh_marca_id', $cmb_veh_marca_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('veh_modelo');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'veh_coche_cmb_veh_modelo_id', Gral::getCmbFiltro(VehModelo::getVehModelosCmbF(null, $c), Lang::_lang('Seleccione Modelo', true)), $cmb_veh_modelo_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="veh_coche_cmb_veh_marca_id" elemento_id="cmb_veh_modelo_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_CMB_EDIT_VEH_MODELO')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="veh_coche_cmb_veh_modelo_id" clase_id="veh_modelo" prefijo='veh_coche_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_veh_modelo_id" <?php echo ($cmb_veh_modelo_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="veh_coche_cmb_veh_modelo_id" clase_id="veh_modelo" prefijo='veh_coche_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_veh_coche_cmb_veh_modelo_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_veh_coche_alta_veh_modelo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_coche_alta_veh_modelo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_veh_coche_alta_veh_modelo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_coche_alta_veh_modelo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('veh_modelo_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_veh_coche_txt_version" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_version' ?>" >
				  
                                        <?php Lang::_lang('Version', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_coche_txt_version" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('version')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='veh_coche_txt_version' type='text' class='textbox <?php echo $error_input_css ?> ' id='veh_coche_txt_version' value='<?php Gral::_echoTxt($veh_coche->getVersion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_veh_coche_alta_version', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_coche_alta_version', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_coche_alta_version', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_coche_alta_version', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('version')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_coche_txt_patente" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_patente' ?>" >
				  
                                        <?php Lang::_lang('Patente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_coche_txt_patente" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('patente')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='veh_coche_txt_patente' type='text' class='textbox <?php echo $error_input_css ?> ' id='veh_coche_txt_patente' value='<?php Gral::_echoTxt($veh_coche->getPatente(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_veh_coche_alta_patente', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_coche_alta_patente', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_coche_alta_patente', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_coche_alta_patente', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('patente')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_coche_txt_anio" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_anio' ?>" >
				  
                                        <?php Lang::_lang('Anio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_coche_txt_anio" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('anio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='veh_coche_txt_anio' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='veh_coche_txt_anio' value='<?php Gral::_echoTxt($veh_coche->getAnio(), true) ?>' size='10' />            
                    <?php if(Lang::_lang('help_veh_coche_alta_anio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_coche_alta_anio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_coche_alta_anio', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_coche_alta_anio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anio')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_coche_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_coche_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='veh_coche_txa_observacion' rows='10' cols='50' id='veh_coche_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($veh_coche->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_veh_coche_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_coche_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_coche_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_coche_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($veh_coche->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_veh_coche_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='veh_coche'/>
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

