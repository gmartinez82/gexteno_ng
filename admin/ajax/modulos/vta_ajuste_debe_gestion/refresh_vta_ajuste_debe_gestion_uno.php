<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_ajuste_debe = VtaAjusteDebe::getOxId($id);

$estado = ($vta_ajuste_debe->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_ajuste_debe_gestion_uno.php';
?>

<script>
    setInit();
    setInitVtaAjusteDebeGestion();
</script>