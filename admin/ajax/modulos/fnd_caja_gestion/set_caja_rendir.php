<?php

include '_autoload.php';

$caja_id = Gral::getVars(Gral::VARS_POST, 'caja_id', 0);
$fnd_caja_destino_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_caja_destino_id', 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');

$fnd_caja_cerrada = FndCaja::getOxId($caja_id);


if ($fnd_caja_cerrada) {
    $fnd_cajero = $fnd_caja_cerrada->getFndCajero();
    $es_caja_cerrada = $fnd_caja_cerrada->esFndCajaCerrada();

    // control de datos
    $arr['error'] = false;

    if ($fnd_caja_destino_id == 0) {
        //$arr['error'] = true;
        //$arr['cmb_fnd_caja_destino_id'] = Lang::_lang('Debe ingresar una caja', true);
    }

    if (Ctrl::esVacio($txa_observacion)) {
        $arr['error'] = true;
        $arr['txa_observacion'] = Lang::_lang('Debe ingresar una observacion', true);
    }

    if (!$fnd_cajero) {
        $arr['error'] = true;
        $arr['error_general'] = Lang::_lang('No es cajero', true);
    }


    if (!$es_caja_cerrada) {
        $arr['error'] = true;
        $arr['error_general'] = Lang::_lang('La caja no esta cerrada', true);
    }


    if (!$arr['error']) {
        $fnd_caja_cerrada->setRendirCaja($fnd_caja_destino_id, $txa_observacion);
    }

    // se retornan datos
    $arr_json = json_encode($arr);
    echo $arr_json;
}
?>