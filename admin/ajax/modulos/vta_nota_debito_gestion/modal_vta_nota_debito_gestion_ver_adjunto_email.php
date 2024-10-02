<?php
include "_autoload.php";

$vta_nota_debito_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_debito_enviado_id', 0);
$vta_nota_debito_enviado = VtaNotaDebitoEnviado::getOxId($vta_nota_debito_enviado_id);
$vta_nota_debito = $vta_nota_debito_enviado->getVtaNotaDebito();

//$nombre_fichero = $vta_nota_debito->getNombreArchivoAdjuntoNotaDebito();
//
//$b64_str_contenido_pdf = $vta_nota_debito_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_nota_debito_gestion/index_pdf_nota_debito.php?vta_nota_debito_enviado_id=<?php echo $vta_nota_debito_enviado->getId() ?>" width="100%" height="600" ></iframe>
