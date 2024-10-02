<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaComision::setSesPag($pag);

$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->addTabla('vta_comision');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComision::getSesPagCantidad(), VtaComision::getSesPag());
$vta_comisions = VtaComision::getVtaComisions($paginador, $criterio);

include 'vta_comision_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaComisionGestion();
</script>

