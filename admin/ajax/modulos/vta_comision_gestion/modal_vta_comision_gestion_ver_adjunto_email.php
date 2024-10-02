<?php
include "_autoload.php";

$vta_comision_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_enviado_id', 0);
$vta_comision_enviado = VtaComisionEnviado::getOxId($vta_comision_enviado_id);
$vta_comision = $vta_comision_enviado->getVtaComision();

//$nombre_fichero = $vta_comision->getNombreArchivoAdjuntoOrdenPago();
//
//$b64_str_contenido_pdf = $vta_comision_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_comision_gestion/index_pdf_comision.php?vta_comision_enviado_id=<?php echo $vta_comision_enviado->getId() ?>" width="100%" height="600" ></iframe>
