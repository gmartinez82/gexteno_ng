<?php
include "_autoload.php";

        //data: 'identificador=' + identificador + '&tabla=' + tabla + '&clase=' + clase + '&fnd_caja_id=' + fnd_caja_id,
$identificador = Gral::getVars(Gral::VARS_POST, 'identificador', 0, Gral::TIPO_INTEGER);
$tabla = Gral::getVars(Gral::VARS_POST, 'tabla', 0, Gral::TIPO_STRING);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', 0, Gral::TIPO_STRING);
$fnd_caja_id = Gral::getVars(Gral::VARS_POST, 'fnd_caja_id', 0, Gral::TIPO_INTEGER);

$fnd_caja = FndCaja::getOxId($fnd_caja_id);
if($fnd_caja && $fnd_caja->esFndCajaAbierta()){
    
    $fnd_caja->setReasignarCaja($clase, $identificador);
        
}