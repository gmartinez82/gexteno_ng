<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
FndCaja::setSesPag($pag);

$criterio = new Criterio(FndCaja::SES_CRITERIOS);
$criterio->addTabla('fnd_caja');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCaja::getSesPagCantidad(), FndCaja::getSesPag());
$fnd_cajas = FndCaja::getFndCajas($paginador, $criterio);

include 'fnd_caja_gestion_datos.php';
?>
<script>
    setInitFndCaja();
    setInit();
</script>
