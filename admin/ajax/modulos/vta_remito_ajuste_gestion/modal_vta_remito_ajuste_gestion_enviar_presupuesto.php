<?php
include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', 0);
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

$cli_cliente = $vta_remito_ajuste->getCliCliente();
?>

<div class="datos enviar-remito-ajuste" vta_remito_ajuste_id="<?php Gral::_echo($vta_remito_ajuste->getId()) ?>">
    <form id='form_enviar_remito_ajuste' name='form_enviar_remito_ajuste' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Remito Ajuste') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $vta_remito_ajuste->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Para') ?></div>
            <div class="dato">
                <input name='txt_direccion_mail' type='text' class='textbox' id='txt_direccion_mail' value='<?php echo $cli_cliente->getEmail() ?>' size='70' />
                <div class="label-error" id="txt_direccion_mail_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Mensaje al destinatario en cuerpo de email') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="label-error" id="error_envio_email_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_enviar' name='btn_enviar' type='button' class='btn_enviar'><?php Lang::_lang('Enviar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitVtaRemitoAjusteGestion();
</script>