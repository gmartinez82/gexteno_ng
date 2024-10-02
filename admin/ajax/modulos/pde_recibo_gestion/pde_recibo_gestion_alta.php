<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_recibo';
$db_nombre_pagina = 'pde_recibo_alta';

$pde_recibo = new PdeRecibo();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }
    if (trim($btn_guardarnvo) != '') {
        $accion = 'guardarnvo';
    }

    $pde_recibo = new PdeRecibo();
    if (trim($hdn_id) != '')
        $pde_recibo->setId($hdn_id, false);
    $pde_recibo->setDescripcion(Gral::getVars(1, "pde_recibo_txt_descripcion"));
    $pde_recibo->setPrvProveedorId(Gral::getVars(1, "pde_recibo_cmb_prv_proveedor_id", null));
    $pde_recibo->setPdeTipoReciboId(Gral::getVars(1, "pde_recibo_cmb_pde_tipo_recibo_id", null));
    $pde_recibo->setGralCondicionIvaId(Gral::getVars(1, "pde_recibo_cmb_gral_condicion_iva_id", null));
    $pde_recibo->setGralTipoPersoneriaId(Gral::getVars(1, "pde_recibo_cmb_gral_tipo_personeria_id", null));
    $pde_recibo->setGralEmpresaId(Gral::getVars(1, "pde_recibo_cmb_gral_empresa_id", null));
    $pde_recibo->setNumeroRecibo(Gral::getVars(1, "pde_recibo_txt_numero_recibo"));
    $pde_recibo->setCae(Gral::getVars(1, "pde_recibo_txt_cae"));
    $pde_recibo->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "pde_recibo_txt_fecha_emision")));
    $pde_recibo->setPersonaDescripcion(Gral::getVars(1, "pde_recibo_txt_persona_descripcion"));
    $pde_recibo->setRazonSocial(Gral::getVars(1, "pde_recibo_txt_razon_social"));
    $pde_recibo->setDomicilioLegal(Gral::getVars(1, "pde_recibo_txt_domicilio_legal"));
    $pde_recibo->setCuit(Gral::getVars(1, "pde_recibo_txt_cuit"));
    $pde_recibo->setCodigo(Gral::getVars(1, "pde_recibo_txt_codigo"));
    $pde_recibo->setObservacion(Gral::getVars(1, "pde_recibo_txa_observacion"));
    $pde_recibo->setOrden(Gral::getVars(1, "pde_recibo_txt_orden", 0));
    $pde_recibo->setEstado(Gral::getVars(1, "pde_recibo_cmb_estado", 0));
    $pde_recibo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_txt_creado")));
    $pde_recibo->setCreadoPor(Gral::getVars(1, "pde_recibo__creado_por", 0));
    $pde_recibo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_recibo_txt_modificado")));
    $pde_recibo->setModificadoPor(Gral::getVars(1, "pde_recibo__modificado_por", 0));

    $pde_recibo_estado = new PdeRecibo();
    if (trim($hdn_id) != '') {
        $pde_recibo_estado->setId($hdn_id);
        $pde_recibo->setEstado($pde_recibo_estado->getEstado());
    } else {
        $pde_recibo->setEstado(1);
    }

    switch ($accion) {
        case 'guardar':
            $error = $pde_recibo->control();
            if (!$error->getExisteError()) {
                $pde_recibo->saveDesdeBackend();

                $hdn_error = 0;
                //header('Location: pde_recibo_alta.php?cs=1&id='.$pde_recibo->getId());
            }
            break;
        case 'guardarnvo':
            $error = $pde_recibo->control();
            if (!$error->getExisteError()) {
                $pde_recibo->saveDesdeBackend();

                //$hdn_error = 0; // aqui no debe ir para que no cierre el modal
                //header('Location: pde_recibo_alta.php?cs=1');
                $pde_recibo = new PdeRecibo();
            }
            break;
    }
    Gral::setSes('PdeRecibo_ULTIMO_INSERTADO', $pde_recibo->getId());
} else {
    $prefijo = Gral::getVars(2, 'prefijo');
    $cmb_pde_recibo_id = Gral::getVars(2, $prefijo . 'cmb_pde_recibo_id', 0);
    if ($cmb_pde_recibo_id != 0) {
        $pde_recibo = PdeRecibo::getOxId($cmb_pde_recibo_id);
    } else {

        $pde_recibo->setDescripcion(Gral::getVars(2, "descripcion", ''));
        $pde_recibo->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
        $pde_recibo->setPdeTipoReciboId(Gral::getVars(2, "pde_tipo_recibo_id", 'null'));
        $pde_recibo->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
        $pde_recibo->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
        $pde_recibo->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
        $pde_recibo->setNumeroRecibo(Gral::getVars(2, "numero_recibo", ''));
        $pde_recibo->setCae(Gral::getVars(2, "cae", ''));
        $pde_recibo->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
        $pde_recibo->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
        $pde_recibo->setRazonSocial(Gral::getVars(2, "razon_social", ''));
        $pde_recibo->setDomicilioLegal(Gral::getVars(2, "domicilio_legal", ''));
        $pde_recibo->setCuit(Gral::getVars(2, "cuit", ''));
        $pde_recibo->setCodigo(Gral::getVars(2, "codigo", ''));
        $pde_recibo->setObservacion(Gral::getVars(2, "observacion", ''));
        $pde_recibo->setOrden(Gral::getVars(2, "orden", 0));
        $pde_recibo->setEstado(Gral::getVars(2, "estado", 0));
        $pde_recibo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
        $pde_recibo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
        $pde_recibo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
        $pde_recibo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
    }
}

