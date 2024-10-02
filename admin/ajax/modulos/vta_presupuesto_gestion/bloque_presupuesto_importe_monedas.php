<?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_GENERICO_ACCION_OPERAR_MULTIMONEDA') && false) { ?>
<div class="bloque-monedas-importe">
    <?php foreach (GralMoneda::getGralMonedasActivas() as $gral_moneda) { ?>
    <div class="uno-moneda" gral_moneda_id="<?php Gral::_echo($gral_moneda->getId()) ?>" importe="<?php echo Gral::getImporteDesdeDbToPriceFormat($vta_presupuesto->getImporteTotalPresupuestoConIva($gral_moneda, $importe_tributo_total, $porcentaje_iva)) ?>" title="<?php Gral::_echo($gral_moneda->getDescripcion()) ?>">
            <div class="moneda-flag">
                <img src="<?php echo Gral::getPathHttp() ?>admin/imgs/flag_<?php Gral::_echo($gral_moneda->getCodigoIso()) ?>.png" alt="flag" />
            </div>  
            <div class="importe-convertido">                            
                <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConIva($gral_moneda, $importe_tributo_total, $porcentaje_iva), $gral_moneda) ?>
            </div>
            <div class="tipo-cambio">                            
                <?php Gral::_echo($gral_moneda_base->getGralMonedaTipoCambioValorActual($gral_moneda)) ?>
            </div>
        </div>
    <?php } ?>
</div>
<?php } ?>