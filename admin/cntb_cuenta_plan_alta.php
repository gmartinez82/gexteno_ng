<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cntb_cuenta_plan';
$db_nombre_pagina = 'cntb_cuenta_plan_alta';


$cntb_cuenta_plan = new CntbCuentaPlan();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $cntb_cuenta_plan = new CntbCuentaPlan();
    if(trim($hdn_id) != '') $cntb_cuenta_plan->setId($hdn_id, false);
	$cntb_cuenta_plan->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$cntb_cuenta_plan->setCodigo(Gral::getVars(1, "txt_codigo"));
	$cntb_cuenta_plan->setPhpClase(Gral::getVars(1, "txt_php_clase"));
	$cntb_cuenta_plan->setBdTabla(Gral::getVars(1, "txt_bd_tabla"));
	$cntb_cuenta_plan->setObservacion(Gral::getVars(1, "txa_observacion"));
	$cntb_cuenta_plan->setOrden(Gral::getVars(1, "txt_orden", 0));
	$cntb_cuenta_plan->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$cntb_cuenta_plan->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$cntb_cuenta_plan->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$cntb_cuenta_plan->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$cntb_cuenta_plan->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$cntb_cuenta_plan_estado = new CntbCuentaPlan();
	if(trim($hdn_id) != ''){
            $cntb_cuenta_plan_estado->setId($hdn_id);            
            $cntb_cuenta_plan->setEstado($cntb_cuenta_plan_estado->getEstado());
	}else{            
            $cntb_cuenta_plan->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_cuenta_plan->control();
			if(!$error->getExisteError()){
				$cntb_cuenta_plan->saveDesdeBackend();				
				
				$cntb_cuenta_plan->wrArchivoXML();
								
				header('Location: ?cs=1&id='.$cntb_cuenta_plan->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_cuenta_plan->control();
			if(!$error->getExisteError()){
				$cntb_cuenta_plan->saveDesdeBackend();
				
				$cntb_cuenta_plan->wrArchivoXML();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$cntb_cuenta_plan->setId($hdn_id);
	}else{
	
	$cntb_cuenta_plan->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cntb_cuenta_plan->setCodigo(Gral::getVars(2, "codigo", ''));
	$cntb_cuenta_plan->setPhpClase(Gral::getVars(2, "php_clase", ''));
	$cntb_cuenta_plan->setBdTabla(Gral::getVars(2, "bd_tabla", ''));
	$cntb_cuenta_plan->setObservacion(Gral::getVars(2, "observacion", ''));
	$cntb_cuenta_plan->setOrden(Gral::getVars(2, "orden", 0));
	$cntb_cuenta_plan->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_cuenta_plan->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_cuenta_plan->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_cuenta_plan->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_cuenta_plan->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('CntbCuentaPlan') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CntbCuentaPlan::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CntbCuentaPlan::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_PLAN_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_cntb_cuenta_plan'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_cuenta_plan_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getDescripcion()) ?>' size='50' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_cuenta_plan_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getCodigo()) ?>' size='40' />

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
                <td id="label_txt_php_clase" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_php_clase' ?>" >

                    <?php Lang::_lang('PHP Clase', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_cuenta_plan_alta&atributo=php_clase' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_php_clase" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('php_clase')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_php_clase' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_php_clase' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getPhpClase()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_php_clase', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_php_clase', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_php_clase', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_php_clase', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('php_clase')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_bd_tabla" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_bd_tabla' ?>" >

                    <?php Lang::_lang('BD Tabla', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_cuenta_plan_alta&atributo=bd_tabla' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_bd_tabla" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('bd_tabla')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_bd_tabla' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_bd_tabla' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getBdTabla()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_bd_tabla', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_bd_tabla', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_bd_tabla', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_bd_tabla', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('bd_tabla')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cntb_cuenta_plan_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($cntb_cuenta_plan->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_cuenta_plan->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CntbCuentaPlan::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CntbCuentaPlan::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($cntb_cuenta_plan->getId()) != ''){ ?>
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

