<?php
include '_autoload.php';

$var_sesion_random = '_' . rand(1, 999999);

foreach ($_SESSION as $key => $value) {
    // se limpia la variable de info de cheque
    //if (strpos($key, 'fnd_caja_movimiento_cheque_info') === 0)
    //    unset($_SESSION[$key]);
}


$fnd_caja_origen_id = Gral::getVars(Gral::VARS_GET, 'fnd_caja_origen_id', 0);

$gral_caja_descripcion = '';
$fnd_caja_descripcion = '';
if ($fnd_caja_origen_id) {
    $fnd_caja = FndCaja::getOxId($fnd_caja_origen_id);
    if ($fnd_caja) {
        $fnd_caja_descripcion = $fnd_caja->getDescripcion();

        $fnd_caja_movimientos = $fnd_caja->getTieneMovimientosActivos();
        if ($fnd_caja_movimientos) {
            Gral::_echo('<br /><br />La caja <strong>' . $fnd_caja_descripcion . '</strong> tiene movimientos activos.<br />');
            Gral::_echo('Para registrar movimientos no deben haber movimientos activos pendientes de resolucion.');
            exit;
        } else {
            $gral_caja = $fnd_caja->getGralCaja();
            if ($gral_caja) {
                $gral_caja_descripcion = $gral_caja->getDescripcion();
            }
        }
    }
}
?>

<div class='datos caja-movimiento' var_sesion_random='<?php echo $var_sesion_random; ?>'>
    <form id='form_fnd_caja_movimiento' name='form_fnd_caja_movimiento' method='post' action='' fnd_caja_origen_id='<?php echo $fnd_caja->getId(); ?>' >
        <h4>Movimiento de Caja</h4>
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Caja Origen'); ?>
            </div>
            <div class='dato'>
                <?php Gral::_echo($fnd_caja_descripcion); ?>
            </div>
        </div>
        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Caja Destino'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_fnd_caja_destino_id', Gral::getCmbFiltro(FndCaja::getFndCajasAbiertasCmb($fnd_caja_origen_id), '...'), $fnd_caja_origen_id, 'textbox fnd_caja_origen_id ' . $error_input_css); ?>
                <div id='cmb_fnd_caja_origen_id_error' class='label-error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Observacion'); ?>
            </div>
            <div class='dato'>
                <textarea name='txa_observacion' rows='2' cols='50' id='txa_observacion' class='textbox' ><?php Gral::_echoTxt($txa_observacion); ?></textarea>
                <div class='label-error' id='txa_observacion_error'><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>
        <div class='bloque_datos_fnd_caja_movimiento'>
        </div>
    </form>
</div>