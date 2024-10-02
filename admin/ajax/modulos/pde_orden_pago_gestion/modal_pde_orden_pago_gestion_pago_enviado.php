<?php
include_once '_autoload.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$prv_proveedor = $pde_orden_pago->getPrvProveedor();
?>
<form id='form_datos_pago_enviado_orden_pago' name='form_datos_autorizar_orden_pago' method='post' >
    <div class='datos pago-enviado-orden-pago' pde_orden_pago_id="<?php echo $pde_orden_pago_id ?>">

        <?php include "pde_orden_pago_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Empresa de Transporte") ?>: </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_empresa_transportadora_id', Gral::getCmbFiltro(GralEmpresaTransportadora::getGralEmpresaTransportadorasCmb(), '...'), $cmb_gral_empresa_transportadora_id, 'textbox ' . $error_input_css); ?>
                <div class="label-error" id="cmb_gral_empresa_transportadora_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Numero de Guia') ?></div>
            <div class="dato">
                <input name='txt_guia' id='txt_guia' class='textbox' size="20"></input>
                <div class="label-error" id="txt_guia_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='45' id='txa_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <input name='txt_destinatario' id='txt_destinatario' class='textbox' value="<?php echo $cli_cliente_proveedor ?>" size="70"></input>
                <div class="label-error" id="txt_destinatario_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Comentarios al Proveedor') ?></div>
            <div class="dato">
                <textarea name='txa_nota_publica' rows='3' cols='45' id='txa_nota_publica' class='textbox'></textarea>
                <div class="label-error" id="txa_nota_publica_error"></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Registrar Pago Enviado') ?>' />
        </div>

    </div>
</form>
