<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');

$hdn_fecha_calendario                 = Gral::getVars(1, "hdn_fecha", 0);
$hdn_per_persona_id                   = Gral::getVars(1, "hdn_per_persona_id", 0);
$hdn_tipo_accion                      = Gral::getVars(1, "hdn_tipo_accion", "");
$hdn_per_mov_planificacion_id         = Gral::getVars(1, "hdn_per_mov_planificacion_id", 0);

$cmb_gral_novedad_id                  = Gral::getVars(1, "cmb_gral_novedad_id", 0);
$cmb_pln_jornada_id                   = Gral::getVars(1, "cmb_pln_jornada_id", 0);
$cmb_gral_novedad_motivo_id           = Gral::getVars(1, "cmb_gral_novedad_motivo_id", 0);
$cmb_gral_novedad_motivo_extendido_id = Gral::getVars(1, "cmb_gral_novedad_motivo_extendido_id", 0);
$txt_horas                            = Gral::getVars(1, "txt_horas", 0);
$txt_fecha_desde                      = Gral::getVars(1, "txt_fecha_desde", "");
$txt_fecha_hasta                      = Gral::getVars(1, "txt_fecha_hasta", "");
$txt_tramo_desde                      = $_POST["txt_tramo_desde"]; //Gral::getVars(1, "txt_tramo_desde");
$txt_tramo_hasta                      = $_POST["txt_tramo_hasta"]; //Gral::getVars(1, "txt_tramo_hasta");
$arr_chk_gral_dia                     = $_POST["chk_gral_dia"];
$txa_observacion                      = Gral::getVars(1, "txa_observacion", '');
//Gral::prr($arr_chk_gral_dia);
//exit;
// se realizan los controles de datos
$arr["error"] = false;

//Gral::pr($txt_fecha_desde, "fecha desde");
//Gral::pr($txt_fecha_hasta, "fecha hasta");

$gral_novedad_motivo           = GralNovedadMotivo::getOxId($cmb_gral_novedad_motivo_id);
$gral_novedad_motivo_extendido = GralNovedadMotivoExtendido::getOxId($cmb_gral_novedad_motivo_extendido_id);

// -----------------------------------------------------------------------------
// se determina el array de personas
// -----------------------------------------------------------------------------
if($hdn_per_persona_id != 0){
    $arr_explode_persona_id = explode(",", $hdn_per_persona_id);
}
//Gral::prr($arr_explode_persona_id);
//exit;
// -----------------------------------------------------------------------------


$per_mov_planificacion = PerMovPlanificacion::getOxId($hdn_per_mov_planificacion_id);

