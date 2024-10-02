
<div class="bloque-presupuesto-importe-totales">

    <div class="bloque-presupuesto-importe-totales-col importes">
        
        <div class="bloque-presupuesto-importe-totales-col importe-subtotal">
            <div class="label"><?php Lang::_lang('Subtotal') ?></div>
            <div class="dato">
                <?php Gral::_echoImp($vta_presupuesto->getImporteSubtotal()) ?>
            </div>
        </div>
        
        <div class="bloque-presupuesto-importe-totales-col importe-subtotal">
            <div class="label"><?php Lang::_lang('Descuento') ?></div>
            <div class="dato">
                - <?php Gral::_echoImp($vta_presupuesto->getImporteTotalDescuento()) ?>
            </div>
        </div>

        <div class="bloque-presupuesto-importe-totales-col importe-subtotal">
            <div class="label"><?php Lang::_lang('Subtotal C/Desc') ?></div>
            <div class="dato">
                <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva()) ?>
            </div>
        </div>
        
        <div class="bloque-presupuesto-importe-totales-col importe-iva">
            <div class="label"><?php Lang::_lang('IVA') ?></div>
            <div class="dato">
                <?php Gral::_echoImp($vta_presupuesto->getImporteTotalIva($porcentaje_iva)) ?>
            </div>
        </div>

        <?php if ($importe_tributo_total > 0) { ?>
            <div class="bloque-presupuesto-importe-totales-col importe-tributos">
                <div class="label"><?php Lang::_lang('Tributos') ?></div>
                <div class="dato">
                    <?php Gral::_echoImp($importe_tributo_total) ?>
                </div>
            </div>
        <?php } ?>
        
        <div class="bloque-presupuesto-importe-totales-col importe-total">
            <div class="label"><?php Lang::_lang('Total') ?></div>
            <div class="dato">
                <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConIva(false, 0, $porcentaje_iva) + $importe_tributo_total) ?>
            </div>
        </div>
        
    </div>

    <div class="bloque-presupuesto-importe-totales-col monedas">
        <?php include Gral::getPathAbs() . 'admin/ajax/modulos/vta_presupuesto_gestion/bloque_presupuesto_importe_monedas.php'; ?>   
    </div>

</div>


