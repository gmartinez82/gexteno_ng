<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_FERIADO_ALTA')){
    echo "No tiene asignada la credencial GRAL_FERIADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_feriado';
$db_nombre_pagina = 'gral_feriado_alta';

$gral_feriado = new GralFeriado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_feriado = new GralFeriado();
	if(trim($hdn_id) != '') $gral_feriado->setId($hdn_id, false);
	$gral_feriado->setDescripcion(Gral::getVars(1, "gral_feriado_txt_descripcion"));
	$gral_feriado->setCodigo(Gral::getVars(1, "gral_feriado_txt_codigo"));
	$gral_feriado->setFecha(Gral::getFechaToDb(Gral::getVars(1, "gral_feriado_txt_fecha")));
	$gral_feriado->setObservacion(Gral::getVars(1, "gral_feriado_txa_observacion"));
	$gral_feriado->setOrden(Gral::getVars(1, "gral_feriado_txt_orden", 0));
	$gral_feriado->setEstado(Gral::getVars(1, "gral_feriado__estado", 0));
	$gral_feriado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_feriado_txt_creado")));
	$gral_feriado->setCreadoPor(Gral::getVars(1, "gral_feriado__creado_por", 0));
	$gral_feriado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_feriado_txt_modificado")));
	$gral_feriado->setModificadoPor(Gral::getVars(1, "gral_feriado__modificado_por", 0));

	$gral_feriado_estado = new GralFeriado();
	if(trim($hdn_id) != ''){
		$gral_feriado_estado->setId($hdn_id);
		$gral_feriado->setEstado($gral_feriado_estado->getEstado());
				
	}else{
		$gral_feriado->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_feriado->control();
			if(!$error->getExisteError()){
				$gral_feriado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_feriado_alta.php?cs=1&id='.$gral_feriado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_feriado->control();
			if(!$error->getExisteError()){
				$gral_feriado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_feriado_alta.php?cs=1');
				$gral_feriado = new GralFeriado();
			}
		break;
	}
	Gral::setSes('GralFeriado_ULTIMO_INSERTADO', $gral_feriado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_feriado_id = Gral::getVars(2, $prefijo.'cmb_gral_feriado_id', 0);
	if($cmb_gral_feriado_id != 0){
		$gral_feriado = GralFeriado::getOxId($cmb_gral_feriado_id);
	}else{
	
	$gral_feriado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_feriado->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_feriado->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
	$gral_feriado->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_feriado->setOrden(Gral::getVars(2, "orden", 0));
	$gral_feriado->setEstado(Gral::getVars(2, "estado", 0));
	$gral_feriado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_feriado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_feriado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_feriado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_feriado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_feriado/gral_feriado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_feriado' width='90%'>
        
				<tr>
				  <td  id="label_gral_feriado_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_feriado_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_feriado_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_feriado_txt_descripcion' value='<?php Gral::_echoTxt($gral_feriado->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_feriado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_feriado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_feriado_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_feriado_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_feriado_txt_fecha" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >
				  
                                        <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_feriado_txt_fecha" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_feriado_txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='gral_feriado_txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($gral_feriado->getFecha()), true) ?>' size='10' />
					<input type='button' id='cal_gral_feriado_txt_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'gral_feriado_txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_gral_feriado_txt_fecha'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_gral_feriado_alta_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_feriado_alta_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_feriado_alta_fecha', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_feriado_alta_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_feriado_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_feriado_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_feriado_txa_observacion' rows='10' cols='50' id='gral_feriado_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_feriado->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_feriado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_feriado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_feriado_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_feriado_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_feriado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_feriado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_feriado'/>
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

