<?php
include_once '_autoload.php';

$cantidad = Gral::getVars(1, 'cantidad', 10);
VtaRemitoAjuste::setSesPagCantidad($cantidad);
?>

