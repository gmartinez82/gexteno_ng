<?php

include "_autoload.php";

$clase = Gral::getVars(Gral::VARS_POST, "clase", '');
$identificador = Gral::getVars(Gral::VARS_POST, "identificador", 0);

switch ($clase) {
    case 'PdeFactura': $o = PdeFactura::getOxId($identificador);
        break;
    case 'PdeNotaCredito': $o = PdeNotaCredito::getOxId($identificador);
        break;
    case 'PdeNotaDebito': $o = PdeNotaDebito::getOxId($identificador);
        break;
    case 'PdeRecibo': $o = PdeRecibo::getOxId($identificador);
        break;
}
if ($o) {
    $o->setDesvincularComprobantesConciliados($recursivo = true);
}
?>