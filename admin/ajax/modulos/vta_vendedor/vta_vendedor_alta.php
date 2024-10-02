<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA')){
    echo "No tiene asignada la credencial VTA_VENDEDOR_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_vendedor';
$db_nombre_pagina = 'vta_vendedor_alta';

$vta_vendedor = new VtaVendedor();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_vendedor = new VtaVendedor();
	if(trim($hdn_id) != '') $vta_vendedor->setId($hdn_id, false);
	$vta_vendedor->setDescripcion(Gral::getVars(1, "vta_vendedor_txt_descripcion"));
	$vta_vendedor->setGralSucursalId(Gral::getVars(1, "vta_vendedor_cmb_gral_sucursal_id", null));
	$vta_vendedor->setApellido(Gral::getVars(1, "vta_vendedor_txt_apellido"));
	$vta_vendedor->setNombre(Gral::getVars(1, "vta_vendedor_txt_nombre"));
	$vta_vendedor->setVtaTipoVendedorId(Gral::getVars(1, "vta_vendedor_cmb_vta_tipo_vendedor_id", null));
	$vta_vendedor->setEmail(Gral::getVars(1, "vta_vendedor_txt_email"));
	$vta_vendedor->setTelefono(Gral::getVars(1, "vta_vendedor_txt_telefono"));
	$vta_vendedor->setCelular(Gral::getVars(1, "vta_vendedor_txt_celular"));
	$vta_vendedor->setPorcentajeComision(Gral::getVars(1, "vta_vendedor_txt_porcentaje_comision", 0));
	$vta_vendedor->setCodigo(Gral::getVars(1, "vta_vendedor_txt_codigo"));
	$vta_vendedor->setObservacion(Gral::getVars(1, "vta_vendedor_txa_observacion"));
	$vta_vendedor->setOrden(Gral::getVars(1, "vta_vendedor_txt_orden", 0));
	$vta_vendedor->setEstado(Gral::getVars(1, "vta_vendedor_cmb_estado", 0));
	$vta_vendedor->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_txt_creado")));
	$vta_vendedor->setCreadoPor(Gral::getVars(1, "vta_vendedor__creado_por", 0));
	$vta_vendedor->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_txt_modificado")));
	$vta_vendedor->setModificadoPor(Gral::getVars(1, "vta_vendedor__modificado_por", 0));

	$vta_vendedor_estado = new VtaVendedor();
	if(trim($hdn_id) != ''){
		$vta_vendedor_estado->setId($hdn_id);
		$vta_vendedor->setEstado($vta_vendedor_estado->getEstado());
				
	}else{
		$vta_vendedor->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_vendedor->control();
			if(!$error->getExisteError()){
				$vta_vendedor->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_vendedor_alta.php?cs=1&id='.$vta_vendedor->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_vendedor->control();
			if(!$error->getExisteError()){
				$vta_vendedor->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_vendedor_alta.php?cs=1');
				$vta_vendedor = new VtaVendedor();
			}
		break;
	}
	Gral::setSes('VtaVendedor_ULTIMO_INSERTADO', $vta_vendedor->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_vendedor_id = Gral::getVars(2, $prefijo.'cmb_vta_vendedor_id', 0);
	if($cmb_vta_vendedor_id != 0){
		$vta_vendedor = VtaVendedor::getOxId($cmb_vta_vendedor_id);
	}else{
	
	$vta_vendedor->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_vendedor->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
	$vta_vendedor->setApellido(Gral::getVars(2, "apellido", ''));
	$vta_vendedor->setNombre(Gral::getVars(2, "nombre", ''));
	$vta_vendedor->setVtaTipoVendedorId(Gral::getVars(2, "vta_tipo_vendedor_id", 'null'));
	$vta_vendedor->setEmail(Gral::getVars(2, "email", ''));
	$vta_vendedor->setTelefono(Gral::getVars(2, "telefono", ''));
	$vta_vendedor->setCelular(Gral::getVars(2, "celular", ''));
	$vta_vendedor->setPorcentajeComision(Gral::getVars(2, "porcentaje_comision", 0));
	$vta_vendedor->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_vendedor->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_vendedor->setOrden(Gral::getVars(2, "orden", 0));
	$vta_vendedor->setEstado(Gral::getVars(2, "estado", 0));
	$vta_vendedor->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_vendedor->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_vendedor->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_vendedor->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_vendedor->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_vendedor/vta_vendedor_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_vendedor' width='90%'>
        
                    <tr>
                      <td id="label_vta_vendedor_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>">

                        <?php Lang::_lang('Empresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_vta_vendedor_cmb_gral_empresa_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_gral_empresa_id = Gral::getVars(1, 'cmb_gral_empresa_id', 0);
					if(!Gral::esPost() and $vta_vendedor->getId()) $cmb_gral_empresa_id = $vta_vendedor->getGralSucursal()->getGralEmpresa()->getId();			
					$c = new Criterio(GralEmpresa::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('gral_empresa');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'vta_vendedor_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmbF(null, $c), Lang::_lang('Seleccione Empresa', true)), $cmb_gral_empresa_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="vta_vendedor_x" elemento_id="cmb_gral_empresa_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="vta_vendedor_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='vta_vendedor_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($cmb_gral_empresa_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='vta_vendedor_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_vta_vendedor_cmb_gral_empresa_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_vta_vendedor_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_vta_vendedor_alta_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_vta_vendedor_cmb_gral_sucursal_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>">

                        <?php Lang::_lang('Sucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_vta_vendedor_cmb_gral_sucursal_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_gral_sucursal_id = Gral::getVars(1, 'cmb_gral_sucursal_id', 0);
					if(!Gral::esPost() and $vta_vendedor->getId()) $cmb_gral_sucursal_id = $vta_vendedor->getGralSucursal()->getId();			
					$c = new Criterio(GralSucursal::SES_CRITERIOS);
					$c->add('gral_empresa_id', $cmb_gral_empresa_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('gral_sucursal');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'vta_vendedor_cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmbF(null, $c), Lang::_lang('Seleccione Sucursal', true)), $cmb_gral_sucursal_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="vta_vendedor_cmb_gral_empresa_id" elemento_id="cmb_gral_sucursal_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="vta_vendedor_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='vta_vendedor_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($cmb_gral_sucursal_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='vta_vendedor_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_vta_vendedor_cmb_gral_sucursal_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_vta_vendedor_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_vta_vendedor_alta_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_vta_vendedor_txt_apellido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >
				  
                                        <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txt_apellido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_txt_apellido' value='<?php Gral::_echoTxt($vta_vendedor->getApellido(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_apellido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_txt_nombre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >
				  
                                        <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txt_nombre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_txt_nombre' value='<?php Gral::_echoTxt($vta_vendedor->getNombre(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_nombre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_cmb_vta_tipo_vendedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_tipo_vendedor_id' ?>" >
				  
                                        <?php Lang::_lang('VtaTipoVendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_cmb_vta_tipo_vendedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_tipo_vendedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_vendedor_cmb_vta_tipo_vendedor_id', Gral::getCmbFiltro(VtaTipoVendedor::getVtaTipoVendedorsCmb(), '...'), $vta_vendedor->getVtaTipoVendedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_CMB_EDIT_VTA_TIPO_VENDEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_vendedor_cmb_vta_tipo_vendedor_id" clase_id="vta_tipo_vendedor" prefijo='vta_vendedor_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_tipo_vendedor_id" <?php echo ($vta_vendedor->getVtaTipoVendedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_cmb_vta_tipo_vendedor_id" clase_id="vta_tipo_vendedor" prefijo='vta_vendedor_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_vendedor_cmb_vta_tipo_vendedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_vta_tipo_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_vta_tipo_vendedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_vta_tipo_vendedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_vta_tipo_vendedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_tipo_vendedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_txt_email" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txt_email" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_txt_email' value='<?php Gral::_echoTxt($vta_vendedor->getEmail(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_email', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_txt_telefono" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >
				  
                                        <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txt_telefono" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_txt_telefono' value='<?php Gral::_echoTxt($vta_vendedor->getTelefono(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_telefono', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_txt_celular" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_celular' ?>" >
				  
                                        <?php Lang::_lang('Celular', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txt_celular" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('celular')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_txt_celular' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_txt_celular' value='<?php Gral::_echoTxt($vta_vendedor->getCelular(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_celular', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_celular', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_celular', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_celular', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('celular')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_txt_porcentaje_comision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_comision' ?>" >
				  
                                        <?php Lang::_lang('Porc Comision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txt_porcentaje_comision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_txt_porcentaje_comision' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_txt_porcentaje_comision' value='<?php Gral::_echoTxt($vta_vendedor->getPorcentajeComision(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='vta_vendedor_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_vendedor_txt_codigo' value='<?php Gral::_echoTxt($vta_vendedor->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_vendedor_txa_observacion' rows='10' cols='50' id='vta_vendedor_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_vendedor->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_vendedor_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_vendedor->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_vendedor_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_vendedor'/>
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

