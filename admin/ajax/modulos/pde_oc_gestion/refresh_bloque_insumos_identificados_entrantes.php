<?php
include "_autoload.php";

$oc_id = Gral::getVars(2, 'oc_id', 0);
$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$cantidad = Gral::getVars(2, 'cantidad', 0);

$pde_oc = PdeOc::getOxId($oc_id);
$ins_insumo = InsInsumo::getOxId($insumo_id);


if($ins_insumo && $ins_insumo->getIdentificable()){
    include 'bloque_insumos_identificados_entrantes.php';
}else{
    Lang::_lang('El insumo no requiere detalle');
}
?>
