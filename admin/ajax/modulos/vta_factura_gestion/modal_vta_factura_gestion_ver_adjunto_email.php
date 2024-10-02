<?php
include "_autoload.php";

$vta_factura_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_enviado_id', 0);
$vta_factura_enviado = VtaFacturaEnviado::getOxId($vta_factura_enviado_id);
$vta_factura = $vta_factura_enviado->getVtaFactura();

//$nombre_fichero = $vta_factura->getNombreArchivoAdjuntoFactura();
//
//$b64_str_contenido_pdf = $vta_factura_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_factura_gestion/index_pdf_factura.php?vta_factura_enviado_id=<?php echo $vta_factura_enviado->getId() ?>" width="100%" height="600" ></iframe>
