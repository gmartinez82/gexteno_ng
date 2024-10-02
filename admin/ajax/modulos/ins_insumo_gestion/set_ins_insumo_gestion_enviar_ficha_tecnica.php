<?php

include "_autoload.php";

$ins_insumo_id = Gral::getVars(Gral::VARS_GET, "ins_insumo_id", 0);
$txt_descripcion_insumo = Gral::getVars(Gral::VARS_GET, "txt_descripcion_insumo", '');
$txt_email = Gral::getVars(Gral::VARS_GET, "txt_email", '');
$txa_observacion = Gral::getVars(Gral::VARS_GET, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_descripcion_insumo)) {
    $arr["txt_descripcion_insumo"] = Lang::_lang("Debe agregar un nombre para el insumo.", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_email)) {
    $arr["txt_email"] = Lang::_lang("Debe indicar un destinatario valido.", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion o comentario.", true);
    $arr["error"] = true;
}

if ($ins_insumo_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro el insumo. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

    if ($ins_insumo) {
        
        $envio_ok = $ins_insumo->enviarFichaTecnicaEmail($enviar = true, $txt_email, $txa_observacion, $txt_descripcion_insumo);

        if (!$envio_ok) {
            $arr["error_envio_email"] = Lang::_lang("Ups! Ocurrio un error durante el proceso de envio. ", true);
            $arr["error"] = true;
        }
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>