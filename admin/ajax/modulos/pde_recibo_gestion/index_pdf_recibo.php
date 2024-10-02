<?php
include_once '_autoload.php';

$pde_recibo_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_enviado_id', 0);
$pde_recibo_enviado = PdeReciboEnviado::getOxId($pde_recibo_enviado_id);

$pde_recibo_id = $pde_recibo_enviado->getPdeReciboId();
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);

$b64_str_contenido_pdf = $pde_recibo_enviado->getAdjunto();
$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

$nombre_fichero = $pde_recibo->getNombreArchivoAdjuntoRecibo();

header("Content-type:application/pdf");
header('Content-disposition: inline; filename="'.$nombre_fichero.'"');

echo $str_contenido_pdf;
