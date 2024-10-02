<?php

include_once '_autoload.php';

$insumo_id = Gral::getVars(2, 'insumo_id');
$ins_insumo = InsInsumo::getOxId($insumo_id);

$barcode = Gral::getVars(2, 'barcode');

if ($ins_insumo) {
    $ins_insumo->setCodigoBarra($barcode);
    $ins_insumo->setInsInsumoClaves();
    //$ins_insumo->save();
}
?>

