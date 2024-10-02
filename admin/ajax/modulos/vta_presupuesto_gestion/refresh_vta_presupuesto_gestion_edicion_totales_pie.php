<?php
include_once '_autoload.php';
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$mensaje_confirmacion = Gral::getVars(Gral::VARS_GET, 'mensaje_confirmacion', 0);

$estado = ($vta_presupuesto->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_presupuesto_gestion_edicion_datos_pie.php';
?>

<script>
    setInitVtaPresupuestoGestion();
    setInit();
</script>