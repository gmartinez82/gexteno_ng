<?php
include "_autoload.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cli_cliente_id', 0);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$vta_orden_ventas = $cli_cliente->getVtaOrdenVentasActivaRemitoAjustes();

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 1;

include 'bloque_vta_orden_venta_listado_datos.php';
 ?>

<script>
    setInit();
    setInitVtaRemitoAjusteGestion();
</script>