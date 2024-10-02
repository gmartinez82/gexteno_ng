<?php
header("Content-Type: text/xml");

include_once '_autoload.php';

$id = Gral::getVars(Gral::VARS_GET, 'id', 0, Gral::TIPO_INTEGER);
$hash = Gral::getVars(Gral::VARS_GET, 'hash', "", Gral::TIPO_STRING);

$vta_factura = VtaFactura::getOxId($id);
if($vta_factura){
    
    // -------------------------------------------------------------------------
    // se valida el hash
    // -------------------------------------------------------------------------
    if($vta_factura->getHash() != $hash){
        echo "No coincide el hash";
        exit;
    }
    
    echo $vta_factura->getSIFEN_DTE_XML();    
}

