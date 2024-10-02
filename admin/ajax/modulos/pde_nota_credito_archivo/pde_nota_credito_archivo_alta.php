<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ARCHIVO_ALTA')){
    echo "No tiene asignada la credencial PDE_NOTA_CREDITO_ARCHIVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_nota_credito_archivo';
$db_nombre_pagina = 'pde_nota_credito_archivo_alta';

$pde_nota_credito_archivo = new PdeNotaCreditoArchivo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_nota_credito_archivo = new PdeNotaCreditoArchivo();
	if(trim($hdn_id) != '') $pde_nota_credito_archivo->setId($hdn_id, false);
	$pde_nota_credito_archivo->setDescripcion(Gral::getVars(1, "pde_nota_credito_archivo_txt_descripcion"));
	$pde_nota_credito_archivo->setPdeNotaCreditoId(Gral::getVars(1, "pde_nota_credito_archivo_dbsug_pde_nota_credito_id", null));
	$pde_nota_credito_archivo->setCodigo(Gral::getVars(1, "pde_nota_credito_archivo_txt_codigo"));
	$pde_nota_credito_archivo->setObservacion(Gral::getVars(1, "pde_nota_credito_archivo_txa_observacion"));
	$pde_nota_credito_archivo->setOrden(Gral::getVars(1, "pde_nota_credito_archivo_txt_orden", 0));
	$pde_nota_credito_archivo->setEstado(Gral::getVars(1, "pde_nota_credito_archivo__estado", 0));
	$pde_nota_credito_archivo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_archivo_txt_creado")));
	$pde_nota_credito_archivo->setCreadoPor(Gral::getVars(1, "pde_nota_credito_archivo__creado_por", 0));
	$pde_nota_credito_archivo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_archivo_txt_modificado")));
	$pde_nota_credito_archivo->setModificadoPor(Gral::getVars(1, "pde_nota_credito_archivo__modificado_por", 0));
	$pde_nota_credito_archivo->setArchivo(Gral::getVars(1, "pde_nota_credito_archivo__archivo"));
	$pde_nota_credito_archivo->setPeso(Gral::getVars(1, "pde_nota_credito_archivo_txt_peso"));
	$pde_nota_credito_archivo->setTipo(Gral::getVars(1, "pde_nota_credito_archivo_txt_tipo"));

	$pde_nota_credito_archivo_estado = new PdeNotaCreditoArchivo();
	if(trim($hdn_id) != ''){
		$pde_nota_credito_archivo_estado->setId($hdn_id);
		$pde_nota_credito_archivo->setEstado($pde_nota_credito_archivo_estado->getEstado());
				
	}else{
		$pde_nota_credito_archivo->setEstado(1);
				
	}
	

	$pde_nota_credito_archivo_existente = new PdeNotaCreditoArchivo();
	if(trim($hdn_id) != ''){
		$pde_nota_credito_archivo_existente->setId($hdn_id);
		$pde_nota_credito_archivo->setArchivo($pde_nota_credito_archivo_existente->getArchivo());
		$pde_nota_credito_archivo->setPeso($pde_nota_credito_archivo_existente->getPeso());
		$pde_nota_credito_archivo->setTipo($pde_nota_credito_archivo_existente->getTipo());
		$pde_nota_credito_archivo->setOrden($pde_nota_credito_archivo_existente->getOrden());
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_nota_credito_archivo->control();
			if(!$error->getExisteError()){
				$pde_nota_credito_archivo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_nota_credito_archivo_alta.php?cs=1&id='.$pde_nota_credito_archivo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_nota_credito_archivo->control();
			if(!$error->getExisteError()){
				$pde_nota_credito_archivo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_nota_credito_archivo_alta.php?cs=1');
				$pde_nota_credito_archivo = new PdeNotaCreditoArchivo();
			}
		break;
	}
	Gral::setSes('PdeNotaCreditoArchivo_ULTIMO_INSERTADO', $pde_nota_credito_archivo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_nota_credito_archivo_id = Gral::getVars(2, $prefijo.'cmb_pde_nota_credito_archivo_id', 0);
	if($cmb_pde_nota_credito_archivo_id != 0){
		$pde_nota_credito_archivo = PdeNotaCreditoArchivo::getOxId($cmb_pde_nota_credito_archivo_id);
	}else{
	
	$pde_nota_credito_archivo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_nota_credito_archivo->setPdeNotaCreditoId(Gral::getVars(2, "pde_nota_credito_id", 'null'));
	$pde_nota_credito_archivo->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_nota_credito_archivo->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_nota_credito_archivo->setOrden(Gral::getVars(2, "orden", 0));
	$pde_nota_credito_archivo->setEstado(Gral::getVars(2, "estado", 0));
	$pde_nota_credito_archivo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_nota_credito_archivo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_nota_credito_archivo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_nota_credito_archivo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	$pde_nota_credito_archivo->setArchivo(Gral::getVars(2, "archivo", ''));
	$pde_nota_credito_archivo->setPeso(Gral::getVars(2, "peso", ''));
	$pde_nota_credito_archivo->setTipo(Gral::getVars(2, "tipo", ''));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_nota_credito_archivo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_nota_credito_archivo/pde_nota_credito_archivo_alta.php' enctype="multipart/form-data">
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_nota_credito_archivo' width='90%'>
        
				<tr>
				  <td  id="label_pde_nota_credito_archivo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_archivo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_archivo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_archivo_txt_descripcion' value='<?php Gral::_echoTxt($pde_nota_credito_archivo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_archivo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_archivo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_archivo_dbsug_pde_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_credito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeNotaCredito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_archivo_dbsug_pde_nota_credito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'pde_nota_credito_archivo_dbsug_pde_nota_credito', 'ajax/modulos/pde_nota_credito/pde_nota_credito_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_nota_credito_archivo->getPdeNotaCreditoId(), $pde_nota_credito_archivo->getPdeNotaCredito()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_pde_nota_credito_archivo_alta_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_archivo_alta_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_archivo_alta_pde_nota_credito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_archivo_alta_pde_nota_credito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_archivo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_archivo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_credito_archivo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_archivo_txt_codigo' value='<?php Gral::_echoTxt($pde_nota_credito_archivo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_credito_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_archivo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_archivo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_credito_archivo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_credito_archivo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_nota_credito_archivo_txa_observacion' rows='10' cols='50' id='pde_nota_credito_archivo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_nota_credito_archivo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_nota_credito_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_credito_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_credito_archivo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_credito_archivo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_nota_credito_archivo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_nota_credito_archivo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_nota_credito_archivo'/>
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

