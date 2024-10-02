<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

VtaPresupuesto::abandonarPresupuesto();

$ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, 'ins_tipo_lista_precio_id', 0);

$vta_vendedor = $user->getVtaVendedor();

$fecha = date('Y-m-d H:i:s');

$vta_presupuesto = VtaPresupuesto::inicializarPresupuesto($vta_vendedor->getId(), $fecha, $ins_tipo_lista_precio_id);

Gral::setSes(VtaPresupuesto::PRESUPUESTO_ACTIVO, $vta_presupuesto->getId());
