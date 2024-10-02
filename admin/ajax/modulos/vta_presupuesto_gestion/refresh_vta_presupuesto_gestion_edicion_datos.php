<?php
include_once '_autoload.php';

$vta_presupuesto = VtaPresupuesto::getPresupuestoActivo();

include 'vta_presupuesto_gestion_edicion_datos.php';
?>
<script>
    setInitVtaPresupuestoGestion();
    setInit();
</script>

