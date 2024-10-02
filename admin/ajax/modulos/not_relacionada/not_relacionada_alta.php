<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('NOT_RELACIONADA_ALTA')){
    echo "No tiene asignada la credencial NOT_RELACIONADA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'not_relacionada';
$db_nombre_pagina = 'not_relacionada_alta';

$not_relacionada = new NotRelacionada();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$not_relacionada = new NotRelacionada();
	if(trim($hdn_id) != '') $not_relacionada->setId($hdn_id, false);
	$not_relacionada->setDescripcion(Gral::getVars(1, "not_relacionada_txt_descripcion"));
	$not_relacionada->setNotNoticiaId(Gral::getVars(1, "not_relacionada_dbsug_not_noticia_id", null));
	$not_relacionada->setNotNoticiaRelacionada(Gral::getVars(1, "not_relacionada_dbsug_not_noticia_relacionada_id", null));
	$not_relacionada->setCodigo(Gral::getVars(1, "not_relacionada_txt_codigo"));
	$not_relacionada->setObservacion(Gral::getVars(1, "not_relacionada_txa_observacion"));
	$not_relacionada->setOrden(Gral::getVars(1, "not_relacionada_txt_orden", 0));
	$not_relacionada->setEstado(Gral::getVars(1, "not_relacionada__estado", 0));
	$not_relacionada->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_relacionada_txt_creado")));
	$not_relacionada->setCreadoPor(Gral::getVars(1, "not_relacionada__creado_por", 0));
	$not_relacionada->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "not_relacionada_txt_modificado")));
	$not_relacionada->setModificadoPor(Gral::getVars(1, "not_relacionada__modificado_por", 0));

	$not_relacionada_estado = new NotRelacionada();
	if(trim($hdn_id) != ''){
		$not_relacionada_estado->setId($hdn_id);
		$not_relacionada->setEstado($not_relacionada_estado->getEstado());
				
	}else{
		$not_relacionada->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $not_relacionada->control();
			if(!$error->getExisteError()){
				$not_relacionada->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: not_relacionada_alta.php?cs=1&id='.$not_relacionada->getId());
			}
		break;
		case 'guardarnvo':
			$error = $not_relacionada->control();
			if(!$error->getExisteError()){
				$not_relacionada->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: not_relacionada_alta.php?cs=1');
				$not_relacionada = new NotRelacionada();
			}
		break;
	}
	Gral::setSes('NotRelacionada_ULTIMO_INSERTADO', $not_relacionada->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_not_relacionada_id = Gral::getVars(2, $prefijo.'cmb_not_relacionada_id', 0);
	if($cmb_not_relacionada_id != 0){
		$not_relacionada = NotRelacionada::getOxId($cmb_not_relacionada_id);
	}else{
	
	$not_relacionada->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$not_relacionada->setNotNoticiaId(Gral::getVars(2, "not_noticia_id", 'null'));
	$not_relacionada->setNotNoticiaRelacionada(Gral::getVars(2, "not_noticia_relacionada", 'null'));
	$not_relacionada->setCodigo(Gral::getVars(2, "codigo", ''));
	$not_relacionada->setObservacion(Gral::getVars(2, "observacion", ''));
	$not_relacionada->setOrden(Gral::getVars(2, "orden", 0));
	$not_relacionada->setEstado(Gral::getVars(2, "estado", 0));
	$not_relacionada->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$not_relacionada->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$not_relacionada->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$not_relacionada->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $not_relacionada->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/not_relacionada/not_relacionada_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_not_relacionada' width='90%'>
        
				<tr>
				  <td  id="label_not_relacionada_dbsug_not_noticia_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_not_noticia_id' ?>" >
				  
                                        <?php Lang::_lang('NotNoticia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_relacionada_dbsug_not_noticia_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('not_noticia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'not_relacionada_dbsug_not_noticia', 'ajax/modulos/not_noticia/not_noticia_dbsuggest.php', false, true, '', 'Ingrese ...', $not_relacionada->getNotNoticiaId(), $not_relacionada->getNotNoticia()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_not_relacionada_alta_not_noticia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_relacionada_alta_not_noticia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_relacionada_alta_not_noticia_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_relacionada_alta_not_noticia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('not_noticia_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_relacionada_dbsug_not_noticia_relacionada" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_not_noticia_relacionada' ?>" >
				  
                                        <?php Lang::_lang('NotNoticiaRelacionada', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_relacionada_dbsug_not_noticia_relacionada" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('not_noticia_relacionada')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'not_relacionada_dbsug_not_noticia_relacionada', 'ajax/modulos/not_noticia/not_noticia_dbsuggest.php', false, true, '', 'Ingrese ...', $not_relacionada->getNotNoticiaRelacionada(), ($not_relacionada->getNotNoticiaRelacionada() != 'null') ? NotNoticia::getOxId($not_relacionada->getNotNoticiaRelacionada())->getDescripcion(): '') ?>            
                    <?php if(Lang::_lang('help_not_relacionada_alta_not_noticia_relacionada', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_relacionada_alta_not_noticia_relacionada', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_relacionada_alta_not_noticia_relacionada', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_relacionada_alta_not_noticia_relacionada', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('not_noticia_relacionada')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_relacionada_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_relacionada_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='not_relacionada_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='not_relacionada_txt_codigo' value='<?php Gral::_echoTxt($not_relacionada->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_not_relacionada_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_relacionada_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_relacionada_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_relacionada_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_not_relacionada_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_not_relacionada_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='not_relacionada_txa_observacion' rows='10' cols='50' id='not_relacionada_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($not_relacionada->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_not_relacionada_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_not_relacionada_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_not_relacionada_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_not_relacionada_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($not_relacionada->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_not_relacionada_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='not_relacionada'/>
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

