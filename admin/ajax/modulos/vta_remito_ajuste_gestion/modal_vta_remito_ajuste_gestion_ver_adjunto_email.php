<?php
include "_autoload.php";

$vta_remito_ajuste_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_enviado_id', 0);
$vta_remito_ajuste_enviado = VtaRemitoAjusteEnviado::getOxId($vta_remito_ajuste_enviado_id);
$vta_remito_ajuste = $vta_remito_ajuste_enviado->getVtaRemitoAjuste();

//$nombre_fichero = $vta_remito_ajuste->getNombreArchivoAdjuntoRemitoAjuste();
//
//$b64_str_contenido_pdf = $vta_remito_ajuste_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_remito_ajuste_gestion/index_pdf_remito.php?vta_remito_ajuste_enviado_id=<?php echo $vta_remito_ajuste_enviado->getId() ?>" width="100%" height="600" ></iframe>
