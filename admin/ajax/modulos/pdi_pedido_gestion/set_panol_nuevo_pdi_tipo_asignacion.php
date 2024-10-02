<?php
include "_autoload.php";

$panol_id = Gral::getVars(2, 'panol_id', 0);
$tipo_asignacion_id = Gral::getVars(2, 'tipo_asignacion_id');

$pan_panol = PanPanol::getOxId($panol_id);
if($pan_panol){
	
	$pdi_tipo_asignacion = PdiTipoAsignacion::getOxId($tipo_asignacion_id);
	$tipo_asignacion_codigo = $pdi_tipo_asignacion->getcodigo();
	
	$pan_panol->setPdiAsignacionNuevo($tipo_asignacion_codigo);
}
?>