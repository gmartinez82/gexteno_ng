<?php
include "_autoload.php";

$id = Gral::getVars(2, 'fnd_caja_id', 0);
$fnd_caja = FndCaja::getOxId($id);
$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();


//$fnd_caja_egresos = $fnd_caja->getFndCajaEgresos(null, null, true, $arr_ordens = array(array('campo' => FndCajaEgreso::GEN_ATTR_CREADO, 'orden' => 'desc')));
$fnd_caja_egresos = $fnd_caja->getFndCajaEgresos();
//Gral::prr($fnd_caja_costos); exit;

include "bloque_ficha_egresos.php";
?>