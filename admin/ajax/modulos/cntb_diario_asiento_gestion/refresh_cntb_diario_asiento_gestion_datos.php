<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsiento::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsiento::SES_CRITERIOS);
$criterio->addTabla('cntb_diario_asiento');
//$criterio->addOrden(CntbDiarioAsiento::GEN_ATTR_NUMERO, Criterio::_ASC);
$criterio->setCriteriosInicial();
//$criterio->setCriterios();

$paginador = new Paginador(CntbDiarioAsiento::getSesPagCantidad(), CntbDiarioAsiento::getSesPag());
$cntb_diario_asientos = CntbDiarioAsiento::getCntbDiarioAsientos($paginador, $criterio);

include 'cntb_diario_asiento_gestion_datos.php';
?>
<script>
    setInitCntbDiarioAsientoGestion();
    setInit();
</script>