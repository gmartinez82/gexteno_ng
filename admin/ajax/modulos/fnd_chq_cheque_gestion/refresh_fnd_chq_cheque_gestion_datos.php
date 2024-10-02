<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
FndChqCheque::setSesPag($pag);

$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_cheque');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqCheque::getSesPagCantidad(), FndChqCheque::getSesPag());
$fnd_chq_cheques = FndChqCheque::getFndChqCheques($paginador, $criterio);

include 'fnd_chq_cheque_gestion_datos.php';
?>

<script>
    setInit();
    setInitFndChqChequeGestion();
</script>
