<?php
include_once "_autoload.php";

$vta_comprobante_id = Gral::getVars(Gral::VARS_POST, 'vta_comprobante_id', 0);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', '');

if ($clase == 'VtaNotaCredito') {
    $vta_nota_credito = VtaNotaCredito::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_nota_credito;
}

if ($clase == 'VtaRecibo') {
    $vta_recibo = VtaRecibo::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_recibo;
}

if ($clase == 'VtaAjusteHaber') {
    $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_comprobante_id);
    $vta_comprobante_seleccionado = $vta_ajuste_haber;
}

$vta_factura_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaFactura", null);
$vta_nota_debito_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaNotaDebito", null);
$vta_ajuste_debe_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaAjusteDebe", null);

$vta_factura_importe_disponible = 0;
$vta_nota_debito_importe_disponible = 0;
$vta_ajuste_debe_importe_disponible = 0;


foreach ($vta_factura_ids as $vta_factura_id) {
    $vta_factura = VtaFactura::getOxId($vta_factura_id);
    $vta_factura_importe_disponible += $vta_factura->getSaldoImputable();
}

foreach ($vta_nota_debito_ids as $vta_nota_debito_id) {
    $vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
    $vta_nota_debito_importe_disponible += $vta_nota_debito->getSaldoImputable();
}

foreach ($vta_ajuste_debe_ids as $vta_ajuste_debe_id) {
    $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
    $vta_ajuste_debe_importe_disponible += $vta_ajuste_debe->getSaldoImputable();
}


$saldo_imputable = $vta_factura_importe_disponible + $vta_nota_debito_importe_disponible + $vta_ajuste_debe_importe_disponible;
$saldo_saldable = $vta_comprobante_seleccionado->getSaldoImputable();
$saldo = $saldo_saldable - $saldo_imputable;

if ($vta_factura_importe_disponible != 0 || $vta_nota_debito_importe_disponible != 0 || $vta_ajuste_debe_importe_disponible != 0) {
    ?>
    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal FCT") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($vta_factura_importe_disponible) ?>
        </div>
    </div>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal ND") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($vta_nota_debito_importe_disponible) ?>
        </div>
    </div>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal AJT") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($vta_ajuste_debe_importe_disponible) ?>
        </div>
    </div>

    <div class="par total">
        <div class="label"><?php Gral::_echo("Total a Saldar") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($saldo_imputable) ?>
        </div>
    </div>

    <div class="par total">
        <div class="label"><?php Gral::_echo("Total a Imputar") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($saldo_saldable) ?>
        </div>
    </div>

    <?php if ($saldo < 0) { ?>
        <div class="par saldo negativo">
            <div class="label"><?php Gral::_echo("Faltan") ?>: </div>
            <div class="dato">
                <?php Gral::_echoImp($saldo) ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="par saldo positivo">
            <div class="label"><?php Gral::_echo("Sobran") ?>: </div>
            <div class="dato">
                <?php Gral::_echoImp($saldo) ?>
            </div>
        </div>
    <?php } ?>

    <div class="botonera">
        <button class="boton btn_generar_vinculo" id='btn_generar_vinculo_haber' name='btn_generar_vinculo_haber' type='button'><?php Lang::_lang('Imputar Comprobante') ?></button>
    </div>

<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('Debe seleccionar comprobantes') ?></div>
    </div>
<?php } ?>
