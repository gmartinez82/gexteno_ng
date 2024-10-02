<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');

$hdn_fecha_ficha                = Gral::getVars(1, "hdn_fecha", 0);
$hdn_per_persona_id             = Gral::getVars(1, "hdn_per_persona_id", 0);
$hdn_per_mov_movimiento_id      = Gral::getVars(1, "hdn_per_mov_movimiento_id", 0);
$hdn_per_mov_tipo_movimiento_id = Gral::getVars(1, "hdn_per_mov_tipo_movimiento_id", 0);
$txt_fecha_hora                 = Gral::getVars(1, "txt_fecha_hora", "");
//$cmb_per_mov_estado             = Gral::getVars(1, "cmb_per_mov_estado", -1);
$txa_observacion = Gral::getVars(1, "txa_observacion", "");

// se realizan los controles de datos
$arr["error"] = false;

$per_mov_movimiento = PerMovMovimiento::getOxId($hdn_per_mov_movimiento_id);

//Solo la fecha


if(!Ctrl::esVacio($txt_fecha_hora))
{
    $txt_fecha_hora = Gral::getFechaHoraToDB($txt_fecha_hora)."00";
    $txt_fecha = substr($txt_fecha_hora, 0, 10);
    if(!Ctrl::esFechaHoraValida($txt_fecha_hora))
    {
        $arr["txt_fecha_hora"] = Lang::_lang("Fecha y hora invalida", true);
        $arr["error"] = true;
    }
    else
    {
        $fecha_hora_movimiento = $per_mov_movimiento->getFechaHora();
        
        $datetime_alta_movimiento   = new DateTime($txt_fecha_hora); 
        $datetime_movimiento        = new DateTime($fecha_hora_movimiento);
        if($datetime_alta_movimiento <= $datetime_movimiento)
        {
            $arr["txt_fecha_hora"] = Lang::_lang("La fecha/hora debe ser mayor a la fecha/hora del movimiento seleccionado (".$per_mov_movimiento->getId().").", true);
            $arr["error"] = true;
        }
        else
        {
            $per_mov_movimiento_siguiente = $per_mov_movimiento->getPerMovMovimientoSiguiente();
            if($per_mov_movimiento_siguiente)
            {
                $fecha_hora_movimiento_siguiente = $per_mov_movimiento_siguiente->getFechaHora();
                $datetime_movimiento_siguiente = new DateTime($fecha_hora_movimiento_siguiente);
                
                if($datetime_alta_movimiento >= $datetime_movimiento_siguiente)
                {
                    $arr["txt_fecha_hora"] = Lang::_lang("La fecha y hora no puede ser mayor a la del siguiente movimiento (".$per_mov_movimiento_siguiente->getId().").", true);
                    $arr["error"] = true;
                }
            }
        }
    }
}
else
{
    $arr["txt_fecha_hora"] = Lang::_lang("Debe ingresar una Fecha y hora", true);
    $arr["error"] = true;
}

if($hdn_per_mov_tipo_movimiento_id == 0){
    $arr["cmb_per_mov_tipo_movimiento_id"] = Lang::_lang("Debe un tipo de movimiento", true);
    $arr["error"] = true;    
}

/*if($cmb_per_mov_estado == -1){
    $arr["cmb_per_mov_estado"] = Lang::_lang("Debe seleccionar un estado", true);
    $arr["error"] = true;    
}*/

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un comentario", true);
    $arr["error"] = true;
}

if(!$arr["error"])
{
    $per_mov_movimiento = new PerMovMovimiento();
    $per_mov_movimiento->setEstado($cmb_per_mov_estado);
    $per_mov_movimiento->setFechahora($txt_fecha_hora);
    $per_mov_movimiento->setPerMovTipoMovimientoId($hdn_per_mov_tipo_movimiento_id);
    $per_mov_movimiento->setPerPersonaId($hdn_per_persona_id);
    $per_mov_movimiento->setObservacion($txa_observacion);
    $per_mov_movimiento->setEstado(1);
    $per_mov_movimiento->save();
    
    
    //$txt_fecha = substr($txt_fecha_hora, 0, 10);
    $arr_parametros = array("persona_id" => $hdn_per_persona_id, "fecha" => $txt_fecha);
    PrcProcesoResumen::execProcesoPerMovimientos($arr_parametros);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;

?>