<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_presupuesto = VtaPresupuesto::getOxId($id);

$estado = ($vta_presupuesto->getEstado()) ? 'habilitado' : 'deshabilitado';
$destacado = ($vta_presupuesto->getDestacado()) ? 'destacado' : '';

include 'vta_presupuesto_gestion_uno.php';
?>
<script>
    setInitVtaPresupuestoGestion();
    setInit();
</script>

