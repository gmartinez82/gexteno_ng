<?php
include "_autoload.php";

$pde_orden_pago_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_enviado_id', 0);
$pde_orden_pago_enviado = PdeOrdenPagoEnviado::getOxId($pde_orden_pago_enviado_id);
$pde_orden_pago = $pde_orden_pago_enviado->getPdeOrdenPago();

//$nombre_fichero = $pde_orden_pago->getNombreArchivoAdjuntoOrdenPago();
//
//$b64_str_contenido_pdf = $pde_orden_pago_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/pde_orden_pago_gestion/index_pdf_orden_pago.php?pde_orden_pago_enviado_id=<?php echo $pde_orden_pago_enviado->getId() ?>" width="100%" height="600" ></iframe>
