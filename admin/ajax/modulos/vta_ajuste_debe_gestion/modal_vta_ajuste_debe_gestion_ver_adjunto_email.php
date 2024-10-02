<?php
include "_autoload.php";

$vta_ajuste_debe_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_enviado_id', 0);
$vta_ajuste_debe_enviado = VtaAjusteDebeEnviado::getOxId($vta_ajuste_debe_enviado_id);
$vta_ajuste_debe = $vta_ajuste_debe_enviado->getVtaAjusteDebe();

//$nombre_fichero = $vta_ajuste_debe->getNombreArchivoAdjuntoAjusteDebe();
//
//$b64_str_contenido_pdf = $vta_ajuste_debe_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_ajuste_debe_gestion/index_pdf_factura.php?vta_ajuste_debe_enviado_id=<?php echo $vta_ajuste_debe_enviado->getId() ?>" width="100%" height="600" ></iframe>
