<?php
include "_autoload.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recepcion = PdeRecepcion::getOxId($id);

$cantidad = Gral::getVars(2, 'cantidad', 1);

$file_name = Gral::getPathAbs() . "print/epl_recepcion_". session_id().".txt";

$fp = fopen($file_name, "w");
fwrite($fp, $pde_recepcion->getEtiquetaRecepcionEPL($cantidad));
fclose($fp);

exec("cat ".$file_name." | lp -d Etiquetas -o raw");
unlink($file_name);
?>

