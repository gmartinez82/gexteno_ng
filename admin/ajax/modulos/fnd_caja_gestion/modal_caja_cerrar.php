<?php
include "_autoload.php";

$caja_id = Gral::getVars(2, 'caja_id', 0);
$fnd_caja = FndCaja::getOxId($caja_id);
$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();

$saldo_final = $fnd_caja->getImporteSaldoInicialReal();

// -----------------------------------------------------------------------------
// se inicializa cajero
// -----------------------------------------------------------------------------
$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

$arr_resumen_caja = $fnd_caja->getArrResumenCaja();
//Gral::prr($arr_resumen_caja);
// se obtiene el valor del efectivo existente en caja que deberia rendirse
$importe_total_efectivo_en_caja = $arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'];

// -----------------------------------------------------------------------------
// se controla que sea un cajero
// -----------------------------------------------------------------------------
if (!$fnd_cajero) {
    Gral::_echo('<br /><br /><strong>' . $user->getDescripcion() . '</strong> No se encuentra configurado como cobrador.<br />');
    Gral::_echo('Para registrar cobros es necesario se configurado como COBRADOR.');
    exit;
} else {
    // -------------------------------------------------------------------------
    // se controla que el cobrador tenga una caja abierta
    // -------------------------------------------------------------------------
    $fnd_caja_abierta = $fnd_caja->esFndCajaAbierta();
    if (!$fnd_caja_abierta) {
        Gral::_echo('<br /><br />La Caja <strong>' . $fnd_caja->getDescripcion() . '</strong> NO es una Caja ABIERTA.<br />');
        Gral::_echo('Para finalizar una caja es necesario que se encuentre caja abierta.');
        exit;
    } else {
        $fnd_cajero_caja = $fnd_caja->getFndCajero();
        if ($fnd_cajero != $fnd_cajero_caja && $user->getId() != 1) {
            Gral::_echo('<br /><br />La Caja <strong>' . $fnd_caja->getDescripcion() . '</strong> NO corresponde al cobrador <strong>' . $fnd_cajero->getDescripcion() . '</strong>.<br />');
            Gral::_echo('Unicamente puede cerrar la caja el cobrador propietario de la misma.');
            exit;
        }
    }
}

$gral_billetes = GralBillete::getGralBilletes(null, null, true);
?>
<div class="datos caja cierre" fnd_caja_id="<?php echo $fnd_caja->getId() ?>">


    <div class="mensaje importante">
        Al cerrar NO podrán realizarse modificaciones sobre los cobros incluidos. Por favor verifique que todos los datos sean correctos antes de cerrar.
    </div>

    <p><strong><?php Gral::_echo($fnd_cajero->getDescripcion()) ?></strong>, está a punto de cerrar su caja abierta: <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>.</p>
    
    <form name="form_caja_cerrar" id="form_caja_cerrar" method="post" action="">
        <div id='error_general_error' class='error label-error'></div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Efectivo en Caja') ?></div>
            <div class='dato'>
                <?php Gral::_echoImp($importe_total_efectivo_en_caja); ?>
            </div>
            <input id='hdn_saldo_inicial_esperado' name='hdn_saldo_inicial_esperado' type='hidden' value='<?php Gral::_echoTxt($saldo_inicial_esperado) ?>'/>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Saldo Sugerido') ?></div>
            <div class='dato'>
                <div class="comentario">Importe a mantener en caja para inicializar la siguiente.</div>
                <input id='txt_saldo_final' name='txt_saldo_final' type='text' class='textbox moneda' value='<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($saldo_final)) ?>' size='10' />
                <div id='txt_saldo_final_error' class='label-error' ></div>
            </div>
        </div>

        <div class="gral-billetes">

            <div class="comentario">Indique como se compone el total de efectivo que va a rendir presentes en caja. Debe indicar cantidad de billetes.</div>
            <div id='txt_gral_billete_general_error' class='label-error' ></div>

            <?php foreach ($gral_billetes as $gral_billete) { ?>
                <div class="par gral-billete">
                    <div class="label"><?php Gral::_echo($gral_billete->getDescripcion()) ?></div>
                    <div class="dato">
                        <input type="text" class="textbox spinnerx txt-gral-billete" size="4" id="txt_gral_billete_id_<?php echo $gral_billete->getId() ?>"  name="txt_gral_billete_id[<?php echo $gral_billete->getId() ?>]" importe="<?php echo $gral_billete->getImporte() ?>" />
                    </div>
                </div>
            <?php } ?>

        </div>

        <div class="bloque-datos-rendicion">            
            <?php include "bloque_cierre_datos_rendicion.php" ?>
        </div>

    </form>

</div>
