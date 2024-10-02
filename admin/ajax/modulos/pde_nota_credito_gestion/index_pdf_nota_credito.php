<?php
include_once '_autoload.php';

$pde_nota_credito_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_credito_enviado_id', 0);
$pde_nota_credito_enviado = PdeNotaCreditoEnviado::getOxId($pde_nota_credito_enviado_id);

$pde_nota_credito_id = $pde_nota_credito_enviado->getPdeNotaCreditoId();
$pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);

$b64_str_contenido_pdf = $pde_nota_credito_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $pde_nota_credito->getNombreArchivoAdjuntoNotaCredito();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
