<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
AfipCitiPrc::setSesPag($pag);

$criterio = new Criterio(AfipCitiPrc::SES_CRITERIOS);
$criterio->addTabla('afip_citi_prc');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AfipCitiPrc::getSesPagCantidad(), AfipCitiPrc::getSesPag());
$afip_citi_prcs = AfipCitiPrc::getAfipCitiPrcs($paginador, $criterio);

include 'afip_citi_prc_gestion_datos.php';
?>

<script>
    setInitAfipCitiPrc();
    setInit();
</script>