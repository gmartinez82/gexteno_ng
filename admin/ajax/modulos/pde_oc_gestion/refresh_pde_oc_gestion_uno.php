<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_oc = PdeOc::getOxId($id);
$pde_oc_agrupacion = $pde_oc->getPdeOcAgrupacion();

$estado = ($pde_oc->getEstado()) ? 'habilitado' : 'deshabilitado';
$noleido = ($pde_oc->esPdeOcLeido()) ? '' : 'noleido';
$destacado = ($pde_oc->esPdeOcDestacado()) ? 'destacado' : '';

include 'pde_oc_gestion_uno.php';
?>
<script>
setInitPdeOcs();
</script>
