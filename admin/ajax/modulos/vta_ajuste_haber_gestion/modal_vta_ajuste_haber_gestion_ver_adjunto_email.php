<?php
include "_autoload.php";

$vta_ajuste_haber_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_enviado_id', 0);
$vta_ajuste_haber_enviado = VtaAjusteHaberEnviado::getOxId($vta_ajuste_haber_enviado_id);
$vta_ajuste_haber = $vta_ajuste_haber_enviado->getVtaAjusteHaber();

//$nombre_fichero = $vta_ajuste_haber->getNombreArchivoAdjuntoAjusteHaber();
//
//$b64_str_contenido_pdf = $vta_ajuste_haber_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_ajuste_haber_gestion/index_pdf_ajuste_haber.php?vta_ajuste_haber_enviado_id=<?php echo $vta_ajuste_haber_enviado->getId() ?>" width="100%" height="600" ></iframe>
