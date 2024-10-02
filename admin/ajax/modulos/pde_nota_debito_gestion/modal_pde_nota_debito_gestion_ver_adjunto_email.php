<?php
include "_autoload.php";

$pde_nota_debito_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_debito_enviado_id', 0);
$pde_nota_debito_enviado = PdeNotaDebitoEnviado::getOxId($pde_nota_debito_enviado_id);
$pde_nota_debito = $pde_nota_debito_enviado->getPdeNotaDebito();

//$nombre_fichero = $pde_nota_debito->getNombreArchivoAdjuntoNotaDebito();
//
//$b64_str_contenido_pdf = $pde_nota_debito_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPathHttp() ?>admin/ajax/modulos/pde_nota_debito_gestion/index_pdf_nota_debito.php?pde_nota_debito_enviado_id=<?php echo $pde_nota_debito_enviado->getId() ?>" width="100%" height="600" ></iframe>
