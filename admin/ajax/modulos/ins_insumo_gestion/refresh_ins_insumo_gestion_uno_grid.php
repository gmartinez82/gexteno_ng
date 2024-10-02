<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$ins_insumo = InsInsumo::getOxId($id);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$arr_insumos_id_en_presupuesto = array();
$vta_presupuesto_activo = VtaPresupuesto::getPresupuestoActivo();
if ($vta_presupuesto_activo) {
    $arr_insumos_id_en_presupuesto = $vta_presupuesto_activo->getArrInsumoIdsEnPresupuesto();
    //Gral::prr($arr_insumos_id_en_presupuesto);
}

$estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_gestion_uno_grid.php';
?>
<script>
    setInitInsInsumoGestion();
    setInit();
</script>