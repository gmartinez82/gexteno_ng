<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCredito::setSesPag($pag);

$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
$criterio->addTabla('pde_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCredito::getSesPagCantidad(), PdeNotaCredito::getSesPag());
$pde_nota_creditos = PdeNotaCredito::getPdeNotaCreditos($paginador, $criterio);

include 'pde_nota_credito_gestion_datos.php';
?>
<script>
    setInit();
    setInitPdeNotaCreditoGestion();
</script>
