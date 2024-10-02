<?php

include_once '_autoload.php';

$fnd_chq_cheque_id          = Gral::getVars(Gral::VARS_POST, 'fnd_chq_cheque_id', 0);
$cmb_fnd_chq_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_tipo_estado_id', 0);
$txa_observacion            = Gral::getVars(Gral::VARS_POST, "txa_observacion");

$fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);



// control de datos
$arr["error"] = false;

if ($cmb_fnd_chq_tipo_estado_id == 0)
{
    $arr["error"] = true;
    $arr["cmb_fnd_chq_tipo_estado_id"] = Lang::_lang("Debe ingresar un tipo de estado", true);
}

if (Ctrl::esVacio($txa_observacion))
{
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
}

if (!$arr["error"])
{
    $fnd_chq_tipo_estado = FndChqTipoEstado::getOxId($cmb_fnd_chq_tipo_estado_id);
    $fnd_chq_estado      = $fnd_chq_cheque->setFndChqEstado($fnd_chq_tipo_estado->getCodigo(), $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>