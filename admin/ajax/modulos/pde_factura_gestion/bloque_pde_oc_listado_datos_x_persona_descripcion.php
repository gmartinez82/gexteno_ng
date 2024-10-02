<?php
include "_autoload.php";

$txt_buscador_persona_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_buscador_persona_descripcion', '');

$criterio = new Criterio();

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);

//$criterio->addInicioSubconsulta();
//$criterio->add('', 'true', '', false, "");
//$criterio->addFinSubconsulta();

if ($txt_buscador_persona_descripcion != '') {
//    $criterio->addInicioSubconsulta();
    $criterio->add(PdePresupuesto::GEN_ATTR_PERSONA_DESCRIPCION, $txt_buscador_persona_descripcion, Criterio::LIKE, false, Criterio::_AND);
//    $criterio->addFinSubconsulta();
}

$criterio->addTabla(PdePresupuesto::GEN_TABLA);
$criterio->setCriterios();

//$paginador = new Paginador(20, 1);
//$pde_presupuestos = PdePresupuesto::getPdePresupuestos($paginador, $criterio);
$pde_presupuestos = PdePresupuesto::getPdePresupuestos(null, $criterio);

$pde_ocs = array();
foreach ($pde_presupuestos as $pde_presupuesto) {
    $pde_oc_temps = $pde_presupuesto->getPdeOcsActivaAFacturars();
    foreach ($pde_oc_temps as $pde_oc_temp) {
        $pde_ocs[] = $pde_oc_temp;
    }
}

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 0;

include 'bloque_pde_oc_listado_datos.php';

?>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>