if($cmb_gral_novedad_id == 0)
{
    $arr["cmb_gral_novedad_id"] = Lang::_lang("Debe una cargar una novedad.", true);
    $arr["error"] = true;
}
else
{
    //Sirve para controlar mas abajo las horas y para el save
    $gral_novedad = GralNovedad::getOxId($cmb_gral_novedad_id);
    
    if ($gral_novedad && ($gral_novedad->getCodigo() == GralNovedad::TIPO_TRABAJO))
    {
        if ($cmb_pln_jornada_id == 0)
        {
            $arr["cmb_pln_jornada_id"] = Lang::_lang("Debe una cargar una jornada.", true);
            $arr["error"] = true;
        }
        else
        {
            $arr_rango_horas_formateado = PerMovPlanificacion::getArrRangoHorasFormateado($txt_tramo_desde, $txt_tramo_hasta);
            //Gral::prr($arr_rango_horas_formateado);
        }
    }
    else
    {
        $gral_novedad_motivos = $gral_novedad->getGralNovedadMotivos();
        if (count($gral_novedad_motivos) > 0)
        {
            //preguntar si la novedad tiene motivos configurados, de ser asi exigir cargar un motivo
            if ($cmb_gral_novedad_motivo_id == 0)
            {
                $arr["cmb_gral_novedad_motivo_id"] = Lang::_lang("Debe una cargar un motivo.", true);
                $arr["error"] = true;
            }
            else
            {
                if ($gral_novedad_motivo)
                {
                    $gral_novedad_motivo_extendidos = $gral_novedad_motivo->getGralNovedadMotivoExtendidos();
                    if (count($gral_novedad_motivo_extendidos))
                    {
                        if ($cmb_gral_novedad_motivo_extendido_id == 0)
                        {
                            $arr["cmb_gral_novedad_motivo_extendido_id"] = Lang::_lang("Debe una cargar un motivo extendido.", true);
                            $arr["error"] = true;
                        }
                    }
                }
            }
        }
    }
    
    
    //Si es novedad parcial controlar que no se cargue la misma novedad
    if ($hdn_tipo_accion == "alta_novedad_parcial")
    {
        $criterio = new Criterio();
        $criterio->addTabla(PerMovPlanificacion::GEN_TABLA);
        $criterio->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $hdn_per_persona_id, Criterio::IGUAL);
        $criterio->add(PerMovPlanificacion::GEN_ATTR_FECHA, $hdn_fecha_calendario, Criterio::IGUAL);
        $criterio->add(PerMovPlanificacion::GEN_ATTR_GRAL_NOVEDAD_ID, $cmb_gral_novedad_id, Criterio::IGUAL);
        $criterio->add(PerMovPlanificacion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        //$criterio->add(PerMovPlanificacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        
        $criterio->setCriterios();
        $per_mov_planificacions = PerMovPlanificacion::getPerMovPlanificacions(null, $criterio);
        if ($per_mov_planificacions){
            $arr["cmb_gral_novedad_id"] = Lang::_lang("Debe ingresar otra novedad. Hay una novedad igual cargada.", true);
            $arr["error"] = true;
        }
    }
}


if (empty($arr_chk_gral_dia))
{
    if ($hdn_tipo_accion == "alta_novedad_total" || $hdn_tipo_accion == "alta_novedad_total_masiva")
    {
        $arr["chk_gral_dia"] = Lang::_lang("Debe seleccionar al menos un dia.", true);
        $arr["error"] = true;
    }
}


if ($txt_horas <= 0)
{
    //Solo controlar las horas si no es novedad trabajo
    if ($gral_novedad && ($gral_novedad && $gral_novedad->getCodigo() != GralNovedad::TIPO_TRABAJO) && ($gral_novedad && $gral_novedad->getCodigo() != GralNovedad::TIPO_FRANCO))
    {
        $arr["txt_horas"] = Lang::_lang("Debe ingresar horas de la planificacion.", true);
        $arr["error"] = true;
    }
}


if (Ctrl::esVacio($txt_fecha_desde))
{
    if ($hdn_tipo_accion == "alta_novedad_total_masiva")
    {
        $arr["txt_fecha_desde"] = Lang::_lang("Debe una cargar una fecha desde.", true);
        $arr["error"] = true;
    }
}