if (!$error->getExisteError()) {
    $hdn_id = Gral::getVars(2, 'id');
    if (trim($hdn_id) != '')
        $pde_recibo->setId($hdn_id);
}
?>
<body>
    <form id='formu' name='formu' method='post' action='ajax/modulos/pde_recibo_gestion/pde_recibo_gestion_alta.php' >
        <?php //include 'parciales/confirmacion.php'; ?>
        <?php //include 'parciales/error.php'; ?>

        <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_recibo'>

            <tr>
                <td  id="label_pde_recibo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_descripcion', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_descripcion', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_descripcion' value='<?php Gral::_echoTxt($pde_recibo->getDescripcion(), true) ?>' size='50' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_prv_proveedor_id' ?>" >

                    <?php Lang::_lang('PrvProveedor') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_prv_proveedor_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_prv_proveedor_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_recibo_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), Lang::_lang('Seleccione PrvProveedor', true)), $pde_recibo->getPrvProveedorId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_CMB_EDIT_CLI_CLIENTE')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_recibo->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_prv_proveedor_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_cmb_pde_tipo_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_pde_tipo_recibo_id' ?>" >

                    <?php Lang::_lang('PdeTipoRecibo') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_pde_tipo_recibo_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_pde_tipo_recibo_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_cmb_pde_tipo_recibo_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('pde_tipo_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_recibo_cmb_pde_tipo_recibo_id', Gral::getCmbFiltro(PdeTipoRecibo::getPdeTipoRecibosCmb(), Lang::_lang('Seleccione PdeTipoRecibo', true)), $pde_recibo->getPdeTipoReciboId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_CMB_EDIT_VTA_TIPO_RECIBO')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_pde_tipo_recibo_id" clase_id="pde_tipo_recibo" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_recibo_id" <?php echo ($pde_recibo->getPdeTipoReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_pde_tipo_recibo_id" clase_id="pde_tipo_recibo" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_pde_tipo_recibo_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_condicion_iva_id' ?>" >

                    <?php Lang::_lang('GralCondicionIva') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_condicion_iva_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_condicion_iva_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_recibo_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), Lang::_lang('Seleccione GralCondicionIva', true)), $pde_recibo->getGralCondicionIvaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($pde_recibo->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_gral_condicion_iva_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_cmb_gral_tipo_personeria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_tipo_personeria_id' ?>" >

                    <?php Lang::_lang('GralTipoPersoneria') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_tipo_personeria_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_tipo_personeria_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_cmb_gral_tipo_personeria_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_recibo_cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), Lang::_lang('Seleccione GralTipoPersoneria', true)), $pde_recibo->getGralTipoPersoneriaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($pde_recibo->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_gral_tipo_personeria_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_empresa_id' ?>" >

                    <?php Lang::_lang('GralEmpresa') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_empresa_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_empresa_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_recibo_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), Lang::_lang('Seleccione GralEmpresa', true)), $pde_recibo->getGralEmpresaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_CMB_EDIT_GRAL_EMPRESA')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_recibo_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($pde_recibo->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_recibo_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_recibo_cmb_gral_empresa_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txt_numero_recibo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_numero_recibo' ?>" >

                    <?php Lang::_lang('Numero de recibo') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_numero_recibo', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_numero_recibo', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_numero_recibo" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('numero_recibo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_numero_recibo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_numero_recibo' value='<?php Gral::_echoTxt($pde_recibo->getNumeroRecibo(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_recibo')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txt_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_cae' ?>" >

                    <?php Lang::_lang('Cae') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_cae', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_cae', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_cae" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_cae' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_cae' value='<?php Gral::_echoTxt($pde_recibo->getCae(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cae')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_fecha_emision' ?>" >

                    <?php Lang::_lang('Fecha de Emision') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_fecha_emision', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_fecha_emision', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_recibo_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_recibo->getFechaEmision()), true) ?>' size='40' />
                    <input type='button' id='cal_pde_recibo_txt_fecha_emision' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'pde_recibo_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_pde_recibo_txt_fecha_emision'
                        });
                    </script>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txt_razon_social" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_razon_social' ?>" >

                    <?php Lang::_lang('Razon Social') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_razon_social', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_razon_social', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_razon_social" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('razon_social')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_razon_social' value='<?php Gral::_echoTxt($pde_recibo->getRazonSocial(), true) ?>' size='50' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('razon_social')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txt_domicilio_legal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_domicilio_legal' ?>" >

                    <?php Lang::_lang('Domicilio Legal') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_domicilio_legal', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_domicilio_legal', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_domicilio_legal" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('domicilio_legal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_domicilio_legal' value='<?php Gral::_echoTxt($pde_recibo->getDomicilioLegal(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_legal')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_cuit' ?>" >

                    <?php Lang::_lang('CUIT') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_cuit', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_cuit', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_cuit" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_cuit' value='<?php Gral::_echoTxt($pde_recibo->getCuit(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_codigo' ?>" >

                    <?php Lang::_lang('Codigo') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_codigo', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_codigo', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txt_codigo" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_recibo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_recibo_txt_codigo' value='<?php Gral::_echoTxt($pde_recibo->getCodigo(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_recibo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_observacion' ?>" >

                    <?php Lang::_lang('Observaciones') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_observacion', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_observacion', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_recibo_txa_observacion" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <textarea name='pde_recibo_txa_observacion' rows='10' cols='50' id='pde_recibo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_recibo->getObservacion(), true) ?></textarea>
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>

        </table>
        <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_recibo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_recibo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_recibo'/>
                    <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />


                    <input name='btn_guardarnvo' type='button' class='btn_guardarnvo' value="<?php Lang::_lang('Guardar y Agregar Nuevo') ?>" />
                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
            </tr>
        </table>


    </form>
</body>
</html>
<script>
    setInit();
    setInitReciboGestion();
</script>

