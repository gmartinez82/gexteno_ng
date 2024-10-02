<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_ajuste_haber = VtaAjusteHaber::getOxId($id);

$estado = ($vta_ajuste_haber->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_ajuste_haber_gestion_uno.php';
?>
<script>
    setInit();
    setInitVtaAjusteHaberGestion();
</script>
