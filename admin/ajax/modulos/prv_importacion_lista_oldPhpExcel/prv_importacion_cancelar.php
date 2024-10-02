<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'prv_importacion_id', 0);
$prv_importacion = PrvImportacion::getOxId($id);
if($prv_importacion){
    $prv_importacion->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_CANCELADO);
}

?>

