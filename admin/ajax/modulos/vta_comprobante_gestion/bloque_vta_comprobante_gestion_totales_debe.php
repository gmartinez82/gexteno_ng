<?php
include_once "_autoload.php";

$vta_comprobante_id = Gral::getVars(Gral::VARS_POST, 'vta_comprobante_id', 0);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', '');

if ($clase == 'VtaNotaDebito') {
    $vta_nota_debito = VtaNotaDebito::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_nota_debito;
}

if ($clase == 'VtaFactura') {
    $vta_factura = VtaFactura::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_factura;
}

if ($clase == 'VtaAjusteDebe') {
    $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_ajuste_debe;
}

$vta_recibo_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaRecibo", null);
$vta_nota_credito_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaNotaCredito", null);
$vta_ajuste_haber_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaAjusteHaber", null);



$vta_recibo_importe_disponible = 0;
$vta_nota_credito_importe_disponible = 0;
$vta_ajuste_haber_importe_disponible = 0;

foreach ($vta_recibo_ids as $vta_recibo_id) {
    $vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
    $vta_recibo_importe_disponible += $vta_recibo->getSaldoImputable();
}

foreach ($vta_nota_credito_ids as $vta_nota_credito_id) {
    $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
    $vta_nota_credito_importe_disponible += $vta_nota_credito->getSaldoImputable();
}

foreach ($vta_ajuste_haber_ids as $vta_ajuste_haber_id) {
    $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
    $vta_ajuste_haber_importe_disponible += $vta_ajuste_haber->getSaldoImputable();
}



$saldo_imputable = $vta_recibo_importe_disponible + $vta_nota_credito_importe_disponible + $vta_ajuste_haber_importe_disponible;
$saldo_saldable = $vta_comprobante_seleccionado->getSaldoImputable();
$saldo = $saldo_saldable - $saldo_imputable;

if ($vta_nota_credito_importe_disponible != 0 || $vta_recibo_importe_disponible != 0 || $vta_ajuste_haber_importe_disponible != 0) {
    ?>
    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Total RCB") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($vta_recibo_importe_disponible) ?>
        </div>
    </div>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Total NC") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($vta_nota_credito_importe_disponible) ?>
        </div>
    </div>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal AJT") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($vta_ajuste_haber_importe_disponible) ?>
        </div>
    </div>
    
    <div class="par total">
        <div class="label"><?php Gral::_echo("Total a Imputar") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($saldo_imputable) ?>
        </div>
    </div>

    <div class="par total">
        <div class="label"><?php Gral::_echo("Total a Saldar") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($saldo_saldable) ?>
        </div>
    </div>

    <?php if ($saldo < 0) { ?>
        <div class="par saldo positivo">
            <div class="label"><?php Gral::_echo("Sobran") ?>: </div>
            <div class="dato">
                <?php Gral::_echoImp($saldo) ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="par saldo negativo">
            <div class="label"><?php Gral::_echo("Faltan") ?>: </div>
            <div class="dato">
                <?php Gral::_echoImp($saldo) ?>
            </div>
        </div>
    <?php } ?>

    <div class="botonera">
        <button class="boton btn_generar_vinculo" id='btn_generar_vinculo_debe' name='btn_generar_vinculo_debe' type='button'><?php Lang::_lang('Saldar Comprobante') ?></button>
    </div>

<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('Debe seleccionar comprobantes') ?></div>
    </div>
<?php } ?>
