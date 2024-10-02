<?php
include "_autoload.php";

$vta_remito_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_id', 0);
$vta_remito = VtaRemito::getOxId($vta_remito_id);

$cli_cliente = $vta_remito->getCliCliente();
?>

<div class="datos enviar-remito" vta_remito_id="<?php Gral::_echo($vta_remito->getId()) ?>">
    <form id='form_enviar_remito' name='form_enviar_remito' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Remito') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $vta_remito->getCodigo()) ?></div>
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
    setInitVtaRemitoGestion();
</script>