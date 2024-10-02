<?php
include_once "_autoload.php";

$pde_comprobante_id = Gral::getVars(Gral::VARS_POST, 'pde_comprobante_id', 0);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', '');

if ($clase == 'PdeNotaCredito') {
    $pde_nota_credito = PdeNotaCredito::getOxId($pde_comprobante_id);
    $pde_comprobante_seleccionado = $pde_nota_credito;
}

if ($clase == 'PdeRecibo') {
    $pde_recibo = PdeRecibo::getOxId($pde_comprobante_id);
    $pde_comprobante_seleccionado = $pde_recibo;
}

$pde_factura_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante_PdeFactura", null);
$pde_nota_debito_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante_PdeNotaDebito", null);

$pde_factura_importe_disponible = 0;
$pde_nota_debito_importe_disponible = 0;

foreach ($pde_factura_ids as $pde_factura_id) {
    $pde_factura = PdeFactura::getOxId($pde_factura_id);
    $pde_factura_importe_disponible += $pde_factura->getSaldoImputable();
}

foreach ($pde_nota_debito_ids as $pde_nota_debito_id) {
    $pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);
    $pde_nota_debito_importe_disponible += $pde_nota_debito->getSaldoImputable();
}

$saldo_imputable = $pde_factura_importe_disponible + $pde_nota_debito_importe_disponible;
$saldo_saldable = $pde_comprobante_seleccionado->getSaldoImputable();
$saldo = $saldo_saldable - $saldo_imputable;

if ($pde_factura_importe_disponible != 0 || $pde_nota_debito_ids != 0) {
    ?>
    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal FCT") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($pde_factura_importe_disponible) ?>
        </div>
    </div>

    <div class="par subtotal">
        <div class="label"><?php Gral::_echo("Subtotal ND") ?>: </div>
        <div class="dato">
            <?php Gral::_echoImp($pde_nota_debito_importe_disponible) ?>
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
