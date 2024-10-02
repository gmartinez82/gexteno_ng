<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Numero"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getNumeroComprobanteCompleto()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cliente"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_factura->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado Actual"); ?>
    </div>
    <div class="dato">
        <img src="imgs/vta_factura_tipo_estado/<?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Actividad"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getGralActividad()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Escenario"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getGralEscenario()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Forma de Pago"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getGralFpFormaPago()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cuota"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getGralFpCuota()->getDescripcionCompleta()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nota Publica"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getNotaPublica()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nota Privada"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getObservacion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Preventista"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_factura->getVtaPreventista()->getDescripcion()) ?>
    </div>
</div>
