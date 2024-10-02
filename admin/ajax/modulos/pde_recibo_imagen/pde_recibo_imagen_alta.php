<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_RECIBO_IMAGEN_ALTA')){
    echo "No tiene asignada la credencial PDE_RECIBO_IMAGEN_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_recibo_imagen';
$db_nombre_pagina = 'pde_recibo_imagen_alta';

$pde_recibo_imagen = new PdeReciboImagen();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_recibo_imagen = new PdeReciboImagen();
	if(trim($hdn_id) != '') $pde_recibo_imagen->setId($hdn_id, false);
	$pde_recibo_imagen->setPdeReciboId(Gral::getVars(1, "pde_recibo_imagen_dbsug_pde_recibo_id", null));
	$pde_recibo_imagen->setDescripcion(Gral::getVars(1, "pde_recibo_imagen_txt_descripcion"));
	$pde_recibo_imagen->setCodigo(Gral::getVars(1, "pde_recibo_imagen_txt_codigo"));
	$pde_recibo_imagen->setObservacion(Gral::getVars(1, "pde_recibo_imagen_txa_observacion"));
	$pde_recibo_imagen->setArchivo(Gral::getVars(1, "pde_recibo_imagen_file_archivo"));
	$pde_recibo_imagen->setPeso(Gral::getVars(1, "pde_recibo_imagen_txt_peso"));
	$pde_recibo_imagen->setTipo(Gral::getVars(1, "pde_recibo_imagen_txt_tipo"));
	$pde_recibo_imagen->setAlto(Gral::getVars(1, "pde_recibo_imagen_txt_alto"));
	$pde_recibo_imagen->setAncho(Gral::getVars(1, "pde_recibo_imagen_txt_ancho"));
	$pde_recibo_imagen->setOrden(Gral::getVars(1, "pde_recibo_imagen_txt_orden", 0));
	$pde_recibo_imagen->setEstado(Gral::getVars(1, "pde_recibo_imagen__estado", 0));
	$pde_recibo_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_imagen_txt_creado")));
	$pde_recibo_imagen->setCreadoPor(Gral::getVars(1, "pde_recibo_imagen__creado_por", null));
	$pde_recibo_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_imagen_txt_modificado")));
	$pde_recibo_imagen->setModificadoPor(Gral::getVars(1, "pde_recibo_imagen__modificado_por", null));

	$pde_recibo_imagen_estado = new PdeReciboImagen();
	if(trim($hdn_id) != ''){
		$pde_recibo_imagen_estado->setId($hdn_id);
		$pde_recibo_imagen->setEstado($pde_recibo_imagen_estado->getEstado());
				
	}else{
		$pde_recibo_imagen->setEstado(1);
				
	}
	

	$pde_recibo_imagen_existente = new PdeReciboImagen();
	if(trim($hdn_id) != ''){
		$pde_recibo_imagen_existente->setId($hdn_id);
		$pde_recibo_imagen->setArchivo($pde_recibo_imagen_existente->getArchivo());
		$pde_recibo_imagen->setPeso($pde_recibo_imagen_existente->getPeso());
		$pde_recibo_imagen->setTipo($pde_recibo_imagen_existente->getTipo());
		$pde_recibo_imagen->setOrden($pde_recibo_imagen_existente->getOrden());
		$pde_recibo_imagen->setAlto($pde_recibo_imagen_existente->getAlto());
		$pde_recibo_imagen->setAncho($pde_recibo_imagen_existente->getAncho());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_recibo_imagen->control();
			if(!$error->getExisteError()){
				$pde_recibo_imagen->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_recibo_imagen_alta.php?cs=1&id='.$pde_recibo_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_recibo_imagen->control();
			if(!$error->getExisteError()){
				$pde_recibo_imagen->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_recibo_imagen_alta.php?cs=1');
				$pde_recibo_imagen = new PdeReciboImagen();
			}
		break;
	}
	Gral::setSes('PdeReciboImagen_ULTIMO_INSERTADO', $pde_recibo_imagen->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_recibo_imagen_id = Gral::getVars(2, $prefijo.'cmb_pde_recibo_imagen_id', 0);
	if($cmb_pde_recibo_imagen_id != 0){
		$pde_recibo_imagen = PdeReciboImagen::getOxId($cmb_pde_recibo_imagen_id);
	}else{
	
	$pde_recibo_imagen->setPdeReciboId(Gral::getVars(2, "pde_recibo_id", 'null'));
	$pde_recibo_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_recibo_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_recibo_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_recibo_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$pde_recibo_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$pde_recibo_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$pde_recibo_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$pde_recibo_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	$pde_recibo_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$pde_recibo_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$pde_recibo_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_recibo_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_recibo_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_recibo_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_recibo_imagen->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_recibo_imagen/pde_recibo_imagen_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recibo_imagen' width='90%'>
        
				<tr>
				  <td  id="label_pde_recibo_imagen_dbsug_pde_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_imagen_dbsug_pde_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_recibo_imagen_dbsug_pde_recibo', 'ajax/modulos/pde_recibo/pde_recibo_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_recibo_imagen->getPdeReciboId(), $pde_recibo_imagen->getPdeRecibo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_recibo_imagen_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_imagen_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_imagen_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_imagen_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_imagen_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_imagen_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_imagen_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_imagen_txt_descripcion' value='<?php Gral::_echoTxt($pde_recibo_imagen->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_recibo_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_imagen_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_imagen_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_imagen_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_imagen_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_recibo_imagen_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_imagen_txt_codigo' value='<?php Gral::_echoTxt($pde_recibo_imagen->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_recibo_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_imagen_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_imagen_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_recibo_imagen_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_recibo_imagen_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_recibo_imagen_txa_observacion' rows='10' cols='50' id='pde_recibo_imagen_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recibo_imagen->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_recibo_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_recibo_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_recibo_imagen_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_recibo_imagen_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recibo_imagen->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recibo_imagen_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recibo_imagen'/>
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

