<?php
include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);
$prv_proveedor = $pde_factura->getPrvProveedor();
?>

<div class="datos enviar-factura" pde_factura_id="<?php Gral::_echo($pde_factura->getId()) ?>">
    <form id='form_enviar_factura' name='form_enviar_factura' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Factura') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $pde_factura->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Para') ?></div>
            <div class="dato">
                <input name='txt_direccion_mail' type='text' class='textbox' id='txt_direccion_mail' value='<?php echo $prv_proveedor->getEmail() ?>' size='70' />
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
    setInitPdeFacturaGestion();
</script>