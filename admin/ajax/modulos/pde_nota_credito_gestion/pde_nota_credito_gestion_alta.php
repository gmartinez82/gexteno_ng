<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_nota_credito';
$db_nombre_pagina = 'pde_nota_credito_alta';

$pde_nota_credito = new PdeNotaCredito();
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

    $pde_nota_credito = new PdeNotaCredito();
    if (trim($hdn_id) != '')
        $pde_nota_credito->setId($hdn_id, false);
    $pde_nota_credito->setDescripcion(Gral::getVars(1, "pde_nota_credito_txt_descripcion"));
    $pde_nota_credito->setPrvProveedorId(Gral::getVars(1, "pde_nota_credito_cmb_prv_proveedor_id", null));
    $pde_nota_credito->setPdeTipoNotaCreditoId(Gral::getVars(1, "pde_nota_credito_cmb_pde_tipo_nota_credito_id", null));
    $pde_nota_credito->setGralCondicionIvaId(Gral::getVars(1, "pde_nota_credito_cmb_gral_condicion_iva_id", null));
    $pde_nota_credito->setGralTipoPersoneriaId(Gral::getVars(1, "pde_nota_credito_cmb_gral_tipo_personeria_id", null));
    $pde_nota_credito->setGralEmpresaId(Gral::getVars(1, "pde_nota_credito_cmb_gral_empresa_id", null));
    $pde_nota_credito->setNumeroNotaCredito(Gral::getVars(1, "pde_nota_credito_txt_numero_nota_credito"));
    $pde_nota_credito->setCae(Gral::getVars(1, "pde_nota_credito_txt_cae"));
    $pde_nota_credito->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "pde_nota_credito_txt_fecha_emision")));
    $pde_nota_credito->setPersonaDescripcion(Gral::getVars(1, "pde_nota_credito_txt_persona_descripcion"));
    $pde_nota_credito->setRazonSocial(Gral::getVars(1, "pde_nota_credito_txt_razon_social"));
    $pde_nota_credito->setDomicilioLegal(Gral::getVars(1, "pde_nota_credito_txt_domicilio_legal"));
    $pde_nota_credito->setCuit(Gral::getVars(1, "pde_nota_credito_txt_cuit"));
    $pde_nota_credito->setCodigo(Gral::getVars(1, "pde_nota_credito_txt_codigo"));
    $pde_nota_credito->setObservacion(Gral::getVars(1, "pde_nota_credito_txa_observacion"));
    $pde_nota_credito->setOrden(Gral::getVars(1, "pde_nota_credito_txt_orden", 0));
    $pde_nota_credito->setEstado(Gral::getVars(1, "pde_nota_credito_cmb_estado", 0));
    $pde_nota_credito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_txt_creado")));
    $pde_nota_credito->setCreadoPor(Gral::getVars(1, "pde_nota_credito__creado_por", 0));
    $pde_nota_credito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_credito_txt_modificado")));
    $pde_nota_credito->setModificadoPor(Gral::getVars(1, "pde_nota_credito__modificado_por", 0));

    $pde_nota_credito_estado = new PdeNotaCredito();
    if (trim($hdn_id) != '') {
        $pde_nota_credito_estado->setId($hdn_id);
        $pde_nota_credito->setEstado($pde_nota_credito_estado->getEstado());
    } else {
        $pde_nota_credito->setEstado(1);
    }

    switch ($accion) {
        case 'guardar':
            $error = $pde_nota_credito->control();
            if (!$error->getExisteError()) {
                $pde_nota_credito->saveDesdeBackend();

                $hdn_error = 0;
                //header('Location: pde_nota_credito_alta.php?cs=1&id='.$pde_nota_credito->getId());
            }
            break;
        case 'guardarnvo':
            $error = $pde_nota_credito->control();
            if (!$error->getExisteError()) {
                $pde_nota_credito->saveDesdeBackend();

                //$hdn_error = 0; // aqui no debe ir para que no cierre el modal
                //header('Location: pde_nota_credito_alta.php?cs=1');
                $pde_nota_credito = new PdeNotaCredito();
            }
            break;
    }
    Gral::setSes('PdeNotaCredito_ULTIMO_INSERTADO', $pde_nota_credito->getId());
} else {
    $prefijo = Gral::getVars(2, 'prefijo');
    $cmb_pde_nota_credito_id = Gral::getVars(2, $prefijo . 'cmb_pde_nota_credito_id', 0);
    if ($cmb_pde_nota_credito_id != 0) {
        $pde_nota_credito = PdeNotaCredito::getOxId($cmb_pde_nota_credito_id);
    } else {

        $pde_nota_credito->setDescripcion(Gral::getVars(2, "descripcion", ''));
        $pde_nota_credito->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
        $pde_nota_credito->setPdeTipoNotaCreditoId(Gral::getVars(2, "pde_tipo_nota_credito_id", 'null'));
        $pde_nota_credito->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
        $pde_nota_credito->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
        $pde_nota_credito->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
        $pde_nota_credito->setNumeroNotaCredito(Gral::getVars(2, "numero_nota_credito", ''));
        $pde_nota_credito->setCae(Gral::getVars(2, "cae", ''));
        $pde_nota_credito->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
        $pde_nota_credito->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
        $pde_nota_credito->setRazonSocial(Gral::getVars(2, "razon_social", ''));
        $pde_nota_credito->setDomicilioLegal(Gral::getVars(2, "domicilio_legal", ''));
        $pde_nota_credito->setCuit(Gral::getVars(2, "cuit", ''));
        $pde_nota_credito->setCodigo(Gral::getVars(2, "codigo", ''));
        $pde_nota_credito->setObservacion(Gral::getVars(2, "observacion", ''));
        $pde_nota_credito->setOrden(Gral::getVars(2, "orden", 0));
        $pde_nota_credito->setEstado(Gral::getVars(2, "estado", 0));
        $pde_nota_credito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
        $pde_nota_credito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
        $pde_nota_credito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
        $pde_nota_credito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
    }
}