if (Ctrl::esVacio($txt_fecha_hasta))
{
    if ($hdn_tipo_accion == "alta_novedad_total" || $hdn_tipo_accion == "alta_novedad_total_masiva")
    {
        $arr["txt_fecha_hasta"] = Lang::_lang("Debe una cargar una fecha hasta.", true);
        $arr["error"] = true;
    }
}
else
{
    $aux_fecha = Gral::getFechaToDB($txt_fecha_hasta);
    //Gral::pr($aux_fecha, "aux_fecha");
    //Gral::prr($txt_fecha_hasta);
    //Gral::prr($aux_fecha);
    
    if (!Ctrl::esFechaValida($aux_fecha))
    {
        $arr["txt_fecha_hasta"] = Lang::_lang("Fecha Hasta invalida", true);
        $arr["error"] = true;
    }
    else
    {
        if ($hdn_tipo_accion != "alta_novedad_total_masiva")
        {
            $txt_fecha_hasta_aux      = Gral::getFechaToDB($txt_fecha_hasta)." 00:00:00";
            $hdn_fecha_calendario_aux = $hdn_fecha_calendario." 00:00:00";
            
            $datetime_fecha_hasta      = new DateTime($txt_fecha_hasta_aux);
            $datetime_fecha_calendario = new DateTime($hdn_fecha_calendario_aux);
            //Gral::pr($txt_fecha_hasta_aux, "txt_fecha_hasta_aux");
            //Gral::pr($hdn_fecha_calendario_aux, "hdn_fecha_calendario_aux");
            
            if ($datetime_fecha_hasta < $datetime_fecha_calendario)
            {
                $arr["txt_fecha_hasta"] = Lang::_lang("La fecha hasta debe ser igual o mayor a la fecha desde.", true);
                $arr["error"] = true;
            }
        }
        elseif($hdn_tipo_accion == "alta_novedad_total_masiva")
        {
            //controlar que fecha hasta sea igual o mayor a fecha desde
            $txt_fecha_desde_aux = Gral::getFechaToDB($txt_fecha_desde) . " 00:00:00";
            $txt_fecha_hasta_aux = Gral::getFechaToDB($txt_fecha_hasta) . " 00:00:00";
            
            $datetime_fecha_desde = new DateTime($txt_fecha_desde_aux);
            $datetime_fecha_hasta = new DateTime($txt_fecha_hasta_aux);
            
            if ($datetime_fecha_hasta < $datetime_fecha_desde)
            {
                $arr["txt_fecha_hasta"] = Lang::_lang("La fecha hasta debe ser igual o mayor a la fecha desde.", true);
                $arr["error"] = true;
            }
        }
    }
}


if (Ctrl::esFechaValida($aux_fecha))
{
    if ($hdn_tipo_accion != "alta_novedad_total_masiva")
    {
        $fecha_hora_hasta  = Gral::getFechaToDB($txt_fecha_hasta)." 00:00:00";
        $diferencia_dias   = Date::getDiferenciaTiempo("d", $hdn_fecha_calendario." 00:00:00", $fecha_hora_hasta);
        $txt_cantidad_dias = $diferencia_dias;
    }
    elseif($hdn_tipo_accion == "alta_novedad_total_masiva")
    {
        $txt_fecha_desde_aux = Gral::getFechaToDB($txt_fecha_desde)." 00:00:00";
        $txt_fecha_hasta_aux = Gral::getFechaToDB($txt_fecha_hasta)." 00:00:00";
        
        $diferencia_dias   = Date::getDiferenciaTiempo("d", $txt_fecha_desde_aux, $txt_fecha_hasta_aux);
        $txt_cantidad_dias = $diferencia_dias;
    }
}


