<?php
include "_autoload.php";

$txt_buscador_persona_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_buscador_persona_descripcion', '');

$criterio = new Criterio();

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

if ($txt_buscador_persona_descripcion != '') {
    $criterio->add(VtaPresupuesto::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador_persona_descripcion, Criterio::LIKE, false, Criterio::_AND);
}

$criterio->addTabla(VtaPresupuesto::GEN_TABLA);
$criterio->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
$criterio->setCriterios();

$vta_presupuestos = VtaPresupuesto::getVtaPresupuestos(null, $criterio);

$vta_orden_ventas = array();
foreach ($vta_presupuestos as $vta_presupuesto) {
    $vta_orden_venta_temps = $vta_presupuesto->getVtaOrdenVentasActivaARemitirs();
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
    setInitVtaRemitoAjusteGestion();
</script>