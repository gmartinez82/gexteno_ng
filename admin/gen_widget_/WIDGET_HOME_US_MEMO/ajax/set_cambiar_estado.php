<?php
include "_autoload.php";

$us_memo_id = Gral::getVars(Gral::VARS_POST, 'us_memo_id', 0);
$us_memo_tipo_estado_codigo = Gral::getVars(Gral::VARS_POST, 'us_memo_tipo_estado_codigo', '');

$us_memo = UsMemo::getOxId($us_memo_id);

$arr = array();

if($us_memo_tipo_estado_codigo != ''){
    $us_memo->setUsMemoEstado($us_memo_tipo_estado_codigo, $observacion = 'Cambio Rapido');
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;