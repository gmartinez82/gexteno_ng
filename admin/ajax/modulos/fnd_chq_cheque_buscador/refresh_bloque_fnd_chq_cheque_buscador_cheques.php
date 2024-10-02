<?php
include_once '_autoload.php';

$cmb_fnd_chq_en_cartera = Gral::getVars(Gral::VARS_POST, 'en_cartera', -1);
$txt_buscador_cheque    = Gral::getVars(Gral::VARS_POST, 'txt_buscador_cheque', '');
$txt_fecha_cobro_desde  = Gral::getVars(Gral::VARS_POST, 'txt_fecha_cobro_desde', '');
$txt_fecha_cobro_hasta  = Gral::getVars(Gral::VARS_POST, 'txt_fecha_cobro_hasta', '');
$txt_importe_desde      = Gral::getVars(Gral::VARS_POST, 'txt_importe_desde', '');
$txt_importe_hasta      = Gral::getVars(Gral::VARS_POST, 'txt_importe_hasta', '');

$txt_importe_desde = Gral::getImporteDesdePriceFormatToDB($txt_importe_desde);
$txt_importe_hasta = Gral::getImporteDesdePriceFormatToDB($txt_importe_hasta);

$fnd_chq_cheques = FndChqCheque::getFndChqChequeXCriterio($cmb_fnd_chq_en_cartera, $txt_buscador_cheque, 
$txt_fecha_cobro_desde, $txt_fecha_cobro_hasta, $txt_importe_desde, $txt_importe_hasta);

include 'bloque_fnd_chq_cheque_buscador_cheques.php';

?>