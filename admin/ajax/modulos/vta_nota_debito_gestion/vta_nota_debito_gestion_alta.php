<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_nota_debito';
$db_nombre_pagina = 'vta_nota_debito_alta';

$vta_nota_debito = new VtaNotaDebito();
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

    $vta_nota_debito = new VtaNotaDebito();
    if (trim($hdn_id) != '')
        $vta_nota_debito->setId($hdn_id, false);
    $vta_nota_debito->setDescripcion(Gral::getVars(1, "vta_nota_debito_txt_descripcion"));
    $vta_nota_debito->setCliClienteId(Gral::getVars(1, "vta_nota_debito_cmb_cli_cliente_id", null));
    $vta_nota_debito->setVtaTipoNotaDebitoId(Gral::getVars(1, "vta_nota_debito_cmb_vta_tipo_nota_debito_id", null));
    $vta_nota_debito->setGralCondicionIvaId(Gral::getVars(1, "vta_nota_debito_cmb_gral_condicion_iva_id", null));
    $vta_nota_debito->setGralTipoPersoneriaId(Gral::getVars(1, "vta_nota_debito_cmb_gral_tipo_personeria_id", null));
    $vta_nota_debito->setGralEmpresaId(Gral::getVars(1, "vta_nota_debito_cmb_gral_empresa_id", null));
    $vta_nota_debito->setNumeroNotaDebito(Gral::getVars(1, "vta_nota_debito_txt_numero_nota_debito"));
    $vta_nota_debito->setCae(Gral::getVars(1, "vta_nota_debito_txt_cae"));
    $vta_nota_debito->setFechaEmision(Gral::getFechaToDb(Gral::getVars(1, "vta_nota_debito_txt_fecha_emision")));
    $vta_nota_debito->setPersonaDescripcion(Gral::getVars(1, "vta_nota_debito_txt_persona_descripcion"));
    $vta_nota_debito->setRazonSocial(Gral::getVars(1, "vta_nota_debito_txt_razon_social"));
    $vta_nota_debito->setDomicilioLegal(Gral::getVars(1, "vta_nota_debito_txt_domicilio_legal"));
    $vta_nota_debito->setCuit(Gral::getVars(1, "vta_nota_debito_txt_cuit"));
    $vta_nota_debito->setCodigo(Gral::getVars(1, "vta_nota_debito_txt_codigo"));
    $vta_nota_debito->setObservacion(Gral::getVars(1, "vta_nota_debito_txa_observacion"));
    $vta_nota_debito->setOrden(Gral::getVars(1, "vta_nota_debito_txt_orden", 0));
    $vta_nota_debito->setEstado(Gral::getVars(1, "vta_nota_debito_cmb_estado", 0));
    $vta_nota_debito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_debito_txt_creado")));
    $vta_nota_debito->setCreadoPor(Gral::getVars(1, "vta_nota_debito__creado_por", 0));
    $vta_nota_debito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_nota_debito_txt_modificado")));
    $vta_nota_debito->setModificadoPor(Gral::getVars(1, "vta_nota_debito__modificado_por", 0));

    $vta_nota_debito_estado = new VtaNotaDebito();
    if (trim($hdn_id) != '') {
        $vta_nota_debito_estado->setId($hdn_id);
        $vta_nota_debito->setEstado($vta_nota_debito_estado->getEstado());
    } else {
        $vta_nota_debito->setEstado(1);
    }

    switch ($accion) {
        case 'guardar':
            $error = $vta_nota_debito->control();
            if (!$error->getExisteError()) {
                $vta_nota_debito->saveDesdeBackend();

                $hdn_error = 0;
                //header('Location: vta_nota_debito_alta.php?cs=1&id='.$vta_nota_debito->getId());
            }
            break;
        case 'guardarnvo':
            $error = $vta_nota_debito->control();
            if (!$error->getExisteError()) {
                $vta_nota_debito->saveDesdeBackend();

                //$hdn_error = 0; // aqui no debe ir para que no cierre el modal
                //header('Location: vta_nota_debito_alta.php?cs=1');
                $vta_nota_debito = new VtaNotaDebito();
            }
            break;
    }
    Gral::setSes('VtaNotaDebito_ULTIMO_INSERTADO', $vta_nota_debito->getId());
} else {
    $prefijo = Gral::getVars(2, 'prefijo');
    $cmb_vta_nota_debito_id = Gral::getVars(2, $prefijo . 'cmb_vta_nota_debito_id', 0);
    if ($cmb_vta_nota_debito_id != 0) {
        $vta_nota_debito = VtaNotaDebito::getOxId($cmb_vta_nota_debito_id);
    } else {

        $vta_nota_debito->setDescripcion(Gral::getVars(2, "descripcion", ''));
        $vta_nota_debito->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
        $vta_nota_debito->setVtaTipoNotaDebitoId(Gral::getVars(2, "vta_tipo_nota_debito_id", 'null'));
        $vta_nota_debito->setGralCondicionIvaId(Gral::getVars(2, "gral_condicion_iva_id", 'null'));
        $vta_nota_debito->setGralTipoPersoneriaId(Gral::getVars(2, "gral_tipo_personeria_id", 'null'));
        $vta_nota_debito->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
        $vta_nota_debito->setNumeroNotaDebito(Gral::getVars(2, "numero_nota_debito", ''));
        $vta_nota_debito->setCae(Gral::getVars(2, "cae", ''));
        $vta_nota_debito->setFechaEmision(Gral::getVars(2, "fecha_emision", date('Y-m-d')));
        $vta_nota_debito->setPersonaDescripcion(Gral::getVars(2, "persona_descripcion", ''));
        $vta_nota_debito->setRazonSocial(Gral::getVars(2, "razon_social", ''));
        $vta_nota_debito->setDomicilioLegal(Gral::getVars(2, "domicilio_legal", ''));
        $vta_nota_debito->setCuit(Gral::getVars(2, "cuit", ''));
        $vta_nota_debito->setCodigo(Gral::getVars(2, "codigo", ''));
        $vta_nota_debito->setObservacion(Gral::getVars(2, "observacion", ''));
        $vta_nota_debito->setOrden(Gral::getVars(2, "orden", 0));
        $vta_nota_debito->setEstado(Gral::getVars(2, "estado", 0));
        $vta_nota_debito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
        $vta_nota_debito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
        $vta_nota_debito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
        $vta_nota_debito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
    }
}

