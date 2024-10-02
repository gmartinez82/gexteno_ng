<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$afip_citi_prc = AfipCitiPrc::getOxId($id);

$estado = ($afip_citi_prc->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'afip_citi_prc_gestion_uno.php';
?>

<script>
    setInitAfipCitiPrc();
    setInit();
</script>