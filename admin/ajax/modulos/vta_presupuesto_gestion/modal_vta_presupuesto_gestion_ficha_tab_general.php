<div class="par">
    <div class="label">
        <?php Lang::_lang("Cod Presupuesto"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getCodigo()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cliente"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Vendedor"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Comprador"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getVtaComprador()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Forma de Pago"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getGralFpFormaPago()->getDescripcion()); ?> - 
        <?php Gral::_echo($vta_presupuesto->getGralFpCuota()->getGralFpMedioPago()->getDescripcion()); ?> - 
        <?php Gral::_echo($vta_presupuesto->getGralFpCuota()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Lista de Precio"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado"); ?>
    </div>
    <div class="dato">
        <img src="imgs/vta_presupuesto_tipo_estado/<?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Tipo de Despacho"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoDespacho()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Centro de Recepcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getCliCentroRecepcion()->getDescripcionFull($incluir_localidad = true)); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Sucursal Retiro"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getGralSucursalRetiroObj()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Condicion IVA"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getGralCondicionIva()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha de Creacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha de Vencimiento"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaVencimiento())); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha de Entrega"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaEntregaSaneado())); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cantidad de Items"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getCantidadItems()); ?>
    </div>
</div>

<div class="par subtotal">
    <div class="label"><?php Gral::_echo("Subtotal") ?>: </div>
    <div class="dato">
        <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva()) ?>
    </div>
</div>

<div class="par descuento">
    <div class="label"><?php Gral::_echo("Descuento") ?>: </div>
    <div class="dato">
        <?php Gral::_echoImp($vta_presupuesto->getImporteTotalDescuento()) ?>
    </div>
</div>

<div class="par iva">
    <div class="label"><?php Gral::_echo("IVA") ?>: </div>
    <div class="dato">
        <?php Gral::_echoImp($vta_presupuesto->getIvaPresupuesto()) ?>
    </div>
</div>

<div class="par total">
    <div class="label"><?php Gral::_echo("Total") ?>: </div>
    <div class="dato">
        <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConIva()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nota Interna"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getNotaInterna()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_presupuesto->getObservacion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado"); ?>
    </div>
    <div class="dato">
        <img src="imgs/btn_estado_<?php echo $vta_presupuesto->getEstado(); ?>.gif" width="15" alt="hab" />
        <?php //Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getEstado())->getDescripcion()); ?>
    </div>
</div>