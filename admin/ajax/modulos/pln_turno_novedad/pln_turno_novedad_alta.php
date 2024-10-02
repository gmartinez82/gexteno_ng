<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ALTA')){
    echo "No tiene asignada la credencial PLN_TURNO_NOVEDAD_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pln_turno_novedad';
$db_nombre_pagina = 'pln_turno_novedad_alta';

$pln_turno_novedad = new PlnTurnoNovedad();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pln_turno_novedad = new PlnTurnoNovedad();
	if(trim($hdn_id) != '') $pln_turno_novedad->setId($hdn_id, false);
	$pln_turno_novedad->setDescripcion(Gral::getVars(1, "pln_turno_novedad_txt_descripcion"));
	$pln_turno_novedad->setPlnTurnoId(Gral::getVars(1, "pln_turno_novedad_cmb_pln_turno_id", null));
	$pln_turno_novedad->setGralNovedadId(Gral::getVars(1, "pln_turno_novedad_cmb_gral_novedad_id", null));
	$pln_turno_novedad->setPlnJornadaId(Gral::getVars(1, "pln_turno_novedad_cmb_pln_jornada_id", null));
	$pln_turno_novedad->setHoras(Gral::getVars(1, "pln_turno_novedad_txt_horas"));
	$pln_turno_novedad->setCodigo(Gral::getVars(1, "pln_turno_novedad_txt_codigo"));
	$pln_turno_novedad->setObservacion(Gral::getVars(1, "pln_turno_novedad_txa_observacion"));
	$pln_turno_novedad->setOrden(Gral::getVars(1, "pln_turno_novedad_txt_orden", 0));
	$pln_turno_novedad->setEstado(Gral::getVars(1, "pln_turno_novedad_cmb_estado", 0));
	$pln_turno_novedad->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pln_turno_novedad_txt_creado")));
	$pln_turno_novedad->setCreadoPor(Gral::getVars(1, "pln_turno_novedad__creado_por", 0));
	$pln_turno_novedad->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pln_turno_novedad_txt_modificado")));
	$pln_turno_novedad->setModificadoPor(Gral::getVars(1, "pln_turno_novedad__modificado_por", 0));

	$pln_turno_novedad_estado = new PlnTurnoNovedad();
	if(trim($hdn_id) != ''){
		$pln_turno_novedad_estado->setId($hdn_id);
		$pln_turno_novedad->setEstado($pln_turno_novedad_estado->getEstado());
				
	}else{
		$pln_turno_novedad->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pln_turno_novedad->control();
			if(!$error->getExisteError()){
				$pln_turno_novedad->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pln_turno_novedad_alta.php?cs=1&id='.$pln_turno_novedad->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pln_turno_novedad->control();
			if(!$error->getExisteError()){
				$pln_turno_novedad->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pln_turno_novedad_alta.php?cs=1');
				$pln_turno_novedad = new PlnTurnoNovedad();
			}
		break;
	}
	Gral::setSes('PlnTurnoNovedad_ULTIMO_INSERTADO', $pln_turno_novedad->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pln_turno_novedad_id = Gral::getVars(2, $prefijo.'cmb_pln_turno_novedad_id', 0);
	if($cmb_pln_turno_novedad_id != 0){
		$pln_turno_novedad = PlnTurnoNovedad::getOxId($cmb_pln_turno_novedad_id);
	}else{
	
	$pln_turno_novedad->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pln_turno_novedad->setPlnTurnoId(Gral::getVars(2, "pln_turno_id", 'null'));
	$pln_turno_novedad->setGralNovedadId(Gral::getVars(2, "gral_novedad_id", 'null'));
	$pln_turno_novedad->setPlnJornadaId(Gral::getVars(2, "pln_jornada_id", 'null'));
	$pln_turno_novedad->setHoras(Gral::getVars(2, "horas", ''));
	$pln_turno_novedad->setCodigo(Gral::getVars(2, "codigo", ''));
	$pln_turno_novedad->setObservacion(Gral::getVars(2, "observacion", ''));
	$pln_turno_novedad->setOrden(Gral::getVars(2, "orden", 0));
	$pln_turno_novedad->setEstado(Gral::getVars(2, "estado", 0));
	$pln_turno_novedad->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pln_turno_novedad->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pln_turno_novedad->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pln_turno_novedad->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pln_turno_novedad->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pln_turno_novedad/pln_turno_novedad_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pln_turno_novedad' width='90%'>
        
				<tr>
				  <td  id="label_pln_turno_novedad_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_turno_novedad_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pln_turno_novedad_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pln_turno_novedad_txt_descripcion' value='<?php Gral::_echoTxt($pln_turno_novedad->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pln_turno_novedad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_turno_novedad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_turno_novedad_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_turno_novedad_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_turno_novedad_cmb_pln_turno_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pln_turno_id' ?>" >
				  
                                        <?php Lang::_lang('PlnTurno', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_turno_novedad_cmb_pln_turno_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pln_turno_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pln_turno_novedad_cmb_pln_turno_id', Gral::getCmbFiltro(PlnTurno::getPlnTurnosCmb(), '...'), $pln_turno_novedad->getPlnTurnoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ALTA_CMB_EDIT_PLN_TURNO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pln_turno_novedad_cmb_pln_turno_id" clase_id="pln_turno" prefijo='pln_turno_novedad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pln_turno_id" <?php echo ($pln_turno_novedad->getPlnTurnoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pln_turno_novedad_cmb_pln_turno_id" clase_id="pln_turno" prefijo='pln_turno_novedad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pln_turno_novedad_cmb_pln_turno_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pln_turno_novedad_alta_pln_turno_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_turno_novedad_alta_pln_turno_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_turno_novedad_alta_pln_turno_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_turno_novedad_alta_pln_turno_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pln_turno_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_turno_novedad_cmb_gral_novedad_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_novedad_id' ?>" >
				  
                                        <?php Lang::_lang('GralNovedad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_turno_novedad_cmb_gral_novedad_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('gral_novedad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pln_turno_novedad_cmb_gral_novedad_id', Gral::getCmbFiltro(GralNovedad::getGralNovedadsCmb(), '...'), $pln_turno_novedad->getGralNovedadId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ALTA_CMB_EDIT_GRAL_NOVEDAD')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pln_turno_novedad_cmb_gral_novedad_id" clase_id="gral_novedad" prefijo='pln_turno_novedad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_novedad_id" <?php echo ($pln_turno_novedad->getGralNovedadId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pln_turno_novedad_cmb_gral_novedad_id" clase_id="gral_novedad" prefijo='pln_turno_novedad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pln_turno_novedad_cmb_gral_novedad_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pln_turno_novedad_alta_gral_novedad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_turno_novedad_alta_gral_novedad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_turno_novedad_alta_gral_novedad_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_turno_novedad_alta_gral_novedad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_novedad_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_turno_novedad_cmb_pln_jornada_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pln_jornada_id' ?>" >
				  
                                        <?php Lang::_lang('PlnJornada', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_turno_novedad_cmb_pln_jornada_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pln_jornada_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pln_turno_novedad_cmb_pln_jornada_id', Gral::getCmbFiltro(PlnJornada::getPlnJornadasCmb(), '...'), $pln_turno_novedad->getPlnJornadaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ALTA_CMB_EDIT_PLN_JORNADA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pln_turno_novedad_cmb_pln_jornada_id" clase_id="pln_jornada" prefijo='pln_turno_novedad_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pln_jornada_id" <?php echo ($pln_turno_novedad->getPlnJornadaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pln_turno_novedad_cmb_pln_jornada_id" clase_id="pln_jornada" prefijo='pln_turno_novedad_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pln_turno_novedad_cmb_pln_jornada_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pln_turno_novedad_alta_pln_jornada_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_turno_novedad_alta_pln_jornada_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_turno_novedad_alta_pln_jornada_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_turno_novedad_alta_pln_jornada_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pln_jornada_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_turno_novedad_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Credencial', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_turno_novedad_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pln_turno_novedad_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pln_turno_novedad_txt_codigo' value='<?php Gral::_echoTxt($pln_turno_novedad->getCodigo(), true) ?>' size='20' />            
                    <?php if(Lang::_lang('help_pln_turno_novedad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_turno_novedad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_turno_novedad_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_turno_novedad_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pln_turno_novedad_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pln_turno_novedad_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pln_turno_novedad_txa_observacion' rows='10' cols='50' id='pln_turno_novedad_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pln_turno_novedad->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pln_turno_novedad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pln_turno_novedad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pln_turno_novedad_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pln_turno_novedad_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pln_turno_novedad->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pln_turno_novedad_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pln_turno_novedad'/>
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

