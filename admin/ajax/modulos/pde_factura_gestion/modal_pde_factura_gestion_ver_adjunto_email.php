<?php
include "_autoload.php";

$pde_factura_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_enviado_id', 0);
$pde_factura_enviado = PdeFacturaEnviado::getOxId($pde_factura_enviado_id);
$pde_factura = $pde_factura_enviado->getPdeFactura();

//$nombre_fichero = $pde_factura->getNombreArchivoAdjuntoFactura();
//
//$b64_str_contenido_pdf = $pde_factura_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPathHttp() ?>admin/ajax/modulos/pde_factura_gestion/index_pdf_factura.php?pde_factura_enviado_id=<?php echo $pde_factura_enviado->getId() ?>" width="100%" height="600" ></iframe>
