<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'veh_coche';
$db_nombre_pagina = 'veh_coche_alta';


$veh_coche = new VehCoche();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $veh_coche = new VehCoche();
    if(trim($hdn_id) != '') $veh_coche->setId($hdn_id, false);
	$veh_coche->setVehModeloId(Gral::getVars(1, "cmb_veh_modelo_id", null));
	$veh_coche->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$veh_coche->setVersion(Gral::getVars(1, "txt_version"));
	$veh_coche->setCodigo(Gral::getVars(1, "txt_codigo"));
	$veh_coche->setPatente(Gral::getVars(1, "txt_patente"));
	$veh_coche->setAnio(Gral::getVars(1, "txt_anio", 0));
	$veh_coche->setObservacion(Gral::getVars(1, "txa_observacion"));
	$veh_coche->setOrden(Gral::getVars(1, "txt_orden", 0));
	$veh_coche->setEstado(Gral::getVars(1, "_estado", 0));
	$veh_coche->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$veh_coche->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$veh_coche->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$veh_coche->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$veh_coche_estado = new VehCoche();
	if(trim($hdn_id) != ''){
            $veh_coche_estado->setId($hdn_id);            
            $veh_coche->setEstado($veh_coche_estado->getEstado());
	}else{            
            $veh_coche->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $veh_coche->control();
			if(!$error->getExisteError()){
				$veh_coche->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$veh_coche->getId());
			}
		break;
		case 'guardarnvo':
			$error = $veh_coche->control();
			if(!$error->getExisteError()){
				$veh_coche->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$veh_coche->setId($hdn_id);
	}else{
	
	$veh_coche->setVehModeloId(Gral::getVars(2, "veh_modelo_id", 'null'));
	$veh_coche->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$veh_coche->setVersion(Gral::getVars(2, "version", ''));
	$veh_coche->setCodigo(Gral::getVars(2, "codigo", ''));
	$veh_coche->setPatente(Gral::getVars(2, "patente", ''));
	$veh_coche->setAnio(Gral::getVars(2, "anio", 0));
	$veh_coche->setObservacion(Gral::getVars(2, "observacion", ''));
	$veh_coche->setOrden(Gral::getVars(2, "orden", 0));
	$veh_coche->setEstado(Gral::getVars(2, "estado", 0));
	$veh_coche->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$veh_coche->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$veh_coche->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$veh_coche->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('VehCoches') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VehCoche::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VehCoche::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_veh_coche'>
        
                <tr>
                    <td id="label_cmb_veh_marca_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_veh_marca_id' ?>" >

                        <?php Lang::_lang('Marca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                        <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                          <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=veh_coche_alta&atributo=veh_marca_id' modulo_metodo_init='setInit()'>
                              <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                          </div>
                        <?php } ?>

                    </td>

                    <td id="dato_cmb_veh_marca_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('veh_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                      <?php
                          $cmb_veh_marca_id = Gral::getVars(1, 'cmb_veh_marca_id', 0);
					if(!Gral::esPost() and $veh_coche->getId()) $cmb_veh_marca_id = $veh_coche->getVehModelo()->getVehMarca()->getId();			
                    $c = new Criterio(VehMarca::SES_CRITERIOS);
                    $c->add('veh_marca.x', $x, Criterio::IGUAL);
                    $c->addOrden('descripcion', 'asc');
                    $c->addTabla('veh_marca');
                    $c->setCriterios();
                    ?>

                    <?php Html::html_dib_select(1, 'cmb_veh_marca_id', Gral::getCmbFiltro(VehMarca::getVehMarcasCmbF(null, $c), '...'), $cmb_veh_marca_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="x" elemento_id="cmb_veh_marca_id"')?>

                    <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_CMB_EDIT_VEH_MARCA')){ ?>			
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cmb_veh_marca_id" clase_id="veh_marca" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_veh_marca_id" <?php echo ($cmb_veh_marca_id == '') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cmb_veh_marca_id" clase_id="veh_marca" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cmb_veh_marca_id"></div>
                    </div>
                    <?php } ?>

                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>   

                        <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_veh_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_veh_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>   

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('veh_marca_id')->getMensaje()) ?></div>

                    </td>
                </tr>
		
                <tr>
                    <td id="label_cmb_veh_modelo_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_veh_modelo_id' ?>" >

                        <?php Lang::_lang('Modelo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                        <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                          <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=veh_coche_alta&atributo=veh_modelo_id' modulo_metodo_init='setInit()'>
                              <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                          </div>
                        <?php } ?>

                    </td>

                    <td id="dato_cmb_veh_modelo_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('veh_modelo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                      <?php
                          $cmb_veh_modelo_id = Gral::getVars(1, 'cmb_veh_modelo_id', 0);
					if(!Gral::esPost() and $veh_coche->getId()) $cmb_veh_modelo_id = $veh_coche->getVehModelo()->getId();			
                    $c = new Criterio(VehModelo::SES_CRITERIOS);
                    $c->add('veh_modelo.veh_marca_id', $cmb_veh_marca_id, Criterio::IGUAL);
                    $c->addOrden('descripcion', 'asc');
                    $c->addTabla('veh_modelo');
                    $c->setCriterios();
                    ?>

                    <?php Html::html_dib_select(1, 'cmb_veh_modelo_id', Gral::getCmbFiltro(VehModelo::getVehModelosCmbF(null, $c), '...'), $cmb_veh_modelo_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_veh_marca_id" elemento_id="cmb_veh_modelo_id"')?>

                    <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA_CMB_EDIT_VEH_MODELO')){ ?>			
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cmb_veh_modelo_id" clase_id="veh_modelo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_veh_modelo_id" <?php echo ($cmb_veh_modelo_id == '') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cmb_veh_modelo_id" clase_id="veh_modelo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cmb_veh_modelo_id"></div>
                    </div>
                    <?php } ?>

                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_veh_modelo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_veh_modelo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>   

                        <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_veh_modelo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_veh_modelo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>   

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('veh_modelo_id')->getMensaje()) ?></div>

                    </td>
                </tr>
		
            <tr>
                <td id="label_txt_version" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_version' ?>" >

                    <?php Lang::_lang('Version', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=veh_coche_alta&atributo=version' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_version" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('version')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_version' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_version' value='<?php Gral::_echoTxt($veh_coche->getVersion()) ?>' size='50' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_version', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_version', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_version', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_version', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('version')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_patente" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_patente' ?>" >

                    <?php Lang::_lang('Patente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=veh_coche_alta&atributo=patente' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_patente" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('patente')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_patente' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_patente' value='<?php Gral::_echoTxt($veh_coche->getPatente()) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_patente', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_patente', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_patente', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_patente', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('patente')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_anio" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_anio' ?>" >

                    <?php Lang::_lang('Anio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=veh_coche_alta&atributo=anio' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_anio" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('anio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_anio' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_anio' value='<?php Gral::_echoTxt($veh_coche->getAnio()) ?>' size='10' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_anio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_anio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_anio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_anio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('anio')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=veh_coche_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($veh_coche->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($veh_coche->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VehCoche::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VehCoche::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($veh_coche->getId()) != ''){ ?>
    <div class="alta relaciones">
		
        <div class="imagenes">
            <div class="titulo"><?php Lang::_lang('VehCocheImagens') ?></div>
            <div class="datos">
                <?php
                $imagenes = $veh_coche->getVehCocheImagens();
                if(count($imagenes) > 0){ 
                ?>
                    <div class="imagen <?php echo (count($imagenes) > 3) ? 'slide' : '' ?>">
                        <?php foreach($imagenes as $imagen){ ?>
                            <a href="<?php echo $imagen->getPathImagen() ?>" rel="veh_coche_<?php echo $veh_coche->getId() ?>" title="<?php echo $imagen->getDescripcion() ?>">
                                <img class="imagen" src="<?php echo $imagen->getPathImagen(true) ?>" width="120" alt="imagen" />
                            </a>
                        <?php } ?>
                    </div>
                <?php }else{ ?>
                    <div class="comentario"><?php Lang::_lang('No existen aun imagenes cargadas') ?></div>
                <?php } ?>
            </div>
            <div class="link"><a href='veh_coche_imagen_gestor.php?id=<?php echo $veh_coche->getId() ?>'><?php Lang::_lang('Ir al Gestor de Imagenes') ?></a></div>
        </div>
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/veh_coche/bloque_relacion_vta_presupuesto_veh_coche.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'veh_coche_set.php' ?>
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

