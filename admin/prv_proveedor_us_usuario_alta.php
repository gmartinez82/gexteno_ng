<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prv_proveedor_us_usuario';
$db_nombre_pagina = 'prv_proveedor_us_usuario_alta';


$prv_proveedor_us_usuario = new PrvProveedorUsUsuario();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $prv_proveedor_us_usuario = new PrvProveedorUsUsuario();
    if(trim($hdn_id) != '') $prv_proveedor_us_usuario->setId($hdn_id, false);
	$prv_proveedor_us_usuario->setPrvProveedorId(Gral::getVars(1, "cmb_prv_proveedor_id", null));
	$prv_proveedor_us_usuario->setUsUsuarioId(Gral::getVars(1, "cmb_us_usuario_id", null));
	$prv_proveedor_us_usuario->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$prv_proveedor_us_usuario->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $prv_proveedor_us_usuario->control();
			if(!$error->getExisteError()){
				$prv_proveedor_us_usuario->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$prv_proveedor_us_usuario->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_proveedor_us_usuario->control();
			if(!$error->getExisteError()){
				$prv_proveedor_us_usuario->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$prv_proveedor_us_usuario->setId($hdn_id);
	}else{
	
	$prv_proveedor_us_usuario->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$prv_proveedor_us_usuario->setUsUsuarioId(Gral::getVars(2, "us_usuario_id", 'null'));
	$prv_proveedor_us_usuario->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_proveedor_us_usuario->setCreadoPor(Gral::getVars(2, "creado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PrvProveedorUsUsuarios') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrvProveedorUsUsuario::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrvProveedorUsUsuario::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_US_USUARIO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_prv_proveedor_us_usuario'>
        
            <tr>
                <td id="label_cmb_prv_proveedor_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >

                    <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prv_proveedor_us_usuario_alta&atributo=prv_proveedor_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prv_proveedor_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_US_USUARIO_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($prv_proveedor_us_usuario->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prv_proveedor_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $prv_proveedor_us_usuario->getPrvProveedorId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_us_usuario_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_us_usuario_id' ?>" >

                    <?php Lang::_lang('UsUsuario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prv_proveedor_us_usuario_alta&atributo=us_usuario_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_us_usuario_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('us_usuario_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_US_USUARIO_ALTA_CMB_EDIT_US_USUARIO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_us_usuario_id" clase_id="us_usuario" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_us_usuario_id" <?php echo ($prv_proveedor_us_usuario->getUsUsuarioId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_us_usuario_id" clase_id="us_usuario" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_us_usuario_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), $prv_proveedor_us_usuario->getUsUsuarioId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_us_usuario_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_us_usuario_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('us_usuario_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_proveedor_us_usuario->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrvProveedorUsUsuario::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrvProveedorUsUsuario::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($prv_proveedor_us_usuario->getId()) != ''){ ?>
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