if (!$error->getExisteError()) {
    $hdn_id = Gral::getVars(2, 'id');
    if (trim($hdn_id) != '')
        $pde_nota_credito->setId($hdn_id);
}
?>
<body>
    <form id='formu' name='formu' method='post' action='ajax/modulos/pde_nota_credito/pde_nota_credito_alta.php' >
        <?php //include 'parciales/confirmacion.php'; ?>
        <?php //include 'parciales/error.php'; ?>

        <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_nota_credito'>

            <tr>
                <td  id="label_pde_nota_credito_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_descripcion', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_descripcion', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_descripcion" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_descripcion' value='<?php Gral::_echoTxt($pde_nota_credito->getDescripcion(), true) ?>' size='50' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_prv_proveedor_id' ?>" >

                    <?php Lang::_lang('PrvProveedor') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_prv_proveedor_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_prv_proveedor_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_nota_credito_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), Lang::_lang('Seleccione PrvProveedor', true)), $pde_nota_credito->getPrvProveedorId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_CMB_EDIT_CLI_CLIENTE')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_nota_credito->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_prv_proveedor_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_cmb_pde_tipo_nota_credito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_pde_tipo_nota_credito_id' ?>" >

                    <?php Lang::_lang('PdeTipoNotaCredito') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_pde_tipo_nota_credito_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_pde_tipo_nota_credito_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_cmb_pde_tipo_nota_credito_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('pde_tipo_nota_credito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_nota_credito_cmb_pde_tipo_nota_credito_id', Gral::getCmbFiltro(PdeTipoNotaCredito::getPdeTipoNotaCreditosCmb(), Lang::_lang('Seleccione PdeTipoNotaCredito', true)), $pde_nota_credito->getPdeTipoNotaCreditoId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_CMB_EDIT_VTA_TIPO_NOTA_CREDITO')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_pde_tipo_nota_credito_id" clase_id="pde_tipo_nota_credito" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_tipo_nota_credito_id" <?php echo ($pde_nota_credito->getPdeTipoNotaCreditoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_pde_tipo_nota_credito_id" clase_id="pde_tipo_nota_credito" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_pde_tipo_nota_credito_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_tipo_nota_credito_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_condicion_iva_id' ?>" >

                    <?php Lang::_lang('GralCondicionIva') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_condicion_iva_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_condicion_iva_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), Lang::_lang('Seleccione GralCondicionIva', true)), $pde_nota_credito->getGralCondicionIvaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($pde_nota_credito->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_condicion_iva_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_cmb_gral_tipo_personeria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_tipo_personeria_id' ?>" >

                    <?php Lang::_lang('GralTipoPersoneria') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_tipo_personeria_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_tipo_personeria_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_cmb_gral_tipo_personeria_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), Lang::_lang('Seleccione GralTipoPersoneria', true)), $pde_nota_credito->getGralTipoPersoneriaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($pde_nota_credito->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_tipo_personeria_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_empresa_id' ?>" >

                    <?php Lang::_lang('GralEmpresa') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_empresa_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_empresa_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'pde_nota_credito_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), Lang::_lang('Seleccione GralEmpresa', true)), $pde_nota_credito->getGralEmpresaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_CMB_EDIT_GRAL_EMPRESA')) { ?>
                        <img class="img_btn_editar" elemento_id="pde_nota_credito_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_nota_credito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($pde_nota_credito->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_credito_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='pde_nota_credito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_credito_cmb_gral_empresa_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txt_numero_nota_credito" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_numero_nota_credito' ?>" >

                    <?php Lang::_lang('Numero de Nota de Credito') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_numero_nota_credito', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_numero_nota_credito', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_numero_nota_credito" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('numero_nota_credito')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_numero_nota_credito' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_numero_nota_credito' value='<?php Gral::_echoTxt($pde_nota_credito->getNumeroNotaCredito(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_nota_credito')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txt_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_cae' ?>" >

                    <?php Lang::_lang('Cae') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_cae', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_cae', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_cae" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_cae' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_cae' value='<?php Gral::_echoTxt($pde_nota_credito->getCae(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cae')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_fecha_emision' ?>" >

                    <?php Lang::_lang('Fecha de Emision') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_fecha_emision', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_fecha_emision', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='pde_nota_credito_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_nota_credito->getFechaEmision()), true) ?>' size='40' />
                    <input type='button' id='cal_pde_nota_credito_txt_fecha_emision' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'pde_nota_credito_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_pde_nota_credito_txt_fecha_emision'
                        });
                    </script>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txt_razon_social" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_razon_social' ?>" >

                    <?php Lang::_lang('Razon Social') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_razon_social', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_razon_social', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_razon_social" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('razon_social')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_razon_social' value='<?php Gral::_echoTxt($pde_nota_credito->getRazonSocial(), true) ?>' size='50' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('razon_social')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txt_domicilio_legal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_domicilio_legal' ?>" >

                    <?php Lang::_lang('Domicilio Legal') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_domicilio_legal', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_domicilio_legal', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_domicilio_legal" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('domicilio_legal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_domicilio_legal' value='<?php Gral::_echoTxt($pde_nota_credito->getDomicilioLegal(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_legal')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_cuit' ?>" >

                    <?php Lang::_lang('CUIT') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_cuit', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_cuit', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_cuit" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_cuit' value='<?php Gral::_echoTxt($pde_nota_credito->getCuit(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_codigo' ?>" >

                    <?php Lang::_lang('Codigo') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_codigo', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_codigo', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txt_codigo" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='pde_nota_credito_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_credito_txt_codigo' value='<?php Gral::_echoTxt($pde_nota_credito->getCodigo(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_pde_nota_credito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_observacion' ?>" >

                    <?php Lang::_lang('Observaciones') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_observacion', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_observacion', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_pde_nota_credito_txa_observacion" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <textarea name='pde_nota_credito_txa_observacion' rows='10' cols='50' id='pde_nota_credito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_nota_credito->getObservacion(), true) ?></textarea>
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>

        </table>
        <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_nota_credito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_nota_credito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_nota_credito'/>
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
</script>

