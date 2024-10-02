<?php
include "_autoload.php";

$vta_remito_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_enviado_id', 0);
$vta_remito_enviado = VtaRemitoEnviado::getOxId($vta_remito_enviado_id);
$vta_remito = $vta_remito_enviado->getVtaRemito();

//$nombre_fichero = $vta_remito->getNombreArchivoAdjuntoRemito();
//
//$b64_str_contenido_pdf = $vta_remito_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_remito_gestion/index_pdf_remito.php?vta_remito_enviado_id=<?php echo $vta_remito_enviado->getId() ?>" width="100%" height="600" ></iframe>
