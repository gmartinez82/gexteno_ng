<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cli_tipo_medio_digital';
$db_nombre_pagina = 'cli_tipo_medio_digital_alta';


$cli_tipo_medio_digital = new CliTipoMedioDigital();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $cli_tipo_medio_digital = new CliTipoMedioDigital();
    if(trim($hdn_id) != '') $cli_tipo_medio_digital->setId($hdn_id, false);
	$cli_tipo_medio_digital->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$cli_tipo_medio_digital->setCodigo(Gral::getVars(1, "txt_codigo"));
	$cli_tipo_medio_digital->setObservacion(Gral::getVars(1, "txa_observacion"));
	$cli_tipo_medio_digital->setOrden(Gral::getVars(1, "txt_orden", 0));
	$cli_tipo_medio_digital->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$cli_tipo_medio_digital->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$cli_tipo_medio_digital->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$cli_tipo_medio_digital->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$cli_tipo_medio_digital->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$cli_tipo_medio_digital_estado = new CliTipoMedioDigital();
	if(trim($hdn_id) != ''){
            $cli_tipo_medio_digital_estado->setId($hdn_id);            
            $cli_tipo_medio_digital->setEstado($cli_tipo_medio_digital_estado->getEstado());
	}else{            
            $cli_tipo_medio_digital->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_tipo_medio_digital->control();
			if(!$error->getExisteError()){
				$cli_tipo_medio_digital->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$cli_tipo_medio_digital->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_tipo_medio_digital->control();
			if(!$error->getExisteError()){
				$cli_tipo_medio_digital->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$cli_tipo_medio_digital->setId($hdn_id);
	}else{
	
	$cli_tipo_medio_digital->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_tipo_medio_digital->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_tipo_medio_digital->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_tipo_medio_digital->setOrden(Gral::getVars(2, "orden", 0));
	$cli_tipo_medio_digital->setEstado(Gral::getVars(2, "estado", 0));
	$cli_tipo_medio_digital->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_tipo_medio_digital->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_tipo_medio_digital->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_tipo_medio_digital->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
<?php include 'parciales/encabezado.php'?>
<?php include 'parciales/user.php';?>
<?php include 'parciales/mensajes.php' ?>
    
<div id='menu'>
    <?php include 'parciales/menuh.php' ?>
</div>

<div id='cuerpo' >
    <form id='formu' name='formu' method='post' action='' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('CliTipoMedioDigital') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliTipoMedioDigital::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliTipoMedioDigital::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('CLI_TIPO_MEDIO_DIGITAL_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_cli_tipo_medio_digital'>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_tipo_medio_digital_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($cli_tipo_medio_digital->getCodigo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_tipo_medio_digital_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($cli_tipo_medio_digital->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_tipo_medio_digital->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliTipoMedioDigital::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliTipoMedioDigital::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($cli_tipo_medio_digital->getId()) != ''){ ?>
    <div class="alta relaciones">
		
    </div>
	<?php } ?>


	  
	  </div>

        </form>
    </div>

    <div id='pie'>
        <?php include 'parciales/pie.php' ?>
    </div>

    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>

