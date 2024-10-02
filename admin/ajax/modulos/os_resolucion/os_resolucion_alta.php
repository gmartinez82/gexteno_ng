<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('OS_RESOLUCION_ALTA')){
    echo "No tiene asignada la credencial OS_RESOLUCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'os_resolucion';
$db_nombre_pagina = 'os_resolucion_alta';

$os_resolucion = new OsResolucion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$os_resolucion = new OsResolucion();
	if(trim($hdn_id) != '') $os_resolucion->setId($hdn_id, false);
	$os_resolucion->setOsOrdenServicioId(Gral::getVars(1, "os_resolucion_cmb_os_orden_servicio_id", null));
	$os_resolucion->setOsTipoResolucionId(Gral::getVars(1, "os_resolucion_cmb_os_tipo_resolucion_id", null));
	$os_resolucion->setFecha(Gral::getFechaToDb(Gral::getVars(1, "os_resolucion_txt_fecha")));
	$os_resolucion->setDescripcion(Gral::getVars(1, "os_resolucion_txt_descripcion"));
	$os_resolucion->setCodigo(Gral::getVars(1, "os_resolucion_txt_codigo"));
	$os_resolucion->setNotaPublica(Gral::getVars(1, "os_resolucion_txa_nota_publica"));
	$os_resolucion->setObservacion(Gral::getVars(1, "os_resolucion_txa_observacion"));
	$os_resolucion->setOrden(Gral::getVars(1, "os_resolucion_txt_orden", 0));
	$os_resolucion->setEstado(Gral::getVars(1, "os_resolucion_cmb_estado", 0));
	$os_resolucion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_resolucion_txt_creado")));
	$os_resolucion->setCreadoPor(Gral::getVars(1, "os_resolucion__creado_por", 0));
	$os_resolucion->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "os_resolucion_txt_modificado")));
	$os_resolucion->setModificadoPor(Gral::getVars(1, "os_resolucion__modificado_por", 0));

	$os_resolucion_estado = new OsResolucion();
	if(trim($hdn_id) != ''){
		$os_resolucion_estado->setId($hdn_id);
		$os_resolucion->setEstado($os_resolucion_estado->getEstado());
				
	}else{
		$os_resolucion->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $os_resolucion->control();
			if(!$error->getExisteError()){
				$os_resolucion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: os_resolucion_alta.php?cs=1&id='.$os_resolucion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $os_resolucion->control();
			if(!$error->getExisteError()){
				$os_resolucion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: os_resolucion_alta.php?cs=1');
				$os_resolucion = new OsResolucion();
			}
		break;
	}
	Gral::setSes('OsResolucion_ULTIMO_INSERTADO', $os_resolucion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_os_resolucion_id = Gral::getVars(2, $prefijo.'cmb_os_resolucion_id', 0);
	if($cmb_os_resolucion_id != 0){
		$os_resolucion = OsResolucion::getOxId($cmb_os_resolucion_id);
	}else{
	
	$os_resolucion->setOsOrdenServicioId(Gral::getVars(2, "os_orden_servicio_id", 'null'));
	$os_resolucion->setOsTipoResolucionId(Gral::getVars(2, "os_tipo_resolucion_id", 'null'));
	$os_resolucion->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$os_resolucion->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$os_resolucion->setCodigo(Gral::getVars(2, "codigo", ''));
	$os_resolucion->setNotaPublica(Gral::getVars(2, "nota_publica", ''));
	$os_resolucion->setObservacion(Gral::getVars(2, "observacion", ''));
	$os_resolucion->setOrden(Gral::getVars(2, "orden", 0));
	$os_resolucion->setEstado(Gral::getVars(2, "estado", 0));
	$os_resolucion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$os_resolucion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$os_resolucion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$os_resolucion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $os_resolucion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/os_resolucion/os_resolucion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_os_resolucion' width='90%'>
        
				<tr>
				  <td  id="label_os_resolucion_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='os_resolucion_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_resolucion->getFecha()), true) ?>' size='10' />
					<input type='button' id='cal_os_resolucion_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'os_resolucion_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_os_resolucion_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_os_resolucion_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_resolucion_txt_descripcion' value='<?php Gral::_echoTxt($os_resolucion->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_os_resolucion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='os_resolucion_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='os_resolucion_txt_codigo' value='<?php Gral::_echoTxt($os_resolucion->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_os_resolucion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_txa_nota_publica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nota_publica' ?>" >
				  
                                        <?php Lang::_lang('Nota Publica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_txa_nota_publica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nota_publica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_resolucion_txa_nota_publica' rows='10' cols='50' id='os_resolucion_txa_nota_publica' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_resolucion->getNotaPublica(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_resolucion_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_alta_nota_publica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_alta_nota_publica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nota_publica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_os_resolucion_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_os_resolucion_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='os_resolucion_txa_observacion' rows='10' cols='50' id='os_resolucion_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($os_resolucion->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_os_resolucion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_os_resolucion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_os_resolucion_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_os_resolucion_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($os_resolucion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_os_resolucion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='os_resolucion'/>
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

