<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$vta_nota_credito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_id', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '', Gral::TIPO_STRING);

$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);


// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error_general"] = Lang::_lang("Ha ocurrido un error", true);
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo", true);
    $arr["error"] = true;
}elseif(strlen($txa_observacion) < 5 || strlen($txa_observacion) > 500){
    $arr["error_general"] = Lang::_lang("Ha ocurrido un error", true);
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar entre 5 y 500 caracteres", true);
    $arr["error"] = true;    
}

if (!$arr["error"]){
    // -------------------------------------------------------------------------
    // se cancela la factura en sifen
    // -------------------------------------------------------------------------
    $eku_eve_resp = $vta_nota_credito->setGenerarEventoEmisorCancelacion($txa_observacion);
    if($eku_eve_resp){
        if($eku_eve_resp->getEkuGresproceveGresprocDcodres() == '0600'){ // Evento registrado correctamente
            
            // -----------------------------------------------------------------
            // se importan eventos vinculados al comprobante
            // -----------------------------------------------------------------
            $array_datos_sifen = $vta_nota_credito->setImportarEventosEnSIFEN();
            
        }else{
            $arr["error_general"] = 'ERROR: '.$eku_eve_resp->getDescripcion();            
            $arr["error"] = true;    
        }
    }else{
        $arr["error_general"] = Lang::_lang("No se ha obtenido respuestas desde el SIFEN", true);
        $arr["error"] = true;    
    }
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
