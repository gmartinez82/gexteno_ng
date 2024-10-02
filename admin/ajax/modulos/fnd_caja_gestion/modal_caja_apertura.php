<?php
include "_autoload.php";

// se inicializa cobrador
$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

// se controla que sea un COBRADOR
if (!$fnd_cajero) {
    Gral::_echo('<br /><br /><strong>' . $user->getDescripcion() . '</strong> No se encuentra configurado como cajero.<br />');
    Gral::_echo('Para registrar cobros es necesario se configurado como CAJERO.');
    exit;
} else {
    // se controla que el cobrador tenga una caja abierta
    $cbr_caja_abierta = $fnd_cajero->getFndCajaAbierta();
    if ($cbr_caja_abierta) {
        //Gral::_echo('<br /><br />El Cobrador <strong>' . $fnd_cajero->getDescripcion() . '</strong> tiene una Caja ABIERTA: <strong>"' . $cbr_caja_abierta->getDescripcion() . '"</strong><br />');
        //Gral::_echo('Para abrir otra caja debe indefectiblemente cerrar su caja abierta.');
        //exit;
    }
}

$gral_cajas_alcanzables = $fnd_cajero->getGralCajasAlcanzables();
$gral_cajas_alcanzables_cmb = $fnd_cajero->getGralCajasAlcanzablesCmb();
?>

<form id='form_fnd_caja_apertura' name='form_fnd_caja_apertura' method='post' action='' >
    <div class="datos caja inicializacion">

        <h4>Inicialización de Caja</h4>

        <p>Está a punto de inicializar una nueva caja.</p>

        <div id='error_general_error' class='error label-error'></div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('GralCaja') ?></div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_gral_caja_id', Gral::getCmbFiltro($gral_cajas_alcanzables_cmb, '...'), $cmb_gral_caja_id, 'textbox gral_caja_id ' . $error_input_css); ?>
                <div class='label-error' id='cmb_gral_caja_id_error'></div>
            </div>
        </div>

        <div class='bloque_datos_caja'>
            <div class="comentario">Seleccione una Caja</div>
        </div>

    </div>
</form>