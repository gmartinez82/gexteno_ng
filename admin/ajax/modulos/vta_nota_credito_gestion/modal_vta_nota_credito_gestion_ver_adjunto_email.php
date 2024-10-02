<?php
include "_autoload.php";

$vta_nota_credito_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_enviado_id', 0);
$vta_nota_credito_enviado = VtaNotaCreditoEnviado::getOxId($vta_nota_credito_enviado_id);
$vta_nota_credito = $vta_nota_credito_enviado->getVtaNotaCredito();

//$nombre_fichero = $vta_nota_credito->getNombreArchivoAdjuntoNotaCredito();
//
//$b64_str_contenido_pdf = $vta_nota_credito_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_nota_credito_gestion/index_pdf_nota_credito.php?vta_nota_credito_enviado_id=<?php echo $vta_nota_credito_enviado->getId() ?>" width="100%" height="600" ></iframe>
