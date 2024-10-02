<?php
include "_autoload.php";

$id = Gral::getVars(2, 'id', 0);
$vta_remito = VtaRemito::getOxId($id);

$cantidad = Gral::getVars(2, 'cantidad', 1);

$file_name = Gral::getPathAbs() . "print/epl_remision_". session_id().".txt";

$fp = fopen($file_name, "w");
fwrite($fp, $vta_remito->getEtiquetaRemisionEPL($cantidad));
fclose($fp);

exec("cat ".$file_name." | lp -d Etiquetas -o raw");
unlink($file_name);

?>

