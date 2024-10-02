<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_PREVENTISTA_ALTA')){
    echo "No tiene asignada la credencial PRV_PREVENTISTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_preventista';
$db_nombre_pagina = 'prv_preventista_alta';

$prv_preventista = new PrvPreventista();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_preventista = new PrvPreventista();
	if(trim($hdn_id) != '') $prv_preventista->setId($hdn_id, false);
	$prv_preventista->setDescripcion(Gral::getVars(1, "prv_preventista_txt_descripcion"));
	$prv_preventista->setPrvProveedorId(Gral::getVars(1, "prv_preventista_cmb_prv_proveedor_id", null));
	$prv_preventista->setApellido(Gral::getVars(1, "prv_preventista_txt_apellido"));
	$prv_preventista->setNombre(Gral::getVars(1, "prv_preventista_txt_nombre"));
	$prv_preventista->setEmail(Gral::getVars(1, "prv_preventista_txt_email"));
	$prv_preventista->setTelefono(Gral::getVars(1, "prv_preventista_txt_telefono"));
	$prv_preventista->setCelular(Gral::getVars(1, "prv_preventista_txt_celular"));
	$prv_preventista->setCodigo(Gral::getVars(1, "prv_preventista_txt_codigo"));
	$prv_preventista->setObservacion(Gral::getVars(1, "prv_preventista_txa_observacion"));
	$prv_preventista->setOrden(Gral::getVars(1, "prv_preventista_txt_orden", 0));
	$prv_preventista->setEstado(Gral::getVars(1, "prv_preventista_cmb_estado", 0));
	$prv_preventista->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_preventista_txt_creado")));
	$prv_preventista->setCreadoPor(Gral::getVars(1, "prv_preventista__creado_por", 0));
	$prv_preventista->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_preventista_txt_modificado")));
	$prv_preventista->setModificadoPor(Gral::getVars(1, "prv_preventista__modificado_por", 0));

	$prv_preventista_estado = new PrvPreventista();
	if(trim($hdn_id) != ''){
		$prv_preventista_estado->setId($hdn_id);
		$prv_preventista->setEstado($prv_preventista_estado->getEstado());
				
	}else{
		$prv_preventista->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prv_preventista->control();
			if(!$error->getExisteError()){
				$prv_preventista->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_preventista_alta.php?cs=1&id='.$prv_preventista->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_preventista->control();
			if(!$error->getExisteError()){
				$prv_preventista->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_preventista_alta.php?cs=1');
				$prv_preventista = new PrvPreventista();
			}
		break;
	}
	Gral::setSes('PrvPreventista_ULTIMO_INSERTADO', $prv_preventista->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_preventista_id = Gral::getVars(2, $prefijo.'cmb_prv_preventista_id', 0);
	if($cmb_prv_preventista_id != 0){
		$prv_preventista = PrvPreventista::getOxId($cmb_prv_preventista_id);
	}else{
	
	$prv_preventista->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prv_preventista->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$prv_preventista->setApellido(Gral::getVars(2, "apellido", ''));
	$prv_preventista->setNombre(Gral::getVars(2, "nombre", ''));
	$prv_preventista->setEmail(Gral::getVars(2, "email", ''));
	$prv_preventista->setTelefono(Gral::getVars(2, "telefono", ''));
	$prv_preventista->setCelular(Gral::getVars(2, "celular", ''));
	$prv_preventista->setCodigo(Gral::getVars(2, "codigo", ''));
	$prv_preventista->setObservacion(Gral::getVars(2, "observacion", ''));
	$prv_preventista->setOrden(Gral::getVars(2, "orden", 0));
	$prv_preventista->setEstado(Gral::getVars(2, "estado", 0));
	$prv_preventista->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_preventista->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prv_preventista->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prv_preventista->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_preventista->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_preventista/prv_preventista_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_preventista' width='90%'>
        
				<tr>
				  <td  id="label_prv_preventista_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_preventista_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $prv_preventista->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_PREVENTISTA_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_preventista_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_preventista_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($prv_preventista->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_preventista_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_preventista_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_preventista_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_preventista_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_preventista_txt_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                        <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_txt_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_preventista_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_preventista_txt_apellido' value='<?php Gral::_echoTxt($prv_preventista->getApellido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_preventista_alta_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_apellido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_preventista_txt_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                        <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_txt_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_preventista_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_preventista_txt_nombre' value='<?php Gral::_echoTxt($prv_preventista->getNombre(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_preventista_alta_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_nombre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_preventista_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_preventista_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_preventista_txt_email' value='<?php Gral::_echoTxt($prv_preventista->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_preventista_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_preventista_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_preventista_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_preventista_txt_telefono' value='<?php Gral::_echoTxt($prv_preventista->getTelefono(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_preventista_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_preventista_txt_celular" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_celular' ?>" >
				  
                                        <?php Lang::_lang('Celular', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_txt_celular" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('celular')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_preventista_txt_celular' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_preventista_txt_celular' value='<?php Gral::_echoTxt($prv_preventista->getCelular(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_preventista_alta_celular', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_celular', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_celular', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_celular', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('celular')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_preventista_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_preventista_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_preventista_txt_codigo' value='<?php Gral::_echoTxt($prv_preventista->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_preventista_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_preventista_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_preventista_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_preventista_txa_observacion' rows='10' cols='50' id='prv_preventista_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_preventista->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_preventista_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_preventista_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_preventista_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_preventista_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_preventista->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_preventista_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_preventista'/>
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

