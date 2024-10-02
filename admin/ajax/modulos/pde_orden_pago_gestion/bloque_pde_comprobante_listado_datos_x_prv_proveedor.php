<?php
include "_autoload.php";

$dbsug_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'dbsug_prv_proveedor_id', 0);

$prv_proveedor = PrvProveedor::getOxId($dbsug_prv_proveedor_id);

$pde_comprobantes = $prv_proveedor->getPdeComprobantesActivaOrdenPagos();

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 1;

include 'bloque_pde_comprobante_listado_datos.php';
 ?>

<script>
    setInit();
    setInitPdeOrdenPagoGestion();
</script>