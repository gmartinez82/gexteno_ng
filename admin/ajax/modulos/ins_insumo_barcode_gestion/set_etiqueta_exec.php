<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$cantidad = Gral::getVars(2, 'cantidad', 1);

$file_name = Gral::getPathAbs() . "print/epl_insumo_". session_id().".txt";

$fp = fopen($file_name, "w");
fwrite($fp, $ins_insumo->getBarcodeInternoCodigoEPL($cantidad));
fclose($fp);

exec("cat ".$file_name." | lp -d Etiquetas -o raw");
unlink($file_name);

//sleep(2);

/*
exec('lpstat -p | cut -d " " -f 3', $output);
Gral::prr($output);

exec("netstat", $output);
Gral::prr($output);
*/
?>

