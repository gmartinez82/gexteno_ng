<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_comision = VtaComision::getOxId($id);

$estado = ($vta_comision->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_comision_gestion_uno.php';
?>
<script>
    setInit();
    setInitVtaComisionGestion();
</script>


