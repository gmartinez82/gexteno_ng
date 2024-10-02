<?php
include "_autoload.php";

$vta_recibo_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_enviado_id', 0);
$vta_recibo_enviado = VtaReciboEnviado::getOxId($vta_recibo_enviado_id);
$vta_recibo = $vta_recibo_enviado->getVtaRecibo();

//$nombre_fichero = $vta_recibo->getNombreArchivoAdjuntoRecibo();
//
//$b64_str_contenido_pdf = $vta_recibo_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_recibo_gestion/index_pdf_recibo.php?vta_recibo_enviado_id=<?php echo $vta_recibo_enviado->getId() ?>" width="100%" height="600" ></iframe>
