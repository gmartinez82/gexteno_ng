<?php
include "_autoload.php";

$vta_nota_credito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_id', 0);
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
$cli_cliente = $vta_nota_credito->getCliCliente();
?>

<div class="datos enviar-nota-credito" vta_nota_credito_id="<?php Gral::_echo($vta_nota_credito->getId()) ?>">
    <form id='form_enviar_nota_credito' name='form_enviar_nota_credito' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Nota de Credito') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $vta_nota_credito->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Para') ?></div>
            <div class="dato">
                <input name='txt_direccion_mail' type='text' class='textbox' id='txt_direccion_mail' value='<?php echo $cli_cliente->getEmail() ?>' size='70' />
                <div class="label-error" id="txt_direccion_mail_error"></div>
                
                <div class="comentario">para enviar a mas de un destinatario debe separarlos con punto y coma (;)</div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_enviar_observacion' rows='3' cols='50' id='txa_enviar_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_enviar_observacion_error"></div>
            </div>
        </div>
        <div class="label-error" id="envio_mail_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_enviar' name='btn_enviar' type='button' class='btn_enviar'><?php Lang::_lang('Enviar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitVtaNotaCreditoGestion();
</script>