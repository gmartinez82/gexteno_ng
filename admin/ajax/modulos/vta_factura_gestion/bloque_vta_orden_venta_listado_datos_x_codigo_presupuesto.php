<?php
include "_autoload.php";

$txt_buscador_codigo_presupuesto = Gral::getVars(Gral::VARS_POST, 'txt_buscador_codigo_presupuesto', '');

$criterio = new Criterio();

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

//$criterio->addInicioSubconsulta();
//$criterio->add('', 'true', '', false, "");
//$criterio->addFinSubconsulta();

if ($txt_buscador_codigo_presupuesto != '') {
//    $criterio->addInicioSubconsulta();
    $criterio->add(VtaPresupuesto::GEN_ATTR_CODIGO, $txt_buscador_codigo_presupuesto, Criterio::LIKE, false, Criterio::_AND);
//    $criterio->addFinSubconsulta();
}

$criterio->addTabla(VtaPresupuesto::GEN_TABLA);
$criterio->setCriterios();

//$paginador = new Paginador(20, 1);
//$vta_presupuestos = VtaPresupuesto::getVtaPresupuestos($paginador, $criterio);
$vta_presupuestos = VtaPresupuesto::getVtaPresupuestos(null, $criterio);

$vta_orden_ventas = array();
foreach ($vta_presupuestos as $vta_presupuesto) {
    $vta_orden_venta_temps = $vta_presupuesto->getVtaOrdenVentasActivaAFacturars();
    foreach ($vta_orden_venta_temps as $vta_orden_venta_temp) {
        $vta_orden_ventas[] = $vta_orden_venta_temp;
    }
}

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 0;

include 'bloque_vta_orden_venta_listado_datos.php';

?>

<script>
    setInit();
    setInitVtaFacturaGestion();
</script>