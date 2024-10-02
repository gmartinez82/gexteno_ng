<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
CntbPeriodo::setSesPag($pag);

$criterio = new Criterio(CntbPeriodo::SES_CRITERIOS);
$criterio->addTabla('cntb_periodo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbPeriodo::getSesPagCantidad(), CntbPeriodo::getSesPag());
$cntb_periodos = CntbPeriodo::getCntbPeriodos($paginador, $criterio);

include 'cntb_periodo_gestion_datos.php';
?>

<script>
    setInitCntbPeriodoGestion();
    setInit();
</script>