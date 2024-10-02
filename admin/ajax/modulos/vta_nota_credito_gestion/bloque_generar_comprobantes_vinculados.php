<?php
$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitosImputables($dbsug_cli_cliente_id, $gral_empresa_id = null);
$vta_facturas = VtaFactura::getVtaFacturasImputables($dbsug_cli_cliente_id, $gral_empresa_id = null);
//Gral::prr($vta_facturas);

foreach ($vta_facturas as $vta_factura) {
    $vta_comprobantes[] = $vta_factura;
}
foreach ($vta_nota_debitos as $vta_nota_debito) {
    $vta_comprobantes[] = $vta_nota_debito;
}
?>
<div class="crear-comprobantes-vinculados">
    <div class="crear-comprobantes-vinculados-inner">
        <?php
        if (count($vta_comprobantes) > 0) {
            foreach ($vta_comprobantes as $vta_comprobante) {
                $clase = get_class($vta_comprobante);
                ?>
                <div class="crear-comprobante-vinculado">
                    <input type="checkbox" name="chk_vta_comprobante_<?php echo $clase ?>[<?php echo $vta_comprobante->getId() ?>]" id="chk_vta_comprobante_<?php echo $clase ?>_<?php echo $vta_comprobante->getId() ?>" class="chk_vta_comprobante" vta_comprobante_id="<?php echo $vta_comprobante->getId() ?>" clase="<?php echo $clase ?>" value="<?php echo $vta_comprobante->getId() ?>">
                    <label for="chk_vta_comprobante_<?php echo $clase ?>_<?php echo $vta_comprobante->getId() ?>">
                        <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompletoFull()) ?> 
                        - <?php Gral::_echo(Gral::getFechaToWeb($vta_comprobante->getFechaEmision())) ?> 
                        - <img src="imgs/vta_comprobante_tipo_estado/<?php Gral::_echo($vta_comprobante->getVtaComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" />                    
                        <?php Gral::_echo($vta_comprobante->getVtaComprobanteTipoEstado()->getDescripcion()) ?> 
                        - Total <?php Gral::_echoImp($vta_comprobante->getImporteTotalComprobante()) ?> 
                        - <strong>Saldo <?php Gral::_echoImp($vta_comprobante->getSaldoImputable()) ?></strong>
                    </label>                
                </div>
            <?php } ?>
        <?php } else { ?>
            El cliente no tiene comprobantes origen para continuar con la creacion de la Nota de Credito.
        <?php } ?>
    </div>
</div>
