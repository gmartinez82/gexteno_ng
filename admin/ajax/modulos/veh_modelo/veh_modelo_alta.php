<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VEH_MODELO_ALTA')){
    echo "No tiene asignada la credencial VEH_MODELO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'veh_modelo';
$db_nombre_pagina = 'veh_modelo_alta';

$veh_modelo = new VehModelo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$veh_modelo = new VehModelo();
	if(trim($hdn_id) != '') $veh_modelo->setId($hdn_id, false);
	$veh_modelo->setVehMarcaId(Gral::getVars(1, "veh_modelo_cmb_veh_marca_id", null));
	$veh_modelo->setDescripcion(Gral::getVars(1, "veh_modelo_txt_descripcion"));
	$veh_modelo->setCodigo(Gral::getVars(1, "veh_modelo_txt_codigo"));
	$veh_modelo->setObservacion(Gral::getVars(1, "veh_modelo_txa_observacion"));
	$veh_modelo->setOrden(Gral::getVars(1, "veh_modelo_txt_orden", 0));
	$veh_modelo->setEstado(Gral::getVars(1, "veh_modelo__estado", 0));
	$veh_modelo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "veh_modelo_txt_creado")));
	$veh_modelo->setCreadoPor(Gral::getVars(1, "veh_modelo__creado_por", null));
	$veh_modelo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "veh_modelo_txt_modificado")));
	$veh_modelo->setModificadoPor(Gral::getVars(1, "veh_modelo__modificado_por", null));

	$veh_modelo_estado = new VehModelo();
	if(trim($hdn_id) != ''){
		$veh_modelo_estado->setId($hdn_id);
		$veh_modelo->setEstado($veh_modelo_estado->getEstado());
				
	}else{
		$veh_modelo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $veh_modelo->control();
			if(!$error->getExisteError()){
				$veh_modelo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: veh_modelo_alta.php?cs=1&id='.$veh_modelo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $veh_modelo->control();
			if(!$error->getExisteError()){
				$veh_modelo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: veh_modelo_alta.php?cs=1');
				$veh_modelo = new VehModelo();
			}
		break;
	}
	Gral::setSes('VehModelo_ULTIMO_INSERTADO', $veh_modelo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_veh_modelo_id = Gral::getVars(2, $prefijo.'cmb_veh_modelo_id', 0);
	if($cmb_veh_modelo_id != 0){
		$veh_modelo = VehModelo::getOxId($cmb_veh_modelo_id);
	}else{
	
	$veh_modelo->setVehMarcaId(Gral::getVars(2, "veh_marca_id", 'null'));
	$veh_modelo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$veh_modelo->setCodigo(Gral::getVars(2, "codigo", ''));
	$veh_modelo->setObservacion(Gral::getVars(2, "observacion", ''));
	$veh_modelo->setOrden(Gral::getVars(2, "orden", 0));
	$veh_modelo->setEstado(Gral::getVars(2, "estado", 0));
	$veh_modelo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$veh_modelo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$veh_modelo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$veh_modelo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $veh_modelo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/veh_modelo/veh_modelo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_veh_modelo' width='90%'>
        
				<tr>
				  <td  id="label_veh_modelo_cmb_veh_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_veh_marca_id' ?>" >
				  
                                        <?php Lang::_lang('Marca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_modelo_cmb_veh_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('veh_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'veh_modelo_cmb_veh_marca_id', Gral::getCmbFiltro(VehMarca::getVehMarcasCmb(), '...'), $veh_modelo->getVehMarcaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_ALTA_CMB_EDIT_VEH_MARCA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="veh_modelo_cmb_veh_marca_id" clase_id="veh_marca" prefijo='veh_modelo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_veh_marca_id" <?php echo ($veh_modelo->getVehMarcaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="veh_modelo_cmb_veh_marca_id" clase_id="veh_marca" prefijo='veh_modelo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_veh_modelo_cmb_veh_marca_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_veh_modelo_alta_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_modelo_alta_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_modelo_alta_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_modelo_alta_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('veh_marca_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_modelo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_modelo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='veh_modelo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='veh_modelo_txt_descripcion' value='<?php Gral::_echoTxt($veh_modelo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_veh_modelo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_modelo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_modelo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_modelo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_modelo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_modelo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='veh_modelo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='veh_modelo_txt_codigo' value='<?php Gral::_echoTxt($veh_modelo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_veh_modelo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_modelo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_modelo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_modelo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_veh_modelo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_veh_modelo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='veh_modelo_txa_observacion' rows='10' cols='50' id='veh_modelo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($veh_modelo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_veh_modelo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_veh_modelo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_veh_modelo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_veh_modelo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($veh_modelo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_veh_modelo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='veh_modelo'/>
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

