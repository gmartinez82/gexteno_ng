
<div class="bloque-resumen-comprobantes">

    <div class="col par">
        <div class="label">
            Comprobantes
        </div>
        <div class="dato">
            <?php Gral::_echoInt($cont) ?>
        </div>
    </div>

    <div class="col par">
        <div class="label">
            Comisionables
        </div>
        <div class="dato">
            <?php Gral::_echoInt($cont_comisionable) ?>
        </div>
    </div>

    <div class="col par">
        <div class="label">
            Total Facturas
        </div>
        <div class="dato importe">
            <?php Gral::_echoImp($total_importe_total_comprobante) ?>
        </div>
    </div>

    <div class="col par">
        <div class="label">
            Total NC Anulaciones
        </div>
        <div class="dato importe">
            <?php Gral::_echoImp($total_importe_notas_credito_anulaciones) ?>
        </div>
    </div>

    <div class="col par">
        <div class="label">
            Total Ventas
        </div>
        <div class="dato importe">
            <?php Gral::_echoImp($total_importe_total_comprobante - $total_importe_notas_credito_anulaciones) ?>
        </div>
    </div>
    
</div>