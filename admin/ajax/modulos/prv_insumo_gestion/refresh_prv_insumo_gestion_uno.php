<?php
include_once "_autoload.php";

$id = Gral::getVars(2, "id");
$prv_insumo = PrvInsumo::getOxId($id);

$estado = ($prv_insumo->getEstado()) ? "habilitado" : "deshabilitado";
include "prv_insumo_gestion_uno.php";

?>