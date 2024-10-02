<?php
include "_autoload.php";

$pde_nota_credito_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_credito_enviado_id', 0);
$pde_nota_credito_enviado = PdeNotaCreditoEnviado::getOxId($pde_nota_credito_enviado_id);
$pde_nota_credito = $pde_nota_credito_enviado->getPdeNotaCredito();

//$nombre_fichero = $pde_nota_credito->getNombreArchivoAdjuntoNotaCredito();
//
//$b64_str_contenido_pdf = $pde_nota_credito_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPathHttp() ?>admin/ajax/modulos/pde_nota_credito_gestion/index_pdf_nota_credito.php?pde_nota_credito_enviado_id=<?php echo $pde_nota_credito_enviado->getId() ?>" width="100%" height="600" ></iframe>
