<?php
include_once '_autoload.php';
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id');
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$estado = ($vta_presupuesto->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'bloque_vta_presupuesto_gestion_edicion_pie_totales.php';
?>

<script>
    setInitVtaPresupuestoGestion();
    setInit();
</script>