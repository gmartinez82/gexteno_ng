<?php
include "_autoload.php";

$dbsug_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'dbsug_cli_cliente_id', 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'vta_presupuesto_id', 0);

$cli_cliente = CliCliente::getOxId($dbsug_cli_cliente_id);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$vta_orden_ventas = $cli_cliente->getVtaOrdenVentasActivaFacturas($vta_presupuesto);

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 1;

include 'bloque_vta_orden_venta_listado_datos.php';
?>

<script>
    setInit();
    setInitVtaFacturaGestion();
</script>