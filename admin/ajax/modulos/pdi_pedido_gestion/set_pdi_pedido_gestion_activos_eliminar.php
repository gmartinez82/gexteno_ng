<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->addTabla('pdi_pedido');	
$criterio->delCriterio($c);
?>

