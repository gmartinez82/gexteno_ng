
<?php if ($vta_presupuesto->getImporteTotalDescuento() > 0) { ?>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal SIN descuento") ?>:</div>
        <div class="dato">
            <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoSinDescuentoSinIva()) ?>
        </div>
    </div>

    <div class="par descuento">
        <div class="label"><?php Gral::_echo("Descuento") ?>:</div>
        <div class="dato">

            <div class="porcentaje descuento" title="Promedio de Descuento">
                OFF <?php Gral::_echoFloat($vta_presupuesto->getPromedioDeDescuento()) ?> %
            </div>

            <?php Gral::_echoImp($vta_presupuesto->getImporteTotalDescuento()) ?>
        </div>

    </div>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal CON descuento") ?>:</div>
        <div class="dato">
            <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva()) ?>
        </div>
    </div>

<?php } else { ?>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal") ?>:</div>
        <div class="dato">
            <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoSinDescuentoSinIva()) ?>
        </div>
    </div>

<?php } ?>

<?php if (!$vta_presupuesto->getInsTipoListaPrecio()->getIncluyeLogistica() && $vta_presupuesto->getIncluyeLogistica()) { ?>
    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Logistica") ?>:</div>
        <div class="dato">

           <div class="porcentaje logistica" title="Recargo por Logistica">
                + <?php Gral::_echoFloat($vta_presupuesto->getPorcentajeLogistica()) ?> %
            </div>
            
            <?php Gral::_echoImp($vta_presupuesto->getImporteLogistica()) ?>
        </div>
    </div>
<?php } ?>

<?php if ($vta_presupuesto->getIncluyeRecargo()) { ?>
<div class="par <?php echo ($vta_presupuesto->getPorcentajeRecargo() > 0) ? 'recargo' : 'descuento' ?>">
    <div class="label"><?php Gral::_echo($vta_presupuesto->getTextoRecargo()) ?>:</div>
    <div class="dato">

        <?php if($vta_presupuesto->getPorcentajeRecargo() > 0){ ?>
            <div class="porcentaje recargo" title="Recargo por Forma de Pago">
                + <?php Gral::_echoFloat(abs($vta_presupuesto->getPorcentajeRecargo())) ?> %
            </div>
        <?php }else{ ?>
            <div class="porcentaje descuento" title="Descuento por Forma de Pago">
                OFF <?php Gral::_echoFloat(abs($vta_presupuesto->getPorcentajeRecargo())) ?> %
            </div>
        <?php } ?>
        
        <?php Gral::_echoImp($vta_presupuesto->getImporteRecargo()) ?>
    </div>
</div>
<?php } ?>

<div class="par iva">
    <div class="label"><?php Gral::_echo("IVA") ?>:</div>
    <div class="dato">
        <?php Gral::_echoImp($vta_presupuesto->getIvaPresupuesto()) ?>
    </div>
</div>

<div class="par total">
    <div class="label"><?php Gral::_echo("Total") ?>:</div>
    <div class="dato">
        <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConIva()) ?>
    </div>
</div>

<?php $porcentaje_iva = $vta_presupuesto->getPorcentaje() ?>
<?php include Gral::getPathAbs().'admin/ajax/modulos/vta_presupuesto_gestion/bloque_presupuesto_importe_monedas.php'; ?>          
