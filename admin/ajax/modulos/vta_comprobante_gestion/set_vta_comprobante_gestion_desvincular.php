<?php

include "_autoload.php";

$clase = Gral::getVars(Gral::VARS_POST, "clase", '');
$identificador = Gral::getVars(Gral::VARS_POST, "identificador", 0);

switch ($clase) {
    case 'VtaFactura': $o = VtaFactura::getOxId($identificador);
        break;
    case 'VtaNotaCredito': $o = VtaNotaCredito::getOxId($identificador);
        break;
    case 'VtaNotaDebito': $o = VtaNotaDebito::getOxId($identificador);
        break;
    case 'VtaRecibo': $o = VtaRecibo::getOxId($identificador);
        break;
    case 'VtaAjusteDebe': $o = VtaAjusteDebe::getOxId($identificador);
        break;
    case 'VtaAjusteHaber': $o = VtaAjusteHaber::getOxId($identificador);
        break;
}

if ($o) {
    $o->setDesvincularComprobantesConciliados($recursivo = true);
}
?>