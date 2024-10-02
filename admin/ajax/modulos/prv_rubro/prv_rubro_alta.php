<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_RUBRO_ALTA')){
    echo "No tiene asignada la credencial PRV_RUBRO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_rubro';
$db_nombre_pagina = 'prv_rubro_alta';

$prv_rubro = new PrvRubro();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_rubro = new PrvRubro();
	if(trim($hdn_id) != '') $prv_rubro->setId($hdn_id, false);
	$prv_rubro->setDescripcion(Gral::getVars(1, "prv_rubro_txt_descripcion"));
	$prv_rubro->setCodigo(Gral::getVars(1, "prv_rubro_txt_codigo"));
	$prv_rubro->setObservacion(Gral::getVars(1, "prv_rubro_txa_observacion"));
	$prv_rubro->setOrden(Gral::getVars(1, "prv_rubro_txt_orden", 0));
	$prv_rubro->setEstado(Gral::getVars(1, "prv_rubro__estado", 0));
	$prv_rubro->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_rubro_txt_creado")));
	$prv_rubro->setCreadoPor(Gral::getVars(1, "prv_rubro__creado_por", 0));
	$prv_rubro->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_rubro_txt_modificado")));
	$prv_rubro->setModificadoPor(Gral::getVars(1, "prv_rubro__modificado_por", 0));

	$prv_rubro_estado = new PrvRubro();
	if(trim($hdn_id) != ''){
		$prv_rubro_estado->setId($hdn_id);
		$prv_rubro->setEstado($prv_rubro_estado->getEstado());
				
	}else{
		$prv_rubro->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $prv_rubro->control();
			if(!$error->getExisteError()){
				$prv_rubro->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_rubro_alta.php?cs=1&id='.$prv_rubro->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_rubro->control();
			if(!$error->getExisteError()){
				$prv_rubro->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_rubro_alta.php?cs=1');
				$prv_rubro = new PrvRubro();
			}
		break;
	}
	Gral::setSes('PrvRubro_ULTIMO_INSERTADO', $prv_rubro->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_rubro_id = Gral::getVars(2, $prefijo.'cmb_prv_rubro_id', 0);
	if($cmb_prv_rubro_id != 0){
		$prv_rubro = PrvRubro::getOxId($cmb_prv_rubro_id);
	}else{
	
	$prv_rubro->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$prv_rubro->setCodigo(Gral::getVars(2, "codigo", ''));
	$prv_rubro->setObservacion(Gral::getVars(2, "observacion", ''));
	$prv_rubro->setOrden(Gral::getVars(2, "orden", 0));
	$prv_rubro->setEstado(Gral::getVars(2, "estado", 0));
	$prv_rubro->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_rubro->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$prv_rubro->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$prv_rubro->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_rubro->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_rubro/prv_rubro_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_rubro' width='90%'>
        
				<tr>
				  <td  id="label_prv_rubro_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_rubro_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_rubro_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_rubro_txt_descripcion' value='<?php Gral::_echoTxt($prv_rubro->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_prv_rubro_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_rubro_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_rubro_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_rubro_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_rubro_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_rubro_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='prv_rubro_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='prv_rubro_txt_codigo' value='<?php Gral::_echoTxt($prv_rubro->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_prv_rubro_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_rubro_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_rubro_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_rubro_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_rubro_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_rubro_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='prv_rubro_txa_observacion' rows='10' cols='50' id='prv_rubro_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($prv_rubro->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_prv_rubro_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_rubro_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_rubro_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_rubro_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_rubro->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_rubro_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_rubro'/>
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

