<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_orden_pago->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Proveedor"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_orden_pago->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($pde_orden_pago->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado Actual"); ?>
    </div>
    <div class="dato">
        <img src="imgs/pde_orden_pago_tipo_estado/<?php Gral::_echo($pde_orden_pago->getPdeOrdenPagoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_orden_pago->getPdeOrdenPagoTipoEstado()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_orden_pago->getObservacion()) ?>
    </div>
</div>

<?php if ($pde_recibo) { ?>
    <br />
    <div class="titulo"><?php Lang::_lang('Info del Recibo de Compras') ?></div>

    <div class="par">
        <div class="label">
            <?php Lang::_lang("Fecha"); ?>
        </div>
        <div class="dato">
            <?php Gral::_echo(Gral::getFechaToWEB($pde_recibo->getFechaEmision())) ?>
        </div>
    </div>

    <div class="par">
        <div class="label">
            <?php Lang::_lang("Nro"); ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($pde_recibo->getNumeroComprobanteCompleto()) ?>
        </div>
    </div>
    
    <div class="par">
        <div class="label">
            <?php Lang::_lang("Codigo"); ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($pde_recibo->getCodigo()) ?>
        </div>
    </div>

    <div class="par">
        <div class="label">
            <?php Lang::_lang("Tipo de Estado"); ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par">
        <div class="label">
            <?php Lang::_lang("Importe"); ?>
        </div>
        <div class="dato">
            <?php Gral::_echoImp($pde_recibo->getImporteTotalComprobante()) ?>
        </div>
    </div>
    
<?php } ?>
