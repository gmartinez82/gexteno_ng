<?php
include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', null);
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

$vta_remito_ajuste_estado = $vta_remito_ajuste->getVtaRemitoAjusteEstadoActual();
$vta_remito_ajuste_tipo_estado = $vta_remito_ajuste->getVtaRemitoAjusteTipoEstadoActual();
$vta_presupuesto = $vta_remito_ajuste->getVtaPresupuesto();

//$cli_cliente = $vta_presupuesto->getCliCliente();
$cli_cliente = $vta_remito_ajuste->getCliCliente();

$cli_cliente_email = '';
if($cli_cliente){
    $cli_cliente_email = $cli_cliente->getEmail();
}
?>

<div class="datos despachar-remito-ajuste" vta_remito_ajuste_id="<?php Gral::_echo($vta_remito_ajuste->getId()) ?>">
    <form id='form_despachar_remito_ajuste' name='form_despachar_remito_ajuste' method='post' action='' >
        
        <?php include "modal_vta_remito_ajuste_gestion_ficha_top.php" ?>
        
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Presupuesto') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCantidadItemsRemitoAjuste()) ?> Items</div>
        </div>
        
        <div class="par">
            <div class="label"><?php Gral::_echo("Transporte") ?>: </div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_gral_empresa_transportadora_id', Gral::getCmbFiltro(GralEmpresaTransportadora::getGralEmpresaTransportadorasCmb(), '...'), $vta_remito_ajuste_estado->getGralEmpresaTransportadoraId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_empresa_transportadora_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Numero de Guia') ?></div>
            <div class="dato">
                <input name='txt_guia' id='txt_guia' class='textbox' size="20" value="<?php Gral::_echoTxt($vta_remito_ajuste_estado->getGuia()) ?>"></input>
                <div class="label-error" id="txt_guia_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Costo de Envio') ?></div>
            <div class="dato">
                <input name='txt_costo_envio' id='txt_costo_envio' class='textbox moneda importe' size="10" value="<?php Gral::_echoTxt($vta_remito_ajuste_estado->getCostoEnvio()) ?>"></input> $
                <div class="label-error" id="txt_costo_envio_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='2' cols='45' id='txa_nota_interna' class='textbox'><?php Gral::_echoTxt($vta_remito_ajuste_estado->getNotaInterna()) ?></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <input name='txt_destinatario' id='txt_destinatario' class='textbox' value="<?php echo $cli_cliente_email ?>" size="70"></input>
                <div class="label-error" id="txt_destinatario_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Comentarios al Cliente') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='2' cols='45' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_despachar_datos' name='btn_despachar_datos' type='button' gen-modal-file-post="ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_despachar_datos.php?vta_remito_ajuste_id=<?php echo $vta_remito_ajuste->getId() ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaRemitoAjusteGestion()"><?php Lang::_lang('Despachar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>