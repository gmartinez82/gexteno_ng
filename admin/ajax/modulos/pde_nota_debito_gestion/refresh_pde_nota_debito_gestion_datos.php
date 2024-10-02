<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebito::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
$criterio->addTabla('pde_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebito::getSesPagCantidad(), PdeNotaDebito::getSesPag());
$pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos($paginador, $criterio);

include 'pde_nota_debito_gestion_datos.php';
?>
<script>
    setInit();
    setInitPdeNotaDebitoGestion();
</script>
