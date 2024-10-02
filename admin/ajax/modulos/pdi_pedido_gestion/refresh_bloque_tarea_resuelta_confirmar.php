<?php
include "_autoload.php";

$tarea_id = Gral::getVars(1, 'tarea_id', 0);
$tal_tarea_base = TalTareaBase::getOxId($tarea_id);

include "bloque_tarea_resuelta_confirmar_tarea.php";
?>