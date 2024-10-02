<?php
include_once '_autoload.php';

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id');
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);

$cont = Gral::getVars(Gral::VARS_GET, 'cont', 0);
$panol_id = Gral::getVars(Gral::VARS_GET, 'panol_id', 0);

$pan_panol_seleccionado = PanPanol::getOxId($panol_id);

$estado = ($vta_presupuesto_ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_presupuesto_gestion_edicion_uno.php';
?>
<script>
    setInitVtaPresupuestoGestion();
    setInit();
</script>

