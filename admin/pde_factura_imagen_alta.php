<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_factura_imagen';
$db_nombre_pagina = 'pde_factura_imagen_alta';


$pde_factura_imagen = new PdeFacturaImagen();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $pde_factura_imagen = new PdeFacturaImagen();
    if(trim($hdn_id) != '') $pde_factura_imagen->setId($hdn_id, false);
	$pde_factura_imagen->setPdeFacturaId(Gral::getVars(1, "dbsug_pde_factura_id", null));
	$pde_factura_imagen->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$pde_factura_imagen->setCodigo(Gral::getVars(1, "txt_codigo"));
	$pde_factura_imagen->setObservacion(Gral::getVars(1, "txa_observacion"));
	$pde_factura_imagen->setArchivo(Gral::getVars(1, "file_archivo"));
	$pde_factura_imagen->setPeso(Gral::getVars(1, "txt_peso"));
	$pde_factura_imagen->setTipo(Gral::getVars(1, "txt_tipo"));
	$pde_factura_imagen->setAlto(Gral::getVars(1, "txt_alto"));
	$pde_factura_imagen->setAncho(Gral::getVars(1, "txt_ancho"));
	$pde_factura_imagen->setOrden(Gral::getVars(1, "txt_orden", 0));
	$pde_factura_imagen->setEstado(Gral::getVars(1, "_estado", 0));
	$pde_factura_imagen->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$pde_factura_imagen->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$pde_factura_imagen->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$pde_factura_imagen->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$pde_factura_imagen_estado = new PdeFacturaImagen();
	if(trim($hdn_id) != ''){
            $pde_factura_imagen_estado->setId($hdn_id);            
            $pde_factura_imagen->setEstado($pde_factura_imagen_estado->getEstado());
	}else{            
            $pde_factura_imagen->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_factura_imagen->control();
			if(!$error->getExisteError()){
				$pde_factura_imagen->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$pde_factura_imagen->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_factura_imagen->control();
			if(!$error->getExisteError()){
				$pde_factura_imagen->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$pde_factura_imagen->setId($hdn_id);
	}else{
	
	$pde_factura_imagen->setPdeFacturaId(Gral::getVars(2, "pde_factura_id", 'null'));
	$pde_factura_imagen->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_factura_imagen->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_factura_imagen->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_factura_imagen->setArchivo(Gral::getVars(2, "archivo", ''));
	$pde_factura_imagen->setPeso(Gral::getVars(2, "peso", ''));
	$pde_factura_imagen->setTipo(Gral::getVars(2, "tipo", ''));
	$pde_factura_imagen->setAlto(Gral::getVars(2, "alto", ''));
	$pde_factura_imagen->setAncho(Gral::getVars(2, "ancho", ''));
	$pde_factura_imagen->setOrden(Gral::getVars(2, "orden", 0));
	$pde_factura_imagen->setEstado(Gral::getVars(2, "estado", 0));
	$pde_factura_imagen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_factura_imagen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_factura_imagen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_factura_imagen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' enctype="multipart/form-data">
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeFacturaImagens') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeFacturaImagen::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeFacturaImagen::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_IMAGEN_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pde_factura_imagen'>
        
            <tr>
                <td id="label_dbsug_pde_factura_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pde_factura_id' ?>" >

                    <?php Lang::_lang('PdeFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_imagen_alta&atributo=pde_factura_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_pde_factura_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pde_factura_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_pde_factura', 'ajax/modulos/pde_factura/pde_factura_dbsuggest.php', false, true, '', 'Ingrese ...', $pde_factura_imagen->getPdeFacturaId(), $pde_factura_imagen->getPdeFactura()->getDescripcion(), 40, false, $error_input_css) ?>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_factura_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_imagen_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($pde_factura_imagen->getDescripcion()) ?>' size='50' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_imagen_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($pde_factura_imagen->getCodigo()) ?>' size='40' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pde_factura_imagen_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pde_factura_imagen->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_factura_imagen->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdeFacturaImagen::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdeFacturaImagen::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($pde_factura_imagen->getId()) != ''){ ?>
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

