<?php
//$fecha es del foreach ($arr_dias as $fecha => $arr_dia), el indice del array de fechas y esta en el _uno_fecha
$desde = $fecha;
$hasta = $fecha;
$dia = $desde;
$editado = 0;
$error = 0;

$cantidad_horas = 0;
$cantidad_horas_text = "";
$cantidad_horas_total_por_persona_text = "";
$gral_novedad_codigo_color = "";
$per_mov_planificacion_horas = 0;
$gral_novedad_requiere_movimientos = 0;

$array = PerMovMovimiento::getGrillaCantidadHorasParaCalendario($desde, $hasta, $per_id, $gral_empresa_id);
//Gral::prr($array);

$arr_datos = $array[$co_sector_id][$per_id][$dia];

//Gral::prr($arr_datos);
if (!empty($arr_datos)) {
    $cantidad_horas = $arr_datos[cantidad_horas];
    $error = $arr_datos[error];
    $mensaje = $arr_datos[mensaje];
    $editado = $arr_datos[editado];

    if (!empty($arr_datos[novedades])) {
        foreach ($arr_datos[novedades] as $novedad) {
            $per_mov_planificacion_id = $novedad[per_mov_planificacion_id];
            $per_mov_planificacion_horas = $novedad[per_mov_planificacion_horas];
            $gral_novedad_id = $novedad[gral_novedad_id];

            $cantidad_horas_total_planificacion_por_persona += $per_mov_planificacion_horas;
            $gral_novedad = GralNovedad::getOxId($gral_novedad_id);
            if ($gral_novedad) {
                $gral_novedad_codigo_color = $gral_novedad->getCodigoColor();
                $gral_novedad_laboral = $gral_novedad->getLaboral();
                $gral_novedad_requiere_movimientos = $gral_novedad->getRequiereMovimientos();
                if ($gral_novedad_laboral == 1) {
                    $cantidad_horas_total_planificacion_laboral_por_persona += $per_mov_planificacion_horas;
                }

                $per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
                if ($per_mov_planificacion) {
                    $pln_jornada = $per_mov_planificacion->getPlnJornada();
                    if ($pln_jornada && $pln_jornada->getId() != "null") {
                        //Gral::prr($pln_jornada);
                        $jornada_completa = $pln_jornada->getJornadaCompleta();
                        if ($jornada_completa == 1) {
                            $cant_jornada_completa++;
                        } elseif ($jornada_completa == 0) {
                            $cant_jornada_media++;
                        }
                    }
                }

                $sum_jornada_completa += $cant_jornada_completa;
                $sum_jornada_media += $cant_jornada_media;

                $cant_jornada_completa = 0;
                $cant_jornada_media = 0;

                $arr_datos_novedad_total[$gral_novedad->getCodigo()]["DESCRIPCION"] = $gral_novedad->getDescripcion();
                $arr_datos_novedad_total[$gral_novedad->getCodigo()]["COLOR"] = $gral_novedad_codigo_color;
                $arr_datos_novedad_total[$gral_novedad->getCodigo()]["CANTIDAD"] ++;
                $arr_datos_novedad_total[$gral_novedad->getCodigo()]["HORAS"] += $per_mov_planificacion_horas;
            }
        }

        $arr_datos_pln_jornadas["TOTAL_JORNADA"]["JORNADA_COMPLETA"] = $sum_jornada_completa;
        $arr_datos_pln_jornadas["TOTAL_JORNADA"]["JORNADA_MEDIA"] = $sum_jornada_media;
    } else {
        $arr_datos_novedad_total["SIN-NOVEDAD"]["DESCRIPCION"] = "Sin Novedad";
        $arr_datos_novedad_total["SIN-NOVEDAD"]["COLOR"] = "";
        $arr_datos_novedad_total["SIN-NOVEDAD"]["CANTIDAD"] ++;
    }


    if ($cantidad_horas <= 0) {
        $cantidad_horas_text = "-";
        $cantidad_horas_total_por_persona_text = "-";
    } elseif ($cantidad_horas > 0) {
        //Gral::pr($cantidad_horas, "antes");
        $cantidad_horas_text = $cantidad_horas;

        $cantidad_horas_total_por_persona += $cantidad_horas;

        $cantidad_horas_total_por_persona_text = $cantidad_horas_total_por_persona;
    }

    // -------------------------------------------------------------------------
    // se determina el error
    // -------------------------------------------------------------------------
    if (Date::esRangoValido($desde, date('Y-m-d'))) { // solamente si la fecha es menor a la actual
        if ($gral_novedad_requiere_movimientos == 1 && $per_mov_planificacion_horas > 0) {
            if (($cantidad_horas - $per_mov_planificacion_horas) > 2) {
                $error = 150; // mas horas de las previstas
            }

            if (($per_mov_planificacion_horas - $cantidad_horas) > 1) {
                $error = 151; // menos horas de las previstas
            }

            if ($cantidad_horas == 0) {
                $error = 100; // no tiene movimientos
            }
        }
    }
    // -------------------------------------------------------------------------
} else {
    $cantidad_horas = 0;
    $cantidad_horas_text = "-";
}
?>

