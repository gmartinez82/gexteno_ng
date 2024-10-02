<?php
include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);

$arr_vacio[0]['cod'] = '';
$arr_vacio[0]['descripcion'] = '...';
?>

<div class="datos generar-factura-online-afip" pde_factura_id="<?php Gral::_echo($pde_factura->getId()) ?>">
    <form id='form_generar_factura_online_afip' name='form_generar_factura_online_afip' method='POST' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Factura') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $pde_factura->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedor') ?></div>
            <div class="dato"><?php Gral::_echo($pde_factura->getPersonaDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Empresa Factura a") ?>: </div>
            <div class="dato">
                <?php
                $gral_empresa_id = 0;
                Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $gral_empresa_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_empresa_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Centro de Pedido") ?>: </div>
            <div class="dato">
                <?php
                $pde_centro_pedido_id = 0;
                Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro($arr_vacio, '...'), $pde_centro_pedido_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_pde_centro_pedido_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Tipo de Comprobante") ?>: </div>
            <div class="dato">
                <?php
                $pde_tipo_factura_id = 1;
                Html::html_dib_select(1, 'cmb_pde_tipo_factura_id', Gral::getCmbFiltro(PdeTipoFactura::getPdeTipoFacturasCmb(), '...'), $pde_tipo_factura_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_pde_tipo_factura_id_error"></div>
            </div>
        </div>

        <!--div class="par">
            <div class="label"><?php Gral::_echo("Tipo de Concepto") ?>: </div>
            <div class="dato">
                <?php
//                $ws_fe_param_tipo_concepto_id = 1;
//                Html::html_dib_select(1, 'cmb_ws_fe_param_tipo_concepto_id', Gral::getCmbFiltro(WsFeParamTipoConcepto::getWsFeParamTipoConceptosCmb(), '...'), $ws_fe_param_tipo_concepto_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_ws_fe_param_tipo_concepto_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Tipo de Documento") ?>: </div>
            <div class="dato">
                <?php
//                $ws_fe_param_tipo_documento_id = 1;
//                Html::html_dib_select(1, 'cmb_ws_fe_param_tipo_documento_id', Gral::getCmbFiltro(WsFeParamTipoDocumento::getWsFeParamTipoDocumentosCmb(), '...'), $ws_fe_param_tipo_documento_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_ws_fe_param_tipo_documento_id_error"></div>
            </div>
        </div-->

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="label-error" id="generar_factura_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_factura_online_afip' name='btn_generar_factura_online_afip' type='button' class='btn_generar_factura_online_afip'><?php Lang::_lang('Generar Factura Online AFIP') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>