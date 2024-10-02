<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_fp_cuota';
$db_nombre_pagina = 'gral_fp_cuota_alta';


$gral_fp_cuota = new GralFpCuota();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $gral_fp_cuota = new GralFpCuota();
    // if(trim($hdn_id) != '') $gral_fp_cuota->setId($hdn_id, false);

    $gral_fp_cuota = GralFpCuota::getOxId($hdn_id);
    if(!$gral_fp_cuota){
        $gral_fp_cuota = new GralFpCuota();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($gral_fp_cuota){
            if($gral_fp_cuota->getHash() != $hdn_hash){
                
                header('Location: us_noautorizado.php?tipo=HASH&clase=GralFpCuota&id='.$gral_fp_cuota->getId().'&cod='.$hdn_hash);
                exit;
            }
        }            
    }
    
	$gral_fp_cuota->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$gral_fp_cuota->setGralFpMedioPagoId(Gral::getVars(1, "cmb_gral_fp_medio_pago_id", null));
	$gral_fp_cuota->setCantidad(Gral::getVars(1, "txt_cantidad", 0));
	$gral_fp_cuota->setPorDefault(Gral::getVars(1, "cmb_por_default", 0));
	$gral_fp_cuota->setRecargo(Gral::getVars(1, "txt_recargo", 0));
	$gral_fp_cuota->setObservacion(Gral::getVars(1, "txa_observacion"));

	if($hdn_id == 0){
            $gral_fp_cuota->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $gral_fp_cuota->control();
                if(!$error->getExisteError()){
                    $gral_fp_cuota->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$gral_fp_cuota->getId().'&hash='.$gral_fp_cuota->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $gral_fp_cuota->control();
                if(!$error->getExisteError()){
                    $gral_fp_cuota->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $gral_fp_cuota->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($gral_fp_cuota){
                if($gral_fp_cuota->getHash() != $hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=GralFpCuota&id='.$gral_fp_cuota->getId().'&cod='.$hash);
                    exit;
                }
            }            

	}else{
	
            $gral_fp_cuota->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $gral_fp_cuota->setGralFpMedioPagoId(Gral::getVars(2, "gral_fp_medio_pago_id", 'null'));
            $gral_fp_cuota->setCantidad(Gral::getVars(2, "cantidad", 0));
            $gral_fp_cuota->setPorDefault(Gral::getVars(2, "por_default", 0));
            $gral_fp_cuota->setDiasVencimiento(Gral::getVars(2, "dias_vencimiento", 0));
            $gral_fp_cuota->setRecargo(Gral::getVars(2, "recargo", 0));
            $gral_fp_cuota->setCodigo(Gral::getVars(2, "codigo", ''));
            $gral_fp_cuota->setObservacion(Gral::getVars(2, "observacion", ''));
            $gral_fp_cuota->setOrden(Gral::getVars(2, "orden", 0));
            $gral_fp_cuota->setEstado(Gral::getVars(2, "estado", 0));
            $gral_fp_cuota->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $gral_fp_cuota->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $gral_fp_cuota->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $gral_fp_cuota->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('GralFpCuota') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralFpCuota::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralFpCuota::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_gral_fp_cuota'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_fp_cuota_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($gral_fp_cuota->getDescripcion()) ?>' size='50' />

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
                    <td id="label_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>" >

                        <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                        <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                          <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_fp_cuota_alta&atributo=gral_fp_forma_pago_id' modulo_metodo_init='setInit()'>
                              <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                          </div>
                        <?php } ?>

                    </td>

                    <td id="dato_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                      <?php
                          $cmb_gral_fp_forma_pago_id = Gral::getVars(1, 'cmb_gral_fp_forma_pago_id', 0);
					if(!Gral::esPost() and $gral_fp_cuota->getId()) $cmb_gral_fp_forma_pago_id = $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getId();			
                    $c = new Criterio(GralFpFormaPago::SES_CRITERIOS);
                    $c->add('gral_fp_forma_pago.x', $x, Criterio::IGUAL);
                    $c->addOrden('descripcion', 'asc');
                    $c->addTabla('gral_fp_forma_pago');
                    $c = GralFpFormaPago::setAplicarFiltrosDeAlcance($c);
                    $c->setCriterios();
                    ?>

                    <?php Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbF(null, $c), '...'), $cmb_gral_fp_forma_pago_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="x" elemento_id="cmb_gral_fp_forma_pago_id"')?>

                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>			
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($cmb_gral_fp_forma_pago_id == '') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cmb_gral_fp_forma_pago_id"></div>
                    </div>
                    <?php } ?>

                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>   

                        <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>   

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>

                    </td>
                </tr>
		
                <tr>
                    <td id="label_cmb_gral_fp_medio_pago_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_medio_pago_id' ?>" >

                        <?php Lang::_lang('GralFpMedioPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                        <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                          <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_fp_cuota_alta&atributo=gral_fp_medio_pago_id' modulo_metodo_init='setInit()'>
                              <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                          </div>
                        <?php } ?>

                    </td>

                    <td id="dato_cmb_gral_fp_medio_pago_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('gral_fp_medio_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                      <?php
                          $cmb_gral_fp_medio_pago_id = Gral::getVars(1, 'cmb_gral_fp_medio_pago_id', 0);
					if(!Gral::esPost() and $gral_fp_cuota->getId()) $cmb_gral_fp_medio_pago_id = $gral_fp_cuota->getGralFpMedioPago()->getId();			
                    $c = new Criterio(GralFpMedioPago::SES_CRITERIOS);
                    $c->add('gral_fp_medio_pago.gral_fp_forma_pago_id', $cmb_gral_fp_forma_pago_id, Criterio::IGUAL);
                    $c->addOrden('descripcion', 'asc');
                    $c->addTabla('gral_fp_medio_pago');
                    $c = GralFpMedioPago::setAplicarFiltrosDeAlcance($c);
                    $c->setCriterios();
                    ?>

                    <?php Html::html_dib_select(1, 'cmb_gral_fp_medio_pago_id', Gral::getCmbFiltro(GralFpMedioPago::getGralFpMedioPagosCmbF(null, $c), '...'), $cmb_gral_fp_medio_pago_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_gral_fp_forma_pago_id" elemento_id="cmb_gral_fp_medio_pago_id"')?>

                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ALTA_CMB_EDIT_GRAL_FP_MEDIO_PAGO')){ ?>			
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cmb_gral_fp_medio_pago_id" clase_id="gral_fp_medio_pago" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_medio_pago_id" <?php echo ($cmb_gral_fp_medio_pago_id == '') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_fp_medio_pago_id" clase_id="gral_fp_medio_pago" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cmb_gral_fp_medio_pago_id"></div>
                    </div>
                    <?php } ?>

                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_fp_medio_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_fp_medio_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>   

                        <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_fp_medio_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_fp_medio_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>   

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_medio_pago_id')->getMensaje()) ?></div>

                    </td>
                </tr>
		
            <tr>
                <td id="label_txt_cantidad" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >

                    <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_fp_cuota_alta&atributo=cantidad' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_cantidad" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_cantidad' value='<?php Gral::_echoTxt($gral_fp_cuota->getCantidad()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_por_default" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_por_default' ?>" >

                    <?php Lang::_lang('Por Default', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_fp_cuota_alta&atributo=por_default' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_por_default" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('por_default')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_por_default', GralSiNo::getGralSiNosCmb(), $gral_fp_cuota->getPorDefault(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_por_default', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_por_default', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_por_default', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_por_default', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('por_default')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_recargo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_recargo' ?>" >

                    <?php Lang::_lang('Recargo %', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_fp_cuota_alta&atributo=recargo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_recargo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('recargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_recargo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_recargo' value='<?php Gral::_echoTxt($gral_fp_cuota->getRecargo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_recargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_recargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_recargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_recargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('recargo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_fp_cuota_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_fp_cuota->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_fp_cuota->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($gral_fp_cuota->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralFpCuota::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralFpCuota::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($gral_fp_cuota->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_fp_cuota/bloque_relacion_cli_cliente_gral_fp_cuota.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'gral_fp_cuota_set.php' ?>
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

