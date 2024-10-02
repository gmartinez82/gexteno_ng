<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PLN_JORNADA_ALTA')){
    echo "No tiene asignada la credencial PLN_JORNADA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pln_jornada';
$db_nombre_pagina = 'pln_jornada_alta';

$pln_jornada = new PlnJornada();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pln_jornada = new PlnJornada();
	if(trim($hdn_id) != '') $pln_jornada->setId($hdn_id, false);
	$pln_jornada->setDescripcion(Gral::getVars(1, "pln_jornada_txt_descripcion"));
	$pln_jornada->setGralNovedadId(Gral::getVars(1, "pln_jornada_cmb_gral_novedad_id", null));
	$pln_jornada->setCodigo(Gral::getVars(1, "pln_jornada_txt_codigo"));
	$pln_jornada->setHoras(Gral::getVars(1, "pln_jornada_txt_horas", 0));
	$pln_jornada->setJornadaCompleta(Gral::getVars(1, "pln_jornada_cmb_jornada_completa", 0));
	$pln_jornada->setObservacion(Gral::getVars(1, "pln_jornada_txa_observacion"));
	$pln_jornada->setOrden(Gral::getVars(1, "pln_jornada_txt_orden", 0));
	$pln_jornada->setEstado(Gral::getVars(1, "pln_jornada_cmb_estado", 0));
	$pln_jornada->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pln_jornada_txt_creado")));
	$pln_jornada->setCreadoPor(Gral::getVars(1, "pln_jornada__creado_por", 0));
	$pln_jornada->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pln_jornada_txt_modificado")));
	$pln_jornada->setModificadoPor(Gral::getVars(1, "pln_jornada__modificado_por", 0));

	$pln_jornada_estado = new PlnJornada();
	if(trim($hdn_id) != ''){
		$pln_jornada_estado->setId($hdn_id);
		$pln_jornada->setEstado($pln_jornada_estado->getEstado());
				
	}else{
		$pln_jornada->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pln_jornada->control();
			if(!$error->getExisteError()){
				$pln_jornada->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pln_jornada_alta.php?cs=1&id='.$pln_jornada->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pln_jornada->control();
			if(!$error->getExisteError()){
				$pln_jornada->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pln_jornada_alta.php?cs=1');
				$pln_jornada = new PlnJornada();
			}
		break;
	}
	Gral::setSes('PlnJornada_ULTIMO_INSERTADO', $pln_jornada->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pln_jornada_id = Gral::getVars(2, $prefijo.'cmb_pln_jornada_id', 0);
	if($cmb_pln_jornada_id != 0){
		$pln_jornada = PlnJornada::getOxId($cmb_pln_jornada_id);
	}else{
	
	$pln_jornada->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pln_jornada->setGralNovedadId(Gral::getVars(2, "gral_novedad_id", 'null'));
	$pln_jornada->setCodigo(Gral::getVars(2, "codigo", ''));
	$pln_jornada->setHoras(Gral::getVars(2, "horas", 0));
	$pln_jornada->setJornadaCompleta(Gral::getVars(2, "jornada_completa", 0));
	$pln_jornada->setObservacion(Gral::getVars(2, "observacion", ''));
	$pln_jornada->setOrden(Gral::getVars(2, "orden", 0));
	$pln_jornada->setEstado(Gral::getVars(2, "estado", 0));
	$pln_jornada->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pln_jornada->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pln_jornada->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pln_jornada->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pln_jornada->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pln_jornada/pln_jornada_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pln_jornada' width='90%'>
        
				<tr>
				  <td  id="label_pln_jornada_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_jornada_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pln_jornada_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pln_jornada_txt_descripcion' value='<?php Gral::_echoTxt($pln_jornada->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pln_jornada_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_jornada_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_jornada_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_jornada_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_jornada_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_jornada_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pln_jornada_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pln_jornada_txt_codigo' value='<?php Gral::_echoTxt($pln_jornada->getCodigo(), true) ?>' size='20' />            
                    <?php if(Lang::_lang('help_pln_jornada_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_jornada_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_jornada_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_jornada_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_jornada_cmb_jornada_completa" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_jornada_completa' ?>" >
				  
                                        <?php Lang::_lang('Jornada Completa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_jornada_cmb_jornada_completa" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('jornada_completa')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pln_jornada_cmb_jornada_completa', GralSiNo::getGralSiNosCmb(), $pln_jornada->getJornadaCompleta(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pln_jornada_alta_jornada_completa', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_jornada_alta_jornada_completa', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_jornada_alta_jornada_completa', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_jornada_alta_jornada_completa', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('jornada_completa')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_jornada_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_jornada_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pln_jornada_txa_observacion' rows='10' cols='50' id='pln_jornada_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pln_jornada->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pln_jornada_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_jornada_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_jornada_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_jornada_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pln_jornada->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pln_jornada_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pln_jornada'/>
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

