<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PER_MOV_TIPO_MOVIMIENTO_ALTA')){
    echo "No tiene asignada la credencial PER_MOV_TIPO_MOVIMIENTO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'per_mov_tipo_movimiento';
$db_nombre_pagina = 'per_mov_tipo_movimiento_alta';

$per_mov_tipo_movimiento = new PerMovTipoMovimiento();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$per_mov_tipo_movimiento = new PerMovTipoMovimiento();
	if(trim($hdn_id) != '') $per_mov_tipo_movimiento->setId($hdn_id, false);
	$per_mov_tipo_movimiento->setDescripcion(Gral::getVars(1, "per_mov_tipo_movimiento_txt_descripcion"));
	$per_mov_tipo_movimiento->setCodigo(Gral::getVars(1, "per_mov_tipo_movimiento_txt_codigo"));
	$per_mov_tipo_movimiento->setObservacion(Gral::getVars(1, "per_mov_tipo_movimiento_txa_observacion"));
	$per_mov_tipo_movimiento->setOrden(Gral::getVars(1, "per_mov_tipo_movimiento_txt_orden", 0));
	$per_mov_tipo_movimiento->setEstado(Gral::getVars(1, "per_mov_tipo_movimiento_cmb_estado", 0));
	$per_mov_tipo_movimiento->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_tipo_movimiento_txt_creado")));
	$per_mov_tipo_movimiento->setCreadoPor(Gral::getVars(1, "per_mov_tipo_movimiento__creado_por", 0));
	$per_mov_tipo_movimiento->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_mov_tipo_movimiento_txt_modificado")));
	$per_mov_tipo_movimiento->setModificadoPor(Gral::getVars(1, "per_mov_tipo_movimiento__modificado_por", 0));

	$per_mov_tipo_movimiento_estado = new PerMovTipoMovimiento();
	if(trim($hdn_id) != ''){
		$per_mov_tipo_movimiento_estado->setId($hdn_id);
		$per_mov_tipo_movimiento->setEstado($per_mov_tipo_movimiento_estado->getEstado());
				
	}else{
		$per_mov_tipo_movimiento->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $per_mov_tipo_movimiento->control();
			if(!$error->getExisteError()){
				$per_mov_tipo_movimiento->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: per_mov_tipo_movimiento_alta.php?cs=1&id='.$per_mov_tipo_movimiento->getId());
			}
		break;
		case 'guardarnvo':
			$error = $per_mov_tipo_movimiento->control();
			if(!$error->getExisteError()){
				$per_mov_tipo_movimiento->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: per_mov_tipo_movimiento_alta.php?cs=1');
				$per_mov_tipo_movimiento = new PerMovTipoMovimiento();
			}
		break;
	}
	Gral::setSes('PerMovTipoMovimiento_ULTIMO_INSERTADO', $per_mov_tipo_movimiento->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_per_mov_tipo_movimiento_id = Gral::getVars(2, $prefijo.'cmb_per_mov_tipo_movimiento_id', 0);
	if($cmb_per_mov_tipo_movimiento_id != 0){
		$per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxId($cmb_per_mov_tipo_movimiento_id);
	}else{
	
	$per_mov_tipo_movimiento->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$per_mov_tipo_movimiento->setCodigo(Gral::getVars(2, "codigo", ''));
	$per_mov_tipo_movimiento->setObservacion(Gral::getVars(2, "observacion", ''));
	$per_mov_tipo_movimiento->setOrden(Gral::getVars(2, "orden", 0));
	$per_mov_tipo_movimiento->setEstado(Gral::getVars(2, "estado", 0));
	$per_mov_tipo_movimiento->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$per_mov_tipo_movimiento->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$per_mov_tipo_movimiento->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$per_mov_tipo_movimiento->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $per_mov_tipo_movimiento->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/per_mov_tipo_movimiento/per_mov_tipo_movimiento_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_per_mov_tipo_movimiento' width='90%'>
        
				<tr>
				  <td  id="label_per_mov_tipo_movimiento_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_tipo_movimiento_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_mov_tipo_movimiento_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_mov_tipo_movimiento_txt_codigo' value='<?php Gral::_echoTxt($per_mov_tipo_movimiento->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_per_mov_tipo_movimiento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_tipo_movimiento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_tipo_movimiento_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_tipo_movimiento_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_per_mov_tipo_movimiento_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_per_mov_tipo_movimiento_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='per_mov_tipo_movimiento_txa_observacion' rows='10' cols='50' id='per_mov_tipo_movimiento_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($per_mov_tipo_movimiento->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_per_mov_tipo_movimiento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_per_mov_tipo_movimiento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_per_mov_tipo_movimiento_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_per_mov_tipo_movimiento_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_mov_tipo_movimiento->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_per_mov_tipo_movimiento_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='per_mov_tipo_movimiento'/>
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

