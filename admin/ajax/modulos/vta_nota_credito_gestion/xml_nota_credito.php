<?php
header("Content-Type: text/xml");

include_once '_autoload.php';

$id = Gral::getVars(Gral::VARS_GET, 'id', 0, Gral::TIPO_INTEGER);
$hash = Gral::getVars(Gral::VARS_GET, 'hash', "", Gral::TIPO_STRING);

$vta_nota_credito = VtaNotaCredito::getOxId($id);
if($vta_nota_credito){
    
    // -------------------------------------------------------------------------
    // se valida el hash
    // -------------------------------------------------------------------------
    if($vta_nota_credito->getHash() != $hash){
        echo "No coincide el hash";
        exit;
    }
    
    echo $vta_nota_credito->getSIFEN_DTE_XML();    
}

