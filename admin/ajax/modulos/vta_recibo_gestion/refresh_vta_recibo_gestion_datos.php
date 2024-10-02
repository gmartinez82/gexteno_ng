<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaRecibo::setSesPag($pag);

$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
$criterio->addTabla('vta_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRecibo::getSesPagCantidad(), VtaRecibo::getSesPag());
$vta_recibos = VtaRecibo::getVtaRecibosDesdeBackend($paginador, $criterio);

include 'vta_recibo_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaReciboGestion();
</script>
