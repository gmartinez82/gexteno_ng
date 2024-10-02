<?php
include "_autoload.php";

$vta_presupuesto_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_enviado_id', 0);
$vta_presupuesto_enviado = VtaPresupuestoEnviado::getOxId($vta_presupuesto_enviado_id);
//$vta_presupuesto = $vta_presupuesto_enviado->getVtaPresupuesto();
//
//$nombre_fichero = $vta_presupuesto->getNombreArchivoAdjuntoPresupuesto();
//
//$b64_str_contenido_pdf = $vta_presupuesto_enviado->getAdjunto();
//$str_contenido_pdf = base64_decode($b64_str_contenido_pdf);

//echo $str_contenido_pdf;
?>
<iframe src="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/vta_presupuesto_gestion/index_pdf_presupuesto.php?vta_presupuesto_enviado_id=<?php echo $vta_presupuesto_enviado->getId() ?>" width="100%" height="600" ></iframe>
