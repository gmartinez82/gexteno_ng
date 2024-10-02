<?php
include "_autoload.php";

$pde_pedido_id = Gral::getVars(Gral::VARS_GET, 'pde_pedido_id', 0);
$pde_pedido = PdePedido::getOxId($pde_pedido_id);

$prv_proveedors = $pde_pedido->getPrvProveedorsXPdePedidoPrvProveedor();
$ins_insumo = $pde_pedido->getInsInsumo();
?>

<div class="datos enviar-factura" pde_pedido_id="<?php Gral::_echo($pde_pedido->getId()) ?>">
    <form id='form_enviar_factura' name='form_enviar_factura' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $pde_pedido->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
            <div class="dato"><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></div>
        </div>

        <div class="bloque-info-proveedores-destinatarios">
            <?php foreach ($prv_proveedors as $prv_proveedor) { ?>
                <div class="par">
                    <div class="label"><?php Gral::_echo($prv_proveedor->getDescripcion()) ?> <?php Gral::_echo($prv_proveedor->getId()) ?></div>
                    <div class="dato">
                        <input name='txt_direccion_mail[<?php Gral::_echo($prv_proveedor->getId()) ?>]' type='text' class='textbox' id='txt_direccion_mail_<?php Gral::_echo($prv_proveedor->getId()) ?>' value='<?php echo $prv_proveedor->getEmail() ?>' size='70' />
                        <div class="label-error" id="txt_direccion_mail_<?php Gral::_echo($prv_proveedor->getId()) ?>_error"></div>

                        <div class="comentario">para enviar a mas de un destinatario debe separarlos con punto y coma (;)</div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Mensaje al destinatario en cuerpo de email') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='80' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="label-error" id="envio_mail_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_enviar' name='btn_enviar' type='button' class='btn_enviar'><?php Lang::_lang('Enviar') ?></button>
        </div>

    </form>
</div>
<script>
    setInitPdePedidos();
    setInit();
</script>