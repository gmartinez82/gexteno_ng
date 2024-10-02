<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_recepcion = PdeRecepcion::getOxId($id);

$estado = ($pde_recepcion->getEstado()) ? 'habilitado' : 'deshabilitado';
$noleido = ($pde_recepcion->esPdeRecepcionLeido()) ? '' : 'noleido';
$destacado = ($pde_recepcion->esPdeRecepcionDestacado()) ? 'destacado' : '';

include 'pde_recepcion_gestion_uno.php';
?>
<script>
setInitPdeRecepcions();
</script>