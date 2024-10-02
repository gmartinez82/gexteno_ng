<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');


$hdn_per_mov_movimiento_id = Gral::getVars(1, "hdn_per_mov_movimiento_id", 0);
$hdn_fecha_ficha = Gral::getVars(1, "hdn_fecha_ficha", 0);
$hdn_per_persona_id = Gral::getVars(1, "hdn_per_persona_id", 0);
$txt_fecha_hora = Gral::getVars(1, "txt_fecha_hora", "");
//$cmb_per_mov_tipo_movimiento_id = Gral::getVars(1, "cmb_per_mov_tipo_movimiento_id", 0);
$cmb_per_mov_estado = Gral::getVars(1, "cmb_per_mov_estado", -1);
$txa_observacion = Gral::getVars(1, "txa_observacion", "");

//Gral::prr($_POST);
//exit;
// se realizan los controles de datos
$arr["error"] = false;

$per_mov_movimiento = PerMovMovimiento::getOxId($hdn_per_mov_movimiento_id);
$per_mov_movimiento_fecha_hora = $per_mov_movimiento->getFechaHora();
$per_mov_tipo_movimiento = $per_mov_movimiento->getPerMovTipoMovimiento();


if (!Ctrl::esVacio($txt_fecha_hora)) {
    $txt_fecha_hora = Gral::getFechaHoraToDB($txt_fecha_hora) . "00";
    $txt_fecha = substr($txt_fecha_hora, 0, 10);

    if (!Ctrl::esFechaHoraValida($txt_fecha_hora)) {
        $arr["txt_fecha_hora"] = Lang::_lang("Fecha y hora invalida", true);
        $arr["error"] = true;
    } else {
        if ($per_mov_tipo_movimiento->getCodigo() == PerMovTipoMovimiento::TIPO_ENTRADA) {
            $txt_fecha = substr($txt_fecha_hora, 0, 10);
            $diferencia_dias = Date::getDiferenciaTiempo("d", $hdn_fecha_ficha . " 00:00:00", $txt_fecha);


            if ($diferencia_dias != 0) {
                $arr["txt_fecha_hora"] = Lang::_lang("Debe seleccionar la misma fecha del calendario", true);
                $arr["error"] = true;
            } else {
                $per_mov_movimiento_par_contrario = $per_mov_movimiento->getPerMovMovimientoParContrario();
                if ($per_mov_movimiento_par_contrario) {
                    $fecha_hora_movimiento_par_contrario = $per_mov_movimiento_par_contrario->getFechaHora();

                    $datetime_edit_movimiento = new DateTime($txt_fecha_hora);
                    $datetime_movimiento_par_contrario = new DateTime($fecha_hora_movimiento_par_contrario);
                    if ($datetime_edit_movimiento >= $datetime_movimiento_par_contrario) {
                        $arr["txt_fecha_hora"] = Lang::_lang("La fecha y hora no puede ser mayor a la de su par de Salida (" . $per_mov_movimiento_par_contrario->getId() . ").", true);
                        $arr["error"] = true;
                    } else {
                        $per_mov_movimiento_anterior = $per_mov_movimiento->getPerMovMovimientoAnterior();
                        if ($per_mov_movimiento_anterior) {
                            $fecha_hora_movimiento_anterior = $per_mov_movimiento_anterior->getFechaHora();
                            $datetime_movimiento_anterior = new DateTime($fecha_hora_movimiento_anterior);
                            //Gral::pr($fecha_hora_movimiento_anterior, "fecha_hora_movimiento_anterior");
                            //Gral::pr($txt_fecha_hora, "txt_fecha_hora");
                            if ($datetime_edit_movimiento < $datetime_movimiento_anterior) {
                                $arr["txt_fecha_hora"] = Lang::_lang("La fecha y hora no puede ser menor a la del anterior movimiento (" . $per_mov_movimiento_anterior->getId() . ").", true);
                                $arr["error"] = true;
                            }
                        }
                    }
                }
            }
        }

        if ($per_mov_tipo_movimiento->getCodigo() == PerMovTipoMovimiento::TIPO_SALIDA) {
            $per_mov_movimiento_par_contrario = $per_mov_movimiento->getPerMovMovimientoParContrario();
            if ($per_mov_movimiento_par_contrario) {
                $fecha_hora_movimiento_par_contrario = $per_mov_movimiento_par_contrario->getFechaHora();

                $datetime_edit_movimiento = new DateTime($txt_fecha_hora);
                $datetime_movimiento_par_contrario = new DateTime($fecha_hora_movimiento_par_contrario);
                if ($datetime_edit_movimiento <= $datetime_movimiento_par_contrario) {
                    $arr["txt_fecha_hora"] = Lang::_lang("La fecha y hora no puede ser menor a la de su par de Entrada (" . $per_mov_movimiento_par_contrario->getId() . ").", true);
                    $arr["error"] = true;
                } else {
                    $per_mov_movimiento_siguiente = $per_mov_movimiento->getPerMovMovimientoSiguiente();
                    //Gral::prr($per_mov_movimiento_siguiente);
                    if ($per_mov_movimiento_siguiente) {
                        $fecha_hora_movimiento_siguiente = $per_mov_movimiento_siguiente->getFechaHora();
                        $datetime_movimiento_siguiente = new DateTime($fecha_hora_movimiento_siguiente);
                        //Gral::pr($fecha_hora_movimiento_siguiente, "fecha_hora_movimiento_siguiente");
                        //Gral::pr($txt_fecha_hora, "txt_fecha_hora");
                        if ($datetime_edit_movimiento >= $datetime_movimiento_siguiente) {
                            $arr["txt_fecha_hora"] = Lang::_lang("La fecha y hora no puede ser mayor a la del siguiente movimiento (" . $per_mov_movimiento_siguiente->getId() . ").", true);
                            $arr["error"] = true;
                        }
                    }
                }
            }
        }
    }
} else {
    $arr["txt_fecha_hora"] = Lang::_lang("Debe ingresar una Fecha y hora", true);
    $arr["error"] = true;
}


if ($cmb_per_mov_estado == -1) {
    $arr["cmb_per_mov_estado"] = Lang::_lang("Debe seleccionar un estado", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un comentario", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    if ($per_mov_movimiento) {
        $per_mov_movimiento = PerMovMovimiento::getOxId($hdn_per_mov_movimiento_id);
        $per_mov_movimiento->setFechahora($txt_fecha_hora);
        $per_mov_movimiento->setEstado($cmb_per_mov_estado);
        $per_mov_movimiento->setObservacion($txa_observacion);

        if ($per_mov_tipo_movimiento->getCodigo() == PerMovTipoMovimiento::TIPO_ENTRADA) {
            if ($per_mov_tipo_movimiento->getEstado() == 0) {
                $per_mov_movimiento_par_contrario = $per_mov_movimiento->getPerMovMovimientoParContrario();
                if ($per_mov_movimiento_par_contrario) {
                    $per_mov_movimiento_par_contrario->setEstado(0);
                    $per_mov_movimiento_par_contrario->save();
                }
            }
        }

        $per_mov_movimiento->save();
    }

    //$txt_fecha = substr($txt_fecha_hora, 0, 10);

    $arr_parametros = array("persona_id" => $hdn_per_persona_id, "fecha" => $txt_fecha);
    //Gral::prr($arr_parametros);
    PrcProcesoResumen::execProcesoPerMovimientos($arr_parametros);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>