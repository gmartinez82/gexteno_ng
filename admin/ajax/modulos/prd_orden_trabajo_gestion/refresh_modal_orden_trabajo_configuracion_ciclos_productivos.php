<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";


$prd_proceso_productivo_id = Gral::getVars(Gral::VARS_POST, 'prd_proceso_productivo_id', 0, Gral::TIPO_INTEGER);
$prd_orden_trabajo_id = Gral::getVars(Gral::VARS_POST, 'prd_orden_trabajo_id', 0, Gral::TIPO_INTEGER);

$prd_proceso_productivo = PrdProcesoProductivo::getOxId($prd_proceso_productivo_id);
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);

include 'bloque_ciclos_proceso_productivo_datos.php';
?>