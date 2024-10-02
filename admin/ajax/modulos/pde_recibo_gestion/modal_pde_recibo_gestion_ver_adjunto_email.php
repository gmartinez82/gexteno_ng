<?php
include "_autoload.php";

$pde_recibo_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_enviado_id', 0);
$pde_recibo_enviado = PdeReciboEnviado::getOxId($pde_recibo_enviado_id);
$pde_recibo = $pde_recibo_enviado->getPdeRecibo();

//$nombre_fichero = $pde_recibo->getNombreArchivoAdjuntoRecibo();
//
//$b64_str_contenido_pdf = $pde_recibo_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPathHttp() ?>admin/ajax/modulos/pde_recibo_gestion/index_pdf_recibo.php?pde_recibo_enviado_id=<?php echo $pde_recibo_enviado->getId() ?>" width="100%" height="600" ></iframe>