<div class ="per-movimiento error-<?php echo $error; ?> " >
    <?php if ($cantidad_horas > 0): ?>
        <div class ="per-movimiento-horas" title="<?php ($cantidad_horas > 0) ? Gral::_echoHoras($cantidad_horas_text, 'hm') : Gral::_echo('-') ?>">

            <?php if ($editado): ?>
                <div class="marca-editado" title="Tiene movimientos editados"></div>
            <?php endif; ?>

            <?php Gral::_echoHoras($cantidad_horas_text) ?>
        </div>
    <?php else: ?>
        <div class ="per-movimiento-sinhoras" title="Sin movimientos">
            -
        </div>
    <?php endif; ?>

    <!-- Inicia Acciones  -->
    <div class="acciones existente">
        <div class='accion adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/per_mov_movimiento_calendario/db_context_acciones.php?persona_id=<?php Gral::_echo($per_id) ?>&fecha=<?php echo $fecha ?>' modulo_metodo_init="setInitPerMovMovimientoCalendario()" >
            <img src='imgs/icon_menu.png' width="12"/>        
        </div>
    </div>
    <!-- Fin Acciones  -->
    
</div>


<?php
if (!empty($arr_datos[novedades]) && false):
    foreach ($arr_datos[novedades] as $novedad):
        $per_mov_planificacion_id = $novedad[per_mov_planificacion_id];
        $per_mov_planificacion_horas = $novedad[per_mov_planificacion_horas];
        $gral_novedad_id = $novedad[gral_novedad_id];
        $per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
        $gral_novedad_comentario = $per_mov_planificacion->getObservacion();
        $gral_novedad = GralNovedad::getOxId($gral_novedad_id);

        if ($gral_novedad):
            $gral_novedad_codigo_color = $gral_novedad->getCodigoColor();
            $gral_novedad_laboral = $gral_novedad->getLaboral();
            $gral_novedad_descripcion = $gral_novedad->getDescripcion();
            $gral_novedad_descripcion_corta = $gral_novedad->getDescripcionCorta();
        endif;
        ?>

        <div class ="gral-novedad " style="background-color: #<?php echo $gral_novedad_codigo_color; ?>">
            
            <?php if (!empty($gral_novedad_comentario)): ?>
                <div class="marca-comentario" title="<?php Gral::_echo($gral_novedad_comentario); ?>"></div>
            <?php endif; ?>
                
            <div class ="gral-novedad-descripcion" title="<?php Gral::_echo($gral_novedad_descripcion) ?> (<?php Gral::_echoHoras($per_mov_planificacion_horas); ?> hs)">
                <?php Gral::_echo($gral_novedad_descripcion_corta) ?>
                
                <?php if($per_mov_planificacion->getConfirmado()): ?>
                <img src='imgs/icn_confirmado.png' width="7"/> 
                <?php endif; ?>
            </div>
                
            <!-- Inicia Acciones  -->
            <div class="acciones existente">
                <div class='accion adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/per_mov_movimiento_calendario/db_context_acciones_planificacion_parcial.php?per_mov_planificacion_id=<?php Gral::_echo($per_mov_planificacion_id) ?>&persona_id=<?php Gral::_echo($per_id) ?>&fecha=<?php echo $fecha ?>' modulo_metodo_init="setInitPerMovMovimientoCalendario()" >
                    <img src='imgs/icon_menu.png' width="12"/>        
                </div>
            </div>
            <!-- Fin Acciones  -->
            
        </div>

        <?php
    endforeach;
endif;
?>