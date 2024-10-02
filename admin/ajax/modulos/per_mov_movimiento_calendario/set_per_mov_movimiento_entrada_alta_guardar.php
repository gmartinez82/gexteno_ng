<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');

$hdn_fecha_ficha                = Gral::getVars(1, "hdn_fecha", 0);
$hdn_per_persona_id             = Gral::getVars(1, "hdn_per_persona_id", 0);
$txt_fecha_hora                 = Gral::getVars(1, "txt_fecha_hora", "");
$hdn_per_mov_tipo_movimiento_id = Gral::getVars(1, "hdn_per_mov_tipo_movimiento_id", 0);
//$cmb_per_mov_estado             = Gral::getVars(1, "cmb_per_mov_estado", -1);
$txa_observacion = Gral::getVars(1, "txa_observacion", "");

// se realizan los controles de datos
$arr["error"] = false;

$per_persona = PerPersona::getOxId($hdn_per_persona_id);


if(!Ctrl::esVacio($txt_fecha_hora)){
    $txt_fecha_hora = Gral::getFechaHoraToDB($txt_fecha_hora)."00";
    if(!Ctrl::esFechaHoraValida($txt_fecha_hora))
    {
        $arr["txt_fecha_hora"] = Lang::_lang("Fecha y hora invalida", true);
        $arr["error"] = true;
    }
    else
    {
        $txt_fecha = substr($txt_fecha_hora, 0, 10);
        $diferencia_dias = Date::getDiferenciaTiempo("d", $hdn_fecha_ficha." 00:00:00", $txt_fecha);
        
        if($diferencia_dias != 0)
        {
            $arr["txt_fecha_hora"] = Lang::_lang("Debe seleccionar la misma fecha del calendario", true);
            $arr["error"] = true;
        }
        else
        {
            //Se recuperan los ultimos movimientos
            $per_mov_movimientos = $per_persona->getPerMovMovimientosEnFecha($hdn_fecha_ficha, false, "DESC");
            if($per_mov_movimientos)
            {
                foreach($per_mov_movimientos as $per_mov_movimiento){
                    $per_mov_movimiento_ultimo = $per_mov_movimiento;
                    break;
                }
                
                $fecha_hora_ultimo_movimiento = $per_mov_movimiento->getFechahora();
                $datetime_alta_movimiento   = new DateTime($txt_fecha_hora); 
                $datetime_ultimo_movimiento = new DateTime($fecha_hora_ultimo_movimiento);
                if($datetime_alta_movimiento <= $datetime_ultimo_movimiento)
                {
                    $arr["txt_fecha_hora"] = Lang::_lang("La fecha hora debe ser mayor a la fecha hora del ultimo movimiento (".$per_mov_movimiento->getId().").", true);
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
}
*/

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