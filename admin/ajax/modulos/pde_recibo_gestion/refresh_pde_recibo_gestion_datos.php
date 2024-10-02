<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
PdeRecibo::setSesPag($pag);

$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
$criterio->addTabla('pde_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecibo::getSesPagCantidad(), PdeRecibo::getSesPag());
$pde_recibos = PdeRecibo::getPdeRecibos($paginador, $criterio);

include 'pde_recibo_gestion_datos.php';
?>
<script>
    setInit();
    setInitPdeReciboGestion();
</script>
