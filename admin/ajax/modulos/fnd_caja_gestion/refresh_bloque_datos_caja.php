<?php
include_once '_autoload.php';

$cmb_gral_caja_id = Gral::getVars(1, 'gral_caja_id', 0);

$saldo_inicial_esperado = 0;
$saldo_inicial_real = 0;

$gral_caja = GralCaja::getOxId($cmb_gral_caja_id);
if (!$gral_caja)
    exit;

$fnd_caja = FndCaja::getUltimaFndCaja($cmb_gral_caja_id);
if ($fnd_caja) {
    $saldo_inicial_esperado = $fnd_caja->getImporteSaldoFinal();
    $saldo_inicial_real = $fnd_caja->getImporteSaldoFinal();
    
    $es_caja_abierta = $fnd_caja->esFndCajaAbierta();
}

if (!$es_caja_abierta) {
    ?>
    <div class='par'>
        <div class='label'><?php Lang::_lang('Saldo Inicial Esperado') ?></div>
        <div class='dato'>
            <?php Gral::_echoImp($saldo_inicial_esperado); ?>
        </div>
        <input id='hdn_saldo_inicial_esperado' name='hdn_saldo_inicial_esperado' type='hidden' value='<?php Gral::_echoTxt($saldo_inicial_esperado) ?>'/>
    </div>

    <div class='par'>
        <div class='label'><?php Lang::_lang('Saldo Inicial Real') ?></div>
        <div class='dato'>
            <input id='txt_saldo_inicial_real' name='txt_saldo_inicial_real' type='text' class='textbox moneda' value='<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($saldo_inicial_real)) ?>' size='10' />
            <div class='label-error' id='txt_saldo_inicial_real_error'></div>
        </div>
    </div>

    <div class="botonera">
        <input class="boton inicializar" type="button" value="Inicializar <?php Gral::_echo($gral_caja->getDescripcion()) ?>" />
    </div>

    <div class="botonera-loading">
    </div>    
<?php } else { ?>
    <div class="texto-caja-abierta">
        La caja <strong><?php Gral::_echo($gral_caja->getDescripcion()) ?></strong> se encuentra abierta y operando con la descripcion <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>, no se ser abierta en esta instancia. Para poder abrirse la caja primero debe cerrarse.
    </div>
<?php } ?>