if (!$error->getExisteError()) {
    $hdn_id = Gral::getVars(2, 'id');
    if (trim($hdn_id) != '')
        $vta_nota_debito->setId($hdn_id);
}
?>
<body>
    <form id='formu' name='formu' method='post' action='ajax/modulos/vta_nota_debito/vta_nota_debito_alta.php' >
        <?php //include 'parciales/confirmacion.php'; ?>
        <?php //include 'parciales/error.php'; ?>

        <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_nota_debito_gestion'>

            <tr>
                <td  id="label_vta_nota_debito_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_descripcion', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_descripcion', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_descripcion" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_txt_descripcion' value='<?php Gral::_echoTxt($vta_nota_debito->getDescripcion(), true) ?>' size='50' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_cmb_cli_cliente_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_cli_cliente_id' ?>" >

                    <?php Lang::_lang('CliCliente') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_cli_cliente_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_cli_cliente_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_cmb_cli_cliente_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'vta_nota_debito_cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), Lang::_lang('Seleccione CliCliente', true)), $vta_nota_debito->getCliClienteId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_CMB_EDIT_CLI_CLIENTE')) { ?>
                        <img class="img_btn_editar" elemento_id="vta_nota_debito_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($vta_nota_debito->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_debito_cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='vta_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_debito_cmb_cli_cliente_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_cmb_vta_tipo_nota_debito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_vta_tipo_nota_debito_id' ?>" >

                    <?php Lang::_lang('VtaTipoNotaDebito') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_vta_tipo_nota_debito_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_vta_tipo_nota_debito_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_cmb_vta_tipo_nota_debito_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('vta_tipo_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'vta_nota_debito_cmb_vta_tipo_nota_debito_id', Gral::getCmbFiltro(VtaTipoNotaDebito::getVtaTipoNotaDebitosCmb(), Lang::_lang('Seleccione VtaTipoNotaDebito', true)), $vta_nota_debito->getVtaTipoNotaDebitoId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_CMB_EDIT_VTA_TIPO_NOTA_DEBITO')) { ?>
                        <img class="img_btn_editar" elemento_id="vta_nota_debito_cmb_vta_tipo_nota_debito_id" clase_id="vta_tipo_nota_debito" prefijo='vta_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_tipo_nota_debito_id" <?php echo ($vta_nota_debito->getVtaTipoNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_debito_cmb_vta_tipo_nota_debito_id" clase_id="vta_tipo_nota_debito" prefijo='vta_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_debito_cmb_vta_tipo_nota_debito_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_tipo_nota_debito_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_cmb_gral_condicion_iva_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_condicion_iva_id' ?>" >

                    <?php Lang::_lang('GralCondicionIva') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_condicion_iva_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_condicion_iva_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_cmb_gral_condicion_iva_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'vta_nota_debito_cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), Lang::_lang('Seleccione GralCondicionIva', true)), $vta_nota_debito->getGralCondicionIvaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_CMB_EDIT_GRAL_CONDICION_IVA')) { ?>
                        <img class="img_btn_editar" elemento_id="vta_nota_debito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='vta_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_condicion_iva_id" <?php echo ($vta_nota_debito->getGralCondicionIvaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_debito_cmb_gral_condicion_iva_id" clase_id="gral_condicion_iva" prefijo='vta_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_debito_cmb_gral_condicion_iva_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_condicion_iva_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_cmb_gral_tipo_personeria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_tipo_personeria_id' ?>" >

                    <?php Lang::_lang('GralTipoPersoneria') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_tipo_personeria_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_tipo_personeria_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_cmb_gral_tipo_personeria_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'vta_nota_debito_cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), Lang::_lang('Seleccione GralTipoPersoneria', true)), $vta_nota_debito->getGralTipoPersoneriaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_CMB_EDIT_GRAL_TIPO_PERSONERIA')) { ?>
                        <img class="img_btn_editar" elemento_id="vta_nota_debito_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='vta_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_personeria_id" <?php echo ($vta_nota_debito->getGralTipoPersoneriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_debito_cmb_gral_tipo_personeria_id" clase_id="gral_tipo_personeria" prefijo='vta_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_debito_cmb_gral_tipo_personeria_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_personeria_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_cmb_gral_empresa_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_gral_empresa_id' ?>" >

                    <?php Lang::_lang('GralEmpresa') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_gral_empresa_id', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_gral_empresa_id', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_cmb_gral_empresa_id" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'vta_nota_debito_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), Lang::_lang('Seleccione GralEmpresa', true)), $vta_nota_debito->getGralEmpresaId(), 'textbox ' . $error_input_css) ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_CMB_EDIT_GRAL_EMPRESA')) { ?>
                        <img class="img_btn_editar" elemento_id="vta_nota_debito_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='vta_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($vta_nota_debito->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_nota_debito_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='vta_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_nota_debito_cmb_gral_empresa_id"></div>
                    <?php } ?> 

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txt_numero_nota_debito" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_numero_nota_debito' ?>" >

                    <?php Lang::_lang('Numero de Nota de Debito') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_numero_nota_debito', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_numero_nota_debito', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_numero_nota_debito" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('numero_nota_debito')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_numero_nota_debito' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_txt_numero_nota_debito' value='<?php Gral::_echoTxt($vta_nota_debito->getNumeroNotaDebito(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero_nota_debito')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txt_cae" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_cae' ?>" >

                    <?php Lang::_lang('Cae') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_cae', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_cae', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_cae" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('cae')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_cae' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_txt_cae' value='<?php Gral::_echoTxt($vta_nota_debito->getCae(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cae')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txt_fecha_emision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_fecha_emision' ?>" >

                    <?php Lang::_lang('Fecha de Emision') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_fecha_emision', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_fecha_emision', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_fecha_emision" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('fecha_emision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_fecha_emision' type='text' class='textbox <?php echo $error_input_css ?> date' id='vta_nota_debito_txt_fecha_emision' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_nota_debito->getFechaEmision()), true) ?>' size='40' />
                    <input type='button' id='cal_vta_nota_debito_txt_fecha_emision' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'vta_nota_debito_txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_vta_nota_debito_txt_fecha_emision'
                        });
                    </script>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_emision')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txt_razon_social" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_razon_social' ?>" >

                    <?php Lang::_lang('Razon Social') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_razon_social', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_razon_social', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_razon_social" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('razon_social')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_txt_razon_social' value='<?php Gral::_echoTxt($vta_nota_debito->getRazonSocial(), true) ?>' size='50' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('razon_social')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txt_domicilio_legal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_domicilio_legal' ?>" >

                    <?php Lang::_lang('Domicilio Legal') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_domicilio_legal', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_domicilio_legal', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_domicilio_legal" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('domicilio_legal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_txt_domicilio_legal' value='<?php Gral::_echoTxt($vta_nota_debito->getDomicilioLegal(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio_legal')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txt_cuit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_cuit' ?>" >

                    <?php Lang::_lang('CUIT') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_cuit', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_cuit', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_cuit" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('cuit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_cuit' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_txt_cuit' value='<?php Gral::_echoTxt($vta_nota_debito->getCuit(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuit')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_codigo' ?>" >

                    <?php Lang::_lang('Codigo') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_codigo', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_codigo', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txt_codigo" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='vta_nota_debito_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='vta_nota_debito_txt_codigo' value='<?php Gral::_echoTxt($vta_nota_debito->getCodigo(), true) ?>' size='40' />
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td  id="label_vta_nota_debito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_' . $db_nombre_pagina . '_observacion' ?>" >

                    <?php Lang::_lang('Observaciones') ?>

                    <?php if (Lang::_lang('help_' . $db_nombre_pagina . '_observacion', true, false) != '') { ?>
                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_' . $db_nombre_pagina . '_observacion', false, false) ?>" />
                    <?php } ?>

                </td>
                <td  id="dato_vta_nota_debito_txa_observacion" class='adm_carga_datos_datos' width='400'>

                    <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <textarea name='vta_nota_debito_txa_observacion' rows='10' cols='50' id='vta_nota_debito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_nota_debito->getObservacion(), true) ?></textarea>
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>

        </table>
        <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_nota_debito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_nota_debito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_nota_debito'/>
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

