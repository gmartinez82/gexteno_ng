<?php
include_once '_autoload.php';
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumo::setSesPag($pag);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumo::getSesPagCantidad(), InsInsumo::getSesPag());
$ins_insumos = InsInsumo::getInsInsumos($paginador, $criterio);

//Gral::prr($ins_insumos);
//exit;

$arr_insumos_id_en_presupuesto = array();
$vta_presupuesto_activo = VtaPresupuesto::getPresupuestoActivo();
if($vta_presupuesto_activo){
    $arr_insumos_id_en_presupuesto = $vta_presupuesto_activo->getArrInsumoIdsEnPresupuesto();
    //Gral::prr($arr_insumos_id_en_presupuesto);
}

$filtro_tipo_visualizacion = Gral::getSes('GEXTENO_KYA_INS_INSUMO_GESTION_FILTRO_TIPO_VISUALIZACION');
if ($filtro_tipo_visualizacion == 'GRID') {
    include 'ins_insumo_gestion_datos_grid.php';
} else {
    include 'ins_insumo_gestion_datos.php';
}

?>
<script>
    setInitInsInsumoGestion();
    setInit();
</script>