//$arr["error"] = true;
//Gral::prr($arr_explode_persona_id);
if (!$arr["error"])
{
    if ($hdn_tipo_accion == "alta_novedad_parcial" || $hdn_tipo_accion == "editar_novedad")
    {
        $txt_cantidad_dias = 1;
    }
    else
    {
        $txt_cantidad_dias += 1;
    }
    
    //$inicial      = 1;
    $fecha = $hdn_fecha_calendario;

    if($hdn_tipo_accion == "alta_novedad_total_masiva")
    {
        $fecha = Gral::getFechaToDB($txt_fecha_desde);
    }
    
    $fecha_sumada = $fecha;
    $dia_semana   = Date::getDiaDeSemana($fecha_sumada);

    for ($i = 1; $i <= $txt_cantidad_dias; $i++)
    {
        $col_per_mov_planificacions = array();
        //Calcula el dia de la semana de acuerdo a la fecha (fecha que se va calculando segun la cantidad de dias)
        $dia_semana = Date::getDiaDeSemana($fecha_sumada);
        $gral_dia   = GralDia::getOxCodigoNumero($dia_semana);

        //ver si aca poner un OR o hacer otro IF para alta_novedad_total_masiva
        if ($hdn_tipo_accion == "alta_novedad_total" || $hdn_tipo_accion == "alta_novedad_total_masiva")
        {
            //Si el dia calculado esta en el array de dias seleccionados hacer
            if (in_array($dia_semana, $arr_chk_gral_dia))
            {
                $inicial = 1;
                foreach($arr_explode_persona_id as $persona_id)
                {
                    $criterio = new Criterio();
                    $criterio->addTabla(PerMovPlanificacion::GEN_TABLA);
                    //$criterio->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $hdn_per_persona_id, Criterio::IGUAL);
                    $criterio->add(PerMovPlanificacion::GEN_ATTR_PER_PERSONA_ID, $persona_id, Criterio::IGUAL);
                    $criterio->add(PerMovPlanificacion::GEN_ATTR_FECHA, $fecha_sumada, Criterio::IGUAL);
                    $criterio->add(PerMovPlanificacion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
                    $criterio->setCriterios();
                    $per_mov_planificacions = PerMovPlanificacion::getPerMovPlanificacions(null, $criterio);

                    foreach ($per_mov_planificacions as $per_mov_planificacion)//Dar baja las planificaciones
                    {
                        $per_mov_planificacion->setEstado(0);
                        $per_mov_planificacion->setActual(0);
                        $per_mov_planificacion->save();
                        
                        //buscar los tramos dejarlos inhabilitados
                        $per_mov_planificacion_tramos = $per_mov_planificacion->getPerMovPlanificacionTramos(null, null, true);
                        foreach ($per_mov_planificacion_tramos as $per_mov_planificacion_tramo)
                        {
                            $per_mov_planificacion_tramo->setEstado(0);
                            $per_mov_planificacion_tramo->save();
                        }
                        
                        $inicial = 0;
                    }
                    
                    $per_mov_planificacion = new PerMovPlanificacion();
                    //$per_mov_planificacion->setPerPersonaId($hdn_per_persona_id);
                    $per_mov_planificacion->setPerPersonaId($persona_id);
                    $per_mov_planificacion->setGralNovedadId($cmb_gral_novedad_id);
                    $per_mov_planificacion->setFecha($fecha_sumada);
                    $per_mov_planificacion->setInicial($inicial);
                    $per_mov_planificacion->setGralDiaId($gral_dia->getId());
                    
                    if ($cmb_pln_jornada_id != 0){
                        $per_mov_planificacion->setPlnJornadaId($cmb_pln_jornada_id);
                    }
                    
                    if ($cmb_gral_novedad_motivo_id != 0){
                       $per_mov_planificacion->setGralNovedadMotivoId($cmb_gral_novedad_motivo_id);
                    }
                    
                    if ($cmb_gral_novedad_motivo_extendido_id != 0){
                        $per_mov_planificacion->setGralNovedadMotivoExtendidoId($cmb_gral_novedad_motivo_extendido_id);
                    }
                    
                    $per_mov_planificacion->setEstado(1);
                    $per_mov_planificacion->setActual(1);
                    $per_mov_planificacion->setObservacion($txa_observacion);
                    $per_mov_planificacion->save();

                    $col_per_mov_planificacions[] = $per_mov_planificacion;
                    //Gral::prr($per_mov_planificacion);
                }
            }
        }
        elseif ($hdn_tipo_accion == "alta_novedad_parcial")
        {
            $per_mov_planificacion = new PerMovPlanificacion();
            
            //$per_mov_planificacion->setPerPersonaId($hdn_per_persona_id);
            $per_mov_planificacion->setPerPersonaId($arr_explode_persona_id[0]);
            $per_mov_planificacion->setGralNovedadId($cmb_gral_novedad_id);
            $per_mov_planificacion->setFecha($fecha_sumada);
            //$per_mov_planificacion->setHoras($txt_horas);
            $per_mov_planificacion->setInicial($inicial);
            $per_mov_planificacion->setGralDiaId($gral_dia->getId());
            
            if ($cmb_pln_jornada_id != 0){
                $per_mov_planificacion->setPlnJornadaId($cmb_pln_jornada_id);
            }
            
            if ($cmb_gral_novedad_motivo_id != 0){
                $per_mov_planificacion->setGralNovedadMotivoId($cmb_gral_novedad_motivo_id);
            }
            
            if ($cmb_gral_novedad_motivo_extendido_id != 0){
                $per_mov_planificacion->setGralNovedadMotivoExtendidoId($cmb_gral_novedad_motivo_extendido_id);
            }
            
            $per_mov_planificacion->setEstado(1);
            $per_mov_planificacion->setActual(1);
            $per_mov_planificacion->setObservacion($txa_observacion);
            $per_mov_planificacion->save();

            $col_per_mov_planificacions[] = $per_mov_planificacion;
        }
        elseif ($hdn_tipo_accion == "editar_novedad")
        {
            $per_mov_planificacion = PerMovPlanificacion::getOxId($hdn_per_mov_planificacion_id);
            
            //buscar los tramos dejarlos inhabilitados
            $per_mov_planificacion_tramos = $per_mov_planificacion->getPerMovPlanificacionTramos(null, null, true);
            foreach ($per_mov_planificacion_tramos as $per_mov_planificacion_tramo){
                $per_mov_planificacion_tramo->setEstado(0);
                $per_mov_planificacion_tramo->save();
            }
            
            $per_mov_planificacion->setGralNovedadId($cmb_gral_novedad_id);
            
            if($cmb_pln_jornada_id != 0)
            {
                $per_mov_planificacion->setPlnJornadaId($cmb_pln_jornada_id);
            }
            
            if($cmb_gral_novedad_motivo_id != 0)
            {
                $per_mov_planificacion->setGralNovedadMotivoId($cmb_gral_novedad_motivo_id);
            }
            
            if($cmb_gral_novedad_motivo_extendido_id != 0)
            {
                $per_mov_planificacion->setGralNovedadMotivoExtendidoId($cmb_gral_novedad_motivo_extendido_id);
            }
            
            //$per_mov_planificacion->setHoras($txt_horas);
            $per_mov_planificacion->setJornadaEditada(1);
            $per_mov_planificacion->setObservacion($txa_observacion);
            $per_mov_planificacion->save();
            
            $col_per_mov_planificacions[] = $per_mov_planificacion;
        }
        
        //Gral::pr($per_mov_planificacion_id, "per_mov_planificacion_id");
        if ($gral_novedad->getCodigo() == GralNovedad::TIPO_TRABAJO)
        {
            foreach($col_per_mov_planificacions as $col_per_mov_planificacion)
            {
                if ($cmb_pln_jornada_id != 0)
                {
                    $sum_horas_tramo = 0;
                    foreach ($arr_rango_horas_formateado as $indice => $valor)
                    {
                        $pln_jornada_tramo       = PlnJornadaTramo::getOxId($indice);
                        $pln_jornada_tramo_orden = $pln_jornada_tramo->getOrden();
                        
                        $tramo_desde = $valor["desde"];
                        $tramo_hasta = $valor["hasta"];
                        
                        //$fecha_auxiliar_tramo_desde = $hdn_fecha_calendario." ".$tramo_desde.":00";
                        //$fecha_auxiliar_tramo_hasta = $hdn_fecha_calendario." ".$tramo_hasta.":00";

                        $fecha_auxiliar_tramo_desde = $fecha_sumada." ".$tramo_desde.":00";
                        $fecha_auxiliar_tramo_hasta = $fecha_sumada." ".$tramo_hasta.":00";

                        $diferencia_horas = Date::getDiferenciaTiempo("h", $fecha_auxiliar_tramo_desde, $fecha_auxiliar_tramo_hasta);
                        $horas_tramo      = $diferencia_horas;
                        $sum_horas_tramo += $horas_tramo;
                        //Gral::pr("diferencia", $diferencia_horas);
                        //$sum_horas_tramo += $pln_jornada_horas_tramo;
                        
                        if ($hdn_tipo_accion == "alta_novedad_total" || $hdn_tipo_accion == "alta_novedad_total_masiva")
                        {
                            //Si el dia calculado esta en el array de dias seleccionados hacer
                            if (in_array($dia_semana, $arr_chk_gral_dia))
                            {
                                $per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
                                //$per_mov_planificacion_tramo->setPerMovPlanificacionId($per_mov_planificacion_id);
                                $per_mov_planificacion_tramo->setPerMovPlanificacionId($col_per_mov_planificacion->getId());

                                $per_mov_planificacion_tramo->setPlnJornadaTramoId($indice);
                                $per_mov_planificacion_tramo->setTramoDesde($tramo_desde);
                                $per_mov_planificacion_tramo->setTramoHasta($tramo_hasta);
                                //$per_mov_planificacion_tramo->setHorasTramo($pln_jornada_horas_tramo);
                                $per_mov_planificacion_tramo->setHorasTramo($horas_tramo);
                                $per_mov_planificacion_tramo->setOrden($pln_jornada_tramo_orden);
                                $per_mov_planificacion_tramo->setEstado(1);
                                $per_mov_planificacion_tramo->save();
                            }
                        }
                        else
                        {
                            $per_mov_planificacion_tramo = new PerMovPlanificacionTramo();
                            //$per_mov_planificacion_tramo->setPerMovPlanificacionId($per_mov_planificacion_id);
                            $per_mov_planificacion_tramo->setPerMovPlanificacionId($col_per_mov_planificacion->getId());
                            $per_mov_planificacion_tramo->setPlnJornadaTramoId($indice);
                            $per_mov_planificacion_tramo->setTramoDesde($tramo_desde);
                            $per_mov_planificacion_tramo->setTramoHasta($tramo_hasta);
                            //$per_mov_planificacion_tramo->setHorasTramo($pln_jornada_horas_tramo);
                            $per_mov_planificacion_tramo->setHorasTramo($horas_tramo);
                            $per_mov_planificacion_tramo->setOrden($pln_jornada_tramo_orden);
                            $per_mov_planificacion_tramo->setEstado(1);
                            $per_mov_planificacion_tramo->save();
                        }
                    }
                    

                    if ($col_per_mov_planificacion)
                    {
                        //Si el dia no corresponde no entrara en el if que controla y nunca se instanciara el objeto
                        $col_per_mov_planificacion->setHoras($sum_horas_tramo);
                        //$per_mov_planificacion->setHoras($horas_tramo);
                        $col_per_mov_planificacion->save();
                    }
                }
            }
        }
        else
        {
            foreach($col_per_mov_planificacions as $col_per_mov_planificacion)
            {
                if ($col_per_mov_planificacion)
                {
                    //Si el dia no corresponde no entrara en el if que controla y nunca se instanciara el objeto
                    //$per_mov_planificacion->setHoras($sum_horas_tramo);
                    $col_per_mov_planificacion->setHoras($txt_horas);
                    $col_per_mov_planificacion->save();
                }
            }
        }
        
        foreach($arr_explode_persona_id as $persona_id)
        {
            $arr_parametros = array("persona_id" => $persona_id, "fecha" => $fecha_sumada);
            PrcProcesoResumen::execProcesoPerMovimientos($arr_parametros);
            //$arr_parametros = array("persona_id" => $hdn_per_persona_id, "fecha" => $fecha_sumada);
            //PrcProcesoResumen::execProcesoPerMovimientos($arr_parametros);
        }

        $fecha_sumada = Date::sumarDias($fecha, $i);
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>