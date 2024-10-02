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
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('RemitoAjuste') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Presupuesto') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getPersonaDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCantidadItemsRemitoAjuste()) ?> Items</div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste_tipo_estado->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWEB($vta_remito_ajuste_estado->getCreado())) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Empresa de Transporte") ?>: </div>
            <div class="dato">
                <?php
                $gral_empresa_transportadora_id = $vta_remito_ajuste_estado->getGralEmpresaTransportadoraId();
                Html::html_dib_select(1, 'cmb_gral_empresa_transportadora_id', Gral::getCmbFiltro(GralEmpresaTransportadora::getGralEmpresaTransportadorasCmb(), '...'), $gral_empresa_transportadora_id, 'textbox ' . $error_input_css);
                ?>
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
            <div class="label"><?php Lang::_lang('Costo de Envio') ?></div>
            <div class="dato">
                <input name='txt_costo_envio' id='txt_costo_envio' class='textbox moneda importe' size="10"></input> $
                <div class="label-error" id="txt_costo_envio_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cant Bultos') ?></div>
            <div class="dato">
                <input name='txt_cantidad_bultos' id='txt_cantidad_bultos' class='textbox spinner' size="11"></input> Unidad
                <div class="label-error" id="txt_cantidad_bultos_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <input name='txt_peso' id='txt_peso' class='textbox' size="10"></input> kg
                <div class="label-error" id="txt_peso_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='3' cols='45' id='txa_nota_interna' class='textbox'></textarea>
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
                <textarea name='txa_observacion' rows='3' cols='45' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_despachar' name='btn_despachar' type='button' class='btn_guardar'><?php Lang::_lang('Despachar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>