<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($id);

$estado = ($pde_oc_agrupacion->getEstado()) ? 'habilitado' : 'deshabilitado';

include 'pde_oc_agrupacion_gestion_uno.php';
?>
<script>
setInitPdeOcAgrupacions();
</script>
