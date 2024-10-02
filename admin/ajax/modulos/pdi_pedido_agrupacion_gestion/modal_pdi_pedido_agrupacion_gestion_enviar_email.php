<?php
include "_autoload.php";

$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pdi_pedido_agrupacion_id', 0, Gral::TIPO_INTEGER);
$pdi_pedido_agrupacion    = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);

$pan_panol_origen  = $pdi_pedido_agrupacion->getPanPanolOrigenObj();
$pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj();

?>

<div class="datos enviar-factura" pdi_pedido_agrupacion_id="<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>">
    <form id='form_enviar_factura' name='form_enviar_factura' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $pdi_pedido_agrupacion->getCodigo()) ?></div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Origen') ?></div>
            <div class="dato"><?php Gral::_echo($pan_panol_origen->getDescripcion()) ?></div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Destino') ?></div>
            <div class="dato"><?php Gral::_echo($pan_panol_destino->getDescripcion()) ?></div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Para') ?></div>
            <div class="dato">
                <input name='txt_direccion_mail' type='text' class='textbox' id='txt_direccion_mail' value='' size='70' />
                <div class="label-error" id="txt_direccion_mail_error"></div>
                
                <div class="comentario">para enviar a mas de un destinatario debe separarlos con punto y coma (;)</div>
            </div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Mensaje al destinatario en cuerpo de email') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
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
    setInitPdiPedidoAgrupacions();
    setInit();
</script>